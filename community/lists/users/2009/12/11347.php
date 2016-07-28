<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 20:03:43 2009" -->
<!-- isoreceived="20091202010343" -->
<!-- sent="Tue, 1 Dec 2009 18:03:34 -0700" -->
<!-- isosent="20091202010334" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="8222185C-C6F0-4B6B-92BE-D65DF122BC15_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dcf611bd0912011538j7e231f0fqd8a5490ad0b8d234_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn lots of times<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 20:03:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11336.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11360.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11360.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may want to check your limits as defined by the shell/system. I can also run this for as long as I'm willing to let it run, so something else appears to be going on.
<br>
<p><p>On Dec 1, 2009, at 4:38 PM, Nicolas Bock wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 1, 2009 at 16:28, Abhishek Kulkarni &lt;abbyzcool_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 1, 2009 at 6:15 PM, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; After reading Anthony's question again, I am not sure now that we are having
</span><br>
<span class="quotelev2">&gt; &gt; the same problem, but we might. In any case, the attached example programs
</span><br>
<span class="quotelev2">&gt; &gt; trigger the issue of running out of pipes. I don't see how orted could, even
</span><br>
<span class="quotelev2">&gt; &gt; if it was reused. There is only a very limited number of processes running
</span><br>
<span class="quotelev2">&gt; &gt; at any given time. Once slave terminates, how would it still have open
</span><br>
<span class="quotelev2">&gt; &gt; pipes? Shouldn't the total number of open files, or pipes, be very limited
</span><br>
<span class="quotelev2">&gt; &gt; in this situation? And yet, after maybe 20 or so iterations in master.c,
</span><br>
<span class="quotelev2">&gt; &gt; orted complains about running out of pipes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; nick
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of OMPI are you trying it with? I can easily run it up to more
</span><br>
<span class="quotelev1">&gt; than 200 iterations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Also, how many nodes are you running this on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is on one node with 4 cores. I am using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11336.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11360.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11360.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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
