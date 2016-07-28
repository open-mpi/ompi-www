<?
$subject_val = "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 02:34:58 2009" -->
<!-- isoreceived="20090930063458" -->
<!-- sent="Wed, 30 Sep 2009 01:34:50 -0500 (CDT)" -->
<!-- isosent="20090930063450" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?" -->
<!-- id="22394138.1073291254292490290.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="c4d69730909291842g1c265553r6699241db82ac862_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?<br>
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 02:34:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10825.php">jody: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Previous message:</strong> <a href="10823.php">ankur pachauri: "[OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>In reply to:</strong> <a href="10822.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10876.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10876.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems icc or icpc does not know about the option -mp, so
<br>
&quot;mpiCC -g -O2 -mp simple_mpi.c&quot; complains about -mp.
<br>
<p><p><span class="quotelev1">&gt; mpicc -g -O2 -mp simple_mpi.c
</span><br>
cc1: error: unrecognized command line option &quot;-mp&quot;
<br>
<p><span class="quotelev1">&gt; mpicxx -g -O2 -mp simple_mpi.c
</span><br>
cc1plus: error: unrecognized command line option &quot;-mp&quot;
<br>
<p>I used mpich2's compiler wrapper built with intel compiler
<br>
for testing (since the error comes from the native compiler
<br>
so it does not matter what MPI implementation is used)
<br>
Also, CC should be set to mpicc not mpiCC (which is
<br>
C++ MPI compiler wrapper)  Anyway, I suggest you try
<br>
configure MPE as follows:
<br>
<p>./configure CC=icc F77=ifort 
<br>
MPI_CC=/usr/local/ompi-ifort/bin/mpicc
<br>
MPI_F77=/usr/local/ompi-ifort/bin/mpif77
<br>
--prefix=......
<br>
<p>mpe2-1.0.6p1 isn't the latest.  The latest mpe2 is bundled
<br>
with mpich2, currently at 1.1.1p1, and just use mpich2/src/mpe2
<br>
<p>Let me know how it goes.
<br>
<p>A.Chan
<br>
<p>----- &quot;Rahul Nabar&quot; &lt;rpnabar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Sep 29, 2009 at 1:33 PM, Anthony Chan &lt;chan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rahul,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What errors did you see when compiling MPE for OpenMPI ?
</span><br>
<span class="quotelev2">&gt; &gt; Can you send me the configure and make outputs as seen on
</span><br>
<span class="quotelev2">&gt; &gt; your terminal ? &#194;&#160;ALso, what version of MPE are you using
</span><br>
<span class="quotelev2">&gt; &gt; with OpenMPI ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version: mpe2-1.0.6p1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure FC=ifort CC=icc CXX=icpc F77=ifort CFLAGS=&quot;-g -O2 -mp&quot;
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-mp -recursive&quot; CXXFLAGS=&quot;-g -O2&quot; CPPFLAGS=-DpgiFortran
</span><br>
<span class="quotelev1">&gt; MPI_CC=/usr/local/ompi-ifort/bin/mpiCC
</span><br>
<span class="quotelev1">&gt; MPI_F77=/usr/local/ompi-ifort/bin/mpif77
</span><br>
<span class="quotelev1">&gt; MPI_LIBS=/usr/local/ompi-ifort/lib/
</span><br>
<span class="quotelev1">&gt; Configuring MPE Profiling System with 'FC=ifort' 'CC=icc' 'CXX=icpc'
</span><br>
<span class="quotelev1">&gt; 'F77=ifort' 'CFLAGS=-g -O2 -mp' 'FFLAGS=-mp -recursive' 'CXXFLAGS=-g
</span><br>
<span class="quotelev1">&gt; -O2' 'CPPFLAGS=-DpgiFortran' 'MPI_CC=/usr/local/ompi-ifort/bin/mpiCC'
</span><br>
<span class="quotelev1">&gt; 'MPI_F77=/usr/local/ompi-ifort/bin/mpif77'
</span><br>
<span class="quotelev1">&gt; 'MPI_LIBS=/usr/local/ompi-ifort/lib/'
</span><br>
<span class="quotelev1">&gt; checking for current directory name... /src/mpe2-1.0.6p1
</span><br>
<span class="quotelev1">&gt; checking gnumake... yes using --no-print-directory
</span><br>
<span class="quotelev1">&gt; checking BSD 4.4 make... no - whew
</span><br>
<span class="quotelev1">&gt; checking OSF V3 make... no
</span><br>
<span class="quotelev1">&gt; checking for virtual path format... VPATH
</span><br>
<span class="quotelev1">&gt; User supplied MPI implmentation (Good Luck!)
</span><br>
<span class="quotelev1">&gt; checking for gcc... icc
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking whether we are cross compiling... no
</span><br>
<span class="quotelev1">&gt; checking for suffix of executables...
</span><br>
<span class="quotelev1">&gt; checking for suffix of object files... o
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether icc accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking for icc option to accept ANSI C... none needed
</span><br>
<span class="quotelev1">&gt; checking whether MPI_CC has been set ...
</span><br>
<span class="quotelev1">&gt; /usr/local/ompi-ifort/bin/mpiCC
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran 77 compiler... no
</span><br>
<span class="quotelev1">&gt; checking whether ifort accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking whether MPI_F77 has been set ...
</span><br>
<span class="quotelev1">&gt; /usr/local/ompi-ifort/bin/mpif77
</span><br>
<span class="quotelev1">&gt; checking for the linkage of the supplied MPI C definitions ... no
</span><br>
<span class="quotelev1">&gt; configure: error:  Cannot link with basic MPI C program!
</span><br>
<span class="quotelev1">&gt;         Check your MPI include paths, MPI libraries and MPI CC
</span><br>
<span class="quotelev1">&gt; compiler
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10825.php">jody: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Previous message:</strong> <a href="10823.php">ankur pachauri: "[OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>In reply to:</strong> <a href="10822.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10876.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10876.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
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
