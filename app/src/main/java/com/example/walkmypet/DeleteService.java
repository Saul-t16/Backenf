package com.example.walkmypet;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ListView;
import android.widget.TextView;

import java.util.ArrayList;

public class DeleteService extends AppCompatActivity{
    // Declare variables
    ImageButton PerfilImageButttonIB;
    ImageButton SalirImageButtonIB;

    TextView perfilTextViewTV;
    TextView salirTextViewTV;

    ListView serviciosListViewLV;

    Button eliminarServicioButton;
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

        eliminarServicioButton = findViewById(R.id.eliminarServicioButton);
        atrasButton = findViewById(R.id.atrasButton);


        // Create Services
        Service026 service0261 = new Service026("Paseo");
        Service026 service0262 = new Service026("Peluquería");
        Service026 service0263 = new Service026("Veterinario");
        Service026 service0264 = new Service026("Guardería");
        Service026 service0265 = new Service026("Otros");

        // ArrayList
        ArrayList<Service026> servicesList = new ArrayList<>();
        servicesList.add(service0261);
        servicesList.add(service0262);
        servicesList.add(service0263);
        servicesList.add(service0264);
        servicesList.add(service0265);

        // Adapter
        CustomAdapter026 customAdapter = new CustomAdapter026(this, R.layout.list_item026, servicesList);
        serviciosListViewLV.setAdapter(customAdapter);
    }

}
