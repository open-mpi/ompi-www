<?
$subject_val = "[OMPI devel] Fwd:  Fwd: Purify found bugs inside open-mpi library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 13:43:07 2009" -->
<!-- isoreceived="20090501174307" -->
<!-- sent="Fri, 1 May 2009 13:43:01 -0400" -->
<!-- isosent="20090501174301" -->
<!-- name="Brian Blank" -->
<!-- email="brianblank_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd:  Fwd: Purify found bugs inside open-mpi library" -->
<!-- id="b10b717f0905011043g21440102s5d743c70be1c979f_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b10b717f0905010854v3d9f9113v5e9f416bb2167c3a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd:  Fwd: Purify found bugs inside open-mpi library<br>
<strong>From:</strong> Brian Blank (<em>brianblank_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 13:43:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5945.php">Terry Dontje: "[OMPI devel] [Fwd: Re: Fwd: Purify found bugs inside open-mpi library]"</a>
<li><strong>Previous message:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
---------- Forwarded message ----------
<br>
From: Brian Blank &lt;brianblank_at_[hidden]&gt;
<br>
Date: Fri, May 1, 2009 at 11:54 AM
<br>
Subject: Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library
<br>
To: Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;
<br>
<p><p>Hi Terry,
<br>
<p>I did a memset() prior to the call to processor_info(), and the UMR went
<br>
away.  I further tested by setting pinfo.pi_state to -1 prior to the call to
<br>
processor_info(), and processor_info() always sets pinfo.pi_state to 2.
<br>
Therefore, I am starting to suspect this is a bug in purify.  Maybe purify
<br>
is having issues detecting that this variable was updated by system code.
<br>
I'm going to forward a sample program to the IBM purify team to have them
<br>
investigate further.
<br>
<p>I also attached a copy of mpi_purify.txt that contains all the purify
<br>
findings.  Therefore a handful of UMR errors that occur through different
<br>
call stacks.  Also, there are 2 file descriptors left open &amp; a lot of memory
<br>
that leaked despite me calling MPI_Finalize().
<br>
<p>Let me know if you need me to try something else or to produce any
<br>
additional output.
<br>
<p>Thanks again,
<br>
Brian
<br>
<p><p>On Thu, Apr 30, 2009 at 10:11 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So I've been kibitzing with Jeff on the below.  If you do a memset of pinfo
</span><br>
<span class="quotelev1">&gt; prior to the line you show below does the UMR go away.  I believe it will
</span><br>
<span class="quotelev1">&gt; not and that you probably will need to do something like pinfo.pi_state = 0.
</span><br>
<span class="quotelev1">&gt;  Can you try this out for me?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Blank wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That definetly worked for me.  Thanks so much for you help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Purify did find some other UMR (unitialize memory read) errors though, but
</span><br>
<span class="quotelev2">&gt;&gt; they don't seem to be negativley impacting my application right now.
</span><br>
<span class="quotelev2">&gt;&gt;  Nonetheless, I'll post them later today in case anyone is interested in
</span><br>
<span class="quotelev2">&gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to give you a sample of what it see's now, one of the UMR errors
</span><br>
<span class="quotelev2">&gt;&gt; seems a little odd ... paffinity_solaris_module.c line 180.
</span><br>
<span class="quotelev2">&gt;&gt; if (P_ONLINE == pinfo.pi_state || P_NOINTR == pinfo.pi_state) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll post the rest of the UMR errors later today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again,
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2009, at 4:06 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Actually, I think your program is erroneous -- it looks like you're using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of bytes for the sizes[] array when it really should be using number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of elements.  Specifically, it should be:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   sizes[0] = (int) sizeof(tstruct.one);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   sizes[1] = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   sizes[2] = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   sizes[3] = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since MPI knows the sizes of datatypes, you specify counts of datatypes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- not numbers of bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That seemed to make your program work for me; double check and ensure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it works for you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 29, 2009, at 1:21 PM, Brian Blank wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  To Whom This May Concern:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I originally sent this to the users list, but realizing now that this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; might be more appropriate for the developer's list as it is dealing with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issues internal to the openmpi library (sorry for the dual distribution).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Please start with second email first.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian Blank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Brian Blank &lt;brianblank_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Wed, Apr 29, 2009 at 1:09 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: Purify found bugs inside open-mpi library
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To Whom This May Concern:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've been trying to dig a little deeper into this problem and found some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First, the stack trace for the ABR and ABW were different. The ABR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem occurred in datatype_pack.h while the ABW problem occurred in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datatype_unpack.h.  The problem appears to be the same still.  Both errors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are occurring during a call to MEMCPY_CSUM().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also found there are two different variables playing into this bug.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  There is _copy_blength and _copy_count.  At the top of the function, both
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of these variables are set to 2 bytes for MPI_SHORT, 4 bytes for MPI_LONG,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and 8 bytes for MPI_DOUBLE.  Then, these variables are multiplied together
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to get the size of the memcpy().  Unfortunetly, the correct size are either
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of these variables before they are squared.  There sometimes appears to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an optimization where if two variables are next to each other, they are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sometimes converted into a MPI_BYTE where the size is also incorrectly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; taking these squared values into consideration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I wrote a small test program to illustrate the problem and attached it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to this email.  First, I configured openmpi 1.3.2 with the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; options:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/myworkingdirectory/openmpi-1.3.2.local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-mpi-f77 --disable-mpi-f90 --enable-debug --enable-mem-debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-mem-profile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I then modified datatype_pack.h &amp; datatype_unpack.h located in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.3.2/ompi/datatype directory in order to produce additional
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; debugging output.  The new versions are attached to this email.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then, I executed &quot;make all install&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then, I write the attached test.c program.  You can find the output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; below.  The problems appear in red.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: sizes     '3'  '4'  '8'  '2'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: offsets   '0'  '4'  '8'  '16'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: addresses '134510640' '134510644' '134510648' '134510656'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: name='MPI_CHAR'  _copy_blength='3'  orig_copy_blength='1'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _copy_count='3'  _source='134510640'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: name='MPI_LONG'  _copy_blength='16'  orig_copy_blength='4'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _copy_count='4'  _source='134510644'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: name='MPI_DOUBLE'  _copy_blength='64'  orig_copy_blength='8'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _copy_count='8'  _source='134510648'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: name='MPI_SHORT'  _copy_blength='4'  orig_copy_blength='2'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _copy_count='2'  _source='134510656'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: one='22'  two='222'  three='33.300000'  four='44'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1: sizes     '3'  '4'  '8'  '2'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1: offsets   '0'  '4'  '8'  '16'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1: addresses '134510640' '134510644' '134510648' '134510656'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1: name='MPI_CHAR'  _copy_blength='3'  orig_copy_blength='1'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _copy_count='3'  _destination='134510640'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1: name='MPI_LONG'  _copy_blength='16'  orig_copy_blength='4'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _copy_count='4'  _destination='134510644'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1: name='MPI_DOUBLE'  _copy_blength='64'  orig_copy_blength='8'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _copy_count='8'  _destination='134510648'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1: name='MPI_SHORT'  _copy_blength='4'  orig_copy_blength='2'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _copy_count='2'  _destination='134510656'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1: one='22'  two='222'  three='33.300000'  four='44'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can see from the output that the MPI_Send &amp; MPI_Recv functions are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reading or writing too much data from my structure, causing an overflow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; condition to occur.  I believe this is causing my application to crash.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help on this problem would be appreciated.  If there is anything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; else that you need from me, just let me know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Apr 28, 2009 at 9:58 PM, Brian Blank &lt;brianblank_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To Whom This May Concern:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am having problems with an OpenMPI application I am writing on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Solaris/Intel AMD64 platform.  I am using OpenMPI 1.3.2 which I compiled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; myself using the Solaris C/C++ compiler.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My application was crashing (signal 11) inside a call to malloc() which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my code was running.  I thought it might be a memory overflow error that was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; causing this, so I fired up Purify.  Purify found several problems inside
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the the OpenMPI library.  I think one of the errors is serious and might be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; causing the problems I was looking for.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The serious error is an Array Bounds Write (ABW) which occurred 824
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; times through 312 calls to MPI_Recv().  This error means that something
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inside the OpenMPI library is writing to memory where it shouldn't be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; writing to.  Here is the stack trace at the time of this error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Stack Trace 1 (Occurred 596 times)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memcpy    rtlib.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unpack_predefined_data    [datatype_unpack.h:41]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MEMCPY_CSUM( _destination, *(SOURCE), _copy_blength, (CONVERTOR) );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_generic_simple_unpack [datatype_unpack.c:419]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_convertor_unpack [convertor.c:314]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_ob1_recv_frag_callback_match [pml_ob1_recvfrag.c:218]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_btl_sm_component_progress [btl_sm_component.c:427]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_progress [opal_progress.c:207]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_condition_wait [condition.h:99]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Writing 64 bytes to 0x821f738 in heap (16 bytes at 0x821f768 illegal).&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Address 0x821f738 is 616 bytes into a malloc'd block at 0x821f4d0 of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 664 bytes.&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Stack Trace 2 (Occurred 228 times)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memcpy    rtlib.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unpack_predefined_data    [datatype_unpack.h:41]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MEMCPY_CSUM( _destination, *(SOURCE), _copy_blength, (CONVERTOR) );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_generic_simple_unpack [datatype_unpack.c:419]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_convertor_unpack [convertor.c:314]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_ob1_recv_request_progress_match [pml_ob1_recvreq.c:624]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_ob1_Recv_req_start [pml_ob1_recvreq.c:1008]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_ob1_recv [pml_ob1_irecv.c:103]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Recv [precv.c:75]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Writing 64 bytes to 0x821f738 in heap (16 bytes at 0x821f768 illegal).&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Address 0x821f738 is 616 bytes into a malloc'd block at 0x821f4d0 of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 664 bytes.&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not that familiar with the under workings of the openmpi library,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but I tried to debug it anyway.  I noticed that it was copying a lot of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extra bytes for MPI_LONG and MPI_DOUBLE types.  On my system, MPI_LONG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should have been 4 bytes, but was copying 16 bytes.  Also, MPI_DOUBLE should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have been 8 bytes, but was copying 64 bytes.  It seems the _copy_blength
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variable was being set to high, but I'm not sure why.  The above error also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shows 64 bytes being read, where my debugging shows a 64 byte copy for all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_DOUBLE types, which I feel should have been 8 bytes.  Therefore, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; really believe _copy_blength is being set to high.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interestingly enough, the call to MPI_Isend() was generating an ABR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Array Bounds Read) error in the exact same line of code.  The ABR error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sometimes can be fatal if the bytes being read is not a legal address, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the ABW error is usually a much more fatal error because it is definitely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; writing into memory that is probably used for something else.  I'm sure that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if we fix the ABW error, the ABR error should fix itself too as it's the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same line of code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Purify also found 14 UMR (Uninitialized memory read) errors inside the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI library.  Sometimes this can be really bad if there are any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; decisions being made as a result of reading this memory location.  But for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now, let's solve the serious error I reported above first, then I will send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you the UMR errors next.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help you can provide would be greatly appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;datatype_pack.h&gt;&lt;datatype_unpack.h&gt;&lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5944/mpi_purify.txt">mpi_purify.txt</a>
</ul>
<!-- attachment="mpi_purify.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5945.php">Terry Dontje: "[OMPI devel] [Fwd: Re: Fwd: Purify found bugs inside open-mpi library]"</a>
<li><strong>Previous message:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
