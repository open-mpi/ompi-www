<?
$subject_val = "Re: [OMPI devel] two questions about 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 13:19:41 2013" -->
<!-- isoreceived="20131122181941" -->
<!-- sent="Fri, 22 Nov 2013 19:19:36 +0100" -->
<!-- isosent="20131122181936" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] two questions about 1.7.1" -->
<!-- id="528FA038.9000107_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F690545_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 13:19:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13305.php">Ralph Castain: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13305.php">Ralph Castain: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="13305.php">Ralph Castain: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13348.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On 06/19/13 15:26, Jeff Squyres (jsquyres) wrote:
<br>
...
<br>
<span class="quotelev2">&gt;&gt; II.
</span><br>
<span class="quotelev2">&gt;&gt; In the 1.7.x series, the 'carto' framework has been deleted:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/announce/2013/04/0053.php">http://www.open-mpi.org/community/lists/announce/2013/04/0053.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Removed maffinity, paffinity, and carto frameworks (and associated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MCA params).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some replacement for this? Or, would Open MPI detect the NUMA structure of nodes automatically?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  OMPI uses hwloc internally now to figure this stuff out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Background: Currently we're using the 'carto' framework on our kinda special 'Bull BCS' nodes. Each such node consist of 4 boards with own IB card but build a shared memory system. Clearly, communicating should go over the nearest IB interface - for this we use 'carto' now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should do this automatically in the 1.7 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm; I see there isn't any verbose output about which devices it picks, though. :-(  Try this patch, and run with --mca btl_base_verbose 100 and see if you see appropriate devices being mapped to appropriate processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- mca/btl/openib/btl_openib_component.c	(revision 28652)
</span><br>
<span class="quotelev1">&gt; +++ mca/btl/openib/btl_openib_component.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -2712,6 +2712,8 @@
</span><br>
<span class="quotelev1">&gt;                   mca_btl_openib_component.ib_num_btls &lt;
</span><br>
<span class="quotelev1">&gt;                   mca_btl_openib_component.ib_max_btls); i++) {
</span><br>
<span class="quotelev1">&gt;           if (distance != dev_sorted[i].distance) {
</span><br>
<span class="quotelev1">&gt; +            BTL_VERBOSE((&quot;openib: skipping device %s; it's too far away&quot;,
</span><br>
<span class="quotelev1">&gt; +                         ibv_get_device_name(dev_sorted[i].ib_dev)));
</span><br>
<span class="quotelev1">&gt;               break;
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<p>Well, I've tried this path on actual 1.7.3 (where the code is moved some 12 
<br>
lines - beginning with 2700).
<br>
!! - no output &quot;skipping device&quot;! Also when starting main processes and 
<br>
-bind-to-socket used. What I see is
<br>
<span class="quotelev1"> &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: found: device mlx4_1, port 1
</span><br>
<span class="quotelev1"> &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: this is not a usnic-capable device
</span><br>
<span class="quotelev1"> &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: found: device mlx4_0, port 1
</span><br>
<span class="quotelev1"> &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: this is not a usnic-capable device
</span><br>
.. one message block per process. Is seems that processes see both IB cards in 
<br>
the special nodes(*) but none were disabled, or at least the verbosity path did 
<br>
not worked.
<br>
<p>Well, is there any progress on this frontline? Or, can I activate more verbosity 
<br>
/ what did I do wrong with the path? (see attached file)
<br>
<p>Best!
<br>
Paul Kapinos
<br>
<p><p>*) the nodes used for testing are also Bull BCS nodes but vonsisting of just two 
<br>
boards instead of 4
<br>
<pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13304/btl_openib_component.c">btl_openib_component.c</a>
</ul>
<!-- attachment="btl_openib_component.c" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13304/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13305.php">Ralph Castain: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13305.php">Ralph Castain: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="13305.php">Ralph Castain: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13348.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
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
