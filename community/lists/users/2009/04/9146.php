<?
$subject_val = "Re: [OMPI users] Purify found bugs inside open-mpi library";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 15:35:19 2009" -->
<!-- isoreceived="20090429193519" -->
<!-- sent="Wed, 29 Apr 2009 15:35:12 -0400" -->
<!-- isosent="20090429193512" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Purify found bugs inside open-mpi library" -->
<!-- id="BB7D262F-062D-4F9E-9567-75067891E47B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b10b717f0904291009u52a7df91mb9c82e62bf034f1c_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 15:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="9145.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per your mail on the devel list, we'll follow up there.  Many thanks!
<br>
<p>On Apr 29, 2009, at 1:09 PM, Brian Blank wrote:
<br>
<p><span class="quotelev1">&gt; To Whom This May Concern:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been trying to dig a little deeper into this problem and found  
</span><br>
<span class="quotelev1">&gt; some additional information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, the stack trace for the ABR and ABW were different. The ABR  
</span><br>
<span class="quotelev1">&gt; problem occurred in datatype_pack.h while the ABW problem occurred  
</span><br>
<span class="quotelev1">&gt; in datatype_unpack.h.  The problem appears to be the same still.   
</span><br>
<span class="quotelev1">&gt; Both errors are occurring during a call to MEMCPY_CSUM().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also found there are two different variables playing into this  
</span><br>
<span class="quotelev1">&gt; bug.  There is _copy_blength and _copy_count.  At the top of the  
</span><br>
<span class="quotelev1">&gt; function, both of these variables are set to 2 bytes for MPI_SHORT,  
</span><br>
<span class="quotelev1">&gt; 4 bytes for MPI_LONG, and 8 bytes for MPI_DOUBLE.  Then, these  
</span><br>
<span class="quotelev1">&gt; variables are multiplied together to get the size of the memcpy().   
</span><br>
<span class="quotelev1">&gt; Unfortunetly, the correct size are either of these variables before  
</span><br>
<span class="quotelev1">&gt; they are squared.  There sometimes appears to be an optimization  
</span><br>
<span class="quotelev1">&gt; where if two variables are next to each other, they are sometimes  
</span><br>
<span class="quotelev1">&gt; converted into a MPI_BYTE where the size is also incorrectly taking  
</span><br>
<span class="quotelev1">&gt; these squared values into consideration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wrote a small test program to illustrate the problem and attached  
</span><br>
<span class="quotelev1">&gt; it to this email.  First, I configured openmpi 1.3.2 with the  
</span><br>
<span class="quotelev1">&gt; following options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/myworkingdirectory/openmpi-1.3.2.local -- 
</span><br>
<span class="quotelev1">&gt; disable-mpi-f77 --disable-mpi-f90 --enable-debug --enable-mem-debug  
</span><br>
<span class="quotelev1">&gt; --enable-mem-profile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then modified datatype_pack.h &amp; datatype_unpack.h located in  
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/ompi/datatype directory in order to produce additional  
</span><br>
<span class="quotelev1">&gt; debugging output.  The new versions are attached to this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, I executed &quot;make all install&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, I write the attached test.c program.  You can find the output  
</span><br>
<span class="quotelev1">&gt; below.  The problems appear in red.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0: sizes     '3'  '4'  '8'  '2'
</span><br>
<span class="quotelev1">&gt; 0: offsets   '0'  '4'  '8'  '16'
</span><br>
<span class="quotelev1">&gt; 0: addresses '134510640' '134510644' '134510648' '134510656'
</span><br>
<span class="quotelev1">&gt; 0: name='MPI_CHAR'  _copy_blength='3'  orig_copy_blength='1'   
</span><br>
<span class="quotelev1">&gt; _copy_count='3'  _source='134510640'
</span><br>
<span class="quotelev1">&gt; 0: name='MPI_LONG'  _copy_blength='16'  orig_copy_blength='4'   
</span><br>
<span class="quotelev1">&gt; _copy_count='4'  _source='134510644'
</span><br>
<span class="quotelev1">&gt; 0: name='MPI_DOUBLE'  _copy_blength='64'  orig_copy_blength='8'   
</span><br>
<span class="quotelev1">&gt; _copy_count='8'  _source='134510648'
</span><br>
<span class="quotelev1">&gt; 0: name='MPI_SHORT'  _copy_blength='4'  orig_copy_blength='2'   
</span><br>
<span class="quotelev1">&gt; _copy_count='2'  _source='134510656'
</span><br>
<span class="quotelev1">&gt; 0: one='22'  two='222'  three='33.300000'  four='44'
</span><br>
<span class="quotelev1">&gt; 1: sizes     '3'  '4'  '8'  '2'
</span><br>
<span class="quotelev1">&gt; 1: offsets   '0'  '4'  '8'  '16'
</span><br>
<span class="quotelev1">&gt; 1: addresses '134510640' '134510644' '134510648' '134510656'
</span><br>
<span class="quotelev1">&gt; 1: name='MPI_CHAR'  _copy_blength='3'  orig_copy_blength='1'   
</span><br>
<span class="quotelev1">&gt; _copy_count='3'  _destination='134510640'
</span><br>
<span class="quotelev1">&gt; 1: name='MPI_LONG'  _copy_blength='16'  orig_copy_blength='4'   
</span><br>
<span class="quotelev1">&gt; _copy_count='4'  _destination='134510644'
</span><br>
<span class="quotelev1">&gt; 1: name='MPI_DOUBLE'  _copy_blength='64'  orig_copy_blength='8'   
</span><br>
<span class="quotelev1">&gt; _copy_count='8'  _destination='134510648'
</span><br>
<span class="quotelev1">&gt; 1: name='MPI_SHORT'  _copy_blength='4'  orig_copy_blength='2'   
</span><br>
<span class="quotelev1">&gt; _copy_count='2'  _destination='134510656'
</span><br>
<span class="quotelev1">&gt; 1: one='22'  two='222'  three='33.300000'  four='44'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can see from the output that the MPI_Send &amp; MPI_Recv functions  
</span><br>
<span class="quotelev1">&gt; are reading or writing too much data from my structure, causing an  
</span><br>
<span class="quotelev1">&gt; overflow condition to occur.  I believe this is causing my  
</span><br>
<span class="quotelev1">&gt; application to crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help on this problem would be appreciated.  If there is anything  
</span><br>
<span class="quotelev1">&gt; else that you need from me, just let me know.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 28, 2009 at 9:58 PM, Brian Blank &lt;brianblank_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; To Whom This May Concern:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having problems with an OpenMPI application I am writing on the  
</span><br>
<span class="quotelev1">&gt; Solaris/Intel AMD64 platform.  I am using OpenMPI 1.3.2 which I  
</span><br>
<span class="quotelev1">&gt; compiled myself using the Solaris C/C++ compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My application was crashing (signal 11) inside a call to malloc()  
</span><br>
<span class="quotelev1">&gt; which my code was running.  I thought it might be a memory overflow  
</span><br>
<span class="quotelev1">&gt; error that was causing this, so I fired up Purify.  Purify found  
</span><br>
<span class="quotelev1">&gt; several problems inside the the OpenMPI library.  I think one of the  
</span><br>
<span class="quotelev1">&gt; errors is serious and might be causing the problems I was looking for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The serious error is an Array Bounds Write (ABW) which occurred 824  
</span><br>
<span class="quotelev1">&gt; times through 312 calls to MPI_Recv().  This error means that  
</span><br>
<span class="quotelev1">&gt; something inside the OpenMPI library is writing to memory where it  
</span><br>
<span class="quotelev1">&gt; shouldn't be writing to.  Here is the stack trace at the time of  
</span><br>
<span class="quotelev1">&gt; this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack Trace 1 (Occurred 596 times)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; memcpy	rtlib.o
</span><br>
<span class="quotelev1">&gt; unpack_predefined_data	[datatype_unpack.h:41]
</span><br>
<span class="quotelev1">&gt; MEMCPY_CSUM( _destination, *(SOURCE), _copy_blength, (CONVERTOR) );
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
<span class="quotelev1">&gt; &lt;Writing 64 bytes to 0x821f738 in heap (16 bytes at 0x821f768  
</span><br>
<span class="quotelev1">&gt; illegal).&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Address 0x821f738 is 616 bytes into a malloc'd block at 0x821f4d0  
</span><br>
<span class="quotelev1">&gt; of 664 bytes.&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack Trace 2 (Occurred 228 times)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; memcpy	rtlib.o
</span><br>
<span class="quotelev1">&gt; unpack_predefined_data	[datatype_unpack.h:41]
</span><br>
<span class="quotelev1">&gt; MEMCPY_CSUM( _destination, *(SOURCE), _copy_blength, (CONVERTOR) );
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
<span class="quotelev1">&gt; &lt;Writing 64 bytes to 0x821f738 in heap (16 bytes at 0x821f768  
</span><br>
<span class="quotelev1">&gt; illegal).&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Address 0x821f738 is 616 bytes into a malloc'd block at 0x821f4d0  
</span><br>
<span class="quotelev1">&gt; of 664 bytes.&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not that familiar with the under workings of the openmpi  
</span><br>
<span class="quotelev1">&gt; library, but I tried to debug it anyway.  I noticed that it was  
</span><br>
<span class="quotelev1">&gt; copying a lot of extra bytes for MPI_LONG and MPI_DOUBLE types.  On  
</span><br>
<span class="quotelev1">&gt; my system, MPI_LONG should have been 4 bytes, but was copying 16  
</span><br>
<span class="quotelev1">&gt; bytes.  Also, MPI_DOUBLE should have been 8 bytes, but was copying  
</span><br>
<span class="quotelev1">&gt; 64 bytes.  It seems the _copy_blength variable was being set to  
</span><br>
<span class="quotelev1">&gt; high, but I'm not sure why.  The above error also shows 64 bytes  
</span><br>
<span class="quotelev1">&gt; being read, where my debugging shows a 64 byte copy for all  
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE types, which I feel should have been 8 bytes.  Therefore,  
</span><br>
<span class="quotelev1">&gt; I really believe _copy_blength is being set to high.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly enough, the call to MPI_Isend() was generating an ABR  
</span><br>
<span class="quotelev1">&gt; (Array Bounds Read) error in the exact same line of code.  The ABR  
</span><br>
<span class="quotelev1">&gt; error sometimes can be fatal if the bytes being read is not a legal  
</span><br>
<span class="quotelev1">&gt; address, but the ABW error is usually a much more fatal error  
</span><br>
<span class="quotelev1">&gt; because it is definitely writing into memory that is probably used  
</span><br>
<span class="quotelev1">&gt; for something else.  I'm sure that if we fix the ABW error, the ABR  
</span><br>
<span class="quotelev1">&gt; error should fix itself too as it's the same line of code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Purify also found 14 UMR (Uninitialized memory read) errors inside  
</span><br>
<span class="quotelev1">&gt; the OpenMPI library.  Sometimes this can be really bad if there are  
</span><br>
<span class="quotelev1">&gt; any decisions being made as a result of reading this memory  
</span><br>
<span class="quotelev1">&gt; location.  But for now, let's solve the serious error I reported  
</span><br>
<span class="quotelev1">&gt; above first, then I will send you the UMR errors next.
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
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; datatype_pack 
</span><br>
<span class="quotelev1">&gt; .h 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; datatype_unpack 
</span><br>
<span class="quotelev1">&gt; .h&gt;&lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="9145.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
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
