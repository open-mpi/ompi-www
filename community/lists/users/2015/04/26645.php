<?
$subject_val = "[OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 23:43:28 2015" -->
<!-- isoreceived="20150408034328" -->
<!-- sent="Tue, 7 Apr 2015 22:43:27 -0500" -->
<!-- isosent="20150408034327" -->
<!-- name="Alan Wild" -->
<!-- email="alan_at_[hidden]" -->
<!-- subject="[OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?" -->
<!-- id="CAATyho6FnaRFaBo-ZuJxLFgYvdVi31pPUPrx+Xpbg+E275NerA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?<br>
<strong>From:</strong> Alan Wild (<em>alan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 23:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Previous message:</strong> <a href="26644.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Reply:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Maybe reply:</strong> <a href="26666.php">Alan Wild: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Maybe reply:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know this isn't &quot;recommend&quot;, but a vendor recently gave me an executable
<br>
compiled openmpi-1.8.3 and I happened to have recently completed a build of
<br>
1.8.4 (but didn't have 1.8.3 sitting around and the vendor refuses to
<br>
provide his build).
<br>
<p>Since these releases are so close they should be ABI compatible so I
<br>
thought I would see what happens...
<br>
<p>[arwild1_at_hplcslsp2 ~]$ mpirun -n 2 -H localhost vendor_app_mpi
<br>
[hplcslsp2:11394] [[56032,0],0] tcp_peer_recv_connect_ack: received
<br>
different version from [[56032,1],0]: 1.8.3 instead of 1.8.4
<br>
[hplcslsp2:11394] [[56032,0],0] tcp_peer_recv_connect_ack: received
<br>
different version from [[56032,1],1]: 1.8.3 instead of 1.8.4
<br>
<p><p>and then everything hangs.  I can clearly see the output coming from
<br>
<p>./orte/mca/oob/tcp/oob_tcp_connection.c
<br>
<p><p>and where it returns
<br>
<p>return ORTE_ERR_CONNECTION_REFUSED;
<br>
<p><p><p>So it looks like I'm going to have to at least build 1.8.3, but is there
<br>
any way to work around this given we are dealing with builds that are that
<br>
close?  I'm really not interested in &quot;rolling back&quot; to 1.8.3 or providing
<br>
both releases on my system.
<br>
<p>(yes, &quot;right answer&quot; is to get the vendor to provide his build... long stoy)
<br>
<p>-Alan
<br>
<p><p><p><pre>
-- 
alan_at_[hidden] <a href="http://humbleville.blogspot.com">http://humbleville.blogspot.com</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Previous message:</strong> <a href="26644.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Reply:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Maybe reply:</strong> <a href="26666.php">Alan Wild: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Maybe reply:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
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
