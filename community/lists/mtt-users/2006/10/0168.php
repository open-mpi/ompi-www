<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 09:41:44 2006" -->
<!-- isoreceived="20061031144144" -->
<!-- sent="Tue, 31 Oct 2006 09:41:26 -0500" -->
<!-- isosent="20061031144126" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT svn] svn:mtt-svn r403" -->
<!-- id="6F1F441B-DE6B-411D-BD52-9A0A797F0A23_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061031143948.GS9933_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-10-31 09:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday? (raw SQL)"</a>
<li><strong>Previous message:</strong> <a href="0167.php">Jeff Squyres: "[MTT users] BProc support?"</a>
<!-- nextthread="start" -->
<li><strong>Maybe reply:</strong> <a href="0170.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ja; $done is a little odd and probably mis-named.  It's the number of  
<br>
file descriptors still open from the child process.  When it reaches  
<br>
0, we're done.
<br>
<p>On Oct 31, 2006, at 9:39 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I've run with these changes and they seem to work (I did
</span><br>
<span class="quotelev1">&gt; need to change the INI param &quot;module&quot; to &quot;specify_module&quot;,
</span><br>
<span class="quotelev1">&gt; from the previous commit). Just one question (see below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Oct/29/2006 08:36:04AM, jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-10-29 08:35:58 EST (Sun, 29 Oct 2006)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 403
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/CHANGES
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/lib/MTT/Globals.pm
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/samples/ompi-core-template.ini
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt;  * Add textwrap to Global defaults
</span><br>
<span class="quotelev2">&gt;&gt;  * Add new global: drain_timeout
</span><br>
<span class="quotelev2">&gt;&gt;  * In DoCommand, after the timeout, we'll wait drain_timeout more
</span><br>
<span class="quotelev2">&gt;&gt;    seconds to get any final output and then unconditionally move on.
</span><br>
<span class="quotelev2">&gt;&gt;  * Add some Verbose statements to catch when kill() does not seem to
</span><br>
<span class="quotelev2">&gt;&gt;    be working.  Have not nailed this down yet; want to see some  
</span><br>
<span class="quotelev2">&gt;&gt; output
</span><br>
<span class="quotelev2">&gt;&gt;    from when it occurrs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/CHANGES
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/CHANGES	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/CHANGES	2006-10-29 08:35:58 EST (Sun, 29 Oct 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1,2 +1,5 @@
</span><br>
<span class="quotelev2">&gt;&gt;  To announce to OMPI core testers:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +- added new fields to MTT section to ini file
</span><br>
<span class="quotelev2">&gt;&gt; +  - textwrap
</span><br>
<span class="quotelev2">&gt;&gt; +  - drain_timeout
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/DoCommand.pm	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/DoCommand.pm	2006-10-29 08:35:58 EST (Sun, 29  
</span><br>
<span class="quotelev2">&gt;&gt; Oct 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -32,6 +32,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      if ($kid != 0) {
</span><br>
<span class="quotelev2">&gt;&gt;          return $?;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; +    Verbose(&quot;** Kill TERM didn't work!\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # Nope, that didn't work.  Sleep a few seconds and try again.
</span><br>
<span class="quotelev2">&gt;&gt;      sleep(2);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -39,6 +40,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      if ($kid != 0) {
</span><br>
<span class="quotelev2">&gt;&gt;          return $?;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; +    Verbose(&quot;** Kill TERM (more waiting) didn't work!\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # That didn't work either.  Try SIGINT;
</span><br>
<span class="quotelev2">&gt;&gt;      kill(&quot;INT&quot;, $pid);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -46,6 +48,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      if ($kid != 0) {
</span><br>
<span class="quotelev2">&gt;&gt;          return $?;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; +    Verbose(&quot;** Kill INT didn't work!\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # Nope, that didn't work.  Sleep a few seconds and try again.
</span><br>
<span class="quotelev2">&gt;&gt;      sleep(2);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -53,6 +56,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      if ($kid != 0) {
</span><br>
<span class="quotelev2">&gt;&gt;          return $?;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; +    Verbose(&quot;** Kill INT (more waiting) didn't work!\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # Ok, now we're mad.  Be violent.
</span><br>
<span class="quotelev2">&gt;&gt;      while (1) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -61,13 +65,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;          if ($kid != 0) {
</span><br>
<span class="quotelev2">&gt;&gt;              return $?;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt; -        sleep(1);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        kill(&quot;KILL&quot;, $pid);
</span><br>
<span class="quotelev2">&gt;&gt; -        $kid = waitpid($pid, WNOHANG);
</span><br>
<span class="quotelev2">&gt;&gt; -        if ($kid != 0) {
</span><br>
<span class="quotelev2">&gt;&gt; -            return $?;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; +        Verbose(&quot;** Kill KILL didn't work!\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          sleep(1);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -278,7 +276,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;          if (defined($end_time) &amp;&amp; time() &gt; $end_time) {
</span><br>
<span class="quotelev2">&gt;&gt;              my $over = time() - $end_time;
</span><br>
<span class="quotelev2">&gt;&gt;              if ($over &gt; $last_over) {
</span><br>
<span class="quotelev2">&gt;&gt; -                Debug(&quot;*** Past timeout by $over seconds\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                Verbose(&quot;*** Past timeout by $over seconds\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                  my $st = _kill_proc($pid);
</span><br>
<span class="quotelev2">&gt;&gt;                  if (!defined($killed_status)) {
</span><br>
<span class="quotelev2">&gt;&gt;                      $killed_status = $st;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -286,6 +284,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;                  $ret-&gt;{timed_out} = 1;
</span><br>
<span class="quotelev2">&gt;&gt;              }
</span><br>
<span class="quotelev2">&gt;&gt;              $last_over = $over;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            # See if we've over the drain_timeout
</span><br>
<span class="quotelev2">&gt;&gt; +            if ($over &gt; $MTT::Globals::Values-&gt;{drain_timeout}) {
</span><br>
<span class="quotelev2">&gt;&gt; +                Verbose(&quot;*** Past drain timeout; quitting\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                $done = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would have thought if we're &quot;quitting&quot; here, then $done =
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;      close OUTerr;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/Globals.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/Globals.pm	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/Globals.pm	2006-10-29 08:35:58 EST (Sun, 29 Oct  
</span><br>
<span class="quotelev2">&gt;&gt; 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,6 +26,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;      hostfile =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;      hostlist =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;      max_np =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt; +    textwrap =&gt; 76,
</span><br>
<span class="quotelev2">&gt;&gt; +    drain_timeout =&gt; 5,
</span><br>
<span class="quotelev2">&gt;&gt;  };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # Reset $Globals per a specific ini file
</span><br>
<span class="quotelev2">&gt;&gt; @@ -68,6 +70,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;      if ($val) {
</span><br>
<span class="quotelev2">&gt;&gt;          $Values-&gt;{textwrap} = $val;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Output display preference
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    my $val = MTT::Values::Value($ini, &quot;MTT&quot;, &quot;drain_timeout&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +    if ($val) {
</span><br>
<span class="quotelev2">&gt;&gt; +        $Values-&gt;{drain_timeout} = $val;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/samples/ompi-core-template.ini
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/samples/ompi-core-template.ini	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/samples/ompi-core-template.ini	2006-10-29 08:35:58 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Sun, 29 Oct 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -91,9 +91,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;  # returned by &amp;env_max_procs(), you can fill in an integer here.
</span><br>
<span class="quotelev2">&gt;&gt;  max_np =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -# Output display preference
</span><br>
<span class="quotelev2">&gt;&gt; +# OMPI Core: Output display preference; the default width at  
</span><br>
<span class="quotelev2">&gt;&gt; which MTT
</span><br>
<span class="quotelev2">&gt;&gt; +# output will wrap.
</span><br>
<span class="quotelev2">&gt;&gt;  textwrap = 76
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +# OMPI Core: After the timeout for a command has passed, wait this
</span><br>
<span class="quotelev2">&gt;&gt; +# many additional seconds to drain all output, and then kill it with
</span><br>
<span class="quotelev2">&gt;&gt; +# extreme prejiduce.
</span><br>
<span class="quotelev2">&gt;&gt; +drain_timeout = 5
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ==
</span><br>
<span class="quotelev2">&gt;&gt;  # MPI get phase
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ==
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
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
<li><strong>Next message:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday? (raw SQL)"</a>
<li><strong>Previous message:</strong> <a href="0167.php">Jeff Squyres: "[MTT users] BProc support?"</a>
<!-- nextthread="start" -->
<li><strong>Maybe reply:</strong> <a href="0170.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
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
