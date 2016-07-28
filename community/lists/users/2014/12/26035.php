<?
$subject_val = "Re: [OMPI users] Operators for MPI handles not correctly	overloaded	with Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 10:36:12 2014" -->
<!-- isoreceived="20141218153612" -->
<!-- sent="Thu, 18 Dec 2014 16:36:02 +0100" -->
<!-- isosent="20141218153602" -->
<!-- name="J&#246;rg Stiller" -->
<!-- email="joerg.stiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Operators for MPI handles not correctly	overloaded	with Intel Fortran" -->
<!-- id="86EBA9BF-89CA-457F-AE28-3DE26F235FD0_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="35D47325-C6BB-44AD-A642-79CA1A68A12D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Operators for MPI handles not correctly	overloaded	with Intel Fortran<br>
<strong>From:</strong> J&#246;rg Stiller (<em>joerg.stiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 10:36:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26036.php">Reuti: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26034.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly	overloaded	with Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="26034.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly	overloaded	with Intel Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I will do that as soon as possible.
<br>
J&#246;rg
<br>
<p>Am 18.12.2014 um 16:31 schrieb Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; If it works with static builds and not dynamic, it might be worth reporting a problem on the Intel fortran compiler forums and see if this is a known problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2014, at 10:29 AM, J&#246;rg Stiller &lt;joerg.stiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; with OS X I use ifort 15.0.1 20141022, which is the latest version, as far I know.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I managed to get open-mpi 1.8.3 built properly when switching to static libs, i.e.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/opt/openmpi-intel-static --disable-shared --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt;   F77=/opt/intel/composerxe/bin/ifort \
</span><br>
<span class="quotelev2">&gt;&gt;   FC=/opt/intel/composerxe/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I found no problems when using the current ifort with shared libs under Linux.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also compared the makefiles dealing with mpi_f08_types configured for ifort with those for gcc/gfortran 4.9.2, but I could not identify any differencs that might be responsible for the problem observed with OS X.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you have any hint what to try or look for, please let me know. In the meantime I am fine with the static libs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jorg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 18.12.2014 um 01:30 schrieb Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jorg --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sorry for the giant delay in replying; the US holiday and the MPI Forum meeting last week made a disaster out of my already-out-of-control INBOX.  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmm.  This almost sounds like a bug in the intel compiler.  Do you have the latest version of their compiler, perchance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 1, 2014, at 2:40 PM, J&#246;rg Stiller &lt;joerg.stiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using the Open MPI 1.8.3 with gcc 4.9.2 and ifort 15.0.1 and the MPI_F08 module on Mac OS X 4.9.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With the latter, the == and /= operators are overloaded for MPI handles , e.g.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_REQUEST_NULL /= MPI_REQUEST_NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should work and give the result .false. With gfortran 4.9.2 all is fine, however, with ifort, the loader produces an error message like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;_mpi_f08_types_mp_ompi_request_op_ne_&quot;, referenced from:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    _verifymeshintegrity_IP_verifysharedcomponents_ in libhispeet.a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I looking in the gfortran-version of the dynamic library I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ nm libmpi_usempif08.dylib |grep -i request
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0000000000010aa2 T ___mpi_f08_types_MOD_ompi_request_op_eq
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0000000000010912 T ___mpi_f08_types_MOD_ompi_request_op_ne
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These are the module procedures which implement the overloaded operators.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the ifort-version of the dynamic library are no such  entries, though the directory contains the module file, mpi_f08_types.mod, which defines the interfaces.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Both versions were configured build with rather standard configuration:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/opt/openmpi-gcc F77=gfortran-mp-4.9 FC=gfortran-mp-4.9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/opt/openmpi-intel F77=/opt/intel/composerxe/bin/ifort FC=/opt/intel/composerxe/bin/ifort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I seems to be an error when building thr Open MPI librraies for ifort, but so far I have no clue how to fix.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks  for any helpful comments.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Joerg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PD Dr.-Ing. habil. J&#246;rg Stiller
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Privatdozent / senior lecturer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Institut f&#252;r Str&#246;mungsmechanik
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 01062 Dresden / GERMANY
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel.: +49 351 463/38328
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax: +49 351 463/38087
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; E-Mail:  joerg.stiller_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://tu-dresden.de/Members/joerg.stiller">http://tu-dresden.de/Members/joerg.stiller</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25898.php">http://www.open-mpi.org/community/lists/users/2014/12/25898.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26020.php">http://www.open-mpi.org/community/lists/users/2014/12/26020.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26033.php">http://www.open-mpi.org/community/lists/users/2014/12/26033.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26034.php">http://www.open-mpi.org/community/lists/users/2014/12/26034.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26036.php">Reuti: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26034.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly	overloaded	with Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="26034.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly	overloaded	with Intel Fortran"</a>
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
