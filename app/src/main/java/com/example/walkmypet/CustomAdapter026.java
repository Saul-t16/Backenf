package com.example.walkmypet;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;

import java.util.ArrayList;


public class CustomAdapter026 extends ArrayAdapter{
    Context context;
    int resource;
    ArrayList<Service026> servicesList;


    public CustomAdapter026(@NonNull Context context, int resource, @NonNull ArrayList<Service026> servicesList) {
        super(context, resource, servicesList);

        this.context = context;
        this.resource = resource;
        this.servicesList = servicesList;

    }


    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {

        LayoutInflater layoutInflater = LayoutInflater.from(context);
        View view = layoutInflater.inflate(resource, parent, false);

        TextView nameService = view.findViewById(R.id.nameService);

        nameService.setText(servicesList.get(position).nameService);
        return view;
    }
}
