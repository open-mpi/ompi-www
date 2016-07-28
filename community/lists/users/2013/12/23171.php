<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 10 11:42:29 2013" -->
<!-- isoreceived="20131210164229" -->
<!-- sent="Tue, 10 Dec 2013 16:42:27 +0000" -->
<!-- isosent="20131210164227" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="87wqjc64jw.fsf_-__at_pc102091.liv.ac.uk" -->
<!-- inreplyto="13E1EFAC-234E-4918-B78B-09178B7125D3_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-10 11:42:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23172.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23170.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: Open MPI can't launch remote nodes via SSH"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22976.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; No. The Fortran status must __always__ be 6, because we need enough room to correctly convert the 3 useful variables to Fortran, plus copy the rest of the hidden things.These 6 type will be INTEGER (which will then be different than the C int). The C&lt;-&gt;F stuff will do not a memcpy but copy all elements while casting to the correct Fortran type (ompi_fortran_integer_t).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The fact that we are talking about 3 integers in the Fortran status might explain the segfault. This number should never be 3 it should be ALWAYS 6 or the function MPI_Status_c2f will clearly overwrite the memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did manage to try this idea on an -i8 enabled Open MPI version. The test application provided on one of the early email successfully complete without the segfault and with a correct output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  node=                     0 and size=                      2 : Hello
</span><br>
<span class="quotelev1">&gt;  node=                     1 and size=                      2 : Hello
</span><br>
<span class="quotelev1">&gt;  Iam =                     1 and my temp value is =                      1
</span><br>
<span class="quotelev1">&gt;  Iam =                     0 and my temp value is =                      1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the fix is trivial, make MPI_STATUS_SIZE always equal to sizeof(MPI_Status)/sizeof(int). Everything else is already taken care of by the current Fortran &lt;-&gt; C infrastructure.
</span><br>
<p>This doesn't seem to have been fixed, and I think it's going to bite
<br>
here.  Is this the right change?
<br>
<p><p>
<br><p>
--- openmpi-1.6.5/ompi/config/ompi_setup_mpi_fortran.m4~	2012-04-03 15:30:24.000000000 +0100
<br>
+++ openmpi-1.6.5/ompi/config/ompi_setup_mpi_fortran.m4	2013-12-10 12:23:54.232854527 +0000
<br>
@@ -127,8 +127,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([skipped (no Fortran bindings)])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bytes=`expr 4 \* $ac_cv_sizeof_int + $ac_cv_sizeof_size_t`
<br>
-        num_integers=`expr $bytes / $OMPI_SIZEOF_FORTRAN_INTEGER`
<br>
-        sanity=`expr $num_integers \* $OMPI_SIZEOF_FORTRAN_INTEGER`
<br>
+        num_integers=`expr $bytes / $ac_cv_sizeof_int`
<br>
+        sanity=`expr $num_integers \* $ac_cv_sizeof_int`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$sanity&quot; != &quot;$bytes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([unknown!])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([WARNING: Size of C int: $ac_cv_sizeof_int])
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23172.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23170.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: Open MPI can't launch remote nodes via SSH"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22976.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
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
