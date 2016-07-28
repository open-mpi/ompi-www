<?
$subject_val = "[OMPI devel] [RFC] Default hostfile MCA param";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 22:24:24 2008" -->
<!-- isoreceived="20080301032424" -->
<!-- sent="Fri, 29 Feb 2008 20:24:08 -0700" -->
<!-- isosent="20080301032408" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Default hostfile MCA param" -->
<!-- id="C3EE1A68.486C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [RFC] Default hostfile MCA param<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 22:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3328.php">Matthias Jurenz: "Re: [OMPI devel] vt configuration issues"</a>
<li><strong>Previous message:</strong> <a href="3326.php">Jeff Squyres: "Re: [OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forget all the formatting we are supposed to use, so I hope you'll all
<br>
just bear with me.
<br>
<p>George brought up the fact that we used to have an MCA param to specify a
<br>
hostfile to use for a job. The hostfile behavior described on the wiki,
<br>
however, doesn't provide for that option. It associates a hostfile with a
<br>
specific app_context, and provides a detailed hierarchical layout of how
<br>
mpirun is to interpret that information.
<br>
<p>What I propose to do is add an MCA param called &quot;OMPI_MCA_default_hostfile&quot;
<br>
to replace the deprecated capability. If found, the system's behavior will
<br>
be:
<br>
<p>1. in a managed environment, the default hostfile will be used to filter the
<br>
discovered nodes to define the available node pool. Any hostfile and/or dash
<br>
host options provided to an app_context will be used to further filter the
<br>
node pool to define the specific nodes for use by that app_context. Thus,
<br>
nodes in the hostfile and dash host options given to an app_context -must-
<br>
also be in the default hostfile in order to be available for use by that
<br>
app_context - any nodes in the app_context options that are not in the
<br>
default hostfile will be ignored.
<br>
<p>2. in an unmanaged environment, the default hostfile will be used to define
<br>
the available node pool. Any hostfile and/or dash host options provided to
<br>
an app_context will be used to filter the node pool to define the specific
<br>
nodes for use by that app_context, subject to the previous caveat. However,
<br>
add-hostfile and add-host options will add nodes to the node pool for use
<br>
-only- by the associated app_context.
<br>
<p><p>I believe this proposed behavior is consistent with that described on the
<br>
wiki, and would be relatively easy to implement. If nobody objects, I will
<br>
do so by end-of-day 3/6.
<br>
<p>Comments, suggestions, objections - all are welcome!
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3328.php">Matthias Jurenz: "Re: [OMPI devel] vt configuration issues"</a>
<li><strong>Previous message:</strong> <a href="3326.php">Jeff Squyres: "Re: [OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
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
