<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 10:34:42 2008" -->
<!-- isoreceived="20080227153442" -->
<!-- sent="Wed, 27 Feb 2008 10:34:37 -0500" -->
<!-- isosent="20080227153437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target" -->
<!-- id="D0C7460E-4F3D-41F1-B168-B51E4C77007A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFFA70C9C6.E21089F2-ONC12573F8.00038BEF-C12573F8.0052E13E_at_de.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 10:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5082.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5080.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5070.php">Mathias PUETZ: "[OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5118.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5118.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 23, 2008, at 10:05 AM, Mathias PUETZ wrote:
<br>
<p><span class="quotelev1">&gt; 1. Could you please fix the bug above in the configure script ?
</span><br>
<p>Thanks for the detailed ananlysis.  Can you confirm that this patch  
<br>
works for you before I commit it:
<br>
<p>Index: config/ompi_config_asm.m4
<br>
===================================================================
<br>
--- config/ompi_config_asm.m4	(revision 17620)
<br>
+++ config/ompi_config_asm.m4	(working copy)
<br>
@@ -1047,7 +1047,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([whether possible to generate assembly  
<br>
file])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mkdir -p opal/asm/generated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_asm_file=&quot;atomic-local.s&quot;
<br>
-            ompi_try='$PERL $top_ompi_srcdir/opal/asm/generate-asm.pl  
<br>
$ompi_cv_asm_arch $ompi_cv_asm_format $top_ompi_srcdir/opal/asm/base  
<br>
$top_ompi_builddir/opal/asm/generated/$ompi_cv_asm_file &gt;conftest.out  
<br>
2&gt;&amp;1'
<br>
+            ompi_try='$PERL $top_ompi_srcdir/opal/asm/generate-asm.pl  
<br>
$ompi_cv_asm_arch &quot;$ompi_cv_asm_format&quot; $top_ompi_srcdir/opal/asm/base  
<br>
$top_ompi_builddir/opal/asm/generated/$ompi_cv_asm_file &gt;conftest.out  
<br>
2&gt;&amp;1'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if AC_TRY_EVAL(ompi_try) ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# save the warnings
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat conftest.out &gt;&amp;AC_FD_CC
<br>
<p><span class="quotelev1">&gt; 2. Could someone explain, why configure might determine a different  
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_format
</span><br>
<span class="quotelev1">&gt;     than stated in the asm-data.txt database ?
</span><br>
<span class="quotelev1">&gt;     Maybe the meaning of the cryptic assmebler format string is  
</span><br>
<span class="quotelev1">&gt; explained somewhere.
</span><br>
<span class="quotelev1">&gt;     If so, could someone point me to the explanation ?
</span><br>
<p><p>I have to defer to Brian on this one...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5082.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5080.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5070.php">Mathias PUETZ: "[OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5118.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5118.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
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
