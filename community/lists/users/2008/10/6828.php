<?
$subject_val = "Re: [OMPI users] openmpi+sge";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 10:03:28 2008" -->
<!-- isoreceived="20081002140328" -->
<!-- sent="Thu, 2 Oct 2008 16:03:18 +0200" -->
<!-- isosent="20081002140318" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+sge" -->
<!-- id="162A75E3-9D3D-4E72-83D8-86D1067C79C2_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200810021537.16283.jaime.perea_at_igmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi+sge<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-02 10:03:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6827.php">Jaime Perea: "[OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6827.php">Jaime Perea: "[OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Reply:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 02.10.2008 um 15:37 schrieb Jaime Perea:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having some problems with a combination of openmpi+sge6.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently I'm working with the 1.3a1r19666 openmpi release and the
</span><br>
<p>AFAIK, you have to enable SGE support in Open MPI 1.3 during its  
<br>
compilation.
<br>
<p><span class="quotelev1">&gt; myrinet gm libraries (2.1.19)  but the problem was the same with the
</span><br>
<span class="quotelev1">&gt; prior 1.3 version. In short, I'm able to send jobs to a que via qrsh,
</span><br>
<span class="quotelev1">&gt; more or less this way,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; qrsh -cwd -V -q para -pe orte 6 mpirun -np 6 ctiming
</span><br>
<p>It should also work without specifying the number of slots a second  
<br>
time, i.e.:
<br>
<p>qrsh -cwd -V -q para -pe orte 6 mpirun ctiming
<br>
<p><span class="quotelev1">&gt; ctiming is a small test program and in this way it works, but if I  
</span><br>
<span class="quotelev1">&gt; try to
</span><br>
<span class="quotelev1">&gt; send the same task by using qsub on a script like this one
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 6
</span><br>
<p>This PE has just /bin/true for start-/stop_proc_args?
<br>
<p><span class="quotelev1">&gt; #$ -q para
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS  /model/jaime/ctiming
</span><br>
<p>mpirun /model/jaime/ctiming
<br>
<p><span class="quotelev1">&gt; It fails with a message like this,
</span><br>
<span class="quotelev1">&gt; ..............
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error reading job context from &quot;qlogin_starter&quot;
</span><br>
<p>qlogin_starter should of course only be started with a qlogin command  
<br>
in SGE.
<br>
<p><span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; A daemon (pid 11207) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .............
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that LD_LIBRARY_PATH is not the problem,  since I checked  
</span><br>
<span class="quotelev1">&gt; that all
</span><br>
<span class="quotelev1">&gt; the environment is present.... any idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For previous releases of the sge and openmpi I was able to do them  
</span><br>
<span class="quotelev1">&gt; work
</span><br>
<span class="quotelev1">&gt; together with a few wrappers,
</span><br>
<p>Which version of SGE are you using?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; but now the integration looks much better!
</span><br>
<span class="quotelev1">&gt; This happen only when sending openmpi jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and all the best
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Jaime D. Perea Duarte. &lt;jaime at iaa dot es&gt;
</span><br>
<span class="quotelev1">&gt;              Linux registered user #10472
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Dep. Astrofisica Extragalactica.
</span><br>
<span class="quotelev1">&gt;            Instituto de Astrofisica de Andalucia (CSIC)
</span><br>
<span class="quotelev1">&gt;            Apdo. 3004, 18080 Granada, Spain.
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
<li><strong>Next message:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6827.php">Jaime Perea: "[OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6827.php">Jaime Perea: "[OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Reply:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
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
