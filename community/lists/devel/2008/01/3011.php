<?
$subject_val = "Re: [OMPI devel] open ib btl and xrc";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 20 03:37:38 2008" -->
<!-- isoreceived="20080120083738" -->
<!-- sent="Sun, 20 Jan 2008 10:37:31 +0200" -->
<!-- isosent="20080120083731" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib btl and xrc" -->
<!-- id="4793084B.2080307_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-20 03:37:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3012.php">Gleb Natapov: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Previous message:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>In reply to:</strong> <a href="2998.php">Don Kerr: "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; It easy to see the benefit of fewer qps (per node instead of per peer) 
</span><br>
<span class="quotelev1">&gt; and less consumption of resources the better but I am curious about 
</span><br>
<span class="quotelev1">&gt; the actual percentage of memory footprint decrease. I am thinking that 
</span><br>
<span class="quotelev1">&gt; the largest portion of the footprint comes from the fragments.
</span><br>
BTW here is link to another paper 
<br>
<a href="http://www.cs.sandia.gov/~rbbrigh/papers/ompi-ib-pvmmpi07.pdf">http://www.cs.sandia.gov/~rbbrigh/papers/ompi-ib-pvmmpi07.pdf</a>
<br>
that talks about more efficient usage of receive buffers.
<br>
<span class="quotelev1">&gt; Do you have any numbers showing the actual memory footprint savings 
</span><br>
<span class="quotelev1">&gt; when using xrc?
</span><br>
I don't have.
<br>
<p>Pasha.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Here is paper from openib 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.openib.org/archives/nov2007sc/XRC.pdf">http://www.openib.org/archives/nov2007sc/XRC.pdf</a>
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
<span class="quotelev2">&gt;&gt; more details about XRC implemention
</span><br>
<span class="quotelev2">&gt;&gt; in openib blt , please let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instead Don Kerr wrote:
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
<span class="quotelev3">&gt;&gt;&gt; xrc, maybe point me to a paper, or both?
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3012.php">Gleb Natapov: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Previous message:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>In reply to:</strong> <a href="2998.php">Don Kerr: "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
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
