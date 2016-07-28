<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 14:01:41 2009" -->
<!-- isoreceived="20090311180141" -->
<!-- sent="Wed, 11 Mar 2009 14:01:24 -0400" -->
<!-- isosent="20090311180124" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="8257ABEB-D9A4-4405-967B-BDA60F2AD999_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B7F8BB.5080106_at_hlrs.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 14:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0333.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0333.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0333.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2009, at 1:45 PM, Shiqing Fan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, I got everything ready in a patch. If it is fine, can I  
</span><br>
<span class="quotelev1">&gt; commit it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Can you double check your cr / cr/lf settings?  It looks like you're  
<br>
committing in the windows format -- can you convert and commit in the  
<br>
unix format?  That way, it wouldn't look like the entire  
<br>
GNU_Install.pm file is being replaced, for example.
<br>
<p>I forgot to mention in my last mail -- since cmake *only* works on  
<br>
Windows and our Autotools system *doesn't* work on Windows, I retract  
<br>
my earlier statement: don't bother with an ompi_cmake parameter in  
<br>
the .ini file.  Just have OMPI.pm figure out if you're on cygwin or  
<br>
mingw and call the right back-end building function.
<br>
<p>Also, in Do_Step.pm, you might want to remove the &quot;_&quot; prefix from the  
<br>
sub names.  &quot;_&quot; as a prefix in perl is meant to imply that it's a  
<br>
private variable/method.
<br>
<p>Finally, in Do_Step.pm, do you have two _do_step() functions?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 11, 2009, at 11:49 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I mention it because you're modifying LD_LIBRARY_PATH above --  
</span><br>
<span class="quotelev1">&gt; so you
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; should restore it when you're done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Aha, yes, you're right. The portion of modifying LD_LIBRARY_PATH  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev3">&gt; &gt;&gt; also be removed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you don't need it for cmake, then ya, go ahead and remove it.  We
</span><br>
<span class="quotelev2">&gt; &gt; do need it on the GNU side.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Gotcha.  So if our Cmake system is only targeted at windows,  
</span><br>
<span class="quotelev1">&gt; then I
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; think OMPI.pm can make the determination automatically to call  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; GNU_Install or Cmake version.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Perhaps the _do_step stuff should be factored out into a  
</span><br>
<span class="quotelev1">&gt; separate .pm
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; so that you don't have to duplicate all that code between
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; GNU_Install.pm and Cmake.pm...?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, that might be the easiest and best solution so far. :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cool.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/Filesys/DiskFree.pm	(revision 1271)
</span><br>
<span class="quotelev1">&gt; +++ lib/Filesys/DiskFree.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -29,6 +29,16 @@
</span><br>
<span class="quotelev1">&gt; 	'inodes' =&gt; &quot;df -Pi&quot;,
</span><br>
<span class="quotelev1">&gt; 	'format' =&gt; &quot;linuxish&quot;,
</span><br>
<span class="quotelev1">&gt;     },
</span><br>
<span class="quotelev1">&gt; +    'cygwin' =&gt; {
</span><br>
<span class="quotelev1">&gt; +	'blocks' =&gt; &quot;df -P&quot;,
</span><br>
<span class="quotelev1">&gt; +	'inodes' =&gt; &quot;df -Pi&quot;,
</span><br>
<span class="quotelev1">&gt; +	'format' =&gt; &quot;linuxish&quot;,
</span><br>
<span class="quotelev1">&gt; +    },
</span><br>
<span class="quotelev1">&gt; +    'msys' =&gt; {
</span><br>
<span class="quotelev1">&gt; +	'blocks' =&gt; &quot;df -P&quot;,
</span><br>
<span class="quotelev1">&gt; +	'inodes' =&gt; &quot;df -Pi&quot;,
</span><br>
<span class="quotelev1">&gt; +	'format' =&gt; &quot;linuxish&quot;,
</span><br>
<span class="quotelev1">&gt; +    },
</span><br>
<span class="quotelev1">&gt;     'solaris' =&gt;  {
</span><br>
<span class="quotelev1">&gt; 	'blocks' =&gt; &quot;df -k&quot;,
</span><br>
<span class="quotelev1">&gt; 	'inodes' =&gt; &quot;df -k -o i -F ufs&quot;,
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/Common/Cmake.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Common/Cmake.pm	(revision 0)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Common/Cmake.pm	(revision 0)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,77 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2009      High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt; +#                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
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
<span class="quotelev1">&gt; +package MTT::Common::Cmake;
</span><br>
<span class="quotelev1">&gt; +my $package = ModuleName(__PACKAGE__);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +use MTT::Messages;
</span><br>
<span class="quotelev1">&gt; +use MTT::Values;
</span><br>
<span class="quotelev1">&gt; +use MTT::Common::Do_step;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Do the following steps:
</span><br>
<span class="quotelev1">&gt; +#   [ ] cmake -G &quot;generator&quot; -D configure_arguments source_path
</span><br>
<span class="quotelev1">&gt; +#   [ ] devenv OpenMPI.sln /build
</span><br>
<span class="quotelev1">&gt; +sub Install {
</span><br>
<span class="quotelev1">&gt; +    my ($config) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $x;
</span><br>
<span class="quotelev1">&gt; +    my $result_stdout;
</span><br>
<span class="quotelev1">&gt; +    my $result_stderr;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Prepare $ret
</span><br>
<span class="quotelev1">&gt; +    my $ret;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{test_result} = MTT::Values::FAIL;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{exit_status} = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # On windows, do the following steps:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # prepare the windows style prefix.
</span><br>
<span class="quotelev1">&gt; +    # replace '/cygdrive/x/' with 'x:/'
</span><br>
<span class="quotelev1">&gt; +    my $win_prefix = substr ($config-&gt;{installdir},10,1) . &quot;:&quot; .  
</span><br>
<span class="quotelev1">&gt; substr ($config-&gt;{installdir},11);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # generate Visual Studio solution files
</span><br>
<span class="quotelev1">&gt; +    # use 'script' to redirect MS command output
</span><br>
<span class="quotelev1">&gt; +    $x = MTT::Common::Do_step::_do_step($config,
</span><br>
<span class="quotelev1">&gt; +                                        &quot;script -a -c \&quot;cmake  
</span><br>
<span class="quotelev1">&gt; $config-&gt;{configure_arguments} -D CMAKE_INSTALL_PREFIX:PATH= 
</span><br>
<span class="quotelev1">&gt; $win_prefix .\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                                        $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Overlapping keys in $x override $ret
</span><br>
<span class="quotelev1">&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # compile the whole solution
</span><br>
<span class="quotelev1">&gt; +    $x = MTT::Common::Do_step::_do_step($config, &quot;script -a -c  
</span><br>
<span class="quotelev1">&gt; \&quot;devenv.com *.sln /build debug\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                                        $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev1">&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # install to the prefix dir
</span><br>
<span class="quotelev1">&gt; +    $x = MTT::Common::Do_step::_do_step($config, &quot;script -a -c  
</span><br>
<span class="quotelev1">&gt; \&quot;devenv.com *.sln /project INSTALL.vcproj /build\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                                        $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev1">&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # All done!
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{test_result} = MTT::Values::PASS;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{result_message} = &quot;Success&quot;;
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;Build was a success\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/Common/Do_step.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Common/Do_step.pm	(revision 0)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Common/Do_step.pm	(revision 0)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,252 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2009      High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt; +#                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
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
<span class="quotelev1">&gt; +package MTT::Common::Do_step;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +use Data::Dumper;
</span><br>
<span class="quotelev1">&gt; +use MTT::DoCommand;
</span><br>
<span class="quotelev1">&gt; +use MTT::Messages;
</span><br>
<span class="quotelev1">&gt; +use MTT::FindProgram;
</span><br>
<span class="quotelev1">&gt; +use MTT::Values;
</span><br>
<span class="quotelev1">&gt; +use MTT::Files;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub _do_step {
</span><br>
<span class="quotelev1">&gt; +    my ($config, $cmd, $mss, $dir) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Prepare return value. Start with an empty, but defined hash
</span><br>
<span class="quotelev1">&gt; +    my $ret = {};
</span><br>
<span class="quotelev1">&gt; +    my $result_stdout;
</span><br>
<span class="quotelev1">&gt; +    my $result_stderr;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # As long as this pattern is emitted during the step, keep
</span><br>
<span class="quotelev1">&gt; +    # attempting to re-start the step (&quot;restart_attempts&quot; times)
</span><br>
<span class="quotelev1">&gt; +    my $restart_on_pattern;
</span><br>
<span class="quotelev1">&gt; +    my $restart_attempts_max = 500;
</span><br>
<span class="quotelev1">&gt; +    my $restart_attempts = 0;
</span><br>
<span class="quotelev1">&gt; +    if (defined($config-&gt;{restart_on_pattern})) {
</span><br>
<span class="quotelev1">&gt; +        $restart_on_pattern = $config-&gt;{restart_on_pattern};
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        $restart_attempts_max = -1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Hash keys and INI params do not contain spaces. Change them  
</span><br>
<span class="quotelev1">&gt; to underscores.
</span><br>
<span class="quotelev1">&gt; +    my $hash_key = $cmd;
</span><br>
<span class="quotelev1">&gt; +    $hash_key =~ s/ /_/g;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Optional path for program
</span><br>
<span class="quotelev1">&gt; +    if (defined($dir)) {
</span><br>
<span class="quotelev1">&gt; +        $cmd = &quot;$dir/$cmd&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $arguments_key = &quot;${hash_key}_arguments&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $stdout_key = &quot;${hash_key}_stdout&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $stderr_key = &quot;${hash_key}_stderr&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $skip_key = &quot;skip_${hash_key}&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $before_cmd_key = &quot;before_${hash_key}&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $after_cmd_key = &quot;after_${hash_key}&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (defined($config-&gt;{$before_cmd_key})) {
</span><br>
<span class="quotelev1">&gt; +        _run_step($config-&gt;{$before_cmd_key}, $before_cmd_key);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (!$config-&gt;{$skip_key}) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        my $i = 0;
</span><br>
<span class="quotelev1">&gt; +        do {
</span><br>
<span class="quotelev1">&gt; +            Debug(&quot;Restarting $cmd (restart attempt #$i\n&quot;) if ($i+ 
</span><br>
<span class="quotelev1">&gt; + gt 0);
</span><br>
<span class="quotelev1">&gt; +            $ret = MTT::DoCommand::Cmd($mss,
</span><br>
<span class="quotelev1">&gt; +                        &quot;$cmd $config-&gt;{$arguments_key}&quot;, -1,
</span><br>
<span class="quotelev1">&gt; +                         $config-&gt;{stdout_save_lines},
</span><br>
<span class="quotelev1">&gt; +                         $config-&gt;{stderr_save_lines});
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # Add header line to stdout
</span><br>
<span class="quotelev1">&gt; +            if (defined($ret-&gt;{result_stdout}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                $ret-&gt;{result_stdout} !~ /^\s*$/) {
</span><br>
<span class="quotelev1">&gt; +                $result_stdout = &quot;--- $cmd $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{$arguments_key} result_stdout&quot;;
</span><br>
<span class="quotelev1">&gt; +                $result_stdout .= &quot;/result_stderr&quot;
</span><br>
<span class="quotelev1">&gt; +                    if ($mss);
</span><br>
<span class="quotelev1">&gt; +                $result_stdout .= &quot; ---\n$ret-&gt;{result_stdout}&quot;;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # Add header line to stderr
</span><br>
<span class="quotelev1">&gt; +            if (!$mss &amp;&amp; defined($ret-&gt;{result_stderr}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                $ret-&gt;{result_stderr} !~ /^\s*$/) {
</span><br>
<span class="quotelev1">&gt; +                $result_stderr = &quot;--- $cmd $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{$arguments_key} result_stderr ---\n$ret-&gt;{result_stderr}&quot;;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # Repeat *only* if $restart_on_pattern is defined
</span><br>
<span class="quotelev1">&gt; +        } while (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}) and
</span><br>
<span class="quotelev1">&gt; +                 (defined($restart_on_pattern) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                  ($ret-&gt;{result_stderr} =~ /$restart_on_pattern/i or
</span><br>
<span class="quotelev1">&gt; +                   $ret-&gt;{result_stdout} =~ /$restart_on_pattern/i)  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; +                  $restart_attempts++ &lt; $restart_attempts_max));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # If fail, save the results in {result_stdout} and
</span><br>
<span class="quotelev1">&gt; +        # {result_stderr}.
</span><br>
<span class="quotelev1">&gt; +        if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status})) {
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{result_message} = &quot;\&quot;$cmd $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{$arguments_key}\&quot; failed -- skipping this build.&quot;;
</span><br>
<span class="quotelev1">&gt; +            # Put the output of the failure into $ret so that it gets
</span><br>
<span class="quotelev1">&gt; +            # reported
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{result_stdout} = $result_stdout
</span><br>
<span class="quotelev1">&gt; +                if (defined($result_stdout));
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{result_stderr} = $result_stderr
</span><br>
<span class="quotelev1">&gt; +                if (!$mss &amp;&amp; defined($result_stderr));
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{exit_status} = $ret-&gt;{exit_status};
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{fail} = 1;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # If succeed, keep the stdout/stderr in their respective hash
</span><br>
<span class="quotelev1">&gt; +        # keys for this step.
</span><br>
<span class="quotelev1">&gt; +        else {
</span><br>
<span class="quotelev1">&gt; +            if (defined($result_stdout)) {
</span><br>
<span class="quotelev1">&gt; +                delete $ret-&gt;{result_stdout};
</span><br>
<span class="quotelev1">&gt; +                $ret-&gt;{$stdout_key} = $result_stdout;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            if (!$mss &amp;&amp; defined($result_stderr)) {
</span><br>
<span class="quotelev1">&gt; +                delete $ret-&gt;{result_stderr};
</span><br>
<span class="quotelev1">&gt; +                $ret-&gt;{$stderr_key} = $result_stderr;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        Debug(&quot;Skippping '$cmd' step.\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (defined($config-&gt;{$after_cmd_key})) {
</span><br>
<span class="quotelev1">&gt; +        _run_step($config-&gt;{$after_cmd_key}, $after_cmd_key);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub _run_step {
</span><br>
<span class="quotelev1">&gt; +    my ($cmd, $step) = @_;
</span><br>
<span class="quotelev1">&gt; +    return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub _do_step {
</span><br>
<span class="quotelev1">&gt; +    my ($config, $cmd, $mss, $dir) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Prepare return value. Start with an empty, but defined hash
</span><br>
<span class="quotelev1">&gt; +    my $ret = {};
</span><br>
<span class="quotelev1">&gt; +    my $result_stdout;
</span><br>
<span class="quotelev1">&gt; +    my $result_stderr;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # As long as this pattern is emitted during the step, keep
</span><br>
<span class="quotelev1">&gt; +    # attempting to re-start the step (&quot;restart_attempts&quot; times)
</span><br>
<span class="quotelev1">&gt; +    my $restart_on_pattern;
</span><br>
<span class="quotelev1">&gt; +    my $restart_attempts_max = 500;
</span><br>
<span class="quotelev1">&gt; +    my $restart_attempts = 0;
</span><br>
<span class="quotelev1">&gt; +    if (defined($config-&gt;{restart_on_pattern})) {
</span><br>
<span class="quotelev1">&gt; +        $restart_on_pattern = $config-&gt;{restart_on_pattern};
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        $restart_attempts_max = -1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Hash keys and INI params do not contain spaces. Change them  
</span><br>
<span class="quotelev1">&gt; to underscores.
</span><br>
<span class="quotelev1">&gt; +    my $hash_key = $cmd;
</span><br>
<span class="quotelev1">&gt; +    $hash_key =~ s/ /_/g;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Optional path for program
</span><br>
<span class="quotelev1">&gt; +    if (defined($dir)) {
</span><br>
<span class="quotelev1">&gt; +        $cmd = &quot;$dir/$cmd&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $arguments_key = &quot;${hash_key}_arguments&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $stdout_key = &quot;${hash_key}_stdout&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $stderr_key = &quot;${hash_key}_stderr&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $skip_key = &quot;skip_${hash_key}&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $before_cmd_key = &quot;before_${hash_key}&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $after_cmd_key = &quot;after_${hash_key}&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (defined($config-&gt;{$before_cmd_key})) {
</span><br>
<span class="quotelev1">&gt; +        _run_step($config-&gt;{$before_cmd_key}, $before_cmd_key);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (!$config-&gt;{$skip_key}) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        my $i = 0;
</span><br>
<span class="quotelev1">&gt; +        do {
</span><br>
<span class="quotelev1">&gt; +            Debug(&quot;Restarting $cmd (restart attempt #$i\n&quot;) if ($i+ 
</span><br>
<span class="quotelev1">&gt; + gt 0);
</span><br>
<span class="quotelev1">&gt; +            $ret = MTT::DoCommand::Cmd($mss,
</span><br>
<span class="quotelev1">&gt; +                        &quot;$cmd $config-&gt;{$arguments_key}&quot;, -1,
</span><br>
<span class="quotelev1">&gt; +                         $config-&gt;{stdout_save_lines},
</span><br>
<span class="quotelev1">&gt; +                         $config-&gt;{stderr_save_lines});
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # Add header line to stdout
</span><br>
<span class="quotelev1">&gt; +            if (defined($ret-&gt;{result_stdout}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                $ret-&gt;{result_stdout} !~ /^\s*$/) {
</span><br>
<span class="quotelev1">&gt; +                $result_stdout = &quot;--- $cmd $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{$arguments_key} result_stdout&quot;;
</span><br>
<span class="quotelev1">&gt; +                $result_stdout .= &quot;/result_stderr&quot;
</span><br>
<span class="quotelev1">&gt; +                    if ($mss);
</span><br>
<span class="quotelev1">&gt; +                $result_stdout .= &quot; ---\n$ret-&gt;{result_stdout}&quot;;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # Add header line to stderr
</span><br>
<span class="quotelev1">&gt; +            if (!$mss &amp;&amp; defined($ret-&gt;{result_stderr}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                $ret-&gt;{result_stderr} !~ /^\s*$/) {
</span><br>
<span class="quotelev1">&gt; +                $result_stderr = &quot;--- $cmd $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{$arguments_key} result_stderr ---\n$ret-&gt;{result_stderr}&quot;;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # Repeat *only* if $restart_on_pattern is defined
</span><br>
<span class="quotelev1">&gt; +        } while (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}) and
</span><br>
<span class="quotelev1">&gt; +                 (defined($restart_on_pattern) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                  ($ret-&gt;{result_stderr} =~ /$restart_on_pattern/i or
</span><br>
<span class="quotelev1">&gt; +                   $ret-&gt;{result_stdout} =~ /$restart_on_pattern/i)  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; +                  $restart_attempts++ &lt; $restart_attempts_max));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # If fail, save the results in {result_stdout} and
</span><br>
<span class="quotelev1">&gt; +        # {result_stderr}.
</span><br>
<span class="quotelev1">&gt; +        if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status})) {
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{result_message} = &quot;\&quot;$cmd $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{$arguments_key}\&quot; failed -- skipping this build.&quot;;
</span><br>
<span class="quotelev1">&gt; +            # Put the output of the failure into $ret so that it gets
</span><br>
<span class="quotelev1">&gt; +            # reported
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{result_stdout} = $result_stdout
</span><br>
<span class="quotelev1">&gt; +                if (defined($result_stdout));
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{result_stderr} = $result_stderr
</span><br>
<span class="quotelev1">&gt; +                if (!$mss &amp;&amp; defined($result_stderr));
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{exit_status} = $ret-&gt;{exit_status};
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{fail} = 1;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # If succeed, keep the stdout/stderr in their respective hash
</span><br>
<span class="quotelev1">&gt; +        # keys for this step.
</span><br>
<span class="quotelev1">&gt; +        else {
</span><br>
<span class="quotelev1">&gt; +            if (defined($result_stdout)) {
</span><br>
<span class="quotelev1">&gt; +                delete $ret-&gt;{result_stdout};
</span><br>
<span class="quotelev1">&gt; +                $ret-&gt;{$stdout_key} = $result_stdout;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            if (!$mss &amp;&amp; defined($result_stderr)) {
</span><br>
<span class="quotelev1">&gt; +                delete $ret-&gt;{result_stderr};
</span><br>
<span class="quotelev1">&gt; +                $ret-&gt;{$stderr_key} = $result_stderr;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        Debug(&quot;Skippping '$cmd' step.\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (defined($config-&gt;{$after_cmd_key})) {
</span><br>
<span class="quotelev1">&gt; +        _run_step($config-&gt;{$after_cmd_key}, $after_cmd_key);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub _run_step {
</span><br>
<span class="quotelev1">&gt; +    my ($cmd, $step) = @_;
</span><br>
<span class="quotelev1">&gt; +    return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/Common/GNU_Install.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Common/GNU_Install.pm	(revision 1271)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Common/GNU_Install.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -1,228 +1,114 @@
</span><br>
<span class="quotelev1">&gt; -#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; -#
</span><br>
<span class="quotelev1">&gt; -# Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt; -#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; -# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; -# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; -# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; -#
</span><br>
<span class="quotelev1">&gt; -# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; -#
</span><br>
<span class="quotelev1">&gt; -# $HEADER$
</span><br>
<span class="quotelev1">&gt; -#
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -package MTT::Common::GNU_Install;
</span><br>
<span class="quotelev1">&gt; -my $package = ModuleName(__PACKAGE__);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -use strict;
</span><br>
<span class="quotelev1">&gt; -use Data::Dumper;
</span><br>
<span class="quotelev1">&gt; -use MTT::DoCommand;
</span><br>
<span class="quotelev1">&gt; -use MTT::Messages;
</span><br>
<span class="quotelev1">&gt; -use MTT::FindProgram;
</span><br>
<span class="quotelev1">&gt; -use MTT::Values;
</span><br>
<span class="quotelev1">&gt; -use MTT::Files;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; - 
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -# Do the following steps:
</span><br>
<span class="quotelev1">&gt; -#   [ ] configure
</span><br>
<span class="quotelev1">&gt; -#   [?] make clean
</span><br>
<span class="quotelev1">&gt; -#   [ ] make all
</span><br>
<span class="quotelev1">&gt; -#   [?] make check
</span><br>
<span class="quotelev1">&gt; -#   [ ] make install
</span><br>
<span class="quotelev1">&gt; -#
</span><br>
<span class="quotelev1">&gt; -# ? = optional step
</span><br>
<span class="quotelev1">&gt; -sub Install {
</span><br>
<span class="quotelev1">&gt; -    my ($config) = @_;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    my $x;
</span><br>
<span class="quotelev1">&gt; -    my $result_stdout;
</span><br>
<span class="quotelev1">&gt; -    my $result_stderr;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # Prepare $ret
</span><br>
<span class="quotelev1">&gt; -    my $ret;
</span><br>
<span class="quotelev1">&gt; -    $ret-&gt;{test_result} = MTT::Values::FAIL;
</span><br>
<span class="quotelev1">&gt; -    $ret-&gt;{exit_status} = 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # If the user does not use --prefix on their own, default
</span><br>
<span class="quotelev1">&gt; -    # to $installdir
</span><br>
<span class="quotelev1">&gt; -    my $prefix;
</span><br>
<span class="quotelev1">&gt; -    if ($config-&gt;{configure_arguments} !~ /--prefix\b/) {
</span><br>
<span class="quotelev1">&gt; -        $config-&gt;{configure_arguments} .= &quot; --prefix=$config- 
</span><br>
<span class="quotelev2">&gt; &gt;{installdir}&quot;;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # Process the optional step booleans
</span><br>
<span class="quotelev1">&gt; -    if (!$config-&gt;{make_clean}) {
</span><br>
<span class="quotelev1">&gt; -        $config-&gt;{skip_make_clean} = 1;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    if (!$config-&gt;{make_check}) {
</span><br>
<span class="quotelev1">&gt; -        $config-&gt;{skip_make_check} = 1;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    $x = _do_step($config, &quot;configure&quot;,
</span><br>
<span class="quotelev1">&gt; -                  $config-&gt;{merge_stdout_stderr},  $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{configdir});
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # Overlapping keys in $x override $ret
</span><br>
<span class="quotelev1">&gt; -    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; -    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # &quot;make clean&quot; can fail for all we care
</span><br>
<span class="quotelev1">&gt; -    $x = _do_step($config, &quot;make clean&quot;, 1);
</span><br>
<span class="quotelev1">&gt; -    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    $x = _do_step($config, &quot;make all&quot;, $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev1">&gt; -    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; -    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # Do we want to run &quot;make check&quot;?  If so, make sure a valid  
</span><br>
<span class="quotelev1">&gt; TMPDIR
</span><br>
<span class="quotelev1">&gt; -    # exists.  Also, merge the result_stdout/result_stderr because we
</span><br>
<span class="quotelev1">&gt; -    # really only want to see it if something fails (i.e., it's  
</span><br>
<span class="quotelev1">&gt; common
</span><br>
<span class="quotelev1">&gt; -    # to display junk to result_stderr during &quot;make check&quot;'s normal
</span><br>
<span class="quotelev1">&gt; -    # execution).
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    my %ENV_SAVE = %ENV;
</span><br>
<span class="quotelev1">&gt; -    $ENV{TMPDIR} = &quot;$config-&gt;{installdir}/tmp&quot;;
</span><br>
<span class="quotelev1">&gt; -    mkdir($ENV{TMPDIR}, 0777);
</span><br>
<span class="quotelev1">&gt; -    # The intent here is just to ensure that the LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; -    # in the environment does not point to shared libraries
</span><br>
<span class="quotelev1">&gt; -    # outside of MTT's scope that would interfere with &quot;make
</span><br>
<span class="quotelev1">&gt; -    # check&quot; (e.g., another libmpi.so outside of MTT).  Just
</span><br>
<span class="quotelev1">&gt; -    # prepend our own $libdir to LD_LIBRARY_PATH and hope that
</span><br>
<span class="quotelev1">&gt; -    # that's Good Enough.  :-)
</span><br>
<span class="quotelev1">&gt; -    if (exists($ENV{LD_LIBRARY_PATH})) {
</span><br>
<span class="quotelev1">&gt; -        $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}: 
</span><br>
<span class="quotelev1">&gt; $ENV{LD_LIBRARY_PATH}&quot;;
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}&quot;;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    $x = _do_step($config, &quot;make check&quot;, 1);
</span><br>
<span class="quotelev1">&gt; -    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; -    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; -    %ENV = %ENV_SAVE;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    $x = _do_step($config, &quot;make install&quot;, 1);
</span><br>
<span class="quotelev1">&gt; -    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; -    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # All done!
</span><br>
<span class="quotelev1">&gt; -    $ret-&gt;{test_result} = MTT::Values::PASS;
</span><br>
<span class="quotelev1">&gt; -    $ret-&gt;{result_message} = &quot;Success&quot;;
</span><br>
<span class="quotelev1">&gt; -    Debug(&quot;Build was a success\n&quot;);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return $ret;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -sub _do_step {
</span><br>
<span class="quotelev1">&gt; -    my ($config, $cmd, $mss, $dir) = @_;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # Prepare return value. Start with an empty, but defined hash
</span><br>
<span class="quotelev1">&gt; -    my $ret = {};
</span><br>
<span class="quotelev1">&gt; -    my $result_stdout;
</span><br>
<span class="quotelev1">&gt; -    my $result_stderr;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # As long as this pattern is emitted during the step, keep
</span><br>
<span class="quotelev1">&gt; -    # attempting to re-start the step (&quot;restart_attempts&quot; times)
</span><br>
<span class="quotelev1">&gt; -    my $restart_on_pattern;
</span><br>
<span class="quotelev1">&gt; -    my $restart_attempts_max = 500;
</span><br>
<span class="quotelev1">&gt; -    my $restart_attempts = 0;
</span><br>
<span class="quotelev1">&gt; -    if (defined($config-&gt;{restart_on_pattern})) {
</span><br>
<span class="quotelev1">&gt; -        $restart_on_pattern = $config-&gt;{restart_on_pattern};
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        $restart_attempts_max = -1;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # Hash keys and INI params do not contain spaces. Change them  
</span><br>
<span class="quotelev1">&gt; to underscores.
</span><br>
<span class="quotelev1">&gt; -    my $hash_key = $cmd;
</span><br>
<span class="quotelev1">&gt; -    $hash_key =~ s/ /_/g;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # Optional path for program
</span><br>
<span class="quotelev1">&gt; -    if (defined($dir)) {
</span><br>
<span class="quotelev1">&gt; -        $cmd = &quot;$dir/$cmd&quot;;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    my $arguments_key = &quot;${hash_key}_arguments&quot;;
</span><br>
<span class="quotelev1">&gt; -    my $stdout_key = &quot;${hash_key}_stdout&quot;;
</span><br>
<span class="quotelev1">&gt; -    my $stderr_key = &quot;${hash_key}_stderr&quot;;
</span><br>
<span class="quotelev1">&gt; -    my $skip_key = &quot;skip_${hash_key}&quot;;
</span><br>
<span class="quotelev1">&gt; -    my $before_cmd_key = &quot;before_${hash_key}&quot;;
</span><br>
<span class="quotelev1">&gt; -    my $after_cmd_key = &quot;after_${hash_key}&quot;;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (defined($config-&gt;{$before_cmd_key})) {
</span><br>
<span class="quotelev1">&gt; -        _run_step($config-&gt;{$before_cmd_key}, $before_cmd_key);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (!$config-&gt;{$skip_key}) {
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        my $i = 0;
</span><br>
<span class="quotelev1">&gt; -        do {
</span><br>
<span class="quotelev1">&gt; -            Debug(&quot;Restarting $cmd (restart attempt #$i\n&quot;) if ($i+ 
</span><br>
<span class="quotelev1">&gt; + gt 0);
</span><br>
<span class="quotelev1">&gt; -            $ret = MTT::DoCommand::Cmd($mss,
</span><br>
<span class="quotelev1">&gt; -                        &quot;$cmd $config-&gt;{$arguments_key}&quot;, -1,
</span><br>
<span class="quotelev1">&gt; -                         $config-&gt;{stdout_save_lines},
</span><br>
<span class="quotelev1">&gt; -                         $config-&gt;{stderr_save_lines});
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            # Add header line to stdout
</span><br>
<span class="quotelev1">&gt; -            if (defined($ret-&gt;{result_stdout}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                $ret-&gt;{result_stdout} !~ /^\s*$/) {
</span><br>
<span class="quotelev1">&gt; -                $result_stdout = &quot;--- $cmd $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{$arguments_key} result_stdout&quot;;
</span><br>
<span class="quotelev1">&gt; -                $result_stdout .= &quot;/result_stderr&quot;
</span><br>
<span class="quotelev1">&gt; -                    if ($mss);
</span><br>
<span class="quotelev1">&gt; -                $result_stdout .= &quot; ---\n$ret-&gt;{result_stdout}&quot;;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            # Add header line to stderr
</span><br>
<span class="quotelev1">&gt; -            if (!$mss &amp;&amp; defined($ret-&gt;{result_stderr}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                $ret-&gt;{result_stderr} !~ /^\s*$/) {
</span><br>
<span class="quotelev1">&gt; -                $result_stderr = &quot;--- $cmd $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{$arguments_key} result_stderr ---\n$ret-&gt;{result_stderr}&quot;;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        # Repeat *only* if $restart_on_pattern is defined
</span><br>
<span class="quotelev1">&gt; -        } while (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}) and
</span><br>
<span class="quotelev1">&gt; -                 (defined($restart_on_pattern) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                  ($ret-&gt;{result_stderr} =~ /$restart_on_pattern/i or
</span><br>
<span class="quotelev1">&gt; -                   $ret-&gt;{result_stdout} =~ /$restart_on_pattern/i)  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; -                  $restart_attempts++ &lt; $restart_attempts_max));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        # If fail, save the results in {result_stdout} and
</span><br>
<span class="quotelev1">&gt; -        # {result_stderr}.
</span><br>
<span class="quotelev1">&gt; -        if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status})) {
</span><br>
<span class="quotelev1">&gt; -            $ret-&gt;{result_message} = &quot;\&quot;$cmd $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{$arguments_key}\&quot; failed -- skipping this build.&quot;;
</span><br>
<span class="quotelev1">&gt; -            # Put the output of the failure into $ret so that it gets
</span><br>
<span class="quotelev1">&gt; -            # reported
</span><br>
<span class="quotelev1">&gt; -            $ret-&gt;{result_stdout} = $result_stdout
</span><br>
<span class="quotelev1">&gt; -                if (defined($result_stdout));
</span><br>
<span class="quotelev1">&gt; -            $ret-&gt;{result_stderr} = $result_stderr
</span><br>
<span class="quotelev1">&gt; -                if (!$mss &amp;&amp; defined($result_stderr));
</span><br>
<span class="quotelev1">&gt; -            $ret-&gt;{exit_status} = $ret-&gt;{exit_status};
</span><br>
<span class="quotelev1">&gt; -            $ret-&gt;{fail} = 1;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        # If succeed, keep the stdout/stderr in their respective hash
</span><br>
<span class="quotelev1">&gt; -        # keys for this step.
</span><br>
<span class="quotelev1">&gt; -        else {
</span><br>
<span class="quotelev1">&gt; -            if (defined($result_stdout)) {
</span><br>
<span class="quotelev1">&gt; -                delete $ret-&gt;{result_stdout};
</span><br>
<span class="quotelev1">&gt; -                $ret-&gt;{$stdout_key} = $result_stdout;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            if (!$mss &amp;&amp; defined($result_stderr)) {
</span><br>
<span class="quotelev1">&gt; -                delete $ret-&gt;{result_stderr};
</span><br>
<span class="quotelev1">&gt; -                $ret-&gt;{$stderr_key} = $result_stderr;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        Debug(&quot;Skippping '$cmd' step.\n&quot;);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (defined($config-&gt;{$after_cmd_key})) {
</span><br>
<span class="quotelev1">&gt; -        _run_step($config-&gt;{$after_cmd_key}, $after_cmd_key);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return $ret;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -sub _run_step {
</span><br>
<span class="quotelev1">&gt; -    my ($cmd, $step) = @_;
</span><br>
<span class="quotelev1">&gt; -    return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -1;
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2009      High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt; +#                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
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
<span class="quotelev1">&gt; +package MTT::Common::GNU_Install;
</span><br>
<span class="quotelev1">&gt; +my $package = ModuleName(__PACKAGE__);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +use MTT::Messages;
</span><br>
<span class="quotelev1">&gt; +use MTT::Values;
</span><br>
<span class="quotelev1">&gt; +use MTT::Common::Do_step;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Do the following steps:
</span><br>
<span class="quotelev1">&gt; +#   [ ] configure
</span><br>
<span class="quotelev1">&gt; +#   [?] make clean
</span><br>
<span class="quotelev1">&gt; +#   [ ] make all
</span><br>
<span class="quotelev1">&gt; +#   [?] make check
</span><br>
<span class="quotelev1">&gt; +#   [ ] make install
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# ? = optional step
</span><br>
<span class="quotelev1">&gt; +sub Install {
</span><br>
<span class="quotelev1">&gt; +    my ($config) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $x;
</span><br>
<span class="quotelev1">&gt; +    my $result_stdout;
</span><br>
<span class="quotelev1">&gt; +    my $result_stderr;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Prepare $ret
</span><br>
<span class="quotelev1">&gt; +    my $ret;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{test_result} = MTT::Values::FAIL;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{exit_status} = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # If the user does not use --prefix on their own, default
</span><br>
<span class="quotelev1">&gt; +    # to $installdir
</span><br>
<span class="quotelev1">&gt; +    my $prefix;
</span><br>
<span class="quotelev1">&gt; +    if ($config-&gt;{configure_arguments} !~ /--prefix\b/) {
</span><br>
<span class="quotelev1">&gt; +        $config-&gt;{configure_arguments} .= &quot; --prefix=$config- 
</span><br>
<span class="quotelev2">&gt; &gt;{installdir}&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Process the optional step booleans
</span><br>
<span class="quotelev1">&gt; +    if (!$config-&gt;{make_clean}) {
</span><br>
<span class="quotelev1">&gt; +        $config-&gt;{skip_make_clean} = 1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if (!$config-&gt;{make_check}) {
</span><br>
<span class="quotelev1">&gt; +        $config-&gt;{skip_make_check} = 1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $x = MTT::Common::Do_step::_do_step($config, &quot;configure&quot;,
</span><br>
<span class="quotelev1">&gt; +                                        $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{merge_stdout_stderr},  $config-&gt;{configdir});
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Overlapping keys in $x override $ret
</span><br>
<span class="quotelev1">&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # &quot;make clean&quot; can fail for all we care
</span><br>
<span class="quotelev1">&gt; +    $x = MTT::Common::Do_step::_do_step($config, &quot;make clean&quot;, 1);
</span><br>
<span class="quotelev1">&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $x = MTT::Common::Do_step::_do_step($config, &quot;make all&quot;,  
</span><br>
<span class="quotelev1">&gt; $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev1">&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Do we want to run &quot;make check&quot;?  If so, make sure a valid  
</span><br>
<span class="quotelev1">&gt; TMPDIR
</span><br>
<span class="quotelev1">&gt; +    # exists.  Also, merge the result_stdout/result_stderr because we
</span><br>
<span class="quotelev1">&gt; +    # really only want to see it if something fails (i.e., it's  
</span><br>
<span class="quotelev1">&gt; common
</span><br>
<span class="quotelev1">&gt; +    # to display junk to result_stderr during &quot;make check&quot;'s normal
</span><br>
<span class="quotelev1">&gt; +    # execution).
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my %ENV_SAVE = %ENV;
</span><br>
<span class="quotelev1">&gt; +    $ENV{TMPDIR} = &quot;$config-&gt;{installdir}/tmp&quot;;
</span><br>
<span class="quotelev1">&gt; +    mkdir($ENV{TMPDIR}, 0777);
</span><br>
<span class="quotelev1">&gt; +    # The intent here is just to ensure that the LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; +    # in the environment does not point to shared libraries
</span><br>
<span class="quotelev1">&gt; +    # outside of MTT's scope that would interfere with &quot;make
</span><br>
<span class="quotelev1">&gt; +    # check&quot; (e.g., another libmpi.so outside of MTT).  Just
</span><br>
<span class="quotelev1">&gt; +    # prepend our own $libdir to LD_LIBRARY_PATH and hope that
</span><br>
<span class="quotelev1">&gt; +    # that's Good Enough.  :-)
</span><br>
<span class="quotelev1">&gt; +    if (exists($ENV{LD_LIBRARY_PATH})) {
</span><br>
<span class="quotelev1">&gt; +        $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}: 
</span><br>
<span class="quotelev1">&gt; $ENV{LD_LIBRARY_PATH}&quot;;
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $x = MTT::Common::Do_step::_do_step($config, &quot;make check&quot;, 1);
</span><br>
<span class="quotelev1">&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +    %ENV = %ENV_SAVE;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $x = MTT::Common::Do_step::_do_step($config, &quot;make install&quot;, 1);
</span><br>
<span class="quotelev1">&gt; +    %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # All done!
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{test_result} = MTT::Values::PASS;
</span><br>
<span class="quotelev1">&gt; +    $ret-&gt;{result_message} = &quot;Success&quot;;
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;Build was a success\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/Defaults.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Defaults.pm	(revision 1271)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Defaults.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -3,6 +3,8 @@
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt; #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2009      High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt; +#                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -39,7 +41,7 @@
</span><br>
<span class="quotelev1">&gt;     },
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     known_compiler_names =&gt; [ &quot;gnu&quot;, &quot;pgi&quot;, &quot;ibm&quot;, &quot;intel&quot;, &quot;kai&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;absoft&quot;,
</span><br>
<span class="quotelev1">&gt; -                              &quot;pathscale&quot;, &quot;sun&quot;, &quot;none&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;unknown&quot; ],
</span><br>
<span class="quotelev1">&gt; +                              &quot;pathscale&quot;, &quot;sun&quot;, &quot;microsoft&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;none&quot;, &quot;unknown&quot; ],
</span><br>
<span class="quotelev1">&gt;     known_resource_manager_names =&gt; [ &quot;slurm&quot;, &quot;tm&quot;, &quot;loadleveler&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;n1ge&quot;,
</span><br>
<span class="quotelev1">&gt;                                       &quot;alps&quot;, &quot;none&quot;, &quot;unknown&quot; ],
</span><br>
<span class="quotelev1">&gt;     known_network_names =&gt; [ &quot;tcp&quot;, &quot;udp&quot;, &quot;ethernet&quot;, &quot;gm&quot;, &quot;mx&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;verbs&quot;,
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/MPI/Install/OMPI.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/MPI/Install/OMPI.pm	(revision 1271)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/MPI/Install/OMPI.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -3,6 +3,8 @@
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt; #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2009      High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt; +#                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -20,6 +22,7 @@
</span><br>
<span class="quotelev1">&gt; use MTT::Values;
</span><br>
<span class="quotelev1">&gt; use MTT::Files;
</span><br>
<span class="quotelev1">&gt; use MTT::Common::GNU_Install;
</span><br>
<span class="quotelev1">&gt; +use MTT::Common::Cmake;
</span><br>
<span class="quotelev1">&gt; use MTT::Values::Functions::MPI::OMPI;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; @@ -71,6 +74,10 @@
</span><br>
<span class="quotelev1">&gt;     $config-&gt;{make_check} = $tmp
</span><br>
<span class="quotelev1">&gt;         if (defined($tmp));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    $tmp = Logical($ini, $section, &quot;ompi_cmake&quot;);
</span><br>
<span class="quotelev1">&gt; +    $config-&gt;{ompi_cmake} = $tmp
</span><br>
<span class="quotelev1">&gt; +        if (defined($tmp));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     # Run configure / make all / make check / make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     my $gnu = {
</span><br>
<span class="quotelev1">&gt; @@ -86,7 +93,14 @@
</span><br>
<span class="quotelev1">&gt;         stderr_save_lines =&gt; $config-&gt;{stderr_save_lines},
</span><br>
<span class="quotelev1">&gt;         merge_stdout_stderr =&gt; $config-&gt;{merge_stdout_stderr},
</span><br>
<span class="quotelev1">&gt;     };
</span><br>
<span class="quotelev1">&gt; -    my $install = MTT::Common::GNU_Install::Install($gnu);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $install;
</span><br>
<span class="quotelev1">&gt; +    if($config-&gt;{ompi_cmake}) {
</span><br>
<span class="quotelev1">&gt; +        $install = MTT::Common::Cmake::Install($gnu);
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        $install = MTT::Common::GNU_Install::Install($gnu);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     foreach my $k (keys(%{$install})) {
</span><br>
<span class="quotelev1">&gt;         $ret-&gt;{$k} = $install-&gt;{$k};
</span><br>
<span class="quotelev1">&gt;     }
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
<li><strong>Next message:</strong> <a href="0333.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0333.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0333.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
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
