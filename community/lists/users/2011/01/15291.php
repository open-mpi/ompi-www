<?
$subject_val = "Re: [OMPI users] questions about MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 16:20:45 2011" -->
<!-- isoreceived="20110106212045" -->
<!-- sent="Thu, 06 Jan 2011 13:20:34 -0800" -->
<!-- isosent="20110106212034" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about MPI-IO" -->
<!-- id="1294348834.4217.11.camel_at_cedar.reachone.com" -->
<!-- inreplyto="20110106205257.GC14478_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] questions about MPI-IO<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 16:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15292.php">Barrett, Brian W: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Previous message:</strong> <a href="15290.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>In reply to:</strong> <a href="15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
<p>Thanks for the clarification.  I am using a old school solution to the
<br>
problem, namely with a little 12 line subroutine that simply reverses
<br>
the order of the bytes in each floating point word.  Before fortran
<br>
compilers supported 'byteswapping', this was the way we did it, and it
<br>
still does the job.
<br>
<p>T. Rosmond
<br>
<p><p>On Thu, 2011-01-06 at 14:52 -0600, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; On Tue, Dec 21, 2010 at 06:38:59PM -0800, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I use the function MPI_FILE_SET_VIEW with the 'native'
</span><br>
<span class="quotelev2">&gt; &gt; data representation and correctly write a file with MPI_FILE_WRITE_ALL.
</span><br>
<span class="quotelev2">&gt; &gt; However, if I change to the 'external32' representation, the file is
</span><br>
<span class="quotelev2">&gt; &gt; truncated, with a length that suggest that either only one process did a
</span><br>
<span class="quotelev2">&gt; &gt; write, or each process wrote to the same location.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi T. Rosmond.  'external32', while part of the standard, has not been
</span><br>
<span class="quotelev1">&gt; widely implemented in MPI-IO libraries.  Neither OpenMPI nor MPICH2
</span><br>
<span class="quotelev1">&gt; support that data representation.  I suspect the MPI-IO routines are
</span><br>
<span class="quotelev1">&gt; returning an error in ierr (at least I hope they are). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you check the error code against MPI_SUCCESS and process it with
</span><br>
<span class="quotelev1">&gt; MPI_ERROR_STRING, then you'll quickly see it's not supported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added a subroutine &quot;check_err&quot; to your test program and your test
</span><br>
<span class="quotelev1">&gt; program prints out the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Unsupported datarep passed to MPI_File_set_view , error stack:
</span><br>
<span class="quotelev1">&gt; MPI_FILE_SET_VIEW(117): Only native data representation currently
</span><br>
<span class="quotelev1">&gt; supported&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not a fortran person so it took me a while to get the call right.
</span><br>
<span class="quotelev1">&gt; For posterity (and to maybe help out some other not-fortran guy down
</span><br>
<span class="quotelev1">&gt; the road), here's what check_err does:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       subroutine check_err(iret)
</span><br>
<span class="quotelev1">&gt;       include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;       integer iret
</span><br>
<span class="quotelev1">&gt;       integer ierr
</span><br>
<span class="quotelev1">&gt;       integer outlen
</span><br>
<span class="quotelev1">&gt;       CHARACTER(LEN = MPI_MAX_ERROR_STRING) string
</span><br>
<span class="quotelev1">&gt;       if (iret .ne. MPI_SUCCESS) then
</span><br>
<span class="quotelev1">&gt;           call MPI_ERROR_STRING(iret, string, outlen, ierr)
</span><br>
<span class="quotelev1">&gt;           print *, string(1:outlen)
</span><br>
<span class="quotelev1">&gt;       endif
</span><br>
<span class="quotelev1">&gt;       end subroutine check_err
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; external32 is a good idea but nowadays portable files are better
</span><br>
<span class="quotelev1">&gt; served with something like HDF5, NetCDF-4 or Parallel-NetCDF, all of
</span><br>
<span class="quotelev1">&gt; which generate files that are not only portable but are also
</span><br>
<span class="quotelev1">&gt; self-describing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15292.php">Barrett, Brian W: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Previous message:</strong> <a href="15290.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>In reply to:</strong> <a href="15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
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
