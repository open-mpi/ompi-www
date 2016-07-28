<?
$subject_val = "Re: [OMPI users] Open MPI 1.4.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 07:46:00 2010" -->
<!-- isoreceived="20100515114600" -->
<!-- sent="Sat, 15 May 2010 07:45:56 -0400" -->
<!-- isosent="20100515114556" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.4.2 released" -->
<!-- id="7A8FA78A-60FF-4543-93EE-03D4AB2C59EE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87r5lf38xd.fsf_at_inbox.ru" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 07:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13049.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Previous message:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>In reply to:</strong> <a href="13043.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13056.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Reply:</strong> <a href="13056.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2010, at 3:20 PM, Aleksej Saushev wrote:
<br>
<p><span class="quotelev2">&gt; &gt; - Various OpenBSD and NetBSD build and run-time fixes.  Many thanks to
</span><br>
<span class="quotelev2">&gt; &gt;   the OpenBSD community for their time, expertise, and patience
</span><br>
<span class="quotelev2">&gt; &gt;   getting these fixes incorporated into Open MPI's main line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This didn't happen in 1.4.2, all patches we (NetBSD, not OpenBSD)
</span><br>
<span class="quotelev1">&gt; distribute for 1.4.1 still apply cleanly.
</span><br>
<p>Blast.  Sorry about that; can you send a pointer to your patches?  I seem to recall that we were amenable to some of the changes, but not all of them.
<br>
<p>...looking through the SVN commit logs, we did commit *some* BSD-related things to the v1.4 tree.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/22751">https://svn.open-mpi.org/trac/ompi/changeset/22751</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/22890">https://svn.open-mpi.org/trac/ompi/changeset/22890</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/22936">https://svn.open-mpi.org/trac/ompi/changeset/22936</a>
<br>
<p>These fixes where what I was referring to in the changelog.
<br>
<p>Additionally, I just put some work in the development trunk that adds support for a new embedded software support library (hwloc), but, based on feedback from you and others, it allows you to configure one of 3 ways:
<br>
<p>&nbsp;* Use the embedded hwloc
<br>
&nbsp;* Use an external hwloc installation
<br>
&nbsp;* Don't compile hwloc at all
<br>
<p>I plan on extending this technique to libltdl, which should hopefully obviate at least some of your patches.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13049.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Previous message:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>In reply to:</strong> <a href="13043.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13056.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Reply:</strong> <a href="13056.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
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
