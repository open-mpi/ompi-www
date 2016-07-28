<?
$subject_val = "[OMPI users] Mixing the FORTRAN and C APIs.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 10:59:09 2011" -->
<!-- isoreceived="20110506145909" -->
<!-- sent="Fri, 6 May 2011 15:58:44 +0100" -->
<!-- isosent="20110506145844" -->
<!-- name="Tim Hutt" -->
<!-- email="tdhutt_at_[hidden]" -->
<!-- subject="[OMPI users] Mixing the FORTRAN and C APIs." -->
<!-- id="BANLkTin-fEOJBOLR9XrGG+dWKmjujOdKjA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Mixing the FORTRAN and C APIs.<br>
<strong>From:</strong> Tim Hutt (<em>tdhutt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 10:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Previous message:</strong> <a href="16457.php">hi: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to use PARPACK in a C++ app I have written. This is an
<br>
FORTRAN MPI routine used to calculate SVDs. The simplest way I found
<br>
to do this is to use f2c to convert it to C, and then call the
<br>
resulting functions from my C++ code.
<br>
<p>However PARPACK requires that I write some user-defined operations to
<br>
be parallel using MPI. So far I have just been calling the FORTRAN
<br>
versions of the MPI functions from C, because I wasn't sure whether
<br>
you can mix the APIs. I.e. I've been doing this:
<br>
<p>-----8&lt;-----
<br>
extern &quot;C&quot;
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int mpi_init__(integer *);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int mpi_comm_rank__(integer *, integer *, integer *);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int mpi_comm_size__(integer *, integer *, integer *);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int mpi_finalize__(integer *);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int mpi_allgatherv__(doublereal *, integer *, integer *, doublereal
<br>
*, integer *, integer *, integer *, integer *);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// OpenMPI version.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const integer MPI_DOUBLE_PRECISION = 17;
<br>
}
<br>
<p>bool MPI__Init()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_init__(&amp;ierr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ierr == 0;
<br>
}
<br>
----8&lt;----
<br>
<p>It works so far, but is getting quite tedious and seems like the wrong
<br>
way to do it. Also I don't know if it's related but when I use
<br>
allgatherv it gives me a segfault:
<br>
<p>[panic:20659] *** Process received signal ***
<br>
[panic:20659] Signal: Segmentation fault (11)
<br>
[panic:20659] Signal code: Address not mapped (1)
<br>
[panic:20659] Failing at address: 0x7f4effffffe8
<br>
[panic:20659] [ 0] /lib/libc.so.6(+0x33af0) [0x7f4f8fd62af0]
<br>
[panic:20659] [ 1] /usr/lib/libstdc++.so.6(_ZNSolsEi+0x3) [0x7f4f905ec0c3]
<br>
[panic:20659] [ 2] ./TDLSM() [0x510322]
<br>
[panic:20659] [ 3] ./TDLSM() [0x50ec8d]
<br>
[panic:20659] [ 4] ./TDLSM() [0x404ee7]
<br>
[panic:20659] [ 5] /lib/libc.so.6(__libc_start_main+0xfd) [0x7f4f8fd4dc4d]
<br>
[panic:20659] [ 6] ./TDLSM() [0x404c19]
<br>
[panic:20659] *** End of error message ***
<br>
<p>So my question is: Can I intermix the C and FORTRAN APIs within one
<br>
program? Oh and also I think the cluster I will eventually run this on
<br>
(cx1.hpc.ic.ac.uk, if anyone is from Imperial) doesn't use OpenMP, so
<br>
what about other MPI implementations?
<br>
<p>Many thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Previous message:</strong> <a href="16457.php">hi: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
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
