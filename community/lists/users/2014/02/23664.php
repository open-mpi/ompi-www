<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 14:17:50 2014" -->
<!-- isoreceived="20140226191750" -->
<!-- sent="Wed, 26 Feb 2014 13:17:43 -0600" -->
<!-- isosent="20140226191743" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="530E3DD7.5090908_at_cs.uh.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7IJ.F2PG.5iwSS9}PiYX.1J3Z44_at_seznam.cz" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 14:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23665.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23663.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23663.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23665.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23665.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23687.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so we had ROMIO working with PVFS2 (not OrangeFS, which is however
<br>
registered as PVFS2 internally). We have one cluster which uses
<br>
OrangeFS, on that machine however we used OMPIO, not ROMIO. I am
<br>
currently compiling the 1.6 version of Open MPI to see whether I can
<br>
reproduce your problem.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 2/26/2014 12:23 PM, vithanousek wrote:
<br>
<span class="quotelev1">&gt; Thanks for reply,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible that the patch solvs all this problems, not only &quot;switch
</span><br>
<span class="quotelev1">&gt; =&gt; ifs&quot; problem?
</span><br>
<span class="quotelev1">&gt; I realy dont know, wher the problem is now (OpenMPI, ROMIO, OrangeFS).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Hanousek V&#195;&#173;t
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
</span><br>
<span class="quotelev1">&gt; Od: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Komu: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Datum: 26. 2. 2014 19:16:36
</span><br>
<span class="quotelev1">&gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Edgar hasn't had a chance to find the necessary patch - he was on
</span><br>
<span class="quotelev1">&gt;     travel, returning soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Feb 26, 2014, at 9:27 AM, vithanousek &lt;vithanousek_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;     &gt; Hello,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I have still problems with compiling OpenMPI 1.6.5 with OrangeFS
</span><br>
<span class="quotelev1">&gt;     2.8.7 support.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I compiled OrangeFS by this:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ./configure --prefix=/usr/local/orangefs2
</span><br>
<span class="quotelev1">&gt;     --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
</span><br>
<span class="quotelev1">&gt;     --with-openib=/usr --without-bmi-tcp
</span><br>
<span class="quotelev2">&gt;     &gt; make -j 32
</span><br>
<span class="quotelev2">&gt;     &gt; make -j 32 kmod
</span><br>
<span class="quotelev2">&gt;     &gt; make install
</span><br>
<span class="quotelev2">&gt;     &gt; make kmod_install
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; this works.
</span><br>
<span class="quotelev2">&gt;     &gt; than I tried to compile OpenMPI (with fixed convert_named function
</span><br>
<span class="quotelev1">&gt;     in ad_pvfs2_io_dtype.c) by this:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2
</span><br>
<span class="quotelev1">&gt;     --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
</span><br>
<span class="quotelev2">&gt;     &gt; (...)
</span><br>
<span class="quotelev2">&gt;     &gt; make -j32
</span><br>
<span class="quotelev2">&gt;     &gt; (...)
</span><br>
<span class="quotelev2">&gt;     &gt; CCLD mca_io_romio.la
</span><br>
<span class="quotelev2">&gt;     &gt; /usr/bin/ld: /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o):
</span><br>
<span class="quotelev1">&gt;     relocation R_X86_64_32S against `PINT_errno_mapping' can not be used
</span><br>
<span class="quotelev1">&gt;     when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev2">&gt;     &gt; /usr/local/orangefs2/lib/libpvfs2.a: could not read symbols: Bad value
</span><br>
<span class="quotelev2">&gt;     &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;     &gt; make[3]: *** [mca_io_romio.la] Error 1
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; So I tried recompile OrangeFS by this:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; export CFLAGS=&quot;-fPIC&quot;
</span><br>
<span class="quotelev2">&gt;     &gt; ./configure --prefix=/usr/local/orangefs2
</span><br>
<span class="quotelev1">&gt;     --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
</span><br>
<span class="quotelev1">&gt;     --with-openib=/usr --without-bmi-tcp
</span><br>
<span class="quotelev2">&gt;     &gt; make -j 32
</span><br>
<span class="quotelev2">&gt;     &gt; make -j 32 kmod
</span><br>
<span class="quotelev2">&gt;     &gt; make install
</span><br>
<span class="quotelev2">&gt;     &gt; make kmod_install
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; (there was errors with current-&gt;fsuid =&gt; current-&gt;cred-&gt;fsuid, in
</span><br>
<span class="quotelev1">&gt;     multiple files. I hardcoded this in files, bad idea I know )
</span><br>
<span class="quotelev2">&gt;     &gt; Then compilation of OpenMPI works.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2
</span><br>
<span class="quotelev1">&gt;     --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
</span><br>
<span class="quotelev2">&gt;     &gt; make -j32
</span><br>
<span class="quotelev2">&gt;     &gt; make install
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; but when i created simple program which is using MPIIO, it failed
</span><br>
<span class="quotelev1">&gt;     when i run it:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; mpirun -np 1 -host node18 mpiio
</span><br>
<span class="quotelev2">&gt;     &gt; [node18:01696] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;     /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio:
</span><br>
<span class="quotelev1">&gt;     /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so:
</span><br>
<span class="quotelev1">&gt;     undefined symbol: ADIOI_PVFS2_IReadContig (ignored)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Because I got message form OrangeFS mailing list about -fPIC
</span><br>
<span class="quotelev1">&gt;     errors, i tryed to recompile OrangeFS withou this flag and compile
</span><br>
<span class="quotelev1">&gt;     OpenMPI (static linked) by this:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ./congure --prefix=/usr/local/openmpi_1.6.5_romio2
</span><br>
<span class="quotelev1">&gt;     --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
</span><br>
<span class="quotelev1">&gt;     --enable-static --disable-shared
</span><br>
<span class="quotelev2">&gt;     &gt; (...)
</span><br>
<span class="quotelev2">&gt;     &gt; make -j 32
</span><br>
<span class="quotelev2">&gt;     &gt; (...)
</span><br>
<span class="quotelev2">&gt;     &gt; CCLD otfmerge-mpi
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x60):
</span><br>
<span class="quotelev1">&gt;     undefined reference to `ADIOI_PVFS2_IReadContig'
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x68):
</span><br>
<span class="quotelev1">&gt;     undefined reference to `ADIOI_PVFS2_IWriteContig'
</span><br>
<span class="quotelev2">&gt;     &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;     &gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev2">&gt;     &gt; (...)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Now I realy dont know, what is wrong.
</span><br>
<span class="quotelev2">&gt;     &gt; Is there Anybody ho has OpenMPI working with OrangeFS?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks for replies
</span><br>
<span class="quotelev2">&gt;     &gt; HanousekV&#195;&#173;t
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23664/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23665.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23663.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23663.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23665.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23665.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23687.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
