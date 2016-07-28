<?
$subject_val = "[OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:42:06 2008" -->
<!-- isoreceived="20080130144206" -->
<!-- sent="Wed, 30 Jan 2008 14:41:59 +0000" -->
<!-- isosent="20080130144159" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck" -->
<!-- id="47A08CB7.4060808_at_ntlworld.com" -->
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
<strong>Subject:</strong> [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 09:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4919.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>Previous message:</strong> <a href="4917.php">Jeff Squyres: "Re: [OMPI users] mpicc --version does not display anything."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting many &quot;Source and destination overlap in memcpy&quot; errors when
<br>
running my application on an odd number of procs.
<br>
<p>I believe this is because the Allgather collective is using Bruck's
<br>
algorithm and doing a shift on the buffer as a finalisation step
<br>
(coll_tuned_allgather.c):
<br>
<p>tmprecv = (char*) rbuf;
<br>
tmpsend = (char*) rbuf + (size - rank) * rcount * rext;
<br>
<p>err = ompi_ddt_copy_content_same_ddt(rdtype, rank * rcount,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmprecv, tmpsend);
<br>
<p>Unfortunately ompi_ddt_copy_content_same_ddt does a memcpy, instead of
<br>
the memmove which is needed here. For this buffer-left-shift, any
<br>
forward-copying memcpy should actually be OK as it won't overwrite
<br>
itself during the copy, but this violates the precondition of memcpy and
<br>
may break for some implementations.
<br>
<p>I think this issue was dismissed too lightly previously:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/08/3873.php">http://www.open-mpi.org/community/lists/users/2007/08/3873.php</a>
<br>
<p>Thanks,
<br>
Simon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4919.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>Previous message:</strong> <a href="4917.php">Jeff Squyres: "Re: [OMPI users] mpicc --version does not display anything."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
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
