<?
$subject_val = "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 21:06:33 2013" -->
<!-- isoreceived="20130503010633" -->
<!-- sent="Fri, 03 May 2013 11:06:26 +1000" -->
<!-- isosent="20130503010626" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?" -->
<!-- id="51830D92.6020201_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16176AA6-2106-43FF-8A4B-CCFD07D01F3E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 21:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12352.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in	Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12350.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12349.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12357.php">Brice Goglin: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 03/05/13 10:47, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We had something similar at one time - I developed it for the 
</span><br>
<span class="quotelev1">&gt; Roadrunner cluster so you could run MPI tasks on the GPUs. Worked 
</span><br>
<span class="quotelev1">&gt; well, but eventually fell into disrepair due to lack of use.
</span><br>
<p>OK, interesting!   RR was Cell rather than GPU though wasn't it?
<br>
<p><span class="quotelev1">&gt; In this case, I suspect it will be much easier to do as the Phis 
</span><br>
<span class="quotelev1">&gt; appear to be a lot more visible to the host than the GPU did on RR.
</span><br>
<span class="quotelev1">&gt;  Looking at the documentation, the Phis just sit directly on the
</span><br>
<span class="quotelev1">&gt; PCIe bus, so they should look just like any other processor,
</span><br>
<p>Yup, they show up in lspci:
<br>
<p>[root_at_barcoo061 ~]# lspci -d 8086:2250
<br>
2a:00.0 Co-processor: Intel Corporation Device 2250 (rev 11)
<br>
90:00.0 Co-processor: Intel Corporation Device 2250 (rev 11)
<br>
<p><span class="quotelev1">&gt; and they are Xeon binary compatible - so there is no issue with 
</span><br>
<span class="quotelev1">&gt; tracking which binary to run on which processor.
</span><br>
<p>Sadly they're not binary compatible, you have to cross-compile for
<br>
them (or compile on the Phi itself).
<br>
<p>I haven't got any further than have xCAT install the (rebuilt) kernel
<br>
module so far, so I can't log into them yet.
<br>
<p><span class="quotelev1">&gt; Brice: do the Phis appear in the hwloc topology object?
</span><br>
<p>They appear in lstopo as mic0 and mic1.
<br>
<p><span class="quotelev1">&gt; Chris: can you run lstopo on one of the nodes and send me the
</span><br>
<span class="quotelev1">&gt; output (off-list)?
</span><br>
<p>One of the hosts?  Not a problem, will do.
<br>
<p>All the best!
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlGDDZIACgkQO2KABBYQAh/TUQCgh29RPf5FM3PWe/p/qpMW3wGX
<br>
ZaUAn0uxw8i/BZxXDOFXQZIyY1rn4/zm
<br>
=zock
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12352.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in	Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12350.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12349.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12357.php">Brice Goglin: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
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
