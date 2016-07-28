<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 18:00:41 2006" -->
<!-- isoreceived="20061020220041" -->
<!-- sent="Fri, 20 Oct 2006 16:00:30 -0600" -->
<!-- isosent="20061020220030" -->
<!-- name="Ogden, Jeffry Brandon" -->
<!-- email="jbogden_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes" -->
<!-- id="754FC8FE0A97A94B906344259F447D4A038BA66E_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ogden, Jeffry Brandon (<em>jbogden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-20 18:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2026.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Previous message:</strong> <a href="2024.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2026.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Reply:</strong> <a href="2026.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't actually have the capability to test the mpiexec + MVAPICH
<br>
launch at the moment. I was able to get a job to launch at 1920 and I'm
<br>
waiting for it to finish. When it is done, I can at least try an mpiexec
<br>
-comm=none launch to see how TM responds to it.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: owner-tbird-admin_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:owner-tbird-admin_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Friday, October 20, 2006 1:17 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: tbird-admin
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI launching problem using TM and 
</span><br>
<span class="quotelev1">&gt; openib on 1920 nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This message is coming from torque:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [15:15] 69-94-204-35:~/Desktop/torque-2.1.2 % grep -r &quot;out of space  
</span><br>
<span class="quotelev1">&gt; in buffer and cannot commit message&quot; *
</span><br>
<span class="quotelev1">&gt; src/lib/Libifl/tcp_dis.c:      DBPRT((&quot;%s: error!  out of space in  
</span><br>
<span class="quotelev1">&gt; buffer and cannot commit message (bufsize=%d, buflen=%d, ct=%d)\n&quot;,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you able to use OSC mpiexec to launch over the same number of  
</span><br>
<span class="quotelev1">&gt; nodes, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 20, 2006, at 12:23 PM, Ogden, Jeffry Brandon wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We are having quite a bit of trouble reliably launching larger jobs
</span><br>
<span class="quotelev2">&gt; &gt; (1920 nodes, 1 ppn) with OMPI (1.1.2rc4 with gcc) at the 
</span><br>
<span class="quotelev1">&gt; moment.  The
</span><br>
<span class="quotelev2">&gt; &gt; launches usually either just hang or fail with output like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cbench numprocs: 1920
</span><br>
<span class="quotelev2">&gt; &gt; Cbench numnodes: 1921
</span><br>
<span class="quotelev2">&gt; &gt; Cbench ppn: 1
</span><br>
<span class="quotelev2">&gt; &gt; Cbench jobname: xhpl-1ppn-1920
</span><br>
<span class="quotelev2">&gt; &gt; Cbench joblaunchmethod: openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tcp_puts: error!  out of space in buffer and cannot commit message
</span><br>
<span class="quotelev2">&gt; &gt; (bufsize=262144, buflen=261801, ct=450)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [cn1023:02832] pls:tm: start_procs returned error -1
</span><br>
<span class="quotelev2">&gt; &gt; [cn1023:02832] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at  
</span><br>
<span class="quotelev2">&gt; &gt; line
</span><br>
<span class="quotelev2">&gt; &gt; 186
</span><br>
<span class="quotelev2">&gt; &gt; [cn1023:02832] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at  
</span><br>
<span class="quotelev2">&gt; &gt; line
</span><br>
<span class="quotelev2">&gt; &gt; 490
</span><br>
<span class="quotelev2">&gt; &gt; [cn1023:02832] orterun: spawn failed with errno=-1
</span><br>
<span class="quotelev2">&gt; &gt; [dn622:00631] [0,0,43]-[0,0,0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; errno=104
</span><br>
<span class="quotelev2">&gt; &gt; [dn583:00606] [0,0,7]-[0,0,0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; errno=104
</span><br>
<span class="quotelev2">&gt; &gt; [dn584:00606] [0,0,8]-[0,0,0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; errno=104
</span><br>
<span class="quotelev2">&gt; &gt; [dn585:00604] [0,0,9]-[0,0,0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; errno=104
</span><br>
<span class="quotelev2">&gt; &gt; [dn591:00606] [0,0,15]-[0,0,0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; errno=104
</span><br>
<span class="quotelev2">&gt; &gt; [dn592:00604] [0,0,16]-[0,0,0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; errno=104
</span><br>
<span class="quotelev2">&gt; &gt; [dn582:00607] [0,0,6]-[0,0,0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; errno=104
</span><br>
<span class="quotelev2">&gt; &gt; [dn588:00605] [0,0,12]-[0,0,0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; errno=104
</span><br>
<span class="quotelev2">&gt; &gt; [dn590:00606] [0,0,14]-[0,0,0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; errno=104
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The OMPI environment parameters we are using are:
</span><br>
<span class="quotelev2">&gt; &gt;  %env | grep OMPI
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_MCA_oob_tcp_include=eth0
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_MCA_oob_tcp_listen_mode=listen_thread
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_MCA_btl_openib_ib_timeout=18
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_MCA_oob_tcp_listen_thread_max_time=100
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_MCA_oob_tcp_listen_thread_max_queue=100
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_MCA_btl_tcp_if_include=eth0
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_MCA_btl_openib_ib_retry_count=15
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_MCA_btl_openib_ib_cq_size=65536
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_MCA_rmaps_base_schedule_policy=node
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have full output with generated from the following OMPI params
</span><br>
<span class="quotelev2">&gt; &gt; attached:
</span><br>
<span class="quotelev2">&gt; &gt;  export OMPI_MCA_pls_tm_debug=1
</span><br>
<span class="quotelev2">&gt; &gt;  export OMPI_MCA_pls_tm_verbose=1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We are running Toruqe 2.1.2.  I'm mostly suspicious of the tcp_puts
</span><br>
<span class="quotelev2">&gt; &gt; error and the 262144 bufsize limit... Any ideas?  Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; &lt;xhpl-1ppn-1920..o127407&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;xhpl-1ppn-1920..e127407&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2026.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Previous message:</strong> <a href="2024.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2026.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Reply:</strong> <a href="2026.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
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
