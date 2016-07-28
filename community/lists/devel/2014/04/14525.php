<?
$subject_val = "[OMPI devel] configure fails on the trunk since r31390";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 23:03:47 2014" -->
<!-- isoreceived="20140415030347" -->
<!-- sent="Tue, 15 Apr 2014 12:03:47 +0900" -->
<!-- isosent="20140415030347" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] configure fails on the trunk since r31390" -->
<!-- id="534CA193.4080304_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] configure fails on the trunk since r31390<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 23:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Previous message:</strong> <a href="14524.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Reply:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>as reported in <a href="https://svn.open-mpi.org/trac/ompi/ticket/4521">https://svn.open-mpi.org/trac/ompi/ticket/4521</a>, configure
<br>
fails on the trunk :-(
<br>
<p>Dear OpenMPI Folks,
<br>
<p>since r31390 &lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/31390">https://svn.open-mpi.org/trac/ompi/changeset/31390</a>&gt;,
<br>
configure fails on the trunk because oshmem/include/pshmem.h.in in missing.
<br>
<p>i believe r31390 &lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/31390">https://svn.open-mpi.org/trac/ompi/changeset/31390</a>&gt;
<br>
should have moved the profiling api from oshmem/include/shmem.h.in into
<br>
oshmem/include/pshmem.h.in. instead, r31390
<br>
&lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/31390">https://svn.open-mpi.org/trac/ompi/changeset/31390</a>&gt; simply removed all
<br>
the profiling api and did not include oshmem/include/pshmem.h.in
<br>
<p>i am now trying to rebuild oshmem/include/pshmem.h.in in order to get
<br>
things work again
<br>
<p>Best regards,
<br>
<p>Gilles
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Previous message:</strong> <a href="14524.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Reply:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
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
