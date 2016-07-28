<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  1 09:33:02 2006" -->
<!-- isoreceived="20061101143302" -->
<!-- sent="Tue, 31 Oct 2006 09:39:49 -0500" -->
<!-- isosent="20061031143949" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT svn] svn:mtt-svn r403" -->
<!-- id="20061031143948.GS9933_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200610291336.k9TDa45m017027_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2006-10-31 09:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0171.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday? (raw SQL)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
<!-- nextthread="start" -->
<li><strong>Reply:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've run with these changes and they seem to work (I did
<br>
need to change the INI param &quot;module&quot; to &quot;specify_module&quot;,
<br>
from the previous commit). Just one question (see below).
<br>
<p><p>On Sun, Oct/29/2006 08:36:04AM, jsquyres_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2006-10-29 08:35:58 EST (Sun, 29 Oct 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 403
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/CHANGES
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Globals.pm
</span><br>
<span class="quotelev1">&gt;    trunk/samples/ompi-core-template.ini
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt;  * Add textwrap to Global defaults
</span><br>
<span class="quotelev1">&gt;  * Add new global: drain_timeout
</span><br>
<span class="quotelev1">&gt;  * In DoCommand, after the timeout, we'll wait drain_timeout more
</span><br>
<span class="quotelev1">&gt;    seconds to get any final output and then unconditionally move on.
</span><br>
<span class="quotelev1">&gt;  * Add some Verbose statements to catch when kill() does not seem to
</span><br>
<span class="quotelev1">&gt;    be working.  Have not nailed this down yet; want to see some output
</span><br>
<span class="quotelev1">&gt;    from when it occurrs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/CHANGES
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/CHANGES	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/CHANGES	2006-10-29 08:35:58 EST (Sun, 29 Oct 2006)
</span><br>
<span class="quotelev1">&gt; @@ -1,2 +1,5 @@
</span><br>
<span class="quotelev1">&gt;  To announce to OMPI core testers:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +- added new fields to MTT section to ini file
</span><br>
<span class="quotelev1">&gt; +  - textwrap
</span><br>
<span class="quotelev1">&gt; +  - drain_timeout
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/DoCommand.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/DoCommand.pm	2006-10-29 08:35:58 EST (Sun, 29 Oct 2006)
</span><br>
<span class="quotelev1">&gt; @@ -32,6 +32,7 @@
</span><br>
<span class="quotelev1">&gt;      if ($kid != 0) {
</span><br>
<span class="quotelev1">&gt;          return $?;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    Verbose(&quot;** Kill TERM didn't work!\n&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Nope, that didn't work.  Sleep a few seconds and try again.
</span><br>
<span class="quotelev1">&gt;      sleep(2);
</span><br>
<span class="quotelev1">&gt; @@ -39,6 +40,7 @@
</span><br>
<span class="quotelev1">&gt;      if ($kid != 0) {
</span><br>
<span class="quotelev1">&gt;          return $?;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    Verbose(&quot;** Kill TERM (more waiting) didn't work!\n&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # That didn't work either.  Try SIGINT;
</span><br>
<span class="quotelev1">&gt;      kill(&quot;INT&quot;, $pid);
</span><br>
<span class="quotelev1">&gt; @@ -46,6 +48,7 @@
</span><br>
<span class="quotelev1">&gt;      if ($kid != 0) {
</span><br>
<span class="quotelev1">&gt;          return $?;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    Verbose(&quot;** Kill INT didn't work!\n&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Nope, that didn't work.  Sleep a few seconds and try again.
</span><br>
<span class="quotelev1">&gt;      sleep(2);
</span><br>
<span class="quotelev1">&gt; @@ -53,6 +56,7 @@
</span><br>
<span class="quotelev1">&gt;      if ($kid != 0) {
</span><br>
<span class="quotelev1">&gt;          return $?;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    Verbose(&quot;** Kill INT (more waiting) didn't work!\n&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Ok, now we're mad.  Be violent.
</span><br>
<span class="quotelev1">&gt;      while (1) {
</span><br>
<span class="quotelev1">&gt; @@ -61,13 +65,7 @@
</span><br>
<span class="quotelev1">&gt;          if ($kid != 0) {
</span><br>
<span class="quotelev1">&gt;              return $?;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -        sleep(1);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        kill(&quot;KILL&quot;, $pid);
</span><br>
<span class="quotelev1">&gt; -        $kid = waitpid($pid, WNOHANG);
</span><br>
<span class="quotelev1">&gt; -        if ($kid != 0) {
</span><br>
<span class="quotelev1">&gt; -            return $?;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +        Verbose(&quot;** Kill KILL didn't work!\n&quot;);
</span><br>
<span class="quotelev1">&gt;          sleep(1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -278,7 +276,7 @@
</span><br>
<span class="quotelev1">&gt;          if (defined($end_time) &amp;&amp; time() &gt; $end_time) {
</span><br>
<span class="quotelev1">&gt;              my $over = time() - $end_time;
</span><br>
<span class="quotelev1">&gt;              if ($over &gt; $last_over) {
</span><br>
<span class="quotelev1">&gt; -                Debug(&quot;*** Past timeout by $over seconds\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                Verbose(&quot;*** Past timeout by $over seconds\n&quot;);
</span><br>
<span class="quotelev1">&gt;                  my $st = _kill_proc($pid);
</span><br>
<span class="quotelev1">&gt;                  if (!defined($killed_status)) {
</span><br>
<span class="quotelev1">&gt;                      $killed_status = $st;
</span><br>
<span class="quotelev1">&gt; @@ -286,6 +284,12 @@
</span><br>
<span class="quotelev1">&gt;                  $ret-&gt;{timed_out} = 1;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              $last_over = $over;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # See if we've over the drain_timeout
</span><br>
<span class="quotelev1">&gt; +            if ($over &gt; $MTT::Globals::Values-&gt;{drain_timeout}) {
</span><br>
<span class="quotelev1">&gt; +                Verbose(&quot;*** Past drain timeout; quitting\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                $done = 0;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<p><p>I would have thought if we're &quot;quitting&quot; here, then $done =
<br>
1.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      close OUTerr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Globals.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Globals.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Globals.pm	2006-10-29 08:35:58 EST (Sun, 29 Oct 2006)
</span><br>
<span class="quotelev1">&gt; @@ -26,6 +26,8 @@
</span><br>
<span class="quotelev1">&gt;      hostfile =&gt; undef,
</span><br>
<span class="quotelev1">&gt;      hostlist =&gt; undef,
</span><br>
<span class="quotelev1">&gt;      max_np =&gt; undef,
</span><br>
<span class="quotelev1">&gt; +    textwrap =&gt; 76,
</span><br>
<span class="quotelev1">&gt; +    drain_timeout =&gt; 5,
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  # Reset $Globals per a specific ini file
</span><br>
<span class="quotelev1">&gt; @@ -68,6 +70,13 @@
</span><br>
<span class="quotelev1">&gt;      if ($val) {
</span><br>
<span class="quotelev1">&gt;          $Values-&gt;{textwrap} = $val;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Output display preference
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $val = MTT::Values::Value($ini, &quot;MTT&quot;, &quot;drain_timeout&quot;);
</span><br>
<span class="quotelev1">&gt; +    if ($val) {
</span><br>
<span class="quotelev1">&gt; +        $Values-&gt;{drain_timeout} = $val;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/samples/ompi-core-template.ini
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/samples/ompi-core-template.ini	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/samples/ompi-core-template.ini	2006-10-29 08:35:58 EST (Sun, 29 Oct 2006)
</span><br>
<span class="quotelev1">&gt; @@ -91,9 +91,15 @@
</span><br>
<span class="quotelev1">&gt;  # returned by &amp;env_max_procs(), you can fill in an integer here.
</span><br>
<span class="quotelev1">&gt;  max_np = 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -# Output display preference
</span><br>
<span class="quotelev1">&gt; +# OMPI Core: Output display preference; the default width at which MTT
</span><br>
<span class="quotelev1">&gt; +# output will wrap.
</span><br>
<span class="quotelev1">&gt;  textwrap = 76
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +# OMPI Core: After the timeout for a command has passed, wait this
</span><br>
<span class="quotelev1">&gt; +# many additional seconds to drain all output, and then kill it with
</span><br>
<span class="quotelev1">&gt; +# extreme prejiduce.
</span><br>
<span class="quotelev1">&gt; +drain_timeout = 5
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #======================================================================
</span><br>
<span class="quotelev1">&gt;  # MPI get phase
</span><br>
<span class="quotelev1">&gt;  #======================================================================
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
<li><strong>Next message:</strong> <a href="0171.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday? (raw SQL)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
<!-- nextthread="start" -->
<li><strong>Reply:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
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
