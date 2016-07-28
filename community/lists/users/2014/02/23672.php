<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 16:27:15 2014" -->
<!-- isoreceived="20140226212715" -->
<!-- sent="Wed, 26 Feb 2014 15:27:05 -0600" -->
<!-- isosent="20140226212705" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="530E5C29.6020008_at_cs.uh.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="83O.F2Pq.7zDxDTGCCRn.1J3bdO_at_seznam.cz" -->
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
<strong>Date:</strong> 2014-02-26 16:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23673.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Previous message:</strong> <a href="23671.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23671.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23674.php">Latham, Robert J.: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23674.php">Latham, Robert J.: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok, then this must be a difference between OrangeFS and PVFs2.  It turns
<br>
out that trunk and 1.7 does actually have the patch, but 1.6 series does
<br>
not have it. The actual commit was done in
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/24768">https://svn.open-mpi.org/trac/ompi/changeset/24768</a>
<br>
<p>and based on the line numbers, I think it should apply cleanly.
<br>
Using that patch, 1.6 compiles and executes without complaining about
<br>
PVFS2 support, but running my testsuite brings up a ton of data errors.
<br>
<p>I am still digging a bit into that, but that's where I am right now.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><p><p>On 2/26/2014 3:17 PM, vithanousek wrote:
<br>
<span class="quotelev1">&gt; At first Thank you very much for your time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;--with-file-system=pvfs2+ufs+nfs&quot; didnt help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if find (by google) some part of orangefs test. I dont know what is
</span><br>
<span class="quotelev1">&gt; this exactly doing, but when I edited source code of OpenMPI like doing
</span><br>
<span class="quotelev1">&gt; this line, all seems that it is working now. (changing
</span><br>
<span class="quotelev1">&gt; ADIOI_PVFS2_IReadContig and ADIOI_PVFS2_IWriteContig to NULL in file
</span><br>
<span class="quotelev1">&gt; ad_pvfs2.c)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.orangefs.org/trac/orangefs/browser/branches/OFSTest-dev/OFSTest/OFSTestNode.py?rev=10645#L1328">http://www.orangefs.org/trac/orangefs/browser/branches/OFSTest-dev/OFSTest/OFSTestNode.py?rev=10645#L1328</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other tests I will do tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Hanousek V&#195;&#173;t
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
</span><br>
<span class="quotelev1">&gt; Od: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Komu: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Datum: 26. 2. 2014 21:08:07
</span><br>
<span class="quotelev1">&gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     not sure whether its the problem or not, but usually have an additional
</span><br>
<span class="quotelev1">&gt;     flag set :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs
</span><br>
<span class="quotelev1">&gt;     --with-pvfs2=/opt/pvfs-2.8.2&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     compilation is a bit slow for me today...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On 2/26/2014 2:05 PM, vithanousek wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Now I compiled by doing this:
</span><br>
<span class="quotelev2">&gt;     &gt; OrangeFS (original, withou editing):
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ./configure --prefix=/usr/local/orangefs
</span><br>
<span class="quotelev2">&gt;     &gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
</span><br>
<span class="quotelev2">&gt;     &gt; --with-openib=/usr --without-bmi-tcp --enable-shared
</span><br>
<span class="quotelev2">&gt;     &gt; make
</span><br>
<span class="quotelev2">&gt;     &gt; make kmod
</span><br>
<span class="quotelev2">&gt;     &gt; make install
</span><br>
<span class="quotelev2">&gt;     &gt; make kmod_install
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Without error.
</span><br>
<span class="quotelev2">&gt;     &gt; OpenMPI (with edited switch to ifs):
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio
</span><br>
<span class="quotelev2">&gt;     &gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs'
</span><br>
<span class="quotelev2">&gt;     &gt; make
</span><br>
<span class="quotelev2">&gt;     &gt; make install
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Without error.
</span><br>
<span class="quotelev2">&gt;     &gt; parallel FS mount work. But I still cant use MPIIO.
</span><br>
<span class="quotelev2">&gt;     &gt; I compiled simple MPIIO program and run it by this:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; mpicc -o mpiio mpiio.c
</span><br>
<span class="quotelev2">&gt;     &gt; mpirun -np 1 -host node18 mpiio
</span><br>
<span class="quotelev2">&gt;     &gt; [node18:02334] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;     &gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio:
</span><br>
<span class="quotelev2">&gt;     &gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so: undefined
</span><br>
<span class="quotelev2">&gt;     &gt; symbol: ADIOI_PVFS2_IReadContig (ignored)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; And no file is created.
</span><br>
<span class="quotelev2">&gt;     &gt; I tried compile it with:
</span><br>
<span class="quotelev2">&gt;     &gt; mpicc -o mpiio mpiio.c -lpvfs2 -L/usr/local/orangefs/lib
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; but i got the same results, have You any idea?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thank for reply
</span><br>
<span class="quotelev2">&gt;     &gt; Hanousek V&#195;&#173;t
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
</span><br>
<span class="quotelev2">&gt;     &gt; Od: vithanousek &lt;vithanousek_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Komu: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Datum: 26. 2. 2014 20:30:17
</span><br>
<span class="quotelev2">&gt;     &gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks for your Time,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I'm little bit confused, what is diferent between pvfs2 and
</span><br>
<span class="quotelev2">&gt;     &gt; orangefs. I was thinking, that only project changes name.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I get hint from OrangeFS maillist, to compile OrangeFs with
</span><br>
<span class="quotelev2">&gt;     &gt; --enable-shared. This produce a some shared library (.so) in
</span><br>
<span class="quotelev2">&gt;     &gt; /usr/local/orangefs/lib and I can compile OpenMPI 1.6.5 now (with
</span><br>
<span class="quotelev2">&gt;     &gt; fixed &quot;switch =&gt;ifs&quot; in ROMIO).
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I will test if it is working in next hour (some configuration steps
</span><br>
<span class="quotelev2">&gt;     &gt; is needed).
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks.
</span><br>
<span class="quotelev2">&gt;     &gt; Hanousek V&#195;&#173;t
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
</span><br>
<span class="quotelev2">&gt;     &gt; Od: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Komu: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Datum: 26. 2. 2014 20:18:03
</span><br>
<span class="quotelev2">&gt;     &gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; so we had ROMIO working with PVFS2 (not OrangeFS, which is however
</span><br>
<span class="quotelev2">&gt;     &gt; registered as PVFS2 internally). We have one cluster which uses
</span><br>
<span class="quotelev2">&gt;     &gt; OrangeFS, on that machine however we used OMPIO, not ROMIO. I am
</span><br>
<span class="quotelev2">&gt;     &gt; currently compiling the 1.6 version of Open MPI to see whether I can
</span><br>
<span class="quotelev2">&gt;     &gt; reproduce your problem.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks
</span><br>
<span class="quotelev2">&gt;     &gt; Edgar
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On 2/26/2014 12:23 PM, vithanousek wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Thanks for reply,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Is it possible that the patch solvs all this problems, not
</span><br>
<span class="quotelev2">&gt;     &gt; only &quot;switch
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; =&gt; ifs&quot; problem?
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; I realy dont know, wher the problem is now (OpenMPI, ROMIO,
</span><br>
<span class="quotelev2">&gt;     &gt; OrangeFS).
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Hanousek V&#195;&#173;t
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Od: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Komu: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Datum: 26. 2. 2014 19:16:36
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OpenMPI-ROMIO-OrangeFS
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Edgar hasn't had a chance to find the necessary patch - he was on
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; travel, returning soon.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; On Feb 26, 2014, at 9:27 AM, vithanousek
</span><br>
<span class="quotelev2">&gt;     &gt; &lt;vithanousek_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; I have still problems with compiling OpenMPI 1.6.5 with OrangeFS
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; 2.8.7 support.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; I compiled OrangeFS by this:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; ./configure --prefix=/usr/local/orangefs2
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --with-openib=/usr --without-bmi-tcp
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make -j 32
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make -j 32 kmod
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make install
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make kmod_install
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; this works.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; than I tried to compile OpenMPI (with fixed convert_named
</span><br>
<span class="quotelev2">&gt;     &gt; function
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; in ad_pvfs2_io_dtype.c) by this:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; (...)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make -j32
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; (...)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; CCLD mca_io_romio.la
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; /usr/bin/ld:
</span><br>
<span class="quotelev2">&gt;     &gt; /usr/local/orangefs2/lib/libpvfs2.a(errno-mapping.o):
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; relocation R_X86_64_32S against `PINT_errno_mapping' can not
</span><br>
<span class="quotelev2">&gt;     &gt; be used
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; /usr/local/orangefs2/lib/libpvfs2.a: could not read symbols:
</span><br>
<span class="quotelev2">&gt;     &gt; Bad value
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make[3]: *** [mca_io_romio.la] Error 1
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; So I tried recompile OrangeFS by this:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; export CFLAGS=&quot;-fPIC&quot;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; ./configure --prefix=/usr/local/orangefs2
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --with-kernel=/usr/src/kernels/2.6.32-431.5.1.el6.x86_64
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --with-openib=/usr --without-bmi-tcp
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make -j 32
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make -j 32 kmod
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make install
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make kmod_install
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; (there was errors with current-&gt;fsuid =&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; current-&gt;cred-&gt;fsuid, in
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; multiple files. I hardcoded this in files, bad idea I know )
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Then compilation of OpenMPI works.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio2
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make -j32
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make install
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; but when i created simple program which is using MPIIO, it
</span><br>
<span class="quotelev2">&gt;     &gt; failed
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; when i run it:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; mpirun -np 1 -host node18 mpiio
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; [node18:01696] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; /usr/local/openmpi_1.6.5_romio/lib/openmpi/mca_io_romio.so:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; undefined symbol: ADIOI_PVFS2_IReadContig (ignored)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Because I got message form OrangeFS mailing list about -fPIC
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; errors, i tryed to recompile OrangeFS withou this flag and compile
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; OpenMPI (static linked) by this:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; ./congure --prefix=/usr/local/openmpi_1.6.5_romio2
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs2'
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --enable-static --disable-shared
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; (...)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make -j 32
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; (...)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; CCLD otfmerge-mpi
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x60):
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; undefined reference to `ADIOI_PVFS2_IReadContig'
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     /root/openmpi-1.6.5/ompi/contrib/vt/vt/../../../.libs/libmpi.a(ad_pvfs2.o):(.data+0x68):
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; undefined reference to `ADIOI_PVFS2_IWriteContig'
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; (...)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Now I realy dont know, what is wrong.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Is there Anybody ho has OpenMPI working with OrangeFS?
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Thanks for replies
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; HanousekV&#195;&#173;t
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --
</span><br>
<span class="quotelev2">&gt;     &gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;     &gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;     &gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Department of Computer Science University of Houston
</span><br>
<span class="quotelev2">&gt;     &gt; Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;     &gt; Tel: +1 (713) 743-3857 Fax: +1 (713)
</span><br>
<span class="quotelev2">&gt;     &gt; 743-3335_______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;     Associate Professor
</span><br>
<span class="quotelev1">&gt;     Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;     Department of Computer Science University of Houston
</span><br>
<span class="quotelev1">&gt;     Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt;     Tel: +1 (713) 743-3857 Fax: +1 (713)
</span><br>
<span class="quotelev1">&gt;     743-3335_______________________________________________
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23672/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23673.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Previous message:</strong> <a href="23671.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23671.php">vithanousek: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23674.php">Latham, Robert J.: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="23674.php">Latham, Robert J.: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
