<?
$subject_val = "[OMPI devel] orterun hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 01:29:09 2011" -->
<!-- isoreceived="20110406052909" -->
<!-- sent="Tue, 05 Apr 2011 22:28:52 -0700" -->
<!-- isosent="20110406052852" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] orterun hanging" -->
<!-- id="4D9BFA14.6040708_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] orterun hanging<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 01:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9160.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9158.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running into a hang that is very easy to reproduce.  Basically, 
<br>
something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun -H remote_node hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^C
<br>
<p>That is, I run a program (doesn't need to be MPI) on a remote node.  The 
<br>
program runs, but my local orterun doesn't return.  The problem seems to 
<br>
be correlated to the OS version (some very recent builds of Solaris) 
<br>
running on the remote node.
<br>
<p>The problem would seem to be in the OS, though arguably it could be a 
<br>
long-time OMPI problem that is being exposed by a change in the OS.  
<br>
Regardless, does anyone have suggestions where I should be looking?
<br>
<p>So far, it looks to me that the HNP orterun forks a child who launches 
<br>
an ssh process to start the remote orted.  Then, the remote orted 
<br>
daemonizes itself (forks a child and kills the parent, thereby detaching 
<br>
the daemon from the controlling terminal) and runs the user binary.  It 
<br>
seems to me that this daemonization is related to the problem.  
<br>
Specifically, if I use &quot;mpirun --debug-daemons&quot;, there is no 
<br>
daemonization and the hang does not occur.  Perhaps, with some recent OS 
<br>
changes, the daemonized process is no longer alerting the HNP orterun 
<br>
when it's done.
<br>
<p>Any suggestions where I should focus my efforts?  I'm working with v1.5.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9160.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9158.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
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
