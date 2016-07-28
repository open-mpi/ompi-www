<?
$subject_val = "Re: [OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 17:40:53 2014" -->
<!-- isoreceived="20141215224053" -->
<!-- sent="Mon, 15 Dec 2014 14:40:51 -0800" -->
<!-- isosent="20141215224051" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc Status" -->
<!-- id="CAMD57ofc4_q-_M=zhc0hbV70_=Vr3cs4Vv=TAZKuw7PTeO-CYg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1418677042225.64169_at_goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 17:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16607.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16605.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16604.php">Tom Wurgler: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16609.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16609.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Tom
<br>
<p>Note that rc2 had a bug in the out-of-band messaging system - might be what
<br>
you are hitting. I'd suggest working with rc4.
<br>
<p><p>On Mon, Dec 15, 2014 at 12:57 PM, Tom Wurgler &lt;twurgl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have to take it back.  While the first job was less than a node's
</span><br>
<span class="quotelev1">&gt; worth of cores and ran properly on the cores I wanted. more testing is
</span><br>
<span class="quotelev1">&gt; revealing other problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anything that spans more than one node crashes and burns, with a core
</span><br>
<span class="quotelev1">&gt; dump, and nothing in the files to indicate why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note this is still rc2....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More testing on-going....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Tom Wurgler &lt;
</span><br>
<span class="quotelev1">&gt; twurgl_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, December 15, 2014 1:23 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] 1.8.4rc Status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to be working in rc2 after all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was still trying to use a rankfile, but it appears that is no longer
</span><br>
<span class="quotelev1">&gt; needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, December 15, 2014 8:45 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] 1.8.4rc Status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Should be there in rc4, and I thought it made it to rc2 for that matter.
</span><br>
<span class="quotelev1">&gt; I'll take a gander.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  FWIW: I'm working off-list with IBM to tighten the LSF integration so we
</span><br>
<span class="quotelev1">&gt; correctly read and follow their binding directives. This will also be in
</span><br>
<span class="quotelev1">&gt; 1.8.4 as we are in final test with it now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 15, 2014 at 5:40 AM, Tom Wurgler &lt;twurgl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Forgive me if I've missed it, but I believe using physical OR logical
</span><br>
<span class="quotelev2">&gt;&gt; core numbering was going to be
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; reimplemented in the 1.8.4 series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I've checked out rc2 and as far as I can tell, it isn't there as yet.
</span><br>
<span class="quotelev2">&gt;&gt; Is this correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Monday, December 15, 2014 8:35 AM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* [OMPI devel] 1.8.4rc Status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Trying to summarize the current situation on releasing 1.8.4. Remaining
</span><br>
<span class="quotelev2">&gt;&gt; identified issues:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  1. TCP/BTL hang under mpi-thread-multiple. Asked George to look into it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  2. hwloc updates required. Brice committed them to the hwloc 1.7 repo.
</span><br>
<span class="quotelev2">&gt;&gt; Gilles volunteered to create the PR from there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  3. Fortran f08 binding disable for compilers not meeting certain
</span><br>
<span class="quotelev2">&gt;&gt; conditions. PR from Gilles awaiting review by Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  4. Topo signature issue reported by IBM. Ralph is waiting for more
</span><br>
<span class="quotelev2">&gt;&gt; debug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  5. MPI/IO issue reported by Eric Chamberland. Gilles investigating.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  6. make check issue on SPARC. Problem and fix reported by Paul
</span><br>
<span class="quotelev2">&gt;&gt; Hargrove, Ralph will commit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  7. Linkage issue on Solaris-11 reported by Paul Hargrove. Missing the
</span><br>
<span class="quotelev2">&gt;&gt; multi-threaded C libraries, apparently need &quot;-mt=yes&quot; in both compile and
</span><br>
<span class="quotelev2">&gt;&gt; link. Need someone to investigate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Please let me know if I've missed anything.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16595.php">http://www.open-mpi.org/community/lists/devel/2014/12/16595.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16604.php">http://www.open-mpi.org/community/lists/devel/2014/12/16604.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16607.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16605.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16604.php">Tom Wurgler: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16609.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16609.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
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
