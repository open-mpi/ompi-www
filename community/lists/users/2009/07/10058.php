<?
$subject_val = "Re: [OMPI users] Network connection check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 08:40:00 2009" -->
<!-- isoreceived="20090723124000" -->
<!-- sent="Thu, 23 Jul 2009 14:39:55 +0200" -->
<!-- isosent="20090723123955" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network connection check" -->
<!-- id="9b0da5ce0907230539x263f9cb0pc5c0d0c5cf2aecc8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fa4af8200907230436o6fc22552u62b351ac3349b89_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Network connection check<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 08:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10059.php">Prentice Bisbal: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10057.php">Jeff Squyres: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>In reply to:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10060.php">Bogdan Costescu: "Re: [OMPI users] Network connection check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe you could make a system call to ping the other machine.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char sCommand[512];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// build the command string
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sprintf(sCommand, &quot;ping -c %d -q %s &gt; /dev/null&quot;, numPings, sHostName);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// execute the command
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iResult =system(sCommand);
<br>
<p>If the ping was successful, iResult will have the value 0.
<br>
<p>Jody
<br>
<p>On Thu, Jul 23, 2009 at 1:36 PM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 23, 2009 at 3:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It depends on which network fails. If you lose all TCP connectivity, Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI should abort the job as the out-of-band system will detect the loss of
</span><br>
<span class="quotelev2">&gt;&gt; connection. If you only lose the MPI connection (whether TCP or some other
</span><br>
<span class="quotelev2">&gt;&gt; interconnect), then I believe the system will eventually generate an error
</span><br>
<span class="quotelev2">&gt;&gt; after it retries sending the message a specified number of times, though it
</span><br>
<span class="quotelev2">&gt;&gt; may not abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From your reply I came to know that the question I posted earlier was not
</span><br>
<span class="quotelev1">&gt; reflecting the problem properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't use blocking communication routines in my main program (
</span><br>
<span class="quotelev1">&gt; &quot;masterprocess&quot;) because any type of network failure( may be due to physical
</span><br>
<span class="quotelev1">&gt; connectivity or TCP connectivity or MPI connection as you told) may occur.
</span><br>
<span class="quotelev1">&gt; So I am using non blocking point to point communication routines, and TEST
</span><br>
<span class="quotelev1">&gt; later for completion of that Request. Once I enter a TEST loop I will test
</span><br>
<span class="quotelev1">&gt; for Request complition till TIMEOUT. Suppose TIMEOUT has occured, In this
</span><br>
<span class="quotelev1">&gt; case first I will check whether
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;1:&#160; Slave machine is reachable or not,&#160; (How I will do that ??? Given - I
</span><br>
<span class="quotelev1">&gt; have IP address and Host Name of Slave machine.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;2:&#160; if reachable, check whether program(orted and &quot;slaveprocess&quot;) is alive
</span><br>
<span class="quotelev1">&gt; or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't want to abort my master process in case 1 and hope that network
</span><br>
<span class="quotelev1">&gt; connection will come up in future. Fortunately OpenMPI doesn't abort any
</span><br>
<span class="quotelev1">&gt; process. Both processes can run independently without communicating.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10059.php">Prentice Bisbal: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10057.php">Jeff Squyres: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>In reply to:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10060.php">Bogdan Costescu: "Re: [OMPI users] Network connection check"</a>
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
