<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 15:51:04 2008" -->
<!-- isoreceived="20080620195104" -->
<!-- sent="Fri, 20 Jun 2008 12:50:59 -0700" -->
<!-- isosent="20080620195059" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="485C0A23.9020402_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AC791C82-5E1C-4B5A-93FD-9AABF26B59FA_at_cisco.com" -->
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
<strong>Date:</strong> 2008-06-20 15:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5952.php">Scott Atchley: "[OMPI users] Improving error messages"</a>
<li><strong>Previous message:</strong> <a href="5950.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>In reply to:</strong> <a href="5948.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the response Jeff,
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Greetings Josh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, we don't have an easy way to show which plugins were loaded and 
</span><br>
<span class="quotelev1">&gt; may/will be used during the run.  The modules you found below in 
</span><br>
<span class="quotelev1">&gt; --display-map are only a few of the plugins (all dealing with the 
</span><br>
<span class="quotelev1">&gt; run-time environment, and only used on the back-end nodes, so it may not 
</span><br>
<span class="quotelev1">&gt; be what you're looking for -- e.g., it doesn't show the plugins used by 
</span><br>
<span class="quotelev1">&gt; mpirun).
</span><br>
<span class="quotelev1">&gt; What do you need to know?
</span><br>
<p>Well basically I want to know what MTA's are being used to startup a 
<br>
job. I'm confused as to what the difference is between &quot;used by mpirun&quot; 
<br>
versus user on the back-end nodes. Doesn't --display-map show which MTA 
<br>
modules will used to start the backend processes?
<br>
<p>The overarching issue is that I'm attempting to just begin testing my 
<br>
build and when I attempt to startup a job, it just hangs:
<br>
<p>[ats_at_nt147 ~]$ mpirun --mca pls rsh -np 1 ./cpi
<br>
[nt147.penguincomputing.com:04640] [0,0,0] ORTE_ERROR_LOG: Not available 
<br>
in file ras_bjs.c at line 247
<br>
<p>The same thing happens if I just disable the bjs RAS MTA, since bjs, 
<br>
really isn't used with Scyld anymore:
<br>
<p>[ats_at_nt147 ~]$ mpirun --mca ras ^bjs --mca pls rsh -np 1 ./cpi
<br>
&lt;hang&gt;
<br>
<p>The interesting thing here is that orted starts up, but I'm not sure 
<br>
what is supposed to happen next:
<br>
<p>[root_at_nt147 ~]# ps -auxwww | grep orte
<br>
Warning: bad syntax, perhaps a bogus '-'? See 
<br>
/usr/share/doc/procps-3.2.3/FAQ
<br>
ats       4647  0.0  0.0 48204 2136 ?        Ss   12:45   0:00 orted 
<br>
--bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename 
<br>
nt147.penguincomputing.com --universe 
<br>
ats_at_[hidden]:default-universe-4645 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.5.211:59110;tcp://10.10.10.1:59110;tcp://10.11.10.1:59110&quot; 
<br>
--gprreplica 
<br>
&quot;0.0.0;tcp://192.168.5.211:59110;tcp://10.10.10.1:59110;tcp://10.11.10.1:59110&quot; 
<br>
--set-sid
<br>
<p>Finally, it should be noted that the upcoming release of Scyld will now 
<br>
include OpenMPI. This notion is how all of this got started.
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
<li><strong>Next message:</strong> <a href="5952.php">Scott Atchley: "[OMPI users] Improving error messages"</a>
<li><strong>Previous message:</strong> <a href="5950.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>In reply to:</strong> <a href="5948.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
