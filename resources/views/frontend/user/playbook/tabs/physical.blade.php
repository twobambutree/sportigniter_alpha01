@if(isset($playbook->physical))
  {{ Form::model($playbook->physical, ['route' => ['frontend.user.playbook.physical.update', $playbook->sname], 'class' => 'form-horizontal', 'method' => 'PUT']) }}

  <div class="form-group"> <!--DOB-->
    {{ Form::label('dob', 'Date of Birth', ['class' => 'col-sm-4 control-label']) }}
    <div class="col-sm-4">
      {{Form::date('dob', $playbook->physical->dob)}}
      {{-- {{ Form::select('dob_month', array(
          old('dob_month') ? old('dob_month') : $playbook->physical->dob_month => old('dob_month') ? old('dob_month') : $playbook->physical->dob_month,
          'Jan(1)'      => 'Jan(1)',
          'Fab(2)'     => 'Fab(2)',
          'Mar(3)'     => 'Mar(3)',
          'Apr(4)'     => 'Apr(4)',
          'May(5)'     => 'May(5)',
          'Jun(6)'     => 'Jun(6)',
          'Jul(7)'     => 'Jul(8)',
          'Aug(8)'     => 'Aug(8)',
          'Sep(9)'     => 'Sep(9)',
          'Oct(10)'     => 'Oct(10)',
          'Nov(11)'     => 'Nov(11)',
          'Dec(12)'     => 'Dec(12)',
      ), $playbook->physical->dob_month) }} --}}
      {{-- {{ Form::select('dob_day', array(
        $playbook->physical->dob_day => $playbook->physical->dob_day,
        '01' => '01',
        '02' => '02',
        '03' => '03',
        '04' => '04',
        '05' => '05',
        '06' => '06',
        '07' => '07',
        '08' => '08',
        '09' => '09',
        '10' => '10',
        '11' => '11',
        '12' => '12',
        '13' => '13',
        '14' => '14',
        '15' => '15',
        '16' => '16',
        '17' => '17',
        '18' => '18',
        '19' => '19',
        '20' => '20',
        '21' => '21',
        '22' => '22',
        '23' => '23',
        '24' => '24',
        '25' => '25',
        '26' => '26',
        '27' => '27',
        '28' => '28',
        '29' => '29',
        '30' => '30',
        '31' => '31',
      ), $playbook->physical->dob_day) }} --}}
      {{-- {{ Form::select('dob_year', array(
        $playbook->physical->dob_year => $playbook->physical->dob_year,
        2015 => 2015,
        2014 => 2014,
        2013 => 2013,
        2012 => 2012,
        2011 => 2011,
        2010 => 2010,
        2009 => 2009,
        2008 => 2008,
        2007 => 2007,
        2006 => 2006,
        2005 => 2005,
        2004 => 2004,
        2003 => 2003,
        2002 => 2002,
        2001 => 2001,
        2000 => 2000,
        1999 => 1999,
        1998 => 1998,
        1997 => 1997,
        1996 => 1996,
        1995 => 1995,
        1994 => 1994,
        1993 => 1993,
        1992 => 1992,
        1991 => 1991,
        1990 => 1990,
        1989 => 1989,
        1988 => 1988,
        1987 => 1987,
        1986 => 1986,
        1985 => 1985,
        1984 => 1984,
        1983 => 1983,
        1982 => 1982,
        1981 => 1981,
        1980 => 1980,
        1979 => 1979,
        1978 => 1978,
        1977 => 1977,
        1976 => 1976,
        1975 => 1975,
        1974 => 1974,
        1973 => 1973,
        1972 => 1972,
        1971 => 1971,
        1970 => 1970,
        1969 => 1969,
        1968 => 1968,
        1967 => 1967,
        1966 => 1966,
        1965 => 1965,
        1964 => 1964,
        1963 => 1963,
        1962 => 1962,
        1961 => 1961,
        1960 => 1960,
        1959 => 1959,
        1958 => 1958,
        1957 => 1957,
        1956 => 1956,
        1955 => 1955,
        1954 => 1954,
        1953 => 1953,
        1952 => 1952,
        1951 => 1951,
        1950 => 1950,
        1949 => 1949,
        1948 => 1948,
        1947 => 1947,
        1946 => 1946,
        1945 => 1945,
        1944 => 1944,
        1943 => 1943,
        1942 => 1942,
        1941 => 1941,
        1940 => 1940,
        1939 => 1939,
      ), $playbook->physical->dob_year) }} --}}
    </div>
  </div>

  <div class="form-group"> <!--Gender-->
    {{ Form::label('gender', 'Gender', ['class' => 'col-sm-4 control-label']) }}
    <div class="col-sm-4">
      <div class="row">
        <div class="col-sm-6">
          {{ Form::select('gender', array(
            'Female' => 'Female',
            'Male' => 'Male',
          ), $playbook->physical->gender) }}
        </div>
      </div>
    </div>
  </div>

  <div class="form-group"> <!--Height-->
    {{ Form::label('height_ft', 'Height', ['class' => 'col-sm-4 control-label']) }}
    <div class="col-md-6">
      <div class="row">
        <div class="col-sm-6">
          {{ Form::select('height_ft', array(
              '3ft' => '3ft',
              '4ft' => '4ft',
              '5ft' => '5ft',
              '6ft' => '6ft',
          ), $playbook->physical->height_ft) }}
          {{ Form::select('height_in', array(
              '1in' => '1in',
              '2in' => '2in',
              '3in' => '3in',
              '4in' => '4in',
              '5in' => '5in',
              '6in' => '6in',
              '7in' => '7in',
              '8in' => '8in',
              '9in' => '9in',
              '10in' => '10in',
              '11in' => '11in',
              '12in' => '12in',
          ), $playbook->physical->height_in) }}
        </div>
      </div>
    </div>
  </div>

  <div class="form-group"> <!--Weight-->
    {{ Form::label('weight', 'Weight', ['class' => 'col-sm-4 control-label']) }}
    <div class="col-sm-4">
      {{ Form::input('text', 'weight', $playbook->physical->weight, ['class' => 'form-control', 'placeholder' => 'weight']) }}
    </div>
  </div>

  <div class="form-group"> <!--Button-->
    <div class="col-sm-4 col-sm-offset-4">
      {{-- {{ Form::submit('Add Info', ['class' => 'btn btn-primary', 'id' => 'update-profile']) }} --}}
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>

  {{ csrf_field() }}
  {{ Form::close() }}

@else
{{ Form::model($playbook->physical, ['route' => ['frontend.user.playbook.physical', $playbook->sname], 'class' => 'form-horizontal', 'method' => 'POST']) }}


  <div class="form-group"> <!--DOB-->
    {{ Form::label('dob', 'Date of Birth', ['class' => 'col-sm-4 control-label']) }}
    <div class="col-sm-4">
      {{Form::date('dob')}}
      {{-- {{ Form::select('dob_month', array(
          ''      => null,
          'Jan(1)'      => 'Jan(1)',
          'Fab(2)'     => 'Fab(2)',
          'Mar(3)'     => 'Mar(3)',
          'Apr(4)'     => 'Apr(4)',
          'May(5)'     => 'May(5)',
          'Jun(6)'     => 'Jun(6)',
          'Jul(7)'     => 'Jul(8)',
          'Aug(8)'     => 'Aug(8)',
          'Sep(9)'     => 'Sep(9)',
          'Oct(10)'     => 'Oct(10)',
          'Nov(11)'     => 'Nov(11)',
          'Dec(12)'     => 'Dec(12)',
      ), null) }}
      {{ Form::select('dob_day', array(
        '' => null,
        '01' => '01',
        '02' => '02',
        '03' => '03',
        '04' => '04',
        '05' => '05',
        '06' => '06',
        '07' => '07',
        '08' => '08',
        '09' => '09',
        '10' => '10',
        '11' => '11',
        '12' => '12',
        '13' => '13',
        '14' => '14',
        '15' => '15',
        '16' => '16',
        '17' => '17',
        '18' => '18',
        '19' => '19',
        '20' => '20',
        '21' => '21',
        '22' => '22',
        '23' => '23',
        '24' => '24',
        '25' => '25',
        '26' => '26',
        '27' => '27',
        '28' => '28',
        '29' => '29',
        '30' => '30',
        '31' => '31',
      ), null) }}
      {{ Form::select('dob_month', array(
      0000 => 0000,
      2015 => 2015,
      2014 => 2014,
      2013 => 2013,
      2012 => 2012,
      2011 => 2011,
      2010 => 2010,
      2009 => 2009,
      2008 => 2008,
      2007 => 2007,
      2006 => 2006,
      2005 => 2005,
      2004 => 2004,
      2003 => 2003,
      2002 => 2002,
      2001 => 2001,
      2000 => 2000,
      1999 => 1999,
      1998 => 1998,
      1997 => 1997,
      1996 => 1996,
      1995 => 1995,
      1994 => 1994,
      1993 => 1993,
      1992 => 1992,
      1991 => 1991,
      1990 => 1990,
      1989 => 1989,
      1988 => 1988,
      1987 => 1987,
      1986 => 1986,
      1985 => 1985,
      1984 => 1984,
      1983 => 1983,
      1982 => 1982,
      1981 => 1981,
      1980 => 1980,
      1979 => 1979,
      1978 => 1978,
      1977 => 1977,
      1976 => 1976,
      1975 => 1975,
      1974 => 1974,
      1973 => 1973,
      1972 => 1972,
      1971 => 1971,
      1970 => 1970,
      1969 => 1969,
      1968 => 1968,
      1967 => 1967,
      1966 => 1966,
      1965 => 1965,
      1964 => 1964,
      1963 => 1963,
      1962 => 1962,
      1961 => 1961,
      1960 => 1960,
      1959 => 1959,
      1958 => 1958,
      1957 => 1957,
      1956 => 1956,
      1955 => 1955,
      1954 => 1954,
      1953 => 1953,
      1952 => 1952,
      1951 => 1951,
      1950 => 1950,
      1949 => 1949,
      1948 => 1948,
      1947 => 1947,
      1946 => 1946,
      1945 => 1945,
      1944 => 1944,
      1943 => 1943,
      1942 => 1942,
      1941 => 1941,
      1940 => 1940,
      1939 => 1939,
      ), 0000) }} --}}
    </div>
  </div>


  <div class="form-group"> <!--Height-->
    {{ Form::label('height_ft', 'Height', ['class' => 'col-sm-4 control-label']) }}
    <div class="col-md-6">
      <div class="row">
        <div class="col-sm-6">
          {{ Form::select('height_ft', array(
              'ft' => null,
              '3ft' => '3ft',
              '4ft' => '4ft',
              '5ft' => '5ft',
              '6ft' => '6ft',
          ), null) }}
          {{ Form::select('height_in', array(
              'inchs' => null,
              '1in' => '1in',
              '2in' => '2in',
              '3in' => '3in',
              '4in' => '4in',
              '5in' => '5in',
              '6in' => '6in',
              '7in' => '7in',
              '8in' => '8in',
              '9in' => '9in',
              '10in' => '10in',
              '11in' => '11in',
              '12in' => '12in',
          ), null) }}
        </div>
      </div>
    </div>
  </div>

  <div class="form-group"> <!--Weight-->
    {{ Form::label('weight', 'Weight', ['class' => 'col-sm-4 control-label']) }}
    <div class="col-sm-4">
      {{ Form::input('text', 'weight', null, ['class' => 'form-control', 'placeholder' => 'weight']) }}
    </div>
  </div>

  <div class="form-group"> <!--Button-->
    <div class="col-sm-4 col-sm-offset-4">
      {{-- {{ Form::submit('Add Info', ['class' => 'btn btn-primary', 'id' => 'update-profile']) }} --}}
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>

{{ csrf_field() }}
{{ Form::close() }}
@endif
