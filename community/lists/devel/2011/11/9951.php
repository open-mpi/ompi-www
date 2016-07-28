<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 17:23:00 2011" -->
<!-- isoreceived="20111108222300" -->
<!-- sent="Tue, 8 Nov 2011 17:22:48 -0500" -->
<!-- isosent="20111108222248" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="5F366897-A549-4242-A5C8-0BC64727B2D5_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1d822ac1f74c709f04e20ef3284344bb_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 17:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9952.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9950.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9941.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9956.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9956.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Elements in an array are always stored in the expected [increasing] order, regardless of the endianess of the architecture. Moreover, due to the alignment rules, all members in a union will start at the same address.
<br>
<p>It turns out there is no endianess conversion on the keys, so I suppose both peers have to somehow reach a consensus outside the PML.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 8, 2011, at 08:57 , Nathan T. Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Sure, I can do that. My only concern is with sending between hosts of
</span><br>
<span class="quotelev1">&gt; different endianness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, if seg_key is 128 bits wide and the key32 is 64 bits then we
</span><br>
<span class="quotelev1">&gt; might run into this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host 1: (big endian)
</span><br>
<span class="quotelev1">&gt; Set seg_key.key32[0] = 0x11111111
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; would result in seg_key: 0x00000000 0x00000000 0x11111111 0x00000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host 2: (little endian)
</span><br>
<span class="quotelev1">&gt; Set seg_key.key32[0] = 0x111111111
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; would result in seg_key: 0x11111111 0x00000000 0x00000000 0x00000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If either host were to send the other one its seg_key and try to use the
</span><br>
<span class="quotelev1">&gt; key32 they would get garbage. I haven't tested this case yet but I can test
</span><br>
<span class="quotelev1">&gt; on a PPE of RR later today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 8 Nov 2011 08:26:04 -0500, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 7, 2011, at 9:48 PM, Nathan T. Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In retrospect I should have done a RFC for the 3rd change with a short
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timeout. At the time (operating on little sleep) it seemed like the
</span><br>
<span class="quotelev2">&gt;&gt; commits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would have minimal impact. Please let me know if the commits have any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; negative impact.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I think I'd like to see a rollback of the increase of array sizes
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; the seg_key union.  They weren't necessary and might be slightly
</span><br>
<span class="quotelev2">&gt;&gt; misleading.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9952.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9950.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9941.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9956.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9956.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
