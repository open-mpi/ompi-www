<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 21 10:35:49 2006" -->
<!-- isoreceived="20061021143549" -->
<!-- sent="Sat, 21 Oct 2006 08:35:31 -0600" -->
<!-- isosent="20061021143531" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F6022_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OMPI launching problem using TM and openib on 1920 nodes" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-21 10:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2028.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding&quot;"</a>
<li><strong>Previous message:</strong> <a href="2026.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some more background information:
<br>
1) the environment is all run inside an initrd with a static pbs_mom.
<br>
2) the file we change in the torque distributions is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;torque-2.1.2/src/include/dis.h
<br>
<pre>
---
255 /* NOTE:  increase THE_BUF_SIZE to 131072 for systems &gt; 5k nodes */
256 
257 /* OLD: #define THE_BUF_SIZE 262144 max size of tcp send buffer
(must be big enough to contain all job attributes) */
258 #define THE_BUF_SIZE 1048576 /* max size of tcp send buffer (must be
big enough to contain all job attributes) */ 
---
Originally it was set to 262144, but we've increased it.  We believe
that:
1) somewhere here:
	torque-2.1.2/src/lib/Libifl/tcp_dis.c
In the tcp_puts function that some buffer may not be getting flushed
correctly, and the pbs_mom restart is fixing it.
We've run 8k mpi processes using a dynamically linked pbs_mom
# ldd /apps/torque/sbin/pbs_mom
        libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a9566c000)
        libtorque.so.0 =&gt; /apps/torque-2.1.2/lib/libtorque.so.0
(0x0000002a95770000)
        libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000002a958c0000)
        /lib64/ld-linux-x86-64.so.2 (0x0000002a95556000)
2) or the ash shell not able to set the following limits properly (less
likely):
$ ulimit -u 65536
-sh: ulimit: Illegal option -u
$ ulimit -i 4096
-sh: ulimit: Illegal option -I
Could be the issue.  We've tried varying sysctl settings and have not
seen improvements:
---
$ sysctl -a | grep 262144
net.ipv4.tcp_mem = 196608       262144  393216
net.ipv4.ipfrag_high_thresh = 262144
net.core.rmem_default = 262144
net.core.wmem_default = 262144
---
-----Original Message-----
From: owner-tbird-admin_at_[hidden] [mailto:owner-tbird-admin_at_[hidden]]
On Behalf Of Jeff Squyres
Sent: Saturday, October 21, 2006 7:53 AM
To: Ogden, Jeffry Brandon
Cc: Open MPI Users; tbird-admin
Subject: Re: [OMPI users] OMPI launching problem using TM and openib on
1920 nodes
For those following this thread: there was off-list discussion about
this topic -- re-starting the Torque daemons *seemed* to fix the
problem.
On Oct 20, 2006, at 6:00 PM, Ogden, Jeffry Brandon wrote:
&gt; We don't actually have the capability to test the mpiexec + MVAPICH 
&gt; launch at the moment. I was able to get a job to launch at 1920 and 
&gt; I'm waiting for it to finish. When it is done, I can at least try an 
&gt; mpiexec -comm=none launch to see how TM responds to it.
&gt;
&gt;&gt; -----Original Message-----
&gt;&gt; From: owner-tbird-admin_at_[hidden]
&gt;&gt; [mailto:owner-tbird-admin_at_[hidden]] On Behalf Of Jeff Squyres
&gt;&gt; Sent: Friday, October 20, 2006 1:17 PM
&gt;&gt; To: Open MPI Users
&gt;&gt; Cc: tbird-admin
&gt;&gt; Subject: Re: [OMPI users] OMPI launching problem using TM and openib 
&gt;&gt; on 1920 nodes
&gt;&gt;
&gt;&gt; This message is coming from torque:
&gt;&gt;
&gt;&gt; [15:15] 69-94-204-35:~/Desktop/torque-2.1.2 % grep -r &quot;out of space 
&gt;&gt; in buffer and cannot commit message&quot; *
&gt;&gt; src/lib/Libifl/tcp_dis.c:      DBPRT((&quot;%s: error!  out of space in
&gt;&gt; buffer and cannot commit message (bufsize=%d, buflen=%d, ct=%d)\n&quot;,
&gt;&gt;
&gt;&gt; Are you able to use OSC mpiexec to launch over the same number of 
&gt;&gt; nodes, perchance?
&gt;&gt;
&gt;&gt;
&gt;&gt; On Oct 20, 2006, at 12:23 PM, Ogden, Jeffry Brandon wrote:
&gt;&gt;
&gt;&gt;&gt; We are having quite a bit of trouble reliably launching larger jobs 
&gt;&gt;&gt; (1920 nodes, 1 ppn) with OMPI (1.1.2rc4 with gcc) at the
&gt;&gt; moment.  The
&gt;&gt;&gt; launches usually either just hang or fail with output like:
&gt;&gt;&gt;
&gt;&gt;&gt; Cbench numprocs: 1920
&gt;&gt;&gt; Cbench numnodes: 1921
&gt;&gt;&gt; Cbench ppn: 1
&gt;&gt;&gt; Cbench jobname: xhpl-1ppn-1920
&gt;&gt;&gt; Cbench joblaunchmethod: openmpi
&gt;&gt;&gt;
&gt;&gt;&gt; tcp_puts: error!  out of space in buffer and cannot commit message 
&gt;&gt;&gt; (bufsize=262144, buflen=261801, ct=450)
&gt;&gt;&gt;
&gt;&gt;&gt; [cn1023:02832] pls:tm: start_procs returned error -1 [cn1023:02832] 
&gt;&gt;&gt; [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at line
&gt;&gt;&gt; 186
&gt;&gt;&gt; [cn1023:02832] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at 
&gt;&gt;&gt; line 490 [cn1023:02832] orterun: spawn failed with errno=-1 
&gt;&gt;&gt; [dn622:00631] [0,0,43]-[0,0,0] mca_oob_tcp_msg_recv: readv
&gt;&gt; failed with
&gt;&gt;&gt; errno=104
&gt;&gt;&gt; [dn583:00606] [0,0,7]-[0,0,0] mca_oob_tcp_msg_recv: readv
&gt;&gt; failed with
&gt;&gt;&gt; errno=104
&gt;&gt;&gt; [dn584:00606] [0,0,8]-[0,0,0] mca_oob_tcp_msg_recv: readv
&gt;&gt; failed with
&gt;&gt;&gt; errno=104
&gt;&gt;&gt; [dn585:00604] [0,0,9]-[0,0,0] mca_oob_tcp_msg_recv: readv
&gt;&gt; failed with
&gt;&gt;&gt; errno=104
&gt;&gt;&gt; [dn591:00606] [0,0,15]-[0,0,0] mca_oob_tcp_msg_recv: readv
&gt;&gt; failed with
&gt;&gt;&gt; errno=104
&gt;&gt;&gt; [dn592:00604] [0,0,16]-[0,0,0] mca_oob_tcp_msg_recv: readv
&gt;&gt; failed with
&gt;&gt;&gt; errno=104
&gt;&gt;&gt; [dn582:00607] [0,0,6]-[0,0,0] mca_oob_tcp_msg_recv: readv
&gt;&gt; failed with
&gt;&gt;&gt; errno=104
&gt;&gt;&gt; [dn588:00605] [0,0,12]-[0,0,0] mca_oob_tcp_msg_recv: readv
&gt;&gt; failed with
&gt;&gt;&gt; errno=104
&gt;&gt;&gt; [dn590:00606] [0,0,14]-[0,0,0] mca_oob_tcp_msg_recv: readv
&gt;&gt; failed with
&gt;&gt;&gt; errno=104
&gt;&gt;&gt;
&gt;&gt;&gt; The OMPI environment parameters we are using are:
&gt;&gt;&gt;  %env | grep OMPI
&gt;&gt;&gt;  OMPI_MCA_oob_tcp_include=eth0
&gt;&gt;&gt;  OMPI_MCA_oob_tcp_listen_mode=listen_thread
&gt;&gt;&gt;  OMPI_MCA_btl_openib_ib_timeout=18
&gt;&gt;&gt;  OMPI_MCA_oob_tcp_listen_thread_max_time=100
&gt;&gt;&gt;  OMPI_MCA_oob_tcp_listen_thread_max_queue=100
&gt;&gt;&gt;  OMPI_MCA_btl_tcp_if_include=eth0
&gt;&gt;&gt;  OMPI_MCA_btl_openib_ib_retry_count=15
&gt;&gt;&gt;  OMPI_MCA_btl_openib_ib_cq_size=65536
&gt;&gt;&gt;  OMPI_MCA_rmaps_base_schedule_policy=node
&gt;&gt;&gt;
&gt;&gt;&gt; I have full output with generated from the following OMPI params
&gt;&gt;&gt; attached:
&gt;&gt;&gt;  export OMPI_MCA_pls_tm_debug=1
&gt;&gt;&gt;  export OMPI_MCA_pls_tm_verbose=1
&gt;&gt;&gt;
&gt;&gt;&gt; We are running Toruqe 2.1.2.  I'm mostly suspicious of the tcp_puts 
&gt;&gt;&gt; error and the 262144 bufsize limit... Any ideas?  Thanks.
&gt;&gt;&gt; &lt;xhpl-1ppn-1920..o127407&gt;
&gt;&gt;&gt; &lt;xhpl-1ppn-1920..e127407&gt;
&gt;&gt;&gt; &lt;mime-attachment.txt&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; Jeff Squyres
&gt;&gt; Server Virtualization Business Unit
&gt;&gt; Cisco Systems
&gt;&gt;
&gt;&gt;
&gt;&gt; -------------------
&gt;&gt;
&gt;&gt;
--
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
-------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2028.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding&quot;"</a>
<li><strong>Previous message:</strong> <a href="2026.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
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
