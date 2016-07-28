<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 19:57:21 2016" -->
<!-- isoreceived="20160114005721" -->
<!-- sent="Wed, 13 Jan 2016 17:57:00 -0700" -->
<!-- isosent="20160114005700" -->
<!-- name="Jim Edwards" -->
<!-- email="jedwards_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAPuR+Zhj8BykHLjwrsSLzOLNV+=Ck+p94DMWJtG-HBxbd-6j8A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5696EBA0.30304_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-01-13 19:57:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28272.php">Siegmar Gross: "[OMPI users] runtime error with openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28277.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>Thank you for the follow-up.  I appreciate the discussion and am glad that
<br>
you will put this on your agenda.
<br>
<p>Jim
<br>
<p>On Wed, Jan 13, 2016 at 5:28 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Jim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your initial question was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i think that this is a bug in open-mpi - would you agree?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and so far, the answer is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we disagree, this is not an OpenMPI bug, this is the MPI 3.1 standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and your last question was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you make any argument in support of not allowing it (other that that's
</span><br>
<span class="quotelev1">&gt; the way you've interpreted the standard)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; one point was made against supporting MPI_DATATYPE_NULL with zero count on
</span><br>
<span class="quotelev1">&gt; the mpi forum mailing list :
</span><br>
<span class="quotelev1">&gt; changing this is not backward compatible since it has the potential to
</span><br>
<span class="quotelev1">&gt; break existing tools that
</span><br>
<span class="quotelev1">&gt; correctly assumes (at least for now) that a datatype *cannot* be
</span><br>
<span class="quotelev1">&gt; MPI_DATATYPE_NULL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, Intel MPI (impi) is mpich based. so it is very likely this kind of
</span><br>
<span class="quotelev1">&gt; quite high level stuff is handled the same way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI does not allow MPI_DATATYPE_NULL, and from a performance point of
</span><br>
<span class="quotelev1">&gt; view, that is a pointer comparison. at first glance, allowing
</span><br>
<span class="quotelev1">&gt; MPI_DATATYPE_NULL *if and only if* count is zero looks more cpu intensive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George and all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back to OpenMPI, now the question is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Is OpenMPI going to be updated (and when) in order to support an
</span><br>
<span class="quotelev1">&gt; intuitive and user friendly feature, that is currently explicitly
</span><br>
<span class="quotelev1">&gt; prohibited by the MPI 3.1 standard, but that might be part of the MPI-4
</span><br>
<span class="quotelev1">&gt; standard and that we already know is not backward compatible (*) ?
</span><br>
<span class="quotelev1">&gt; (*) fwiw, mpich already &quot;implements&quot; this, so backward incompatibility
</span><br>
<span class="quotelev1">&gt; would only affect tools currently working with OpenMPI but not with mpich.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am a pragmatic guy, so i'd rather go for it, but here is what i am gonna
</span><br>
<span class="quotelev1">&gt; do :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unless George vetoes that, i will add this topic to the weekly call
</span><br>
<span class="quotelev1">&gt; agenda, and wait for the community to make a decision
</span><br>
<span class="quotelev1">&gt; (e.g. go / no go, and milestone if needed 1.10 series ? 2.0 ? 2.1 ? master
</span><br>
<span class="quotelev1">&gt; only ?)
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
<span class="quotelev1">&gt; On 1/14/2016 12:23 AM, Jeff Hammond wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bill Gropp's statement on the Forum list is clear: null handles cannot be
</span><br>
<span class="quotelev1">&gt; used unless explicitly permitted.  Unfortunately, there is no exception for
</span><br>
<span class="quotelev1">&gt; MPI_DATATYPE_NULL when count=0.  Hopefully, we will add one in MPI-4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While your usage model is perfectly reasonable to me and something that I
</span><br>
<span class="quotelev1">&gt; would do in the same position, you need to use e.g. MPI_BYTE instead to
</span><br>
<span class="quotelev1">&gt; comply with the current MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As to why Open-MPI wastes CPU cycles testing for datatype validity when
</span><br>
<span class="quotelev1">&gt; count=0, that is a question for someone else to answer.  Implementations
</span><br>
<span class="quotelev1">&gt; have no obligation enforce every letter of the MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 13, 2016 at 6:11 AM, Jim Edwards &lt;jedwards_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me that when there is a question of interpretation of the
</span><br>
<span class="quotelev2">&gt;&gt; standard one should ask the consequences of each potential interpretation.
</span><br>
<span class="quotelev2">&gt;&gt;   It just makes sense that MPI_DATATYPE_NULL should be allowed when the
</span><br>
<span class="quotelev2">&gt;&gt; count is 0, otherwise you need to insert some random datatype just to fill
</span><br>
<span class="quotelev2">&gt;&gt; the array.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you make any argument in support of not allowing it (other than
</span><br>
<span class="quotelev2">&gt;&gt; that's the way you've interpreted the standard)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jan 12, 2016 at 10:44 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i found it at <a href="http://lists.mpi-forum.org/mpi-forum/2016/01/3152.php">http://lists.mpi-forum.org/mpi-forum/2016/01/3152.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i'd like to re-iterate what i wrote earlier about example 4.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_DATATYPE_NULL is used as a recv type on non root tasks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and per the mpi 3.1 standard, recv type is &quot;significant only at root&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the case of MPI_Gatherv, MPI_DATATYPE_NULL is *not* significant,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but in the case of MPI_Alltoallw, it *is* significant.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as far as i am concerned, and to say the least, these are two distinct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shades of grey.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMHO, it would be more intuitive if the use of MPI_DATATYPE_NULL was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allowed with a zero count, and in both MPI_Alltoallw *and*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Sendrecv.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i still believe George interpretation is the correct one, and Bill
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gropp agreed with him.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and btw, is example 4.23 correct ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* fwiw, i did copy/paste it and found several missing local variable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myrank, i, and comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and i'd rather have MPI_COMM_WORLD than comm */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and what if recvcount is negative on non root task ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should it be an error (negative int) or not (not significant value) ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jan 13, 2016 at 2:15 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; There's a thread about this on the MPI Forum mailing list already ;-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Jeff
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Tuesday, January 12, 2016, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Jim,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; if i understand correctly, George point is that OpenMPI is currently
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; correct with respect to the MPI standard :
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPI_DATATYPE_NULL is *not* a predefined datatype, hence it is not
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; (expected to be) a committed datatype,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; and hence it cannot be used in MPI_Alltoallw (regardless the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; count is zero).
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; an other way to put this is mpich could/should have failed and/or you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; lucky it worked.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; George and Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; do you feel any need to ask MPI Forum to clarify this point ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On 1/13/2016 12:14 PM, Jim Edwards wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Sorry there was a mistake in that code,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; stypes and rtypes should be of type MPI_Datatype not integer
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; however the result is the same.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; *** An error occurred in MPI_Alltoallw
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; *** reported by process [204406785,1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On Tue, Jan 12, 2016 at 7:55 PM, Jim Edwards &lt;jedwards_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; Maybe the example is too simple.  Here is another one which
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; when run on two tasks sends two integers from each task to
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; task 0.   Task 1 receives nothing.  This works with mpich and impi
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; but fails with openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;  my_mpi_test(int rank, int ntasks)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   MPI_Datatype stype, rtype;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   int sbuf[2];
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   int rbuf[4];
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   int slen[ntasks], sdisp[ntasks], stypes[ntasks], rlen[ntasks],
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; rdisp[ntasks], rtypes[ntasks];
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   sbuf[0]=rank;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   sbuf[1]=ntasks+rank;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   slen[0]=2;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   slen[1]=0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   stypes[0]=MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   stypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   sdisp[0]=0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   sdisp[1]=4;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   if(rank==0){
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rlen[0]=2;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rlen[1]=2;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rtypes[0]=MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rtypes[1]=MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rdisp[1]=8;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   }else{
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rlen[0]=0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rlen[1]=0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rtypes[0]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rtypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     rdisp[1]=0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   MPI_Alltoallw(sbuf, slen, sdisp, stypes, rbuf, rlen, rdisp, rtypes,
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   if(rank==0){
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;     printf(&quot;%d %d %d %d\n&quot;,rbuf[0],rbuf[1],rbuf[2],rbuf[3]);
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   int rank, ntasks;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   printf(&quot;rank %d ntasks %d\n&quot;,rank, ntasks);
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   my_mpi_test(rank,ntasks);
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Jim Edwards
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; CESM Software Engineer
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Boulder, CO
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Subscription: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28258.php">http://www.open-mpi.org/community/lists/users/2016/01/28258.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Jeff Hammond
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28261.php">http://www.open-mpi.org/community/lists/users/2016/01/28261.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/01/28262.php">http://www.open-mpi.org/community/lists/users/2016/01/28262.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28262.php">http://www.open-mpi.org/community/lists/users/2016/01/28262.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jim Edwards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CESM Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28266.php">http://www.open-mpi.org/community/lists/users/2016/01/28266.php</a>
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
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28267.php">http://www.open-mpi.org/community/lists/users/2016/01/28267.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28270.php">http://www.open-mpi.org/community/lists/users/2016/01/28270.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jim Edwards
CESM Software Engineer
National Center for Atmospheric Research
Boulder, CO
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28272.php">Siegmar Gross: "[OMPI users] runtime error with openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28277.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
