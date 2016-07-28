<?
$subject_val = "Re: [OMPI users] Sending relatively large messages with high frequency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 14:29:46 2010" -->
<!-- isoreceived="20100225192946" -->
<!-- sent="Fri, 26 Feb 2010 06:29:41 +1100" -->
<!-- isosent="20100225192941" -->
<!-- name="Amr Hassan" -->
<!-- email="amr.abdelaziz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending relatively large messages with high frequency" -->
<!-- id="4b583f3d1002251129y6475da9eh46a1ddda49068a31_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5b7094581002250609j34128b3flabce3af37769761f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-02-25 14:29:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12158.php">Josh Hursey: "Re: [OMPI users] Torque+BCLR+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12156.php">Jeff Squyres: "Re: [OMPI users] Sending relatively large messages with highfrequency"</a>
<li><strong>In reply to:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12156.php">Jeff Squyres: "Re: [OMPI users] Sending relatively large messages with highfrequency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes but only one thread at each client is allowed to use MPI. Also, there is
<br>
a semaphore on the MPI usage.
<br>
<p><p><p>On Fri, Feb 26, 2010 at 1:09 AM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is your code multithreaded?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2010 12:56 AM, &quot;Amr Hassan&quot; &lt;amr.abdelaziz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks alot for your reply,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using blocking Send and Receive. All the clients are sending data and
</span><br>
<span class="quotelev1">&gt; the server is receive the messages from the clients with MPI_ANY_SOURCE as
</span><br>
<span class="quotelev1">&gt; the sender. Do you think there is a race condition near this pattern?
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
<span class="quotelev1">&gt; Also, when I partition the message into smaller parts (send in sequence -
</span><br>
<span class="quotelev1">&gt; all the other clients wait until the send finish) it works fine. is that
</span><br>
<span class="quotelev1">&gt; exclude the race condition?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Amr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;We've seen similar things in our code. In our case it is probably due to
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;race condition....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On Feb 24, 2010 9:36 PM, &quot;Amr Hassan    &quot; &lt;amr.abdelaziz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I'm ...
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12158.php">Josh Hursey: "Re: [OMPI users] Torque+BCLR+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12156.php">Jeff Squyres: "Re: [OMPI users] Sending relatively large messages with highfrequency"</a>
<li><strong>In reply to:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12156.php">Jeff Squyres: "Re: [OMPI users] Sending relatively large messages with highfrequency"</a>
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
