<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 12:22:54 2011" -->
<!-- isoreceived="20110921162254" -->
<!-- sent="Wed, 21 Sep 2011 10:22:41 -0600" -->
<!-- isosent="20110921162241" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275FC3669E_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7A084C.4010807_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 12:22:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17376.php">Blosch, Edwin L: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>Previous message:</strong> <a href="17374.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>In reply to:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17377.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17377.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Tim.
<br>
<p>I'm compiling source units and linking them into an executable.  Or perhaps you are talking about how OpenMPI itself is built?  Excuse my ignorance...
<br>
<p>The source code units are compiled like this:
<br>
/usr/mpi/intel/openmpi-1.4.3/bin/mpif90 -D_GNU_SOURCE -traceback -align -pad -xHost -falign-functions -fpconstant -O2 -I. -I/usr/mpi/intel/openmpi-1.4.3/include -c ../code/src/main/main.f90
<br>
<p>The link step is like this:
<br>
/usr/mpi/intel/openmpi-1.4.3/bin/mpif90 -D_GNU_SOURCE -traceback -align -pad -xHost -falign-functions -fpconstant -static-intel -o ../bin/&lt;name&gt; &lt;some libraries&gt; -lstdc++
<br>
<p>OpenMPI itself was configured like this:
<br>
./configure --prefix=/release/cfd/openmpi-intel --without-tm --without-sge --without-lsf --without-psm --without-portals --without-gm --without-elan --without-mx --without-slurm --without-loadleveler --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca-no-build=maffinity --disable-per-user-config-files --disable-io-romio --with-mpi-f90-size=small --enable-static --disable-shared CXX=/appserv/intel/Compiler/11.1/072/bin/intel64/icpc CC=/appserv/intel/Compiler/11.1/072/bin/intel64/icc 'CFLAGS=  -O2' 'CXXFLAGS=  -O2' F77=/appserv/intel/Compiler/11.1/072/bin/intel64/ifort 'FFLAGS=-D_GNU_SOURCE -traceback  -O2' FC=/appserv/intel/Compiler/11.1/072/bin/intel64/ifort 'FCFLAGS=-D_GNU_SOURCE -traceback  -O2' 'LDFLAGS= -static-intel'
<br>
<p>ldd output on the final executable gives: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffb77e7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002b2e2b652000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00002b2e2b95e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b2e2bb6d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b2e2bd72000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b2e2bf8a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b2e2c18d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b2e2c3e4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b2e2c600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b2e2c959000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002b2e2b433000)
<br>
<p>Do you see anything that suggests I should have been compiling the application and/or OpenMPI with -fPIC?
<br>
<p>Thanks
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prince
<br>
Sent: Wednesday, September 21, 2011 10:53 AM
<br>
To: users_at_[hidden]
<br>
Subject: EXTERNAL: Re: [OMPI users] Question about compilng with fPIC
<br>
<p>On 9/21/2011 11:44 AM, Blosch, Edwin L wrote:
<br>
<span class="quotelev1">&gt; Follow-up to a mislabeled thread:  &quot;How could OpenMPI (or MVAPICH) affect floating-point results?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have found a solution to my problem, but I would like to understand the underlying issue better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To rehash: An Intel-compiled executable linked with MVAPICH runs fine; linked with OpenMPI fails.  The earliest symptom I could see was some strange difference in numerical values of quantities that should be unaffected by MPI calls.  Tim's advice guided me to assume memory corruption. Eugene's advice guided me to explore the detailed differences in compilation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I observed that the MVAPICH mpif90 wrapper adds -fPIC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried adding -fPIC and -mcmodel=medium to the compilation of the OpenMPI-linked executable.  Now it works fine. I haven't tried without -mcmodel=medium, but my guess is -fPIC did the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know why compiling with -fPIC has helped?  Does it suggest an application problem or an OpenMPI problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To note: This is an Infiniband-based cluster.  The application does pretty basic MPI-1 operations: send, recv, bcast, reduce, allreduce, gather, gather, isend, irecv, waitall.  There is one task that uses iprobe with MPI_ANY_TAG, but this task is only involved in certain cases (including this one). Conversely, cases that do not call iprobe have not yet been observed to crash.  I am deducing that this function is the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you are making a .so, the included .o files should be built with 
<br>
-fPIC or similar. Ideally, the configure and build tools would enforce this.
<br>
<p><pre>
-- 
Tim Prince
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17376.php">Blosch, Edwin L: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>Previous message:</strong> <a href="17374.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>In reply to:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17377.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17377.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
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
