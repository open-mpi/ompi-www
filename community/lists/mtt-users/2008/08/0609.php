<?
$subject_val = "Re: [MTT users] FW: ALPS modifications for MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 19:49:13 2008" -->
<!-- isoreceived="20080825234913" -->
<!-- sent="Mon, 25 Aug 2008 19:49:06 -0400" -->
<!-- isosent="20080825234906" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] FW: ALPS modifications for MTT" -->
<!-- id="3A344082-2F94-43F1-A5C6-D80E0317A991_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="537C6C0940C6C143AA46A88946B854170E996F7B_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Date:</strong> 2008-08-25 19:49:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/09/0610.php">Tim Mattox: "[MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed in r1222.
<br>
<p>If you want a directory in ompi-tests/ to save your ornl scripts and  
<br>
ini files (perhaps analogous to ompi-tests/cisco and ompi-tests/iu),  
<br>
let us know.
<br>
<p><p>On Aug 20, 2008, at 10:38 AM, Matney Sr, Kenneth D. wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The trunk needs an additional patch to make ALPS work (without
</span><br>
<span class="quotelev1">&gt; complaints).  I have attached it hereto.  Also, I will send along the
</span><br>
<span class="quotelev1">&gt; ornl.ini script when I get it finalized.  This wlll show how we do  
</span><br>
<span class="quotelev1">&gt; Cray
</span><br>
<span class="quotelev1">&gt; XT builds, run, etc.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, August 14, 2008 10:47 AM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] FW: ALPS modifications for MTT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I committed this patch to the MTT trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I feel a little sheepish; I should have told you to use the trunk
</span><br>
<span class="quotelev1">&gt; these days, not the release branch (I know the wiki specifically says
</span><br>
<span class="quotelev1">&gt; otherwise).  We really need to finally make a release out of what is
</span><br>
<span class="quotelev1">&gt; on the trunk -- it's much more advanced than what is on the release
</span><br>
<span class="quotelev1">&gt; branch (look at the CHANGES file in the top-level dir to see what has
</span><br>
<span class="quotelev1">&gt; changed since the release branch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Cisco MTT files in SVN are for the trunk; it's possible that the
</span><br>
<span class="quotelev1">&gt; features that the release branch doesn't understand will just be
</span><br>
<span class="quotelev1">&gt; ignored, but I haven't tried this in a long time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 14, 2008, at 10:35 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This patch looks good to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll commit.  If you want to do any more work on MTT, perhaps ORNL
</span><br>
<span class="quotelev2">&gt;&gt; can add you to its &quot;Schedule A&quot; form for the Open MPI Third Party
</span><br>
<span class="quotelev2">&gt;&gt; Contribution form (it's very easy to amend Schedule A -- doesn't
</span><br>
<span class="quotelev2">&gt;&gt; require any authoritative signatures), we could get you an MTT SVN
</span><br>
<span class="quotelev2">&gt;&gt; account and you could commit this stuff directly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 14, 2008, at 10:24 AM, Matney Sr, Kenneth D. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When running MTT on the Cray XT3/XT4 machines, I found that MTT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contain any support for ALPS.  As a result, it always executes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with &quot;-np 1&quot;.  I patched lib/MTT/Values/Functions.pm with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to overcome this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Matney Sr, Kenneth D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, August 13, 2008 5:57 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Shipman, Galen M.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: Graham, Richard L.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: FW: ALPS modifications for MTT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- Functions-bak.pm	2008-08-06 14:31:26.256538000 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ Functions.pm	2008-08-13 17:43:40.273641000 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -602,6 +602,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   # Resource managers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return &quot;SLURM&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if slurm_job();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return &quot;ALPS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if alps_job();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return &quot;TM&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if pbs_job();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return &quot;N1GE&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -638,6 +640,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   # Resource managers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return slurm_max_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if slurm_job();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return alps_max_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if alps_job();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return pbs_max_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if pbs_job();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return n1ge_max_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -670,6 +674,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   # Resource managers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return slurm_hosts()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if slurm_job();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return alps_hosts()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if alps_job();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return pbs_hosts()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if pbs_job();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return n1ge_hosts()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1004,6 +1010,70 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; #-----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Return &quot;1&quot; if we're running in an ALPS job; &quot;0&quot; otherwise.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +sub alps_job {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    Debug(&quot;&amp;alps_job\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   It is true that ALPS can be run in an interactive access mode;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   this would not be a true managed environment.  Such only can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   achieved under a batch scheduler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return ((exists($ENV{BATCH_PARTITION_ID}) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +             exists($ENV{PBS_NNODES})) ? &quot;1&quot; : &quot;0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# If in an ALPS job, return the max number of processes we can run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Otherwise, return 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +sub alps_max_procs {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    Debug(&quot;&amp;alps_max_procs\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return &quot;0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (!alps_job());
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   If we were not running under PBS or some other batch system, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   not have the foggiest idea of how many processes mpirun could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    my $ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    $ret=$ENV{PBS_NNODES};
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    Debug(&quot;&amp;alps_max_procs returning: $ret\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return &quot;$ret&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# If in an ALPS job, return the hosts we can run on.  Otherwise,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# &quot;&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +sub alps_hosts {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    Debug(&quot;&amp;alps_hosts\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return &quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (!alps_job());
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   Again, we need a batch system to achieve management; return the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uniq'ed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   contents of $PBS_HOSTFILE.  Actually, on the Cray XT, we can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   NIDS allocated by ALPS; but, without launching servers to other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; service
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   nodes, all communication is via the launching node and NIDS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   have no persistent resource allocated to the user.  That is,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   resources accessible from a NID are shared with the launching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   And, since ALPS is managed by the batch system, only the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   can initiate communication with a NID.  In effect, the Cray XT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#   of a single service node with a varying number of compute
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    open (FILE, $ENV{PBS_NODEFILE}) || return &quot;&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    my $lines;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    while (&lt;FILE&gt;) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        chomp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        $lines-&gt;{$_} = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    my @hosts = sort(keys(%$lines));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    my $hosts = join(&quot;,&quot;, @hosts);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    Debug(&quot;&amp;alps_hosts returning: $hosts\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return &quot;$hosts&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Return &quot;1&quot; if we're running in a PBS job; &quot;0&quot; otherwise.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sub pbs_job {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Debug(&quot;&amp;pbs_job\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ken
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; &lt;kmymtt2.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/09/0610.php">Tim Mattox: "[MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Matney Sr, Kenneth D.: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
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
