<?
$subject_val = "Re: [OMPI users] MPI_Isend delay";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 20:33:38 2011" -->
<!-- isoreceived="20110715003338" -->
<!-- sent="Thu, 14 Jul 2011 17:33:30 -0700" -->
<!-- isosent="20110715003330" -->
<!-- name="dave fournier" -->
<!-- email="davef_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend delay" -->
<!-- id="4E1F8ADA.3010109_at_otter-rsch.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D004253F-60B2-4797-AA0B-F4133B8319E0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Isend delay<br>
<strong>From:</strong> dave fournier (<em>davef_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 20:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16924.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Reply:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11-07-14 04:48 PM, Jeff Squyres wrote:
<br>
<p>Sorry I should have said it doesn't get sent until the *master* 
<br>
encounters an MPI_recv.
<br>
Then suddenly the slave finally gets the message and carries on its task.
<br>
<p>I know that the slave is waiting because:
<br>
1.) it doesn't print anything
<br>
2.) I have attached to it with gdb previously to monitor the behaviour.
<br>
<p><span class="quotelev1">&gt; On Jul 14, 2011, at 5:50 PM, dave fournier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a master-slave setup. I have noticed that when I send a message from the master to the slave
</span><br>
<span class="quotelev2">&gt;&gt; processes using MPI_Isend it never gets sent until I encounter an MPI_recv  in the master process.
</span><br>
<span class="quotelev1">&gt; How are you testing that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a result rhe slave processes are wasting time waiting for the message.
</span><br>
<span class="quotelev1">&gt; Er... I'm not sure I can parse this.  You said that the message doesn't go until the slave calls MPI_Recv.  So I don't quite understand how the slave is wasting time...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I use MPI_Send
</span><br>
<span class="quotelev2">&gt;&gt; instead of MPI_Isend all works fine.  I don't understand what is going on here.
</span><br>
<span class="quotelev1">&gt; Define &quot;fine&quot; -- can you be a bit more precise about the exact behavior that you want to see, and the behavior that you are seeing, and the difference that MPI_SEND makes vs. MPI_ISEND?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16924.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Reply:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
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
