<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 07:00:44 2009" -->
<!-- isoreceived="20090312110044" -->
<!-- sent="Thu, 12 Mar 2009 12:00:34 +0100" -->
<!-- isosent="20090312110034" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="49B8EB52.9010102_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5AEC56BE-CEE0-40B2-865B-F10650749761_at_cisco.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 07:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0340.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0340.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is some output of 'svn info':
<br>
<p>Path: .
<br>
URL: <a href="https://svn.open-mpi.org/svn/mtt/trunk">https://svn.open-mpi.org/svn/mtt/trunk</a>
<br>
Repository Root: <a href="https://svn.open-mpi.org/svn/mtt">https://svn.open-mpi.org/svn/mtt</a>
<br>
Repository UUID: 3a00f1f0-e206-0410-aee5-9638c71ae14b
<br>
Revision: 1271
<br>
Node Kind: directory
<br>
Schedule: normal
<br>
Last Changed Author: emallove
<br>
Last Changed Rev: 1271
<br>
Last Changed Date: 2009-02-05 18:22:38 +0100 (Thu, 05 Feb 2009)
<br>
<p><p>Is that ok, if someone else commits the patch instead of me? I don't 
<br>
mind actually. :-)
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Did you check out via https?  We only allow commits to all OMPI SVN 
</span><br>
<span class="quotelev1">&gt; repositories via https.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2009, at 5:10 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ethan and Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for all your help. Now it's been fixed and tested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But it seems that I don't have permission to commit the patch ( I got
</span><br>
<span class="quotelev2">&gt;&gt; 403 forbidden ). Any idea?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p>
<p>
Index: lib/Filesys/DiskFree.pm
<br>
===================================================================
<br>
--- lib/Filesys/DiskFree.pm	(revision 1271)
<br>
+++ lib/Filesys/DiskFree.pm	(working copy)
<br>
@@ -29,6 +29,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'inodes' =&gt; &quot;df -Pi&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'format' =&gt; &quot;linuxish&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},
<br>
+    'cygwin' =&gt; {
<br>
+	'blocks' =&gt; &quot;df -P&quot;,
<br>
+	'inodes' =&gt; &quot;df -Pi&quot;,
<br>
+	'format' =&gt; &quot;linuxish&quot;,
<br>
+    },
<br>
+    'msys' =&gt; {
<br>
+	'blocks' =&gt; &quot;df -P&quot;,
<br>
+	'inodes' =&gt; &quot;df -Pi&quot;,
<br>
+	'format' =&gt; &quot;linuxish&quot;,
<br>
+    },
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'solaris' =&gt;  {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'blocks' =&gt; &quot;df -k&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'inodes' =&gt; &quot;df -k -o i -F ufs&quot;,
<br>
Index: lib/MTT/Common/Cmake.pm
<br>
===================================================================
<br>
--- lib/MTT/Common/Cmake.pm	(revision 0)
<br>
+++ lib/MTT/Common/Cmake.pm	(revision 0)
<br>
@@ -0,0 +1,77 @@
<br>
+#!/usr/bin/env perl
<br>
+#
<br>
+# Copyright (c) 2005-2006 The Trustees of Indiana University.
<br>
+#                         All rights reserved.
<br>
+# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
<br>
+#                         University of Stuttgart.  All rights reserved.
<br>
+# $COPYRIGHT$
<br>
+#
<br>
+# Additional copyrights may follow
<br>
+#
<br>
+# $HEADER$
<br>
+#
<br>
+
<br>
+package MTT::Common::Cmake;
<br>
+my $package = ModuleName(__PACKAGE__);
<br>
+
<br>
+use strict;
<br>
+use MTT::Messages;
<br>
+use MTT::Values;
<br>
+use MTT::Common::Do_step;
<br>
+
<br>
+#--------------------------------------------------------------------------
<br>
+
<br>
+# Do the following steps:
<br>
+#   [ ] cmake -G &quot;generator&quot; -D configure_arguments source_path
<br>
+#   [ ] devenv OpenMPI.sln /build
<br>
+sub Install {
<br>
+    my ($config) = @_;
<br>
+
<br>
+    my $x;
<br>
+    my $result_stdout;
<br>
+    my $result_stderr;
<br>
+
<br>
+    # Prepare $ret
<br>
+    my $ret;
<br>
+    $ret-&gt;{test_result} = MTT::Values::FAIL;
<br>
+    $ret-&gt;{exit_status} = 0;
<br>
+
<br>
+    # On windows, do the following steps:
<br>
+
<br>
+    # prepare the windows style prefix.
<br>
+    # replace '/cygdrive/x/' with 'x:/'
<br>
+    my $win_prefix = substr ($config-&gt;{installdir},10,1) . &quot;:&quot; . substr ($config-&gt;{installdir},11);
<br>
+
<br>
+    # generate Visual Studio solution files
<br>
+    # use 'script' to redirect MS command output
<br>
+    $x = MTT::Common::Do_step::do_step($config,
<br>
+                                        &quot;script -a -c \&quot;cmake $config-&gt;{configure_arguments} -D CMAKE_INSTALL_PREFIX:PATH=$win_prefix .\&quot; -f temp.txt&quot;, 
<br>
+                                        $config-&gt;{merge_stdout_stderr});
<br>
+
<br>
+    # Overlapping keys in $x override $ret
<br>
+    %$ret = (%$ret, %$x);
<br>
+    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
+
<br>
+    # compile the whole solution
<br>
+    $x = MTT::Common::Do_step::do_step($config, &quot;script -a -c \&quot;devenv.com *.sln /build debug\&quot; -f temp.txt&quot;,
<br>
+                                        $config-&gt;{merge_stdout_stderr});
<br>
+    %$ret = (%$ret, %$x);
<br>
+    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
+
<br>
+    # install to the prefix dir
<br>
+    $x = MTT::Common::Do_step::do_step($config, &quot;script -a -c \&quot;devenv.com *.sln /project INSTALL.vcproj /build\&quot; -f temp.txt&quot;,
<br>
+                                        $config-&gt;{merge_stdout_stderr});
<br>
+    %$ret = (%$ret, %$x);
<br>
+    return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
+
<br>
+    # All done!
<br>
+    $ret-&gt;{test_result} = MTT::Values::PASS;
<br>
+    $ret-&gt;{result_message} = &quot;Success&quot;;
<br>
+    Debug(&quot;Build was a success\n&quot;);
<br>
+
<br>
+    return $ret;
<br>
+}
<br>
+
<br>
+1;
<br>
Index: lib/MTT/Common/Do_step.pm
<br>
===================================================================
<br>
--- lib/MTT/Common/Do_step.pm	(revision 0)
<br>
+++ lib/MTT/Common/Do_step.pm	(revision 0)
<br>
@@ -0,0 +1,139 @@
<br>
+#!/usr/bin/env perl
<br>
+#
<br>
+# Copyright (c) 2005-2006 The Trustees of Indiana University.
<br>
+#                         All rights reserved.
<br>
+# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
<br>
+#                         University of Stuttgart.  All rights reserved.
<br>
+# $COPYRIGHT$
<br>
+#
<br>
+# Additional copyrights may follow
<br>
+#
<br>
+# $HEADER$
<br>
+#
<br>
+
<br>
+package MTT::Common::Do_step;
<br>
+
<br>
+use strict;
<br>
+use Data::Dumper;
<br>
+use MTT::DoCommand;
<br>
+use MTT::Messages;
<br>
+use MTT::FindProgram;
<br>
+use MTT::Values;
<br>
+use MTT::Files;
<br>
+
<br>
+sub do_step {
<br>
+    my ($config, $cmd, $mss, $dir) = @_;
<br>
+
<br>
+    # Prepare return value. Start with an empty, but defined hash
<br>
+    my $ret = {};
<br>
+    my $result_stdout;
<br>
+    my $result_stderr;
<br>
+
<br>
+    # As long as this pattern is emitted during the step, keep
<br>
+    # attempting to re-start the step (&quot;restart_attempts&quot; times)
<br>
+    my $restart_on_pattern;
<br>
+    my $restart_attempts_max = 500;
<br>
+    my $restart_attempts = 0;
<br>
+    if (defined($config-&gt;{restart_on_pattern})) {
<br>
+        $restart_on_pattern = $config-&gt;{restart_on_pattern};
<br>
+    } else {
<br>
+        $restart_attempts_max = -1;
<br>
+    }
<br>
+
<br>
+    # Hash keys and INI params do not contain spaces. Change them to underscores.
<br>
+    my $hash_key = $cmd;
<br>
+    $hash_key =~ s/ /_/g;
<br>
+
<br>
+    # Optional path for program
<br>
+    if (defined($dir)) {
<br>
+        $cmd = &quot;$dir/$cmd&quot;;
<br>
+    }
<br>
+
<br>
+    my $arguments_key = &quot;${hash_key}_arguments&quot;;
<br>
+    my $stdout_key = &quot;${hash_key}_stdout&quot;;
<br>
+    my $stderr_key = &quot;${hash_key}_stderr&quot;;
<br>
+    my $skip_key = &quot;skip_${hash_key}&quot;;
<br>
+    my $before_cmd_key = &quot;before_${hash_key}&quot;;
<br>
+    my $after_cmd_key = &quot;after_${hash_key}&quot;;
<br>
+
<br>
+    if (defined($config-&gt;{$before_cmd_key})) {
<br>
+        _run_step($config-&gt;{$before_cmd_key}, $before_cmd_key);
<br>
+    }
<br>
+
<br>
+    if (!$config-&gt;{$skip_key}) {
<br>
+
<br>
+        my $i = 0;
<br>
+        do {
<br>
+            Debug(&quot;Restarting $cmd (restart attempt #$i\n&quot;) if ($i++ gt 0);
<br>
+            $ret = MTT::DoCommand::Cmd($mss,
<br>
+                        &quot;$cmd $config-&gt;{$arguments_key}&quot;, -1,
<br>
+                         $config-&gt;{stdout_save_lines},
<br>
+                         $config-&gt;{stderr_save_lines});
<br>
+
<br>
+            # Add header line to stdout
<br>
+            if (defined($ret-&gt;{result_stdout}) &amp;&amp;
<br>
+                $ret-&gt;{result_stdout} !~ /^\s*$/) {
<br>
+                $result_stdout = &quot;--- $cmd $config-&gt;{$arguments_key} result_stdout&quot;;
<br>
+                $result_stdout .= &quot;/result_stderr&quot;
<br>
+                    if ($mss);
<br>
+                $result_stdout .= &quot; ---\n$ret-&gt;{result_stdout}&quot;;
<br>
+            }
<br>
+
<br>
+            # Add header line to stderr
<br>
+            if (!$mss &amp;&amp; defined($ret-&gt;{result_stderr}) &amp;&amp;
<br>
+                $ret-&gt;{result_stderr} !~ /^\s*$/) {
<br>
+                $result_stderr = &quot;--- $cmd $config-&gt;{$arguments_key} result_stderr ---\n$ret-&gt;{result_stderr}&quot;;
<br>
+            }
<br>
+
<br>
+        # Repeat *only* if $restart_on_pattern is defined
<br>
+        } while (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}) and
<br>
+                 (defined($restart_on_pattern) &amp;&amp;
<br>
+                  ($ret-&gt;{result_stderr} =~ /$restart_on_pattern/i or
<br>
+                   $ret-&gt;{result_stdout} =~ /$restart_on_pattern/i) and
<br>
+                  $restart_attempts++ &lt; $restart_attempts_max));
<br>
+
<br>
+        # If fail, save the results in {result_stdout} and
<br>
+        # {result_stderr}.
<br>
+        if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status})) {
<br>
+            $ret-&gt;{result_message} = &quot;\&quot;$cmd $config-&gt;{$arguments_key}\&quot; failed -- skipping this build.&quot;;
<br>
+            # Put the output of the failure into $ret so that it gets
<br>
+            # reported
<br>
+            $ret-&gt;{result_stdout} = $result_stdout
<br>
+                if (defined($result_stdout));
<br>
+            $ret-&gt;{result_stderr} = $result_stderr
<br>
+                if (!$mss &amp;&amp; defined($result_stderr));
<br>
+            $ret-&gt;{exit_status} = $ret-&gt;{exit_status};
<br>
+            $ret-&gt;{fail} = 1;
<br>
+        }
<br>
+
<br>
+        # If succeed, keep the stdout/stderr in their respective hash
<br>
+        # keys for this step.
<br>
+        else {
<br>
+            if (defined($result_stdout)) {
<br>
+                delete $ret-&gt;{result_stdout};
<br>
+                $ret-&gt;{$stdout_key} = $result_stdout;
<br>
+            }
<br>
+            if (!$mss &amp;&amp; defined($result_stderr)) {
<br>
+                delete $ret-&gt;{result_stderr};
<br>
+                $ret-&gt;{$stderr_key} = $result_stderr;
<br>
+            }
<br>
+        }
<br>
+    } else {
<br>
+        Debug(&quot;Skippping '$cmd' step.\n&quot;);
<br>
+    }
<br>
+
<br>
+    if (defined($config-&gt;{$after_cmd_key})) {
<br>
+        _run_step($config-&gt;{$after_cmd_key}, $after_cmd_key);
<br>
+    }
<br>
+
<br>
+    return $ret;
<br>
+}
<br>
+
<br>
+sub _run_step {
<br>
+    my ($cmd, $step) = @_;
<br>
+    return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
<br>
+}
<br>
+
<br>
+1;
<br>
Index: lib/MTT/Common/GNU_Install.pm
<br>
===================================================================
<br>
--- lib/MTT/Common/GNU_Install.pm	(revision 1271)
<br>
+++ lib/MTT/Common/GNU_Install.pm	(working copy)
<br>
@@ -4,6 +4,8 @@
<br>
&nbsp;#                         All rights reserved.
<br>
&nbsp;# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
<br>
+#                         University of Stuttgart.  All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;#
<br>
&nbsp;# Additional copyrights may follow
<br>
@@ -15,12 +17,9 @@
<br>
&nbsp;my $package = ModuleName(__PACKAGE__);
<br>
&nbsp;
<br>
&nbsp;use strict;
<br>
-use Data::Dumper;
<br>
-use MTT::DoCommand;
<br>
&nbsp;use MTT::Messages;
<br>
-use MTT::FindProgram;
<br>
&nbsp;use MTT::Values;
<br>
-use MTT::Files;
<br>
+use MTT::Common::Do_step;
<br>
&nbsp;
<br>
&nbsp;#--------------------------------------------------------------------------
<br>
&nbsp;
<br>
@@ -59,7 +58,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$config-&gt;{skip_make_check} = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    $x = _do_step($config, &quot;configure&quot;,
<br>
+    $x = MTT::Common::Do_step::do_step($config, &quot;configure&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$config-&gt;{merge_stdout_stderr},  $config-&gt;{configdir});
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Overlapping keys in $x override $ret
<br>
@@ -67,10 +66,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# &quot;make clean&quot; can fail for all we care
<br>
-    $x = _do_step($config, &quot;make clean&quot;, 1);
<br>
+    $x = MTT::Common::Do_step::do_step($config, &quot;make clean&quot;, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%$ret = (%$ret, %$x);
<br>
&nbsp;
<br>
-    $x = _do_step($config, &quot;make all&quot;, $config-&gt;{merge_stdout_stderr});
<br>
+    $x = MTT::Common::Do_step::do_step($config, &quot;make all&quot;, $config-&gt;{merge_stdout_stderr});
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%$ret = (%$ret, %$x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
&nbsp;
<br>
@@ -95,12 +94,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    $x = _do_step($config, &quot;make check&quot;, 1);
<br>
+    $x = MTT::Common::Do_step::do_step($config, &quot;make check&quot;, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%$ret = (%$ret, %$x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%ENV = %ENV_SAVE;
<br>
&nbsp;
<br>
-    $x = _do_step($config, &quot;make install&quot;, 1);
<br>
+    $x = MTT::Common::Do_step::do_step($config, &quot;make install&quot;, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%$ret = (%$ret, %$x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
&nbsp;
<br>
@@ -112,117 +111,4 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $ret;
<br>
&nbsp;}
<br>
&nbsp;
<br>
-sub _do_step {
<br>
-    my ($config, $cmd, $mss, $dir) = @_;
<br>
-
<br>
-    # Prepare return value. Start with an empty, but defined hash
<br>
-    my $ret = {};
<br>
-    my $result_stdout;
<br>
-    my $result_stderr;
<br>
-
<br>
-    # As long as this pattern is emitted during the step, keep
<br>
-    # attempting to re-start the step (&quot;restart_attempts&quot; times)
<br>
-    my $restart_on_pattern;
<br>
-    my $restart_attempts_max = 500;
<br>
-    my $restart_attempts = 0;
<br>
-    if (defined($config-&gt;{restart_on_pattern})) {
<br>
-        $restart_on_pattern = $config-&gt;{restart_on_pattern};
<br>
-    } else {
<br>
-        $restart_attempts_max = -1;
<br>
-    }
<br>
-
<br>
-    # Hash keys and INI params do not contain spaces. Change them to underscores.
<br>
-    my $hash_key = $cmd;
<br>
-    $hash_key =~ s/ /_/g;
<br>
-
<br>
-    # Optional path for program
<br>
-    if (defined($dir)) {
<br>
-        $cmd = &quot;$dir/$cmd&quot;;
<br>
-    }
<br>
-
<br>
-    my $arguments_key = &quot;${hash_key}_arguments&quot;;
<br>
-    my $stdout_key = &quot;${hash_key}_stdout&quot;;
<br>
-    my $stderr_key = &quot;${hash_key}_stderr&quot;;
<br>
-    my $skip_key = &quot;skip_${hash_key}&quot;;
<br>
-    my $before_cmd_key = &quot;before_${hash_key}&quot;;
<br>
-    my $after_cmd_key = &quot;after_${hash_key}&quot;;
<br>
-
<br>
-    if (defined($config-&gt;{$before_cmd_key})) {
<br>
-        _run_step($config-&gt;{$before_cmd_key}, $before_cmd_key);
<br>
-    }
<br>
-
<br>
-    if (!$config-&gt;{$skip_key}) {
<br>
-
<br>
-        my $i = 0;
<br>
-        do {
<br>
-            Debug(&quot;Restarting $cmd (restart attempt #$i\n&quot;) if ($i++ gt 0);
<br>
-            $ret = MTT::DoCommand::Cmd($mss,
<br>
-                        &quot;$cmd $config-&gt;{$arguments_key}&quot;, -1,
<br>
-                         $config-&gt;{stdout_save_lines},
<br>
-                         $config-&gt;{stderr_save_lines});
<br>
-
<br>
-            # Add header line to stdout
<br>
-            if (defined($ret-&gt;{result_stdout}) &amp;&amp;
<br>
-                $ret-&gt;{result_stdout} !~ /^\s*$/) {
<br>
-                $result_stdout = &quot;--- $cmd $config-&gt;{$arguments_key} result_stdout&quot;;
<br>
-                $result_stdout .= &quot;/result_stderr&quot;
<br>
-                    if ($mss);
<br>
-                $result_stdout .= &quot; ---\n$ret-&gt;{result_stdout}&quot;;
<br>
-            }
<br>
-
<br>
-            # Add header line to stderr
<br>
-            if (!$mss &amp;&amp; defined($ret-&gt;{result_stderr}) &amp;&amp;
<br>
-                $ret-&gt;{result_stderr} !~ /^\s*$/) {
<br>
-                $result_stderr = &quot;--- $cmd $config-&gt;{$arguments_key} result_stderr ---\n$ret-&gt;{result_stderr}&quot;;
<br>
-            }
<br>
-
<br>
-        # Repeat *only* if $restart_on_pattern is defined
<br>
-        } while (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}) and
<br>
-                 (defined($restart_on_pattern) &amp;&amp;
<br>
-                  ($ret-&gt;{result_stderr} =~ /$restart_on_pattern/i or
<br>
-                   $ret-&gt;{result_stdout} =~ /$restart_on_pattern/i) and
<br>
-                  $restart_attempts++ &lt; $restart_attempts_max));
<br>
-
<br>
-        # If fail, save the results in {result_stdout} and
<br>
-        # {result_stderr}.
<br>
-        if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status})) {
<br>
-            $ret-&gt;{result_message} = &quot;\&quot;$cmd $config-&gt;{$arguments_key}\&quot; failed -- skipping this build.&quot;;
<br>
-            # Put the output of the failure into $ret so that it gets
<br>
-            # reported
<br>
-            $ret-&gt;{result_stdout} = $result_stdout
<br>
-                if (defined($result_stdout));
<br>
-            $ret-&gt;{result_stderr} = $result_stderr
<br>
-                if (!$mss &amp;&amp; defined($result_stderr));
<br>
-            $ret-&gt;{exit_status} = $ret-&gt;{exit_status};
<br>
-            $ret-&gt;{fail} = 1;
<br>
-        }
<br>
-
<br>
-        # If succeed, keep the stdout/stderr in their respective hash
<br>
-        # keys for this step.
<br>
-        else {
<br>
-            if (defined($result_stdout)) {
<br>
-                delete $ret-&gt;{result_stdout};
<br>
-                $ret-&gt;{$stdout_key} = $result_stdout;
<br>
-            }
<br>
-            if (!$mss &amp;&amp; defined($result_stderr)) {
<br>
-                delete $ret-&gt;{result_stderr};
<br>
-                $ret-&gt;{$stderr_key} = $result_stderr;
<br>
-            }
<br>
-        }
<br>
-    } else {
<br>
-        Debug(&quot;Skippping '$cmd' step.\n&quot;);
<br>
-    }
<br>
-
<br>
-    if (defined($config-&gt;{$after_cmd_key})) {
<br>
-        _run_step($config-&gt;{$after_cmd_key}, $after_cmd_key);
<br>
-    }
<br>
-
<br>
-    return $ret;
<br>
-}
<br>
-
<br>
-sub _run_step {
<br>
-    my ($cmd, $step) = @_;
<br>
-    return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
<br>
-}
<br>
-
<br>
&nbsp;1;
<br>
Index: lib/MTT/Defaults.pm
<br>
===================================================================
<br>
--- lib/MTT/Defaults.pm	(revision 1271)
<br>
+++ lib/MTT/Defaults.pm	(working copy)
<br>
@@ -3,6 +3,8 @@
<br>
&nbsp;# Copyright (c) 2005-2006 The Trustees of Indiana University.
<br>
&nbsp;#                         All rights reserved.
<br>
&nbsp;# Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
<br>
+#                         University of Stuttgart.  All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;# 
<br>
&nbsp;# Additional copyrights may follow
<br>
@@ -39,7 +41,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;known_compiler_names =&gt; [ &quot;gnu&quot;, &quot;pgi&quot;, &quot;ibm&quot;, &quot;intel&quot;, &quot;kai&quot;, &quot;absoft&quot;,
<br>
-                              &quot;pathscale&quot;, &quot;sun&quot;, &quot;none&quot;, &quot;unknown&quot; ],
<br>
+                              &quot;pathscale&quot;, &quot;sun&quot;, &quot;microsoft&quot;, &quot;none&quot;, &quot;unknown&quot; ],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;known_resource_manager_names =&gt; [ &quot;slurm&quot;, &quot;tm&quot;, &quot;loadleveler&quot;, &quot;n1ge&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;alps&quot;, &quot;none&quot;, &quot;unknown&quot; ],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;known_network_names =&gt; [ &quot;tcp&quot;, &quot;udp&quot;, &quot;ethernet&quot;, &quot;gm&quot;, &quot;mx&quot;, &quot;verbs&quot;,
<br>
Index: lib/MTT/MPI/Install/OMPI.pm
<br>
===================================================================
<br>
--- lib/MTT/MPI/Install/OMPI.pm	(revision 1271)
<br>
+++ lib/MTT/MPI/Install/OMPI.pm	(working copy)
<br>
@@ -3,6 +3,8 @@
<br>
&nbsp;# Copyright (c) 2005-2006 The Trustees of Indiana University.
<br>
&nbsp;#                         All rights reserved.
<br>
&nbsp;# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
<br>
+#                         University of Stuttgart.  All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;# 
<br>
&nbsp;# Additional copyrights may follow
<br>
@@ -20,6 +22,7 @@
<br>
&nbsp;use MTT::Values;
<br>
&nbsp;use MTT::Files;
<br>
&nbsp;use MTT::Common::GNU_Install;
<br>
+use MTT::Common::Cmake;
<br>
&nbsp;use MTT::Values::Functions::MPI::OMPI;
<br>
&nbsp;
<br>
&nbsp;#--------------------------------------------------------------------------
<br>
@@ -86,7 +89,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stderr_save_lines =&gt; $config-&gt;{stderr_save_lines},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;merge_stdout_stderr =&gt; $config-&gt;{merge_stdout_stderr},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
-    my $install = MTT::Common::GNU_Install::Install($gnu);
<br>
+
<br>
+    my $install;
<br>
+    my $sys_type=`uname -o`;
<br>
+    if(($sys_type =~ /cygwin/i || $sys_type =~ /msys/i) &amp;&amp;
<br>
+        $config-&gt;{compiler_name} eq &quot;microsoft&quot;) {
<br>
+        $install = MTT::Common::Cmake::Install($gnu);
<br>
+    } else {
<br>
+        $install = MTT::Common::GNU_Install::Install($gnu);
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach my $k (keys(%{$install})) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ret-&gt;{$k} = $install-&gt;{$k};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0340.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0340.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
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
