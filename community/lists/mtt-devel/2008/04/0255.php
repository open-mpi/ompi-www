<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 19:51:11 2008" -->
<!-- isoreceived="20080404235111" -->
<!-- sent="Fri, 4 Apr 2008 19:50:52 -0400" -->
<!-- isosent="20080404235052" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1176" -->
<!-- id="2E466306-D883-4C4C-8928-323C069704FA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080404202933.GU51303_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1176<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 19:50:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0256.php">Josh Hursey: "[MTT devel] Contributions down"</a>
<li><strong>Previous message:</strong> <a href="0254.php">Jeff Squyres: "Re: [MTT devel] Launch scaling data in MTT"</a>
<li><strong>In reply to:</strong> <a href="0252.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Um -- yeah, probably.  :-)
<br>
<p>But there's also likely no harm in leaving them there.  :-)
<br>
<p><p>On Apr 4, 2008, at 4:29 PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; I like the &quot;all&quot; keyword. Are these no longer needed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &amp;get_mpi_get_names()
</span><br>
<span class="quotelev1">&gt;  &amp;get_mpi_install_names()
</span><br>
<span class="quotelev1">&gt;  &amp;get_test_get_names()
</span><br>
<span class="quotelev1">&gt;  &amp;get_test_build_names()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr/04/2008 03:31:07PM, jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-04-04 15:31:07 EDT (Fri, 04 Apr 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 1176
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1176">https://svn.open-mpi.org/trac/mtt/changeset/1176</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Allow &quot;all&quot; keyword in mpi_get, test_get, and test_build fields.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/CHANGES                |     5 +++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/lib/MTT/MPI/Install.pm |     9 ++++++---
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/lib/MTT/Test/Build.pm  |     9 ++++++---
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/lib/MTT/Test/Run.pm    |     6 ++++--
</span><br>
<span class="quotelev2">&gt;&gt;   4 files changed, 21 insertions(+), 8 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/CHANGES
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/CHANGES	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/CHANGES	2008-04-04 15:31:07 EDT (Fri, 04 Apr 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -50,6 +50,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;     - &amp;mpi_details() - pass arbitrary values from test run sections
</span><br>
<span class="quotelev2">&gt;&gt;                        to the mpi details section, indexed by string
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +- Allow mpi_get_name, test_get_name, and test_build_name fields to
</span><br>
<span class="quotelev2">&gt;&gt; +  accept the special value &quot;all&quot;, meaning that they'll use all
</span><br>
<span class="quotelev2">&gt;&gt; +  corresponding sections that are found (vs. needing to list every
</span><br>
<span class="quotelev2">&gt;&gt; +  section explicitly)
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; - Added export for MTT_TEST_EXECUTABLE, may be used for clean up  
</span><br>
<span class="quotelev2">&gt;&gt; after
</span><br>
<span class="quotelev2">&gt;&gt;   mpi process : pkill -9 $MTT_TEST_EXECUTABLE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/MPI/Install.pm
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/MPI/Install.pm	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/MPI/Install.pm	2008-04-04 15:31:07 EDT (Fri, 04  
</span><br>
<span class="quotelev2">&gt;&gt; Apr 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -199,7 +199,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 # This is only warning about the INI file; we'll see
</span><br>
<span class="quotelev2">&gt;&gt;                 # if we find meta data for the MPI get later
</span><br>
<span class="quotelev2">&gt;&gt; -                if (!$ini_full-&gt;SectionExists(&quot;mpi get:  
</span><br>
<span class="quotelev2">&gt;&gt; $mpi_get_name&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if ($mpi_get_name ne &quot;all&quot; &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +                    !$ini_full-&gt;SectionExists(&quot;mpi get:  
</span><br>
<span class="quotelev2">&gt;&gt; $mpi_get_name&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;                     Warning(&quot;Warning: MPI Get section  
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;$mpi_get_name\&quot; does not seem to exist in the INI file\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -207,7 +208,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                 # skip it.  Don't issue a warning because command  
</span><br>
<span class="quotelev2">&gt;&gt; line
</span><br>
<span class="quotelev2">&gt;&gt;                 # parameters may well have dictated to skip this MPI
</span><br>
<span class="quotelev2">&gt;&gt;                 # get section.
</span><br>
<span class="quotelev2">&gt;&gt; -                if (!exists($MTT::MPI::sources-&gt;{$mpi_get_name})) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if ($mpi_get_name ne &quot;all&quot; &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +                    !exists($MTT::MPI::sources-&gt;{$mpi_get_name})) {
</span><br>
<span class="quotelev2">&gt;&gt;                     Debug(&quot;Have no sources for MPI Get  
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;$mpi_get_name\&quot;, skipping\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                     next;
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -217,7 +219,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 # For each MPI source
</span><br>
<span class="quotelev2">&gt;&gt;                 foreach my $mpi_get_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$MTT::MPI::sources})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    if ($mpi_get_key eq $mpi_get_name) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    if ($mpi_get_name eq &quot;all&quot; ||
</span><br>
<span class="quotelev2">&gt;&gt; +                        $mpi_get_key eq $mpi_get_name) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         # For each version of that source
</span><br>
<span class="quotelev2">&gt;&gt;                         my $mpi_get = $MTT::MPI::sources- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;{$mpi_get_key};
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/Test/Build.pm
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/Test/Build.pm	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/Test/Build.pm	2008-04-04 15:31:07 EDT (Fri, 04  
</span><br>
<span class="quotelev2">&gt;&gt; Apr 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -120,7 +120,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 # This is only warning about the INI file; we'll see
</span><br>
<span class="quotelev2">&gt;&gt;                 # if we find meta data for the test get later
</span><br>
<span class="quotelev2">&gt;&gt; -                if (!$ini_full-&gt;SectionExists(&quot;test get:  
</span><br>
<span class="quotelev2">&gt;&gt; $test_get_name&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if ($test_get_name ne &quot;all&quot; &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +                    !$ini_full-&gt;SectionExists(&quot;test get:  
</span><br>
<span class="quotelev2">&gt;&gt; $test_get_name&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;                     Warning(&quot;Test Get section \&quot;$test_get_name\&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; does not seem to exist in the INI file\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -128,14 +129,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;                 # skip it.  Don't issue a warning because command  
</span><br>
<span class="quotelev2">&gt;&gt; line
</span><br>
<span class="quotelev2">&gt;&gt;                 # parameters may well have dictated to skip this
</span><br>
<span class="quotelev2">&gt;&gt;                 # section.
</span><br>
<span class="quotelev2">&gt;&gt; -                if (!exists($MTT::Test::sources- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;{$test_get_name})) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if ($test_get_name ne &quot;all&quot; &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +                    !exists($MTT::Test::sources- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;{$test_get_name})) {
</span><br>
<span class="quotelev2">&gt;&gt;                     Debug(&quot;Have no sources for Test Get  
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;$test_get_name\&quot;, skipping\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                     next;
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 # Find the matching test source
</span><br>
<span class="quotelev2">&gt;&gt;                 foreach my $test_get_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$MTT::Test::sources})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    if ($test_get_key eq $test_get_name) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    if ($test_get_name eq &quot;all&quot; ||
</span><br>
<span class="quotelev2">&gt;&gt; +                        $test_get_key eq $test_get_name) {
</span><br>
<span class="quotelev2">&gt;&gt;                         my $test_get = $MTT::Test::sources- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;{$test_get_key};
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         # For each MPI source
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/Test/Run.pm
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/Test/Run.pm	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/Test/Run.pm	2008-04-04 15:31:07 EDT (Fri, 04 Apr  
</span><br>
<span class="quotelev2">&gt;&gt; 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -105,7 +105,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 # This is only warning about the INI file; we'll see
</span><br>
<span class="quotelev2">&gt;&gt;                 # if we find meta data for the test build later
</span><br>
<span class="quotelev2">&gt;&gt; -                if (!$ini_full-&gt;SectionExists(&quot;test build:  
</span><br>
<span class="quotelev2">&gt;&gt; $test_build_name&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if ($test_build_name ne &quot;all&quot; &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +                    !$ini_full-&gt;SectionExists(&quot;test build:  
</span><br>
<span class="quotelev2">&gt;&gt; $test_build_name&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;                     Warning(&quot;Test Build section \&quot;$test_build_name 
</span><br>
<span class="quotelev2">&gt;&gt; \&quot; does not seem to exist in the INI file\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -130,7 +131,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                 last
</span><br>
<span class="quotelev2">&gt;&gt;                                     if  
</span><br>
<span class="quotelev2">&gt;&gt; (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -                                if ($test_build_key eq  
</span><br>
<span class="quotelev2">&gt;&gt; $test_build_name) {
</span><br>
<span class="quotelev2">&gt;&gt; +                                if ($test_build_name eq &quot;all&quot; ||
</span><br>
<span class="quotelev2">&gt;&gt; +                                    $test_build_key eq  
</span><br>
<span class="quotelev2">&gt;&gt; $test_build_name) {
</span><br>
<span class="quotelev2">&gt;&gt;                                     my $test_build =  
</span><br>
<span class="quotelev2">&gt;&gt; $MTT::Test::builds-&gt;{$mpi_get_key}-&gt;{$mpi_version_key}- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;{$mpi_install_key}-&gt;{$test_build_key};
</span><br>
<span class="quotelev2">&gt;&gt;                                     Debug(&quot;Found a match!  
</span><br>
<span class="quotelev2">&gt;&gt; $test_build_key [$simple_section\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                                     if (!$test_build- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;{test_result}) {
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0256.php">Josh Hursey: "[MTT devel] Contributions down"</a>
<li><strong>Previous message:</strong> <a href="0254.php">Jeff Squyres: "Re: [MTT devel] Launch scaling data in MTT"</a>
<li><strong>In reply to:</strong> <a href="0252.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176"</a>
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
