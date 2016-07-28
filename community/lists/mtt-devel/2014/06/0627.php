<?
$subject_val = "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 07:18:21 2014" -->
<!-- isoreceived="20140623111821" -->
<!-- sent="Mon, 23 Jun 2014 11:18:19 +0000" -->
<!-- isosent="20140623111819" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594" -->
<!-- id="4564D51D-6699-460C-8A1C-562CC8003065_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyYLi6CRpkZO2ba57uUU6_a=9+0wfUhO7bGpLNgWcedXKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-23 07:18:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0628.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Previous message:</strong> <a href="0626.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0626.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0628.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was actually quite a bit of testing before this was committed.  This commit resolved a lot of hangs across multiple organizations.
<br>
<p>Can you be more specific as to what is happening?
<br>
<p>The prior code was killing child processes before mpirun itself, for example, which has led MTT to erroneously report that mpirun died right at the end of the timeout without being killed.  This has been ongoing for many months, at a minimum.
<br>
<p><p><p><p>On Jun 23, 2014, at 4:37 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; this commit does more harm then good.
</span><br>
<span class="quotelev1">&gt; we experience following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - some child processes still running after timeout and mtt killed the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; before this commit - it worked fine.
</span><br>
<span class="quotelev1">&gt; please revert and test more.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 21, 2014 at 3:30 PM, MPI Team &lt;mpiteam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;        via  016088f2a0831b32ab5fd6f60f4cabe67e92e594 (commit)
</span><br>
<span class="quotelev1">&gt;        via  7fb4c6a4c9d71be127ea53bd463178510577f71f (commit)
</span><br>
<span class="quotelev1">&gt;        via  381ba177d835a54c3197d846f5a4edfc314efe27 (commit)
</span><br>
<span class="quotelev1">&gt;        via  cfdd29de2012eeb7592706f00dd07a52dd48cf6b (commit)
</span><br>
<span class="quotelev1">&gt;        via  940030ca20eb1eaf256e898b83866c1cb83aca5c (commit)
</span><br>
<span class="quotelev1">&gt;       from  c99ed7c7b159a2cab58a251bd7c0dad8972ff901 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/016088f2a0831b32ab5fd6f60f4cabe67e92e594">https://github.com/open-mpi/mtt/commit/016088f2a0831b32ab5fd6f60f4cabe67e92e594</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 016088f2a0831b32ab5fd6f60f4cabe67e92e594
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Sat Jun 21 04:58:45 2014 -0700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     DoCommand: several fixes to kill_proc logic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     1. Fix the kill(0, $pid) test to see if the process was still alive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     2. Rename _kill_proc() to _kill_proc_tree() to indicate that it's
</span><br>
<span class="quotelev1">&gt;     really killing not only the PID in question, but also all of its
</span><br>
<span class="quotelev1">&gt;     descendants.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     3. In _kill_proc_tree(), change the order to kill the main PID first,
</span><br>
<span class="quotelev1">&gt;     and ''then'' kill all the descendants.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The main use case is when killing mpirun: if we kill mpirun's
</span><br>
<span class="quotelev1">&gt;     descendants ''first'', mpirun will detect its childrens' deaths and
</span><br>
<span class="quotelev1">&gt;     then cleanup and exit.  Later, when MTT finally gets around to killing
</span><br>
<span class="quotelev1">&gt;     mpirun, MTT will detect that mpirun is already dead and therefore emit
</span><br>
<span class="quotelev1">&gt;     a confusing &quot;mpirun died right at end of timeout&quot; message.  This is
</span><br>
<span class="quotelev1">&gt;     misleading at best; it doesn't indicate what actually happened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     However, if we kill mpirun first, it will take care of killing all of
</span><br>
<span class="quotelev1">&gt;     its descendants.  MTT will therefore emit the right messages about
</span><br>
<span class="quotelev1">&gt;     killing mpirun.  MTT will then redundantly try to kill a bunch of
</span><br>
<span class="quotelev1">&gt;     now-nonexistent descendant processes of mpirun, but that's ok/safe.
</span><br>
<span class="quotelev1">&gt;     We actually ''want'' this try-to-kill-mpirun's-descendants behavior to
</span><br>
<span class="quotelev1">&gt;     handle the case when mpirun is misbehaving / not cleaning up its
</span><br>
<span class="quotelev1">&gt;     descendants.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     4. DoCommand() is used for more than launching mpirun, so pass down
</span><br>
<span class="quotelev1">&gt;     $argv0 so that we can print the actual command name that is being
</span><br>
<span class="quotelev1">&gt;     killed in various Verbose/Debug messages, not the hard-coded &quot;mpirun&quot;
</span><br>
<span class="quotelev1">&gt;     string (which, in practice, was probably almost always correct, but
</span><br>
<span class="quotelev1">&gt;     still...).
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  lib/MTT/DoCommand.pm | 78 ++++++++++++++++++++++++++++++++++++----------------
</span><br>
<span class="quotelev1">&gt;  1 file changed, 55 insertions(+), 23 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/lib/MTT/DoCommand.pm b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; index 02cdb94..646ca31 100644
</span><br>
<span class="quotelev1">&gt; --- a/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; +++ b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; @@ -2,7 +2,7 @@
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt;  #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; -# Copyright (c) 2006-2013 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2006-2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2007-2012 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev1">&gt;  #                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; @@ -57,23 +57,27 @@ sub DoCommand {
</span><br>
<span class="quotelev1">&gt;      ($time_arg, $no_execute) = @_;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +# This function is called for killing both mpirun and each of its
</span><br>
<span class="quotelev1">&gt; +# descendants.  We really only want to see verbose output for when we
</span><br>
<span class="quotelev1">&gt; +# kill mpirun itself, so only show output when the caller provides us
</span><br>
<span class="quotelev1">&gt; +# with a $argv0 value.
</span><br>
<span class="quotelev1">&gt;  sub _kill_proc_one {
</span><br>
<span class="quotelev1">&gt; -    my ($pid) = @_;
</span><br>
<span class="quotelev1">&gt; +    my ($pid, $argv0) = @_;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      # How long to wait after each kill()
</span><br>
<span class="quotelev1">&gt;      my $wait_time = 5;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      # See if the proc is alive first
</span><br>
<span class="quotelev1">&gt; -    my $kid;
</span><br>
<span class="quotelev1">&gt; -    kill(0, $pid);
</span><br>
<span class="quotelev1">&gt; -    $kid = waitpid($pid, WNOHANG);
</span><br>
<span class="quotelev1">&gt; -    return &quot;mpirun died right at end of timeout (MTT did not have to kill it)&quot;
</span><br>
<span class="quotelev1">&gt; -        if (-1 == $kid);
</span><br>
<span class="quotelev1">&gt; +    my $num_alive = kill(0, $pid);
</span><br>
<span class="quotelev1">&gt; +    return &quot;$argv0 died right at end of timeout (MTT did not have to kill it)&quot;
</span><br>
<span class="quotelev1">&gt; +        if (0 == $num_alive);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      # Try an easy kill
</span><br>
<span class="quotelev1">&gt;      kill(&quot;TERM&quot;, $pid);
</span><br>
<span class="quotelev1">&gt; -    Verbose(&quot;*** Killing mpirun with SIGTERM\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    Verbose(&quot;*** Killing $argv0 with SIGTERM\n&quot;)
</span><br>
<span class="quotelev1">&gt; +        if (defined($argv0));
</span><br>
<span class="quotelev1">&gt;      # Give mpirun some time to cleanup before we try to reap it.
</span><br>
<span class="quotelev1">&gt; +    my $kid;
</span><br>
<span class="quotelev1">&gt;      my $i = $wait_time;
</span><br>
<span class="quotelev1">&gt;      while ($i &gt; 0) {
</span><br>
<span class="quotelev1">&gt;          sleep(1);
</span><br>
<span class="quotelev1">&gt; @@ -85,45 +89,74 @@ sub _kill_proc_one {
</span><br>
<span class="quotelev1">&gt;          # process no longer exists (i.e., we get -1 back from
</span><br>
<span class="quotelev1">&gt;          # waitpid), or we successfully killed it (i.e., we got the PID
</span><br>
<span class="quotelev1">&gt;          # back from waitpid).
</span><br>
<span class="quotelev1">&gt; -        return &quot;MTT killed mpirun via SIGTERM&quot; if (0 != $kid);
</span><br>
<span class="quotelev1">&gt; +        return &quot;MTT killed $argv0 via SIGTERM&quot; if (0 != $kid);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          --$i;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    Verbose(&quot;** Kill TERM (after $wait_time seconds) didn't work!\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    Verbose(&quot;** Kill TERM (after $wait_time seconds) didn't work!\n&quot;)
</span><br>
<span class="quotelev1">&gt; +        if (defined($argv0));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      # That didn't work either.  Try SIGINT;
</span><br>
<span class="quotelev1">&gt; -    Verbose(&quot;*** Killing mpirun with SIGINT\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    Verbose(&quot;*** Killing $argv0 with SIGINT\n&quot;)
</span><br>
<span class="quotelev1">&gt; +        if (defined($argv0));
</span><br>
<span class="quotelev1">&gt;      kill(&quot;INT&quot;, $pid);
</span><br>
<span class="quotelev1">&gt;      my $i = $wait_time;
</span><br>
<span class="quotelev1">&gt;      while ($i &gt; 0) {
</span><br>
<span class="quotelev1">&gt;          sleep(1);
</span><br>
<span class="quotelev1">&gt;          $kid = waitpid($pid, WNOHANG);
</span><br>
<span class="quotelev1">&gt; -        return &quot;MTT killed mpirun via SIGINT&quot; if (0 != $kid);
</span><br>
<span class="quotelev1">&gt; +        return &quot;MTT killed $argv0 via SIGINT&quot; if (0 != $kid);
</span><br>
<span class="quotelev1">&gt;          --$i;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    Verbose(&quot;** Kill INT (after $wait_time seconds) didn't work!\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    Verbose(&quot;** Kill INT (after $wait_time seconds) didn't work!\n&quot;)
</span><br>
<span class="quotelev1">&gt; +        if (defined($argv0));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      # Ok, now we're mad.  Be violent.
</span><br>
<span class="quotelev1">&gt; -    Verbose(&quot;*** Now I'm mad.  Killing mpirun with SIGKILL\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    Verbose(&quot;*** Now I'm mad.  Killing $argv0 with SIGKILL\n&quot;)
</span><br>
<span class="quotelev1">&gt; +        if (defined($argv0));
</span><br>
<span class="quotelev1">&gt;      my $count = 0;
</span><br>
<span class="quotelev1">&gt;      while (1) {
</span><br>
<span class="quotelev1">&gt;          kill(&quot;KILL&quot;, $pid);
</span><br>
<span class="quotelev1">&gt;          ++$count;
</span><br>
<span class="quotelev1">&gt;          $kid = waitpid($pid, WNOHANG);
</span><br>
<span class="quotelev1">&gt; -        return &quot;MTT killed mpirun via $count SIGKILLs&quot; if (0 != $kid);
</span><br>
<span class="quotelev1">&gt; -        Verbose(&quot;** Kill KILL didn't work!  Sleeping and trying again...\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        return &quot;MTT killed $argv0 via $count SIGKILLs&quot; if (0 != $kid);
</span><br>
<span class="quotelev1">&gt; +        Verbose(&quot;** Kill KILL didn't work!  Sleeping and trying again...\n&quot;)
</span><br>
<span class="quotelev1">&gt; +            if (defined($argv0));
</span><br>
<span class="quotelev1">&gt;          sleep(1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -sub _kill_proc {
</span><br>
<span class="quotelev1">&gt; -    my ($pid) = @_;
</span><br>
<span class="quotelev1">&gt; -    # kill the group, take the names later
</span><br>
<span class="quotelev1">&gt; -    foreach my $process (descendant_processes($pid)) {
</span><br>
<span class="quotelev1">&gt; +sub _kill_proc_tree {
</span><br>
<span class="quotelev1">&gt; +    my ($pid, $argv0) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Find all descendent processes of the main PID
</span><br>
<span class="quotelev1">&gt; +    my @children = descendant_processes($pid);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Kill the main PID.  Note that _kill_proc_one() will give the
</span><br>
<span class="quotelev1">&gt; +    # process time to react/cleanup, so there's no need for an
</span><br>
<span class="quotelev1">&gt; +    # additional delay after it returns.
</span><br>
<span class="quotelev1">&gt; +    my $ret = _kill_proc_one($pid, $argv0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Now kill all the processes that descended from the base PID.
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Note: when mpirun is working properly (which is one of the
</span><br>
<span class="quotelev1">&gt; +    # biggest use cases for DoCommand), this is redundant -- all the
</span><br>
<span class="quotelev1">&gt; +    # children will already be dead (because killing mpirun will
</span><br>
<span class="quotelev1">&gt; +    # ensure that all descendant processes are also killed).
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # That being said, a) DoCommand() is used to launch more than just
</span><br>
<span class="quotelev1">&gt; +    # mpirun, b) mpirun breaks sometimes and doesn't clean up its
</span><br>
<span class="quotelev1">&gt; +    # descendants, and c) it's safe to call _kill_proc_one() on a PID
</span><br>
<span class="quotelev1">&gt; +    # that is already dead.
</span><br>
<span class="quotelev1">&gt; +    foreach my $process (@children) {
</span><br>
<span class="quotelev1">&gt; +        Debug(&quot;=== killing child proc: $process-&gt;{pid}, $process-&gt;{argv0}\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # Ignore the return.  For example, we don't care if the child
</span><br>
<span class="quotelev1">&gt; +        # is already dead
</span><br>
<span class="quotelev1">&gt;          _kill_proc_one($process-&gt;{pid});
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    return _kill_proc_one($pid);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; @@ -338,7 +371,6 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      my $tokens = _quote_escape($cmd);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      my $pid;
</span><br>
<span class="quotelev1">&gt;      if (! $no_execute) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -568,7 +600,7 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      $done = 0;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; -                $timeout_message = _kill_proc($pid);
</span><br>
<span class="quotelev1">&gt; +                $timeout_message = _kill_proc_tree($pid, ${$tokens}[0]);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  # We don't care about the exit status if we timed out
</span><br>
<span class="quotelev1">&gt;                  # -- fill it with a bogus value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/7fb4c6a4c9d71be127ea53bd463178510577f71f">https://github.com/open-mpi/mtt/commit/7fb4c6a4c9d71be127ea53bd463178510577f71f</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 7fb4c6a4c9d71be127ea53bd463178510577f71f
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Sat Jun 21 04:42:19 2014 -0700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     DoCommand: replace obscure perl code with easier-to-grok version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The descendant_processes() and flatten() codes were written in a
</span><br>
<span class="quotelev1">&gt;     nicely efficient yet very difficult to understand manner.  This commit
</span><br>
<span class="quotelev1">&gt;     replaces these two subs with admittedly less efficient but much easier
</span><br>
<span class="quotelev1">&gt;     to understand code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The new code also saves the first token of the command for each PID so
</span><br>
<span class="quotelev1">&gt;     that it can be used in Debug/Verbose statements (e.g., identify the
</span><br>
<span class="quotelev1">&gt;     command that is being killed, etc.).
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  lib/MTT/DoCommand.pm | 63 ++++++++++++++++++++++++++++++++++++++++------------
</span><br>
<span class="quotelev1">&gt;  1 file changed, 49 insertions(+), 14 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/lib/MTT/DoCommand.pm b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; index c3be8a8..02cdb94 100644
</span><br>
<span class="quotelev1">&gt; --- a/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; +++ b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; @@ -120,8 +120,8 @@ sub _kill_proc_one {
</span><br>
<span class="quotelev1">&gt;  sub _kill_proc {
</span><br>
<span class="quotelev1">&gt;      my ($pid) = @_;
</span><br>
<span class="quotelev1">&gt;      # kill the group, take the names later
</span><br>
<span class="quotelev1">&gt; -    foreach my $p (descendant_processes($pid)) {
</span><br>
<span class="quotelev1">&gt; -        _kill_proc_one($p);
</span><br>
<span class="quotelev1">&gt; +    foreach my $process (descendant_processes($pid)) {
</span><br>
<span class="quotelev1">&gt; +        _kill_proc_one($process-&gt;{pid});
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      return _kill_proc_one($pid);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -527,7 +527,8 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt;                  if (defined($timeout_backtrace_program) and !$got_backtrace) {
</span><br>
<span class="quotelev1">&gt;                      $backtrace = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt;                      if ( $timeout_before_backtrace_program ) {
</span><br>
<span class="quotelev1">&gt; -                        foreach my $p (descendant_processes($pid)) {
</span><br>
<span class="quotelev1">&gt; +                        foreach my $process (descendant_processes($pid)) {
</span><br>
<span class="quotelev1">&gt; +                            my $p = $process-&gt;{pid};
</span><br>
<span class="quotelev1">&gt;                              my $c = $timeout_before_backtrace_program;
</span><br>
<span class="quotelev1">&gt;                              $c =~ s/%PID%/$p/g;
</span><br>
<span class="quotelev1">&gt;                              Debug(&quot;_pre_backtrace cmd: $c\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -538,7 +539,8 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt;                      $backtrace .= _get_backtrace($timeout_backtrace_program, $pid, $pre_pernode);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      if ( $timeout_after_backtrace_program ) {
</span><br>
<span class="quotelev1">&gt; -                        foreach my $p (descendant_processes($pid)) {
</span><br>
<span class="quotelev1">&gt; +                        foreach my $process (descendant_processes($pid)) {
</span><br>
<span class="quotelev1">&gt; +                            my $p = $process-&gt;{pid};
</span><br>
<span class="quotelev1">&gt;                              my $c = $timeout_after_backtrace_program;
</span><br>
<span class="quotelev1">&gt;                              $c =~ s/%PID%/$p/g;
</span><br>
<span class="quotelev1">&gt;                              Debug(&quot;_post_backtrace cmd: $c\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -738,19 +740,50 @@ sub _do_email_timeout_notification {
</span><br>
<span class="quotelev1">&gt;      close(TIMEOUT_SENTINEL_FILE);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -sub flatten {
</span><br>
<span class="quotelev1">&gt; -    map{ (ref($_) eq &quot;ARRAY&quot;) ? map{flatten($_)}@$_ : $_ } @_;
</span><br>
<span class="quotelev1">&gt; +sub find_children {
</span><br>
<span class="quotelev1">&gt; +    my ($pids, $start) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my @ret;
</span><br>
<span class="quotelev1">&gt; +    # Scan the PID list and see if any other PIDs list $start as their
</span><br>
<span class="quotelev1">&gt; +    # PPID.  If so, save that PID and then recursively look for *that*
</span><br>
<span class="quotelev1">&gt; +    # PID's children.
</span><br>
<span class="quotelev1">&gt; +    foreach my $pid (sort(keys(%{$pids}))) {
</span><br>
<span class="quotelev1">&gt; +        if ($pids-&gt;{$pid}-&gt;{ppid} == $start) {
</span><br>
<span class="quotelev1">&gt; +            push(@ret, {
</span><br>
<span class="quotelev1">&gt; +                pid =&gt; $pid,
</span><br>
<span class="quotelev1">&gt; +                argv0 =&gt; $pids-&gt;{$pid}-&gt;{argv0},
</span><br>
<span class="quotelev1">&gt; +                 });
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # Add this PID's descendants to the return array
</span><br>
<span class="quotelev1">&gt; +            push(@ret, find_children($pids, $pid));
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return @ret;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  sub descendant_processes {
</span><br>
<span class="quotelev1">&gt;      my ($base) = (@_, $$);
</span><br>
<span class="quotelev1">&gt; -    my %parentage = (`ps -eo pid,ppid` =~ /\d+/g);
</span><br>
<span class="quotelev1">&gt; -    my %reverse = map { ($_, [$_]) } %parentage;
</span><br>
<span class="quotelev1">&gt; -    while (my ($pid,$ppid) = each %parentage){
</span><br>
<span class="quotelev1">&gt; -        push @{$reverse{$ppid}}, $reverse{$pid};
</span><br>
<span class="quotelev1">&gt; +    open(PS, &quot;ps -eo pid,ppid,cmd|&quot;) || die &quot;Can't open ps&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Skip the title line
</span><br>
<span class="quotelev1">&gt; +    &lt;PS&gt;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Read all the data lines
</span><br>
<span class="quotelev1">&gt; +    my $pids;
</span><br>
<span class="quotelev1">&gt; +    while (&lt;PS&gt;) {
</span><br>
<span class="quotelev1">&gt; +        # Grab the PID, PPID, and first token of the command
</span><br>
<span class="quotelev1">&gt; +        $_ =~ m/(\d+)\s+(\d+)\s+(\S+)/;
</span><br>
<span class="quotelev1">&gt; +        $pids-&gt;{$1} = {
</span><br>
<span class="quotelev1">&gt; +            pid =&gt; $1,
</span><br>
<span class="quotelev1">&gt; +            ppid =&gt; $2,
</span><br>
<span class="quotelev1">&gt; +            argv0 =&gt; $3,
</span><br>
<span class="quotelev1">&gt; +        };
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    shift @{$reverse{$base}};
</span><br>
<span class="quotelev1">&gt; -    flatten($reverse{$base});
</span><br>
<span class="quotelev1">&gt; +    close(PS);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Find all the descendants of the $base PID
</span><br>
<span class="quotelev1">&gt; +    return find_children($pids, $base);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  sub _get_backtrace {
</span><br>
<span class="quotelev1">&gt; @@ -774,7 +807,8 @@ sub _get_backtrace {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              # Use ps -Af output to fetch the child pids,
</span><br>
<span class="quotelev1">&gt;              # and grab a stack trace from each one
</span><br>
<span class="quotelev1">&gt; -            foreach my $p (descendant_processes($pid)) {
</span><br>
<span class="quotelev1">&gt; +            foreach my $process (descendant_processes($pid)) {
</span><br>
<span class="quotelev1">&gt; +                my $p = $process-&gt;{pid};
</span><br>
<span class="quotelev1">&gt;                  $gdb_cmd = &quot;gdb - $p --command=$gdb_command_filename --batch&quot;;
</span><br>
<span class="quotelev1">&gt;                  $ret .= &quot;\n $gdb_cmd&quot;;
</span><br>
<span class="quotelev1">&gt;                  $ret .= &quot;\n&quot; . `$gdb_cmd`;
</span><br>
<span class="quotelev1">&gt; @@ -814,8 +848,9 @@ sub _get_backtrace {
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              Debug(&quot;Stacktrace: base name $return_basename\n&quot;);
</span><br>
<span class="quotelev1">&gt; -            #foreach my $p (descendant_processes($pid))
</span><br>
<span class="quotelev1">&gt; +            #foreach my $process (descendant_processes($pid))
</span><br>
<span class="quotelev1">&gt;              #{
</span><br>
<span class="quotelev1">&gt; +            #    my $p = $process-&gt;{pid};
</span><br>
<span class="quotelev1">&gt;              #    my $gstack_cmd = &quot;gstack $p&quot;;
</span><br>
<span class="quotelev1">&gt;              #    $ret .= &quot;\n $gstack_cmd&quot;;
</span><br>
<span class="quotelev1">&gt;              #    $ret .= &quot;\n&quot; . `$gstack_cmd`;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/381ba177d835a54c3197d846f5a4edfc314efe27">https://github.com/open-mpi/mtt/commit/381ba177d835a54c3197d846f5a4edfc314efe27</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 381ba177d835a54c3197d846f5a4edfc314efe27
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Sat Jun 21 03:48:55 2014 -0700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     DoCommand: ensure to only kill the process once
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     When the DoCommand timeout fires, MTT will kill the entire process
</span><br>
<span class="quotelev1">&gt;     tree of the launched command.  However, the stdout/stderr sockets may
</span><br>
<span class="quotelev1">&gt;     still be draining, and therefore the main DoCommand loop may still
</span><br>
<span class="quotelev1">&gt;     execute more iterations.  In cases like these, ensure that we don't
</span><br>
<span class="quotelev1">&gt;     try to backtrace/kill the process tree again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Also add a few more Debug statements for detailed output.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  lib/MTT/DoCommand.pm | 23 ++++++++++++++++-------
</span><br>
<span class="quotelev1">&gt;  1 file changed, 16 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/lib/MTT/DoCommand.pm b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; index 0e253f0..c3be8a8 100644
</span><br>
<span class="quotelev1">&gt; --- a/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; +++ b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; @@ -471,6 +471,7 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt;              my $len = sysread(OUTread, $data, 99999);
</span><br>
<span class="quotelev1">&gt;              if (0 == $len) {
</span><br>
<span class="quotelev1">&gt;                  vec($rin, fileno(OUTread), 1) = 0;
</span><br>
<span class="quotelev1">&gt; +                Debug(&quot;*** Child process stdout closed\n&quot;);
</span><br>
<span class="quotelev1">&gt;                  --$done;
</span><br>
<span class="quotelev1">&gt;              } else {
</span><br>
<span class="quotelev1">&gt;                  _append($data, $print_timestamp ? localtime() : &quot;&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -485,6 +486,7 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt;              my $len = sysread(ERRread, $data, 99999);
</span><br>
<span class="quotelev1">&gt;              if (0 == $len) {
</span><br>
<span class="quotelev1">&gt;                  vec($rin, fileno(ERRread), 1) = 0;
</span><br>
<span class="quotelev1">&gt; +                Debug(&quot;*** Child process stderr closed\n&quot;);
</span><br>
<span class="quotelev1">&gt;                  --$done;
</span><br>
<span class="quotelev1">&gt;              } else {
</span><br>
<span class="quotelev1">&gt;                  _append($data, $print_timestamp ? localtime() : &quot;&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -493,11 +495,19 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        # If we're running with a timeout, bail if we're past the end
</span><br>
<span class="quotelev1">&gt; -        # time
</span><br>
<span class="quotelev1">&gt; -        if (defined($end_time) &amp;&amp; time() &gt; $end_time) {
</span><br>
<span class="quotelev1">&gt; +        # If we're running with a timeout, check to see if a) the
</span><br>
<span class="quotelev1">&gt; +        # process is still running (i.e., stdout/stderr is still
</span><br>
<span class="quotelev1">&gt; +        # open), and b) we're past the end time.
</span><br>
<span class="quotelev1">&gt; +        if ($done &gt; 0 &amp;&amp; defined($end_time) &amp;&amp; time() &gt; $end_time) {
</span><br>
<span class="quotelev1">&gt;              my $over = time() - $end_time;
</span><br>
<span class="quotelev1">&gt; -            if ($over &gt; $last_over) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # Note that we only want to backtrace/kill the process
</span><br>
<span class="quotelev1">&gt; +            # *once*.  Consider: it is possible that we kill the
</span><br>
<span class="quotelev1">&gt; +            # process tree, but then stdout/stderr are still draining,
</span><br>
<span class="quotelev1">&gt; +            # and therefore we loop around here again *even though the
</span><br>
<span class="quotelev1">&gt; +            # process tree is already dead*.  So put a little
</span><br>
<span class="quotelev1">&gt; +            # do-this-only-once protection in here.
</span><br>
<span class="quotelev1">&gt; +            if (!defined($timeout_message) &amp;&amp; $over &gt; $last_over) {
</span><br>
<span class="quotelev1">&gt;                  Verbose(&quot;*** Past timeout of $timeout seconds by $over seconds\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  # Handle timeout file
</span><br>
<span class="quotelev1">&gt; @@ -555,10 +565,8 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt;                      );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      $done = 0;
</span><br>
<span class="quotelev1">&gt; -                    $timeout_message = _kill_proc($pid);
</span><br>
<span class="quotelev1">&gt; -                } else {
</span><br>
<span class="quotelev1">&gt; -                    $timeout_message = _kill_proc($pid);
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; +                $timeout_message = _kill_proc($pid);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  # We don't care about the exit status if we timed out
</span><br>
<span class="quotelev1">&gt;                  # -- fill it with a bogus value.
</span><br>
<span class="quotelev1">&gt; @@ -576,6 +584,7 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;*** Child process now dead\n&quot;);
</span><br>
<span class="quotelev1">&gt;      close OUTerr;
</span><br>
<span class="quotelev1">&gt;      close OUTread
</span><br>
<span class="quotelev1">&gt;          if (!$merge_output);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/cfdd29de2012eeb7592706f00dd07a52dd48cf6b">https://github.com/open-mpi/mtt/commit/cfdd29de2012eeb7592706f00dd07a52dd48cf6b</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit cfdd29de2012eeb7592706f00dd07a52dd48cf6b
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Sat Jun 21 03:36:08 2014 -0700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     DoCommand: remove unused variables
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  lib/MTT/DoCommand.pm | 2 --
</span><br>
<span class="quotelev1">&gt;  1 file changed, 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/lib/MTT/DoCommand.pm b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; index 0740b28..0e253f0 100644
</span><br>
<span class="quotelev1">&gt; --- a/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; +++ b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; @@ -445,7 +445,6 @@ sub Cmd {
</span><br>
<span class="quotelev1">&gt;          $end_time = time() + $timeout;
</span><br>
<span class="quotelev1">&gt;          Debug(&quot;Timeout: $timeout - $end_time (vs. now: &quot; . time() . &quot;)\n&quot;);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    my $killed_status = undef;
</span><br>
<span class="quotelev1">&gt;      my $last_over = 0;
</span><br>
<span class="quotelev1">&gt;      my $partial_out;
</span><br>
<span class="quotelev1">&gt;      my $partial_err;
</span><br>
<span class="quotelev1">&gt; @@ -900,7 +899,6 @@ sub Win_Cmd {
</span><br>
<span class="quotelev1">&gt;          $end_time = time() + $timeout;
</span><br>
<span class="quotelev1">&gt;          Debug(&quot;Timeout: $timeout - $end_time (vs. now: &quot; . time() . &quot;)\n&quot;);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    my $killed_status = undef;
</span><br>
<span class="quotelev1">&gt;      my $last_over = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      while(&lt;OUTread&gt;) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/940030ca20eb1eaf256e898b83866c1cb83aca5c">https://github.com/open-mpi/mtt/commit/940030ca20eb1eaf256e898b83866c1cb83aca5c</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 940030ca20eb1eaf256e898b83866c1cb83aca5c
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Fri Jun 20 17:13:08 2014 -0700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Diskfree.pm: fix df handle leak
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     This left a zombied &quot;df&quot; process in the process table.  The Perl
</span><br>
<span class="quotelev1">&gt;     runtime eventually cleaned it up, but it was weird to see a zombied df
</span><br>
<span class="quotelev1">&gt;     in ps listings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     There's no point in reporting this bug upstream; according to the
</span><br>
<span class="quotelev1">&gt;     Changes file, v0.06 was published in 1998.  There's been no activity
</span><br>
<span class="quotelev1">&gt;     on <a href="http://search.cpan.org/dist/Filesys-DiskFree/DiskFree.pm">http://search.cpan.org/dist/Filesys-DiskFree/DiskFree.pm</a> since
</span><br>
<span class="quotelev1">&gt;     v0.06.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  lib/Filesys/DiskFree.pm | 3 ++-
</span><br>
<span class="quotelev1">&gt;  1 file changed, 2 insertions(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/lib/Filesys/DiskFree.pm b/lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev1">&gt; index 1fa655d..41a27d7 100644
</span><br>
<span class="quotelev1">&gt; --- a/lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev1">&gt; +++ b/lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev1">&gt; @@ -124,8 +124,9 @@ sub df(){
</span><br>
<span class="quotelev1">&gt;      $cmd=$self-&gt;command() or
</span><br>
<span class="quotelev1">&gt;         croak &quot;No df command known for format &quot;.$self-&gt;{'FORMAT'};
</span><br>
<span class="quotelev1">&gt;      open(HANDLE,&quot;$cmd|&quot;) or croak(&quot;Cannot fork \&quot;$cmd\&quot;: $!&quot;);
</span><br>
<span class="quotelev1">&gt; -    return $self-&gt;load(\*HANDLE);
</span><br>
<span class="quotelev1">&gt; +    my $ret = $self-&gt;load(\*HANDLE);
</span><br>
<span class="quotelev1">&gt;      close(HANDLE) or croak(&quot;Cannot df $!&quot;);
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  sub load()  {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt;  lib/Filesys/DiskFree.pm |   3 +-
</span><br>
<span class="quotelev1">&gt;  lib/MTT/DoCommand.pm    | 162 +++++++++++++++++++++++++++++++++++-------------
</span><br>
<span class="quotelev1">&gt;  2 files changed, 120 insertions(+), 45 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; MTT
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/index.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/index.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0628.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Previous message:</strong> <a href="0626.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0626.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0628.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
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
