<?
$subject_val = "Re: [OMPI users] Problems on large clusters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 03:14:03 2011" -->
<!-- isoreceived="20110622071403" -->
<!-- sent="Wed, 22 Jun 2011 09:13:35 +0200" -->
<!-- isosent="20110622071335" -->
<!-- name="Thorsten Schuett" -->
<!-- email="schuett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems on large clusters" -->
<!-- id="201106220913.35365.schuett_at_zib.de" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="1FA6C794-C170-4218-9510-30B313174ECC_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems on large clusters<br>
<strong>From:</strong> Thorsten Schuett (<em>schuett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-22 03:13:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16734.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16732.php">Brock Palen: "[OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
<li><strong>In reply to:</strong> <a href="16730.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16735.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Reply:</strong> <a href="16735.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure. It's an SGI ICE cluster with dual-rail IB. The HCAs are Mellanox 
<br>
ConnectX IB DDR.
<br>
<p>This is a 2040 cores job. I use 255 nodes with one MPI task on each node and 
<br>
use 8-way OpenMP.
<br>
<p>I don't need -np and -machinefile, because mpiexec picks up this information 
<br>
from PBS.
<br>
<p>Thorsten
<br>
<p>On Tuesday, June 21, 2011, Gilbert Grosdidier wrote:
<br>
<span class="quotelev1">&gt; Bonjour Thorsten,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Could you please be a little bit more specific about the cluster
</span><br>
<span class="quotelev1">&gt; itself ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   G.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 21 juin 11 &#224; 17:46, Thorsten Schuett a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am running openmpi 1.5.3 on a IB cluster and I have problems
</span><br>
<span class="quotelev2">&gt; &gt; starting jobs
</span><br>
<span class="quotelev2">&gt; &gt; on larger node counts. With small numbers of tasks, it usually
</span><br>
<span class="quotelev2">&gt; &gt; works. But now
</span><br>
<span class="quotelev2">&gt; &gt; the startup failed three times in a row using 255 nodes. I am using
</span><br>
<span class="quotelev2">&gt; &gt; 255 nodes
</span><br>
<span class="quotelev2">&gt; &gt; with one MPI task per node and the mpiexec looks as follows:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec --mca btl self,openib --mca mpi_leave_pinned 0 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; After ten minutes, I pulled a stracktrace on all nodes and killed
</span><br>
<span class="quotelev2">&gt; &gt; the job,
</span><br>
<span class="quotelev2">&gt; &gt; because there was no progress. In the following, you will find the
</span><br>
<span class="quotelev2">&gt; &gt; stack trace
</span><br>
<span class="quotelev2">&gt; &gt; generated with gdb thread apply all bt. The backtrace looks
</span><br>
<span class="quotelev2">&gt; &gt; basically the same
</span><br>
<span class="quotelev2">&gt; &gt; on all nodes. It seems to hang in mpi_init.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thorsten
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thread 3 (Thread 46914544122176 (LWP 28979)):
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00002b6ee912d9a2 in select () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002b6eeabd928d in service_thread_start (context=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;)
</span><br>
<span class="quotelev2">&gt; &gt; at btl_openib_fd.c:427
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002b6ee835e143 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00002b6ee9133b8d in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thread 2 (Thread 46916594338112 (LWP 28980)):
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00002b6ee912b8b6 in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002b6eeabd7b8a in btl_openib_async_thread (async=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized
</span><br>
<span class="quotelev2">&gt; &gt; out&gt;) at btl_openib_async.c:419
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002b6ee835e143 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00002b6ee9133b8d in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thread 1 (Thread 47755361533088 (LWP 28978)):
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00002b6ee9133fa8 in epoll_wait () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002b6ee87745db in epoll_dispatch (base=0xb79050, arg=0xb558c0,
</span><br>
<span class="quotelev2">&gt; &gt; tv=&lt;value optimized out&gt;) at epoll.c:215
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002b6ee8773309 in opal_event_base_loop (base=0xb79050,
</span><br>
<span class="quotelev2">&gt; &gt; flags=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;) at event.c:838
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00002b6ee875ee92 in opal_progress () at runtime/
</span><br>
<span class="quotelev2">&gt; &gt; opal_progress.c:189
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x0000000039f00001 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00002b6ee87979c9 in std::ios_base::Init::~Init () at
</span><br>
<span class="quotelev2">&gt; &gt; ../../.././libstdc++-v3/src/ios_init.cc:123
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00007fffc32c8cc8 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00002b6ee9d20955 in orte_grpcomm_bad_get_proc_attr (proc=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;, attribute_name=0x2b6ee88e5780 &quot; \020322351n+&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; val=0x2b6ee875ee92, size=0x7fffc32c8cd0) at grpcomm_bad_module.c:500
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00002b6ee86dd511 in ompi_modex_recv_key_value (key=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized
</span><br>
<span class="quotelev2">&gt; &gt; out&gt;, source_proc=&lt;value optimized out&gt;, value=0xbb3a00, dtype=14
</span><br>
<span class="quotelev2">&gt; &gt; '\016') at
</span><br>
<span class="quotelev2">&gt; &gt; runtime/ompi_module_exchange.c:125
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x00002b6ee86d7ea1 in ompi_proc_set_arch () at proc/proc.c:154
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x00002b6ee86db1b0 in ompi_mpi_init (argc=15, argv=0x7fffc32c92f8,
</span><br>
<span class="quotelev2">&gt; &gt; requested=&lt;value optimized out&gt;, provided=0x7fffc32c917c) at
</span><br>
<span class="quotelev2">&gt; &gt; runtime/ompi_mpi_init.c:699
</span><br>
<span class="quotelev2">&gt; &gt; #11 0x00007fffc32c8e88 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #12 0x00002b6ee77f8348 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #13 0x00007fffc32c8e60 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #14 0x00007fffc32c8e20 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #15 0x0000000009efa994 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #16 0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;    Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
</span><br>
<span class="quotelev1">&gt;    Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
</span><br>
<span class="quotelev1">&gt;    B.P. 34, F-91898 Orsay Cedex (FRANCE)
</span><br>
<span class="quotelev1">&gt; *---------------------------------------------------------------------*
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16734.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16732.php">Brock Palen: "[OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
<li><strong>In reply to:</strong> <a href="16730.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16735.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Reply:</strong> <a href="16735.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
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
