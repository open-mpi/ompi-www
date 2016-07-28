<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 12:23:33 2006" -->
<!-- isoreceived="20061020162333" -->
<!-- sent="Fri, 20 Oct 2006 10:23:13 -0600" -->
<!-- isosent="20061020162313" -->
<!-- name="Ogden, Jeffry Brandon" -->
<!-- email="jbogden_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI launching problem using TM and openib on 1920 nodes" -->
<!-- id="754FC8FE0A97A94B906344259F447D4A038BA66A_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ogden, Jeffry Brandon (<em>jbogden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-20 12:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2020.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="2018.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2022.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Reply:</strong> <a href="2022.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Maybe reply:</strong> <a href="2025.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Maybe reply:</strong> <a href="2027.php">Maestas, Christopher Daniel: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are having quite a bit of trouble reliably launching larger jobs
<br>
(1920 nodes, 1 ppn) with OMPI (1.1.2rc4 with gcc) at the moment.  The
<br>
launches usually either just hang or fail with output like:
<br>
<p>Cbench numprocs: 1920
<br>
Cbench numnodes: 1921
<br>
Cbench ppn: 1
<br>
Cbench jobname: xhpl-1ppn-1920
<br>
Cbench joblaunchmethod: openmpi
<br>
<p>tcp_puts: error!  out of space in buffer and cannot commit message
<br>
(bufsize=262144, buflen=261801, ct=450)
<br>
<p>[cn1023:02832] pls:tm: start_procs returned error -1
<br>
[cn1023:02832] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at line
<br>
186
<br>
[cn1023:02832] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at line
<br>
490
<br>
[cn1023:02832] orterun: spawn failed with errno=-1
<br>
[dn622:00631] [0,0,43]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
<br>
errno=104
<br>
[dn583:00606] [0,0,7]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
<br>
errno=104
<br>
[dn584:00606] [0,0,8]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
<br>
errno=104
<br>
[dn585:00604] [0,0,9]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
<br>
errno=104
<br>
[dn591:00606] [0,0,15]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
<br>
errno=104
<br>
[dn592:00604] [0,0,16]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
<br>
errno=104
<br>
[dn582:00607] [0,0,6]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
<br>
errno=104
<br>
[dn588:00605] [0,0,12]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
<br>
errno=104
<br>
[dn590:00606] [0,0,14]-[0,0,0] mca_oob_tcp_msg_recv: readv failed with
<br>
errno=104
<br>
<p>The OMPI environment parameters we are using are:
<br>
&nbsp;%env | grep OMPI
<br>
&nbsp;OMPI_MCA_oob_tcp_include=eth0
<br>
&nbsp;OMPI_MCA_oob_tcp_listen_mode=listen_thread
<br>
&nbsp;OMPI_MCA_btl_openib_ib_timeout=18
<br>
&nbsp;OMPI_MCA_oob_tcp_listen_thread_max_time=100
<br>
&nbsp;OMPI_MCA_oob_tcp_listen_thread_max_queue=100
<br>
&nbsp;OMPI_MCA_btl_tcp_if_include=eth0
<br>
&nbsp;OMPI_MCA_btl_openib_ib_retry_count=15
<br>
&nbsp;OMPI_MCA_btl_openib_ib_cq_size=65536
<br>
&nbsp;OMPI_MCA_rmaps_base_schedule_policy=node
<br>
<p>I have full output with generated from the following OMPI params
<br>
attached:
<br>
&nbsp;export OMPI_MCA_pls_tm_debug=1
<br>
&nbsp;export OMPI_MCA_pls_tm_verbose=1
<br>
<p>We are running Toruqe 2.1.2.  I'm mostly suspicious of the tcp_puts
<br>
error and the 262144 bufsize limit... Any ideas?  Thanks.
<br>
<p>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2019/xhpl-1ppn-1920..o127407">xhpl-1ppn-1920..o127407</a>
</ul>
<!-- attachment="xhpl-1ppn-1920..o127407" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2019/xhpl-1ppn-1920..e127407">xhpl-1ppn-1920..e127407</a>
</ul>
<!-- attachment="xhpl-1ppn-1920..e127407" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2020.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="2018.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2022.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Reply:</strong> <a href="2022.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Maybe reply:</strong> <a href="2025.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Maybe reply:</strong> <a href="2027.php">Maestas, Christopher Daniel: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
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
