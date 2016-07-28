<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 21 09:52:44 2006" -->
<!-- isoreceived="20061021135244" -->
<!-- sent="Sat, 21 Oct 2006 09:52:35 -0400" -->
<!-- isosent="20061021135235" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes" -->
<!-- id="38CF6CE1-CE4D-4BAC-905A-9685E4B07178_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="754FC8FE0A97A94B906344259F447D4A038BA66E_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-21 09:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2027.php">Maestas, Christopher Daniel: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Previous message:</strong> <a href="2025.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>In reply to:</strong> <a href="2025.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2027.php">Maestas, Christopher Daniel: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For those following this thread: there was off-list discussion about  
<br>
this topic -- re-starting the Torque daemons *seemed* to fix the  
<br>
problem.
<br>
<p><p>On Oct 20, 2006, at 6:00 PM, Ogden, Jeffry Brandon wrote:
<br>
<p><span class="quotelev1">&gt; We don't actually have the capability to test the mpiexec + MVAPICH
</span><br>
<span class="quotelev1">&gt; launch at the moment. I was able to get a job to launch at 1920 and  
</span><br>
<span class="quotelev1">&gt; I'm
</span><br>
<span class="quotelev1">&gt; waiting for it to finish. When it is done, I can at least try an  
</span><br>
<span class="quotelev1">&gt; mpiexec
</span><br>
<span class="quotelev1">&gt; -comm=none launch to see how TM responds to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: owner-tbird-admin_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:owner-tbird-admin_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, October 20, 2006 1:17 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: tbird-admin
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI launching problem using TM and
</span><br>
<span class="quotelev2">&gt;&gt; openib on 1920 nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This message is coming from torque:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [15:15] 69-94-204-35:~/Desktop/torque-2.1.2 % grep -r &quot;out of space
</span><br>
<span class="quotelev2">&gt;&gt; in buffer and cannot commit message&quot; *
</span><br>
<span class="quotelev2">&gt;&gt; src/lib/Libifl/tcp_dis.c:      DBPRT((&quot;%s: error!  out of space in
</span><br>
<span class="quotelev2">&gt;&gt; buffer and cannot commit message (bufsize=%d, buflen=%d, ct=%d)\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you able to use OSC mpiexec to launch over the same number of
</span><br>
<span class="quotelev2">&gt;&gt; nodes, perchance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 20, 2006, at 12:23 PM, Ogden, Jeffry Brandon wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are having quite a bit of trouble reliably launching larger jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1920 nodes, 1 ppn) with OMPI (1.1.2rc4 with gcc) at the
</span><br>
<span class="quotelev2">&gt;&gt; moment.  The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launches usually either just hang or fail with output like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cbench numprocs: 1920
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cbench numnodes: 1921
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cbench ppn: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cbench jobname: xhpl-1ppn-1920
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cbench joblaunchmethod: openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tcp_puts: error!  out of space in buffer and cannot commit message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (bufsize=262144, buflen=261801, ct=450)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cn1023:02832] pls:tm: start_procs returned error -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cn1023:02832] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 186
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cn1023:02832] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 490
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cn1023:02832] orterun: spawn failed with errno=-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dn622:00631] [0,0,43]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dn583:00606] [0,0,7]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dn584:00606] [0,0,8]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dn585:00604] [0,0,9]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dn591:00606] [0,0,15]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dn592:00604] [0,0,16]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dn582:00607] [0,0,6]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dn588:00605] [0,0,12]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dn590:00606] [0,0,14]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The OMPI environment parameters we are using are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  %env | grep OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_MCA_oob_tcp_include=eth0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_MCA_oob_tcp_listen_mode=listen_thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_MCA_btl_openib_ib_timeout=18
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_MCA_oob_tcp_listen_thread_max_time=100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_MCA_oob_tcp_listen_thread_max_queue=100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_MCA_btl_tcp_if_include=eth0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_MCA_btl_openib_ib_retry_count=15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_MCA_btl_openib_ib_cq_size=65536
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_MCA_rmaps_base_schedule_policy=node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have full output with generated from the following OMPI params
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  export OMPI_MCA_pls_tm_debug=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  export OMPI_MCA_pls_tm_verbose=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are running Toruqe 2.1.2.  I'm mostly suspicious of the tcp_puts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error and the 262144 bufsize limit... Any ideas?  Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;xhpl-1ppn-1920..o127407&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;xhpl-1ppn-1920..e127407&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2027.php">Maestas, Christopher Daniel: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Previous message:</strong> <a href="2025.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>In reply to:</strong> <a href="2025.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2027.php">Maestas, Christopher Daniel: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
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
