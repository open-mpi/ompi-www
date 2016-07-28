<?
$subject_val = "[OMPI users] Failure handling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 11:26:20 2015" -->
<!-- isoreceived="20151109162620" -->
<!-- sent="Mon, 09 Nov 2015 17:26:15 +0100" -->
<!-- isosent="20151109162615" -->
<!-- name="Cristian RUIZ" -->
<!-- email="cristian.ruiz_at_[hidden]" -->
<!-- subject="[OMPI users] Failure handling" -->
<!-- id="5640C927.9070508_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI users] Failure handling<br>
<strong>From:</strong> Cristian RUIZ (<em>cristian.ruiz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-09 11:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28025.php">Saurabh T: "[OMPI users] Propagate current shell's environment"</a>
<li><strong>Previous message:</strong> <a href="28023.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I'm still observing abnormal behavior of 'mpirun' in the presence of 
<br>
failures. I performed some test using a 32 phsycial machines. I run a 
<br>
NAS benchmark using just one MPI processes per machine.
<br>
I inject faults by shut down the machines in two different ways:
<br>
<p>1) logging into the machine and executing the command '/sbin/reboot -f'
<br>
2) using IPMI, issuing a power off signal (This case the operating 
<br>
system is not notified).
<br>
<p>In the first case MPI detects that a node has failed:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12       0.56675679761525E-15    28.9649233484894
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13       0.56651271494109E-15    28.9683359248934
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14       0.56638402003961E-15    28.9703903960000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15       0.56504721524178E-15    28.9716336228371
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16       0.56697865007309E-15    28.9723898600855
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17       0.56191396245010E-15    28.9728522692225
<br>
Connection to 172.16.64.70 closed by remote host.
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
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
&nbsp;&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p><p>All processes belonging to the parallel application are killed, however 
<br>
the mpirun does not abort and it hangs, consuming 100% of CPU.
<br>
<p>In the second case, mpirun detects the fault:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14       0.56638402003961E-15    28.9703903960000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15       0.56504721524178E-15    28.9716336228371
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16       0.56697865007309E-15    28.9723898600855
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17       0.56191396245010E-15    28.9728522692225
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18       0.56418534102479E-15    28.9731364797775
<br>
[graphene-62][[13459,1],23][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[graphene-67][[13459,1],17][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[graphene-7][[13459,1],20][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
<p>However, the processes belonging to the parallel application are not 
<br>
killed and they start to consume 100 %CPU. The mpirun remains blocked.
<br>
<p><p>I attched in this mail the output of the ompi_info command.
<br>
Any Ideas for this behavior?
<br>
<p>Thank you
<br>
<p><p><p><p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28024/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28025.php">Saurabh T: "[OMPI users] Propagate current shell's environment"</a>
<li><strong>Previous message:</strong> <a href="28023.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
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
