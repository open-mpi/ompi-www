<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 17:52:06 2006" -->
<!-- isoreceived="20061102225206" -->
<!-- sent="Thu, 2 Nov 2006 17:47:14 -0500" -->
<!-- isosent="20061102224714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="3DF81A70-CE57-4962-9910-9A0353BD4606_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061102223659.GA59192_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-11-02 17:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0179.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0179.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't tell from the output -- it looks wrapped.
<br>
<p>Did a \n get insertted in there somewhere?
<br>
<p>More specifically, I don't see how the command is supposed to execute:
<br>
<p>configure --with-lib-mpi=blah gmake
<br>
<p>What exactly is that command supposed to do?  Don't you really want:
<br>
<p>./configure --with-lib-mpi=blah; gmake
<br>
<p>?
<br>
<p><p>On Nov 2, 2006, at 5:36 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Nov/02/2006 03:24:48PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 2, 2006, at 2:18 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to compile a testsuite like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;test_prefix(), &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't quite understand what the resulting command is supposed to  
</span><br>
<span class="quotelev2">&gt;&gt; do...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure --with-lib-mpi=/foo/bar/baz gmake
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But if you really want that, can't you use:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; shell_build_command = &quot;configure --with-lib-mpi=&amp;test_prefix() gmake&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That doesn't work for me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: &quot;configure --with-mpi-dir=&amp;test_prefix() gmake&quot;
</span><br>
<span class="quotelev1">&gt; Got name: test_prefix
</span><br>
<span class="quotelev1">&gt; Got args:
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::test_prefix()
</span><br>
<span class="quotelev1">&gt; &amp;test_prefix returning:
</span><br>
<span class="quotelev1">&gt; my_mpi/install/dir
</span><br>
<span class="quotelev1">&gt; String now: &quot;configure
</span><br>
<span class="quotelev1">&gt; --with-mpi-dir=my_mpi/install/dir
</span><br>
<span class="quotelev1">&gt; gmake&quot;
</span><br>
<span class="quotelev1">&gt; No more functions left; final: &quot;configure
</span><br>
<span class="quotelev1">&gt; --with-mpi-dir=my_mpi/install/dir
</span><br>
<span class="quotelev1">&gt; gmake&quot;
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/gaWTMDvUvr
</span><br>
<span class="quotelev1">&gt; OUT:configure: WARNING: you should use --build, --host,
</span><br>
<span class="quotelev1">&gt; --target
</span><br>
<span class="quotelev1">&gt; OUT:checking build system type... Invalid configuration
</span><br>
<span class="quotelev1">&gt; `gmake': machine `gmake' not recognized
</span><br>
<span class="quotelev1">&gt; OUT:configure: error: /bin/bash ./config.sub gmake failed
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 1
</span><br>
<span class="quotelev1">&gt; Writing built file:
</span><br>
<span class="quotelev1">&gt; /opt/mtt/netpipe/i386/32/trunk/installs/ompi-nightly-trunk/ 
</span><br>
<span class="quotelev1">&gt; solaris_i386_32/1.3a1r12364/tests/imb_performance/PMB-2.2/ 
</span><br>
<span class="quotelev1">&gt; test_built.ini
</span><br>
<span class="quotelev1">&gt; *** WARNING: Failed to build test [test build: imb
</span><br>
<span class="quotelev1">&gt; performance]: Shell: command failed &quot;configure
</span><br>
<span class="quotelev1">&gt; --with-mpi-dir=my_mpi/install/dir
</span><br>
<span class="quotelev1">&gt; gmake&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But MTT errors out with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Building Shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evaluating: &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_prefix(),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;gmake&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Got name: test_prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Got args:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _do: $ret = MTT::Values::Functions::test_prefix()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;test_prefix returning: my_mpi/install/dir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; String now: &amp;join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;gmake&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Got name: join
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Got args: &quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _do: $ret = MTT::Values::Functions::join(&quot;configure --with-lib-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bareword found where operator expected at (eval 33) line 1, near &quot;/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opt/mtt&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         (Missing operator before tt?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bareword found where operator expected at (eval 33) line 1, near
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;1.3a1r12364&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         (Missing operator before a1r12364?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** ERROR: Module aborted: MTT::Test::Build::Shell:Build: ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR: Could not evaluate: $ret = MTT::Values::Functions::join
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;): syntax
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error at (eval 33) line 1, near &quot;/opt/mtt&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like EvaluateString does not like the slashes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because something silly like this doesn't give me the syntax
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (), &quot;gmake&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note: Below is a patch to give Build.pm visibility of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test_prefix(), though this will also produce the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;shell(&quot;pwd&quot;), &quot;gmake&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: MTT/Test/Build.pm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- MTT/Test/Build.pm	(revision 410)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ MTT/Test/Build.pm	(working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -251,6 +251,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    # Some test suites require knowledge of where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    # the MPI library is at the build stage
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    $MTT::Test::Run::test_prefix = $mpi_install-&gt;{installdir};
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # Process setenv, unsetenv, prepend-path, and append-path --  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # both the MPI that we're building with and the section of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ini
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # file that we're building.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0179.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0177.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0179.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
