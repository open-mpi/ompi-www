<?
$subject_val = "Re: [OMPI users] Tmpdir work for first process only";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 19:42:27 2007" -->
<!-- isoreceived="20071116004227" -->
<!-- sent="Thu, 15 Nov 2007 16:42:17 -0800" -->
<!-- isosent="20071116004217" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tmpdir work for first process only" -->
<!-- id="C7E3CAE4-F6F6-440D-94F2-E206F6DFB4F1_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="473C6019.4070805_at_infotech.monash.edu.au" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 19:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4486.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4484.php">Murat Knecht: "[OMPI users] MPI daemons suspend running job"</a>
<li><strong>In reply to:</strong> <a href="4478.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Clement,
<br>
<p>First, if you run 400 jobs on 16 nodes you will end up with around 32  
<br>
processes on each nodes. Depending on the memory footprint of the  
<br>
application it will fail because of memory exhaustion. Usually I am  
<br>
able to oversubscribe up to 64 NAS class B processes on 2GB, and less  
<br>
than 16 class C.
<br>
<p>About your initial problem: tmpdir is the temporary directory for the  
<br>
orte seed only. As you discovered, this parameter is ignored by all  
<br>
the other processes. However you can use the TMPDIR environment  
<br>
variable to set the tmpdir on every open MPI process. Juste use mpirun  
<br>
-X TMPDIR=/some/where to set it.
<br>
<p>Regards,
<br>
Aurelien
<br>
<p><p>Le 15 nov. 07 &#224; 07:04, Clement Kam Man Chu a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply.  I am using pbs job scheduler and I reqested 16
</span><br>
<span class="quotelev1">&gt; cpus to run 400 processes, but I don't how many processes are  
</span><br>
<span class="quotelev1">&gt; allocated
</span><br>
<span class="quotelev1">&gt; on each cpus.  Do you think it is a problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clement
</span><br>
<span class="quotelev2">&gt;&gt; Are you running all of these processes on the same machine, or
</span><br>
<span class="quotelev2">&gt;&gt; multiple different machines?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you're running 400 processes on the same machine, it may well be
</span><br>
<span class="quotelev2">&gt;&gt; that you are simply running out of memory or other OS resources.  In
</span><br>
<span class="quotelev2">&gt;&gt; particular, I've never seem iof fail that way before (iof is our I/O
</span><br>
<span class="quotelev2">&gt;&gt; forwarding subsystem).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the iof code, the error you're seeing occurs when iof is
</span><br>
<span class="quotelev2">&gt;&gt; trying to create a pipe between our OMPI &quot;helper daemon&quot; and the  
</span><br>
<span class="quotelev2">&gt;&gt; newly
</span><br>
<span class="quotelev2">&gt;&gt; spawned user executable and fails.  The only reason that I can guess
</span><br>
<span class="quotelev2">&gt;&gt; for why that would happen is if a max limit of pipes have been  
</span><br>
<span class="quotelev2">&gt;&gt; created
</span><br>
<span class="quotelev2">&gt;&gt; on a machine and the OS refuses to create any more...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2007, at 9:36 PM, Clement Kam Man Chu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have configured out why the tmpdir parameter works for the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process. I got another problem if I tried to run 400 processes (no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem if under 400 processes). I got an error &quot;ORTE_ERROR_LOG: Out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resource in file base/iof_base_setup.c at line 106&quot;. I attached the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message as below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] tmpdir /jobfs/z07/247752.ac-pbs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] universe default-universe-12442
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] user kxc565
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] host ac27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] jobid 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] procid 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] procdir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-12442/0/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] jobdir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-12442/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] unidir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-12442
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] tmp: ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] [0,0,0] contact_file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-12442/universe-setup.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] [0,0,0] wrote setup file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] universe default-universe-12442
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] user kxc565
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] host ac27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] jobid 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] procid 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] procdir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-12442/0/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] jobdir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-12442/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] unidir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe-12442
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] tmp: /jobfs/z07/247752.ac-pbs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/iof_base_setup.c at line 106
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_default_module.c at line 663
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_default_module.c at line 1191
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file orted.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 594
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] spawn: in job_state_callback(jobid = 1, state = 0x80)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node ac27 exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15 (Terminated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12447] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ac27:12442] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Clement
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Clement Kam Man Chu wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using openmpi 1.2.3 under ia64 machine. I typed &quot;mpirun -d --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmpdir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/565/kxc565/tmpdir -mca btl sm -np 400 ./testprogram&quot;. I found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the first process can use my parameter setting to store tmp file,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the second process used its default setting to store tmp file in / 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory. How can I change all processes stored in a directory I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; required? I have attached the message from openmpi for more in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; details.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Clement
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] tmpdir /home/565/kxc565/tmpdir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] universe default-universe-27928
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] user kxc565
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] host ac27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] jobid 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] procid 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] procdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; universe-27928/0/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] jobdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; universe-27928/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] unidir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; universe-27928
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] tmp: ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] [0,0,0] contact_file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; universe-27928/universe-setup.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] [0,0,0] wrote setup file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] universe default-universe-27928
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] user kxc565
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] host ac27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] jobid 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] procid 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] procdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] jobdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] unidir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/iof_base_setup.c at line 106
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; odls_default_module.c at line 663
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; odls_default_module.c at line 1191
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted.c at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line 594
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] spawn: in job_state_callback(jobid = 1, state = 0x80)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node ac27 exited on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15 (Terminated).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27932] sess_dir_finalize: proc session dir not empty -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ac27:27928] sess_dir_finalize: proc session dir not empty -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Clement Kam Man Chu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Faculty of Information Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Monash University, Caulfield Campus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph: 61 3 9903 2355
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Clement Kam Man Chu
</span><br>
<span class="quotelev1">&gt; Research Assistant
</span><br>
<span class="quotelev1">&gt; Faculty of Information Technology
</span><br>
<span class="quotelev1">&gt; Monash University, Caulfield Campus
</span><br>
<span class="quotelev1">&gt; Ph: 61 3 9903 2355
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
<p><p><p><pre>
--
Dr. Aurelien Bouteiller, Sr. Research Associate
Innovative Computing Laboratory - MPI group
+1 865 974 6321
1122 Volunteer Boulevard
Claxton Education Building Suite 350
Knoxville, TN 37996
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4486.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4484.php">Murat Knecht: "[OMPI users] MPI daemons suspend running job"</a>
<li><strong>In reply to:</strong> <a href="4478.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<!-- nextthread="start" -->
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
