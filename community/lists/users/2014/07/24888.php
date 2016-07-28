<?
$subject_val = "Re: [OMPI users] mpifort wrapper.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 12:17:03 2014" -->
<!-- isoreceived="20140729161703" -->
<!-- sent="Tue, 29 Jul 2014 12:17:44 -0400" -->
<!-- isosent="20140729161744" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpifort wrapper.txt" -->
<!-- id="53D7C928.3010508_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47D0F845-43DE-4E5F-BAFC-6DFA2C2CE219_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpifort wrapper.txt<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 12:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24889.php">Chaitra Kumar: "[OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpifort wrapper.txt"</a>
<li><strong>In reply to:</strong> <a href="24887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpifort wrapper.txt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/29/2014 07:20 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Jul 27, 2014, at 3:39 PM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been looking at the openmpi doc page and would like some pointers on how to implement the wrapper.txt file with  mpifort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what you're asking here...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the wrapper .txt file how does mpifort use the wrapper.txt file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Presuming you had a Fortran compiler available when you configured/built Open MPI, Open MPI should have created an mpifort-wrapper-data.txt file for you and installed it under $pkgdatadir.  I.e., you shouldn't have to create anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did Open MPI not do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please send the output listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I create a script copy the fortran wrapper.txt commands in the file to a
</span><br>
<span class="quotelev2">&gt;&gt; mkmf?  Not reall sure on how to proceed.  Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; See info below
</span><br>
<span class="quotelev2">&gt;&gt; Dan Shell
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   make -f Make_lib_FMS
</span><br>
<span class="quotelev2">&gt;&gt; mpifort -Duse_netCDF -Duse_netCDF3 -Duse_libMPI -DUSE_OCEAN_BGC -DENABLE_ODA -DSPMD -DLAND_BND_TRACERS -I/usr/include -I/root/Desktop/NEW_MOM/openmpi/include -I/root/Desktop/NEW_MOM/newmom/netcdf -I/root/Desktop/NEW_MOM/newmom/netcdf/include   -fcray-pointer  -g  -fdefault-real-8 -O2 -Waliasing -ffree-line-length-none -fno-range-check  -c -I/root/Desktop/NEW_MOM/newmom/src/shared/include -I/root/Desktop/NEW_MOM/newmom/src/shared/mpp/include    /root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; No underlying compiler was specified in the wrapper compiler data file
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., mpicc-wrapper-data.txt)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The error message is complaining about mpicc, not mpifort.
<br>
I wonder if this may be due to a Makefile misconfiguration again.
<br>
My two cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24889.php">Chaitra Kumar: "[OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpifort wrapper.txt"</a>
<li><strong>In reply to:</strong> <a href="24887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpifort wrapper.txt"</a>
<!-- nextthread="start" -->
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
