<?
$subject_val = "Re: [OMPI devel] Remote key sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 10:36:24 2011" -->
<!-- isoreceived="20111108153624" -->
<!-- sent="Tue, 08 Nov 2011 08:36:19 -0700" -->
<!-- isosent="20111108153619" -->
<!-- name="Nathan T. Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remote key sizes" -->
<!-- id="59090bc465723cdfea0832b158b16f1a_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F34B7DD1CC6C_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Remote key sizes<br>
<strong>From:</strong> Nathan T. Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 10:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9946.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9944.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9942.php">Rolf vandeVaart: "[OMPI devel] Remote key sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9958.php">Kenneth Lloyd: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Reply:</strong> <a href="9958.php">Kenneth Lloyd: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Reply:</strong> <a href="9963.php">George Bosilca: "Re: [OMPI devel] Remote key sizes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 8 Nov 2011 06:36:03 -0800, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;PS: Regarding the hand-copy instead of the memcpy, we tried to avoid
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev2">&gt;&gt;memcpy in performance critical codes, especially when we know the size of
</span><br>
<span class="quotelev2">&gt;&gt;the data and the alignment. This relieves the compiler of adding ugly
</span><br>
<span class="quotelev1">&gt; intrinsics,
</span><br>
<span class="quotelev2">&gt;&gt;allowing it to nicely pipeline to load/stores. Anyway, with both
</span><br>
<span class="quotelev1">&gt; approaches
</span><br>
<span class="quotelev2">&gt;&gt;you will copy more data than needed for all BTLs except uGNI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was looking at a case in a BTL I was working on where I actually need
</span><br>
64
<br>
<span class="quotelev1">&gt; bytes (yes, bytes) as the remote key size as opposed to the current 16
</span><br>
<span class="quotelev1">&gt; bytes (128 bits).
</span><br>
<span class="quotelev1">&gt; Not sure how I can handle that yet.  (I assume configure is my friend,
</span><br>
but
<br>
<span class="quotelev1">&gt; even in that case, all headers will need to carry around the extra data.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I have been thinking about this a little bit. What I think should be done
<br>
(and I am sure George will disagree) is to allow BTLs to define how long a
<br>
segment is. The PML would then just memcpy the segments into the send
<br>
buffer (instead of copying each member).
<br>
<p>For example mca_btl_base_segment_t would become:
<br>
<p>struct mca_btl_base_segment_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t seg_len;
<br>
};
<br>
<p>since the pml needs the segment size (it does not need anything else).
<br>
<p>and then each btl would define its own segment like:
<br>
struct mca_btl_ugni_segment_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_segment_t base;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gni_mem_handle_t seg_key;
<br>
};
<br>
<p>and we would add:
<br>
size_t btl_segment_len;
<br>
<p>to the mca_btl_base_module_t or the base frag so the pml knows how much it
<br>
needs to copy.
<br>
<p>This design would address George's criticism of the length of the seg_key
<br>
and also allow BTLs to do what they need to. It would require a memcpy but
<br>
I disagree this would slow the critical path. Even if it does it would be
<br>
relatively minor (i think) and the flexibility is worth more in the long
<br>
run.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9946.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9944.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9942.php">Rolf vandeVaart: "[OMPI devel] Remote key sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9958.php">Kenneth Lloyd: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Reply:</strong> <a href="9958.php">Kenneth Lloyd: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Reply:</strong> <a href="9963.php">George Bosilca: "Re: [OMPI devel] Remote key sizes"</a>
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
