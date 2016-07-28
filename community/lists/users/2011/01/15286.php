<?
$subject_val = "Re: [OMPI users] questions about MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 15:53:04 2011" -->
<!-- isoreceived="20110106205304" -->
<!-- sent="Thu, 6 Jan 2011 14:52:57 -0600" -->
<!-- isosent="20110106205257" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about MPI-IO" -->
<!-- id="20110106205257.GC14478_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1292985539.4289.19.camel_at_cedar.reachone.com" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 15:52:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15287.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Previous message:</strong> <a href="15285.php">Jeff Squyres: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15209.php">Tom Rosmond: "[OMPI users] questions about MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15291.php">Tom Rosmond: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>Reply:</strong> <a href="15291.php">Tom Rosmond: "Re: [OMPI users] questions about MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 21, 2010 at 06:38:59PM -0800, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; I use the function MPI_FILE_SET_VIEW with the 'native'
</span><br>
<span class="quotelev1">&gt; data representation and correctly write a file with MPI_FILE_WRITE_ALL.
</span><br>
<span class="quotelev1">&gt; However, if I change to the 'external32' representation, the file is
</span><br>
<span class="quotelev1">&gt; truncated, with a length that suggest that either only one process did a
</span><br>
<span class="quotelev1">&gt; write, or each process wrote to the same location.  
</span><br>
<p>Hi T. Rosmond.  'external32', while part of the standard, has not been
<br>
widely implemented in MPI-IO libraries.  Neither OpenMPI nor MPICH2
<br>
support that data representation.  I suspect the MPI-IO routines are
<br>
returning an error in ierr (at least I hope they are). 
<br>
<p>If you check the error code against MPI_SUCCESS and process it with
<br>
MPI_ERROR_STRING, then you'll quickly see it's not supported.
<br>
<p>I added a subroutine &quot;check_err&quot; to your test program and your test
<br>
program prints out the following:
<br>
<p>&quot;Unsupported datarep passed to MPI_File_set_view , error stack:
<br>
MPI_FILE_SET_VIEW(117): Only native data representation currently
<br>
supported&quot;
<br>
<p>I'm not a fortran person so it took me a while to get the call right.
<br>
For posterity (and to maybe help out some other not-fortran guy down
<br>
the road), here's what check_err does:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine check_err(iret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer iret
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer outlen
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHARACTER(LEN = MPI_MAX_ERROR_STRING) string
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (iret .ne. MPI_SUCCESS) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ERROR_STRING(iret, string, outlen, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, string(1:outlen)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end subroutine check_err
<br>
<p><p>external32 is a good idea but nowadays portable files are better
<br>
served with something like HDF5, NetCDF-4 or Parallel-NetCDF, all of
<br>
which generate files that are not only portable but are also
<br>
self-describing.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15287.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Previous message:</strong> <a href="15285.php">Jeff Squyres: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15209.php">Tom Rosmond: "[OMPI users] questions about MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15291.php">Tom Rosmond: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>Reply:</strong> <a href="15291.php">Tom Rosmond: "Re: [OMPI users] questions about MPI-IO"</a>
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
