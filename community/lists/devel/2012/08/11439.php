<?
$subject_val = "Re: [OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 09:54:10 2012" -->
<!-- isoreceived="20120824135410" -->
<!-- sent="Fri, 24 Aug 2012 09:54:05 -0400" -->
<!-- isosent="20120824135405" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r27078 and OMPI build" -->
<!-- id="D61B93A9-DDF7-4908-B65A-89F645DDC0CD_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5036AA24.3070606_at_oracle.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 09:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11440.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11438.php">Christopher Samuel: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>In reply to:</strong> <a href="11437.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11440.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11440.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe there is a chance to get direct access to this system ?
<br>
<p>Regards,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Aug 23, 2012, at 6:09 PM, Eugene Loh wrote:
Thanks for the suggestion, but it didn't seem to help.  The build still
fails on the same problem.
On 8/23/2012 2:14 PM, Shamis, Pavel wrote:
Evgeny,
I'm wondering if the issue is some how related to the fact that these functions are inline. Can you please, try the attached patch and see what happens ?
On Aug 23, 2012, at 12:59 PM, Eugene Loh wrote:
On 8/23/2012 8:58 AM, Shamis, Pavel wrote:
Did you have chance to make progress on the issue #2 ? I'm wondering how we want to proceed from&gt;  here.
First of all, thanks for putting back the fixes for issue #1.  That
build is now successful.
Issue #2?  No.  I don't know what to look at even if I had time to spend
on this.  It appears that mca/coll/ml is being pulled into libmpi.  I
tried comparing this component to others that aren't pulled in (e.g.,
mca/coll/sm) or builds on this system (happens to be SPARC/Solaris, but
I don't know what the key distinction is) versus other systems where
mca/coll/ml is not pulled in.  Nothing jumped out at me.  So, I'm stuck
(lack of ideas and lack of time).
What would make an MCA component get pulled into libmpi?  Again, many
other components are not getting pulled in and this problem appears only
on one system.
On Aug 21, 2012, at 2:19 PM, Eugene Loh wrote:
On 8/21/2012 9:31 AM, Ralph Castain wrote:
The library issue sounds like something isn't right in the Makefile.am
- perhaps the syntax has a typo there as well?
I don't know.  This is the part where I could use help.  I took a quick
peek at some Makefile.am files.  I can't see what the essential
difference is between, say, coll/ml/Makefile.am and, say,
coll/sm/Makefile.am (which behaves all right).  Nor do I see why there
would be a difference in coll/ml between one system (happens to be
SPARC, though I don't know that's significant) and another.
On Aug 21, 2012, at 11:36 AM, Eugene Loh wrote:
r27078 (ML collective component) broke some Solaris OMPI builds.
2)  <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2089">http://www.open-mpi.org/mtt/index.php?do_redir=2089</a>  Somehow,
coll_ml is getting pulled into libmpi.so.  E.g., this doesn't look right:
  % nm ompi/.libs/libmpi.so | grep mca_coll_ml
  [13161] |   2556704|       172|FUNC |LOCL |0    |11
|mca_coll_ml_alloc_op_prog_single_frag_dag
  [13171] |   2555488|       344|FUNC |LOCL |0    |11
|mca_coll_ml_buffer_recycling
  [13173] |   2555392|        92|FUNC |LOCL |0    |11     |mca_coll_ml_err
  [23992] |         0|         0|FUNC |GLOB |0    |UNDEF
|mca_coll_ml_memsync_intra
The UNDEF is causing a problem, but I'm guessing all that mca_coll_ml_
stuff shouldn't be in there at all in the first place.  This is on one
Solaris system, while another doesn't see the problem and builds fine.
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11440.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11438.php">Christopher Samuel: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>In reply to:</strong> <a href="11437.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11440.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11440.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
