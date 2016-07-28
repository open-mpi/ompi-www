<?
$subject_val = "Re: [OMPI users] after mpi_finalize(Err)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 10:21:33 2014" -->
<!-- isoreceived="20140720142133" -->
<!-- sent="Sun, 20 Jul 2014 07:20:28 -0700" -->
<!-- isosent="20140720142028" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] after mpi_finalize(Err)" -->
<!-- id="AA26DC0A-4E9A-421D-A61F-AA62928E31A5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y7QoPGSMtFixq3=B0qwMGtD4pwb0yQ6mWhSu+GNnbCM2g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] after mpi_finalize(Err)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-20 10:20:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24822.php">Tobias Kloeffel: "[OMPI users] Help with multirail configuration"</a>
<li><strong>Previous message:</strong> <a href="24820.php">Diego Avesani: "[OMPI users] after mpi_finalize(Err)"</a>
<li><strong>In reply to:</strong> <a href="24820.php">Diego Avesani: "[OMPI users] after mpi_finalize(Err)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 20, 2014, at 7:11 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; I have a question about mpi_finalize.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After mpi_finalize the program returs single core, Have I understand correctly?
</span><br>
<p>No - we don't kill any processes. We just tear down the MPI system. All your processes continue to execute.
<br>
<p><span class="quotelev1">&gt; In this case I do not understand something:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my program I have something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_FINALIZE(rc)
</span><br>
<span class="quotelev1">&gt; write(*,*) &quot;hello world&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, my program write it many times as the number of my processor and I do not understand why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance to everyone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24820.php">http://www.open-mpi.org/community/lists/users/2014/07/24820.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24822.php">Tobias Kloeffel: "[OMPI users] Help with multirail configuration"</a>
<li><strong>Previous message:</strong> <a href="24820.php">Diego Avesani: "[OMPI users] after mpi_finalize(Err)"</a>
<li><strong>In reply to:</strong> <a href="24820.php">Diego Avesani: "[OMPI users] after mpi_finalize(Err)"</a>
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
