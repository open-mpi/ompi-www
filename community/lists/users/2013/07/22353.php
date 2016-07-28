<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 20 10:29:05 2013" -->
<!-- isoreceived="20130720142905" -->
<!-- sent="Sat, 20 Jul 2013 07:28:58 -0700" -->
<!-- isosent="20130720142858" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="2EE998D1-6DFA-4C6D-97DB-98D8EA757FBE_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51EA8C15.1030509_at_ohio.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-20 10:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22354.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22354.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22354.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22355.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I have no earthly idea of the problem - you might try taking it up with the package provider. I usually advise people to avoid the packages as you have no idea how they were built and thus might find they don't fully support your configuration. Not that hard to just download and build the tarball.
<br>
<p>Sorry I can't be of more help
<br>
<p><p>On Jul 20, 2013, at 6:09 AM, Kevin H. Hobbs &lt;hobbsk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 07/19/2013 08:27 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not offhand.  The error you're seeing *typically* indicates
</span><br>
<span class="quotelev2">&gt;&gt; that you've got a mismatch of OMPI version somewhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So now the fun part for me is to try and find it or in failing to
</span><br>
<span class="quotelev1">&gt; find it eliminate the multiple versions theory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you running on multiple machines with different Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; versions, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just one machine right now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you're running only on a single machine, try completely
</span><br>
<span class="quotelev2">&gt;&gt; uninstalling the Open MPI package, re-installing it,
</span><br>
<span class="quotelev2">&gt;&gt; recompiling your trivial app, and see what happens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's easy enough :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;yum list openmpi*&quot; says I have openmpi.x86_64,
</span><br>
<span class="quotelev1">&gt; openmpi-debuginfo.x86_64, and openmpi-devel.x86_64 installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  sudo yum remove \
</span><br>
<span class="quotelev1">&gt;    openmpi.x86_64 \
</span><br>
<span class="quotelev1">&gt;    openmpi-debuginfo.x86_64 \
</span><br>
<span class="quotelev1">&gt;    openmpi-devel.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; followed by :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  sudo yum install \
</span><br>
<span class="quotelev1">&gt;    openmpi.x86_64 \
</span><br>
<span class="quotelev1">&gt;    openmpi-debuginfo.x86_64 \
</span><br>
<span class="quotelev1">&gt;    openmpi-devel.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I compiled and ran the program :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpicc -g -o mpi_simple mpi_simple.c
</span><br>
<span class="quotelev1">&gt;  mpirun -n 1 mpi_simple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and got the now familiar error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, you might want to check the output of &quot;mpicc yourapp.c
</span><br>
<span class="quotelev2">&gt;&gt; --showme&quot; and see if it's pointing to the right libraries, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpicc --showme -g -o mpi_simple mpi_simple.c
</span><br>
<span class="quotelev1">&gt;  gcc -g -o mpi_simple mpi_simple.c \
</span><br>
<span class="quotelev1">&gt;    -I/usr/include/openmpi-x86_64 -pthread -m64 \
</span><br>
<span class="quotelev1">&gt;    -L/usr/lib64/openmpi/lib -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is anything hiding there that doesn't belong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  find /usr/include/openmpi-x86_64/ \
</span><br>
<span class="quotelev1">&gt;    -exec rpm -q --whatprovides {} \; | sort -u
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  openmpi-devel-1.6.3-7.fc18.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  find /usr/lib64/openmpi/lib \
</span><br>
<span class="quotelev1">&gt;    -exec rpm -q --whatprovides {} \; | sort -u
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  openmpi-1.6.3-7.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;  openmpi-devel-1.6.3-7.fc18.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the program actually linked to?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ldd mpi_simple
</span><br>
<span class="quotelev1">&gt;    linux-vdso.so.1 =&gt;  (0x00007fff34151000)
</span><br>
<span class="quotelev1">&gt;    libmpi.so.1 =&gt; /usr/lib64/openmpi/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; (0x00007f079fa92000)
</span><br>
<span class="quotelev1">&gt;    libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003c53e00000)
</span><br>
<span class="quotelev1">&gt;    libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003c53200000)
</span><br>
<span class="quotelev1">&gt;    libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003c53a00000)
</span><br>
<span class="quotelev1">&gt;    librt.so.1 =&gt; /lib64/librt.so.1 (0x0000003c54200000)
</span><br>
<span class="quotelev1">&gt;    libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003c6c200000)
</span><br>
<span class="quotelev1">&gt;    libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003c6de00000)
</span><br>
<span class="quotelev1">&gt;    libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003c53600000)
</span><br>
<span class="quotelev1">&gt;    libhwloc.so.5 =&gt; /lib64/libhwloc.so.5 (0x0000003c57600000)
</span><br>
<span class="quotelev1">&gt;    libltdl.so.7 =&gt; /lib64/libltdl.so.7 (0x0000003c77000000)
</span><br>
<span class="quotelev1">&gt;    libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x0000003c54a00000)
</span><br>
<span class="quotelev1">&gt;    /lib64/ld-linux-x86-64.so.2 (0x0000003c52e00000)
</span><br>
<span class="quotelev1">&gt;    libnuma.so.1 =&gt; /lib64/libnuma.so.1 (0x0000003c57200000)
</span><br>
<span class="quotelev1">&gt;    libpci.so.3 =&gt; /lib64/libpci.so.3 (0x0000003c55e00000)
</span><br>
<span class="quotelev1">&gt;    libxml2.so.2 =&gt; /lib64/libxml2.so.2 (0x0000003c5d600000)
</span><br>
<span class="quotelev1">&gt;    libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x0000003c55a00000)
</span><br>
<span class="quotelev1">&gt;    libz.so.1 =&gt; /lib64/libz.so.1 (0x0000003c54600000)
</span><br>
<span class="quotelev1">&gt;    liblzma.so.5 =&gt; /lib64/liblzma.so.5 (0x0000003c59600000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What packages provides them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  rpm -q --whatprovides \
</span><br>
<span class="quotelev1">&gt;    /usr/lib64/openmpi/lib/libmpi.so.1 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libpthread.so.0 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libc.so.6 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libdl.so.2 \
</span><br>
<span class="quotelev1">&gt;    /lib64/librt.so.1 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libnsl.so.1 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libutil.so.1 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libm.so.6 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libhwloc.so.5 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libltdl.so.7 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libgcc_s.so.1 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libnuma.so.1 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libpci.so.3 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libxml2.so.2 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libresolv.so.2 \
</span><br>
<span class="quotelev1">&gt;    /lib64/libz.so.1 \
</span><br>
<span class="quotelev1">&gt;    /lib64/liblzma.so.5 | sort -u
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  glibc-2.16-33.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;  hwloc-1.4.2-2.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;  libgcc-4.7.2-8.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;  libtool-ltdl-2.4.2-7.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;  libxml2-2.9.1-1.fc18.1.x86_64
</span><br>
<span class="quotelev1">&gt;  numactl-libs-2.0.7-7.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;  openmpi-1.6.3-7.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;  pciutils-libs-3.1.10-2.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;  xz-libs-5.1.2-2alpha.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;  zlib-1.2.7-9.fc18.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see any Fedora 17 stragglers or anything weird.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="22354.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22354.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22354.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22355.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
