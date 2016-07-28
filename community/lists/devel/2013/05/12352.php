<?
$subject_val = "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in	Open-MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 21:28:54 2013" -->
<!-- isoreceived="20130503012854" -->
<!-- sent="Fri, 3 May 2013 01:28:16 +0000" -->
<!-- isosent="20130503012816" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in	Open-MPI?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F5F0EC4_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16VYVj0e6RvVK=DOoezEhZkP83B6eyUyvUGKLJsaWZ4pw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in	Open-MPI?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 21:28:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12351.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12350.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know the MPICH guys did a bunch of work to support the Phi's.  I don't know exactly what that means (I haven't read their docs about this stuff), but I suspect that it's more than just launching MPI processes on them...
<br>
<p><p>On May 2, 2013, at 8:54 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not an expert, by any means, but based on a presentation I heard 4 hours ago:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Xeon and Phi instruction sets have a large intersection, but neither is a subset of the other.
</span><br>
<span class="quotelev1">&gt; In particular, Phi has its own SIMD instructions *instead* of Xeon's MMX, SSEn, etc.
</span><br>
<span class="quotelev1">&gt; There is also on CMPXCHG16B instruction on Phi, among others.
</span><br>
<span class="quotelev1">&gt; So, there will need to be different binaries, or &quot;fat&quot; binaries that branch based on CPU type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 2, 2013 at 5:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 2, 2013, at 5:12 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt; &gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The new system we're bringing up has 10 nodes with dual Xeon Phi MIC
</span><br>
<span class="quotelev2">&gt; &gt; cards, are there any plans to support them by launching MPI tasks
</span><br>
<span class="quotelev2">&gt; &gt; directly on the Phis themselves (rather than just as offload devices
</span><br>
<span class="quotelev2">&gt; &gt; for code on the hosts)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had something similar at one time - I developed it for the Roadrunner cluster so you could run MPI tasks on the GPUs. Worked well, but eventually fell into disrepair due to lack of use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, I suspect it will be much easier to do as the Phis appear to be a lot more visible to the host than the GPU did on RR. Looking at the documentation, the Phis just sit directly on the PCIe bus, so they should look just like any other processor, and they are Xeon binary compatible - so there is no issue with tracking which binary to run on which processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice: do the Phis appear in the hwloc topology object?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris: can you run lstopo on one of the nodes and send me the output (off-list)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All the best,
</span><br>
<span class="quotelev2">&gt; &gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt; - --
</span><br>
<span class="quotelev2">&gt; &gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt; &gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev2">&gt; &gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt; &gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev2">&gt; &gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; iEYEARECAAYFAlGDAPYACgkQO2KABBYQAh+y9ACfZ0SdqDuV7Euq3B0ANtxPhH1D
</span><br>
<span class="quotelev2">&gt; &gt; 3h4An1Zlhu2Ut+OFvbTa9xbLBkspwwPY
</span><br>
<span class="quotelev2">&gt; &gt; =TbIy
</span><br>
<span class="quotelev2">&gt; &gt; -----END PGP SIGNATURE-----
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12351.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12350.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
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
