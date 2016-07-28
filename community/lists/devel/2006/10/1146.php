<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 10:05:09 2006" -->
<!-- isoreceived="20061025140509" -->
<!-- sent="Wed, 25 Oct 2006 10:05:07 -0400 (EDT)" -->
<!-- isosent="20061025140507" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New oob/tcp?" -->
<!-- id="Pine.LNX.4.64.0610251004030.3475_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C164BFB3.55BB%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 10:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1147.php">Adrian Knoth: "[OMPI devel] IPv6 code uploaded to svn"</a>
<li><strong>Previous message:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>In reply to:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The create_listen_thread code should be on both the trunk and v1.2 branch 
<br>
right now.  You are correct that the heterogeneous fixes haven't moved 
<br>
just yet, because they aren't quite right.  Hope to have that fixed in the 
<br>
near future...
<br>
<p>brian
<br>
<p>On Wed, 25 Oct 2006, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; There are a number of things in the trunk that haven't been moved over to
</span><br>
<span class="quotelev1">&gt; 1.2 branch yet. They are coming shortly, though...once the merge is done,
</span><br>
<span class="quotelev1">&gt; you might get a few more conflicts, but it shouldn't be too bad.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/25/06 7:06 AM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Oct 25, 2006 at 02:48:33PM +0200, Adrian Knoth wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't see any new component, Adrian. There have been a few updates to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; existing component, some of which might cause conflicts with the merge, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; those shouldn't be too hard to resolve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, I just saw something with &quot;create_listen_thread&quot; and so on, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't look closer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;new&quot; (current) oob/tcp (in the v1.2 branch) does not have Brian's
</span><br>
<span class="quotelev2">&gt;&gt; fix for #493. (the following constant is missing, the code, too)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MCA_OOB_TCP_ADDR_TYPE_AFINET
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are probably more differences...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want, I can do the merge and we'll use my IPv6 oob with
</span><br>
<span class="quotelev2">&gt;&gt; all the patches up to r12050.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1147.php">Adrian Knoth: "[OMPI devel] IPv6 code uploaded to svn"</a>
<li><strong>Previous message:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>In reply to:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<!-- nextthread="start" -->
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
