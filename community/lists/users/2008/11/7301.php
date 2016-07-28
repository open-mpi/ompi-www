<?
$subject_val = "[OMPI users] Tight integration and interactive sessions with SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 19:35:02 2008" -->
<!-- isoreceived="20081113003502" -->
<!-- sent="Wed, 12 Nov 2008 16:34:47 -0800" -->
<!-- isosent="20081113003447" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="[OMPI users] Tight integration and interactive sessions with SGE" -->
<!-- id="491B7627.7020107_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Tight integration and interactive sessions with SGE<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 19:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Previous message:</strong> <a href="7300.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Reply:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been using OMPI 1.2.6 tightly integrated with Grid Engine for a bit 
<br>
now and it works great. However, I'm running into a problem running jobs 
<br>
from an interactive session (qlogin). I tried just doing &quot;mpirun -np N 
<br>
/path/to/binary&quot; where N &gt; # of cpus per node but OMPI will just 
<br>
oversubscribe the node.
<br>
<p>Also, I have an initialization script from the vendor that requires 
<br>
setting up local temporary directories. Prior to migration to OMPI we 
<br>
just parsed the machines file then went out to each node and created any 
<br>
necessary temp directories. Is there no way to get a list of machines 
<br>
with tight integration?
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Previous message:</strong> <a href="7300.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Reply:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
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
