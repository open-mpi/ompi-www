<?
$subject_val = "Re: [OMPI users] mpifort wrapper.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 07:20:45 2014" -->
<!-- isoreceived="20140729112045" -->
<!-- sent="Tue, 29 Jul 2014 11:20:44 +0000" -->
<!-- isosent="20140729112044" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpifort wrapper.txt" -->
<!-- id="47D0F845-43DE-4E5F-BAFC-6DFA2C2CE219_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHhAqLHGvCMO6PjZoV8Vh4Z=51ERwkyZ_eBiiDAu1TdR4+3ntg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 07:20:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24888.php">Gus Correa: "Re: [OMPI users] mpifort wrapper.txt"</a>
<li><strong>Previous message:</strong> <a href="24886.php">Rob Latham: "Re: [OMPI users] Using PLFS with Open MPI 1.8"</a>
<li><strong>In reply to:</strong> <a href="24884.php">Dan Shell: "[OMPI users] mpifort wrapper.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24888.php">Gus Correa: "Re: [OMPI users] mpifort wrapper.txt"</a>
<li><strong>Reply:</strong> <a href="24888.php">Gus Correa: "Re: [OMPI users] mpifort wrapper.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2014, at 3:39 PM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have been looking at the openmpi doc page and would like some pointers on how to implement the wrapper.txt file with  mpifort.
</span><br>
<p>I'm not sure what you're asking here...?
<br>
<p><span class="quotelev1">&gt; I have the wrapper .txt file how does mpifort use the wrapper.txt file.
</span><br>
<p>Presuming you had a Fortran compiler available when you configured/built Open MPI, Open MPI should have created an mpifort-wrapper-data.txt file for you and installed it under $pkgdatadir.  I.e., you shouldn't have to create anything.
<br>
<p>Did Open MPI not do this?
<br>
<p>Please send the output listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><span class="quotelev1">&gt; Do I create a script copy the fortran wrapper.txt commands in the file to a 
</span><br>
<span class="quotelev1">&gt; mkmf?  Not reall sure on how to proceed.  Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt; See info below
</span><br>
<span class="quotelev1">&gt; Dan Shell
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  make -f Make_lib_FMS
</span><br>
<span class="quotelev1">&gt; mpifort -Duse_netCDF -Duse_netCDF3 -Duse_libMPI -DUSE_OCEAN_BGC -DENABLE_ODA -DSPMD -DLAND_BND_TRACERS -I/usr/include -I/root/Desktop/NEW_MOM/openmpi/include -I/root/Desktop/NEW_MOM/newmom/netcdf -I/root/Desktop/NEW_MOM/newmom/netcdf/include   -fcray-pointer  -g  -fdefault-real-8 -O2 -Waliasing -ffree-line-length-none -fno-range-check  -c -I/root/Desktop/NEW_MOM/newmom/src/shared/include -I/root/Desktop/NEW_MOM/newmom/src/shared/mpp/include    /root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No underlying compiler was specified in the wrapper compiler data file
</span><br>
<span class="quotelev1">&gt; (e.g., mpicc-wrapper-data.txt)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24884.php">http://www.open-mpi.org/community/lists/users/2014/07/24884.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24888.php">Gus Correa: "Re: [OMPI users] mpifort wrapper.txt"</a>
<li><strong>Previous message:</strong> <a href="24886.php">Rob Latham: "Re: [OMPI users] Using PLFS with Open MPI 1.8"</a>
<li><strong>In reply to:</strong> <a href="24884.php">Dan Shell: "[OMPI users] mpifort wrapper.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24888.php">Gus Correa: "Re: [OMPI users] mpifort wrapper.txt"</a>
<li><strong>Reply:</strong> <a href="24888.php">Gus Correa: "Re: [OMPI users] mpifort wrapper.txt"</a>
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
