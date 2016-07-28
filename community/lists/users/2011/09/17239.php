<?
$subject_val = "[OMPI users] mpiexec option for node failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 19:52:57 2011" -->
<!-- isoreceived="20110912235257" -->
<!-- sent="Tue, 13 Sep 2011 00:52:50 +0100" -->
<!-- isosent="20110912235250" -->
<!-- name="Rob Stewart" -->
<!-- email="robstewart57_at_[hidden]" -->
<!-- subject="[OMPI users] mpiexec option for node failure" -->
<!-- id="4E6E9B52.7050709_at_hw.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] mpiexec option for node failure<br>
<strong>From:</strong> Rob Stewart (<em>robstewart57_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 19:52:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17238.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have implemented a simple fault tolerant ping pong C program with MPI, 
<br>
here: <a href="http://pastebin.com/7mtmQH2q">http://pastebin.com/7mtmQH2q</a>
<br>
<p>MPICH2 offers a parameter with mpiexec:
<br>
$ mpiexec -disable-auto-cleanup
<br>
<p>.. as described here: <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/1421">http://trac.mcs.anl.gov/projects/mpich2/ticket/1421</a>
<br>
<p>It is fault tolerant in the respect that, when I ssh to one of the nodes 
<br>
in the hosts file, and kill the relevant process, the MPI job is not 
<br>
terminated. Simply, the ping will not prompt a pong from the dead node, 
<br>
but the ping-pong runs forever on the remaining live nodes.
<br>
<p>Is such an feature available for openMPI, either via mpiexec or some 
<br>
other means?
<br>
<p><p><pre>
-- 
Rob Stewart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17238.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
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
