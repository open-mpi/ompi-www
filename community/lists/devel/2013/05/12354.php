<?
$subject_val = "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 22:21:48 2013" -->
<!-- isoreceived="20130503022148" -->
<!-- sent="Thu, 2 May 2013 19:21:39 -0700" -->
<!-- isosent="20130503022139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?" -->
<!-- id="9A068E5C-AECC-4211-A7EA-373854D81F44_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA146Fsb++16OpMgwqPVGthEfi2UUBizPyq_ZdNs5h5-Ang_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 22:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, a few points here. First, the Phi's sadly don't show up in the hwloc tree as they apparently are hidden behind the PCIe bridge. I don't know if there is a way for hwloc to &quot;probe&quot; and find processors on PCI cards, but that's something I'll have to defer to Jeff and Brice.
<br>
<p>So the first problem is: how to know the Phi's are present, how many you have on each node, etc? We could push that into something like the hostfile, but that requires that someone build the file. Still, it would only have to be built once, so maybe that's not too bad - could have a &quot;wildcard&quot; entry if every node is the same, etc.
<br>
<p>Next, we have to launch processes across the PCI bus. We had to do an &quot;rsh&quot; launch of the MPI procs onto RR's cell processors as they appeared to be separate &quot;hosts&quot;, though only visible on the local node (i.e., there was a stripped-down OS running on the cell) - Paul's cmd line implies this may also be the case here. If the same method works here, then we have most of that code still available (needs some updating). We would probably want to look at whether or not binding could be supported on the Phi local OS.
<br>
<p>Finally, we have to wire everything up. This is where RR got a little tricky, and we may encounter the same thing here. On RR, the cell's didn't have direct access to the interconnects - any messaging had to be relayed by a process running on the main cpu. So we had to create the ability to &quot;route&quot; MPI messages from processes running on the cells to processes residing on other nodes.
<br>
<p>Solving the first two is relatively straightforward. In my mind, the primary issue is the last one - does anyone know if a process on the Phi's can &quot;see&quot; interconnects like a TCP NIC or an Infiniband adaptor?
<br>
<p><p>On May 2, 2013, at 6:36 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know Intel MPI (MPICH based) &quot;just works&quot; with Phi, but you need to do things like:
</span><br>
<span class="quotelev1">&gt;    mpirun &#150;n 2 &#150;host cpu host.exe : &#150;n 4 &#150;host mic0 mic.exe
</span><br>
<span class="quotelev1">&gt; if you want to use the Phi for more than just kernel-offload (in which case they won't have/need an MPI rank).
</span><br>
<span class="quotelev1">&gt; So, launch procs is PART of the problem, but certainty not all of it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At least, unlike RR, the processing elements all share the same endianness!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 2, 2013 at 6:28 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I know the MPICH guys did a bunch of work to support the Phi's.  I don't know exactly what that means (I haven't read their docs about this stuff), but I suspect that it's more than just launching MPI processes on them...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 2, 2013, at 8:54 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not an expert, by any means, but based on a presentation I heard 4 hours ago:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The Xeon and Phi instruction sets have a large intersection, but neither is a subset of the other.
</span><br>
<span class="quotelev2">&gt; &gt; In particular, Phi has its own SIMD instructions *instead* of Xeon's MMX, SSEn, etc.
</span><br>
<span class="quotelev2">&gt; &gt; There is also on CMPXCHG16B instruction on Phi, among others.
</span><br>
<span class="quotelev2">&gt; &gt; So, there will need to be different binaries, or &quot;fat&quot; binaries that branch based on CPU type.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, May 2, 2013 at 5:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 2, 2013, at 5:12 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hash: SHA1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi folks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The new system we're bringing up has 10 nodes with dual Xeon Phi MIC
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cards, are there any plans to support them by launching MPI tasks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; directly on the Phis themselves (rather than just as offload devices
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for code on the hosts)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We had something similar at one time - I developed it for the Roadrunner cluster so you could run MPI tasks on the GPUs. Worked well, but eventually fell into disrepair due to lack of use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In this case, I suspect it will be much easier to do as the Phis appear to be a lot more visible to the host than the GPU did on RR. Looking at the documentation, the Phis just sit directly on the PCIe bus, so they should look just like any other processor, and they are Xeon binary compatible - so there is no issue with tracking which binary to run on which processor.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brice: do the Phis appear in the hwloc topology object?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Chris: can you run lstopo on one of the nodes and send me the output (off-list)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; All the best,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Chris
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev3">&gt; &gt; &gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; iEYEARECAAYFAlGDAPYACgkQO2KABBYQAh+y9ACfZ0SdqDuV7Euq3B0ANtxPhH1D
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3h4An1Zlhu2Ut+OFvbTa9xbLBkspwwPY
</span><br>
<span class="quotelev3">&gt; &gt; &gt; =TbIy
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12353.php">Paul Hargrove: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
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
