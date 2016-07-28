<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 13:23:02 2014" -->
<!-- isoreceived="20140226182302" -->
<!-- sent="Wed, 26 Feb 2014 19:23:00 +0100 (CET)" -->
<!-- isosent="20140226182300" -->
<!-- name="vithanousek" -->
<!-- email="vithanousek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="7IJ.F2PG.5iwSS9}PiYX.1J3Z44_at_seznam.cz" -->
<!-- charset="utf-8" -->
<!-- inreplyto="E7037FC9-6AE4-49D3-B4B9-FE4D0C128337_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-26 13:23:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23661.php">Ralph Castain: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reply,



Is it possible that the patch solvs all this problems, not only &quot;switch =&gt; 
ifs&quot; problem?

I realy dont know, wher the problem is now (OpenMPI, ROMIO, OrangeFS).



Thanks

Hanousek V&#195;&#173;t


---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------

Od: Ralph Castain &lt;rhc_at_[hidden]&gt;

Komu: Open MPI Users &lt;users_at_[hidden]&gt;

Datum: 26. 2. 2014 19:16:36

P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS


&quot;Edgar hasn't had a chance to find the necessary patch - he was on travel, 
returning soon.





On Feb 26, 2014, at 9:27 AM, vithanousek &lt;vithanousek_at_[hidden]&gt; wrote:



&gt; Hello,

&gt; 

&gt; I have still problems with compiling OpenMPI 1.6.5 with OrangeFS 2.8.7 
support.

&gt; 

&gt; I compiled OrangeFS by this:

&gt; 

&gt; ./configure --prefix=/usr/local/orangefs2 --with-kernel=/usr/src/kernels/
2.6.32-431.5.1.el6.x86_64 --with-openib=/usr --without-bmi-tcp

&gt; make -j 32

&gt; make -j 32 kmod

&gt; make install

&gt; make kmod_install

&gt; 

&gt; this works.

&gt; than I tried to compile OpenMPI (with fixed convert_named function in ad_
pvfs2_io_dtype.c) by this:

&gt; 

&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags
='--with-pvfs2=/usr/local/orangefs2'

&gt; (...)

&gt; make -j32

&gt; (...)

&gt; CCLD mca_io_romio.la

&gt; /usr/bin/ld: /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o): 
relocation R_X86_64_32S against `PINT_errno_mapping' can not be used when 
making a shared object; recompile with -fPIC

&gt; /usr/local/orangefs2/lib/libpvfs2.a: could not read symbols: Bad value

&gt; collect2: ld returned 1 exit status

&gt; make[3]: *** [mca_io_romio.la] Error 1

&gt; 

&gt; So I tried recompile OrangeFS by this:

&gt; 

&gt; export CFLAGS=&quot;-fPIC&quot;

&gt; ./configure --prefix=/usr/local/orangefs2 --with-kernel=/usr/src/kernels/
2.6.32-431.5.1.el6.x86_64 --with-openib=/usr --without-bmi-tcp

&gt; make -j 32

&gt; make -j 32 kmod

&gt; make install

&gt; make kmod_install

&gt; 

&gt; (there was errors with current-&gt;fsuid =&gt; current-&gt;cred-&gt;fsuid, in multiple
files. I hardcoded this in files, bad idea I know )

&gt; Then compilation of OpenMPI works.

&gt; 

&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags
='--with-pvfs2=/usr/local/orangefs2'

&gt; make -j32

&gt; make install

&gt; 

&gt; but when i created simple program which is using MPIIO, it failed when i 
run it:

&gt; 

&gt; mpirun -np 1 -host node18 mpiio 

&gt; [node18:01696] mca: base: component_find: unable to open /usr/local/
openmpi_1.6.5_romio/lib/openmpi/mca_io_romio: /usr/local/openmpi_1.6.5_
romio/lib/openmpi/mca_io_romio.so: undefined symbol: ADIOI_PVFS2_IReadContig
(ignored)

&gt; 

&gt; Because I got message form OrangeFS mailing list about -fPIC errors, i 
tryed to recompile OrangeFS withou this flag and compile OpenMPI (static 
linked) by this: 

&gt; 

&gt; ./congure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='
--with-pvfs2=/usr/local/orangefs2' --enable-static --disable-shared

&gt; (...)

&gt; make -j 32

&gt; (...)

&gt; CCLD otfmerge-mpi

&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.
o):(.data+0x60): undefined reference to `ADIOI_PVFS2_IReadContig'

&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.
o):(.data+0x68): undefined reference to `ADIOI_PVFS2_IWriteContig'

&gt; collect2: ld returned 1 exit status

&gt; make[10]: *** [otfmerge-mpi] Error 1

&gt; (...)

&gt; 

&gt; Now I realy dont know, what is wrong. 

&gt; Is there Anybody ho has OpenMPI working with OrangeFS?

&gt; 

&gt; Thanks for replies

&gt; HanousekV&#195;&#173;t

&gt; _______________________________________________

&gt; users mailing list

&gt; users_at_[hidden]

&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>



_______________________________________________

users mailing list

users_at_[hidden]

<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&quot;--=_036edf336cdbead52fd020db&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_Content-Type: text/html;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;charset=utf-8
<br>
Content-Transfer-Encoding: quoted-printable
<br>
<p>&lt;html&gt;&lt;body&gt;Thanks for reply,&lt;br/&gt;&lt;br/&gt;Is it possible that the patch solvs all this problems, not only &quot;switch =&gt; ifs&quot; problem?&lt;br/&gt;I realy dont know, wher the problem is now (OpenMPI,  ROMIO, OrangeFS).&lt;br/&gt;&lt;br/&gt;Thanks&lt;br/&gt;Hanousek V&#195;&#173;t&lt;br/&gt;&lt;p&gt;---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------&lt;br/&gt;Od: Ralph Castain &amp;lt;rhc_at_[hidden]&gt;&lt;br/&gt;Komu: Open MPI Users &amp;lt;users_at_[hidden]&gt;&lt;br/&gt;Datum: 26. 2. 2014 19:16:36&lt;br/&gt;P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS&lt;/p&gt;&lt;br/&gt;&lt;blockquote&gt;Edgar hasn't had a chance to find the necessary patch - he was on travel, returning soon.&lt;br/&gt;&lt;br/&gt;&lt;br/&gt;On Feb 26, 2014, at 9:27 AM, vithanousek &amp;lt;vithanousek_at_[hidden]&gt; wrote:&lt;br/&gt;&lt;br/&gt;&gt; Hello,&lt;br/&gt;&gt; &lt;br/&gt;&gt; I have still problems with compiling OpenMPI 1.6.5 with OrangeFS 2.8.7 support.&lt;br/&gt;&gt; &lt;br/&gt;&gt; I compiled OrangeFS by this:&lt;br/&gt;&gt; &lt;br/&gt;&gt;  ./configure --prefix=/usr/local/orangefs2 --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64 --with-openib=/usr --without-bmi-tcp&lt;br/&gt;&gt; make -j 32&lt;br/&gt;&gt; make -j 32 kmod&lt;br/&gt;&gt; make install&lt;br/&gt;&gt; make kmod_install&lt;br/&gt;&gt; &lt;br/&gt;&gt; this works.&lt;br/&gt;&gt; than I tried to compile OpenMPI (with fixed convert_named function in ad_pvfs2_io_dtype.c)  by this:&lt;br/&gt;&gt; &lt;br/&gt;&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br/&gt;&gt; (...)&lt;br/&gt;&gt; make -j32&lt;br/&gt;&gt; (...)&lt;br/&gt;&gt; CCLD mca_io_romio.la&lt;br/&gt;&gt; /usr/bin/ld: /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o): relocation R_X86_64_32S against `PINT_errno_mapping' can not be used when making a shared object; recompile with -fPIC&lt;br/&gt;&gt; /usr/local/orangefs2/lib/libpvfs2.a: could not read symbols: Bad value&lt;br/&gt;&gt; collect2: ld returned 1 exit status&lt;br/&gt;&gt; make[3]: *** [mca_io_romio.la] Error 1&lt;br/&gt;&gt; &lt;br/&gt;&gt; So I tried recompile OrangeFS by this:&lt;br/&gt;&gt; &lt;br/&gt;&gt; export CFLAGS=&quot;-fPIC&quot;&lt;br/&gt;&gt; ./configure --prefix=/usr/local/orangefs2 --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64 --with-openib=/usr --without-bmi-tcp&lt;br/&gt;&gt; make -j 32&lt;br/&gt;&gt; make -j 32 kmod&lt;br/&gt;&gt; make install&lt;br/&gt;&gt; make kmod_install&lt;br/&gt;&gt; &lt;br/&gt;&gt; (there was errors with current-&gt;fsuid =&gt; current-&gt;cred-&gt;fsuid, in multiple files. I hardcoded this in files, bad idea I know )&lt;br/&gt;&gt; Then compilation of OpenMPI works.&lt;br/&gt;&gt; &lt;br/&gt;&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br/&gt;&gt; make -j32&lt;br/&gt;&gt; make install&lt;br/&gt;&gt; &lt;br/&gt;&gt; but when i created simple program which is using MPIIO, it failed when i run it:&lt;br/&gt;&gt; &lt;br/&gt;&gt; mpirun -np 1 -host node18 mpiio &lt;br/&gt;&gt; [node18:01696] mca: base: component_find: unable to open /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio: /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so: undefined symbol: ADIOI_PVFS2_IReadContig (ignored)&lt;br/&gt;&gt; &lt;br/&gt;&gt; Because I got message form OrangeFS mailing list about -fPIC errors, i tryed to recompile OrangeFS withou this flag and compile OpenMPI (static linked) by this:  &lt;br/&gt;&gt; &lt;br/&gt;&gt; ./congure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2' --enable-static --disable-shared&lt;br/&gt;&gt; (...)&lt;br/&gt;&gt; make -j 32&lt;br/&gt;&gt; (...)&lt;br/&gt;&gt;   CCLD   otfmerge-mpi&lt;br/&gt;&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x60): undefined reference to `ADIOI_PVFS2_IReadContig'&lt;br/&gt;&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x68): undefined reference to `ADIOI_PVFS2_IWriteContig'&lt;br/&gt;&gt; collect2: ld returned 1 exit status&lt;br/&gt;&gt; make[10]: *** [otfmerge-mpi] Error 1&lt;br/&gt;&gt; (...)&lt;br/&gt;&gt; &lt;br/&gt;&gt; Now I realy dont know, what is wrong. &lt;br/&gt;&gt; Is there Anybody ho has OpenMPI working with OrangeFS?&lt;br/&gt;&gt; &lt;br/&gt;&gt; Thanks for replies&lt;br/&gt;&gt; HanousekV&#195;&#173;t&lt;br/&gt;&gt; _______________________________________________&lt;br/&gt;&gt; users mailing list&lt;br/&gt;&gt; users_at_[hidden]&lt;br/&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br/">http://www.open-mpi.org/mailman/listinfo.cgi/users<br/</a>&gt;&lt;br/&gt;_______________________________________________&lt;br/&gt;users mailing list&lt;br/&gt;users_at_[hidden]&lt;br/&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users</blockquote">http://www.open-mpi.org/mailman/listinfo.cgi/users</blockquote</a>&gt;&lt;/body&gt;&lt;/html&gt;--=_036edf336cdbead52fd020db&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_=--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23661.php">Ralph Castain: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23664.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
