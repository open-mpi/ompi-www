<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 16:22:04 2009" -->
<!-- isoreceived="20091209212204" -->
<!-- sent="Thu, 10 Dec 2009 10:21:48 +1300" -->
<!-- isosent="20091209212148" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="d19b1f8d80bb9bd8eded0ce20aefc20a.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="87iqcgeeaa.fsf_at_inbox.ru" -->
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
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Pointers%20for%20understanding%20failure%20messages%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-12-09 16:21:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11484.php">David Turner: "[OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11482.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>In reply to:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11493.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11493.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; 26a27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CONFIGURE_ARGS+=      --enable-contrib-no-build=vt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have no idea how NetBSD go about resolving such clashes in the long
</span><br>
<span class="quotelev2">&gt;&gt; term though?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've disabled it the same way for this time, my local package differs
</span><br>
<span class="quotelev1">&gt; from what's in wip:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- PLIST	3 Dec 2009 10:18:00 -0000	1.5
</span><br>
<span class="quotelev1">&gt; +++ PLIST	9 Dec 2009 08:29:31 -0000
</span><br>
<span class="quotelev1">&gt; @@ -1,17 +1,11 @@
</span><br>
<span class="quotelev1">&gt;  @comment $NetBSD$
</span><br>
<span class="quotelev1">&gt;  bin/mpiCC
</span><br>
<span class="quotelev1">&gt; -bin/mpiCC-vt
</span><br>
<span class="quotelev1">&gt;  bin/mpic++
</span><br>
<span class="quotelev1">&gt; -bin/mpic++-vt
</span><br>
<p>I am surprised that you are still installing binaries and other files
<br>
with the -vt extension after disabling the vt stuff ?
<br>
<p><span class="quotelev1">&gt; I can commit my development patches into wip right now,
</span><br>
<span class="quotelev1">&gt; if that helps you.
</span><br>
<p>If your stuff now works then that's ideal. If your build is still
<br>
failing after applying my patches then probably not.
<br>
<p>Given that we have something that does work, it would make sense
<br>
to try and merge the two as far as possible before proceeding any
<br>
further.
<br>
<p>As discussed before, there is no real reason to have two getifaddrs
<br>
loops seperating out IPv6 and non-IPv6 - that could all be in one
<br>
loop.
<br>
<p><span class="quotelev1">&gt; Some patches should be there anyway, since OpenMPI doesn't help with
</span><br>
<span class="quotelev1">&gt; installation of configuration files into example directory anyway.
</span><br>
<p>OK, as you are the person within the NetBSD community looking
<br>
after OpenMPI, I'll happily work with whatever is in the NetBSD
<br>
repository and patch locally as needed, because I have poeple here
<br>
who want to use stuff that requires OpenMPI now.
<br>
<p>Are you going to upgrade the NetBSD port to build against OpenMPI 1.4
<br>
now that it available ? Might be a good time to check the fuzzz in the
<br>
existing patches.
<br>
<p>Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11484.php">David Turner: "[OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11482.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>In reply to:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11493.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11493.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
