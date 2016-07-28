<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 22:14:57 2016" -->
<!-- isoreceived="20160113031457" -->
<!-- sent="Tue, 12 Jan 2016 20:14:36 -0700" -->
<!-- isosent="20160113031436" -->
<!-- name="Jim Edwards" -->
<!-- email="jedwards_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAPuR+ZiH+-ExU7DFB6qVFiRMdijt=HxGx3A1CnYgLm+ixvYcyw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPuR+Zgp212D4m0ADuNhsFBg8esBMjjmaLA3P5AjDoUjJVUoNA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW<br>
<strong>From:</strong> Jim Edwards (<em>jedwards_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-12 22:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28259.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28257.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28257.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28260.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28260.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry there was a mistake in that code,
<br>
stypes and rtypes should be of type MPI_Datatype not integer
<br>
however the result is the same.
<br>
<p>*** An error occurred in MPI_Alltoallw
<br>
<p>*** reported by process [204406785,1]
<br>
<p>*** on communicator MPI_COMM_WORLD
<br>
<p>*** MPI_ERR_TYPE: invalid datatype
<br>
<p><p><p>On Tue, Jan 12, 2016 at 7:55 PM, Jim Edwards &lt;jedwards_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Maybe the example is too simple.  Here is another one which
</span><br>
<span class="quotelev1">&gt; when run on two tasks sends two integers from each task to
</span><br>
<span class="quotelev1">&gt; task 0.   Task 1 receives nothing.  This works with mpich and impi
</span><br>
<span class="quotelev1">&gt; but fails with openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  my_mpi_test(int rank, int ntasks)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Datatype stype, rtype;
</span><br>
<span class="quotelev1">&gt;   int sbuf[2];
</span><br>
<span class="quotelev1">&gt;   int rbuf[4];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int slen[ntasks], sdisp[ntasks], stypes[ntasks], rlen[ntasks],
</span><br>
<span class="quotelev1">&gt; rdisp[ntasks], rtypes[ntasks];
</span><br>
<span class="quotelev1">&gt;   sbuf[0]=rank;
</span><br>
<span class="quotelev1">&gt;   sbuf[1]=ntasks+rank;
</span><br>
<span class="quotelev1">&gt;   slen[0]=2;
</span><br>
<span class="quotelev1">&gt;   slen[1]=0;
</span><br>
<span class="quotelev1">&gt;   stypes[0]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;   stypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev1">&gt;   sdisp[0]=0;
</span><br>
<span class="quotelev1">&gt;   sdisp[1]=4;
</span><br>
<span class="quotelev1">&gt;   if(rank==0){
</span><br>
<span class="quotelev1">&gt;     rlen[0]=2;
</span><br>
<span class="quotelev1">&gt;     rlen[1]=2;
</span><br>
<span class="quotelev1">&gt;     rtypes[0]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;     rtypes[1]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev1">&gt;     rdisp[1]=8;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   }else{
</span><br>
<span class="quotelev1">&gt;     rlen[0]=0;
</span><br>
<span class="quotelev1">&gt;     rlen[1]=0;
</span><br>
<span class="quotelev1">&gt;     rtypes[0]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev1">&gt;     rtypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev1">&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev1">&gt;     rdisp[1]=0;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Alltoallw(sbuf, slen, sdisp, stypes, rbuf, rlen, rdisp, rtypes,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   if(rank==0){
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%d %d %d %d\n&quot;,rbuf[0],rbuf[1],rbuf[2],rbuf[3]);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank, ntasks;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;rank %d ntasks %d\n&quot;,rank, ntasks);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   my_mpi_test(rank,ntasks);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jim Edwards
CESM Software Engineer
National Center for Atmospheric Research
Boulder, CO
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28258/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28259.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28257.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28257.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28260.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28260.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
