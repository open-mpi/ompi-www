<?
$subject_val = "[OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  1 17:09:12 2013" -->
<!-- isoreceived="20130401210912" -->
<!-- sent="Mon, 1 Apr 2013 17:09:08 -0400" -->
<!-- isosent="20130401210908" -->
<!-- name="Alan Sayre" -->
<!-- email="ansayre62_at_[hidden]" -->
<!-- subject="[OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2" -->
<!-- id="CAGzRjXYCr8-L5KE1OotTCQy5HU4CL4rPKD9U5tOE7vrYngEC+A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Alan Sayre (<em>ansayre62_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-01 17:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21638.php">Alan Sayre: "Re: [OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="21636.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21638.php">Alan Sayre: "Re: [OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2"</a>
<li><strong>Maybe reply:</strong> <a href="21638.php">Alan Sayre: "Re: [OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have exactly the same problem as reported by Paul Hutton and David O
<br>
Gunter (2012-12-06)
<br>
<p>tail of configure output
<br>
<p>checking Fortran 90 kind of MPI_INTEGER_KIND (selected_int_kind(9))...
<br>
configure: error: Could not determine kind of
<br>
selected_int_kind(MPI_INTEGER_KIND)
<br>
<p>selection from config.log
<br>
<p>configure:53602: gfortran   -o conftest conftestf.f90
<br>
configure:53609: $? = 0
<br>
configure:53649: ./conftest
<br>
./conftest: /usr/lib64/libgfortran.so.3: version `GFORTRAN_1.4' not found
<br>
(required by ./conftest)
<br>
configure:53656: $? = 1
<br>
configure:53665: error: Could not determine kind of
<br>
selected_int_kind(MPI_INTEGER_KIND)
<br>
<p>Unfortunately I don't understand how this was resolved. I checked and the
<br>
/usr/local/gcc-4.7.2/lib64 directory is populated with shared objects
<br>
(including libgfortran.so.3)..
<br>
<p>I used the following commands in a script:
<br>
<p>LD_LIBRARY_PATH=/usr/local/gcc-4.7.2/lib64:$LD_LIBRARY_PATH
<br>
<p>PATH=/usr/local/gcc-4.7.2/bin:$PATH
<br>
<p>./configure --prefix=/usr/local/openmpi-1.6.4 \
<br>
--enable-static
<br>
<p>If it is useful I can attach config.log...
<br>
<p>Thanks,
<br>
<p>Alan
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-21637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21638.php">Alan Sayre: "Re: [OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="21636.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21638.php">Alan Sayre: "Re: [OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2"</a>
<li><strong>Maybe reply:</strong> <a href="21638.php">Alan Sayre: "Re: [OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2"</a>
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
