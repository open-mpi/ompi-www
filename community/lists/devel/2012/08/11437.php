<?
$subject_val = "Re: [OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 18:09:37 2012" -->
<!-- isoreceived="20120823220937" -->
<!-- sent="Thu, 23 Aug 2012 15:09:40 -0700" -->
<!-- isosent="20120823220940" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r27078 and OMPI build" -->
<!-- id="5036AA24.3070606_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E30C212C-BA0C-4BDE-9C3B-3E2D6E4B765A_at_ornl.gov" -->
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
<strong>Date:</strong> 2012-08-23 18:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11438.php">Christopher Samuel: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11439.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11439.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the suggestion, but it didn't seem to help.  The build still 
<br>
fails on the same problem.
<br>
<p>On 8/23/2012 2:14 PM, Shamis, Pavel wrote:
<br>
<span class="quotelev1">&gt; Evgeny,
</span><br>
<span class="quotelev1">&gt; I'm wondering if the issue is some how related to the fact that these functions are inline. Can you please, try the attached patch and see what happens ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 23, 2012, at 12:59 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/23/2012 8:58 AM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  Did you have chance to make progress on the issue #2 ? I'm wondering how we want to proceed from&gt;  here.
</span><br>
<span class="quotelev1">&gt; First of all, thanks for putting back the fixes for issue #1.  That
</span><br>
<span class="quotelev1">&gt; build is now successful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Issue #2?  No.  I don't know what to look at even if I had time to spend
</span><br>
<span class="quotelev1">&gt; on this.  It appears that mca/coll/ml is being pulled into libmpi.  I
</span><br>
<span class="quotelev1">&gt; tried comparing this component to others that aren't pulled in (e.g.,
</span><br>
<span class="quotelev1">&gt; mca/coll/sm) or builds on this system (happens to be SPARC/Solaris, but
</span><br>
<span class="quotelev1">&gt; I don't know what the key distinction is) versus other systems where
</span><br>
<span class="quotelev1">&gt; mca/coll/ml is not pulled in.  Nothing jumped out at me.  So, I'm stuck
</span><br>
<span class="quotelev1">&gt; (lack of ideas and lack of time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What would make an MCA component get pulled into libmpi?  Again, many
</span><br>
<span class="quotelev1">&gt; other components are not getting pulled in and this problem appears only
</span><br>
<span class="quotelev1">&gt; on one system.
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2012, at 2:19 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/21/2012 9:31 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; The library issue sounds like something isn't right in the Makefile.am
</span><br>
<span class="quotelev1">&gt; - perhaps the syntax has a typo there as well?
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
<li><strong>Next message:</strong> <a href="11438.php">Christopher Samuel: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11436.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11439.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11439.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
