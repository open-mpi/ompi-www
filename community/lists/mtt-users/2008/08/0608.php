<?
$subject_val = "Re: [MTT users] FW: ALPS modifications for MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 10:38:38 2008" -->
<!-- isoreceived="20080820143838" -->
<!-- sent="Wed, 20 Aug 2008 10:38:22 -0400" -->
<!-- isosent="20080820143822" -->
<!-- name="Matney Sr, Kenneth D." -->
<!-- email="matneykdsr_at_[hidden]" -->
<!-- subject="Re: [MTT users] FW: ALPS modifications for MTT" -->
<!-- id="537C6C0940C6C143AA46A88946B854170E996F7B_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DE858BC4-1526-421B-A33C-6C72C1C1F955_at_cisco.com" -->
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
<strong>From:</strong> Matney Sr, Kenneth D. (<em>matneykdsr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-20 10:38:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>In reply to:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Reply:</strong> <a href="0609.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>The trunk needs an additional patch to make ALPS work (without
<br>
complaints).  I have attached it hereto.  Also, I will send along the
<br>
ornl.ini script when I get it finalized.  This wlll show how we do Cray
<br>
XT builds, run, etc.
<br>
<pre>
-- 
Ken
-----Original Message-----
From: mtt-users-bounces_at_[hidden]
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
Sent: Thursday, August 14, 2008 10:47 AM
To: General user list for the MPI Testing Tool
Subject: Re: [MTT users] FW: ALPS modifications for MTT
BTW, I committed this patch to the MTT trunk.
I feel a little sheepish; I should have told you to use the trunk  
these days, not the release branch (I know the wiki specifically says  
otherwise).  We really need to finally make a release out of what is  
on the trunk -- it's much more advanced than what is on the release  
branch (look at the CHANGES file in the top-level dir to see what has  
changed since the release branch).
The Cisco MTT files in SVN are for the trunk; it's possible that the  
features that the release branch doesn't understand will just be  
ignored, but I haven't tried this in a long time.
On Aug 14, 2008, at 10:35 AM, Jeff Squyres wrote:
&gt; This patch looks good to me.
&gt;
&gt; I'll commit.  If you want to do any more work on MTT, perhaps ORNL  
&gt; can add you to its &quot;Schedule A&quot; form for the Open MPI Third Party  
&gt; Contribution form (it's very easy to amend Schedule A -- doesn't  
&gt; require any authoritative signatures), we could get you an MTT SVN  
&gt; account and you could commit this stuff directly.
&gt;
&gt;
&gt; On Aug 14, 2008, at 10:24 AM, Matney Sr, Kenneth D. wrote:
&gt;
&gt;&gt; Hi,
&gt;&gt;
&gt;&gt; When running MTT on the Cray XT3/XT4 machines, I found that MTT  
&gt;&gt; does not
&gt;&gt; contain any support for ALPS.  As a result, it always executes mpirun
&gt;&gt; with &quot;-np 1&quot;.  I patched lib/MTT/Values/Functions.pm with the  
&gt;&gt; following
&gt;&gt; to overcome this:
&gt;&gt;
&gt;&gt; -----Original Message-----
&gt;&gt; From: Matney Sr, Kenneth D.
&gt;&gt; Sent: Wednesday, August 13, 2008 5:57 PM
&gt;&gt; To: Shipman, Galen M.
&gt;&gt; Cc: Graham, Richard L.
&gt;&gt; Subject: FW: ALPS modifications for MTT
&gt;&gt;
&gt;&gt; --- Functions-bak.pm	2008-08-06 14:31:26.256538000 -0400
&gt;&gt; +++ Functions.pm	2008-08-13 17:43:40.273641000 -0400
&gt;&gt; @@ -602,6 +602,8 @@
&gt;&gt;    # Resource managers
&gt;&gt;    return &quot;SLURM&quot;
&gt;&gt;        if slurm_job();
&gt;&gt; +    return &quot;ALPS&quot;
&gt;&gt; +        if alps_job();
&gt;&gt;    return &quot;TM&quot;
&gt;&gt;        if pbs_job();
&gt;&gt;    return &quot;N1GE&quot;
&gt;&gt; @@ -638,6 +640,8 @@
&gt;&gt;    # Resource managers
&gt;&gt;    return slurm_max_procs()
&gt;&gt;        if slurm_job();
&gt;&gt; +    return alps_max_procs()
&gt;&gt; +        if alps_job();
&gt;&gt;    return pbs_max_procs()
&gt;&gt;        if pbs_job();
&gt;&gt;    return n1ge_max_procs()
&gt;&gt; @@ -670,6 +674,8 @@
&gt;&gt;    # Resource managers
&gt;&gt;    return slurm_hosts()
&gt;&gt;        if slurm_job();
&gt;&gt; +    return alps_hosts()
&gt;&gt; +        if alps_job();
&gt;&gt;    return pbs_hosts()
&gt;&gt;        if pbs_job();
&gt;&gt;    return n1ge_hosts()
&gt;&gt; @@ -1004,6 +1010,70 @@
&gt;&gt;
&gt;&gt;
&gt;&gt;
#-----------------------------------------------------------------------
&gt;&gt; ---
&gt;&gt;
&gt;&gt; +# Return &quot;1&quot; if we're running in an ALPS job; &quot;0&quot; otherwise.
&gt;&gt; +sub alps_job {
&gt;&gt; +    Debug(&quot;&amp;alps_job\n&quot;);
&gt;&gt; +
&gt;&gt; +#   It is true that ALPS can be run in an interactive access mode;
&gt;&gt; however,
&gt;&gt; +#   this would not be a true managed environment.  Such only can be
&gt;&gt; +#   achieved under a batch scheduler.
&gt;&gt; +    return ((exists($ENV{BATCH_PARTITION_ID}) &amp;&amp;
&gt;&gt; +             exists($ENV{PBS_NNODES})) ? &quot;1&quot; : &quot;0&quot;);
&gt;&gt; +}
&gt;&gt; +
&gt;&gt; + 
&gt;&gt;
#----------------------------------------------------------------------
&gt;&gt; ----
&gt;&gt; +
&gt;&gt; +# If in an ALPS job, return the max number of processes we can run.
&gt;&gt; +# Otherwise, return 0.
&gt;&gt; +sub alps_max_procs {
&gt;&gt; +    Debug(&quot;&amp;alps_max_procs\n&quot;);
&gt;&gt; +
&gt;&gt; +    return &quot;0&quot;
&gt;&gt; +        if (!alps_job());
&gt;&gt; +
&gt;&gt; +#   If we were not running under PBS or some other batch system, we
&gt;&gt; would
&gt;&gt; +#   not have the foggiest idea of how many processes mpirun could
&gt;&gt; spawn.
&gt;&gt; +    my $ret;
&gt;&gt; +    $ret=$ENV{PBS_NNODES};
&gt;&gt; +
&gt;&gt; +    Debug(&quot;&amp;alps_max_procs returning: $ret\n&quot;);
&gt;&gt; +    return &quot;$ret&quot;;
&gt;&gt; +}
&gt;&gt; +
&gt;&gt; + 
&gt;&gt;
#----------------------------------------------------------------------
&gt;&gt; ----
&gt;&gt; +
&gt;&gt; +# If in an ALPS job, return the hosts we can run on.  Otherwise,  
&gt;&gt; return
&gt;&gt; +# &quot;&quot;.
&gt;&gt; +sub alps_hosts {
&gt;&gt; +    Debug(&quot;&amp;alps_hosts\n&quot;);
&gt;&gt; +
&gt;&gt; +    return &quot;&quot;
&gt;&gt; +        if (!alps_job());
&gt;&gt; +
&gt;&gt; +#   Again, we need a batch system to achieve management; return the
&gt;&gt; uniq'ed
&gt;&gt; +#   contents of $PBS_HOSTFILE.  Actually, on the Cray XT, we can  
&gt;&gt; return
&gt;&gt; the
&gt;&gt; +#   NIDS allocated by ALPS; but, without launching servers to other
&gt;&gt; service
&gt;&gt; +#   nodes, all communication is via the launching node and NIDS
&gt;&gt; actually
&gt;&gt; +#   have no persistent resource allocated to the user.  That is, all
&gt;&gt; file
&gt;&gt; +#   resources accessible from a NID are shared with the launching  
&gt;&gt; node.
&gt;&gt;
&gt;&gt; +#   And, since ALPS is managed by the batch system, only the  
&gt;&gt; launching
&gt;&gt; node
&gt;&gt; +#   can initiate communication with a NID.  In effect, the Cray XT
&gt;&gt; model is
&gt;&gt; +#   of a single service node with a varying number of compute
&gt;&gt; processors.
&gt;&gt; +    open (FILE, $ENV{PBS_NODEFILE}) || return &quot;&quot;;
&gt;&gt; +    my $lines;
&gt;&gt; +    while (&lt;FILE&gt;) {
&gt;&gt; +        chomp;
&gt;&gt; +        $lines-&gt;{$_} = 1;
&gt;&gt; +    }
&gt;&gt; +
&gt;&gt; +    my @hosts = sort(keys(%$lines));
&gt;&gt; +    my $hosts = join(&quot;,&quot;, @hosts);
&gt;&gt; +    Debug(&quot;&amp;alps_hosts returning: $hosts\n&quot;);
&gt;&gt; +    return &quot;$hosts&quot;;
&gt;&gt; +}
&gt;&gt; +
&gt;&gt; + 
&gt;&gt;
#----------------------------------------------------------------------
&gt;&gt; ----
&gt;&gt; +
&gt;&gt; # Return &quot;1&quot; if we're running in a PBS job; &quot;0&quot; otherwise.
&gt;&gt; sub pbs_job {
&gt;&gt;    Debug(&quot;&amp;pbs_job\n&quot;);
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Ken
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; mtt-users mailing list
&gt;&gt; mtt-users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
&gt;
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; Cisco Systems
&gt;
&gt; _______________________________________________
&gt; mtt-users mailing list
&gt; mtt-users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
mtt-users mailing list
mtt-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0608/kmymtt2.patch">kmymtt2.patch</a>
</ul>
<!-- attachment="kmymtt2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>In reply to:</strong> <a href="0607.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Reply:</strong> <a href="0609.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
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
