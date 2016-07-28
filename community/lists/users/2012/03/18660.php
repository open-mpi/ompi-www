<?
$subject_val = "[OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 00:47:32 2012" -->
<!-- isoreceived="20120302054732" -->
<!-- sent="Thu, 01 Mar 2012 23:47:26 -0600" -->
<!-- isosent="20120302054726" -->
<!-- name="Barnet Wagman" -->
<!-- email="bw_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;Connection to lifeline&amp;quot; with openmpi-1.4.5" -->
<!-- id="4F505EEE.3000806_at_norbl.com" -->
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
<strong>Subject:</strong> [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5<br>
<strong>From:</strong> Barnet Wagman (<em>bw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 00:47:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18661.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18659.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18678.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<li><strong>Reply:</strong> <a href="18678.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've run into a problem upgrading from 1.4.3 to 1.4.4 or 1.4.5
<br>
<p>With 1.4.4 and 1.4.5, I'm getting error messages like
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[[59597,1],0] routed:binomial: Connection to lifeline [[59597,0],0] lost
<br>
<p>The error does not occur if I restrict the host list to localhost.
<br>
<p>Basic tests like 'mpirun hello_c' work properly.  The problem occurs 
<br>
using the R package Rmpi package.  (I've tried the R mailing lists, but 
<br>
so far to no avail.) This R package does work reliably with openmpi 1.4.3.
<br>
<p>Could some one explain what an error message like this indicates? Is 
<br>
something timing out? Any idea what changed after 1.4.3 that might lead 
<br>
to this kind of problem?
<br>
<p>FYI I'm running ompi under Debian 6.0.4 (squeeze).
<br>
<p>thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18660/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18661.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18659.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18678.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<li><strong>Reply:</strong> <a href="18678.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
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
