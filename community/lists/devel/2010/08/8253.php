<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 12:06:04 2010" -->
<!-- isoreceived="20100811160604" -->
<!-- sent="Wed, 11 Aug 2010 12:05:59 -0400" -->
<!-- isosent="20100811160559" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="C88842A7.E8E2%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9BB07EDB-A453-4034-9302-5089F942619D_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 12:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8254.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8247.php">Samuel K. Gutierrez: "[OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8254.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8254.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this a modification of the existing component, or a new component ?
<br>
<p>Rich
<br>
<p><p>On 8/10/10 10:52 AM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p>Hi,
<br>
<p>I wanted to give everyone a heads-up about a new POSIX shared memory
<br>
component
<br>
that has been in the works for a while now and is ready to be pushed
<br>
into the
<br>
trunk.
<br>
<p><a href="http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new">http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new</a>
<br>
<p>Some highlights:
<br>
o New posix component now the new default.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o May address some of the shared memory performance issues users
<br>
encounter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;when OMPI's session directories are inadvertently placed on a non-
<br>
local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;filesystem.
<br>
o Silent component failover.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o In the default case, if the posix component fails initialization,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mmap will be selected.
<br>
o The sysv component will only be queried for selection if it is
<br>
placed before
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the mmap component (for example, -mca mpi_common_sm
<br>
sysv,posix,mmap).  In the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;default case, sysv will never be queried/selected.
<br>
o Per some on-list discussion, now unlinking mmaped file in both mmap
<br>
and posix
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components (see: &quot;System V Shared Memory for Open MPI: Request for
<br>
Community
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Input and Testing&quot; thread).
<br>
o  Assuming local process homogeneity with respect to all utilized
<br>
shared
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory facilities. That is, if one local process deems a
<br>
particular shared
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory facility acceptable, then ALL local processes should be
<br>
able to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;utilize that facility. As it stands, this is an important point
<br>
because one
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;process dictates to all other local processes which common sm
<br>
component will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be selected based on its own, local run-time test.
<br>
o Addressed some of George's code reuse concerns.
<br>
<p>If there are no major objections by August 17th, I'll commit the code
<br>
after the
<br>
Tuesday morning conference call.
<br>
<p>Thanks!
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8254.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8247.php">Samuel K. Gutierrez: "[OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8254.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8254.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
