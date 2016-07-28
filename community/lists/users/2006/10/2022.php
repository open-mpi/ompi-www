<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 15:17:07 2006" -->
<!-- isoreceived="20061020191707" -->
<!-- sent="Fri, 20 Oct 2006 15:16:48 -0400" -->
<!-- isosent="20061020191648" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes" -->
<!-- id="A418CB3B-82BD-450D-A0B5-4580B96CA862_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="754FC8FE0A97A94B906344259F447D4A038BA66A_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2006-10-20 15:16:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2023.php">Jeff Squyres: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2021.php">Ralph H Castain: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2025.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This message is coming from torque:
<br>
<p>[15:15] 69-94-204-35:~/Desktop/torque-2.1.2 % grep -r &quot;out of space  
<br>
in buffer and cannot commit message&quot; *
<br>
src/lib/Libifl/tcp_dis.c:      DBPRT((&quot;%s: error!  out of space in  
<br>
buffer and cannot commit message (bufsize=%d, buflen=%d, ct=%d)\n&quot;,
<br>
<p>Are you able to use OSC mpiexec to launch over the same number of  
<br>
nodes, perchance?
<br>
<p><p>On Oct 20, 2006, at 12:23 PM, Ogden, Jeffry Brandon wrote:
<br>
<p><span class="quotelev1">&gt; We are having quite a bit of trouble reliably launching larger jobs
</span><br>
<span class="quotelev1">&gt; (1920 nodes, 1 ppn) with OMPI (1.1.2rc4 with gcc) at the moment.  The
</span><br>
<span class="quotelev1">&gt; launches usually either just hang or fail with output like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cbench numprocs: 1920
</span><br>
<span class="quotelev1">&gt; Cbench numnodes: 1921
</span><br>
<span class="quotelev1">&gt; Cbench ppn: 1
</span><br>
<span class="quotelev1">&gt; Cbench jobname: xhpl-1ppn-1920
</span><br>
<span class="quotelev1">&gt; Cbench joblaunchmethod: openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tcp_puts: error!  out of space in buffer and cannot commit message
</span><br>
<span class="quotelev1">&gt; (bufsize=262144, buflen=261801, ct=450)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cn1023:02832] pls:tm: start_procs returned error -1
</span><br>
<span class="quotelev1">&gt; [cn1023:02832] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at  
</span><br>
<span class="quotelev1">&gt; line
</span><br>
<span class="quotelev1">&gt; 186
</span><br>
<span class="quotelev1">&gt; [cn1023:02832] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at  
</span><br>
<span class="quotelev1">&gt; line
</span><br>
<span class="quotelev1">&gt; 490
</span><br>
<span class="quotelev1">&gt; [cn1023:02832] orterun: spawn failed with errno=-1
</span><br>
<span class="quotelev1">&gt; [dn622:00631] [0,0,43]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt; [dn583:00606] [0,0,7]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt; [dn584:00606] [0,0,8]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt; [dn585:00604] [0,0,9]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt; [dn591:00606] [0,0,15]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt; [dn592:00604] [0,0,16]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt; [dn582:00607] [0,0,6]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt; [dn588:00605] [0,0,12]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt; [dn590:00606] [0,0,14]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OMPI environment parameters we are using are:
</span><br>
<span class="quotelev1">&gt;  %env | grep OMPI
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_oob_tcp_include=eth0
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_oob_tcp_listen_mode=listen_thread
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_btl_openib_ib_timeout=18
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_oob_tcp_listen_thread_max_time=100
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_oob_tcp_listen_thread_max_queue=100
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_btl_tcp_if_include=eth0
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_btl_openib_ib_retry_count=15
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_btl_openib_ib_cq_size=65536
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_rmaps_base_schedule_policy=node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have full output with generated from the following OMPI params
</span><br>
<span class="quotelev1">&gt; attached:
</span><br>
<span class="quotelev1">&gt;  export OMPI_MCA_pls_tm_debug=1
</span><br>
<span class="quotelev1">&gt;  export OMPI_MCA_pls_tm_verbose=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are running Toruqe 2.1.2.  I'm mostly suspicious of the tcp_puts
</span><br>
<span class="quotelev1">&gt; error and the 262144 bufsize limit... Any ideas?  Thanks.
</span><br>
<span class="quotelev1">&gt; &lt;xhpl-1ppn-1920..o127407&gt;
</span><br>
<span class="quotelev1">&gt; &lt;xhpl-1ppn-1920..e127407&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
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
<li><strong>Next message:</strong> <a href="2023.php">Jeff Squyres: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2021.php">Ralph H Castain: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2025.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
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
