<?
$subject_val = "Re: [OMPI devel] MPI 2.2 datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 08:31:33 2011" -->
<!-- isoreceived="20111104123133" -->
<!-- sent="Fri, 4 Nov 2011 08:31:28 -0400" -->
<!-- isosent="20111104123128" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI 2.2 datatypes" -->
<!-- id="93BB9712-7A37-4194-B26D-EA1B99C1F6A6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EA09955.6030305_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI 2.2 datatypes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 08:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9895.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="9893.php">Ralph Castain: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9871.php">Eugene Loh: "[OMPI devel] MPI 2.2 datatypes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2011, at 5:57 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; In MTT testing, we check OMPI version number to decide whether to test MPI 2.2 datatypes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, in intel_tests/src/mpitest_def.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define MPITEST_2_2_datatype 0
</span><br>
<span class="quotelev1">&gt; #if defined(OPEN_MPI)
</span><br>
<span class="quotelev1">&gt; #    if (OMPI_MAJOR_VERSION &gt; 1) || (OMPI_MAJOR_VERSION == 1 &amp;&amp; OMPI_MINOR_VERSION &gt;= 7)
</span><br>
<span class="quotelev1">&gt; #        undef MPITEST_2_2_datatype
</span><br>
<span class="quotelev1">&gt; #        define MPITEST_2_2_datatype 1
</span><br>
<span class="quotelev1">&gt; #    endif
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #if MPI_VERSION &gt; 2 || (MPI_VERSION == 2 &amp;&amp; MPI_SUBVERSION &gt;= 2)
</span><br>
<span class="quotelev1">&gt; #    undef MPITEST_2_2_datatype
</span><br>
<span class="quotelev1">&gt; #    define MPITEST_2_2_datatype 1
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The check looks for OMPI 1.7 or higher, but we introduced support for MPI 2.2. datatypes in 1.5.4.  
</span><br>
<p>Oops, ya, you're right.
<br>
<p><span class="quotelev1">&gt; So, can we check for 1.5.4 or higher?  
</span><br>
<p>Yes, we probably should.
<br>
<p><span class="quotelev1">&gt; Or, is it possible that this support might not go into the first 1.6 release?  I'm willing to make the changes, but just wanted some guidance on what to expect in 1.6.
</span><br>
<p>1.6 will be a direct roll-over from the last 1.5.x (per <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a>).  1.7 will be the next branch from the trunk.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9895.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="9893.php">Ralph Castain: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9871.php">Eugene Loh: "[OMPI devel] MPI 2.2 datatypes"</a>
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
