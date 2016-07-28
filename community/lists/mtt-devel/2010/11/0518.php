<?
$subject_val = "Re: [MTT devel] question about the test run";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 14:49:03 2010" -->
<!-- isoreceived="20101104184903" -->
<!-- sent="Thu, 04 Nov 2010 14:48:56 -0400" -->
<!-- isosent="20101104184856" -->
<!-- name="DongInn Kim" -->
<!-- email="dikim_at_[hidden]" -->
<!-- subject="Re: [MTT devel] question about the test run" -->
<!-- id="4CD30018.5090801_at_osl.iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1396760B-B529-4C86-98B2-5DF731506909_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] question about the test run<br>
<strong>From:</strong> DongInn Kim (<em>dikim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 14:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0519.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="0517.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>In reply to:</strong> <a href="0516.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0519.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Reply:</strong> <a href="0519.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, thanks. Jeff.
<br>
<p>I am not sure that this is related to my original question but I was actually looking for a way to have ftt find my test examples with the following.
<br>
#======================================================================
<br>
# Test Run phase
<br>
#======================================================================
<br>
<p># Some default Test run parameters to include in (most) Test run sections
<br>
[Test run]
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
stdout_save_lines = 100
<br>
np = &amp;env_max_procs()
<br>
specify_module = Simple
<br>
<p>[Test run: ftb-examples]
<br>
include_section = Test run
<br>
test_build = ftb-examples
<br>
<p>skipped = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 77))
<br>
<p># Similar rationale to the intel test run section
<br>
simple_first:tests = &amp;find_executables( \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ftb_eventhandle_example&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ftb_example_callback_unsubscribe&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ftb_multiplecomp&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ftb_notify_logger&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ftb_pingpong&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ftb_polling_logger&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ftb_simple_publisher&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ftb_simple_subscriber&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ftb_watchdog&quot;)
<br>
<p># Similar rationale to the intel test run section
<br>
simple_fail:tests = environment/abort environment/final
<br>
simple_fail:pass = &amp;and(&amp;cmd_wifexited(), &amp;ne(&amp;cmd_wexitstatus(), 0))
<br>
simple_fail:exclusive = 1
<br>
simple_fail:np = &amp;env_max_procs()
<br>
<p>The test example codes are listed in simple_first:tests.
<br>
<p>But I don't think that those example codes are called to run at the &quot;Test Run&quot; phase.
<br>
<p>Regards,
<br>
<p>On 11/4/10 2:35 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It's instantiated in lib/MTT/Test.pm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's filled in by LoadBuilds in the same file (i.e., when the results of a prior test build is loaded in from the dump file) and at the bottom of lib/MTT/Test/Build.pm::_do_build(), when the build has completed and it saves the results to the MTT:Test::builds hash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 4, 2010, at 1:59 PM, DongInn Kim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am sorry that I was confused with the variable definition. My question should be how &quot;$MP::Test::builds&quot; is defined.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/4/10 1:42 PM, DongInn Kim wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for all the detailed explanations, Jeff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, if we can manage the MPI part with more generic term, that would be really great so that we can use the same main framework without diverging to another perl module to deal with FTT or something like this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basically, how the &quot;$MTT&quot; is defined and setup in &quot;$MTT::Test::builds&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is used in MTT/Test/Run.pm and I could not find how it is defined. If I find it, I think I can figure out what is going on here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/4/10 11:54 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 4, 2010, at 8:46 AM, Joshua Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just for context. DongInn and Abhishek are working on support for testing of the CIFTS FTB project with MTT. So this would be a non-MPI testing target. They are currently working through some of the issues with supporting an FTB target in the MTT client. I am working with them on getting a new server setup (i.e., database, reporter) for that project.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It might be worthwhile to s/MPI/Middleware/gi throughout the code, or, more specifically, support both &quot;Middleware Install&quot; and &quot;MPI Install&quot; tags in the ini file, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (i.e., we can't ditch &quot;MPI Install&quot; and friends because of the OMPI community using MTT, but if CIFTS and HDF are looking at using MTT, it might make sense to finally make the names a bit more generic)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I found that the several keys of the hash($MTT::Test::builds) are empty in the middle of mtt/lib/MTT/Test/Run.pm:123 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; DB&lt;12&gt; p Dumper(\%{$MTT::Test::builds})
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $VAR1 = {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        '' =&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                '' =&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As you surmise below, you're correct: the above two empty fields should be the names from the MPI Get phase and the corresponding version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                        'platform' =&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You might want a bit more specific name than &quot;platform&quot; here.  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                        'ftb-examples' =&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'mpi_version' =&gt; undef,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IIRC, the MPI::Get module is responsible for setting this value in the data structure that it returns, and it is propagated downward from there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'mpi_name' =&gt; undef,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm pretty sure that this is the name from the MPI::Install phase.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'prepend_path' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'env_modules' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'setenv' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'unsetenv' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'append_path' =&gt; undef,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These values all come directly from the INI file.  If you didn't supply them, it's ok for them to be undef.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prepend_path is stuff to be prepended to $path before running this section.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; append_path is the same, except to be appended to $path.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv is stuff to be set in the environment before running this section.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unsetenv is pretty much the same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; env_modules are environment modules to be loaded before running this section.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All of these cause changes to be effected before the section starts.  The changes are effectively undone when the section ends (e.g., if an env module is loaded, it is unloaded when the section ends).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These values also automatically propagate downwards -- any test runs that use this test build section will &quot;inherit&quot; all of these values before any tests are actually run, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'description' =&gt; undef,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This seems to come from the [MTT] section's &quot;description&quot; field.  I forget offhand what it is for.  I have &quot;description = Cisco MPI development cluster&quot; in my Cisco OMPI testing INI file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'mpi_get_simple_section_name' =&gt; undef,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is also the name from the MPI::Get phase.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                            'mpi_install_id' =&gt; undef,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The MPI::Install module is responsible for setting this... although I don't see where any current MPI::Install module fills in that value.  It might be left over old kruft.  :-\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; - DongInn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
- DongInn
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0519.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="0517.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>In reply to:</strong> <a href="0516.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0519.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Reply:</strong> <a href="0519.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
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
