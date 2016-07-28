<?
$subject_val = "Re: [OMPI users] Sending relatively large messages with high frequency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 18:35:53 2010" -->
<!-- isoreceived="20100225233553" -->
<!-- sent="Fri, 26 Feb 2010 10:35:47 +1100" -->
<!-- isosent="20100225233547" -->
<!-- name="Amr Hassan" -->
<!-- email="amr.abdelaziz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending relatively large messages with high frequency" -->
<!-- id="4b583f3d1002251535m283b8b7akdcd8d46252147467_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B86E175.4030402_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending relatively large messages with high frequency<br>
<strong>From:</strong> Amr Hassan (<em>amr.abdelaziz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 18:35:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12163.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
<li><strong>In reply to:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12160.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Thanks a lot for your support. It was a big help. I found a race condition
<br>
in my code and now the problem is solved.
<br>
<p>Regards,
<br>
Amr
<br>
<p>On Fri, Feb 26, 2010 at 7:45 AM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Amr Hassan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks alot for your reply,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm using blocking Send and Receive. All the clients are sending data
</span><br>
<span class="quotelev2">&gt; &gt; and the server is receive the messages from the clients with
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ANY_SOURCE as the sender. Do you think there is a race condition
</span><br>
<span class="quotelev2">&gt; &gt; near this pattern?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I searched a lot and used totalview but I couldn't detect such case. I
</span><br>
<span class="quotelev2">&gt; &gt; really appreciate if you send me a link or give an example of a possible
</span><br>
<span class="quotelev2">&gt; &gt; race condition in that scenario .
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, when I partition the message into smaller parts (send in sequence
</span><br>
<span class="quotelev2">&gt; &gt; - all the other clients wait until the send finish) it works fine. is
</span><br>
<span class="quotelev2">&gt; &gt; that exclude the race condition?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like, when sending the large messages, you are putting more
</span><br>
<span class="quotelev1">&gt; data into a buffer than it can hold. When you break the messages up into
</span><br>
<span class="quotelev1">&gt;  smaller sizes, you're not overflowing the buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using MPI_Pack, by any chance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice Bisbal
</span><br>
<span class="quotelev1">&gt; Linux Software Support Specialist/System Administrator
</span><br>
<span class="quotelev1">&gt; School of Natural Sciences
</span><br>
<span class="quotelev1">&gt; Institute for Advanced Study
</span><br>
<span class="quotelev1">&gt; Princeton, NJ
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12163.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
<li><strong>In reply to:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12160.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
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
