<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 26 07:38:59 2013" -->
<!-- isoreceived="20130626113859" -->
<!-- sent="Wed, 26 Jun 2013 05:38:54 -0600" -->
<!-- isosent="20130626113854" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAMD57odJb034csPmy+7_2WbPiYqy0gM6io1TwsxC10y5=xiBQw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJGE3zWNnqDVVxMMQc_Uw7aWU3-+85smCD9P+1dVr5wzUwkvOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-26 07:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Previous message:</strong> <a href="22217.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="22216.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22234.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22234.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The root cause of the problem is that you are assigning your host name to
<br>
the loopback device. This is rather unusual, but not forbidden. Normally,
<br>
people would name that interface something like &quot;localhost&quot; since it cannot
<br>
be used to communicate off-node.
<br>
<p>Doing it the way you have could cause problems for you as programs that do
<br>
a lookup to communicate will get the loopback address when they might have
<br>
expected something else. Still, we should handle this case.
<br>
<p>I'll see what we can do
<br>
<p><p><p>On Wed, Jun 26, 2013 at 2:26 AM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 26 June 2013 03:11, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I've been reviewing the code, and I think I'm getting a handle on
</span><br>
<span class="quotelev2">&gt; &gt; the issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to be clear - your hostname resolves to the 127 address? And you
</span><br>
<span class="quotelev1">&gt; are on
</span><br>
<span class="quotelev2">&gt; &gt; a Linux (not one of the BSD flavors out there)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes (but resolves to 127.0.1.1 -- not the usual 127.0.0.1), and yes
</span><br>
<span class="quotelev1">&gt; (Rocks 5.3 ~= CentOS 5.3).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If the answer to both is &quot;yes&quot;, then the problem is that we ignore
</span><br>
<span class="quotelev1">&gt; loopback
</span><br>
<span class="quotelev2">&gt; &gt; devices if anything else is present. When we check to see if the
</span><br>
<span class="quotelev1">&gt; hostname we
</span><br>
<span class="quotelev2">&gt; &gt; were given is the local node, we resolve the name to the address and then
</span><br>
<span class="quotelev2">&gt; &gt; check our list of interfaces. The loopback device is ignored and
</span><br>
<span class="quotelev1">&gt; therefore
</span><br>
<span class="quotelev2">&gt; &gt; not on the list. So if you resolve to the 127 address, we will decide
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt; &gt; is a different node than the one we are on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can modify that logic, but want to ensure this accurately captures the
</span><br>
<span class="quotelev2">&gt; &gt; problem. I'll also have to discuss the change with the other developers
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; ensure we don't shoot ourselves in the foot if we make it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, thanks -- I'll keep an eye on your replies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Riccardo
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22218/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Previous message:</strong> <a href="22217.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="22216.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22234.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22234.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
