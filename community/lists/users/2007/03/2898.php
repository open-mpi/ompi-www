<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 10:53:35 2007" -->
<!-- isoreceived="20070323145335" -->
<!-- sent="Fri, 23 Mar 2007 14:53:14 +0000" -->
<!-- isosent="20070323145314" -->
<!-- name="Ricardo Fonseca" -->
<!-- email="ricardo.fonseca_at_[hidden]" -->
<!-- subject="[OMPI users] Problems compiling openmpi 1.2 under AIX 5.2" -->
<!-- id="6CAE2265-FC2B-4216-AF5E-6899B26CEF28_at_ist.utl.pt" -->
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
<strong>From:</strong> Ricardo Fonseca (<em>ricardo.fonseca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 10:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2899.php">Nicolas Niclausse: "Re: [OMPI users] segfault with netpipe &amp; ompi 1.2 + MX (32bit only)"</a>
<li><strong>Previous message:</strong> <a href="2897.php">Tim Prins: "Re: [OMPI users] error in MPI_Waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2913.php">Jeff Squyres: "Re: [OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
<li><strong>Reply:</strong> <a href="2913.php">Jeff Squyres: "Re: [OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys
<br>
<p>I'm having problems compiling openmpi 1.2 under AIX 5.2. Here are the  
<br>
configure parameters:
<br>
<p>./configure  --disable-shared --enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=xlc CXX=xlc++ F77=xlf FC=xlf95
<br>
<p>To get it to work I have to do 2 changes:
<br>
<p>diff -r openmpi-1.2/ompi/mpi/cxx/mpicxx.cc openmpi-1.2-aix/ompi/mpi/ 
<br>
cxx/mpicxx.cc
<br>
34a35,38
<br>
<span class="quotelev1"> &gt; #undef SEEK_SET
</span><br>
<span class="quotelev1"> &gt; #undef SEEK_CUR
</span><br>
<span class="quotelev1"> &gt; #undef SEEK_END
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<p>diff -r openmpi-1.2/orte/mca/pls/poe/pls_poe_module.c openmpi-1.2-aix/ 
<br>
orte/mca/pls/poe/pls_poe_module.c
<br>
636a637,641
<br>
<span class="quotelev1"> &gt; static int pls_poe_cancel_operation(void)
</span><br>
<span class="quotelev1"> &gt; {
</span><br>
<span class="quotelev1"> &gt;     return ORTE_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev1"> &gt; }
</span><br>
<p>This last one means that when you run OpenMPI jobs through POE you  
<br>
get a:
<br>
<p>[r1blade003:381130] [0,0,0] ORTE_ERROR_LOG: Not implemented in file  
<br>
errmgr_hnp.c at line 90
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
mpirun was unable to cleanly terminate the daemons for this job.  
Returned value Not implemented instead of ORTE_SUCCESS.
at the job end.
Keep up the good work, cheers,
Ricardo
---
Prof. Ricardo Fonseca
GoLP - Grupo de Lasers e Plasmas
Centro de F&#237;sica dos Plasmas
Instituto Superior T&#233;cnico
Av. Rovisco Pais
1049-001 Lisboa
Portugal
tel: +351 21 8419202
fax: +351 21 8464455
web: <a href="http://cfp.ist.utl.pt/golp/">http://cfp.ist.utl.pt/golp/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2898/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2899.php">Nicolas Niclausse: "Re: [OMPI users] segfault with netpipe &amp; ompi 1.2 + MX (32bit only)"</a>
<li><strong>Previous message:</strong> <a href="2897.php">Tim Prins: "Re: [OMPI users] error in MPI_Waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2913.php">Jeff Squyres: "Re: [OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
<li><strong>Reply:</strong> <a href="2913.php">Jeff Squyres: "Re: [OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
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
