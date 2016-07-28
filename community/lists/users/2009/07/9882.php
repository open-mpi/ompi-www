<?
$subject_val = "Re: [OMPI users] quadrics support?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 12:32:54 2009" -->
<!-- isoreceived="20090708163254" -->
<!-- sent="Wed, 08 Jul 2009 17:33:01 +0100" -->
<!-- isosent="20090708163301" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] quadrics support?" -->
<!-- id="1247070781.10413.4.camel_at_alpha" -->
<!-- inreplyto="e75d22a90907071418r5a94b8bfo33f031a4d501919f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-07-08 12:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9881.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9876.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-07-07 at 17:18 -0400, Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; So, first run i seem to have run into a bit of an issue.  All the
</span><br>
<span class="quotelev1">&gt; Quadrics modules are compiled and loaded.  I can ping between nodes
</span><br>
<span class="quotelev1">&gt; over the quadrics interfaces.  But when i try to run one of the hello
</span><br>
<span class="quotelev1">&gt; mpi example from openmpi, i get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; first run, the process hung - killed with ctl-c
</span><br>
<span class="quotelev1">&gt; though it doesnt seem to actually die and kill -9 doesn't work
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; second run, the process fails with
</span><br>
<span class="quotelev1">&gt;   failed elan4_attach &lt;snipped&gt; Device or resource busy
</span><br>
<span class="quotelev1">&gt;   &lt;snipped&gt;
</span><br>
<span class="quotelev1">&gt;   elan_allocSleepDesc &lt;snipped&gt; Failed to allocate IRQ cookie 2a: 22
</span><br>
<span class="quotelev1">&gt; Invalid argument
</span><br>
<span class="quotelev1">&gt; all subsequent runs fail the same way and i have to reboot the box to
</span><br>
<span class="quotelev1">&gt; get the processes to go away
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is a quadrics or openmpi issue at this point, but
</span><br>
<span class="quotelev1">&gt; i figured since there are quadrics people on the list its a good place
</span><br>
<span class="quotelev1">&gt; to start
</span><br>
<p>Is the machine configured correctly to allow non OpenMPI QsNet programs
<br>
to run, for example tping?
<br>
<p>Which resource manager are you running, I think slurm compiled for RMS
<br>
is essential.
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
<li><strong>Next message:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9881.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9876.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9883.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
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
