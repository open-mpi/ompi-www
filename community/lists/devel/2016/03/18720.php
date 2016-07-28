<?
$subject_val = "Re: [OMPI devel] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 02:06:35 2016" -->
<!-- isoreceived="20160323060635" -->
<!-- sent="Wed, 23 Mar 2016 15:06:29 +0900" -->
<!-- isosent="20160323060629" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Error" -->
<!-- id="56F23265.1000908_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CALimjmWiPu-DKuaTRTT9zVS0C6DgnzgY_dzQ8D2vcV8dOOAzNQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 02:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18721.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18721.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18721.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dominik,
<br>
<p>with MPI_Type_indexed, array_of_displacements is an int[]
<br>
so yes, there is a risk of overflow
<br>
<p>on the other hand, MPI_Type_create_hindexed, array_of_displacements is 
<br>
an MPI_Aint[]
<br>
<p>note
<br>
&nbsp;&nbsp;array_of_displacements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Displacement  for  each  block,  in  multiples  of 
<br>
oldtype extent for MPI_Type_indexed and bytes for 
<br>
MPI_Type_create_hindexed (array of integer for MPI_TYPE_INDEXED, array 
<br>
of MPI_Aint for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_TYPE_CREATE_HINDEXED).
<br>
<p><p>i do not fully understand what you are trying to achieve ...
<br>
<p>MPI_TYPE_INDEXED( 1024^3,  blocklength=(/8 8 8 8 8 ..... 8 8 /), 
<br>
map=(/0, 8, 16, 24, ..... , 8589934592/), MPI_INTEGER, 
<br>
file_view_hexa_conn, ierr)
<br>
<p>at first glance, this is equivalent to
<br>
MPI_Type_contiguous(1024^3, MPI_INTEGER, file_view_hexa_conn, ierr)
<br>
<p>so unless your data has a non regular shape, i recomment you use other 
<br>
MPI primitives to create your datatype.
<br>
This should be much more efficient, and less prone to integer overflow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
On 3/23/2016 2:50 PM, Dominic Kedelty wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe I have found the problem. Initially I thought it may have 
</span><br>
<span class="quotelev1">&gt; been an mpi issue since it was internally within an mpi function. 
</span><br>
<span class="quotelev1">&gt; However, now I am sure that the problem has to do with an overflow of 
</span><br>
<span class="quotelev1">&gt; 4-byte signed integers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am dealing with computational domains that have a little more than a 
</span><br>
<span class="quotelev1">&gt; billion cells (1024^3 cells). However, I am still within the limits of 
</span><br>
<span class="quotelev1">&gt; the 4 byte integer. The area where I am running into the problem is 
</span><br>
<span class="quotelev1">&gt; here I have shortened the code,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ! Fileviews
</span><br>
<span class="quotelev1">&gt; integer :: fileview_hexa
</span><br>
<span class="quotelev1">&gt; integer :: fileview_hexa_conn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; integer, dimension(:), allocatable :: blocklength
</span><br>
<span class="quotelev1">&gt; integer, dimension(:), allocatable :: map
</span><br>
<span class="quotelev1">&gt; integer(KIND=8) :: size
</span><br>
<span class="quotelev1">&gt; integer(KIND=MPI_OFFSET_KIND) :: disp   ! MPI_OFFSET_KIND seems to be 
</span><br>
<span class="quotelev1">&gt; 8-bytes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; allocate(map(ncells_hexa_),blocklength(ncells_hexa_))
</span><br>
<span class="quotelev1">&gt; map = hexa_-1
</span><br>
<span class="quotelev1">&gt; hexa_ is a 4-byte array of integers that label local hexa elements at 
</span><br>
<span class="quotelev1">&gt; a given rank. The max this number can be is in my current code 
</span><br>
<span class="quotelev1">&gt; (1024^3). and min is 1.
</span><br>
<span class="quotelev1">&gt; blocklength = 1
</span><br>
<span class="quotelev1">&gt; call 
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_INDEXED(ncells_hexa_,blocklength,map,MPI_REAL_SP,fileview_hexa,ierr)
</span><br>
<span class="quotelev1">&gt; MPI_REAL_SP is used for 4-byte scalar data types that are going to be 
</span><br>
<span class="quotelev1">&gt; written to the file. (i.e. temperature scalar stored at a given hexa 
</span><br>
<span class="quotelev1">&gt; cell)
</span><br>
<span class="quotelev1">&gt; call MPI_TYPE_COMMIT(fileview_hexa,ierr)
</span><br>
<span class="quotelev1">&gt; map = map * 8
</span><br>
<span class="quotelev1">&gt; here is where problems arise. The map is being multiplied by 8 because 
</span><br>
<span class="quotelev1">&gt; the hexa cell node connectivity needs to be written. The node 
</span><br>
<span class="quotelev1">&gt; numbering that is being written to the file needs to be 4-bytes, and 
</span><br>
<span class="quotelev1">&gt; the max node numbering is able to be held within the 4-byte signed 
</span><br>
<span class="quotelev1">&gt; integer. But since I have to map 8*1024^3 displacements to be written 
</span><br>
<span class="quotelev1">&gt; map needs to be integer(kind=8).
</span><br>
<span class="quotelev1">&gt; blocklength = 8
</span><br>
<span class="quotelev1">&gt; call 
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_INDEXED(ncells_hexa_,blocklength,map,MPI_INTEGER,fileview_hexa_conn,ierr)
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_INDEXED( 1024^3,  blocklength=(/8 8 8 8 8 ..... 8 8 /), 
</span><br>
<span class="quotelev1">&gt; map=(/0, 8, 16, 24, ..... , 8589934592/), MPI_INTEGER, 
</span><br>
<span class="quotelev1">&gt; file_view_hexa_conn, ierr)
</span><br>
<span class="quotelev1">&gt; Would this be a correct way to declare the newdatatype 
</span><br>
<span class="quotelev1">&gt; file_view_hexa_conn. in this call blocklength would be a 4-byte 
</span><br>
<span class="quotelev1">&gt; integer array and map would be an 8-byte integer array. To be clear, 
</span><br>
<span class="quotelev1">&gt; in the code currently has both map and blocklength as 4-bytes integer 
</span><br>
<span class="quotelev1">&gt; arrays.
</span><br>
<span class="quotelev1">&gt; call MPI_TYPE_COMMIT(fileview_hexa_conn,ierr)
</span><br>
<span class="quotelev1">&gt; deallocate(map,blocklength)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; disp = disp+84
</span><br>
<span class="quotelev1">&gt; call 
</span><br>
<span class="quotelev1">&gt; MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_hexa,&quot;native&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_FILE_WRITE_ALL(iunit,hexa_,ncells_hexa_,MPI_INTEGER,status,ierr)
</span><br>
<span class="quotelev1">&gt; I believe this could be wrong as well but the fileview_hexa is being 
</span><br>
<span class="quotelev1">&gt; used to write the 4-byte integer hexa labeling, but as you said 
</span><br>
<span class="quotelev1">&gt; MPI_REAL_SP = MPI_INTEGER = 4-byte may be fine. It has not given any 
</span><br>
<span class="quotelev1">&gt; problems thus far.
</span><br>
<span class="quotelev1">&gt; disp = disp+4*ncells_hexa
</span><br>
<span class="quotelev1">&gt; call 
</span><br>
<span class="quotelev1">&gt; MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_hexa_conn,&quot;native&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt; size = 8*ncells_hexa_
</span><br>
<span class="quotelev1">&gt; call MPI_FILE_WRITE_ALL(iunit,conn_hexa,size,MPI_INTEGER,status,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully that is enough information about the issue. Now my questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1. Does this implementation look correct.
</span><br>
<span class="quotelev1">&gt;  2. What kind should fileview_hexa and fileview_hexa_conn be?
</span><br>
<span class="quotelev1">&gt;  3. Is it okay that map and blocklength are different integer kinds?
</span><br>
<span class="quotelev1">&gt;  4. What does the blocklength parameter specify exactly. I played with
</span><br>
<span class="quotelev1">&gt;     this some and changing the blocklength did not seem to change anything
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dominic Kedelty
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 16, 2016 at 12:02 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dominic,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     at first, you might try to add
</span><br>
<span class="quotelev1">&gt;     call MPI_Barrier(comm,ierr)
</span><br>
<span class="quotelev1">&gt;     between
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       if (file_is_there .and. irank.eq.iroot) call
</span><br>
<span class="quotelev1">&gt;     MPI_FILE_DELETE(file,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       call
</span><br>
<span class="quotelev1">&gt;     MPI_FILE_OPEN(comm,file,IOR(MPI_MODE_WRONLY,MPI_MODE_CREATE),MPI_INFO_NULL,iunit,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* there might me a race condition, i am not sure about that */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     fwiw, the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     STOP A configuration file is required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     error message is not coming from OpenMPI.
</span><br>
<span class="quotelev1">&gt;     it might be indirectly triggered by an ompio bug/limitation, or
</span><br>
<span class="quotelev1">&gt;     even a bug in your application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     did you get your application work with an other flavor of OpenMPI ?
</span><br>
<span class="quotelev1">&gt;     e.g. are you reporting an OpenMPI bug ?
</span><br>
<span class="quotelev1">&gt;     or are you asking some help with your application (the bug could
</span><br>
<span class="quotelev1">&gt;     either be in your code or in OpenMPI, and you do not know for sure)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i am a bit surprised you are using the same fileview_node type
</span><br>
<span class="quotelev1">&gt;     with both MPI_INTEGER and MPI_REAL_SP, but since they should be
</span><br>
<span class="quotelev1">&gt;     the same size, that might not be an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the subroutine depends on too many external parameters
</span><br>
<span class="quotelev1">&gt;     (nnodes_, fileview_node, ncells_hexa, ncells_hexa_, unstr2str, ...)
</span><br>
<span class="quotelev1">&gt;     so writing a simple reproducer might not be trivial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i recommend you first write a self contained program that can be
</span><br>
<span class="quotelev1">&gt;     evidenced to reproduce the issue,
</span><br>
<span class="quotelev1">&gt;     and then i will investigate that. for that, you might want to dump
</span><br>
<span class="quotelev1">&gt;     the array sizes and the description of fileview_node in your
</span><br>
<span class="quotelev1">&gt;     application, and then hard code them into your self contained program.
</span><br>
<span class="quotelev1">&gt;     also how many nodes/tasks are you running and what filesystem are
</span><br>
<span class="quotelev1">&gt;     you running on ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 3/16/2016 3:05 PM, Dominic Kedelty wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I do not have the latest mpich available. I tested using openmpi
</span><br>
<span class="quotelev2">&gt;&gt;     version 1.8.7 as well as mvapich2 version 1.9. both produced
</span><br>
<span class="quotelev2">&gt;&gt;     similar errors. I tried the mca flag that you had provided and it
</span><br>
<span class="quotelev2">&gt;&gt;     is telling me that a configuration file is needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     all processes return:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     STOP A configuration file is required
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I am attaching the subroutine of the code that I believe is where
</span><br>
<span class="quotelev2">&gt;&gt;     the problem is occuring.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Mon, Mar 14, 2016 at 6:25 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Dominic,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         this is a ROMIO error message, and ROMIO is from MPICH project.
</span><br>
<span class="quotelev2">&gt;&gt;         at first, I recommend you try the same test with the latest
</span><br>
<span class="quotelev2">&gt;&gt;         mpich, in order to check
</span><br>
<span class="quotelev2">&gt;&gt;         whether the bug is indeed from romio, and has been fixed in
</span><br>
<span class="quotelev2">&gt;&gt;         the latest release.
</span><br>
<span class="quotelev2">&gt;&gt;         (ompi is a few version behind the latest romio)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         would you be able to post a trimmed version of your
</span><br>
<span class="quotelev2">&gt;&gt;         application that evidences the test ?
</span><br>
<span class="quotelev2">&gt;&gt;         that will be helpful to understand what is going on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         you might also want to give a try to
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun --mca io ompio ...
</span><br>
<span class="quotelev2">&gt;&gt;         and see whether this helps.
</span><br>
<span class="quotelev2">&gt;&gt;         that being said, I think ompio is not considered as
</span><br>
<span class="quotelev2">&gt;&gt;         production ready on the v1.10 series of ompi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Tuesday, March 15, 2016, Dominic Kedelty &lt;dkedelty_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:dkedelty_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I am getting the following error using openmpi and I am
</span><br>
<span class="quotelev2">&gt;&gt;             wondering if anyone would have clue as to why it is
</span><br>
<span class="quotelev2">&gt;&gt;             happening. It is an error coming from openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;=
</span><br>
<span class="quotelev2">&gt;&gt;             fd-&gt;hints-&gt;cb_nodes (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev2">&gt;&gt;             Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;=
</span><br>
<span class="quotelev2">&gt;&gt;             fd-&gt;hints-&gt;cb_nodes (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev2">&gt;&gt;             application called MPI_Abort(MPI_COMM_WORLD, 1) - process 157
</span><br>
<span class="quotelev2">&gt;&gt;             application called MPI_Abort(MPI_COMM_WORLD, 1) - process 477
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Any help would be appreciated. Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18697.php">http://www.open-mpi.org/community/lists/devel/2016/03/18697.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ devel mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2016/03/18700.php">http://www.open-mpi.org/community/lists/devel/2016/03/18700.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18701.php">http://www.open-mpi.org/community/lists/devel/2016/03/18701.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18719.php">http://www.open-mpi.org/community/lists/devel/2016/03/18719.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18721.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18721.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18721.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
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
