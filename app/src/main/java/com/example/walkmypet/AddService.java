package com.example.walkmypet;
import android.os.Bundle;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ListView;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

import java.util.ArrayList;
public class AddService extends AppCompatActivity {
    ImageButton PerfilImageButttonIB;
    ImageButton SalirImageButtonIB;

    TextView perfilTextViewTV;
    TextView salirTextViewTV;

    ListView serviciosListViewLV;

    Button anadirServicioButton;
    Button atrasButton;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        PerfilImageButttonIB = findViewById(R.id.PerfilImageButttonIB);
        SalirImageButtonIB = findViewById(R.id.SalirImageButtonIB);

        perfilTextViewTV = findViewById(R.id.perfilTextViewTV);
        salirTextViewTV = findViewById(R.id.salirTextViewTV);

        serviciosListViewLV = findViewById(R.id.serviciosListViewLV);

        anadirServicioButton = findViewById(R.id.anadirServicioButton);
        atrasButton = findViewById(R.id.atrasButton);


        // Create Services
        Service025 service0251 = new Service025("Paseo");
        Service025 service0252 = new Service025("Peluquería");
        Service025 service0253 = new Service025("Veterinario");
        Service025 service0254 = new Service025("Guardería");
        Service025 service0255 = new Service025("Otros");

        // ArrayList
        ArrayList<Service025> servicesList = new ArrayList<>();
        servicesList.add(service0251);
        servicesList.add(service0252);
        servicesList.add(service0253);
        servicesList.add(service0254);
        servicesList.add(service0255);

        // Adapter
        CustomAdapter025 customAdapter = new CustomAdapter025(this, R.layout.list_item025, servicesList);
        serviciosListViewLV.setAdapter(customAdapter);
    }
}
