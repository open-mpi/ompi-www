<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 00:15:27 2016" -->
<!-- isoreceived="20160113051527" -->
<!-- sent="Tue, 12 Jan 2016 21:15:26 -0800" -->
<!-- isosent="20160113051526" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAGKz=uJGJD+x0wU3DaKgWu8TBxCUEWC6s6fiA_nydxJHQYL-zQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5695D19C.80500_at_rist.or.jp" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-13 00:15:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28260.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28260.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's a thread about this on the MPI Forum mailing list already ;-)
<br>
<p>Jeff
<br>
<p>On Tuesday, January 12, 2016, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i understand correctly, George point is that OpenMPI is currently
</span><br>
<span class="quotelev1">&gt; correct with respect to the MPI standard :
</span><br>
<span class="quotelev1">&gt; MPI_DATATYPE_NULL is *not* a predefined datatype, hence it is not
</span><br>
<span class="quotelev1">&gt; (expected to be) a committed datatype,
</span><br>
<span class="quotelev1">&gt; and hence it cannot be used in MPI_Alltoallw (regardless the corresponding
</span><br>
<span class="quotelev1">&gt; count is zero).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an other way to put this is mpich could/should have failed and/or you were
</span><br>
<span class="quotelev1">&gt; lucky it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George and Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you feel any need to ask MPI Forum to clarify this point ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/13/2016 12:14 PM, Jim Edwards wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry there was a mistake in that code,
</span><br>
<span class="quotelev1">&gt; stypes and rtypes should be of type MPI_Datatype not integer
</span><br>
<span class="quotelev1">&gt; however the result is the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Alltoallw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** reported by process [204406785,1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 12, 2016 at 7:55 PM, Jim Edwards &lt;jedwards_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','jedwards_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the example is too simple.  Here is another one which
</span><br>
<span class="quotelev2">&gt;&gt; when run on two tasks sends two integers from each task to
</span><br>
<span class="quotelev2">&gt;&gt; task 0.   Task 1 receives nothing.  This works with mpich and impi
</span><br>
<span class="quotelev2">&gt;&gt; but fails with openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  my_mpi_test(int rank, int ntasks)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Datatype stype, rtype;
</span><br>
<span class="quotelev2">&gt;&gt;   int sbuf[2];
</span><br>
<span class="quotelev2">&gt;&gt;   int rbuf[4];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   int slen[ntasks], sdisp[ntasks], stypes[ntasks], rlen[ntasks],
</span><br>
<span class="quotelev2">&gt;&gt; rdisp[ntasks], rtypes[ntasks];
</span><br>
<span class="quotelev2">&gt;&gt;   sbuf[0]=rank;
</span><br>
<span class="quotelev2">&gt;&gt;   sbuf[1]=ntasks+rank;
</span><br>
<span class="quotelev2">&gt;&gt;   slen[0]=2;
</span><br>
<span class="quotelev2">&gt;&gt;   slen[1]=0;
</span><br>
<span class="quotelev2">&gt;&gt;   stypes[0]=MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;   stypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev2">&gt;&gt;   sdisp[0]=0;
</span><br>
<span class="quotelev2">&gt;&gt;   sdisp[1]=4;
</span><br>
<span class="quotelev2">&gt;&gt;   if(rank==0){
</span><br>
<span class="quotelev2">&gt;&gt;     rlen[0]=2;
</span><br>
<span class="quotelev2">&gt;&gt;     rlen[1]=2;
</span><br>
<span class="quotelev2">&gt;&gt;     rtypes[0]=MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;     rtypes[1]=MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev2">&gt;&gt;     rdisp[1]=8;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   }else{
</span><br>
<span class="quotelev2">&gt;&gt;     rlen[0]=0;
</span><br>
<span class="quotelev2">&gt;&gt;     rlen[1]=0;
</span><br>
<span class="quotelev2">&gt;&gt;     rtypes[0]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev2">&gt;&gt;     rtypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev2">&gt;&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev2">&gt;&gt;     rdisp[1]=0;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Alltoallw(sbuf, slen, sdisp, stypes, rbuf, rlen, rdisp, rtypes,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;   if(rank==0){
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%d %d %d %d\n&quot;,rbuf[0],rbuf[1],rbuf[2],rbuf[3]);
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int rank, ntasks;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;rank %d ntasks %d\n&quot;,rank, ntasks);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   my_mpi_test(rank,ntasks);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jim Edwards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CESM Software Engineer
</span><br>
<span class="quotelev1">&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev1">&gt; Boulder, CO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28258.php">http://www.open-mpi.org/community/lists/users/2016/01/28258.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28261/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28260.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28260.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
