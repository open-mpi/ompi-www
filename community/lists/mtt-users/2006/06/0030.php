<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 13:35:17 2006" -->
<!-- isoreceived="20060630173517" -->
<!-- sent="Fri, 30 Jun 2006 13:34:41 -0400" -->
<!-- isosent="20060630173441" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] escaping quotes issue in DoCommand.pm" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAEA097_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] escaping quotes issue in DoCommand.pm" -->
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
<strong>Date:</strong> 2006-06-30 13:34:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0031.php">Jeff Squyres \(jsquyres\): "[MTT users] database and all that"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Maybe in reply to:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I think we have some intelligence in DoCommand.pm already to handle
<br>
this kind of situation.  Specifically, I think you can do:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure_arguments = &quot;CFLAGS=-xarch=v8plusa -xO5&quot;
<br>
<p>I.e., if you move the first quote to the beginning of the token, I think
<br>
it'll work because DoCommand will treat the whole &quot;CFLAGS=-xarch...O5&quot;
<br>
as a single token.  We could probably improve the parsing algorithm in
<br>
DoCommand.pm to be able to handle the embedded &quot; (as in your first
<br>
example), but it might be a little messy.  Sending in an explicit array
<br>
of tokens is also an option.
<br>
<p>As a sidenote, I might have told you to do the CFLAGS=&quot;...&quot; form.  If
<br>
so, sorry...  :-(
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 30, 2006 12:42 PM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: [MTT users] escaping quotes issue in DoCommand.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think there's an issue with escaping quotes either in DoCommand.pm, 
</span><br>
<span class="quotelev1">&gt; though there's an easy workaround.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is the following .ini param will not work for me 
</span><br>
<span class="quotelev1">&gt; without a 
</span><br>
<span class="quotelev1">&gt; minor change to OMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure_arguments = CFLAGS=&quot;-xarch=v8plusa -xO5&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a simple test program that illustrates the issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ perl -I&lt;path_to_your_mtt&gt;/trunk/lib -d ./test_DoCommand
</span><br>
<span class="quotelev1">&gt; $ cat test_DoCommand
</span><br>
<span class="quotelev1">&gt; #!/usr/bin/perl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; use MTT::DoCommand;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # works!
</span><br>
<span class="quotelev1">&gt; MTT::DoCommand::Cmd(0, qw{./configure CFLAGS=&quot;-g -xarch=v8plusa&quot; 
</span><br>
<span class="quotelev1">&gt; --enable-picky --enable-debug --disable-mpi-f90});
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # doesn't work
</span><br>
<span class="quotelev1">&gt; MTT::DoCommand::Cmd(0, &quot;./configure CFLAGS=&quot;-g -xarch=v8plusa&quot; 
</span><br>
<span class="quotelev1">&gt; --enable-picky --enable-debug --disable-mpi-f90&quot;});
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the workaround that seems to do the trick:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; em162155_at_burl-ct-v440-6-a /workspace/em162155/hpc/mtt/trunk 234&gt; svn 
</span><br>
<span class="quotelev1">&gt; diff lib/MTT/MPI/Install/OMPI.pm
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/MPI/Install/OMPI.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/MPI/Install/OMPI.pm (revision 185)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/MPI/Install/OMPI.pm (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -59,7 +59,7 @@
</span><br>
<span class="quotelev1">&gt;      $ret-&gt;{bindir} = &quot;$ret-&gt;{installdir}/bin&quot;;
</span><br>
<span class="quotelev1">&gt;      $ret-&gt;{libdir} = &quot;$ret-&gt;{installdir}/lib&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    $x = MTT::DoCommand::Cmd(1, &quot;$config-&gt;{configdir}/configure 
</span><br>
<span class="quotelev1">&gt; $config-&gt;{configure_arguments} --prefix=$ret-&gt;{installdir}&quot;);
</span><br>
<span class="quotelev1">&gt; +    $x = MTT::DoCommand::Cmd(1, (&quot;$config-&gt;{configdir}/configure&quot;, 
</span><br>
<span class="quotelev1">&gt; $config-&gt;{configure_arguments}, &quot;--prefix=$ret-&gt;{installdir}&quot;));
</span><br>
<span class="quotelev1">&gt;      $stdout = $x-&gt;{stdout} ? &quot;--- Configure stdout/stderr 
</span><br>
<span class="quotelev1">&gt; ---\n$x-&gt;{stdout}&quot; :
</span><br>
<span class="quotelev1">&gt;          undef;
</span><br>
<span class="quotelev1">&gt;      if ($x-&gt;{status} != 0) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I would favor a revision to lines 101-133 in 
</span><br>
<span class="quotelev1">&gt; DoCommand because 
</span><br>
<span class="quotelev1">&gt; it seems more natural to write DoCommand(&quot;foo bar baz&quot;), then 
</span><br>
<span class="quotelev1">&gt; DoCommand(foo, bar, baz). But I need to think more about how to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
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
<li><strong>Next message:</strong> <a href="0031.php">Jeff Squyres \(jsquyres\): "[MTT users] database and all that"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Maybe in reply to:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
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
