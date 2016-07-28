<?
$subject_val = "Re: [OMPI devel] open ib btl and xrc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 11:43:41 2008" -->
<!-- isoreceived="20080118164341" -->
<!-- sent="Fri, 18 Jan 2008 11:43:03 -0500" -->
<!-- isosent="20080118164303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib btl and xrc" -->
<!-- id="2AB53785-7258-4BFC-A3D0-085EC7FE6D05_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="479041F0.9040301_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] open ib btl and xrc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 11:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="2998.php">Don Kerr: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>In reply to:</strong> <a href="2998.php">Don Kerr: "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3012.php">Gleb Natapov: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Reply:</strong> <a href="3012.php">Gleb Natapov: "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the main savings is that mellanox hardware works better when  
<br>
fewer qp's are open.  I.e., it's a resource issue on the HCA, not  
<br>
necessarily a savings in posting buffers to the qp.
<br>
<p>But it's quite a complicated issue.  :-)
<br>
<p>Gleb has some reservations about XRC; I'll let him expound on them...
<br>
<p><p><p>On Jan 18, 2008, at 1:06 AM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Those pointers were perfect thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It easy to see the benefit of fewer qps (per node instead of per peer)
</span><br>
<span class="quotelev1">&gt; and less consumption of resources the better but I am curious about  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; actual percentage of memory footprint decrease. I am thinking that the
</span><br>
<span class="quotelev1">&gt; largest portion of the footprint comes from the fragments. Do you have
</span><br>
<span class="quotelev1">&gt; any numbers showing the actual memory footprint savings when using  
</span><br>
<span class="quotelev1">&gt; xrc?
</span><br>
<span class="quotelev1">&gt; Just to be clear, I am not asking for you or anyone else to generate
</span><br>
<span class="quotelev1">&gt; these numbers, but if you had them already I would be curious to know
</span><br>
<span class="quotelev1">&gt; the over all savings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Here is paper from openib <a href="http://www.openib.org/archives/nov2007sc/XRC.pdf">http://www.openib.org/archives/nov2007sc/XRC.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt; and here is mvapich presentation
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mvapich.cse.ohio-state.edu/publications/ofa_nov07-mvapich-xrc.pdf">http://mvapich.cse.ohio-state.edu/publications/ofa_nov07-mvapich-xrc.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Button line: XRC decrease number of QPs that ompi opens and as result
</span><br>
<span class="quotelev2">&gt;&gt; decrease ompi's memory footprint.
</span><br>
<span class="quotelev2">&gt;&gt; In the openib paper you may see more details about XRC. If you need  
</span><br>
<span class="quotelev2">&gt;&gt; more
</span><br>
<span class="quotelev2">&gt;&gt; details about XRC implemention
</span><br>
<span class="quotelev2">&gt;&gt; in openib blt , please let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instead
</span><br>
<span class="quotelev2">&gt;&gt; Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After searching, about the only thing I can find on xrc is what it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stands for, can someone explain the benefits of open mpi's use of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xrc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maybe point me to a paper, or both?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="2998.php">Don Kerr: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>In reply to:</strong> <a href="2998.php">Don Kerr: "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3012.php">Gleb Natapov: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Reply:</strong> <a href="3012.php">Gleb Natapov: "Re: [OMPI devel] open ib btl and xrc"</a>
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
