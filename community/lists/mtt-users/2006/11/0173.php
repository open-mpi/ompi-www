<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 14:18:16 2006" -->
<!-- isoreceived="20061102191816" -->
<!-- sent="Thu, 2 Nov 2006 14:18:06 -0500" -->
<!-- isosent="20061102191806" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="20061102191806.GA62123_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2006-11-02 14:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0172.php">Jeff Squyres: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0176.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I need to compile a testsuite like this:
<br>
<p>shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_prefix(), &quot;gmake&quot;)
<br>
<p>But MTT errors out with:
<br>
<p>Building Shell
<br>
Evaluating: &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_prefix(), &quot;gmake&quot;)
<br>
Got name: test_prefix
<br>
Got args:
<br>
_do: $ret = MTT::Values::Functions::test_prefix()
<br>
&amp;test_prefix returning: my_mpi/install/dir
<br>
String now: &amp;join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;)
<br>
Got name: join
<br>
Got args: &quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;
<br>
_do: $ret = MTT::Values::Functions::join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;)
<br>
Bareword found where operator expected at (eval 33) line 1, near &quot;/opt/mtt&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before tt?)
<br>
Bareword found where operator expected at (eval 33) line 1, near &quot;1.3a1r12364&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before a1r12364?)
<br>
*** ERROR: Module aborted: MTT::Test::Build::Shell:Build: *** ERROR: Could not evaluate: $ret = MTT::Values::Functions::join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;): syntax error at (eval 33) line 1, near &quot;/opt/mtt&quot;
<br>
<p>It looks like EvaluateString does not like the slashes,
<br>
because something silly like this doesn't give me the syntax
<br>
error:
<br>
<p>shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_np(), &quot;gmake&quot;)
<br>
<p>Note: Below is a patch to give Build.pm visibility of
<br>
test_prefix(), though this will also produce the error:
<br>
<p>&amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;shell(&quot;pwd&quot;), &quot;gmake&quot;)
<br>
<p>-Ethan
<br>
<p><p>Index: MTT/Test/Build.pm
<br>
===================================================================
<br>
--- MTT/Test/Build.pm	(revision 410)
<br>
+++ MTT/Test/Build.pm	(working copy)
<br>
@@ -251,6 +251,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+    # Some test suites require knowledge of where
<br>
+    # the MPI library is at the build stage
<br>
+    $MTT::Test::Run::test_prefix = $mpi_install-&gt;{installdir};
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Process setenv, unsetenv, prepend-path, and append-path -- for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# both the MPI that we're building with and the section of the ini
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# file that we're building.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0172.php">Jeff Squyres: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0176.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
