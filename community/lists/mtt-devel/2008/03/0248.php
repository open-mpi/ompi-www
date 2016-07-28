<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 11:01:21 2008" -->
<!-- isoreceived="20080317150121" -->
<!-- sent="Mon, 17 Mar 2008 11:01:11 -0400" -->
<!-- isosent="20080317150111" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1163" -->
<!-- id="11DA825C-8EA8-469C-B145-2AC11D5D1148_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200803171455.m2HEtadN019039_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1163<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 11:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0249.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
<li><strong>Previous message:</strong> <a href="0247.php">Josh Hursey: "Re: [MTT devel] Weird MTT test names"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0249.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
<li><strong>Reply:</strong> <a href="0249.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan --
<br>
<p>Was there a case where the trivial plugin was not correctly detecting  
<br>
what language bindings to compile against?
<br>
<p>(don't forget to add the new fields to the wiki)
<br>
<p><p>On Mar 17, 2008, at 10:55 AM, emallove_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2008-03-17 10:55:36 EDT (Mon, 17 Mar 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 1163
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1163">https://svn.open-mpi.org/trac/mtt/changeset/1163</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; * Added `trivial_tests_languages` to `Build/Trivial.pm`
</span><br>
<span class="quotelev1">&gt; * Added `clustertools_package_basedir` to
</span><br>
<span class="quotelev1">&gt;   `Install/ClusterTools.pm`
</span><br>
<span class="quotelev1">&gt; * Need to add whitespace to command in `Common/SCM.pm`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/CHANGES                             |     3 +++
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Common/SCM.pm               |    10 +++++-----
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/MPI/Install/ClusterTools.pm |     9 ++++++---
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Test/Build/Trivial.pm       |    22 +++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; +----
</span><br>
<span class="quotelev1">&gt;   4 files changed, 32 insertions(+), 12 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/CHANGES
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/CHANGES	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/CHANGES	2008-03-17 10:55:36 EDT (Mon, 17 Mar 2008)
</span><br>
<span class="quotelev1">&gt; @@ -169,3 +169,6 @@
</span><br>
<span class="quotelev1">&gt;   - after_make_install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - include_file(s) INI parameter - just like pre-processor &quot;#include&quot;  
</span><br>
<span class="quotelev1">&gt; directives
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +- trivial_tests_languages - comma separated list of languages to  
</span><br>
<span class="quotelev1">&gt; use for trivial
</span><br>
<span class="quotelev1">&gt; +  tests (default: &quot;c,c++,f77,f90&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Common/SCM.pm
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Common/SCM.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Common/SCM.pm	2008-03-17 10:55:36 EDT (Mon, 17 Mar  
</span><br>
<span class="quotelev1">&gt; 2008)
</span><br>
<span class="quotelev1">&gt; @@ -266,11 +266,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # Append arguments to commands
</span><br>
<span class="quotelev1">&gt;     # EAM: move to SVN.pm
</span><br>
<span class="quotelev1">&gt; -    $command .= &quot; $command_arguments &quot;   if ($command_arguments);
</span><br>
<span class="quotelev1">&gt; -    $command .= &quot;-r $r &quot;                if ($r);
</span><br>
<span class="quotelev1">&gt; -    $command .= &quot;--username $username &quot; if ($username);
</span><br>
<span class="quotelev1">&gt; -    $command .= &quot;--password $password &quot; if ($password);
</span><br>
<span class="quotelev1">&gt; -    $command .= &quot;--no-auth-cache &quot;      if (&quot;0&quot; eq $password_cache);
</span><br>
<span class="quotelev1">&gt; +    $command .= &quot; $command_arguments &quot;  if ($command_arguments);
</span><br>
<span class="quotelev1">&gt; +    $command .= &quot; -r $r &quot;                if ($r);
</span><br>
<span class="quotelev1">&gt; +    $command .= &quot; --username $username &quot; if ($username);
</span><br>
<span class="quotelev1">&gt; +    $command .= &quot; --password $password &quot; if ($password);
</span><br>
<span class="quotelev1">&gt; +    $command .= &quot; --no-auth-cache &quot;      if (&quot;0&quot; eq $password_cache);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $subcommand .= &quot; $subcommand_arguments &quot;
</span><br>
<span class="quotelev1">&gt;         if ($subcommand_arguments);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/MPI/Install/ClusterTools.pm
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/MPI/Install/ClusterTools.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/MPI/Install/ClusterTools.pm	2008-03-17 10:55:36  
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 17 Mar 2008)
</span><br>
<span class="quotelev1">&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev1">&gt; my $release_number;
</span><br>
<span class="quotelev1">&gt; my $product_version;
</span><br>
<span class="quotelev1">&gt; my $package_name_prefix;
</span><br>
<span class="quotelev1">&gt; +my $package_basedir;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sub Install {
</span><br>
<span class="quotelev1">&gt;     my ($ini, $section, $config) = @_;
</span><br>
<span class="quotelev1">&gt; @@ -74,6 +75,8 @@
</span><br>
<span class="quotelev1">&gt;     $release_number = Value($ini, $section, &quot;clustertools_release&quot;);
</span><br>
<span class="quotelev1">&gt;     $product_version = Value($ini, $section,  
</span><br>
<span class="quotelev1">&gt; &quot;clustertools_product_version&quot;);
</span><br>
<span class="quotelev1">&gt;     $package_name_prefix = Value($ini, $section,  
</span><br>
<span class="quotelev1">&gt; &quot;clustertools_package_name_prefix&quot;);
</span><br>
<span class="quotelev1">&gt; +    $package_basedir = Value($ini, $section,  
</span><br>
<span class="quotelev1">&gt; &quot;clustertools_package_basedir&quot;);
</span><br>
<span class="quotelev1">&gt; +    $package_basedir = $package_basedir ? $package_basedir : &quot;/opt&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # Grab the internal repository revision number
</span><br>
<span class="quotelev1">&gt;     my $internal_r_number = $config-&gt;{module_data}-&gt;{r};
</span><br>
<span class="quotelev1">&gt; @@ -218,11 +221,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # Setup the Installer, if we pointed at one
</span><br>
<span class="quotelev1">&gt;     my $installer_dir;
</span><br>
<span class="quotelev1">&gt; -    my $installer_dir_src = basename($installer_hg_url);
</span><br>
<span class="quotelev1">&gt;     if ($installer_hg_url) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MTT::Module::Run(&quot;MTT::Common::SCM::Mercurial&quot;, &quot;Checkout&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;hg clone $installer_hg_url&quot;, $installer_hg_url);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        my $installer_dir_src = basename($installer_hg_url);
</span><br>
<span class="quotelev1">&gt;         MTT::DoCommand::Pushdir($installer_dir_src);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         # Build the Install_Utilities (OMPIompiat package)
</span><br>
<span class="quotelev1">&gt; @@ -667,7 +670,7 @@
</span><br>
<span class="quotelev1">&gt; # Write a pkginfo file for the specified package.
</span><br>
<span class="quotelev1">&gt; # To be passed to the prototype file.
</span><br>
<span class="quotelev1">&gt; sub _write_pkginfo_file {
</span><br>
<span class="quotelev1">&gt; -    my ($name, $short_name, $desc) = @_;
</span><br>
<span class="quotelev1">&gt; +    my ($name, $short_name, $desc, $package_basedir) = @_;
</span><br>
<span class="quotelev1">&gt;     Debug(&quot;_write_pkginfo_file: got @_\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     my $pkgvers;
</span><br>
<span class="quotelev1">&gt; @@ -699,7 +702,7 @@
</span><br>
<span class="quotelev1">&gt; PKG=\&quot;$name\&quot;
</span><br>
<span class="quotelev1">&gt; NAME=\&quot;$short_name\&quot;
</span><br>
<span class="quotelev1">&gt; VERSION=\&quot;$release_number\&quot;
</span><br>
<span class="quotelev1">&gt; -BASEDIR=\&quot;/opt\&quot;
</span><br>
<span class="quotelev1">&gt; +BASEDIR=\&quot;$package_basedir\&quot;
</span><br>
<span class="quotelev1">&gt; ARCH=\&quot;ISA\&quot;
</span><br>
<span class="quotelev1">&gt; SUNW_PRODVERS=\&quot;$product_version\&quot;
</span><br>
<span class="quotelev1">&gt; SUNW_PRODNAME=\&quot;Open MPI\&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Build/Trivial.pm
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Build/Trivial.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Build/Trivial.pm	2008-03-17 10:55:36 EDT  
</span><br>
<span class="quotelev1">&gt; (Mon, 17 Mar 2008)
</span><br>
<span class="quotelev1">&gt; @@ -55,10 +55,24 @@
</span><br>
<span class="quotelev1">&gt;                        &quot;trivial_tests_cflags&quot;);
</span><br>
<span class="quotelev1">&gt;     my $fflags = Value($ini, $config-&gt;{full_section_name},
</span><br>
<span class="quotelev1">&gt;                        &quot;trivial_tests_fflags&quot;);
</span><br>
<span class="quotelev1">&gt; +    my $languages = Value($ini, $config-&gt;{full_section_name},
</span><br>
<span class="quotelev1">&gt; +                       &quot;trivial_tests_languages&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Default to running *all* flavors of trivial tests
</span><br>
<span class="quotelev1">&gt; +    if (!$languages) {
</span><br>
<span class="quotelev1">&gt; +        $languages = &quot;c,c++,f77,f90&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $languages_hash;
</span><br>
<span class="quotelev1">&gt; +    my @arr = split(/,|\s+/, $languages);
</span><br>
<span class="quotelev1">&gt; +    foreach my $lang (@arr) {
</span><br>
<span class="quotelev1">&gt; +        $lang = lc($lang);
</span><br>
<span class="quotelev1">&gt; +        $languages_hash-&gt;{&quot;$lang&quot;} = 1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # Try compiling and linking a simple C application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if ($mpi_install-&gt;{c_bindings}) {
</span><br>
<span class="quotelev1">&gt; +    if ($mpi_install-&gt;{c_bindings} and $languages_hash-&gt;{&quot;c&quot;}) {
</span><br>
<span class="quotelev1">&gt;         Debug(&quot;Test compile/link sample C MPI application\n&quot;);
</span><br>
<span class="quotelev1">&gt;         $x = _do_compile(&quot;mpicc $cflags&quot;, &quot;hello.c&quot;, &quot;c_hello&quot;);
</span><br>
<span class="quotelev1">&gt;         return $x
</span><br>
<span class="quotelev1">&gt; @@ -73,7 +87,7 @@
</span><br>
<span class="quotelev1">&gt;     # If we have the C++ MPI bindings, try and compile and link a
</span><br>
<span class="quotelev1">&gt;     # simple C++ application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if ($mpi_install-&gt;{cxx_bindings}) {
</span><br>
<span class="quotelev1">&gt; +    if ($mpi_install-&gt;{cxx_bindings} and $languages_hash-&gt;{&quot;c++&quot;}) {
</span><br>
<span class="quotelev1">&gt;         Debug(&quot;Test compile/link sample C++ MPI application\n&quot;);
</span><br>
<span class="quotelev1">&gt;         $x = _do_compile(&quot;mpic++ $cflags&quot;, &quot;hello.cc&quot;, &quot;cxx_hello&quot;);
</span><br>
<span class="quotelev1">&gt;         return $x
</span><br>
<span class="quotelev1">&gt; @@ -88,7 +102,7 @@
</span><br>
<span class="quotelev1">&gt;     # If we have the F77 MPI bindings, try compiling and linking a
</span><br>
<span class="quotelev1">&gt;     # simple F77 application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if ($mpi_install-&gt;{f77_bindings}) {
</span><br>
<span class="quotelev1">&gt; +    if ($mpi_install-&gt;{f77_bindings} and $languages_hash-&gt;{&quot;f77&quot;}) {
</span><br>
<span class="quotelev1">&gt;         Debug(&quot;Test compile/link sample F77 MPI application\n&quot;);
</span><br>
<span class="quotelev1">&gt;         $x = _do_compile(&quot;mpif77 $fflags&quot;, &quot;hello.f&quot;, &quot;f77_hello&quot;);
</span><br>
<span class="quotelev1">&gt;         return $x
</span><br>
<span class="quotelev1">&gt; @@ -103,7 +117,7 @@
</span><br>
<span class="quotelev1">&gt;     # If we have the F90 MPI bindings, try compiling and linking a
</span><br>
<span class="quotelev1">&gt;     # simple F90 application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if ($mpi_install-&gt;{f90_bindings}) {
</span><br>
<span class="quotelev1">&gt; +    if ($mpi_install-&gt;{f90_bindings} and $languages_hash-&gt;{&quot;f90&quot;}) {
</span><br>
<span class="quotelev1">&gt;         Debug(&quot;Test compile/link sample F90 MPI application\n&quot;);
</span><br>
<span class="quotelev1">&gt;         $x = _do_compile(&quot;mpif90 $fflags&quot;, &quot;hello.f90&quot;, &quot;f90_hello&quot;);
</span><br>
<span class="quotelev1">&gt;         return $x
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
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
<li><strong>Next message:</strong> <a href="0249.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
<li><strong>Previous message:</strong> <a href="0247.php">Josh Hursey: "Re: [MTT devel] Weird MTT test names"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0249.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
<li><strong>Reply:</strong> <a href="0249.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
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
