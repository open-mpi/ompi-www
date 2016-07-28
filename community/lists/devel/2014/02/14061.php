<?
$subject_val = "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  9 13:55:08 2014" -->
<!-- isoreceived="20140209185508" -->
<!-- sent="Sun, 9 Feb 2014 10:55:03 -0800" -->
<!-- isosent="20140209185503" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)" -->
<!-- id="CAAvDA1478HXnRtLSzw+MJ2tnbFynbQitknKeLZ-EQm9aiv7uCg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1Kya8+pmfvVf6-ikvbRL+j+JEFMT30RJa28bkvXuGOPYE0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-09 13:55:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14062.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="14060.php">Mike Dubman: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14060.php">Mike Dubman: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14063.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oddly, all of my x86-64 platforms are OK.
<br>
<p>-Paul [Sent from my phone]
<br>
On Feb 9, 2014 6:22 AM, &quot;Mike Dubman&quot; &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; we get same crash with gcc and x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Feb 9, 2014 at 10:32 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried building the current v1.7 tarball (1.7.5a1r30639) with gcc
</span><br>
<span class="quotelev2">&gt;&gt; on two ppc64/linux machines and one ppc32/linux.  All three die in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; when I try to run ring_c.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've retested 1.7.4 on both ppc64 machines, and thankfully the problem is
</span><br>
<span class="quotelev2">&gt;&gt; not present.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each of them at least dies with what looks like a potentially useful
</span><br>
<span class="quotelev2">&gt;&gt; backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; *** glibc detected *** examples/ring_c: double free or corruption
</span><br>
<span class="quotelev2">&gt;&gt; (fasttop): 0x000001003f1d5ce0 ***
</span><br>
<span class="quotelev2">&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6[0x80c9b8f4f4]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(mca_btl_sm_add_procs-0x2db2c8)[0xfffa29e59a8]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(+0x2311bc)[0xfffa29711bc]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(mca_pml_ob1_add_procs-0x14f514)[0xfffa2b7df3c]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(ompi_mpi_init-0x421ff0)[0xfffa28911f0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(MPI_Init-0x3d7120)[0xfffa28df670]
</span><br>
<span class="quotelev2">&gt;&gt; examples/ring_c[0x100009ac]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6[0x80c9b2bcd8]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main-0x184e00)[0x80c9b2bed0]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51140] WARNING: common_sm_module_unlink failed.
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51140] WARNING: common_sm_module_unlink failed.
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51140] WARNING:  unlink failed.
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51140] WARNING:  unlink failed.
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 0] [0xfffa2da0418]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 1] /lib64/libc.so.6(abort-0x16b278)[0x80c9b46ed8]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 2] /lib64/libc.so.6[0x80c9b87568]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 3] /lib64/libc.so.6[0x80c9b8f4f4]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(mca_btl_sm_add_procs-0x2db2c8)[0xfffa29e59a8]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(+0x2311bc)[0xfffa29711bc]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(mca_pml_ob1_add_procs-0x14f514)[0xfffa2b7df3c]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(ompi_mpi_init-0x421ff0)[0xfffa28911f0]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrov1/OMPI/openmpi-1.7-latest-linux-ppc64-gcc/INST/lib/libmpi.so.1(MPI_Init-0x3d7120)[0xfffa28df670]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [ 9] examples/ring_c[0x100009ac]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [10] /lib64/libc.so.6[0x80c9b2bcd8]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] [11]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main-0x184e00)[0x80c9b2bed0]
</span><br>
<span class="quotelev2">&gt;&gt; [bd-login:51141] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] Failing at address: 0x805aa7c9e0
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 0] [0x100428]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 1] /lib64/ld64.so.1(_rtld_global+0x0)[0x804a7d19b8]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 2] /lib64/libc.so.6[0x804a888f34]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 3] /lib64/libc.so.6(__libc_malloc-0xf95c4)[0x804a88aab4]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc64/INST/lib/libmpi.so.1(mca_pml_ob1_comm_init_size-0x124550)[0x40000393078]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc64/INST/lib/libmpi.so.1(mca_pml_ob1_add_comm-0x1276dc)[0x4000038fc1c]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc64/INST/lib/libmpi.so.1(ompi_mpi_init-0x36fb38)[0x40000130c30]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc64/INST/lib/libmpi.so.1(MPI_Init-0x3289fc)[0x4000017b34c]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 8] examples/ring_c[0x100009b0]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [ 9] /lib64/libc.so.6[0x804a829734]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main-0x15730c)[0x804a8299b4]
</span><br>
<span class="quotelev2">&gt;&gt; [fc6:27829] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; *** glibc detected *** examples/ring_c: double free or corruption
</span><br>
<span class="quotelev2">&gt;&gt; (!prev): 0x101b5560 ***
</span><br>
<span class="quotelev2">&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.6(+0xfe74dd4)[0x480d0dd4]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(mca_btl_sm_add_procs+0x66c)[0xfc720c0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(+0x15f7a0)[0xfc5e7a0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(mca_pml_ob1_add_procs+0x14c)[0xfdecc50]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(ompi_mpi_init+0xcec)[0xfb96eb4]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(MPI_Init+0x1e4)[0xfbdd878]
</span><br>
<span class="quotelev2">&gt;&gt; examples/ring_c[0x10000724]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.6(+0xfe0e0fc)[0x4806a0fc]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.6(+0xfe0e2a0)[0x4806a2a0]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 0] [0x100370]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 1] [0xbfd3a008]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 2] /lib/libc.so.6(abort+0x25c)[0x48084a2c]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 3] /lib/libc.so.6(+0xfe6cc9c)[0x480c8c9c]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 4] /lib/libc.so.6(+0xfe74dd4)[0x480d0dd4]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(mca_btl_sm_add_
</span><br>
<span class="quotelev2">&gt;&gt; procs+0x66c)[0xfc720c0]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(+0x15f7a0)[0xfc5e7a0]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(mca_pml_ob1_add_procs+0x14c)[0xfdecc50]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(ompi_mpi_init+0xcec)[0xfb96eb4]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(MPI_Init+0x1e4)[0xfbdd878]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [10] examples/ring_c[0x10000724]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [11] /lib/libc.so.6(+0xfe0e0fc)[0x4806a0fc]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421.n2001:02573] WARNING: common_sm_module_unlink failed.
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] [12] /lib/libc.so.6(+0xfe0e2a0)[0x4806a2a0]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02574] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421.n2001:02573] WARNING: common_sm_module_unlink failed.
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421.n2001:02573] WARNING:  unlink failed.
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421.n2001:02573] WARNING: A system call failed during shared
</span><br>
<span class="quotelev2">&gt;&gt; memory initialization that should unlink failed.
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] Failing at address: 0x3f000008
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 0] [0x100370]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 1] [0xffffffff]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 2] /lib/libc.so.6(__libc_malloc+0x8c)[0x480d525c]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(+0x2eb7f8)[0xfdea7f8]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(+0x2eb5a0)[0xfdea5a0]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(mca_pml_ob1_add_comm+0x40)[0xfdec108]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(ompi_mpi_init+0xd6c)[0xfb96f34]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7-latest-linux-ppc32/INST/lib/libmpi.so.1(MPI_Init+0x1e4)[0xfbdd878]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 8] examples/ring_c[0x10000724]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [ 9] /lib/libc.so.6(+0xfe0e0fc)[0x4806a0fc]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] [10] /lib/libc.so.6(+0xfe0e2a0)[0x4806a2a0]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-421:02573] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 2574 on node pcp-k-421 exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14062.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="14060.php">Mike Dubman: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14060.php">Mike Dubman: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14063.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
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
