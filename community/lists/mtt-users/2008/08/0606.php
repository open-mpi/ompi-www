<?
$subject_val = "Re: [MTT users] FW: ALPS modifications for MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 10:36:08 2008" -->
<!-- isoreceived="20080814143608" -->
<!-- sent="Thu, 14 Aug 2008 10:35:58 -0400" -->
<!-- isosent="20080814143558" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] FW: ALPS modifications for MTT" -->
<!-- id="46ACFC48-8133-4761-B12D-0A0B83A1C458_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="537C6C0940C6C143AA46A88946B854170E874E27_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Date:</strong> 2008-08-14 10:35:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Previous message:</strong> <a href="0605.php">Matney Sr, Kenneth D.: "[MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>In reply to:</strong> <a href="0605.php">Matney Sr, Kenneth D.: "[MTT users] FW: ALPS modifications for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Reply:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch looks good to me.
<br>
<p>I'll commit.  If you want to do any more work on MTT, perhaps ORNL can  
<br>
add you to its &quot;Schedule A&quot; form for the Open MPI Third Party  
<br>
Contribution form (it's very easy to amend Schedule A -- doesn't  
<br>
require any authoritative signatures), we could get you an MTT SVN  
<br>
account and you could commit this stuff directly.
<br>
<p><p>On Aug 14, 2008, at 10:24 AM, Matney Sr, Kenneth D. wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running MTT on the Cray XT3/XT4 machines, I found that MTT does  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; contain any support for ALPS.  As a result, it always executes mpirun
</span><br>
<span class="quotelev1">&gt; with &quot;-np 1&quot;.  I patched lib/MTT/Values/Functions.pm with the  
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev1">&gt; to overcome this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Matney Sr, Kenneth D.
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, August 13, 2008 5:57 PM
</span><br>
<span class="quotelev1">&gt; To: Shipman, Galen M.
</span><br>
<span class="quotelev1">&gt; Cc: Graham, Richard L.
</span><br>
<span class="quotelev1">&gt; Subject: FW: ALPS modifications for MTT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- Functions-bak.pm	2008-08-06 14:31:26.256538000 -0400
</span><br>
<span class="quotelev1">&gt; +++ Functions.pm	2008-08-13 17:43:40.273641000 -0400
</span><br>
<span class="quotelev1">&gt; @@ -602,6 +602,8 @@
</span><br>
<span class="quotelev1">&gt;     # Resource managers
</span><br>
<span class="quotelev1">&gt;     return &quot;SLURM&quot;
</span><br>
<span class="quotelev1">&gt;         if slurm_job();
</span><br>
<span class="quotelev1">&gt; +    return &quot;ALPS&quot;
</span><br>
<span class="quotelev1">&gt; +        if alps_job();
</span><br>
<span class="quotelev1">&gt;     return &quot;TM&quot;
</span><br>
<span class="quotelev1">&gt;         if pbs_job();
</span><br>
<span class="quotelev1">&gt;     return &quot;N1GE&quot;
</span><br>
<span class="quotelev1">&gt; @@ -638,6 +640,8 @@
</span><br>
<span class="quotelev1">&gt;     # Resource managers
</span><br>
<span class="quotelev1">&gt;     return slurm_max_procs()
</span><br>
<span class="quotelev1">&gt;         if slurm_job();
</span><br>
<span class="quotelev1">&gt; +    return alps_max_procs()
</span><br>
<span class="quotelev1">&gt; +        if alps_job();
</span><br>
<span class="quotelev1">&gt;     return pbs_max_procs()
</span><br>
<span class="quotelev1">&gt;         if pbs_job();
</span><br>
<span class="quotelev1">&gt;     return n1ge_max_procs()
</span><br>
<span class="quotelev1">&gt; @@ -670,6 +674,8 @@
</span><br>
<span class="quotelev1">&gt;     # Resource managers
</span><br>
<span class="quotelev1">&gt;     return slurm_hosts()
</span><br>
<span class="quotelev1">&gt;         if slurm_job();
</span><br>
<span class="quotelev1">&gt; +    return alps_hosts()
</span><br>
<span class="quotelev1">&gt; +        if alps_job();
</span><br>
<span class="quotelev1">&gt;     return pbs_hosts()
</span><br>
<span class="quotelev1">&gt;         if pbs_job();
</span><br>
<span class="quotelev1">&gt;     return n1ge_hosts()
</span><br>
<span class="quotelev1">&gt; @@ -1004,6 +1010,70 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# Return &quot;1&quot; if we're running in an ALPS job; &quot;0&quot; otherwise.
</span><br>
<span class="quotelev1">&gt; +sub alps_job {
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;&amp;alps_job\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#   It is true that ALPS can be run in an interactive access mode;
</span><br>
<span class="quotelev1">&gt; however,
</span><br>
<span class="quotelev1">&gt; +#   this would not be a true managed environment.  Such only can be
</span><br>
<span class="quotelev1">&gt; +#   achieved under a batch scheduler.
</span><br>
<span class="quotelev1">&gt; +    return ((exists($ENV{BATCH_PARTITION_ID}) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +             exists($ENV{PBS_NNODES})) ? &quot;1&quot; : &quot;0&quot;);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# If in an ALPS job, return the max number of processes we can run.
</span><br>
<span class="quotelev1">&gt; +# Otherwise, return 0.
</span><br>
<span class="quotelev1">&gt; +sub alps_max_procs {
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;&amp;alps_max_procs\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return &quot;0&quot;
</span><br>
<span class="quotelev1">&gt; +        if (!alps_job());
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#   If we were not running under PBS or some other batch system, we
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev1">&gt; +#   not have the foggiest idea of how many processes mpirun could
</span><br>
<span class="quotelev1">&gt; spawn.
</span><br>
<span class="quotelev1">&gt; +    my $ret;
</span><br>
<span class="quotelev1">&gt; +    $ret=$ENV{PBS_NNODES};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;&amp;alps_max_procs returning: $ret\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    return &quot;$ret&quot;;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# If in an ALPS job, return the hosts we can run on.  Otherwise,  
</span><br>
<span class="quotelev1">&gt; return
</span><br>
<span class="quotelev1">&gt; +# &quot;&quot;.
</span><br>
<span class="quotelev1">&gt; +sub alps_hosts {
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;&amp;alps_hosts\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return &quot;&quot;
</span><br>
<span class="quotelev1">&gt; +        if (!alps_job());
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#   Again, we need a batch system to achieve management; return the
</span><br>
<span class="quotelev1">&gt; uniq'ed
</span><br>
<span class="quotelev1">&gt; +#   contents of $PBS_HOSTFILE.  Actually, on the Cray XT, we can  
</span><br>
<span class="quotelev1">&gt; return
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; +#   NIDS allocated by ALPS; but, without launching servers to other
</span><br>
<span class="quotelev1">&gt; service
</span><br>
<span class="quotelev1">&gt; +#   nodes, all communication is via the launching node and NIDS
</span><br>
<span class="quotelev1">&gt; actually
</span><br>
<span class="quotelev1">&gt; +#   have no persistent resource allocated to the user.  That is, all
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; +#   resources accessible from a NID are shared with the launching  
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#   And, since ALPS is managed by the batch system, only the  
</span><br>
<span class="quotelev1">&gt; launching
</span><br>
<span class="quotelev1">&gt; node
</span><br>
<span class="quotelev1">&gt; +#   can initiate communication with a NID.  In effect, the Cray XT
</span><br>
<span class="quotelev1">&gt; model is
</span><br>
<span class="quotelev1">&gt; +#   of a single service node with a varying number of compute
</span><br>
<span class="quotelev1">&gt; processors.
</span><br>
<span class="quotelev1">&gt; +    open (FILE, $ENV{PBS_NODEFILE}) || return &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $lines;
</span><br>
<span class="quotelev1">&gt; +    while (&lt;FILE&gt;) {
</span><br>
<span class="quotelev1">&gt; +        chomp;
</span><br>
<span class="quotelev1">&gt; +        $lines-&gt;{$_} = 1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my @hosts = sort(keys(%$lines));
</span><br>
<span class="quotelev1">&gt; +    my $hosts = join(&quot;,&quot;, @hosts);
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;&amp;alps_hosts returning: $hosts\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    return &quot;$hosts&quot;;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; # Return &quot;1&quot; if we're running in a PBS job; &quot;0&quot; otherwise.
</span><br>
<span class="quotelev1">&gt; sub pbs_job {
</span><br>
<span class="quotelev1">&gt;     Debug(&quot;&amp;pbs_job\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ken
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
<li><strong>Next message:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Previous message:</strong> <a href="0605.php">Matney Sr, Kenneth D.: "[MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>In reply to:</strong> <a href="0605.php">Matney Sr, Kenneth D.: "[MTT users] FW: ALPS modifications for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Reply:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
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
