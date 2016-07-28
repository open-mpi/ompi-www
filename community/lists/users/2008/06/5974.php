<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 16:27:37 2008" -->
<!-- isoreceived="20080623202737" -->
<!-- sent="Mon, 23 Jun 2008 14:27:23 -0600" -->
<!-- isosent="20080623202723" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="C485634B.DF66%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="486003B9.3040003_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Displaying Selected MCA Modules<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 16:27:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5975.php">Sacerdoti, Federico: "Re: [OMPI users] null characters in output"</a>
<li><strong>Previous message:</strong> <a href="5973.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5973.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5985.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5985.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can guarantee bproc support isn't broken in 1.2 - we use it on several
<br>
production machines every day, and it works fine. I heard of only one
<br>
potential problem having to do with specifying multiple app_contexts on a
<br>
cmd line, but we are still trying to confirm that it wasn't operator error.
<br>
<p>In the 1.2 series, we don't pass mca params back to the orteds. The reason
<br>
this was done is that there are soooo many mca params that could be set that
<br>
we would frequently overrun the system limit on cmd line length. Remember,
<br>
those params can be in a system-level file, a user-level file, the
<br>
environment, and/or on the cmd line!
<br>
<p>This restriction has been lifted in 1.3, but we didn't back-port it to the
<br>
1.2 series. So I'm afraid that the orted is going to pick the environment it
<br>
senses.
<br>
<p>Of more interest would be understanding why your build isn't working in
<br>
bproc. Could you send me the error you are getting? I'm betting that the
<br>
problem lies in determining the node allocation as that is the usual place
<br>
we hit problems - not much is &quot;standard&quot; about how allocations are
<br>
communicated in the bproc world, though we did try to support a few of the
<br>
more common methods.
<br>
<p>Ralph
<br>
<p><p><p>On 6/23/08 2:12 PM, &quot;Joshua Bernstein&quot; &lt;jbernstein_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Joshua
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, forwarded by the friendly elf - so include me directly in any reply.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I gather from Jeff that you are attempting to do something with bproc -
</span><br>
<span class="quotelev2">&gt;&gt; true? If so, I will echo what Jeff said: bproc support in OMPI is being
</span><br>
<span class="quotelev2">&gt;&gt; dropped with the 1.3 release due to lack of interest/support. Just a &quot;heads
</span><br>
<span class="quotelev2">&gt;&gt; up&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Understood.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are operating in a bproc environment, then I'm not sure why you are
</span><br>
<span class="quotelev2">&gt;&gt; specifying that the system use the rsh launcher. Bproc requires some very
</span><br>
<span class="quotelev2">&gt;&gt; special handling which is only present in the bproc launcher. You can run
</span><br>
<span class="quotelev2">&gt;&gt; both MPI and non-MPI apps with it, but bproc is weird and so OMPI some
</span><br>
<span class="quotelev2">&gt;&gt; -very- different logic in it to make it all work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I'm trying to determine how broken, if at all, the bproc support
</span><br>
<span class="quotelev1">&gt; is in OpenMPI. So considering out of the gate it wasn't working, I
</span><br>
<span class="quotelev1">&gt; thought I'd try to disable the built in BProc stuff and fall back to RSH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suspect the problem you are having is that all of the frameworks are
</span><br>
<span class="quotelev2">&gt;&gt; detecting bproc and trying to run accordingly. This means that the orted is
</span><br>
<span class="quotelev2">&gt;&gt; executing process startup procedures for bproc - which are totally different
</span><br>
<span class="quotelev2">&gt;&gt; than for any other environment (e.g., rsh). If mpirun is attempting to
</span><br>
<span class="quotelev2">&gt;&gt; execute an rsh launch, and the orted is expecting a bproc launch, then I can
</span><br>
<span class="quotelev2">&gt;&gt; guarantee that no processes will be launched and you will hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exactly, what I'm seeing now...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure there is a way in 1.2 to tell the orteds to ignore the fact
</span><br>
<span class="quotelev2">&gt;&gt; that they see bproc and do something else. I can look, but would rather wait
</span><br>
<span class="quotelev2">&gt;&gt; to hear if that is truly what you are trying to do, and why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would really appreciate it if you wouldn't mind looking. From reading
</span><br>
<span class="quotelev1">&gt; the documentation I didn't realize that mpirun and the orted were doing
</span><br>
<span class="quotelev1">&gt; two different things. I thought the --mca parameter applied to both.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; Penguin Computing
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5975.php">Sacerdoti, Federico: "Re: [OMPI users] null characters in output"</a>
<li><strong>Previous message:</strong> <a href="5973.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5973.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5985.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5985.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
