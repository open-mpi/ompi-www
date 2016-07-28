<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 09:46:51 2006" -->
<!-- isoreceived="20061103144651" -->
<!-- sent="Fri, 3 Nov 2006 09:46:43 -0500" -->
<!-- isosent="20061103144643" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="20061103144643.GC59192_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DDF6470F-D4EC-4CC5-AAD8-ED3D08556B9C_at_cisco.com" -->
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
<strong>Date:</strong> 2006-11-03 09:46:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0182.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0180.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0180.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0182.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0182.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov/03/2006 08:03:04AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 2, 2006, at 6:11 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure --with-lib-mpi=blah; gmake
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right. I left out the ';'. It still errors out. It works
</span><br>
<span class="quotelev2">&gt; &gt; if I trim the leading/trailing quote(s).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right, sorry -- you don't need the quotes if you're not in functlet  
</span><br>
<span class="quotelev1">&gt; args.  In this case, if you add quotes around the string, those will  
</span><br>
<span class="quotelev1">&gt; be part of the field value (and in this case, since that field is  
</span><br>
<span class="quotelev1">&gt; used to provide the value that is fork/exec'ed, you'll end up trying  
</span><br>
<span class="quotelev1">&gt; to launch &quot;foo&quot; [which will fail] as opposed to foo [which would  
</span><br>
<span class="quotelev1">&gt; success]).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, I use this in my ini file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hostfile = /users/jsquyres/svn/mtt-core/&amp;shell(&quot;hostname&quot;)/hostfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So just to confirm -- this works:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; command = ./configure --with-mpi-dir=&amp;test_prefix(); gmake
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right?
</span><br>
<p>Right. I still like doing trim_quotes before returning, so
<br>
that we're more forgiving in allowing ''both'' of these:
<br>
<p>shell_build_command = configure --with-mpi-dir=&amp;test_prefix(); gmake
<br>
shell_build_command = &quot;configure --with-mpi-dir=&amp;test_prefix(); gmake&quot;
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; String now: &quot;configure --with-mpi-dir=foo/bar; gmake&quot;
</span><br>
<span class="quotelev2">&gt; &gt; No more functions left; final: &quot;configure --with-mpi-dir=foo/bar;  
</span><br>
<span class="quotelev2">&gt; &gt; gmake&quot;
</span><br>
<span class="quotelev2">&gt; &gt; Running command: /tmp/VTzq0i9cqZ
</span><br>
<span class="quotelev2">&gt; &gt; OUT:/tmp/VTzq0i9cqZ[2]: configure --with-mpi-dir=foo/bar;
</span><br>
<span class="quotelev2">&gt; &gt; gmake:  not found
</span><br>
<span class="quotelev2">&gt; &gt; Command complete, exit status: 127
</span><br>
<span class="quotelev2">&gt; &gt; Writing built file:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/mtt/netpipe/i386/32/trunk/installs/ompi-nightly-trunk/ 
</span><br>
<span class="quotelev2">&gt; &gt; solaris_i386_32/1.3a1r12364/tests/imb_performance/PMB-2.2/ 
</span><br>
<span class="quotelev2">&gt; &gt; test_built.ini
</span><br>
<span class="quotelev2">&gt; &gt; *** WARNING: Failed to build test [test build: imb
</span><br>
<span class="quotelev2">&gt; &gt; performance]: Shell: command failed &quot;&quot;configure
</span><br>
<span class="quotelev2">&gt; &gt; --with-mpi-dir=foo/bar;
</span><br>
<span class="quotelev2">&gt; &gt; gmake&quot;&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 2, 2006, at 5:36 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Thu, Nov/02/2006 03:24:48PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Nov 2, 2006, at 2:18 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I need to compile a testsuite like this:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &amp;test_prefix(), &quot;gmake&quot;)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I don't quite understand what the resulting command is supposed to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; do...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; configure --with-lib-mpi=/foo/bar/baz gmake
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; But if you really want that, can't you use:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; shell_build_command = &quot;configure --with-lib-mpi=&amp;test_prefix()  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; gmake&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; That doesn't work for me:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Building Shell
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Evaluating: &quot;configure --with-mpi-dir=&amp;test_prefix() gmake&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Got name: test_prefix
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Got args:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _do: $ret = MTT::Values::Functions::test_prefix()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &amp;test_prefix returning:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; my_mpi/install/dir
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; String now: &quot;configure
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-mpi-dir=my_mpi/install/dir
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gmake&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; No more functions left; final: &quot;configure
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-mpi-dir=my_mpi/install/dir
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gmake&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Running command: /tmp/gaWTMDvUvr
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OUT:configure: WARNING: you should use --build, --host,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --target
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OUT:checking build system type... Invalid configuration
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; `gmake': machine `gmake' not recognized
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OUT:configure: error: /bin/bash ./config.sub gmake failed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Command complete, exit status: 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Writing built file:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /opt/mtt/netpipe/i386/32/trunk/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; solaris_i386_32/1.3a1r12364/tests/imb_performance/PMB-2.2/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; test_built.ini
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *** WARNING: Failed to build test [test build: imb
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; performance]: Shell: command failed &quot;configure
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-mpi-dir=my_mpi/install/dir
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gmake&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; But MTT errors out with:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Building Shell
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Evaluating: &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_prefix(),
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Got name: test_prefix
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Got args:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _do: $ret = MTT::Values::Functions::test_prefix()
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &amp;test_prefix returning: my_mpi/install/dir
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; String now: &amp;join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Got name: join
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Got args: &quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _do: $ret = MTT::Values::Functions::join(&quot;configure --with-lib-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 33) line 1,  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; near &quot;/
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; opt/mtt&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         (Missing operator before tt?)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 33) line 1, near
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;1.3a1r12364&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         (Missing operator before a1r12364?)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *** ERROR: Module aborted: MTT::Test::Build::Shell:Build: ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ERROR: Could not evaluate: $ret = MTT::Values::Functions::join
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;): syntax
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; error at (eval 33) line 1, near &quot;/opt/mtt&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It looks like EvaluateString does not like the slashes,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; because something silly like this doesn't give me the syntax
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_np
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (), &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Note: Below is a patch to give Build.pm visibility of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; test_prefix(), though this will also produce the error:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;shell(&quot;pwd&quot;), &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Index: MTT/Test/Build.pm
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ================================================================== 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --- MTT/Test/Build.pm	(revision 410)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; +++ MTT/Test/Build.pm	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; @@ -251,6 +251,10 @@
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; +    # Some test suites require knowledge of where
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; +    # the MPI library is at the build stage
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; +    $MTT::Test::Run::test_prefix = $mpi_install-&gt;{installdir};
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      # Process setenv, unsetenv, prepend-path, and append-path --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      # both the MPI that we're building with and the section of  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ini
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      # file that we're building.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0182.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0180.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0180.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0182.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0182.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
