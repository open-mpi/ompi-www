<?
$subject_val = "Re: [OMPI users] Tmpdir work for first process only";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 00:42:22 2007" -->
<!-- isoreceived="20071115054222" -->
<!-- sent="Thu, 15 Nov 2007 16:36:00 +1100" -->
<!-- isosent="20071115053600" -->
<!-- name="Clement Kam Man Chu" -->
<!-- email="clement.chu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tmpdir work for first process only" -->
<!-- id="473BDAC0.20406_at_infotech.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="473BC42D.1030408_at_infotech.monash.edu.au" -->
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
<strong>From:</strong> Clement Kam Man Chu (<em>clement.chu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 00:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4471.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4469.php">Clement Kam Man Chu: "[OMPI users] Tmpdir work for first process only"</a>
<li><strong>In reply to:</strong> <a href="4469.php">Clement Kam Man Chu: "[OMPI users] Tmpdir work for first process only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4476.php">Jeff Squyres: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Reply:</strong> <a href="4476.php">Jeff Squyres: "Re: [OMPI users] Tmpdir work for first process only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have configured out why the tmpdir parameter works for the first 
<br>
process. I got another problem if I tried to run 400 processes (no 
<br>
problem if under 400 processes). I got an error &quot;ORTE_ERROR_LOG: Out of 
<br>
resource in file base/iof_base_setup.c at line 106&quot;. I attached the 
<br>
message as below:
<br>
<p>[ac27:12442] [0,0,0] setting up session dir with
<br>
[ac27:12442] tmpdir /jobfs/z07/247752.ac-pbs
<br>
[ac27:12442] universe default-universe-12442
<br>
[ac27:12442] user kxc565
<br>
[ac27:12442] host ac27
<br>
[ac27:12442] jobid 0
<br>
[ac27:12442] procid 0
<br>
[ac27:12442] procdir: 
<br>
/jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-universe-12442/0/0
<br>
[ac27:12442] jobdir: 
<br>
/jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-universe-12442/0
<br>
[ac27:12442] unidir: 
<br>
/jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-universe-12442
<br>
[ac27:12442] top: openmpi-sessions-kxc565_at_ac27_0
<br>
[ac27:12442] tmp: ??
<br>
[ac27:12442] [0,0,0] contact_file 
<br>
/jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-universe-12442/universe-setup.txt
<br>
[ac27:12442] [0,0,0] wrote setup file
<br>
[ac27:12447] [0,0,1] setting up session dir with
<br>
[ac27:12447] universe default-universe-12442
<br>
[ac27:12447] user kxc565
<br>
[ac27:12447] host ac27
<br>
[ac27:12447] jobid 0
<br>
[ac27:12447] procid 1
<br>
[ac27:12447] procdir: 
<br>
/jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-universe-12442/0/1
<br>
[ac27:12447] jobdir: 
<br>
/jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-universe-12442/0
<br>
[ac27:12447] unidir: 
<br>
/jobfs/z07/247752.ac-pbs/openmpi-sessions-kxc565_at_ac27_0/default-universe-12442
<br>
[ac27:12447] top: openmpi-sessions-kxc565_at_ac27_0
<br>
[ac27:12447] tmp: /jobfs/z07/247752.ac-pbs
<br>
[ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file 
<br>
base/iof_base_setup.c at line 106
<br>
[ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file 
<br>
odls_default_module.c at line 663
<br>
[ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file 
<br>
odls_default_module.c at line 1191
<br>
[ac27:12447] [0,0,1] ORTE_ERROR_LOG: Out of resource in file orted.c at 
<br>
line 594
<br>
[ac27:12442] spawn: in job_state_callback(jobid = 1, state = 0x80)
<br>
mpirun noticed that job rank 0 with PID 0 on node ac27 exited on signal 
<br>
15 (Terminated).
<br>
[ac27:12447] sess_dir_finalize: job session dir not empty - leaving
<br>
[ac27:12447] sess_dir_finalize: proc session dir not empty - leaving
<br>
[ac27:12442] sess_dir_finalize: proc session dir not empty - leaving
<br>
<p><p>Thanks,
<br>
Clement
<br>
<p>Clement Kam Man Chu wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.2.3 under ia64 machine. I typed &quot;mpirun -d --tmpdir 
</span><br>
<span class="quotelev1">&gt; /home/565/kxc565/tmpdir -mca btl sm -np 400 ./testprogram&quot;. I found only 
</span><br>
<span class="quotelev1">&gt; the first process can use my parameter setting to store tmp file, but 
</span><br>
<span class="quotelev1">&gt; the second process used its default setting to store tmp file in /tmp 
</span><br>
<span class="quotelev1">&gt; directory. How can I change all processes stored in a directory I 
</span><br>
<span class="quotelev1">&gt; required? I have attached the message from openmpi for more in details. 
</span><br>
<span class="quotelev1">&gt; Thanks for any help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Clement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ac27:27928] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [ac27:27928] tmpdir /home/565/kxc565/tmpdir
</span><br>
<span class="quotelev1">&gt; [ac27:27928] universe default-universe-27928
</span><br>
<span class="quotelev1">&gt; [ac27:27928] user kxc565
</span><br>
<span class="quotelev1">&gt; [ac27:27928] host ac27
</span><br>
<span class="quotelev1">&gt; [ac27:27928] jobid 0
</span><br>
<span class="quotelev1">&gt; [ac27:27928] procid 0
</span><br>
<span class="quotelev1">&gt; [ac27:27928] procdir: 
</span><br>
<span class="quotelev1">&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0/0
</span><br>
<span class="quotelev1">&gt; [ac27:27928] jobdir: 
</span><br>
<span class="quotelev1">&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0
</span><br>
<span class="quotelev1">&gt; [ac27:27928] unidir: 
</span><br>
<span class="quotelev1">&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928
</span><br>
<span class="quotelev1">&gt; [ac27:27928] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev1">&gt; [ac27:27928] tmp: ?
</span><br>
<span class="quotelev1">&gt; [ac27:27928] [0,0,0] contact_file 
</span><br>
<span class="quotelev1">&gt; /home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [ac27:27928] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [ac27:27932] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [ac27:27932] universe default-universe-27928
</span><br>
<span class="quotelev1">&gt; [ac27:27932] user kxc565
</span><br>
<span class="quotelev1">&gt; [ac27:27932] host ac27
</span><br>
<span class="quotelev1">&gt; [ac27:27932] jobid 0
</span><br>
<span class="quotelev1">&gt; [ac27:27932] procid 1
</span><br>
<span class="quotelev1">&gt; [ac27:27932] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0/1
</span><br>
<span class="quotelev1">&gt; [ac27:27932] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0
</span><br>
<span class="quotelev1">&gt; [ac27:27932] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928
</span><br>
<span class="quotelev1">&gt; [ac27:27932] top: openmpi-sessions-kxc565_at_ac27_0
</span><br>
<span class="quotelev1">&gt; [ac27:27932] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file 
</span><br>
<span class="quotelev1">&gt; base/iof_base_setup.c at line 106
</span><br>
<span class="quotelev1">&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file 
</span><br>
<span class="quotelev1">&gt; odls_default_module.c at line 663
</span><br>
<span class="quotelev1">&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file 
</span><br>
<span class="quotelev1">&gt; odls_default_module.c at line 1191
</span><br>
<span class="quotelev1">&gt; [ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file orted.c at 
</span><br>
<span class="quotelev1">&gt; line 594
</span><br>
<span class="quotelev1">&gt; [ac27:27928] spawn: in job_state_callback(jobid = 1, state = 0x80)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node ac27 exited on signal 
</span><br>
<span class="quotelev1">&gt; 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; [ac27:27932] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [ac27:27932] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [ac27:27928] sess_dir_finalize: proc session dir not empty - leaving
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
<li><strong>Next message:</strong> <a href="4471.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4469.php">Clement Kam Man Chu: "[OMPI users] Tmpdir work for first process only"</a>
<li><strong>In reply to:</strong> <a href="4469.php">Clement Kam Man Chu: "[OMPI users] Tmpdir work for first process only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4476.php">Jeff Squyres: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Reply:</strong> <a href="4476.php">Jeff Squyres: "Re: [OMPI users] Tmpdir work for first process only"</a>
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
