<?
$subject_val = "Re: [OMPI users] quadrics support?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 15:09:35 2009" -->
<!-- isoreceived="20090708190935" -->
<!-- sent="Wed, 8 Jul 2009 15:09:30 -0400" -->
<!-- isosent="20090708190930" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] quadrics support?" -->
<!-- id="e75d22a90907081209i54f225a3kf6319c53e7710fc0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1247070781.10413.4.camel_at_alpha" -->
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
<strong>Date:</strong> 2009-07-08 15:09:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9882.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9882.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 8, 2009 at 12:33 PM, Ashley Pittman&lt;ashley_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Is the machine configured correctly to allow non OpenMPI QsNet programs
</span><br>
<span class="quotelev1">&gt; to run, for example tping?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which resource manager are you running, I think slurm compiled for RMS
</span><br>
<span class="quotelev1">&gt; is essential.
</span><br>
<p>I can ping via TCP/IP using the eip0 ports.
<br>
<p>When i run tping i get:
<br>
ELAN_EXCEOPTIOn @ --: 6 (Initialization error)
<br>
elan_init: Can't get capability from environment
<br>
<p>I am not using slurm or RMS at all, just trying to get openmpi to run
<br>
between two nodes.
<br>
<p>Using -mca btl self,tcp -mca btl_tcp_if_include eip0 i can run the
<br>
jobs no problem using sockets over the elan interface, but if i run
<br>
the job with -mca btl self,elan,tcp, below is the short snipped
<br>
output:
<br>
<p>Signal: Segmentation fault (11)
<br>
Signal code: Invalid permissions (2)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9882.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9882.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9884.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
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
