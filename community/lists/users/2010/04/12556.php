<?
$subject_val = "[OMPI users] detect hung node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 13:03:38 2010" -->
<!-- isoreceived="20100406170338" -->
<!-- sent="Tue, 6 Apr 2010 11:03:32 -0600" -->
<!-- isosent="20100406170332" -->
<!-- name="Sam Preston" -->
<!-- email="jsam_at_[hidden]" -->
<!-- subject="[OMPI users] detect hung node" -->
<!-- id="v2sf9b550811004061003n851f7977r3cd7df89633038d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] detect hung node<br>
<strong>From:</strong> Sam Preston (<em>jsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 13:03:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12557.php">vaibhav dutt: "[OMPI users] MPI Literature Survey on Multicores"</a>
<li><strong>Previous message:</strong> <a href="12555.php">Jeff Squyres: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12571.php">Jeff Squyres: "Re: [OMPI users] detect hung node"</a>
<li><strong>Reply:</strong> <a href="12571.php">Jeff Squyres: "Re: [OMPI users] detect hung node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have a problem with the cluster I'm currently using where nodes
<br>
'hang' silently from time to time during an MPI call.  This causes the
<br>
blocked MPI processes to block indefinitely -- the only way to detect
<br>
an error is to notice that no more output is being written to the log
<br>
files.  We're trying to resolve the underlying cause of the nodes
<br>
hanging, but in the mean time, is there a way to set a timeout or
<br>
something similar to detect this situation?  Sorry if this has been
<br>
addressed before, I searched the FAQ and archives and didn't come up
<br>
with anything.
<br>
<p>Thanks,
<br>
-Sam
<br>
<p><pre>
-- 
--------------------
J. Samuel Preston
Research Assistant
Scientific Computing and Imaging Institute
University of Utah
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12557.php">vaibhav dutt: "[OMPI users] MPI Literature Survey on Multicores"</a>
<li><strong>Previous message:</strong> <a href="12555.php">Jeff Squyres: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12571.php">Jeff Squyres: "Re: [OMPI users] detect hung node"</a>
<li><strong>Reply:</strong> <a href="12571.php">Jeff Squyres: "Re: [OMPI users] detect hung node"</a>
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
