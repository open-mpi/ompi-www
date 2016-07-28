Index: lib/Filesys/DiskFree.pm
===================================================================
--- lib/Filesys/DiskFree.pm	(revision 1271)
+++ lib/Filesys/DiskFree.pm	(working copy)
@@ -29,6 +29,11 @@
 	'inodes' => "df -Pi",
 	'format' => "linuxish",
     },
+    'cygwin' => {
+	'blocks' => "df -P",
+	'inodes' => "df -Pi",
+	'format' => "linuxish",
+    },
     'solaris' =>  {
 	'blocks' => "df -k",
 	'inodes' => "df -k -o i -F ufs",
Index: lib/MTT/Common/GNU_Install.pm
===================================================================
--- lib/MTT/Common/GNU_Install.pm	(revision 1271)
+++ lib/MTT/Common/GNU_Install.pm	(working copy)
@@ -44,6 +44,51 @@
     $ret->{test_result} = MTT::Values::FAIL;
     $ret->{exit_status} = 0;
 
+    if (`uname -o` == "Cygwin" && $config->{compiler_name} == "microsoft") {
+        # On windows, do the following steps:
+        #   [ ] cmake -G "generator" -D configure_arguments source_path
+        #   [ ] devenv OpenMPI.sln /build
+
+        # prepare the windows style prefix.
+        # replace '/cygdrive/x/' with 'x:/'
+        my $win_prefix = substr ($config->{installdir},10,1) . ":" . substr ($config->{installdir},11);
+
+        # generate Visual Studio solution files
+        # use 'script' to redirect MS command output
+        $x = _do_step($config,
+                      "script -a -c \"cmake $config->{configure_arguments} -D CMAKE_INSTALL_PREFIX:PATH=$win_prefix .\" -f temp.txt", 
+                      $config->{merge_stdout_stderr});
+
+        # Overlapping keys in $x override $ret
+        %$ret = (%$ret, %$x);
+        return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
+
+        if (exists($ENV{LD_LIBRARY_PATH})) {
+            $ENV{LD_LIBRARY_PATH} = "$config->{libdir}:$ENV{LD_LIBRARY_PATH}";
+        } else {
+            $ENV{LD_LIBRARY_PATH} = "$config->{libdir}";
+        }
+
+        # compile the whole solution
+        $x = _do_step($config, "script -a -c \"devenv.com *.sln /build debug\" -f temp.txt",
+                      $config->{merge_stdout_stderr});
+        %$ret = (%$ret, %$x);
+        return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
+
+        # install to the prefix dir
+        $x = _do_step($config, "script -a -c \"devenv.com *.sln /project INSTALL.vcproj /build\" -f temp.txt",
+                      $config->{merge_stdout_stderr});
+        %$ret = (%$ret, %$x);
+        return $ret if (!MTT::DoCommand::wsuccess($ret->{exit_status}));
+
+        # All done!
+        $ret->{test_result} = MTT::Values::PASS;
+        $ret->{result_message} = "Success";
+        Debug("Build was a success\n");
+
+        return $ret;
+    }
+
     # If the user does not use --prefix on their own, default
     # to $installdir
     my $prefix;
Index: lib/MTT/Defaults.pm
===================================================================
--- lib/MTT/Defaults.pm	(revision 1271)
+++ lib/MTT/Defaults.pm	(working copy)
@@ -39,7 +39,7 @@
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
@@ -76,6 +76,7 @@
     my $gnu = {
         configdir => $config->{configdir},
         configure_arguments => $config->{configure_arguments},
+        compiler_name => $config->{compiler_name},
         vpath => "no",
         installdir => $config->{installdir},
         bindir => $config->{bindir},