<?
$subject_val = "Re: [OMPI devel] open ib btl and xrc";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 20 05:53:42 2008" -->
<!-- isoreceived="20080120105342" -->
<!-- sent="Sun, 20 Jan 2008 12:53:33 +0200" -->
<!-- isosent="20080120105333" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib btl and xrc" -->
<!-- id="20080120105333.GC10065_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2AB53785-7258-4BFC-A3D0-085EC7FE6D05_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-20 05:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3013.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="3011.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>In reply to:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3011.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 18, 2008 at 11:43:03AM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think the main savings is that mellanox hardware works better when  
</span><br>
<span class="quotelev1">&gt; fewer qp's are open.  I.e., it's a resource issue on the HCA, not  
</span><br>
<span class="quotelev1">&gt; necessarily a savings in posting buffers to the qp.
</span><br>
Interesting. I hear this justification of XRC for the first time. It's
<br>
always was about decreasing memory consumption. As far as I know from
<br>
the tests we ran here QP cache on Mellanox HCA is small 10-12 QPs, so I
<br>
doubt XRC will help here, but maybe there is another threshold after
<br>
which performance drops even more.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it's quite a complicated issue.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gleb has some reservations about XRC; I'll let him expound on them...
</span><br>
My current &quot;reservations&quot; are not about XRC per se, but about how OFED
<br>
became to be a platform for Mellanox to push things to the world without
<br>
any serious reviews. I don't really care about 10000 things that goes
<br>
into OFED without going into the linux kernel first as long as they are
<br>
not change/define interfaces. Upcoming OFED 1.3 will include XRC interface
<br>
without any feedback from linux kernel developers. What if interface will
<br>
have to be changed in order to be included into the linux kernel? Do you
<br>
remember why PLPA exists? Because some distribution hurried to include
<br>
process affinity before interface was finalized. Same thing are happening
<br>
here. But this discussion is not for this list :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 18, 2008, at 1:06 AM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Those pointers were perfect thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It easy to see the benefit of fewer qps (per node instead of per peer)
</span><br>
<span class="quotelev2">&gt; &gt; and less consumption of resources the better but I am curious about  
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; actual percentage of memory footprint decrease. I am thinking that the
</span><br>
<span class="quotelev2">&gt; &gt; largest portion of the footprint comes from the fragments. Do you have
</span><br>
<span class="quotelev2">&gt; &gt; any numbers showing the actual memory footprint savings when using  
</span><br>
<span class="quotelev2">&gt; &gt; xrc?
</span><br>
<span class="quotelev2">&gt; &gt; Just to be clear, I am not asking for you or anyone else to generate
</span><br>
<span class="quotelev2">&gt; &gt; these numbers, but if you had them already I would be curious to know
</span><br>
<span class="quotelev2">&gt; &gt; the over all savings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -DON
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is paper from openib <a href="http://www.openib.org/archives/nov2007sc/XRC.pdf">http://www.openib.org/archives/nov2007sc/XRC.pdf</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and here is mvapich presentation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://mvapich.cse.ohio-state.edu/publications/ofa_nov07-mvapich-xrc.pdf">http://mvapich.cse.ohio-state.edu/publications/ofa_nov07-mvapich-xrc.pdf</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Button line: XRC decrease number of QPs that ompi opens and as result
</span><br>
<span class="quotelev3">&gt; &gt;&gt; decrease ompi's memory footprint.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In the openib paper you may see more details about XRC. If you need  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; more
</span><br>
<span class="quotelev3">&gt; &gt;&gt; details about XRC implemention
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in openib blt , please let me know.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Instead
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Don Kerr wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; After searching, about the only thing I can find on xrc is what it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; stands for, can someone explain the benefits of open mpi's use of  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; xrc,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; maybe point me to a paper, or both?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; TIA
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -DON
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3013.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="3011.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>In reply to:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3011.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
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
