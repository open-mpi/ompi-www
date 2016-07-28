<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  6 13:15:49 2006" -->
<!-- isoreceived="20061106181549" -->
<!-- sent="Mon, 6 Nov 2006 13:15:24 -0500" -->
<!-- isosent="20061106181524" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] make distclean option?" -->
<!-- id="424B6A80-FEBD-4895-99BA-7954473AA938_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4D9DB2B8-2E0D-465F-9DF3-EDD029DB4F36_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-11-06 13:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0205.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Previous message:</strong> <a href="0203.php">Josh Hursey: "[MTT users] make distclean option?"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Josh Hursey: "[MTT users] make distclean option?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0212.php">Ethan Mallove: "Re: [MTT users] make distclean option?"</a>
<li><strong>Reply:</strong> <a href="0212.php">Ethan Mallove: "Re: [MTT users] make distclean option?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The intent was to leave the source around so that you could go look  
<br>
at things if there was a problem (especially during a build).
<br>
<p>A probably completed &quot;Trim&quot; phase would have solved this. :-\ (e.g.,  
<br>
keep_successful_mpi_builds = 0).  But Trim is unfortunately quite  
<br>
complex to implement -- that's the only reason it hasn't been done yet.
<br>
<p>As a short-term options, which would you prefer:
<br>
<p>1. a post_build option that will run after a success build/install
<br>
2. an option to simply whack the entire source tree after a  
<br>
successful build/install
<br>
<p><p>On Nov 6, 2006, at 1:10 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Is there a 'post_build' flag in the [MPI Install] section? I'd like
</span><br>
<span class="quotelev1">&gt; to be able to execute a script or 'make distclean' after a version of
</span><br>
<span class="quotelev1">&gt; a branch has been built and installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that we are getting close to our quota on some of the
</span><br>
<span class="quotelev1">&gt; machines that we are using (every night we generate a directory about
</span><br>
<span class="quotelev1">&gt; 1.3 GB, and that quickly adds up). Since the 'source' directory is
</span><br>
<span class="quotelev1">&gt; not really useful (except for config.log) once the branch is
</span><br>
<span class="quotelev1">&gt; installed I'd like to shrink it a bit (or remove it all together).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to do this currently?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0205.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Previous message:</strong> <a href="0203.php">Josh Hursey: "[MTT users] make distclean option?"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Josh Hursey: "[MTT users] make distclean option?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0212.php">Ethan Mallove: "Re: [MTT users] make distclean option?"</a>
<li><strong>Reply:</strong> <a href="0212.php">Ethan Mallove: "Re: [MTT users] make distclean option?"</a>
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
