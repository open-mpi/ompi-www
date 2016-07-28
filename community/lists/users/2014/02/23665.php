<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 14:30:00 2014" -->
<!-- isoreceived="20140226193000" -->
<!-- sent="Wed, 26 Feb 2014 20:29:57 +0100 (CET)" -->
<!-- isosent="20140226192957" -->
<!-- name="vithanousek" -->
<!-- email="vithanousek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="7cp.F2Pk.2TqQBL8wQid.1J3a2r_at_seznam.cz" -->
<!-- charset="utf-8" -->
<!-- inreplyto="530E3DD7.5090908_at_cs.uh.edu" -->
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
<strong>From:</strong> vithanousek (<em>vithanousek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 14:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23666.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23666.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23666.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your Time,

I'm little bit confused, what is diferent between pvfs2 and orangefs. I was 
thinking, that only project changes name.

I get hint from OrangeFS maillist, to compile OrangeFs with --enable-shared.
This produce a some shared library (.so) in /usr/local/orangefs/lib and I 
can compile OpenMPI 1.6.5 now (with fixed &quot;switch =&gt;ifs&quot; in ROMIO).

I will test if it is working in next hour (some configuration steps is 
needed).

Thanks.
Hanousek V&#195;&#173;t


---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
Od: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
Komu: Open MPI Users &lt;users_at_[hidden]&gt;
Datum: 26. 2. 2014 20:18:03
P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS

&quot;so we had ROMIO working with PVFS2 (not OrangeFS, which is however
registered as PVFS2 internally). We have one cluster which uses
OrangeFS, on that machine however we used OMPIO, not ROMIO. I am
currently compiling the 1.6 version of Open MPI to see whether I can
reproduce your problem.

Thanks
Edgar

On 2/26/2014 12:23 PM, vithanousek wrote:
&gt; Thanks for reply,
&gt; 
&gt; Is it possible that the patch solvs all this problems, not only &quot;switch
&gt; =&gt; ifs&quot; problem?
&gt; I realy dont know, wher the problem is now (OpenMPI, ROMIO, OrangeFS).
&gt; 
&gt; Thanks
&gt; Hanousek V&#195;&#173;t
&gt; 
&gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
&gt; Od: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; Komu: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Datum: 26. 2. 2014 19:16:36
&gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS
&gt; 
&gt; 
&gt; Edgar hasn't had a chance to find the necessary patch - he was on
&gt; travel, returning soon.
&gt; 
&gt; 
&gt; On Feb 26, 2014, at 9:27 AM, vithanousek &lt;vithanousek_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; I have still problems with compiling OpenMPI 1.6.5 with OrangeFS
&gt; 2.8.7 support.
&gt; &gt;
&gt; &gt; I compiled OrangeFS by this:
&gt; &gt;
&gt; &gt; ./configure --prefix=/usr/local/orangefs2
&gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
&gt; --with-openib=/usr --without-bmi-tcp
&gt; &gt; make -j 32
&gt; &gt; make -j 32 kmod
&gt; &gt; make install
&gt; &gt; make kmod_install
&gt; &gt;
&gt; &gt; this works.
&gt; &gt; than I tried to compile OpenMPI (with fixed convert_named function
&gt; in ad_pvfs2_io_dtype.c) by this:
&gt; &gt;
&gt; &gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2
&gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
&gt; &gt; (...)
&gt; &gt; make -j32
&gt; &gt; (...)
&gt; &gt; CCLD mca_io_romio.la
&gt; &gt; /usr/bin/ld: /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o):
&gt; relocation R_X86_64_32S against `PINT_errno_mapping' can not be used
&gt; when making a shared object; recompile with -fPIC
&gt; &gt; /usr/local/orangefs2/lib/libpvfs2.a: could not read symbols: Bad value
&gt; &gt; collect2: ld returned 1 exit status
&gt; &gt; make[3]: *** [mca_io_romio.la] Error 1
&gt; &gt;
&gt; &gt; So I tried recompile OrangeFS by this:
&gt; &gt;
&gt; &gt; export CFLAGS=&quot;-fPIC&quot;
&gt; &gt; ./configure --prefix=/usr/local/orangefs2
&gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
&gt; --with-openib=/usr --without-bmi-tcp
&gt; &gt; make -j 32
&gt; &gt; make -j 32 kmod
&gt; &gt; make install
&gt; &gt; make kmod_install
&gt; &gt;
&gt; &gt; (there was errors with current-&gt;fsuid =&gt; current-&gt;cred-&gt;fsuid, in
&gt; multiple files. I hardcoded this in files, bad idea I know )
&gt; &gt; Then compilation of OpenMPI works.
&gt; &gt;
&gt; &gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2
&gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
&gt; &gt; make -j32
&gt; &gt; make install
&gt; &gt;
&gt; &gt; but when i created simple program which is using MPIIO, it failed
&gt; when i run it:
&gt; &gt;
&gt; &gt; mpirun -np 1 -host node18 mpiio
&gt; &gt; [node18:01696] mca: base: component_find: unable to open
&gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio:
&gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so:
&gt; undefined symbol: ADIOI_PVFS2_IReadContig (ignored)
&gt; &gt;
&gt; &gt; Because I got message form OrangeFS mailing list about -fPIC
&gt; errors, i tryed to recompile OrangeFS withou this flag and compile
&gt; OpenMPI (static linked) by this:
&gt; &gt;
&gt; &gt; ./congure --prefix=/usr/local/openmpi_1.6.5_romio2
&gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
&gt; --enable-static --disable-shared
&gt; &gt; (...)
&gt; &gt; make -j 32
&gt; &gt; (...)
&gt; &gt; CCLD otfmerge-mpi
&gt; &gt;
&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.
o):(.data+0x60):
&gt; undefined reference to `ADIOI_PVFS2_IReadContig'
&gt; &gt;
&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.
o):(.data+0x68):
&gt; undefined reference to `ADIOI_PVFS2_IWriteContig'
&gt; &gt; collect2: ld returned 1 exit status
&gt; &gt; make[10]: *** [otfmerge-mpi] Error 1
&gt; &gt; (...)
&gt; &gt;
&gt; &gt; Now I realy dont know, what is wrong.
&gt; &gt; Is there Anybody ho has OpenMPI working with OrangeFS?
&gt; &gt;
&gt; &gt; Thanks for replies
&gt; &gt; HanousekV&#195;&#173;t
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 

-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science University of Houston
Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
Tel: +1 (713) 743-3857 Fax: +1 (713) 743-3335_______________________________
________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&quot;--=_6cc8ff7320e87bb81f052236&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_Content-Type: text/html;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;charset=utf-8
<br>
Content-Transfer-Encoding: quoted-printable
<br>
<p>&lt;html&gt;&lt;body&gt;Thanks for your Time,&lt;br&gt;&lt;br&gt;I'm little bit confused, what is diferent between pvfs2 and orangefs. I was thinking, that only project changes name.&lt;br&gt;&lt;br&gt;I get hint from OrangeFS maillist, to compile OrangeFs with --enable-shared. This produce a some shared library (.so) in /usr/local/orangefs/lib and I can compile OpenMPI 1.6.5 now (with fixed &quot;switch =&amp;gt;ifs&quot; in ROMIO).&lt;br&gt;&lt;br&gt;I will test if it is working in next hour (some configuration steps is needed).&lt;br&gt;&lt;br&gt;Thanks.&lt;br&gt;Hanousek V&#195;&#173;t&lt;br&gt;&lt;br&gt;&lt;p&gt;---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------&lt;br&gt;Od: Edgar Gabriel &amp;lt;gabriel_at_[hidden]&amp;gt;&lt;br&gt;Komu: Open MPI Users &amp;lt;users_at_[hidden]&amp;gt;&lt;br&gt;Datum: 26. 2. 2014 20:18:03&lt;br&gt;P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS&lt;/p&gt;&lt;br&gt;&lt;blockquote&gt;so we had ROMIO working with PVFS2 (not OrangeFS, which is however&lt;br&gt;registered as PVFS2 internally). We have one cluster which uses&lt;br&gt;OrangeFS, on that machine however we used OMPIO, not ROMIO. I am&lt;br&gt;currently compiling the 1.6 version of Open MPI to see whether I can&lt;br&gt;reproduce your problem.&lt;br&gt;&lt;br&gt;Thanks&lt;br&gt;Edgar&lt;br&gt;&lt;br&gt;On 2/26/2014 12:23 PM, vithanousek wrote:&lt;br&gt;&amp;gt; Thanks for reply,&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; Is it possible that the patch solvs all this problems, not only &quot;switch&lt;br&gt;&amp;gt; =&amp;gt; ifs&quot; problem?&lt;br&gt;&amp;gt; I realy dont know, wher the problem is now (OpenMPI, ROMIO, OrangeFS).&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; Thanks&lt;br&gt;&amp;gt; Hanousek V&#195;&#173;t&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------&lt;br&gt;&amp;gt; Od: Ralph Castain &amp;lt;rhc_at_[hidden]&amp;gt;&lt;br&gt;&amp;gt; Komu: Open MPI Users &amp;lt;users_at_[hidden]&amp;gt;&lt;br&gt;&amp;gt; Datum: 26. 2. 2014 19:16:36&lt;br&gt;&amp;gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;     Edgar hasn't had a chance to find the necessary patch - he was on&lt;br&gt;&amp;gt;     travel, returning soon.&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;     On Feb 26, 2014, at 9:27 AM, vithanousek &amp;lt;vithanousek_at_[hidden]&amp;gt; wrote:&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;     &amp;gt; Hello,&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; I have still problems with compiling OpenMPI 1.6.5 with OrangeFS&lt;br&gt;&amp;gt;     2.8.7 support.&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; I compiled OrangeFS by this:&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; ./configure --prefix=/usr/local/orangefs2&lt;br&gt;&amp;gt;     --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64&lt;br&gt;&amp;gt;     --with-openib=/usr --without-bmi-tcp&lt;br&gt;&amp;gt;     &amp;gt; make -j 32&lt;br&gt;&amp;gt;     &amp;gt; make -j 32 kmod&lt;br&gt;&amp;gt;     &amp;gt; make install&lt;br&gt;&amp;gt;     &amp;gt; make kmod_install&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; this works.&lt;br&gt;&amp;gt;     &amp;gt; than I tried to compile OpenMPI (with fixed convert_named function&lt;br&gt;&amp;gt;     in ad_pvfs2_io_dtype.c) by this:&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2&lt;br&gt;&amp;gt;     --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br&gt;&amp;gt;     &amp;gt; (...)&lt;br&gt;&amp;gt;     &amp;gt; make -j32&lt;br&gt;&amp;gt;     &amp;gt; (...)&lt;br&gt;&amp;gt;     &amp;gt; CCLD mca_io_romio.la&lt;br&gt;&amp;gt;     &amp;gt; /usr/bin/ld: /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o):&lt;br&gt;&amp;gt;     relocation R_X86_64_32S against `PINT_errno_mapping' can not be used&lt;br&gt;&amp;gt;     when making a shared object; recompile with -fPIC&lt;br&gt;&amp;gt;     &amp;gt; /usr/local/orangefs2/lib/libpvfs2.a: could not read symbols: Bad value&lt;br&gt;&amp;gt;     &amp;gt; collect2: ld returned 1 exit status&lt;br&gt;&amp;gt;     &amp;gt; make[3]: *** [mca_io_romio.la] Error 1&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; So I tried recompile OrangeFS by this:&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; export CFLAGS=&quot;-fPIC&quot;&lt;br&gt;&amp;gt;     &amp;gt; ./configure --prefix=/usr/local/orangefs2&lt;br&gt;&amp;gt;     --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64&lt;br&gt;&amp;gt;     --with-openib=/usr --without-bmi-tcp&lt;br&gt;&amp;gt;     &amp;gt; make -j 32&lt;br&gt;&amp;gt;     &amp;gt; make -j 32 kmod&lt;br&gt;&amp;gt;     &amp;gt; make install&lt;br&gt;&amp;gt;     &amp;gt; make kmod_install&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; (there was errors with current-&amp;gt;fsuid =&amp;gt; current-&amp;gt;cred-&amp;gt;fsuid, in&lt;br&gt;&amp;gt;     multiple files. I hardcoded this in files, bad idea I know )&lt;br&gt;&amp;gt;     &amp;gt; Then compilation of OpenMPI works.&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2&lt;br&gt;&amp;gt;     --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br&gt;&amp;gt;     &amp;gt; make -j32&lt;br&gt;&amp;gt;     &amp;gt; make install&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; but when i created simple program which is using MPIIO, it failed&lt;br&gt;&amp;gt;     when i run it:&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; mpirun -np 1 -host node18 mpiio&lt;br&gt;&amp;gt;     &amp;gt; [node18:01696] mca: base: component_find: unable to open&lt;br&gt;&amp;gt;     /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio:&lt;br&gt;&amp;gt;     /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so:&lt;br&gt;&amp;gt;     undefined symbol: ADIOI_PVFS2_IReadContig (ignored)&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; Because I got message form OrangeFS mailing list about -fPIC&lt;br&gt;&amp;gt;     errors, i tryed to recompile OrangeFS withou this flag and compile&lt;br&gt;&amp;gt;     OpenMPI (static linked) by this:&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; ./congure --prefix=/usr/local/openmpi_1.6.5_romio2&lt;br&gt;&amp;gt;     --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br&gt;&amp;gt;     --enable-static --disable-shared&lt;br&gt;&amp;gt;     &amp;gt; (...)&lt;br&gt;&amp;gt;     &amp;gt; make -j 32&lt;br&gt;&amp;gt;     &amp;gt; (...)&lt;br&gt;&amp;gt;     &amp;gt; CCLD otfmerge-mpi&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x60):&lt;br&gt;&amp;gt;     undefined reference to `ADIOI_PVFS2_IReadContig'&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x68):&lt;br&gt;&amp;gt;     undefined reference to `ADIOI_PVFS2_IWriteContig'&lt;br&gt;&amp;gt;     &amp;gt; collect2: ld returned 1 exit status&lt;br&gt;&amp;gt;     &amp;gt; make[10]: *** [otfmerge-mpi] Error 1&lt;br&gt;&amp;gt;     &amp;gt; (...)&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; Now I realy dont know, what is wrong.&lt;br&gt;&amp;gt;     &amp;gt; Is there Anybody ho has OpenMPI working with OrangeFS?&lt;br&gt;&amp;gt;     &amp;gt;&lt;br&gt;&amp;gt;     &amp;gt; Thanks for replies&lt;br&gt;&amp;gt;     &amp;gt; HanousekV&#195;&#173;t&lt;br&gt;&amp;gt;     &amp;gt; _______________________________________________&lt;br&gt;&amp;gt;     &amp;gt; users mailing list&lt;br&gt;&amp;gt;     &amp;gt; users_at_[hidden]&lt;br&gt;&amp;gt;     &amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt; &lt;br&gt;&amp;gt;     _______________________________________________&lt;br&gt;&amp;gt;     users mailing list&lt;br&gt;&amp;gt;     users_at_[hidden]&lt;br&gt;&amp;gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; _______________________________________________&lt;br&gt;&amp;gt; users mailing list&lt;br&gt;&amp;gt; users_at_[hidden]&lt;br&gt;&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt; &lt;br&gt;&lt;br&gt;-- &lt;br&gt;Edgar Gabriel&lt;br&gt;Associate Professor&lt;br&gt;Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu<br">http://pstl.cs.uh.edu<br</a>&gt;Department of Computer Science          University of Houston&lt;br&gt;Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA&lt;br&gt;Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335_______________________________________________&lt;br&gt;users mailing list&lt;br&gt;users_at_[hidden]&lt;br&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users</blockquote">http://www.open-mpi.org/mailman/listinfo.cgi/users</blockquote</a>&gt;&lt;/body&gt;&lt;/html&gt;--=_6cc8ff7320e87bb81f052236&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_=--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23666.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23666.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23666.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
