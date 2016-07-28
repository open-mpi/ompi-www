<?
$subject_val = "Re: [OMPI users] distributed file system";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 12:30:09 2013" -->
<!-- isoreceived="20130516163009" -->
<!-- sent="Thu, 16 May 2013 09:30:02 -0700" -->
<!-- isosent="20130516163002" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] distributed file system" -->
<!-- id="3A2CB9AD-B342-4BAA-9600-84B98DD6C775_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="519506C0.6080105_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 12:30:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21921.php">Gus Correa: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="21919.php">Ralph Castain: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>In reply to:</strong> <a href="21918.php">Gus Correa: "Re: [OMPI users] distributed file system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
<li><strong>Reply:</strong> <a href="21922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 16, 2013, at 9:18 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With the minor caveat that a sentence in the link below
</span><br>
<span class="quotelev1">&gt; still points to o'l LAM.  :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;... when the time comes to patch or otherwise upgrade LAM, ...&quot;
</span><br>
<p>lol - fixed. thx!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have a NFS shared file system,
</span><br>
<span class="quotelev1">&gt; if the architecture and OS are the same across the nodes,
</span><br>
<span class="quotelev1">&gt; if your cluster isn't too big (for NFS latency to have an impact),
</span><br>
<span class="quotelev1">&gt; it is much easier to install Open MPI on the NFS share
</span><br>
<span class="quotelev1">&gt; than to install it on all nodes.
</span><br>
<span class="quotelev1">&gt; One installation only to take care of.
</span><br>
<span class="quotelev1">&gt; Specially if you need different Open MPI builds for different
</span><br>
<span class="quotelev1">&gt; compilers, etc.
</span><br>
<span class="quotelev1">&gt; If you don't have NFS, it is worth to install
</span><br>
<span class="quotelev1">&gt; it beforehand and to use it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope it helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/16/2013 11:38 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 16, 2013, at 11:30 AM, Ralph Castain&lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no, as long as ompi is installed in same location on each machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 16, 2013, at 8:24 AM, Reza Bakhshayeshi&lt;reza.b2008_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do we need distributed file system (like NFS) when running MPI program on multiple machines?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reza
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21921.php">Gus Correa: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="21919.php">Ralph Castain: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>In reply to:</strong> <a href="21918.php">Gus Correa: "Re: [OMPI users] distributed file system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
<li><strong>Reply:</strong> <a href="21922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
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
