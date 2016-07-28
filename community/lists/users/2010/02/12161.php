<?
$subject_val = "Re: [OMPI users] Sending relatively large messages with high	frequency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 15:45:45 2010" -->
<!-- isoreceived="20100225204545" -->
<!-- sent="Thu, 25 Feb 2010 15:45:41 -0500" -->
<!-- isosent="20100225204541" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending relatively large messages with high	frequency" -->
<!-- id="4B86E175.4030402_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending relatively large messages with high	frequency<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 15:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12162.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12160.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12162.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12162.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Amr Hassan wrote:
<br>
<span class="quotelev1">&gt; Thanks alot for your reply,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm using blocking Send and Receive. All the clients are sending data
</span><br>
<span class="quotelev1">&gt; and the server is receive the messages from the clients with
</span><br>
<span class="quotelev1">&gt; MPI_ANY_SOURCE as the sender. Do you think there is a race condition
</span><br>
<span class="quotelev1">&gt; near this pattern? 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I searched a lot and used totalview but I couldn't detect such case. I
</span><br>
<span class="quotelev1">&gt; really appreciate if you send me a link or give an example of a possible
</span><br>
<span class="quotelev1">&gt; race condition in that scenario . 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Also, when I partition the message into smaller parts (send in sequence
</span><br>
<span class="quotelev1">&gt; - all the other clients wait until the send finish) it works fine. is
</span><br>
<span class="quotelev1">&gt; that exclude the race condition?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p>It sounds like, when sending the large messages, you are putting more
<br>
data into a buffer than it can hold. When you break the messages up into
<br>
&nbsp;smaller sizes, you're not overflowing the buffer.
<br>
<p>Are you using MPI_Pack, by any chance?
<br>
<p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12162.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12160.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12162.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12162.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
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
