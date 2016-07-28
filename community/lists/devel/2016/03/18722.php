<?
$subject_val = "Re: [OMPI devel] OMPI devel] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 05:07:54 2016" -->
<!-- isoreceived="20160323090754" -->
<!-- sent="Wed, 23 Mar 2016 18:07:31 +0900" -->
<!-- isosent="20160323090731" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] MPI Error" -->
<!-- id="b1oj8cgar384dedib256cu2v.1458724051130_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] MPI Error" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] MPI Error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 05:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18721.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dominic,
<br>
<p>I can only recommend you write a small self contained programs that write the data in parallel, and then check from task 0 only that data was written as you expected.
<br>
<p>Feel free to take some time reading mpi io tutorials.
<br>
<p>If you are still struggling with your code, i will try to help you,
<br>
once i can download and compile it
<br>
<p>Also, since this does not look like an openmpi bug, i recommend you post this kind of requests to the users mailing list
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Dominic Kedelty &lt;dkedelty_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;I am open to any suggestions to make the code better, especially if the way it's coded now is wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I believe what the MPI_TYPE_INDEXED is trying to do is this...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a domain of for example 8 hexahedral elements (2x2x2 cell domain) that has 27 unique connectivity nodes (3x3x3 nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In this portion of the code it is trying to write the hexa cell labeling and its connectivity via nodes. and these elements can be spread across nprocs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The potion of the binary file that is being written should have this format
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[id_e1 id_e2 ... id_ne]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This block of the file has nelems=12 4-byte binary integers.&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;n1_e1 n2_e1 ... n8_e1&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;n1_e2 n2_e2 ... n8_e2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;. .&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;n1_e12 n2_e12 ... n8_e12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This block of the file has 8.nelems=12 4-byte binary integers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It is not an irregular shape. since I know that I have an array hexa_ that has [id_e1 id_e2 id_e3 id_e4] on rank 3 and [id_e5 id_e6 id_e7 id_e8] on rank 1... etc. and for the most part every processor has the same number of elements. (that is unless I am running on an odd number of processors)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;note: i am using random ranks because I am not sure if rank 0 gets the first ids.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If MPI_Type_contiguous would work better I am open to switching to that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tue, Mar 22, 2016 at 11:06 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dominik,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;with MPI_Type_indexed, array_of_displacements is an int[]
</span><br>
<span class="quotelev1">&gt;so yes, there is a risk of overflow
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;on the other hand, MPI_Type_create_hindexed, array_of_displacements is an MPI_Aint[]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;note
</span><br>
<span class="quotelev1">&gt;&#194;&#160;array_of_displacements
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Displacement&#194;&#160; for&#194;&#160; each&#194;&#160; block,&#194;&#160; in&#194;&#160; multiples&#194;&#160; of&#194;&#160; oldtype extent for MPI_Type_indexed and bytes for MPI_Type_create_hindexed (array of integer for MPI_TYPE_INDEXED, array of MPI_Aint for
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; MPI_TYPE_CREATE_HINDEXED).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;i do not fully understand what you are trying to achieve ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_TYPE_INDEXED( 1024^3,&#194;&#160; blocklength=(/8 8 8 8 8 ..... 8 8 /), map=(/0, 8, 16, 24, ..... , 8589934592/), MPI_INTEGER, file_view_hexa_conn, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;at first glance, this is equivalent to
</span><br>
<span class="quotelev1">&gt;MPI_Type_contiguous(1024^3, MPI_INTEGER, file_view_hexa_conn, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;so unless your data has a non regular shape, i recomment you use other MPI primitives to create your datatype.
</span><br>
<span class="quotelev1">&gt;This should be much more efficient, and less prone to integer overflow
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 3/23/2016 2:50 PM, Dominic Kedelty wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I believe I have found the problem. Initially I thought it may have been an mpi issue since it was internally within an mpi function. However, now I am sure that the problem has to do with an overflow of 4-byte signed integers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am dealing with computational domains that have a little more than a billion cells (1024^3 cells). However, I am still within the limits of the 4 byte integer. The area where I am running into the problem is here I have shortened the code,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;! Fileviews
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;integer :: fileview_hexa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;integer :: fileview_hexa_conn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;integer, dimension(:), allocatable :: blocklength
</span><br>
<span class="quotelev1">&gt;integer, dimension(:), allocatable :: map
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;integer(KIND=8) :: size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;integer(KIND=MPI_OFFSET_KIND) :: disp&#194;&#160;&#194;&#160; ! MPI_OFFSET_KIND seems to be 8-bytes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;allocate(map(ncells_hexa_),blocklength(ncells_hexa_))
</span><br>
<span class="quotelev1">&gt;map = hexa_-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;hexa_ is a 4-byte array of integers that label local hexa elements at a given rank. The max this number can be is in my current code (1024^3). and min is 1. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;blocklength = 1
</span><br>
<span class="quotelev1">&gt;call MPI_TYPE_INDEXED(ncells_hexa_,blocklength,map,MPI_REAL_SP,fileview_hexa,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_REAL_SP is used for 4-byte scalar data types that are going to be written to the file. (i.e. temperature scalar stored at a given hexa cell) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;call MPI_TYPE_COMMIT(fileview_hexa,ierr)
</span><br>
<span class="quotelev1">&gt;map = map * 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;here is where problems arise. The map is being multiplied by 8 because the hexa cell node connectivity needs to be written. The node numbering that is being written to the file needs to be 4-bytes, and the max node numbering is able to be held within the 4-byte signed integer. But since I have to map 8*1024^3 displacements to be written map needs to be integer(kind=8).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;blocklength = 8
</span><br>
<span class="quotelev1">&gt;call MPI_TYPE_INDEXED(ncells_hexa_,blocklength,map,MPI_INTEGER,fileview_hexa_conn,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_TYPE_INDEXED( 1024^3,&#194;&#160; blocklength=(/8 8 8 8 8 ..... 8 8 /), map=(/0, 8, 16, 24, ..... , 8589934592/), MPI_INTEGER, file_view_hexa_conn, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Would this be a correct way to declare the newdatatype file_view_hexa_conn. in this call blocklength would be a 4-byte integer array and map would be an 8-byte integer array. To be clear, in the code currently has both map and blocklength as 4-bytes integer arrays.&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;call MPI_TYPE_COMMIT(fileview_hexa_conn,ierr)
</span><br>
<span class="quotelev1">&gt;deallocate(map,blocklength)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;disp = disp+84
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;call MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_hexa,&quot;native&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt;call MPI_FILE_WRITE_ALL(iunit,hexa_,ncells_hexa_,MPI_INTEGER,status,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I believe this could be wrong as well but the fileview_hexa is being used to write the 4-byte integer hexa labeling, but as you said MPI_REAL_SP = MPI_INTEGER = 4-byte may be fine. It has not given any problems thus far. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;disp = disp+4*ncells_hexa
</span><br>
<span class="quotelev1">&gt;call MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_hexa_conn,&quot;native&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt;size = 8*ncells_hexa_
</span><br>
<span class="quotelev1">&gt;call MPI_FILE_WRITE_ALL(iunit,conn_hexa,size,MPI_INTEGER,status,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hopefully that is enough information about the issue. Now my questions. 
</span><br>
<span class="quotelev1">&gt;Does this implementation look correct.What kind should fileview_hexa and fileview_hexa_conn be?Is it okay that map and blocklength are different integer kinds?What does the blocklength parameter specify exactly. I played with this some and changing the blocklength did not seem to change anything 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for the help. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Dominic Kedelty
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Mar 16, 2016 at 12:02 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dominic,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;at first, you might try to add
</span><br>
<span class="quotelev1">&gt;call MPI_Barrier(comm,ierr)
</span><br>
<span class="quotelev1">&gt;between
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; if (file_is_there .and. irank.eq.iroot) call MPI_FILE_DELETE(file,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; call MPI_FILE_OPEN(comm,file,IOR(MPI_MODE_WRONLY,MPI_MODE_CREATE),MPI_INFO_NULL,iunit,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/* there might me a race condition, i am not sure about that */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;fwiw, the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;STOP A configuration file is required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;error message is not coming from OpenMPI.
</span><br>
<span class="quotelev1">&gt;it might be indirectly triggered by an ompio bug/limitation, or even a bug in your application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;did you get your application work with an other flavor of OpenMPI ?
</span><br>
<span class="quotelev1">&gt;e.g. are you reporting an OpenMPI bug ?
</span><br>
<span class="quotelev1">&gt;or are you asking some help with your application (the bug could either be in your code or in OpenMPI, and you do not know for sure)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;i am a bit surprised you are using the same fileview_node type with both MPI_INTEGER and MPI_REAL_SP, but since they should be the same size, that might not be an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the subroutine depends on too many external parameters
</span><br>
<span class="quotelev1">&gt;(nnodes_, fileview_node, ncells_hexa, ncells_hexa_, unstr2str, ...)
</span><br>
<span class="quotelev1">&gt;so writing a simple reproducer might not be trivial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;i recommend you first write a self contained program that can be evidenced to reproduce the issue,
</span><br>
<span class="quotelev1">&gt;and then i will investigate that. for that, you might want to dump the array sizes and the description of fileview_node in your application, and then hard code them into your self contained program.
</span><br>
<span class="quotelev1">&gt;also how many nodes/tasks are you running and what filesystem are you running on ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 3/16/2016 3:05 PM, Dominic Kedelty wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I do not have the latest mpich available. I tested using openmpi version 1.8.7 as well as mvapich2 version 1.9. both produced similar errors. I tried the mca flag that you had provided and it is telling me that a configuration file is needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;all processes return:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;STOP A configuration file is required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am attaching the subroutine of the code that I believe is where the problem is occuring.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mon, Mar 14, 2016 at 6:25 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dominic, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;this is a ROMIO error message, and ROMIO is from MPICH project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;at first, I recommend you try the same test with the latest mpich, in order to check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;whether the bug is indeed from romio, and has been fixed in the latest release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(ompi is a few version behind the latest romio)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;would you be able to post a trimmed version of your application that evidences the test ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;that will be helpful to understand what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;you might also want to give a try to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun --mca io ompio ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and see whether this helps.&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;that being said, I think ompio is not considered as production ready on the v1.10 series of ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tuesday, March 15, 2016, Dominic Kedelty &lt;dkedelty_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am getting the following error using openmpi and I am wondering if anyone would have clue as to why it is happening. It is an error coming from openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev1">&gt;Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev1">&gt;application called MPI_Abort(MPI_COMM_WORLD, 1) - process 157
</span><br>
<span class="quotelev1">&gt;application called MPI_Abort(MPI_COMM_WORLD, 1) - process 477
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any help would be appreciated. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18697.php">http://www.open-mpi.org/community/lists/devel/2016/03/18697.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18700.php">http://www.open-mpi.org/community/lists/devel/2016/03/18700.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18701.php">http://www.open-mpi.org/community/lists/devel/2016/03/18701.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18719.php">http://www.open-mpi.org/community/lists/devel/2016/03/18719.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18720.php">http://www.open-mpi.org/community/lists/devel/2016/03/18720.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18722/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18721.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
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
