package com.example.ratna

import android.content.Intent
import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import org.xml.sax.HandlerBase
import android.os.Handler
import kotlinx.coroutines.delay

class Splash : AppCompatActivity(){

    lateinit var handler: Handler

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.splash_screen)

        handler = Handler()
        handler.postDelayed({

            val intent = Intent(this, LoginActivity::class.java)
            startActivity(intent)
            finish()
        }, 3000)
    }
}