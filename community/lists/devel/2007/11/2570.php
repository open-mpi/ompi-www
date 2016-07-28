<?
$subject_val = "Re: [OMPI devel] Multiworld MCA parameter values broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 20:42:18 2007" -->
<!-- isoreceived="20071108014218" -->
<!-- sent="Wed, 07 Nov 2007 18:42:10 -0700" -->
<!-- isosent="20071108014210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multiworld MCA parameter values broken" -->
<!-- id="C357B782.3F59%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200711071950.48464.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 20:42:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2571.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2594.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2594.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What changed is that we never passed mca params to the orted before - they
<br>
always went to the app, but it's the orted that has the issue. There is a
<br>
bug ticket thread on this subject - I forget the number immediately.
<br>
<p>Basically, the problem was that we cannot generally pass the local
<br>
environment to the orteds when we launch them. However, people needed
<br>
various mca params to get to the orteds to control their behavior. The only
<br>
way to resolve that problem was to pass the params via the command line,
<br>
which is what was done.
<br>
<p>Except for a very few cases, all of our mca params are single values that do
<br>
not include spaces, so this is not a problem that is causing widespread
<br>
issues. As I said, I already had to deal with one special case that didn't
<br>
involve spaces, but did have special characters that required quoting, which
<br>
identified the larger problem of dealing with quoted strings.
<br>
<p>I have no objection to a more general fix. Like I said in my note, though,
<br>
the general fix will take a larger effort. If someone is willing to do so,
<br>
that is fine with me - I was only offering solutions that would fill the
<br>
interim time as I haven't heard anyone step up to say they would fix it
<br>
anytime soon.
<br>
<p>Please feel free to jump in and volunteer! ;-) I'm willing to put the quotes
<br>
around things if you will fix the mca cmd line parser to cleanly remove them
<br>
on the other end.
<br>
<p>Ralph
<br>
<p><p><p>On 11/7/07 5:50 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm curious what changed to make this a problem. How were we passing mca param
</span><br>
<span class="quotelev1">&gt; from the base to the app before, and why did it change?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that options 1 &amp; 2 below are no good, since we, in general, allow
</span><br>
<span class="quotelev1">&gt; string mca params to have spaces (as far as I understand it). So a more
</span><br>
<span class="quotelev1">&gt; general approach is needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday 07 November 2007 10:40:45 am Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for delay - wasn't ignoring the issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are several fixes to this problem - ranging in order from least to
</span><br>
<span class="quotelev2">&gt;&gt; most work:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. just alias &quot;ssh&quot; to be &quot;ssh -Y&quot; and run without setting the mca param.
</span><br>
<span class="quotelev2">&gt;&gt; It won't affect anything on the backend because the daemon/procs don't use
</span><br>
<span class="quotelev2">&gt;&gt; ssh.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. include &quot;pls_rsh_agent&quot; in the array of mca params not to be passed to
</span><br>
<span class="quotelev2">&gt;&gt; the orted in orte/mca/pls/base/pls_base_general_support_fns.c, the
</span><br>
<span class="quotelev2">&gt;&gt; orte_pls_base_orted_append_basic_args function. This would fix the specific
</span><br>
<span class="quotelev2">&gt;&gt; problem cited here, but I admit that listing every such param by name would
</span><br>
<span class="quotelev2">&gt;&gt; get tedious.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. we could easily detect that a &quot;problem&quot; character was in the mca param
</span><br>
<span class="quotelev2">&gt;&gt; value when we add it to the orted's argv, and then put &quot;&quot; around it. The
</span><br>
<span class="quotelev2">&gt;&gt; problem, however, is that the mca param parser on the far end doesn't
</span><br>
<span class="quotelev2">&gt;&gt; remove those &quot;&quot; from the resulting string. At least, I spent over a day
</span><br>
<span class="quotelev2">&gt;&gt; fighting with a problem only to discover that was happening. Could be an
</span><br>
<span class="quotelev2">&gt;&gt; error in the way I was doing things, or could be a real characteristic of
</span><br>
<span class="quotelev2">&gt;&gt; the parser. Anyway, we would have to ensure that the parser removes any
</span><br>
<span class="quotelev2">&gt;&gt; surrounding &quot;&quot; before passing along the param value or this won't work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/5/07 12:10 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Commit 16364 broke things when using multiword mca param values. For
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instance:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --debug-daemons -mca orte_debug 1 -mca pls rsh -mca pls_rsh_agent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;ssh -Y&quot; xterm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will crash and burn, because the value &quot;ssh -Y&quot; is being stored into the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argv orted_cmd_line in orterun.c:1506. This is then added to the launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command for the orted:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ssh -Y odin004  PATH=/san/homedirs/tprins/usr/rsl/bin:$PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/san/homedirs/tprins/usr/rsl/lib:$LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH ; /san/homedirs/tprins/usr/rsl/bin/orted --debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --debug-daemons --name 0.1 --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odin004 --universe tprins_at_[hidden]:default-universe-27872
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --nsreplica
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :4090 8&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --gprreplica
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :4090 8&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca orte_debug 1 -mca pls_rsh_agent ssh -Y -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_param_file_path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/tprins/usr/rsl/share/openmpi/amca-param-sets:/san/homedirs/tprins/rsl/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; examp les
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca mca_base_param_file_path_force /san/homedirs/tprins/rsl/examples
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Notice that in this command we now have &quot;-mca pls_rsh_agent ssh -Y&quot;. So
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the quotes have been lost, as we die a horrible death.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we need to add the quotes back in somehow, or pass these options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; differently. I'm not sure what the best way to fix this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2571.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2594.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2594.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
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
