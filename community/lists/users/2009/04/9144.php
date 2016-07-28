<?
$subject_val = "Re: [OMPI users] Purify found bugs inside open-mpi library";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 13:09:43 2009" -->
<!-- isoreceived="20090429170943" -->
<!-- sent="Wed, 29 Apr 2009 13:09:37 -0400" -->
<!-- isosent="20090429170937" -->
<!-- name="Brian Blank" -->
<!-- email="brianblank_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Purify found bugs inside open-mpi library" -->
<!-- id="b10b717f0904291009u52a7df91mb9c82e62bf034f1c_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b10b717f0904281858q3f2f091fy253856c669ce51a3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Purify found bugs inside open-mpi library<br>
<strong>From:</strong> Brian Blank (<em>brianblank_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 13:09:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9145.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="9143.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9138.php">Brian Blank: "[OMPI users] Purify found bugs inside open-mpi library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9146.php">Jeff Squyres: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>Reply:</strong> <a href="9146.php">Jeff Squyres: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To Whom This May Concern:
<br>
<p>I've been trying to dig a little deeper into this problem and found some
<br>
additional information.
<br>
<p>First, the stack trace for the ABR and ABW were different. The ABR problem
<br>
occurred in datatype_pack.h while the ABW problem occurred in
<br>
datatype_unpack.h.  The problem appears to be the same still.  Both errors
<br>
are occurring during a call to MEMCPY_CSUM().
<br>
<p>I also found there are two different variables playing into this bug.  There
<br>
is _copy_blength and _copy_count.  At the top of the function, both of these
<br>
variables are set to 2 bytes for MPI_SHORT, 4 bytes for MPI_LONG, and 8
<br>
bytes for MPI_DOUBLE.  Then, these variables are multiplied together to get
<br>
the size of the memcpy().  Unfortunetly, the correct size are either of
<br>
these variables before they are squared.  There sometimes appears to be an
<br>
optimization where if two variables are next to each other, they are
<br>
sometimes converted into a MPI_BYTE where the size is also incorrectly
<br>
taking these squared values into consideration.
<br>
<p>I wrote a small test program to illustrate the problem and attached it to
<br>
this email.  First, I configured openmpi 1.3.2 with the following options:
<br>
<p>./configure --prefix=/myworkingdirectory/openmpi-1.3.2.local
<br>
--disable-mpi-f77 --disable-mpi-f90 --enable-debug --enable-mem-debug
<br>
--enable-mem-profile
<br>
<p>I then modified datatype_pack.h &amp; datatype_unpack.h located in
<br>
openmpi-1.3.2/ompi/datatype directory in order to produce additional
<br>
debugging output.  The new versions are attached to this email.
<br>
<p>Then, I executed &quot;make all install&quot;
<br>
<p>Then, I write the attached test.c program.  You can find the output below.
<br>
The problems appear in red.
<br>
<p>0: sizes     '3'  '4'  '8'  '2'
<br>
0: offsets   '0'  '4'  '8'  '16'
<br>
0: addresses '134510640' '134510644' '134510648' '134510656'
<br>
0: name='MPI_CHAR'  _copy_blength='3'  orig_copy_blength='1'
<br>
_copy_count='3'  _source='134510640'
<br>
0: name='MPI_LONG'  _copy_blength='16'  orig_copy_blength='4'
<br>
_copy_count='4'  _source='134510644'
<br>
0: name='MPI_DOUBLE'  _copy_blength='64'  orig_copy_blength='8'
<br>
_copy_count='8'  _source='134510648'
<br>
0: name='MPI_SHORT'  _copy_blength='4'  orig_copy_blength='2'
<br>
_copy_count='2'  _source='134510656'
<br>
0: one='22'  two='222'  three='33.300000'  four='44'
<br>
1: sizes     '3'  '4'  '8'  '2'
<br>
1: offsets   '0'  '4'  '8'  '16'
<br>
1: addresses '134510640' '134510644' '134510648' '134510656'
<br>
1: name='MPI_CHAR'  _copy_blength='3'  orig_copy_blength='1'
<br>
_copy_count='3'  _destination='134510640'
<br>
1: name='MPI_LONG'  _copy_blength='16'  orig_copy_blength='4'
<br>
_copy_count='4'  _destination='134510644'
<br>
1: name='MPI_DOUBLE'  _copy_blength='64'  orig_copy_blength='8'
<br>
_copy_count='8'  _destination='134510648'
<br>
1: name='MPI_SHORT'  _copy_blength='4'  orig_copy_blength='2'
<br>
_copy_count='2'  _destination='134510656'
<br>
1: one='22'  two='222'  three='33.300000'  four='44'
<br>
<p>You can see from the output that the MPI_Send &amp; MPI_Recv functions are
<br>
reading or writing too much data from my structure, causing an overflow
<br>
condition to occur.  I believe this is causing my application to crash.
<br>
<p>Any help on this problem would be appreciated.  If there is anything else
<br>
that you need from me, just let me know.
<br>
<p>Thanks,
<br>
Brian
<br>
<p><p><p>On Tue, Apr 28, 2009 at 9:58 PM, Brian Blank &lt;brianblank_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; To Whom This May Concern:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having problems with an OpenMPI application I am writing on the
</span><br>
<span class="quotelev1">&gt; Solaris/Intel AMD64 platform.  I am using OpenMPI 1.3.2 which I compiled
</span><br>
<span class="quotelev1">&gt; myself using the Solaris C/C++ compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My application was crashing (signal 11) inside a call to malloc() which my
</span><br>
<span class="quotelev1">&gt; code was running.  I thought it might be a memory overflow error that was
</span><br>
<span class="quotelev1">&gt; causing this, so I fired up Purify.  Purify found several problems inside
</span><br>
<span class="quotelev1">&gt; the the OpenMPI library.  I think one of the errors is serious and might be
</span><br>
<span class="quotelev1">&gt; causing the problems I was looking for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The serious error is an Array Bounds Write (ABW) which occurred 824 times
</span><br>
<span class="quotelev1">&gt; through 312 calls to MPI_Recv().  This error means that something inside the
</span><br>
<span class="quotelev1">&gt; OpenMPI library is writing to memory where it shouldn't be writing to.  Here
</span><br>
<span class="quotelev1">&gt; is the stack trace at the time of this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack Trace 1 (Occurred 596 times)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; memcpy rtlib.o
</span><br>
<span class="quotelev1">&gt; unpack_predefined_data [datatype_unpack.h:41]
</span><br>
<span class="quotelev1">&gt;  MEMCPY_CSUM( _destination, *(SOURCE), _copy_blength, (CONVERTOR) );
</span><br>
<span class="quotelev1">&gt; ompi_generic_simple_unpack [datatype_unpack.c:419]
</span><br>
<span class="quotelev1">&gt; ompi_convertor_unpack [convertor.c:314]
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_frag_callback_match [pml_ob1_recvfrag.c:218]
</span><br>
<span class="quotelev1">&gt; mca_btl_sm_component_progress [btl_sm_component.c:427]
</span><br>
<span class="quotelev1">&gt; opal_progress [opal_progress.c:207]
</span><br>
<span class="quotelev1">&gt; opal_condition_wait [condition.h:99]
</span><br>
<span class="quotelev1">&gt; &lt;Writing 64 bytes to 0x821f738 in heap (16 bytes at 0x821f768 illegal).&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Address 0x821f738 is 616 bytes into a malloc'd block at 0x821f4d0 of 664
</span><br>
<span class="quotelev1">&gt; bytes.&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack Trace 2 (Occurred 228 times)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; memcpy rtlib.o
</span><br>
<span class="quotelev1">&gt; unpack_predefined_data [datatype_unpack.h:41]
</span><br>
<span class="quotelev1">&gt;  MEMCPY_CSUM( _destination, *(SOURCE), _copy_blength, (CONVERTOR) );
</span><br>
<span class="quotelev1">&gt; ompi_generic_simple_unpack [datatype_unpack.c:419]
</span><br>
<span class="quotelev1">&gt; ompi_convertor_unpack [convertor.c:314]
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_request_progress_match [pml_ob1_recvreq.c:624]
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_Recv_req_start [pml_ob1_recvreq.c:1008]
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv [pml_ob1_irecv.c:103]
</span><br>
<span class="quotelev1">&gt; MPI_Recv [precv.c:75]
</span><br>
<span class="quotelev1">&gt; &lt;Writing 64 bytes to 0x821f738 in heap (16 bytes at 0x821f768 illegal).&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Address 0x821f738 is 616 bytes into a malloc'd block at 0x821f4d0 of 664
</span><br>
<span class="quotelev1">&gt; bytes.&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not that familiar with the under workings of the openmpi library, but I
</span><br>
<span class="quotelev1">&gt; tried to debug it anyway.  I noticed that it was copying a lot of extra
</span><br>
<span class="quotelev1">&gt; bytes for MPI_LONG and MPI_DOUBLE types.  On my system, MPI_LONG should have
</span><br>
<span class="quotelev1">&gt; been 4 bytes, but was copying 16 bytes.  Also, MPI_DOUBLE should have been 8
</span><br>
<span class="quotelev1">&gt; bytes, but was copying 64 bytes.  It seems the _copy_blength variable was
</span><br>
<span class="quotelev1">&gt; being set to high, but I'm not sure why.  The above error also shows 64
</span><br>
<span class="quotelev1">&gt; bytes being read, where my debugging shows a 64 byte copy for all MPI_DOUBLE
</span><br>
<span class="quotelev1">&gt; types, which I feel should have been 8 bytes.  Therefore, I really believe
</span><br>
<span class="quotelev1">&gt; _copy_blength is being set to high.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly enough, the call to MPI_Isend() was generating an ABR (Array
</span><br>
<span class="quotelev1">&gt; Bounds Read) error in the exact same line of code.  The ABR error sometimes
</span><br>
<span class="quotelev1">&gt; can be fatal if the bytes being read is not a legal address, but the ABW
</span><br>
<span class="quotelev1">&gt; error is usually a much more fatal error because it is definitely writing
</span><br>
<span class="quotelev1">&gt; into memory that is probably used for something else.  I'm sure that if we
</span><br>
<span class="quotelev1">&gt; fix the ABW error, the ABR error should fix itself too as it's the same line
</span><br>
<span class="quotelev1">&gt; of code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Purify also found 14 UMR (Uninitialized memory read) errors inside the
</span><br>
<span class="quotelev1">&gt; OpenMPI library.  Sometimes this can be really bad if there are any
</span><br>
<span class="quotelev1">&gt; decisions being made as a result of reading this memory location.  But for
</span><br>
<span class="quotelev1">&gt; now, let's solve the serious error I reported above first, then I will send
</span><br>
<span class="quotelev1">&gt; you the UMR errors next.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help you can provide would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9144/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9144/datatype_pack.h">datatype_pack.h</a>
</ul>
<!-- attachment="datatype_pack.h" -->
<hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9144/datatype_unpack.h">datatype_unpack.h</a>
</ul>
<!-- attachment="datatype_unpack.h" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9144/test.c">test.c</a>
</ul>
<!-- attachment="test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9145.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="9143.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9138.php">Brian Blank: "[OMPI users] Purify found bugs inside open-mpi library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9146.php">Jeff Squyres: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>Reply:</strong> <a href="9146.php">Jeff Squyres: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
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
