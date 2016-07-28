<?
$subject_val = "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 08:52:31 2013" -->
<!-- isoreceived="20130506125231" -->
<!-- sent="Mon, 6 May 2013 05:52:23 -0700" -->
<!-- isosent="20130506125223" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers" -->
<!-- id="8E74CFBC-703B-4C41-967A-B76B625BD3C7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="yeg8v3smq1w.fsf_at_carro.ll.iac.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 08:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21855.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool *.la files with references to install dir"</a>
<li><strong>Previous message:</strong> <a href="21853.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>In reply to:</strong> <a href="21853.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2013, at 2:10 AM, Angel de Vicente &lt;angelv_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 4, 2013, at 4:54 PM, Angel de Vicente &lt;angelv_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any way to dump details of what OpenMPI is trying to do in each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node, so I can see if it is looking for different libraries in each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node, or something similar?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for the suggestions, but I'm still stuck:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I do is simply &quot;ssh ompi_info -V&quot; to each remote node and compare
</span><br>
<span class="quotelev2">&gt;&gt; results - you should get the same answer everywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exactly the same information in the three connected machines
</span><br>
<p>So you should then be getting the same libraries
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another option in these situations is to configure
</span><br>
<span class="quotelev2">&gt;&gt; --enable-orterun-prefix-by-default. If you install in the same
</span><br>
<span class="quotelev2">&gt;&gt; location on each node (e.g., on an NSF mount), then this will ensure
</span><br>
<span class="quotelev2">&gt;&gt; you get that same library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Re-configured and re-compiled OpenMPI, but I get the same behaviour. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm starting to think that perhaps is a firewall issue? I don't have
</span><br>
<span class="quotelev1">&gt; root access in these machines but I'll try to investigate.
</span><br>
<p>Given that result, then yes - check iptables. I suspect they are running and TCP socket comm is being blocked.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#193;ngel de Vicente
</span><br>
<span class="quotelev1">&gt; <a href="http://angel-de-vicente.blogspot.com/">http://angel-de-vicente.blogspot.com/</a>
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
<li><strong>Next message:</strong> <a href="21855.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool *.la files with references to install dir"</a>
<li><strong>Previous message:</strong> <a href="21853.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>In reply to:</strong> <a href="21853.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
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
