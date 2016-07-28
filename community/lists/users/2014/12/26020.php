<?
$subject_val = "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 19:31:02 2014" -->
<!-- isoreceived="20141218003102" -->
<!-- sent="Thu, 18 Dec 2014 00:30:59 +0000" -->
<!-- isosent="20141218003059" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran" -->
<!-- id="0943CB29-F49B-4491-905D-47C5C9D4A975_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AAB11989-783C-4396-A367-E8FCB86EFAED_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 19:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26021.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25898.php">J&#246;rg Stiller: "[OMPI users] Operators for MPI handles not correctly overloaded with Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26033.php">Jörg Stiller: "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="26033.php">Jörg Stiller: "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jorg --
<br>
<p>I'm sorry for the giant delay in replying; the US holiday and the MPI Forum meeting last week made a disaster out of my already-out-of-control INBOX.  :-(
<br>
<p>Hmm.  This almost sounds like a bug in the intel compiler.  Do you have the latest version of their compiler, perchance?
<br>
<p><p>On Dec 1, 2014, at 2:40 PM, J&#246;rg Stiller &lt;joerg.stiller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the Open MPI 1.8.3 with gcc 4.9.2 and ifort 15.0.1 and the MPI_F08 module on Mac OS X 4.9.
</span><br>
<span class="quotelev1">&gt; With the latter, the == and /= operators are overloaded for MPI handles , e.g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_REQUEST_NULL /= MPI_REQUEST_NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; should work and give the result .false. With gfortran 4.9.2 all is fine, however, with ifort, the loader produces an error message like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;_mpi_f08_types_mp_ompi_request_op_ne_&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _verifymeshintegrity_IP_verifysharedcomponents_ in libhispeet.a 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I looking in the gfortran-version of the dynamic library I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ nm libmpi_usempif08.dylib |grep -i request
</span><br>
<span class="quotelev1">&gt; 0000000000010aa2 T ___mpi_f08_types_MOD_ompi_request_op_eq
</span><br>
<span class="quotelev1">&gt; 0000000000010912 T ___mpi_f08_types_MOD_ompi_request_op_ne
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are the module procedures which implement the overloaded operators.
</span><br>
<span class="quotelev1">&gt; In the ifort-version of the dynamic library are no such  entries, though the directory contains the module file, mpi_f08_types.mod, which defines the interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both versions were configured build with rather standard configuration:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-gcc F77=gfortran-mp-4.9 FC=gfortran-mp-4.9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-intel F77=/opt/intel/composerxe/bin/ifort FC=/opt/intel/composerxe/bin/ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I seems to be an error when building thr Open MPI librraies for ifort, but so far I have no clue how to fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks  for any helpful comments.
</span><br>
<span class="quotelev1">&gt; Joerg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; PD Dr.-Ing. habil. J&#246;rg Stiller
</span><br>
<span class="quotelev1">&gt; Privatdozent / senior lecturer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev1">&gt; Institut f&#252;r Str&#246;mungsmechanik
</span><br>
<span class="quotelev1">&gt; 01062 Dresden / GERMANY
</span><br>
<span class="quotelev1">&gt; Tel.: +49 351 463/38328
</span><br>
<span class="quotelev1">&gt; Fax: +49 351 463/38087
</span><br>
<span class="quotelev1">&gt; E-Mail:  joerg.stiller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://tu-dresden.de/Members/joerg.stiller">http://tu-dresden.de/Members/joerg.stiller</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25898.php">http://www.open-mpi.org/community/lists/users/2014/12/25898.php</a>
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
<li><strong>Next message:</strong> <a href="26021.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25898.php">J&#246;rg Stiller: "[OMPI users] Operators for MPI handles not correctly overloaded with Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26033.php">Jörg Stiller: "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="26033.php">Jörg Stiller: "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
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
