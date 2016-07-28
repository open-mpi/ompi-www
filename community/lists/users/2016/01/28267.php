<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 10:23:56 2016" -->
<!-- isoreceived="20160113152356" -->
<!-- sent="Wed, 13 Jan 2016 07:23:35 -0800" -->
<!-- isosent="20160113152335" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAGKz=uLpbguH6oQWrPcbAqq7N7Ff2vQXWrRCSDy=DMKtEkW6Bw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPuR+ZhKvNGzwpBapm9e8Jr2nZQ+nyQv7dfx5UqiY0fz+oPEbw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-13 10:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28268.php">Marko Blatzheim: "[OMPI users] RMA operations with java buffers"</a>
<li><strong>Previous message:</strong> <a href="28266.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28266.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bill Gropp's statement on the Forum list is clear: null handles cannot be
<br>
used unless explicitly permitted.  Unfortunately, there is no exception for
<br>
MPI_DATATYPE_NULL when count=0.  Hopefully, we will add one in MPI-4.
<br>
<p>While your usage model is perfectly reasonable to me and something that I
<br>
would do in the same position, you need to use e.g. MPI_BYTE instead to
<br>
comply with the current MPI standard.
<br>
<p>As to why Open-MPI wastes CPU cycles testing for datatype validity when
<br>
count=0, that is a question for someone else to answer.  Implementations
<br>
have no obligation enforce every letter of the MPI standard.
<br>
<p>Jeff
<br>
<p>On Wed, Jan 13, 2016 at 6:11 AM, Jim Edwards &lt;jedwards_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It seems to me that when there is a question of interpretation of the
</span><br>
<span class="quotelev1">&gt; standard one should ask the consequences of each potential interpretation.
</span><br>
<span class="quotelev1">&gt;   It just makes sense that MPI_DATATYPE_NULL should be allowed when the
</span><br>
<span class="quotelev1">&gt; count is 0, otherwise you need to insert some random datatype just to fill
</span><br>
<span class="quotelev1">&gt; the array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you make any argument in support of not allowing it (other than that's
</span><br>
<span class="quotelev1">&gt; the way you've interpreted the standard)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 12, 2016 at 10:44 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i found it at <a href="http://lists.mpi-forum.org/mpi-forum/2016/01/3152.php">http://lists.mpi-forum.org/mpi-forum/2016/01/3152.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i'd like to re-iterate what i wrote earlier about example 4.23
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DATATYPE_NULL is used as a recv type on non root tasks,
</span><br>
<span class="quotelev2">&gt;&gt; and per the mpi 3.1 standard, recv type is &quot;significant only at root&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in the case of MPI_Gatherv, MPI_DATATYPE_NULL is *not* significant,
</span><br>
<span class="quotelev2">&gt;&gt; but in the case of MPI_Alltoallw, it *is* significant.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as far as i am concerned, and to say the least, these are two distinct
</span><br>
<span class="quotelev2">&gt;&gt; shades of grey.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMHO, it would be more intuitive if the use of MPI_DATATYPE_NULL was
</span><br>
<span class="quotelev2">&gt;&gt; allowed with a zero count, and in both MPI_Alltoallw *and*
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Sendrecv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i still believe George interpretation is the correct one, and Bill
</span><br>
<span class="quotelev2">&gt;&gt; Gropp agreed with him.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and btw, is example 4.23 correct ?
</span><br>
<span class="quotelev2">&gt;&gt; /* fwiw, i did copy/paste it and found several missing local variable
</span><br>
<span class="quotelev2">&gt;&gt; myrank, i, and comm
</span><br>
<span class="quotelev2">&gt;&gt; and i'd rather have MPI_COMM_WORLD than comm */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and what if recvcount is negative on non root task ?
</span><br>
<span class="quotelev2">&gt;&gt; should it be an error (negative int) or not (not significant value) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jan 13, 2016 at 2:15 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There's a thread about this on the MPI Forum mailing list already ;-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tuesday, January 12, 2016, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Jim,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; if i understand correctly, George point is that OpenMPI is currently
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; correct with respect to the MPI standard :
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_DATATYPE_NULL is *not* a predefined datatype, hence it is not
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; (expected to be) a committed datatype,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; and hence it cannot be used in MPI_Alltoallw (regardless the
</span><br>
<span class="quotelev2">&gt;&gt; corresponding
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; count is zero).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; an other way to put this is mpich could/should have failed and/or you
</span><br>
<span class="quotelev2">&gt;&gt; were
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; lucky it worked.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; George and Jeff,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; do you feel any need to ask MPI Forum to clarify this point ?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On 1/13/2016 12:14 PM, Jim Edwards wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sorry there was a mistake in that code,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; stypes and rtypes should be of type MPI_Datatype not integer
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; however the result is the same.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; *** An error occurred in MPI_Alltoallw
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; *** reported by process [204406785,1]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Tue, Jan 12, 2016 at 7:55 PM, Jim Edwards &lt;jedwards_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Maybe the example is too simple.  Here is another one which
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; when run on two tasks sends two integers from each task to
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; task 0.   Task 1 receives nothing.  This works with mpich and impi
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; but fails with openmpi.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  my_mpi_test(int rank, int ntasks)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   MPI_Datatype stype, rtype;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   int sbuf[2];
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   int rbuf[4];
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   int slen[ntasks], sdisp[ntasks], stypes[ntasks], rlen[ntasks],
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; rdisp[ntasks], rtypes[ntasks];
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   sbuf[0]=rank;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   sbuf[1]=ntasks+rank;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   slen[0]=2;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   slen[1]=0;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   stypes[0]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   stypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   sdisp[0]=0;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   sdisp[1]=4;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   if(rank==0){
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rlen[0]=2;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rlen[1]=2;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rtypes[0]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rtypes[1]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rdisp[1]=8;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   }else{
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rlen[0]=0;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rlen[1]=0;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rtypes[0]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rtypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     rdisp[1]=0;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   MPI_Alltoallw(sbuf, slen, sdisp, stypes, rbuf, rlen, rdisp, rtypes,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   if(rank==0){
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     printf(&quot;%d %d %d %d\n&quot;,rbuf[0],rbuf[1],rbuf[2],rbuf[3]);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   int rank, ntasks;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   printf(&quot;rank %d ntasks %d\n&quot;,rank, ntasks);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   my_mpi_test(rank,ntasks);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Jim Edwards
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; CESM Software Engineer
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Boulder, CO
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28258.php">http://www.open-mpi.org/community/lists/users/2016/01/28258.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Hammond
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28261.php">http://www.open-mpi.org/community/lists/users/2016/01/28261.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28262.php">http://www.open-mpi.org/community/lists/users/2016/01/28262.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28266.php">http://www.open-mpi.org/community/lists/users/2016/01/28266.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28268.php">Marko Blatzheim: "[OMPI users] RMA operations with java buffers"</a>
<li><strong>Previous message:</strong> <a href="28266.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28266.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
