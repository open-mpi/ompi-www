<?
$subject_val = "[OMPI users] MPI_PROC_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 17:00:51 2009" -->
<!-- isoreceived="20090212220051" -->
<!-- sent="Thu, 12 Feb 2009 23:00:46 +0100" -->
<!-- isosent="20090212220046" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_PROC_NULL" -->
<!-- id="9b0da5ce0902121400y7aadda3eo4bdd20056513cefe_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_PROC_NULL<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 17:00:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8049.php">Rainer Keller: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8047.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8050.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8050.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>In my application i use MPI_PROC_NULL
<br>
as an argument in MPI_Sendrecv to simplify the
<br>
program (i.e. no special cases for borders)
<br>
With 1.3 it works, but under 1.3.1a0r20520
<br>
i get the following error:
<br>
[jody_at_localhost 3D]$ mpirun -np 2 ./sr
<br>
[localhost.localdomain:29253] *** An error occurred in MPI_Sendrecv
<br>
[localhost.localdomain:29253] *** on communicator MPI_COMM_WORLD
<br>
[localhost.localdomain:29253] *** MPI_ERR_RANK: invalid rank
<br>
[localhost.localdomain:29253] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[localhost.localdomain:29252] *** An error occurred in MPI_Sendrecv
<br>
[localhost.localdomain:29252] *** on communicator MPI_COMM_WORLD
<br>
[localhost.localdomain:29252] *** MPI_ERR_RANK: invalid rank
<br>
[localhost.localdomain:29252] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>According to the MPI-book it shpuld be ok to use MPI_PROC_NULL in such cases.
<br>
Is there a rreason why this doesn't work anymore?
<br>
<p>Here's a code which reproduces the problem:
<br>
<p>[jody_at_localhost 3D]$ cat sr.cpp
<br>
#include &lt;stdio.h&gt;
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>int main(int iArgC, char *apArgV[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iRank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iSize;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;iArgC, &amp;apArgV);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;iSize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;iRank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status st;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Sendrecv(&amp;iRank, 1, MPI_INT, MPI_PROC_NULL, 77,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;iSize, 1, MPI_INT, 1, 77, MPI_COMM_WORLD, &amp;st);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8049.php">Rainer Keller: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8047.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8050.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8050.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
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
