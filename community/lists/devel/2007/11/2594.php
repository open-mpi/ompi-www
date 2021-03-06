<?
$subject_val = "Re: [OMPI devel] Multiworld MCA parameter values broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 14:24:53 2007" -->
<!-- isoreceived="20071108192453" -->
<!-- sent="Thu, 08 Nov 2007 14:25:01 -0500" -->
<!-- isosent="20071108192501" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multiworld MCA parameter values broken" -->
<!-- id="4733628D.5090705_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C357B782.3F59%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multiworld MCA parameter values broken<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 14:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>In reply to:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The alias option you presented does not work. I think we do some weird 
<br>
things to find the absolute path for ssh, instead of just issuing the 
<br>
command.
<br>
<p>I would spend some time fixing this, but I don't want to do it wrong. We 
<br>
could quote all the param values, and change the parser to remove the 
<br>
quotes, but this is assuming that a mca param does not contain quotes.
<br>
<p>So I guess there are 2 questions that need to be answered before a fix 
<br>
is made:
<br>
<p>1. What exactly can a string mca param contain? Can it have quotes or 
<br>
spaces or?
<br>
<p>2. Which mca parameters should be forwarded? Should it be just the ones 
<br>
from the command line? From the environment? From config files?
<br>
<p>Tim
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; What changed is that we never passed mca params to the orted before - they
</span><br>
<span class="quotelev1">&gt; always went to the app, but it's the orted that has the issue. There is a
</span><br>
<span class="quotelev1">&gt; bug ticket thread on this subject - I forget the number immediately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically, the problem was that we cannot generally pass the local
</span><br>
<span class="quotelev1">&gt; environment to the orteds when we launch them. However, people needed
</span><br>
<span class="quotelev1">&gt; various mca params to get to the orteds to control their behavior. The only
</span><br>
<span class="quotelev1">&gt; way to resolve that problem was to pass the params via the command line,
</span><br>
<span class="quotelev1">&gt; which is what was done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Except for a very few cases, all of our mca params are single values that do
</span><br>
<span class="quotelev1">&gt; not include spaces, so this is not a problem that is causing widespread
</span><br>
<span class="quotelev1">&gt; issues. As I said, I already had to deal with one special case that didn't
</span><br>
<span class="quotelev1">&gt; involve spaces, but did have special characters that required quoting, which
</span><br>
<span class="quotelev1">&gt; identified the larger problem of dealing with quoted strings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no objection to a more general fix. Like I said in my note, though,
</span><br>
<span class="quotelev1">&gt; the general fix will take a larger effort. If someone is willing to do so,
</span><br>
<span class="quotelev1">&gt; that is fine with me - I was only offering solutions that would fill the
</span><br>
<span class="quotelev1">&gt; interim time as I haven't heard anyone step up to say they would fix it
</span><br>
<span class="quotelev1">&gt; anytime soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please feel free to jump in and volunteer! ;-) I'm willing to put the quotes
</span><br>
<span class="quotelev1">&gt; around things if you will fix the mca cmd line parser to cleanly remove them
</span><br>
<span class="quotelev1">&gt; on the other end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/7/07 5:50 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm curious what changed to make this a problem. How were we passing mca param
</span><br>
<span class="quotelev2">&gt;&gt; from the base to the app before, and why did it change?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that options 1 &amp; 2 below are no good, since we, in general, allow
</span><br>
<span class="quotelev2">&gt;&gt; string mca params to have spaces (as far as I understand it). So a more
</span><br>
<span class="quotelev2">&gt;&gt; general approach is needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 07 November 2007 10:40:45 am Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for delay - wasn't ignoring the issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are several fixes to this problem - ranging in order from least to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; most work:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. just alias &quot;ssh&quot; to be &quot;ssh -Y&quot; and run without setting the mca param.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It won't affect anything on the backend because the daemon/procs don't use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. include &quot;pls_rsh_agent&quot; in the array of mca params not to be passed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the orted in orte/mca/pls/base/pls_base_general_support_fns.c, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_pls_base_orted_append_basic_args function. This would fix the specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem cited here, but I admit that listing every such param by name would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get tedious.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. we could easily detect that a &quot;problem&quot; character was in the mca param
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value when we add it to the orted's argv, and then put &quot;&quot; around it. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem, however, is that the mca param parser on the far end doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove those &quot;&quot; from the resulting string. At least, I spent over a day
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fighting with a problem only to discover that was happening. Could be an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error in the way I was doing things, or could be a real characteristic of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the parser. Anyway, we would have to ensure that the parser removes any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; surrounding &quot;&quot; before passing along the param value or this won't work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/5/07 12:10 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Commit 16364 broke things when using multiword mca param values. For
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instance:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --debug-daemons -mca orte_debug 1 -mca pls rsh -mca pls_rsh_agent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;ssh -Y&quot; xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Will crash and burn, because the value &quot;ssh -Y&quot; is being stored into the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argv orted_cmd_line in orterun.c:1506. This is then added to the launch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command for the orted:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/ssh -Y odin004  PATH=/san/homedirs/tprins/usr/rsl/bin:$PATH ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export PATH ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/san/homedirs/tprins/usr/rsl/lib:$LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH ; /san/homedirs/tprins/usr/rsl/bin/orted --debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --debug-daemons --name 0.1 --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; odin004 --universe tprins_at_[hidden]:default-universe-27872
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --nsreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; :4090 8&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --gprreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; :4090 8&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca orte_debug 1 -mca pls_rsh_agent ssh -Y -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_param_file_path
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /u/tprins/usr/rsl/share/openmpi/amca-param-sets:/san/homedirs/tprins/rsl/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; examp les
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca mca_base_param_file_path_force /san/homedirs/tprins/rsl/examples
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Notice that in this command we now have &quot;-mca pls_rsh_agent ssh -Y&quot;. So
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the quotes have been lost, as we die a horrible death.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So we need to add the quotes back in somehow, or pass these options
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; differently. I'm not sure what the best way to fix this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>In reply to:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
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
