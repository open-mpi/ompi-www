<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 19:28:23 2016" -->
<!-- isoreceived="20160114002823" -->
<!-- sent="Thu, 14 Jan 2016 09:28:16 +0900" -->
<!-- isosent="20160114002816" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="5696EBA0.30304_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAGKz=uLpbguH6oQWrPcbAqq7N7Ff2vQXWrRCSDy=DMKtEkW6Bw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-13 19:28:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28271.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28269.php">Howard Pritchard: "Re: [OMPI users] RMA operations with java buffers"</a>
<li><strong>In reply to:</strong> <a href="28267.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28271.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28271.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28277.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim,
<br>
<p>your initial question was
<br>
<p>i think that this is a bug in open-mpi - would you agree?
<br>
<p>and so far, the answer is
<br>
<p>we disagree, this is not an OpenMPI bug, this is the MPI 3.1 standard.
<br>
<p><p>and your last question was
<br>
<p>Can you make any argument in support of not allowing it (other that 
<br>
that's the way you've interpreted the standard)?
<br>
<p>one point was made against supporting MPI_DATATYPE_NULL with zero count 
<br>
on the mpi forum mailing list :
<br>
changing this is not backward compatible since it has the potential to 
<br>
break existing tools that
<br>
correctly assumes (at least for now) that a datatype *cannot* be 
<br>
MPI_DATATYPE_NULL.
<br>
<p>btw, Intel MPI (impi) is mpich based. so it is very likely this kind of 
<br>
quite high level stuff is handled the same way.
<br>
<p><p>Jeff,
<br>
<p>OpenMPI does not allow MPI_DATATYPE_NULL, and from a performance point 
<br>
of view, that is a pointer comparison. at first glance, allowing 
<br>
MPI_DATATYPE_NULL *if and only if* count is zero looks more cpu intensive.
<br>
<p><p>George and all.
<br>
<p>Back to OpenMPI, now the question is :
<br>
<p>&quot;Is OpenMPI going to be updated (and when) in order to support an 
<br>
intuitive and user friendly feature, that is currently explicitly 
<br>
prohibited by the MPI 3.1 standard, but that might be part of the MPI-4 
<br>
standard and that we already know is not backward compatible (*) ?
<br>
(*) fwiw, mpich already &quot;implements&quot; this, so backward incompatibility 
<br>
would only affect tools currently working with OpenMPI but not with mpich.&quot;
<br>
<p><p>i am a pragmatic guy, so i'd rather go for it, but here is what i am 
<br>
gonna do :
<br>
<p>unless George vetoes that, i will add this topic to the weekly call 
<br>
agenda, and wait for the community to make a decision
<br>
(e.g. go / no go, and milestone if needed 1.10 series ? 2.0 ? 2.1 ? 
<br>
master only ?)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/14/2016 12:23 AM, Jeff Hammond wrote:
<br>
<span class="quotelev1">&gt; Bill Gropp's statement on the Forum list is clear: null handles cannot 
</span><br>
<span class="quotelev1">&gt; be used unless explicitly permitted. Unfortunately, there is no 
</span><br>
<span class="quotelev1">&gt; exception for MPI_DATATYPE_NULL when count=0.  Hopefully, we will add 
</span><br>
<span class="quotelev1">&gt; one in MPI-4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While your usage model is perfectly reasonable to me and something 
</span><br>
<span class="quotelev1">&gt; that I would do in the same position, you need to use e.g. MPI_BYTE 
</span><br>
<span class="quotelev1">&gt; instead to comply with the current MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As to why Open-MPI wastes CPU cycles testing for datatype validity 
</span><br>
<span class="quotelev1">&gt; when count=0, that is a question for someone else to answer.  
</span><br>
<span class="quotelev1">&gt; Implementations have no obligation enforce every letter of the MPI 
</span><br>
<span class="quotelev1">&gt; standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 13, 2016 at 6:11 AM, Jim Edwards &lt;jedwards_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jedwards_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It seems to me that when there is a question of interpretation of
</span><br>
<span class="quotelev1">&gt;     the standard one should ask the consequences of each potential
</span><br>
<span class="quotelev1">&gt;     interpretation.   It just makes sense that MPI_DATATYPE_NULL
</span><br>
<span class="quotelev1">&gt;     should be allowed when the count is 0, otherwise you need to
</span><br>
<span class="quotelev1">&gt;     insert some random datatype just to fill the array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can you make any argument in support of not allowing it (other
</span><br>
<span class="quotelev1">&gt;     than that's the way you've interpreted the standard)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Tue, Jan 12, 2016 at 10:44 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         i found it at
</span><br>
<span class="quotelev1">&gt;         <a href="http://lists.mpi-forum.org/mpi-forum/2016/01/3152.php">http://lists.mpi-forum.org/mpi-forum/2016/01/3152.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         i'd like to re-iterate what i wrote earlier about example 4.23
</span><br>
<span class="quotelev1">&gt;         MPI_DATATYPE_NULL is used as a recv type on non root tasks,
</span><br>
<span class="quotelev1">&gt;         and per the mpi 3.1 standard, recv type is &quot;significant only
</span><br>
<span class="quotelev1">&gt;         at root&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         in the case of MPI_Gatherv, MPI_DATATYPE_NULL is *not*
</span><br>
<span class="quotelev1">&gt;         significant,
</span><br>
<span class="quotelev1">&gt;         but in the case of MPI_Alltoallw, it *is* significant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         as far as i am concerned, and to say the least, these are two
</span><br>
<span class="quotelev1">&gt;         distinct
</span><br>
<span class="quotelev1">&gt;         shades of grey.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         IMHO, it would be more intuitive if the use of
</span><br>
<span class="quotelev1">&gt;         MPI_DATATYPE_NULL was
</span><br>
<span class="quotelev1">&gt;         allowed with a zero count, and in both MPI_Alltoallw *and*
</span><br>
<span class="quotelev1">&gt;         MPI_Sendrecv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         i still believe George interpretation is the correct one, and Bill
</span><br>
<span class="quotelev1">&gt;         Gropp agreed with him.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         and btw, is example 4.23 correct ?
</span><br>
<span class="quotelev1">&gt;         /* fwiw, i did copy/paste it and found several missing local
</span><br>
<span class="quotelev1">&gt;         variable
</span><br>
<span class="quotelev1">&gt;         myrank, i, and comm
</span><br>
<span class="quotelev1">&gt;         and i'd rather have MPI_COMM_WORLD than comm */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         and what if recvcount is negative on non root task ?
</span><br>
<span class="quotelev1">&gt;         should it be an error (negative int) or not (not significant
</span><br>
<span class="quotelev1">&gt;         value) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Wed, Jan 13, 2016 at 2:15 PM, Jeff Hammond
</span><br>
<span class="quotelev1">&gt;         &lt;jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;         &gt; There's a thread about this on the MPI Forum mailing list
</span><br>
<span class="quotelev1">&gt;         already ;-)
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Jeff
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; On Tuesday, January 12, 2016, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;         &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Jim,
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; if i understand correctly, George point is that OpenMPI is
</span><br>
<span class="quotelev1">&gt;         currently
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; correct with respect to the MPI standard :
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; MPI_DATATYPE_NULL is *not* a predefined datatype, hence it
</span><br>
<span class="quotelev1">&gt;         is not
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; (expected to be) a committed datatype,
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; and hence it cannot be used in MPI_Alltoallw (regardless
</span><br>
<span class="quotelev1">&gt;         the corresponding
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; count is zero).
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; an other way to put this is mpich could/should have failed
</span><br>
<span class="quotelev1">&gt;         and/or you were
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; lucky it worked.
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; George and Jeff,
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; do you feel any need to ask MPI Forum to clarify this point ?
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; On 1/13/2016 12:14 PM, Jim Edwards wrote:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Sorry there was a mistake in that code,
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; stypes and rtypes should be of type MPI_Datatype not integer
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; however the result is the same.
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; *** An error occurred in MPI_Alltoallw
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; *** reported by process [204406785,1]
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; On Tue, Jan 12, 2016 at 7:55 PM, Jim Edwards
</span><br>
<span class="quotelev1">&gt;         &lt;jedwards_at_[hidden] &lt;mailto:jedwards_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Maybe the example is too simple. Here is another one which
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; when run on two tasks sends two integers from each task to
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; task 0.   Task 1 receives nothing.  This works with mpich
</span><br>
<span class="quotelev1">&gt;         and impi
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; but fails with openmpi.
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;  my_mpi_test(int rank, int ntasks)
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   MPI_Datatype stype, rtype;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   int sbuf[2];
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   int rbuf[4];
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   int slen[ntasks], sdisp[ntasks], stypes[ntasks],
</span><br>
<span class="quotelev1">&gt;         rlen[ntasks],
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; rdisp[ntasks], rtypes[ntasks];
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   sbuf[0]=rank;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   sbuf[1]=ntasks+rank;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   slen[0]=2;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   slen[1]=0;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   stypes[0]=MPI_INT;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   stypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   sdisp[0]=0;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   sdisp[1]=4;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   if(rank==0){
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rlen[0]=2;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rlen[1]=2;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rtypes[0]=MPI_INT;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rtypes[1]=MPI_INT;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rdisp[1]=8;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   }else{
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rlen[0]=0;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rlen[1]=0;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rtypes[0]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rtypes[1]=MPI_DATATYPE_NULL;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rdisp[0]=0;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     rdisp[1]=0;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   MPI_Alltoallw(sbuf, slen, sdisp, stypes, rbuf, rlen,
</span><br>
<span class="quotelev1">&gt;         rdisp, rtypes,
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   if(rank==0){
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;     printf(&quot;%d %d %d %d\n&quot;,rbuf[0],rbuf[1],rbuf[2],rbuf[3]);
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   int rank, ntasks;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   printf(&quot;rank %d ntasks %d\n&quot;,rank, ntasks);
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   my_mpi_test(rank,ntasks);
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Jim Edwards
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; CESM Software Engineer
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Boulder, CO
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28258.php">http://www.open-mpi.org/community/lists/users/2016/01/28258.php</a>
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; --
</span><br>
<span class="quotelev2">&gt;         &gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;         &gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;         &gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;         &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;         &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;         &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;         &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28261.php">http://www.open-mpi.org/community/lists/users/2016/01/28261.php</a>
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/01/28262.php">http://www.open-mpi.org/community/lists/users/2016/01/28262.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Jim Edwards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CESM Software Engineer
</span><br>
<span class="quotelev1">&gt;     National Center for Atmospheric Research
</span><br>
<span class="quotelev1">&gt;     Boulder, CO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/01/28266.php">http://www.open-mpi.org/community/lists/users/2016/01/28266.php</a>
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
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28267.php">http://www.open-mpi.org/community/lists/users/2016/01/28267.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28270/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28271.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28269.php">Howard Pritchard: "Re: [OMPI users] RMA operations with java buffers"</a>
<li><strong>In reply to:</strong> <a href="28267.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28271.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28271.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28277.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
