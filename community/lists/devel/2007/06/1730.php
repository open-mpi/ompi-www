<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 10:42:13 2007" -->
<!-- isoreceived="20070619144213" -->
<!-- sent="Tue, 19 Jun 2007 08:41:41 -0600" -->
<!-- isosent="20070619144141" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering" -->
<!-- id="E696382C-DB48-432A-A98A-18CD2FDC0382_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4677E9C5.8040001_at_sun.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 10:41:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1731.php">Jeff Squyres: "Re: [OMPI devel] openib coord teleconf"</a>
<li><strong>Previous message:</strong> <a href="1729.php">Terry D. Dontje: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>In reply to:</strong> <a href="1729.php">Terry D. Dontje: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1732.php">Rainer Keller: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>Reply:</strong> <a href="1732.php">Rainer Keller: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2007, at 8:35 AM, Terry D. Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello dear all,
</span><br>
<span class="quotelev2">&gt;&gt; with the current numbering in mpif-common.h, the optional ddt
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REAL2 will
</span><br>
<span class="quotelev2">&gt;&gt; break the binary compatibility of the fortran interface from v1.2 to
</span><br>
<span class="quotelev2">&gt;&gt; v1.3
</span><br>
<span class="quotelev2">&gt;&gt; (see r15133).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now apart from MPI_REAL2 being of let's say rather minor importance,
</span><br>
<span class="quotelev2">&gt;&gt; the group
</span><br>
<span class="quotelev2">&gt;&gt; may feal that the numbering of datatypes is crucial to the end user
</span><br>
<span class="quotelev2">&gt;&gt; and the
</span><br>
<span class="quotelev2">&gt;&gt; (once agreed upon) allowed binary incompatibility for major version
</span><br>
<span class="quotelev2">&gt;&gt; number
</span><br>
<span class="quotelev2">&gt;&gt; changes is void.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (The most important datatype that this change affects is
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DOUBLE_PRECISION:
</span><br>
<span class="quotelev2">&gt;&gt; users will need to recompile their code with v1.3...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please raise Your hand if anybody cares.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;raising hand&gt;
</span><br>
<span class="quotelev1">&gt; Sun cares very much about this for the exact reason you state (Binary
</span><br>
<span class="quotelev1">&gt; compatibility).
</span><br>
<span class="quotelev1">&gt; I'd prefer this ddt is placed at the end of the list.
</span><br>
<p>I think we should try to avoid binary compatibility changes at the  
<br>
MPI layer if we can, even between our &quot;major&quot; releases.  Especially  
<br>
if they don't take lots of work.  Now if only we would stop changing  
<br>
the size of ompi_communicator_t :).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1731.php">Jeff Squyres: "Re: [OMPI devel] openib coord teleconf"</a>
<li><strong>Previous message:</strong> <a href="1729.php">Terry D. Dontje: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>In reply to:</strong> <a href="1729.php">Terry D. Dontje: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1732.php">Rainer Keller: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>Reply:</strong> <a href="1732.php">Rainer Keller: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
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
