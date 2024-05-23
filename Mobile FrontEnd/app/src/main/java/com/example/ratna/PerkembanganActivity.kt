package com.example.ratna

import android.content.Intent
import android.media.Image
import android.os.Bundle
import android.widget.ImageView
import androidx.appcompat.app.AppCompatActivity

class PerkembanganActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.perkembangan_activity)

        val profil = findViewById(R.id.imgbtn_prfl) as ImageView

        profil.setOnClickListener{
            val intent = Intent (this, ProfilActivity::class.java)
            startActivity(intent)
        }
    }
}