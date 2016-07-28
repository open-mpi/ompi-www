<?
$subject_val = "Re: [OMPI devel] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 01:50:09 2016" -->
<!-- isoreceived="20160323055009" -->
<!-- sent="Tue, 22 Mar 2016 22:50:04 -0700" -->
<!-- isosent="20160323055004" -->
<!-- name="Dominic Kedelty" -->
<!-- email="dkedelty_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Error" -->
<!-- id="CALimjmWiPu-DKuaTRTT9zVS0C6DgnzgY_dzQ8D2vcV8dOOAzNQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56E904E8.7060103_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Error<br>
<strong>From:</strong> Dominic Kedelty (<em>dkedelty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 01:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18720.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18718.php">Federico Reghenzani: "[OMPI devel] Confusion about slots"</a>
<li><strong>In reply to:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18720.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18720.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>I believe I have found the problem. Initially I thought it may have been an
<br>
mpi issue since it was internally within an mpi function. However, now I am
<br>
sure that the problem has to do with an overflow of 4-byte signed integers.
<br>
<p>I am dealing with computational domains that have a little more than a
<br>
billion cells (1024^3 cells). However, I am still within the limits of the
<br>
4 byte integer. The area where I am running into the problem is here I have
<br>
shortened the code,
<br>
<p>&nbsp;! Fileviews
<br>
integer :: fileview_hexa
<br>
integer :: fileview_hexa_conn
<br>
<p>integer, dimension(:), allocatable :: blocklength
<br>
integer, dimension(:), allocatable :: map
<br>
integer(KIND=8) :: size
<br>
integer(KIND=MPI_OFFSET_KIND) :: disp   ! MPI_OFFSET_KIND seems to be
<br>
8-bytes
<br>
<p>allocate(map(ncells_hexa_),blocklength(ncells_hexa_))
<br>
map = hexa_-1
<br>
hexa_ is a 4-byte array of integers that label local hexa elements at a
<br>
given rank. The max this number can be is in my current code (1024^3). and
<br>
min is 1.
<br>
blocklength = 1
<br>
call
<br>
MPI_TYPE_INDEXED(ncells_hexa_,blocklength,map,MPI_REAL_SP,fileview_hexa,ierr)
<br>
MPI_REAL_SP is used for 4-byte scalar data types that are going to be
<br>
written to the file. (i.e. temperature scalar stored at a given hexa cell)
<br>
call MPI_TYPE_COMMIT(fileview_hexa,ierr)
<br>
map = map * 8
<br>
here is where problems arise. The map is being multiplied by 8 because the
<br>
hexa cell node connectivity needs to be written. The node numbering that is
<br>
being written to the file needs to be 4-bytes, and the max node numbering
<br>
is able to be held within the 4-byte signed integer. But since I have to
<br>
map 8*1024^3 displacements to be written map needs to be integer(kind=8).
<br>
blocklength = 8
<br>
call
<br>
MPI_TYPE_INDEXED(ncells_hexa_,blocklength,map,MPI_INTEGER,fileview_hexa_conn,ierr)
<br>
MPI_TYPE_INDEXED( 1024^3,  blocklength=(/8 8 8 8 8 ..... 8 8 /), map=(/0,
<br>
8, 16, 24, ..... , 8589934592/), MPI_INTEGER, file_view_hexa_conn, ierr)
<br>
Would this be a correct way to declare the newdatatype file_view_hexa_conn.
<br>
in this call blocklength would be a 4-byte integer array and map would be
<br>
an 8-byte integer array. To be clear, in the code currently has both map
<br>
and blocklength as 4-bytes integer arrays.
<br>
call MPI_TYPE_COMMIT(fileview_hexa_conn,ierr)
<br>
deallocate(map,blocklength)
<br>
<p>....
<br>
<p>disp = disp+84
<br>
call
<br>
MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_hexa,&quot;native&quot;,MPI_INFO_NULL,ierr)
<br>
call MPI_FILE_WRITE_ALL(iunit,hexa_,ncells_hexa_,MPI_INTEGER,status,ierr)
<br>
I believe this could be wrong as well but the fileview_hexa is being used
<br>
to write the 4-byte integer hexa labeling, but as you said MPI_REAL_SP =
<br>
MPI_INTEGER = 4-byte may be fine. It has not given any problems thus far.
<br>
disp = disp+4*ncells_hexa
<br>
call
<br>
MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_hexa_conn,&quot;native&quot;,MPI_INFO_NULL,ierr)
<br>
size = 8*ncells_hexa_
<br>
call MPI_FILE_WRITE_ALL(iunit,conn_hexa,size,MPI_INTEGER,status,ierr)
<br>
<p><p>Hopefully that is enough information about the issue. Now my questions.
<br>
<p>&nbsp;&nbsp;&nbsp;1. Does this implementation look correct.
<br>
&nbsp;&nbsp;&nbsp;2. What kind should fileview_hexa and fileview_hexa_conn be?
<br>
&nbsp;&nbsp;&nbsp;3. Is it okay that map and blocklength are different integer kinds?
<br>
&nbsp;&nbsp;&nbsp;4. What does the blocklength parameter specify exactly. I played with
<br>
&nbsp;&nbsp;&nbsp;this some and changing the blocklength did not seem to change anything
<br>
<p>Thanks for the help.
<br>
<p>-Dominic Kedelty
<br>
<p>On Wed, Mar 16, 2016 at 12:02 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dominic,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at first, you might try to add
</span><br>
<span class="quotelev1">&gt; call MPI_Barrier(comm,ierr)
</span><br>
<span class="quotelev1">&gt; between
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (file_is_there .and. irank.eq.iroot) call
</span><br>
<span class="quotelev1">&gt; MPI_FILE_DELETE(file,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   call
</span><br>
<span class="quotelev1">&gt; MPI_FILE_OPEN(comm,file,IOR(MPI_MODE_WRONLY,MPI_MODE_CREATE),MPI_INFO_NULL,iunit,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* there might me a race condition, i am not sure about that */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fwiw, the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; STOP A configuration file is required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error message is not coming from OpenMPI.
</span><br>
<span class="quotelev1">&gt; it might be indirectly triggered by an ompio bug/limitation, or even a bug
</span><br>
<span class="quotelev1">&gt; in your application.
</span><br>
<span class="quotelev1">&gt; did you get your application work with an other flavor of OpenMPI ?
</span><br>
<span class="quotelev1">&gt; e.g. are you reporting an OpenMPI bug ?
</span><br>
<span class="quotelev1">&gt; or are you asking some help with your application (the bug could either be
</span><br>
<span class="quotelev1">&gt; in your code or in OpenMPI, and you do not know for sure)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am a bit surprised you are using the same fileview_node type with both
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER and MPI_REAL_SP, but since they should be the same size, that
</span><br>
<span class="quotelev1">&gt; might not be an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the subroutine depends on too many external parameters
</span><br>
<span class="quotelev1">&gt; (nnodes_, fileview_node, ncells_hexa, ncells_hexa_, unstr2str, ...)
</span><br>
<span class="quotelev1">&gt; so writing a simple reproducer might not be trivial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i recommend you first write a self contained program that can be evidenced
</span><br>
<span class="quotelev1">&gt; to reproduce the issue,
</span><br>
<span class="quotelev1">&gt; and then i will investigate that. for that, you might want to dump the
</span><br>
<span class="quotelev1">&gt; array sizes and the description of fileview_node in your application, and
</span><br>
<span class="quotelev1">&gt; then hard code them into your self contained program.
</span><br>
<span class="quotelev1">&gt; also how many nodes/tasks are you running and what filesystem are you
</span><br>
<span class="quotelev1">&gt; running on ?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/16/2016 3:05 PM, Dominic Kedelty wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not have the latest mpich available. I tested using openmpi version
</span><br>
<span class="quotelev1">&gt; 1.8.7 as well as mvapich2 version 1.9. both produced similar errors. I
</span><br>
<span class="quotelev1">&gt; tried the mca flag that you had provided and it is telling me that a
</span><br>
<span class="quotelev1">&gt; configuration file is needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; all processes return:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; STOP A configuration file is required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attaching the subroutine of the code that I believe is where the
</span><br>
<span class="quotelev1">&gt; problem is occuring.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 14, 2016 at 6:25 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dominic,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is a ROMIO error message, and ROMIO is from MPICH project.
</span><br>
<span class="quotelev2">&gt;&gt; at first, I recommend you try the same test with the latest mpich, in
</span><br>
<span class="quotelev2">&gt;&gt; order to check
</span><br>
<span class="quotelev2">&gt;&gt; whether the bug is indeed from romio, and has been fixed in the latest
</span><br>
<span class="quotelev2">&gt;&gt; release.
</span><br>
<span class="quotelev2">&gt;&gt; (ompi is a few version behind the latest romio)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; would you be able to post a trimmed version of your application that
</span><br>
<span class="quotelev2">&gt;&gt; evidences the test ?
</span><br>
<span class="quotelev2">&gt;&gt; that will be helpful to understand what is going on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you might also want to give a try to
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca io ompio ...
</span><br>
<span class="quotelev2">&gt;&gt; and see whether this helps.
</span><br>
<span class="quotelev2">&gt;&gt; that being said, I think ompio is not considered as production ready on
</span><br>
<span class="quotelev2">&gt;&gt; the v1.10 series of ompi
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
<span class="quotelev2">&gt;&gt; On Tuesday, March 15, 2016, Dominic Kedelty &lt; &lt;dkedelty_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dkedelty_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting the following error using openmpi and I am wondering if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyone would have clue as to why it is happening. It is an error coming
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from openmpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application called MPI_Abort(MPI_COMM_WORLD, 1) - process 157
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application called MPI_Abort(MPI_COMM_WORLD, 1) - process 477
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help would be appreciated. Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18697.php">http://www.open-mpi.org/community/lists/devel/2016/03/18697.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18700.php">http://www.open-mpi.org/community/lists/devel/2016/03/18700.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18701.php">http://www.open-mpi.org/community/lists/devel/2016/03/18701.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18719/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18720.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18718.php">Federico Reghenzani: "[OMPI devel] Confusion about slots"</a>
<li><strong>In reply to:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18720.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18720.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
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
