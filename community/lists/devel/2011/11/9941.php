<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 08:57:42 2011" -->
<!-- isoreceived="20111108135742" -->
<!-- sent="Tue, 08 Nov 2011 06:57:38 -0700" -->
<!-- isosent="20111108135738" -->
<!-- name="Nathan T. Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="1d822ac1f74c709f04e20ef3284344bb_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F130FD3F-09EE-4CE3-AD7A-F4B969AFC8C2_at_cisco.com" -->
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
<strong>Date:</strong> 2011-11-08 08:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9942.php">Rolf vandeVaart: "[OMPI devel] Remote key sizes"</a>
<li><strong>Previous message:</strong> <a href="9940.php">Jeff Squyres: "[OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9951.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9951.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, I can do that. My only concern is with sending between hosts of
<br>
different endianness.
<br>
<p>For example, if seg_key is 128 bits wide and the key32 is 64 bits then we
<br>
might run into this:
<br>
<p>Host 1: (big endian)
<br>
Set seg_key.key32[0] = 0x11111111
<br>
<p>would result in seg_key: 0x00000000 0x00000000 0x11111111 0x00000000
<br>
<p>Host 2: (little endian)
<br>
Set seg_key.key32[0] = 0x111111111
<br>
<p>would result in seg_key: 0x11111111 0x00000000 0x00000000 0x00000000
<br>
<p>If either host were to send the other one its seg_key and try to use the
<br>
key32 they would get garbage. I haven't tested this case yet but I can test
<br>
on a PPE of RR later today.
<br>
<p>-Nathan
<br>
<p>On Tue, 8 Nov 2011 08:26:04 -0500, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Nov 7, 2011, at 9:48 PM, Nathan T. Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In retrospect I should have done a RFC for the 3rd change with a short
</span><br>
<span class="quotelev2">&gt;&gt; timeout. At the time (operating on little sleep) it seemed like the
</span><br>
<span class="quotelev1">&gt; commits
</span><br>
<span class="quotelev2">&gt;&gt; would have minimal impact. Please let me know if the commits have any
</span><br>
<span class="quotelev2">&gt;&gt; negative impact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I think I'd like to see a rollback of the increase of array sizes
</span><br>
in
<br>
<span class="quotelev1">&gt; the seg_key union.  They weren't necessary and might be slightly
</span><br>
<span class="quotelev1">&gt; misleading.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="9942.php">Rolf vandeVaart: "[OMPI devel] Remote key sizes"</a>
<li><strong>Previous message:</strong> <a href="9940.php">Jeff Squyres: "[OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9951.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9951.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
