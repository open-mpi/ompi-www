<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 16:29:43 2008" -->
<!-- isoreceived="20080404202943" -->
<!-- sent="Fri, 4 Apr 2008 16:29:33 -0400" -->
<!-- isosent="20080404202933" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1176" -->
<!-- id="20080404202933.GU51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200804041931.m34JV7vt008046_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 16:29:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0253.php">Ethan Mallove: "[MTT devel] Launch scaling data in MTT"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/03/0251.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0255.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176"</a>
<li><strong>Reply:</strong> <a href="0255.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I like the &quot;all&quot; keyword. Are these no longer needed?
<br>
<p>&nbsp;&nbsp;&amp;get_mpi_get_names()
<br>
&nbsp;&nbsp;&amp;get_mpi_install_names()
<br>
&nbsp;&nbsp;&amp;get_test_get_names()
<br>
&nbsp;&nbsp;&amp;get_test_build_names()
<br>
<p>-Ethan
<br>
<p>On Fri, Apr/04/2008 03:31:07PM, jsquyres_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2008-04-04 15:31:07 EDT (Fri, 04 Apr 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 1176
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1176">https://svn.open-mpi.org/trac/mtt/changeset/1176</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Allow &quot;all&quot; keyword in mpi_get, test_get, and test_build fields.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/CHANGES                |     5 +++++                                   
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/MPI/Install.pm |     9 ++++++---                               
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Build.pm  |     9 ++++++---                               
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Run.pm    |     6 ++++--                                  
</span><br>
<span class="quotelev1">&gt;    4 files changed, 21 insertions(+), 8 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/CHANGES
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/CHANGES	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/CHANGES	2008-04-04 15:31:07 EDT (Fri, 04 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -50,6 +50,11 @@
</span><br>
<span class="quotelev1">&gt;      - &amp;mpi_details() - pass arbitrary values from test run sections
</span><br>
<span class="quotelev1">&gt;                         to the mpi details section, indexed by string
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +- Allow mpi_get_name, test_get_name, and test_build_name fields to
</span><br>
<span class="quotelev1">&gt; +  accept the special value &quot;all&quot;, meaning that they'll use all
</span><br>
<span class="quotelev1">&gt; +  corresponding sections that are found (vs. needing to list every
</span><br>
<span class="quotelev1">&gt; +  section explicitly)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  - Added export for MTT_TEST_EXECUTABLE, may be used for clean up after
</span><br>
<span class="quotelev1">&gt;    mpi process : pkill -9 $MTT_TEST_EXECUTABLE
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/MPI/Install.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/MPI/Install.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/MPI/Install.pm	2008-04-04 15:31:07 EDT (Fri, 04 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -199,7 +199,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  # This is only warning about the INI file; we'll see
</span><br>
<span class="quotelev1">&gt;                  # if we find meta data for the MPI get later
</span><br>
<span class="quotelev1">&gt; -                if (!$ini_full-&gt;SectionExists(&quot;mpi get: $mpi_get_name&quot;)) {
</span><br>
<span class="quotelev1">&gt; +                if ($mpi_get_name ne &quot;all&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                    !$ini_full-&gt;SectionExists(&quot;mpi get: $mpi_get_name&quot;)) {
</span><br>
<span class="quotelev1">&gt;                      Warning(&quot;Warning: MPI Get section \&quot;$mpi_get_name\&quot; does not seem to exist in the INI file\n&quot;);
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -207,7 +208,8 @@
</span><br>
<span class="quotelev1">&gt;                  # skip it.  Don't issue a warning because command line
</span><br>
<span class="quotelev1">&gt;                  # parameters may well have dictated to skip this MPI
</span><br>
<span class="quotelev1">&gt;                  # get section.
</span><br>
<span class="quotelev1">&gt; -                if (!exists($MTT::MPI::sources-&gt;{$mpi_get_name})) {
</span><br>
<span class="quotelev1">&gt; +                if ($mpi_get_name ne &quot;all&quot; &amp;&amp; 
</span><br>
<span class="quotelev1">&gt; +                    !exists($MTT::MPI::sources-&gt;{$mpi_get_name})) {
</span><br>
<span class="quotelev1">&gt;                      Debug(&quot;Have no sources for MPI Get \&quot;$mpi_get_name\&quot;, skipping\n&quot;);
</span><br>
<span class="quotelev1">&gt;                      next;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; @@ -217,7 +219,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  # For each MPI source
</span><br>
<span class="quotelev1">&gt;                  foreach my $mpi_get_key (keys(%{$MTT::MPI::sources})) {
</span><br>
<span class="quotelev1">&gt; -                    if ($mpi_get_key eq $mpi_get_name) {
</span><br>
<span class="quotelev1">&gt; +                    if ($mpi_get_name eq &quot;all&quot; ||
</span><br>
<span class="quotelev1">&gt; +                        $mpi_get_key eq $mpi_get_name) {
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                          # For each version of that source
</span><br>
<span class="quotelev1">&gt;                          my $mpi_get = $MTT::MPI::sources-&gt;{$mpi_get_key};
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Build.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Build.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Build.pm	2008-04-04 15:31:07 EDT (Fri, 04 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -120,7 +120,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  # This is only warning about the INI file; we'll see
</span><br>
<span class="quotelev1">&gt;                  # if we find meta data for the test get later
</span><br>
<span class="quotelev1">&gt; -                if (!$ini_full-&gt;SectionExists(&quot;test get: $test_get_name&quot;)) {
</span><br>
<span class="quotelev1">&gt; +                if ($test_get_name ne &quot;all&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                    !$ini_full-&gt;SectionExists(&quot;test get: $test_get_name&quot;)) {
</span><br>
<span class="quotelev1">&gt;                      Warning(&quot;Test Get section \&quot;$test_get_name\&quot; does not seem to exist in the INI file\n&quot;);
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -128,14 +129,16 @@
</span><br>
<span class="quotelev1">&gt;                  # skip it.  Don't issue a warning because command line
</span><br>
<span class="quotelev1">&gt;                  # parameters may well have dictated to skip this
</span><br>
<span class="quotelev1">&gt;                  # section.
</span><br>
<span class="quotelev1">&gt; -                if (!exists($MTT::Test::sources-&gt;{$test_get_name})) {
</span><br>
<span class="quotelev1">&gt; +                if ($test_get_name ne &quot;all&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                    !exists($MTT::Test::sources-&gt;{$test_get_name})) {
</span><br>
<span class="quotelev1">&gt;                      Debug(&quot;Have no sources for Test Get \&quot;$test_get_name\&quot;, skipping\n&quot;);
</span><br>
<span class="quotelev1">&gt;                      next;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  # Find the matching test source
</span><br>
<span class="quotelev1">&gt;                  foreach my $test_get_key (keys(%{$MTT::Test::sources})) {
</span><br>
<span class="quotelev1">&gt; -                    if ($test_get_key eq $test_get_name) {
</span><br>
<span class="quotelev1">&gt; +                    if ($test_get_name eq &quot;all&quot; ||
</span><br>
<span class="quotelev1">&gt; +                        $test_get_key eq $test_get_name) {
</span><br>
<span class="quotelev1">&gt;                          my $test_get = $MTT::Test::sources-&gt;{$test_get_key};
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                          # For each MPI source
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Run.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Run.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Run.pm	2008-04-04 15:31:07 EDT (Fri, 04 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -105,7 +105,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  # This is only warning about the INI file; we'll see
</span><br>
<span class="quotelev1">&gt;                  # if we find meta data for the test build later
</span><br>
<span class="quotelev1">&gt; -                if (!$ini_full-&gt;SectionExists(&quot;test build: $test_build_name&quot;)) {
</span><br>
<span class="quotelev1">&gt; +                if ($test_build_name ne &quot;all&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                    !$ini_full-&gt;SectionExists(&quot;test build: $test_build_name&quot;)) {
</span><br>
<span class="quotelev1">&gt;                      Warning(&quot;Test Build section \&quot;$test_build_name\&quot; does not seem to exist in the INI file\n&quot;);
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -130,7 +131,8 @@
</span><br>
<span class="quotelev1">&gt;                                  last
</span><br>
<span class="quotelev1">&gt;                                      if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -                                if ($test_build_key eq $test_build_name) {
</span><br>
<span class="quotelev1">&gt; +                                if ($test_build_name eq &quot;all&quot; ||
</span><br>
<span class="quotelev1">&gt; +                                    $test_build_key eq $test_build_name) {
</span><br>
<span class="quotelev1">&gt;                                      my $test_build = $MTT::Test::builds-&gt;{$mpi_get_key}-&gt;{$mpi_version_key}-&gt;{$mpi_install_key}-&gt;{$test_build_key};
</span><br>
<span class="quotelev1">&gt;                                      Debug(&quot;Found a match! $test_build_key [$simple_section\n&quot;);
</span><br>
<span class="quotelev1">&gt;                                      if (!$test_build-&gt;{test_result}) {
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0253.php">Ethan Mallove: "[MTT devel] Launch scaling data in MTT"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/03/0251.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0255.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176"</a>
<li><strong>Reply:</strong> <a href="0255.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176"</a>
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
