<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 26 04:27:05 2013" -->
<!-- isoreceived="20130626082705" -->
<!-- sent="Wed, 26 Jun 2013 10:26:40 +0200" -->
<!-- isosent="20130626082640" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAJGE3zWNnqDVVxMMQc_Uw7aWU3-+85smCD9P+1dVr5wzUwkvOw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57ocRBm3_KmNvz_FFnt8p1ve9_fX6SxhBoFZDPzr0CyWtMw_at_mail.gmail.com" -->
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
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-26 04:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22217.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>In reply to:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On 26 June 2013 03:11, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I've been reviewing the code, and I think I'm getting a handle on
</span><br>
<span class="quotelev1">&gt; the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be clear - your hostname resolves to the 127 address? And you are on
</span><br>
<span class="quotelev1">&gt; a Linux (not one of the BSD flavors out there)?
</span><br>
<p>Yes (but resolves to 127.0.1.1 -- not the usual 127.0.0.1), and yes
<br>
(Rocks 5.3 ~= CentOS 5.3).
<br>
<p><p><span class="quotelev1">&gt; If the answer to both is &quot;yes&quot;, then the problem is that we ignore loopback
</span><br>
<span class="quotelev1">&gt; devices if anything else is present. When we check to see if the hostname we
</span><br>
<span class="quotelev1">&gt; were given is the local node, we resolve the name to the address and then
</span><br>
<span class="quotelev1">&gt; check our list of interfaces. The loopback device is ignored and therefore
</span><br>
<span class="quotelev1">&gt; not on the list. So if you resolve to the 127 address, we will decide this
</span><br>
<span class="quotelev1">&gt; is a different node than the one we are on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can modify that logic, but want to ensure this accurately captures the
</span><br>
<span class="quotelev1">&gt; problem. I'll also have to discuss the change with the other developers to
</span><br>
<span class="quotelev1">&gt; ensure we don't shoot ourselves in the foot if we make it.
</span><br>
<p>Ok, thanks -- I'll keep an eye on your replies.
<br>
<p>Thanks,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22217.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>In reply to:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
