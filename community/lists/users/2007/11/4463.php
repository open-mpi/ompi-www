<?
$subject_val = "[OMPI users] OpenMPI - compilation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 13:07:48 2007" -->
<!-- isoreceived="20071114180748" -->
<!-- sent="Wed, 14 Nov 2007 19:07:42 +0100" -->
<!-- isosent="20071114180742" -->
<!-- name="Sajjad" -->
<!-- email="rupam.sajjad_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI - compilation" -->
<!-- id="941193370711141007v346929ebx38253e49ecc4c83b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI - compilation<br>
<strong>From:</strong> Sajjad (<em>rupam.sajjad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 13:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4464.php">Brock Palen: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4462.php">Marcin Skoczylas: "Re: [OMPI users] core from today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4464.php">Brock Palen: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Reply:</strong> <a href="4464.php">Brock Palen: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have installed openmpi from the ubuntu repository for the 64-bit
<br>
dual core AMD processor.
<br>
<p>and i tried to compile the simple test program with the help of the
<br>
tutorial page but nothing seems to happen.
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc,char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;my rank=%d\n&quot;,rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>then from the console i issued the following command
<br>
<p>mpicc test.c -o test
<br>
mpirun -np 4 test
<br>
<p>nothing happens. actually after the command &quot;mpicc test.c -o test&quot;
<br>
shouldnt i be having a .o file?
<br>
<p>I do not understand how do i get to know if my current installation is
<br>
fine or not.
<br>
<p><p>Any suggestion?
<br>
<p><p><p>Regards
<br>
Sajjad
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4464.php">Brock Palen: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4462.php">Marcin Skoczylas: "Re: [OMPI users] core from today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4464.php">Brock Palen: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Reply:</strong> <a href="4464.php">Brock Palen: "Re: [OMPI users] OpenMPI - compilation"</a>
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
