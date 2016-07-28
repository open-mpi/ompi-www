<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 06:22:58 2014" -->
<!-- isoreceived="20140816102258" -->
<!-- sent="Sat, 16 Aug 2014 10:22:55 +0000" -->
<!-- isosent="20140816102255" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="2FFCA824-3453-4F27-98B3-8B5B4C9A8AF2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53EE8DFF.4000601_at_calculquebec.ca" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-16 06:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25046.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25046.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25050.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just out of curiosity, I saw that one of the segv stack traces involved the cuda stack.
<br>
<p>Can you try a build without CUDA and see if that resolves the problem?
<br>
<p><p><p>On Aug 15, 2014, at 6:47 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 2014-08-15 17:50, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 15, 2014, at 5:39 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can it be because torque (pbs_mom) is not running on the head node and mpiexec attempts to contact it ?
</span><br>
<span class="quotelev2">&gt;&gt; Not for Open MPI's mpiexec, no.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI's mpiexec (mpirun -- they're the same to us) will only try to use TM stuff (i.e., Torque stuff) if it sees the environment variable markers indicating that it's inside a Torque job.  If not, it just uses rsh/ssh (or localhost launch in your case, since you didn't specify any hosts).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are unable to run even &quot;mpirun -np 4 hostname&quot; (i.e., the non-MPI &quot;hostname&quot; command from Linux), then something is seriously borked with your Open MPI installation.
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 hostname works fine :
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 ~]$ which mpirun
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 examples]$ mpirun -np 4 hostname; echo $?
</span><br>
<span class="quotelev1">&gt; helios-login1
</span><br>
<span class="quotelev1">&gt; helios-login1
</span><br>
<span class="quotelev1">&gt; helios-login1
</span><br>
<span class="quotelev1">&gt; helios-login1
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try running with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 4 --mca plm_base_verbose 10 hostname
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This should show the steps OMPI is trying to take to launch the 4 copies of &quot;hostname&quot; and potentially give some insight into where it's hanging.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, just to make sure, you have ensured that you're compiling everything with a single compiler toolchain, and the support libraries from that specific compiler toolchain are available on any server on which you're running (to include the head node and compute nodes), right?
</span><br>
<span class="quotelev1">&gt; Yes. Everything has been compiled with GCC 4.8 (I also tried GCC 4.6 with the same results). Almost every software (that is compiler, toolchain, etc.) is installed on lustre, from sources and is the same on both the login (head) node and the compute.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The few differences between the head node and the compute :
</span><br>
<span class="quotelev1">&gt; 1) Computes are in RAMFS - login is installed on disk
</span><br>
<span class="quotelev1">&gt; 2) Computes and login node have different hardware configuration (computes have GPUs, head node does not).
</span><br>
<span class="quotelev1">&gt; 3) Login node has MORE CentOS6 packages than computes (such as the -devel packages, some fonts/X11 libraries, etc.), but all the packages that are on the computes are also on the login node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And you've verified that PATH and LD_LIBRARY_PATH are pointing to the right places -- i.e., to the Open MPI installation that you expect it to point to.  E.g., if you &quot;ldd ring_c&quot;, it shows the libmpi.so that you expect.  And &quot;which mpiexec&quot; shows the mpirun that you expect.  Etc.
</span><br>
<span class="quotelev1">&gt; As per the content of &quot;env.out&quot; in the archive, yes. They point to the OMPI 1.8.2rc4 installation directories, on lustre, and are shared between the head node and the compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25043.php">http://www.open-mpi.org/community/lists/users/2014/08/25043.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25046.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25046.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25050.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
