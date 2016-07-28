<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 18:12:02 2011" -->
<!-- isoreceived="20111108231202" -->
<!-- sent="Tue, 08 Nov 2011 16:11:58 -0700" -->
<!-- isosent="20111108231158" -->
<!-- name="Nathan T. Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="b4a4cb9797bae7fa23777720d68027d3_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5F366897-A549-4242-A5C8-0BC64727B2D5_at_eecs.utk.edu" -->
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
<strong>From:</strong> Nathan T. Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 18:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9957.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Previous message:</strong> <a href="9955.php">Paul H. Hargrove: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9951.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9960.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9960.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, that makes sense. Is there a reason why the members were all set the be
<br>
the same size?
<br>
<p>Maybe seg_key should be:
<br>
<p>union {
<br>
&nbsp;&nbsp;uint8_t key8;
<br>
&nbsp;&nbsp;uint16_t key16;
<br>
&nbsp;&nbsp;uint32_t key32;
<br>
&nbsp;&nbsp;uint64_t key64;
<br>
&nbsp;&nbsp;struct { uint64_t value[2] } key128;
<br>
};
<br>
<p>-Nathan
<br>
<p>On Tue, 8 Nov 2011 17:22:48 -0500, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt; Elements in an array are always stored in the expected [increasing]
</span><br>
order,
<br>
<span class="quotelev1">&gt; regardless of the endianess of the architecture. Moreover, due to the
</span><br>
<span class="quotelev1">&gt; alignment rules, all members in a union will start at the same address.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It turns out there is no endianess conversion on the keys, so I suppose
</span><br>
<span class="quotelev1">&gt; both peers have to somehow reach a consensus outside the PML.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2011, at 08:57 , Nathan T. Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sure, I can do that. My only concern is with sending between hosts of
</span><br>
<span class="quotelev2">&gt;&gt; different endianness.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, if seg_key is 128 bits wide and the key32 is 64 bits then
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev2">&gt;&gt; might run into this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Host 1: (big endian)
</span><br>
<span class="quotelev2">&gt;&gt; Set seg_key.key32[0] = 0x11111111
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; would result in seg_key: 0x00000000 0x00000000 0x11111111 0x00000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Host 2: (little endian)
</span><br>
<span class="quotelev2">&gt;&gt; Set seg_key.key32[0] = 0x111111111
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; would result in seg_key: 0x11111111 0x00000000 0x00000000 0x00000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If either host were to send the other one its seg_key and try to use the
</span><br>
<span class="quotelev2">&gt;&gt; key32 they would get garbage. I haven't tested this case yet but I can
</span><br>
<span class="quotelev1">&gt; test
</span><br>
<span class="quotelev2">&gt;&gt; on a PPE of RR later today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 8 Nov 2011 08:26:04 -0500, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 7, 2011, at 9:48 PM, Nathan T. Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In retrospect I should have done a RFC for the 3rd change with a short
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; timeout. At the time (operating on little sleep) it seemed like the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would have minimal impact. Please let me know if the commits have any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; negative impact.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, I think I'd like to see a rollback of the increase of array sizes
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the seg_key union.  They weren't necessary and might be slightly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; misleading.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9957.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Previous message:</strong> <a href="9955.php">Paul H. Hargrove: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9951.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9960.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9960.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
