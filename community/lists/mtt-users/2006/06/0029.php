<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 12:41:50 2006" -->
<!-- isoreceived="20060630164150" -->
<!-- sent="Fri, 30 Jun 2006 12:41:47 -0400" -->
<!-- isosent="20060630164147" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="[MTT users] escaping quotes issue in DoCommand.pm" -->
<!-- id="44A5544B.6050109_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9E47_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-30 12:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0030.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Previous message:</strong> <a href="0028.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>In reply to:</strong> <a href="0028.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0030.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Maybe reply:</strong> <a href="0030.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] escaping quotes issue in DoCommand.pm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think there's an issue with escaping quotes either in DoCommand.pm, 
<br>
though there's an easy workaround.
<br>
<p>The problem is the following .ini param will not work for me without a 
<br>
minor change to OMPI:
<br>
<p>configure_arguments = CFLAGS=&quot;-xarch=v8plusa -xO5&quot;
<br>
<p>Here's a simple test program that illustrates the issue:
<br>
<p><pre>
---
$ perl -I&lt;path_to_your_mtt&gt;/trunk/lib -d ./test_DoCommand
$ cat test_DoCommand
#!/usr/bin/perl
use MTT::DoCommand;
# works!
MTT::DoCommand::Cmd(0, qw{./configure CFLAGS=&quot;-g -xarch=v8plusa&quot; 
--enable-picky --enable-debug --disable-mpi-f90});
# doesn't work
MTT::DoCommand::Cmd(0, &quot;./configure CFLAGS=&quot;-g -xarch=v8plusa&quot; 
--enable-picky --enable-debug --disable-mpi-f90&quot;});
---
Here's the workaround that seems to do the trick:
em162155_at_burl-ct-v440-6-a /workspace/em162155/hpc/mtt/trunk 234&gt; svn 
diff lib/MTT/MPI/Install/OMPI.pm
Index: lib/MTT/MPI/Install/OMPI.pm
===================================================================
--- lib/MTT/MPI/Install/OMPI.pm (revision 185)
+++ lib/MTT/MPI/Install/OMPI.pm (working copy)
@@ -59,7 +59,7 @@
     $ret-&gt;{bindir} = &quot;$ret-&gt;{installdir}/bin&quot;;
     $ret-&gt;{libdir} = &quot;$ret-&gt;{installdir}/lib&quot;;
-    $x = MTT::DoCommand::Cmd(1, &quot;$config-&gt;{configdir}/configure 
$config-&gt;{configure_arguments} --prefix=$ret-&gt;{installdir}&quot;);
+    $x = MTT::DoCommand::Cmd(1, (&quot;$config-&gt;{configdir}/configure&quot;, 
$config-&gt;{configure_arguments}, &quot;--prefix=$ret-&gt;{installdir}&quot;));
     $stdout = $x-&gt;{stdout} ? &quot;--- Configure stdout/stderr 
---\n$x-&gt;{stdout}&quot; :
         undef;
     if ($x-&gt;{status} != 0) {
---
I think I would favor a revision to lines 101-133 in DoCommand because 
it seems more natural to write DoCommand(&quot;foo bar baz&quot;), then 
DoCommand(foo, bar, baz). But I need to think more about how to do it.
-Ethan
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0030.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Previous message:</strong> <a href="0028.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>In reply to:</strong> <a href="0028.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0030.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Maybe reply:</strong> <a href="0030.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] escaping quotes issue in DoCommand.pm"</a>
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
