<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 10 11:19:59 2007" -->
<!-- isoreceived="20070410151959" -->
<!-- sent="Tue, 10 Apr 2007 11:18:52 -0400" -->
<!-- isosent="20070410151852" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with HPL and MPI" -->
<!-- id="207B4D89-7B48-436B-9BAA-1B0BF6DF8EC3_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="041020070410.20417.461B0E3D0003C57B00004FC12216566276C8C906029C_at_comcast.net" -->
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
<strong>Date:</strong> 2007-04-10 11:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3054.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>In reply to:</strong> <a href="3049.php">snj78_at_[hidden]: "[OMPI users] Help with HPL and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I remember trying to build HPL my first time as a student :-)  Its  
<br>
much simpler than you think It also is a great way to learn about  
<br>
linking and make files.  (Well in my opinion).
<br>
<p>See my comments below,  mostly quickly looking is you should change  
<br>
g77 and gcc to mpicc.
<br>
Yes mpicc calls gcc  you can see by running
<br>
<p>mpicc -showme
<br>
<p>Thus you can ommit the MPdir, MPinc, and MPlib  (No libmpich.a !!!!!)
<br>
You can see one I use to ACML on our cluster,  note we use PGI  
<br>
compilers.
<br>
<p>&#239;&#191;&#188;
<br>
Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Apr 10, 2007, at 12:10 AM, snj78_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to configure HPL on a beowulf cluster that I have put  
</span><br>
<span class="quotelev1">&gt; together for a senior project at Weber State University, and I am  
</span><br>
<span class="quotelev1">&gt; having a little bit of trouble.  First of all, about the cluster:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4-node diskless cluster
</span><br>
<span class="quotelev1">&gt; Fedora Core 6 - 64 bit version
</span><br>
<span class="quotelev1">&gt; Intel Pentium D dual core processors
</span><br>
<span class="quotelev1">&gt; MSI 965 motherboards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now I have one node doing a net boot with syslinux and would  
</span><br>
<span class="quotelev1">&gt; like to do a benchmark before I put the rest of the nodes together,  
</span><br>
<span class="quotelev1">&gt; so I can have a performance comparison with subsequent nodes.  I  
</span><br>
<span class="quotelev1">&gt; have installed the following packages on my system for HPL:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.1-7.fc6.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; openmpi-devel-1.1-7.fc6.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; openmpi-libs-1.1-7.fc6.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; lapack-3.1.0-4.fc6.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; Blas-3.1.0-4.fc6.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; atlas-4.6.0-11.fc6.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; cblas.tgz
</span><br>
<span class="quotelev1">&gt; hpl.tgz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I may have installed more packages than necessary but I didn't  
</span><br>
<span class="quotelev1">&gt; think it would hurt.  Everything has installed successfully but I  
</span><br>
<span class="quotelev1">&gt; can't get the makefile.&lt;arch&gt; down.  I simply just don't understand  
</span><br>
<span class="quotelev1">&gt; enough of it to build it correctly.  I just keep getting 'Make.inc'  
</span><br>
<span class="quotelev1">&gt; errors.  The Makefile that I have attempted is below, called  
</span><br>
<span class="quotelev1">&gt; Make.Beowulf.  I just used a generic makefile from the setups  
</span><br>
<span class="quotelev1">&gt; directory and attempted to supply some paths to the libraries but  
</span><br>
<span class="quotelev1">&gt; to no avail.  I have tried to find documentation explaining more  
</span><br>
<span class="quotelev1">&gt; clearly how everything should be setup but nothing in lay-man  
</span><br>
<span class="quotelev1">&gt; terms, hence the errors.  A few questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What should my arch be?  Does that even matter?  Does it have to be  
</span><br>
<span class="quotelev1">&gt; x86_64?
</span><br>
<span class="quotelev1">&gt; I realize I have to supply paths to the BLAS and MPI headers and  
</span><br>
<span class="quotelev1">&gt; libraries but exactly which libraries and header files?
</span><br>
<span class="quotelev1">&gt; The compiler I am using is mpicc which is just linked to gcc, but  
</span><br>
<span class="quotelev1">&gt; shouldn't that compiler supply the links to the correct libraries  
</span><br>
<span class="quotelev1">&gt; and header files?
</span><br>
<span class="quotelev1">&gt; The MPlib parameter points to libmpich.a so I installed mpich2 but  
</span><br>
<span class="quotelev1">&gt; that didn't give me a libmpich.a directory so what should I use there?
</span><br>
<span class="quotelev1">&gt; Also, I am not using an network file systems so am I correct in  
</span><br>
<span class="quotelev1">&gt; assuming that all of the libraries need to be on each of the  
</span><br>
<span class="quotelev1">&gt; nodes?  If so, I need to know exactly where to put them, and again,  
</span><br>
<span class="quotelev1">&gt; I believe they would need to be put into the exact same location,  
</span><br>
<span class="quotelev1">&gt; so the problem is, which libraries and header files exactly?  (as  
</span><br>
<span class="quotelev1">&gt; to save precious RAM on each of the nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I realize I may be asking a lot but the end of the semester is just  
</span><br>
<span class="quotelev1">&gt; around the corner.  I appreciate any help that you may give me  
</span><br>
<span class="quotelev1">&gt; ahead of time.  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stephen Jenkins
</span><br>
<span class="quotelev1">&gt; snj78_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; # - Platform identifier  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
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
<span class="quotelev1">&gt; MPdir = /usr/include/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPinc = -I$/usr/include/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPlib = $(MPdir)/lib/libmpich.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # - Linear Algebra library (BLAS or VSIPL)  
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAdir = $(HOME)/netlib/ARCHIVES/Linux_PII
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAinc =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAlib = $(LAdir)/libcblas.a $(LAdir)/libatlas.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # - F77 / C interface  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F2CDEFS =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # - HPL includes / libraries / specifics  
</span><br>
<span class="quotelev1">&gt; -------------------------------
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
<span class="quotelev1">&gt; # - Compile time options  
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------
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
<span class="quotelev1">&gt; CC = /usr/bin/gcc
</span><br>
Change this to mpicc
<br>
<span class="quotelev1">&gt; CCNOOPT = $(HPL_DEFS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CCFLAGS = $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # On some platforms, it is necessary to use the Fortran linker to find
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # the Fortran internals used in the BLAS library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LINKER = /usr/bin/g77
</span><br>
Why?  Also make this mpicc
<br>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3053/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3053/Make.OPT_OMPI">Make.OPT_OMPI</a>
</ul>
<!-- attachment="Make.OPT_OMPI" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3053/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3054.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>In reply to:</strong> <a href="3049.php">snj78_at_[hidden]: "[OMPI users] Help with HPL and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
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
