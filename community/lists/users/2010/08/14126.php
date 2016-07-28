<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 18:22:24 2010" -->
<!-- isoreceived="20100825222224" -->
<!-- sent="Wed, 25 Aug 2010 17:21:38 -0500" -->
<!-- isosent="20100825222138" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTik2r8qgZUtYG5hX3Z7iZjXHQ+1f3XfJkuLORFr5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikYee3OUj7G5tpG_RKy2Ako0Uosn9d7p5oHgNgb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 18:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14127.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14125.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>In reply to:</strong> <a href="14121.php">John Hearns: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14115.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 25, 2010 at 6:41 AM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; You could sort that out with udev rules on each machine.
</span><br>
<p>Sure. I'd always wanted consistent names for the eth interfaces when I
<br>
set up the cluster but I couldn't get udev to co-operate. Maybe this
<br>
time! Let me try.
<br>
<p><span class="quotelev1">&gt; Look in the directory /etc/udev/rules.d for the file
</span><br>
<span class="quotelev1">&gt; NN-net_persistent_names.rules
</span><br>
<span class="quotelev1">&gt; you'll need a script which looks for the HWaddr (MAC) address matching
</span><br>
<span class="quotelev1">&gt; the 10gig cards
</span><br>
<span class="quotelev1">&gt; and edit the SUBSYSTEM line for that interface.
</span><br>
<p>I don't have the particular file you mention. I do have the following files:
<br>
<p>05-udev-early.rules   51-hotplug.rules      60-raw.rules
<br>
90-hal.rules          bluetooth.rules
<br>
40-multipath.rules    60-net.rules          85-pcscd_ccid.rules
<br>
90-ib.rules
<br>
50-udev.rules         60-pcmcia.rules       90-dm.rules
<br>
95-pam-console.rules
<br>
<p>Not sure how to proceed with udev, but maybe this is OT for this list.
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14127.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14125.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>In reply to:</strong> <a href="14121.php">John Hearns: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14115.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
