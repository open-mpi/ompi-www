<?
$subject_val = "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 02:22:01 2011" -->
<!-- isoreceived="20110831062201" -->
<!-- sent="Tue, 30 Aug 2011 23:22:20 -0700" -->
<!-- isosent="20110831062220" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits" -->
<!-- id="4E5DD31C.6050407_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="66C3E0D3-C85E-4F33-8049-2CBBDC352B09_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 02:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="9733.php">Ralph Castain: "Re: [OMPI devel] descriptor limits -- FAQ item"</a>
<li><strong>In reply to:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/30/2011 7:34 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Aug 29, 2011, at 11:18 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Maybe someone can help me from having to think too hard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's say I want to max my system limits.  I can say this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     % mpirun --mca opal_set_max_sys_limits 1 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cool.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meanwhile, if I do this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     % setenv OMPI_MCA_opal_set_max_sys_limits 1
</span><br>
<span class="quotelev2">&gt;&gt;     % mpirun ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; remote processes don't see the setting.  (Local processes and ompi_info are fine.)
</span><br>
<span class="quotelev1">&gt; I looked at the 1.5 code, and mpirun is reaping all OMPI_ params from the environ and adding them to the app. So it should be getting set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then ran &quot;mpirun -n 1 printenv&quot; on a slurm machine, and verified that indeed that param was in the environment. Ditto when I told it to use the rsh launcher.
</span><br>
<span class="quotelev2">&gt;&gt; Bug?  Naively, this looks &quot;wrong.&quot;  At least disturbing, in any case.
</span><br>
<span class="quotelev2">&gt;&gt; This is with v1.5.
</span><br>
Okay, so one answer is implicit in your reply:  you are expecting the 
<br>
same result I am.  So, if the behavior is not as I expect but as I 
<br>
describe, it's a bug candidate.  (As opposed to, &quot;The problem you're 
<br>
describing is how it's supposed to work;  it's no problem at all.&quot;)
<br>
<p>Now, regarding &quot;mpirun -n 1 printenv&quot;, I agree that the environment 
<br>
variable is getting set.  Even on a remote node.  That suggests that 
<br>
things are fine, but it turns out they are not.  The problem is -- and 
<br>
I'm afraid I don't understand the details -- it's set &quot;too late.&quot;  I 
<br>
imagine a time line like this:
<br>
<p>A)  orted starts
<br>
B)  orted calls opal_util_init_sys_limits()
<br>
C)  daemonize a child process
<br>
D)  child process execs target process
<br>
E)  target process starts up
<br>
<p>Looking at the environment, I don't see the variable set in B, which is 
<br>
the only place the variable does any good.  Like you, I do see it in E, 
<br>
which is interesting but doesn't help the user.
<br>
<p>Your experiment was reasonable, but the problem is odd.  I suggest the 
<br>
following to see the problem.  Set the variable in your environment.  
<br>
Then use mpirun to launch a remote process.  Then:
<br>
1)  In the remote orted, inside opal_util_init_sys_limits(), check for 
<br>
the variable in your environment.
<br>
And/or:
<br>
2)  Make the remotely launched process something like this:
<br>
<p>#!/bin/csh
<br>
limit descriptors
<br>
<p>and see if the descriptor limit got bumped up from what it otherwise 
<br>
should be.
<br>
<p>In contrast, if you set the MCA parameter on your mpirun command line, 
<br>
the environment variable *does* get set, even in the environment of the 
<br>
orted when it calls opal_util_init_sys_limits().
<br>
<p>I can poke at this more tomorrow, but I suspect with one &quot;aha!&quot; you'll 
<br>
figure it out a lot faster than I can.  :^(
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="9733.php">Ralph Castain: "Re: [OMPI devel] descriptor limits -- FAQ item"</a>
<li><strong>In reply to:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
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
