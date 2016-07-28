Index: lib/Filesys/DiskFree.pm
===================================================================
--- lib/Filesys/DiskFree.pm	(revision 1271)
+++ lib/Filesys/DiskFree.pm	(working copy)
@@ -29,6 +29,16 @@
 	'inodes' => "df -Pi",
 	'format' => "linuxish",
     },
+    'cygwin' => {
+	'blocks' => "df -P",
+	'inodes' => "df -Pi",
+	'format' => "linuxish",
+    },
+    'msys' => {
+	'blocks' => "df -P",
+	'inodes' => "df -Pi",
+	'format' => "linuxish",
+    },
     'solaris' =>  {
 	'blocks' => "df -k",
 	'inodes' => "df -k -o i -F ufs",
Index: lib/MTT/Common/Cmake.pm
===================================================================
--- lib/MTT/Common/Cmake.pm	(revision 0)
+++ lib/MTT/Common/Cmake.pm	(revision 0)
@@ -0,0 +1,77 @@
+#!/usr/bin/env perl
+#
+# Copyright (c) 2005-2006 The Trustees of Indiana University.
+#                         All rights reserved.
+# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
+# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
+#                         University of Stuttgart.  All rights reserved.
+# $COPYRIGHT$
+#
+# Additional copyrights may follow
+#
+# $HEADER$
+#
+
+package MTT::Common::Cmake;
+my $package = ModuleName(__PACKAGE__);
+
+use strict;
+use MTT::Messages;
+use MTT::Values;
+use MTT::Common::Do_step;
+
+#--------------------------------------------------------------------------
+
+# Do the following steps:
+#   [ ] cmake -G "generator" -D configure_arguments source_path
+#   [ ] devenv OpenMPI.sln /build
+sub Install {
+    my ($config) = @_;
+
+    my $x;
+    my $result_stdout;
+    my $result_stderr;
+
+    # Prepare $ret
+    my $ret;
+    $ret->{test_result} = MTT::Values::FAIL;
+    $ret->{exit_status} = 0;
+
+    # On windows, do the following steps:
+
+    # prepare the windows style prefix.
+    # replace '/cygdrive/x/' with 'x:/'
+    my $win_prefix = substr ($config->{installdir},10,1) . ":" . substr ($config->{installdir},11);
+
+    # generate Visual Studio solution files
+    # use 'script' to redirect MS command output
+    $x = MTT::Common::Do_step::do_step($config,
+                                        "script -a -c \"cmake $config->{configure_arguments} -D CMAKE_INSTALL_PREFIX:PATH=$win_prefix .\" -f temp.txt", 
+                                        $config->{merge_stdout_stderr});
+
+    # Overlapping keys in $x override $ret
+    %$ret = (%$ret, %$x);
+    return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
+
+    # compile the whole solution
+    $x = MTT::Common::Do_step::do_step($config, "script -a -c \"devenv.com *.sln /build debug\" -f temp.txt",
+                                        $config->{merge_stdout_stderr});
+    %$ret = (%$ret, %$x);
+    return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
+
+    # install to the prefix dir
+    $x = MTT::Common::Do_step::do_step($config, "script -a -c \"devenv.com *.sln /project INSTALL.vcproj /build\" -f temp.txt",
+                                        $config->{merge_stdout_stderr});
+    %$ret = (%$ret, %$x);
+    return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
+
+    # All done!
+    $ret->{test_result} = MTT::Values::PASS;
+    $ret->{result_message} = "Success";
+    Debug("Build was a success\n");
+
+    return $ret;
+}
+
+1;
Index: lib/MTT/Common/Do_step.pm
===================================================================
--- lib/MTT/Common/Do_step.pm	(revision 0)
+++ lib/MTT/Common/Do_step.pm	(revision 0)
@@ -0,0 +1,139 @@
+#!/usr/bin/env perl
+#
+# Copyright (c) 2005-2006 The Trustees of Indiana University.
+#                         All rights reserved.
+# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
+# Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
+#                         University of Stuttgart.  All rights reserved.
+# $COPYRIGHT$
+#
+# Additional copyrights may follow
+#
+# $HEADER$
+#
+
+package MTT::Common::Do_step;
+
+use strict;
+use Data::Dumper;
+use MTT::DoCommand;
+use MTT::Messages;
+use MTT::FindProgram;
+use MTT::Values;
+use MTT::Files;
+
+sub do_step {
+    my ($config, $cmd, $mss, $dir) = @_;
+
+    # Prepare return value. Start with an empty, but defined hash
+    my $ret = {};
+    my $result_stdout;
+    my $result_stderr;
+
+    # As long as this pattern is emitted during the step, keep
+    # attempting to re-start the step ("restart_attempts" times)
+    my $restart_on_pattern;
+    my $restart_attempts_max = 500;
+    my $restart_attempts = 0;
+    if (defined($config->{restart_on_pattern})) {
+        $restart_on_pattern = $config->{restart_on_pattern};
+    } else {
+        $restart_attempts_max = -1;
+    }
+
+    # Hash keys and INI params do not contain spaces. Change them to underscores.
+    my $hash_key = $cmd;
+    $hash_key =~ s/ /_/g;
+
+    # Optional path for program
+    if (defined($dir)) {
+        $cmd = "$dir/$cmd";
+    }
+
+    my $arguments_key = "${hash_key}_arguments";
+    my $stdout_key = "${hash_key}_stdout";
+    my $stderr_key = "${hash_key}_stderr";
+    my $skip_key = "skip_${hash_key}";
+    my $before_cmd_key = "before_${hash_key}";
+    my $after_cmd_key = "after_${hash_key}";
+
+    if (defined($config->{$before_cmd_key})) {
+        _run_step($config->{$before_cmd_key}, $before_cmd_key);
+    }
+
+    if (!$config->{$skip_key}) {
+
+        my $i = 0;
+        do {
+            Debug("Restarting $cmd (restart attempt #$i\n") if ($i++ gt 0);
+            $ret = MTT::DoCommand::Cmd($mss,
+                        "$cmd $config->{$arguments_key}", -1,
+                         $config->{stdout_save_lines},
+                         $config->{stderr_save_lines});
+
+            # Add header line to stdout
+            if (defined($ret->{result_stdout}) &&
+                $ret->{result_stdout} !~ /^\s*$/) {
+                $result_stdout = "--- $cmd $config->{$arguments_key} result_stdout";
+                $result_stdout .= "/result_stderr"
+                    if ($mss);
+                $result_stdout .= " ---\n$ret->{result_stdout}";
+            }
+
+            # Add header line to stderr
+            if (!$mss && defined($ret->{result_stderr}) &&
+                $ret->{result_stderr} !~ /^\s*$/) {
+                $result_stderr = "--- $cmd $config->{$arguments_key} result_stderr ---\n$ret->{result_stderr}";
+            }
+
+        # Repeat *only* if $restart_on_pattern is defined
+        } while (!MTT::DoCommand::wsuccess($ret->{exit_status}) and
+                 (defined($restart_on_pattern) &&
+                  ($ret->{result_stderr} =~ /$restart_on_pattern/i or
+                   $ret->{result_stdout} =~ /$restart_on_pattern/i) and
+                  $restart_attempts++ < $restart_attempts_max));
+
+        # If fail, save the results in {result_stdout} and
+        # {result_stderr}.
+        if (!MTT::DoCommand::wsuccess($ret->{exit_status})) {
+            $ret->{result_message} = "\"$cmd $config->{$arguments_key}\" failed -- skipping this build.";
+            # Put the output of the failure into $ret so that it gets
+            # reported
+            $ret->{result_stdout} = $result_stdout
+                if (defined($result_stdout));
+            $ret->{result_stderr} = $result_stderr
+                if (!$mss && defined($result_stderr));
+            $ret->{exit_status} = $ret->{exit_status};
+            $ret->{fail} = 1;
+        }
+
+        # If succeed, keep the stdout/stderr in their respective hash
+        # keys for this step.
+        else {
+            if (defined($result_stdout)) {
+                delete $ret->{result_stdout};
+                $ret->{$stdout_key} = $result_stdout;
+            }
+            if (!$mss && defined($result_stderr)) {
+                delete $ret->{result_stderr};
+                $ret->{$stderr_key} = $result_stderr;
+            }
+        }
+    } else {
+        Debug("Skippping '$cmd' step.\n");
+    }
+
+    if (defined($config->{$after_cmd_key})) {
+        _run_step($config->{$after_cmd_key}, $after_cmd_key);
+    }
+
+    return $ret;
+}
+
+sub _run_step {
+    my ($cmd, $step) = @_;
+    return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
+}
+
+1;
Index: lib/MTT/Common/GNU_Install.pm
===================================================================
--- lib/MTT/Common/GNU_Install.pm	(revision 1271)
+++ lib/MTT/Common/GNU_Install.pm	(working copy)
@@ -4,6 +4,8 @@
 #                         All rights reserved.
 # Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
 # Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
+#                         University of Stuttgart.  All rights reserved.
 # $COPYRIGHT$
 #
 # Additional copyrights may follow
@@ -15,12 +17,9 @@
 my $package = ModuleName(__PACKAGE__);
 
 use strict;
-use Data::Dumper;
-use MTT::DoCommand;
 use MTT::Messages;
-use MTT::FindProgram;
 use MTT::Values;
-use MTT::Files;
+use MTT::Common::Do_step;
 
 #--------------------------------------------------------------------------
 
@@ -59,7 +58,7 @@
         $config->{skip_make_check} = 1;
     }
 
-    $x = _do_step($config, "configure",
+    $x = MTT::Common::Do_step::do_step($config, "configure",
                   $config->{merge_stdout_stderr},  $config->{configdir});
 
     # Overlapping keys in $x override $ret
@@ -67,10 +66,10 @@
     return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
 
     # "make clean" can fail for all we care
-    $x = _do_step($config, "make clean", 1);
+    $x = MTT::Common::Do_step::do_step($config, "make clean", 1);
     %$ret = (%$ret, %$x);
 
-    $x = _do_step($config, "make all", $config->{merge_stdout_stderr});
+    $x = MTT::Common::Do_step::do_step($config, "make all", $config->{merge_stdout_stderr});
     %$ret = (%$ret, %$x);
     return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
 
@@ -95,12 +94,12 @@
         $ENV{LD_LIBRARY_PATH} = "$config->{libdir}";
     }
 
-    $x = _do_step($config, "make check", 1);
+    $x = MTT::Common::Do_step::do_step($config, "make check", 1);
     %$ret = (%$ret, %$x);
     return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
     %ENV = %ENV_SAVE;
 
-    $x = _do_step($config, "make install", 1);
+    $x = MTT::Common::Do_step::do_step($config, "make install", 1);
     %$ret = (%$ret, %$x);
     return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
 
@@ -112,117 +111,4 @@
     return $ret;
 }
 
-sub _do_step {
-    my ($config, $cmd, $mss, $dir) = @_;
-
-    # Prepare return value. Start with an empty, but defined hash
-    my $ret = {};
-    my $result_stdout;
-    my $result_stderr;
-
-    # As long as this pattern is emitted during the step, keep
-    # attempting to re-start the step ("restart_attempts" times)
-    my $restart_on_pattern;
-    my $restart_attempts_max = 500;
-    my $restart_attempts = 0;
-    if (defined($config->{restart_on_pattern})) {
-        $restart_on_pattern = $config->{restart_on_pattern};
-    } else {
-        $restart_attempts_max = -1;
-    }
-
-    # Hash keys and INI params do not contain spaces. Change them to underscores.
-    my $hash_key = $cmd;
-    $hash_key =~ s/ /_/g;
-
-    # Optional path for program
-    if (defined($dir)) {
-        $cmd = "$dir/$cmd";
-    }
-
-    my $arguments_key = "${hash_key}_arguments";
-    my $stdout_key = "${hash_key}_stdout";
-    my $stderr_key = "${hash_key}_stderr";
-    my $skip_key = "skip_${hash_key}";
-    my $before_cmd_key = "before_${hash_key}";
-    my $after_cmd_key = "after_${hash_key}";
-
-    if (defined($config->{$before_cmd_key})) {
-        _run_step($config->{$before_cmd_key}, $before_cmd_key);
-    }
-
-    if (!$config->{$skip_key}) {
-
-        my $i = 0;
-        do {
-            Debug("Restarting $cmd (restart attempt #$i\n") if ($i++ gt 0);
-            $ret = MTT::DoCommand::Cmd($mss,
-                        "$cmd $config->{$arguments_key}", -1,
-                         $config->{stdout_save_lines},
-                         $config->{stderr_save_lines});
-
-            # Add header line to stdout
-            if (defined($ret->{result_stdout}) &&
-                $ret->{result_stdout} !~ /^\s*$/) {
-                $result_stdout = "--- $cmd $config->{$arguments_key} result_stdout";
-                $result_stdout .= "/result_stderr"
-                    if ($mss);
-                $result_stdout .= " ---\n$ret->{result_stdout}";
-            }
-
-            # Add header line to stderr
-            if (!$mss && defined($ret->{result_stderr}) &&
-                $ret->{result_stderr} !~ /^\s*$/) {
-                $result_stderr = "--- $cmd $config->{$arguments_key} result_stderr ---\n$ret->{result_stderr}";
-            }
-
-        # Repeat *only* if $restart_on_pattern is defined
-        } while (!MTT::DoCommand::wsuccess($ret->{exit_status}) and
-                 (defined($restart_on_pattern) &&
-                  ($ret->{result_stderr} =~ /$restart_on_pattern/i or
-                   $ret->{result_stdout} =~ /$restart_on_pattern/i) and
-                  $restart_attempts++ < $restart_attempts_max));
-
-        # If fail, save the results in {result_stdout} and
-        # {result_stderr}.
-        if (!MTT::DoCommand::wsuccess($ret->{exit_status})) {
-            $ret->{result_message} = "\"$cmd $config->{$arguments_key}\" failed -- skipping this build.";
-            # Put the output of the failure into $ret so that it gets
-            # reported
-            $ret->{result_stdout} = $result_stdout
-                if (defined($result_stdout));
-            $ret->{result_stderr} = $result_stderr
-                if (!$mss && defined($result_stderr));
-            $ret->{exit_status} = $ret->{exit_status};
-            $ret->{fail} = 1;
-        }
-
-        # If succeed, keep the stdout/stderr in their respective hash
-        # keys for this step.
-        else {
-            if (defined($result_stdout)) {
-                delete $ret->{result_stdout};
-                $ret->{$stdout_key} = $result_stdout;
-            }
-            if (!$mss && defined($result_stderr)) {
-                delete $ret->{result_stderr};
-                $ret->{$stderr_key} = $result_stderr;
-            }
-        }
-    } else {
-        Debug("Skippping '$cmd' step.\n");
-    }
-
-    if (defined($config->{$after_cmd_key})) {
-        _run_step($config->{$after_cmd_key}, $after_cmd_key);
-    }
-
-    return $ret;
-}
-
-sub _run_step {
-    my ($cmd, $step) = @_;
-    return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
-}
-
 1;
Index: lib/MTT/Defaults.pm
===================================================================
--- lib/MTT/Defaults.pm	(revision 1271)
+++ lib/MTT/Defaults.pm	(working copy)
@@ -3,6 +3,8 @@
 # Copyright (c) 2005-2006 The Trustees of Indiana University.
 #                         All rights reserved.
 # Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
+#                         University of Stuttgart.  All rights reserved.
 # $COPYRIGHT$
 # 
 # Additional copyrights may follow
@@ -39,7 +41,7 @@
     },
 
     known_compiler_names => [ "gnu", "pgi", "ibm", "intel", "kai", "absoft",
-                              "pathscale", "sun", "none", "unknown" ],
+                              "pathscale", "sun", "microsoft", "none", "unknown" ],
     known_resource_manager_names => [ "slurm", "tm", "loadleveler", "n1ge",
                                       "alps", "none", "unknown" ],
     known_network_names => [ "tcp", "udp", "ethernet", "gm", "mx", "verbs",
Index: lib/MTT/MPI/Install/OMPI.pm
===================================================================
--- lib/MTT/MPI/Install/OMPI.pm	(revision 1271)
+++ lib/MTT/MPI/Install/OMPI.pm	(working copy)
@@ -3,6 +3,8 @@
 # Copyright (c) 2005-2006 The Trustees of Indiana University.
 #                         All rights reserved.
 # Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
+# Copyright (c) 2009      High Performance Computing Center Stuttgart, 
+#                         University of Stuttgart.  All rights reserved.
 # $COPYRIGHT$
 # 
 # Additional copyrights may follow
@@ -20,6 +22,7 @@
 use MTT::Values;
 use MTT::Files;
 use MTT::Common::GNU_Install;
+use MTT::Common::Cmake;
 use MTT::Values::Functions::MPI::OMPI;
 
 #--------------------------------------------------------------------------
@@ -86,7 +89,16 @@
         stderr_save_lines => $config->{stderr_save_lines},
         merge_stdout_stderr => $config->{merge_stdout_stderr},
     };
-    my $install = MTT::Common::GNU_Install::Install($gnu);
+
+    my $install;
+    my $sys_type=`uname -o`;
+    if(($sys_type == "Cygwin" || $sys_type == "Msys") &&
+        $config->{compiler_name} == "microsoft") {
+        $install = MTT::Common::Cmake::Install($gnu);
+    } else {
+        $install = MTT::Common::GNU_Install::Install($gnu);
+    }
+
     foreach my $k (keys(%{$install})) {
         $ret->{$k} = $install->{$k};
     }