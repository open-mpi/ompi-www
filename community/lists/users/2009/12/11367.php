<?
$subject_val = "[OMPI users] ompi-restart using different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 09:54:21 2009" -->
<!-- isoreceived="20091202145421" -->
<!-- sent="Wed, 02 Dec 2009 09:54:11 -0500" -->
<!-- isosent="20091202145411" -->
<!-- name="Jonathan Ferland" -->
<!-- email="jonathan.ferland_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-restart using different nodes" -->
<!-- id="4B167F93.1070409_at_rqchp.qc.ca" -->
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
<strong>Subject:</strong> [OMPI users] ompi-restart using different nodes<br>
<strong>From:</strong> Jonathan Ferland (<em>jonathan.ferland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 09:54:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11368.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11366.php">Joshua Hursey: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to use BLCR checkpointing in mpi. I am currently able to run 
<br>
my application using some hostfile, checkpoint the run, and then restart 
<br>
the application using the same hostfile. The thing I would like to do is 
<br>
to restart the application with a different hostfile. But this leads to 
<br>
a segfault using 1.3.3.
<br>
<p>Is it possible to restart the application using a different hostfile (we 
<br>
are using pbs to create the hostfile, so each new restart might be on 
<br>
different nodes), how can we do that? If no, do you plan to include this 
<br>
in a future release?
<br>
<p>thanks
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11368.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11366.php">Joshua Hursey: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
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
