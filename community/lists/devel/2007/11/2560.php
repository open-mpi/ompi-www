<?
$subject_val = "Re: [OMPI devel] Multiworld MCA parameter values broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 10:41:00 2007" -->
<!-- isoreceived="20071107154100" -->
<!-- sent="Wed, 07 Nov 2007 08:40:45 -0700" -->
<!-- isosent="20071107154045" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multiworld MCA parameter values broken" -->
<!-- id="C3572A8D.B4C8%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="472F6A9C.1020009_at_cs.indiana.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 10:40:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2561.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2559.php">Sharon Melamed: "[OMPI devel] carto framework requirements"</a>
<li><strong>In reply to:</strong> <a href="2547.php">Tim Prins: "[OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delay - wasn't ignoring the issue.
<br>
<p>There are several fixes to this problem - ranging in order from least to
<br>
most work:
<br>
<p>1. just alias &quot;ssh&quot; to be &quot;ssh -Y&quot; and run without setting the mca param. It
<br>
won't affect anything on the backend because the daemon/procs don't use ssh.
<br>
<p>2. include &quot;pls_rsh_agent&quot; in the array of mca params not to be passed to
<br>
the orted in orte/mca/pls/base/pls_base_general_support_fns.c, the
<br>
orte_pls_base_orted_append_basic_args function. This would fix the specific
<br>
problem cited here, but I admit that listing every such param by name would
<br>
get tedious.
<br>
<p>3. we could easily detect that a &quot;problem&quot; character was in the mca param
<br>
value when we add it to the orted's argv, and then put &quot;&quot; around it. The
<br>
problem, however, is that the mca param parser on the far end doesn't remove
<br>
those &quot;&quot; from the resulting string. At least, I spent over a day fighting
<br>
with a problem only to discover that was happening. Could be an error in the
<br>
way I was doing things, or could be a real characteristic of the parser.
<br>
Anyway, we would have to ensure that the parser removes any surrounding &quot;&quot;
<br>
before passing along the param value or this won't work.
<br>
<p>Ralph
<br>
<p><p><p>On 11/5/07 12:10 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Commit 16364 broke things when using multiword mca param values. For
</span><br>
<span class="quotelev1">&gt; instance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --debug-daemons -mca orte_debug 1 -mca pls rsh -mca pls_rsh_agent
</span><br>
<span class="quotelev1">&gt; &quot;ssh -Y&quot; xterm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will crash and burn, because the value &quot;ssh -Y&quot; is being stored into the
</span><br>
<span class="quotelev1">&gt; argv orted_cmd_line in orterun.c:1506. This is then added to the launch
</span><br>
<span class="quotelev1">&gt; command for the orted:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ssh -Y odin004  PATH=/san/homedirs/tprins/usr/rsl/bin:$PATH ;
</span><br>
<span class="quotelev1">&gt; export PATH ; 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/san/homedirs/tprins/usr/rsl/lib:$LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH ; /san/homedirs/tprins/usr/rsl/bin/orted --debug
</span><br>
<span class="quotelev1">&gt; --debug-daemons --name 0.1 --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev1">&gt; odin004 --universe tprins_at_[hidden]:default-universe-27872
</span><br>
<span class="quotelev1">&gt; --nsreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0:4090
</span><br>
<span class="quotelev1">&gt; 8&quot; 
</span><br>
<span class="quotelev1">&gt; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0:4090
</span><br>
<span class="quotelev1">&gt; 8&quot; 
</span><br>
<span class="quotelev1">&gt; -mca orte_debug 1 -mca pls_rsh_agent ssh -Y -mca
</span><br>
<span class="quotelev1">&gt; mca_base_param_file_path
</span><br>
<span class="quotelev1">&gt; /u/tprins/usr/rsl/share/openmpi/amca-param-sets:/san/homedirs/tprins/rsl/examp
</span><br>
<span class="quotelev1">&gt; les 
</span><br>
<span class="quotelev1">&gt; -mca mca_base_param_file_path_force /san/homedirs/tprins/rsl/examples
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Notice that in this command we now have &quot;-mca pls_rsh_agent ssh -Y&quot;. So
</span><br>
<span class="quotelev1">&gt; the quotes have been lost, as we die a horrible death.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we need to add the quotes back in somehow, or pass these options
</span><br>
<span class="quotelev1">&gt; differently. I'm not sure what the best way to fix this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2561.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2559.php">Sharon Melamed: "[OMPI devel] carto framework requirements"</a>
<li><strong>In reply to:</strong> <a href="2547.php">Tim Prins: "[OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
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
