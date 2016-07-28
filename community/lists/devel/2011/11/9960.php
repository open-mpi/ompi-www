<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 18:37:03 2011" -->
<!-- isoreceived="20111108233703" -->
<!-- sent="Tue, 8 Nov 2011 18:36:57 -0500" -->
<!-- isosent="20111108233657" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="BB2C86BC-518B-4961-B41B-2D239E9D2AB0_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b4a4cb9797bae7fa23777720d68027d3_at_lanl.gov" -->
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
<strong>Date:</strong> 2011-11-08 18:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9961.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Previous message:</strong> <a href="9959.php">Ralph Castain: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9956.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not recall, and from the code there is no obvious reason. However, being able to store multiple smaller members might be a good enough reason.
<br>
<p>Btw, we don't use the key8 at all. I guess we can clean that code up to only keep key32 and key64, eventually with the count to match up the right size ;)
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 8, 2011, at 18:11 , Nathan T. Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Ok, that makes sense. Is there a reason why the members were all set the be
</span><br>
<span class="quotelev1">&gt; the same size?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe seg_key should be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; union {
</span><br>
<span class="quotelev1">&gt;  uint8_t key8;
</span><br>
<span class="quotelev1">&gt;  uint16_t key16;
</span><br>
<span class="quotelev1">&gt;  uint32_t key32;
</span><br>
<span class="quotelev1">&gt;  uint64_t key64;
</span><br>
<span class="quotelev1">&gt;  struct { uint64_t value[2] } key128;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 8 Nov 2011 17:22:48 -0500, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Elements in an array are always stored in the expected [increasing]
</span><br>
<span class="quotelev1">&gt; order,
</span><br>
<span class="quotelev2">&gt;&gt; regardless of the endianess of the architecture. Moreover, due to the
</span><br>
<span class="quotelev2">&gt;&gt; alignment rules, all members in a union will start at the same address.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It turns out there is no endianess conversion on the keys, so I suppose
</span><br>
<span class="quotelev2">&gt;&gt; both peers have to somehow reach a consensus outside the PML.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 8, 2011, at 08:57 , Nathan T. Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sure, I can do that. My only concern is with sending between hosts of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different endianness.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, if seg_key is 128 bits wide and the key32 is 64 bits then
</span><br>
<span class="quotelev2">&gt;&gt; we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might run into this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host 1: (big endian)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Set seg_key.key32[0] = 0x11111111
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would result in seg_key: 0x00000000 0x00000000 0x11111111 0x00000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host 2: (little endian)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Set seg_key.key32[0] = 0x111111111
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would result in seg_key: 0x11111111 0x00000000 0x00000000 0x00000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If either host were to send the other one its seg_key and try to use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; key32 they would get garbage. I haven't tested this case yet but I can
</span><br>
<span class="quotelev2">&gt;&gt; test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on a PPE of RR later today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, 8 Nov 2011 08:26:04 -0500, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 7, 2011, at 9:48 PM, Nathan T. Hjelm wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In retrospect I should have done a RFC for the 3rd change with a short
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; timeout. At the time (operating on little sleep) it seemed like the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; commits
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would have minimal impact. Please let me know if the commits have any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; negative impact.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW, I think I'd like to see a rollback of the increase of array sizes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the seg_key union.  They weren't necessary and might be slightly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; misleading.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="9961.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Previous message:</strong> <a href="9959.php">Ralph Castain: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9956.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
