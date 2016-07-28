<?
$subject_val = "Re: [OMPI users] Sending relatively large messages with high frequency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 03:56:30 2010" -->
<!-- isoreceived="20100225085630" -->
<!-- sent="Thu, 25 Feb 2010 19:56:25 +1100" -->
<!-- isosent="20100225085625" -->
<!-- name="Amr Hassan" -->
<!-- email="amr.abdelaziz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending relatively large messages with high frequency" -->
<!-- id="4b583f3d1002250056g61a01701hb82a8f86f810432d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Sending relatively large messages with high frequency" -->
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
<strong>Date:</strong> 2010-02-25 03:56:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12153.php">Abhra Paul: "[OMPI users] libmpi.so.0 ERROR"</a>
<li><strong>Previous message:</strong> <a href="12151.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Maybe in reply to:</strong> <a href="12149.php">Amr Hassan: "[OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12156.php">Jeff Squyres: "Re: [OMPI users] Sending relatively large messages with highfrequency"</a>
<li><strong>Reply:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks alot for your reply,
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
<p><p><span class="quotelev2">&gt;&gt;We've seen similar things in our code. In our case it is probably due to a
</span><br>
<p><span class="quotelev2">&gt;&gt;race condition. Try running the segv'ing process in a debugger, and it
</span><br>
will
<br>
<span class="quotelev2">&gt;&gt;likely show you a bug in your code
</span><br>
<p><span class="quotelev2">&gt;&gt;On Feb 24, 2010 9:36 PM, &quot;Amr Hassan    &quot; &lt;amr.abdelaziz_at_[hidden]&gt;
</span><br>
wrote:
<br>
<p><span class="quotelev2">&gt;&gt;Hi All,
</span><br>
<p><span class="quotelev2">&gt;&gt;I'm facing a strange problem with OpenMPI.
</span><br>
<p><span class="quotelev2">&gt;&gt;I'm developing an application which is required to send a message from
</span><br>
each
<br>
<span class="quotelev2">&gt;&gt;client (1 MB each) to a server node for around 10 times per second (it's a
</span><br>
<p><span class="quotelev2">&gt;&gt;distributed render application and I'm trying to reach a higher frame rate
</span><br>
<p><span class="quotelev2">&gt;&gt;). The problem is that OpenMPI crash in that case and only works if I
</span><br>
<span class="quotelev2">&gt;&gt;partition this messages into a set of 20 k sub-messages with a sleep
</span><br>
between
<br>
<span class="quotelev2">&gt;&gt;each one of them for around 1 to 10 ms!! This solution is very expensive
</span><br>
in
<br>
<span class="quotelev2">&gt;&gt;term of time needed to send the data. Is there any other solutions?
</span><br>
<p><span class="quotelev2">&gt;&gt;The error i got now is:
</span><br>
<span class="quotelev2">&gt;&gt;Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;Failing at address: xxxxxxxxxxxxx
</span><br>
<p><span class="quotelev2">&gt;&gt;The OS is Linux CentOS. I'm using the latest version of OpenMPI.
</span><br>
<p><span class="quotelev2">&gt;&gt;I appreciate any help regarding that.
</span><br>
<p><span class="quotelev2"> &gt;&gt;Regards,
</span><br>
<span class="quotelev2">&gt;&gt;Amr
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12153.php">Abhra Paul: "[OMPI users] libmpi.so.0 ERROR"</a>
<li><strong>Previous message:</strong> <a href="12151.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Maybe in reply to:</strong> <a href="12149.php">Amr Hassan: "[OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12156.php">Jeff Squyres: "Re: [OMPI users] Sending relatively large messages with highfrequency"</a>
<li><strong>Reply:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
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
