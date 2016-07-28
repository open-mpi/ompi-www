<?
$subject_val = "Re: [OMPI users] Problems on large clusters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 21 12:06:08 2011" -->
<!-- isoreceived="20110621160608" -->
<!-- sent="Tue, 21 Jun 2011 11:01:06 -0500" -->
<!-- isosent="20110621160106" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems on large clusters" -->
<!-- id="15F71B097D330B42AA606A4AD8CA96400131C75D8601_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-21 12:01:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16732.php">Brock Palen: "[OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
<li><strong>Previous message:</strong> <a href="16730.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>In reply to:</strong> <a href="16729.php">Thorsten Schuett: "[OMPI users] Problems on large clusters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Thorsten
<br>
What type of IB interface do you have (qlogic ?).  I often run into simarl issue when running 256 core jobs . It mostly happens for me as i hit a node with IB issues.
<br>
nothing related to openmpi.  If you are using qlogic PSM  try using ping-pong ex to check availability of all nodes.
<br>
<p>Rangam
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Thorsten Schuett [schuett_at_[hidden]]
<br>
Sent: Tuesday, June 21, 2011 10:46 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Problems on large clusters
<br>
<p>Hi,
<br>
<p>I am running openmpi 1.5.3 on a IB cluster and I have problems starting jobs
<br>
on larger node counts. With small numbers of tasks, it usually works. But now
<br>
the startup failed three times in a row using 255 nodes. I am using 255 nodes
<br>
with one MPI task per node and the mpiexec looks as follows:
<br>
<p>mpiexec --mca btl self,openib --mca mpi_leave_pinned 0 ./a.out
<br>
<p>After ten minutes, I pulled a stracktrace on all nodes and killed the job,
<br>
because there was no progress. In the following, you will find the stack trace
<br>
generated with gdb thread apply all bt. The backtrace looks basically the same
<br>
on all nodes. It seems to hang in mpi_init.
<br>
<p>Any help is appreciated,
<br>
<p>Thorsten
<br>
<p>Thread 3 (Thread 46914544122176 (LWP 28979)):
<br>
#0  0x00002b6ee912d9a2 in select () from /lib64/libc.so.6
<br>
#1  0x00002b6eeabd928d in service_thread_start (context=&lt;value optimized out&gt;)
<br>
at btl_openib_fd.c:427
<br>
#2  0x00002b6ee835e143 in start_thread () from /lib64/libpthread.so.0
<br>
#3  0x00002b6ee9133b8d in clone () from /lib64/libc.so.6
<br>
#4  0x0000000000000000 in ?? ()
<br>
<p>Thread 2 (Thread 46916594338112 (LWP 28980)):
<br>
#0  0x00002b6ee912b8b6 in poll () from /lib64/libc.so.6
<br>
#1  0x00002b6eeabd7b8a in btl_openib_async_thread (async=&lt;value optimized
<br>
out&gt;) at btl_openib_async.c:419
<br>
#2  0x00002b6ee835e143 in start_thread () from /lib64/libpthread.so.0
<br>
#3  0x00002b6ee9133b8d in clone () from /lib64/libc.so.6
<br>
#4  0x0000000000000000 in ?? ()
<br>
<p>Thread 1 (Thread 47755361533088 (LWP 28978)):
<br>
#0  0x00002b6ee9133fa8 in epoll_wait () from /lib64/libc.so.6
<br>
#1  0x00002b6ee87745db in epoll_dispatch (base=0xb79050, arg=0xb558c0,
<br>
tv=&lt;value optimized out&gt;) at epoll.c:215
<br>
#2  0x00002b6ee8773309 in opal_event_base_loop (base=0xb79050, flags=&lt;value
<br>
optimized out&gt;) at event.c:838
<br>
#3  0x00002b6ee875ee92 in opal_progress () at runtime/opal_progress.c:189
<br>
#4  0x0000000039f00001 in ?? ()
<br>
#5  0x00002b6ee87979c9 in std::ios_base::Init::~Init () at
<br>
../../.././libstdc++-v3/src/ios_init.cc:123
<br>
#6  0x00007fffc32c8cc8 in ?? ()
<br>
#7  0x00002b6ee9d20955 in orte_grpcomm_bad_get_proc_attr (proc=&lt;value
<br>
optimized out&gt;, attribute_name=0x2b6ee88e5780 &quot; \020322351n+&quot;,
<br>
val=0x2b6ee875ee92, size=0x7fffc32c8cd0) at grpcomm_bad_module.c:500
<br>
#8  0x00002b6ee86dd511 in ompi_modex_recv_key_value (key=&lt;value optimized
<br>
out&gt;, source_proc=&lt;value optimized out&gt;, value=0xbb3a00, dtype=14 '\016') at
<br>
runtime/ompi_module_exchange.c:125
<br>
#9  0x00002b6ee86d7ea1 in ompi_proc_set_arch () at proc/proc.c:154
<br>
#10 0x00002b6ee86db1b0 in ompi_mpi_init (argc=15, argv=0x7fffc32c92f8,
<br>
requested=&lt;value optimized out&gt;, provided=0x7fffc32c917c) at
<br>
runtime/ompi_mpi_init.c:699
<br>
#11 0x00007fffc32c8e88 in ?? ()
<br>
#12 0x00002b6ee77f8348 in ?? ()
<br>
#13 0x00007fffc32c8e60 in ?? ()
<br>
#14 0x00007fffc32c8e20 in ?? ()
<br>
#15 0x0000000009efa994 in ?? ()
<br>
#16 0x0000000000000000 in ?? ()
<br>
_______________________________________________
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
<li><strong>Next message:</strong> <a href="16732.php">Brock Palen: "[OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
<li><strong>Previous message:</strong> <a href="16730.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>In reply to:</strong> <a href="16729.php">Thorsten Schuett: "[OMPI users] Problems on large clusters"</a>
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
