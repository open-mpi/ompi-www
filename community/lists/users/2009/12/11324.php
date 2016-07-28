<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 15:42:39 2009" -->
<!-- isoreceived="20091201204239" -->
<!-- sent="Tue, 01 Dec 2009 15:42:30 -0500" -->
<!-- isosent="20091201204230" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="4B157FB6.7000509_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="COL113-W102298CA9F8285EB42B11F4960_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun is using one PBS node only<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 15:42:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11323.php">Belaid MOA: "[OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11323.php">Belaid MOA: "[OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Belaid Moa
<br>
<p>Belaid MOA wrote:
<br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;  Here is another elementary question. I tried the following steps found 
</span><br>
<span class="quotelev1">&gt; in the FAQ section of www.open-mpi.org with a simple hello world example 
</span><br>
<span class="quotelev1">&gt; (with PBS/torque):
</span><br>
<span class="quotelev1">&gt;  $  qsub -l nodes=2 my_script.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my_script.sh is pasted below:
</span><br>
<span class="quotelev1">&gt; ========================
</span><br>
<span class="quotelev1">&gt; #!/bin/sh -l
</span><br>
<span class="quotelev1">&gt; #PBS -N helloTest
</span><br>
<span class="quotelev1">&gt; #PBS -j eo
</span><br>
<span class="quotelev1">&gt; echo `cat $PBS_NODEFILE` # shows two nodes: WN1 WN2
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun hello
</span><br>
<span class="quotelev1">&gt; ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the job is submitted, only one process is ran. When I add the -n 2 
</span><br>
<span class="quotelev1">&gt; option to the mpirun command,
</span><br>
<span class="quotelev1">&gt; two processes are ran but on one node only. 
</span><br>
<p>Do you have a single CPU/core per node?
<br>
Or are they multi-socket/multi-core?
<br>
<p>Check &quot;man mpiexec&quot; for the options that control on which nodes and
<br>
slots, etc your program will run.
<br>
(&quot;Man mpiexec&quot; will tell you more than I possibly can.)
<br>
<p>The default option is &quot;-byslot&quot;,
<br>
which will use all &quot;slots&quot; (actually cores
<br>
or CPUs) available on a node before it moves to the next node.
<br>
Reading your question and your surprise with the result,
<br>
I would guess what you want is &quot;-bynode&quot; (not the default).
<br>
<p>Also, if you have more than one CPU/core per node,
<br>
you need to put this information in your Torque/PBS &quot;nodes&quot; file
<br>
(and restart your pbs_server daemon).
<br>
Something like this (for 2 CPUs/cores per node):
<br>
<p>WN1 np=2
<br>
WN2 np=2
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><span class="quotelev1">&gt; Note that  echo `cat 
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE` outputs
</span><br>
<span class="quotelev1">&gt; the two nodes I am using: WN1 and WN2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output from ompi_info is shown below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info | grep tm
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Any help on why openMPI/mpirun is using only one PBS node is very 
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot in advance and sorry for bothering you guys with my 
</span><br>
<span class="quotelev1">&gt; elementary questions!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~Belaid. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Windows Live: Keep your friends up to date with what you do online. 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11323.php">Belaid MOA: "[OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11323.php">Belaid MOA: "[OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
