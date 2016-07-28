<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 10:59:24 2011" -->
<!-- isoreceived="20110412145924" -->
<!-- sent="Tue, 12 Apr 2011 08:59:15 -0600" -->
<!-- isosent="20110412145915" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc" -->
<!-- id="3766312B-B9D1-45AF-B934-E7EF9A65B0B0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45A45D8D2A0DBB49B1BE570660FCE2F503BF9368_at_naeapaxrez04v.nadsusea.nads.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 10:59:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16203.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16203.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's simplify the issue as we have no idea what your codes are doing.
<br>
<p>Can you run two copies of hostname, for example?
<br>
<p>What about multiple copies of an MPI version of &quot;hello&quot; - see the examples directory in the OMPI tarball.
<br>
<p><p>On Apr 12, 2011, at 8:43 AM, Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640 wrote:
<br>
<p><span class="quotelev1">&gt; Apologies for not clarifying.  The behavior below is expected, I am just checking to see that Gemini will start-up and look for its input file.  When Gemini+OpenMPI is working correctly, I expect to see the behavior below. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When Gemini+OpenMPI is not working correctly (current behavior), I see the second behavior.  When running with &quot;-np 1&quot;, Gemini will start-up and look for its input file.  When running with &quot;-np 2&quot; (or anything more than 1), Gemini never starts up.  Instead, the code simply hangs up indefinitely.  I showed Gemini as an example.  I don't believe the issue is Gemini-related, as I've reproduced the same &quot;hanging&quot; behavior with two other MPI codes (Salinas, ParaDyn). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same codebase runs correctly on many other workstations (transferred from my machine (build machine) to colleague's machine via &quot;rsync -vrlpu /opt/sierra/ targetmachine:/opt/sierra&quot;). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried the following fixes, but still have problems: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Copy salinas (or geminimpi) locally, run &quot;mpirun -np 2 ./salinas&quot;
</span><br>
<span class="quotelev1">&gt; Tried running locally, both interactively and through queueing system.  No difference in behavior. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Compare &quot;ldd salinas&quot; and &quot;ldd gemini&quot; with functioning examples (examples from coworkers' workstations). 
</span><br>
<span class="quotelev1">&gt; Compared &quot;ldd salinas&quot; output (and &quot;ldd geminimpi&quot;) with results from other workstations.  Comparisons look fine. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Create new user account with clean profile on my workstation.  Maybe it is an environment problem. 
</span><br>
<span class="quotelev1">&gt; Created new user account and sourced &quot;/opt/sierra/install/sierra_init.sh&quot; to set up path.  No difference in behavior. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Compare /etc/profile and /etc/bashrc with &quot;functioning&quot; examples. 
</span><br>
<span class="quotelev1">&gt; I compared my /etc/profile and /etc/bashrc with colleagues.  Comparisons don't raise any flags. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can provide other diagnostic-type information as requested. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jon Stergiou
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Stergiou, Jonathan C CIV NSWCCD West Bethesda,6640
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 11, 2011 9:53
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running OpenMPI 1.4.2 under RHEL 5.5.  After install, I tested with &quot;mpirun -np 4 date&quot;; the command returned four &quot;date&quot; outputs. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I tried running two different MPI programs, &quot;geminimpi&quot; and &quot;salinas&quot;.  Both run correctly with &quot;mpirun -np 1 $prog&quot;.  However, both hang indefinitely when I use anything other than &quot;-np 1&quot;.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next, I ran &quot;mpirun --debug-daemons -np 1 geminimpi&quot; and got the following:  (this looks good, and is what I would expect)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [code]
</span><br>
<span class="quotelev1">&gt; [xxx_at_XXX_TUX01 ~]$ mpirun --debug-daemons -np 1 geminimpi
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] node[0].name XXX_TUX01 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] orted_recv: received sync+nidmap from local proc [[15027,1],0]
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; Fluid Proc Ready: ID, FluidMaster,LagMaster =     0    0    1
</span><br>
<span class="quotelev1">&gt; Checking license for Gemini
</span><br>
<span class="quotelev1">&gt; Checking license for Linux OS
</span><br>
<span class="quotelev1">&gt; Checking internal license list
</span><br>
<span class="quotelev1">&gt; License valid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GEMINI Startup
</span><br>
<span class="quotelev1">&gt; Gemini +++ Version 5.1.00  20110501 +++    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +++++ ERROR MESSAGE +++++
</span><br>
<span class="quotelev1">&gt; FILE MISSING (Input): name = gemini.inp
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 6559 on
</span><br>
<span class="quotelev1">&gt; node XXX_TUX01 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06558] [[15027,0],0] orted_cmd: received exit
</span><br>
<span class="quotelev1">&gt; [/code]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With &quot;mpirun --debug-daemons -np 2 geminimpi&quot;, it hangs like this: (hangs indefinitely)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [code]
</span><br>
<span class="quotelev1">&gt; [xxx_at_XXX_TUX01 ~]$ mpirun --debug-daemons -np 2 geminimpi
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06570] [[14983,0],0] node[0].name XXX_TUX01 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06570] [[14983,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06570] [[14983,0],0] orted_recv: received sync+nidmap from local proc [[14983,1],1]
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06570] [[14983,0],0] orted_recv: received sync+nidmap from local proc [[14983,1],0]
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06570] [[14983,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06570] [[14983,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [XXX_TUX01:06570] [[14983,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [/code]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cloned my entire installation to a number of other machines to test.  On all the other workstations, everything behaves correctly and various regression suites return good results. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jon Stergiou
</span><br>
<span class="quotelev1">&gt; Engineer
</span><br>
<span class="quotelev1">&gt; NSWC Carderock
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16203.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16203.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
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
