<?
$subject_val = "Re: [OMPI devel] two questions about 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 13:41:43 2013" -->
<!-- isoreceived="20131122184143" -->
<!-- sent="Fri, 22 Nov 2013 10:41:38 -0800" -->
<!-- isosent="20131122184138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] two questions about 1.7.1" -->
<!-- id="DA5E062A-22F5-4B66-9042-3066F5ED7622_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="528FA038.9000107_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] two questions about 1.7.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 13:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13306.php">Christopher Samuel: "[OMPI devel] Happy Open-MPI day everyone!"</a>
<li><strong>Previous message:</strong> <a href="13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13348.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid Jeff is on vacation until Dec 2nd, Paul, so response will be delayed.
<br>
<p><p>On Nov 22, 2013, at 10:19 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06/19/13 15:26, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; II.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the 1.7.x series, the 'carto' framework has been deleted:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/announce/2013/04/0053.php">http://www.open-mpi.org/community/lists/announce/2013/04/0053.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Removed maffinity, paffinity, and carto frameworks (and associated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MCA params).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there some replacement for this? Or, would Open MPI detect the NUMA structure of nodes automatically?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes.  OMPI uses hwloc internally now to figure this stuff out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Background: Currently we're using the 'carto' framework on our kinda special 'Bull BCS' nodes. Each such node consist of 4 boards with own IB card but build a shared memory system. Clearly, communicating should go over the nearest IB interface - for this we use 'carto' now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It should do this automatically in the 1.7 series.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmm; I see there isn't any verbose output about which devices it picks, though. :-(  Try this patch, and run with --mca btl_base_verbose 100 and see if you see appropriate devices being mapped to appropriate processes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Index: mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- mca/btl/openib/btl_openib_component.c	(revision 28652)
</span><br>
<span class="quotelev2">&gt;&gt; +++ mca/btl/openib/btl_openib_component.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2712,6 +2712,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                  mca_btl_openib_component.ib_num_btls &lt;
</span><br>
<span class="quotelev2">&gt;&gt;                  mca_btl_openib_component.ib_max_btls); i++) {
</span><br>
<span class="quotelev2">&gt;&gt;          if (distance != dev_sorted[i].distance) {
</span><br>
<span class="quotelev2">&gt;&gt; +            BTL_VERBOSE((&quot;openib: skipping device %s; it's too far away&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                         ibv_get_device_name(dev_sorted[i].ib_dev)));
</span><br>
<span class="quotelev2">&gt;&gt;              break;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I've tried this path on actual 1.7.3 (where the code is moved some 12 lines - beginning with 2700).
</span><br>
<span class="quotelev1">&gt; !! - no output &quot;skipping device&quot;! Also when starting main processes and -bind-to-socket used. What I see is
</span><br>
<span class="quotelev2">&gt; &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: found: device mlx4_1, port 1
</span><br>
<span class="quotelev2">&gt; &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: this is not a usnic-capable device
</span><br>
<span class="quotelev2">&gt; &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: found: device mlx4_0, port 1
</span><br>
<span class="quotelev2">&gt; &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: this is not a usnic-capable device
</span><br>
<span class="quotelev1">&gt; .. one message block per process. Is seems that processes see both IB cards in the special nodes(*) but none were disabled, or at least the verbosity path did not worked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, is there any progress on this frontline? Or, can I activate more verbosity / what did I do wrong with the path? (see attached file)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best!
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) the nodes used for testing are also Bull BCS nodes but vonsisting of just two boards instead of 4
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; &lt;btl_openib_component.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13306.php">Christopher Samuel: "[OMPI devel] Happy Open-MPI day everyone!"</a>
<li><strong>Previous message:</strong> <a href="13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13348.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
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
