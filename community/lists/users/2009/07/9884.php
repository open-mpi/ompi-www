<?
$subject_val = "Re: [OMPI users] quadrics support?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 15:32:55 2009" -->
<!-- isoreceived="20090708193255" -->
<!-- sent="Wed, 08 Jul 2009 20:33:01 +0100" -->
<!-- isosent="20090708193301" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] quadrics support?" -->
<!-- id="1247081582.10413.17.camel_at_alpha" -->
<!-- inreplyto="e75d22a90907081209i54f225a3kf6319c53e7710fc0_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-07-08 15:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-07-08 at 15:09 -0400, Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; On Wed, Jul 8, 2009 at 12:33 PM, Ashley Pittman&lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Is the machine configured correctly to allow non OpenMPI QsNet programs
</span><br>
<span class="quotelev2">&gt; &gt; to run, for example tping?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Which resource manager are you running, I think slurm compiled for RMS
</span><br>
<span class="quotelev2">&gt; &gt; is essential.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can ping via TCP/IP using the eip0 ports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i run tping i get:
</span><br>
<span class="quotelev1">&gt; ELAN_EXCEOPTIOn @ --: 6 (Initialization error)
</span><br>
<span class="quotelev1">&gt; elan_init: Can't get capability from environment
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not using slurm or RMS at all, just trying to get openmpi to run
</span><br>
<span class="quotelev1">&gt; between two nodes.
</span><br>
<p>To attach to the elan a process has to have a &quot;capability&quot; which is a
<br>
kernel attribute describing the size (number of nodes/ranks) of the job,
<br>
without this you'll get errors like the one from tping.  The only way to
<br>
generate these capabilities is by using RMS, Slurm or I believe pdsh
<br>
which can generate one and push it into the kernel before calling fork()
<br>
to create the user application.
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
<li><strong>Next message:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
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
