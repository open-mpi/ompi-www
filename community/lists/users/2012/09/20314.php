<?
$subject_val = "Re: [OMPI users] Problem runing MPI on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 16:43:50 2012" -->
<!-- isoreceived="20120925204350" -->
<!-- sent="Tue, 25 Sep 2012 16:43:45 -0400" -->
<!-- isosent="20120925204345" -->
<!-- name="mariana Vargas" -->
<!-- email="mmarianav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem runing MPI on cluster" -->
<!-- id="54C4924E-AE48-4955-BB71-4FB972C503EE_at_yahoo.com.mx" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="797A25C8-8EA3-4428-8E18-0C8B70D73BFA_at_yahoo.com.mx" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem runing MPI on cluster<br>
<strong>From:</strong> mariana Vargas (<em>mmarianav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 16:43:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20313.php">Jeff Squyres: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20285.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Reply:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I fact I found what is the origin of this problem and it is because  
<br>
all processes have rank 0, so I tested and in effect even when I send  
<br>
the clasical Hello.py give the same, how can I solved this?? Do I  re  
<br>
installed every again???
<br>
<p>Help please...
<br>
<p>Mariana
<br>
<p><p><p>On Sep 24, 2012, at 9:13 PM, Mariana Vargas Magana wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes you are right this is what it says but if fact the weird thing  
</span><br>
<span class="quotelev1">&gt; is that not all times the error message appears&#133;.I send to 20 nodes  
</span><br>
<span class="quotelev1">&gt; and only one gives this message, is this normal&#133;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2012, at 8:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, as it says, your processes called MPI_Init, but at least one  
</span><br>
<span class="quotelev2">&gt;&gt; of them exited without calling MPI_Finalize. That violates the MPI  
</span><br>
<span class="quotelev2">&gt;&gt; rules and we therefore terminate the remaining processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check your code and see how/why you are doing that - you probably  
</span><br>
<span class="quotelev2">&gt;&gt; have a code path whereby a process exits without calling finalize.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2012, at 4:37 PM, mariana Vargas  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mmarianav_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get this error when I run a paralelized python code in a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster, could anyone give me an idea of what is happening? I'am  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new in this Thanks...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun has exited due to process rank 2 with PID 10259 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node f01 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; waits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;init&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;finalize&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dr. Mariana Vargas Magana
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Astroparticule et Cosmologie - Bureau 409B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PHD student- Universit&#233; Denis Diderot-Paris 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10, rue Alice Domon et L&#233;onie Duquet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 75205 Paris Cedex - France
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel. +33 (0)1 57 27 70 32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax. +33 (0)1 57 27 60 71
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mariana_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20314/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20313.php">Jeff Squyres: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20285.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Reply:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
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
