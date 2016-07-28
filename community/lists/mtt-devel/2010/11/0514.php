<?
$subject_val = "Re: [MTT devel] question about the test run";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 11:54:20 2010" -->
<!-- isoreceived="20101104155420" -->
<!-- sent="Thu, 4 Nov 2010 11:54:14 -0400" -->
<!-- isosent="20101104155414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] question about the test run" -->
<!-- id="77B8BD70-A81A-4642-A2E1-934F9B735EC9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="668F2204-DFD3-4AB9-B9BA-905E35181DFC_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 11:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0515.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="0513.php">Joshua Hursey: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>In reply to:</strong> <a href="0512.php">Joshua Hursey: "Re: [MTT devel] question about the test run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0515.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2010, at 8:46 AM, Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Just for context. DongInn and Abhishek are working on support for testing of the CIFTS FTB project with MTT. So this would be a non-MPI testing target. They are currently working through some of the issues with supporting an FTB target in the MTT client. I am working with them on getting a new server setup (i.e., database, reporter) for that project.
</span><br>
<p>It might be worthwhile to s/MPI/Middleware/gi throughout the code, or, more specifically, support both &quot;Middleware Install&quot; and &quot;MPI Install&quot; tags in the ini file, etc.
<br>
<p>(i.e., we can't ditch &quot;MPI Install&quot; and friends because of the OMPI community using MTT, but if CIFTS and HDF are looking at using MTT, it might make sense to finally make the names a bit more generic)
<br>
<p><span class="quotelev2">&gt;&gt; I found that the several keys of the hash($MTT::Test::builds) are empty in the middle of mtt/lib/MTT/Test/Run.pm:123 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; DB&lt;12&gt; p Dumper(\%{$MTT::Test::builds})
</span><br>
<span class="quotelev2">&gt;&gt; $VAR1 = {
</span><br>
<span class="quotelev2">&gt;&gt;         '' =&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;                 '' =&gt; {
</span><br>
<p>As you surmise below, you're correct: the above two empty fields should be the names from the MPI Get phase and the corresponding version.
<br>
<p><span class="quotelev2">&gt;&gt;                         'platform' =&gt; {
</span><br>
<p>You might want a bit more specific name than &quot;platform&quot; here.  :-)
<br>
<p><span class="quotelev2">&gt;&gt;                                         'ftb-examples' =&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;                                                             'mpi_version' =&gt; undef,
</span><br>
<p>IIRC, the MPI::Get module is responsible for setting this value in the data structure that it returns, and it is propagated downward from there.
<br>
<p><span class="quotelev2">&gt;&gt;                                                             'mpi_name' =&gt; undef,
</span><br>
<p>I'm pretty sure that this is the name from the MPI::Install phase.
<br>
<p><span class="quotelev2">&gt;&gt;                                                             'prepend_path' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;                                                             'env_modules' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;                                                             'setenv' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;                                                             'unsetenv' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;                                                             'append_path' =&gt; undef,
</span><br>
<p>These values all come directly from the INI file.  If you didn't supply them, it's ok for them to be undef.
<br>
<p>prepend_path is stuff to be prepended to $path before running this section.
<br>
append_path is the same, except to be appended to $path.
<br>
setenv is stuff to be set in the environment before running this section.
<br>
unsetenv is pretty much the same.
<br>
env_modules are environment modules to be loaded before running this section.
<br>
<p>All of these cause changes to be effected before the section starts.  The changes are effectively undone when the section ends (e.g., if an env module is loaded, it is unloaded when the section ends).
<br>
<p>These values also automatically propagate downwards -- any test runs that use this test build section will &quot;inherit&quot; all of these values before any tests are actually run, etc.
<br>
<p><span class="quotelev2">&gt;&gt;                                                             'description' =&gt; undef,
</span><br>
<p>This seems to come from the [MTT] section's &quot;description&quot; field.  I forget offhand what it is for.  I have &quot;description = Cisco MPI development cluster&quot; in my Cisco OMPI testing INI file.
<br>
<p><span class="quotelev2">&gt;&gt;                                                             'mpi_get_simple_section_name' =&gt; undef,
</span><br>
<p>This is also the name from the MPI::Get phase.
<br>
<p><span class="quotelev2">&gt;&gt;                                                             'mpi_install_id' =&gt; undef,
</span><br>
<p>The MPI::Install module is responsible for setting this... although I don't see where any current MPI::Install module fills in that value.  It might be left over old kruft.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0515.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="0513.php">Joshua Hursey: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>In reply to:</strong> <a href="0512.php">Joshua Hursey: "Re: [MTT devel] question about the test run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0515.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
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
