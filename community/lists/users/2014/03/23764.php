<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 01:40:56 2014" -->
<!-- isoreceived="20140304064056" -->
<!-- sent="Tue, 04 Mar 2014 07:40:56 +0100" -->
<!-- isosent="20140304064056" -->
<!-- name="Bernd Dammann" -->
<!-- email="bd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="53157578.30509_at_cc.dtu.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140301234416.GE20075_at_sillage.bis.pasteur.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Bernd Dammann (<em>bd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 01:40:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23765.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23763.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23731.php">Tru Huynh: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23767.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/2/14 0:44 AM, Tru Huynh wrote:
<br>
<span class="quotelev1">&gt; On Fri, Feb 28, 2014 at 08:49:45AM +0100, Bernd Dammann wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I should say, that we moved from SL 6.1 and OMPI 1.4.x to SL
</span><br>
<span class="quotelev2">&gt;&gt; 6.4 with the above kernel, and OMPI 1.6.5 - which means a major
</span><br>
<span class="quotelev2">&gt;&gt; upgrade of our cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After the upgrade, users reported those slowdowns, and a search on
</span><br>
<span class="quotelev2">&gt;&gt; this list showed, that other sites had the same (or similar issues)
</span><br>
<span class="quotelev2">&gt;&gt; with this kernel and OMPI version combination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; afaik, 2.6.32-431 series is from RHEL(and clones) version &gt;=6.5
</span><br>
<p>You're right - the kernel is coming from the rolling release of SL.
<br>
<p><span class="quotelev1">&gt; otoh, it might be related to <a href="http://bugs.centos.org/view.php?id=6949">http://bugs.centos.org/view.php?id=6949</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thanks!!!  That was exactly the problem.  We patched the kernel and 
<br>
installed it on a few nodes, and so far testing looks promising.  We had 
<br>
the kernel scheduler on our radar, since we could see that there were 
<br>
differences compared to the old kernel we'd used before, but didn't have 
<br>
time to dig deeper into it, yet.  Great work!  Let's hope this patch 
<br>
will make it into the official kernel.
<br>
<p>Regards,
<br>
Bernd
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23765.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23763.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23731.php">Tru Huynh: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23767.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
