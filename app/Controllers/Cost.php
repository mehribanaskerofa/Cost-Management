<?php

namespace App\Controllers;

use App\Models\Currency;
use App\Models\Pay;
use App\Models\Payment;

class Cost extends BaseController
{
    public function paymentType()
    {
        return view('payment_type');
    }
    public function paymentTypeSend()
    {
        $data=[
          'payment'=>  $this->request->getPost('payment')
        ];
        $model=new Payment();
        $model->insert($data);

        return view('payment_type');
    }
    public function currency()
    {
        return view('currency');
    }
    public function currencySend()
    {
        $data=[
            'name'=>  $this->request->getPost('name')
        ];
        $model=new Currency();
        $model->insert($data);

        return view('currency');
    }
    public function pay()
    {
        $payment=new Payment();
        $payments=$payment->findAll();
        $currency=new Currency();
        $currencies=$currency->findAll();
        return view('pay',['payments'=>$payments,'currencies'=>$currencies]);
    }
    public function paySend()
    {
        $data=[
            'amount'=>  $this->request->getPost('amount'),
            'payment_id'=>  $this->request->getPost('payment_id'),
            'currency_id'=>  $this->request->getPost('currency_id'),
            'feedback'=>  $this->request->getPost('feedback'),
            'income'=>  $this->request->getPost('income'),
            'expense'=>  $this->request->getPost('expense')
        ];
        $model=new Pay();
        $model->insert($data);

        return redirect()->back();
    }
    public function datas()
    {
        $pay=new Pay();
        $pays=$pay->findAll();
        $payment=new Payment();
        $payments=$payment->findAll();
        $currency=new Currency();
        $currencies=$currency->findAll();

        return view('all_data',['pays'=>$pays,'payments'=>$payments,'currencies'=>$currencies]);
    }

    public function paymentFilter()
    {
        $data = $_POST['pay'];
        $id=$this->request->getPost('payment_id');
        $pays = array_filter($data, function($item) use($id) {
            return $item['payment_id'] == $id;
        });
        return json_encode($pays);
    }
    public function currencyFilter()
    {
        $data = $_POST['pay'];
        $id=$this->request->getPost('currency_id');
        $pays = array_filter($data, function($item) use($id) {
            return $item['currency_id'] == $id;
        });
        return json_encode($pays);
    }
    public function date_filter()
    {
        $pay=new Pay();
        $pays=$pay->where('date',$this->request->getPost('currency_id'))->findAll();
        return view('all_data',['pays'=>$pays]);

    }
}
