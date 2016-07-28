<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 08:28:04 2007" -->
<!-- isoreceived="20070418122804" -->
<!-- sent="Wed, 18 Apr 2007 14:27:46 +0200" -->
<!-- isosent="20070418122746" -->
<!-- name="Michael Gauckler" -->
<!-- email="michael_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem" -->
<!-- id="000301c781b4$f8bd9960$ea38cc20$_at_ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI - Signal: Segmentation fault (11) Problem" -->
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
<strong>Date:</strong> 2007-04-18 08:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3082.php">stephen mulcahy: "[OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3080.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George, 
<br>
<p>&nbsp;
<br>
<p>Some more investigation on the Segmentation fault done with valgrind is
<br>
shown below.
<br>
<p>There seems to be uninitialized parameters and finally a read at address
<br>
0x1, which 
<br>
<p>causes the segfault. I have checked whether one of my members appear to be
<br>
at that 
<br>
address when constructing the MPI_Datatype, this is not the case.
<br>
<p>&nbsp;
<br>
<p>Maybe you can draw a conclusion from the information and give me a hint on
<br>
where
<br>
<p>to search futher.
<br>
<p>&nbsp;
<br>
<p>Thanks!
<br>
<p>&nbsp;&nbsp;Michael
<br>
<p>&nbsp;
<br>
<p>==4225==
<br>
<p>==4225== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
<p>==4225==    at 0x4000792: (within /lib/ld-2.3.6.so)
<br>
<p>==4225==    by 0x6915CE5: mca_btl_tcp_frag_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4225==    by 0x6915923: mca_btl_tcp_endpoint_send_handler (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4225==    by 0x5941710: opal_event_base_loop (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4225==    by 0x59418F8: opal_event_loop (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4225==    by 0x593BFFD: opal_progress (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4225==    by 0x68F4384: mca_pml_ob1_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4225==    by 0x58B3CCF: PMPI_Send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0.0.0)
<br>
<p>==4225==    by 0x8549D6C: GP::MPIProcessGroup::send(GP::cstring const&amp;, int,
<br>
int) (gpProcessGroup.cpp:326)
<br>
<p>==4225==    by 0x8549A32:
<br>
GP::MPIProcessGroup::send(boost::shared_ptr&lt;GP::Entity&gt;, int, int)
<br>
(gpProcessGroup.cpp:263)
<br>
<p>==4225==    by 0x88286B1:
<br>
GP::ParallelDataAccessor::load(boost::shared_ptr&lt;GP::Entity&gt;)
<br>
(gpParallelDataAccessor.cpp:105)
<br>
<p>==4225==    by 0x86F7A5A: GP::Transactions::create(xercesc_2_7::DOMNode
<br>
const*) (gpTransaction.cpp:993)
<br>
<p>==4225==  Address 0x8AD6970 is not stack'd, malloc'd or (recently) free'd
<br>
<p>MPIProcessGroup::send(const MemoryMap ..) method begin.
<br>
<p>MPIProcessGroup::send(const MemoryMap ..) calling MPI_Send with 12159464
<br>
bytes.
<br>
<p>==4225==
<br>
<p>==4225== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
<p>==4225==    at 0x4000792: (within /lib/ld-2.3.6.so)
<br>
<p>==4225==    by 0x6915CE5: mca_btl_tcp_frag_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4225==    by 0x6914CB3: mca_btl_tcp_endpoint_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4225==    by 0x6912287: mca_btl_tcp_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4225==    by 0x68FA38D: mca_pml_ob1_send_request_start_rndv (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4225==    by 0x68F426F: mca_pml_ob1_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4225==    by 0x58B3CCF: PMPI_Send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0.0.0)
<br>
<p>==4225==    by 0x8549C05: GP::MPIProcessGroup::send(GP::MemoryMap const&amp;,
<br>
int, int) (gpProcessGroup.cpp:296)
<br>
<p>==4225==    by 0x8549AA0:
<br>
GP::MPIProcessGroup::send(boost::shared_ptr&lt;GP::Entity&gt;, int, int)
<br>
(gpProcessGroup.cpp:271)
<br>
<p>==4225==    by 0x88286B1:
<br>
GP::ParallelDataAccessor::load(boost::shared_ptr&lt;GP::Entity&gt;)
<br>
(gpParallelDataAccessor.cpp:105)
<br>
<p>==4225==    by 0x86F7A5A: GP::Transactions::create(xercesc_2_7::DOMNode
<br>
const*) (gpTransaction.cpp:993)
<br>
<p>==4225==    by 0x85461B3: GP::Factory&lt;boost::shared_ptr&lt;GP::XmlBase&gt;,
<br>
std::string, boost::shared_ptr&lt;GP::XmlBase&gt; (*)(xercesc_2_7::DOMNode
<br>
const*), GP::DefaultFactoryError&gt;::createObject(xercesc_2_7::DOMNode const*)
<br>
(gpXmlFactoryParser.cpp:46)
<br>
<p>==4225==  Address 0x8AD6970 is not stack'd, malloc'd or (recently) free'd
<br>
<p>==4226==
<br>
<p>==4226== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
<p>==4226==    at 0x4000792: (within /lib/ld-2.3.6.so)
<br>
<p>==4226==    by 0x6915CE5: mca_btl_tcp_frag_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4226==    by 0x6914CB3: mca_btl_tcp_endpoint_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4226==    by 0x6912287: mca_btl_tcp_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4226==    by 0x68F6C02: mca_pml_ob1_recv_request_ack_send_btl (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4226==    by 0x68F7CB6: mca_pml_ob1_recv_request_progress (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4226==    by 0x68F5D77: mca_pml_ob1_recv_frag_match (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4226==    by 0x6915178: mca_btl_tcp_endpoint_recv_handler (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4226==    by 0x5941710: opal_event_base_loop (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4226==    by 0x59418F8: opal_event_loop (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4226==    by 0x593BFFD: opal_progress (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4226==    by 0x68F3084: mca_pml_ob1_recv (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4226==  Address 0x8AD6970 is not stack'd, malloc'd or (recently) free'd
<br>
<p>==4225==
<br>
<p>==4225== Invalid read of size 1
<br>
<p>==4225==    at 0x401ECD0: memcpy (mc_replace_strmem.c:406)
<br>
<p>==4225==    by 0x589216E: ompi_generic_simple_pack (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0.0.0)
<br>
<p>==4225==    by 0x5895F1A: ompi_convertor_pack (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0.0.0)
<br>
<p>==4225==    by 0x6911A07: mca_btl_tcp_prepare_src (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4225==    by 0x68F9FDB: mca_pml_ob1_send_request_schedule_exclusive (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4225==    by 0x68FB717: mca_pml_ob1_frag_completion (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4225==    by 0x6915905: mca_btl_tcp_endpoint_send_handler (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4225==    by 0x5941710: opal_event_base_loop (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4225==    by 0x59418F8: opal_event_loop (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4225==    by 0x593BFFD: opal_progress (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4225==    by 0x68F4384: mca_pml_ob1_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4225==    by 0x58B3CCF: PMPI_Send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0.0.0)
<br>
<p>==4225==  Address 0x1 is not stack'd, malloc'd or (recently) free'd
<br>
<p>[head:04225] *** Process received signal ***
<br>
<p>[head:04225] Signal: Segmentation fault (11)
<br>
<p>[head:04225] Signal code: Address not mapped (1)
<br>
<p>[head:04225] Failing at address: 0x1
<br>
<p>[head:04225] [ 0] /lib/tls/i686/cmov/libpthread.so.0 [0x5ac3bd0]
<br>
<p>[head:04225] [ 1]
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0(ompi_generic_simple_pack+0x
<br>
2ff) [0x589216f]
<br>
<p>[head:04225] [ 2]
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0(ompi_convertor_pack+0x12b)
<br>
[0x5895f1b]
<br>
<p>[head:04225] [ 3]
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_prep
<br>
are_src+0x198) [0x6911a08]
<br>
<p>[head:04225] [ 4]
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send
<br>
_request_schedule_exclusive+0x18c) [0x68f9fdc]
<br>
<p>[head:04225] [ 5]
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so [0x68fb718]
<br>
<p>[head:04225] [ 6]
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so [0x6915906]
<br>
<p>[head:04225] [ 7]
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0(opal_event_base_loop+0
<br>
x391) [0x5941711]
<br>
<p>[head:04225] [ 8]
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0(opal_event_loop+0x29)
<br>
[0x59418f9]
<br>
<p>[head:04225] [ 9]
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0(opal_progress+0xbe)
<br>
[0x593bffe]
<br>
<p>[head:04225] [10]
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send
<br>
+0x5d5) [0x68f4385]
<br>
<p>[head:04225] [11]
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0(MPI_Send+0x170) [0x58b3cd0]
<br>
<p>[head:04225] [12]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP15MPIProcessGroup4sendERKNS_9MemoryM
<br>
apEii+0xee) [0x8549c06]
<br>
<p>[head:04225] [13]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP15MPIProcessGroup4sendEN5boost10shar
<br>
ed_ptrINS_6EntityEEEii+0x165) [0x8549aa1]
<br>
<p>[head:04225] [14]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP20ParallelDataAccessor4loadEN5boost1
<br>
0shared_ptrINS_6EntityEEE+0x15c) [0x88286b2]
<br>
<p>[head:04225] [15]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP12Transactions6createEPKN11xercesc_2
<br>
_77DOMNodeE+0x361) [0x86f7a5b]
<br>
<p>[head:04225] [16]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP7FactoryIN5boost10shared_ptrINS_7Xml
<br>
BaseEEESsPFS4_PKN11xercesc_2_77DOMNodeEENS_19DefaultFactoryErrorEE12createOb
<br>
jectES8_+0xde) [0x85461b4]
<br>
<p>[head:04225] [17]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP16XmlFactoryParser7descentEPN11xerce
<br>
sc_2_77DOMNodeEb+0x5c9) [0x85469d7]
<br>
<p>[head:04225] [18]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP9XmlParser8traverseEb+0x1d8)
<br>
[0x8542c90]
<br>
<p>[head:04225] [19]
<br>
/opt/plato/release_1.0/bin/engine(_ZN2GP16XmlFactoryParser8traverseEb+0x1f)
<br>
[0x85463ff]
<br>
<p>[head:04225] [20] /opt/plato/release_1.0/bin/engine(main+0x1566) [0x84d02b0]
<br>
<p>[head:04225] [21] /lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xc8)
<br>
[0x5adeea8]
<br>
<p>[head:04225] [22]
<br>
/opt/plato/release_1.0/bin/engine(__gxx_personality_v0+0x1ad) [0x84cbe31]
<br>
<p>[head:04225] *** End of error message ***
<br>
<p>==4225==
<br>
<p>==4225== Process terminating with default action of signal 11 (SIGSEGV)
<br>
<p>==4225==  Access not within mapped region at address 0x1
<br>
<p>==4225==    at 0x401ECD0: memcpy (mc_replace_strmem.c:406)
<br>
<p>==4225==    by 0x589216E: ompi_generic_simple_pack (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0.0.0)
<br>
<p>==4225==    by 0x5895F1A: ompi_convertor_pack (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0.0.0)
<br>
<p>==4225==    by 0x6911A07: mca_btl_tcp_prepare_src (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4225==    by 0x68F9FDB: mca_pml_ob1_send_request_schedule_exclusive (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4225==    by 0x68FB717: mca_pml_ob1_frag_completion (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4225==    by 0x6915905: mca_btl_tcp_endpoint_send_handler (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_btl_tcp.so)
<br>
<p>==4225==    by 0x5941710: opal_event_base_loop (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4225==    by 0x59418F8: opal_event_loop (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4225==    by 0x593BFFD: opal_progress (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libopen-pal.so.0.0.0)
<br>
<p>==4225==    by 0x68F4384: mca_pml_ob1_send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/openmpi/mca_pml_ob1.so)
<br>
<p>==4225==    by 0x58B3CCF: PMPI_Send (in
<br>
/home/mig/openmpi-1.2.1a-install/lib/libmpi.so.0.0.0)
<br>
<p>==4225==
<br>
<p>==4225== ERROR SUMMARY: 239 errors from 43 contexts (suppressed: 63 from 1)
<br>
<p>==4225== malloc/free: in use at exit: 51,796,553 bytes in 138,247 blocks.
<br>
<p>==4225== malloc/free: 6,837,039 allocs, 6,698,792 frees, 293,385,873 bytes
<br>
allocated.
<br>
<p>==4225== For counts of detected errors, rerun with: -v
<br>
<p>==4225== searching for pointers to 138,247 not-freed blocks.
<br>
<p>==4225== checked 164,732,924 bytes.
<br>
<p>==4225==
<br>
<p>==4225== LEAK SUMMARY:
<br>
<p>==4225==    definitely lost: 4,455 bytes in 249 blocks.
<br>
<p>==4225==      possibly lost: 226,109 bytes in 5,823 blocks.
<br>
<p>==4225==    still reachable: 51,565,989 bytes in 132,175 blocks.
<br>
<p>==4225==         suppressed: 0 bytes in 0 blocks.
<br>
<p>==4225== Use --leak-check=full to see details of leaked memory.
<br>
<p>==4226==
<br>
<p>==4226== ERROR SUMMARY: 227 errors from 41 contexts (suppressed: 63 from 1)
<br>
<p>==4226== malloc/free: in use at exit: 50,764,389 bytes in 138,250 blocks.
<br>
<p>==4226== malloc/free: 143,586 allocs, 5,336 frees, 103,910,477 bytes
<br>
allocated.
<br>
<p>==4226== For counts of detected errors, rerun with: -v
<br>
<p>==4227==
<br>
<p>==4227== ERROR SUMMARY: 225 errors from 40 contexts (suppressed: 63 from 1)
<br>
<p>==4227== malloc/free: in use at exit: 515,706 bytes in 11,582 blocks.
<br>
<p>==4227== malloc/free: 16,868 allocs, 5,286 frees, 4,054,035 bytes allocated.
<br>
<p>==4227== For counts of detected errors, rerun with: -v
<br>
<p>==4227== searching for pointers to 11,582 not-freed blocks.
<br>
<p>==4227== checked 7,295,768 bytes.
<br>
<p>==4227==
<br>
<p>==4227== LEAK SUMMARY:
<br>
<p>==4227==    definitely lost: 4,455 bytes in 249 blocks.
<br>
<p>==4227==      possibly lost: 226,109 bytes in 5,823 blocks.
<br>
<p>==4227==    still reachable: 285,142 bytes in 5,510 blocks.
<br>
<p>==4227==         suppressed: 0 bytes in 0 blocks.
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3081/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3082.php">stephen mulcahy: "[OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3080.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
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
