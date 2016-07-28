<?
$subject_val = "Re: [OMPI users] Problems on large clusters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 21 12:04:27 2011" -->
<!-- isoreceived="20110621160427" -->
<!-- sent="Tue, 21 Jun 2011 18:04:21 +0200" -->
<!-- isosent="20110621160421" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems on large clusters" -->
<!-- id="1FA6C794-C170-4218-9510-30B313174ECC_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201106211746.37970.schuett_at_zib.de" -->
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
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-21 12:04:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16731.php">Addepalli, Srirangam V: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Previous message:</strong> <a href="16729.php">Thorsten Schuett: "[OMPI users] Problems on large clusters"</a>
<li><strong>In reply to:</strong> <a href="16729.php">Thorsten Schuett: "[OMPI users] Problems on large clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16733.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Reply:</strong> <a href="16733.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour Thorsten,
<br>
<p>&nbsp;&nbsp;Could you please be a little bit more specific about the cluster  
<br>
itself ?
<br>
<p>&nbsp;&nbsp;G.
<br>
<p>Le 21 juin 11 &#224; 17:46, Thorsten Schuett a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running openmpi 1.5.3 on a IB cluster and I have problems  
</span><br>
<span class="quotelev1">&gt; starting jobs
</span><br>
<span class="quotelev1">&gt; on larger node counts. With small numbers of tasks, it usually  
</span><br>
<span class="quotelev1">&gt; works. But now
</span><br>
<span class="quotelev1">&gt; the startup failed three times in a row using 255 nodes. I am using  
</span><br>
<span class="quotelev1">&gt; 255 nodes
</span><br>
<span class="quotelev1">&gt; with one MPI task per node and the mpiexec looks as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec --mca btl self,openib --mca mpi_leave_pinned 0 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After ten minutes, I pulled a stracktrace on all nodes and killed  
</span><br>
<span class="quotelev1">&gt; the job,
</span><br>
<span class="quotelev1">&gt; because there was no progress. In the following, you will find the  
</span><br>
<span class="quotelev1">&gt; stack trace
</span><br>
<span class="quotelev1">&gt; generated with gdb thread apply all bt. The backtrace looks  
</span><br>
<span class="quotelev1">&gt; basically the same
</span><br>
<span class="quotelev1">&gt; on all nodes. It seems to hang in mpi_init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thorsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 3 (Thread 46914544122176 (LWP 28979)):
</span><br>
<span class="quotelev1">&gt; #0  0x00002b6ee912d9a2 in select () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002b6eeabd928d in service_thread_start (context=&lt;value  
</span><br>
<span class="quotelev1">&gt; optimized out&gt;)
</span><br>
<span class="quotelev1">&gt; at btl_openib_fd.c:427
</span><br>
<span class="quotelev1">&gt; #2  0x00002b6ee835e143 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002b6ee9133b8d in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 2 (Thread 46916594338112 (LWP 28980)):
</span><br>
<span class="quotelev1">&gt; #0  0x00002b6ee912b8b6 in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002b6eeabd7b8a in btl_openib_async_thread (async=&lt;value  
</span><br>
<span class="quotelev1">&gt; optimized
</span><br>
<span class="quotelev1">&gt; out&gt;) at btl_openib_async.c:419
</span><br>
<span class="quotelev1">&gt; #2  0x00002b6ee835e143 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002b6ee9133b8d in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 1 (Thread 47755361533088 (LWP 28978)):
</span><br>
<span class="quotelev1">&gt; #0  0x00002b6ee9133fa8 in epoll_wait () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002b6ee87745db in epoll_dispatch (base=0xb79050, arg=0xb558c0,
</span><br>
<span class="quotelev1">&gt; tv=&lt;value optimized out&gt;) at epoll.c:215
</span><br>
<span class="quotelev1">&gt; #2  0x00002b6ee8773309 in opal_event_base_loop (base=0xb79050,  
</span><br>
<span class="quotelev1">&gt; flags=&lt;value
</span><br>
<span class="quotelev1">&gt; optimized out&gt;) at event.c:838
</span><br>
<span class="quotelev1">&gt; #3  0x00002b6ee875ee92 in opal_progress () at runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #4  0x0000000039f00001 in ?? ()
</span><br>
<span class="quotelev1">&gt; #5  0x00002b6ee87979c9 in std::ios_base::Init::~Init () at
</span><br>
<span class="quotelev1">&gt; ../../.././libstdc++-v3/src/ios_init.cc:123
</span><br>
<span class="quotelev1">&gt; #6  0x00007fffc32c8cc8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #7  0x00002b6ee9d20955 in orte_grpcomm_bad_get_proc_attr (proc=&lt;value
</span><br>
<span class="quotelev1">&gt; optimized out&gt;, attribute_name=0x2b6ee88e5780 &quot; \020322351n+&quot;,
</span><br>
<span class="quotelev1">&gt; val=0x2b6ee875ee92, size=0x7fffc32c8cd0) at grpcomm_bad_module.c:500
</span><br>
<span class="quotelev1">&gt; #8  0x00002b6ee86dd511 in ompi_modex_recv_key_value (key=&lt;value  
</span><br>
<span class="quotelev1">&gt; optimized
</span><br>
<span class="quotelev1">&gt; out&gt;, source_proc=&lt;value optimized out&gt;, value=0xbb3a00, dtype=14  
</span><br>
<span class="quotelev1">&gt; '\016') at
</span><br>
<span class="quotelev1">&gt; runtime/ompi_module_exchange.c:125
</span><br>
<span class="quotelev1">&gt; #9  0x00002b6ee86d7ea1 in ompi_proc_set_arch () at proc/proc.c:154
</span><br>
<span class="quotelev1">&gt; #10 0x00002b6ee86db1b0 in ompi_mpi_init (argc=15, argv=0x7fffc32c92f8,
</span><br>
<span class="quotelev1">&gt; requested=&lt;value optimized out&gt;, provided=0x7fffc32c917c) at
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_init.c:699
</span><br>
<span class="quotelev1">&gt; #11 0x00007fffc32c8e88 in ?? ()
</span><br>
<span class="quotelev1">&gt; #12 0x00002b6ee77f8348 in ?? ()
</span><br>
<span class="quotelev1">&gt; #13 0x00007fffc32c8e60 in ?? ()
</span><br>
<span class="quotelev1">&gt; #14 0x00007fffc32c8e20 in ?? ()
</span><br>
<span class="quotelev1">&gt; #15 0x0000000009efa994 in ?? ()
</span><br>
<span class="quotelev1">&gt; #16 0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
*---------------------------------------------------------------------*
   Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
   LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
   Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
   B.P. 34, F-91898 Orsay Cedex (FRANCE)
*---------------------------------------------------------------------*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16730/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16731.php">Addepalli, Srirangam V: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Previous message:</strong> <a href="16729.php">Thorsten Schuett: "[OMPI users] Problems on large clusters"</a>
<li><strong>In reply to:</strong> <a href="16729.php">Thorsten Schuett: "[OMPI users] Problems on large clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16733.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Reply:</strong> <a href="16733.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
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
