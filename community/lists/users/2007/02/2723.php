<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 21 11:49:06 2007" -->
<!-- isoreceived="20070221164906" -->
<!-- sent="Wed, 21 Feb 2007 17:48:55 +0100" -->
<!-- isosent="20070221164855" -->
<!-- name="Laurent Nguyen" -->
<!-- email="laurent.nguyen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling HPCC with OpenMPI" -->
<!-- id="45DC77F7.2080803_at_idris.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200702211135.58267.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Laurent Nguyen (<em>laurent.nguyen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-21 11:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2724.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2722.php">Eric Thibodeau: "[OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2722.php">Eric Thibodeau: "[OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2724.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2724.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I believe that you are trying to use mpich, not openmpi (libmpich.a).
<br>
Personnally, I've compiling HPCC on AIX IBM with OpenMPI with theses lines:
<br>
<p>&nbsp;&nbsp;# ----------------------------------------------------------------------
<br>
&nbsp;&nbsp;# - Message Passing library (MPI) --------------------------------------
<br>
&nbsp;&nbsp;# ----------------------------------------------------------------------
<br>
&nbsp;&nbsp;# MPinc tells the  C  compiler where to find the Message Passing library
<br>
&nbsp;&nbsp;# header files,  MPlib  is defined  to be the name of  the library to be
<br>
&nbsp;&nbsp;# used. The variable MPdir is only used for defining MPinc and MPlib.
<br>
&nbsp;&nbsp;#
<br>
&nbsp;&nbsp;MPdir        =
<br>
&nbsp;&nbsp;MPinc        =
<br>
&nbsp;&nbsp;MPlib        =
<br>
...
<br>
CC = mpicc
<br>
<p>LINKER = mpicc
<br>
<p>But, in my environnment variable $PATH, I've the directory where OpenMPI 
<br>
executables are: /****/openmpi/bin
<br>
<p>I hope I could help you...
<br>
<p>Regards
<br>
<p><p>**************************************
<br>
NGUYEN Anh-Khai Laurent - Ing&#233;nieur de Recherche
<br>
Equipe Support Utilisateur
<br>
<p>Email    :    laurent.nguyen_at_[hidden]
<br>
T&#233;l      :    01.69.35.85.66
<br>
Adresse  :    IDRIS - Institut du D&#233;veloppement et des Ressources en
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Informatique Scientifique
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CNRS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batiment 506
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BP 167
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F - 91403 ORSAY Cedex
<br>
Site Web :    <a href="http://www.idris.fr">http://www.idris.fr</a>
<br>
**************************************
<br>
<p>Eric Thibodeau a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	As we all know, compiling OpenMPI is not a matter of adding -lmpi (<a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>). I have tried many different approaches on configuring the 3 crucial MPI lines in the HPCC Makefiles with no success. There seems to be no correct way to get mpicc --shome:* to return the correct info and forcing the correct paths/info seems to be incorrect (ie, what OpenMPI lib do I point to here:  MPlib = $(MPdir)/lib/libmpich.a)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exerp from the Makefile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - Message Passing library (MPI) --------------------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # MPinc tells the  C  compiler where to find the Message Passing library
</span><br>
<span class="quotelev1">&gt; # header files,  MPlib  is defined  to be the name of  the library to be
</span><br>
<span class="quotelev1">&gt; # used. The variable MPdir is only used for defining MPinc and MPlib.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; MPdir        = /usr/local/mpi
</span><br>
<span class="quotelev1">&gt; MPinc        = -I$(MPdir)/include
</span><br>
<span class="quotelev1">&gt; MPlib        = $(MPdir)/lib/libmpich.a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2724.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2722.php">Eric Thibodeau: "[OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2722.php">Eric Thibodeau: "[OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2724.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2724.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
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
