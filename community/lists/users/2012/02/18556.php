<?
$subject_val = "Re: [OMPI users] openMPI installation on front-end and worker nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 11:44:28 2012" -->
<!-- isoreceived="20120224164428" -->
<!-- sent="Fri, 24 Feb 2012 17:44:16 +0100" -->
<!-- isosent="20120224164416" -->
<!-- name="Salvatore Podda" -->
<!-- email="salvatore.podda_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI installation on front-end and worker nodes" -->
<!-- id="4D1DC14A-415B-4FCE-A4DF-61660A1EA122_at_enea.it" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] openMPI installation on front-end and worker nodes" -->
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
<strong>From:</strong> Salvatore Podda (<em>salvatore.podda_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 11:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18557.php">Tal Regev: "[OMPI users] OpenMPI at windows"</a>
<li><strong>Previous message:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Maybe in reply to:</strong> <a href="18549.php">Reuti: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18551.php">Shamis, Pavel: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologize for the delay, but I missed your post.
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 22.02.2012 um 14:21 schrieb Salvatore Podda:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	we have a computational infrastructure composed from front end and worker nodes
</span><br>
<span class="quotelev2">&gt;&gt; which differ slightly differ in the architectures on board (I mean same processor different socket).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you clarify this - something like an AM3 CPU in an AM3+ socket?
</span><br>
<p>The processors on front-end and backend nodes are the same (from /proc/cpuinfo):
<br>
<p>Intel Xeon CPU           E5345
<br>
<p>The two platforms are definitely different: front-end IBM x3650 and backend IBM bladecenter HS21,
<br>
but probably I am wrong and the socket are equal (LGA 771).
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OFED and openMPI have been compiled and built on both systems at the same version level.
</span><br>
<span class="quotelev2">&gt;&gt; As users have access to the system only through front-end nodes (they compile on front-end
</span><br>
<span class="quotelev2">&gt;&gt; and submit job to worker nodes) the eventual difference in the OFED/openMPI installation
</span><br>
<span class="quotelev2">&gt;&gt; depending from the architecture can jeopardize the operation and the performance of the
</span><br>
<span class="quotelev2">&gt;&gt; user application?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More generally, in the case of a front-end nodes with a processors definitively different from 
</span><br>
<span class="quotelev2">&gt;&gt; worker nodes (same firm i.e.Intel) can openMPI applications compiled on one run correctly
</span><br>
<span class="quotelev2">&gt;&gt; on the others?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This depends on the used compiler options. If you compile just for a CPU type in the machine you compile on (and usually this is taken as the target architecture by the compiler), it might fail on older CPUs which are in the nodes. Like compiling on a machine with Shanghai-64 CPU might fail on older Opterons, unless you use compiler switches to target the least common instruction.
</span><br>
<p>Maybe I have not been enough clear. The first part of the question concern the compillation of openMPI in different
<br>
compilers flavours (gcc, intel pgi). The &quot;config&quot; phase will guess (if not imposed) flags/options from the architecture
<br>
on which is running.  At this point having obtained a &quot;succesfull&quot; openmpi-compiler version on two different architectures
<br>
the user, in our case, will compile his own application on the front-end, and will run on the backend nodes with a &quot;different&quot; 
<br>
version of openmpi. I am not speaking of great differences in the &quot;age&quot; of processors but of architectures definitely different.
<br>
However the conclusions of your comment are completely coherent with the advices of other openMPI users.
<br>
<p>Thanks for your support,
<br>
<p>Salvatore
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Salvatore 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18557.php">Tal Regev: "[OMPI users] OpenMPI at windows"</a>
<li><strong>Previous message:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Maybe in reply to:</strong> <a href="18549.php">Reuti: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18551.php">Shamis, Pavel: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
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
