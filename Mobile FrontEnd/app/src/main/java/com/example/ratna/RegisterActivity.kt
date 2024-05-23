package com.example.ratna

import android.content.Intent
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.ImageView
import android.widget.TextView
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity

class RegisterActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.register_activity)

        val register = findViewById(R.id.btn_register) as ImageView
        val nama = findViewById(R.id.edtxt_namaortu) as EditText
        val nohp = findViewById(R.id.edtxt_nohp1) as EditText
        val password = findViewById(R.id.edtxt_password1) as EditText
        val txtview = findViewById(R.id.txt_login) as TextView

        register.setOnClickListener {
            val nama1 = nama.text.toString()
            val nohp1 = nohp.text.toString()
            val password1 = password.text.toString()

            if (nama1.isEmpty() || nohp1.isEmpty() || password1.isEmpty()){
                Toast.makeText(this,"Mohon Isi Formulir Dengan Lengkap", Toast.LENGTH_SHORT).show()
                return@setOnClickListener
            }

            val intent = Intent(this, LoginActivity::class.java)
            startActivity(intent)
        }
        txtview.setOnClickListener{
            val intent = Intent(this, LoginActivity::class.java)
            startActivity(intent)
        }
    }
}