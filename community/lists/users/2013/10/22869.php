<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 16:41:10 2013" -->
<!-- isoreceived="20131030204110" -->
<!-- sent="Wed, 30 Oct 2013 13:40:47 -0700" -->
<!-- isosent="20131030204047" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="B3C6981E-8723-4202-9374-25308B2C9D1B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAEGKUyzW7RatHK4YhZA+ry7Fu0H1D7txbxuD-96wEKGTEiYzSQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 16:40:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22870.php">Ralph Castain: "Re: [OMPI users] ofed installation"</a>
<li><strong>Previous message:</strong> <a href="22868.php">Jim Parker: "[OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22868.php">Jim Parker: "[OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22872.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22872.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe this has been a long-standing issue with the MPI definitions - they specify &quot;int&quot;, which on most systems will default to int32_t. Thus, there are no prototypes for 64-bit interfaces
<br>
<p>On Oct 30, 2013, at 1:35 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;   I have recently built a cluster that uses the 64-bit indexing feature of OpenMPI following the directions at
</span><br>
<span class="quotelev1">&gt; <a href="http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers">http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is what are the new prototypes for the MPI calls ?
</span><br>
<span class="quotelev1">&gt; specifically
</span><br>
<span class="quotelev1">&gt; MPI_RECV
</span><br>
<span class="quotelev1">&gt; MPI_Allgathterv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm curious because some off my local variables get killed (set to null) upon my first call to MPI_RECV.  Typically, this is due (in Fortran) to someone not setting the 'status' variable to an appropriate array size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, my declaration for status is
</span><br>
<span class="quotelev1">&gt; integer (kind=mpi_int_kind) :: status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A typical call to MPI_Recv is
</span><br>
<span class="quotelev1">&gt; call MPI_RECV(num_array, length, MPI_INTEGER, 0,0,MPI_COMM_WORLD, status, mpierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where the following definitions are used,
</span><br>
<span class="quotelev1">&gt; mpi_int_kind=8 (for gcc/gfortran compiler)  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; integer,parameter :: length = &lt;some-value&gt;
</span><br>
<span class="quotelev1">&gt; integer :: num_array(length)
</span><br>
<span class="quotelev1">&gt; integer :: mpierr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My review of mpif.h and mpi.h seem to indicate that the functions are defined as C int types and therefore , I assume, the coercion during the compile makes the library support 64-bit indexing.  ie. int -&gt; long int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The documentation on MPI_Recv just mentions the prototype for ints (32-bit) , I can't find anything for 64-bit
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.6/">http://www.open-mpi.org/doc/v1.6/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt; The output from ompi_info --all is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; --Jim Parker
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, the code works fine when linked against a 32-bit MPI library.  
</span><br>
<span class="quotelev1">&gt; &lt;openmpi1.6.5-info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22869/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22870.php">Ralph Castain: "Re: [OMPI users] ofed installation"</a>
<li><strong>Previous message:</strong> <a href="22868.php">Jim Parker: "[OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22868.php">Jim Parker: "[OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22872.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22872.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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
