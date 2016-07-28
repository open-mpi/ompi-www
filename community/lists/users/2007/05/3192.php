<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  3 17:42:24 2007" -->
<!-- isoreceived="20070503214224" -->
<!-- sent="Thu, 3 May 2007 14:41:54 -0700" -->
<!-- isosent="20070503214154" -->
<!-- name="Chudin, Eugene" -->
<!-- email="eugene_chudin_at_[hidden]" -->
<!-- subject="[OMPI users] Valgrind and openmpi" -->
<!-- id="AB40462F69164849BF07D528E474B170014A4DFE_at_ussemx1100.merck.com" -->
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
<strong>From:</strong> Chudin, Eugene (<em>eugene_chudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-03 17:41:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3193.php">George Bosilca: "Re: [OMPI users] Valgrind and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3191.php">Adrian Knoth: "Re: [OMPI users] MPI compiling error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3193.php">George Bosilca: "Re: [OMPI users] Valgrind and openmpi"</a>
<li><strong>Reply:</strong> <a href="3193.php">George Bosilca: "Re: [OMPI users] Valgrind and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was wondering if it is expected to have error messages from valgrind
<br>
when checking openmpi code?
<br>
<p>For instance, I have following trivial code:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>template &lt;typename T&gt;
<br>
void distribute_val(T&amp; val, int _procid, int _np) 
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;val, sizeof(T), MPI_CHAR, 0, MPI_COMM_WORLD); 
<br>
}
<br>
<p>using namespace std;
<br>
<p><p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int procid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int nproc;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;procid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;nproc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double val = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(procid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;val = 3.14159;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distribute_val(val, procid, nproc);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;ProcID=\t&quot; &lt;&lt; procid &lt;&lt; &quot;\tval=&quot; &lt;&lt; val &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Which produces errors in valgrind if I run it on 2 processors connected
<br>
by network.
<br>
If I run it on 2 pocessors located on the same node then I get no errors
<br>
from valgrind.
<br>
In both cases code runs as expected, but I am still worried about causes
<br>
of valgrind errors.
<br>
<p>Below is the output from valgrind:
<br>
<span class="quotelev1">&gt; mpiCC -g -Wall test.cpp -o test
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --machinefile ./mpd.2 --prefix /toolbox/openmpi valgrind
</span><br>
--leak-check=full ./test
<br>
==14823== Memcheck, a memory error detector.
<br>
==14823== Copyright (C) 2002-2007, and GNU GPL'd, by Julian Seward et
<br>
al.
<br>
==14823== Using LibVEX rev 1732, a library for dynamic binary
<br>
translation.
<br>
==14823== Copyright (C) 2004-2007, and GNU GPL'd, by OpenWorks LLP.
<br>
==14823== Using valgrind-3.2.3, a dynamic binary instrumentation
<br>
framework.
<br>
==14823== Copyright (C) 2000-2007, and GNU GPL'd, by Julian Seward et
<br>
al.
<br>
==14823== For more details, rerun with: -v
<br>
==14823==
<br>
==13545== Memcheck, a memory error detector.
<br>
==13545== Copyright (C) 2002-2007, and GNU GPL'd, by Julian Seward et
<br>
al.
<br>
==13545== Using LibVEX rev 1732, a library for dynamic binary
<br>
translation.
<br>
==13545== Copyright (C) 2004-2007, and GNU GPL'd, by OpenWorks LLP.
<br>
==13545== Using valgrind-3.2.3, a dynamic binary instrumentation
<br>
framework.
<br>
==13545== Copyright (C) 2000-2007, and GNU GPL'd, by Julian Seward et
<br>
al.
<br>
==13545== For more details, rerun with: -v
<br>
==13545==
<br>
==14823== Syscall param writev(vector[...]) points to uninitialised
<br>
byte(s)
<br>
==14823==    at 0x59BFA86: do_writev (in /lib64/tls/libc.so.6)
<br>
==14823==    by 0x831771E: mca_btl_tcp_frag_send (in
<br>
/toolbox64/openmpi/lib/openmpi/mca_btl_tcp.so)
<br>
==14823==    by 0x83160C9: mca_btl_tcp_endpoint_send_handler (in
<br>
/toolbox64/openmpi/lib/openmpi/mca_btl_tcp.so)
<br>
==14823==    by 0x4F50951: opal_event_base_loop (in
<br>
/toolbox64/openmpi/lib/libopen-pal.so.0.0.0)
<br>
==14823==    by 0x4F509E4: opal_event_loop (in
<br>
/toolbox64/openmpi/lib/libopen-pal.so.0.0.0)
<br>
==14823==    by 0x4F4AE50: opal_progress (in
<br>
/toolbox64/openmpi/lib/libopen-pal.so.0.0.0)
<br>
==14823==    by 0x4C8014B: ompi_request_wait_all (in
<br>
/toolbox64/openmpi/lib/libmpi.so.0.0.0)
<br>
==14823==    by 0x873412D: ompi_coll_tuned_bcast_intra_generic (in
<br>
/toolbox64/openmpi/lib/openmpi/mca_coll_tuned.so)
<br>
==14823==    by 0x8734293: ompi_coll_tuned_bcast_intra_binomial (in
<br>
/toolbox64/openmpi/lib/openmpi/mca_coll_tuned.so)
<br>
==14823==    by 0x872EA9F: ompi_coll_tuned_bcast_intra_dec_fixed (in
<br>
/toolbox64/openmpi/lib/openmpi/mca_coll_tuned.so)
<br>
==14823==    by 0x4C957BA: PMPI_Bcast (in
<br>
/toolbox64/openmpi/lib/libmpi.so.0.0.0)
<br>
==14823==    by 0x408A9D: void distribute_val&lt;double&gt;(double&amp;, int, int)
<br>
(test.cpp:7)
<br>
==14823==  Address 0x41EEE2C is not stack'd, malloc'd or (recently)
<br>
free'd
<br>
ProcID= 0  val=3.14159
<br>
ProcID= 1  val=3.14159
<br>
==13545==
<br>
==13545== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 8 from 5)
<br>
==13545== malloc/free: in use at exit: 1,920 bytes in 1 blocks.
<br>
==13545== malloc/free: 1 allocs, 0 frees, 1,920 bytes allocated.
<br>
==13545== For counts of detected errors, rerun with: -v
<br>
==13545== searching for pointers to 1 not-freed blocks.
<br>
==13545== checked 1,155,400 bytes.
<br>
==13545==
<br>
==13545== LEAK SUMMARY:
<br>
==13545==    definitely lost: 0 bytes in 0 blocks.
<br>
==13545==      possibly lost: 0 bytes in 0 blocks.
<br>
==13545==    still reachable: 1,920 bytes in 1 blocks.
<br>
==13545==         suppressed: 0 bytes in 0 blocks.
<br>
==13545== Reachable blocks (those to which a pointer was found) are not
<br>
shown.
<br>
==13545== To see them, rerun with: --leak-check=full
<br>
--show-reachable=yes
<br>
==14823==
<br>
==14823== ERROR SUMMARY: 2 errors from 1 contexts (suppressed: 7 from 4)
<br>
==14823== malloc/free: in use at exit: 1,920 bytes in 1 blocks.
<br>
==14823== malloc/free: 1 allocs, 0 frees, 1,920 bytes allocated.
<br>
==14823== For counts of detected errors, rerun with: -v
<br>
==14823== searching for pointers to 1 not-freed blocks.
<br>
==14823== checked 1,158,440 bytes.
<br>
==14823==
<br>
==14823== LEAK SUMMARY:
<br>
==14823==    definitely lost: 0 bytes in 0 blocks.
<br>
==14823==      possibly lost: 0 bytes in 0 blocks.
<br>
==14823==    still reachable: 1,920 bytes in 1 blocks.
<br>
==14823==         suppressed: 0 bytes in 0 blocks.
<br>
==14823== Reachable blocks (those to which a pointer was found) are not
<br>
shown.
<br>
==14823== To see them, rerun with: --leak-check=full
<br>
--show-reachable=yes 
<br>
<p>------------------------------------------------------------------------------
<br>
Notice:  This e-mail message, together with any attachments, contains
<br>
information of Merck &amp; Co., Inc. (One Merck Drive, Whitehouse Station,
<br>
New Jersey, USA 08889), and/or its affiliates (which may be known
<br>
outside the United States as Merck Frosst, Merck Sharp &amp; Dohme or MSD
<br>
and in Japan, as Banyu - direct contact information for affiliates is 
<br>
available at <a href="http://www.merck.com/contact/contacts.html">http://www.merck.com/contact/contacts.html</a>) that may be 
<br>
confidential, proprietary copyrighted and/or legally privileged. It is 
<br>
intended solely for the use of the individual or entity named on this 
<br>
message. If you are not the intended recipient, and have received this 
<br>
message in error, please notify us immediately by reply e-mail and then 
<br>
delete it from your system.
<br>
<p><p>------------------------------------------------------------------------------
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3192/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3193.php">George Bosilca: "Re: [OMPI users] Valgrind and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3191.php">Adrian Knoth: "Re: [OMPI users] MPI compiling error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3193.php">George Bosilca: "Re: [OMPI users] Valgrind and openmpi"</a>
<li><strong>Reply:</strong> <a href="3193.php">George Bosilca: "Re: [OMPI users] Valgrind and openmpi"</a>
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
