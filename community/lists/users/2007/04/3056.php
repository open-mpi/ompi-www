<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 11 03:55:03 2007" -->
<!-- isoreceived="20070411075503" -->
<!-- sent="Wed, 11 Apr 2007 09:54:44 +0200" -->
<!-- isosent="20070411075444" -->
<!-- name="Michael Gauckler" -->
<!-- email="michael_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI - Signal: Segmentation fault (11)  Problem" -->
<!-- id="010101c77c0e$aaf7ee70$00e7cb50$_at_ch" -->
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
<strong>From:</strong> Michael Gauckler (<em>michael_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-11 03:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3055.php">Brian Barrett: "Re: [OMPI users] OpenMPI for Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Reply:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI User's and Developers,
<br>
<p>I encountered a problem with Open MPI when porting an application, which
<br>
successfully ran with LAM MPI and MPICH.
<br>
<p>The program produces a segmentation fault (see [1] for the stack trace) when
<br>
doing the MPI_Send with the following arguments:
<br>
<p>MPI_Send((void *)0, 1, datatype, rank, tag, comm_); 
<br>
<p>The first argument seems to be wrong at first sight, but is correct because
<br>
the argument &quot;datatype&quot; is an MPI_Datatype, 
<br>
which describes the memory layout of the object to be sent and is
<br>
zero-based. The other arguments are as expected: one such object is sent to
<br>
rank &quot;rank&quot; with tag &quot;tag&quot; with the help of the communicator &quot;comm_&quot;. The
<br>
MPI_Datatype is constructed programmatically from the objects member
<br>
definitions using MPI_Type_struct. The MPI types involved are solely 
<br>
MPI_DOUBLE and MPI_UNSIGNED_INT.
<br>
<p>I can reproduce the problem with the stable 1.2 release as well as the
<br>
1.2.1a snapshot of Open MPI.
<br>
My OS is Linux with Kernel 2.6.18 (Debian Etch) running on standard Dual
<br>
Xeon Hardware with GigE.
<br>
<p>I tried to reduce the amount of data sent by excluding some of the object's
<br>
members from the transmission. There does not seem to be a certain member or
<br>
type which causes the problem. There seems to be a limit of
<br>
members/data/size which determines  the success of the call. The &quot;datatype&quot;
<br>
structure describes the type and location of approx. 2'000'000 numbers. The
<br>
data itself is approx. 16MB (2M * 8 bytes/number assuming doubles), which I
<br>
expect not to cause any problem to a MPI implementation.
<br>
<p>Thank you for hints, ideas or suggestions where the problem could be.
<br>
<p>Regards, 
<br>
Michael
<br>
<p>[1]
<br>
<p>[head:09133] *** Process received signal ***
<br>
[head:09133] Signal: Segmentation fault (11)
<br>
[head:09133] Signal code: Address not mapped (1)
<br>
[head:09133] Failing at address: 0xb0127475
<br>
[head:09133] [ 0] [0xb7f0f440]
<br>
[head:09133] [ 1] /usr/lib/libmpi.so.0(ompi_convertor_pack+0x90)
<br>
[0xb668f9a0]
<br>
[head:09133] [ 2]
<br>
/usr/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_prepare_src+0x210) [0xb56daef0]
<br>
[head:09133] [ 3]
<br>
/usr/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_schedule_exclusive+
<br>
0x1de) [0xb5726ede]
<br>
[head:09133] [ 4] /usr/lib/openmpi/mca_pml_ob1.so [0xb5728238]
<br>
[head:09133] [ 5] /usr/lib/openmpi/mca_btl_tcp.so [0xb56ddc65]
<br>
[head:09133] [ 6] /usr/lib/libopen-pal.so.0(opal_event_base_loop+0x462)
<br>
[0xb65bcf12]
<br>
[head:09133] [ 7] /usr/lib/libopen-pal.so.0(opal_event_loop+0x29)
<br>
[0xb65bcfd9]
<br>
[head:09133] [ 8] /usr/lib/libopen-pal.so.0(opal_progress+0xc0) [0xb65b7260]
<br>
[head:09133] [ 9] /usr/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x3e5)
<br>
[0xb571f965]
<br>
[head:09133] [10] /usr/lib/libmpi.so.0(MPI_Send+0x12f) [0xb66abf0f]
<br>
[head:09133] [11]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP15MPIProcessGroup4sendERKNS_9MemoryM
<br>
apEii+0xd9) [0x81cec03]
<br>
[head:09133] [12]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP15MPIProcessGroup4sendEN5boost10shar
<br>
ed_ptrINS_6EntityEEEii+0x2d0) [0x81d0358]
<br>
[head:09133] [13]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP20ParallelDataAccessor4loadEN5boost1
<br>
0shared_ptrINS_6EntityEEE+0x23b) [0x853c939]
<br>
[head:09133] [14]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP12Transactions6createEPKN11xercesc_2
<br>
_77DOMNodeE+0x57f) [0x8426553]
<br>
[head:09133] [15]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP7FactoryIN5boost10shared_ptrINS_7Xml
<br>
BaseEEESsPFS4_PKN11xercesc_2_77DOMNodeEENS_19DefaultFactoryErrorEE12createOb
<br>
jectES8_+0x76) [0x81ca06a]
<br>
[head:09133] [16]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP16XmlFactoryParser7descentEPN11xerce
<br>
sc_2_77DOMNodeEb+0x5b2) [0x81cd700]
<br>
[head:09133] [17]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP9XmlParser8traverseEb+0x278)
<br>
[0x81c1eca]
<br>
[head:09133] [18]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP16XmlFactoryParser8traverseEb+0x19)
<br>
[0x81c9eeb]
<br>
[head:09133] [19] /opt/plato/release_1.0/bin/engine(main+0x1d23) [0x81617f7]
<br>
[head:09133] [20] /lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xc8)
<br>
[0xb6348ea8]
<br>
[head:09133] [21]
<br>
/opt/plato/release_1.0/bin/engine(__gxx_personality_v0+0x15d) [0x815a731]
<br>
[head:09133] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 9133 on node head exited on signal
<br>
11 (Segmentation fault).
<br>
2 additional processes aborted (not shown)
<br>
<p><p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3055.php">Brian Barrett: "Re: [OMPI users] OpenMPI for Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Reply:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
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
