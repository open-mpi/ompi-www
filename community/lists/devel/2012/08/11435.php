<?
$subject_val = "Re: [OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 12:59:30 2012" -->
<!-- isoreceived="20120823165930" -->
<!-- sent="Thu, 23 Aug 2012 09:59:32 -0700" -->
<!-- isosent="20120823165932" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r27078 and OMPI build" -->
<!-- id="50366174.4040400_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8F212A32-1B75-4421-BDC3-C542BF704A53_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r27078 and OMPI build<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-23 12:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11434.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11434.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/23/2012 8:58 AM, Shamis, Pavel wrote:
<br>
<span class="quotelev1">&gt; Did you have chance to make progress on the issue #2 ? I'm wondering how we want to proceed from here.
</span><br>
First of all, thanks for putting back the fixes for issue #1.  That 
<br>
build is now successful.
<br>
<p>Issue #2?  No.  I don't know what to look at even if I had time to spend 
<br>
on this.  It appears that mca/coll/ml is being pulled into libmpi.  I 
<br>
tried comparing this component to others that aren't pulled in (e.g., 
<br>
mca/coll/sm) or builds on this system (happens to be SPARC/Solaris, but 
<br>
I don't know what the key distinction is) versus other systems where 
<br>
mca/coll/ml is not pulled in.  Nothing jumped out at me.  So, I'm stuck 
<br>
(lack of ideas and lack of time).
<br>
<p>What would make an MCA component get pulled into libmpi?  Again, many 
<br>
other components are not getting pulled in and this problem appears only 
<br>
on one system.
<br>
<span class="quotelev1">&gt; On Aug 21, 2012, at 2:19 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/21/2012 9:31 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  The library issue sounds like something isn't right in the Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;  - perhaps the syntax has a typo there as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know.  This is the part where I could use help.  I took a quick
</span><br>
<span class="quotelev1">&gt; peek at some Makefile.am files.  I can't see what the essential
</span><br>
<span class="quotelev1">&gt; difference is between, say, coll/ml/Makefile.am and, say,
</span><br>
<span class="quotelev1">&gt; coll/sm/Makefile.am (which behaves all right).  Nor do I see why there
</span><br>
<span class="quotelev1">&gt; would be a difference in coll/ml between one system (happens to be
</span><br>
<span class="quotelev1">&gt; SPARC, though I don't know that's significant) and another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2012, at 11:36 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r27078 (ML collective component) broke some Solaris OMPI builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2)  <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2089">http://www.open-mpi.org/mtt/index.php?do_redir=2089</a>  Somehow,
</span><br>
<span class="quotelev1">&gt; coll_ml is getting pulled into libmpi.so.  E.g., this doesn't look right:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    % nm ompi/.libs/libmpi.so | grep mca_coll_ml
</span><br>
<span class="quotelev1">&gt;    [13161] |   2556704|       172|FUNC |LOCL |0    |11
</span><br>
<span class="quotelev1">&gt; |mca_coll_ml_alloc_op_prog_single_frag_dag
</span><br>
<span class="quotelev1">&gt;    [13171] |   2555488|       344|FUNC |LOCL |0    |11
</span><br>
<span class="quotelev1">&gt; |mca_coll_ml_buffer_recycling
</span><br>
<span class="quotelev1">&gt;    [13173] |   2555392|        92|FUNC |LOCL |0    |11     |mca_coll_ml_err
</span><br>
<span class="quotelev1">&gt;    [23992] |         0|         0|FUNC |GLOB |0    |UNDEF
</span><br>
<span class="quotelev1">&gt; |mca_coll_ml_memsync_intra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The UNDEF is causing a problem, but I'm guessing all that mca_coll_ml_
</span><br>
<span class="quotelev1">&gt; stuff shouldn't be in there at all in the first place.  This is on one
</span><br>
<span class="quotelev1">&gt; Solaris system, while another doesn't see the problem and builds fine.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11434.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11434.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
