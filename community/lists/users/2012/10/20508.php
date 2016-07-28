<?
$subject_val = "Re: [OMPI users] openmpi-1.6.2 and registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 04:23:38 2012" -->
<!-- isoreceived="20121018082338" -->
<!-- sent="Thu, 18 Oct 2012 08:23:32 +0000" -->
<!-- isosent="20121018082332" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.2 and registerable memory" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903BD953E_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAATyho6hW=NcPaheJPm3-facQrqCbeiHa4eGMCf_wtcymZFPxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6.2 and registerable memory<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 04:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20509.php">Siegmar Gross: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20507.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>In reply to:</strong> <a href="20506.php">Alan Wild: "[OMPI users] openmpi-1.6.2 and registerable memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>This question was answered by Yevgeny Kliteynik from Mellanox on the
<br>
developers list. The amount of registerable memory should be about twice the
<br>
size of the physical memory because of the way physical memory is being
<br>
registered with InfiniBand HCAs, not because of possible overcommitment. You
<br>
can read the full description here:
<br>
<p>&nbsp;
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2012/08/11417.php">http://www.open-mpi.org/community/lists/devel/2012/08/11417.php</a>
<br>
<p>&nbsp;
<br>
<p>Kind regards,
<br>
<p>Hristo
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Alan Wild
Sent: Thursday, October 18, 2012 5:47 AM
To: users_at_[hidden]
Subject: [OMPI users] openmpi-1.6.2 and registerable memory
 
I recently installed 1.6.2 on our cluster only to be introduced to the new
warning messages concerning registerable memory and physical memory.
OpenMPI is indicating:
 
  Registerable memory:     32768 MiB
  Total memory:            48434 MiB
Which is clearly less than the &quot;3/4 total memory&quot; that produces the warning.
However, our systems 1) have swap completely disabled and 2) we've set the
Linux kernel's vm behavior to disable overcommits.  (i.e.
/proc/sys/vm/overcommit_memory == 2).  So I'm not sure the guidance of
setting Registerable memory to twice physical memory makes sense.  Worse
still, I don't believe I can increase the log_num_mtt (or log_mtts_per_seg)
as the any increase in these values would push cause registerable memory to
double (and exceed total memory).
 
OR... am I misunderstanding the situation?  (Maybe it would be okay to have
more registerable memory if the drivers will properly handle the failed
malloc once they try and allocated memory beynd the physical memory).
 
So, in light of our vm and swap setting, would it still be appropriate to
increase log_num_mtt?  If not, can we at least get a setting to suppress the
warning message or (can the 3/4 threshold be lowered slightly perhaps 67% of
total memory)?
 
Changing the vm or swap behavior is probably out of the question on our
systems.  Our system stability improved dramatically when we went to these
settings (over the Linux default) as our systems would never OOM properly.
 
-Alan
-- 
alan_at_[hidden] <a href="http://humbleville.blogspot.com">http://humbleville.blogspot.com</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20508/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20509.php">Siegmar Gross: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20507.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>In reply to:</strong> <a href="20506.php">Alan Wild: "[OMPI users] openmpi-1.6.2 and registerable memory"</a>
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
