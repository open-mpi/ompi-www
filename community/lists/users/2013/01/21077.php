<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 11:46:55 2013" -->
<!-- isoreceived="20130104164655" -->
<!-- sent="Fri, 4 Jan 2013 10:46:53 -0600" -->
<!-- isosent="20130104164653" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X" -->
<!-- id="D3F5AC4C-95A8-4E6C-9B4E-A5852AA3F364_at_mcs.anl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAG-c=j48JRJLPeLK-rFa7WdgV-RSABkykfqZi+Dvxbz6KaD6Rw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X<br>
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 11:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21078.php">Mariana Vargas Magana: "[OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<li><strong>Previous message:</strong> <a href="21076.php">Torbj&#246;rn Bj&#246;rkman: "[OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="21076.php">Torbj&#246;rn Bj&#246;rkman: "[OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 4, 2013, at 2:55 AM CST, Torbj&#246;rn Bj&#246;rkman wrote:
<br>
<p><span class="quotelev1">&gt; It seems that a very old bug (svn.open-mpi.org/trac/ompi/ticket/1982) is playing up when linking fortran code with mpicc on Mac OS X 10.6 and the Macports distribution openmpi @1.6.3_0+gcc44. I got it working by reading up on this discussion thread:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/11/17862.php">http://www.open-mpi.org/community/lists/users/2011/11/17862.php</a>
</span><br>
<span class="quotelev1">&gt; and applying the fix given there, add '-Wl,-commons,use_dylibs', to the c compiler flags solves the problem. 
</span><br>
<p>I'm not an Open MPI developer (or user, really), but in MPICH we also had to ensure that we passed both &quot;-Wl,-commons,use_dylibs&quot; *and* &quot;-Wl,-flat_namespace&quot; in the end.  For MPI users that do not use Fortran (and therefore don't need common blocks to work correctly between the app and the library), we provide a &quot;--enable-two-level-namespace&quot; configure option to allow users to generate two-level namespace dylibs instead.  Some combinations of third-party dylibs will require two-level namespaced MPI dylibs.
<br>
<p>I don't know if Open MPI is using &quot;-Wl,-flat_namespace&quot; or not, but this is something else that any investigation should probably check.
<br>
<p>For reference on the later MPICH discoveries about dynamically linking common symbols on Darwin: <a href="http://trac.mpich.org/projects/mpich/ticket/1590">http://trac.mpich.org/projects/mpich/ticket/1590</a>
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21078.php">Mariana Vargas Magana: "[OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<li><strong>Previous message:</strong> <a href="21076.php">Torbj&#246;rn Bj&#246;rkman: "[OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="21076.php">Torbj&#246;rn Bj&#246;rkman: "[OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
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
