<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 21:48:15 2011" -->
<!-- isoreceived="20111108024815" -->
<!-- sent="Mon, 07 Nov 2011 19:48:10 -0700" -->
<!-- isosent="20111108024810" -->
<!-- name="Nathan T. Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="10a530dea5c283a685d584450d32fcca_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="492E8894-0FB9-4413-BCE3-7697C0534537_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-11-07 21:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9929.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9921.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 7 Nov 2011 17:18:42 -0500, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt; A little bit of history:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. r25305: added 2 atomic operations to OPAL. However, they only exists
</span><br>
on
<br>
<span class="quotelev1">&gt; amd64 and are only used in the vader BTL, which I assume only supports
</span><br>
<span class="quotelev1">&gt; amd64.
</span><br>
<p>Two things:
<br>
&nbsp;- The atomic is a new feature that has no impact on existing code. It can
<br>
also be implemented on Intel but we have not tested it (yet).
<br>
&nbsp;- The atomic was pushed to support lock-free queues in the Vader BTL.
<br>
Vader does not need the atomics and can use an atomic lock lock but I see
<br>
higher latencies when using locks.
<br>
<p>Why would this change (that has no impact on any other code) need an RFC?
<br>
<p><span class="quotelev1">&gt; 2. r25334: The seg_key union got a new member ptr. This member is solely
</span><br>
<span class="quotelev1">&gt; used in the vader BTL, as all other BTL use a compiler trick to convert a
</span><br>
<span class="quotelev1">&gt; pointer to a 64 bits.
</span><br>
<p>I am actually going to remove that member. I prefer the use of uintptr_t
<br>
over casting to a uint64_t but it has no real benefit and possibly a
<br>
pitfall due to its platform dependent size.
<br>
<p>But the member has, like the atomic, no impact on any exiting code. It does
<br>
not change the size of the seg_key and was only used by Vader. Why would
<br>
this change have required an RFC?
<br>
<p><span class="quotelev1">&gt; 3. r25445: All members of the seg_key union got friends, because Cray
</span><br>
dare
<br>
<span class="quotelev1">&gt; to set their keys at 128 bits long. However a quick
</span><br>
<span class="quotelev1">&gt;   find . -name &quot;*.[ch]&quot; -exec grep -Hn seg_key {} \; | grep &quot;\[1\]&quot;
</span><br>
<span class="quotelev1">&gt; indicates that no BTL is using 128 bits keys. Code has been added to all
</span><br>
<span class="quotelev1">&gt; PMLs, but I guess they just copy empty data.
</span><br>
<p>For now they copy empty data but in the near future (as I have said) we
<br>
will need to bits for the ugni btl (Cray XE Gemini). I pushed this code to
<br>
prepare for pushing ugni.
<br>
<p>Also, you might be a good person to ask: Why do we copy each member of a
<br>
segment individually in the PMLs? Wouldn't it be faster to do a memcpy? If
<br>
we were using a memcpy I would not have had to make any change to the pmls.
<br>
<p><span class="quotelev1">&gt; What I see is a pattern of commits that can have been dealt with
</span><br>
<span class="quotelev1">&gt; differently. None had an RFC, and most of them are not even used.
</span><br>
<p>I think you are reaching a little here. I pushed several changes over a
<br>
period of a month. The first two are not related to the third which is the
<br>
only one that could have any impact to existing code and might require an
<br>
RFC.
<br>
<p>In retrospect I should have done a RFC for the 3rd change with a short
<br>
timeout. At the time (operating on little sleep) it seemed like the commits
<br>
would have minimal impact. Please let me know if the commits have any
<br>
negative impact.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9929.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9921.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
