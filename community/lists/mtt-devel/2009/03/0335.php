<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 16:13:18 2009" -->
<!-- isoreceived="20090311201318" -->
<!-- sent="Wed, 11 Mar 2009 15:13:05 -0500" -->
<!-- isosent="20090311201305" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="20090311201304.GE26920_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="36D9502E-25A6-4864-88F2-D5E296E85642_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT on Windows<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 16:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0336.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0336.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar/11/2009 03:47:22PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Thanks for your patience!  Yes, this looks good to me with one minor nit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    if(($sys_type == &quot;Cygwin&quot; || $sys_type == &quot;Msys&quot;) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +        $config-&gt;{compiler_name} == &quot;microsoft&quot;) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    if(($sys_type eq &quot;Cygwin&quot; || $sys_type eq &quot;Msys&quot;) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +        $config-&gt;{compiler_name} eq &quot;microsoft&quot;) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh / Ethan -- got any comments for Shiqing?
</span><br>
<p>I just noticed last night's CYGWIN results. Nice!
<br>
<p>Should a regexp (see below) be used in case the sys_type comes back as, e.g.,
<br>
&quot;cygwin&quot;, &quot;CYGWIN&quot;, &quot;cygwin-2.0&quot;, etc.?
<br>
<p>&nbsp;&nbsp;$sys_type =~ /cygwin/i
<br>
<p>Other than that, it looks good to me.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2009, at 2:58 PM, Shiqing Fan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the carelessness. This time it looks better? :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can you double check your cr / cr/lf settings?  It looks like you're
</span><br>
<span class="quotelev3">&gt;&gt; &gt; committing in the windows format -- can you convert and commit in the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; unix format?  That way, it wouldn't look like the entire
</span><br>
<span class="quotelev3">&gt;&gt; &gt; GNU_Install.pm file is being replaced, for example.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I forgot to mention in my last mail -- since cmake *only* works on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Windows and our Autotools system *doesn't* work on Windows, I retract
</span><br>
<span class="quotelev3">&gt;&gt; &gt; my earlier statement: don't bother with an ompi_cmake parameter in the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; .ini file.  Just have OMPI.pm figure out if you're on cygwin or mingw
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and call the right back-end building function.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Also, in Do_Step.pm, you might want to remove the &quot;_&quot; prefix from the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; sub names.  &quot;_&quot; as a prefix in perl is meant to imply that it's a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; private variable/method.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Finally, in Do_Step.pm, do you have two _do_step() functions?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- lib/Filesys/DiskFree.pm	(revision 1271)
</span><br>
<span class="quotelev2">&gt;&gt; +++ lib/Filesys/DiskFree.pm	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -29,6 +29,16 @@
</span><br>
<span class="quotelev2">&gt;&gt; 	'inodes' =&gt; &quot;df -Pi&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; 	'format' =&gt; &quot;linuxish&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;     },
</span><br>
<span class="quotelev2">&gt;&gt; +    'cygwin' =&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; +	'blocks' =&gt; &quot;df -P&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +	'inodes' =&gt; &quot;df -Pi&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +	'format' =&gt; &quot;linuxish&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +    },
</span><br>
<span class="quotelev2">&gt;&gt; +    'msys' =&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; +	'blocks' =&gt; &quot;df -P&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +	'inodes' =&gt; &quot;df -Pi&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +	'format' =&gt; &quot;linuxish&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +    },
</span><br>
<span class="quotelev2">&gt;&gt;     'solaris' =&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; 	'blocks' =&gt; &quot;df -k&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; 	'inodes' =&gt; &quot;df -k -o i -F ufs&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; Index: lib/MTT/Common/Cmake.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- lib/MTT/Common/Cmake.pm	(revision 0)
</span><br>
<span class="quotelev2">&gt;&gt; +++ lib/MTT/Common/Cmake.pm	(revision 0)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -0,0 +1,77 @@
</span><br>
<span class="quotelev2">&gt;&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev2">&gt;&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2009      High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt;&gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +package MTT::Common::Cmake;
</span><br>
<span class="quotelev2">&gt;&gt; +my $package = ModuleName(__PACKAGE__);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +use strict;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Messages;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Values;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Common::Do_step;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +# Do the following steps:
</span><br>
<span class="quotelev2">&gt;&gt; +#   [ ] cmake -G &quot;generator&quot; -D configure_arguments source_path
</span><br>
<span class="quotelev2">&gt;&gt; +#   [ ] devenv OpenMPI.sln /build
</span><br>
<span class="quotelev2">&gt;&gt; +sub Install {
</span><br>
<span class="quotelev2">&gt;&gt; +    my ($config) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    my $x;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $result_stdout;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $result_stderr;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Prepare $ret
</span><br>
<span class="quotelev2">&gt;&gt; +    my $ret;
</span><br>
<span class="quotelev2">&gt;&gt; +    $ret-&gt;{test_result} = MTT::Values::FAIL;
</span><br>
<span class="quotelev2">&gt;&gt; +    $ret-&gt;{exit_status} = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # On windows, do the following steps:
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # prepare the windows style prefix.
</span><br>
<span class="quotelev2">&gt;&gt; +    # replace '/cygdrive/x/' with 'x:/'
</span><br>
<span class="quotelev2">&gt;&gt; +    my $win_prefix = substr ($config-&gt;{installdir},10,1) . &quot;:&quot; . substr 
</span><br>
<span class="quotelev2">&gt;&gt; ($config-&gt;{installdir},11);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # generate Visual Studio solution files
</span><br>
<span class="quotelev2">&gt;&gt; +    # use 'script' to redirect MS command output
</span><br>
<span class="quotelev2">&gt;&gt; +    $x = MTT::Common::Do_step::do_step($config,
</span><br>
<span class="quotelev2">&gt;&gt; +                                        &quot;script -a -c \&quot;cmake 
</span><br>
<span class="quotelev2">&gt;&gt; $config-&gt;{configure_arguments} -D CMAKE_INSTALL_PREFIX:PATH=$win_prefix 
</span><br>
<span class="quotelev2">&gt;&gt; .\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                        $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Overlapping keys in $x override $ret
</span><br>
<span class="quotelev2">&gt;&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev2">&gt;&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # compile the whole solution
</span><br>
<span class="quotelev2">&gt;&gt; +    $x = MTT::Common::Do_step::do_step($config, &quot;script -a -c 
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;devenv.com *.sln /build debug\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                        $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev2">&gt;&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev2">&gt;&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # install to the prefix dir
</span><br>
<span class="quotelev2">&gt;&gt; +    $x = MTT::Common::Do_step::do_step($config, &quot;script -a -c 
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;devenv.com *.sln /project INSTALL.vcproj /build\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                        $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev2">&gt;&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev2">&gt;&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # All done!
</span><br>
<span class="quotelev2">&gt;&gt; +    $ret-&gt;{test_result} = MTT::Values::PASS;
</span><br>
<span class="quotelev2">&gt;&gt; +    $ret-&gt;{result_message} = &quot;Success&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    Debug(&quot;Build was a success\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return $ret;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +1;
</span><br>
<span class="quotelev2">&gt;&gt; Index: lib/MTT/Common/Do_step.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- lib/MTT/Common/Do_step.pm	(revision 0)
</span><br>
<span class="quotelev2">&gt;&gt; +++ lib/MTT/Common/Do_step.pm	(revision 0)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -0,0 +1,139 @@
</span><br>
<span class="quotelev2">&gt;&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev2">&gt;&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2009      High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt;&gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +package MTT::Common::Do_step;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +use strict;
</span><br>
<span class="quotelev2">&gt;&gt; +use Data::Dumper;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::DoCommand;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Messages;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::FindProgram;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Values;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Files;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +sub do_step {
</span><br>
<span class="quotelev2">&gt;&gt; +    my ($config, $cmd, $mss, $dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Prepare return value. Start with an empty, but defined hash
</span><br>
<span class="quotelev2">&gt;&gt; +    my $ret = {};
</span><br>
<span class="quotelev2">&gt;&gt; +    my $result_stdout;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $result_stderr;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # As long as this pattern is emitted during the step, keep
</span><br>
<span class="quotelev2">&gt;&gt; +    # attempting to re-start the step (&quot;restart_attempts&quot; times)
</span><br>
<span class="quotelev2">&gt;&gt; +    my $restart_on_pattern;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $restart_attempts_max = 500;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $restart_attempts = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (defined($config-&gt;{restart_on_pattern})) {
</span><br>
<span class="quotelev2">&gt;&gt; +        $restart_on_pattern = $config-&gt;{restart_on_pattern};
</span><br>
<span class="quotelev2">&gt;&gt; +    } else {
</span><br>
<span class="quotelev2">&gt;&gt; +        $restart_attempts_max = -1;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Hash keys and INI params do not contain spaces. Change them to 
</span><br>
<span class="quotelev2">&gt;&gt; underscores.
</span><br>
<span class="quotelev2">&gt;&gt; +    my $hash_key = $cmd;
</span><br>
<span class="quotelev2">&gt;&gt; +    $hash_key =~ s/ /_/g;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Optional path for program
</span><br>
<span class="quotelev2">&gt;&gt; +    if (defined($dir)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        $cmd = &quot;$dir/$cmd&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    my $arguments_key = &quot;${hash_key}_arguments&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $stdout_key = &quot;${hash_key}_stdout&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $stderr_key = &quot;${hash_key}_stderr&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $skip_key = &quot;skip_${hash_key}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $before_cmd_key = &quot;before_${hash_key}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $after_cmd_key = &quot;after_${hash_key}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (defined($config-&gt;{$before_cmd_key})) {
</span><br>
<span class="quotelev2">&gt;&gt; +        _run_step($config-&gt;{$before_cmd_key}, $before_cmd_key);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (!$config-&gt;{$skip_key}) {
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        my $i = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +        do {
</span><br>
<span class="quotelev2">&gt;&gt; +            Debug(&quot;Restarting $cmd (restart attempt #$i\n&quot;) if ($i++ gt 
</span><br>
<span class="quotelev2">&gt;&gt; 0);
</span><br>
<span class="quotelev2">&gt;&gt; +            $ret = MTT::DoCommand::Cmd($mss,
</span><br>
<span class="quotelev2">&gt;&gt; +                        &quot;$cmd $config-&gt;{$arguments_key}&quot;, -1,
</span><br>
<span class="quotelev2">&gt;&gt; +                         $config-&gt;{stdout_save_lines},
</span><br>
<span class="quotelev2">&gt;&gt; +                         $config-&gt;{stderr_save_lines});
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            # Add header line to stdout
</span><br>
<span class="quotelev2">&gt;&gt; +            if (defined($ret-&gt;{result_stdout}) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +                $ret-&gt;{result_stdout} !~ /^\s*$/) {
</span><br>
<span class="quotelev2">&gt;&gt; +                $result_stdout = &quot;--- $cmd $config-&gt;{$arguments_key} 
</span><br>
<span class="quotelev2">&gt;&gt; result_stdout&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +                $result_stdout .= &quot;/result_stderr&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +                    if ($mss);
</span><br>
<span class="quotelev2">&gt;&gt; +                $result_stdout .= &quot; ---\n$ret-&gt;{result_stdout}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            # Add header line to stderr
</span><br>
<span class="quotelev2">&gt;&gt; +            if (!$mss &amp;&amp; defined($ret-&gt;{result_stderr}) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +                $ret-&gt;{result_stderr} !~ /^\s*$/) {
</span><br>
<span class="quotelev2">&gt;&gt; +                $result_stderr = &quot;--- $cmd $config-&gt;{$arguments_key} 
</span><br>
<span class="quotelev2">&gt;&gt; result_stderr ---\n$ret-&gt;{result_stderr}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        # Repeat *only* if $restart_on_pattern is defined
</span><br>
<span class="quotelev2">&gt;&gt; +        } while (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}) and
</span><br>
<span class="quotelev2">&gt;&gt; +                 (defined($restart_on_pattern) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +                  ($ret-&gt;{result_stderr} =~ /$restart_on_pattern/i or
</span><br>
<span class="quotelev2">&gt;&gt; +                   $ret-&gt;{result_stdout} =~ /$restart_on_pattern/i) and
</span><br>
<span class="quotelev2">&gt;&gt; +                  $restart_attempts++ &lt; $restart_attempts_max));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        # If fail, save the results in {result_stdout} and
</span><br>
<span class="quotelev2">&gt;&gt; +        # {result_stderr}.
</span><br>
<span class="quotelev2">&gt;&gt; +        if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status})) {
</span><br>
<span class="quotelev2">&gt;&gt; +            $ret-&gt;{result_message} = &quot;\&quot;$cmd $config-&gt;{$arguments_key}\&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; failed -- skipping this build.&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +            # Put the output of the failure into $ret so that it gets
</span><br>
<span class="quotelev2">&gt;&gt; +            # reported
</span><br>
<span class="quotelev2">&gt;&gt; +            $ret-&gt;{result_stdout} = $result_stdout
</span><br>
<span class="quotelev2">&gt;&gt; +                if (defined($result_stdout));
</span><br>
<span class="quotelev2">&gt;&gt; +            $ret-&gt;{result_stderr} = $result_stderr
</span><br>
<span class="quotelev2">&gt;&gt; +                if (!$mss &amp;&amp; defined($result_stderr));
</span><br>
<span class="quotelev2">&gt;&gt; +            $ret-&gt;{exit_status} = $ret-&gt;{exit_status};
</span><br>
<span class="quotelev2">&gt;&gt; +            $ret-&gt;{fail} = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        # If succeed, keep the stdout/stderr in their respective hash
</span><br>
<span class="quotelev2">&gt;&gt; +        # keys for this step.
</span><br>
<span class="quotelev2">&gt;&gt; +        else {
</span><br>
<span class="quotelev2">&gt;&gt; +            if (defined($result_stdout)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                delete $ret-&gt;{result_stdout};
</span><br>
<span class="quotelev2">&gt;&gt; +                $ret-&gt;{$stdout_key} = $result_stdout;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +            if (!$mss &amp;&amp; defined($result_stderr)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                delete $ret-&gt;{result_stderr};
</span><br>
<span class="quotelev2">&gt;&gt; +                $ret-&gt;{$stderr_key} = $result_stderr;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    } else {
</span><br>
<span class="quotelev2">&gt;&gt; +        Debug(&quot;Skippping '$cmd' step.\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (defined($config-&gt;{$after_cmd_key})) {
</span><br>
<span class="quotelev2">&gt;&gt; +        _run_step($config-&gt;{$after_cmd_key}, $after_cmd_key);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return $ret;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +sub _run_step {
</span><br>
<span class="quotelev2">&gt;&gt; +    my ($cmd, $step) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; +    return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +1;
</span><br>
<span class="quotelev2">&gt;&gt; Index: lib/MTT/Common/GNU_Install.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- lib/MTT/Common/GNU_Install.pm	(revision 1271)
</span><br>
<span class="quotelev2">&gt;&gt; +++ lib/MTT/Common/GNU_Install.pm	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -4,6 +4,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2009      High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt;&gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -15,12 +17,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; my $package = ModuleName(__PACKAGE__);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; use strict;
</span><br>
<span class="quotelev2">&gt;&gt; -use Data::Dumper;
</span><br>
<span class="quotelev2">&gt;&gt; -use MTT::DoCommand;
</span><br>
<span class="quotelev2">&gt;&gt; use MTT::Messages;
</span><br>
<span class="quotelev2">&gt;&gt; -use MTT::FindProgram;
</span><br>
<span class="quotelev2">&gt;&gt; use MTT::Values;
</span><br>
<span class="quotelev2">&gt;&gt; -use MTT::Files;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Common::Do_step;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -59,7 +58,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;         $config-&gt;{skip_make_check} = 1;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    $x = _do_step($config, &quot;configure&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +    $x = MTT::Common::Do_step::do_step($config, &quot;configure&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                   $config-&gt;{merge_stdout_stderr},  $config-&gt;{configdir});
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     # Overlapping keys in $x override $ret
</span><br>
<span class="quotelev2">&gt;&gt; @@ -67,10 +66,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;     return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     # &quot;make clean&quot; can fail for all we care
</span><br>
<span class="quotelev2">&gt;&gt; -    $x = _do_step($config, &quot;make clean&quot;, 1);
</span><br>
<span class="quotelev2">&gt;&gt; +    $x = MTT::Common::Do_step::do_step($config, &quot;make clean&quot;, 1);
</span><br>
<span class="quotelev2">&gt;&gt;     %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    $x = _do_step($config, &quot;make all&quot;, $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev2">&gt;&gt; +    $x = MTT::Common::Do_step::do_step($config, &quot;make all&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev2">&gt;&gt;     %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev2">&gt;&gt;     return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -95,12 +94,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;         $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    $x = _do_step($config, &quot;make check&quot;, 1);
</span><br>
<span class="quotelev2">&gt;&gt; +    $x = MTT::Common::Do_step::do_step($config, &quot;make check&quot;, 1);
</span><br>
<span class="quotelev2">&gt;&gt;     %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev2">&gt;&gt;     return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev2">&gt;&gt;     %ENV = %ENV_SAVE;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    $x = _do_step($config, &quot;make install&quot;, 1);
</span><br>
<span class="quotelev2">&gt;&gt; +    $x = MTT::Common::Do_step::do_step($config, &quot;make install&quot;, 1);
</span><br>
<span class="quotelev2">&gt;&gt;     %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev2">&gt;&gt;     return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -112,117 +111,4 @@
</span><br>
<span class="quotelev2">&gt;&gt;     return $ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -sub _do_step {
</span><br>
<span class="quotelev2">&gt;&gt; -    my ($config, $cmd, $mss, $dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Prepare return value. Start with an empty, but defined hash
</span><br>
<span class="quotelev2">&gt;&gt; -    my $ret = {};
</span><br>
<span class="quotelev2">&gt;&gt; -    my $result_stdout;
</span><br>
<span class="quotelev2">&gt;&gt; -    my $result_stderr;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # As long as this pattern is emitted during the step, keep
</span><br>
<span class="quotelev2">&gt;&gt; -    # attempting to re-start the step (&quot;restart_attempts&quot; times)
</span><br>
<span class="quotelev2">&gt;&gt; -    my $restart_on_pattern;
</span><br>
<span class="quotelev2">&gt;&gt; -    my $restart_attempts_max = 500;
</span><br>
<span class="quotelev2">&gt;&gt; -    my $restart_attempts = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    if (defined($config-&gt;{restart_on_pattern})) {
</span><br>
<span class="quotelev2">&gt;&gt; -        $restart_on_pattern = $config-&gt;{restart_on_pattern};
</span><br>
<span class="quotelev2">&gt;&gt; -    } else {
</span><br>
<span class="quotelev2">&gt;&gt; -        $restart_attempts_max = -1;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Hash keys and INI params do not contain spaces. Change them to 
</span><br>
<span class="quotelev2">&gt;&gt; underscores.
</span><br>
<span class="quotelev2">&gt;&gt; -    my $hash_key = $cmd;
</span><br>
<span class="quotelev2">&gt;&gt; -    $hash_key =~ s/ /_/g;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Optional path for program
</span><br>
<span class="quotelev2">&gt;&gt; -    if (defined($dir)) {
</span><br>
<span class="quotelev2">&gt;&gt; -        $cmd = &quot;$dir/$cmd&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    my $arguments_key = &quot;${hash_key}_arguments&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    my $stdout_key = &quot;${hash_key}_stdout&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    my $stderr_key = &quot;${hash_key}_stderr&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    my $skip_key = &quot;skip_${hash_key}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    my $before_cmd_key = &quot;before_${hash_key}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    my $after_cmd_key = &quot;after_${hash_key}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    if (defined($config-&gt;{$before_cmd_key})) {
</span><br>
<span class="quotelev2">&gt;&gt; -        _run_step($config-&gt;{$before_cmd_key}, $before_cmd_key);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    if (!$config-&gt;{$skip_key}) {
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        my $i = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        do {
</span><br>
<span class="quotelev2">&gt;&gt; -            Debug(&quot;Restarting $cmd (restart attempt #$i\n&quot;) if ($i++ gt 
</span><br>
<span class="quotelev2">&gt;&gt; 0);
</span><br>
<span class="quotelev2">&gt;&gt; -            $ret = MTT::DoCommand::Cmd($mss,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &quot;$cmd $config-&gt;{$arguments_key}&quot;, -1,
</span><br>
<span class="quotelev2">&gt;&gt; -                         $config-&gt;{stdout_save_lines},
</span><br>
<span class="quotelev2">&gt;&gt; -                         $config-&gt;{stderr_save_lines});
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            # Add header line to stdout
</span><br>
<span class="quotelev2">&gt;&gt; -            if (defined($ret-&gt;{result_stdout}) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; -                $ret-&gt;{result_stdout} !~ /^\s*$/) {
</span><br>
<span class="quotelev2">&gt;&gt; -                $result_stdout = &quot;--- $cmd $config-&gt;{$arguments_key} 
</span><br>
<span class="quotelev2">&gt;&gt; result_stdout&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -                $result_stdout .= &quot;/result_stderr&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -                    if ($mss);
</span><br>
<span class="quotelev2">&gt;&gt; -                $result_stdout .= &quot; ---\n$ret-&gt;{result_stdout}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            # Add header line to stderr
</span><br>
<span class="quotelev2">&gt;&gt; -            if (!$mss &amp;&amp; defined($ret-&gt;{result_stderr}) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; -                $ret-&gt;{result_stderr} !~ /^\s*$/) {
</span><br>
<span class="quotelev2">&gt;&gt; -                $result_stderr = &quot;--- $cmd $config-&gt;{$arguments_key} 
</span><br>
<span class="quotelev2">&gt;&gt; result_stderr ---\n$ret-&gt;{result_stderr}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # Repeat *only* if $restart_on_pattern is defined
</span><br>
<span class="quotelev2">&gt;&gt; -        } while (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}) and
</span><br>
<span class="quotelev2">&gt;&gt; -                 (defined($restart_on_pattern) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; -                  ($ret-&gt;{result_stderr} =~ /$restart_on_pattern/i or
</span><br>
<span class="quotelev2">&gt;&gt; -                   $ret-&gt;{result_stdout} =~ /$restart_on_pattern/i) and
</span><br>
<span class="quotelev2">&gt;&gt; -                  $restart_attempts++ &lt; $restart_attempts_max));
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # If fail, save the results in {result_stdout} and
</span><br>
<span class="quotelev2">&gt;&gt; -        # {result_stderr}.
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status})) {
</span><br>
<span class="quotelev2">&gt;&gt; -            $ret-&gt;{result_message} = &quot;\&quot;$cmd $config-&gt;{$arguments_key}\&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; failed -- skipping this build.&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -            # Put the output of the failure into $ret so that it gets
</span><br>
<span class="quotelev2">&gt;&gt; -            # reported
</span><br>
<span class="quotelev2">&gt;&gt; -            $ret-&gt;{result_stdout} = $result_stdout
</span><br>
<span class="quotelev2">&gt;&gt; -                if (defined($result_stdout));
</span><br>
<span class="quotelev2">&gt;&gt; -            $ret-&gt;{result_stderr} = $result_stderr
</span><br>
<span class="quotelev2">&gt;&gt; -                if (!$mss &amp;&amp; defined($result_stderr));
</span><br>
<span class="quotelev2">&gt;&gt; -            $ret-&gt;{exit_status} = $ret-&gt;{exit_status};
</span><br>
<span class="quotelev2">&gt;&gt; -            $ret-&gt;{fail} = 1;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # If succeed, keep the stdout/stderr in their respective hash
</span><br>
<span class="quotelev2">&gt;&gt; -        # keys for this step.
</span><br>
<span class="quotelev2">&gt;&gt; -        else {
</span><br>
<span class="quotelev2">&gt;&gt; -            if (defined($result_stdout)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                delete $ret-&gt;{result_stdout};
</span><br>
<span class="quotelev2">&gt;&gt; -                $ret-&gt;{$stdout_key} = $result_stdout;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -            if (!$mss &amp;&amp; defined($result_stderr)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                delete $ret-&gt;{result_stderr};
</span><br>
<span class="quotelev2">&gt;&gt; -                $ret-&gt;{$stderr_key} = $result_stderr;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    } else {
</span><br>
<span class="quotelev2">&gt;&gt; -        Debug(&quot;Skippping '$cmd' step.\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    if (defined($config-&gt;{$after_cmd_key})) {
</span><br>
<span class="quotelev2">&gt;&gt; -        _run_step($config-&gt;{$after_cmd_key}, $after_cmd_key);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    return $ret;
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -sub _run_step {
</span><br>
<span class="quotelev2">&gt;&gt; -    my ($cmd, $step) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; -    return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; 1;
</span><br>
<span class="quotelev2">&gt;&gt; Index: lib/MTT/Defaults.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- lib/MTT/Defaults.pm	(revision 1271)
</span><br>
<span class="quotelev2">&gt;&gt; +++ lib/MTT/Defaults.pm	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -3,6 +3,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev2">&gt;&gt; #                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2009      High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt;&gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -39,7 +41,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     },
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     known_compiler_names =&gt; [ &quot;gnu&quot;, &quot;pgi&quot;, &quot;ibm&quot;, &quot;intel&quot;, &quot;kai&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;absoft&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                              &quot;pathscale&quot;, &quot;sun&quot;, &quot;none&quot;, &quot;unknown&quot; ],
</span><br>
<span class="quotelev2">&gt;&gt; +                              &quot;pathscale&quot;, &quot;sun&quot;, &quot;microsoft&quot;, &quot;none&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;unknown&quot; ],
</span><br>
<span class="quotelev2">&gt;&gt;     known_resource_manager_names =&gt; [ &quot;slurm&quot;, &quot;tm&quot;, &quot;loadleveler&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;n1ge&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                       &quot;alps&quot;, &quot;none&quot;, &quot;unknown&quot; ],
</span><br>
<span class="quotelev2">&gt;&gt;     known_network_names =&gt; [ &quot;tcp&quot;, &quot;udp&quot;, &quot;ethernet&quot;, &quot;gm&quot;, &quot;mx&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;verbs&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; Index: lib/MTT/MPI/Install/OMPI.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- lib/MTT/MPI/Install/OMPI.pm	(revision 1271)
</span><br>
<span class="quotelev2">&gt;&gt; +++ lib/MTT/MPI/Install/OMPI.pm	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -3,6 +3,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev2">&gt;&gt; #                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2009      High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt;&gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,6 +22,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; use MTT::Values;
</span><br>
<span class="quotelev2">&gt;&gt; use MTT::Files;
</span><br>
<span class="quotelev2">&gt;&gt; use MTT::Common::GNU_Install;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Common::Cmake;
</span><br>
<span class="quotelev2">&gt;&gt; use MTT::Values::Functions::MPI::OMPI;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; @@ -86,7 +89,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;         stderr_save_lines =&gt; $config-&gt;{stderr_save_lines},
</span><br>
<span class="quotelev2">&gt;&gt;         merge_stdout_stderr =&gt; $config-&gt;{merge_stdout_stderr},
</span><br>
<span class="quotelev2">&gt;&gt;     };
</span><br>
<span class="quotelev2">&gt;&gt; -    my $install = MTT::Common::GNU_Install::Install($gnu);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    my $install;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $sys_type=`uname -o`;
</span><br>
<span class="quotelev2">&gt;&gt; +    if(($sys_type == &quot;Cygwin&quot; || $sys_type == &quot;Msys&quot;) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +        $config-&gt;{compiler_name} == &quot;microsoft&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt; +        $install = MTT::Common::Cmake::Install($gnu);
</span><br>
<span class="quotelev2">&gt;&gt; +    } else {
</span><br>
<span class="quotelev2">&gt;&gt; +        $install = MTT::Common::GNU_Install::Install($gnu);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     foreach my $k (keys(%{$install})) {
</span><br>
<span class="quotelev2">&gt;&gt;         $ret-&gt;{$k} = $install-&gt;{$k};
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0336.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0336.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
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
