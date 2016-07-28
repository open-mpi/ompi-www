<?
$subject_val = "Re: [OMPI users] MPI_Isend delay";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 19:48:26 2011" -->
<!-- isoreceived="20110714234826" -->
<!-- sent="Thu, 14 Jul 2011 19:48:21 -0400" -->
<!-- isosent="20110714234821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend delay" -->
<!-- id="D004253F-60B2-4797-AA0B-F4133B8319E0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1F648F.20301_at_otter-rsch.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 19:48:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16922.php">Mudassar Majeed: "[OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16920.php">Jeff Squyres: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<li><strong>In reply to:</strong> <a href="16919.php">dave fournier: "[OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16925.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Reply:</strong> <a href="16925.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2011, at 5:50 PM, dave fournier wrote:
<br>
<p><span class="quotelev1">&gt; I have a master-slave setup. I have noticed that when I send a message from the master to the slave
</span><br>
<span class="quotelev1">&gt; processes using MPI_Isend it never gets sent until I encounter an MPI_recv  in the master process.
</span><br>
<p>How are you testing that?
<br>
<p><span class="quotelev1">&gt; As a result rhe slave processes are wasting time waiting for the message.  
</span><br>
<p>Er... I'm not sure I can parse this.  You said that the message doesn't go until the slave calls MPI_Recv.  So I don't quite understand how the slave is wasting time...?
<br>
<p><span class="quotelev1">&gt; If I use MPI_Send
</span><br>
<span class="quotelev1">&gt; instead of MPI_Isend all works fine.  I don't understand what is going on here.
</span><br>
<p>Define &quot;fine&quot; -- can you be a bit more precise about the exact behavior that you want to see, and the behavior that you are seeing, and the difference that MPI_SEND makes vs. MPI_ISEND?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16922.php">Mudassar Majeed: "[OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16920.php">Jeff Squyres: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<li><strong>In reply to:</strong> <a href="16919.php">dave fournier: "[OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16925.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Reply:</strong> <a href="16925.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
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
