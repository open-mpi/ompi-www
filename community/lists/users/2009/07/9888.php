<?
$subject_val = "Re: [OMPI users] quadrics support?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 20:40:03 2009" -->
<!-- isoreceived="20090709004003" -->
<!-- sent="Thu, 09 Jul 2009 01:40:10 +0100" -->
<!-- isosent="20090709004010" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] quadrics support?" -->
<!-- id="1247100010.10413.308.camel_at_alpha" -->
<!-- inreplyto="e75d22a90907081243i1a0b5723k95d023334798f43a_at_mail.gmail.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-08 20:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9887.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>In reply to:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9881.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-07-08 at 15:43 -0400, Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; On Wed, Jul 8, 2009 at 3:33 PM, Ashley Pittman&lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When i run tping i get:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ELAN_EXCEOPTIOn @ --: 6 (Initialization error)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; elan_init: Can't get capability from environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am not using slurm or RMS at all, just trying to get openmpi to run
</span><br>
<span class="quotelev3">&gt; &gt;&gt; between two nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To attach to the elan a process has to have a &quot;capability&quot; which is a
</span><br>
<span class="quotelev2">&gt; &gt; kernel attribute describing the size (number of nodes/ranks) of the job,
</span><br>
<span class="quotelev2">&gt; &gt; without this you'll get errors like the one from tping.  The only way to
</span><br>
<span class="quotelev2">&gt; &gt; generate these capabilities is by using RMS, Slurm or I believe pdsh
</span><br>
<span class="quotelev2">&gt; &gt; which can generate one and push it into the kernel before calling fork()
</span><br>
<span class="quotelev2">&gt; &gt; to create the user application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't realize it was an MPI type program, so I ran is using the
</span><br>
<span class="quotelev1">&gt; QSNet version of mpirun and OpenMPI.  The process does start and runs
</span><br>
<span class="quotelev1">&gt; through 0: and 2:, which i assume are packet sizes, but freezes at
</span><br>
<span class="quotelev1">&gt; that point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have an existing XC cluster from HP, that we're trying to convert
</span><br>
<span class="quotelev1">&gt; from XC to standard RHEL5.3 w/ Slurm and OpenMPI.  All i want to be
</span><br>
<span class="quotelev1">&gt; able to do is load RHEL5 and the Quadrics NIC drivers, and run OpenMPI
</span><br>
<span class="quotelev1">&gt; jobs between these two nodes I yanked from the cluster before we
</span><br>
<span class="quotelev1">&gt; switch the whole thing over.
</span><br>
<p>My advice would be to try OpenMPI on the (presumably functional) XC
<br>
cluster and then migrate that from there to RHEL5.3.  I don't recall
<br>
Slurm being hard to get working but it'll be a lot easier to diagnose if
<br>
you get OpenMPI and the resource manager working separately before
<br>
putting them together.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9887.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>In reply to:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9881.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
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
