<?
$subject_val = "Re: [OMPI users] mpi problems/many cpus per node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 11:29:09 2012" -->
<!-- isoreceived="20121217162909" -->
<!-- sent="Mon, 17 Dec 2012 10:28:55 -0600" -->
<!-- isosent="20121217162855" -->
<!-- name="Daniel Davidson" -->
<!-- email="danield_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems/many cpus per node" -->
<!-- id="50CF4847.1000506_at_igb.uiuc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50CF2CD8.4000402_at_igb.uiuc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems/many cpus per node<br>
<strong>From:</strong> Daniel Davidson (<em>danield_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-17 11:28:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20973.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20971.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>In reply to:</strong> <a href="20969.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20973.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20973.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks to be having issues as well, and I cannot get any number of 
<br>
processors to give me a different result with the new version.
<br>
<p>[root_at_compute-2-1 /]# /home/apps/openmpi-1.7rc5/bin/mpirun -host 
<br>
compute-2-0,compute-2-1 -v  -np 50 --leave-session-attached -mca 
<br>
odls_base_verbose 5 hostname
<br>
[compute-2-1.local:69417] mca:base:select:( odls) Querying component 
<br>
[default]
<br>
[compute-2-1.local:69417] mca:base:select:( odls) Query of component 
<br>
[default] set priority to 1
<br>
[compute-2-1.local:69417] mca:base:select:( odls) Selected component 
<br>
[default]
<br>
[compute-2-0.local:24486] mca:base:select:( odls) Querying component 
<br>
[default]
<br>
[compute-2-0.local:24486] mca:base:select:( odls) Query of component 
<br>
[default] set priority to 1
<br>
[compute-2-0.local:24486] mca:base:select:( odls) Selected component 
<br>
[default]
<br>
[compute-2-0.local:24486] [[24939,0],1] odls:kill_local_proc working on 
<br>
WILDCARD
<br>
[compute-2-0.local:24486] [[24939,0],1] odls:kill_local_proc working on 
<br>
WILDCARD
<br>
[compute-2-0.local:24486] [[24939,0],1] odls:kill_local_proc working on 
<br>
WILDCARD
<br>
[compute-2-1.local:69417] [[24939,0],0] odls:kill_local_proc working on 
<br>
WILDCARD
<br>
[compute-2-1.local:69417] [[24939,0],0] odls:kill_local_proc working on 
<br>
WILDCARD
<br>
<p>However from the head node:
<br>
<p>[root_at_biocluster openmpi-1.7rc5]# /home/apps/openmpi-1.7rc5/bin/mpirun 
<br>
-host compute-2-0,compute-2-1 -v  -np 50  hostname
<br>
<p>Displays 25 hostnames from each system.
<br>
<p>Thank you again for the help so far,
<br>
<p>Dan
<br>
<p><p><p><p><p><p>On 12/17/2012 08:31 AM, Daniel Davidson wrote:
<br>
<span class="quotelev1">&gt; I will give this a try, but wouldn't that be an issue as well if the 
</span><br>
<span class="quotelev1">&gt; process was run on the head node or another node?  So long as the mpi 
</span><br>
<span class="quotelev1">&gt; job is not started on either of these two nodes, it works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/14/2012 11:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It must be making contact or ORTE wouldn't be attempting to launch 
</span><br>
<span class="quotelev2">&gt;&gt; your application's procs. Looks more like it never received the 
</span><br>
<span class="quotelev2">&gt;&gt; launch command. Looking at the code, I suspect you're getting caught 
</span><br>
<span class="quotelev2">&gt;&gt; in a race condition that causes the message to get &quot;stuck&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to see if that's the case, you might try running this with the 
</span><br>
<span class="quotelev2">&gt;&gt; 1.7 release candidate, or even the developer's nightly build. Both 
</span><br>
<span class="quotelev2">&gt;&gt; use a different timing mechanism intended to resolve such situations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 14, 2012, at 2:49 PM, Daniel Davidson &lt;danield_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for the help so far.  Here is the information that the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debugging gives me.  Looks like the daemon on on the non-local node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; never makes contact.  If I step NP back two though, it does.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-2-1 etc]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-0,compute-2-1 -v  -np 34 --leave-session-attached -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_base_verbose 5 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] mca:base:select:( odls) Querying component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] mca:base:select:( odls) Query of component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [default] set priority to 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] mca:base:select:( odls) Selected component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-0.local:29282] mca:base:select:( odls) Querying component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-0.local:29282] mca:base:select:( odls) Query of component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [default] set priority to 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-0.local:29282] mca:base:select:( odls) Selected component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:update:daemon:info 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; updating nidmap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:construct_child_list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpacking data to launch job [49524,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:construct_child_list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding new jobdat for job [49524,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:construct_child_list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpacking 1 app_contexts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],0] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],1] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],1] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],1] (1) to my local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],2] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],3] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],3] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],3] (3) to my local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],4] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],5] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],5] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],5] (5) to my local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],6] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],7] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],7] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],7] (7) to my local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],8] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],9] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],9] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],9] (9) to my local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],10] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],11] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],11] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],11] (11) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],12] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],13] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],13] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],13] (13) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],14] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],15] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],15] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],15] (15) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],16] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],17] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],17] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],17] (17) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],18] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],19] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],19] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],19] (19) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],20] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],21] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],21] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],21] (21) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],22] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],23] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],23] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],23] (23) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],24] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],25] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],25] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],25] (25) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],26] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],27] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],27] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],27] (27) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],28] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],29] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],29] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],29] (29) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],30] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],31] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],31] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],31] (31) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],32] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - checking proc [[49524,1],33] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing child list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - found proc [[49524,1],33] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],33] (33) to my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch found 384 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors for 17 children and locally set oversubscribed to false
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],15]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],19]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],21]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],23]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],25]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],29]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],31]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[49524,1],33]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch reporting job 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [49524,1] launch status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch flagging launch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; report to myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch setting waitpids
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44857 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44858 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44859 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44860 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44861 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44862 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44863 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44865 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44866 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44867 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44869 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44870 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44871 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44872 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44873 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44874 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44875 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/33/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],33] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/31/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],31] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/29/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],29] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/27/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],27] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/25/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],25] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/23/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],23] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/21/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],21] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/19/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],19] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/17/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],17] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/15/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],15] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/13/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],13] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/11/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],11] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/9/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],9] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/7/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],7] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/5/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],5] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/3/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],3] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/1/abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process [[49524,1],1] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],25]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],15]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],19]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],31]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],21]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],33]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],23]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],29]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child [[49524,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:proc_complete reporting 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all procs in [49524,1] terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:kill_local_proc working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on WILDCARD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/14/2012 04:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry - I forgot that you built from a tarball, and so debug isn't 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enabled by default. You need to configure --enable-debug.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 14, 2012, at 1:52 PM, Daniel Davidson &lt;danield_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oddly enough, adding this debugging info, lowered the number of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes that can be used down to 42 from 46.  When I run the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI, it fails giving only the information that follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ssh]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -v  -np 44 --leave-session-attached -mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; odls_base_verbose 5 hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44374] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44374] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44374] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:28950] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:28950] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:28950] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 12/14/2012 03:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It wouldn't be ssh - in both cases, only one ssh is being done to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; each node (to start the local daemon). The only difference is the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; number of fork/exec's being done on each node, and the number of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file descriptors being opened to support those fork/exec's.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It certainly looks like your limits are high enough. When you say 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it &quot;fails&quot;, what do you mean - what error does it report? Try 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; adding:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --leave-session-attached -mca odls_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to your cmd line - this will report all the local proc launch 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; debug and hopefully show you a more detailed error report.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Dec 14, 2012, at 12:29 PM, Daniel Davidson 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;danield_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have had to cobble together two machines in our rocks cluster 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; without using the standard installation, they have efi only bios 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on them and rocks doesnt like that, so it is the only workaround.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Everything works great now, except for one thing.  MPI jobs 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (openmpi or mpich) fail when started from one of these nodes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (via qsub or by logging in and running the command) if 24 or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; more processors are needed on another system.  However if the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; originator of the MPI job is the headnode or any of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; preexisting compute nodes, it works fine.  Right now I am 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; guessing ssh client or ulimit problems, but I cannot find any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; difference.  Any help would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1 and compute-2-0 are the new nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Examples:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This works, prints 23 hostnames from each machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -np 46 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This does not work, prints 24 hostnames for compute-2-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -np 48 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; These both work, print 64 hostnames from each node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_biocluster ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-0-2 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; pending signals                 (-i) 16410016
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; open files                      (-n) 4096
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# more /etc/ssh/ssh_config
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Host *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         CheckHostIP             no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         ForwardX11              yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         ForwardAgent            yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         StrictHostKeyChecking   no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         UsePrivilegedPort       no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Protocol                2,1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20973.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20971.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>In reply to:</strong> <a href="20969.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20973.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20973.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
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
