<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 22:58:14 2011" -->
<!-- isoreceived="20111108035814" -->
<!-- sent="Mon, 7 Nov 2011 22:58:07 -0500" -->
<!-- isosent="20111108035807" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="A3986FF3-AE4A-4F3F-9A49-277F0C59C544_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="10a530dea5c283a685d584450d32fcca_at_lanl.gov" -->
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
<strong>Date:</strong> 2011-11-07 22:58:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9933.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9931.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9928.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9933.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9933.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is one major reason, if you look at them as a whole they look half-baked. And we are not supposed to accept such commits in the trunk. Development branches are the way to go, propose coherent and complete patches. Bringing disconnected pieces, and claiming that magically they will compose a whole later on, is not an acceptable approach.
<br>
<p>I'll take as an example the atomic operations. They exist only on amd64, and only if the compiler supports gcc-like assembly. However, the atomic operation is defined in a global header with a very exciting name atomic.h. If anybody else start using these atomics (and as they appear in a header file I don't see why not), there is a very high probability of weird build or execution errors. [foot-note: Amazingly, all the productive-quality lovers in this community vanished lately.] I let you imagine what would have been the answer from the community if you had proposed such an RFC before doing the actual commit.
<br>
<p>I'm looking forward to the cleaning part.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>PS: Regarding the hand-copy instead of the memcpy, we tried to avoid using memcpy in performance critical codes, especially when we know the size of the data and the alignment. This relieves the compiler of adding ugly intrinsics, allowing it to nicely pipeline to load/stores. Anyway, with both approaches you will copy more data than needed for all BTLs except uGNI.
<br>
<p>On Nov 7, 2011, at 21:48 , Nathan T. Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 7 Nov 2011 17:18:42 -0500, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A little bit of history:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. r25305: added 2 atomic operations to OPAL. However, they only exists
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; amd64 and are only used in the vader BTL, which I assume only supports
</span><br>
<span class="quotelev2">&gt;&gt; amd64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two things:
</span><br>
<span class="quotelev1">&gt; - The atomic is a new feature that has no impact on existing code. It can
</span><br>
<span class="quotelev1">&gt; also be implemented on Intel but we have not tested it (yet).
</span><br>
<span class="quotelev1">&gt; - The atomic was pushed to support lock-free queues in the Vader BTL.
</span><br>
<span class="quotelev1">&gt; Vader does not need the atomics and can use an atomic lock lock but I see
</span><br>
<span class="quotelev1">&gt; higher latencies when using locks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why would this change (that has no impact on any other code) need an RFC?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. r25334: The seg_key union got a new member ptr. This member is solely
</span><br>
<span class="quotelev2">&gt;&gt; used in the vader BTL, as all other BTL use a compiler trick to convert a
</span><br>
<span class="quotelev2">&gt;&gt; pointer to a 64 bits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am actually going to remove that member. I prefer the use of uintptr_t
</span><br>
<span class="quotelev1">&gt; over casting to a uint64_t but it has no real benefit and possibly a
</span><br>
<span class="quotelev1">&gt; pitfall due to its platform dependent size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the member has, like the atomic, no impact on any exiting code. It does
</span><br>
<span class="quotelev1">&gt; not change the size of the seg_key and was only used by Vader. Why would
</span><br>
<span class="quotelev1">&gt; this change have required an RFC?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. r25445: All members of the seg_key union got friends, because Cray
</span><br>
<span class="quotelev1">&gt; dare
</span><br>
<span class="quotelev2">&gt;&gt; to set their keys at 128 bits long. However a quick
</span><br>
<span class="quotelev2">&gt;&gt;  find . -name &quot;*.[ch]&quot; -exec grep -Hn seg_key {} \; | grep &quot;\[1\]&quot;
</span><br>
<span class="quotelev2">&gt;&gt; indicates that no BTL is using 128 bits keys. Code has been added to all
</span><br>
<span class="quotelev2">&gt;&gt; PMLs, but I guess they just copy empty data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now they copy empty data but in the near future (as I have said) we
</span><br>
<span class="quotelev1">&gt; will need to bits for the ugni btl (Cray XE Gemini). I pushed this code to
</span><br>
<span class="quotelev1">&gt; prepare for pushing ugni.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, you might be a good person to ask: Why do we copy each member of a
</span><br>
<span class="quotelev1">&gt; segment individually in the PMLs? Wouldn't it be faster to do a memcpy? If
</span><br>
<span class="quotelev1">&gt; we were using a memcpy I would not have had to make any change to the pmls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I see is a pattern of commits that can have been dealt with
</span><br>
<span class="quotelev2">&gt;&gt; differently. None had an RFC, and most of them are not even used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you are reaching a little here. I pushed several changes over a
</span><br>
<span class="quotelev1">&gt; period of a month. The first two are not related to the third which is the
</span><br>
<span class="quotelev1">&gt; only one that could have any impact to existing code and might require an
</span><br>
<span class="quotelev1">&gt; RFC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In retrospect I should have done a RFC for the 3rd change with a short
</span><br>
<span class="quotelev1">&gt; timeout. At the time (operating on little sleep) it seemed like the commits
</span><br>
<span class="quotelev1">&gt; would have minimal impact. Please let me know if the commits have any
</span><br>
<span class="quotelev1">&gt; negative impact.
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
<li><strong>Next message:</strong> <a href="9933.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9931.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9928.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9933.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9933.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
