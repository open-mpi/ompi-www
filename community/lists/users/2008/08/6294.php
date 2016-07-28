<?
$subject_val = "Re: [OMPI users] cluster LiveCD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 05:54:10 2008" -->
<!-- isoreceived="20080808095410" -->
<!-- sent="Fri, 08 Aug 2008 05:53:50 -0400" -->
<!-- isosent="20080808095350" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster LiveCD" -->
<!-- id="1218189230.27965.45.camel_at_workhorse.mit.edu" -->
<!-- inreplyto="ea86ce220808071203x52a0f944m2b7881e955985027_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-08-08 05:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6293.php">Michael Jennings: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6298.php">Abhishek K: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Reply:</strong> <a href="6298.php">Abhishek K: "Re: [OMPI users] cluster LiveCD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[Off-list because it's off-topic]
<br>
<p>Thanks for the link.  But from the website I can't quite tell what
<br>
exactly Perceus is, except for &quot;the next generation&quot; of the &quot;de facto
<br>
standard&quot;.  Do you have a link to a good explanation or architecture
<br>
description?
<br>
<p>And in terms of de facto standards, isn't LTSP pretty much ubiquitous?
<br>
What more could Perceus be, than some kind of PXE booting, with some
<br>
kind of network file system?
<br>
<p>Thanks again, I'm all ears...
<br>
<p>-Adam
<br>
<p>On Thu, 2008-08-07 at 15:03 -0400, Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; I think a better approach than using NFS-root or LiveCDs is to use Perceus in
</span><br>
<span class="quotelev1">&gt; this situation, since it has been developed over many years to handle this
</span><br>
<span class="quotelev1">&gt; sort of thing (diskless/stateless beowulf clusters):
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.perceus.org/">http://www.perceus.org/</a>
</span><br>
<span class="quotelev1">&gt; It leverages PXE booting so all you need to do on a per-node basis is enable
</span><br>
<span class="quotelev1">&gt; PXE booting in the BIOS.  The primary limitation I see would be if your
</span><br>
<span class="quotelev1">&gt; windows machines are set up to use DHCP to get their IP addresses from
</span><br>
<span class="quotelev1">&gt; some server that is outside your control, since Perceus would need to take
</span><br>
<span class="quotelev1">&gt; over DHCP services to do its magic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 6, 2008 at 6:05 PM, Adam C Powell IV &lt;hazelsct_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2008-08-05 at 17:01 -0500, Ben Payne wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello.  I am not sure if this is the correct list to ask this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; question, so if you know of a more appropriate one please let me know.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think am looking for a LiveCD that supports MPI, specifically one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that has mpif90 built in, and can easily mount external (USB) drives
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for storing data.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have access to 40 Windows computers in a lab that rarely gets used.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would like to use the computers to run a cluster during the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; weekends, but be able to not mess with the Windows installation that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; exists on the hard drive. Because of this, I think a LiveCD would be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; good, and one that supports PXE booting is even better.  If there is a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; better way to do this (run MPI, not disrupt Windows) please let me
</span><br>
<span class="quotelev3">&gt; &gt;&gt; know.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The easiest way to do what you want is probably to netboot from a server
</span><br>
<span class="quotelev2">&gt; &gt; on the subnet with NFS-root.  That way you don't need to make a bunch of
</span><br>
<span class="quotelev2">&gt; &gt; new CDs to upgrade a single piece of software.  Just upgrade/modify the
</span><br>
<span class="quotelev2">&gt; &gt; environment on the server, and everybody else upgrades instantly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Turn on the server and reboot the machines, and you're in Linux with
</span><br>
<span class="quotelev2">&gt; &gt; MPI.  Disable PXE at the server and reboot and you're back in Windows.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; LTSP has some tools to do this, as does the Debian package lessdisks.
</span><br>
<span class="quotelev2">&gt; &gt; The basic principle is in <a href="http://wiki.debian.org/DebianLive">http://wiki.debian.org/DebianLive</a> and
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://wiki.debian.org/DebianEdu/HowTo/LtspDisklessWorkstation">http://wiki.debian.org/DebianEdu/HowTo/LtspDisklessWorkstation</a> .  The
</span><br>
<span class="quotelev2">&gt; &gt; old diskless package did this beautifully, but bitrotted and is
</span><br>
<span class="quotelev2">&gt; &gt; deprecated due to lack of maintenance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Adam
</span><br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Engineering consulting with open source tools
<a href="http://www.opennovation.com/">http://www.opennovation.com/</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6294/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6293.php">Michael Jennings: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6298.php">Abhishek K: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Reply:</strong> <a href="6298.php">Abhishek K: "Re: [OMPI users] cluster LiveCD"</a>
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
