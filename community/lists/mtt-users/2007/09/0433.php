<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 22:47:02 2007" -->
<!-- isoreceived="20070928024702" -->
<!-- sent="Thu, 27 Sep 2007 22:46:55 -0400 (EDT)" -->
<!-- isosent="20070928024655" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="[MTT users] Problems running MTT with already installed MPICH-MX" -->
<!-- id="Pine.LNX.4.62.0709272242550.10138_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0709201308260.25870_at_reliant.cs.utk.edu" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 22:46:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0434.php">Ethan Mallove: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Previous message:</strong> <a href="0432.php">Ethan Mallove: "[MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>In reply to:</strong> <a href="0420.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0434.php">Ethan Mallove: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Reply:</strong> <a href="0434.php">Ethan Mallove: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Maybe reply:</strong> <a href="0438.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed MPICH-MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to test the MPICH-MX using MTT on our clusters and I am 
<br>
hitting the wall.
<br>
I was able to get Open MPI to run (did not try trunk yet - but nightly 
<br>
builds worked).
<br>
<p>The problem is that all phases seem to go through (including Test RUN and 
<br>
Reported) but nothing happens.
<br>
I have attached the stripped down ini file (only with mpich-mx stuff)
<br>
and output of the command
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./client/mtt --scratch /home/pjesa/mtt/scratch2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--file /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_mpich-mx.ini \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--debug --verbose --print-time --no-section 'skampi imb osu'
<br>
<p>I think that it must be something stupid because the almost same script 
<br>
which downloads nightly open mpi build works.
<br>
<p>Thanks!
<br>
Jelena
<br>
&nbsp;&nbsp;--
<br>
Jelena Pjesivac-Grbovic -- Pjesa, Ph.D.
<br>
Graduate Research Assistant
<br>
Innovative Computing Laboratory
<br>
Computer Science Department, UTK
<br>
Claxton Complex 350
<br>
(865) 974 - 6722 
<br>
(865) 974 - 6321
<br>
jpjesiva_at_[hidden]
<br>
<p>&quot;The only difference between a problem and a solution is that
<br>
&nbsp;&nbsp;people understand the solution.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Charles Kettering
<br>
<p>

<br><hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0433/ompi-core-perf-testing_mpich-mx.ini">simplified ini file</a>
</ul>
<!-- attachment="ompi-core-perf-testing_mpich-mx.ini" -->
<hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0433/output">output of the MTT command</a>
</ul>
<!-- attachment="output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0434.php">Ethan Mallove: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Previous message:</strong> <a href="0432.php">Ethan Mallove: "[MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>In reply to:</strong> <a href="0420.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0434.php">Ethan Mallove: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Reply:</strong> <a href="0434.php">Ethan Mallove: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Maybe reply:</strong> <a href="0438.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed MPICH-MX"</a>
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
