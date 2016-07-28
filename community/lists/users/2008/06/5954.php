<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 07:10:40 2008" -->
<!-- isoreceived="20080621111040" -->
<!-- sent="Sat, 21 Jun 2008 07:10:20 -0400" -->
<!-- isosent="20080621111020" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="933B60F3-058F-4D93-80A7-BAE490F48B22_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="485C0A23.9020402_at_penguincomputing.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 07:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5955.php">Jeff Squyres: "Re: [OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>Previous message:</strong> <a href="5953.php">Jeff Squyres: "Re: [OMPI users] Improving error messages"</a>
<li><strong>In reply to:</strong> <a href="5951.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5971.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 20, 2008, at 3:50 PM, Joshua Bernstein wrote:
<br>
<p><span class="quotelev2">&gt;&gt; No, we don't have an easy way to show which plugins were loaded and  
</span><br>
<span class="quotelev2">&gt;&gt; may/will be used during the run.  The modules you found below in -- 
</span><br>
<span class="quotelev2">&gt;&gt; display-map are only a few of the plugins (all dealing with the run- 
</span><br>
<span class="quotelev2">&gt;&gt; time environment, and only used on the back-end nodes, so it may  
</span><br>
<span class="quotelev2">&gt;&gt; not be what you're looking for -- e.g., it doesn't show the plugins  
</span><br>
<span class="quotelev2">&gt;&gt; used by mpirun).
</span><br>
<span class="quotelev2">&gt;&gt; What do you need to know?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well basically I want to know what MTA's are being used to startup a  
</span><br>
<span class="quotelev1">&gt; job.
</span><br>
<p>MTA?
<br>
<p><span class="quotelev1">&gt; I'm confused as to what the difference is between &quot;used by mpirun&quot;  
</span><br>
<span class="quotelev1">&gt; versus user on the back-end nodes. Doesn't --display-map show which  
</span><br>
<span class="quotelev1">&gt; MTA modules will used to start the backend processes?
</span><br>
<p>Yes.  But OMPI's run-time design usually has mpirun load one plugin of  
<br>
a given type, and then have the MPI processes load another plugin of  
<br>
the same type.  For example, for I/O forwarding - mpirun will load the  
<br>
&quot;svc&quot; plugin, while MPI processes will load the &quot;proxy&quot; plugin.  In  
<br>
this case, mpirun is actually providing all the smarts for I/O  
<br>
forwarding, and all the MPI processes simply proxy requests up to  
<br>
mpirun.  This is a common model throughout our run-time support, for  
<br>
example.
<br>
<p><span class="quotelev1">&gt; The overarching issue is that I'm attempting to just begin testing  
</span><br>
<span class="quotelev1">&gt; my build and when I attempt to startup a job, it just hangs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ats_at_nt147 ~]$ mpirun --mca pls rsh -np 1 ./cpi
</span><br>
<span class="quotelev1">&gt; [nt147.penguincomputing.com:04640] [0,0,0] ORTE_ERROR_LOG: Not  
</span><br>
<span class="quotelev1">&gt; available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same thing happens if I just disable the bjs RAS MTA, since bjs,  
</span><br>
<span class="quotelev1">&gt; really isn't used with Scyld anymore:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ats_at_nt147 ~]$ mpirun --mca ras ^bjs --mca pls rsh -np 1 ./cpi
</span><br>
<span class="quotelev1">&gt; &lt;hang&gt;
</span><br>
<p>I know very, very little about the bproc support in OMPI -- I know  
<br>
that it evolved over time and is disappearing in v1.3 due to lack of  
<br>
interest.  If you want it to stay, I think you've missed the v1.3 boat  
<br>
(we're in feature freeze for v1.3), but possibilities exist for future  
<br>
versions if you're willing to get involved in Open MPI.
<br>
<p><span class="quotelev1">&gt; The interesting thing here is that orted starts up, but I'm not sure  
</span><br>
<span class="quotelev1">&gt; what is supposed to happen next:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_nt147 ~]# ps -auxwww | grep orte
</span><br>
<span class="quotelev1">&gt; Warning: bad syntax, perhaps a bogus '-'? See /usr/share/doc/ 
</span><br>
<span class="quotelev1">&gt; procps-3.2.3/FAQ
</span><br>
<span class="quotelev1">&gt; ats       4647  0.0  0.0 48204 2136 ?        Ss   12:45   0:00 orted  
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; nt147.penguincomputing.com --universe  
</span><br>
<span class="quotelev1">&gt; ats_at_[hidden]:default-universe-4645 --nsreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.5.211:59110;tcp://10.10.10.1:59110;tcp:// 
</span><br>
<span class="quotelev1">&gt; 10.11.10.1:59110&quot; --gprreplica &quot;0.0.0;tcp:// 
</span><br>
<span class="quotelev1">&gt; 192.168.5.211:59110;tcp://10.10.10.1:59110;tcp://10.11.10.1:59110&quot; -- 
</span><br>
<span class="quotelev1">&gt; set-sid
</span><br>
<p>I'm not sure that just asking for the rsh pls is the Right thing to do  
<br>
-- I'll have to defer to Ralph on this one...
<br>
<p>Can you successfully run non-MPI apps, like hostname?
<br>
<p><span class="quotelev1">&gt; Finally, it should be noted that the upcoming release of Scyld will  
</span><br>
<span class="quotelev1">&gt; now include OpenMPI. This notion is how all of this got started.
</span><br>
<p><p>Great!  It sounds like you need to get involved, though, to preserve  
<br>
bproc support going forward.  LANL was the only proponent of bproc- 
<br>
like support; they have been moving away from bproc-like clusters,  
<br>
however, and so support faded.  We made the decision to axe bproc  
<br>
support in v1.3 because there was no one to maintain it.  :-(
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5955.php">Jeff Squyres: "Re: [OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>Previous message:</strong> <a href="5953.php">Jeff Squyres: "Re: [OMPI users] Improving error messages"</a>
<li><strong>In reply to:</strong> <a href="5951.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5971.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
