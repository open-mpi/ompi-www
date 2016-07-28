<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 07:33:04 2009" -->
<!-- isoreceived="20090311113304" -->
<!-- sent="Wed, 11 Mar 2009 12:32:56 +0100" -->
<!-- isosent="20090311113256" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="49B7A168.2050609_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3B95993E-C6C6-4260-B1B5-F91A270AC8DB_at_cisco.com" -->
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
<strong>Date:</strong> 2009-03-11 07:32:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0325.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0325.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0325.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0326.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>That's an old patch, Here attatched is the new one.
<br>
<p>I was just writing the email to be sent to MTT-devel, now I think it's 
<br>
better to put it in this thread.
<br>
<p><span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- lib/MTT/Common/GNU_Install.pm    (revision 1271)
</span><br>
<span class="quotelev2">&gt;&gt; +++ lib/MTT/Common/GNU_Install.pm    (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -43,7 +43,45 @@
</span><br>
<span class="quotelev2">&gt;&gt;     my $ret;
</span><br>
<span class="quotelev2">&gt;&gt;     $ret-&gt;{test_result} = MTT::Values::FAIL;
</span><br>
<span class="quotelev2">&gt;&gt;     $ret-&gt;{exit_status} = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (`uname -o` == &quot;Cygwin&quot;) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we think of a better test here?  Will we always be running MTT 
</span><br>
<span class="quotelev1">&gt; under Cygwin?
</span><br>
<p>On windows, there isn't any choice to run MTT in a linux-shell, another 
<br>
option is MinGW, but I didn't try it. Personally, I think Cygwin is the 
<br>
best choice, because it provides full Linux-like environment. Note that, 
<br>
we use quite a lot Linux shell command in MTT, like df, uname, and so on.
<br>
<p>So we can test like:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (`uname -o` == &quot;Cygwin&quot; ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`uname -o` == &quot;MinGW&quot; &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$config-&gt;{compiler_name} == &quot;microsoft&quot;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.....
<br>
<p>Here in the new patch, I introduce the variable compiler_name, in order 
<br>
to make it possible to use other compilers under Cygwin, e.g. gcc.
<br>
<p><span class="quotelev1">&gt; Should this code rather be in a different .pm and the user selects 
</span><br>
<span class="quotelev1">&gt; which one to use via the .ini file?
</span><br>
<p>Yes, that's also what I thought. Then we need to change a little in 
<br>
upper level, e.g. OMPI.pm, we should test the environment and compiler, 
<br>
in order to choose the right install module (Gnu_install.pm or 
<br>
Win_install.pm maybe).
<br>
<p><p><span class="quotelev2">&gt;&gt; +        if (exists($ENV{LD_LIBRARY_PATH})) {
</span><br>
<span class="quotelev2">&gt;&gt; +            $ENV{LD_LIBRARY_PATH} = 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;$config-&gt;{libdir}:$ENV{LD_LIBRARY_PATH}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +        } else {
</span><br>
<span class="quotelev2">&gt;&gt; +            $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        # compile the whole solution
</span><br>
<span class="quotelev2">&gt;&gt; +        $x = _do_step($config, &quot;devenv.com OpenMPI.sln /build 
</span><br>
<span class="quotelev2">&gt;&gt; debug&quot;, 1);
</span><br>
<span class="quotelev2">&gt;&gt; +        %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev2">&gt;&gt; +        return $ret if 
</span><br>
<span class="quotelev2">&gt;&gt; (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        # install, not working yet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does this comment mean? ^^^
</span><br>
<p>It remained unfixed in that patch. See the new one :-).
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p><p><p><p><p>
<p>
Index: lib/Filesys/DiskFree.pm
<br>
===================================================================
<br>
--- lib/Filesys/DiskFree.pm	(revision 1271)
<br>
+++ lib/Filesys/DiskFree.pm	(working copy)
<br>
@@ -29,6 +29,11 @@
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'solaris' =&gt;  {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'blocks' =&gt; &quot;df -k&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'inodes' =&gt; &quot;df -k -o i -F ufs&quot;,
<br>
Index: lib/MTT/Common/GNU_Install.pm
<br>
===================================================================
<br>
--- lib/MTT/Common/GNU_Install.pm	(revision 1271)
<br>
+++ lib/MTT/Common/GNU_Install.pm	(working copy)
<br>
@@ -44,6 +44,51 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ret-&gt;{test_result} = MTT::Values::FAIL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ret-&gt;{exit_status} = 0;
<br>
&nbsp;
<br>
+    if (`uname -o` == &quot;Cygwin&quot; &amp;&amp; $config-&gt;{compiler_name} == &quot;microsoft&quot;) {
<br>
+        # On windows, do the following steps:
<br>
+        #   [ ] cmake -G &quot;generator&quot; -D configure_arguments source_path
<br>
+        #   [ ] devenv OpenMPI.sln /build
<br>
+
<br>
+        # prepare the windows style prefix.
<br>
+        # replace '/cygdrive/x/' with 'x:/'
<br>
+        my $win_prefix = substr ($config-&gt;{installdir},10,1) . &quot;:&quot; . substr ($config-&gt;{installdir},11);
<br>
+
<br>
+        # generate Visual Studio solution files
<br>
+        # use 'script' to redirect MS command output
<br>
+        $x = _do_step($config,
<br>
+                      &quot;script -a -c \&quot;cmake $config-&gt;{configure_arguments} -D CMAKE_INSTALL_PREFIX:PATH=$win_prefix .\&quot; -f temp.txt&quot;, 
<br>
+                      $config-&gt;{merge_stdout_stderr});
<br>
+
<br>
+        # Overlapping keys in $x override $ret
<br>
+        %$ret = (%$ret, %$x);
<br>
+        return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
+
<br>
+        if (exists($ENV{LD_LIBRARY_PATH})) {
<br>
+            $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}:$ENV{LD_LIBRARY_PATH}&quot;;
<br>
+        } else {
<br>
+            $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}&quot;;
<br>
+        }
<br>
+
<br>
+        # compile the whole solution
<br>
+        $x = _do_step($config, &quot;script -a -c \&quot;devenv.com *.sln /build debug\&quot; -f temp.txt&quot;,
<br>
+                      $config-&gt;{merge_stdout_stderr});
<br>
+        %$ret = (%$ret, %$x);
<br>
+        return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
+
<br>
+        # install to the prefix dir
<br>
+        $x = _do_step($config, &quot;script -a -c \&quot;devenv.com *.sln /project INSTALL.vcproj /build\&quot; -f temp.txt&quot;,
<br>
+                      $config-&gt;{merge_stdout_stderr});
<br>
+        %$ret = (%$ret, %$x);
<br>
+        return $ret if (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
<br>
+
<br>
+        # All done!
<br>
+        $ret-&gt;{test_result} = MTT::Values::PASS;
<br>
+        $ret-&gt;{result_message} = &quot;Success&quot;;
<br>
+        Debug(&quot;Build was a success\n&quot;);
<br>
+
<br>
+        return $ret;
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# If the user does not use --prefix on their own, default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# to $installdir
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $prefix;
<br>
Index: lib/MTT/Defaults.pm
<br>
===================================================================
<br>
--- lib/MTT/Defaults.pm	(revision 1271)
<br>
+++ lib/MTT/Defaults.pm	(working copy)
<br>
@@ -39,7 +39,7 @@
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
@@ -76,6 +76,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $gnu = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configdir =&gt; $config-&gt;{configdir},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure_arguments =&gt; $config-&gt;{configure_arguments},
<br>
+        compiler_name =&gt; $config-&gt;{compiler_name},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vpath =&gt; &quot;no&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;installdir =&gt; $config-&gt;{installdir},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bindir =&gt; $config-&gt;{bindir},
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0325.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0325.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0325.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0326.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
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
