<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 18:47:26 2014" -->
<!-- isoreceived="20140815224726" -->
<!-- sent="Fri, 15 Aug 2014 18:47:27 -0400" -->
<!-- isosent="20140815224727" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53EE8DFF.4000601_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8BB28E07-7549-4F93-9CE7-C8A02A1D6738_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-15 18:47:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Le 2014-08-15 17:50, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Aug 15, 2014, at 5:39 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can it be because torque (pbs_mom) is not running on the head node and mpiexec attempts to contact it ?
</span><br>
<span class="quotelev1">&gt; Not for Open MPI's mpiexec, no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI's mpiexec (mpirun -- they're the same to us) will only try to use TM stuff (i.e., Torque stuff) if it sees the environment variable markers indicating that it's inside a Torque job.  If not, it just uses rsh/ssh (or localhost launch in your case, since you didn't specify any hosts).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are unable to run even &quot;mpirun -np 4 hostname&quot; (i.e., the non-MPI &quot;hostname&quot; command from Linux), then something is seriously borked with your Open MPI installation.
</span><br>
mpirun -np 4 hostname works fine :
<br>
[mboisson_at_helios-login1 ~]$ which mpirun
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/bin/mpirun
<br>
[mboisson_at_helios-login1 examples]$ mpirun -np 4 hostname; echo $?
<br>
helios-login1
<br>
helios-login1
<br>
helios-login1
<br>
helios-login1
<br>
0
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try running with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun -np 4 --mca plm_base_verbose 10 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should show the steps OMPI is trying to take to launch the 4 copies of &quot;hostname&quot; and potentially give some insight into where it's hanging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, just to make sure, you have ensured that you're compiling everything with a single compiler toolchain, and the support libraries from that specific compiler toolchain are available on any server on which you're running (to include the head node and compute nodes), right?
</span><br>
Yes. Everything has been compiled with GCC 4.8 (I also tried GCC 4.6 
<br>
with the same results). Almost every software (that is compiler, 
<br>
toolchain, etc.) is installed on lustre, from sources and is the same on 
<br>
both the login (head) node and the compute.
<br>
<p>The few differences between the head node and the compute :
<br>
1) Computes are in RAMFS - login is installed on disk
<br>
2) Computes and login node have different hardware configuration 
<br>
(computes have GPUs, head node does not).
<br>
3) Login node has MORE CentOS6 packages than computes (such as the 
<br>
-devel packages, some fonts/X11 libraries, etc.), but all the packages 
<br>
that are on the computes are also on the login node.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And you've verified that PATH and LD_LIBRARY_PATH are pointing to the right places -- i.e., to the Open MPI installation that you expect it to point to.  E.g., if you &quot;ldd ring_c&quot;, it shows the libmpi.so that you expect.  And &quot;which mpiexec&quot; shows the mpirun that you expect.  Etc.
</span><br>
As per the content of &quot;env.out&quot; in the archive, yes. They point to the 
<br>
OMPI 1.8.2rc4 installation directories, on lustre, and are shared 
<br>
between the head node and the compute nodes.
<br>
<p><p>Maxime
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
