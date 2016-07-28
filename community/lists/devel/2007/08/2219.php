<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 23:05:19 2007" -->
<!-- isoreceived="20070825030519" -->
<!-- sent="Fri, 24 Aug 2007 23:05:14 -0400" -->
<!-- isosent="20070825030514" -->
<!-- name="Josh Aune" -->
<!-- email="luken_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] More memory troubles with vapi" -->
<!-- id="98a233180708242005yaa4c017m9f186cb9d014a6ef_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62DF75D1-CDDB-469E-87C5-DFBA3EAD49EA_at_cisco.com" -->
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
<strong>From:</strong> Josh Aune (<em>luken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 23:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2220.php">Jeff Squyres: "[OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>In reply to:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Reply:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/24/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  If you compile Open MPI with no memory manager, then it
</span><br>
<span class="quotelev1">&gt; *shouldn't* be Open MPI's fault (unless there's a leak in the mvapi
</span><br>
<span class="quotelev1">&gt; BTL...?).  Verify that you did not actually compile Open MPI with a
</span><br>
<span class="quotelev1">&gt; memory manager by running &quot;ompi_info| grep ptmalloc2&quot; -- it should
</span><br>
<span class="quotelev1">&gt; come up empty.
</span><br>
<p>I am sure.  I have multiple builds that I switch between.  One of the
<br>
apps doesn't work unless I --without-memory-manager (see post to
<br>
-users about realloc(), with sample code).
<br>
<p>I noticed that there are a few ./configure --debug type switches, even
<br>
some dealing with memory.  Could those be useful for gathering further
<br>
data?  What features do those provide and how do I use them?
<br>
<p><span class="quotelev1">&gt; The fact that you can run this under TCP without memory leaking would
</span><br>
<span class="quotelev1">&gt; seem to indicate that it's not the app that's leaking memory, but
</span><br>
<span class="quotelev1">&gt; rather either the MPI or the network stack.
</span><br>
<p>I should clarify here, this is effectively true.  The app crashes from
<br>
a segfault after running over tcp for several hours, but it gets much
<br>
farther into the run than the vapi btl does.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2220.php">Jeff Squyres: "[OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>In reply to:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Reply:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
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
