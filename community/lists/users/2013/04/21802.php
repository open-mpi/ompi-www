<?
$subject_val = "Re: [OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 22:52:27 2013" -->
<!-- isoreceived="20130426025227" -->
<!-- sent="Thu, 25 Apr 2013 19:52:22 -0700" -->
<!-- isosent="20130426025222" -->
<!-- name="W Spector" -->
<!-- email="w6ws_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="5179EBE6.6060401_at_earthlink.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5179349F.10309_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] ierr vs ierror in F90 mpi module<br>
<strong>From:</strong> W Spector (<em>w6ws_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 22:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21803.php">Mehmet Belgin: "[OMPI users] ADIOI Lock problems on NFS and Panasas with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I tried building 1.7.1 on my Ubuntu system.  The default gfortran is 
<br>
v4.6.3, so configure won't enable the mpi_f08 module build.  I also 
<br>
tried a three week old snapshot of the gfortran 4.9 trunk.  This has 
<br>
Tobias's new TYPE(*) in it, but not his latest !GCC$ attributes 
<br>
NO_ARG_CHECK stuff.  However configure still won't enable the mpi_f08 
<br>
module.
<br>
<p>Is there a trick to getting a recent gfortran to compile the mpi_f08 module?
<br>
<p>I went into the openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts 
<br>
directory and modified the files to use ierror instead of ierr.  (One 
<br>
well-crafted line of shell script.)  Did the same with a couple of .h.in 
<br>
files in the use-mpi-tkr and use-mpi-ignore-tkr directories, and 
<br>
use-mpi-tkr/attr_fn-f90-interfaces.h.in.  (One editor command each.)
<br>
<p>With the above, the mpi module is in much better shape.  However there 
<br>
are still some scattered incorrect non-ierror argument names.  A few 
<br>
examples from the code I am working with:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Type_create_struct: The 2nd argument should be 
<br>
&quot;array_of_blocklengths&quot;, instead of &quot;array_of_block_lengths&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Type_commit: &quot;datatype&quot; instead of &quot;type&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Type_free: Again, &quot;datatype&quot; instead of &quot;type&quot;
<br>
<p>There are more...
<br>
<p>Walter
<br>
<p>On 04/25/2013 06:50 AM, W Spector wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just downloaded 1.7.1.  The new files in the use-mpi-f08 look great!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However the use-mpi-tkr and use-mpi-ignore-tkr directories don't fare so
</span><br>
<span class="quotelev1">&gt; well.  Literally all the interfaces are still 'ierr'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I realize that both the F90 mpi module and interface checking,
</span><br>
<span class="quotelev1">&gt; were optional prior to MPI 3.0, the final argument has been called
</span><br>
<span class="quotelev1">&gt; 'ierror' since MPI 1!  This really should be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Walter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/24/2013 06:08 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you try v1.7.1?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We did a major Fortran revamp in the 1.7.x series to bring it up to
</span><br>
<span class="quotelev2">&gt;&gt; speed with MPI-3 Fortran stuff (at least mostly).  I mention MPI-3
</span><br>
<span class="quotelev2">&gt;&gt; because the name-based parameter passing stuff wasn't guaranteed until
</span><br>
<span class="quotelev2">&gt;&gt; MPI-3.  I think 1.7.x should have gotten all the name-based parameter
</span><br>
<span class="quotelev2">&gt;&gt; passing stuff correct (please let me know if you find any bugs!).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to be clear: it is unlikely that we'll be updating the Fortran
</span><br>
<span class="quotelev2">&gt;&gt; support in the 1.6.x series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2013, at 8:52 PM, W Spector &lt;w6ws_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The MPI Standard specifies to use 'ierror' for the final argument in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; most Fortran MPI calls.  However the Openmpi f90 module defines it as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being 'ierr'.  This messes up those who want to use keyword=value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; syntax in their calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just checked the latest 1.6.4 release and it is still broken.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this something that can be fixed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Walter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21803.php">Mehmet Belgin: "[OMPI users] ADIOI Lock problems on NFS and Panasas with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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
