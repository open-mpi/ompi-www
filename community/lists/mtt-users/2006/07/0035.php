<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 10 16:27:28 2006" -->
<!-- isoreceived="20060710202728" -->
<!-- sent="Mon, 10 Jul 2006 16:26:50 -0400" -->
<!-- isosent="20060710202650" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] sha1sum on x64 Solaris" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFB7355C_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] sha1sum on x64 Solaris" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-10 16:26:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0036.php">Ethan Mallove: "Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiple steps]"</a>
<li><strong>Previous message:</strong> <a href="0034.php">Ethan Mallove: "[MTT users] sha1sum on x64 Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="0034.php">Ethan Mallove: "[MTT users] sha1sum on x64 Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Slight modification to this -- I'd still like to distinguish between
<br>
getting a *bad* checksum back from not finding the app.  Bad checksums
<br>
should still Abort (actually, perhaps it would be better if they
<br>
gracefully fail -- not abort!), whereas not finding the app should be a
<br>
Debug.
<br>
<p>The md5sum() and sha1sum() functions should return undef if they can't
<br>
find the app. 
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 10, 2006 3:56 PM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: [MTT users] sha1sum on x64 Solaris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure sha1sum is installed by default on x64 Solaris 
</span><br>
<span class="quotelev1">&gt; systems. I don't see it on any of our
</span><br>
<span class="quotelev1">&gt; x64 Solaris lab machines. (Not sure how this wasn't a problem 
</span><br>
<span class="quotelev1">&gt; until now.) Until we figure out how to
</span><br>
<span class="quotelev1">&gt; do SHA1 checksums on x64 Solaris, my workaround is to simply 
</span><br>
<span class="quotelev1">&gt; change Abort to Debug when the sha1sum
</span><br>
<span class="quotelev1">&gt; checksum comparison fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/MPI/Get/OMPI_Snapshot.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/MPI/Get/OMPI_Snapshot.pm    (revision 191)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/MPI/Get/OMPI_Snapshot.pm    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -128,7 +128,7 @@
</span><br>
<span class="quotelev1">&gt;      my $sha1_file = `grep $ret-&gt;{version}.tar.gz 
</span><br>
<span class="quotelev1">&gt; $sha1_checksums | cut -d\\  -f1`;
</span><br>
<span class="quotelev1">&gt;      chomp($sha1_file);
</span><br>
<span class="quotelev1">&gt;      my $sha1_actual = 
</span><br>
<span class="quotelev1">&gt; MTT::Files::sha1sum(&quot;$tarball_dir/$tarball_name&quot;);
</span><br>
<span class="quotelev1">&gt; -    Abort(&quot;sha1sum from checksum file does not match actual 
</span><br>
<span class="quotelev1">&gt; ($sha1_file != $sha1_actual)&quot;)
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;sha1sum from checksum file does not match actual 
</span><br>
<span class="quotelev1">&gt; ($sha1_file != $sha1_actual)&quot;)
</span><br>
<span class="quotelev1">&gt;          if ($sha1_file ne $sha1_actual);
</span><br>
<span class="quotelev1">&gt;      Debug(&quot;&gt;&gt; Good sha1sum\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0036.php">Ethan Mallove: "Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiple steps]"</a>
<li><strong>Previous message:</strong> <a href="0034.php">Ethan Mallove: "[MTT users] sha1sum on x64 Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="0034.php">Ethan Mallove: "[MTT users] sha1sum on x64 Solaris"</a>
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
