<?
$subject_val = "[OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  2 17:21:21 2013" -->
<!-- isoreceived="20130602212121" -->
<!-- sent="Sun, 2 Jun 2013 17:21:16 -0400" -->
<!-- isosent="20130602212116" -->
<!-- name="Derek Teaney" -->
<!-- email="derek.teaney_at_[hidden]" -->
<!-- subject="[OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90" -->
<!-- id="75484C17-46E4-498F-AF99-14A6F7AA1951_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Derek Teaney (<em>derek.teaney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-02 17:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22001.php">Gustavo Correa: "Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>Previous message:</strong> <a href="21999.php">Sabuj Pattanayek: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22001.php">Gustavo Correa: "Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>Reply:</strong> <a href="22001.php">Gustavo Correa: "Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>1) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am getting a frustrating message having to 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do with  linking a simple  fortran program
<br>
<p>Typing 
<br>
<p>/opt/local/lib/openmpi/bin/mpif90 tmp.f
<br>
<p>Yields with gfortran.
<br>
<p>Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;_mpi_get_address0dr4_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in ccGWs06E.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
collect2: error: ld returned 1 exit status
<br>
<p>I have attached the program, which runs fine on a linux box
<br>
<p>

<br><p>
<p><p>2)  The --showme gives
<br>
<p>/opt/local/bin/gfortran-mp-4.8 -I/opt/local/include/openmpi -Wl,-commons,use_dylibs -I/opt/local/lib -L/opt/local/lib -lmpi_usempi -lmpi_mpifh -lmpi
<br>
<p>Using gfortran-4.7 makes no difference.  
<br>
<p>3)  Examining the file  /opt/local/lib/libmpi_usempi.dylib with
<br>
<p>nm libmpi_usempi.dylib | grep 'address0dr4_'
<br>
<p>gives
<br>
<p>0000000000000bf0 T _mpi_address0dr4_
<br>
<p><p>Something I'm missing &#133;. but shouldn't that be mpi_get_address0dr4_
<br>
<p>4/  Changing the USE mpi   command to 
<br>
<p>include 'mpif.h' works just fine.
<br>
<p>Shouldn't they be identical.
<br>
<p><p>

<br><p>
<p><p><p>------------------------------------------------------------------------
<br>
Derek Teaney
<br>
Dept. of Physics &amp; Astronomy
<br>
SUNY at Stony Brook
<br>
Stony Brook, NY 11794-3800
<br>
Tel: (631) 632-4489
<br>
Fax: (631) 632-9718
<br>
e-mail: Derek.Teaney_at_[hidden]
<br>
------------------------------------------------------------------------
<br>
<p><p><p><p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="../../att-22000/test_usempi.f">test_usempi.f</a>
</ul>
<!-- attachment="test_usempi.f" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="../../att-22000/test_mpifh.f">test_mpifh.f</a>
</ul>
<!-- attachment="test_mpifh.f" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22001.php">Gustavo Correa: "Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>Previous message:</strong> <a href="21999.php">Sabuj Pattanayek: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22001.php">Gustavo Correa: "Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>Reply:</strong> <a href="22001.php">Gustavo Correa: "Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
