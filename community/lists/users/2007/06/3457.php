<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 14:55:44 2007" -->
<!-- isoreceived="20070611185544" -->
<!-- sent="Mon, 11 Jun 2007 12:55:28 -0600" -->
<!-- isosent="20070611185528" -->
<!-- name="Corwell, Sophia" -->
<!-- email="secorwe_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI issue with Iprobe" -->
<!-- id="AB4680A899D2F441A43D31F2A9B8451B05CC285C_at_ES22SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-06-11 14:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Previous message:</strong> <a href="3456.php">Kelley, Sean: "[OMPI users] mpirun hanging when processes started on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>Reply:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are seeing the following issue with Iprobe on our clusters running
<br>
openmpi-1.2.2. Here is the code and related information:
<br>
<p>=======
<br>
Modules currently loaded:
<br>
<p>(sn31)/projects&gt;module list 
<br>
<span class="quotelev2">&gt; &gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev2">&gt; &gt;   1) /opt/modules/oscar-modulefiles/default-manpath/1.0.1
</span><br>
<span class="quotelev2">&gt; &gt;   2) compilers/intel-9.1-f040-c045
</span><br>
<span class="quotelev2">&gt; &gt;   3) misc/env-openmpi-1.2
</span><br>
<span class="quotelev2">&gt; &gt;   4) mpi/openmpi-1.2.2_mx_intel-9.1-f040-c045
</span><br>
<span class="quotelev2">&gt; &gt;   5) libraries/intel-mkl
</span><br>
=======
<br>
<p>Source code:
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (sn31)/projects/&gt;more probeTest.cc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;cassert&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     MPI::Init(argc, argv);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     const int rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev2">&gt; &gt;     const int size = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev2">&gt; &gt;     const int sendProc = (rank + size - 1) % size;
</span><br>
<span class="quotelev2">&gt; &gt;     const int recvProc = (rank + 1) % size;
</span><br>
<span class="quotelev2">&gt; &gt;     const int tag = 1;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     // send an asynchronous message
</span><br>
<span class="quotelev2">&gt; &gt;     const int sendVal = 1;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI::Request sendRequest =
</span><br>
<span class="quotelev2">&gt; &gt;         MPI::COMM_WORLD.Isend(&amp;sendVal, 1, MPI_INT, recvProc, tag);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     // wait for message to arrive
</span><br>
<span class="quotelev2">&gt; &gt;     while (!MPI::COMM_WORLD.Iprobe(sendProc, tag)) {}  // This line 
</span><br>
<span class="quotelev2">&gt; &gt; causes problems
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     // Receive asynchronous message
</span><br>
<span class="quotelev2">&gt; &gt;     int recvVal;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI::Request recvRequest =
</span><br>
<span class="quotelev2">&gt; &gt;         MPI::COMM_WORLD.Irecv(&amp;recvVal, 1, MPI_INT, sendProc, tag);
</span><br>
<span class="quotelev2">&gt; &gt;     recvRequest.Wait();
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     MPI::Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
=======
<br>
<p>Compiled with:
<br>
<p><span class="quotelev2">&gt; &gt; (sn31)/projects&gt;/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi
</span><br>
<span class="quotelev2">&gt; &gt; -1.2.2_mx/bin/mpicxx
</span><br>
<span class="quotelev2">&gt; &gt; -I/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_m
</span><br>
<span class="quotelev2">&gt; &gt; x/include -g -c -o probeTest.o probeTest.cc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (sn31)/projects&gt;/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi
</span><br>
<span class="quotelev2">&gt; &gt; -1.2.2_mx/bin/mpicxx -g -o probeTest 
</span><br>
<span class="quotelev2">&gt; &gt; -L/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/lib
</span><br>
<span class="quotelev2">&gt; &gt; probeTest.o -lmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
/projects/global/x86_64/compilers/intel/intel-9.1-cce-045/lib/ibimf.so:
<br>
<span class="quotelev2">&gt; &gt; warning: warning: feupdateenv is not implemented and will always 
</span><br>
<span class="quotelev2">&gt; &gt; fail
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p>=======
<br>
<p>Error at runtime:
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (sn31)/projects&gt;mpiexec -n 1 ./probeTest [sn31:17616] *** Process 
</span><br>
<span class="quotelev2">&gt; &gt; received signal *** [sn31:17616] Signal:
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault (11) [sn31:17616] Signal code: Address not mapped
</span><br>
<span class="quotelev2">&gt; &gt; (1) [sn31:17616] Failing at address: 0x8 [sn31:17616] [ 0] 
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/tls/libpthread.so.0 [0x2a9665a4f0] [sn31:17616] [ 1] 
</span><br>
<span class="quotelev2">&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev2">&gt; &gt; lib/openmpi/mca_mtl_mx.so(ompi_mtl_mx_iprobe+0x81)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a9980b305]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17616] [ 2]
</span><br>
<span class="quotelev2">&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev2">&gt; &gt; lib/openmpi/mca_pml_cm.so(mca_pml_cm_iprobe+0x1f)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a995eb817]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17616] [ 3]
</span><br>
<span class="quotelev2">&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev2">&gt; &gt; lib/libmpi.so.0(MPI_Iprobe+0xef)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a956d363f]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17616] [ 4] ./probeTest(_ZNK3MPI4Comm6IprobeEii+0x3a)
</span><br>
<span class="quotelev2">&gt; &gt; [0x4046aa][sn31:17616] [ 5] ./probeTest(main+0x147) [0x40480b] 
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17616] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a967803fb]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17616] [ 7] ./probeTest(_ZNSt8ios_base4InitD1Ev+0x3a)
</span><br>
<span class="quotelev2">&gt; &gt; [0x4038ca][sn31:17616] *** End of error message *** mpiexec noticed 
</span><br>
<span class="quotelev2">&gt; &gt; that job rank 0 with PID 17616 on node sn31 exited
</span><br>
on
<br>
<span class="quotelev2">&gt; &gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (sn31)/projects/ceptre/sdpautz/NWCC/temp&gt;mpiexec -n 2 ./probeTest 
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17621] *** Process received signal *** [sn31:17620] ***
</span><br>
Process
<br>
<span class="quotelev2">&gt; &gt; received signal *** [sn31:17620] Signal: Segmentation fault (11) 
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17620] Signal code: Address not mapped (1) [sn31:17620] 
</span><br>
<span class="quotelev2">&gt; &gt; Failing at address: 0x8 [sn31:17620] [ 0] /lib64/tls/libpthread.so.0
</span><br>
<p><span class="quotelev2">&gt; &gt; [0x2a9665a4f0] [sn31:17620] [ 1] 
</span><br>
<span class="quotelev2">&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev2">&gt; &gt; lib/openmpi/mca_mtl_mx.so(ompi_mtl_mx_iprobe+0x81)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a9980b305]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17620] [ 2]
</span><br>
<span class="quotelev2">&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev2">&gt; &gt; lib/openmpi/mca_pml_cm.so(mca_pml_cm_iprobe+0x1f)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a995eb817]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17620] [ 3]
</span><br>
<span class="quotelev2">&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev2">&gt; &gt; lib/libmpi.so.0(MPI_Iprobe+0xef)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a956d363f]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17620] [ 4] ./probeTest(_ZNK3MPI4Comm6IprobeEii+0x3a)
</span><br>
<span class="quotelev2">&gt; &gt; [0x4046aa][sn31:17620] [ 5] ./probeTest(main+0x147) [0x40480b] 
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17620] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a967803fb]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17620] [ 7] ./probeTest(_ZNSt8ios_base4InitD1Ev+0x3a)
</span><br>
<span class="quotelev2">&gt; &gt; [0x4038ca][sn31:17620] *** End of error message *** [sn31:17621]
</span><br>
<span class="quotelev2">&gt; &gt; Signal: Segmentation fault (11) [sn31:17621] Signal code: Address 
</span><br>
<span class="quotelev2">&gt; &gt; not mapped (1) [sn31:17621] Failing at address: 0x8 [sn31:17621] [ 
</span><br>
<span class="quotelev2">&gt; &gt; 0] /lib64/tls/libpthread.so.0 [0x2a9665a4f0] [sn31:17621] [ 1] 
</span><br>
<span class="quotelev2">&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev2">&gt; &gt; lib/openmpi/mca_mtl_mx.so(ompi_mtl_mx_iprobe+0x81)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a9980b305]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17621] [ 2]
</span><br>
<span class="quotelev2">&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev2">&gt; &gt; lib/openmpi/mca_pml_cm.so(mca_pml_cm_iprobe+0x1f)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a995eb817]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17621] [ 3]
</span><br>
<span class="quotelev2">&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/
</span><br>
<span class="quotelev2">&gt; &gt; lib/libmpi.so.0(MPI_Iprobe+0xef)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a956d363f]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17621] [ 4] ./probeTest(_ZNK3MPI4Comm6IprobeEii+0x3a)
</span><br>
<span class="quotelev2">&gt; &gt; [0x4046aa][sn31:17621] [ 5] ./probeTest(main+0x1ad) [0x404871] 
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17621] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a967803fb]
</span><br>
<span class="quotelev2">&gt; &gt; [sn31:17621] [ 7] ./probeTest(_ZNSt8ios_base4InitD1Ev+0x3a)
</span><br>
<span class="quotelev2">&gt; &gt; [0x4038ca][sn31:17621] *** End of error message *** mpiexec noticed 
</span><br>
<span class="quotelev2">&gt; &gt; that job rank 0 with PID 17620 on node sn31 exited
</span><br>
on
<br>
<span class="quotelev2">&gt; &gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p>=======
<br>
<p>Additional Information:
<br>
<p><span class="quotelev2">&gt; &gt; It appears that the call of Iprobe causes problems; if that line is 
</span><br>
<span class="quotelev2">&gt; &gt; taken out, the code completes normally.  Failures also occur with
</span><br>
the gcc compilers.
<br>
<p><span class="quotelev2">&gt; &gt; Mpich appears to work, at least for the Intel compiler. 
</span><br>
<p>=======
<br>
<p>Hardware information:
<br>
<p>[root_at_spirit1 ~]# mx_info -q
<br>
MX Version: 1.2.1-rc20
<br>
MX Build:
<br>
root_at_[hidden]:/projects/global/src/myricom/mx-1.2.1-rc20 Thu Jun
<br>
7 17:08:02 MDT 2007
<br>
1 Myrinet board installed.
<br>
The MX driver is configured to support a maximum of:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 endpoints per NIC, 1024 NICs on the network, 32 NICs per host
<br>
===================================================================
<br>
Instance #0:  333.2 MHz LANai, 133.3 MHz PCI bus, 4 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link up, P1: Link up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network:        Myrinet 2000
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:48:ba:ae
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   M3F2-PCIXE-4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-02878
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  219851
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper (P0):    00:60:dd:48:c0:08, version = 0x01920f75,
<br>
configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   506
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper (P1):    00:60:dd:48:c0:08, version = 0x01920f75,
<br>
configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   506
<br>
&nbsp;
<br>
<p>cat
<br>
/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/BUILD_ENV
<br>
# Build Environment:
<br>
USE=&quot;doc icc modules mx torque&quot;
<br>
COMPILER=&quot;intel-9.1-f040-c045&quot;
<br>
CC=&quot;icc&quot;
<br>
CXX=&quot;icpc&quot;
<br>
CLINKER=&quot;icc&quot;
<br>
FC=&quot;ifort&quot;
<br>
F77=&quot;ifort&quot;
<br>
CFLAGS=&quot; -O3 -pipe&quot;
<br>
CXXFLAGS=&quot; -O3 -pipe&quot;
<br>
FFLAGS=&quot; -O3&quot;
<br>
MODULE_DEST=&quot;/apps/modules/modulefiles/mpi&quot;
<br>
MODULE_FILE=&quot;openmpi-1.2.2_mx_intel-9.1-f040-c045&quot;
<br>
INSTALL_DEST=&quot;/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2
<br>
_mx&quot;
<br>
CONF_FLAGS=&quot; --with-mx=/opt/mx --with-tm=/apps/torque&quot;
<br>
=======
<br>
<p>Thanks in advance for any help/advice you can provide.
<br>
<p>-Sophia
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Previous message:</strong> <a href="3456.php">Kelley, Sean: "[OMPI users] mpirun hanging when processes started on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>Reply:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
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
