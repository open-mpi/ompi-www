<?
$subject_val = "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 07:47:40 2014" -->
<!-- isoreceived="20140623114740" -->
<!-- sent="Mon, 23 Jun 2014 14:47:38 +0300" -->
<!-- isosent="20140623114738" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594" -->
<!-- id="CAAO1Kya1c_5w8-2YrLzYXG=_5zUmLA+5ZsCbB1ofbG4Xyx9fOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4564D51D-6699-460C-8A1C-562CC8003065_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-23 07:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0629.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Previous message:</strong> <a href="0627.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0629.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0629.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
after patch, it killed child processes but kept mpirun ... itself.
<br>
<p>before that patch - all processes were killed (and you are right, &quot;mpirun
<br>
died right at the end of the timeout&quot; was reported) but at least it left
<br>
the cluster in the clean state w/o leftovers.
<br>
now many &quot;orphan&quot; launchers  are alive from previous invocations.
<br>
<p><p>On Mon, Jun 23, 2014 at 2:18 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; There was actually quite a bit of testing before this was committed.  This
</span><br>
<span class="quotelev1">&gt; commit resolved a lot of hangs across multiple organizations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you be more specific as to what is happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The prior code was killing child processes before mpirun itself, for
</span><br>
<span class="quotelev1">&gt; example, which has led MTT to erroneously report that mpirun died right at
</span><br>
<span class="quotelev1">&gt; the end of the timeout without being killed.  This has been ongoing for
</span><br>
<span class="quotelev1">&gt; many months, at a minimum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2014, at 4:37 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; this commit does more harm then good.
</span><br>
<span class="quotelev2">&gt; &gt; we experience following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - some child processes still running after timeout and mtt killed the
</span><br>
<span class="quotelev1">&gt; job.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; before this commit - it worked fine.
</span><br>
<span class="quotelev2">&gt; &gt; please revert and test more.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Jun 21, 2014 at 3:30 PM, MPI Team &lt;mpiteam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt; &gt;        via  016088f2a0831b32ab5fd6f60f4cabe67e92e594 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;        via  7fb4c6a4c9d71be127ea53bd463178510577f71f (commit)
</span><br>
<span class="quotelev2">&gt; &gt;        via  381ba177d835a54c3197d846f5a4edfc314efe27 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;        via  cfdd29de2012eeb7592706f00dd07a52dd48cf6b (commit)
</span><br>
<span class="quotelev2">&gt; &gt;        via  940030ca20eb1eaf256e898b83866c1cb83aca5c (commit)
</span><br>
<span class="quotelev2">&gt; &gt;       from  c99ed7c7b159a2cab58a251bd7c0dad8972ff901 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt; &gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt; &gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/016088f2a0831b32ab5fd6f60f4cabe67e92e594">https://github.com/open-mpi/mtt/commit/016088f2a0831b32ab5fd6f60f4cabe67e92e594</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 016088f2a0831b32ab5fd6f60f4cabe67e92e594
</span><br>
<span class="quotelev2">&gt; &gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Sat Jun 21 04:58:45 2014 -0700
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     DoCommand: several fixes to kill_proc logic
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     1. Fix the kill(0, $pid) test to see if the process was still alive.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     2. Rename _kill_proc() to _kill_proc_tree() to indicate that it's
</span><br>
<span class="quotelev2">&gt; &gt;     really killing not only the PID in question, but also all of its
</span><br>
<span class="quotelev2">&gt; &gt;     descendants.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     3. In _kill_proc_tree(), change the order to kill the main PID first,
</span><br>
<span class="quotelev2">&gt; &gt;     and ''then'' kill all the descendants.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     The main use case is when killing mpirun: if we kill mpirun's
</span><br>
<span class="quotelev2">&gt; &gt;     descendants ''first'', mpirun will detect its childrens' deaths and
</span><br>
<span class="quotelev2">&gt; &gt;     then cleanup and exit.  Later, when MTT finally gets around to
</span><br>
<span class="quotelev1">&gt; killing
</span><br>
<span class="quotelev2">&gt; &gt;     mpirun, MTT will detect that mpirun is already dead and therefore
</span><br>
<span class="quotelev1">&gt; emit
</span><br>
<span class="quotelev2">&gt; &gt;     a confusing &quot;mpirun died right at end of timeout&quot; message.  This is
</span><br>
<span class="quotelev2">&gt; &gt;     misleading at best; it doesn't indicate what actually happened.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     However, if we kill mpirun first, it will take care of killing all of
</span><br>
<span class="quotelev2">&gt; &gt;     its descendants.  MTT will therefore emit the right messages about
</span><br>
<span class="quotelev2">&gt; &gt;     killing mpirun.  MTT will then redundantly try to kill a bunch of
</span><br>
<span class="quotelev2">&gt; &gt;     now-nonexistent descendant processes of mpirun, but that's ok/safe.
</span><br>
<span class="quotelev2">&gt; &gt;     We actually ''want'' this try-to-kill-mpirun's-descendants behavior
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;     handle the case when mpirun is misbehaving / not cleaning up its
</span><br>
<span class="quotelev2">&gt; &gt;     descendants.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     4. DoCommand() is used for more than launching mpirun, so pass down
</span><br>
<span class="quotelev2">&gt; &gt;     $argv0 so that we can print the actual command name that is being
</span><br>
<span class="quotelev2">&gt; &gt;     killed in various Verbose/Debug messages, not the hard-coded &quot;mpirun&quot;
</span><br>
<span class="quotelev2">&gt; &gt;     string (which, in practice, was probably almost always correct, but
</span><br>
<span class="quotelev2">&gt; &gt;     still...).
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;  lib/MTT/DoCommand.pm | 78
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++++++++++----------------
</span><br>
<span class="quotelev2">&gt; &gt;  1 file changed, 55 insertions(+), 23 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/lib/MTT/DoCommand.pm b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; index 02cdb94..646ca31 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; @@ -2,7 +2,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  #
</span><br>
<span class="quotelev2">&gt; &gt;  # Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev2">&gt; &gt;  #                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; -# Copyright (c) 2006-2013 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2006-2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  # Copyright (c) 2007-2008 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  # Copyright (c) 2007-2012 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt;  #                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; @@ -57,23 +57,27 @@ sub DoCommand {
</span><br>
<span class="quotelev2">&gt; &gt;      ($time_arg, $no_execute) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +# This function is called for killing both mpirun and each of its
</span><br>
<span class="quotelev2">&gt; &gt; +# descendants.  We really only want to see verbose output for when we
</span><br>
<span class="quotelev2">&gt; &gt; +# kill mpirun itself, so only show output when the caller provides us
</span><br>
<span class="quotelev2">&gt; &gt; +# with a $argv0 value.
</span><br>
<span class="quotelev2">&gt; &gt;  sub _kill_proc_one {
</span><br>
<span class="quotelev2">&gt; &gt; -    my ($pid) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($pid, $argv0) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      # How long to wait after each kill()
</span><br>
<span class="quotelev2">&gt; &gt;      my $wait_time = 5;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      # See if the proc is alive first
</span><br>
<span class="quotelev2">&gt; &gt; -    my $kid;
</span><br>
<span class="quotelev2">&gt; &gt; -    kill(0, $pid);
</span><br>
<span class="quotelev2">&gt; &gt; -    $kid = waitpid($pid, WNOHANG);
</span><br>
<span class="quotelev2">&gt; &gt; -    return &quot;mpirun died right at end of timeout (MTT did not have to
</span><br>
<span class="quotelev1">&gt; kill it)&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -        if (-1 == $kid);
</span><br>
<span class="quotelev2">&gt; &gt; +    my $num_alive = kill(0, $pid);
</span><br>
<span class="quotelev2">&gt; &gt; +    return &quot;$argv0 died right at end of timeout (MTT did not have to
</span><br>
<span class="quotelev1">&gt; kill it)&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        if (0 == $num_alive);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      # Try an easy kill
</span><br>
<span class="quotelev2">&gt; &gt;      kill(&quot;TERM&quot;, $pid);
</span><br>
<span class="quotelev2">&gt; &gt; -    Verbose(&quot;*** Killing mpirun with SIGTERM\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    Verbose(&quot;*** Killing $argv0 with SIGTERM\n&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +        if (defined($argv0));
</span><br>
<span class="quotelev2">&gt; &gt;      # Give mpirun some time to cleanup before we try to reap it.
</span><br>
<span class="quotelev2">&gt; &gt; +    my $kid;
</span><br>
<span class="quotelev2">&gt; &gt;      my $i = $wait_time;
</span><br>
<span class="quotelev2">&gt; &gt;      while ($i &gt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt;          sleep(1);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -85,45 +89,74 @@ sub _kill_proc_one {
</span><br>
<span class="quotelev2">&gt; &gt;          # process no longer exists (i.e., we get -1 back from
</span><br>
<span class="quotelev2">&gt; &gt;          # waitpid), or we successfully killed it (i.e., we got the PID
</span><br>
<span class="quotelev2">&gt; &gt;          # back from waitpid).
</span><br>
<span class="quotelev2">&gt; &gt; -        return &quot;MTT killed mpirun via SIGTERM&quot; if (0 != $kid);
</span><br>
<span class="quotelev2">&gt; &gt; +        return &quot;MTT killed $argv0 via SIGTERM&quot; if (0 != $kid);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          --$i;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; -    Verbose(&quot;** Kill TERM (after $wait_time seconds) didn't work!\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    Verbose(&quot;** Kill TERM (after $wait_time seconds) didn't work!\n&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +        if (defined($argv0));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      # That didn't work either.  Try SIGINT;
</span><br>
<span class="quotelev2">&gt; &gt; -    Verbose(&quot;*** Killing mpirun with SIGINT\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    Verbose(&quot;*** Killing $argv0 with SIGINT\n&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +        if (defined($argv0));
</span><br>
<span class="quotelev2">&gt; &gt;      kill(&quot;INT&quot;, $pid);
</span><br>
<span class="quotelev2">&gt; &gt;      my $i = $wait_time;
</span><br>
<span class="quotelev2">&gt; &gt;      while ($i &gt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt;          sleep(1);
</span><br>
<span class="quotelev2">&gt; &gt;          $kid = waitpid($pid, WNOHANG);
</span><br>
<span class="quotelev2">&gt; &gt; -        return &quot;MTT killed mpirun via SIGINT&quot; if (0 != $kid);
</span><br>
<span class="quotelev2">&gt; &gt; +        return &quot;MTT killed $argv0 via SIGINT&quot; if (0 != $kid);
</span><br>
<span class="quotelev2">&gt; &gt;          --$i;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; -    Verbose(&quot;** Kill INT (after $wait_time seconds) didn't work!\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    Verbose(&quot;** Kill INT (after $wait_time seconds) didn't work!\n&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +        if (defined($argv0));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      # Ok, now we're mad.  Be violent.
</span><br>
<span class="quotelev2">&gt; &gt; -    Verbose(&quot;*** Now I'm mad.  Killing mpirun with SIGKILL\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    Verbose(&quot;*** Now I'm mad.  Killing $argv0 with SIGKILL\n&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +        if (defined($argv0));
</span><br>
<span class="quotelev2">&gt; &gt;      my $count = 0;
</span><br>
<span class="quotelev2">&gt; &gt;      while (1) {
</span><br>
<span class="quotelev2">&gt; &gt;          kill(&quot;KILL&quot;, $pid);
</span><br>
<span class="quotelev2">&gt; &gt;          ++$count;
</span><br>
<span class="quotelev2">&gt; &gt;          $kid = waitpid($pid, WNOHANG);
</span><br>
<span class="quotelev2">&gt; &gt; -        return &quot;MTT killed mpirun via $count SIGKILLs&quot; if (0 != $kid);
</span><br>
<span class="quotelev2">&gt; &gt; -        Verbose(&quot;** Kill KILL didn't work!  Sleeping and trying
</span><br>
<span class="quotelev1">&gt; again...\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        return &quot;MTT killed $argv0 via $count SIGKILLs&quot; if (0 != $kid);
</span><br>
<span class="quotelev2">&gt; &gt; +        Verbose(&quot;** Kill KILL didn't work!  Sleeping and trying
</span><br>
<span class="quotelev1">&gt; again...\n&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +            if (defined($argv0));
</span><br>
<span class="quotelev2">&gt; &gt;          sleep(1);
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -sub _kill_proc {
</span><br>
<span class="quotelev2">&gt; &gt; -    my ($pid) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; -    # kill the group, take the names later
</span><br>
<span class="quotelev2">&gt; &gt; -    foreach my $process (descendant_processes($pid)) {
</span><br>
<span class="quotelev2">&gt; &gt; +sub _kill_proc_tree {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($pid, $argv0) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Find all descendent processes of the main PID
</span><br>
<span class="quotelev2">&gt; &gt; +    my @children = descendant_processes($pid);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Kill the main PID.  Note that _kill_proc_one() will give the
</span><br>
<span class="quotelev2">&gt; &gt; +    # process time to react/cleanup, so there's no need for an
</span><br>
<span class="quotelev2">&gt; &gt; +    # additional delay after it returns.
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ret = _kill_proc_one($pid, $argv0);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Now kill all the processes that descended from the base PID.
</span><br>
<span class="quotelev2">&gt; &gt; +    #
</span><br>
<span class="quotelev2">&gt; &gt; +    # Note: when mpirun is working properly (which is one of the
</span><br>
<span class="quotelev2">&gt; &gt; +    # biggest use cases for DoCommand), this is redundant -- all the
</span><br>
<span class="quotelev2">&gt; &gt; +    # children will already be dead (because killing mpirun will
</span><br>
<span class="quotelev2">&gt; &gt; +    # ensure that all descendant processes are also killed).
</span><br>
<span class="quotelev2">&gt; &gt; +    #
</span><br>
<span class="quotelev2">&gt; &gt; +    # That being said, a) DoCommand() is used to launch more than just
</span><br>
<span class="quotelev2">&gt; &gt; +    # mpirun, b) mpirun breaks sometimes and doesn't clean up its
</span><br>
<span class="quotelev2">&gt; &gt; +    # descendants, and c) it's safe to call _kill_proc_one() on a PID
</span><br>
<span class="quotelev2">&gt; &gt; +    # that is already dead.
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $process (@children) {
</span><br>
<span class="quotelev2">&gt; &gt; +        Debug(&quot;=== killing child proc: $process-&gt;{pid},
</span><br>
<span class="quotelev1">&gt; $process-&gt;{argv0}\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        # Ignore the return.  For example, we don't care if the child
</span><br>
<span class="quotelev2">&gt; &gt; +        # is already dead
</span><br>
<span class="quotelev2">&gt; &gt;          _kill_proc_one($process-&gt;{pid});
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; -    return _kill_proc_one($pid);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return $ret;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  #--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; @@ -338,7 +371,6 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      my $tokens = _quote_escape($cmd);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;      my $pid;
</span><br>
<span class="quotelev2">&gt; &gt;      if (! $no_execute) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -568,7 +600,7 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                      $done = 0;
</span><br>
<span class="quotelev2">&gt; &gt;                  }
</span><br>
<span class="quotelev2">&gt; &gt; -                $timeout_message = _kill_proc($pid);
</span><br>
<span class="quotelev2">&gt; &gt; +                $timeout_message = _kill_proc_tree($pid, ${$tokens}[0]);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  # We don't care about the exit status if we timed out
</span><br>
<span class="quotelev2">&gt; &gt;                  # -- fill it with a bogus value.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/7fb4c6a4c9d71be127ea53bd463178510577f71f">https://github.com/open-mpi/mtt/commit/7fb4c6a4c9d71be127ea53bd463178510577f71f</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 7fb4c6a4c9d71be127ea53bd463178510577f71f
</span><br>
<span class="quotelev2">&gt; &gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Sat Jun 21 04:42:19 2014 -0700
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     DoCommand: replace obscure perl code with easier-to-grok version
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     The descendant_processes() and flatten() codes were written in a
</span><br>
<span class="quotelev2">&gt; &gt;     nicely efficient yet very difficult to understand manner.  This
</span><br>
<span class="quotelev1">&gt; commit
</span><br>
<span class="quotelev2">&gt; &gt;     replaces these two subs with admittedly less efficient but much
</span><br>
<span class="quotelev1">&gt; easier
</span><br>
<span class="quotelev2">&gt; &gt;     to understand code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     The new code also saves the first token of the command for each PID
</span><br>
<span class="quotelev1">&gt; so
</span><br>
<span class="quotelev2">&gt; &gt;     that it can be used in Debug/Verbose statements (e.g., identify the
</span><br>
<span class="quotelev2">&gt; &gt;     command that is being killed, etc.).
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;  lib/MTT/DoCommand.pm | 63
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++++++++++++++------------
</span><br>
<span class="quotelev2">&gt; &gt;  1 file changed, 49 insertions(+), 14 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/lib/MTT/DoCommand.pm b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; index c3be8a8..02cdb94 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; @@ -120,8 +120,8 @@ sub _kill_proc_one {
</span><br>
<span class="quotelev2">&gt; &gt;  sub _kill_proc {
</span><br>
<span class="quotelev2">&gt; &gt;      my ($pid) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;      # kill the group, take the names later
</span><br>
<span class="quotelev2">&gt; &gt; -    foreach my $p (descendant_processes($pid)) {
</span><br>
<span class="quotelev2">&gt; &gt; -        _kill_proc_one($p);
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $process (descendant_processes($pid)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        _kill_proc_one($process-&gt;{pid});
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;      return _kill_proc_one($pid);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -527,7 +527,8 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;                  if (defined($timeout_backtrace_program) and
</span><br>
<span class="quotelev1">&gt; !$got_backtrace) {
</span><br>
<span class="quotelev2">&gt; &gt;                      $backtrace = &quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;                      if ( $timeout_before_backtrace_program ) {
</span><br>
<span class="quotelev2">&gt; &gt; -                        foreach my $p (descendant_processes($pid)) {
</span><br>
<span class="quotelev2">&gt; &gt; +                        foreach my $process
</span><br>
<span class="quotelev1">&gt; (descendant_processes($pid)) {
</span><br>
<span class="quotelev2">&gt; &gt; +                            my $p = $process-&gt;{pid};
</span><br>
<span class="quotelev2">&gt; &gt;                              my $c = $timeout_before_backtrace_program;
</span><br>
<span class="quotelev2">&gt; &gt;                              $c =~ s/%PID%/$p/g;
</span><br>
<span class="quotelev2">&gt; &gt;                              Debug(&quot;_pre_backtrace cmd: $c\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -538,7 +539,8 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;                      $backtrace .=
</span><br>
<span class="quotelev1">&gt; _get_backtrace($timeout_backtrace_program, $pid, $pre_pernode);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                      if ( $timeout_after_backtrace_program ) {
</span><br>
<span class="quotelev2">&gt; &gt; -                        foreach my $p (descendant_processes($pid)) {
</span><br>
<span class="quotelev2">&gt; &gt; +                        foreach my $process
</span><br>
<span class="quotelev1">&gt; (descendant_processes($pid)) {
</span><br>
<span class="quotelev2">&gt; &gt; +                            my $p = $process-&gt;{pid};
</span><br>
<span class="quotelev2">&gt; &gt;                              my $c = $timeout_after_backtrace_program;
</span><br>
<span class="quotelev2">&gt; &gt;                              $c =~ s/%PID%/$p/g;
</span><br>
<span class="quotelev2">&gt; &gt;                              Debug(&quot;_post_backtrace cmd: $c\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -738,19 +740,50 @@ sub _do_email_timeout_notification {
</span><br>
<span class="quotelev2">&gt; &gt;      close(TIMEOUT_SENTINEL_FILE);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -sub flatten {
</span><br>
<span class="quotelev2">&gt; &gt; -    map{ (ref($_) eq &quot;ARRAY&quot;) ? map{flatten($_)}@$_ : $_ } @_;
</span><br>
<span class="quotelev2">&gt; &gt; +sub find_children {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($pids, $start) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my @ret;
</span><br>
<span class="quotelev2">&gt; &gt; +    # Scan the PID list and see if any other PIDs list $start as their
</span><br>
<span class="quotelev2">&gt; &gt; +    # PPID.  If so, save that PID and then recursively look for *that*
</span><br>
<span class="quotelev2">&gt; &gt; +    # PID's children.
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $pid (sort(keys(%{$pids}))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if ($pids-&gt;{$pid}-&gt;{ppid} == $start) {
</span><br>
<span class="quotelev2">&gt; &gt; +            push(@ret, {
</span><br>
<span class="quotelev2">&gt; &gt; +                pid =&gt; $pid,
</span><br>
<span class="quotelev2">&gt; &gt; +                argv0 =&gt; $pids-&gt;{$pid}-&gt;{argv0},
</span><br>
<span class="quotelev2">&gt; &gt; +                 });
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            # Add this PID's descendants to the return array
</span><br>
<span class="quotelev2">&gt; &gt; +            push(@ret, find_children($pids, $pid));
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return @ret;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  sub descendant_processes {
</span><br>
<span class="quotelev2">&gt; &gt;      my ($base) = (@_, $$);
</span><br>
<span class="quotelev2">&gt; &gt; -    my %parentage = (`ps -eo pid,ppid` =~ /\d+/g);
</span><br>
<span class="quotelev2">&gt; &gt; -    my %reverse = map { ($_, [$_]) } %parentage;
</span><br>
<span class="quotelev2">&gt; &gt; -    while (my ($pid,$ppid) = each %parentage){
</span><br>
<span class="quotelev2">&gt; &gt; -        push @{$reverse{$ppid}}, $reverse{$pid};
</span><br>
<span class="quotelev2">&gt; &gt; +    open(PS, &quot;ps -eo pid,ppid,cmd|&quot;) || die &quot;Can't open ps&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Skip the title line
</span><br>
<span class="quotelev2">&gt; &gt; +    &lt;PS&gt;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Read all the data lines
</span><br>
<span class="quotelev2">&gt; &gt; +    my $pids;
</span><br>
<span class="quotelev2">&gt; &gt; +    while (&lt;PS&gt;) {
</span><br>
<span class="quotelev2">&gt; &gt; +        # Grab the PID, PPID, and first token of the command
</span><br>
<span class="quotelev2">&gt; &gt; +        $_ =~ m/(\d+)\s+(\d+)\s+(\S+)/;
</span><br>
<span class="quotelev2">&gt; &gt; +        $pids-&gt;{$1} = {
</span><br>
<span class="quotelev2">&gt; &gt; +            pid =&gt; $1,
</span><br>
<span class="quotelev2">&gt; &gt; +            ppid =&gt; $2,
</span><br>
<span class="quotelev2">&gt; &gt; +            argv0 =&gt; $3,
</span><br>
<span class="quotelev2">&gt; &gt; +        };
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; -    shift @{$reverse{$base}};
</span><br>
<span class="quotelev2">&gt; &gt; -    flatten($reverse{$base});
</span><br>
<span class="quotelev2">&gt; &gt; +    close(PS);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Find all the descendants of the $base PID
</span><br>
<span class="quotelev2">&gt; &gt; +    return find_children($pids, $base);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  sub _get_backtrace {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -774,7 +807,8 @@ sub _get_backtrace {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              # Use ps -Af output to fetch the child pids,
</span><br>
<span class="quotelev2">&gt; &gt;              # and grab a stack trace from each one
</span><br>
<span class="quotelev2">&gt; &gt; -            foreach my $p (descendant_processes($pid)) {
</span><br>
<span class="quotelev2">&gt; &gt; +            foreach my $process (descendant_processes($pid)) {
</span><br>
<span class="quotelev2">&gt; &gt; +                my $p = $process-&gt;{pid};
</span><br>
<span class="quotelev2">&gt; &gt;                  $gdb_cmd = &quot;gdb - $p --command=$gdb_command_filename
</span><br>
<span class="quotelev1">&gt; --batch&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;                  $ret .= &quot;\n $gdb_cmd&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;                  $ret .= &quot;\n&quot; . `$gdb_cmd`;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -814,8 +848,9 @@ sub _get_backtrace {
</span><br>
<span class="quotelev2">&gt; &gt;                  }
</span><br>
<span class="quotelev2">&gt; &gt;              }
</span><br>
<span class="quotelev2">&gt; &gt;              Debug(&quot;Stacktrace: base name $return_basename\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -            #foreach my $p (descendant_processes($pid))
</span><br>
<span class="quotelev2">&gt; &gt; +            #foreach my $process (descendant_processes($pid))
</span><br>
<span class="quotelev2">&gt; &gt;              #{
</span><br>
<span class="quotelev2">&gt; &gt; +            #    my $p = $process-&gt;{pid};
</span><br>
<span class="quotelev2">&gt; &gt;              #    my $gstack_cmd = &quot;gstack $p&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;              #    $ret .= &quot;\n $gstack_cmd&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;              #    $ret .= &quot;\n&quot; . `$gstack_cmd`;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/381ba177d835a54c3197d846f5a4edfc314efe27">https://github.com/open-mpi/mtt/commit/381ba177d835a54c3197d846f5a4edfc314efe27</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 381ba177d835a54c3197d846f5a4edfc314efe27
</span><br>
<span class="quotelev2">&gt; &gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Sat Jun 21 03:48:55 2014 -0700
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     DoCommand: ensure to only kill the process once
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     When the DoCommand timeout fires, MTT will kill the entire process
</span><br>
<span class="quotelev2">&gt; &gt;     tree of the launched command.  However, the stdout/stderr sockets may
</span><br>
<span class="quotelev2">&gt; &gt;     still be draining, and therefore the main DoCommand loop may still
</span><br>
<span class="quotelev2">&gt; &gt;     execute more iterations.  In cases like these, ensure that we don't
</span><br>
<span class="quotelev2">&gt; &gt;     try to backtrace/kill the process tree again.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Also add a few more Debug statements for detailed output.
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;  lib/MTT/DoCommand.pm | 23 ++++++++++++++++-------
</span><br>
<span class="quotelev2">&gt; &gt;  1 file changed, 16 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/lib/MTT/DoCommand.pm b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; index 0e253f0..c3be8a8 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; @@ -471,6 +471,7 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;              my $len = sysread(OUTread, $data, 99999);
</span><br>
<span class="quotelev2">&gt; &gt;              if (0 == $len) {
</span><br>
<span class="quotelev2">&gt; &gt;                  vec($rin, fileno(OUTread), 1) = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +                Debug(&quot;*** Child process stdout closed\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                  --$done;
</span><br>
<span class="quotelev2">&gt; &gt;              } else {
</span><br>
<span class="quotelev2">&gt; &gt;                  _append($data, $print_timestamp ? localtime() : &quot;&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -485,6 +486,7 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;              my $len = sysread(ERRread, $data, 99999);
</span><br>
<span class="quotelev2">&gt; &gt;              if (0 == $len) {
</span><br>
<span class="quotelev2">&gt; &gt;                  vec($rin, fileno(ERRread), 1) = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +                Debug(&quot;*** Child process stderr closed\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                  --$done;
</span><br>
<span class="quotelev2">&gt; &gt;              } else {
</span><br>
<span class="quotelev2">&gt; &gt;                  _append($data, $print_timestamp ? localtime() : &quot;&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -493,11 +495,19 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;              }
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        # If we're running with a timeout, bail if we're past the end
</span><br>
<span class="quotelev2">&gt; &gt; -        # time
</span><br>
<span class="quotelev2">&gt; &gt; -        if (defined($end_time) &amp;&amp; time() &gt; $end_time) {
</span><br>
<span class="quotelev2">&gt; &gt; +        # If we're running with a timeout, check to see if a) the
</span><br>
<span class="quotelev2">&gt; &gt; +        # process is still running (i.e., stdout/stderr is still
</span><br>
<span class="quotelev2">&gt; &gt; +        # open), and b) we're past the end time.
</span><br>
<span class="quotelev2">&gt; &gt; +        if ($done &gt; 0 &amp;&amp; defined($end_time) &amp;&amp; time() &gt; $end_time) {
</span><br>
<span class="quotelev2">&gt; &gt;              my $over = time() - $end_time;
</span><br>
<span class="quotelev2">&gt; &gt; -            if ($over &gt; $last_over) {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            # Note that we only want to backtrace/kill the process
</span><br>
<span class="quotelev2">&gt; &gt; +            # *once*.  Consider: it is possible that we kill the
</span><br>
<span class="quotelev2">&gt; &gt; +            # process tree, but then stdout/stderr are still draining,
</span><br>
<span class="quotelev2">&gt; &gt; +            # and therefore we loop around here again *even though the
</span><br>
<span class="quotelev2">&gt; &gt; +            # process tree is already dead*.  So put a little
</span><br>
<span class="quotelev2">&gt; &gt; +            # do-this-only-once protection in here.
</span><br>
<span class="quotelev2">&gt; &gt; +            if (!defined($timeout_message) &amp;&amp; $over &gt; $last_over) {
</span><br>
<span class="quotelev2">&gt; &gt;                  Verbose(&quot;*** Past timeout of $timeout seconds by $over
</span><br>
<span class="quotelev1">&gt; seconds\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  # Handle timeout file
</span><br>
<span class="quotelev2">&gt; &gt; @@ -555,10 +565,8 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;                      );
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                      $done = 0;
</span><br>
<span class="quotelev2">&gt; &gt; -                    $timeout_message = _kill_proc($pid);
</span><br>
<span class="quotelev2">&gt; &gt; -                } else {
</span><br>
<span class="quotelev2">&gt; &gt; -                    $timeout_message = _kill_proc($pid);
</span><br>
<span class="quotelev2">&gt; &gt;                  }
</span><br>
<span class="quotelev2">&gt; &gt; +                $timeout_message = _kill_proc($pid);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  # We don't care about the exit status if we timed out
</span><br>
<span class="quotelev2">&gt; &gt;                  # -- fill it with a bogus value.
</span><br>
<span class="quotelev2">&gt; &gt; @@ -576,6 +584,7 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;              }
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;*** Child process now dead\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;      close OUTerr;
</span><br>
<span class="quotelev2">&gt; &gt;      close OUTread
</span><br>
<span class="quotelev2">&gt; &gt;          if (!$merge_output);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/cfdd29de2012eeb7592706f00dd07a52dd48cf6b">https://github.com/open-mpi/mtt/commit/cfdd29de2012eeb7592706f00dd07a52dd48cf6b</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit cfdd29de2012eeb7592706f00dd07a52dd48cf6b
</span><br>
<span class="quotelev2">&gt; &gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Sat Jun 21 03:36:08 2014 -0700
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     DoCommand: remove unused variables
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;  lib/MTT/DoCommand.pm | 2 --
</span><br>
<span class="quotelev2">&gt; &gt;  1 file changed, 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/lib/MTT/DoCommand.pm b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; index 0740b28..0e253f0 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt; @@ -445,7 +445,6 @@ sub Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;          $end_time = time() + $timeout;
</span><br>
<span class="quotelev2">&gt; &gt;          Debug(&quot;Timeout: $timeout - $end_time (vs. now: &quot; . time() .
</span><br>
<span class="quotelev1">&gt; &quot;)\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; -    my $killed_status = undef;
</span><br>
<span class="quotelev2">&gt; &gt;      my $last_over = 0;
</span><br>
<span class="quotelev2">&gt; &gt;      my $partial_out;
</span><br>
<span class="quotelev2">&gt; &gt;      my $partial_err;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -900,7 +899,6 @@ sub Win_Cmd {
</span><br>
<span class="quotelev2">&gt; &gt;          $end_time = time() + $timeout;
</span><br>
<span class="quotelev2">&gt; &gt;          Debug(&quot;Timeout: $timeout - $end_time (vs. now: &quot; . time() .
</span><br>
<span class="quotelev1">&gt; &quot;)\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; -    my $killed_status = undef;
</span><br>
<span class="quotelev2">&gt; &gt;      my $last_over = 0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      while(&lt;OUTread&gt;) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/940030ca20eb1eaf256e898b83866c1cb83aca5c">https://github.com/open-mpi/mtt/commit/940030ca20eb1eaf256e898b83866c1cb83aca5c</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 940030ca20eb1eaf256e898b83866c1cb83aca5c
</span><br>
<span class="quotelev2">&gt; &gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Fri Jun 20 17:13:08 2014 -0700
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Diskfree.pm: fix df handle leak
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     This left a zombied &quot;df&quot; process in the process table.  The Perl
</span><br>
<span class="quotelev2">&gt; &gt;     runtime eventually cleaned it up, but it was weird to see a zombied
</span><br>
<span class="quotelev1">&gt; df
</span><br>
<span class="quotelev2">&gt; &gt;     in ps listings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     There's no point in reporting this bug upstream; according to the
</span><br>
<span class="quotelev2">&gt; &gt;     Changes file, v0.06 was published in 1998.  There's been no activity
</span><br>
<span class="quotelev2">&gt; &gt;     on <a href="http://search.cpan.org/dist/Filesys-DiskFree/DiskFree.pm">http://search.cpan.org/dist/Filesys-DiskFree/DiskFree.pm</a> since
</span><br>
<span class="quotelev2">&gt; &gt;     v0.06.
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;  lib/Filesys/DiskFree.pm | 3 ++-
</span><br>
<span class="quotelev2">&gt; &gt;  1 file changed, 2 insertions(+), 1 deletion(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/lib/Filesys/DiskFree.pm b/lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev2">&gt; &gt; index 1fa655d..41a27d7 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev2">&gt; &gt; @@ -124,8 +124,9 @@ sub df(){
</span><br>
<span class="quotelev2">&gt; &gt;      $cmd=$self-&gt;command() or
</span><br>
<span class="quotelev2">&gt; &gt;         croak &quot;No df command known for format &quot;.$self-&gt;{'FORMAT'};
</span><br>
<span class="quotelev2">&gt; &gt;      open(HANDLE,&quot;$cmd|&quot;) or croak(&quot;Cannot fork \&quot;$cmd\&quot;: $!&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -    return $self-&gt;load(\*HANDLE);
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ret = $self-&gt;load(\*HANDLE);
</span><br>
<span class="quotelev2">&gt; &gt;      close(HANDLE) or croak(&quot;Cannot df $!&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    return $ret;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  sub load()  {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt; &gt;  lib/Filesys/DiskFree.pm |   3 +-
</span><br>
<span class="quotelev2">&gt; &gt;  lib/MTT/DoCommand.pm    | 162
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++++++-------------
</span><br>
<span class="quotelev2">&gt; &gt;  2 files changed, 120 insertions(+), 45 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; MTT
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/index.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/index.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0627.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0627.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0629.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Previous message:</strong> <a href="0627.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0629.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0629.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
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
