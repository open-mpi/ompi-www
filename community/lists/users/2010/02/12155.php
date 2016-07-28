<?
$subject_val = "Re: [OMPI users] Sending relatively large messages with high frequency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 09:09:47 2010" -->
<!-- isoreceived="20100225140947" -->
<!-- sent="Thu, 25 Feb 2010 06:09:42 -0800" -->
<!-- isosent="20100225140942" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending relatively large messages with high frequency" -->
<!-- id="5b7094581002250609j34128b3flabce3af37769761f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending relatively large messages with high frequency<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 09:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12156.php">Jeff Squyres: "Re: [OMPI users] Sending relatively large messages with highfrequency"</a>
<li><strong>Previous message:</strong> <a href="12154.php">Jeff Squyres: "Re: [OMPI users] libmpi.so.0 ERROR"</a>
<li><strong>In reply to:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12157.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12157.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is your code multithreaded?
<br>
<p>On Feb 25, 2010 12:56 AM, &quot;Amr Hassan&quot; &lt;amr.abdelaziz_at_[hidden]&gt; wrote:
<br>
<p>Thanks alot for your reply,
<br>
<p>I'm using blocking Send and Receive. All the clients are sending data and
<br>
the server is receive the messages from the clients with MPI_ANY_SOURCE as
<br>
the sender. Do you think there is a race condition near this pattern?
<br>
<p>I searched a lot and used totalview but I couldn't detect such case. I
<br>
really appreciate if you send me a link or give an example of a possible
<br>
race condition in that scenario .
<br>
<p>Also, when I partition the message into smaller parts (send in sequence -
<br>
all the other clients wait until the send finish) it works fine. is that
<br>
exclude the race condition?
<br>
<p><p>Regards,
<br>
Amr
<br>
<p><p><p><p><span class="quotelev2">&gt;&gt;We've seen similar things in our code. In our case it is probably due to a
</span><br>
<p><span class="quotelev2">&gt;&gt;race condition....
</span><br>
<p><p><span class="quotelev2">&gt;&gt;On Feb 24, 2010 9:36 PM, &quot;Amr Hassan    &quot; &lt;amr.abdelaziz_at_[hidden]&gt;
</span><br>
wrote:
<br>
<p><span class="quotelev2">&gt;&gt;Hi All,
</span><br>
<p><span class="quotelev2">&gt;&gt;I'm ...
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12156.php">Jeff Squyres: "Re: [OMPI users] Sending relatively large messages with highfrequency"</a>
<li><strong>Previous message:</strong> <a href="12154.php">Jeff Squyres: "Re: [OMPI users] libmpi.so.0 ERROR"</a>
<li><strong>In reply to:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12157.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12157.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
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
