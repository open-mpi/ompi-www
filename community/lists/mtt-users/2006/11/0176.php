<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 15:52:42 2006" -->
<!-- isoreceived="20061102205242" -->
<!-- sent="Thu, 2 Nov 2006 15:24:48 -0500" -->
<!-- isosent="20061102202448" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="101965B7-2515-4E27-822A-BF0F9C6F8A54_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 15:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0175.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Ethan Mallove: "[MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 2, 2006, at 2:18 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I need to compile a testsuite like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;,  
</span><br>
<span class="quotelev1">&gt; &amp;test_prefix(), &quot;gmake&quot;)
</span><br>
<p>I don't quite understand what the resulting command is supposed to do...
<br>
<p>configure --with-lib-mpi=/foo/bar/baz gmake
<br>
<p>?
<br>
<p>But if you really want that, can't you use:
<br>
<p>shell_build_command = &quot;configure --with-lib-mpi=&amp;test_prefix() gmake&quot;
<br>
<p><p><p><span class="quotelev1">&gt; But MTT errors out with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_prefix(),  
</span><br>
<span class="quotelev1">&gt; &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: test_prefix
</span><br>
<span class="quotelev1">&gt; Got args:
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::test_prefix()
</span><br>
<span class="quotelev1">&gt; &amp;test_prefix returning: my_mpi/install/dir
</span><br>
<span class="quotelev1">&gt; String now: &amp;join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir,  
</span><br>
<span class="quotelev1">&gt; &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: join
</span><br>
<span class="quotelev1">&gt; Got args: &quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::join(&quot;configure --with-lib- 
</span><br>
<span class="quotelev1">&gt; mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; Bareword found where operator expected at (eval 33) line 1, near &quot;/ 
</span><br>
<span class="quotelev1">&gt; opt/mtt&quot;
</span><br>
<span class="quotelev1">&gt;         (Missing operator before tt?)
</span><br>
<span class="quotelev1">&gt; Bareword found where operator expected at (eval 33) line 1, near  
</span><br>
<span class="quotelev1">&gt; &quot;1.3a1r12364&quot;
</span><br>
<span class="quotelev1">&gt;         (Missing operator before a1r12364?)
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted: MTT::Test::Build::Shell:Build: ***  
</span><br>
<span class="quotelev1">&gt; ERROR: Could not evaluate: $ret = MTT::Values::Functions::join 
</span><br>
<span class="quotelev1">&gt; (&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;): syntax  
</span><br>
<span class="quotelev1">&gt; error at (eval 33) line 1, near &quot;/opt/mtt&quot;
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
<span class="quotelev1">&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_np 
</span><br>
<span class="quotelev1">&gt; (), &quot;gmake&quot;)
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
<span class="quotelev1">&gt;      # both the MPI that we're building with and the section of the  
</span><br>
<span class="quotelev1">&gt; ini
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0175.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Ethan Mallove: "[MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
