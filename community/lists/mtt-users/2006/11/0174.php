<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 14:56:17 2006" -->
<!-- isoreceived="20061102195617" -->
<!-- sent="Thu, 2 Nov 2006 14:56:09 -0500" -->
<!-- isosent="20061102195609" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="20061102195609.GC62123_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061102191806.GA62123_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 14:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0175.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0173.php">Ethan Mallove: "[MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Ethan Mallove: "[MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0175.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0175.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure if this is the best tack, but the below patch seems
<br>
to do the trick. What was happening was eval would barf when
<br>
it got the unquoted /foo/bar. Wrap the string in &quot;&quot;'s and
<br>
the error goes away. This snippet illustrates the problem:
<br>
<p>$ perl -e 'eval &quot;\&quot;/foo/bar\&quot;&quot;;'
<br>
$ perl -e 'eval &quot;/foo/bar&quot;;'
<br>
Bareword found where operator expected at (eval 1) line 1,
<br>
near &quot;/foo/bar&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before bar?)
<br>
<p><p>Index: /workspace/em162155/hpc/mtt/schema2/trunk/lib/MTT/Values.pm
<br>
===================================================================
<br>
--- /workspace/em162155/hpc/mtt/schema2/trunk/lib/MTT/Values.pm	(revision 410)
<br>
+++ /workspace/em162155/hpc/mtt/schema2/trunk/lib/MTT/Values.pm	(working copy)
<br>
@@ -46,7 +46,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# If we get a string back, just handle it.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ref($ret) eq &quot;&quot;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Substitute in the $ret in place of the &amp;function(...)
<br>
-            $str =~ s/(\&amp;\w+\([^&amp;\(]*?\))/$ret/;
<br>
+            $str =~ s/(\&amp;\w+\([^&amp;\(]*?\))/&quot;$ret&quot;/;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debug(&quot;String now: $str\n&quot;);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Now loop around and see if there are any more
<br>
@@ -92,7 +92,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \@ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-#    Debug(&quot;No more functions left; final: $str\n&quot;);
<br>
+    Debug(&quot;No more functions left; final: $str\n&quot;);
<br>
+    return trim_quotes($str);
<br>
+}
<br>
+
<br>
+# Trim leading/trailing quotes
<br>
+sub trim_quotes {
<br>
+    my ($str) = @_;
<br>
+    $str =~ s/^\&quot;+|\&quot;+$//g;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $str;
<br>
&nbsp;}
<br>
&nbsp;
<br>
-Ethan
<br>
<p><p>On Thu, Nov/02/2006 02:18:06PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; I need to compile a testsuite like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_prefix(), &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But MTT errors out with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Building Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_prefix(), &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: test_prefix
</span><br>
<span class="quotelev1">&gt; Got args:
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::test_prefix()
</span><br>
<span class="quotelev1">&gt; &amp;test_prefix returning: my_mpi/install/dir
</span><br>
<span class="quotelev1">&gt; String now: &amp;join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: join
</span><br>
<span class="quotelev1">&gt; Got args: &quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; Bareword found where operator expected at (eval 33) line 1, near &quot;/opt/mtt&quot;
</span><br>
<span class="quotelev1">&gt;         (Missing operator before tt?)
</span><br>
<span class="quotelev1">&gt; Bareword found where operator expected at (eval 33) line 1, near &quot;1.3a1r12364&quot;
</span><br>
<span class="quotelev1">&gt;         (Missing operator before a1r12364?)
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted: MTT::Test::Build::Shell:Build: *** ERROR: Could not evaluate: $ret = MTT::Values::Functions::join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;): syntax error at (eval 33) line 1, near &quot;/opt/mtt&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like EvaluateString does not like the slashes,
</span><br>
<span class="quotelev1">&gt; because something silly like this doesn't give me the syntax
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_np(), &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note: Below is a patch to give Build.pm visibility of
</span><br>
<span class="quotelev1">&gt; test_prefix(), though this will also produce the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;shell(&quot;pwd&quot;), &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: MTT/Test/Build.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- MTT/Test/Build.pm	(revision 410)
</span><br>
<span class="quotelev1">&gt; +++ MTT/Test/Build.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -251,6 +251,10 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    # Some test suites require knowledge of where
</span><br>
<span class="quotelev1">&gt; +    # the MPI library is at the build stage
</span><br>
<span class="quotelev1">&gt; +    $MTT::Test::Run::test_prefix = $mpi_install-&gt;{installdir};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      # Process setenv, unsetenv, prepend-path, and append-path -- for
</span><br>
<span class="quotelev1">&gt;      # both the MPI that we're building with and the section of the ini
</span><br>
<span class="quotelev1">&gt;      # file that we're building.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0175.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0173.php">Ethan Mallove: "[MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Ethan Mallove: "[MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0175.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0175.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
