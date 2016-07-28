<?
$subject_val = "[OMPI devel] Change to launch agent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 14:36:33 2008" -->
<!-- isoreceived="20080730183633" -->
<!-- sent="Wed, 30 Jul 2008 12:36:25 -0600" -->
<!-- isosent="20080730183625" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Change to launch agent" -->
<!-- id="CBB6F3E9-9331-4AF9-A955-61C4FEBB3215_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Change to launch agent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 14:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4494.php">Ralph Castain: "[OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4492.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I explained the change in the commit message to r19097, but just in  
<br>
case you missed it, here is an abridged version:
<br>
<p>Per the July technical meeting:
<br>
<p>Standardize the handling of the orte launch agent option across PLMs.  
<br>
This has been a consistent complaint I have received - each PLM would  
<br>
register its own MCA param to get input on the launch agent for remote  
<br>
nodes (in fact, one or two didn't, but most did). This would then get  
<br>
handled in various and contradictory ways.
<br>
<p>Some PLMs would accept only a one-word input. Others accepted multi- 
<br>
word args such as &quot;valgrind orted&quot;, but then some would error by  
<br>
putting any prefix specified on the cmd line in front of the incorrect  
<br>
argument.
<br>
<p>For example, while using the rsh launcher, if you specified &quot;valgrind  
<br>
orted&quot; as your launch agent and had &quot;--prefix foo&quot; on you cmd line,  
<br>
you would attempt to execute &quot;ssh foo/valgrind orted&quot; - which  
<br>
obviously wouldn't work.
<br>
<p>This was all -very- confusing to users, who had to know which PLM was  
<br>
being used so they could even set the right mca param in the first  
<br>
place! And since we don't warn about non-recognized or non-used mca  
<br>
params, half of the time they would wind up not doing what they  
<br>
thought they were telling us to do.
<br>
<p>What I've done in r19097 is standardize things for a consistent  
<br>
interface and user experience. The biggest change is that you can now  
<br>
specify &quot;--launch-agent foo&quot; on the mpirun cmd line. The corresponding  
<br>
mca param is orte_launch_agent. This can be a multi-word value.
<br>
<p>One benefit of this is actually rather useful for developers. I have  
<br>
found it rather annoying that I cannot tell the orteds to give me  
<br>
debugging output without getting deluged by corresponding output from  
<br>
mpirun. For example, setting --debug-devel on the mpirun cmd line will  
<br>
give me debugging output from the orteds, but also a considerable  
<br>
amount from mpirun.
<br>
<p>However, now you can do --launch-agent &quot;orted --debug&quot;, and only the  
<br>
orteds will see the option.
<br>
<p>Of course, you can also do &quot;valgrind [options] orted&quot;, or &quot;valgrind  
<br>
[options] orted --debug&quot;, or whatever you like.
<br>
<p>I did my best to ensure this works across all environments. However, I  
<br>
can't compile all the PLMs, so there may be an error somewhere - my  
<br>
apologies in advance.
<br>
<p>As always, please let me know if you see something.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4494.php">Ralph Castain: "[OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4492.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
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
