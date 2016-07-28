<?
$subject_val = "[OMPI users] Tmpdir work for first process only";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 23:06:01 2007" -->
<!-- isoreceived="20071115040601" -->
<!-- sent="Thu, 15 Nov 2007 14:59:41 +1100" -->
<!-- isosent="20071115035941" -->
<!-- name="Clement Kam Man Chu" -->
<!-- email="clement.chu_at_[hidden]" -->
<!-- subject="[OMPI users] Tmpdir work for first process only" -->
<!-- id="473BC42D.1030408_at_infotech.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Tmpdir work for first process only<br>
<strong>From:</strong> Clement Kam Man Chu (<em>clement.chu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 22:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4470.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Previous message:</strong> <a href="4468.php">Jeff Squyres: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4470.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Reply:</strong> <a href="4470.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using openmpi 1.2.3 under ia64 machine. I typed &quot;mpirun -d --tmpdir 
<br>
/home/565/kxc565/tmpdir -mca btl sm -np 400 ./testprogram&quot;. I found only 
<br>
the first process can use my parameter setting to store tmp file, but 
<br>
the second process used its default setting to store tmp file in /tmp 
<br>
directory. How can I change all processes stored in a directory I 
<br>
required? I have attached the message from openmpi for more in details. 
<br>
Thanks for any help.
<br>
<p>Cheers,
<br>
Clement
<br>
<p><p>[ac27:27928] [0,0,0] setting up session dir with
<br>
[ac27:27928] tmpdir /home/565/kxc565/tmpdir
<br>
[ac27:27928] universe default-universe-27928
<br>
[ac27:27928] user kxc565
<br>
[ac27:27928] host ac27
<br>
[ac27:27928] jobid 0
<br>
[ac27:27928] procid 0
<br>
[ac27:27928] procdir: 
<br>
/home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0/0
<br>
[ac27:27928] jobdir: 
<br>
/home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0
<br>
[ac27:27928] unidir: 
<br>
/home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928
<br>
[ac27:27928] top: openmpi-sessions-kxc565_at_ac27_0
<br>
[ac27:27928] tmp: ?
<br>
[ac27:27928] [0,0,0] contact_file 
<br>
/home/565/kxc565/tmpdir/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/universe-setup.txt
<br>
[ac27:27928] [0,0,0] wrote setup file
<br>
[ac27:27932] [0,0,1] setting up session dir with
<br>
[ac27:27932] universe default-universe-27928
<br>
[ac27:27932] user kxc565
<br>
[ac27:27932] host ac27
<br>
[ac27:27932] jobid 0
<br>
[ac27:27932] procid 1
<br>
[ac27:27932] procdir: 
<br>
/tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0/1
<br>
[ac27:27932] jobdir: 
<br>
/tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928/0
<br>
[ac27:27932] unidir: 
<br>
/tmp/openmpi-sessions-kxc565_at_ac27_0/default-universe-27928
<br>
[ac27:27932] top: openmpi-sessions-kxc565_at_ac27_0
<br>
[ac27:27932] tmp: /tmp
<br>
[ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file 
<br>
base/iof_base_setup.c at line 106
<br>
[ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file 
<br>
odls_default_module.c at line 663
<br>
[ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file 
<br>
odls_default_module.c at line 1191
<br>
[ac27:27932] [0,0,1] ORTE_ERROR_LOG: Out of resource in file orted.c at 
<br>
line 594
<br>
[ac27:27928] spawn: in job_state_callback(jobid = 1, state = 0x80)
<br>
mpirun noticed that job rank 0 with PID 0 on node ac27 exited on signal 
<br>
15 (Terminated).
<br>
[ac27:27932] sess_dir_finalize: job session dir not empty - leaving
<br>
[ac27:27932] sess_dir_finalize: proc session dir not empty - leaving
<br>
[ac27:27928] sess_dir_finalize: proc session dir not empty - leaving
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="4470.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Previous message:</strong> <a href="4468.php">Jeff Squyres: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4470.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Reply:</strong> <a href="4470.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
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
