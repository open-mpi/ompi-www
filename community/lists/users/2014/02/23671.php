<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 16:17:23 2014" -->
<!-- isoreceived="20140226211723" -->
<!-- sent="Wed, 26 Feb 2014 22:17:12 +0100 (CET)" -->
<!-- isosent="20140226211712" -->
<!-- name="vithanousek" -->
<!-- email="vithanousek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="83O.F2Pq.7zDxDTGCCRn.1J3bdO_at_seznam.cz" -->
<!-- charset="utf-8" -->
<!-- inreplyto="530E497A.5060705_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2014-02-26 16:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23672.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23670.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>In reply to:</strong> <a href="23667.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23672.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23672.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At first Thank you very much for your time.

&quot;--with-file-system=pvfs2+ufs+nfs&quot; didnt help.

But if find (by google) some part of orangefs test. I dont know what is this
exactly doing, but when I edited source code of OpenMPI like doing this 
line, all seems that it is working now. (changing ADIOI_PVFS2_IReadContig 
and ADIOI_PVFS2_IWriteContig to NULL in file ad_pvfs2.c)

<a href="http://www.orangefs.org/trac/orangefs/browser/branches/OFSTest-dev/OFSTest/">http://www.orangefs.org/trac/orangefs/browser/branches/OFSTest-dev/OFSTest/</a>
OFSTestNode.py?rev=10645#L1328

Other tests I will do tomorrow.

Thanks
Hanousek V&#195;&#173;t 




---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
Od: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
Komu: users_at_[hidden]
Datum: 26. 2. 2014 21:08:07
P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS

&quot;not sure whether its the problem or not, but usually have an additional
flag set :

--with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs
--with-pvfs2=/opt/pvfs-2.8.2&quot;

compilation is a bit slow for me today...

Edgar


On 2/26/2014 2:05 PM, vithanousek wrote:
&gt; Now I compiled by doing this:
&gt; OrangeFS (original, withou editing):
&gt; 
&gt; ./configure --prefix=/usr/local/orangefs
&gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
&gt; --with-openib=/usr --without-bmi-tcp --enable-shared
&gt; make
&gt; make kmod
&gt; make install
&gt; make kmod_install
&gt; 
&gt; Without error.
&gt; OpenMPI (with edited switch to ifs):
&gt; 
&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio
&gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs'
&gt; make
&gt; make install
&gt; 
&gt; Without error.
&gt; parallel FS mount work. But I still cant use MPIIO.
&gt; I compiled simple MPIIO program and run it by this:
&gt; 
&gt; mpicc -o mpiio mpiio.c
&gt; mpirun -np 1 -host node18 mpiio
&gt; [node18:02334] mca: base: component_find: unable to open
&gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio:
&gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so: undefined
&gt; symbol: ADIOI_PVFS2_IReadContig (ignored)
&gt; 
&gt; And no file is created.
&gt; I tried compile it with:
&gt; mpicc -o mpiio mpiio.c -lpvfs2 -L/usr/local/orangefs/lib
&gt; 
&gt; but i got the same results, have You any idea?
&gt; 
&gt; Thank for reply
&gt; Hanousek V&#195;&#173;t
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
&gt; Od: vithanousek &lt;vithanousek_at_[hidden]&gt;
&gt; Komu: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Datum: 26. 2. 2014 20:30:17
&gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS
&gt; 
&gt; 
&gt; Thanks for your Time,
&gt; 
&gt; I'm little bit confused, what is diferent between pvfs2 and
&gt; orangefs. I was thinking, that only project changes name.
&gt; 
&gt; I get hint from OrangeFS maillist, to compile OrangeFs with
&gt; --enable-shared. This produce a some shared library (.so) in
&gt; /usr/local/orangefs/lib and I can compile OpenMPI 1.6.5 now (with
&gt; fixed &quot;switch =&gt;ifs&quot; in ROMIO).
&gt; 
&gt; I will test if it is working in next hour (some configuration steps
&gt; is needed).
&gt; 
&gt; Thanks.
&gt; Hanousek V&#195;&#173;t
&gt; 
&gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
&gt; Od: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
&gt; Komu: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Datum: 26. 2. 2014 20:18:03
&gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS
&gt; 
&gt; 
&gt; so we had ROMIO working with PVFS2 (not OrangeFS, which is however
&gt; registered as PVFS2 internally). We have one cluster which uses
&gt; OrangeFS, on that machine however we used OMPIO, not ROMIO. I am
&gt; currently compiling the 1.6 version of Open MPI to see whether I can
&gt; reproduce your problem.
&gt; 
&gt; Thanks
&gt; Edgar
&gt; 
&gt; On 2/26/2014 12:23 PM, vithanousek wrote:
&gt; &gt; Thanks for reply,
&gt; &gt;
&gt; &gt; Is it possible that the patch solvs all this problems, not
&gt; only &quot;switch
&gt; &gt; =&gt; ifs&quot; problem?
&gt; &gt; I realy dont know, wher the problem is now (OpenMPI, ROMIO,
&gt; OrangeFS).
&gt; &gt;
&gt; &gt; Thanks
&gt; &gt; Hanousek V&#195;&#173;t
&gt; &gt;
&gt; &gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
&gt; &gt; Od: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; &gt; Komu: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; &gt; Datum: 26. 2. 2014 19:16:36
&gt; &gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS
&gt; &gt;
&gt; &gt;
&gt; &gt; Edgar hasn't had a chance to find the necessary patch - he was on
&gt; &gt; travel, returning soon.
&gt; &gt;
&gt; &gt;
&gt; &gt; On Feb 26, 2014, at 9:27 AM, vithanousek
&gt; &lt;vithanousek_at_[hidden]&gt; wrote:
&gt; &gt;
&gt; &gt; &gt; Hello,
&gt; &gt; &gt;
&gt; &gt; &gt; I have still problems with compiling OpenMPI 1.6.5 with OrangeFS
&gt; &gt; 2.8.7 support.
&gt; &gt; &gt;
&gt; &gt; &gt; I compiled OrangeFS by this:
&gt; &gt; &gt;
&gt; &gt; &gt; ./configure --prefix=/usr/local/orangefs2
&gt; &gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
&gt; &gt; --with-openib=/usr --without-bmi-tcp
&gt; &gt; &gt; make -j 32
&gt; &gt; &gt; make -j 32 kmod
&gt; &gt; &gt; make install
&gt; &gt; &gt; make kmod_install
&gt; &gt; &gt;
&gt; &gt; &gt; this works.
&gt; &gt; &gt; than I tried to compile OpenMPI (with fixed convert_named
&gt; function
&gt; &gt; in ad_pvfs2_io_dtype.c) by this:
&gt; &gt; &gt;
&gt; &gt; &gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2
&gt; &gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
&gt; &gt; &gt; (...)
&gt; &gt; &gt; make -j32
&gt; &gt; &gt; (...)
&gt; &gt; &gt; CCLD mca_io_romio.la
&gt; &gt; &gt; /usr/bin/ld:
&gt; /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o):
&gt; &gt; relocation R_X86_64_32S against `PINT_errno_mapping' can not
&gt; be used
&gt; &gt; when making a shared object; recompile with -fPIC
&gt; &gt; &gt; /usr/local/orangefs2/lib/libpvfs2.a: could not read symbols:
&gt; Bad value
&gt; &gt; &gt; collect2: ld returned 1 exit status
&gt; &gt; &gt; make[3]: *** [mca_io_romio.la] Error 1
&gt; &gt; &gt;
&gt; &gt; &gt; So I tried recompile OrangeFS by this:
&gt; &gt; &gt;
&gt; &gt; &gt; export CFLAGS=&quot;-fPIC&quot;
&gt; &gt; &gt; ./configure --prefix=/usr/local/orangefs2
&gt; &gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
&gt; &gt; --with-openib=/usr --without-bmi-tcp
&gt; &gt; &gt; make -j 32
&gt; &gt; &gt; make -j 32 kmod
&gt; &gt; &gt; make install
&gt; &gt; &gt; make kmod_install
&gt; &gt; &gt;
&gt; &gt; &gt; (there was errors with current-&gt;fsuid =&gt;
&gt; current-&gt;cred-&gt;fsuid, in
&gt; &gt; multiple files. I hardcoded this in files, bad idea I know )
&gt; &gt; &gt; Then compilation of OpenMPI works.
&gt; &gt; &gt;
&gt; &gt; &gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2
&gt; &gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
&gt; &gt; &gt; make -j32
&gt; &gt; &gt; make install
&gt; &gt; &gt;
&gt; &gt; &gt; but when i created simple program which is using MPIIO, it
&gt; failed
&gt; &gt; when i run it:
&gt; &gt; &gt;
&gt; &gt; &gt; mpirun -np 1 -host node18 mpiio
&gt; &gt; &gt; [node18:01696] mca: base: component_find: unable to open
&gt; &gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio:
&gt; &gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so:
&gt; &gt; undefined symbol: ADIOI_PVFS2_IReadContig (ignored)
&gt; &gt; &gt;
&gt; &gt; &gt; Because I got message form OrangeFS mailing list about -fPIC
&gt; &gt; errors, i tryed to recompile OrangeFS withou this flag and compile
&gt; &gt; OpenMPI (static linked) by this:
&gt; &gt; &gt;
&gt; &gt; &gt; ./congure --prefix=/usr/local/openmpi_1.6.5_romio2
&gt; &gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
&gt; &gt; --enable-static --disable-shared
&gt; &gt; &gt; (...)
&gt; &gt; &gt; make -j 32
&gt; &gt; &gt; (...)
&gt; &gt; &gt; CCLD otfmerge-mpi
&gt; &gt; &gt;
&gt; &gt;
&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.
o):(.data+0x60):
&gt; &gt; undefined reference to `ADIOI_PVFS2_IReadContig'
&gt; &gt; &gt;
&gt; &gt;
&gt; /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.
o):(.data+0x68):
&gt; &gt; undefined reference to `ADIOI_PVFS2_IWriteContig'
&gt; &gt; &gt; collect2: ld returned 1 exit status
&gt; &gt; &gt; make[10]: *** [otfmerge-mpi] Error 1
&gt; &gt; &gt; (...)
&gt; &gt; &gt;
&gt; &gt; &gt; Now I realy dont know, what is wrong.
&gt; &gt; &gt; Is there Anybody ho has OpenMPI working with OrangeFS?
&gt; &gt; &gt;
&gt; &gt; &gt; Thanks for replies
&gt; &gt; &gt; HanousekV&#195;&#173;t
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; 
&gt; -- 
&gt; Edgar Gabriel
&gt; Associate Professor
&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
&gt; Department of Computer Science University of Houston
&gt; Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
&gt; Tel: +1 (713) 743-3857 Fax: +1 (713)
&gt; 743-3335_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&quot;--=_59c6ef7f325014be233fa2ad&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_Content-Type: text/html;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;charset=utf-8
<br>
Content-Transfer-Encoding: quoted-printable
<br>
<p>&lt;html&gt;&lt;body&gt;At first Thank you very much for your time.&lt;br&gt;&lt;br&gt;&quot;--with-file-system=pvfs2+ufs+nfs&quot; didnt help.&lt;br&gt;&lt;br&gt;But if find (by google) some part of orangefs test. I dont know what is this exactly doing, but when I edited source code of OpenMPI like doing this line, all seems that it is working now. (changing ADIOI_PVFS2_IReadContig and ADIOI_PVFS2_IWriteContig to NULL in file ad_pvfs2.c)&lt;br&gt;&lt;br&gt;<a href="http://www.orangefs.org/trac/orangefs/browser/branches/OFSTest-dev/OFSTest/OFSTestNode.py?rev=10645#L1328<br">http://www.orangefs.org/trac/orangefs/browser/branches/OFSTest-dev/OFSTest/OFSTestNode.py?rev=10645#L1328<br</a>&gt;&lt;br&gt;Other tests I will do tomorrow.&lt;br&gt;&lt;br&gt;Thanks&lt;br&gt;Hanousek V&#195;&#173;t &lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;p&gt;---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------&lt;br&gt;Od: Edgar Gabriel &amp;lt;gabriel_at_[hidden]&amp;gt;&lt;br&gt;Komu: users_at_[hidden]&lt;br&gt;Datum: 26. 2. 2014 21:08:07&lt;br&gt;P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS&lt;/p&gt;&lt;br&gt;&lt;blockquote&gt;not sure whether its the problem or not, but usually have an additional&lt;br&gt;flag set :&lt;br&gt;&lt;br&gt; --with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs&lt;br&gt;--with-pvfs2=/opt/pvfs-2.8.2&quot;&lt;br&gt;&lt;br&gt;compilation is a bit slow for me today...&lt;br&gt;&lt;br&gt;Edgar&lt;br&gt;&lt;br&gt;&lt;br&gt;On 2/26/2014 2:05 PM, vithanousek wrote:&lt;br&gt;&amp;gt; Now I compiled by doing this:&lt;br&gt;&amp;gt; OrangeFS (original, withou editing):&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; ./configure --prefix=/usr/local/orangefs&lt;br&gt;&amp;gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64&lt;br&gt;&amp;gt; --with-openib=/usr --without-bmi-tcp --enable-shared&lt;br&gt;&amp;gt; make&lt;br&gt;&amp;gt; make kmod&lt;br&gt;&amp;gt; make install&lt;br&gt;&amp;gt; make kmod_install&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; Without error.&lt;br&gt;&amp;gt; OpenMPI (with edited switch to ifs):&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio&lt;br&gt;&amp;gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs'&lt;br&gt;&amp;gt; make&lt;br&gt;&amp;gt; make install&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; Without error.&lt;br&gt;&amp;gt; parallel FS mount work. But I still cant use MPIIO.&lt;br&gt;&amp;gt; I compiled simple MPIIO program and run it by this:&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; mpicc -o mpiio mpiio.c&lt;br&gt;&amp;gt; mpirun -np 1 -host node18 mpiio&lt;br&gt;&amp;gt; [node18:02334] mca: base: component_find: unable to open&lt;br&gt;&amp;gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio:&lt;br&gt;&amp;gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so: undefined&lt;br&gt;&amp;gt; symbol: ADIOI_PVFS2_IReadContig (ignored)&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; And no file is created.&lt;br&gt;&amp;gt; I tried compile it with:&lt;br&gt;&amp;gt; mpicc -o mpiio mpiio.c -lpvfs2 -L/usr/local/orangefs/lib&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; but i got the same results, have You any idea?&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; Thank for reply&lt;br&gt;&amp;gt; Hanousek V&#195;&#173;t&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------&lt;br&gt;&amp;gt; Od: vithanousek &amp;lt;vithanousek_at_[hidden]&amp;gt;&lt;br&gt;&amp;gt; Komu: Open MPI Users &amp;lt;users_at_[hidden]&amp;gt;&lt;br&gt;&amp;gt; Datum: 26. 2. 2014 20:30:17&lt;br&gt;&amp;gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;     Thanks for your Time,&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;     I'm little bit confused, what is diferent between pvfs2 and&lt;br&gt;&amp;gt;     orangefs. I was thinking, that only project changes name.&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;     I get hint from OrangeFS maillist, to compile OrangeFs with&lt;br&gt;&amp;gt;     --enable-shared. This produce a some shared library (.so) in&lt;br&gt;&amp;gt;     /usr/local/orangefs/lib and I can compile OpenMPI 1.6.5 now (with&lt;br&gt;&amp;gt;     fixed &quot;switch =&amp;gt;ifs&quot; in ROMIO).&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;     I will test if it is working in next hour (some configuration steps&lt;br&gt;&amp;gt;     is needed).&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;     Thanks.&lt;br&gt;&amp;gt;     Hanousek V&#195;&#173;t&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;     ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------&lt;br&gt;&amp;gt;     Od: Edgar Gabriel &amp;lt;gabriel_at_[hidden]&amp;gt;&lt;br&gt;&amp;gt;     Komu: Open MPI Users &amp;lt;users_at_[hidden]&amp;gt;&lt;br&gt;&amp;gt;     Datum: 26. 2. 2014 20:18:03&lt;br&gt;&amp;gt;     P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;         so we had ROMIO working with PVFS2 (not OrangeFS, which is however&lt;br&gt;&amp;gt;         registered as PVFS2 internally). We have one cluster which uses&lt;br&gt;&amp;gt;         OrangeFS, on that machine however we used OMPIO, not ROMIO. I am&lt;br&gt;&amp;gt;         currently compiling the 1.6 version of Open MPI to see whether I can&lt;br&gt;&amp;gt;         reproduce your problem.&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;         Thanks&lt;br&gt;&amp;gt;         Edgar&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;         On 2/26/2014 12:23 PM, vithanousek wrote:&lt;br&gt;&amp;gt;         &amp;gt; Thanks for reply,&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; Is it possible that the patch solvs all this problems, not&lt;br&gt;&amp;gt;         only &quot;switch&lt;br&gt;&amp;gt;         &amp;gt; =&amp;gt; ifs&quot; problem?&lt;br&gt;&amp;gt;         &amp;gt; I realy dont know, wher the problem is now (OpenMPI, ROMIO,&lt;br&gt;&amp;gt;         OrangeFS).&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; Thanks&lt;br&gt;&amp;gt;         &amp;gt; Hanousek V&#195;&#173;t&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------&lt;br&gt;&amp;gt;         &amp;gt; Od: Ralph Castain &amp;lt;rhc_at_[hidden]&amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; Komu: Open MPI Users &amp;lt;users_at_[hidden]&amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; Datum: 26. 2. 2014 19:16:36&lt;br&gt;&amp;gt;         &amp;gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; Edgar hasn't had a chance to find the necessary patch - he was on&lt;br&gt;&amp;gt;         &amp;gt; travel, returning soon.&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; On Feb 26, 2014, at 9:27 AM, vithanousek&lt;br&gt;&amp;gt;         &amp;lt;vithanousek_at_[hidden]&amp;gt; wrote:&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; Hello,&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; I have still problems with compiling OpenMPI 1.6.5 with OrangeFS&lt;br&gt;&amp;gt;         &amp;gt; 2.8.7 support.&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; I compiled OrangeFS by this:&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; ./configure --prefix=/usr/local/orangefs2&lt;br&gt;&amp;gt;         &amp;gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64&lt;br&gt;&amp;gt;         &amp;gt; --with-openib=/usr --without-bmi-tcp&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make -j 32&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make -j 32 kmod&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make install&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make kmod_install&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; this works.&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; than I tried to compile OpenMPI (with fixed convert_named&lt;br&gt;&amp;gt;         function&lt;br&gt;&amp;gt;         &amp;gt; in ad_pvfs2_io_dtype.c) by this:&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2&lt;br&gt;&amp;gt;         &amp;gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; (...)&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make -j32&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; (...)&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; CCLD mca_io_romio.la&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; /usr/bin/ld:&lt;br&gt;&amp;gt;         /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o):&lt;br&gt;&amp;gt;         &amp;gt; relocation R_X86_64_32S against `PINT_errno_mapping' can not&lt;br&gt;&amp;gt;         be used&lt;br&gt;&amp;gt;         &amp;gt; when making a shared object; recompile with -fPIC&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; /usr/local/orangefs2/lib/libpvfs2.a: could not read symbols:&lt;br&gt;&amp;gt;         Bad value&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; collect2: ld returned 1 exit status&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make[3]: *** [mca_io_romio.la] Error 1&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; So I tried recompile OrangeFS by this:&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; export CFLAGS=&quot;-fPIC&quot;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; ./configure --prefix=/usr/local/orangefs2&lt;br&gt;&amp;gt;         &amp;gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64&lt;br&gt;&amp;gt;         &amp;gt; --with-openib=/usr --without-bmi-tcp&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make -j 32&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make -j 32 kmod&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make install&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make kmod_install&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; (there was errors with current-&amp;gt;fsuid =&amp;gt;&lt;br&gt;&amp;gt;         current-&amp;gt;cred-&amp;gt;fsuid, in&lt;br&gt;&amp;gt;         &amp;gt; multiple files. I hardcoded this in files, bad idea I know )&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; Then compilation of OpenMPI works.&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2&lt;br&gt;&amp;gt;         &amp;gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make -j32&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make install&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; but when i created simple program which is using MPIIO, it&lt;br&gt;&amp;gt;         failed&lt;br&gt;&amp;gt;         &amp;gt; when i run it:&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; mpirun -np 1 -host node18 mpiio&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; [node18:01696] mca: base: component_find: unable to open&lt;br&gt;&amp;gt;         &amp;gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio:&lt;br&gt;&amp;gt;         &amp;gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so:&lt;br&gt;&amp;gt;         &amp;gt; undefined symbol: ADIOI_PVFS2_IReadContig (ignored)&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; Because I got message form OrangeFS mailing list about -fPIC&lt;br&gt;&amp;gt;         &amp;gt; errors, i tryed to recompile OrangeFS withou this flag and compile&lt;br&gt;&amp;gt;         &amp;gt; OpenMPI (static linked) by this:&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; ./congure --prefix=/usr/local/openmpi_1.6.5_romio2&lt;br&gt;&amp;gt;         &amp;gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'&lt;br&gt;&amp;gt;         &amp;gt; --enable-static --disable-shared&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; (...)&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make -j 32&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; (...)&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; CCLD otfmerge-mpi&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x60):&lt;br&gt;&amp;gt;         &amp;gt; undefined reference to `ADIOI_PVFS2_IReadContig'&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x68):&lt;br&gt;&amp;gt;         &amp;gt; undefined reference to `ADIOI_PVFS2_IWriteContig'&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; collect2: ld returned 1 exit status&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; make[10]: *** [otfmerge-mpi] Error 1&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; (...)&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; Now I realy dont know, what is wrong.&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; Is there Anybody ho has OpenMPI working with OrangeFS?&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; Thanks for replies&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; HanousekV&#195;&#173;t&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; _______________________________________________&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; users mailing list&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; users_at_[hidden]&lt;br&gt;&amp;gt;         &amp;gt; &amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; _______________________________________________&lt;br&gt;&amp;gt;         &amp;gt; users mailing list&lt;br&gt;&amp;gt;         &amp;gt; users_at_[hidden]&lt;br&gt;&amp;gt;         &amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt;         &amp;gt; _______________________________________________&lt;br&gt;&amp;gt;         &amp;gt; users mailing list&lt;br&gt;&amp;gt;         &amp;gt; users_at_[hidden]&lt;br&gt;&amp;gt;         &amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt;         &amp;gt;&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt;         -- &lt;br&gt;&amp;gt;         Edgar Gabriel&lt;br&gt;&amp;gt;         Associate Professor&lt;br&gt;&amp;gt;         Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu<br">http://pstl.cs.uh.edu<br</a>&gt;&amp;gt;         Department of Computer Science University of Houston&lt;br&gt;&amp;gt;         Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA&lt;br&gt;&amp;gt;         Tel: +1 (713) 743-3857 Fax: +1 (713)&lt;br&gt;&amp;gt;         743-3335_______________________________________________&lt;br&gt;&amp;gt;         users mailing list&lt;br&gt;&amp;gt;         users_at_[hidden]&lt;br&gt;&amp;gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt; &lt;br&gt;&amp;gt;     _______________________________________________&lt;br&gt;&amp;gt;     users mailing list&lt;br&gt;&amp;gt;     users_at_[hidden]&lt;br&gt;&amp;gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; _______________________________________________&lt;br&gt;&amp;gt; users mailing list&lt;br&gt;&amp;gt; users_at_[hidden]&lt;br&gt;&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt; &lt;br&gt;&lt;br&gt;-- &lt;br&gt;Edgar Gabriel&lt;br&gt;Associate Professor&lt;br&gt;Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu<br">http://pstl.cs.uh.edu<br</a>&gt;Department of Computer Science          University of Houston&lt;br&gt;Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA&lt;br&gt;Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335_______________________________________________&lt;br&gt;users mailing list&lt;br&gt;users_at_[hidden]&lt;br&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users</blockquote">http://www.open-mpi.org/mailman/listinfo.cgi/users</blockquote</a>&gt;&lt;/body&gt;&lt;/html&gt;--=_59c6ef7f325014be233fa2ad&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_=--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23672.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23670.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>In reply to:</strong> <a href="23667.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23672.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23672.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
