<?
$subject_val = "[OMPI users] too much stack size: _silently_ failback to IPoIB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  5 06:32:58 2012" -->
<!-- isoreceived="20121005103258" -->
<!-- sent="Fri, 05 Oct 2012 12:32:53 +0200" -->
<!-- isosent="20121005103253" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] too much stack size: _silently_ failback to IPoIB" -->
<!-- id="506EB755.4030501_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] too much stack size: _silently_ failback to IPoIB<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-05 06:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20417.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Previous message:</strong> <a href="20415.php">Siegmar Gross: "[OMPI users] question to -cpus-to-proc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developer,
<br>
there are often problems with the user limit for the stack size (ulimit -s) on 
<br>
Linux if running Fortran and/or OpenMP(=hybride) programs.
<br>
<p>In one case we have seen the user has set the stack size in his environment by 
<br>
occasion far too high - to about one TeraByte (on nodes with less than 100Gb RAM).
<br>
<p>It turned out that Open MPI (1.6.1) cannot use InfiniBand in this environment 
<br>
(cannot activate IB card / register memory / something else because of lack of 
<br>
virtual memory - all memory reserved for the virtual stack?). The job seem to 
<br>
fail back and run over IPoIB, according to achieved bandwidth.
<br>
<p>The problem was that there was no single word of caution printed out, whereby 
<br>
Open MPI usually warns the user iff an seemingly available high performance 
<br>
network cannot be used, AFAIK. Thus the problem of the user - 15x bandwidth and 
<br>
performance loss - was covered for many weeks and found only by occasion.
<br>
<p>So, what's going wrong [if any]?
<br>
<p>Reproducing: try to set the 'ulimit -s' in your environment to an astronomic 
<br>
value, or use the attached wrapper.
<br>
<p>$MPI_ROOT/bin/mpiexec  -mca oob_tcp_if_include ib0 -mca btl_tcp_if_include ib0 
<br>
-np 2 -H linuxbdc01,linuxbdc02 /home/pk224850/bin/ulimit_high.sh  MPI_FastTest.exe
<br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20416/ulimit_high.sh">ulimit_high.sh</a>
</ul>
<!-- attachment="ulimit_high.sh" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20416/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20417.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Previous message:</strong> <a href="20415.php">Siegmar Gross: "[OMPI users] question to -cpus-to-proc"</a>
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
