<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 11:01:49 2012" -->
<!-- isoreceived="20120215160149" -->
<!-- sent="Wed, 15 Feb 2012 11:01:44 -0500" -->
<!-- isosent="20120215160144" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="1D3AC712-929F-4EF5-B47D-CAA3B88EFF40_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3A3BAD.6871.621F5B6B_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 11:01:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18482.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18480.php">Josh Hursey: "Re: [OMPI users] MPI_Barrier in Self-checkpointing call"</a>
<li><strong>In reply to:</strong> <a href="18460.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2012, at 10:47 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Yes, in short, I start a c-shell script from bash command line, in 
</span><br>
<span class="quotelev1">&gt; which I mpirun another c-shell script which start the computing 
</span><br>
<span class="quotelev1">&gt; process. The only OMPI related envars are PATH and 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH. Any other OPMI envars I should set?
</span><br>
<p>No, there are no others you need to set.  Ralph's referring to the fact that we set OMPI environment variables in the processes that are started on the remote nodes.
<br>
<p>I was asking to ensure you hadn't set any MCA parameters in the environment that could be creating a problem.  Do you have any set in files, perchance?  
<br>
<p>And can you run &quot;env | grep OMPI&quot; from the script that you invoked via mpirun?
<br>
<p>So just to be clear on the exact problem you're seeing:
<br>
<p>- you mpirun on a single node and all works fine
<br>
- you mpirun on multiple nodes and all works fine (e.g., mpirun --host a,b,c your_executable)
<br>
- you mpirun on multiple nodes and list a host more than once and it hangs (e.g., mpirun --host a,a,b,c your_executable)
<br>
<p>Is that correct?
<br>
<p>If so, can you attach a debugger to one of the hung processes and see exactly where it's hung?  (i.e., get the stack traces)
<br>
<p>Per a question from your prior mail: yes, Open MPI does create mmapped files in /tmp for use with shared memory communication.  They *should* get cleaned up when you exit, however, unless something disastrous happens.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18482.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18480.php">Josh Hursey: "Re: [OMPI users] MPI_Barrier in Self-checkpointing call"</a>
<li><strong>In reply to:</strong> <a href="18460.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
