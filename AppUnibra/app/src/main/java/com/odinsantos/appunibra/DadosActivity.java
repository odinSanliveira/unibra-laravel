package com.odinsantos.appunibra;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;


import android.os.Bundle;
import android.util.Log;

import java.util.ArrayList;
import java.util.List;
import java.util.HashMap;

import org.apache.http.NameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.ProgressDialog;
import android.os.AsyncTask;
import android.widget.ListView;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;
import com.odinsantos.appunibra.Model.Dados;

public class DadosActivity extends AppCompatActivity {

    private ProgressDialog pDialog;
    //Criando Json Parser object
    JSONParser jparser = new JSONParser();

    ArrayList<HashMap<String, String>> infoList;
    ListView viewDados;
    private static String url_info = "http://127.0.0.1:8000/";
    private static final String TAG_SUCCESS = "success";
    private static final String TAG_ID = "id";
    private static final String TAG_NOME = "nome";

    JSONArray info = null;
    List<Dados> listaDados;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_dados);
        viewDados = findViewById(R.id.dados);
        listaDados = new ArrayList<>();
        dadosApi();

        infoList = new ArrayList<HashMap<String, String>>();
//        carregando produtos background
//        new LoadAllInfo().execute();






    }

    public void dadosApi(){
        //URL DA API
        String URL = "http://127.0.0.1:8000/";

        Ion.with(DadosActivity.this)
                .load(URL)
                .asJsonArray()
                .setCallback(new FutureCallback<JsonArray>() {
                    @Override
                    //Função de captura do conteúdo de um JSON
                    public void onCompleted(Exception e, JsonArray result) {

                        try{
                            for (int i = 0; i < result.size(); i++){
                                //variável dados salva os dados retornados no Json da API
                                JsonObject dados = result.get(i).getAsJsonObject();

//
//                                log de teste
//                                Log.d("Cnpj", dados.get("cnpj").getAsString());


                            }
                        }catch (Exception erro){
                            Toast.makeText(DadosActivity.this, "Ops! ocorreu um erro", Toast.LENGTH_SHORT).show();

                        }
                    }
                });
    }





    }


}