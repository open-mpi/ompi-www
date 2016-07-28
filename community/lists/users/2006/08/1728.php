<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  8 10:18:30 2006" -->
<!-- isoreceived="20060808141830" -->
<!-- sent="Tue, 08 Aug 2006 16:18:25 +0200" -->
<!-- isosent="20060808141825" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Problems getting openmpi and blacs working" -->
<!-- id="1155046705.4447.82.camel_at_y-boda.hpc2n.umu.se" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-08 10:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1729.php">micki _: "[OMPI users] mpirun only run as root"</a>
<li><strong>Previous message:</strong> <a href="1727.php">Brock Palen: "[OMPI users] network preference"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I've been trying for a while to get openmpi (from 1.0.1 to 1.1.1b4) and
<br>
blacs to work together.
<br>
<p>Everything compiles ok but when running the blacs tests i get errors.
<br>
<p>============
<br>
INTEGER SDRV TESTS: BEGIN.
<br>
<p>PROCESS {   0,   1} REPORTS ERRORS IN TEST#     1:
<br>
&nbsp;&nbsp;&nbsp;Invalid element at A(   1,   1):
<br>
&nbsp;&nbsp;&nbsp;Expected=      640084; Received=      -54412
<br>
&nbsp;&nbsp;&nbsp;Invalid element at A(   2,   1):
<br>
&nbsp;&nbsp;&nbsp;Expected=      683078; Received=          -2
<br>
&nbsp;&nbsp;&nbsp;Invalid element at A(   1,   2):
<br>
&nbsp;&nbsp;&nbsp;Expected=      -54412; Received=     -747635
<br>
&nbsp;&nbsp;&nbsp;Invalid element at A(   2,   2):
<br>
&nbsp;&nbsp;&nbsp;Expected=     -747635; Received=          -2
<br>
PROCESS {   0,   1} DONE ERROR REPORT FOR TEST#     1.
<br>
============
<br>
and others like it. (For 1.0.1 up to 1.1b2 i only got errors in the
<br>
INTEGER AMX and later
<br>
<p>openmpi is compiled with gcc 4.0, MX 1.1.3 on a dual opteron.
<br>
blacs is compiled as per the FAQ from openmpi
<br>
the tests are run all 4 tasks on the same dual node.
<br>
<p>I'm probably doing something stupid somewhere but i'm sofar unable to
<br>
find where and what.
<br>
<p>Exact config params for openmpi are
<br>
export OPT=&quot;-O2 -march=k8&quot;
<br>
export CC=gcc CFLAGS=&quot;$OPT&quot; CXX=g++ CXXFLAGS=&quot;$OPT&quot; F77=g77
<br>
export FFLAGS=&quot;$OPT&quot; FC=gfortran FCFLAGS=&quot;$OPT -ff2c&quot;
<br>
./configure --enable-smp-locks --with-tm=/lap/torque --with-pic
<br>
--enable-cxx-exceptions --with-wrapper-fcflags=-ff2c
<br>
<p>Please assist.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1729.php">micki _: "[OMPI users] mpirun only run as root"</a>
<li><strong>Previous message:</strong> <a href="1727.php">Brock Palen: "[OMPI users] network preference"</a>
<!-- nextthread="start" -->
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
