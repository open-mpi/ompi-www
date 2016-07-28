<?
$subject_val = "[OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 12:27:03 2014" -->
<!-- isoreceived="20140226172703" -->
<!-- sent="Wed, 26 Feb 2014 18:27:00 +0100 (CET)" -->
<!-- isosent="20140226172700" -->
<!-- name="vithanousek" -->
<!-- email="vithanousek_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="740.F2PO.1nBb2S7Z2g{.1J3YFa_at_seznam.cz" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI-ROMIO-OrangeFS<br>
<strong>From:</strong> vithanousek (<em>vithanousek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 12:27:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23661.php">Ralph Castain: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23659.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23661.php">Ralph Castain: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23661.php">Ralph Castain: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,

I have still problems with compiling OpenMPI 1.6.5 with OrangeFS 2.8.7 
support.

I compiled OrangeFS by this:

&#194;&#160;./configure --prefix=/usr/local/orangefs2 --with-kernel=/usr/src/kernels/
2.6.32-431.5.1.el6.x86_64 --with-openib=/usr --without-bmi-tcp
make -j 32
make -j 32 kmod
make install
make kmod_install

this works.
than I tried to compile OpenMPI (with fixed convert_named function in ad_
pvfs2_io_dtype.c)&#194;&#160; by this:

./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='
--with-pvfs2=/usr/local/orangefs2'
(...)
make -j32
(...)
CCLD mca_io_romio.la
/usr/bin/ld: /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o): 
relocation R_X86_64_32S against `PINT_errno_mapping' can not be used when 
making a shared object; recompile with -fPIC
/usr/local/orangefs2/lib/libpvfs2.a: could not read symbols: Bad value
collect2: ld returned 1 exit status
make[3]: *** [mca_io_romio.la] Error 1

So I tried recompile OrangeFS by this:

export CFLAGS=&quot;-fPIC&quot;
./configure --prefix=/usr/local/orangefs2 --with-kernel=/usr/src/kernels/
2.6.32-431.5.1.el6.x86_64 --with-openib=/usr --without-bmi-tcp
make -j 32
make -j 32 kmod
make install
make kmod_install

(there was errors with current-&gt;fsuid =&gt; current-&gt;cred-&gt;fsuid, in multiple 
files. I hardcoded this in files, bad idea I know )
Then compilation of OpenMPI works.

./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='
--with-pvfs2=/usr/local/orangefs2'
make -j32
make install

but when i created simple program which is using MPIIO, it failed when i run
it:

mpirun -np 1 -host node18 mpiio 
[node18:01696] mca: base: component_find: unable to open /usr/local/openmpi_
1.6.5_romio/lib/openmpi/mca_io_romio: /usr/local/openmpi_1.6.5_romio/lib/
openmpi/mca_io_romio.so: undefined symbol: ADIOI_PVFS2_IReadContig (ignored)

Because I got message form OrangeFS mailing list about -fPIC errors, i tryed
to recompile OrangeFS withou this flag and compile OpenMPI (static linked) 
by this:&#194;&#160; 

./congure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--
with-pvfs2=/usr/local/orangefs2' --enable-static --disable-shared
(...)
make -j 32
(...)
&#194;&#160; CCLD&#194;&#160;&#194;&#160; otfmerge-mpi
/root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(
.data+0x60): undefined reference to `ADIOI_PVFS2_IReadContig'
/root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(
.data+0x68): undefined reference to `ADIOI_PVFS2_IWriteContig'
collect2: ld returned 1 exit status
make[10]: *** [otfmerge-mpi] Error 1
(...)

Now I realy dont know, what is wrong. 
Is there Anybody ho has OpenMPI working with OrangeFS?

Thanks for replies
HanousekV&#195;&#173;t
--=_262aac836333492541370ae6&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_Content-Type: text/html;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;charset=utf-8
<br>
Content-Transfer-Encoding: quoted-printable
<br>
<p>&lt;html&gt;&lt;body&gt;Hello,&lt;br&gt;&lt;br&gt;I have still problems with compiling OpenMPI 1.6.5 with OrangeFS 2.8.7 support.&lt;br&gt;&lt;br&gt;I compiled OrangeFS by this:&lt;br&gt;&lt;br&gt;&amp;nbsp;./configure --prefix=/usr/local/orangefs2 --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64 --with-openib=/usr --without-bmi-tcp&lt;br&gt;make -j 32&lt;br&gt;make -j 32 kmod&lt;br&gt;make install&lt;br&gt;make kmod_install&lt;br&gt;&lt;br&gt;this works.&lt;br&gt;than I tried to compile OpenMPI (with fixed convert_named function in ad_pvfs2_io_dtype.c)&amp;nbsp; by this:&lt;br&gt;&lt;br&gt;./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br&gt;(...)&lt;br&gt;make -j32&lt;br&gt;(...)&lt;br&gt; CCLD mca_io_romio.la&lt;br&gt;/usr/bin/ld:
/usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o): relocation 
R_X86_64_32S against `PINT_errno_mapping' can not be used when making a 
shared object; recompile with -fPIC&lt;br&gt;/usr/local/orangefs2/lib/libpvfs2.a: could not read symbols: Bad value&lt;br&gt;collect2: ld returned 1 exit status&lt;br&gt;make[3]: *** [mca_io_romio.la] Error 1&lt;br&gt;&lt;br&gt;So I tried recompile OrangeFS by this:&lt;br&gt;&lt;br&gt;export CFLAGS=&quot;-fPIC&quot;&lt;br&gt;./configure --prefix=/usr/local/orangefs2 
--with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64 
--with-openib=/usr --without-bmi-tcp&lt;br&gt;make -j 32&lt;br&gt;make -j 32 kmod&lt;br&gt;make install&lt;br&gt;make kmod_install&lt;br&gt;&lt;br&gt;(there was errors with current-&amp;gt;fsuid =&amp;gt; current-&amp;gt;cred-&amp;gt;fsuid, in multiple files. I hardcoded this in files, bad idea I know )&lt;br&gt;Then compilation of OpenMPI works.&lt;br&gt;&lt;br&gt;./configure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br&gt;make -j32&lt;br&gt;make install&lt;br&gt;&lt;br&gt;but when i created simple program which is using MPIIO, it failed when i run it:&lt;br&gt;&lt;br&gt;mpirun -np 1 -host node18 mpiio &lt;br&gt;[node18:01696] mca: base: component_find: unable to open /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio: /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so: undefined symbol: ADIOI_PVFS2_IReadContig (ignored)&lt;br&gt;&lt;br&gt;Because I got message form OrangeFS mailing list about -fPIC errors, i tryed to recompile OrangeFS withou this flag and compile OpenMPI (static linked) by this:&amp;nbsp; &lt;br&gt;&lt;br&gt;./congure --prefix=/usr/local/openmpi_1.6.5_romio2 --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2' --enable-static --disable-shared&lt;br&gt;(...)&lt;br&gt;make -j 32&lt;br&gt;(...)&lt;br&gt;&amp;nbsp; CCLD&amp;nbsp;&amp;nbsp; otfmerge-mpi&lt;br&gt;/root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x60): undefined reference to `ADIOI_PVFS2_IReadContig'&lt;br&gt;/root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x68): undefined reference to `ADIOI_PVFS2_IWriteContig'&lt;br&gt;collect2: ld returned 1 exit status&lt;br&gt;make[10]: *** [otfmerge-mpi] Error 1&lt;br&gt;(...)&lt;br&gt;&lt;br&gt;Now I realy dont know, what is wrong. &lt;br&gt;Is there Anybody ho has OpenMPI working with OrangeFS?&lt;br&gt;&lt;br&gt;Thanks for replies&lt;br&gt;HanousekV&#195;&#173;t&lt;br&gt;&lt;/body&gt;&lt;/html&gt;--=_262aac836333492541370ae6&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_=--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23661.php">Ralph Castain: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23659.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23661.php">Ralph Castain: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23661.php">Ralph Castain: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
