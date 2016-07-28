<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 20 09:09:52 2013" -->
<!-- isoreceived="20130720130952" -->
<!-- sent="Sat, 20 Jul 2013 09:09:41 -0400" -->
<!-- isosent="20130720130941" -->
<!-- name="Kevin H. Hobbs" -->
<!-- email="hobbsk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="51EA8C15.1030509_at_ohio.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F7305BF_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Kevin H. Hobbs (<em>hobbsk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-20 09:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22353.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22353.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22353.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/19/2013 08:27 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Not offhand.  The error you're seeing *typically* indicates
</span><br>
<span class="quotelev1">&gt; that you've got a mismatch of OMPI version somewhere.
</span><br>
<p>So now the fun part for me is to try and find it or in failing to
<br>
find it eliminate the multiple versions theory.
<br>
<p><span class="quotelev1">&gt; Are you running on multiple machines with different Open MPI
</span><br>
<span class="quotelev1">&gt; versions, perchance?
</span><br>
<p>Just one machine right now.
<br>
<p><p><span class="quotelev1">&gt; If you're running only on a single machine, try completely
</span><br>
<span class="quotelev1">&gt; uninstalling the Open MPI package, re-installing it,
</span><br>
<span class="quotelev1">&gt; recompiling your trivial app, and see what happens.
</span><br>
<p>That's easy enough :
<br>
<p>&quot;yum list openmpi*&quot; says I have openmpi.x86_64,
<br>
openmpi-debuginfo.x86_64, and openmpi-devel.x86_64 installed.
<br>
<p>I did :
<br>
<p>&nbsp;&nbsp;sudo yum remove \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;openmpi.x86_64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;openmpi-debuginfo.x86_64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;openmpi-devel.x86_64
<br>
<p>followed by :
<br>
<p>&nbsp;&nbsp;sudo yum install \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;openmpi.x86_64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;openmpi-debuginfo.x86_64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;openmpi-devel.x86_64
<br>
<p>Then I compiled and ran the program :
<br>
<p>&nbsp;&nbsp;mpicc -g -o mpi_simple mpi_simple.c
<br>
&nbsp;&nbsp;mpirun -n 1 mpi_simple
<br>
<p>and got the now familiar error.
<br>
<p><span class="quotelev1">&gt; Also, you might want to check the output of &quot;mpicc yourapp.c
</span><br>
<span class="quotelev1">&gt; --showme&quot; and see if it's pointing to the right libraries, etc.
</span><br>
<p>&nbsp;&nbsp;mpicc --showme -g -o mpi_simple mpi_simple.c
<br>
&nbsp;&nbsp;gcc -g -o mpi_simple mpi_simple.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-I/usr/include/openmpi-x86_64 -pthread -m64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-L/usr/lib64/openmpi/lib -lmpi
<br>
<p>Is anything hiding there that doesn't belong?
<br>
<p>&nbsp;&nbsp;find /usr/include/openmpi-x86_64/ \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-exec rpm -q --whatprovides {} \; | sort -u
<br>
<p>&nbsp;&nbsp;openmpi-devel-1.6.3-7.fc18.x86_64
<br>
<p>&nbsp;&nbsp;find /usr/lib64/openmpi/lib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-exec rpm -q --whatprovides {} \; | sort -u
<br>
<p>&nbsp;&nbsp;openmpi-1.6.3-7.fc18.x86_64
<br>
&nbsp;&nbsp;openmpi-devel-1.6.3-7.fc18.x86_64
<br>
<p>What is the program actually linked to?
<br>
<p>&nbsp;&nbsp;ldd mpi_simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff34151000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.1 =&gt; /usr/lib64/openmpi/lib/libmpi.so.1
<br>
(0x00007f079fa92000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003c53e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003c53200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003c53a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x0000003c54200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003c6c200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003c6de00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003c53600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libhwloc.so.5 =&gt; /lib64/libhwloc.so.5 (0x0000003c57600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libltdl.so.7 =&gt; /lib64/libltdl.so.7 (0x0000003c77000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x0000003c54a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003c52e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /lib64/libnuma.so.1 (0x0000003c57200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libpci.so.3 =&gt; /lib64/libpci.so.3 (0x0000003c55e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libxml2.so.2 =&gt; /lib64/libxml2.so.2 (0x0000003c5d600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x0000003c55a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libz.so.1 =&gt; /lib64/libz.so.1 (0x0000003c54600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;liblzma.so.5 =&gt; /lib64/liblzma.so.5 (0x0000003c59600000)
<br>
<p>What packages provides them?
<br>
<p>&nbsp;&nbsp;rpm -q --whatprovides \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/openmpi/lib/libmpi.so.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libpthread.so.0 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libc.so.6 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libdl.so.2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/librt.so.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libnsl.so.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libutil.so.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libm.so.6 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libhwloc.so.5 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libltdl.so.7 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libgcc_s.so.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libnuma.so.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libpci.so.3 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libxml2.so.2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libresolv.so.2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libz.so.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/liblzma.so.5 | sort -u
<br>
<p>&nbsp;&nbsp;glibc-2.16-33.fc18.x86_64
<br>
&nbsp;&nbsp;hwloc-1.4.2-2.fc18.x86_64
<br>
&nbsp;&nbsp;libgcc-4.7.2-8.fc18.x86_64
<br>
&nbsp;&nbsp;libtool-ltdl-2.4.2-7.fc18.x86_64
<br>
&nbsp;&nbsp;libxml2-2.9.1-1.fc18.1.x86_64
<br>
&nbsp;&nbsp;numactl-libs-2.0.7-7.fc18.x86_64
<br>
&nbsp;&nbsp;openmpi-1.6.3-7.fc18.x86_64
<br>
&nbsp;&nbsp;pciutils-libs-3.1.10-2.fc18.x86_64
<br>
&nbsp;&nbsp;xz-libs-5.1.2-2alpha.fc18.x86_64
<br>
&nbsp;&nbsp;zlib-1.2.7-9.fc18.x86_64
<br>
<p>I don't see any Fedora 17 stragglers or anything weird.
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22352/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22353.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22353.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22353.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
