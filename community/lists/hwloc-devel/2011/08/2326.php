<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3709";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 04:12:05 2011" -->
<!-- isoreceived="20110829081205" -->
<!-- sent="Mon, 29 Aug 2011 10:12:00 +0200" -->
<!-- isosent="20110829081200" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3709" -->
<!-- id="4E5B49D0.3030701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201108290750.p7T7o9NP008481_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3709<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 04:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2327.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="2325.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (v1.3) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some notes about this commit:
<br>
<p>The interface already supports having multiple distance matrices for the
<br>
same type. For instance, if you have distances between NUMA nodes of a
<br>
single machine, once you assemble multiple machines, you get multiple
<br>
distance submatrices. However, loading from XML is the only way to get
<br>
multiple submatrices for the same type.
<br>
<p>Since v1.3, hwloc_topology_set_distance_matrix() will replace the
<br>
previous matrix for the given type (or remove it if passing a NULL
<br>
matrix). So if you want to set multiple submatrices, you have to
<br>
assemble them into a global matrix. This shouldn't be a problem in most
<br>
cases, except if there are collisions between the physical indexes of
<br>
the submatrices (distances between NUMA nodes #0 and #1 of two machines
<br>
become distances between NUMA nodes #0, #1, #0 and #1... does not work).
<br>
To workaround this, people should add distances before agregating
<br>
multiple machines into a single topology. I don't think that's a very
<br>
big deal.
<br>
<p>We could:
<br>
* Allow to set multiple submatrices with
<br>
hwloc_topology_set_distance_matrix(). We wouldn't &quot;replace&quot; anymore. And
<br>
giving a NULL matrix would remove all existing matrices for the given
<br>
type. Changing this behavior should be done *before v1.3 final* because
<br>
the replace/remove features were added in v1.3.
<br>
* Add a set_distances() variant taking logical indexes. Can be added
<br>
later easily. Would need careful documentation because adding a distance
<br>
matrix can cause grouping which would change logical indexes.
<br>
<p>I am rethinking all this because I am looking at adding throughput
<br>
matrices. So we may have multiple matrices per type anyway, but they
<br>
will contain different types of information. If we're adding a new
<br>
set_distances() variant, we may add a parameter specifying whether the
<br>
values are latencies or throughputs for instance.
<br>
<p>Brice
<br>
<p><p><p>Le 29/08/2011 09:50, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2011-08-29 03:50:07 EDT (Mon, 29 Aug 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 3709
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3709">https://svn.open-mpi.org/trac/hwloc/changeset/3709</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Clarify distances doc (and make it more future proof)
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc.h |     9 +++++----                               
</span><br>
<span class="quotelev1">&gt;    1 files changed, 5 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/hwloc.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/hwloc.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/hwloc.h	2011-08-29 03:50:07 EDT (Mon, 29 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -482,12 +482,12 @@
</span><br>
<span class="quotelev1">&gt;   * containing object is the root object of the topology, then the
</span><br>
<span class="quotelev1">&gt;   * distances are available for all objects in the machine.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; - * The distance may be a memory latency, as defined by the ACPI SLIT
</span><br>
<span class="quotelev1">&gt; - * specification. If so, the \p latency pointer will not be \c NULL
</span><br>
<span class="quotelev1">&gt; - * and the pointed array will contain non-zero values.
</span><br>
<span class="quotelev1">&gt; + * If the \p latency pointer is not \c NULL, the pointed array contains
</span><br>
<span class="quotelev1">&gt; + * memory latencies (non-zero values), as defined by the ACPI SLIT
</span><br>
<span class="quotelev1">&gt; + * specification.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * In the future, some other types of distances may be considered.
</span><br>
<span class="quotelev1">&gt; - * In these cases, \p latency will be \c NULL.
</span><br>
<span class="quotelev1">&gt; + * In these cases, \p latency may be \c NULL.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  struct hwloc_distances_s {
</span><br>
<span class="quotelev1">&gt;    unsigned relative_depth;	/**&lt; \brief Relative depth of the considered objects
</span><br>
<span class="quotelev1">&gt; @@ -780,6 +780,7 @@
</span><br>
<span class="quotelev1">&gt;   * array. The \p distances matrix follows the same order.
</span><br>
<span class="quotelev1">&gt;   * The distance from object i to object j in the i*nbobjs+j.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; + * A single latency matrix may be defined for each type.
</span><br>
<span class="quotelev1">&gt;   * If another distance matrix already exists for the given type,
</span><br>
<span class="quotelev1">&gt;   * either because the user specified it or because the OS offers it,
</span><br>
<span class="quotelev1">&gt;   * it will be replaced by the given one.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2327.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="2325.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (v1.3) ==="</a>
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
