<?
$subject_val = "[OMPI users] Questions on /tmp/openmpi-sessions-userid directory";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 04:55:21 2010" -->
<!-- isoreceived="20100307095521" -->
<!-- sent="Sun, 7 Mar 2010 10:55:14 +0100" -->
<!-- isosent="20100307095514" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="[OMPI users] Questions on /tmp/openmpi-sessions-userid directory" -->
<!-- id="1C4CE477-C94D-4890-838E-288B4C465DFE_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Questions on /tmp/openmpi-sessions-userid directory<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 04:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12268.php">Reuti: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Reply:</strong> <a href="12268.php">Reuti: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Reply:</strong> <a href="12271.php">Ralph Castain: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was having non-reproducible hangs in an OpenMPI program. While troubleshooting this problem I found that there were many temporary directories in my /tmp/openmpi-sessions-userid directory (probably the result of MPI_Abort aborted OpenMPI programs). I cleaned those directories up and it looks like the hangs have gone.
<br>
My questions are:
<br>
It looks like the name of the temporary directory in /tmp/openmpi-sessions-userid directory is a process-id. What happens when an OpenMPI program starts and the temporary directory in /tmp/openmpi-sessions-userid already exists?
<br>
Could existing temporary directories in /tmp/openmpi-sessions-userid cause an OpenMPI program to hang?
<br>
Is there a way to ensure that the temporary directory created in /tmp/openmpi-sessions-userid is always removed after an OpenMPI program has run?
<br>
<p>Regards,
<br>
Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12268.php">Reuti: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Reply:</strong> <a href="12268.php">Reuti: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Reply:</strong> <a href="12271.php">Ralph Castain: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
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
