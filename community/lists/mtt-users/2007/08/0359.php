<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 10 16:02:33 2007" -->
<!-- isoreceived="20070810200233" -->
<!-- sent="Fri, 10 Aug 2007 13:02:16 -0700" -->
<!-- isosent="20070810200216" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build" -->
<!-- id="5B11A103-66C1-4599-B2EC-7732D91E73F0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070810171441.GF11675_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-10 16:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Previous message:</strong> <a href="0358.php">Ethan Mallove: "[MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>In reply to:</strong> <a href="0358.php">Ethan Mallove: "[MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Reply:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2007, at 10:14 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Do we still need to write out an INI file after each MPI
</span><br>
<span class="quotelev1">&gt; Install and Test Build? I thought we're using .dump files
</span><br>
<span class="quotelev1">&gt; instead? (I noticed this because it seemed to be taking a few
</span><br>
<span class="quotelev1">&gt; minutes to write the INI file after building the intel
</span><br>
<span class="quotelev1">&gt; tests.)
</span><br>
<p>IIRC, those are test-build-specific files and down far deep in the  
<br>
scratch tree.  The intent was to capture *everything* there  
<br>
(including all of stdout/stderr) in case there was something valuable  
<br>
there that we didn't capture sending up to the DB.
<br>
<p>However, I could see how it wouldn't be too valuable these days.
<br>
<p>How about turning it off, but leaving an option in the [MTT] section  
<br>
to re-enable it if we ever need it again?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Previous message:</strong> <a href="0358.php">Ethan Mallove: "[MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>In reply to:</strong> <a href="0358.php">Ethan Mallove: "[MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Reply:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
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
