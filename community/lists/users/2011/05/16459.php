<?
$subject_val = "Re: [OMPI users] Mixing the FORTRAN and C APIs.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 11:27:08 2011" -->
<!-- isoreceived="20110506152708" -->
<!-- sent="Fri, 6 May 2011 08:27:02 -0700" -->
<!-- isosent="20110506152702" -->
<!-- name="Tim Prince" -->
<!-- email="tcprince_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing the FORTRAN and C APIs." -->
<!-- id="BLU0-SMTP16438C74C38CF35A6156F8CB7830_at_phx.gbl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTin-fEOJBOLR9XrGG+dWKmjujOdKjA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing the FORTRAN and C APIs.<br>
<strong>From:</strong> Tim Prince (<em>tcprince_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 11:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16460.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] SpMV Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="16458.php">Tim Hutt: "[OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>In reply to:</strong> <a href="16458.php">Tim Hutt: "[OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/6/2011 7:58 AM, Tim Hutt wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to use PARPACK in a C++ app I have written. This is an
</span><br>
<span class="quotelev1">&gt; FORTRAN MPI routine used to calculate SVDs. The simplest way I found
</span><br>
<span class="quotelev1">&gt; to do this is to use f2c to convert it to C, and then call the
</span><br>
<span class="quotelev1">&gt; resulting functions from my C++ code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However PARPACK requires that I write some user-defined operations to
</span><br>
<span class="quotelev1">&gt; be parallel using MPI. So far I have just been calling the FORTRAN
</span><br>
<span class="quotelev1">&gt; versions of the MPI functions from C, because I wasn't sure whether
</span><br>
<span class="quotelev1">&gt; you can mix the APIs. I.e. I've been doing this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----8&lt;-----
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	int mpi_init__(integer *);
</span><br>
<span class="quotelev1">&gt; 	int mpi_comm_rank__(integer *, integer *, integer *);
</span><br>
<span class="quotelev1">&gt; 	int mpi_comm_size__(integer *, integer *, integer *);
</span><br>
<span class="quotelev1">&gt; 	int mpi_finalize__(integer *);
</span><br>
<span class="quotelev1">&gt; 	int mpi_allgatherv__(doublereal *, integer *, integer *, doublereal
</span><br>
<span class="quotelev1">&gt; *, integer *, integer *, integer *, integer *);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	// OpenMPI version.
</span><br>
<span class="quotelev1">&gt; 	const integer MPI_DOUBLE_PRECISION = 17;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bool MPI__Init()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	integer ierr = 0;
</span><br>
<span class="quotelev1">&gt; 	mpi_init__(&amp;ierr);
</span><br>
<span class="quotelev1">&gt; 	return ierr == 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works so far, but is getting quite tedious and seems like the wrong
</span><br>
<span class="quotelev1">&gt; way to do it. Also I don't know if it's related but when I use
</span><br>
<span class="quotelev1">&gt; allgatherv it gives me a segfault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [panic:20659] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [panic:20659] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [panic:20659] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [panic:20659] Failing at address: 0x7f4effffffe8
</span><br>
<span class="quotelev1">&gt; [panic:20659] [ 0] /lib/libc.so.6(+0x33af0) [0x7f4f8fd62af0]
</span><br>
<span class="quotelev1">&gt; [panic:20659] [ 1] /usr/lib/libstdc++.so.6(_ZNSolsEi+0x3) [0x7f4f905ec0c3]
</span><br>
<span class="quotelev1">&gt; [panic:20659] [ 2] ./TDLSM() [0x510322]
</span><br>
<span class="quotelev1">&gt; [panic:20659] [ 3] ./TDLSM() [0x50ec8d]
</span><br>
<span class="quotelev1">&gt; [panic:20659] [ 4] ./TDLSM() [0x404ee7]
</span><br>
<span class="quotelev1">&gt; [panic:20659] [ 5] /lib/libc.so.6(__libc_start_main+0xfd) [0x7f4f8fd4dc4d]
</span><br>
<span class="quotelev1">&gt; [panic:20659] [ 6] ./TDLSM() [0x404c19]
</span><br>
<span class="quotelev1">&gt; [panic:20659] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question is: Can I intermix the C and FORTRAN APIs within one
</span><br>
<span class="quotelev1">&gt; program? Oh and also I think the cluster I will eventually run this on
</span><br>
<span class="quotelev1">&gt; (cx1.hpc.ic.ac.uk, if anyone is from Imperial) doesn't use OpenMP, so
</span><br>
<span class="quotelev1">&gt; what about other MPI implementations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
If you want to use the MPI Fortran library, don't convert your Fortran 
<br>
to C.  It's difficult to understand why you would consider f2c a 
<br>
&quot;simplest way,&quot; but at least it should allow you to use ordinary C MPI 
<br>
function calls.
<br>
The MPI Fortran library must be built against the same Fortran run-time 
<br>
libraries which you use for your own Fortran code.  The header files for 
<br>
the Fortran MPI calls probably don't work in C.  It would be a big 
<br>
struggle to get them to work with f2c, since f2c doesn't have much 
<br>
ability to deal with headers other than its own.
<br>
There's no reason you can't make both C and Fortran MPI calls in the 
<br>
same application.  If you mean mixing a send from one language with a 
<br>
receive in another, I think most would avoid that.
<br>
Whether someone uses OpenMP has little to do with choice of MPI 
<br>
implementation.  Some of us still may be cursing the choice of OpenMPI 
<br>
for the name of an MPI implementation.
<br>
<pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16460.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] SpMV Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="16458.php">Tim Hutt: "[OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>In reply to:</strong> <a href="16458.php">Tim Hutt: "[OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
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
