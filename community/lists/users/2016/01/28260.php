<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 23:25:07 2016" -->
<!-- isoreceived="20160113042507" -->
<!-- sent="Wed, 13 Jan 2016 13:25:00 +0900" -->
<!-- isosent="20160113042500" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="5695D19C.80500_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAPuR+ZiH+-ExU7DFB6qVFiRMdijt=HxGx3A1CnYgLm+ixvYcyw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-12 23:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28261.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28259.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28258.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28261.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28261.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim,
<br>
<p>if i understand correctly, George point is that OpenMPI is currently 
<br>
correct with respect to the MPI standard :
<br>
MPI_DATATYPE_NULL is *not* a predefined datatype, hence it is not 
<br>
(expected to be) a committed datatype,
<br>
and hence it cannot be used in MPI_Alltoallw (regardless the 
<br>
corresponding count is zero).
<br>
<p>an other way to put this is mpich could/should have failed and/or you 
<br>
were lucky it worked.
<br>
<p>George and Jeff,
<br>
<p>do you feel any need to ask MPI Forum to clarify this point ?
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/13/2016 12:14 PM, Jim Edwards wrote:
<br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 12, 2016 at 7:55 PM, Jim Edwards &lt;jedwards_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jedwards_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maybe the example is too simple.  Here is another one which
</span><br>
<span class="quotelev1">&gt;     when run on two tasks sends two integers from each task to
</span><br>
<span class="quotelev1">&gt;     task 0.   Task 1 receives nothing.  This works with mpich and impi
</span><br>
<span class="quotelev1">&gt;     but fails with openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      my_mpi_test(int rank, int ntasks)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       MPI_Datatype stype, rtype;
</span><br>
<span class="quotelev1">&gt;       int sbuf[2];
</span><br>
<span class="quotelev1">&gt;       int rbuf[4];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       int slen[ntasks], sdisp[ntasks], stypes[ntasks], rlen[ntasks],
</span><br>
<span class="quotelev1">&gt;     rdisp[ntasks], rtypes[ntasks];
</span><br>
<span class="quotelev1">&gt;       sbuf[0]=rank;
</span><br>
<span class="quotelev1">&gt;     sbuf[1]=ntasks+rank;
</span><br>
<span class="quotelev1">&gt;       slen[0]=2;
</span><br>
<span class="quotelev1">&gt;       slen[1]=0;
</span><br>
<span class="quotelev1">&gt;     stypes[0]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;     stypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev1">&gt;       sdisp[0]=0;
</span><br>
<span class="quotelev1">&gt;       sdisp[1]=4;
</span><br>
<span class="quotelev1">&gt;       if(rank==0){
</span><br>
<span class="quotelev1">&gt;         rlen[0]=2;
</span><br>
<span class="quotelev1">&gt;         rlen[1]=2;
</span><br>
<span class="quotelev1">&gt;     rtypes[0]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;     rtypes[1]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;         rdisp[0]=0;
</span><br>
<span class="quotelev1">&gt;         rdisp[1]=8;
</span><br>
<span class="quotelev1">&gt;       }else{
</span><br>
<span class="quotelev1">&gt;         rlen[0]=0;
</span><br>
<span class="quotelev1">&gt;         rlen[1]=0;
</span><br>
<span class="quotelev1">&gt;     rtypes[0]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev1">&gt;     rtypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev1">&gt;         rdisp[0]=0;
</span><br>
<span class="quotelev1">&gt;         rdisp[1]=0;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Alltoallw(sbuf, slen, sdisp, stypes, rbuf, rlen, rdisp,
</span><br>
<span class="quotelev1">&gt;     rtypes, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;       if(rank==0){
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%d %d %d %d\n&quot;,rbuf[0],rbuf[1],rbuf[2],rbuf[3]);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       int rank, ntasks;
</span><br>
<span class="quotelev1">&gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_size(MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt;       printf(&quot;rank %d ntasks %d\n&quot;,rank, ntasks);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       my_mpi_test(rank,ntasks);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28258.php">http://www.open-mpi.org/community/lists/users/2016/01/28258.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28261.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28259.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28258.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28261.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28261.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
