package com.example.ratna

import android.content.Intent
import android.os.Bundle
import android.widget.ImageView
import androidx.appcompat.app.AppCompatActivity

class DashboardActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.dashboard)

        val profil = findViewById(R.id.imgbtn_profil) as ImageView
        val jadwal = findViewById(R.id.imgbtn_jadwal) as ImageView
        val perkembangan = findViewById(R.id.imgbtn_perkembangan) as ImageView

        profil.setOnClickListener{
            val intent = Intent(this,ProfilActivity::class.java)
            startActivity(intent)
        }
        jadwal.setOnClickListener{
            val intent = Intent(this,JadwalActivity::class.java)
            startActivity(intent)
        }
        perkembangan.setOnClickListener{
            val intent = Intent(this,PerkembanganActivity::class.java)
            startActivity(intent)
        }
    }
}