<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 14:23:45 2013" -->
<!-- isoreceived="20130206192345" -->
<!-- sent="Wed, 06 Feb 2013 11:23:32 -0800" -->
<!-- isosent="20130206192332" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="5112ADB4.6000401_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201302061229.r16CTa5p023255_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 14:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles	inopenmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21312.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/06/13 04:29, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you very much for your answer. I have compiled your program
</span><br>
<span class="quotelev1">&gt; and get different behaviours for openmpi-1.6.4rc3 and openmpi-1.9.
</span><br>
<p>Yes, something else seems to be going on for 1.9.
<br>
<p>For 1.6, try the attached patch.  It works for me, but my machines have flatter (less interesting) topology.  It'd be great if you 
<br>
could try
<br>
<p>&nbsp;&nbsp;&nbsp;% mpirun --report-bindings --rankfile myrankfile ./a.out
<br>
<p>with that check program I sent and with the following rankfiles:
<br>
<p>rank 0=sunpc1 slot=0:0
<br>
rank 0=sunpc1 slot=0:1
<br>
rank 0=sunpc1 slot=0:0-1
<br>
rank 0=sunpc1 slot=1:0
<br>
rank 0=sunpc1 slot=1:1
<br>
rank 0=sunpc1 slot=1:0-1
<br>
rank 0=sunpc1 slot=0:0-1,1:0-1
<br>
<p>where each line represents a different rankfile.
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21320/patch.diff">patch.diff</a>
</ul>
<!-- attachment="patch.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles	inopenmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21312.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
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
