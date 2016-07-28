<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 14 13:04:08 2006" -->
<!-- isoreceived="20060714170408" -->
<!-- sent="Fri, 14 Jul 2006 13:04:06 -0400" -->
<!-- isosent="20060714170406" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT svn] svn:mtt r196 - in trunk: lib/MTT lib/MTT/Reporter server" -->
<!-- id="44B7CE86.9060100_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200607141547.k6EFl0x9017288_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-14 13:04:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0039.php">Ethan Mallove: "[MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Previous message:</strong> <a href="0037.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiplesteps]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the log which was not added to the repository because I accidentally
<br>
typed &quot;c&quot; at the &quot;a)bort, c)ontinue, e)dit&quot; svn commit prompt.
<br>
<p>- Show user where the perfbase HTTP POST is going in host:port/dir
<br>
&nbsp;&nbsp;format.
<br>
- env_proxy =&gt; 1 is unreliable. Look for the proxy in the user's env and
<br>
&nbsp;&nbsp;explicitly set it for the UserAgent
<br>
- Allow for sending data to perfbase _and_ output to perfbase debug
<br>
&nbsp;&nbsp;files (before it had to be one or the other). Note: to turn off
<br>
&nbsp;&nbsp;uploading test results to perfbase, set perfbase_url to an invalid
<br>
&nbsp;&nbsp;url
<br>
- Adjusted some MTT defaults
<br>
- Some typos fixed
<br>
<p>-Ethan
<br>
<p><p>em162155_at_[hidden] wrote On 07/14/06 11:47,:
<br>
<span class="quotelev1">&gt; Author: em162155
</span><br>
<span class="quotelev1">&gt; Date: 2006-07-14 11:46:44 -0400 (Fri, 14 Jul 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 196
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Defaults.pm
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Reporter/Perfbase.pm
</span><br>
<span class="quotelev1">&gt;    trunk/server/mtt_config.php.perfbase.sample
</span><br>
<span class="quotelev1">&gt;    trunk/server/perfbase.php
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Defaults.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Defaults.pm	2006-07-11 16:42:27 UTC (rev 195)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Defaults.pm	2006-07-14 15:46:44 UTC (rev 196)
</span><br>
<span class="quotelev1">&gt; @@ -25,7 +25,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      http_agents =&gt; &quot;wget lynx curl&quot;,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    known_compiler_names =&gt; &quot;gnu pgi intel kai absoft pathscale none&quot;,
</span><br>
<span class="quotelev1">&gt; +    known_compiler_names =&gt; &quot;gnu pgi intel kai absoft pathscale sun none&quot;,
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  # User-defined configuration
</span><br>
<span class="quotelev1">&gt; @@ -60,7 +60,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  # Test run phase
</span><br>
<span class="quotelev1">&gt;  our $Test_run = {
</span><br>
<span class="quotelev1">&gt; -    perfbase_xml =&gt; &quot;inp_test_run.xml&quot;,
</span><br>
<span class="quotelev1">&gt; +    perfbase_xml =&gt; &quot;inp_test_run_correctness.xml&quot;,
</span><br>
<span class="quotelev1">&gt;      argv =&gt; &quot;&quot;,
</span><br>
<span class="quotelev1">&gt;      np =&gt; 2,
</span><br>
<span class="quotelev1">&gt;      np_ok =&gt; 1,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Reporter/Perfbase.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Reporter/Perfbase.pm	2006-07-11 16:42:27 UTC (rev 195)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Reporter/Perfbase.pm	2006-07-14 15:46:44 UTC (rev 196)
</span><br>
<span class="quotelev1">&gt; @@ -3,6 +3,7 @@
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt;  #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2006      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  # 
</span><br>
<span class="quotelev1">&gt;  # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -25,6 +26,7 @@
</span><br>
<span class="quotelev1">&gt;  my $password;
</span><br>
<span class="quotelev1">&gt;  my $realm;
</span><br>
<span class="quotelev1">&gt;  my $url;
</span><br>
<span class="quotelev1">&gt; +my $port;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  # platform common name
</span><br>
<span class="quotelev1">&gt;  my $platform;
</span><br>
<span class="quotelev1">&gt; @@ -58,7 +60,7 @@
</span><br>
<span class="quotelev1">&gt;      ++$count if ($password);
</span><br>
<span class="quotelev1">&gt;      ++$count if ($realm);
</span><br>
<span class="quotelev1">&gt;      if ($count &gt; 0 &amp;&amp; $count != 3) {
</span><br>
<span class="quotelev1">&gt; -        Warning(&quot;Perfbase Reporter section [$section]: if password, username, or relam is specified, they all must be specified.\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        Warning(&quot;Perfbase Reporter section [$section]: if password, username, or realm is specified, they all must be specified.\n&quot;);
</span><br>
<span class="quotelev1">&gt;          return undef;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      $platform = Value($ini, $section, &quot;perfbase_platform&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -66,24 +68,40 @@
</span><br>
<span class="quotelev1">&gt;      # Extract the host and port from the URL.  Needed for the
</span><br>
<span class="quotelev1">&gt;      # credentials section.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    my $port;
</span><br>
<span class="quotelev1">&gt; +    my $dir;
</span><br>
<span class="quotelev1">&gt;      my $host = $url;
</span><br>
<span class="quotelev1">&gt; -    if ($host =~ /http:\/\/([-a-zA-Z0-9.]+):(\d+)/) {
</span><br>
<span class="quotelev1">&gt; +    if ($host =~ /(http:\/\/[-a-zA-Z0-9.]+):(\d+)\/(.*)$/) {
</span><br>
<span class="quotelev1">&gt;          $host = $1;
</span><br>
<span class="quotelev1">&gt;          $port = $2;
</span><br>
<span class="quotelev1">&gt; -    } elsif ($host =~ /http:\/\/([-a-zA-Z0-9.]+)/) {
</span><br>
<span class="quotelev1">&gt; +        $dir = $3;
</span><br>
<span class="quotelev1">&gt; +    } elsif ($host =~ /(http:\/\/[-a-zA-Z0-9.]+)\/(.*)$/) {
</span><br>
<span class="quotelev1">&gt;          $host = $1;
</span><br>
<span class="quotelev1">&gt; +        $dir = $2;
</span><br>
<span class="quotelev1">&gt;          $port = 80;
</span><br>
<span class="quotelev1">&gt; -    } elsif ($host =~ /https:\/\/([-a-zA-Z0-9.]+)/) {
</span><br>
<span class="quotelev1">&gt; +    } elsif ($host =~ /(https:\/\/[-a-zA-Z0-9.]+)\/(.*)$/) {
</span><br>
<span class="quotelev1">&gt;          $host = $1;
</span><br>
<span class="quotelev1">&gt; +        $dir = $2;
</span><br>
<span class="quotelev1">&gt;          $port = 443;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          return undef;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    $url = &quot;$host:$port/$dir&quot;;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    # Look for the proxy server in the environment,
</span><br>
<span class="quotelev1">&gt; +    # and take the first one we find
</span><br>
<span class="quotelev1">&gt; +    my $proxy;
</span><br>
<span class="quotelev1">&gt; +    foreach my $p (grep(/http_proxy/i, keys %ENV)) {
</span><br>
<span class="quotelev1">&gt; +        if ($ENV{$p}) {
</span><br>
<span class="quotelev1">&gt; +            $proxy = $ENV{$p};
</span><br>
<span class="quotelev1">&gt; +            $proxy = &quot;<a href="http://$proxy">http://$proxy</a>&quot; if ($proxy !~ /https?:/);
</span><br>
<span class="quotelev1">&gt; +            last;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      # Create the Perl LWP stuff to setup for HTTP PUT's later
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    $ua = LWP::UserAgent-&gt;new({ env_proxy =&gt; 1 });
</span><br>
<span class="quotelev1">&gt; +    $ua = LWP::UserAgent-&gt;new();
</span><br>
<span class="quotelev1">&gt; +    $ua-&gt;proxy(['http', 'ftp'], $proxy);
</span><br>
<span class="quotelev1">&gt;      $ua-&gt;agent(&quot;MPI Test Perfbase Reporter&quot;);
</span><br>
<span class="quotelev1">&gt;      if ($realm &amp;&amp; $username &amp;&amp; $password) {
</span><br>
<span class="quotelev1">&gt;          Verbose(&quot;   Set HTTP credentials for realm \&quot;$realm\&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -186,10 +204,10 @@
</span><br>
<span class="quotelev1">&gt;                          PBXML =&gt; $xml,
</span><br>
<span class="quotelev1">&gt;                      };
</span><br>
<span class="quotelev1">&gt;                      
</span><br>
<span class="quotelev1">&gt; -                    if (0 &amp;&amp; !$debug_filename) {
</span><br>
<span class="quotelev1">&gt; +                    if ($url) {
</span><br>
<span class="quotelev1">&gt;                          # Do the post and get the response.
</span><br>
<span class="quotelev1">&gt;                          
</span><br>
<span class="quotelev1">&gt; -                        Debug(&quot;Submitting to perbase...\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                        Debug(&quot;Submitting to perfbase...\n&quot;);
</span><br>
<span class="quotelev1">&gt;                          my $response = $ua-&gt;post($url, $form);
</span><br>
<span class="quotelev1">&gt;                          if ($response-&gt;is_success()) {
</span><br>
<span class="quotelev1">&gt;                              ++$successes;
</span><br>
<span class="quotelev1">&gt; @@ -199,7 +217,9 @@
</span><br>
<span class="quotelev1">&gt;                                      $response-&gt;status_line . &quot;\n&quot; . $response-&gt;content);
</span><br>
<span class="quotelev1">&gt;                          }
</span><br>
<span class="quotelev1">&gt;                          Debug(&quot;Perfbase submit complete\n&quot;);
</span><br>
<span class="quotelev1">&gt; -                    } else {
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                    if ($debug_filename) {
</span><br>
<span class="quotelev1">&gt;                          # Write out what we *would* have sent via HTTP to a
</span><br>
<span class="quotelev1">&gt;                          # file
</span><br>
<span class="quotelev1">&gt;                          
</span><br>
<span class="quotelev1">&gt; @@ -212,7 +232,7 @@
</span><br>
<span class="quotelev1">&gt;                          Debug(&quot;Debug perfbase file write complete\n&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                          ++$successes;
</span><br>
<span class="quotelev1">&gt; -                        push(@success_outputs, &quot;Wrote to file $f&quot;);
</span><br>
<span class="quotelev1">&gt; +                        push(@success_outputs, &quot;Wrote to file $f\n&quot;);
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt;                  } else {
</span><br>
<span class="quotelev1">&gt;                      Warning(&quot;No perfbase_xml field in the INI specification; skipping perfbase reporting!\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -223,7 +243,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if ($successes &gt; 0) {
</span><br>
<span class="quotelev1">&gt;          if ($fails == 0) {
</span><br>
<span class="quotelev1">&gt; -            Verbose(&quot;&gt;&gt; Reported $successes outputs to perfbase\n&quot;);
</span><br>
<span class="quotelev1">&gt; +            Verbose(&quot;&gt;&gt; Reported $successes output(s) to perfbase\n&quot;);
</span><br>
<span class="quotelev1">&gt;              Debug(@success_outputs);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/mtt_config.php.perfbase.sample
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/mtt_config.php.perfbase.sample	2006-07-11 16:42:27 UTC (rev 195)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/mtt_config.php.perfbase.sample	2006-07-14 15:46:44 UTC (rev 196)
</span><br>
<span class="quotelev1">&gt; @@ -9,17 +9,17 @@
</span><br>
<span class="quotelev1">&gt;  # $HEADER$
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -$local = &quot;/u/jsquyres/perfbase&quot;;
</span><br>
<span class="quotelev1">&gt; +$local = $_ENV[HOME];
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  $mtt_pb_config = array
</span><br>
<span class="quotelev1">&gt;  (
</span><br>
<span class="quotelev1">&gt;    env =&gt; array
</span><br>
<span class="quotelev1">&gt;    (
</span><br>
<span class="quotelev1">&gt; -    PATH =&gt; &quot;$local:/opt/python-2.4/bin:&quot; . $_ENV[PATH],
</span><br>
<span class="quotelev1">&gt; +    PATH =&gt; &quot;$local:/opt/python-2.4/bin:/opt/perfbase-0.9.1/bin:&quot; . $_ENV[PATH],
</span><br>
<span class="quotelev1">&gt;      PYTHONPATH =&gt; &quot;$local/lib/python2.4:$local/lib/python2.4/site-packages&quot; . (isset($_ENV[PYTHONPATH]) ? &quot;:$_ENV[PYTHONPATH]&quot; : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;      PB_DBUSER =&gt; &quot;postgres&quot;,
</span><br>
<span class="quotelev1">&gt;      PB_DBPASSWD =&gt; &quot;insert password here&quot;,
</span><br>
<span class="quotelev1">&gt;      ),
</span><br>
<span class="quotelev1">&gt; -  cwd =&gt; &quot;/tmp&quot;,
</span><br>
<span class="quotelev1">&gt; +  cwd =&gt; &quot;.&quot;,
</span><br>
<span class="quotelev1">&gt;    debug =&gt; 1,
</span><br>
<span class="quotelev1">&gt;    );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/perfbase.php
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/perfbase.php	2006-07-11 16:42:27 UTC (rev 195)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/perfbase.php	2006-07-14 15:46:44 UTC (rev 196)
</span><br>
<span class="quotelev1">&gt; @@ -156,7 +156,7 @@
</span><br>
<span class="quotelev1">&gt;  $status = proc_close($process);
</span><br>
<span class="quotelev1">&gt;  if (0 != $status) {
</span><br>
<span class="quotelev1">&gt;      mtt_error(&quot;501 Perfbase exited with error&quot;,
</span><br>
<span class="quotelev1">&gt; -              &quot;Perfbase returned with exit status $status.  Its output was:\n$output&quot;);
</span><br>
<span class="quotelev1">&gt; +              &quot;Perfbase returned with exit status $status.  Its output was:\n$output\n&quot;);
</span><br>
<span class="quotelev1">&gt;  } else {
</span><br>
<span class="quotelev1">&gt;      mtt_debug(&quot;perfbase input: succeeded\n$output\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0039.php">Ethan Mallove: "[MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Previous message:</strong> <a href="0037.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiplesteps]"</a>
<!-- nextthread="start" -->
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
