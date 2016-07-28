<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 12:30:51 2014" -->
<!-- isoreceived="20140818163051" -->
<!-- sent="Mon, 18 Aug 2014 12:30:50 -0400" -->
<!-- isosent="20140818163050" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="CAG4F6z8SwvNgrE_vO-7Dy1C__=9aN-B599d0ARz+20f4oFjtVQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53F227FC.5030108_at_calculquebec.ca" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 12:30:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25052.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25050.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25050.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25052.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25052.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maxime,
<br>
<p>Can you run with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4 --mca plm_base_verbose 10 /path/to/examples//ring_c
<br>
<p><p>On Mon, Aug 18, 2014 at 12:21 PM, Maxime Boissonneault &lt;
<br>
maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I just did compile without Cuda, and the result is the same. No output,
</span><br>
<span class="quotelev1">&gt; exits with code 65.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 examples]$ ldd ring_c
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fff3ab31000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.1 =&gt; /software-gpu/mpi/openmpi/1.8.
</span><br>
<span class="quotelev1">&gt; 2rc4_gcc4.8_nocuda/lib/libmpi.so.1 (0x00007fab9ec2a000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000381c000000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x000000381bc00000)
</span><br>
<span class="quotelev1">&gt;         librdmacm.so.1 =&gt; /usr/lib64/librdmacm.so.1 (0x000000381c800000)
</span><br>
<span class="quotelev1">&gt;         libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x000000381c400000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.7 =&gt; /software-gpu/mpi/openmpi/1.8.
</span><br>
<span class="quotelev1">&gt; 2rc4_gcc4.8_nocuda/lib/libopen-rte.so.7 (0x00007fab9e932000)
</span><br>
<span class="quotelev1">&gt;         libtorque.so.2 =&gt; /usr/lib64/libtorque.so.2 (0x0000003918200000)
</span><br>
<span class="quotelev1">&gt;         libxml2.so.2 =&gt; /usr/lib64/libxml2.so.2 (0x0000003917e00000)
</span><br>
<span class="quotelev1">&gt;         libz.so.1 =&gt; /lib64/libz.so.1 (0x000000381cc00000)
</span><br>
<span class="quotelev1">&gt;         libcrypto.so.10 =&gt; /usr/lib64/libcrypto.so.10 (0x0000003821000000)
</span><br>
<span class="quotelev1">&gt;         libssl.so.10 =&gt; /usr/lib64/libssl.so.10 (0x0000003823000000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.6 =&gt; /software-gpu/mpi/openmpi/1.8.
</span><br>
<span class="quotelev1">&gt; 2rc4_gcc4.8_nocuda/lib/libopen-pal.so.6 (0x00007fab9e64a000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000381b800000)
</span><br>
<span class="quotelev1">&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00000035b3600000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003c25a00000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003f71000000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x000000381b400000)
</span><br>
<span class="quotelev1">&gt;         libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x0000003917a00000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /software6/compilers/gcc/4.8/lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; (0x00007fab9e433000)
</span><br>
<span class="quotelev1">&gt;         libgssapi_krb5.so.2 =&gt; /lib64/libgssapi_krb5.so.2
</span><br>
<span class="quotelev1">&gt; (0x0000003822400000)
</span><br>
<span class="quotelev1">&gt;         libkrb5.so.3 =&gt; /lib64/libkrb5.so.3 (0x0000003821400000)
</span><br>
<span class="quotelev1">&gt;         libcom_err.so.2 =&gt; /lib64/libcom_err.so.2 (0x000000381e400000)
</span><br>
<span class="quotelev1">&gt;         libk5crypto.so.3 =&gt; /lib64/libk5crypto.so.3 (0x0000003821800000)
</span><br>
<span class="quotelev1">&gt;         libkrb5support.so.0 =&gt; /lib64/libkrb5support.so.0
</span><br>
<span class="quotelev1">&gt; (0x0000003821c00000)
</span><br>
<span class="quotelev1">&gt;         libkeyutils.so.1 =&gt; /lib64/libkeyutils.so.1 (0x0000003822000000)
</span><br>
<span class="quotelev1">&gt;         libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x000000381dc00000)
</span><br>
<span class="quotelev1">&gt;         libselinux.so.1 =&gt; /lib64/libselinux.so.1 (0x000000381d000000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 examples]$ mpiexec ring_c
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 examples]$ echo $?
</span><br>
<span class="quotelev1">&gt; 65
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2014-08-16 06:22, Jeff Squyres (jsquyres) a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Just out of curiosity, I saw that one of the segv stack traces involved
</span><br>
<span class="quotelev2">&gt;&gt; the cuda stack.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try a build without CUDA and see if that resolves the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 15, 2014, at 6:47 PM, Maxime Boissonneault &lt;maxime.boissonneault@
</span><br>
<span class="quotelev2">&gt;&gt; calculquebec.ca&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 2014-08-15 17:50, Jeff Squyres (jsquyres) a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 15, 2014, at 5:39 PM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Correct.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can it be because torque (pbs_mom) is not running on the head node and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec attempts to contact it ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not for Open MPI's mpiexec, no.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI's mpiexec (mpirun -- they're the same to us) will only try to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use TM stuff (i.e., Torque stuff) if it sees the environment variable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; markers indicating that it's inside a Torque job.  If not, it just uses
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rsh/ssh (or localhost launch in your case, since you didn't specify any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hosts).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you are unable to run even &quot;mpirun -np 4 hostname&quot; (i.e., the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; non-MPI &quot;hostname&quot; command from Linux), then something is seriously borked
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with your Open MPI installation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 4 hostname works fine :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mboisson_at_helios-login1 ~]$ which mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mboisson_at_helios-login1 examples]$ mpirun -np 4 hostname; echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; helios-login1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; helios-login1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; helios-login1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; helios-login1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Try running with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mpirun -np 4 --mca plm_base_verbose 10 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This should show the steps OMPI is trying to take to launch the 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; copies of &quot;hostname&quot; and potentially give some insight into where it's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hanging.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, just to make sure, you have ensured that you're compiling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; everything with a single compiler toolchain, and the support libraries from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that specific compiler toolchain are available on any server on which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you're running (to include the head node and compute nodes), right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes. Everything has been compiled with GCC 4.8 (I also tried GCC 4.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the same results). Almost every software (that is compiler, toolchain,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.) is installed on lustre, from sources and is the same on both the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; login (head) node and the compute.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The few differences between the head node and the compute :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) Computes are in RAMFS - login is installed on disk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) Computes and login node have different hardware configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (computes have GPUs, head node does not).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) Login node has MORE CentOS6 packages than computes (such as the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -devel packages, some fonts/X11 libraries, etc.), but all the packages that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are on the computes are also on the login node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  And you've verified that PATH and LD_LIBRARY_PATH are pointing to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; right places -- i.e., to the Open MPI installation that you expect it to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; point to.  E.g., if you &quot;ldd ring_c&quot;, it shows the libmpi.so that you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expect.  And &quot;which mpiexec&quot; shows the mpirun that you expect.  Etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As per the content of &quot;env.out&quot; in the archive, yes. They point to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI 1.8.2rc4 installation directories, on lustre, and are shared between
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the head node and the compute nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; community/lists/users/2014/08/25043.php
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/">http://www.open-mpi.org/community/lists/users/2014/08/</a>
</span><br>
<span class="quotelev1">&gt; 25050.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25051/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25052.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25050.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25050.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25052.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25052.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
