<?
$subject_val = "Re: [OMPI users] fortran program with integer kind=8 using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 12:46:23 2012" -->
<!-- isoreceived="20120629164623" -->
<!-- sent="Fri, 29 Jun 2012 12:46:17 -0400" -->
<!-- isosent="20120629164617" -->
<!-- name="Secretan Yves" -->
<!-- email="Yves.Secretan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran program with integer kind=8 using openmpi" -->
<!-- id="0DA854E5D5F4C8428ABC1701AE2621CD02AFDD29E40B_at_INRSEXCH02.AD.INRS.CA" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6FFEA644-3F39-4B6E-ADD6-3721F485525F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran program with integer kind=8 using openmpi<br>
<strong>From:</strong> Secretan Yves (<em>Yves.Secretan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 12:46:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19708.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19706.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>In reply to:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Recompiling OpenMPI with 
<br>
<p>./configure FCFLAGS=-fdefault-integer-8 FFLAGS=-fdefault-integer-8 \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fflags=-fdefault-integer-8 \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=-fdefault-integer-8
<br>
<p>is the easy way to go (at least for me). Changes to the Fortran code are minimal. Be aware that the underlying C code is still with 32bit int, and that arguments like counts will be downcasted to int.
<br>
<p>If you don't recompile OpenMPI, then you will have to adapt' if not already done,  your Fortran code to reflect the types (kind=4) of communicators, types, error, sizes, rank, etc..
<br>
<p>Yves Secretan
<br>
Yves.Secretan_at_[hidden]
<br>
<p>Avant d'imprimer, pensez &#224; l'environnement 
<br>
<p><p>-----Message d'origine-----
<br>
De&#160;: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] De la part de Jeff Squyres
<br>
Envoy&#233;&#160;: 29 juin 2012 07:03
<br>
&#192;&#160;: warren_at_[hidden]; Open MPI Users
<br>
Objet&#160;: Re: [OMPI users] fortran program with integer kind=8 using openmpi
<br>
<p>On Jun 28, 2012, at 8:37 PM, David Warren wrote:
<br>
<p><span class="quotelev1">&gt; You should not have to recompile openmpi, but you do have to use the correct type. You can check the size of integers in your fortrana nd use MPI_INTEGER4 or MPI_INTEGER8 depending on what you get.
</span><br>
<p>If you configure ompi with -fdefault-integer-8, then OMPI will assume that Fortran integers are always 8 bytes, so be sure to also compile all of your MPI applications the same way.  Indeed, you may want to configure OMPI with something like:
<br>
<p>./configure FCFLAGS=-fdefault-integer-8 FFLAGS=-fdefault-integer-8 \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fflags=-fdefault-integer-8 \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=-fdefault-integer-8
<br>
<p>This will add -fdefault-integer-8 to the mpif77 and mpif90 command lines automatically so that you *can't* compile without that flag.
<br>
<p>Be aware that 8-byte Fortran integers *should work* in Open MPI, but it is probably not well tested.  You may well run into some issues; be sure to let us know if you run into bugs.  Sending small test programs that show the problem are usually the best way to help us identify/fix the precise problem.
<br>
<p><span class="quotelev1">&gt; in gfortran use
</span><br>
<span class="quotelev1">&gt; integer i
</span><br>
<span class="quotelev1">&gt; if(sizeof(i) .eq. 8) then
</span><br>
<span class="quotelev1">&gt;     mpi_int_type=MPI_INTEGER8
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     mpi_int_type=MPI_INTEGER4
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<p>I don't think that this should be necessary -- as long as you configured OMPI with the 8-byte-integer setting, then MPI_INTEGER should represent an 8 byte integer.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19708.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19706.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>In reply to:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
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
