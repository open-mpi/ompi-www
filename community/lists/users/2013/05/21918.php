<?
$subject_val = "Re: [OMPI users] distributed file system";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 12:18:13 2013" -->
<!-- isoreceived="20130516161813" -->
<!-- sent="Thu, 16 May 2013 12:18:08 -0400" -->
<!-- isosent="20130516161808" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] distributed file system" -->
<!-- id="519506C0.6080105_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F62692B_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] distributed file system<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 12:18:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21919.php">Ralph Castain: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="21917.php">Qamar Nazir: "[OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>In reply to:</strong> <a href="21915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21920.php">Ralph Castain: "Re: [OMPI users] distributed file system"</a>
<li><strong>Reply:</strong> <a href="21920.php">Ralph Castain: "Re: [OMPI users] distributed file system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the minor caveat that a sentence in the link below
<br>
still points to o'l LAM.  :)
<br>
<p>&quot;... when the time comes to patch or otherwise upgrade LAM, ...&quot;
<br>
<p>If you have a NFS shared file system,
<br>
if the architecture and OS are the same across the nodes,
<br>
if your cluster isn't too big (for NFS latency to have an impact),
<br>
it is much easier to install Open MPI on the NFS share
<br>
than to install it on all nodes.
<br>
One installation only to take care of.
<br>
Specially if you need different Open MPI builds for different
<br>
compilers, etc.
<br>
If you don't have NFS, it is worth to install
<br>
it beforehand and to use it.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p>On 05/16/2013 11:38 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 16, 2013, at 11:30 AM, Ralph Castain&lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;   wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; no, as long as ompi is installed in same location on each machine
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 16, 2013, at 8:24 AM, Reza Bakhshayeshi&lt;reza.b2008_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do we need distributed file system (like NFS) when running MPI program on multiple machines?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reza
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21919.php">Ralph Castain: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="21917.php">Qamar Nazir: "[OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>In reply to:</strong> <a href="21915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21920.php">Ralph Castain: "Re: [OMPI users] distributed file system"</a>
<li><strong>Reply:</strong> <a href="21920.php">Ralph Castain: "Re: [OMPI users] distributed file system"</a>
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
