<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 09:50:42 2006" -->
<!-- isoreceived="20060628135042" -->
<!-- sent="Wed, 28 Jun 2006 09:50:22 -0400" -->
<!-- isosent="20060628135022" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installing OpenMPI on a solaris" -->
<!-- id="200606280950.22560.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE95F7_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 09:50:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1486.php">Brian Barrett: "Re: [OMPI users] Openmpi 1.1: startup problem caused by file	descriptor state"</a>
<li><strong>Previous message:</strong> <a href="1484.php">Patrick Jessee: "[OMPI users] Openmpi 1.1: startup problem caused by file descriptor state"</a>
<li><strong>In reply to:</strong> <a href="1479.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah bummers, but something tells me it might not be OpenMPI's fault. Here's why:
<br>
<p>1- The tech that takes care of these machines told me that he gets RTC errors on bootup (the cpu borads are apprantly &quot;out of sync&quot; since the clocks aren't set correctly).
<br>
2- There is also a possibility that the prior admin did not put in a &quot;stable&quot; firmware version.
<br>
<p>So if any Sun guru can help out by telling me which command or point to a quick HOWTO for resolvin these clock issues, it would be greatly appreciated (our analyst is overloaded and he would not be able to justify the 3 days of reading up docs just to satisfy my running parallel code problems ;P)
<br>
<p>3- I realised that the OS is not booted in 64 O_o!! (not that this has to do with OpenMPI bombing):
<br>
<p>Jun 21 07:45:15 unknown genunix: [ID 540533 kern.notice] ^MSunOS Release 5.8 Version Generic_108528-29 32-bit
<br>
Jun 21 07:45:15 unknown NOTICE: 64-bit OS installed, but the 32-bit OS is the default
<br>
Jun 21 07:45:15 unknown Booting the 32-bit OS ...
<br>
<p>4- LAM-MPI 7.1.1 also bombs, but it does so at a much higher processor count (OpenMPI bombs at 5, LAM-MPI bombs around 10, but it vraies).
<br>
<p>As for the questions regarding OpenMPI build, I just recently built 1.1 with the same basic configure options with the exact same results (clean cache).
<br>
<p>So, I guess this one is on pause untill I have the confirmation that the clocks on the processor boards are set correctly. There is one this that bothers me though, one of the machines has only 1 processor board (4 procs) and I still get the error on that machine if I go over 4 pcrosesses...how can a board be out of sync with itself??
<br>
<p>Eric
<br>
PS: I am at liberty of providing the source code if anyone wants it.
<br>
<p>Le mercredi 28 juin 2006 08:56, Jeff Squyres (jsquyres) a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Bummer!  :-(
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Just to be sure -- you had a clean config.cache file before you ran configure, right?  (e.g., the file didn't exist -- just to be sure it didn't get potentially erroneous values from a previous run of configure)  Also, FWIW, it's not necessary to specify --enable-ltdl-convenience; that should be automatic.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If you had a clean configure, we *suspect* that this might be due to alignment issues on Solaris 64 bit platforms, but thought that we might have had a pretty good handle on it in 1.1.  Obviously we didn't solve everything.  Bonk.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Did you get a corefile, perchance?  If you could send a stack trace, that would be most helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
[...snip...]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1486.php">Brian Barrett: "Re: [OMPI users] Openmpi 1.1: startup problem caused by file	descriptor state"</a>
<li><strong>Previous message:</strong> <a href="1484.php">Patrick Jessee: "[OMPI users] Openmpi 1.1: startup problem caused by file descriptor state"</a>
<li><strong>In reply to:</strong> <a href="1479.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
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
