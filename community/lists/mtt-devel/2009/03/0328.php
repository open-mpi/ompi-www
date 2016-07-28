<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 11:25:38 2009" -->
<!-- isoreceived="20090311152538" -->
<!-- sent="Wed, 11 Mar 2009 11:25:32 -0400" -->
<!-- isosent="20090311152532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="F8B9CFC9-D40A-439D-A909-D54550BD4186_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B7C8E8.8030409_at_hlrs.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 11:25:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0327.php">Mike Dubman: "Re: [MTT devel] GSOC apps now open"</a>
<li><strong>Maybe in reply to:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2009, at 10:21 AM, Shiqing Fan wrote:
<br>
<p><span class="quotelev3">&gt; &gt;&gt; So we can test like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     if (`uname -o` == &quot;Cygwin&quot; ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         `uname -o` == &quot;MinGW&quot; &amp;&amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         $config-&gt;{compiler_name} == &quot;microsoft&quot;) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         .....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Good point.  I see that your new patch doesn't test for MinGW --
</span><br>
<span class="quotelev2">&gt; &gt; should it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, why not. It wasn't in my previous patch, because I didn't test  
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But now, I just have tested with MinGW bash, it looks good. The only
</span><br>
<span class="quotelev1">&gt; problem for MinGW is that the user has to compile Perl by himself,  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; is a complex and painful procedure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made another patch, including support for MinGW. Note that we have  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; test 'uname -o' for &quot;Msys&quot; rather than &quot;MinGW&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sounds good.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # compile the whole solution
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        $x = _do_step($config, &quot;script -a -c \&quot;devenv.com *.sln
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /build debug\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                      $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        return $ret if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I missed this the first time -- don't you need to restore %ENV here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure about this. From what's written in the comment, restoring
</span><br>
<span class="quotelev1">&gt; %ENV is only for a 'make check' step, but we don't have such step for
</span><br>
<span class="quotelev1">&gt; cmake. That's why I skipped it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I mention it because you're modifying LD_LIBRARY_PATH above -- so you  
<br>
should restore it when you're done.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # install to the prefix dir
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        $x = _do_step($config, &quot;script -a -c \&quot;devenv.com *.sln
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /project INSTALL.vcproj /build\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                      $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        return $ret if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (!MTT::DoCommand::wsuccess($ret-&gt;{exit_status}));
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # All done!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        $ret-&gt;{test_result} = MTT::Values::PASS;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        $ret-&gt;{result_message} = &quot;Success&quot;;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        Debug(&quot;Build was a success\n&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        return $ret;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think I would be more comfortable separating this stuff into a
</span><br>
<span class="quotelev2">&gt; &gt; Cmake.pm or somesuch.  After all, it's *not* a configure/make (i.e.,
</span><br>
<span class="quotelev2">&gt; &gt; GNU tools) build.  I think the default should call the GNU install
</span><br>
<span class="quotelev2">&gt; &gt; process, but if you set ompi_cmake = 1 (or somesuch), then call your
</span><br>
<span class="quotelev2">&gt; &gt; module/routine instead of the GNU one.  For example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     my $install;
</span><br>
<span class="quotelev2">&gt; &gt;     if ($config-&gt;{ompi_cmake}) {
</span><br>
<span class="quotelev2">&gt; &gt;         $install = MTT::Common::Cmake::Install($gnu);
</span><br>
<span class="quotelev2">&gt; &gt;     } else {
</span><br>
<span class="quotelev2">&gt; &gt;         $install = MTT::Common::GNU_Install::Install($gnu);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I totally agree here. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just curious -- does the OMPI cmake system also work on Linux?  I  
</span><br>
<span class="quotelev1">&gt; ask
</span><br>
<span class="quotelev2">&gt; &gt; because your cmake process is fairly win-specific.  If it's *only*
</span><br>
<span class="quotelev2">&gt; &gt; intended to work on windoze, perhaps we should add some if tests  
</span><br>
<span class="quotelev1">&gt; to it
</span><br>
<span class="quotelev2">&gt; &gt; that warn/error if you're *not* running on cygwin/mingw (this is  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev2">&gt; &gt; relevant if/when the cmake stuff moves to its own .pm file).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, the OMPI cmake will stop immediately if it's being used on Linux  
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; any other non-windows platforms. If you check the CMakeLists.txt in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; root of OMPI source tree, you'll see it first checks the system:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     IF(WIN32)
</span><br>
<span class="quotelev1">&gt;         CMAKE_MINIMUM_REQUIRED(VERSION 2.4.6 FATAL_ERROR)
</span><br>
<span class="quotelev1">&gt;     ELSE(WIN32)
</span><br>
<span class="quotelev1">&gt;         MESSAGE( FATAL_ERROR &quot;Only support Windows. Aborting.&quot;)
</span><br>
<span class="quotelev1">&gt;     ENDIF(WIN32)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it won't stop under Cygwin. (here &quot;WIN32&quot; also includes win64)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Gotcha.  So if our Cmake system is only targeted at windows, then I  
<br>
think OMPI.pm can make the determination automatically to call the  
<br>
GNU_Install or Cmake version.
<br>
<p>Perhaps the _do_step stuff should be factored out into a separate .pm  
<br>
so that you don't have to duplicate all that code between  
<br>
GNU_Install.pm and Cmake.pm...?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0327.php">Mike Dubman: "Re: [MTT devel] GSOC apps now open"</a>
<li><strong>Maybe in reply to:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
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
