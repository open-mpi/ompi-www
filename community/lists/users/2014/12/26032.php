<?
$subject_val = "Re: [OMPI users] ERROR: C_FUNLOC function";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 09:04:13 2014" -->
<!-- isoreceived="20141218140413" -->
<!-- sent="Thu, 18 Dec 2014 15:03:52 +0100 (CET)" -->
<!-- isosent="20141218140352" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: C_FUNLOC function" -->
<!-- id="201412181403.sBIE3qWh002624_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] ERROR: C_FUNLOC function" -->
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
<strong>Subject:</strong> Re: [OMPI users] ERROR: C_FUNLOC function<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 09:03:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26033.php">Jörg Stiller: "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="26031.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe in reply to:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mike,
<br>
<p><span class="quotelev1">&gt; Could you please check the /etc/mtab file for real FS type for
</span><br>
<span class="quotelev1">&gt; the following mount points:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[16]:/misc fs:autofs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[17]:/net fs:autofs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[18]:/home fs:autofs nfs:No
</span><br>
<p>/etc/mtab has the following entries:
<br>
<p>/etc/auto.misc /misc autofs rw,relatime,fd=6,pgrp=1781,timeout=600,minproto=5,maxproto=5,indirect 0 0
<br>
/etc/auto.net /net autofs rw,relatime,fd=12,pgrp=1781,timeout=600,minproto=5,maxproto=5,indirect 0 0
<br>
/etc/auto.home /home autofs rw,relatime,fd=18,pgrp=1781,timeout=600,minproto=5,maxproto=5,indirect 0 0
<br>
<p><p>linpc1 etc 106 cat auto.misc
<br>
cd   -fstype=iso9660,ro,nosuid,nodev :/dev/cdrom
<br>
mail -rw,quota,rsize=8192,wsize=8192,timeo=14,nfsvers=2 xxx:/var/mail
<br>
linpc1 etc 107 
<br>
<p>auto.net is a shell script so that I assume it is part of our
<br>
Linux distribution.
<br>
<p>linpc1 etc 108 cat auto.home
<br>
* -rw,quota,rsize=8192,wsize=8192,timeo=14,nfsvers=3,lock,mand xxx:/export/home/&amp;
<br>
linpc1 etc 109 
<br>
<p><p>linpc1 etc 110 mount | grep -e misc -e net -e home
<br>
/etc/auto.misc on /misc type autofs (rw,relatime,fd=6,pgrp=1781,timeout=600,minproto=5,maxproto=5,indirect)
<br>
/etc/auto.net on /net type autofs (rw,relatime,fd=12,pgrp=1781,timeout=600,minproto=5,maxproto=5,indirect)
<br>
/etc/auto.home on /home type autofs (rw,relatime,fd=18,pgrp=1781,timeout=600,minproto=5,maxproto=5,indirect)
<br>
xxx:/export/home/fd1026/ on /home/fd1026 type nfs 
<br>
(rw,relatime,mand,vers=3,rsize=8192,wsize=8192,namlen=255,hard,proto=tcp,timeo=14,retrans=2,sec=sys,mountaddr=193.174.26.203,mountvers=3,mountport=32901,mountproto=udp,local_lock=none,addr=193.174.26.20
<br>
3)
<br>
xxx:/var/mail/ on /misc/mail type nfs 
<br>
(rw,relatime,vers=2,rsize=8192,wsize=8192,namlen=255,hard,proto=tcp,timeo=14,retrans=2,sec=sys,mountaddr=193.174.26.158,mountvers=1,mountport=32777,mountproto=udp,local_lock=none,addr=193.174.26.158)
<br>
linpc1 etc 111 
<br>
<p><p><p><span class="quotelev1">&gt; could you please check if mntent.h and paths.h were detected
</span><br>
<span class="quotelev1">&gt; by &quot;configure&quot; in config.log?
</span><br>
<p>tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc 141 grep -e mntent.h -e paths.h config.log
<br>
configure:60392: checking mntent.h usability
<br>
configure:60392: checking mntent.h presence
<br>
configure:60392: checking for mntent.h
<br>
configure:60392: checking paths.h usability
<br>
configure:60392: checking paths.h presence
<br>
configure:60392: checking for paths.h
<br>
ac_cv_header_mntent_h=yes
<br>
ac_cv_header_paths_h=yes
<br>
tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc 142 
<br>
<p><p>Please let me know if I can provide anything else.
<br>
<p><p>Kinds regards and thank you very much for your help
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26033.php">Jörg Stiller: "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="26031.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe in reply to:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
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
