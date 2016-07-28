<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  7 12:14:51 2006" -->
<!-- isoreceived="20061107171451" -->
<!-- sent="Tue, 7 Nov 2006 12:14:41 -0500" -->
<!-- isosent="20061107171441" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] make distclean option?" -->
<!-- id="20061107171440.GC54858_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="424B6A80-FEBD-4895-99BA-7954473AA938_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-07 12:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0213.php">Jeff Squyres: "[MTT users] nightly OMPI tarballs"</a>
<li><strong>Previous message:</strong> <a href="0211.php">Jeff Squyres: "[MTT users] More LANL failures"</a>
<li><strong>In reply to:</strong> <a href="0204.php">Jeff Squyres: "Re: [MTT users] make distclean option?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a workaround that might work. Put something like this
<br>
your INI file:
<br>
<p>[Test build: foo]
<br>
test_get = foo
<br>
module = Shell
<br>
shell_build_command = make
<br>
<p>[Test build: foo clean]
<br>
test_get = foo
<br>
module = Shell
<br>
shell_build_command = make distclean
<br>
<p>Then do:
<br>
<p>$ client/mtt --no-section clean ...
<br>
<p>In a subsequent mtt run, do:
<br>
<p>$ client/mtt --section clean --force
<br>
<p>Or similarly, put all your [build: clean] sections in a
<br>
seperate INI file, and after your initial &quot;real&quot; mtt run do
<br>
something like:
<br>
<p>$ client/mtt clean.ini --force
<br>
<p>-Ethan
<br>
<p><p>On Mon, Nov/06/2006 01:15:24PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The intent was to leave the source around so that you could go look  
</span><br>
<span class="quotelev1">&gt; at things if there was a problem (especially during a build).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A probably completed &quot;Trim&quot; phase would have solved this. :-\ (e.g.,  
</span><br>
<span class="quotelev1">&gt; keep_successful_mpi_builds = 0).  But Trim is unfortunately quite  
</span><br>
<span class="quotelev1">&gt; complex to implement -- that's the only reason it hasn't been done yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a short-term options, which would you prefer:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. a post_build option that will run after a success build/install
</span><br>
<span class="quotelev1">&gt; 2. an option to simply whack the entire source tree after a  
</span><br>
<span class="quotelev1">&gt; successful build/install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2006, at 1:10 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there a 'post_build' flag in the [MPI Install] section? I'd like
</span><br>
<span class="quotelev2">&gt; &gt; to be able to execute a script or 'make distclean' after a version of
</span><br>
<span class="quotelev2">&gt; &gt; a branch has been built and installed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that we are getting close to our quota on some of the
</span><br>
<span class="quotelev2">&gt; &gt; machines that we are using (every night we generate a directory about
</span><br>
<span class="quotelev2">&gt; &gt; 1.3 GB, and that quickly adds up). Since the 'source' directory is
</span><br>
<span class="quotelev2">&gt; &gt; not really useful (except for config.log) once the branch is
</span><br>
<span class="quotelev2">&gt; &gt; installed I'd like to shrink it a bit (or remove it all together).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any way to do this currently?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0213.php">Jeff Squyres: "[MTT users] nightly OMPI tarballs"</a>
<li><strong>Previous message:</strong> <a href="0211.php">Jeff Squyres: "[MTT users] More LANL failures"</a>
<li><strong>In reply to:</strong> <a href="0204.php">Jeff Squyres: "Re: [MTT users] make distclean option?"</a>
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
