<?
$subject_val = "[OMPI users] Q regarding MPI_SHORT and MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 15:01:34 2009" -->
<!-- isoreceived="20091123200134" -->
<!-- sent="Mon, 23 Nov 2009 14:01:29 -0600" -->
<!-- isosent="20091123200129" -->
<!-- name="Natarajan CS" -->
<!-- email="csnataraj_at_[hidden]" -->
<!-- subject="[OMPI users] Q regarding MPI_SHORT and MPI_Isend" -->
<!-- id="c4b5a27c0911231201j1e1a4a13tf6e5b7eb1d26f475_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Q regarding MPI_SHORT and MPI_Isend<br>
<strong>From:</strong> Natarajan CS (<em>csnataraj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 15:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11256.php">Jed Brown: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have 2 rather simple questions and have been scratching my head
<br>
for the last hour for an answer. Probably just need a fresh pair of eyes!.
<br>
My MPI lib is Intel MPI 3.2.1
<br>
<p>The code segment that has been the bane of my last hour of existence is :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_Bcast(ssx,tp, MPI_INT, 0, cartcomm) != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error broadcasting\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_Bcast(ssy,tp, MPI_INT, 0, cartcomm) != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error broadcasting\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_Bcast(ssz,tp, MPI_INT, 0, cartcomm) != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error broadcasting\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_Bcast(eex,tp, MPI_INT, 0, cartcomm) != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error broadcasting\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_Bcast(eey,tp, MPI_INT, 0, cartcomm) != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error broadcasting\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_Bcast(eez,tp, MPI_INT, 0, cartcomm) != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error broadcasting\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myrank != 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(data2, (int) (sizeof(data2)/sizeof(short)),
<br>
MPI_SHORT, 0, 123, cartcomm, &amp;status[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;short data[dim_siz[0]][dim_siz[1]][dim_siz[2]];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (nc_get_var_short(ncid, varid, &amp;data[0][0][0]) !=
<br>
NC_NOERR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error 2&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (rank &lt;= numprocs-1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (l=ssz[rank]; l&lt;eez[rank]; l+=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (m=ssy[rank]; m&lt;eey[rank]; m+=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (n=ssx[rank]; n&lt;eex[rank]; n+=1)
<br>
{
<br>
<p>data2[l-ssz[rank]][m-ssy[rank]][n-ssx[rank]] = data[l][m][n];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;data2[0][0][0], (int)
<br>
(sizeof(data2)/sizeof(short)), MPI_SHORT, rank, 123,
<br>
cartcomm,&amp;request[rank-1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;My rank is %d and my ending value is %d on
<br>
Data2 and %d on Data\n&quot;, rank,
<br>
data2[l-ssz[rank]-1][m-ssy[rank]-1][n-ssx[rank]-1], data[l-1][m-1][n-1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;My rank is %d and my starting value is %d on
<br>
Data2 and %d on Data\n&quot;, rank, data2[0][0][0],
<br>
data[ssz[rank]][ssy[rank]][ssx[rank]]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall(numprocs-1, request, status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;My rank is %d and my starting value is %d on Data2\n&quot;,
<br>
myrank, data2[0][0][0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;My rank is %d and my ending value is %d on Data2\n&quot;, myrank,
<br>
data2[l-ssz[myrank]-1][m-ssy[myrank]-1][n-ssx[myrank]-1]);
<br>
<p>cartcomm is the cartesian grid communicator and size of data is 512^3.
<br>
<p>The objective of this part of the code is to distribute data in a
<br>
checkerboard pattern to np procs. Unfortunately I am running into 2
<br>
complications.
<br>
<p>1) When I use MPI_SHORT instead of short to count the number of data
<br>
transferred I get an array that is half the size. (ie
<br>
MPI_Isend(&amp;data2[0][0][0],
<br>
(int) (sizeof(data2)/sizeof(MPI_SHORT)), MPI_SHORT, rank, 123,
<br>
cartcomm,&amp;request[rank-1]);
<br>
<p>&nbsp;So is there any possible way MPI_SHORT can be set to 32 bit? I have never
<br>
come across this before and was stumped to notice! Maybe my ignorance comes
<br>
from having only installed openmpi on my personal system?
<br>
<p>2) The output from this part of the code segment, for eg. when run on 8
<br>
procs, looks like all the ranks from 1 - 7 have exactly the same array and
<br>
the array should actually only belong to rank 7. .. the op spewed out by gdb
<br>
is below :
<br>
<p>0:  My rank is 1 and my ending value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 1 and my starting value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 2 and my ending value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 2 and my starting value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 3 and my ending value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 3 and my starting value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 4 and my ending value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 4 and my starting value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 5 and my ending value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 5 and my starting value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 6 and my ending value is 3277 on Data2 and 3277 on Data
<br>
0:  My rank is 6 and my starting value is 3277 on Data2 and 3277 on Data
<br>
0:  *My rank is 7 and my ending value is 3277 on Data2 and 3277 on Data*
<br>
0:  *My rank is 7 and my starting value is 3866 on Data2 and 3866 on Data*
<br>
1:  My rank is 1 and my starting value is 3866 on Data2
<br>
2:  My rank is 2 and my starting value is 3866 on Data2
<br>
3:  My rank is 3 and my starting value is 3866 on Data2
<br>
1:  My rank is 1 and my ending value is 3277 on Data2
<br>
2:  My rank is 2 and my ending value is 3277 on Data2
<br>
3:  My rank is 3 and my ending value is 3277 on Data2
<br>
7:  My rank is 7 and my starting value is 3866 on Data2
<br>
7:  My rank is 7 and my ending value is 3277 on Data2
<br>
5:  My rank is 5 and my starting value is 3866 on Data2
<br>
6:  My rank is 6 and my starting value is 3866 on Data2
<br>
6:  My rank is 6 and my ending value is 3277 on Data2
<br>
0:  My rank is 0 and my starting value is 3866 on Data2
<br>
1-3,6-7:  (gdb) 4:  My rank is 4 and my starting value is 3866 on Data2
<br>
5:  My rank is 5 and my ending value is 3277 on Data2
<br>
1-3,6-7:  (gdb) 0:  My rank is 0 and my ending value is 3277 on Data2
<br>
4:  My rank is 4 and my ending value is 3277 on Data2
<br>
<p><p><p>I was wondering if someone might be able to point out what I am doing wrong
<br>
here that only the last block of  the array is getting transmitted to all
<br>
procs?
<br>
<p><p>My apologies for the vagueness of the question. Appreciate any help!
<br>
<p><p>Cheers and thanks in advance,
<br>
<p>C.S.N
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11256.php">Jed Brown: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
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
