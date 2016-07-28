<?
$subject_val = "Re: [OMPI users] Help: HPL Compile Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 12 08:13:36 2009" -->
<!-- isoreceived="20090712121336" -->
<!-- sent="Sun, 12 Jul 2009 14:13:30 +0200" -->
<!-- isosent="20090712121330" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: HPL Compile Problems" -->
<!-- id="4A59D36A.30001_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="289665360907120416j74162f5di2a9fe96b736d3dc1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: HPL Compile Problems<br>
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-12 08:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9929.php">Lee Amy: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Previous message:</strong> <a href="9927.php">Lee Amy: "[OMPI users] Help: HPL Compile Problems"</a>
<li><strong>In reply to:</strong> <a href="9927.php">Lee Amy: "[OMPI users] Help: HPL Compile Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9929.php">Lee Amy: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Reply:</strong> <a href="9929.php">Lee Amy: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>you can ignore MP... if you set the compiler and linker to mpicc. In my 
<br>
makefile for hpl I have
<br>
<p># ----------------------------------------------------------------------
<br>
# - MPI directories - library ------------------------------------------
<br>
# ----------------------------------------------------------------------
<br>
# MPinc tells the  C  compiler where to find the Message Passing library
<br>
# header files,  MPlib  is defined  to be the name of  the library to be
<br>
# used. The variable MPdir is only used for defining MPinc and MPlib.
<br>
#
<br>
MPdir        =
<br>
MPinc        =
<br>
MPlib        =
<br>
#
<br>
<p>and
<br>
<p># ----------------------------------------------------------------------
<br>
# - Compilers / linkers - Optimization flags ---------------------------
<br>
# ----------------------------------------------------------------------
<br>
#
<br>
CC           = $(HOME)/openmpi-1.3.2/bin/mpicc
<br>
CCNOOPT      = $(HPL_DEFS)
<br>
CCFLAGS      = $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops -W -Wall
<br>
#
<br>
LINKER       = $(HOME)/openmpi-1.3.2/bin/mpicc
<br>
LINKFLAGS    = $(CCFLAGS)
<br>
#
<br>
ARCHIVER     = ar
<br>
ARFLAGS      = r
<br>
RANLIB       = echo
<br>
<p>The mpicc wrapper will take care of including the correct libraries.
<br>
<p>Regards,
<br>
Dorian
<br>
<p><p>Lee Amy wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use OpenMPI 1.3.2 and HPL-2.0 to measure clusters performance.
</span><br>
<span class="quotelev1">&gt; However I encountered a problem when I compile the HPL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how to fill up the MPlib variable item because the
</span><br>
<span class="quotelev1">&gt; default value is $(MPdir)/lib/libmpich.a. Obviously I have to choose a
</span><br>
<span class="quotelev1">&gt; file from OpenMPI to replace it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
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
<span class="quotelev1">&gt; MPdir        = /usr/local/openmpi
</span><br>
<span class="quotelev1">&gt; MPinc        = -I$(MPdir)/include
</span><br>
<span class="quotelev1">&gt; MPlib        = $(MPdir)/lib/libmpich.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anyone tell me how to fix that problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Amy Lee
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9929.php">Lee Amy: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Previous message:</strong> <a href="9927.php">Lee Amy: "[OMPI users] Help: HPL Compile Problems"</a>
<li><strong>In reply to:</strong> <a href="9927.php">Lee Amy: "[OMPI users] Help: HPL Compile Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9929.php">Lee Amy: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Reply:</strong> <a href="9929.php">Lee Amy: "Re: [OMPI users] Help: HPL Compile Problems"</a>
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
