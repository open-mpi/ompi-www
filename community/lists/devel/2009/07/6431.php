<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 15:51:00 2009" -->
<!-- isoreceived="20090715195100" -->
<!-- sent="Wed, 15 Jul 2009 13:50:53 -0600" -->
<!-- isosent="20090715195053" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686" -->
<!-- id="71d2d8cc0907151250nbc65854j85afb4554eb69893_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9D8D4E26-DA88-4A69-AD88-213DD32A1B72_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 15:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6432.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6430.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>In reply to:</strong> <a href="6430.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The routed comm system relies on each daemon having complete information as
<br>
to where every process is located, so the expectation was that only full
<br>
maps would ever be sent. Thus, the nidmap code is setup to always send a
<br>
full map.
<br>
<p>I don't know how to even generate a &quot;partial&quot; map. I assume you are doing
<br>
something offline? Is this to update changed info? If so, you'll also have
<br>
to do something to update the daemon's maps or the comm system will break
<br>
down.
<br>
<p>Ralph
<br>
<p>On Wed, Jul 15, 2009 at 1:40 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I have a question regarding the mapping. How can I declare a partial
</span><br>
<span class="quotelev1">&gt; mapping ? In fact I only care about how some of the processes are mapped on
</span><br>
<span class="quotelev1">&gt; some specific nodes. Right now if the rmaps doesn't contain information
</span><br>
<span class="quotelev1">&gt; about all nodes, we give up (before this patch we segfaulted).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it means we always have to declare the whole mapping or it's just that
</span><br>
<span class="quotelev1">&gt; we overlooked this strange case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-07-15 15:36:53 EDT (Wed, 15 Jul 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 21686
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21686">https://svn.open-mpi.org/trac/ompi/changeset/21686</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Reorder the nidmap encoding function. Add a check to make sure we don't
</span><br>
<span class="quotelev2">&gt;&gt; write
</span><br>
<span class="quotelev2">&gt;&gt; outside the boundaries of the allocated array.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, the problem is still there. If we have rmaps file containing only
</span><br>
<span class="quotelev2">&gt;&gt; partial information the num_procs get set to the wrong value (the number
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; hosts in the rmaps file instead of the number of processes requested on
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; command line).
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6432.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6430.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>In reply to:</strong> <a href="6430.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
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
