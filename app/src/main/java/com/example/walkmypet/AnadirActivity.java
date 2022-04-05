package com.example.walkmypet;

import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.ListAdapter;
import android.widget.ListView;

import androidx.appcompat.app.AppCompatActivity;

public class AnadirActivity extends AppCompatActivity {


    ListView lista;
    String [] textos = {"                                        Paseo", "                                     Peluqueria", "                                     Veterinario", "                                     Guardería", "                                        Otros"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_anadir);

        lista = findViewById(R.id.lista);

        ListAdapter adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, textos);

        lista.setAdapter(adapter);
    }


}