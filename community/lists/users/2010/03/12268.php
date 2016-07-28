<?
$subject_val = "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 06:45:19 2010" -->
<!-- isoreceived="20100307114519" -->
<!-- sent="Sun, 7 Mar 2010 12:45:04 +0100" -->
<!-- isosent="20100307114504" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory" -->
<!-- id="ACB4D74A-5548-47F2-AE4E-1FED42194ACB_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1C4CE477-C94D-4890-838E-288B4C465DFE_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 06:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12269.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="12267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12266.php">Gijsbert Wiesenekker: "[OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12271.php">Ralph Castain: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 07.03.2010 um 10:55 schrieb Gijsbert Wiesenekker:
<br>
<p><span class="quotelev1">&gt; I was having non-reproducible hangs in an OpenMPI program. While  
</span><br>
<span class="quotelev1">&gt; troubleshooting this problem I found that there were many temporary  
</span><br>
<span class="quotelev1">&gt; directories in my /tmp/openmpi-sessions-userid directory (probably  
</span><br>
<span class="quotelev1">&gt; the result of MPI_Abort aborted OpenMPI programs). I cleaned those  
</span><br>
<span class="quotelev1">&gt; directories up and it looks like the hangs have gone.
</span><br>
<span class="quotelev1">&gt; My questions are:
</span><br>
<span class="quotelev1">&gt; It looks like the name of the temporary directory in /tmp/openmpi- 
</span><br>
<span class="quotelev1">&gt; sessions-userid directory is a process-id. What happens when an  
</span><br>
<span class="quotelev1">&gt; OpenMPI program starts and the temporary directory in /tmp/openmpi- 
</span><br>
<span class="quotelev1">&gt; sessions-userid already exists?
</span><br>
<span class="quotelev1">&gt; Could existing temporary directories in /tmp/openmpi-sessions-userid  
</span><br>
<span class="quotelev1">&gt; cause an OpenMPI program to hang?
</span><br>
<span class="quotelev1">&gt; Is there a way to ensure that the temporary directory created in / 
</span><br>
<span class="quotelev1">&gt; tmp/openmpi-sessions-userid is always removed after an OpenMPI  
</span><br>
<span class="quotelev1">&gt; program has run?
</span><br>
<p>if you use a queuingsystem like SGE it will go automatically into the  
<br>
set $TMPDIR of the job which the queuingsystem also removes after the  
<br>
job. Maybe you can create a $TMPDIR on your own and supply it to the  
<br>
ssh call, so that it's known and used on all nodes.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12269.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="12267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12266.php">Gijsbert Wiesenekker: "[OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12271.php">Ralph Castain: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
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
