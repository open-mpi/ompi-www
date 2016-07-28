<?
$subject_val = "Re: [MTT users] FW: ALPS modifications for MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 10:47:05 2008" -->
<!-- isoreceived="20080814144705" -->
<!-- sent="Thu, 14 Aug 2008 10:46:58 -0400" -->
<!-- isosent="20080814144658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] FW: ALPS modifications for MTT" -->
<!-- id="DE858BC4-1526-421B-A33C-6C72C1C1F955_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46ACFC48-8133-4761-B12D-0A0B83A1C458_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] FW: ALPS modifications for MTT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-14 10:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Previous message:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>In reply to:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Reply:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, I committed this patch to the MTT trunk.
<br>
<p>I feel a little sheepish; I should have told you to use the trunk  
<br>
these days, not the release branch (I know the wiki specifically says  
<br>
otherwise).  We really need to finally make a release out of what is  
<br>
on the trunk -- it's much more advanced than what is on the release  
<br>
branch (look at the CHANGES file in the top-level dir to see what has  
<br>
changed since the release branch).
<br>
<p>The Cisco MTT files in SVN are for the trunk; it's possible that the  
<br>
features that the release branch doesn't understand will just be  
<br>
ignored, but I haven't tried this in a long time.
<br>
<p><p><p>On Aug 14, 2008, at 10:35 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This patch looks good to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll commit.  If you want to do any more work on MTT, perhaps ORNL  
</span><br>
<span class="quotelev1">&gt; can add you to its &quot;Schedule A&quot; form for the Open MPI Third Party  
</span><br>
<span class="quotelev1">&gt; Contribution form (it's very easy to amend Schedule A -- doesn't  
</span><br>
<span class="quotelev1">&gt; require any authoritative signatures), we could get you an MTT SVN  
</span><br>
<span class="quotelev1">&gt; account and you could commit this stuff directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 14, 2008, at 10:24 AM, Matney Sr, Kenneth D. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When running MTT on the Cray XT3/XT4 machines, I found that MTT  
</span><br>
<span class="quotelev2">&gt;&gt; does not
</span><br>
<span class="quotelev2">&gt;&gt; contain any support for ALPS.  As a result, it always executes mpirun
</span><br>
<span class="quotelev2">&gt;&gt; with &quot;-np 1&quot;.  I patched lib/MTT/Values/Functions.pm with the  
</span><br>
<span class="quotelev2">&gt;&gt; following
</span><br>
<span class="quotelev2">&gt;&gt; to overcome this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Matney Sr, Kenneth D.
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, August 13, 2008 5:57 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Shipman, Galen M.
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Graham, Richard L.
</span><br>
<span class="quotelev2">&gt;&gt; Subject: FW: ALPS modifications for MTT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- Functions-bak.pm	2008-08-06 14:31:26.256538000 -0400
</span><br>
<span class="quotelev2">&gt;&gt; +++ Functions.pm	2008-08-13 17:43:40.273641000 -0400
</span><br>
<span class="quotelev2">&gt;&gt; @@ -602,6 +602,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;    # Resource managers
</span><br>
<span class="quotelev2">&gt;&gt;    return &quot;SLURM&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        if slurm_job();
</span><br>
<span class="quotelev2">&gt;&gt; +    return &quot;ALPS&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +        if alps_job();
</span><br>
<span class="quotelev2">&gt;&gt;    return &quot;TM&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        if pbs_job();
</span><br>
<span class="quotelev2">&gt;&gt;    return &quot;N1GE&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -638,6 +640,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;    # Resource managers
</span><br>
<span class="quotelev2">&gt;&gt;    return slurm_max_procs()
</span><br>
<span class="quotelev2">&gt;&gt;        if slurm_job();
</span><br>
<span class="quotelev2">&gt;&gt; +    return alps_max_procs()
</span><br>
<span class="quotelev2">&gt;&gt; +        if alps_job();
</span><br>
<span class="quotelev2">&gt;&gt;    return pbs_max_procs()
</span><br>
<span class="quotelev2">&gt;&gt;        if pbs_job();
</span><br>
<span class="quotelev2">&gt;&gt;    return n1ge_max_procs()
</span><br>
<span class="quotelev2">&gt;&gt; @@ -670,6 +674,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;    # Resource managers
</span><br>
<span class="quotelev2">&gt;&gt;    return slurm_hosts()
</span><br>
<span class="quotelev2">&gt;&gt;        if slurm_job();
</span><br>
<span class="quotelev2">&gt;&gt; +    return alps_hosts()
</span><br>
<span class="quotelev2">&gt;&gt; +        if alps_job();
</span><br>
<span class="quotelev2">&gt;&gt;    return pbs_hosts()
</span><br>
<span class="quotelev2">&gt;&gt;        if pbs_job();
</span><br>
<span class="quotelev2">&gt;&gt;    return n1ge_hosts()
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1004,6 +1010,70 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +# Return &quot;1&quot; if we're running in an ALPS job; &quot;0&quot; otherwise.
</span><br>
<span class="quotelev2">&gt;&gt; +sub alps_job {
</span><br>
<span class="quotelev2">&gt;&gt; +    Debug(&quot;&amp;alps_job\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#   It is true that ALPS can be run in an interactive access mode;
</span><br>
<span class="quotelev2">&gt;&gt; however,
</span><br>
<span class="quotelev2">&gt;&gt; +#   this would not be a true managed environment.  Such only can be
</span><br>
<span class="quotelev2">&gt;&gt; +#   achieved under a batch scheduler.
</span><br>
<span class="quotelev2">&gt;&gt; +    return ((exists($ENV{BATCH_PARTITION_ID}) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +             exists($ENV{PBS_NNODES})) ? &quot;1&quot; : &quot;0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + 
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +# If in an ALPS job, return the max number of processes we can run.
</span><br>
<span class="quotelev2">&gt;&gt; +# Otherwise, return 0.
</span><br>
<span class="quotelev2">&gt;&gt; +sub alps_max_procs {
</span><br>
<span class="quotelev2">&gt;&gt; +    Debug(&quot;&amp;alps_max_procs\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return &quot;0&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +        if (!alps_job());
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#   If we were not running under PBS or some other batch system, we
</span><br>
<span class="quotelev2">&gt;&gt; would
</span><br>
<span class="quotelev2">&gt;&gt; +#   not have the foggiest idea of how many processes mpirun could
</span><br>
<span class="quotelev2">&gt;&gt; spawn.
</span><br>
<span class="quotelev2">&gt;&gt; +    my $ret;
</span><br>
<span class="quotelev2">&gt;&gt; +    $ret=$ENV{PBS_NNODES};
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    Debug(&quot;&amp;alps_max_procs returning: $ret\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +    return &quot;$ret&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + 
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +# If in an ALPS job, return the hosts we can run on.  Otherwise,  
</span><br>
<span class="quotelev2">&gt;&gt; return
</span><br>
<span class="quotelev2">&gt;&gt; +# &quot;&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; +sub alps_hosts {
</span><br>
<span class="quotelev2">&gt;&gt; +    Debug(&quot;&amp;alps_hosts\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +        if (!alps_job());
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#   Again, we need a batch system to achieve management; return the
</span><br>
<span class="quotelev2">&gt;&gt; uniq'ed
</span><br>
<span class="quotelev2">&gt;&gt; +#   contents of $PBS_HOSTFILE.  Actually, on the Cray XT, we can  
</span><br>
<span class="quotelev2">&gt;&gt; return
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; +#   NIDS allocated by ALPS; but, without launching servers to other
</span><br>
<span class="quotelev2">&gt;&gt; service
</span><br>
<span class="quotelev2">&gt;&gt; +#   nodes, all communication is via the launching node and NIDS
</span><br>
<span class="quotelev2">&gt;&gt; actually
</span><br>
<span class="quotelev2">&gt;&gt; +#   have no persistent resource allocated to the user.  That is, all
</span><br>
<span class="quotelev2">&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt; +#   resources accessible from a NID are shared with the launching  
</span><br>
<span class="quotelev2">&gt;&gt; node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#   And, since ALPS is managed by the batch system, only the  
</span><br>
<span class="quotelev2">&gt;&gt; launching
</span><br>
<span class="quotelev2">&gt;&gt; node
</span><br>
<span class="quotelev2">&gt;&gt; +#   can initiate communication with a NID.  In effect, the Cray XT
</span><br>
<span class="quotelev2">&gt;&gt; model is
</span><br>
<span class="quotelev2">&gt;&gt; +#   of a single service node with a varying number of compute
</span><br>
<span class="quotelev2">&gt;&gt; processors.
</span><br>
<span class="quotelev2">&gt;&gt; +    open (FILE, $ENV{PBS_NODEFILE}) || return &quot;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $lines;
</span><br>
<span class="quotelev2">&gt;&gt; +    while (&lt;FILE&gt;) {
</span><br>
<span class="quotelev2">&gt;&gt; +        chomp;
</span><br>
<span class="quotelev2">&gt;&gt; +        $lines-&gt;{$_} = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    my @hosts = sort(keys(%$lines));
</span><br>
<span class="quotelev2">&gt;&gt; +    my $hosts = join(&quot;,&quot;, @hosts);
</span><br>
<span class="quotelev2">&gt;&gt; +    Debug(&quot;&amp;alps_hosts returning: $hosts\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +    return &quot;$hosts&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + 
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; # Return &quot;1&quot; if we're running in a PBS job; &quot;0&quot; otherwise.
</span><br>
<span class="quotelev2">&gt;&gt; sub pbs_job {
</span><br>
<span class="quotelev2">&gt;&gt;    Debug(&quot;&amp;pbs_job\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Ken
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Previous message:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>In reply to:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Reply:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
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
