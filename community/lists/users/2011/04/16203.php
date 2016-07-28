<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 10:44:04 2011" -->
<!-- isoreceived="20110412144404" -->
<!-- sent="Tue, 12 Apr 2011 10:43:58 -0400" -->
<!-- isosent="20110412144358" -->
<!-- name="Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640" -->
<!-- email="jonathan.stergiou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc" -->
<!-- id="45A45D8D2A0DBB49B1BE570660FCE2F503BF9368_at_naeapaxrez04v.nadsusea.nads.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45A45D8D2A0DBB49B1BE570660FCE2F5011DE01E_at_naeapaxrez04v.nadsusea.nads.navy.mil" -->
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
<strong>From:</strong> Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640 (<em>jonathan.stergiou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 10:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16204.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16202.php">Jeff Squyres: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16193.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16204.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16204.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies for not clarifying.  The behavior below is expected, I am just checking to see that Gemini will start-up and look for its input file.  When Gemini+OpenMPI is working correctly, I expect to see the behavior below. 
<br>
<p>When Gemini+OpenMPI is not working correctly (current behavior), I see the second behavior.  When running with &quot;-np 1&quot;, Gemini will start-up and look for its input file.  When running with &quot;-np 2&quot; (or anything more than 1), Gemini never starts up.  Instead, the code simply hangs up indefinitely.  I showed Gemini as an example.  I don't believe the issue is Gemini-related, as I've reproduced the same &quot;hanging&quot; behavior with two other MPI codes (Salinas, ParaDyn). 
<br>
<p>The same codebase runs correctly on many other workstations (transferred from my machine (build machine) to colleague's machine via &quot;rsync -vrlpu /opt/sierra/ targetmachine:/opt/sierra&quot;). 
<br>
<p>I tried the following fixes, but still have problems: 
<br>
<p>-Copy salinas (or geminimpi) locally, run &quot;mpirun -np 2 ./salinas&quot;
<br>
Tried running locally, both interactively and through queueing system.  No difference in behavior. 
<br>
<p>-Compare &quot;ldd salinas&quot; and &quot;ldd gemini&quot; with functioning examples (examples from coworkers' workstations). 
<br>
Compared &quot;ldd salinas&quot; output (and &quot;ldd geminimpi&quot;) with results from other workstations.  Comparisons look fine. 
<br>
<p>-Create new user account with clean profile on my workstation.  Maybe it is an environment problem. 
<br>
Created new user account and sourced &quot;/opt/sierra/install/sierra_init.sh&quot; to set up path.  No difference in behavior. 
<br>
<p>-Compare /etc/profile and /etc/bashrc with &quot;functioning&quot; examples. 
<br>
I compared my /etc/profile and /etc/bashrc with colleagues.  Comparisons don't raise any flags. 
<br>
<p>I can provide other diagnostic-type information as requested. 
<br>
<p><pre>
--
Jon Stergiou
-----Original Message-----
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Stergiou, Jonathan C CIV NSWCCD West Bethesda,6640
Sent: Monday, April 11, 2011 9:53
To: users_at_[hidden]
Subject: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc
I am running OpenMPI 1.4.2 under RHEL 5.5.  After install, I tested with &quot;mpirun -np 4 date&quot;; the command returned four &quot;date&quot; outputs. 
Then I tried running two different MPI programs, &quot;geminimpi&quot; and &quot;salinas&quot;.  Both run correctly with &quot;mpirun -np 1 $prog&quot;.  However, both hang indefinitely when I use anything other than &quot;-np 1&quot;.  
Next, I ran &quot;mpirun --debug-daemons -np 1 geminimpi&quot; and got the following:  (this looks good, and is what I would expect)
[code]
[xxx_at_XXX_TUX01 ~]$ mpirun --debug-daemons -np 1 geminimpi
[XXX_TUX01:06558] [[15027,0],0] node[0].name XXX_TUX01 daemon 0 arch ffc91200
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received add_local_procs
[XXX_TUX01:06558] [[15027,0],0] orted_recv: received sync+nidmap from local proc [[15027,1],0]
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received collective data cmd
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received message_local_procs
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received collective data cmd
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received message_local_procs
Fluid Proc Ready: ID, FluidMaster,LagMaster =     0    0    1
 Checking license for Gemini
 Checking license for Linux OS
 Checking internal license list
 License valid
 
 GEMINI Startup
 Gemini +++ Version 5.1.00  20110501 +++    
 
 +++++ ERROR MESSAGE +++++
 FILE MISSING (Input): name = gemini.inp
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received waitpid_fired cmd
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received iof_complete cmd
--------------------------------------------------------------------------
mpirun has exited due to process rank 0 with PID 6559 on
node XXX_TUX01 exiting without calling &quot;finalize&quot;. This may
have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
--------------------------------------------------------------------------
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received exit
[/code]
With &quot;mpirun --debug-daemons -np 2 geminimpi&quot;, it hangs like this: (hangs indefinitely)
[code]
[xxx_at_XXX_TUX01 ~]$ mpirun --debug-daemons -np 2 geminimpi
[XXX_TUX01:06570] [[14983,0],0] node[0].name XXX_TUX01 daemon 0 arch ffc91200
[XXX_TUX01:06570] [[14983,0],0] orted_cmd: received add_local_procs
[XXX_TUX01:06570] [[14983,0],0] orted_recv: received sync+nidmap from local proc [[14983,1],1]
[XXX_TUX01:06570] [[14983,0],0] orted_recv: received sync+nidmap from local proc [[14983,1],0]
[XXX_TUX01:06570] [[14983,0],0] orted_cmd: received collective data cmd
[XXX_TUX01:06570] [[14983,0],0] orted_cmd: received collective data cmd
[XXX_TUX01:06570] [[14983,0],0] orted_cmd: received message_local_procs
[/code]
I cloned my entire installation to a number of other machines to test.  On all the other workstations, everything behaves correctly and various regression suites return good results. 
Any ideas? 
--
Jon Stergiou
Engineer
NSWC Carderock
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16203/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16204.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16202.php">Jeff Squyres: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16193.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16204.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16204.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
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
