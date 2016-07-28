<?
$subject_val = "Re: [OMPI devel] Multiworld MCA parameter values broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 19:51:03 2007" -->
<!-- isoreceived="20071108005103" -->
<!-- sent="Wed, 7 Nov 2007 20:50:48 -0400" -->
<!-- isosent="20071108005048" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multiworld MCA parameter values broken" -->
<!-- id="200711071950.48464.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C3572A8D.B4C8%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 19:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2568.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>In reply to:</strong> <a href="2560.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm curious what changed to make this a problem. How were we passing mca param 
<br>
from the base to the app before, and why did it change?
<br>
<p>I think that options 1 &amp; 2 below are no good, since we, in general, allow 
<br>
string mca params to have spaces (as far as I understand it). So a more 
<br>
general approach is needed. 
<br>
<p>Tim
<br>
<p>On Wednesday 07 November 2007 10:40:45 am Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Sorry for delay - wasn't ignoring the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are several fixes to this problem - ranging in order from least to
</span><br>
<span class="quotelev1">&gt; most work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. just alias &quot;ssh&quot; to be &quot;ssh -Y&quot; and run without setting the mca param.
</span><br>
<span class="quotelev1">&gt; It won't affect anything on the backend because the daemon/procs don't use
</span><br>
<span class="quotelev1">&gt; ssh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. include &quot;pls_rsh_agent&quot; in the array of mca params not to be passed to
</span><br>
<span class="quotelev1">&gt; the orted in orte/mca/pls/base/pls_base_general_support_fns.c, the
</span><br>
<span class="quotelev1">&gt; orte_pls_base_orted_append_basic_args function. This would fix the specific
</span><br>
<span class="quotelev1">&gt; problem cited here, but I admit that listing every such param by name would
</span><br>
<span class="quotelev1">&gt; get tedious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. we could easily detect that a &quot;problem&quot; character was in the mca param
</span><br>
<span class="quotelev1">&gt; value when we add it to the orted's argv, and then put &quot;&quot; around it. The
</span><br>
<span class="quotelev1">&gt; problem, however, is that the mca param parser on the far end doesn't
</span><br>
<span class="quotelev1">&gt; remove those &quot;&quot; from the resulting string. At least, I spent over a day
</span><br>
<span class="quotelev1">&gt; fighting with a problem only to discover that was happening. Could be an
</span><br>
<span class="quotelev1">&gt; error in the way I was doing things, or could be a real characteristic of
</span><br>
<span class="quotelev1">&gt; the parser. Anyway, we would have to ensure that the parser removes any
</span><br>
<span class="quotelev1">&gt; surrounding &quot;&quot; before passing along the param value or this won't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/5/07 12:10 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Commit 16364 broke things when using multiword mca param values. For
</span><br>
<span class="quotelev2">&gt; &gt; instance:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --debug-daemons -mca orte_debug 1 -mca pls rsh -mca pls_rsh_agent
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ssh -Y&quot; xterm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Will crash and burn, because the value &quot;ssh -Y&quot; is being stored into the
</span><br>
<span class="quotelev2">&gt; &gt; argv orted_cmd_line in orterun.c:1506. This is then added to the launch
</span><br>
<span class="quotelev2">&gt; &gt; command for the orted:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ssh -Y odin004  PATH=/san/homedirs/tprins/usr/rsl/bin:$PATH ;
</span><br>
<span class="quotelev2">&gt; &gt; export PATH ;
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=/san/homedirs/tprins/usr/rsl/lib:$LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH ; /san/homedirs/tprins/usr/rsl/bin/orted --debug
</span><br>
<span class="quotelev2">&gt; &gt; --debug-daemons --name 0.1 --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev2">&gt; &gt; odin004 --universe tprins_at_[hidden]:default-universe-27872
</span><br>
<span class="quotelev2">&gt; &gt; --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0
</span><br>
<span class="quotelev2">&gt; &gt;:4090 8&quot;
</span><br>
<span class="quotelev2">&gt; &gt; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0
</span><br>
<span class="quotelev2">&gt; &gt;:4090 8&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -mca orte_debug 1 -mca pls_rsh_agent ssh -Y -mca
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_file_path
</span><br>
<span class="quotelev2">&gt; &gt; /u/tprins/usr/rsl/share/openmpi/amca-param-sets:/san/homedirs/tprins/rsl/
</span><br>
<span class="quotelev2">&gt; &gt;examp les
</span><br>
<span class="quotelev2">&gt; &gt; -mca mca_base_param_file_path_force /san/homedirs/tprins/rsl/examples
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Notice that in this command we now have &quot;-mca pls_rsh_agent ssh -Y&quot;. So
</span><br>
<span class="quotelev2">&gt; &gt; the quotes have been lost, as we die a horrible death.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So we need to add the quotes back in somehow, or pass these options
</span><br>
<span class="quotelev2">&gt; &gt; differently. I'm not sure what the best way to fix this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2568.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>In reply to:</strong> <a href="2560.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
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
