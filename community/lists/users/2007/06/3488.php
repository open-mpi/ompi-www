<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 18:52:39 2007" -->
<!-- isoreceived="20070613225239" -->
<!-- sent="Wed, 13 Jun 2007 16:52:24 -0600" -->
<!-- isosent="20070613225224" -->
<!-- name="Corwell, Sophia" -->
<!-- email="secorwe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI issue with Iprobe" -->
<!-- id="AB4680A899D2F441A43D31F2A9B8451B05D74E28_at_ES22SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7D7EC480-4BCD-4FC9-BE95-FE1A8D122676_at_lanl.gov" -->
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
<strong>From:</strong> Corwell, Sophia (<em>secorwe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 18:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Previous message:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Galen,
<br>
<p>Yes, that worked! Thanks so much!
<br>
<p>-sophia 
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Galen Shipman
<br>
Sent: Monday, June 11, 2007 2:15 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Open MPI issue with Iprobe
<br>
<p>I think the problem is that we use MPI_STATUS_IGNORE in the C++ bindings
<br>
but don't check for it properly in mtl_mx_iprobe,
<br>
<p>can you try applying this diff to ompi and having the user try again, we
<br>
will also push this into the 1.2 branch.
<br>
<p>- Galen
<br>
<p><p>Index: ompi/mca/mtl/mx/mtl_mx_probe.c
<br>
===================================================================
<br>
--- ompi/mca/mtl/mx/mtl_mx_probe.c      (revision 14997)
<br>
+++ ompi/mca/mtl/mx/mtl_mx_probe.c      (working copy)
<br>
@@ -58,11 +58,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (result) {
<br>
-        status-&gt;MPI_ERROR = OMPI_SUCCESS;
<br>
-        MX_GET_SRC(mx_status.match_info, status-&gt;MPI_SOURCE);
<br>
-        MX_GET_TAG(mx_status.match_info, status-&gt;MPI_TAG);
<br>
-        status-&gt;_count = mx_status.msg_length;
<br>
-
<br>
+        if(MPI_STATUS_IGNORE != status) {
<br>
+            status-&gt;MPI_ERROR = OMPI_SUCCESS;
<br>
+            MX_GET_SRC(mx_status.match_info, status-&gt;MPI_SOURCE);
<br>
+            MX_GET_TAG(mx_status.match_info, status-&gt;MPI_TAG);
<br>
+            status-&gt;_count = mx_status.msg_length;
<br>
+        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*flag = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*flag = 0;
<br>
<p><p><p><p>On Jun 11, 2007, at 12:55 PM, Corwell, Sophia wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are seeing the following issue with Iprobe on our clusters running 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2. Here is the code and related information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =======
</span><br>
<span class="quotelev1">&gt; Modules currently loaded:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (sn31)/projects&gt;module list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   1) /opt/modules/oscar-modulefiles/default-manpath/1.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   2) compilers/intel-9.1-f040-c045
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3) misc/env-openmpi-1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4) mpi/openmpi-1.2.2_mx_intel-9.1-f040-c045
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   5) libraries/intel-mkl
</span><br>
<span class="quotelev1">&gt; =======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Source code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sn31)/projects/&gt;more probeTest.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;cassert&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI::Init(argc, argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     const int rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     const int size = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     const int sendProc = (rank + size - 1) % size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     const int recvProc = (rank + 1) % size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     const int tag = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     // send an asynchronous message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     const int sendVal = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI::Request sendRequest =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI::COMM_WORLD.Isend(&amp;sendVal, 1, MPI_INT, recvProc, tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     // wait for message to arrive
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     while (!MPI::COMM_WORLD.Iprobe(sendProc, tag)) {}  // This line 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causes problems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     // Receive asynchronous message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int recvVal;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI::Request recvRequest =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI::COMM_WORLD.Irecv(&amp;recvVal, 1, MPI_INT, sendProc, tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     recvRequest.Wait();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI::Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; =======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiled with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sn31)/projects&gt;/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -1.2.2_mx/bin/mpicxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x/include -g -c -o probeTest.o probeTest.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sn31)/projects&gt;/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -1.2.2_mx/bin/mpicxx -g -o probeTest 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probeTest.o -lmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; /projects/global/x86_64/compilers/intel/intel-9.1-cce-045/lib/
</span><br>
<span class="quotelev1">&gt; ibimf.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: warning: feupdateenv is not implemented and will always 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error at runtime:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sn31)/projects&gt;mpiexec -n 1 ./probeTest [sn31:17616] *** Process 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received signal *** [sn31:17616] Signal:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault (11) [sn31:17616] Signal code: Address not mapped
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) [sn31:17616] Failing at address: 0x8 [sn31:17616] [ 0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/tls/libpthread.so.0 [0x2a9665a4f0] [sn31:17616] [ 1] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib/openmpi/mca_mtl_mx.so(ompi_mtl_mx_iprobe+0x81)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a9980b305]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17616] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib/openmpi/mca_pml_cm.so(mca_pml_cm_iprobe+0x1f)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a995eb817]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17616] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib/libmpi.so.0(MPI_Iprobe+0xef)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a956d363f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17616] [ 4] ./probeTest(_ZNK3MPI4Comm6IprobeEii+0x3a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x4046aa][sn31:17616] [ 5] ./probeTest(main+0x147) [0x40480b] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17616] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a967803fb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17616] [ 7] ./probeTest(_ZNSt8ios_base4InitD1Ev+0x3a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x4038ca][sn31:17616] *** End of error message *** mpiexec noticed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that job rank 0 with PID 17616 on node sn31 exited
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sn31)/projects/ceptre/sdpautz/NWCC/temp&gt;mpiexec -n 2 ./probeTest 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17621] *** Process received signal *** [sn31:17620] ***
</span><br>
<span class="quotelev1">&gt; Process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received signal *** [sn31:17620] Signal: Segmentation fault (11) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17620] Signal code: Address not mapped (1) [sn31:17620] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Failing at address: 0x8 [sn31:17620] [ 0] /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a9665a4f0] [sn31:17620] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib/openmpi/mca_mtl_mx.so(ompi_mtl_mx_iprobe+0x81)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a9980b305]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17620] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib/openmpi/mca_pml_cm.so(mca_pml_cm_iprobe+0x1f)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a995eb817]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17620] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib/libmpi.so.0(MPI_Iprobe+0xef)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a956d363f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17620] [ 4] ./probeTest(_ZNK3MPI4Comm6IprobeEii+0x3a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x4046aa][sn31:17620] [ 5] ./probeTest(main+0x147) [0x40480b] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17620] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a967803fb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17620] [ 7] ./probeTest(_ZNSt8ios_base4InitD1Ev+0x3a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x4038ca][sn31:17620] *** End of error message *** [sn31:17621]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal: Segmentation fault (11) [sn31:17621] Signal code: Address 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not mapped (1) [sn31:17621] Failing at address: 0x8 [sn31:17621] [ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0] /lib64/tls/libpthread.so.0 [0x2a9665a4f0] [sn31:17621] [ 1] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib/openmpi/mca_mtl_mx.so(ompi_mtl_mx_iprobe+0x81)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a9980b305]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17621] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib/openmpi/mca_pml_cm.so(mca_pml_cm_iprobe+0x1f)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a995eb817]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17621] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib/libmpi.so.0(MPI_Iprobe+0xef)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a956d363f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17621] [ 4] ./probeTest(_ZNK3MPI4Comm6IprobeEii+0x3a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x4046aa][sn31:17621] [ 5] ./probeTest(main+0x1ad) [0x404871] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17621] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a967803fb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sn31:17621] [ 7] ./probeTest(_ZNSt8ios_base4InitD1Ev+0x3a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x4038ca][sn31:17621] *** End of error message *** mpiexec noticed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that job rank 0 with PID 17620 on node sn31 exited
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additional Information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It appears that the call of Iprobe causes problems; if that line is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; taken out, the code completes normally.  Failures also occur with
</span><br>
<span class="quotelev1">&gt; the gcc compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mpich appears to work, at least for the Intel compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hardware information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_spirit1 ~]# mx_info -q
</span><br>
<span class="quotelev1">&gt; MX Version: 1.2.1-rc20
</span><br>
<span class="quotelev1">&gt; MX Build:
</span><br>
<span class="quotelev1">&gt; root_at_[hidden]:/projects/global/src/myricom/mx-1.2.1-rc20
</span><br>
<span class="quotelev1">&gt; Thu Jun
</span><br>
<span class="quotelev1">&gt; 7 17:08:02 MDT 2007
</span><br>
<span class="quotelev1">&gt; 1 Myrinet board installed.
</span><br>
<span class="quotelev1">&gt; The MX driver is configured to support a maximum of:
</span><br>
<span class="quotelev1">&gt;         8 endpoints per NIC, 1024 NICs on the network, 32 NICs per 
</span><br>
<span class="quotelev1">&gt; host 
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #0:  333.2 MHz LANai, 133.3 MHz PCI bus, 4 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status:         Running, P0: Link up, P1: Link up
</span><br>
<span class="quotelev1">&gt;         Network:        Myrinet 2000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MAC Address:    00:60:dd:48:ba:ae
</span><br>
<span class="quotelev1">&gt;         Product code:   M3F2-PCIXE-4
</span><br>
<span class="quotelev1">&gt;         Part number:    09-02878
</span><br>
<span class="quotelev1">&gt;         Serial number:  219851
</span><br>
<span class="quotelev1">&gt;         Mapper (P0):    00:60:dd:48:c0:08, version = 0x01920f75,
</span><br>
<span class="quotelev1">&gt; configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts:   506
</span><br>
<span class="quotelev1">&gt;         Mapper (P1):    00:60:dd:48:c0:08, version = 0x01920f75,
</span><br>
<span class="quotelev1">&gt; configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts:   506
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev1">&gt; BUILD_ENV
</span><br>
<span class="quotelev1">&gt; # Build Environment:
</span><br>
<span class="quotelev1">&gt; USE=&quot;doc icc modules mx torque&quot;
</span><br>
<span class="quotelev1">&gt; COMPILER=&quot;intel-9.1-f040-c045&quot;
</span><br>
<span class="quotelev1">&gt; CC=&quot;icc&quot;
</span><br>
<span class="quotelev1">&gt; CXX=&quot;icpc&quot;
</span><br>
<span class="quotelev1">&gt; CLINKER=&quot;icc&quot;
</span><br>
<span class="quotelev1">&gt; FC=&quot;ifort&quot;
</span><br>
<span class="quotelev1">&gt; F77=&quot;ifort&quot;
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot; -O3 -pipe&quot;
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot; -O3 -pipe&quot;
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot; -O3&quot;
</span><br>
<span class="quotelev1">&gt; MODULE_DEST=&quot;/apps/modules/modulefiles/mpi&quot;
</span><br>
<span class="quotelev1">&gt; MODULE_FILE=&quot;openmpi-1.2.2_mx_intel-9.1-f040-c045&quot;
</span><br>
<span class="quotelev1">&gt; INSTALL_DEST=&quot;/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2
</span><br>
<span class="quotelev1">&gt; _mx&quot;
</span><br>
<span class="quotelev1">&gt; CONF_FLAGS=&quot; --with-mx=/opt/mx --with-tm=/apps/torque&quot;
</span><br>
<span class="quotelev1">&gt; =======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help/advice you can provide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Sophia
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Previous message:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
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
