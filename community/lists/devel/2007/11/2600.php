<?
$subject_val = "Re: [OMPI devel] Multiworld MCA parameter values broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 07:12:10 2007" -->
<!-- isoreceived="20071109121210" -->
<!-- sent="Fri, 9 Nov 2007 07:10:23 -0500" -->
<!-- isosent="20071109121023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multiworld MCA parameter values broken" -->
<!-- id="66292046-3FE0-43E5-A9A1-D7BE13344D7F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C358B336.B4FF%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-09 07:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2631.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2631.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should there be another option for passing MCA parameters between  
<br>
processes, such as via stdin (or any file descriptor)?  I.e., during  
<br>
the command line parsing to check for command line MCA params, perhaps  
<br>
a new argument could be introduced: -mcauri &lt;uri&gt;, where &lt;uri&gt; could  
<br>
be a few different forms:
<br>
<p>- file://stdin: (note the 2 //, not 3, so &quot;stdin&quot; would never conflict  
<br>
with a real file named /stdin)  Read the parameters in off stdin.
<br>
<p>- rml://...rml contact info...: read in the MCA params via the RML  
<br>
(although I assume that reading via the RML would be *waaaay* to late  
<br>
during the MCA setup process -- I mentioned this option for  
<br>
completeness, even though I don't think it'll work)
<br>
<p>- ip://ipaddress:port: open a socket back and read the MCA params in  
<br>
over a socket.  This could have some scalability issues...?  But who  
<br>
knows; it could be tied into the hierarchical startup such that we  
<br>
wouldn't have to have an all-to-one connection scheme.  Certainly it  
<br>
would cause scalability problems when paired with today's all-to-one  
<br>
RML connection scheme for the OOB.
<br>
<p>I'm not sure that the rml: and ip: schemes are worthwhile.  Maybe a  
<br>
file://stdin kind of approach could work?  Or perhaps some other kind  
<br>
of URI/IPC...?  (I really haven't thought through the issues -- this  
<br>
is off the top of my head)
<br>
<p><p><p>On Nov 8, 2007, at 2:36 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Might I suggest:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1073">https://svn.open-mpi.org/trac/ompi/ticket/1073</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It deals with some of these issues and explains the boundaries of the
</span><br>
<span class="quotelev1">&gt; problem. As for what a string param can contain, I have no opinion.  
</span><br>
<span class="quotelev1">&gt; I only
</span><br>
<span class="quotelev1">&gt; note that it must handle special characters such as ';', '/', etc.  
</span><br>
<span class="quotelev1">&gt; that are
</span><br>
<span class="quotelev1">&gt; typically found in uri's. I cannot think of any reason it should  
</span><br>
<span class="quotelev1">&gt; have a
</span><br>
<span class="quotelev1">&gt; quote in it.
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
<span class="quotelev1">&gt; On 11/8/07 12:25 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The alias option you presented does not work. I think we do some  
</span><br>
<span class="quotelev2">&gt;&gt; weird
</span><br>
<span class="quotelev2">&gt;&gt; things to find the absolute path for ssh, instead of just issuing the
</span><br>
<span class="quotelev2">&gt;&gt; command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would spend some time fixing this, but I don't want to do it  
</span><br>
<span class="quotelev2">&gt;&gt; wrong. We
</span><br>
<span class="quotelev2">&gt;&gt; could quote all the param values, and change the parser to remove the
</span><br>
<span class="quotelev2">&gt;&gt; quotes, but this is assuming that a mca param does not contain  
</span><br>
<span class="quotelev2">&gt;&gt; quotes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I guess there are 2 questions that need to be answered before a  
</span><br>
<span class="quotelev2">&gt;&gt; fix
</span><br>
<span class="quotelev2">&gt;&gt; is made:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. What exactly can a string mca param contain? Can it have quotes or
</span><br>
<span class="quotelev2">&gt;&gt; spaces or?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Which mca parameters should be forwarded? Should it be just the  
</span><br>
<span class="quotelev2">&gt;&gt; ones
</span><br>
<span class="quotelev2">&gt;&gt; from the command line? From the environment? From config files?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What changed is that we never passed mca params to the orted  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before - they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always went to the app, but it's the orted that has the issue.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bug ticket thread on this subject - I forget the number immediately.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basically, the problem was that we cannot generally pass the local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment to the orteds when we launch them. However, people  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; various mca params to get to the orteds to control their behavior.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way to resolve that problem was to pass the params via the command  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is what was done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Except for a very few cases, all of our mca params are single  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; values that do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not include spaces, so this is not a problem that is causing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; widespread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issues. As I said, I already had to deal with one special case  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; involve spaces, but did have special characters that required  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quoting, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; identified the larger problem of dealing with quoted strings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no objection to a more general fix. Like I said in my note,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the general fix will take a larger effort. If someone is willing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to do so,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is fine with me - I was only offering solutions that would  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fill the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interim time as I haven't heard anyone step up to say they would  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anytime soon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please feel free to jump in and volunteer! ;-) I'm willing to put  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the quotes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around things if you will fix the mca cmd line parser to cleanly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove them
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the other end.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/7/07 5:50 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm curious what changed to make this a problem. How were we  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passing mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; param
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the base to the app before, and why did it change?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think that options 1 &amp; 2 below are no good, since we, in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; general, allow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; string mca params to have spaces (as far as I understand it). So  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; general approach is needed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wednesday 07 November 2007 10:40:45 am Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry for delay - wasn't ignoring the issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are several fixes to this problem - ranging in order from  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; least to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; most work:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. just alias &quot;ssh&quot; to be &quot;ssh -Y&quot; and run without setting the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca param.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It won't affect anything on the backend because the daemon/procs  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. include &quot;pls_rsh_agent&quot; in the array of mca params not to be  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; passed to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the orted in orte/mca/pls/base/pls_base_general_support_fns.c, the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte_pls_base_orted_append_basic_args function. This would fix  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the specific
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem cited here, but I admit that listing every such param by  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; name would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; get tedious.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. we could easily detect that a &quot;problem&quot; character was in the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca param
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value when we add it to the orted's argv, and then put &quot;&quot; around  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem, however, is that the mca param parser on the far end  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; remove those &quot;&quot; from the resulting string. At least, I spent  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; over a day
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fighting with a problem only to discover that was happening.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Could be an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error in the way I was doing things, or could be a real  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; characteristic of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the parser. Anyway, we would have to ensure that the parser  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; removes any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; surrounding &quot;&quot; before passing along the param value or this  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; won't work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 11/5/07 12:10 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Commit 16364 broke things when using multiword mca param  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; values. For
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; instance:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun --debug-daemons -mca orte_debug 1 -mca pls rsh -mca  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pls_rsh_agent
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;ssh -Y&quot; xterm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Will crash and burn, because the value &quot;ssh -Y&quot; is being stored  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; into the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; argv orted_cmd_line in orterun.c:1506. This is then added to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the launch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; command for the orted:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/ssh -Y odin004  PATH=/san/homedirs/tprins/usr/rsl/bin: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $PATH ;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export PATH ;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/san/homedirs/tprins/usr/rsl/lib: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH ; /san/homedirs/tprins/usr/rsl/bin/orted  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --debug
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --debug-daemons --name 0.1 --num_procs 2 --vpid_start 0 -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodename
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; odin004 --universe tprins_at_[hidden]:default- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; universe-27872
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --nsreplica
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;0.0;tcp:// 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; :4090 8&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --gprreplica
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;0.0;tcp:// 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; :4090 8&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca orte_debug 1 -mca pls_rsh_agent ssh -Y -mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_base_param_file_path
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/tprins/usr/rsl/share/openmpi/amca-param-sets:/san/homedirs/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tprins/rsl/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; examp les
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca mca_base_param_file_path_force /san/homedirs/tprins/rsl/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; examples
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Notice that in this command we now have &quot;-mca pls_rsh_agent ssh  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Y&quot;. So
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the quotes have been lost, as we die a horrible death.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So we need to add the quotes back in somehow, or pass these  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; options
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; differently. I'm not sure what the best way to fix this.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2631.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2631.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
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
