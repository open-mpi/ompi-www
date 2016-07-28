<?
$subject_val = "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 15:32:35 2009" -->
<!-- isoreceived="20091123203235" -->
<!-- sent="Mon, 23 Nov 2009 13:32:24 -0700" -->
<!-- isosent="20091123203224" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblocking MPI_File_iwrite() does block?" -->
<!-- id="C7303F68.275B%bwbarre_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20091123154208.GB8956_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] nonblocking MPI_File_iwrite() does block?<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 15:32:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11257.php">Natarajan CS: "[OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11704.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11704.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/23/09 8:42 AM, &quot;Rob Latham&quot; &lt;robl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is it OK to mention MPICH2 on this list?  I did prototype some MPI
</span><br>
<span class="quotelev1">&gt; extensions that allowed ROMIO to do true async I/O  (at least as far
</span><br>
<span class="quotelev1">&gt; as the underlying operating system supports it).   If you really need
</span><br>
<span class="quotelev1">&gt; to experiment with async I/O, I'd love to hear your experiences.
</span><br>
<p>Rob -
<br>
<p>Funny you should mention that code.  I was looking into a compile error in
<br>
OMPI on a strange platform last week (while travelling to SC, of course) and
<br>
was realizing that I had no idea what I was doing when I integrated ROMIO
<br>
into Open MPI many years ago, did it horribly, and want to clean it up.
<br>
<p>Anyway, you're talking about all the MPIX_Grequest interface used in ROMIO,
<br>
right? Do you have documentation of that API anywhere (even a header file
<br>
with some comments)?  I'm going to try to clean up how we integrate into
<br>
ROMIO during the holiday break, and it might make sense to implement the
<br>
extended API so that we can give some async I/O behavior as well.  From
<br>
looking at the ROMIO usage, I think OMPI has all the internal pieces to put
<br>
together the API pretty quickly, so it might be an option.  Any thoughts you
<br>
have on the subject would be greatly appreciated.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11257.php">Natarajan CS: "[OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11704.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11704.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
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
