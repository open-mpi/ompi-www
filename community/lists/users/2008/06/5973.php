<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 16:13:48 2008" -->
<!-- isoreceived="20080623201348" -->
<!-- sent="Mon, 23 Jun 2008 13:12:41 -0700" -->
<!-- isosent="20080623201241" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="486003B9.3040003_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C482AD58.550A%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 16:12:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5972.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Joshua
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, forwarded by the friendly elf - so include me directly in any reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I gather from Jeff that you are attempting to do something with bproc -
</span><br>
<span class="quotelev1">&gt; true? If so, I will echo what Jeff said: bproc support in OMPI is being
</span><br>
<span class="quotelev1">&gt; dropped with the 1.3 release due to lack of interest/support. Just a &quot;heads
</span><br>
<span class="quotelev1">&gt; up&quot;.
</span><br>
<p>Understood.
<br>
<p><span class="quotelev1">&gt; If you are operating in a bproc environment, then I'm not sure why you are
</span><br>
<span class="quotelev1">&gt; specifying that the system use the rsh launcher. Bproc requires some very
</span><br>
<span class="quotelev1">&gt; special handling which is only present in the bproc launcher. You can run
</span><br>
<span class="quotelev1">&gt; both MPI and non-MPI apps with it, but bproc is weird and so OMPI some
</span><br>
<span class="quotelev1">&gt; -very- different logic in it to make it all work.
</span><br>
<p>Well, I'm trying to determine how broken, if at all, the bproc support 
<br>
is in OpenMPI. So considering out of the gate it wasn't working, I 
<br>
thought I'd try to disable the built in BProc stuff and fall back to RSH.
<br>
<p><span class="quotelev1">&gt; I suspect the problem you are having is that all of the frameworks are
</span><br>
<span class="quotelev1">&gt; detecting bproc and trying to run accordingly. This means that the orted is
</span><br>
<span class="quotelev1">&gt; executing process startup procedures for bproc - which are totally different
</span><br>
<span class="quotelev1">&gt; than for any other environment (e.g., rsh). If mpirun is attempting to
</span><br>
<span class="quotelev1">&gt; execute an rsh launch, and the orted is expecting a bproc launch, then I can
</span><br>
<span class="quotelev1">&gt; guarantee that no processes will be launched and you will hang.
</span><br>
<p>Exactly, what I'm seeing now...
<br>
<p><span class="quotelev1">&gt; I'm not sure there is a way in 1.2 to tell the orteds to ignore the fact
</span><br>
<span class="quotelev1">&gt; that they see bproc and do something else. I can look, but would rather wait
</span><br>
<span class="quotelev1">&gt; to hear if that is truly what you are trying to do, and why.
</span><br>
<p>I would really appreciate it if you wouldn't mind looking. From reading 
<br>
the documentation I didn't realize that mpirun and the orted were doing 
<br>
two different things. I thought the --mca parameter applied to both.
<br>
<p>-Joshua Bernstein
<br>
Software Engineer
<br>
Penguin Computing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5972.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
