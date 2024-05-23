package com.example.ratna

import android.content.Intent
import android.os.Bundle
import android.util.Log
import android.widget.Button
import android.widget.EditText
import android.widget.ImageView
import android.widget.TextView
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import androidx.appcompat.app.AppCompatDelegate
import com.example.ratna.API.APISet
import com.example.ratna.Model.Auth
import kotlinx.android.synthetic.main.login_acivity.*
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class LoginActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        AppCompatDelegate.setDefaultNightMode(AppCompatDelegate.MODE_NIGHT_NO)
        setContentView(R.layout.login_acivity)

        btn_login.setOnClickListener{
            APILogin()
        }

//        val btn_login = findViewById(R.id.btn_login) as ImageView
//        val nohp = findViewById(R.id.edtxt_nohp) as EditText
//        val password = findViewById(R.id.edtxt_password) as EditText
//        val txtview = findViewById(R.id.txt_register) as TextView
//
//        btn_login.setOnClickListener {
//            val nomorhp = nohp.text.toString()
//            val pw = password.text.toString()
//            if (nomorhp.isEmpty() || pw.isEmpty()){
//                Toast.makeText(this, "Mohon Masukkan Nomor HP dan Password", Toast.LENGTH_SHORT).show()
//                return@setOnClickListener
//            }
//            val intent = Intent(this, DashboardActivity::class.java)
//            startActivity(intent)
//        }
//        txtview.setOnClickListener {
//            val intent = Intent(this, RegisterActivity::class.java)
//            startActivity(intent)
//        }

    }

    private fun APILogin() {
        if (edt_email.text.isEmpty()) {
            edt_email.error = "Diisi dulu bro!"
            edt_email.requestFocus()
        }
        if (edt_password.text.isEmpty()) {
            edt_password.error = "Diisi dulu bro!"
            edt_password.requestFocus()
        }

        APISet.instance.login(edt_email.text.toString(), edt_password.text.toString())
            .enqueue (object : Callback<Auth>{
                override fun onResponse(call: Call<Auth>, response: Response<Auth>) {
                    var responlogin = response.body()!!
                    if(responlogin.Success == 1 ){
                        intent = Intent(this@LoginActivity, DashboardActivity::class.java)
                        intent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP or Intent.FLAG_ACTIVITY_NEW_TASK)
                        startActivity(intent)
                        Toast.makeText(this@LoginActivity, "Halo bro"+responlogin.nama, Toast.LENGTH_SHORT).show()
                    }
                }

                override fun onFailure(call: Call<Auth>, t: Throwable) {
//                    Toast.makeText(this@LoginActivity, "Login Gagal lur", Toast.LENGTH_SHORT).show()
                    Log.e("ERROR",t.message.toString())
                }
            })
    }
}