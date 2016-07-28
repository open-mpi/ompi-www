<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 13:16:23 2014" -->
<!-- isoreceived="20140226181623" -->
<!-- sent="Wed, 26 Feb 2014 10:14:37 -0800" -->
<!-- isosent="20140226181437" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="E7037FC9-6AE4-49D3-B4B9-FE4D0C128337_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="740.F2PO.1nBb2S7Z2g{.1J3YFa_at_seznam.cz" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-ROMIO-OrangeFS<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 13:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23660.php">vithanousek: "[OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23660.php">vithanousek: "[OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23663.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23663.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar hasn't had a chance to find the necessary patch - he was on travel, returning soon.
<br>
<p><p>On Feb 26, 2014, at 9:27 AM, vithanousek &lt;vithanousek_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have still problems with compiling OpenMPI 1.6.5 with OrangeFS 2.8.7 support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled OrangeFS by this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/usr/local/orangefs2 --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64 --with-openib=/usr --without-bmi-tcp
</span><br>
<span class="quotelev1">&gt; make -j 32
</span><br>
<span class="quotelev1">&gt; make -j 32 kmod
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; make kmod_install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this works.
</span><br>
<span class="quotelev1">&gt; than I tried to compile OpenMPI (with fixed convert_named function in ad_pvfs2_io_dtype.c)  by this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; make -j32
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; CCLD mca_io_romio.la
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o): relocation R_X86_64_32S against `PINT_errno_mapping' can not be used when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; /usr/local/orangefs2/lib/libpvfs2.a: could not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [mca_io_romio.la] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I tried recompile OrangeFS by this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-fPIC&quot;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/orangefs2 --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64 --with-openib=/usr --without-bmi-tcp
</span><br>
<span class="quotelev1">&gt; make -j 32
</span><br>
<span class="quotelev1">&gt; make -j 32 kmod
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; make kmod_install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (there was errors with current-&gt;fsuid =&gt; current-&gt;cred-&gt;fsuid, in multiple files. I hardcoded this in files, bad idea I know )
</span><br>
<span class="quotelev1">&gt; Then compilation of OpenMPI works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
</span><br>
<span class="quotelev1">&gt; make -j32
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but when i created simple program which is using MPIIO, it failed when i run it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -host node18 mpiio 
</span><br>
<span class="quotelev1">&gt; [node18:01696] mca: base: component_find: unable to open /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio: /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so: undefined symbol: ADIOI_PVFS2_IReadContig (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because I got message form OrangeFS mailing list about -fPIC errors, i tryed to recompile OrangeFS withou this flag and compile OpenMPI (static linked) by this:  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./congure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2' --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; make -j 32
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt;   CCLD   otfmerge-mpi
</span><br>
<span class="quotelev1">&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x60): undefined reference to `ADIOI_PVFS2_IReadContig'
</span><br>
<span class="quotelev1">&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x68): undefined reference to `ADIOI_PVFS2_IWriteContig'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I realy dont know, what is wrong. 
</span><br>
<span class="quotelev1">&gt; Is there Anybody ho has OpenMPI working with OrangeFS?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for replies
</span><br>
<span class="quotelev1">&gt; HanousekV&#237;t
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
<li><strong>Next message:</strong> <a href="23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23660.php">vithanousek: "[OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23660.php">vithanousek: "[OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23663.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23663.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
