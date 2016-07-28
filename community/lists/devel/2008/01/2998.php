<?
$subject_val = "Re: [OMPI devel] open ib btl and xrc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 01:06:50 2008" -->
<!-- isoreceived="20080118060650" -->
<!-- sent="Fri, 18 Jan 2008 01:06:40 -0500" -->
<!-- isosent="20080118060640" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib btl and xrc" -->
<!-- id="479041F0.9040301_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="478FAD5D.9020606_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 01:06:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Previous message:</strong> <a href="2997.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Reply:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Reply:</strong> <a href="3011.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Those pointers were perfect thanks.
<br>
<p>It easy to see the benefit of fewer qps (per node instead of per peer) 
<br>
and less consumption of resources the better but I am curious about the 
<br>
actual percentage of memory footprint decrease. I am thinking that the 
<br>
largest portion of the footprint comes from the fragments. Do you have 
<br>
any numbers showing the actual memory footprint savings when using xrc? 
<br>
Just to be clear, I am not asking for you or anyone else to generate 
<br>
these numbers, but if you had them already I would be curious to know 
<br>
the over all savings.
<br>
<p>-DON
<br>
<p>Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Here is paper from openib <a href="http://www.openib.org/archives/nov2007sc/XRC.pdf">http://www.openib.org/archives/nov2007sc/XRC.pdf</a>
</span><br>
<span class="quotelev1">&gt; and here is mvapich presentation 
</span><br>
<span class="quotelev1">&gt; <a href="http://mvapich.cse.ohio-state.edu/publications/ofa_nov07-mvapich-xrc.pdf">http://mvapich.cse.ohio-state.edu/publications/ofa_nov07-mvapich-xrc.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Button line: XRC decrease number of QPs that ompi opens and as result 
</span><br>
<span class="quotelev1">&gt; decrease ompi's memory footprint.
</span><br>
<span class="quotelev1">&gt; In the openib paper you may see more details about XRC. If you need more 
</span><br>
<span class="quotelev1">&gt; details about XRC implemention
</span><br>
<span class="quotelev1">&gt; in openib blt , please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead 
</span><br>
<span class="quotelev1">&gt; Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After searching, about the only thing I can find on xrc is what it 
</span><br>
<span class="quotelev2">&gt;&gt; stands for, can someone explain the benefits of open mpi's use of xrc, 
</span><br>
<span class="quotelev2">&gt;&gt; maybe point me to a paper, or both?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIA
</span><br>
<span class="quotelev2">&gt;&gt; -DON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Previous message:</strong> <a href="2997.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Reply:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Reply:</strong> <a href="3011.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
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
