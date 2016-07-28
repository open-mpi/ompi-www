<?
$subject_val = "Re: [OMPI users] Porting MPI-3 C-program to Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 22:04:40 2016" -->
<!-- isoreceived="20160419020440" -->
<!-- sent="Mon, 18 Apr 2016 19:04:34 -0700" -->
<!-- isosent="20160419020434" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Porting MPI-3 C-program to Fortran" -->
<!-- id="2062D402-8D2E-47E1-923B-DC29DC668D40_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="57156AA2.7010800_at_reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Porting MPI-3 C-program to Fortran<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-18 22:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28961.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="28960.php">Tom Rosmond: "[OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Reply:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI uses void** arguments to pass pointer by reference so it can be updated. In Fortran, you always pass by reference so you don't need this. Just pass your Fortran pointer argument.
<br>
<p>There are MPI-3 shared memory examples in Fortran somewhere. Try Using Advanced MPI (latest edition) or MPI Trac (search for Rolf).
<br>
<p>I apologize for commenting without reading your code, but I can't open tarballs on my phone.
<br>
<p>Jeff 
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Apr 18, 2016, at 4:15 PM, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to port a simple halo exchange program from C to fortran.  It is designed to demonstrate the shared memory features of MPI-3.  The original C program was download from an Intel site, and I have modified it to simplify the port.  A tarfile of a directory with each program and example outputs is attached.  To test use Open-MPI 1.10.3rc1 (which supports MPI-3), and do :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc testmpi3.c
</span><br>
<span class="quotelev1">&gt; mpif90 -np 8 a.out | sort &gt; outc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif90 testmpi3.f90
</span><br>
<span class="quotelev1">&gt; mpif90 -np 8 a.out | sort &gt; outf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comparing outc and outf,  you can see that 'testmpi3.c' runs correctly, loading variable values from on-node processors as well as from off-node.  'testmpi3.f90' does not work correctly, as it cannot mimic the inter-node C pointers.  'testmpi3.c' correctly loads variable values from addresses, while 'testmpi3.f90' just loads the addresses.  Line 141 in 'testmpi3.c' and line 94 in 'testmpi3.f90' are the companion lines of interest.  I am not a C programmer, but as I understand it, the ** syntax of line 28 defines the variable 'shar_pntr' as a 'pointer to a pointer'.  This seems to be the secret, but unfortunately I haven't found a way to do the same in fortran.  Does anyone have a suggestion?  Is this a case where a C function must be called from fortran to perform this kind of operation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Running gcc version 4.4.7 20120313 (Red Hat 4.4.7-16), IFORT 12.0.3.174, and Open-MPI 1.10.3rc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;testmpi3.tar&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28960.php">http://www.open-mpi.org/community/lists/users/2016/04/28960.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28961.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="28960.php">Tom Rosmond: "[OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Reply:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
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
