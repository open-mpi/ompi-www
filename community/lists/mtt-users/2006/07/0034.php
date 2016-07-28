<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 10 15:56:00 2006" -->
<!-- isoreceived="20060710195600" -->
<!-- sent="Mon, 10 Jul 2006 15:55:58 -0400" -->
<!-- isosent="20060710195558" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="[MTT users] sha1sum on x64 Solaris" -->
<!-- id="44B2B0CE.2010906_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAEA22C_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-10 15:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0035.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] sha1sum on x64 Solaris"</a>
<li><strong>Previous message:</strong> <a href="0033.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] database and all that"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0031.php">Jeff Squyres \(jsquyres\): "[MTT users] database and all that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0035.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] sha1sum on x64 Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="0035.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] sha1sum on x64 Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure sha1sum is installed by default on x64 Solaris systems. I don't see it on any of our
<br>
x64 Solaris lab machines. (Not sure how this wasn't a problem until now.) Until we figure out how to
<br>
do SHA1 checksums on x64 Solaris, my workaround is to simply change Abort to Debug when the sha1sum
<br>
checksum comparison fails:
<br>
<p><p>Index: lib/MTT/MPI/Get/OMPI_Snapshot.pm
<br>
===================================================================
<br>
--- lib/MTT/MPI/Get/OMPI_Snapshot.pm    (revision 191)
<br>
+++ lib/MTT/MPI/Get/OMPI_Snapshot.pm    (working copy)
<br>
@@ -128,7 +128,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $sha1_file = `grep $ret-&gt;{version}.tar.gz $sha1_checksums | cut -d\\  -f1`;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;chomp($sha1_file);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $sha1_actual = MTT::Files::sha1sum(&quot;$tarball_dir/$tarball_name&quot;);
<br>
-    Abort(&quot;sha1sum from checksum file does not match actual ($sha1_file != $sha1_actual)&quot;)
<br>
+    Debug(&quot;sha1sum from checksum file does not match actual ($sha1_file != $sha1_actual)&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($sha1_file ne $sha1_actual);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debug(&quot;&gt;&gt; Good sha1sum\n&quot;);
<br>
<p><p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0035.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] sha1sum on x64 Solaris"</a>
<li><strong>Previous message:</strong> <a href="0033.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] database and all that"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0031.php">Jeff Squyres \(jsquyres\): "[MTT users] database and all that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0035.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] sha1sum on x64 Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="0035.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] sha1sum on x64 Solaris"</a>
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
