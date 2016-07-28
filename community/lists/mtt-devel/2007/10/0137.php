<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 11:39:28 2007" -->
<!-- isoreceived="20071001153928" -->
<!-- sent="Mon, 1 Oct 2007 17:39:15 +0200" -->
<!-- isosent="20071001153915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1066" -->
<!-- id="2AF463D3-D500-43D9-BB26-4252CA1588FF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200709282227.l8SMRtEY026012_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-10-01 11:39:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0138.php">Josh Hursey: "[MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0136.php">Ethan Mallove: "[MTT devel] Run MTT with MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan --
<br>
<p>Don't forget to document all these new fields / funclets on the wiki...
<br>
<p><p>On Sep 29, 2007, at 12:27 AM, emallove_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2007-09-28 18:27:54 EDT (Fri, 28 Sep 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 1066
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1066">https://svn.open-mpi.org/trac/mtt/changeset/1066</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt;  * Added five `Noop.pm` modules (enables one to simply use the MTT  
</span><br>
<span class="quotelev1">&gt; as a run
</span><br>
<span class="quotelev1">&gt;    engine in conjunction with an ''MPI'' Details section)
</span><br>
<span class="quotelev1">&gt;  * Added `@PROGRAM_NAME@` as an INI predefined
</span><br>
<span class="quotelev1">&gt;  * Added `--clean-start` option to run MTT using a fresh scratch dir
</span><br>
<span class="quotelev1">&gt;  * Added `&amp;mpi_details_simple_name()` funclet
</span><br>
<span class="quotelev1">&gt;  * Use `Util::does_hash_key_exist()` in `Test/Build.pm`
</span><br>
<span class="quotelev1">&gt;  * Typo (missing `$`) in `MPI/Install.pm`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/MPI/Get/Noop.pm
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/MPI/Install/Noop.pm
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Build/Noop.pm
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Get/Noop.pm
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Specify/Noop.pm
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/client/mtt                  |    11 +++++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/INI.pm              |     7 +++++++
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/MPI/Install.pm      |     2 +-
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Build.pm       |     9 +++++----
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Run.pm         |     1 +
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Values/Functions.pm |     5 +++++
</span><br>
<span class="quotelev1">&gt;    6 files changed, 30 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/client/mtt
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/client/mtt	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/client/mtt	2007-09-28 18:27:54 EDT (Fri, 28 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -117,6 +117,7 @@
</span><br>
<span class="quotelev1">&gt;  my $verbose_arg;
</span><br>
<span class="quotelev1">&gt;  my $no_execute_arg;
</span><br>
<span class="quotelev1">&gt;  my $force_arg;
</span><br>
<span class="quotelev1">&gt; +my $clean_start_arg;
</span><br>
<span class="quotelev1">&gt;  my $mpi_get_arg;
</span><br>
<span class="quotelev1">&gt;  my $mpi_install_arg;
</span><br>
<span class="quotelev1">&gt;  my $test_get_arg;
</span><br>
<span class="quotelev1">&gt; @@ -141,6 +142,7 @@
</span><br>
<span class="quotelev1">&gt;                                    &quot;verbose|v&quot; =&gt; \$verbose_arg,
</span><br>
<span class="quotelev1">&gt;                                    &quot;no-execute|n&quot; =&gt; \$no_execute_arg,
</span><br>
<span class="quotelev1">&gt;                                    &quot;force&quot; =&gt; \$force_arg,
</span><br>
<span class="quotelev1">&gt; +                                  &quot;clean-start&quot; =&gt; \$clean_start_arg,
</span><br>
<span class="quotelev1">&gt;                                    &quot;mpi-get!&quot; =&gt; \$mpi_get_arg,
</span><br>
<span class="quotelev1">&gt;                                    &quot;mpi-install!&quot; =&gt; \ 
</span><br>
<span class="quotelev1">&gt; $mpi_install_arg,
</span><br>
<span class="quotelev1">&gt;                                    &quot;test-get!&quot; =&gt; \$test_get_arg,
</span><br>
<span class="quotelev1">&gt; @@ -204,6 +206,8 @@
</span><br>
<span class="quotelev1">&gt;  --print-time|-p               Display the amount of time taken in  
</span><br>
<span class="quotelev1">&gt; each phase
</span><br>
<span class="quotelev1">&gt;  --force                       Do steps even if they would not  
</span><br>
<span class="quotelev1">&gt; normally
</span><br>
<span class="quotelev1">&gt;                                be executed
</span><br>
<span class="quotelev1">&gt; +--clean-start                 Clean the scratch directory from
</span><br>
<span class="quotelev1">&gt; +                              past MTT invocations before running
</span><br>
<span class="quotelev1">&gt;  --[no-]trial                  Use when testing your MTT client setup;
</span><br>
<span class="quotelev1">&gt;                                results that are generated and  
</span><br>
<span class="quotelev1">&gt; submitted
</span><br>
<span class="quotelev1">&gt;                                to the database are marked as  
</span><br>
<span class="quotelev1">&gt; \&quot;trials\&quot;
</span><br>
<span class="quotelev1">&gt; @@ -353,6 +357,13 @@
</span><br>
<span class="quotelev1">&gt;  my $runs_data_dir =
</span><br>
<span class="quotelev1">&gt;      MTT::Files::mkdir(&quot;$scratch_arg/$MTT::Defaults::System_config-&gt; 
</span><br>
<span class="quotelev1">&gt; {runs_data_subdir}&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# If requested, do a clean start
</span><br>
<span class="quotelev1">&gt; +if ($clean_start_arg) {
</span><br>
<span class="quotelev1">&gt; +    MTT::DoCommand::Cmd(&quot;rm -rf $source_dir&quot;);
</span><br>
<span class="quotelev1">&gt; +    MTT::DoCommand::Cmd(&quot;rm -rf $install_dir&quot;);
</span><br>
<span class="quotelev1">&gt; +    MTT::DoCommand::Cmd(&quot;rm -rf $runs_data_dir&quot;);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  # Load up all the MPI sources that this system has previously  
</span><br>
<span class="quotelev1">&gt; obtained
</span><br>
<span class="quotelev1">&gt;  MTT::MPI::LoadSources($source_dir)
</span><br>
<span class="quotelev1">&gt;      if ($mpi_get || $mpi_install || $test_build || $test_run ||  
</span><br>
<span class="quotelev1">&gt; $trim);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/INI.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/INI.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/INI.pm	2007-09-28 18:27:54 EDT (Fri, 28 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -247,6 +247,13 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    foreach my $section ($ini-&gt;Sections) {
</span><br>
<span class="quotelev1">&gt; +        if (! defined($ini-&gt;val($section, &quot;PROGRAM_NAME&quot;))) {
</span><br>
<span class="quotelev1">&gt; +            $ini-&gt;delval($section, &quot;PROGRAM_NAME&quot;);
</span><br>
<span class="quotelev1">&gt; +            $ini-&gt;newval($section, &quot;PROGRAM_NAME&quot;, $0);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      return $ini;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/MTT/MPI/Get/Noop.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/MPI/Get/Noop.pm	2007-09-28 18:27:54 EDT (Fri, 28  
</span><br>
<span class="quotelev1">&gt; Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,36 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +package MTT::MPI::Get::Noop;
</span><br>
<span class="quotelev1">&gt; +my $package = __PACKAGE__;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +use MTT::Values;
</span><br>
<span class="quotelev1">&gt; +use Cwd;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#-------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub Get {
</span><br>
<span class="quotelev1">&gt; +    my $ret;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{version} = MTT::Values::RandomString(10);
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{test_result} = MTT::Values::PASS;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{have_new} = 1;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{result_message} = &quot;Success&quot;;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{prepare_for_install} = &quot;${package}::PrepareForInstall&quot;;
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#-------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub PrepareForInstall {
</span><br>
<span class="quotelev1">&gt; +    return cwd();
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/MPI/Install.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/MPI/Install.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/MPI/Install.pm	2007-09-28 18:27:54 EDT (Fri, 28  
</span><br>
<span class="quotelev1">&gt; Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -217,7 +217,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                              Debug(&quot;Checking for [$mpi_get_key] /  
</span><br>
<span class="quotelev1">&gt; [$mpi_version_key] / [$simple_section]\n&quot;);
</span><br>
<span class="quotelev1">&gt;                              if (!$force &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                                defined 
</span><br>
<span class="quotelev1">&gt; (MTT::Util::does_hash_key_exist($MTT::MPI::installs, qw/mpi_get_key  
</span><br>
<span class="quotelev1">&gt; $mpi_version_key $simple_section/))) {
</span><br>
<span class="quotelev1">&gt; +                                defined 
</span><br>
<span class="quotelev1">&gt; (MTT::Util::does_hash_key_exist($MTT::MPI::installs, qw/ 
</span><br>
<span class="quotelev1">&gt; $mpi_get_key $mpi_version_key $simple_section/))) {
</span><br>
<span class="quotelev1">&gt;                                  Verbose(&quot;   Already have an  
</span><br>
<span class="quotelev1">&gt; install for [$mpi_get_key] / [$mpi_version_key] / [$simple_section] 
</span><br>
<span class="quotelev1">&gt; \n&quot;);
</span><br>
<span class="quotelev1">&gt;                              } else {
</span><br>
<span class="quotelev1">&gt;                                  Verbose(&quot;   Installing MPI:  
</span><br>
<span class="quotelev1">&gt; [$mpi_get_key] / [$mpi_version_key] / [$simple_section]...\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/MTT/MPI/Install/Noop.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/MPI/Install/Noop.pm	2007-09-28 18:27:54 EDT (Fri,  
</span><br>
<span class="quotelev1">&gt; 28 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,32 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +package MTT::MPI::Install::Noop;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#-------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub Install {
</span><br>
<span class="quotelev1">&gt; +    my $ret;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{have_new}     = 1;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{test_result}  = MTT::Values::PASS;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{exit_status}  = 0;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{installdir}   = &quot;/dev/null&quot;;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{bindir}       = &quot;/dev/null&quot;;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{libdir}       = &quot;/dev/null&quot;;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{c_bindings}   = 1;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{cxx_bindings} = 1;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{f77_bindings} = 1;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{f90_bindings} = 1;
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Build.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Build.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Build.pm	2007-09-28 18:27:54 EDT (Fri, 28  
</span><br>
<span class="quotelev1">&gt; Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -164,10 +164,11 @@
</span><br>
<span class="quotelev1">&gt;                                      # create each intermediate key.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                      if (!$force &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                                        exists($MTT::Test::builds-&gt; 
</span><br>
<span class="quotelev1">&gt; {$mpi_get_key}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                                        exists($MTT::Test::builds-&gt; 
</span><br>
<span class="quotelev1">&gt; {$mpi_get_key}-&gt;{$mpi_version_key}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                                        exists($MTT::Test::builds-&gt; 
</span><br>
<span class="quotelev1">&gt; {$mpi_get_key}-&gt;{$mpi_version_key}-&gt;{$mpi_install_key}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                                        exists($MTT::Test::builds-&gt; 
</span><br>
<span class="quotelev1">&gt; {$mpi_get_key}-&gt;{$mpi_version_key}-&gt;{$mpi_install_key}-&gt; 
</span><br>
<span class="quotelev1">&gt; {$simple_section})) {
</span><br>
<span class="quotelev1">&gt; +                                        defined 
</span><br>
<span class="quotelev1">&gt; (MTT::Util::does_hash_key_exist($MTT::Test::builds,
</span><br>
<span class="quotelev1">&gt; +                                                                      
</span><br>
<span class="quotelev1">&gt;            qw/$mpi_get_key
</span><br>
<span class="quotelev1">&gt; +                                                                      
</span><br>
<span class="quotelev1">&gt;               $mpi_version_key
</span><br>
<span class="quotelev1">&gt; +                                                                      
</span><br>
<span class="quotelev1">&gt;               $mpi_install_key
</span><br>
<span class="quotelev1">&gt; +                                                                      
</span><br>
<span class="quotelev1">&gt;               $simple_section/))) {
</span><br>
<span class="quotelev1">&gt;                                          Verbose(&quot;   Already have a  
</span><br>
<span class="quotelev1">&gt; build for [$mpi_get_key] / [$mpi_version_key] /  
</span><br>
<span class="quotelev1">&gt; [$mpi_install_key] / [$simple_section]\n&quot;);
</span><br>
<span class="quotelev1">&gt;                                          next;
</span><br>
<span class="quotelev1">&gt;                                      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/MTT/Test/Build/Noop.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Build/Noop.pm	2007-09-28 18:27:54 EDT (Fri,  
</span><br>
<span class="quotelev1">&gt; 28 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,25 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007 Sun Microsystems, Inc. All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +package MTT::Test::Build::Noop;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#-------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub Build {
</span><br>
<span class="quotelev1">&gt; +    my $ret;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{test_result} = MTT::Values::PASS;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{exit_status} = 0;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{result_message} = &quot;Success&quot;;
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/MTT/Test/Get/Noop.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Get/Noop.pm	2007-09-28 18:27:54 EDT (Fri, 28  
</span><br>
<span class="quotelev1">&gt; Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,32 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +package MTT::Test::Get::Noop;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#-------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub Get {
</span><br>
<span class="quotelev1">&gt; +    my $ret;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{have_new} = 1;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{test_result} = MTT::Values::PASS;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{result_message} = &quot;Success&quot;;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{prepare_for_install} =  
</span><br>
<span class="quotelev1">&gt; &quot;MTT::Common::Copytree::PrepareForInstall&quot;;
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#-------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub PrepareForInstall {
</span><br>
<span class="quotelev1">&gt; +    return cwd();
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Run.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Run.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Run.pm	2007-09-28 18:27:54 EDT (Fri, 28 Sep  
</span><br>
<span class="quotelev1">&gt; 2007)
</span><br>
<span class="quotelev1">&gt; @@ -218,6 +218,7 @@
</span><br>
<span class="quotelev1">&gt;                  if ($search eq $mpi_details_simple) {
</span><br>
<span class="quotelev1">&gt;                      $match = 1;
</span><br>
<span class="quotelev1">&gt;                      $MTT::Globals::Internals-&gt;{mpi_details_name} =  
</span><br>
<span class="quotelev1">&gt; $s;
</span><br>
<span class="quotelev1">&gt; +                    $MTT::Globals::Internals-&gt; 
</span><br>
<span class="quotelev1">&gt; {mpi_details_simple_name} = $mpi_details_simple;
</span><br>
<span class="quotelev1">&gt;                      last;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/MTT/Test/Specify/Noop.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Specify/Noop.pm	2007-09-28 18:27:54 EDT  
</span><br>
<span class="quotelev1">&gt; (Fri, 28 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,30 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +package MTT::Test::Specify::Noop;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#-------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub Specify {
</span><br>
<span class="quotelev1">&gt; +    my ($x, $x, $x, $x, $config) = @_;
</span><br>
<span class="quotelev1">&gt; +    my $ret;
</span><br>
<span class="quotelev1">&gt; +    my $one;
</span><br>
<span class="quotelev1">&gt; +    %{$one} = %{$config};
</span><br>
<span class="quotelev1">&gt; +    $one-&gt;{executable} = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +    $one-&gt;{tests} = [&quot;&quot;];
</span><br>
<span class="quotelev1">&gt; +    push(@{$ret-&gt;{tests}}, $one);
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{test_result} = 1;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{np_ok} = 1;
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Values/Functions.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Values/Functions.pm	2007-09-28 18:27:54 EDT (Fri,  
</span><br>
<span class="quotelev1">&gt; 28 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -2030,6 +2030,11 @@
</span><br>
<span class="quotelev1">&gt;      return $MTT::Globals::Internals-&gt;{mpi_details_name};
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +sub mpi_details_simple_name {
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;&amp;mpi_details_simple_name returning:  
</span><br>
<span class="quotelev1">&gt; $MTT::Globals::Internals-&gt;{mpi_details_simple_name}\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    return $MTT::Globals::Internals-&gt;{mpi_details_simple_name};
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -----
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
<li><strong>Next message:</strong> <a href="0138.php">Josh Hursey: "[MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0136.php">Ethan Mallove: "[MTT devel] Run MTT with MTT"</a>
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
