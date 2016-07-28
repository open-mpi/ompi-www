<?
$subject_val = "[OMPI users] Is MPI_Accumulate compatible with an user-defined derived datatype?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 04:27:08 2012" -->
<!-- isoreceived="20121010082708" -->
<!-- sent="Wed, 10 Oct 2012 08:25:18 +0000" -->
<!-- isosent="20121010082518" -->
<!-- name="Victor Vysotskiy" -->
<!-- email="Victor.Vysotskiy_at_[hidden]" -->
<!-- subject="[OMPI users] Is MPI_Accumulate compatible with an user-defined derived datatype?" -->
<!-- id="8D58A4B5E6148C419C6AD6334962375D2A835311_at_UWMBX01.uw.lu.se" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Is MPI_Accumulate compatible with an user-defined derived datatype?<br>
<strong>From:</strong> Victor Vysotskiy (<em>Victor.Vysotskiy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 04:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Previous message:</strong> <a href="20443.php">Hodgess, Erin: "Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am wondering whether or not the MPI_Accumulate subroutine implemented in OpenMPI v1.6.2  is capable to operate on derived datatypes? I wrote a very simple test program for accumulating data from several process on master. The program works properly only with predefined datatypes. In the case of  a derived datatype generated via MPI_Type_contiguous/MPI_Type_
<br>
vector subroutine, the results are incorrect:
<br>
<p>%mpicc accum.derived.c  -o accum.predifined
<br>
%mpicc -D_DERIVED_ accum.derived.c  -o accum.derived
<br>
<p>%mpirun -n 2 accum.predifined
<br>
tnum_acc[0] =  2.0 (expected: Nprocs =  2.0)
<br>
tnum_acc[1] =  2.0 (expected: Nprocs =  2.0)
<br>
<p>%mpirun -n 2 accum.derived
<br>
tnum_acc[0] =  1.0 (expected: Nprocs =  2.0)
<br>
tnum_acc[1] =  1.0 (expected: Nprocs =  2.0)
<br>
<p><p>The point is that within mvapich2-1.8-r5668 and mpich2-1.5 the results are always correct, regardless of datatypes used.
<br>
<p>Any comments are highly appreciated!
<br>
<p><p>With best regards,
<br>
Victor.
<br>
<p>The test program is listed below:
<br>
<p>/* Simple test for MPI_Accumulate &amp;&amp; derived datatypes */
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;math.h&gt;
<br>
<p>#define NEL 10
<br>
#define NAC  2
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int          i, j, rank, nranks;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double      *win_buf, *src_buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win      buf_win;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint     nelp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype dtype;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nranks);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;nelp=(rank==0)?(NEL):0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;win_buf=(double *) calloc(nelp,sizeof(double));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;src_buf=(double *) calloc(NAC,sizeof(double));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;NAC;i++)  src_buf[i]=1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_create(win_buf, nelp, sizeof(double), MPI_INFO_NULL, MPI_COMM_WORLD, &amp;buf_win);
<br>
/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_vector(NAC,1,1,MPI_DOUBLE,&amp;dtype);
<br>
*/
<br>
#ifdef _DERIVED_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_contiguous(NAC,MPI_DOUBLE,&amp;dtype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;dtype);
<br>
#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, buf_win);
<br>
<p>#ifdef _DERIVED_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Accumulate(src_buf, 1, dtype, 0, 0, 1, dtype, MPI_SUM, buf_win);
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Accumulate(src_buf, NAC, MPI_DOUBLE, 0, 0, NAC, MPI_DOUBLE, MPI_SUM, buf_win);
<br>
#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_unlock(0, buf_win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(rank==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j=0;j&lt;NAC;j++) printf(&quot;tnum_acc[%d] =%5.1lf (expected: Nprocs =%5.1lf)\n&quot;,j,win_buf[j],(double) nranks);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_free(&amp;buf_win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
}
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Previous message:</strong> <a href="20443.php">Hodgess, Erin: "Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
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
