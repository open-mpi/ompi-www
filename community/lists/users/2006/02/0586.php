<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  6 14:15:16 2006" -->
<!-- isoreceived="20060206191516" -->
<!-- sent="Mon, 06 Feb 2006 11:14:56 -0800" -->
<!-- isosent="20060206191456" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="[O-MPI users] mpirun sets umask to 0" -->
<!-- id="onek2g2tan.fsf_at_iris01.slac.stanford.edu" -->
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
<strong>From:</strong> Glenn Morris (<em>gmorris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-06 14:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0587.php">Xiaoning (David) Yang: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0585.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0601.php">Brian Barrett: "Re: [O-MPI users] mpirun sets umask to 0"</a>
<li><strong>Reply:</strong> <a href="0601.php">Brian Barrett: "Re: [O-MPI users] mpirun sets umask to 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun (v1.0.1) sets the umask to 0, and hence creates world-writable
<br>
output files. Interestingly, adding the -d option to mpirun makes this
<br>
problem go away. To reproduce:
<br>
<p>mpirun -np 1 --hostfile ./hostfile --mca pls_rsh_agent ssh ./a.out
<br>
<p>where a.out is compiled from:
<br>
<p>#include &lt;sys/types.h&gt;
<br>
#include &lt;sys/stat.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
int main ()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%.4o\n&quot;, umask( 022 ) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0587.php">Xiaoning (David) Yang: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0585.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0601.php">Brian Barrett: "Re: [O-MPI users] mpirun sets umask to 0"</a>
<li><strong>Reply:</strong> <a href="0601.php">Brian Barrett: "Re: [O-MPI users] mpirun sets umask to 0"</a>
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
