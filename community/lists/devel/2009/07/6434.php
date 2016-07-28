<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 16:40:48 2009" -->
<!-- isoreceived="20090715204048" -->
<!-- sent="Wed, 15 Jul 2009 14:40:42 -0600" -->
<!-- isosent="20090715204042" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686" -->
<!-- id="71d2d8cc0907151340r6b0c9ba1k5ec465efdb92cf5f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="09A5C820-FD1E-4630-8ABB-AF5347448436_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-07-15 16:40:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6435.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>In reply to:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6435.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6435.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6438.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - interesting scenario!
<br>
<p>Definitely a &quot;bug&quot; in the code, then. What it looks like, though, is that
<br>
the jdata-&gt;num_procs is wrong. There shouldn't be any way that the num_procs
<br>
in the node array is different than jdata-&gt;num_procs.
<br>
<p>My guess is that the rank_file mapper isn't correctly maintaining the
<br>
bookkeeping when we map the procs beyond those in the rankfile. I'll dig
<br>
into it - have to fix something for Lenny anyway.
<br>
<p>Meantime, this change looks fine regardless as it (a) is better code and (b)
<br>
protects us against such errors.
<br>
<p>Thanks for catching it!
<br>
Ralph
<br>
<p><p>On Wed, Jul 15, 2009 at 2:30 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I think I found a better solution (in r21688). Here is what I was trying to
</span><br>
<span class="quotelev1">&gt; do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a more or less homogeneous cluster. In fact all processors are
</span><br>
<span class="quotelev1">&gt; identical, except that some are quad core and some dual core. Of course I
</span><br>
<span class="quotelev1">&gt; care how my processes are mapped on the quad cores, but not really on the
</span><br>
<span class="quotelev1">&gt; dual cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My approach was to use the following configuration files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In /home/bosilca/.openmpi/mca-params.conf I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_default_hostfile=/home/bosilca/.openmpi/machinefile
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file_path = /home/bosilca/.openmpi/rankfile
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file_priority = 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In /home/bosilca/.openmpi/machinefile I have the full description of the
</span><br>
<span class="quotelev1">&gt; cluster. As an example:
</span><br>
<span class="quotelev1">&gt; node01 slots=4
</span><br>
<span class="quotelev1">&gt; node02 slots=4
</span><br>
<span class="quotelev1">&gt; node03 slots=2
</span><br>
<span class="quotelev1">&gt; node04 slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And in the /home/bosilca/.openmpi/rankfile file I have:
</span><br>
<span class="quotelev1">&gt; rank 0=+n0 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=+n0 slot=1
</span><br>
<span class="quotelev1">&gt; rank 2=+n1 slot=0
</span><br>
<span class="quotelev1">&gt; rank 3=+n1 slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As long as I spawn jobs with less than 4 processes everything worked fine.
</span><br>
<span class="quotelev1">&gt; But when I used more than 4 processes, orterun segfaulted. After debugging I
</span><br>
<span class="quotelev1">&gt; found that the nodes, lrank and nrank arrays were allocated based on the
</span><br>
<span class="quotelev1">&gt; jdata-&gt;num_procs, but then filled based on the total number of processes in
</span><br>
<span class="quotelev1">&gt; the jdata-&gt;nodes array. As it appears that the jdata-&gt;num_procs is somehow
</span><br>
<span class="quotelev1">&gt; modified based on the number of entries in the rankfile, we end-up writing
</span><br>
<span class="quotelev1">&gt; outside the allocation and then segfault. Now with the latest patch, we can
</span><br>
<span class="quotelev1">&gt; cope with such a scenario by only packing the known information (and thus
</span><br>
<span class="quotelev1">&gt; not writing outside the allocated arrays).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might not be the best approach, but it is doing what I'm looking for
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2009, at 15:50 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The routed comm system relies on each daemon having complete information
</span><br>
<span class="quotelev2">&gt;&gt; as to where every process is located, so the expectation was that only full
</span><br>
<span class="quotelev2">&gt;&gt; maps would ever be sent. Thus, the nidmap code is setup to always send a
</span><br>
<span class="quotelev2">&gt;&gt; full map.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how to even generate a &quot;partial&quot; map. I assume you are doing
</span><br>
<span class="quotelev2">&gt;&gt; something offline? Is this to update changed info? If so, you'll also have
</span><br>
<span class="quotelev2">&gt;&gt; to do something to update the daemon's maps or the comm system will break
</span><br>
<span class="quotelev2">&gt;&gt; down.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 15, 2009 at 1:40 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have a question regarding the mapping. How can I declare a partial
</span><br>
<span class="quotelev2">&gt;&gt; mapping ? In fact I only care about how some of the processes are mapped on
</span><br>
<span class="quotelev2">&gt;&gt; some specific nodes. Right now if the rmaps doesn't contain information
</span><br>
<span class="quotelev2">&gt;&gt; about all nodes, we give up (before this patch we segfaulted).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does it means we always have to declare the whole mapping or it's just
</span><br>
<span class="quotelev2">&gt;&gt; that we overlooked this strange case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6435.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>In reply to:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6435.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6435.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6438.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
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
