<?
$subject_val = "Re: [OMPI users] Test works with 3 computers, but not 4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 16:23:01 2009" -->
<!-- isoreceived="20090729202301" -->
<!-- sent="Wed, 29 Jul 2009 13:22:45 -0700" -->
<!-- isosent="20090729202245" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test works with 3 computers, but not 4?" -->
<!-- id="20090729202245.GA4969_at_tosh2egg.ca.sanfran.comcast.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F3427867-7830-48E4-893F-34E01BC856B1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test works with 3 computers, but not 4?<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 16:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 29, 2009 at 01:42:39PM -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It sounds like perhaps IOF messages aren't getting relayed along the  
</span><br>
<span class="quotelev1">&gt; daemons. Note that the daemon on each node does have to be able to send 
</span><br>
<span class="quotelev1">&gt; TCP messages to all other nodes, not just mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Couple of things you can do to check:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. -mca routed direct - this will send all messages direct instead of  
</span><br>
<span class="quotelev1">&gt; across the daemons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. --leave-session-attached - will allow you to see any errors reported 
</span><br>
<span class="quotelev1">&gt; by the daemons, including those from attempting to relay messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 29, 2009, at 1:19 PM, David Doria wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wrote a simple program to display &quot;hello world&quot; from each process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run this (126 - my machine, 122, and 123), everything works  
</span><br>
.....
<br>
<span class="quotelev2">&gt;&gt; However, when I run this (126 - my machine, 122, 123, AND 125), I get 
</span><br>
<span class="quotelev2">&gt;&gt; no output at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to check what is going on / does anyone know what  
</span><br>
<p>All of the above good stuff and:
<br>
<p>Since the set of hosts all work in most of the possible permutations for
<br>
the case of three but not four it is possible that your simple program
<br>
has an issue in the way it exit(s).
<br>
<p>Please post your simple program.....  I am looking for the omission of
<br>
MPI_Finalize() or a funny return/exit status.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-2.0/node32.htm">http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-2.0/node32.htm</a>
<br>
<p>Also, Try adding a sleep(1) after the printf(...---&quot;hello world&quot;...)
<br>
and/ or after MPI_Finalize() on the chance that there is a race on exit.
<br>
<p>Try the &quot;hello world&quot; example in the source package for Open MPI or at: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.dartmouth.edu/~rc/classes/intro_mpi/hello_world_ex.html">http://www.dartmouth.edu/~rc/classes/intro_mpi/hello_world_ex.html</a>
<br>
<p>You can also add gethostbyname() or environment variable checks etc
<br>
to make sure that each host is involved as you expect in contrast to
<br>
nearly anonymous rank number.   Also double check to see which mpirun
<br>
you are using.  i.e alternatives on your system may be &quot;interesting&quot;
<br>
since various versions of MPI are naturally in some distros $PATH/$path
<br>
may be important.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ file /usr/bin/mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/mpirun: symbolic link to `/etc/alternatives/mpi-run'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ locate bin/mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/mpirun.py
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ rpm -qf /usr/bin/mpirun.py
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpich2-1.1-1.fc10.x86_64
<br>
<p><p><p><p><p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
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
