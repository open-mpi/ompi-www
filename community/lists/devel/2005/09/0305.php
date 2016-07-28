<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  2 08:59:11 2005" -->
<!-- isoreceived="20050902135911" -->
<!-- sent="Fri, 2 Sep 2005 08:59:08 -0500" -->
<!-- isosent="20050902135908" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re:  cleanup" -->
<!-- id="6193f31a3bc3b9a6a286520331e0ba0e_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9dbbfafd9fd4e0dc9d07775666a9e8fd_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-02 08:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0306.php">Craig Rasmussen: "Re:  poe PLS component"</a>
<li><strong>Previous message:</strong> <a href="0304.php">Jeff Squyres: "Re:  cleanup"</a>
<li><strong>In reply to:</strong> <a href="0304.php">Jeff Squyres: "Re:  cleanup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>It shouldn't be, since orterun should be sending a message (not 
<br>
signals) to the orted's and have them shutdown. That mechanism has been 
<br>
there before my addition. Ralph noticed some odd behavior with the 
<br>
orted's living well after the orterun has exited. It's possible that 
<br>
this is a result of the same bug. I was going to check that out 
<br>
yesterday, but became sidetracked and didn't get to it. I'll take a 
<br>
look this morning and see if I can't track this down.
<br>
<p>Josh
<br>
<p>On Sep 2, 2005, at 8:24 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Josh --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this related to the orted signal traps you put in recently,
</span><br>
<span class="quotelev1">&gt; perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 2, 2005, at 9:21 AM, Tim S. Woodall wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ctrl^C handling in orte seems to be broken. I know get a core
</span><br>
<span class="quotelev2">&gt;&gt; file for every orted that is spawned on remote nodes when
</span><br>
<span class="quotelev2">&gt;&gt; I attempt to kill a job via Crtl^C or orterun. This behaviour
</span><br>
<span class="quotelev2">&gt;&gt; has actually been around for about a week know. Anyone else
</span><br>
<span class="quotelev2">&gt;&gt; seeing this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
- ----
<br>
Josh Hursey
<br>
jjhursey_at_[hidden]
<br>
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.2.4 (Darwin)
<br>
<p>iD8DBQFDGFqrAxXT7ehIlVwRAvqPAKCyJ3sf9nZ4wN4H1bMP0aLWZX5mBACeJUCV
<br>
2+5K2jnMxEhN94uDaxB32tg=
<br>
=w3ce
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0306.php">Craig Rasmussen: "Re:  poe PLS component"</a>
<li><strong>Previous message:</strong> <a href="0304.php">Jeff Squyres: "Re:  cleanup"</a>
<li><strong>In reply to:</strong> <a href="0304.php">Jeff Squyres: "Re:  cleanup"</a>
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
