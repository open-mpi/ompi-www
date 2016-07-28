<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 09:59:16 2014" -->
<!-- isoreceived="20141105145916" -->
<!-- sent="Wed, 5 Nov 2014 14:59:12 +0000" -->
<!-- isosent="20141105145912" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="8337B490252F0944BF1D38541059627E17370F60_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F5E97360-CAA8-44FF-B6AC-A2191116977A_at_cisco.com" -->
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
<strong>Date:</strong> 2014-11-05 09:59:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25687.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mr. Squyres,
<br>
<p>In my   sharedmemtest.f90  coding   just sent to you,
<br>
I have added a call of MPI_SIZEOF (at present it is deactivated, because of the missing Ftn-binding in OPENMPI-1.8.3).
<br>
I suggest, that you may activate the 2 respective statements in the coding ,
<br>
and use yourself the program for testing whether MPI_SIZEOF works now in the upcoming 1.8.4-version.
<br>
For me, the installation of a tarball version is not so easy to do as for you, 
<br>
and the problem with the missing Ftn-bindings is not limited to a special machine.
<br>
<p>Can you tell me, from which OPENMPI-version on  the bug will be removed?
<br>
<p>To generalize the problem with the Ftn-bindings:
<br>
&nbsp;&nbsp;&nbsp;I think OPENMPI-development should go the whole hog,  
<br>
&nbsp;&nbsp;&nbsp;and check, whether for all MPI-routines the Ftn-bindings exist.
<br>
&nbsp;&nbsp;This not so much a complicated task, but a somewhat time-consuming task.
<br>
&nbsp;&nbsp;But otherwise, over a long time more or less angry Users will write emails on missing FTN-bindings and grumble on &quot;that buggy OPENMPI&quot;.
<br>
&nbsp;&nbsp;And you will have to write the answers on and on... .
<br>
&nbsp;&nbsp;This will finally take more time for developers and users then doing that work now once-for-all.
<br>
<p>Thank You
<br>
&nbsp;&nbsp;&nbsp;Michael Rachner
<br>
<p><p><p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff Squyres (jsquyres)
<br>
Gesendet: Mittwoch, 5. November 2014 13:40
<br>
An: Open MPI User's List
<br>
Betreff: Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF
<br>
<p>Yes, this is a correct report.
<br>
<p>In short, the MPI_SIZEOF situation before the upcoming 1.8.4 was a bit of a mess; it actually triggered a bunch of discussion up in the MPI Forum Fortran working group (because the design of MPI_SIZEOF actually has some unintended consequences that came to light when another OMPI user noted the same thing you did a few months ago).
<br>
<p>Can you download a 1.8.4 nightly tarball (or the rc) and see if MPI_SIZEOF is working for you there?
<br>
<p><p><p>On Nov 5, 2014, at 6:24 AM, &lt;Michael.Rachner_at_[hidden]&gt; &lt;Michael.Rachner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, Gilles, you might be wrong:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error occurs also with gfortran-4.9.1, when running my small shared memory testprogram:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the answer of the linker with gfortran-4.9.1 :  
</span><br>
<span class="quotelev1">&gt;     sharedmemtest.f90:(.text+0x1145): undefined reference to `mpi_sizeof0di4_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and this is the answer with intel-14.0.4:
</span><br>
<span class="quotelev1">&gt;    sharedmemtest.f90:(.text+0x11c3): undefined reference to `mpi_sizeof0di4_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If openmpi  actually provides a module file   mpi.mod,  that was  precompiled by openmpi for a certain Fortran compiler,
</span><br>
<span class="quotelev1">&gt; then the whole installation of openmpi on a User machine from the openmpi-sourcecode for a User chosen Ftn-compiler would be a farce.
</span><br>
<span class="quotelev1">&gt; The module file  mpi.mod  must be either generated during the 
</span><br>
<span class="quotelev1">&gt; installation process of openmpi on the User-machine for the User chosen Ftn-compiler, or alternatively Openmpi must provide the module not by a  mpi.mod file,  but a mpi.f90 file.  MS-MPI does it that way.
</span><br>
<span class="quotelev1">&gt; In my opinion, providing a  mpi.f90  file is indeed  better than 
</span><br>
<span class="quotelev1">&gt; providing an  mpi.mod file, because the User can look inside the module and can directly see, if something is missing or possibly wrongly coded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt;  Michael Rachner
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Urspr&#252;ngliche Nachricht-----
</span><br>
<span class="quotelev1">&gt; Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Gilles 
</span><br>
<span class="quotelev1">&gt; Gouaillardet
</span><br>
<span class="quotelev1">&gt; Gesendet: Mittwoch, 5. November 2014 11:33
</span><br>
<span class="quotelev1">&gt; An: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for 
</span><br>
<span class="quotelev1">&gt; MPI_SIZEOF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the root cause is openmpi was not compiled with the intel compilers but the gnu compiler.
</span><br>
<span class="quotelev1">&gt; fortran modules are not binary compatible so openmpi and your application must be compiled with the same compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/11/05 18:25, Michael.Rachner_at_[hidden] wrote:
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
<span class="quotelev2">&gt;&gt;     /home/vat/src/KERNEL/mpi_ini.f90:534: undefined reference to `mpi_sizeof0di4_'
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
<span class="quotelev2">&gt;&gt; Michael Rachner
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25682.php">http://www.open-mpi.org/community/lists/users/2014/11/25682.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25683.php">http://www.open-mpi.org/community/lists/users/2014/11/25683.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25685.php">http://www.open-mpi.org/community/lists/users/2014/11/25685.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25687.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
