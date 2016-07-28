<?
$subject_val = "[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 10:16:19 2009" -->
<!-- isoreceived="20090923141619" -->
<!-- sent="Wed, 23 Sep 2009 15:15:45 +0100" -->
<!-- isosent="20090923141545" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)" -->
<!-- id="87bpl1wxv2.fsf_-__at_liv.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="c4d69730909222130h3874eda3mbea8f2b06ba53769_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 10:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10743.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<li><strong>Previous message:</strong> <a href="10741.php">Josh Hursey: "Re: [OMPI users] error in ompi-checkpoint"</a>
<li><strong>In reply to:</strong> <a href="10735.php">Rahul Nabar: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10743.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<li><strong>Reply:</strong> <a href="10743.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rahul Nabar &lt;rpnabar_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; So, how does one go about selecting a good switch? &quot;The most expensive
</span><br>
<span class="quotelev1">&gt; the better&quot; is somewhat a unsatisfying option!
</span><br>
<p>Also it's apparently not always right, if I recall correctly, according
<br>
to the figures on MPI switch performance in the reports somewhere
<br>
under <a href="http://www.cse.dl.ac.uk/disco">http://www.cse.dl.ac.uk/disco</a>.&#185;  The benchmark database there may
<br>
also be relevant.  I think they include OMPI figures, to bring this
<br>
vaguely on topic.
<br>
<p>If you're concerned about latency -- which you may be for VASP? -- then
<br>
the NICs and their settings are more important than the switch.
<br>
(Obviously use Open-MX, not TCP, too.)  See
<br>
&lt;<a href="http://www.nw-grid.ac.uk/LivMPI">http://www.nw-grid.ac.uk/LivMPI</a>&gt; for figures on the NICs I could test.
<br>
I haven't seen better GigE ping-pong results than those, but would be
<br>
interested to.
<br>
<p><pre>
---
&#185; Not whatever the currently-politically-correct URL is, but it still
  works (except if you turn off Javascript, sigh).
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10743.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<li><strong>Previous message:</strong> <a href="10741.php">Josh Hursey: "Re: [OMPI users] error in ompi-checkpoint"</a>
<li><strong>In reply to:</strong> <a href="10735.php">Rahul Nabar: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10743.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<li><strong>Reply:</strong> <a href="10743.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
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
