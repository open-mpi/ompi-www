<?
$subject_val = "[OMPI users] Failure detection";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  7 09:41:20 2015" -->
<!-- isoreceived="20151107144120" -->
<!-- sent="Sat, 07 Nov 2015 15:41:15 +0100" -->
<!-- isosent="20151107144115" -->
<!-- name="Cristian RUIZ" -->
<!-- email="cristian.ruiz_at_[hidden]" -->
<!-- subject="[OMPI users] Failure detection" -->
<!-- id="563E0D8B.9070500_at_inria.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Failure detection<br>
<strong>From:</strong> Cristian RUIZ (<em>cristian.ruiz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-07 09:41:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
<li><strong>Previous message:</strong> <a href="28019.php">Jeff Hammond: "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
<li><strong>Reply:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I was studying how OpenMPI reacts to failures. I have a virtual 
<br>
infrastructure where failures can be emulated by turning off a given VM.
<br>
Depending on the way the VM is turned off the 'mpirun' will be notified,
<br>
either because it receives a signal or because  some timeout is reached.
<br>
In both cases failures are detected after some minutes. I did some test
<br>
with the NAS benchmarks and I got the following output:
<br>
<p>[node-5][[12114,1],5][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
<br>
[node-4][[12114,1],4][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
<br>
<p>Then, after some minutes I got another message like this:
<br>
<p>ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp 
<br>
(--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;&nbsp;Please check with your sys admin to determine the correct location to 
<br>
use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
<p>However the 'mpirun' does not terminate (after a least 30 minutes). The 
<br>
execution is blocked even though a failure is detected. Is this a normal 
<br>
behavior of &quot;mpirun&quot;?
<br>
<p>OpenMPI version:
<br>
<p>root_at_node-0:~# mpirun --version
<br>
mpirun (Open MPI) 1.8.5
<br>
<p><p>I appreciate your help
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
<li><strong>Previous message:</strong> <a href="28019.php">Jeff Hammond: "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
<li><strong>Reply:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
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
