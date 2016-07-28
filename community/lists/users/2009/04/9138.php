<?
$subject_val = "[OMPI users] Purify found bugs inside open-mpi library";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 21:58:35 2009" -->
<!-- isoreceived="20090429015835" -->
<!-- sent="Tue, 28 Apr 2009 21:58:29 -0400" -->
<!-- isosent="20090429015829" -->
<!-- name="Brian Blank" -->
<!-- email="brianblank_at_[hidden]" -->
<!-- subject="[OMPI users] Purify found bugs inside open-mpi library" -->
<!-- id="b10b717f0904281858q3f2f091fy253856c669ce51a3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Purify found bugs inside open-mpi library<br>
<strong>From:</strong> Brian Blank (<em>brianblank_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 21:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9139.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9137.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>Reply:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To Whom This May Concern:
<br>
<p>I am having problems with an OpenMPI application I am writing on the
<br>
Solaris/Intel AMD64 platform.  I am using OpenMPI 1.3.2 which I compiled
<br>
myself using the Solaris C/C++ compiler.
<br>
<p>My application was crashing (signal 11) inside a call to malloc() which my
<br>
code was running.  I thought it might be a memory overflow error that was
<br>
causing this, so I fired up Purify.  Purify found several problems inside
<br>
the the OpenMPI library.  I think one of the errors is serious and might be
<br>
causing the problems I was looking for.
<br>
<p>The serious error is an Array Bounds Write (ABW) which occurred 824 times
<br>
through 312 calls to MPI_Recv().  This error means that something inside the
<br>
OpenMPI library is writing to memory where it shouldn't be writing to.  Here
<br>
is the stack trace at the time of this error:
<br>
<p>Stack Trace 1 (Occurred 596 times)
<br>
<p>memcpy rtlib.o
<br>
unpack_predefined_data [datatype_unpack.h:41]
<br>
MEMCPY_CSUM( _destination, *(SOURCE), _copy_blength, (CONVERTOR) );
<br>
ompi_generic_simple_unpack [datatype_unpack.c:419]
<br>
ompi_convertor_unpack [convertor.c:314]
<br>
mca_pml_ob1_recv_frag_callback_match [pml_ob1_recvfrag.c:218]
<br>
mca_btl_sm_component_progress [btl_sm_component.c:427]
<br>
opal_progress [opal_progress.c:207]
<br>
opal_condition_wait [condition.h:99]
<br>
&lt;Writing 64 bytes to 0x821f738 in heap (16 bytes at 0x821f768 illegal).&gt;
<br>
&lt;Address 0x821f738 is 616 bytes into a malloc'd block at 0x821f4d0 of 664
<br>
bytes.&gt;
<br>
<p>Stack Trace 2 (Occurred 228 times)
<br>
<p>memcpy rtlib.o
<br>
unpack_predefined_data [datatype_unpack.h:41]
<br>
MEMCPY_CSUM( _destination, *(SOURCE), _copy_blength, (CONVERTOR) );
<br>
ompi_generic_simple_unpack [datatype_unpack.c:419]
<br>
ompi_convertor_unpack [convertor.c:314]
<br>
mca_pml_ob1_recv_request_progress_match [pml_ob1_recvreq.c:624]
<br>
mca_pml_ob1_Recv_req_start [pml_ob1_recvreq.c:1008]
<br>
mca_pml_ob1_recv [pml_ob1_irecv.c:103]
<br>
MPI_Recv [precv.c:75]
<br>
&lt;Writing 64 bytes to 0x821f738 in heap (16 bytes at 0x821f768 illegal).&gt;
<br>
&lt;Address 0x821f738 is 616 bytes into a malloc'd block at 0x821f4d0 of 664
<br>
bytes.&gt;
<br>
<p><p>I'm not that familiar with the under workings of the openmpi library, but I
<br>
tried to debug it anyway.  I noticed that it was copying a lot of extra
<br>
bytes for MPI_LONG and MPI_DOUBLE types.  On my system, MPI_LONG should have
<br>
been 4 bytes, but was copying 16 bytes.  Also, MPI_DOUBLE should have been 8
<br>
bytes, but was copying 64 bytes.  It seems the _copy_blength variable was
<br>
being set to high, but I'm not sure why.  The above error also shows 64
<br>
bytes being read, where my debugging shows a 64 byte copy for all MPI_DOUBLE
<br>
types, which I feel should have been 8 bytes.  Therefore, I really believe
<br>
_copy_blength is being set to high.
<br>
<p><p>Interestingly enough, the call to MPI_Isend() was generating an ABR (Array
<br>
Bounds Read) error in the exact same line of code.  The ABR error sometimes
<br>
can be fatal if the bytes being read is not a legal address, but the ABW
<br>
error is usually a much more fatal error because it is definitely writing
<br>
into memory that is probably used for something else.  I'm sure that if we
<br>
fix the ABW error, the ABR error should fix itself too as it's the same line
<br>
of code.
<br>
<p>Purify also found 14 UMR (Uninitialized memory read) errors inside the
<br>
OpenMPI library.  Sometimes this can be really bad if there are any
<br>
decisions being made as a result of reading this memory location.  But for
<br>
now, let's solve the serious error I reported above first, then I will send
<br>
you the UMR errors next.
<br>
<p>Any help you can provide would be greatly appreciated.
<br>
<p>Thanks,
<br>
Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9139.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9137.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>Reply:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
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
