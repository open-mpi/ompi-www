<?
$subject_val = "Re: [OMPI users] Tight integration and interactive sessions with SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 23:41:59 2008" -->
<!-- isoreceived="20081113044159" -->
<!-- sent="Wed, 12 Nov 2008 20:41:43 -0800" -->
<!-- isosent="20081113044143" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tight integration and interactive sessions with SGE" -->
<!-- id="491BB007.7010708_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04039DAB-C5EF-454D-A2A6-4DECE12E7D63_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tight integration and interactive sessions with SGE<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 23:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7304.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Previous message:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>In reply to:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7304.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Reply:</strong> <a href="7304.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti wrote:
<br>
<span class="quotelev1">&gt; qlogin will create a completely fresh bash, which is not aware of 
</span><br>
<span class="quotelev1">&gt; running under SGE. Although you could set the SGE_* variables by hand, 
</span><br>
<span class="quotelev1">&gt; it's easier to use an interactive session with:
</span><br>
<p>In the past we'd source some sge script and SLOTS, TMPDIR, etc were 
<br>
populated.
<br>
<p><span class="quotelev1">&gt; $ qrsh -pe orte 4 /path/to/binary
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you really need a shell, you can get one with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qrsh -pe orte 4 bash -il
</span><br>
<p>That breaks my shell (erase, history, tab-completion) but it seems to 
<br>
work other than that. Any suggestions on getting a unique list of nodes 
<br>
without touching them N times (N=# of slots assigned)? I guess I could 
<br>
do &quot;mpirun uname -n|sort -u&quot; but that just seems, well, wrong.
<br>
<p>In any case, thanks for the tips!
<br>
Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7304.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Previous message:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>In reply to:</strong> <a href="7302.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7304.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Reply:</strong> <a href="7304.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
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
