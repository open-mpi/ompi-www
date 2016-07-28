<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 10 17:23:11 2007" -->
<!-- isoreceived="20070810212311" -->
<!-- sent="Fri, 10 Aug 2007 17:23:05 -0400" -->
<!-- isosent="20070810212305" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build" -->
<!-- id="20070810212305.GG11675_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5B11A103-66C1-4599-B2EC-7732D91E73F0_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-10 17:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Previous message:</strong> <a href="0359.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>In reply to:</strong> <a href="0359.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Reply:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug/10/2007 01:02:16PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 10, 2007, at 10:14 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do we still need to write out an INI file after each MPI
</span><br>
<span class="quotelev2">&gt; &gt; Install and Test Build? I thought we're using .dump
</span><br>
<span class="quotelev2">&gt; &gt; files instead? (I noticed this because it seemed to be
</span><br>
<span class="quotelev2">&gt; &gt; taking a few minutes to write the INI file after
</span><br>
<span class="quotelev2">&gt; &gt; building the intel tests.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IIRC, those are test-build-specific files and down far
</span><br>
<span class="quotelev1">&gt; deep in the  scratch tree.  The intent was to capture
</span><br>
<span class="quotelev1">&gt; *everything* there  (including all of stdout/stderr) in
</span><br>
<span class="quotelev1">&gt; case there was something valuable  there that we didn't
</span><br>
<span class="quotelev1">&gt; capture sending up to the DB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I could see how it wouldn't be too valuable these
</span><br>
<span class="quotelev1">&gt; days.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about turning it off, but leaving an option in the
</span><br>
<span class="quotelev1">&gt; [MTT] section  to re-enable it if we ever need it again?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Looking a little closer, there are inconsistencies in what's
<br>
going to the saved .dump and .ini files:
<br>
<p>&nbsp;&nbsp;Test Run .dump (split up by variants):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Everything (including stdout/stderr)
<br>
<p>&nbsp;&nbsp;Test Run .ini:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Nothing
<br>
<p>&nbsp;&nbsp;Test Build .dump:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Everything (except stdout/stderr)
<br>
<p>&nbsp;&nbsp;Test Build .ini (split up by test suites):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Everything execept database serials, mpi_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and environment (e.g., prepend_path, env_module, etc)
<br>
<p>&nbsp;&nbsp;MPI Install .ini:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Nothing
<br>
<p>&nbsp;&nbsp;MPI Install .dump:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Everything
<br>
<p>How about we put *everything* in the .dump files, while
<br>
offering to also save *everything* in INI files in the [MTT]
<br>
section? Though Perl-Dumper is only slightly less
<br>
human-readble than INI.  
<br>
<p>These are also a little confusing:
<br>
<p>&nbsp;&nbsp;save_stdout_on_success 
<br>
&nbsp;&nbsp;stderr_save_lines
<br>
<p>Don't we want these instead broken up into two: inifile and
<br>
mttdatabase? So a user might choose to save more or less on
<br>
their disk than to the database?
<br>
<p>&nbsp;&nbsp;save_stdout_on_success_to_mttdatabase
<br>
&nbsp;&nbsp;stderr_save_lines_to_mttdatabase
<br>
<p>&nbsp;&nbsp;save_stdout_on_success_to_inifile
<br>
&nbsp;&nbsp;stderr_save_lines_to_inifile
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
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
<li><strong>Next message:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Previous message:</strong> <a href="0359.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>In reply to:</strong> <a href="0359.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Reply:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
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
