<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 15:56:03 2009" -->
<!-- isoreceived="20091201205603" -->
<!-- sent="Tue, 1 Dec 2009 20:54:49 +0000" -->
<!-- isosent="20091201205449" -->
<!-- name="Belaid MOA" -->
<!-- email="belaid_moa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="COL113-W19B1DBA7819D04581D2ED1F4960_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B157FB6.7000509_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Belaid MOA (<em>belaid_moa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 15:54:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11326.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11326.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11326.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot Gus for you help again. I only have one CPU per node. 
<br>
The -n X option (no matter what the value of X is) shows X processes running on one node only (the other one is free).
<br>
If I add the machinefile option with WN1 and WN2 in it, the right behavior is manifested. According to the documentation,
<br>
mpirun should get the PBS_NODEFILE automatically from the PBS. So, I do not need to use machinefile.
<br>
<p>Any ideas?
<br>
<p>Thanks a lot in advance.
<br>
~Belaid. 
<br>
<p><p><span class="quotelev1">&gt; Date: Tue, 1 Dec 2009 15:42:30 -0500
</span><br>
<span class="quotelev1">&gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Belaid Moa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Belaid MOA wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt; &gt;  Here is another elementary question. I tried the following steps found 
</span><br>
<span class="quotelev2">&gt; &gt; in the FAQ section of www.open-mpi.org with a simple hello world example 
</span><br>
<span class="quotelev2">&gt; &gt; (with PBS/torque):
</span><br>
<span class="quotelev2">&gt; &gt;  $  qsub -l nodes=2 my_script.sh
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; my_script.sh is pasted below:
</span><br>
<span class="quotelev2">&gt; &gt; ========================
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/sh -l
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -N helloTest
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -j eo
</span><br>
<span class="quotelev2">&gt; &gt; echo `cat $PBS_NODEFILE` # shows two nodes: WN1 WN2
</span><br>
<span class="quotelev2">&gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/bin/mpirun hello
</span><br>
<span class="quotelev2">&gt; &gt; ========================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When the job is submitted, only one process is ran. When I add the -n 2 
</span><br>
<span class="quotelev2">&gt; &gt; option to the mpirun command,
</span><br>
<span class="quotelev2">&gt; &gt; two processes are ran but on one node only. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have a single CPU/core per node?
</span><br>
<span class="quotelev1">&gt; Or are they multi-socket/multi-core?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check &quot;man mpiexec&quot; for the options that control on which nodes and
</span><br>
<span class="quotelev1">&gt; slots, etc your program will run.
</span><br>
<span class="quotelev1">&gt; (&quot;Man mpiexec&quot; will tell you more than I possibly can.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default option is &quot;-byslot&quot;,
</span><br>
<span class="quotelev1">&gt; which will use all &quot;slots&quot; (actually cores
</span><br>
<span class="quotelev1">&gt; or CPUs) available on a node before it moves to the next node.
</span><br>
<span class="quotelev1">&gt; Reading your question and your surprise with the result,
</span><br>
<span class="quotelev1">&gt; I would guess what you want is &quot;-bynode&quot; (not the default).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, if you have more than one CPU/core per node,
</span><br>
<span class="quotelev1">&gt; you need to put this information in your Torque/PBS &quot;nodes&quot; file
</span><br>
<span class="quotelev1">&gt; (and restart your pbs_server daemon).
</span><br>
<span class="quotelev1">&gt; Something like this (for 2 CPUs/cores per node):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WN1 np=2
</span><br>
<span class="quotelev1">&gt; WN2 np=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Note that  echo `cat 
</span><br>
<span class="quotelev2">&gt; &gt; $PBS_NODEFILE` outputs
</span><br>
<span class="quotelev2">&gt; &gt; the two nodes I am using: WN1 and WN2.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The output from ompi_info is shown below:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ ompi_info | grep tm
</span><br>
<span class="quotelev2">&gt; &gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Any help on why openMPI/mpirun is using only one PBS node is very 
</span><br>
<span class="quotelev2">&gt; &gt; appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot in advance and sorry for bothering you guys with my 
</span><br>
<span class="quotelev2">&gt; &gt; elementary questions!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ~Belaid. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Windows Live: Keep your friends up to date with what you do online. 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Windows Live: Keep your friends up to date with what you do online.
<br>
<a href="http://go.microsoft.com/?linkid=9691815">http://go.microsoft.com/?linkid=9691815</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11326.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11326.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11326.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
