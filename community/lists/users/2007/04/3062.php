<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 12 01:05:00 2007" -->
<!-- isoreceived="20070412050500" -->
<!-- sent="Thu, 12 Apr 2007 01:03:50 -0400" -->
<!-- isosent="20070412050350" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with HPL and MPI" -->
<!-- id="9A7746AA-A39E-4A2C-BF6D-5FC0E8352C06_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="041220070408.19758.461DB0A4000BE12900004D2E2215567074C8C906029C_at_comcast.net" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-12 01:03:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3063.php">Sumit Naiksatam: "[OMPI users] 1st IEEE/IFIP International Workshop on End-to-end	Virtualization and Grid Management"</a>
<li><strong>Previous message:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>In reply to:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Im taking this off list as its off topic.
<br>
<p>yes having both mpich and openmpi installed can cause problem with  
<br>
names of libs being the same at times.
<br>
<p>Try the following
<br>
<p>make clean arch=Beowulf
<br>
<p>And try again,  Also make sure that your mpicc is the openmpi one.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Apr 12, 2007, at 12:08 AM, snj78_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply Brock, I appreciate the help.  I have rebuilt  
</span><br>
<span class="quotelev1">&gt; the makefile with your suggestions and tried some other things but  
</span><br>
<span class="quotelev1">&gt; to no avail.  One thing that I realized but not sure if this makes  
</span><br>
<span class="quotelev1">&gt; a difference is that I have installed an openmpi package and an  
</span><br>
<span class="quotelev1">&gt; mpich package so could that cause problems using the mpicc compiler  
</span><br>
<span class="quotelev1">&gt; and linking the different packages/libraries?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have rebuilt my make file and something interesting that I have  
</span><br>
<span class="quotelev1">&gt; noticed is that no matter what I change I still get the same  
</span><br>
<span class="quotelev1">&gt; error.  I am always getting the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Makefile:47:  Make.inc: No such file or directory
</span><br>
<span class="quotelev1">&gt; *** No rule to make target 'Make.inc'. Stop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use the following command in my top directory, which is /hpl:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make arch=Beowulf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while my makefile is Make.Beowulf.  I am still at a loss at can't  
</span><br>
<span class="quotelev1">&gt; figure out what to do next so I really appreciate the help, even  
</span><br>
<span class="quotelev1">&gt; though this may seem trivial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The make file and error log follow:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make.Beowulf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SHELL = /bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CD = cd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CP = cp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LN_S = ln -s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MKDIR = mkdir
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RM = /bin/rm -f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TOUCH = touch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ARCH = Linux_x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # - HPL Directory Structure / HPL library  
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TOPdir = $(HOME)/hpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; INCdir = $(TOPdir)/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BINdir = $(TOPdir)/bin/$(ARCH)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LIBdir = $(TOPdir)/lib/$(ARCH)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPLlib = $(LIBdir)/libhpl.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # - Message Passing library (MPI)  
</span><br>
<span class="quotelev1">&gt; --------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPdir = /usr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPinc =-I$(MPdir)/include/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPlib = $(MPdir)/lib64/openmpi/libmpi.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # - Linear Algebra library (BLAS or VSIPL)  
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAdir = /usr/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAinc =-I$(MPdir)/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAlib = $(LAdir)/libblas.so.3 $(LAdir)/atlas/libblas.so.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F2CDEFS =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPL_INCLUDES = -I$(INCdir) -I$(INCdir)/$(ARCH) $(LAinc) $(MPinc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPL_LIBS = $(HPLlib) $(LAlib) $(MPlib)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPL_OPTS = -DHPL_CALL_CBLAS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPL_DEFS = $(F2CDEFS) $(HPL_OPTS) $(HPL_INCLUDES)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # - Compilers / linkers - Optimization flags  
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC = mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CCNOOPT =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CCFLAGS = $(HPL_DEFS) -pipe -O3 -funroll-loops
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LINKER = mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LINKFLAGS = $(CCFLAGS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ARCHIVER = ar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ARFLAGS = r
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RANLIB = echo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error File ( Condensed to show the last portion with the error code )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make -f Make.top refresh_tst arch=Beowulf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/hpl'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cp makes/Make.matgen testing/matgen/Beowulf/Makefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cp makes/Make.timer testing/timer/Beowulf/Makefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cp makes/Make.pmatgen testing/pmatgen/Beowulf/Makefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cp makes/Make.ptimer testing/ptimer/Beowulf/Makefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cp makes/Make.ptest testing/ptest/Beowulf/Makefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/hpl'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make -f Make.top build_src arch=Beowulf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/hpl'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ( cd src/auxil/Beowulf; make )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/hpl/src/auxil/Beowulf'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Makefile:47: Make.inc: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `Make.inc'. Stop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/hpl/src/auxil/Beowulf'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [build_src] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/hpl'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: *** [build] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3062/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3063.php">Sumit Naiksatam: "[OMPI users] 1st IEEE/IFIP International Workshop on End-to-end	Virtualization and Grid Management"</a>
<li><strong>Previous message:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>In reply to:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
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
