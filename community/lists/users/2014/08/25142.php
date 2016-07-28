<?
$subject_val = "Re: [OMPI users] A daemon on node cl231 failed to start as expected";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 23 12:49:51 2014" -->
<!-- isoreceived="20140823164951" -->
<!-- sent="Sat, 23 Aug 2014 18:49:38 +0200" -->
<!-- isosent="20140823164938" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A daemon on node cl231 failed to start as expected" -->
<!-- id="8F21A4D9-9E8D-4E20-9AE6-04A495A33DC9_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAPdTcQiOGnV1Pb3-eLKbjSHBtVetFsg3ZeuMVywsPipy2EXmvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] A daemon on node cl231 failed to start as expected<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-23 12:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25143.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25141.php">Pengcheng Wang: "[OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>In reply to:</strong> <a href="25141.php">Pengcheng Wang: "[OMPI users] A daemon on node cl231 failed to start as expected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25155.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 23.08.2014 um 16:09 schrieb Pengcheng Wang:
<br>
<p><span class="quotelev1">&gt; I need to run a single driver program that only require one proc with the command mpirun -np 1 ./app or ./app. But it will schedule the launch of other executable files including parallel and sequential computing. So I require more than one proc to run it. It can be run smoothly as an interactive job with the command below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qrsh -cwd -pe &quot;ompi*&quot; 6 -l h_rt=00:30:00,test=true ./app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But after I submitted the job, a strange error occurred and it stopped... Please find the job script and error message below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#149; job submission script:
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -N couple
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -l h_rt=05:00:00
</span><br>
<span class="quotelev1">&gt; #$ -l h_vmem=2G
</span><br>
<p>Is a simple hello_world program listing the threads working? Does it work without the h_vmem limit?
<br>
<p><p><span class="quotelev1">&gt; #$ -o couple.out
</span><br>
<span class="quotelev1">&gt; #$ -pe ompi*  6
</span><br>
<p>Which PEs can be addressed here? What are their allocation rules (looks like you need &quot;$pe_slots&quot;).
<br>
<p>What version of SGE?
<br>
What version of Open MPI?
<br>
Compiled with --with-sge?
<br>
<p>For me it's working in either way.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;     ./app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error message:
</span><br>
<span class="quotelev1">&gt; error: executing task of job 6777095 failed:
</span><br>
<span class="quotelev1">&gt; [cl231:23777] ERROR: A daemon on node cl231 failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [cl231:23777] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [cl231:23777] ERROR: the 'qstat -t' command on the Grid Engine tasks.
</span><br>
<span class="quotelev1">&gt; [cl231:23777] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt; [cl231:23777] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [cl231:23777] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pengcheng
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25141.php">http://www.open-mpi.org/community/lists/users/2014/08/25141.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25143.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25141.php">Pengcheng Wang: "[OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>In reply to:</strong> <a href="25141.php">Pengcheng Wang: "[OMPI users] A daemon on node cl231 failed to start as expected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25155.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
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
