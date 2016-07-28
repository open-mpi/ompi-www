<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 15:19:08 2010" -->
<!-- isoreceived="20101025191908" -->
<!-- sent="Mon, 25 Oct 2010 13:18:59 -0600" -->
<!-- isosent="20101025191859" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="SNT134-w254CACF5286D48F237A9F7CB410_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F5D20F4D-4AB2-46FC-9766-6372B6B3A089_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI program cannot complete<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 15:18:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14615.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14613.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>In reply to:</strong> <a href="14595.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ThanksI have downloaded <a href="http://padb.googlecode.com/files/padb-3.0.tgz">http://padb.googlecode.com/files/padb-3.0.tgz</a>
<br>
and compile it.
<br>
But, no user manual, I can not use it by padb -aQ.
<br>
<p>./padb -aQ myjobpadb: Error: --all incompatible with specific ids
<br>
Actually, myjob is running in the queue. 
<br>
Do you have use manual about how to use it ? 
<br>
thanks
<br>
<p><span class="quotelev1">&gt; From: ashley_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Mon, 25 Oct 2010 18:08:32 +0100
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 25 Oct 2010, at 17:26, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, the problem is still there. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I used: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Only process 0 returns. Other processes are still struck in    MPI_Finalize(). 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can use the command &quot;padb -aQ&quot; to show you the message queues for your application, you'll need to download and install padb then simply run your job, allow it to hang and they run padb - it'll show you the message queues for each rank that it can find processes for (the ones that haven't exited).  If this isn't any help run &quot;padb -axt&quot; for the stack traces and send the output to this list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The web-site is in my signature or there is a new beta release out this week at <a href="http://padb.googlecode.com/files/padb-3.2-beta1.tar.gz">http://padb.googlecode.com/files/padb-3.2-beta1.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt; 
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14614/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14615.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14613.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>In reply to:</strong> <a href="14595.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
