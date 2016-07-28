<?
$subject_val = "Re: [OMPI users] Sending relatively large messages with highfrequency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 09:40:17 2010" -->
<!-- isoreceived="20100225144017" -->
<!-- sent="Thu, 25 Feb 2010 09:40:06 -0500" -->
<!-- isosent="20100225144006" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending relatively large messages with highfrequency" -->
<!-- id="7FBE14F0-1DAA-4847-B672-CF7E64B92DC4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4b583f3d1002250056g61a01701hb82a8f86f810432d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending relatively large messages with highfrequency<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 09:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12157.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2010, at 3:56 AM, Amr Hassan wrote:
<br>
<p><span class="quotelev1">&gt; Thanks alot for your reply,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm using blocking Send and Receive. All the clients are sending data and the server is receive the messages from the clients with MPI_ANY_SOURCE as the sender. Do you think there is a race condition near this pattern? 
</span><br>
<p>MPI_ANY_SOURCE can definitely lead to race conditions / messages (and content) from unexpected sources.  Try using explicit sources, if possible.
<br>
<p><span class="quotelev1">&gt; I searched a lot and used totalview but I couldn't detect such case. I really appreciate if you send me a link or give an example of a possible race condition in that scenario . 
</span><br>
<p>You might want to let it run to segv in TV and see exactly where the segv occurs in your code.  Is your code processing what it thinks is message A but is really message B?  If the content (and therefore the processing of) B is different than A, then assumptions can go badly in your code and Bad Things may happen.
<br>
<p><span class="quotelev1">&gt; Also, when I partition the message into smaller parts (send in sequence - all the other clients wait until the send finish) it works fine. is that exclude the race condition?
</span><br>
<p>No.  It somewhat suggests that you do have a race condition.
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
<li><strong>Next message:</strong> <a href="12157.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
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
