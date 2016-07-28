<?
$subject_val = "Re: [OMPI devel] Remote key sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 19:25:32 2011" -->
<!-- isoreceived="20111109002532" -->
<!-- sent="Tue, 8 Nov 2011 19:25:27 -0500" -->
<!-- isosent="20111109002527" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remote key sizes" -->
<!-- id="66B9F672-E668-40A7-B0BE-04A89061C43B_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="59090bc465723cdfea0832b158b16f1a_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 19:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9964.php">Barrett, Brian W: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Previous message:</strong> <a href="9962.php">Paul H. Hargrove: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9945.php">Nathan T. Hjelm: "Re: [OMPI devel] Remote key sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9964.php">Barrett, Brian W: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Reply:</strong> <a href="9964.php">Barrett, Brian W: "Re: [OMPI devel] Remote key sizes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2011, at 10:36 , Nathan T. Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 8 Nov 2011 06:36:03 -0800, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: Regarding the hand-copy instead of the memcpy, we tried to avoid
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memcpy in performance critical codes, especially when we know the size of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the data and the alignment. This relieves the compiler of adding ugly
</span><br>
<span class="quotelev2">&gt;&gt; intrinsics,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allowing it to nicely pipeline to load/stores. Anyway, with both
</span><br>
<span class="quotelev2">&gt;&gt; approaches
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you will copy more data than needed for all BTLs except uGNI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was looking at a case in a BTL I was working on where I actually need
</span><br>
<span class="quotelev1">&gt; 64
</span><br>
<span class="quotelev2">&gt;&gt; bytes (yes, bytes) as the remote key size as opposed to the current 16
</span><br>
<span class="quotelev2">&gt;&gt; bytes (128 bits).
</span><br>
<span class="quotelev2">&gt;&gt; Not sure how I can handle that yet.  (I assume configure is my friend,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev2">&gt;&gt; even in that case, all headers will need to carry around the extra data.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been thinking about this a little bit. What I think should be done
</span><br>
<span class="quotelev1">&gt; (and I am sure George will disagree) is to allow BTLs to define how long a
</span><br>
<p>Well, I'm really sorry to deceive you &#133; 
<br>
<p><span class="quotelev1">&gt; segment is. The PML would then just memcpy the segments into the send
</span><br>
<span class="quotelev1">&gt; buffer (instead of copying each member).
</span><br>
<p>The only valid reason I can find now for having the seg_key as it is defined today is code simplicity. Read below you will understand.
<br>
<p>Otherwise I completely agree with you, the seg_key is something belonging to the BTLs, and all knowledge about should be limited to the BTLs (aka PML should just move it around). The solution you propose make sense&#133;
<br>
<p>However, there are few things that I think make it more challenging to implement that it looks.
<br>
<p>1. endianess: Apparently the BTL is already responsible of storing the key in network order, as no translation is done on the key in the PMLs. As I don't think any of them do, I will assume this is already [somehow] taken care of.
<br>
<p>2. one sided: A quick look in the OSC seems to indicate there are some special handling to be done in the RDMA one. Look at ompi_osc_rdma_sendreq_t in osc_rdma_sendreq.h, it is using a trick to store the remote segments. First, the mca_btl_base_segment_t are stored at the end of the structure, in order to allow for dynamic allocation. Second, OSC doesn't seems to manipulate pointers to mca_btl_base_segment_t, but the content itself. I didn't went too deep here, but I think particular attention should be payed to OSC.
<br>
<p>3. PML. In addition to seg_len we use the seg_addr field extensively all over the code base, so it should be exposed in the mca_btl_base_segment_t as well.
<br>
<p>4. How do we keep the capability of dealing with multiple mca_btl_base_segment_t? Just imagine how the macro MCA_PML_OB1_COMPUTE_SEGMENT_LENGTH will look like&#133;
<br>
<p>Everything else should be quite trivial ;)
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><p><span class="quotelev1">&gt; For example mca_btl_base_segment_t would become:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct mca_btl_base_segment_t {
</span><br>
<span class="quotelev1">&gt;    size_t seg_len;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; since the pml needs the segment size (it does not need anything else).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then each btl would define its own segment like:
</span><br>
<span class="quotelev1">&gt; struct mca_btl_ugni_segment_t {
</span><br>
<span class="quotelev1">&gt;    struct mca_btl_base_segment_t base;
</span><br>
<span class="quotelev1">&gt;    gni_mem_handle_t seg_key;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and we would add:
</span><br>
<span class="quotelev1">&gt; size_t btl_segment_len;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to the mca_btl_base_module_t or the base frag so the pml knows how much it
</span><br>
<span class="quotelev1">&gt; needs to copy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This design would address George's criticism of the length of the seg_key
</span><br>
<span class="quotelev1">&gt; and also allow BTLs to do what they need to. It would require a memcpy but
</span><br>
<span class="quotelev1">&gt; I disagree this would slow the critical path. Even if it does it would be
</span><br>
<span class="quotelev1">&gt; relatively minor (i think) and the flexibility is worth more in the long
</span><br>
<span class="quotelev1">&gt; run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="9964.php">Barrett, Brian W: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Previous message:</strong> <a href="9962.php">Paul H. Hargrove: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9945.php">Nathan T. Hjelm: "Re: [OMPI devel] Remote key sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9964.php">Barrett, Brian W: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Reply:</strong> <a href="9964.php">Barrett, Brian W: "Re: [OMPI devel] Remote key sizes"</a>
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
