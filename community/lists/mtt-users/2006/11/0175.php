<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 15:41:39 2006" -->
<!-- isoreceived="20061102204139" -->
<!-- sent="Thu, 2 Nov 2006 15:41:16 -0500" -->
<!-- isosent="20061102204116" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="453EB1D1-F912-4C0F-8806-FF5E84A27523_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061102195609.GC62123_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-11-02 15:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0176.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't thought about this too deeply recently, but I have a dim  
<br>
recollection that an approach like this will break places (e.g.,  
<br>
nested funclets?).  I spent a lot of time thinking about this when  
<br>
writing the MPI Details section in the current .ini file template,  
<br>
but I unfortunately don't remember all the details...
<br>
<p>Look at the quoting in the MPI Details section for an example.
<br>
<p><p><p>On Nov 2, 2006, at 2:56 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Not sure if this is the best tack, but the below patch seems
</span><br>
<span class="quotelev1">&gt; to do the trick. What was happening was eval would barf when
</span><br>
<span class="quotelev1">&gt; it got the unquoted /foo/bar. Wrap the string in &quot;&quot;'s and
</span><br>
<span class="quotelev1">&gt; the error goes away. This snippet illustrates the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ perl -e 'eval &quot;\&quot;/foo/bar\&quot;&quot;;'
</span><br>
<span class="quotelev1">&gt; $ perl -e 'eval &quot;/foo/bar&quot;;'
</span><br>
<span class="quotelev1">&gt; Bareword found where operator expected at (eval 1) line 1,
</span><br>
<span class="quotelev1">&gt; near &quot;/foo/bar&quot;
</span><br>
<span class="quotelev1">&gt;         (Missing operator before bar?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: /workspace/em162155/hpc/mtt/schema2/trunk/lib/MTT/Values.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- /workspace/em162155/hpc/mtt/schema2/trunk/lib/MTT/Values.pm	 
</span><br>
<span class="quotelev1">&gt; (revision 410)
</span><br>
<span class="quotelev1">&gt; +++ /workspace/em162155/hpc/mtt/schema2/trunk/lib/MTT/Values.pm	 
</span><br>
<span class="quotelev1">&gt; (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -46,7 +46,7 @@
</span><br>
<span class="quotelev1">&gt;          # If we get a string back, just handle it.
</span><br>
<span class="quotelev1">&gt;          if (ref($ret) eq &quot;&quot;) {
</span><br>
<span class="quotelev1">&gt;              # Substitute in the $ret in place of the &amp;function(...)
</span><br>
<span class="quotelev1">&gt; -            $str =~ s/(\&amp;\w+\([^&amp;\(]*?\))/$ret/;
</span><br>
<span class="quotelev1">&gt; +            $str =~ s/(\&amp;\w+\([^&amp;\(]*?\))/&quot;$ret&quot;/;
</span><br>
<span class="quotelev1">&gt;              Debug(&quot;String now: $str\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              # Now loop around and see if there are any more
</span><br>
<span class="quotelev1">&gt; @@ -92,7 +92,14 @@
</span><br>
<span class="quotelev1">&gt;          return \@ret;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#    Debug(&quot;No more functions left; final: $str\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;No more functions left; final: $str\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    return trim_quotes($str);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Trim leading/trailing quotes
</span><br>
<span class="quotelev1">&gt; +sub trim_quotes {
</span><br>
<span class="quotelev1">&gt; +    my ($str) = @_;
</span><br>
<span class="quotelev1">&gt; +    $str =~ s/^\&quot;+|\&quot;+$//g;
</span><br>
<span class="quotelev1">&gt;      return $str;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov/02/2006 02:18:06PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I need to compile a testsuite like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;,  
</span><br>
<span class="quotelev2">&gt;&gt; &amp;test_prefix(), &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But MTT errors out with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Building Shell
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_prefix(),  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; Got name: test_prefix
</span><br>
<span class="quotelev2">&gt;&gt; Got args:
</span><br>
<span class="quotelev2">&gt;&gt; _do: $ret = MTT::Values::Functions::test_prefix()
</span><br>
<span class="quotelev2">&gt;&gt; &amp;test_prefix returning: my_mpi/install/dir
</span><br>
<span class="quotelev2">&gt;&gt; String now: &amp;join(&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir,  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; Got name: join
</span><br>
<span class="quotelev2">&gt;&gt; Got args: &quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;
</span><br>
<span class="quotelev2">&gt;&gt; _do: $ret = MTT::Values::Functions::join(&quot;configure --with-lib- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; Bareword found where operator expected at (eval 33) line 1, near &quot;/ 
</span><br>
<span class="quotelev2">&gt;&gt; opt/mtt&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         (Missing operator before tt?)
</span><br>
<span class="quotelev2">&gt;&gt; Bareword found where operator expected at (eval 33) line 1, near  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1.3a1r12364&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         (Missing operator before a1r12364?)
</span><br>
<span class="quotelev2">&gt;&gt; *** ERROR: Module aborted: MTT::Test::Build::Shell:Build: ***  
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: Could not evaluate: $ret = MTT::Values::Functions::join 
</span><br>
<span class="quotelev2">&gt;&gt; (&quot;configure --with-lib-mpi=&quot;, my_mpi/install/dir, &quot;gmake&quot;): syntax  
</span><br>
<span class="quotelev2">&gt;&gt; error at (eval 33) line 1, near &quot;/opt/mtt&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like EvaluateString does not like the slashes,
</span><br>
<span class="quotelev2">&gt;&gt; because something silly like this doesn't give me the syntax
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; shell_build_command = &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;test_np 
</span><br>
<span class="quotelev2">&gt;&gt; (), &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note: Below is a patch to give Build.pm visibility of
</span><br>
<span class="quotelev2">&gt;&gt; test_prefix(), though this will also produce the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &amp;join(&quot;configure --with-lib-mpi=&quot;, &amp;shell(&quot;pwd&quot;), &quot;gmake&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: MTT/Test/Build.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- MTT/Test/Build.pm	(revision 410)
</span><br>
<span class="quotelev2">&gt;&gt; +++ MTT/Test/Build.pm	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -251,6 +251,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    # Some test suites require knowledge of where
</span><br>
<span class="quotelev2">&gt;&gt; +    # the MPI library is at the build stage
</span><br>
<span class="quotelev2">&gt;&gt; +    $MTT::Test::Run::test_prefix = $mpi_install-&gt;{installdir};
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      # Process setenv, unsetenv, prepend-path, and append-path -- for
</span><br>
<span class="quotelev2">&gt;&gt;      # both the MPI that we're building with and the section of  
</span><br>
<span class="quotelev2">&gt;&gt; the ini
</span><br>
<span class="quotelev2">&gt;&gt;      # file that we're building.
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
<li><strong>Next message:</strong> <a href="0176.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0174.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
