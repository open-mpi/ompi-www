<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 08:24:21 2009" -->
<!-- isoreceived="20090311122421" -->
<!-- sent="Wed, 11 Mar 2009 08:24:14 -0400" -->
<!-- isosent="20090311122414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="16574546-36C6-4788-AA7F-882D915D3E90_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B7A168.2050609_at_hlrs.de" -->
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
<strong>Date:</strong> 2009-03-11 08:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0327.php">Mike Dubman: "Re: [MTT devel] GSOC apps now open"</a>
<li><strong>Previous message:</strong> <a href="0325.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0324.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2009, at 7:32 AM, Shiqing Fan wrote:
<br>
<p><span class="quotelev1">&gt; That's an old patch, Here attatched is the new one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah, excellent.
<br>
<p><span class="quotelev2">&gt; &gt; Can we think of a better test here?  Will we always be running MTT
</span><br>
<span class="quotelev2">&gt; &gt; under Cygwin?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On windows, there isn't any choice to run MTT in a linux-shell,  
</span><br>
<span class="quotelev1">&gt; another
</span><br>
<span class="quotelev1">&gt; option is MinGW, but I didn't try it. Personally, I think Cygwin is  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; best choice, because it provides full Linux-like environment. Note  
</span><br>
<span class="quotelev1">&gt; that,
</span><br>
<span class="quotelev1">&gt; we use quite a lot Linux shell command in MTT, like df, uname, and  
</span><br>
<span class="quotelev1">&gt; so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we can test like:
</span><br>
<span class="quotelev1">&gt;     if (`uname -o` == &quot;Cygwin&quot; ||
</span><br>
<span class="quotelev1">&gt;         `uname -o` == &quot;MinGW&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt;         $config-&gt;{compiler_name} == &quot;microsoft&quot;) {
</span><br>
<span class="quotelev1">&gt;         .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good point.  I see that your new patch doesn't test for MinGW --  
<br>
should it?
<br>
<p><span class="quotelev1">&gt; Index: lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/Filesys/DiskFree.pm	(revision 1271)
</span><br>
<span class="quotelev1">&gt; +++ lib/Filesys/DiskFree.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -29,6 +29,11 @@
</span><br>
<span class="quotelev1">&gt; 	'inodes' =&gt; &quot;df -Pi&quot;,
</span><br>
<span class="quotelev1">&gt; 	'format' =&gt; &quot;linuxish&quot;,
</span><br>
<span class="quotelev1">&gt;     },
</span><br>
<span class="quotelev1">&gt; +    'cygwin' =&gt; {
</span><br>
<span class="quotelev1">&gt; +	'blocks' =&gt; &quot;df -P&quot;,
</span><br>
<span class="quotelev1">&gt; +	'inodes' =&gt; &quot;df -Pi&quot;,
</span><br>
<span class="quotelev1">&gt; +	'format' =&gt; &quot;linuxish&quot;,
</span><br>
<span class="quotelev1">&gt; +    },
</span><br>
<span class="quotelev1">&gt;     'solaris' =&gt;  {
</span><br>
<span class="quotelev1">&gt; 	'blocks' =&gt; &quot;df -k&quot;,
</span><br>
<span class="quotelev1">&gt; 	'inodes' =&gt; &quot;df -k -o i -F ufs&quot;,
</span><br>
<p>Do you need MinGW in this patch? ^^^
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/Common/GNU_Install.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Common/GNU_Install.pm	(revision 1271)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Common/GNU_Install.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -44,6 +44,51 @@
</span><br>
<span class="quotelev1">&gt;     $ret-&gt;{test_result} = MTT::Values::FAIL;
</span><br>
<span class="quotelev1">&gt;     $ret-&gt;{exit_status} = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    if (`uname -o` == &quot;Cygwin&quot; &amp;&amp; $config-&gt;{compiler_name} ==  
</span><br>
<span class="quotelev1">&gt; &quot;microsoft&quot;) {
</span><br>
<p>Per above, do we need MinGW in this test? ^^
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        # On windows, do the following steps:
</span><br>
<span class="quotelev1">&gt; +        #   [ ] cmake -G &quot;generator&quot; -D configure_arguments  
</span><br>
<span class="quotelev1">&gt; source_path
</span><br>
<span class="quotelev1">&gt; +        #   [ ] devenv OpenMPI.sln /build
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # prepare the windows style prefix.
</span><br>
<span class="quotelev1">&gt; +        # replace '/cygdrive/x/' with 'x:/'
</span><br>
<span class="quotelev1">&gt; +        my $win_prefix = substr ($config-&gt;{installdir},10,1) .  
</span><br>
<span class="quotelev1">&gt; &quot;:&quot; . substr ($config-&gt;{installdir},11);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # generate Visual Studio solution files
</span><br>
<span class="quotelev1">&gt; +        # use 'script' to redirect MS command output
</span><br>
<span class="quotelev1">&gt; +        $x = _do_step($config,
</span><br>
<span class="quotelev1">&gt; +                      &quot;script -a -c \&quot;cmake $config- 
</span><br>
<span class="quotelev2">&gt; &gt;{configure_arguments} -D CMAKE_INSTALL_PREFIX:PATH=$win_prefix .\&quot; - 
</span><br>
<span class="quotelev1">&gt; f temp.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                      $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # Overlapping keys in $x override $ret
</span><br>
<span class="quotelev1">&gt; +        %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +        return $ret if (!MTT::DoCommand::wsuccess($ret- 
</span><br>
<span class="quotelev2">&gt; &gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if (exists($ENV{LD_LIBRARY_PATH})) {
</span><br>
<span class="quotelev1">&gt; +            $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}: 
</span><br>
<span class="quotelev1">&gt; $ENV{LD_LIBRARY_PATH}&quot;;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            $ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}&quot;;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<p><span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # compile the whole solution
</span><br>
<span class="quotelev1">&gt; +        $x = _do_step($config, &quot;script -a -c \&quot;devenv.com *.sln / 
</span><br>
<span class="quotelev1">&gt; build debug\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                      $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev1">&gt; +        %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +        return $ret if (!MTT::DoCommand::wsuccess($ret- 
</span><br>
<span class="quotelev2">&gt; &gt;{exit_status}));
</span><br>
<p>I missed this the first time -- don't you need to restore %ENV here?
<br>
<p><span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # install to the prefix dir
</span><br>
<span class="quotelev1">&gt; +        $x = _do_step($config, &quot;script -a -c \&quot;devenv.com *.sln / 
</span><br>
<span class="quotelev1">&gt; project INSTALL.vcproj /build\&quot; -f temp.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                      $config-&gt;{merge_stdout_stderr});
</span><br>
<span class="quotelev1">&gt; +        %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +        return $ret if (!MTT::DoCommand::wsuccess($ret- 
</span><br>
<span class="quotelev2">&gt; &gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # All done!
</span><br>
<span class="quotelev1">&gt; +        $ret-&gt;{test_result} = MTT::Values::PASS;
</span><br>
<span class="quotelev1">&gt; +        $ret-&gt;{result_message} = &quot;Success&quot;;
</span><br>
<span class="quotelev1">&gt; +        Debug(&quot;Build was a success\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        return $ret;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<p>I think I would be more comfortable separating this stuff into a  
<br>
Cmake.pm or somesuch.  After all, it's *not* a configure/make (i.e.,  
<br>
GNU tools) build.  I think the default should call the GNU install  
<br>
process, but if you set ompi_cmake = 1 (or somesuch), then call your  
<br>
module/routine instead of the GNU one.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $install;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($config-&gt;{ompi_cmake}) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$install = MTT::Common::Cmake::Install($gnu);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$install = MTT::Common::GNU_Install::Install($gnu);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Just curious -- does the OMPI cmake system also work on Linux?  I ask  
<br>
because your cmake process is fairly win-specific.  If it's *only*  
<br>
intended to work on windoze, perhaps we should add some if tests to it  
<br>
that warn/error if you're *not* running on cygwin/mingw (this is only  
<br>
relevant if/when the cmake stuff moves to its own .pm file).
<br>
<p>Make sense?
<br>
<p><span class="quotelev1">&gt;     # If the user does not use --prefix on their own, default
</span><br>
<span class="quotelev1">&gt;     # to $installdir
</span><br>
<span class="quotelev1">&gt;     my $prefix;
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/Defaults.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Defaults.pm	(revision 1271)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Defaults.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -39,7 +39,7 @@
</span><br>
<span class="quotelev1">&gt;     },
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     known_compiler_names =&gt; [ &quot;gnu&quot;, &quot;pgi&quot;, &quot;ibm&quot;, &quot;intel&quot;, &quot;kai&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;absoft&quot;,
</span><br>
<span class="quotelev1">&gt; -                              &quot;pathscale&quot;, &quot;sun&quot;, &quot;none&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;unknown&quot; ],
</span><br>
<span class="quotelev1">&gt; +                              &quot;pathscale&quot;, &quot;sun&quot;, &quot;microsoft&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;none&quot;, &quot;unknown&quot; ],
</span><br>
<span class="quotelev1">&gt;     known_resource_manager_names =&gt; [ &quot;slurm&quot;, &quot;tm&quot;, &quot;loadleveler&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;n1ge&quot;,
</span><br>
<span class="quotelev1">&gt;                                       &quot;alps&quot;, &quot;none&quot;, &quot;unknown&quot; ],
</span><br>
<span class="quotelev1">&gt;     known_network_names =&gt; [ &quot;tcp&quot;, &quot;udp&quot;, &quot;ethernet&quot;, &quot;gm&quot;, &quot;mx&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;verbs&quot;,
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/MPI/Install/OMPI.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/MPI/Install/OMPI.pm	(revision 1271)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/MPI/Install/OMPI.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -76,6 +76,7 @@
</span><br>
<span class="quotelev1">&gt;     my $gnu = {
</span><br>
<span class="quotelev1">&gt;         configdir =&gt; $config-&gt;{configdir},
</span><br>
<span class="quotelev1">&gt;         configure_arguments =&gt; $config-&gt;{configure_arguments},
</span><br>
<span class="quotelev1">&gt; +        compiler_name =&gt; $config-&gt;{compiler_name},
</span><br>
<span class="quotelev1">&gt;         vpath =&gt; &quot;no&quot;,
</span><br>
<span class="quotelev1">&gt;         installdir =&gt; $config-&gt;{installdir},
</span><br>
<span class="quotelev1">&gt;         bindir =&gt; $config-&gt;{bindir},
</span><br>
<span class="quotelev1">&gt; &lt;ATT4352636.txt&gt;
</span><br>
<p>All this looks good. ^^
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
<li><strong>Next message:</strong> <a href="0327.php">Mike Dubman: "Re: [MTT devel] GSOC apps now open"</a>
<li><strong>Previous message:</strong> <a href="0325.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0324.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
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
