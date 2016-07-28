<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 22:43:29 2009" -->
<!-- isoreceived="20090620024329" -->
<!-- sent="Fri, 19 Jun 2009 20:43:23 -0600" -->
<!-- isosent="20090620024323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="71d2d8cc0906191943n677e2bc8h7851788b82ac847e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A3BF357.3030300_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] why does --rankfile need hostlist?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 22:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6288.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Previous message:</strong> <a href="6286.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6284.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6291.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6291.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Having gone around in circles on hostfile-related issues for over five years
<br>
now, I honestly have little motivation to re-open the entire discussion
<br>
again. It doesn't seem to be that daunting a requirement for those who are
<br>
using it, so I'm inclined to just leave well enough alone.
<br>
:-)
<br>
<p><p>On Fri, Jun 19, 2009 at 2:21 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The two files have a slightly different format
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and completely different meaning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somewhat agreed.  They're both related to mapping processes onto a cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hostfile specifies how many slots are on a node. The rankfile specifies
</span><br>
<span class="quotelev1">&gt; a rank and what node/slot it is to be mapped onto.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rankfiles can use relative node indexing and refer to nodes received from a
</span><br>
<span class="quotelev1">&gt; resource manager - i.e., without any hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the main part I'm concerned about.  E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat rankfile
</span><br>
<span class="quotelev1">&gt; rank 0=node0 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=node1 slot=0
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 -rf rankfile ./a.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rankfile claimed host node1 that was not allocated or oversubscribed it's
</span><br>
<span class="quotelev1">&gt; slots:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file.c at line 107
</span><br>
<span class="quotelev1">&gt; [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev1">&gt; [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev1">&gt; [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 -host node0,node1 -rf rankfile ./a.out
</span><br>
<span class="quotelev1">&gt; 0 on node0
</span><br>
<span class="quotelev1">&gt; 1 on node1
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to me that the rankfile has sufficient information to express what
</span><br>
<span class="quotelev1">&gt; I want it to do.  But mpirun won't accept this.  To fix this, I have to,
</span><br>
<span class="quotelev1">&gt; e.g., supply/maintain/specify redundant information in a hostfile or host
</span><br>
<span class="quotelev1">&gt; list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the files are intentionally quite different. Trying to combine them
</span><br>
<span class="quotelev1">&gt; would be rather ugly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.  And my issue is that I'm forced to use both when I only want
</span><br>
<span class="quotelev1">&gt; rankfile functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Thu, Jun 18, 2009 at 1:52 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to use &quot;mpirun --rankfile&quot;, I also need to specify
</span><br>
<span class="quotelev2">&gt;&gt; hosts/hostlist.  But that information is redundant with what I provide in
</span><br>
<span class="quotelev2">&gt;&gt; the rankfile.  So, from a user's point of view, this strikes me as broken.
</span><br>
<span class="quotelev2">&gt;&gt;  Yes?  Should I file a ticket, or am I missing something here about this
</span><br>
<span class="quotelev2">&gt;&gt; functionality?
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6288.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Previous message:</strong> <a href="6286.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6284.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6291.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6291.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
