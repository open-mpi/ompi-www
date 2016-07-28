<?
$subject_val = "Re: [OMPI users] openMPI installation on front-end and worker nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 08:40:19 2012" -->
<!-- isoreceived="20120222134019" -->
<!-- sent="Wed, 22 Feb 2012 14:39:39 +0100" -->
<!-- isosent="20120222133939" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI installation on front-end and worker nodes" -->
<!-- id="C2F7BCA4-4E07-4C2E-8725-D0F1FC703968_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9C2EA2B8-267F-42C5-8F7D-263899FA6213_at_enea.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI installation on front-end and worker nodes<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 08:39:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18550.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18548.php">Salvatore Podda: "[OMPI users]  openMPI installation on front-end and worker nodes"</a>
<li><strong>In reply to:</strong> <a href="18548.php">Salvatore Podda: "[OMPI users]  openMPI installation on front-end and worker nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18554.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18554.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18556.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 22.02.2012 um 14:21 schrieb Salvatore Podda:
<br>
<p><span class="quotelev1">&gt; 	we have a computational infrastructure composed from front end and worker nodes
</span><br>
<span class="quotelev1">&gt; which differ slightly differ in the architectures on board (I mean same processor different socket).
</span><br>
<p>can you clarify this - something like an AM3 CPU in an AM3+ socket?
<br>
<p><p><span class="quotelev1">&gt; OFED and openMPI have been compiled and built on both systems at the same version level.
</span><br>
<span class="quotelev1">&gt; As users have access to the system only through front-end nodes (they compile on front-end
</span><br>
<span class="quotelev1">&gt; and submit job to worker nodes) the eventual difference in the OFED/openMPI installation
</span><br>
<span class="quotelev1">&gt; depending from the architecture can jeopardize the operation and the performance of the
</span><br>
<span class="quotelev1">&gt; user application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More generally, in the case of a front-end nodes with a processors definitively different from 
</span><br>
<span class="quotelev1">&gt; worker nodes (same firm i.e.Intel) can openMPI applications compiled on one run correctly
</span><br>
<span class="quotelev1">&gt; on the others?
</span><br>
<p>This depends on the used compiler options. If you compile just for a CPU type in the machine you compile on (and usually this is taken as the target architecture by the compiler), it might fail on older CPUs which are in the nodes. Like compiling on a machine with Shanghai-64 CPU might fail on older Opterons, unless you use compiler switches to target the least common instruction.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Many thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Salvatore 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18550.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18548.php">Salvatore Podda: "[OMPI users]  openMPI installation on front-end and worker nodes"</a>
<li><strong>In reply to:</strong> <a href="18548.php">Salvatore Podda: "[OMPI users]  openMPI installation on front-end and worker nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18554.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18554.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18556.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
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
