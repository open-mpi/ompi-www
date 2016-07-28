<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 06:24:57 2014" -->
<!-- isoreceived="20141105112457" -->
<!-- sent="Wed, 5 Nov 2014 11:24:55 +0000" -->
<!-- isosent="20141105112455" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="8337B490252F0944BF1D38541059627E1736FEBF_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OPENMPI-1.8.3:%20missing%20fortran%20bindings%20for%20MPI_SIZEOF"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-11-05 06:24:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25684.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25682.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Maybe in reply to:</strong> <a href="25676.php">Michael.Rachner_at_[hidden]: "[OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, Gilles, you might be wrong:
<br>
<p>The error occurs also with gfortran-4.9.1, when running my small shared memory testprogram:
<br>
<p>This is the answer of the linker with gfortran-4.9.1 :  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sharedmemtest.f90:(.text+0x1145): undefined reference to `mpi_sizeof0di4_'
<br>
<p>and this is the answer with intel-14.0.4:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sharedmemtest.f90:(.text+0x11c3): undefined reference to `mpi_sizeof0di4_'
<br>
<p><p>If openmpi  actually provides a module file   mpi.mod,  that was  precompiled by openmpi for a certain Fortran compiler,
<br>
then the whole installation of openmpi on a User machine from the openmpi-sourcecode for a User chosen Ftn-compiler would be a farce.
<br>
The module file  mpi.mod  must be either generated during the installation process of openmpi on the User-machine for the User chosen Ftn-compiler,
<br>
or alternatively Openmpi must provide the module not by a  mpi.mod file,  but a mpi.f90 file.  MS-MPI does it that way.
<br>
In my opinion, providing a  mpi.f90  file is indeed  better than providing an  mpi.mod file, because the User can look inside the module
<br>
and can directly see, if something is missing or possibly wrongly coded. 
<br>
<p>Greetings 
<br>
&nbsp;&nbsp;Michael Rachner
<br>
<p><p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Gilles Gouaillardet
<br>
Gesendet: Mittwoch, 5. November 2014 11:33
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF
<br>
<p>Michael,
<br>
<p>the root cause is openmpi was not compiled with the intel compilers but the gnu compiler.
<br>
fortran modules are not binary compatible so openmpi and your application must be compiled with the same compiler.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/11/05 18:25, Michael.Rachner_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Dear OPENMPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OPENMPI-1.8.3 the Ftn-bindings for  MPI_SIZEOF  are missing, when using the mpi-module and when using mpif.h .
</span><br>
<span class="quotelev1">&gt; (I have not controlled, whether they are present in the mpi_08 
</span><br>
<span class="quotelev1">&gt; module.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this message from the linker (Intel-14.0.2):
</span><br>
<span class="quotelev1">&gt;      /home/vat/src/KERNEL/mpi_ini.f90:534: undefined reference to `mpi_sizeof0di4_'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So can you add  the Ftn-bindings for MPI_SIZEOF?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once again I feel, that Fortran-bindings are unloved step-children for C-programmers. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings to you all
</span><br>
<span class="quotelev1">&gt;  Michael Rachner
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25676.php">http://www.open-mpi.org/community/lists/users/2014/11/25676.php</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25682.php">http://www.open-mpi.org/community/lists/users/2014/11/25682.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25684.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25682.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Maybe in reply to:</strong> <a href="25676.php">Michael.Rachner_at_[hidden]: "[OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
