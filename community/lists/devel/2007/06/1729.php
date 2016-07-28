<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 10:38:41 2007" -->
<!-- isoreceived="20070619143841" -->
<!-- sent="Tue, 19 Jun 2007 10:35:49 -0400" -->
<!-- isosent="20070619143549" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering" -->
<!-- id="4677E9C5.8040001_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="80F80838-E4EF-4F1A-A996-D1800199C19F_at_hlrs.de" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 10:35:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1730.php">Brian Barrett: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>Previous message:</strong> <a href="1728.php">Andrew Friedley: "Re: [OMPI devel] openib coord teleconf"</a>
<li><strong>Maybe in reply to:</strong> <a href="1727.php">Rainer Keller: "[OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1730.php">Brian Barrett: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>Reply:</strong> <a href="1730.php">Brian Barrett: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello dear all,
</span><br>
<span class="quotelev1">&gt; with the current numbering in mpif-common.h, the optional ddt  
</span><br>
<span class="quotelev1">&gt; MPI_REAL2 will
</span><br>
<span class="quotelev1">&gt; break the binary compatibility of the fortran interface from v1.2 to  
</span><br>
<span class="quotelev1">&gt; v1.3
</span><br>
<span class="quotelev1">&gt; (see r15133).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now apart from MPI_REAL2 being of let's say rather minor importance,  
</span><br>
<span class="quotelev1">&gt; the group
</span><br>
<span class="quotelev1">&gt; may feal that the numbering of datatypes is crucial to the end user  
</span><br>
<span class="quotelev1">&gt; and the
</span><br>
<span class="quotelev1">&gt; (once agreed upon) allowed binary incompatibility for major version  
</span><br>
<span class="quotelev1">&gt; number
</span><br>
<span class="quotelev1">&gt; changes is void.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (The most important datatype that this change affects is  
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_PRECISION:
</span><br>
<span class="quotelev1">&gt; users will need to recompile their code with v1.3...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please raise Your hand if anybody cares.
</span><br>
<span class="quotelev1">&gt;
</span><br>
&lt;raising hand&gt;
<br>
Sun cares very much about this for the exact reason you state (Binary 
<br>
compatibility).
<br>
I'd prefer this ddt is placed at the end of the list.
<br>
<p>thanks,
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1730.php">Brian Barrett: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>Previous message:</strong> <a href="1728.php">Andrew Friedley: "Re: [OMPI devel] openib coord teleconf"</a>
<li><strong>Maybe in reply to:</strong> <a href="1727.php">Rainer Keller: "[OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1730.php">Brian Barrett: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>Reply:</strong> <a href="1730.php">Brian Barrett: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
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
