<?
$subject_val = "Re: [OMPI users] OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 07:05:45 2014" -->
<!-- isoreceived="20141105120545" -->
<!-- sent="Wed, 05 Nov 2014 21:05:38 +0900" -->
<!-- isosent="20141105120538" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="ww7w7gjd50oh2t6joisbdufu.1415188315960_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 07:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25683.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>Did you recompile with gfortran compiler or relink only ?
<br>
You need to recompile and relink
<br>
Can you attach your program so i can have a look ?
<br>
<p>You really need one mpi install per compiler, and more if compilers versions from the same vendor are not compatible.
<br>
modules are useful to make this easy for end users, and this is out of the scope of openmpi.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Michael.Rachner_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;Sorry, Gilles, you might be wrong:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The error occurs also with gfortran-4.9.1, when running my small shared memory testprogram:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is the answer of the linker with gfortran-4.9.1 :  
</span><br>
<span class="quotelev1">&gt;     sharedmemtest.f90:(.text+0x1145): undefined reference to `mpi_sizeof0di4_'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and this is the answer with intel-14.0.4:
</span><br>
<span class="quotelev1">&gt;    sharedmemtest.f90:(.text+0x11c3): undefined reference to `mpi_sizeof0di4_'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If openmpi  actually provides a module file   mpi.mod,  that was  precompiled by openmpi for a certain Fortran compiler,
</span><br>
<span class="quotelev1">&gt;then the whole installation of openmpi on a User machine from the openmpi-sourcecode for a User chosen Ftn-compiler would be a farce.
</span><br>
<span class="quotelev1">&gt;The module file  mpi.mod  must be either generated during the installation process of openmpi on the User-machine for the User chosen Ftn-compiler,
</span><br>
<span class="quotelev1">&gt;or alternatively Openmpi must provide the module not by a  mpi.mod file,  but a mpi.f90 file.  MS-MPI does it that way.
</span><br>
<span class="quotelev1">&gt;In my opinion, providing a  mpi.f90  file is indeed  better than providing an  mpi.mod file, because the User can look inside the module
</span><br>
<span class="quotelev1">&gt;and can directly see, if something is missing or possibly wrongly coded. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Greetings 
</span><br>
<span class="quotelev1">&gt;  Michael Rachner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----Urspr&#195;&#188;ngliche Nachricht-----
</span><br>
<span class="quotelev1">&gt;Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;Gesendet: Mittwoch, 5. November 2014 11:33
</span><br>
<span class="quotelev1">&gt;An: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Betreff: Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the root cause is openmpi was not compiled with the intel compilers but the gnu compiler.
</span><br>
<span class="quotelev1">&gt;fortran modules are not binary compatible so openmpi and your application must be compiled with the same compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2014/11/05 18:25, Michael.Rachner_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear OPENMPI developers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In OPENMPI-1.8.3 the Ftn-bindings for  MPI_SIZEOF  are missing, when using the mpi-module and when using mpif.h .
</span><br>
<span class="quotelev2">&gt;&gt; (I have not controlled, whether they are present in the mpi_08 
</span><br>
<span class="quotelev2">&gt;&gt; module.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get this message from the linker (Intel-14.0.2):
</span><br>
<span class="quotelev2">&gt;&gt;      /home/vat/src/KERNEL/mpi_ini.f90:534: undefined reference to `mpi_sizeof0di4_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So can you add  the Ftn-bindings for MPI_SIZEOF?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once again I feel, that Fortran-bindings are unloved step-children for C-programmers. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings to you all
</span><br>
<span class="quotelev2">&gt;&gt;  Michael Rachner
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25676.php">http://www.open-mpi.org/community/lists/users/2014/11/25676.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25682.php">http://www.open-mpi.org/community/lists/users/2014/11/25682.php</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25683.php">http://www.open-mpi.org/community/lists/users/2014/11/25683.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25683.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
