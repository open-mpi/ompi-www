<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 11 12:37:14 2007" -->
<!-- isoreceived="20070411163714" -->
<!-- sent="Wed, 11 Apr 2007 12:33:25 -0400" -->
<!-- isosent="20070411163325" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem" -->
<!-- id="EC121F41-D927-45A6-A511-32D1FF06E391_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="010101c77c0e$aaf7ee70$00e7cb50$_at_ch" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-11 12:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3059.php">Bas van der Vlies: "[OMPI users] Get some errors when try to run hpl"</a>
<li><strong>Previous message:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3056.php">Michael Gauckler: "[OMPI users] Open MPI - Signal: Segmentation fault (11)  Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3076.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Maybe reply:</strong> <a href="3076.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Maybe reply:</strong> <a href="3081.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>The MPI standard is quite clear. In order to have a correct and  
<br>
portable MPI code, you are not allowed to use (void*)0. Use  
<br>
MPI_BOTTOM instead.
<br>
<p>We have plenty of tests which test the exact behavior you describe in  
<br>
your email. And they all pass. I will take a look at what's happens  
<br>
but I need either the code or at least the part which create the  
<br>
datatype.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 11, 2007, at 3:54 AM, Michael Gauckler wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI User's and Developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encountered a problem with Open MPI when porting an application,  
</span><br>
<span class="quotelev1">&gt; which successfully ran with LAM MPI and MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program produces a segmentation fault (see [1] for the stack  
</span><br>
<span class="quotelev1">&gt; trace) when doing the MPI_Send with the following arguments:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Send((void *)0, 1, datatype, rank, tag, comm_);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first argument seems to be wrong at first sight, but is correct  
</span><br>
<span class="quotelev1">&gt; because the argument &quot;datatype&quot; is an MPI_Datatype,
</span><br>
<span class="quotelev1">&gt; which describes the memory layout of the object to be sent and is  
</span><br>
<span class="quotelev1">&gt; zero-based. The other arguments are as expected: one such object is  
</span><br>
<span class="quotelev1">&gt; sent to rank &quot;rank&quot; with tag &quot;tag&quot; with the help of the  
</span><br>
<span class="quotelev1">&gt; communicator &quot;comm_&quot;. The MPI_Datatype is constructed  
</span><br>
<span class="quotelev1">&gt; programmatically from the objects member definitions using  
</span><br>
<span class="quotelev1">&gt; MPI_Type_struct. The MPI types involved are solely
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE and MPI_UNSIGNED_INT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can reproduce the problem with the stable 1.2 release as well as  
</span><br>
<span class="quotelev1">&gt; the 1.2.1a snapshot of Open MPI.
</span><br>
<span class="quotelev1">&gt; My OS is Linux with Kernel 2.6.18 (Debian Etch) running on standard  
</span><br>
<span class="quotelev1">&gt; Dual Xeon Hardware with GigE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to reduce the amount of data sent by excluding some of the  
</span><br>
<span class="quotelev1">&gt; object's members from the transmission. There does not seem to be a  
</span><br>
<span class="quotelev1">&gt; certain member or type which causes the problem. There seems to be  
</span><br>
<span class="quotelev1">&gt; a limit of members/data/size which determines  the success of the  
</span><br>
<span class="quotelev1">&gt; call. The &quot;datatype&quot; structure describes the type and location of  
</span><br>
<span class="quotelev1">&gt; approx. 2'000'000 numbers. The data itself is approx. 16MB (2M * 8  
</span><br>
<span class="quotelev1">&gt; bytes/number assuming doubles), which I expect not to cause any  
</span><br>
<span class="quotelev1">&gt; problem to a MPI implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for hints, ideas or suggestions where the problem could be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [head:09133] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [head:09133] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [head:09133] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [head:09133] Failing at address: 0xb0127475
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 0] [0xb7f0f440]
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 1] /usr/lib/libmpi.so.0(ompi_convertor_pack+0x90)  
</span><br>
<span class="quotelev1">&gt; [0xb668f9a0]
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 2] /usr/lib/openmpi/mca_btl_tcp.so 
</span><br>
<span class="quotelev1">&gt; (mca_btl_tcp_prepare_src+0x210) [0xb56daef0]
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 3] /usr/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_send_request_schedule_exclusive+0x1de) [0xb5726ede]
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 4] /usr/lib/openmpi/mca_pml_ob1.so [0xb5728238]
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 5] /usr/lib/openmpi/mca_btl_tcp.so [0xb56ddc65]
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 6] /usr/lib/libopen-pal.so.0(opal_event_base_loop 
</span><br>
<span class="quotelev1">&gt; +0x462) [0xb65bcf12]
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 7] /usr/lib/libopen-pal.so.0(opal_event_loop+0x29)  
</span><br>
<span class="quotelev1">&gt; [0xb65bcfd9]
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 8] /usr/lib/libopen-pal.so.0(opal_progress+0xc0)  
</span><br>
<span class="quotelev1">&gt; [0xb65b7260]
</span><br>
<span class="quotelev1">&gt; [head:09133] [ 9] /usr/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send 
</span><br>
<span class="quotelev1">&gt; +0x3e5) [0xb571f965]
</span><br>
<span class="quotelev1">&gt; [head:09133] [10] /usr/lib/libmpi.so.0(MPI_Send+0x12f) [0xb66abf0f]
</span><br>
<span class="quotelev1">&gt; [head:09133] [11] /opt/plato/release_1.0/bin/engine 
</span><br>
<span class="quotelev1">&gt; (_ZN2GP15MPIProcessGroup4sendERKNS_9MemoryMapEii+0xd9) [0x81cec03]
</span><br>
<span class="quotelev1">&gt; [head:09133] [12] /opt/plato/release_1.0/bin/engine 
</span><br>
<span class="quotelev1">&gt; (_ZN2GP15MPIProcessGroup4sendEN5boost10shared_ptrINS_6EntityEEEii 
</span><br>
<span class="quotelev1">&gt; +0x2d0) [0x81d0358]
</span><br>
<span class="quotelev1">&gt; [head:09133] [13] /opt/plato/release_1.0/bin/engine 
</span><br>
<span class="quotelev1">&gt; (_ZN2GP20ParallelDataAccessor4loadEN5boost10shared_ptrINS_6EntityEEE 
</span><br>
<span class="quotelev1">&gt; +0x23b) [0x853c939]
</span><br>
<span class="quotelev1">&gt; [head:09133] [14] /opt/plato/release_1.0/bin/engine 
</span><br>
<span class="quotelev1">&gt; (_ZN2GP12Transactions6createEPKN11xercesc_2_77DOMNodeE+0x57f)  
</span><br>
<span class="quotelev1">&gt; [0x8426553]
</span><br>
<span class="quotelev1">&gt; [head:09133] [15] /opt/plato/release_1.0/bin/engine 
</span><br>
<span class="quotelev1">&gt; (_ZN2GP7FactoryIN5boost10shared_ptrINS_7XmlBaseEEESsPFS4_PKN11xercesc_ 
</span><br>
<span class="quotelev1">&gt; 2_77DOMNodeEENS_19DefaultFactoryErrorEE12createObjectES8_+0x76)  
</span><br>
<span class="quotelev1">&gt; [0x81ca06a]
</span><br>
<span class="quotelev1">&gt; [head:09133] [16] /opt/plato/release_1.0/bin/engine 
</span><br>
<span class="quotelev1">&gt; (_ZN2GP16XmlFactoryParser7descentEPN11xercesc_2_77DOMNodeEb+0x5b2)  
</span><br>
<span class="quotelev1">&gt; [0x81cd700]
</span><br>
<span class="quotelev1">&gt; [head:09133] [17] /opt/plato/release_1.0/bin/engine 
</span><br>
<span class="quotelev1">&gt; (_ZN2GP9XmlParser8traverseEb+0x278) [0x81c1eca]
</span><br>
<span class="quotelev1">&gt; [head:09133] [18] /opt/plato/release_1.0/bin/engine 
</span><br>
<span class="quotelev1">&gt; (_ZN2GP16XmlFactoryParser8traverseEb+0x19) [0x81c9eeb]
</span><br>
<span class="quotelev1">&gt; [head:09133] [19] /opt/plato/release_1.0/bin/engine(main+0x1d23)  
</span><br>
<span class="quotelev1">&gt; [0x81617f7]
</span><br>
<span class="quotelev1">&gt; [head:09133] [20] /lib/tls/i686/cmov/libc.so.6(__libc_start_main 
</span><br>
<span class="quotelev1">&gt; +0xc8) [0xb6348ea8]
</span><br>
<span class="quotelev1">&gt; [head:09133] [21] /opt/plato/release_1.0/bin/engine 
</span><br>
<span class="quotelev1">&gt; (__gxx_personality_v0+0x15d) [0x815a731]
</span><br>
<span class="quotelev1">&gt; [head:09133] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 9133 on node head exited on  
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3059.php">Bas van der Vlies: "[OMPI users] Get some errors when try to run hpl"</a>
<li><strong>Previous message:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3056.php">Michael Gauckler: "[OMPI users] Open MPI - Signal: Segmentation fault (11)  Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3076.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Maybe reply:</strong> <a href="3076.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Maybe reply:</strong> <a href="3081.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
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
