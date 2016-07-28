<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 11 17:45:31 2007" -->
<!-- isoreceived="20070811214531" -->
<!-- sent="Sat, 11 Aug 2007 09:09:34 -0700" -->
<!-- isosent="20070811160934" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build" -->
<!-- id="798D36E1-0871-4D46-BE5D-FBBAB0BF70B0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070810212305.GG11675_at_sun.com" -->
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
<strong>Date:</strong> 2007-08-11 12:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">Josh Hursey: "[MTT users] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>In reply to:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2007, at 2:23 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Looking a little closer, there are inconsistencies in what's
</span><br>
<span class="quotelev1">&gt; going to the saved .dump and .ini files:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Test Run .dump (split up by variants):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Everything (including stdout/stderr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Test Run .ini:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Nothing
</span><br>
<p>That sounds fine.
<br>
<p><span class="quotelev1">&gt;   Test Build .dump:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Everything (except stdout/stderr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Test Build .ini (split up by test suites):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Everything execept database serials, mpi_name,
</span><br>
<span class="quotelev1">&gt;       and environment (e.g., prepend_path, env_module, etc)
</span><br>
<p>This .ini might be a remnant left over from prior days; I  
<br>
unfortunately don't remember...
<br>
<p>Should we save the stdout/stderr in the .dump, and then the .dump  
<br>
would have *everything*?
<br>
<p><span class="quotelev1">&gt;   MPI Install .ini:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Nothing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI Install .dump:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Everything
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about we put *everything* in the .dump files, while
</span><br>
<span class="quotelev1">&gt; offering to also save *everything* in INI files in the [MTT]
</span><br>
<span class="quotelev1">&gt; section? Though Perl-Dumper is only slightly less
</span><br>
<span class="quotelev1">&gt; human-readble than INI.
</span><br>
<p>Actually, given what you've shown above, I'd be ok ditching the .ini  
<br>
files altogether.
<br>
<p><span class="quotelev1">&gt; These are also a little confusing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   save_stdout_on_success
</span><br>
<span class="quotelev1">&gt;   stderr_save_lines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't we want these instead broken up into two: inifile and
</span><br>
<span class="quotelev1">&gt; mttdatabase? So a user might choose to save more or less on
</span><br>
<span class="quotelev1">&gt; their disk than to the database?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   save_stdout_on_success_to_mttdatabase
</span><br>
<span class="quotelev1">&gt;   stderr_save_lines_to_mttdatabase
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   save_stdout_on_success_to_inifile
</span><br>
<span class="quotelev1">&gt;   stderr_save_lines_to_inifile
</span><br>
<p>I always viewed the .dump file as a 2nd copy of whatever we send to  
<br>
the reporter (not just the mttdatabase).  So I kinda thought that  
<br>
they should save the same thing, and you could use the .dump file to  
<br>
resubmit to the reporter if you ever needed to (we've made a few  
<br>
attempts at resubmit over the years but never wrote a comprehensive/ 
<br>
easy-to-use resubmit tool).
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
<li><strong>Next message:</strong> <a href="0362.php">Josh Hursey: "[MTT users] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>In reply to:</strong> <a href="0360.php">Ethan Mallove: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
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
