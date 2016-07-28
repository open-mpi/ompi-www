<?
$subject_val = "Re: [OMPI users] cluster LiveCD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 09:18:11 2008" -->
<!-- isoreceived="20080808131811" -->
<!-- sent="Fri, 8 Aug 2008 07:18:07 -0600" -->
<!-- isosent="20080808131807" -->
<!-- name="Abhishek K" -->
<!-- email="abbyzcool_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster LiveCD" -->
<!-- id="223eadbc0808080618g35bb1644laa1655dfa7f8ddca_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1218189230.27965.45.camel_at_workhorse.mit.edu" -->
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
<strong>From:</strong> Abhishek K (<em>abbyzcool_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-08 09:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6299.php">Gus Correa: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6297.php">John Hearns: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>In reply to:</strong> <a href="6294.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 8, 2008 at 3:53 AM, Adam C Powell IV &lt;hazelsct_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; [Off-list because it's off-topic]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the link.  But from the website I can't quite tell what
</span><br>
<span class="quotelev1">&gt; exactly Perceus is, except for &quot;the next generation&quot; of the &quot;de facto
</span><br>
<span class="quotelev1">&gt; standard&quot;.  Do you have a link to a good explanation or architecture
</span><br>
<span class="quotelev1">&gt; description?
</span><br>
<p><p><p><a href="http://www.perceus.org/docs/perceus-userguide-1.4.0.pdf">http://www.perceus.org/docs/perceus-userguide-1.4.0.pdf</a>
<br>
HTH, this has a nice high-level view of how Perceus works.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And in terms of de facto standards, isn't LTSP pretty much ubiquitous?
</span><br>
<span class="quotelev1">&gt; What more could Perceus be, than some kind of PXE booting, with some
</span><br>
<span class="quotelev1">&gt; kind of network file system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again, I'm all ears...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<p><p>One of the most obvious differences that comes to mind is: LTSP uses a
<br>
NFS-root only approach which is why it isn't particularly favored in HPC
<br>
environments. Mounting the entire root filesystem over NFS always leads to
<br>
increased network activity since the filesystems seems local to most
<br>
applications. The usual way around this is to create symlinks that point to
<br>
the local disk or RAM (See <a href="http://www.onesis.org">http://www.onesis.org</a>)
<br>
OTOH, Perceus uses a hybrid approach, in that it loads a minimal local OS in
<br>
the RAM and mounts a networked filesystem; which reduces the network
<br>
bandwidth and latency.
<br>
<p>If this is being way too off-topic, the Perceus/Warewulf mailing list (
<br>
<a href="http://lists.caosity.org/mailman/listinfo/warewulf">http://lists.caosity.org/mailman/listinfo/warewulf</a>) might be a good place
<br>
for this discussion.
<br>
<p>&nbsp;-- Abhishek
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 2008-08-07 at 15:03 -0400, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I think a better approach than using NFS-root or LiveCDs is to use
</span><br>
<span class="quotelev1">&gt; Perceus in
</span><br>
<span class="quotelev2">&gt; &gt; this situation, since it has been developed over many years to handle
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt; &gt; sort of thing (diskless/stateless beowulf clusters):
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.perceus.org/">http://www.perceus.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt; It leverages PXE booting so all you need to do on a per-node basis is
</span><br>
<span class="quotelev1">&gt; enable
</span><br>
<span class="quotelev2">&gt; &gt; PXE booting in the BIOS.  The primary limitation I see would be if your
</span><br>
<span class="quotelev2">&gt; &gt; windows machines are set up to use DHCP to get their IP addresses from
</span><br>
<span class="quotelev2">&gt; &gt; some server that is outside your control, since Perceus would need to
</span><br>
<span class="quotelev1">&gt; take
</span><br>
<span class="quotelev2">&gt; &gt; over DHCP services to do its magic.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Aug 6, 2008 at 6:05 PM, Adam C Powell IV &lt;hazelsct_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, 2008-08-05 at 17:01 -0500, Ben Payne wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hello.  I am not sure if this is the correct list to ask this
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; question, so if you know of a more appropriate one please let me know.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I think am looking for a LiveCD that supports MPI, specifically one
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that has mpif90 built in, and can easily mount external (USB) drives
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; for storing data.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I have access to 40 Windows computers in a lab that rarely gets used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I would like to use the computers to run a cluster during the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; weekends, but be able to not mess with the Windows installation that
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; exists on the hard drive. Because of this, I think a LiveCD would be
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; good, and one that supports PXE booting is even better.  If there is a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; better way to do this (run MPI, not disrupt Windows) please let me
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; know.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The easiest way to do what you want is probably to netboot from a
</span><br>
<span class="quotelev1">&gt; server
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on the subnet with NFS-root.  That way you don't need to make a bunch
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; new CDs to upgrade a single piece of software.  Just upgrade/modify the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment on the server, and everybody else upgrades instantly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Turn on the server and reboot the machines, and you're in Linux with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI.  Disable PXE at the server and reboot and you're back in Windows.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; LTSP has some tools to do this, as does the Debian package lessdisks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The basic principle is in <a href="http://wiki.debian.org/DebianLive">http://wiki.debian.org/DebianLive</a> and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://wiki.debian.org/DebianEdu/HowTo/LtspDisklessWorkstation">http://wiki.debian.org/DebianEdu/HowTo/LtspDisklessWorkstation</a> .  The
</span><br>
<span class="quotelev3">&gt; &gt; &gt; old diskless package did this beautifully, but bitrotted and is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; deprecated due to lack of maintenance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Adam
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Engineering consulting with open source tools
</span><br>
<span class="quotelev1">&gt; <a href="http://www.opennovation.com/">http://www.opennovation.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6298/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6299.php">Gus Correa: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6297.php">John Hearns: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>In reply to:</strong> <a href="6294.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
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
