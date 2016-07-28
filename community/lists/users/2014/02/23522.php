<?
$subject_val = "Re: [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 07:13:34 2014" -->
<!-- isoreceived="20140201121334" -->
<!-- sent="Sat, 1 Feb 2014 12:13:32 +0000" -->
<!-- isosent="20140201121332" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0" -->
<!-- id="A9171008-5E7D-4374-8923-40CD44EA4563_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CACWXmz5W_aftZfxqW9z8hPwiR8ro8e0P_BWns7viJkN-VYOSzg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-01 07:13:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and	Rendezvous) protocols"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23521.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23376.php">Julien Bodart: "[OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the massive delay in replying; I'm going through my inbox this morning and finding old mails that I initially missed.  :-\
<br>
<p>More below.
<br>
<p><p>On Jan 17, 2014, at 8:45 AM, Julien Bodart &lt;julien.bodart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; version: 1.6.5 (compiled with Intel compilers)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; command used:
</span><br>
<span class="quotelev1">&gt; mpirun --machinefile mfile --debug-daemons -np 16 myapp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Description of the problem:
</span><br>
<span class="quotelev1">&gt; When myapp is compiled without optimizations everything runs fine
</span><br>
<span class="quotelev1">&gt; if compiled with -O3, then the application hangs. I cannot reproduce the problem with a hello world test.
</span><br>
<p>-O3 is notorious for both:
<br>
<p>- exposing compiler bugs
<br>
- exposing application bugs
<br>
<p>I just ran across a -O3 compiler bug in gcc 4.8.1 yesterday.
<br>
<p>But more often, it reveals bugs in the application -- something you thought was safe/correct, but actually isn't, and when a compiler makes an aggressive optimization around it, the Badness is revealed.
<br>
<p><span class="quotelev1">&gt; when using --debug-daemons I see the following behavior (PATHTOAPPLICATION= my path to the application)
</span><br>
<p>I'm not quite sure from the context of your mail: are you saying that the difference is whether you compile *your application* with -O3 vs. -O0, or whether you compile *Open MPI* with -O3 vs. -O0?
<br>
<p>I'd also suggest ensuring that you have the latest release of the Intel compiler for your series.  The Intel compiler is like every other piece of software: it has bugs. If you have Intel compiler 12, for example, ensure you have the latest version of the Intel compiler 12 so that you get all the latest bug fixes, etc.  We've seen this kind of thing many times from the different compiler suites.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and	Rendezvous) protocols"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23521.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23376.php">Julien Bodart: "[OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0"</a>
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
