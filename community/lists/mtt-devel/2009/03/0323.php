<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 07:14:19 2009" -->
<!-- isoreceived="20090311111419" -->
<!-- sent="Wed, 11 Mar 2009 07:14:13 -0400" -->
<!-- isosent="20090311111413" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="3B95993E-C6C6-4260-B1B5-F91A270AC8DB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A6D7C1.7060600_at_hlrs.de" -->
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
<strong>Date:</strong> 2009-03-11 07:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0324.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0322.php">Josh Hursey: "Re: [MTT devel] GSOC apps now open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0324.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0324.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Maybe reply:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(moving to mtt-devel)
<br>
<p>Shiqing --
<br>
<p>In looking at your patch, I see a few nits.  See below.
<br>
<p><p>On Feb 26, 2009, at 12:56 PM, Shiqing Fan wrote:
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
<span class="quotelev1">&gt; Index: lib/MTT/Common/GNU_Install.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Common/GNU_Install.pm	(revision 1271)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Common/GNU_Install.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -43,7 +43,45 @@
</span><br>
<span class="quotelev1">&gt;     my $ret;
</span><br>
<span class="quotelev1">&gt;     $ret-&gt;{test_result} = MTT::Values::FAIL;
</span><br>
<span class="quotelev1">&gt;     $ret-&gt;{exit_status} = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (`uname -o` == &quot;Cygwin&quot;) {
</span><br>
<p>Can we think of a better test here?  Will we always be running MTT  
<br>
under Cygwin?
<br>
<p>Should this code rather be in a different .pm and the user selects  
<br>
which one to use via the .ini file?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        # generate Visual Studio solution files
</span><br>
<span class="quotelev1">&gt; +        $x = _do_step($config,
</span><br>
<span class="quotelev1">&gt; +                      &quot;cmake $config-&gt;{configure_arguments} -D  
</span><br>
<span class="quotelev1">&gt; CMAKE_INSTALL_PREFIX:PATH=$config-&gt;{installdir} .&quot;, 1);
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
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # compile the whole solution
</span><br>
<span class="quotelev1">&gt; +        $x = _do_step($config, &quot;devenv.com OpenMPI.sln /build  
</span><br>
<span class="quotelev1">&gt; debug&quot;, 1);
</span><br>
<span class="quotelev1">&gt; +        %$ret = (%$ret, %$x);
</span><br>
<span class="quotelev1">&gt; +        return $ret if (!MTT::DoCommand::wsuccess($ret- 
</span><br>
<span class="quotelev2">&gt; &gt;{exit_status}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # install, not working yet
</span><br>
<p>What does this comment mean? ^^^
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        $x = _do_step($config, &quot;devenv INSTALL.vcproj /build&quot;, 1);
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
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     # If the user does not use --prefix on their own, default
</span><br>
<span class="quotelev1">&gt;     # to $installdir
</span><br>
<span class="quotelev1">&gt;     my $prefix;
</span><br>
<span class="quotelev1">&gt; @@ -224,5 +262,3 @@
</span><br>
<span class="quotelev1">&gt;     my ($cmd, $step) = @_;
</span><br>
<span class="quotelev1">&gt;     return MTT::DoCommand::RunStep(1, $cmd, 30, undef, undef, $step);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -1;
</span><br>
<p>Don't remove the &quot;1;&quot; at the end of the file...
<br>
<p><span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0324.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0322.php">Josh Hursey: "Re: [MTT devel] GSOC apps now open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0324.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0324.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Maybe reply:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
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
