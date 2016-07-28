<?
$subject_val = "Re: [OMPI users] cluster LiveCD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 18:05:29 2008" -->
<!-- isoreceived="20080806220529" -->
<!-- sent="Wed, 06 Aug 2008 18:05:23 -0400" -->
<!-- isosent="20080806220523" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster LiveCD" -->
<!-- id="1218060323.17218.136.camel_at_workhorse" -->
<!-- inreplyto="b00bf8820808051501v7970b130hb6cfe221bf380931_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cluster LiveCD<br>
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 18:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6284.php">Dave Grote: "[OMPI users] memory leak in alltoallw"</a>
<li><strong>Previous message:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6271.php">Ben Payne: "[OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Reply:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2008-08-05 at 17:01 -0500, Ben Payne wrote:
<br>
<span class="quotelev1">&gt; Hello.  I am not sure if this is the correct list to ask this
</span><br>
<span class="quotelev1">&gt; question, so if you know of a more appropriate one please let me know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think am looking for a LiveCD that supports MPI, specifically one
</span><br>
<span class="quotelev1">&gt; that has mpif90 built in, and can easily mount external (USB) drives
</span><br>
<span class="quotelev1">&gt; for storing data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have access to 40 Windows computers in a lab that rarely gets used.
</span><br>
<span class="quotelev1">&gt; I would like to use the computers to run a cluster during the
</span><br>
<span class="quotelev1">&gt; weekends, but be able to not mess with the Windows installation that
</span><br>
<span class="quotelev1">&gt; exists on the hard drive. Because of this, I think a LiveCD would be
</span><br>
<span class="quotelev1">&gt; good, and one that supports PXE booting is even better.  If there is a
</span><br>
<span class="quotelev1">&gt; better way to do this (run MPI, not disrupt Windows) please let me
</span><br>
<span class="quotelev1">&gt; know.
</span><br>
<p>The easiest way to do what you want is probably to netboot from a server
<br>
on the subnet with NFS-root.  That way you don't need to make a bunch of
<br>
new CDs to upgrade a single piece of software.  Just upgrade/modify the
<br>
environment on the server, and everybody else upgrades instantly.
<br>
<p>Turn on the server and reboot the machines, and you're in Linux with
<br>
MPI.  Disable PXE at the server and reboot and you're back in Windows.
<br>
<p>LTSP has some tools to do this, as does the Debian package lessdisks.
<br>
The basic principle is in <a href="http://wiki.debian.org/DebianLive">http://wiki.debian.org/DebianLive</a> and
<br>
<a href="http://wiki.debian.org/DebianEdu/HowTo/LtspDisklessWorkstation">http://wiki.debian.org/DebianEdu/HowTo/LtspDisklessWorkstation</a> .  The
<br>
old diskless package did this beautifully, but bitrotted and is
<br>
deprecated due to lack of maintenance.
<br>
<p>-Adam
<br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Engineering consulting with open source tools
<a href="http://www.opennovation.com/">http://www.opennovation.com/</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6283/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6284.php">Dave Grote: "[OMPI users] memory leak in alltoallw"</a>
<li><strong>Previous message:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6271.php">Ben Payne: "[OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Reply:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
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
