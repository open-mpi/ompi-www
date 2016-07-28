<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 15:06:46 2008" -->
<!-- isoreceived="20080621190646" -->
<!-- sent="Sat, 21 Jun 2008 13:06:32 -0600" -->
<!-- isosent="20080621190632" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="C482AD58.550A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="933B60F3-058F-4D93-80A7-BAE490F48B22_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 15:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5963.php">Todd Gamblin: "[OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="5961.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5973.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5973.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joshua
<br>
<p>Again, forwarded by the friendly elf - so include me directly in any reply.
<br>
<p>I gather from Jeff that you are attempting to do something with bproc -
<br>
true? If so, I will echo what Jeff said: bproc support in OMPI is being
<br>
dropped with the 1.3 release due to lack of interest/support. Just a &quot;heads
<br>
up&quot;.
<br>
<p>If you are operating in a bproc environment, then I'm not sure why you are
<br>
specifying that the system use the rsh launcher. Bproc requires some very
<br>
special handling which is only present in the bproc launcher. You can run
<br>
both MPI and non-MPI apps with it, but bproc is weird and so OMPI some
<br>
-very- different logic in it to make it all work.
<br>
<p>I suspect the problem you are having is that all of the frameworks are
<br>
detecting bproc and trying to run accordingly. This means that the orted is
<br>
executing process startup procedures for bproc - which are totally different
<br>
than for any other environment (e.g., rsh). If mpirun is attempting to
<br>
execute an rsh launch, and the orted is expecting a bproc launch, then I can
<br>
guarantee that no processes will be launched and you will hang.
<br>
<p>I'm not sure there is a way in 1.2 to tell the orteds to ignore the fact
<br>
that they see bproc and do something else. I can look, but would rather wait
<br>
to hear if that is truly what you are trying to do, and why.
<br>
<p>Ralph
<br>
<p><p>On 6/21/08 5:10 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 20, 2008, at 3:50 PM, Joshua Bernstein wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, we don't have an easy way to show which plugins were loaded and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may/will be used during the run.  The modules you found below in --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; display-map are only a few of the plugins (all dealing with the run-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time environment, and only used on the back-end nodes, so it may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not be what you're looking for -- e.g., it doesn't show the plugins
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used by mpirun).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do you need to know?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well basically I want to know what MTA's are being used to startup a
</span><br>
<span class="quotelev2">&gt;&gt; job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTA?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm confused as to what the difference is between &quot;used by mpirun&quot;
</span><br>
<span class="quotelev2">&gt;&gt; versus user on the back-end nodes. Doesn't --display-map show which
</span><br>
<span class="quotelev2">&gt;&gt; MTA modules will used to start the backend processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  But OMPI's run-time design usually has mpirun load one plugin of
</span><br>
<span class="quotelev1">&gt; a given type, and then have the MPI processes load another plugin of
</span><br>
<span class="quotelev1">&gt; the same type.  For example, for I/O forwarding - mpirun will load the
</span><br>
<span class="quotelev1">&gt; &quot;svc&quot; plugin, while MPI processes will load the &quot;proxy&quot; plugin.  In
</span><br>
<span class="quotelev1">&gt; this case, mpirun is actually providing all the smarts for I/O
</span><br>
<span class="quotelev1">&gt; forwarding, and all the MPI processes simply proxy requests up to
</span><br>
<span class="quotelev1">&gt; mpirun.  This is a common model throughout our run-time support, for
</span><br>
<span class="quotelev1">&gt; example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The overarching issue is that I'm attempting to just begin testing
</span><br>
<span class="quotelev2">&gt;&gt; my build and when I attempt to startup a job, it just hangs:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [ats_at_nt147 ~]$ mpirun --mca pls rsh -np 1 ./cpi
</span><br>
<span class="quotelev2">&gt;&gt; [nt147.penguincomputing.com:04640] [0,0,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt;&gt; available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The same thing happens if I just disable the bjs RAS MTA, since bjs,
</span><br>
<span class="quotelev2">&gt;&gt; really isn't used with Scyld anymore:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [ats_at_nt147 ~]$ mpirun --mca ras ^bjs --mca pls rsh -np 1 ./cpi
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hang&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know very, very little about the bproc support in OMPI -- I know
</span><br>
<span class="quotelev1">&gt; that it evolved over time and is disappearing in v1.3 due to lack of
</span><br>
<span class="quotelev1">&gt; interest.  If you want it to stay, I think you've missed the v1.3 boat
</span><br>
<span class="quotelev1">&gt; (we're in feature freeze for v1.3), but possibilities exist for future
</span><br>
<span class="quotelev1">&gt; versions if you're willing to get involved in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The interesting thing here is that orted starts up, but I'm not sure
</span><br>
<span class="quotelev2">&gt;&gt; what is supposed to happen next:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_nt147 ~]# ps -auxwww | grep orte
</span><br>
<span class="quotelev2">&gt;&gt; Warning: bad syntax, perhaps a bogus '-'? See /usr/share/doc/
</span><br>
<span class="quotelev2">&gt;&gt; procps-3.2.3/FAQ
</span><br>
<span class="quotelev2">&gt;&gt; ats       4647  0.0  0.0 48204 2136 ?        Ss   12:45   0:00 orted
</span><br>
<span class="quotelev2">&gt;&gt; --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev2">&gt;&gt; nt147.penguincomputing.com --universe
</span><br>
<span class="quotelev2">&gt;&gt; ats_at_[hidden]:default-universe-4645 --nsreplica
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://192.168.5.211:59110;tcp://10.10.10.1:59110;tcp://
</span><br>
<span class="quotelev2">&gt;&gt; 10.11.10.1:59110&quot; --gprreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.5.211:59110;tcp://10.10.10.1:59110;tcp://10.11.10.1:59110&quot; --
</span><br>
<span class="quotelev2">&gt;&gt; set-sid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure that just asking for the rsh pls is the Right thing to do
</span><br>
<span class="quotelev1">&gt; -- I'll have to defer to Ralph on this one...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you successfully run non-MPI apps, like hostname?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Finally, it should be noted that the upcoming release of Scyld will
</span><br>
<span class="quotelev2">&gt;&gt; now include OpenMPI. This notion is how all of this got started.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great!  It sounds like you need to get involved, though, to preserve
</span><br>
<span class="quotelev1">&gt; bproc support going forward.  LANL was the only proponent of bproc-
</span><br>
<span class="quotelev1">&gt; like support; they have been moving away from bproc-like clusters,
</span><br>
<span class="quotelev1">&gt; however, and so support faded.  We made the decision to axe bproc
</span><br>
<span class="quotelev1">&gt; support in v1.3 because there was no one to maintain it.  :-(
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5963.php">Todd Gamblin: "[OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="5961.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5973.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5973.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
