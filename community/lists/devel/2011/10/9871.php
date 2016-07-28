<?
$subject_val = "[OMPI devel] MPI 2.2 datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 17:56:48 2011" -->
<!-- isoreceived="20111020215648" -->
<!-- sent="Thu, 20 Oct 2011 17:57:41 -0400" -->
<!-- isosent="20111020215741" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI 2.2 datatypes" -->
<!-- id="4EA09955.6030305_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI 2.2 datatypes<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-20 17:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9872.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="9870.php">Ralph Castain: "[OMPI devel] Determining locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9894.php">Jeff Squyres: "Re: [OMPI devel] MPI 2.2 datatypes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9894.php">Jeff Squyres: "Re: [OMPI devel] MPI 2.2 datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In MTT testing, we check OMPI version number to decide whether to test 
<br>
MPI 2.2 datatypes.
<br>
<p>Specifically, in intel_tests/src/mpitest_def.h:
<br>
<p>#define MPITEST_2_2_datatype 0
<br>
#if defined(OPEN_MPI)
<br>
#    if (OMPI_MAJOR_VERSION &gt; 1) || (OMPI_MAJOR_VERSION == 1 &amp;&amp; 
<br>
OMPI_MINOR_VERSION &gt;= 7)
<br>
#        undef MPITEST_2_2_datatype
<br>
#        define MPITEST_2_2_datatype 1
<br>
#    endif
<br>
#endif
<br>
#if MPI_VERSION &gt; 2 || (MPI_VERSION == 2 &amp;&amp; MPI_SUBVERSION &gt;= 2)
<br>
#    undef MPITEST_2_2_datatype
<br>
#    define MPITEST_2_2_datatype 1
<br>
#endif
<br>
<p>The check looks for OMPI 1.7 or higher, but we introduced support for 
<br>
MPI 2.2. datatypes in 1.5.4.  So, can we check for 1.5.4 or higher?  Or, 
<br>
is it possible that this support might not go into the first 1.6 
<br>
release?  I'm willing to make the changes, but just wanted some guidance 
<br>
on what to expect in 1.6.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9872.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="9870.php">Ralph Castain: "[OMPI devel] Determining locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9894.php">Jeff Squyres: "Re: [OMPI devel] MPI 2.2 datatypes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9894.php">Jeff Squyres: "Re: [OMPI devel] MPI 2.2 datatypes"</a>
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
