<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 20:36:45 2013" -->
<!-- isoreceived="20131031003645" -->
<!-- sent="Wed, 30 Oct 2013 17:36:44 -0700" -->
<!-- isosent="20131031003644" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="20131031003644.GA5952_at_stikine.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEGKUyx-izwfMTgWxkbLD7ZXHeR3R5LVmwZjxjwMwv+0OwPTXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 20:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22881.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22879.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22879.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22881.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim,
<br>
<p>I have quite a bit experience with compiling openmpi for dirac.
<br>
Here is what I use to configure openmpi:
<br>
<p>./configure --prefix=$instdir \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-silent-rules \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=$torquedir \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-ldflags=&quot;-Wl,-rpath,${instdir}/lib&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc=$hwlocdir \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=gcc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX=g++ \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=&quot;$FC&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F77=&quot;$FC&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-O3&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS=&quot;-O3&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS=&quot;-O3 $I8FLAG&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=&quot;-O3 $I8FLAG&quot;
<br>
<p>You need to set FC to either ifort or gfortran (those are the two compilers
<br>
that I have used) and set I8FLAG to -fdefault-integer-8 for gfortran or
<br>
-i8 for ifort.
<br>
Set torquedir to the directory where torque is installed ($torquedir/lib
<br>
must contain libtorque.so), if you are running jobs under torque; otherwise
<br>
remove the --with-tm=... line.
<br>
Set hwlocdir to the directory where you have hwloc installed. You many not
<br>
need the -with-hwloc=... option because openmpi comes with a hwloc version
<br>
(I don't have experience with that because we install hwloc independently).
<br>
Set instdir to the directory where you what to install openmpi.
<br>
You may or may not need the --with-openib option depending on whether
<br>
you have an Infiniband interconnect.
<br>
<p>After configure/make/make install this so compiled version can be used
<br>
with dirac without changing the dirac source code.
<br>
(there is one caveat: you should make sure that all &quot;count&quot; variables
<br>
in MPI calls in dirac are smaller than 2^31-1. I have run into a few cases
<br>
when that is not the case; this problem can be overcome by replacing
<br>
MPI_Allreduce calls in dirac with a wrapper that calls MPI_Allreduce
<br>
repeatedly). This is what I use to setup dirac:
<br>
<p>export PATH=$instdir/bin
<br>
./setup --prefix=$diracinstdir \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--fc=mpif90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--cc=mpicc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--int64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--explicit-libs=&quot;-lmkl_intel_ilp64 -lmkl_sequential -lmkl_core&quot;
<br>
<p>where $instdir is the directory where you installed openmpi from above.
<br>
<p>I would never use the so-compiled openmpi version for anything other
<br>
than dirac though. I am not saying that it cannot work (at a minimum
<br>
you need to compile Fortran programs with the appropriate I8FLAG),
<br>
but it is an unnecessary complication: I have not encountered a piece
<br>
of software other than dirac that requires this.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid/ComputeCanada Site Lead
Simon Fraser University
Burnaby, British Columbia
Canada
On Wed, Oct 30, 2013 at 06:00:56PM -0500, Jim Parker wrote:
&gt; 
&gt;    Jeff,
&gt;      Here's what I know:
&gt;    1.  Checked FAQs.  Done
&gt;    2.  Version 1.6.5
&gt;    3. config.log file has been removed by the sysadmin...
&gt;    4. ompi_info -a from head node is in attached as headnode.out
&gt;    5. N/A
&gt;    6. compute node info in attached as compute-x-yy.out
&gt;    7. As discussed, local variables are being overwritten after calls to
&gt;    MPI_RECV from Fortran code
&gt;    8. ifconfig output from head node and computes listed as *-ifconfig.out
&gt;    Cheers,
&gt;    --Jim
&gt; 
&gt;    On Wed, Oct 30, 2013 at 5:29 PM, Jeff Squyres (jsquyres)
&gt;    &lt;[1]jsquyres_at_[hidden]&gt; wrote:
&gt; 
&gt;      Can you send the information listed here:
&gt;          [2]<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt; 
&gt;    On Oct 30, 2013, at 6:22 PM, Jim Parker &lt;[3]jimparker96313_at_[hidden]&gt;
&gt;    wrote:
&gt;    &gt; Jeff and Ralph,
&gt;    &gt;   Ok, I downshifted to a helloWorld example (attached), bottom line
&gt;    after I hit the MPI_Recv call, my local variable (rank) gets borked.
&gt;    &gt;
&gt;    &gt; I have compiled with -m64 -fdefault-integer-8 and even have assigned
&gt;    kind=8 to the integers (which would be the preferred method in my case)
&gt;    &gt;
&gt;    &gt; Your help is appreciated.
&gt;    &gt;
&gt;    &gt; Cheers,
&gt;    &gt; --Jim
&gt;    &gt;
&gt;    &gt;
&gt;    &gt;
&gt;    &gt; On Wed, Oct 30, 2013 at 4:49 PM, Jeff Squyres (jsquyres)
&gt;    &lt;[4]jsquyres_at_[hidden]&gt; wrote:
&gt;    &gt; On Oct 30, 2013, at 4:35 PM, Jim Parker &lt;[5]jimparker96313_at_[hidden]&gt;
&gt;    wrote:
&gt;    &gt;
&gt;    &gt; &gt;   I have recently built a cluster that uses the 64-bit indexing
&gt;    feature of OpenMPI following the directions at
&gt;    &gt; &gt;
&gt;    [6]<a href="http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_fo">http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_fo</a>
&gt;    r_64-bit_integers
&gt;    &gt;
&gt;    &gt; That should be correct (i.e., passing -i8 in FFLAGS and FCFLAGS for
&gt;    OMPI 1.6.x).
&gt;    &gt;
&gt;    &gt; &gt; My question is what are the new prototypes for the MPI calls ?
&gt;    &gt; &gt; specifically
&gt;    &gt; &gt; MPI_RECV
&gt;    &gt; &gt; MPI_Allgathterv
&gt;    &gt;
&gt;    &gt; They're the same as they've always been.
&gt;    &gt;
&gt;    &gt; The magic is that the -i8 flag tells the compiler &quot;make all Fortran
&gt;    INTEGERs be 8 bytes, not (the default) 4.&quot;  So Ralph's answer was
&gt;    correct in that all the MPI parameters are INTEGERs -- but you can tell
&gt;    the compiler that all INTEGERs are 8 bytes, not 4, and therefore get
&gt;    &quot;large&quot; integers.
&gt;    &gt;
&gt;    &gt; Note that this means that you need to compile your application with
&gt;    -i8, too.  That will make *your* INTEGERs also be 8 bytes, and then
&gt;    you'll match what Open MPI is doing.
&gt;    &gt;
&gt;    &gt; &gt; I'm curious because some off my local variables get killed (set to
&gt;    null) upon my first call to MPI_RECV.  Typically, this is due (in
&gt;    Fortran) to someone not setting the 'status' variable to an appropriate
&gt;    array size.
&gt;    &gt;
&gt;    &gt; If you didn't compile your application with -i8, this could well be
&gt;    because your application is treating INTEGERs as 4 bytes, but OMPI is
&gt;    treating INTEGERs as 8 bytes.  Nothing good can come from that.
&gt;    &gt;
&gt;    &gt; If you *did* compile your application with -i8 and you're seeing this
&gt;    kind of wonkyness, we should dig deeper and see what's going on.
&gt;    &gt;
&gt;    &gt; &gt; My review of mpif.h and mpi.h seem to indicate that the functions
&gt;    are defined as C int types and therefore , I assume, the coercion
&gt;    during the compile makes the library support 64-bit indexing.  ie. int
&gt;    -&gt; long int
&gt;    &gt;
&gt;    &gt; FWIW: We actually define a type MPI_Fint; its actual type is
&gt;    determined by configure (int or long int, IIRC).  When your Fortran
&gt;    code calls C, we use the MPI_Fint type for parameters, and so it will
&gt;    be either a 4 or 8 byte integer type.
&gt;    &gt;
&gt;    &gt; --
&gt;    &gt; Jeff Squyres
&gt;    &gt; [7]jsquyres_at_[hidden]
&gt;    &gt; For corporate legal information go to:
&gt;    [8]<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;    &gt;
&gt;    &gt; _______________________________________________
&gt;    &gt; users mailing list
&gt;    &gt; [9]users_at_[hidden]
&gt;    &gt; [10]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;    &gt;
&gt; 
&gt;      &gt;
&gt;      &lt;mpi-test-64bit.tar.bz2&gt;____________________________________________
&gt;      ___
&gt; 
&gt;    &gt; users mailing list
&gt;    &gt; [11]users_at_[hidden]
&gt;    &gt; [12]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;    --
&gt;    Jeff Squyres
&gt;    [13]jsquyres_at_[hidden]
&gt;    For corporate legal information go to:
&gt;    [14]<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;    _______________________________________________
&gt;    users mailing list
&gt;    [15]users_at_[hidden]
&gt;    [16]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; References
&gt; 
&gt;    1. mailto:jsquyres_at_[hidden]
&gt;    2. <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt;    3. mailto:jimparker96313_at_[hidden]
&gt;    4. mailto:jsquyres_at_[hidden]
&gt;    5. mailto:jimparker96313_at_[hidden]
&gt;    6. <a href="http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers">http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers</a>
&gt;    7. mailto:jsquyres_at_[hidden]
&gt;    8. <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;    9. mailto:users_at_[hidden]
&gt;   10. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;   11. mailto:users_at_[hidden]
&gt;   12. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;   13. mailto:jsquyres_at_[hidden]
&gt;   14. <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;   15. mailto:users_at_[hidden]
&gt;   16. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22881.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22879.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22879.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22881.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
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
