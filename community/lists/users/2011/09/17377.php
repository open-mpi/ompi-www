<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 13:50:46 2011" -->
<!-- isoreceived="20110921175046" -->
<!-- sent="Wed, 21 Sep 2011 13:50:35 -0400" -->
<!-- isosent="20110921175035" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC" -->
<!-- id="4E7A23EB.9050006_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275FC3669E_at_HDXMSPB.us.lmco.com" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 13:50:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17378.php">Björn Regnström: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Previous message:</strong> <a href="17376.php">Blosch, Edwin L: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>In reply to:</strong> <a href="17375.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17376.php">Blosch, Edwin L: "Re: [OMPI users] Question about compilng with fPIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/21/2011 12:22 PM, Blosch, Edwin L wrote:
<br>
<span class="quotelev1">&gt; Thanks Tim.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm compiling source units and linking them into an executable.  Or perhaps you are talking about how OpenMPI itself is built?  Excuse my ignorance...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The source code units are compiled like this:
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/bin/mpif90 -D_GNU_SOURCE -traceback -align -pad -xHost -falign-functions -fpconstant -O2 -I. -I/usr/mpi/intel/openmpi-1.4.3/include -c ../code/src/main/main.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The link step is like this:
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/bin/mpif90 -D_GNU_SOURCE -traceback -align -pad -xHost -falign-functions -fpconstant -static-intel -o ../bin/&lt;name&gt;  &lt;some libraries&gt;  -lstdc++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI itself was configured like this:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/release/cfd/openmpi-intel --without-tm --without-sge --without-lsf --without-psm --without-portals --without-gm --without-elan --without-mx --without-slurm --without-loadleveler --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca-no-build=maffinity --disable-per-user-config-files --disable-io-romio --with-mpi-f90-size=small --enable-static --disable-shared CXX=/appserv/intel/Compiler/11.1/072/bin/intel64/icpc CC=/appserv/intel/Compiler/11.1/072/bin/intel64/icc 'CFLAGS=  -O2' 'CXXFLAGS=  -O2' F77=/appserv/intel/Compiler/11.1/072/bin/intel64/ifort 'FFLAGS=-D_GNU_SOURCE -traceback  -O2' FC=/appserv/intel/Compiler/11.1/072/bin/intel64/ifort 'FCFLAGS=-D_GNU_SOURCE -traceback  -O2' 'LDFLAGS= -static-intel'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldd output on the final executable gives:
</span><br>
<span class="quotelev1">&gt;          linux-vdso.so.1 =&gt;   (0x00007fffb77e7000)
</span><br>
<span class="quotelev1">&gt;          libstdc++.so.6 =&gt;  /usr/lib64/libstdc++.so.6 (0x00002b2e2b652000)
</span><br>
<span class="quotelev1">&gt;          libibverbs.so.1 =&gt;  /usr/lib64/libibverbs.so.1 (0x00002b2e2b95e000)
</span><br>
<span class="quotelev1">&gt;          libdl.so.2 =&gt;  /lib64/libdl.so.2 (0x00002b2e2bb6d000)
</span><br>
<span class="quotelev1">&gt;          libnsl.so.1 =&gt;  /lib64/libnsl.so.1 (0x00002b2e2bd72000)
</span><br>
<span class="quotelev1">&gt;          libutil.so.1 =&gt;  /lib64/libutil.so.1 (0x00002b2e2bf8a000)
</span><br>
<span class="quotelev1">&gt;          libm.so.6 =&gt;  /lib64/libm.so.6 (0x00002b2e2c18d000)
</span><br>
<span class="quotelev1">&gt;          libpthread.so.0 =&gt;  /lib64/libpthread.so.0 (0x00002b2e2c3e4000)
</span><br>
<span class="quotelev1">&gt;          libc.so.6 =&gt;  /lib64/libc.so.6 (0x00002b2e2c600000)
</span><br>
<span class="quotelev1">&gt;          libgcc_s.so.1 =&gt;  /lib64/libgcc_s.so.1 (0x00002b2e2c959000)
</span><br>
<span class="quotelev1">&gt;          /lib64/ld-linux-x86-64.so.2 (0x00002b2e2b433000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you see anything that suggests I should have been compiling the application and/or OpenMPI with -fPIC?
</span><br>
<span class="quotelev1">&gt;
</span><br>
If you were building any OpenMPI shared libraries, those should use 
<br>
-fPIC. configure may have made the necessary additions. If your 
<br>
application had shared libraries, you would require -fPIC, but 
<br>
apparently you had none.  The shared libraries you show presumably 
<br>
weren't involved in your MPI or application build, and you must have 
<br>
linked in static versions of your MPI libraries, where -fPIC wouldn't be 
<br>
required.
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17378.php">Björn Regnström: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Previous message:</strong> <a href="17376.php">Blosch, Edwin L: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>In reply to:</strong> <a href="17375.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17376.php">Blosch, Edwin L: "Re: [OMPI users] Question about compilng with fPIC"</a>
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
