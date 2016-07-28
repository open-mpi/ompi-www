<?
$subject_val = "[OMPI users] shmem.jar not available for Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 05:49:45 2014" -->
<!-- isoreceived="20140903094945" -->
<!-- sent="Wed, 3 Sep 2014 11:49:24 +0200 (CEST)" -->
<!-- isosent="20140903094924" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] shmem.jar not available for Solaris" -->
<!-- id="201409030949.s839nOfR004238_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] shmem.jar not available for Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 05:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25237.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="25235.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-1.9a1r32664 on my machines with
<br>
Sun C 5.12 and gcc-4.9.0. Unfortunately shmem.jar isn't
<br>
available on my Solaris machines.
<br>
<p>tyr java 112 mpijavac InitFinalizeMain.java 
<br>
warning: [path] bad path element &quot;/usr/local/openmpi-1.9_64_cc/lib64/shmem.jar&quot;: no such file or directory
<br>
1 warning
<br>
tyr java 113 
<br>
<p><p>tyr prog 564 dir */openmpi-1.9_64_*cc/*/*.jar
<br>
-rw-r--r-- 1 root root 557402 Sep  3 10:39 Linux_x86_64/openmpi-1.9_64_cc/bin/vtsetup.jar
<br>
-rw-r--r-- 1 root root  60071 Sep  3 10:39 Linux_x86_64/openmpi-1.9_64_cc/lib64/mpi.jar
<br>
-rw-r--r-- 1 root root   9896 Sep  3 10:40 Linux_x86_64/openmpi-1.9_64_cc/lib64/shmem.jar
<br>
-rw-r--r-- 1 root root 557402 Sep  3 10:31 Linux_x86_64/openmpi-1.9_64_gcc/bin/vtsetup.jar
<br>
-rw-r--r-- 1 root root  60071 Sep  3 10:31 Linux_x86_64/openmpi-1.9_64_gcc/lib64/mpi.jar
<br>
-rw-r--r-- 1 root root   9896 Sep  3 10:32 Linux_x86_64/openmpi-1.9_64_gcc/lib64/shmem.jar
<br>
<p>-rw-r--r-- 1 root root 557402 Sep  3 11:22 SunOS_sparc/openmpi-1.9_64_cc/bin/vtsetup.jar
<br>
-rw-r--r-- 1 root root  60071 Sep  3 11:22 SunOS_sparc/openmpi-1.9_64_cc/lib64/mpi.jar
<br>
-rw-r--r-- 1 root root 557402 Sep  3 11:23 SunOS_sparc/openmpi-1.9_64_gcc/bin/vtsetup.jar
<br>
-rw-r--r-- 1 root root  60071 Sep  3 11:23 SunOS_sparc/openmpi-1.9_64_gcc/lib64/mpi.jar
<br>
<p>-rw-r--r-- 1 root root 557402 Sep  3 11:02 SunOS_x86_64/openmpi-1.9_64_cc/bin/vtsetup.jar
<br>
-rw-r--r-- 1 root root  60071 Sep  3 11:02 SunOS_x86_64/openmpi-1.9_64_cc/lib64/mpi.jar
<br>
-rw-r--r-- 1 root root 557402 Sep  3 11:18 SunOS_x86_64/openmpi-1.9_64_gcc/bin/vtsetup.jar
<br>
-rw-r--r-- 1 root root  60071 Sep  3 11:19 SunOS_x86_64/openmpi-1.9_64_gcc/lib64/mpi.jar
<br>
tyr prog 565 
<br>
<p><p>I would be grateful, if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25237.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="25235.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
