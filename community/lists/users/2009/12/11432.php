<?
$subject_val = "Re: [OMPI users] MPI_Barrier() consuming CPU cycles";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 19:37:53 2009" -->
<!-- isoreceived="20091205003753" -->
<!-- sent="Fri, 4 Dec 2009 19:37:48 -0500" -->
<!-- isosent="20091205003748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Barrier() consuming CPU cycles" -->
<!-- id="99793218-2690-45C7-8E79-988E6502EC86_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dcf611bd0912041554n43761649uce3fa8936ac02ccd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Barrier() consuming CPU cycles<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 19:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11433.php">Nicolas Bock: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Previous message:</strong> <a href="11431.php">Nicolas Bock: "[OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>In reply to:</strong> <a href="11431.php">Nicolas Bock: "[OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11433.php">Nicolas Bock: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Reply:</strong> <a href="11433.php">Nicolas Bock: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2009, at 6:54 PM, Nicolas Bock wrote:
<br>
<p><span class="quotelev1">&gt; in our code we use a very short front-end program to drive a larger set of codes that do our calculations. Right in the beginning of the front-end, we have an if() statement such that only the rank 0 front-end does something, and the other ranks go right away to an MPI_Barrier() statement, waiting for the rank 0 front-end to finish. The rank 0 front-end then goes ahead and does its thing by calling the other codes with MPI_Comm_spawn().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We noticed that the rank &gt; 0 copies of the front-end consume a lot of CPU while they are waiting at the MPI_Barrier(). This is obviously not what we had intended. From previous discussion on this list I understand that the CPU consumption stems from the aggressive polling frequency of the MPI_Barrier() function. While I understand that there are a lot of situations where a high polling frequency in MPI_Barrier() is useful, the situation we are in is not one of them.
</span><br>
<p>Understood.
<br>
<p><span class="quotelev1">&gt; Is our master and slave programming model such an unusual way of using MPI?
</span><br>
<p>Define &quot;unusual&quot;.  :-)
<br>
<p>MPI applications tend to be home-grown and very specific to individual problems that they are trying to solve.  *Most* MPI applications are trying to get the lowest latency (perhaps it's more accurate to say &quot;the most discussed/cited MPI applications&quot;).  As such, we designed Open MPI to get that lowest latency -- and that's by polling.  :-\  I can't speak for other MPI implementations, but I believe that most of them will do similar things.
<br>
<p>Some users don't necessarily want rock-bottom latency; they want features like what you want (e.g., true blocking in MPI blocking functions).  At the moment, Open MPI doesn't cater to those requirements.  We've had a lot of discussions over the years on this specific feature and we have some pretty good ideas how to do it.  But the priority of this hasn't really ever percolated up high enough for someone to start actually working on it.  :-\
<br>
<p>So I wouldn't characterize your application as &quot;unusual&quot; -- *every* MPI app is unusual.  I would say that your requirement for not consuming CPU while in a blocking MPI function is in the minority.
<br>
<p>There were a few suggestions posted earlier today on how to be creative and get around these implementation artifacts -- perhaps they might be useful to you...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11433.php">Nicolas Bock: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Previous message:</strong> <a href="11431.php">Nicolas Bock: "[OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>In reply to:</strong> <a href="11431.php">Nicolas Bock: "[OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11433.php">Nicolas Bock: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Reply:</strong> <a href="11433.php">Nicolas Bock: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
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
