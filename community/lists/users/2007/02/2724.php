<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 21 11:57:06 2007" -->
<!-- isoreceived="20070221165706" -->
<!-- sent="Wed, 21 Feb 2007 11:57:00 -0500" -->
<!-- isosent="20070221165700" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling HPCC with OpenMPI" -->
<!-- id="200702211157.00214.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="45DC77F7.2080803_at_idris.fr" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-21 11:57:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2725.php">George Bosilca: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2725.php">George Bosilca: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Laurent, I will try your proposed settings.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note that I didn't want to use CC= and LINKER= since I dont know the probable impacts on the rest of the benchmarks...hmm...though this IS a clustering benchamrk. Also note that I wasn't trying to compile for MPICH, I merely copied the lines from a &quot;clean&quot; config as a reference ;)
<br>
<p>Eric
<br>
<p>Le mercredi 21 f&#233;vrier 2007 11:48, Laurent Nguyen a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that you are trying to use mpich, not openmpi (libmpich.a).
</span><br>
<span class="quotelev1">&gt; Personnally, I've compiling HPCC on AIX IBM with OpenMPI with theses lines:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   # - Message Passing library (MPI) --------------------------------------
</span><br>
<span class="quotelev1">&gt;   # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   # MPinc tells the  C  compiler where to find the Message Passing library
</span><br>
<span class="quotelev1">&gt;   # header files,  MPlib  is defined  to be the name of  the library to be
</span><br>
<span class="quotelev1">&gt;   # used. The variable MPdir is only used for defining MPinc and MPlib.
</span><br>
<span class="quotelev1">&gt;   #
</span><br>
<span class="quotelev1">&gt;   MPdir        =
</span><br>
<span class="quotelev1">&gt;   MPinc        =
</span><br>
<span class="quotelev1">&gt;   MPlib        =
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; CC = mpicc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LINKER = mpicc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, in my environnment variable $PATH, I've the directory where OpenMPI 
</span><br>
<span class="quotelev1">&gt; executables are: /****/openmpi/bin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope I could help you...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt; NGUYEN Anh-Khai Laurent - Ing&#233;nieur de Recherche
</span><br>
<span class="quotelev1">&gt; Equipe Support Utilisateur
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Email    :    laurent.nguyen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; T&#233;l      :    01.69.35.85.66
</span><br>
<span class="quotelev1">&gt; Adresse  :    IDRIS - Institut du D&#233;veloppement et des Ressources en
</span><br>
<span class="quotelev1">&gt;                Informatique Scientifique
</span><br>
<span class="quotelev1">&gt;                CNRS
</span><br>
<span class="quotelev1">&gt;                Batiment 506
</span><br>
<span class="quotelev1">&gt;                BP 167
</span><br>
<span class="quotelev1">&gt;                F - 91403 ORSAY Cedex
</span><br>
<span class="quotelev1">&gt; Site Web :    <a href="http://www.idris.fr">http://www.idris.fr</a>
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 	As we all know, compiling OpenMPI is not a matter of adding -lmpi (<a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>). I have tried many different approaches on configuring the 3 crucial MPI lines in the HPCC Makefiles with no success. There seems to be no correct way to get mpicc --shome:* to return the correct info and forcing the correct paths/info seems to be incorrect (ie, what OpenMPI lib do I point to here:  MPlib = $(MPdir)/lib/libmpich.a)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help would be greatly appreciated!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Exerp from the Makefile:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; # - Message Passing library (MPI) --------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; # MPinc tells the  C  compiler where to find the Message Passing library
</span><br>
<span class="quotelev2">&gt; &gt; # header files,  MPlib  is defined  to be the name of  the library to be
</span><br>
<span class="quotelev2">&gt; &gt; # used. The variable MPdir is only used for defining MPinc and MPlib.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; MPdir        = /usr/local/mpi
</span><br>
<span class="quotelev2">&gt; &gt; MPinc        = -I$(MPdir)/include
</span><br>
<span class="quotelev2">&gt; &gt; MPlib        = $(MPdir)/lib/libmpich.a
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
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
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2725.php">George Bosilca: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2725.php">George Bosilca: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
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
