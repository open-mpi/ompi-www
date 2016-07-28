<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 12:21:11 2014" -->
<!-- isoreceived="20140818162111" -->
<!-- sent="Mon, 18 Aug 2014 12:21:16 -0400" -->
<!-- isosent="20140818162116" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53F227FC.5030108_at_calculquebec.ca" -->
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
<strong>Date:</strong> 2014-08-18 12:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25049.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>In reply to:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I just did compile without Cuda, and the result is the same. No output, 
<br>
exits with code 65.
<br>
<p>[mboisson_at_helios-login1 examples]$ ldd ring_c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff3ab31000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.1 =&gt; 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_nocuda/lib/libmpi.so.1 
<br>
(0x00007fab9ec2a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000381c000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x000000381bc00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librdmacm.so.1 =&gt; /usr/lib64/librdmacm.so.1 (0x000000381c800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x000000381c400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.7 =&gt; 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_nocuda/lib/libopen-rte.so.7 
<br>
(0x00007fab9e932000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libtorque.so.2 =&gt; /usr/lib64/libtorque.so.2 (0x0000003918200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libxml2.so.2 =&gt; /usr/lib64/libxml2.so.2 (0x0000003917e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libz.so.1 =&gt; /lib64/libz.so.1 (0x000000381cc00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libcrypto.so.10 =&gt; /usr/lib64/libcrypto.so.10 (0x0000003821000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libssl.so.10 =&gt; /usr/lib64/libssl.so.10 (0x0000003823000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.6 =&gt; 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_nocuda/lib/libopen-pal.so.6 
<br>
(0x00007fab9e64a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000381b800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x00000035b3600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003c25a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003f71000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000381b400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x0000003917a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; 
<br>
/software6/compilers/gcc/4.8/lib64/libgcc_s.so.1 (0x00007fab9e433000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgssapi_krb5.so.2 =&gt; /lib64/libgssapi_krb5.so.2 
<br>
(0x0000003822400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libkrb5.so.3 =&gt; /lib64/libkrb5.so.3 (0x0000003821400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libcom_err.so.2 =&gt; /lib64/libcom_err.so.2 (0x000000381e400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libk5crypto.so.3 =&gt; /lib64/libk5crypto.so.3 (0x0000003821800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libkrb5support.so.0 =&gt; /lib64/libkrb5support.so.0 
<br>
(0x0000003821c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libkeyutils.so.1 =&gt; /lib64/libkeyutils.so.1 (0x0000003822000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x000000381dc00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libselinux.so.1 =&gt; /lib64/libselinux.so.1 (0x000000381d000000)
<br>
[mboisson_at_helios-login1 examples]$ mpiexec ring_c
<br>
[mboisson_at_helios-login1 examples]$ echo $?
<br>
65
<br>
<p><p>Maxime
<br>
<p><p>Le 2014-08-16 06:22, Jeff Squyres (jsquyres) a &#233;crit :
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
<li><strong>Next message:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25049.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>In reply to:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
