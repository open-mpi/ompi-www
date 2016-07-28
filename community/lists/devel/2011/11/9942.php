<?
$subject_val = "[OMPI devel] Remote key sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 09:36:10 2011" -->
<!-- isoreceived="20111108143610" -->
<!-- sent="Tue, 8 Nov 2011 06:36:03 -0800" -->
<!-- isosent="20111108143603" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Remote key sizes" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34B7DD1CC6C_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Remote key sizes<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 09:36:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9941.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9945.php">Nathan T. Hjelm: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Reply:</strong> <a href="9945.php">Nathan T. Hjelm: "Re: [OMPI devel] Remote key sizes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;PS: Regarding the hand-copy instead of the memcpy, we tried to avoid using
</span><br>
<span class="quotelev1">&gt;memcpy in performance critical codes, especially when we know the size of
</span><br>
<span class="quotelev1">&gt;the data and the alignment. This relieves the compiler of adding ugly intrinsics,
</span><br>
<span class="quotelev1">&gt;allowing it to nicely pipeline to load/stores. Anyway, with both approaches
</span><br>
<span class="quotelev1">&gt;you will copy more data than needed for all BTLs except uGNI.
</span><br>
<p>I was looking at a case in a BTL I was working on where I actually need 64 bytes (yes, bytes) as the remote key size as opposed to the current 16 bytes (128 bits).
<br>
Not sure how I can handle that yet.  (I assume configure is my friend, but even in that case, all headers will need to carry around the extra data.)
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 7, 2011, at 21:48 , Nathan T. Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 7 Nov 2011 17:18:42 -0500, George Bosilca
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A little bit of history:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. r25305: added 2 atomic operations to OPAL. However, they only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exists
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amd64 and are only used in the vader BTL, which I assume only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports amd64.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Two things:
</span><br>
<span class="quotelev2">&gt;&gt; - The atomic is a new feature that has no impact on existing code. It
</span><br>
<span class="quotelev2">&gt;&gt; can also be implemented on Intel but we have not tested it (yet).
</span><br>
<span class="quotelev2">&gt;&gt; - The atomic was pushed to support lock-free queues in the Vader BTL.
</span><br>
<span class="quotelev2">&gt;&gt; Vader does not need the atomics and can use an atomic lock lock but I
</span><br>
<span class="quotelev2">&gt;&gt; see higher latencies when using locks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why would this change (that has no impact on any other code) need an
</span><br>
<span class="quotelev1">&gt;RFC?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. r25334: The seg_key union got a new member ptr. This member is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solely used in the vader BTL, as all other BTL use a compiler trick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to convert a pointer to a 64 bits.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am actually going to remove that member. I prefer the use of
</span><br>
<span class="quotelev2">&gt;&gt; uintptr_t over casting to a uint64_t but it has no real benefit and
</span><br>
<span class="quotelev2">&gt;&gt; possibly a pitfall due to its platform dependent size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But the member has, like the atomic, no impact on any exiting code. It
</span><br>
<span class="quotelev2">&gt;&gt; does not change the size of the seg_key and was only used by Vader.
</span><br>
<span class="quotelev2">&gt;&gt; Why would this change have required an RFC?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. r25445: All members of the seg_key union got friends, because Cray
</span><br>
<span class="quotelev2">&gt;&gt; dare
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to set their keys at 128 bits long. However a quick  find . -name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;*.[ch]&quot; -exec grep -Hn seg_key {} \; | grep &quot;\[1\]&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicates that no BTL is using 128 bits keys. Code has been added to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all PMLs, but I guess they just copy empty data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For now they copy empty data but in the near future (as I have said)
</span><br>
<span class="quotelev2">&gt;&gt; we will need to bits for the ugni btl (Cray XE Gemini). I pushed this
</span><br>
<span class="quotelev2">&gt;&gt; code to prepare for pushing ugni.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, you might be a good person to ask: Why do we copy each member of
</span><br>
<span class="quotelev2">&gt;&gt; a segment individually in the PMLs? Wouldn't it be faster to do a
</span><br>
<span class="quotelev2">&gt;&gt; memcpy? If we were using a memcpy I would not have had to make any
</span><br>
<span class="quotelev1">&gt;change to the pmls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I see is a pattern of commits that can have been dealt with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; differently. None had an RFC, and most of them are not even used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you are reaching a little here. I pushed several changes over
</span><br>
<span class="quotelev2">&gt;&gt; a period of a month. The first two are not related to the third which
</span><br>
<span class="quotelev2">&gt;&gt; is the only one that could have any impact to existing code and might
</span><br>
<span class="quotelev2">&gt;&gt; require an RFC.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In retrospect I should have done a RFC for the 3rd change with a short
</span><br>
<span class="quotelev2">&gt;&gt; timeout. At the time (operating on little sleep) it seemed like the
</span><br>
<span class="quotelev2">&gt;&gt; commits would have minimal impact. Please let me know if the commits
</span><br>
<span class="quotelev2">&gt;&gt; have any negative impact.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9941.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9945.php">Nathan T. Hjelm: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>Reply:</strong> <a href="9945.php">Nathan T. Hjelm: "Re: [OMPI devel] Remote key sizes"</a>
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
