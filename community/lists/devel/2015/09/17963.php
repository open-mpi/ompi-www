<?
$subject_val = "Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 08:23:31 2015" -->
<!-- isoreceived="20150904122331" -->
<!-- sent="Fri, 4 Sep 2015 05:23:28 -0700" -->
<!-- isosent="20150904122328" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option" -->
<!-- id="C80B7941-A324-4C1B-B0ED-91295647E829_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55E94CFC.7020205_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 08:23:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17962.php">Gilles Gouaillardet: "[OMPI devel] no more cast away const"</a>
<li><strong>In reply to:</strong> <a href="17960.php">Gilles Gouaillardet: "[OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While it would take longer on the laptop, we don&#226;&#128;&#153;t often build on laptops from bottom-up - i.e., we only have to run the full build operation when configury is changed. So I&#226;&#128;&#153;d say go ahead and remove it
<br>
<p><p><span class="quotelev1">&gt; On Sep 4, 2015, at 12:49 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff and i have been discussing the possibility of removing the --enable-mpi-profile option from ompi.
</span><br>
<span class="quotelev1">&gt; (see <a href="https://github.com/open-mpi/ompi/pull/845">https://github.com/open-mpi/ompi/pull/845</a> for the details)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Removing this option would simplify the building process, and make it crystal clear that Fortran bindings call
</span><br>
<span class="quotelev1">&gt; the C PMPI_* bindings. From a tool point of view, that means a Fortran MPI call is wrapped only once in Fortran.
</span><br>
<span class="quotelev1">&gt; Currently, a Fortran MPI call is wrapped twice, once in Fortran and once in C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We do not see any reason why someone would not want to build without the PMPI_* bindings for a production build.
</span><br>
<span class="quotelev1">&gt; That being said, the --disable-mpi-profile option can be useful to developers in order to build openmpi faster on a laptop running OSX. For example, and on my MacBook (recent but low voltage cpu with two core and two threads per core), the full build process (from autogen.pl to make install) takes around 30 minutes, and not building the PMPI_* bindings can save around 5 minutes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* when weak symbols are not available (e.g. ompi was configured with --disable-weak-symbols or weak symbols are not available by the OS, OSX for example), MPI bindings must be built twice:
</span><br>
<span class="quotelev1">&gt; - once to generate the MPI_* bindings
</span><br>
<span class="quotelev1">&gt; - an other time to generate the PMPI_* bindings */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any thoughts or objections to the removal of the --enable-mpi-profile configure option ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17960.php">http://www.open-mpi.org/community/lists/devel/2015/09/17960.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17962.php">Gilles Gouaillardet: "[OMPI devel] no more cast away const"</a>
<li><strong>In reply to:</strong> <a href="17960.php">Gilles Gouaillardet: "[OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
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
