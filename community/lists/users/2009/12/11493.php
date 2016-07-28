<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 18:41:46 2009" -->
<!-- isoreceived="20091209234146" -->
<!-- sent="Thu, 10 Dec 2009 02:41:40 +0300" -->
<!-- isosent="20091209234140" -->
<!-- name="Aleksej Saushev" -->
<!-- email="asau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="87hbrzk957.fsf_at_inbox.ru" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d19b1f8d80bb9bd8eded0ce20aefc20a.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> Aleksej Saushev (<em>asau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 18:41:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11494.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>In reply to:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11505.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11505.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kevin.Buckley_at_[hidden] writes:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; CONFIGURE_ARGS+=      --enable-contrib-no-build=vt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no idea how NetBSD go about resolving such clashes in the long
</span><br>
<span class="quotelev3">&gt;&gt;&gt; term though?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've disabled it the same way for this time, my local package differs
</span><br>
<span class="quotelev2">&gt;&gt; from what's in wip:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- PLIST	3 Dec 2009 10:18:00 -0000	1.5
</span><br>
<span class="quotelev2">&gt;&gt; +++ PLIST	9 Dec 2009 08:29:31 -0000
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1,17 +1,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;  @comment $NetBSD$
</span><br>
<span class="quotelev2">&gt;&gt;  bin/mpiCC
</span><br>
<span class="quotelev2">&gt;&gt; -bin/mpiCC-vt
</span><br>
<span class="quotelev2">&gt;&gt;  bin/mpic++
</span><br>
<span class="quotelev2">&gt;&gt; -bin/mpic++-vt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am surprised that you are still installing binaries and other files
</span><br>
<span class="quotelev1">&gt; with the -vt extension after disabling the vt stuff ?
</span><br>
<p>I don't commit that part since I consider it my own local problems
<br>
that I have conflicting package. Other people may have none.
<br>
You can add CONFIGURE_ARGS and regenerate PLIST in a regular way.
<br>
<p><span class="quotelev2">&gt;&gt; I can commit my development patches into wip right now,
</span><br>
<span class="quotelev2">&gt;&gt; if that helps you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your stuff now works then that's ideal. If your build is still
</span><br>
<span class="quotelev1">&gt; failing after applying my patches then probably not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that we have something that does work, it would make sense
</span><br>
<span class="quotelev1">&gt; to try and merge the two as far as possible before proceeding any
</span><br>
<span class="quotelev1">&gt; further.
</span><br>
<p>Benchmark I use to test MPICH and OpenMPI (parallel/skampi) doesn't work
<br>
for me still. It may be that I have somewhat unusual network configuration,
<br>
I'm looking at it.
<br>
<p><span class="quotelev1">&gt; As discussed before, there is no real reason to have two getifaddrs
</span><br>
<span class="quotelev1">&gt; loops seperating out IPv6 and non-IPv6 - that could all be in one
</span><br>
<span class="quotelev1">&gt; loop.
</span><br>
<p>Sure, I think that we can do it a bit later.
<br>
<p><span class="quotelev2">&gt;&gt; Some patches should be there anyway, since OpenMPI doesn't help with
</span><br>
<span class="quotelev2">&gt;&gt; installation of configuration files into example directory anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, as you are the person within the NetBSD community looking
</span><br>
<span class="quotelev1">&gt; after OpenMPI, I'll happily work with whatever is in the NetBSD
</span><br>
<span class="quotelev1">&gt; repository and patch locally as needed, because I have poeple here
</span><br>
<span class="quotelev1">&gt; who want to use stuff that requires OpenMPI now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you going to upgrade the NetBSD port to build against OpenMPI 1.4
</span><br>
<span class="quotelev1">&gt; now that it available ? Might be a good time to check the fuzzz in the
</span><br>
<span class="quotelev1">&gt; existing patches.
</span><br>
<p><a href="http://pkgsrc-wip.cvs.sourceforge.net/viewvc/pkgsrc-wip/wip/openmpi/Makefile">http://pkgsrc-wip.cvs.sourceforge.net/viewvc/pkgsrc-wip/wip/openmpi/Makefile</a>
<br>
<p><p><pre>
-- 
HE CE3OH...
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11494.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>In reply to:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11505.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11505.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
