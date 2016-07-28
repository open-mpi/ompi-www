<?
$subject_val = "Re: [OMPI devel] [RFC] Default hostfile MCA param";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 11:44:12 2008" -->
<!-- isoreceived="20080303164412" -->
<!-- sent="Mon, 03 Mar 2008 10:44:05 -0600" -->
<!-- isosent="20080303164405" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Default hostfile MCA param" -->
<!-- id="47CC2AD5.7070603_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3EE1A68.486C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Default hostfile MCA param<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 11:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3330.php">Tim Prins: "[OMPI devel] [RFC] Removal of orte_proc_table"</a>
<li><strong>Previous message:</strong> <a href="3328.php">Matthias Jurenz: "Re: [OMPI devel] vt configuration issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3327.php">Ralph Castain: "[OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>could this mechanism be used also to exclude a node, indicating to never 
<br>
run a job there? Here is the problem that I face quite often: students 
<br>
working on the homework forget to allocate a partition  on the cluster, 
<br>
and just type mpirun. Because of that, all jobs end up running on the 
<br>
front-end node.
<br>
<p>If we would have now the ability to specify in a default hostfile, to 
<br>
never run a job on a specified node (e.g. the front end node), users 
<br>
would get an error message when trying to do that. I am aware that 
<br>
that's a little ugly...
<br>
<p>THanks
<br>
edgar
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I forget all the formatting we are supposed to use, so I hope you'll all
</span><br>
<span class="quotelev1">&gt; just bear with me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George brought up the fact that we used to have an MCA param to specify a
</span><br>
<span class="quotelev1">&gt; hostfile to use for a job. The hostfile behavior described on the wiki,
</span><br>
<span class="quotelev1">&gt; however, doesn't provide for that option. It associates a hostfile with a
</span><br>
<span class="quotelev1">&gt; specific app_context, and provides a detailed hierarchical layout of how
</span><br>
<span class="quotelev1">&gt; mpirun is to interpret that information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I propose to do is add an MCA param called &quot;OMPI_MCA_default_hostfile&quot;
</span><br>
<span class="quotelev1">&gt; to replace the deprecated capability. If found, the system's behavior will
</span><br>
<span class="quotelev1">&gt; be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. in a managed environment, the default hostfile will be used to filter the
</span><br>
<span class="quotelev1">&gt; discovered nodes to define the available node pool. Any hostfile and/or dash
</span><br>
<span class="quotelev1">&gt; host options provided to an app_context will be used to further filter the
</span><br>
<span class="quotelev1">&gt; node pool to define the specific nodes for use by that app_context. Thus,
</span><br>
<span class="quotelev1">&gt; nodes in the hostfile and dash host options given to an app_context -must-
</span><br>
<span class="quotelev1">&gt; also be in the default hostfile in order to be available for use by that
</span><br>
<span class="quotelev1">&gt; app_context - any nodes in the app_context options that are not in the
</span><br>
<span class="quotelev1">&gt; default hostfile will be ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. in an unmanaged environment, the default hostfile will be used to define
</span><br>
<span class="quotelev1">&gt; the available node pool. Any hostfile and/or dash host options provided to
</span><br>
<span class="quotelev1">&gt; an app_context will be used to filter the node pool to define the specific
</span><br>
<span class="quotelev1">&gt; nodes for use by that app_context, subject to the previous caveat. However,
</span><br>
<span class="quotelev1">&gt; add-hostfile and add-host options will add nodes to the node pool for use
</span><br>
<span class="quotelev1">&gt; -only- by the associated app_context.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe this proposed behavior is consistent with that described on the
</span><br>
<span class="quotelev1">&gt; wiki, and would be relatively easy to implement. If nobody objects, I will
</span><br>
<span class="quotelev1">&gt; do so by end-of-day 3/6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments, suggestions, objections - all are welcome!
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3330.php">Tim Prins: "[OMPI devel] [RFC] Removal of orte_proc_table"</a>
<li><strong>Previous message:</strong> <a href="3328.php">Matthias Jurenz: "Re: [OMPI devel] vt configuration issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3327.php">Ralph Castain: "[OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
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
