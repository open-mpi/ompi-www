<?
$subject_val = "Re: [OMPI users] quadrics support?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 15:43:55 2009" -->
<!-- isoreceived="20090708194355" -->
<!-- sent="Wed, 8 Jul 2009 15:43:50 -0400" -->
<!-- isosent="20090708194350" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] quadrics support?" -->
<!-- id="e75d22a90907081243i1a0b5723k95d023334798f43a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1247081582.10413.17.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI users] quadrics support?<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-08 15:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9886.php">Rob Latham: "Re: [OMPI users] Parallel I/O Usage"</a>
<li><strong>Previous message:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9888.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9888.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 8, 2009 at 3:33 PM, Ashley Pittman&lt;ashley_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt; When i run tping i get:
</span><br>
<span class="quotelev2">&gt;&gt; ELAN_EXCEOPTIOn @ --: 6 (Initialization error)
</span><br>
<span class="quotelev2">&gt;&gt; elan_init: Can't get capability from environment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not using slurm or RMS at all, just trying to get openmpi to run
</span><br>
<span class="quotelev2">&gt;&gt; between two nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To attach to the elan a process has to have a &quot;capability&quot; which is a
</span><br>
<span class="quotelev1">&gt; kernel attribute describing the size (number of nodes/ranks) of the job,
</span><br>
<span class="quotelev1">&gt; without this you'll get errors like the one from tping.  The only way to
</span><br>
<span class="quotelev1">&gt; generate these capabilities is by using RMS, Slurm or I believe pdsh
</span><br>
<span class="quotelev1">&gt; which can generate one and push it into the kernel before calling fork()
</span><br>
<span class="quotelev1">&gt; to create the user application.
</span><br>
<p>I didn't realize it was an MPI type program, so I ran is using the
<br>
QSNet version of mpirun and OpenMPI.  The process does start and runs
<br>
through 0: and 2:, which i assume are packet sizes, but freezes at
<br>
that point.
<br>
<p>We have an existing XC cluster from HP, that we're trying to convert
<br>
from XC to standard RHEL5.3 w/ Slurm and OpenMPI.  All i want to be
<br>
able to do is load RHEL5 and the Quadrics NIC drivers, and run OpenMPI
<br>
jobs between these two nodes I yanked from the cluster before we
<br>
switch the whole thing over.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9886.php">Rob Latham: "Re: [OMPI users] Parallel I/O Usage"</a>
<li><strong>Previous message:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9888.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9888.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
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
