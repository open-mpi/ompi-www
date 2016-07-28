<?
$subject_val = "Re: [OMPI users] Open MPI 1.4.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 16 05:22:11 2010" -->
<!-- isoreceived="20100516092211" -->
<!-- sent="Sun, 16 May 2010 13:21:53 +0400" -->
<!-- isosent="20100516092153" -->
<!-- name="Aleksej Saushev" -->
<!-- email="asau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.4.2 released" -->
<!-- id="87fx1sw6a6.fsf_at_inbox.ru" -->
<!-- inreplyto="7A8FA78A-60FF-4543-93EE-03D4AB2C59EE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.4.2 released<br>
<strong>From:</strong> Aleksej Saushev (<em>asau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-16 05:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13057.php">Lydia Heck: "[OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Previous message:</strong> <a href="13055.php">awwase: "[OMPI users] Enabling IPsec"</a>
<li><strong>In reply to:</strong> <a href="13048.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Reply:</strong> <a href="13173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On May 13, 2010, at 3:20 PM, Aleksej Saushev wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - Various OpenBSD and NetBSD build and run-time fixes.  Many thanks to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   the OpenBSD community for their time, expertise, and patience
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   getting these fixes incorporated into Open MPI's main line.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This didn't happen in 1.4.2, all patches we (NetBSD, not OpenBSD)
</span><br>
<span class="quotelev2">&gt;&gt; distribute for 1.4.1 still apply cleanly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Blast.  Sorry about that; can you send a pointer to your patches?
</span><br>
<span class="quotelev1">&gt; I seem to recall that we were amenable to some of the changes, but not all of them.
</span><br>
<p><a href="http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/patches/">http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/patches/</a>
<br>
<p>I didn't backport OpenMPI changes happened to 1.5 branch.
<br>
<p>I was waiting for those to be backported to 1.4 branch, and since that
<br>
didn't happen I thought it was intended for 1.5 release. Then I was
<br>
effectively absent for about two weeks and lost pre-release time.
<br>
<p>If you want me to backport 1.5 changes, drop me a note,
<br>
MPI is going into my focus in near time.
<br>
<p><span class="quotelev1">&gt; ...looking through the SVN commit logs, we did commit *some* BSD-related things to the v1.4 tree.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/changeset/22751">https://svn.open-mpi.org/trac/ompi/changeset/22751</a>
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/changeset/22890">https://svn.open-mpi.org/trac/ompi/changeset/22890</a>
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/changeset/22936">https://svn.open-mpi.org/trac/ompi/changeset/22936</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These fixes where what I was referring to in the changelog.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, I just put some work in the development trunk that adds support for a new embedded software support library (hwloc), but, based on feedback from you and others, it allows you to configure one of 3 ways:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * Use the embedded hwloc
</span><br>
<span class="quotelev1">&gt;  * Use an external hwloc installation
</span><br>
<span class="quotelev1">&gt;  * Don't compile hwloc at all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I plan on extending this technique to libltdl, which should hopefully obviate at least some of your patches.
</span><br>
<p>I'll take a look.
<br>
<p><p><pre>
-- 
HE CE3OH...

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13056/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13057.php">Lydia Heck: "[OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Previous message:</strong> <a href="13055.php">awwase: "[OMPI users] Enabling IPsec"</a>
<li><strong>In reply to:</strong> <a href="13048.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Reply:</strong> <a href="13173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
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
