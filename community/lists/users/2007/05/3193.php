<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  3 21:30:33 2007" -->
<!-- isoreceived="20070504013033" -->
<!-- sent="Thu, 3 May 2007 21:30:19 -0400" -->
<!-- isosent="20070504013019" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind and openmpi" -->
<!-- id="1C41494A-2A14-49CE-80A7-8F8B0B0DBECA_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AB40462F69164849BF07D528E474B170014A4DFE_at_ussemx1100.merck.com" -->
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
<strong>Date:</strong> 2007-05-03 21:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3194.php">David Gunter: "[OMPI users] Using TotalView's Message Queue graphing features with OMPI?"</a>
<li><strong>Previous message:</strong> <a href="3192.php">Chudin, Eugene: "[OMPI users] Valgrind and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3192.php">Chudin, Eugene: "[OMPI users] Valgrind and openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Usually ... I would say no. But this is a special case (of  
<br>
course :)). In order to get better performances we align some fields  
<br>
in our TCP header. As a result there is a small gap in the TCP  
<br>
headers, which of course don't get initialized. Valgrind detect it  
<br>
and complain, but it's harmless.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 3, 2007, at 5:41 PM, Chudin, Eugene wrote:
<br>
<p><span class="quotelev1">&gt; I was wondering if it is expected to have error messages from  
</span><br>
<span class="quotelev1">&gt; valgrind when checking openmpi code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For instance, I have following trivial code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; template &lt;typename T&gt;
</span><br>
<span class="quotelev1">&gt; void distribute_val(T&amp; val, int _procid, int _np)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         MPI_Bcast(&amp;val, sizeof(T), MPI_CHAR, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         int procid;
</span><br>
<span class="quotelev1">&gt;         int nproc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank (MPI_COMM_WORLD, &amp;procid);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size (MPI_COMM_WORLD, &amp;nproc);
</span><br>
<span class="quotelev1">&gt;     double val = 0;
</span><br>
<span class="quotelev1">&gt;         if(procid == 0)
</span><br>
<span class="quotelev1">&gt;                 val = 3.14159;
</span><br>
<span class="quotelev1">&gt;         distribute_val(val, procid, nproc);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         cout &lt;&lt; &quot;ProcID=\t&quot; &lt;&lt; procid &lt;&lt; &quot;\tval=&quot; &lt;&lt; val &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which produces errors in valgrind if I run it on 2 processors  
</span><br>
<span class="quotelev1">&gt; connected by network.
</span><br>
<span class="quotelev1">&gt; If I run it on 2 pocessors located on the same node then I get no  
</span><br>
<span class="quotelev1">&gt; errors from valgrind.
</span><br>
<span class="quotelev1">&gt; In both cases code runs as expected, but I am still worried about  
</span><br>
<span class="quotelev1">&gt; causes of valgrind errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is the output from valgrind:
</span><br>
<span class="quotelev2">&gt; &gt; mpiCC -g -Wall test.cpp -o test
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --machinefile ./mpd.2 --prefix /toolbox/openmpi  
</span><br>
<span class="quotelev1">&gt; valgrind --leak-check=full ./test
</span><br>
<span class="quotelev1">&gt; ==14823== Memcheck, a memory error detector.
</span><br>
<span class="quotelev1">&gt; ==14823== Copyright (C) 2002-2007, and GNU GPL'd, by Julian Seward  
</span><br>
<span class="quotelev1">&gt; et al.
</span><br>
<span class="quotelev1">&gt; ==14823== Using LibVEX rev 1732, a library for dynamic binary  
</span><br>
<span class="quotelev1">&gt; translation.
</span><br>
<span class="quotelev1">&gt; ==14823== Copyright (C) 2004-2007, and GNU GPL'd, by OpenWorks LLP.
</span><br>
<span class="quotelev1">&gt; ==14823== Using valgrind-3.2.3, a dynamic binary instrumentation  
</span><br>
<span class="quotelev1">&gt; framework.
</span><br>
<span class="quotelev1">&gt; ==14823== Copyright (C) 2000-2007, and GNU GPL'd, by Julian Seward  
</span><br>
<span class="quotelev1">&gt; et al.
</span><br>
<span class="quotelev1">&gt; ==14823== For more details, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==14823==
</span><br>
<span class="quotelev1">&gt; ==13545== Memcheck, a memory error detector.
</span><br>
<span class="quotelev1">&gt; ==13545== Copyright (C) 2002-2007, and GNU GPL'd, by Julian Seward  
</span><br>
<span class="quotelev1">&gt; et al.
</span><br>
<span class="quotelev1">&gt; ==13545== Using LibVEX rev 1732, a library for dynamic binary  
</span><br>
<span class="quotelev1">&gt; translation.
</span><br>
<span class="quotelev1">&gt; ==13545== Copyright (C) 2004-2007, and GNU GPL'd, by OpenWorks LLP.
</span><br>
<span class="quotelev1">&gt; ==13545== Using valgrind-3.2.3, a dynamic binary instrumentation  
</span><br>
<span class="quotelev1">&gt; framework.
</span><br>
<span class="quotelev1">&gt; ==13545== Copyright (C) 2000-2007, and GNU GPL'd, by Julian Seward  
</span><br>
<span class="quotelev1">&gt; et al.
</span><br>
<span class="quotelev1">&gt; ==13545== For more details, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==13545==
</span><br>
<span class="quotelev1">&gt; ==14823== Syscall param writev(vector[...]) points to uninitialised  
</span><br>
<span class="quotelev1">&gt; byte(s)
</span><br>
<span class="quotelev1">&gt; ==14823==    at 0x59BFA86: do_writev (in /lib64/tls/libc.so.6)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x831771E: mca_btl_tcp_frag_send (in /toolbox64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x83160C9: mca_btl_tcp_endpoint_send_handler (in / 
</span><br>
<span class="quotelev1">&gt; toolbox64/openmpi/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x4F50951: opal_event_base_loop (in /toolbox64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x4F509E4: opal_event_loop (in /toolbox64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x4F4AE50: opal_progress (in /toolbox64/openmpi/lib/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x4C8014B: ompi_request_wait_all (in /toolbox64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x873412D: ompi_coll_tuned_bcast_intra_generic (in / 
</span><br>
<span class="quotelev1">&gt; toolbox64/openmpi/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x8734293: ompi_coll_tuned_bcast_intra_binomial  
</span><br>
<span class="quotelev1">&gt; (in /toolbox64/openmpi/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x872EA9F: ompi_coll_tuned_bcast_intra_dec_fixed  
</span><br>
<span class="quotelev1">&gt; (in /toolbox64/openmpi/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x4C957BA: PMPI_Bcast (in /toolbox64/openmpi/lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==14823==    by 0x408A9D: void distribute_val&lt;double&gt;(double&amp;, int,  
</span><br>
<span class="quotelev1">&gt; int) (test.cpp:7)
</span><br>
<span class="quotelev1">&gt; ==14823==  Address 0x41EEE2C is not stack'd, malloc'd or (recently)  
</span><br>
<span class="quotelev1">&gt; free'd
</span><br>
<span class="quotelev1">&gt; ProcID= 0  val=3.14159
</span><br>
<span class="quotelev1">&gt; ProcID= 1  val=3.14159
</span><br>
<span class="quotelev1">&gt; ==13545==
</span><br>
<span class="quotelev1">&gt; ==13545== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 8  
</span><br>
<span class="quotelev1">&gt; from 5)
</span><br>
<span class="quotelev1">&gt; ==13545== malloc/free: in use at exit: 1,920 bytes in 1 blocks.
</span><br>
<span class="quotelev1">&gt; ==13545== malloc/free: 1 allocs, 0 frees, 1,920 bytes allocated.
</span><br>
<span class="quotelev1">&gt; ==13545== For counts of detected errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==13545== searching for pointers to 1 not-freed blocks.
</span><br>
<span class="quotelev1">&gt; ==13545== checked 1,155,400 bytes.
</span><br>
<span class="quotelev1">&gt; ==13545==
</span><br>
<span class="quotelev1">&gt; ==13545== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==13545==    definitely lost: 0 bytes in 0 blocks.
</span><br>
<span class="quotelev1">&gt; ==13545==      possibly lost: 0 bytes in 0 blocks.
</span><br>
<span class="quotelev1">&gt; ==13545==    still reachable: 1,920 bytes in 1 blocks.
</span><br>
<span class="quotelev1">&gt; ==13545==         suppressed: 0 bytes in 0 blocks.
</span><br>
<span class="quotelev1">&gt; ==13545== Reachable blocks (those to which a pointer was found) are  
</span><br>
<span class="quotelev1">&gt; not shown.
</span><br>
<span class="quotelev1">&gt; ==13545== To see them, rerun with: --leak-check=full --show- 
</span><br>
<span class="quotelev1">&gt; reachable=yes
</span><br>
<span class="quotelev1">&gt; ==14823==
</span><br>
<span class="quotelev1">&gt; ==14823== ERROR SUMMARY: 2 errors from 1 contexts (suppressed: 7  
</span><br>
<span class="quotelev1">&gt; from 4)
</span><br>
<span class="quotelev1">&gt; ==14823== malloc/free: in use at exit: 1,920 bytes in 1 blocks.
</span><br>
<span class="quotelev1">&gt; ==14823== malloc/free: 1 allocs, 0 frees, 1,920 bytes allocated.
</span><br>
<span class="quotelev1">&gt; ==14823== For counts of detected errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==14823== searching for pointers to 1 not-freed blocks.
</span><br>
<span class="quotelev1">&gt; ==14823== checked 1,158,440 bytes.
</span><br>
<span class="quotelev1">&gt; ==14823==
</span><br>
<span class="quotelev1">&gt; ==14823== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==14823==    definitely lost: 0 bytes in 0 blocks.
</span><br>
<span class="quotelev1">&gt; ==14823==      possibly lost: 0 bytes in 0 blocks.
</span><br>
<span class="quotelev1">&gt; ==14823==    still reachable: 1,920 bytes in 1 blocks.
</span><br>
<span class="quotelev1">&gt; ==14823==         suppressed: 0 bytes in 0 blocks.
</span><br>
<span class="quotelev1">&gt; ==14823== Reachable blocks (those to which a pointer was found) are  
</span><br>
<span class="quotelev1">&gt; not shown.
</span><br>
<span class="quotelev1">&gt; ==14823== To see them, rerun with: --leak-check=full --show- 
</span><br>
<span class="quotelev1">&gt; reachable=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; Notice: This e-mail message, together with any attachments, contains
</span><br>
<span class="quotelev1">&gt; information of Merck &amp; Co., Inc. (One Merck Drive, Whitehouse Station,
</span><br>
<span class="quotelev1">&gt; New Jersey, USA 08889), and/or its affiliates (which may be known
</span><br>
<span class="quotelev1">&gt; outside the United States as Merck Frosst, Merck Sharp &amp; Dohme or MSD
</span><br>
<span class="quotelev1">&gt; and in Japan, as Banyu - direct contact information for affiliates is
</span><br>
<span class="quotelev1">&gt; available at <a href="http://www.merck.com/contact/contacts.html">http://www.merck.com/contact/contacts.html</a>) that may be
</span><br>
<span class="quotelev1">&gt; confidential, proprietary copyrighted and/or legally privileged. It is
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual or entity named on this
</span><br>
<span class="quotelev1">&gt; message. If you are not the intended recipient, and have received this
</span><br>
<span class="quotelev1">&gt; message in error, please notify us immediately by reply e-mail and  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; delete it from your system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --------
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3193/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3194.php">David Gunter: "[OMPI users] Using TotalView's Message Queue graphing features with OMPI?"</a>
<li><strong>Previous message:</strong> <a href="3192.php">Chudin, Eugene: "[OMPI users] Valgrind and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3192.php">Chudin, Eugene: "[OMPI users] Valgrind and openmpi"</a>
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
