<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 16 17:54:25 2007" -->
<!-- isoreceived="20070416215425" -->
<!-- sent="Mon, 16 Apr 2007 23:54:39 +0200" -->
<!-- isosent="20070416215439" -->
<!-- name="Michael Gauckler" -->
<!-- email="michael_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem" -->
<!-- id="007901c78071$d53dded0$7fb99c70$_at_ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.2788.1176350900.26964.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-04-16 17:54:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3077.php">Adams, Brian M: "[OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<li><strong>Previous message:</strong> <a href="3075.php">Brian Barrett: "Re: [OMPI users] orte_init failed"</a>
<li><strong>Maybe in reply to:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3081.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George, 
<br>
<p>thank you for replying and the hint of using MPI_BOTTOM. I changed this 
<br>
part of the code and still receive the same segmentation fault.
<br>
<p>Unfortunately I cannot post a full example, but here is the code that 
<br>
seems most relevant to the problem.
<br>
<p>The mechanism is as follows: From object that needs to be transmitted
<br>
a list is created which describes the members with their type, offset
<br>
and stride (the MemoryMapDescr).  MemoryMap::mapType is used to put 
<br>
the members into this list, the so called MemoryMap.
<br>
<p><span class="quotelev1">&gt;From this vector of MemoryMapDescr a MPI_Datatype is constructed, which
</span><br>
then is used to transmit the object.
<br>
<p>Maybe you could have a look at the code fragments and see if you spot
<br>
something that does not go well with OpenMPI.
<br>
<p>The testing today showed again the behavior that the size of the 
<br>
data structures triggers the problem. This can be either probabilistic
<br>
(more processing gives a higher chance that something goes wrong) or
<br>
that there is a real dependence, e.g. some buffer is too small or the
<br>
differences of the addresses in memory are too large, or I don't know
<br>
what else to think of.
<br>
<p>Thank you for your help.
<br>
<p>Regards,
<br>
Michael
<br>
<p><p>int createMPIDataType(const std::vector&lt;MemoryMapDescr&gt;&amp; memorymap,
<br>
MPI_Datatype &amp;datatype)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int err = MPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num = memorymap.size();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype *types = new MPI_Datatype[num];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *lengths = new int[num];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint *addresses = new MPI_Aint[num];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// copy the vector with information about the type in temp. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// arrays to be handled by MPI_Type_struct
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; num; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;types[i] = MPIDataType[memorymap[i].type];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lengths[i] = memorymap[i].len;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// create address map according to actual memory layout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_Address(memorymap[i].addr, &amp;addresses[i]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (err != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::ostringstream msg;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg &lt;&lt; &quot;invalid address at index &quot; &lt;&lt; i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg &lt;&lt; &quot; for type &quot; &lt;&lt;
<br>
DataTypeNames[memorymap[i].type];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg &lt;&lt; &quot; at address &quot; &lt;&lt; memorymap[i].addr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GP_THROW_ERR(CommunicationErr, eMPIAddressError,
<br>
msg.str());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// create MPI datatype with equivalent information about types and
<br>
offsets
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_Type_struct(num, lengths, addresses, types, &amp;datatype);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (err != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GP_THROW_ERR(CommunicationErr, eMPIDatatypeError, &quot;invalid
<br>
MPI datatype&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_Type_commit(&amp;datatype);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Invalid datatype argument. May be an uncommitted MPI_Datatype
<br>
(see MPI_Type_commit).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (err != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GP_THROW_ERR(CommunicationErr, eMPIDatatypeError, &quot;invalid
<br>
MPI datatype&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// delete temp. arrays
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete [] types;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete [] lengths;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete [] addresses;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return err;
<br>
}
<br>
<p><p>// Memory map descriptor.
<br>
// TODO: Add support for strided vectors.
<br>
<p>struct MemoryMapDescr
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MemoryMapDescr(DataType t, void* a, int l);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//! Data type.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DataType type;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//! Address of data in memory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* addr;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//! Number of data elements.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int len;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//! Stride.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// TODO: Add support for strided vectors.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int stride;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//! Type name string.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::string typeName() const;
<br>
};
<br>
<p><p>template&lt;class T&gt;
<br>
void MemoryMap::mapType(const T&amp; var)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memoryMap_.push_back(MemoryMapDescr(DataTypeConverter&lt;T&gt;::type,
<br>
(void*)&amp;var, 1));
<br>
}
<br>
<p>// With specializations such as this following exemplified by a vector of
<br>
doubles.
<br>
template&lt;&gt;
<br>
void MemoryMap::mapType&lt; std::vector&lt;double&gt; &gt;(const std::vector&lt;double&gt;
<br>
&amp;var)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (var.size() &gt; 0) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memoryMap_.push_back(MemoryMapDescr(DataTypeConverter&lt;double&gt;::type,
<br>
(void*)&amp;var[0], var.size()));
<br>
}
<br>
<p><p><p>---------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Wed, 11 Apr 2007 12:33:25 -0400
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Open MPI - Signal: Segmentation fault (11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Problem
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;EC121F41-D927-45A6-A511-32D1FF06E391_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
<br>
<p>Michael,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3077.php">Adams, Brian M: "[OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<li><strong>Previous message:</strong> <a href="3075.php">Brian Barrett: "Re: [OMPI users] orte_init failed"</a>
<li><strong>Maybe in reply to:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3081.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
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
