<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 14:53:55 2008" -->
<!-- isoreceived="20080623185355" -->
<!-- sent="Mon, 23 Jun 2008 11:52:59 -0700" -->
<!-- isosent="20080623185259" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="485FF10B.7020404_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 14:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5972.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5970.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5972.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5972.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seems like I've fallen behind in replying. I'll try to be sure to make 
<br>
sure I answer everbody's questions about what I am trying to accomplish.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 20, 2008, at 3:50 PM, Joshua Bernstein wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, we don't have an easy way to show which plugins were loaded and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may/will be used during the run.  The modules you found below in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --display-map are only a few of the plugins (all dealing with the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run-time environment, and only used on the back-end nodes, so it may 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not be what you're looking for -- e.g., it doesn't show the plugins 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used by mpirun).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do you need to know?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well basically I want to know what MTA's are being used to startup a job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTA?
</span><br>
<p>Sorry, I should have said MCA....
<br>
<p><span class="quotelev2">&gt;&gt; I'm confused as to what the difference is between &quot;used by mpirun&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; versus user on the back-end nodes. Doesn't --display-map show which 
</span><br>
<span class="quotelev2">&gt;&gt; MTA modules will used to start the backend processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  But OMPI's run-time design usually has mpirun load one plugin of a 
</span><br>
<span class="quotelev1">&gt; given type, and then have the MPI processes load another plugin of the 
</span><br>
<span class="quotelev1">&gt; same type.  For example, for I/O forwarding - mpirun will load the &quot;svc&quot; 
</span><br>
<span class="quotelev1">&gt; plugin, while MPI processes will load the &quot;proxy&quot; plugin.  In this case, 
</span><br>
<span class="quotelev1">&gt; mpirun is actually providing all the smarts for I/O forwarding, and all 
</span><br>
<span class="quotelev1">&gt; the MPI processes simply proxy requests up to mpirun.  This is a common 
</span><br>
<span class="quotelev1">&gt; model throughout our run-time support, for example.
</span><br>
<p>Ah, okay. So then --display-map will show what modules the backend 
<br>
processes are using, not MPIRUN itself.
<br>
<p><span class="quotelev2">&gt;&gt; The overarching issue is that I'm attempting to just begin testing my 
</span><br>
<span class="quotelev2">&gt;&gt; build and when I attempt to startup a job, it just hangs:
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
<span class="quotelev1">&gt; I know very, very little about the bproc support in OMPI -- I know that 
</span><br>
<span class="quotelev1">&gt; it evolved over time and is disappearing in v1.3 due to lack of 
</span><br>
<span class="quotelev1">&gt; interest.  If you want it to stay, I think you've missed the v1.3 boat 
</span><br>
<span class="quotelev1">&gt; (we're in feature freeze for v1.3), but possibilities exist for future 
</span><br>
<span class="quotelev1">&gt; versions if you're willing to get involved in Open MPI.
</span><br>
<p>Bummer! I would absolutely support, (along with Penguin) further 
<br>
contributions and development of BProc support.
<br>
<p>Note, though that BProc Scyld, and LANL BProc, have long ago forked. We 
<br>
believe our BProc functionality has been developed beyond what was 
<br>
running at LANL, (for example we have support for threads...). I 
<br>
understand it it probably too late to add BProc in for 1.3, but perhaps 
<br>
for subsequent releases, combined with contributions from Penguin, BProc 
<br>
support could be resurrected in some capacity.
<br>
<p><span class="quotelev2">&gt;&gt; The interesting thing here is that orted starts up, but I'm not sure 
</span><br>
<span class="quotelev2">&gt;&gt; what is supposed to happen next:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_nt147 ~]# ps -auxwww | grep orte
</span><br>
<span class="quotelev2">&gt;&gt; Warning: bad syntax, perhaps a bogus '-'? See 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/share/doc/procps-3.2.3/FAQ
</span><br>
<span class="quotelev2">&gt;&gt; ats       4647  0.0  0.0 48204 2136 ?        Ss   12:45   0:00 orted 
</span><br>
<span class="quotelev2">&gt;&gt; --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename 
</span><br>
<span class="quotelev2">&gt;&gt; nt147.penguincomputing.com --universe 
</span><br>
<span class="quotelev2">&gt;&gt; ats_at_[hidden]:default-universe-4645 --nsreplica 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://192.168.5.211:59110;tcp://10.10.10.1:59110;tcp://10.11.10.1:59110&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; --gprreplica 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://192.168.5.211:59110;tcp://10.10.10.1:59110;tcp://10.11.10.1:59110&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; --set-sid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure that just asking for the rsh pls is the Right thing to do 
</span><br>
<span class="quotelev1">&gt; -- I'll have to defer to Ralph on this one...
</span><br>
<span class="quotelev1">&gt; Can you successfully run non-MPI apps, like hostname?
</span><br>
<p>Yes. Absoultely.
<br>
<p><span class="quotelev2">&gt;&gt; Finally, it should be noted that the upcoming release of Scyld will 
</span><br>
<span class="quotelev2">&gt;&gt; now include OpenMPI. This notion is how all of this got started.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great!  It sounds like you need to get involved, though, to preserve 
</span><br>
<span class="quotelev1">&gt; bproc support going forward.  LANL was the only proponent of bproc-like 
</span><br>
<span class="quotelev1">&gt; support; they have been moving away from bproc-like clusters, however, 
</span><br>
<span class="quotelev1">&gt; and so support faded.  We made the decision to axe bproc support in v1.3 
</span><br>
<span class="quotelev1">&gt; because there was no one to maintain it.  :-(
</span><br>
<p>This is what I'm in the process of doing right now. I'd like to be able 
<br>
to take the existing BProc functionality and modify if needed to support 
<br>
our BProc. I have buy in from the higher ups around here, and I will 
<br>
proceed with the Membership forms likely at the &quot;Contributer&quot; level, 
<br>
considering we hope to be contributing code. Signing of the 3rd part 
<br>
contribution agreement shouldn't be an issue.
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
<li><strong>Next message:</strong> <a href="5972.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5970.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5972.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5972.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
