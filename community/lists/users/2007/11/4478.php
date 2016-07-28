<?
$subject_val = "Re: [OMPI users] Tmpdir work for first process only";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 10:11:22 2007" -->
<!-- isoreceived="20071115151122" -->
<!-- sent="Fri, 16 Nov 2007 02:04:57 +1100" -->
<!-- isosent="20071115150457" -->
<!-- name="Clement Kam Man Chu" -->
<!-- email="Clement.Chu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tmpdir work for first process only" -->
<!-- id="473C6019.4070805_at_infotech.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="421F5E8E-CFFA-4A0E-9F34-D9A20503EB0C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tmpdir work for first process only<br>
<strong>From:</strong> Clement Kam Man Chu (<em>Clement.Chu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 10:04:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4477.php">Jeff Squyres: "Re: [OMPI users] Error on running large number of processes"</a>
<li><strong>In reply to:</strong> <a href="4476.php">Jeff Squyres: "Re: [OMPI users] Tmpdir work for first process only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4485.php">Aurelien Bouteiller: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Reply:</strong> <a href="4485.php">Aurelien Bouteiller: "Re: [OMPI users] Tmpdir work for first process only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p>Thanks for your reply.  I am using pbs job scheduler and I reqested 16 
<br>
cpus to run 400 processes, but I don't how many processes are allocated 
<br>
on each cpus.  Do you think it is a problem?
<br>
<p>Clement
<br>
<span class="quotelev1">&gt; Are you running all of these processes on the same machine, or  
</span><br>
<span class="quotelev1">&gt; multiple different machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're running 400 processes on the same machine, it may well be  
</span><br>
<span class="quotelev1">&gt; that you are simply running out of memory or other OS resources.  In  
</span><br>
<span class="quotelev1">&gt; particular, I've never seem iof fail that way before (iof is our I/O  
</span><br>
<span class="quotelev1">&gt; forwarding subsystem).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the iof code, the error you're seeing occurs when iof is  
</span><br>
<span class="quotelev1">&gt; trying to create a pipe between our OMPI &quot;helper daemon&quot; and the newly  
</span><br>
<span class="quotelev1">&gt; spawned user executable and fails.  The only reason that I can guess  
</span><br>
<span class="quotelev1">&gt; for why that would happen is if a max limit of pipes have been created  
</span><br>
<span class="quotelev1">&gt; on a machine and the OS refuses to create any more...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2007, at 9:36 PM, Clement Kam Man Chu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have configured out why the tmpdir parameter works for the first
</span><br>
<span class="quotelev2">&gt;&gt; process. I got another problem if I tried to run 400 processes (no
</span><br>
<span class="quotelev2">&gt;&gt; problem if under 400 processes). I got an error &quot;ORTE_ERROR_LOG: Out  
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; resource in file base/iof_base_setup.c at line 106&quot;. I attached the
</span><br>
<span class="quotelev2">&gt;&gt; message as below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] tmpdir /jobfs/z07/247752.ac-pbs
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] universe default-universe-12442
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] user kxc565
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] host ac27
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] jobid 0
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] procid 0
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] procdir:
</span><br>
<span class="quotelev2">&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-12442/0/0
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] jobdir:
</span><br>
<span class="quotelev2">&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-12442/0
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] unidir:
</span><br>
<span class="quotelev2">&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-12442
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] tmp: ??
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] [0,0,0] contact_file
</span><br>
<span class="quotelev2">&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-12442/universe-setup.txt
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] universe default-universe-12442
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] user kxc565
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] host ac27
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] jobid 0
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] procid 1
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] procdir:
</span><br>
<span class="quotelev2">&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-12442/0/1
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] jobdir:
</span><br>
<span class="quotelev2">&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-12442/0
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] unidir:
</span><br>
<span class="quotelev2">&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-12442
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] tmp: /jobfs/z07/247752.ac-pbs
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt; base/iof_base_setup.c at line 106
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_module.c at line 663
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_module.c at line 1191
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file orted.c  
</span><br>
<span class="quotelev2">&gt;&gt; at
</span><br>
<span class="quotelev2">&gt;&gt; line 594
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] spawn: in job_state_callback(jobid = 1, state = 0x80)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node ac27 exited on  
</span><br>
<span class="quotelev2">&gt;&gt; signal
</span><br>
<span class="quotelev2">&gt;&gt; 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12447] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [ac27:12442] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Clement
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Clement Kam Man Chu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using openmpi 1.2.3 under ia64 machine. I typed &quot;mpirun -d -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmpdir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/565/kxc565/tmpdir -mca btl sm -np 400 ./testprogram&quot;. I found  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the first process can use my parameter setting to store tmp file, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the second process used its default setting to store tmp file in /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory. How can I change all processes stored in a directory I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required? I have attached the message from openmpi for more in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Clement
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] tmpdir /home/565/kxc565/tmpdir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] universe default-universe-27928
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] user kxc565
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] host ac27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] jobid 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] procid 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] procdir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-27928/0/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] jobdir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-27928/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] unidir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-27928
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] tmp: ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] [0,0,0] contact_file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-27928/universe-setup.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] [0,0,0] wrote setup file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] universe default-universe-27928
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] user kxc565
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] host ac27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] jobid 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] procid 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] procdir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] jobdir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] unidir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/iof_base_setup.c at line 106
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_default_module.c at line 663
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_default_module.c at line 1191
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 594
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] spawn: in job_state_callback(jobid = 1, state = 0x80)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node ac27 exited on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15 (Terminated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27932] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:27928] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Clement Kam Man Chu
</span><br>
<span class="quotelev2">&gt;&gt; Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; Faculty of Information Technology
</span><br>
<span class="quotelev2">&gt;&gt; Monash University, Caulfield Campus
</span><br>
<span class="quotelev2">&gt;&gt; Ph: 61 3 9903 2355
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Clement Kam Man Chu
Research Assistant
Faculty of Information Technology
Monash University, Caulfield Campus
Ph: 61 3 9903 2355
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4477.php">Jeff Squyres: "Re: [OMPI users] Error on running large number of processes"</a>
<li><strong>In reply to:</strong> <a href="4476.php">Jeff Squyres: "Re: [OMPI users] Tmpdir work for first process only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4485.php">Aurelien Bouteiller: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Reply:</strong> <a href="4485.php">Aurelien Bouteiller: "Re: [OMPI users] Tmpdir work for first process only"</a>
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
