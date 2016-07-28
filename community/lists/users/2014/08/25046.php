<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 14:02:06 2014" -->
<!-- isoreceived="20140816180206" -->
<!-- sent="Sat, 16 Aug 2014 14:02:04 -0400" -->
<!-- isosent="20140816180204" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53EF9C9C.5060205_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2FFCA824-3453-4F27-98B3-8B5B4C9A8AF2_at_cisco.com" -->
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
<strong>Date:</strong> 2014-08-16 14:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25047.php">Matt Thompson: "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25050.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is indeed also a problem with MPI + Cuda.
<br>
<p>This problem however is deeper, since it happens with Mvapich2 1.9, 
<br>
OpenMPI 1.6.5/1.8.1/1.8.2rc4, Cuda 5.5.22/6.0.37. From my tests, 
<br>
everything works fine with MPI + Cuda on a single node, but as soon as I 
<br>
got to MPI + Cuda accross nodes, I get segv. I suspect something either 
<br>
with the ofed (we use linux ofed rdma, not the Mellanox stack) or the 
<br>
nvidia drivers (we are a couple minor versions behind). My next step is 
<br>
to try and upgrade those.
<br>
<p>I do not think this problem is related to not being able to run ring_c 
<br>
on the head node however, because it runs fine with 1.6.5 and ring_c 
<br>
does not involve cuda.
<br>
<p>Maxime
<br>
<p>Le 2014-08-16 06:22, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Just out of curiosity, I saw that one of the segv stack traces involved the cuda stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try a build without CUDA and see if that resolves the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 15, 2014, at 6:47 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 2014-08-15 17:50, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 15, 2014, at 5:39 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Correct.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can it be because torque (pbs_mom) is not running on the head node and mpiexec attempts to contact it ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not for Open MPI's mpiexec, no.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI's mpiexec (mpirun -- they're the same to us) will only try to use TM stuff (i.e., Torque stuff) if it sees the environment variable markers indicating that it's inside a Torque job.  If not, it just uses rsh/ssh (or localhost launch in your case, since you didn't specify any hosts).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are unable to run even &quot;mpirun -np 4 hostname&quot; (i.e., the non-MPI &quot;hostname&quot; command from Linux), then something is seriously borked with your Open MPI installation.
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 hostname works fine :
</span><br>
<span class="quotelev2">&gt;&gt; [mboisson_at_helios-login1 ~]$ which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; [mboisson_at_helios-login1 examples]$ mpirun -np 4 hostname; echo $?
</span><br>
<span class="quotelev2">&gt;&gt; helios-login1
</span><br>
<span class="quotelev2">&gt;&gt; helios-login1
</span><br>
<span class="quotelev2">&gt;&gt; helios-login1
</span><br>
<span class="quotelev2">&gt;&gt; helios-login1
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try running with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mpirun -np 4 --mca plm_base_verbose 10 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should show the steps OMPI is trying to take to launch the 4 copies of &quot;hostname&quot; and potentially give some insight into where it's hanging.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, just to make sure, you have ensured that you're compiling everything with a single compiler toolchain, and the support libraries from that specific compiler toolchain are available on any server on which you're running (to include the head node and compute nodes), right?
</span><br>
<span class="quotelev2">&gt;&gt; Yes. Everything has been compiled with GCC 4.8 (I also tried GCC 4.6 with the same results). Almost every software (that is compiler, toolchain, etc.) is installed on lustre, from sources and is the same on both the login (head) node and the compute.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The few differences between the head node and the compute :
</span><br>
<span class="quotelev2">&gt;&gt; 1) Computes are in RAMFS - login is installed on disk
</span><br>
<span class="quotelev2">&gt;&gt; 2) Computes and login node have different hardware configuration (computes have GPUs, head node does not).
</span><br>
<span class="quotelev2">&gt;&gt; 3) Login node has MORE CentOS6 packages than computes (such as the -devel packages, some fonts/X11 libraries, etc.), but all the packages that are on the computes are also on the login node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And you've verified that PATH and LD_LIBRARY_PATH are pointing to the right places -- i.e., to the Open MPI installation that you expect it to point to.  E.g., if you &quot;ldd ring_c&quot;, it shows the libmpi.so that you expect.  And &quot;which mpiexec&quot; shows the mpirun that you expect.  Etc.
</span><br>
<span class="quotelev2">&gt;&gt; As per the content of &quot;env.out&quot; in the archive, yes. They point to the OMPI 1.8.2rc4 installation directories, on lustre, and are shared between the head node and the compute nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25043.php">http://www.open-mpi.org/community/lists/users/2014/08/25043.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25047.php">Matt Thompson: "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25050.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
