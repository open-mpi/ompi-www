<?
$subject_val = "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 21:42:50 2009" -->
<!-- isoreceived="20090930014250" -->
<!-- sent="Tue, 29 Sep 2009 20:42:45 -0500" -->
<!-- isosent="20090930014245" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?" -->
<!-- id="c4d69730909291842g1c265553r6699241db82ac862_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="24678842.1055721254249217344.JavaMail.root_at_zimbra" -->
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
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 21:42:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10823.php">ankur pachauri: "[OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Previous message:</strong> <a href="10821.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>In reply to:</strong> <a href="10819.php">Anthony Chan: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10824.php">Anthony Chan: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="10824.php">Anthony Chan: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep 29, 2009 at 1:33 PM, Anthony Chan &lt;chan_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rahul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What errors did you see when compiling MPE for OpenMPI ?
</span><br>
<span class="quotelev1">&gt; Can you send me the configure and make outputs as seen on
</span><br>
<span class="quotelev1">&gt; your terminal ? &#160;ALso, what version of MPE are you using
</span><br>
<span class="quotelev1">&gt; with OpenMPI ?
</span><br>
<p>Version: mpe2-1.0.6p1
<br>
<p>./configure FC=ifort CC=icc CXX=icpc F77=ifort CFLAGS=&quot;-g -O2 -mp&quot;
<br>
FFLAGS=&quot;-mp -recursive&quot; CXXFLAGS=&quot;-g -O2&quot; CPPFLAGS=-DpgiFortran
<br>
MPI_CC=/usr/local/ompi-ifort/bin/mpiCC
<br>
MPI_F77=/usr/local/ompi-ifort/bin/mpif77
<br>
MPI_LIBS=/usr/local/ompi-ifort/lib/
<br>
Configuring MPE Profiling System with 'FC=ifort' 'CC=icc' 'CXX=icpc'
<br>
'F77=ifort' 'CFLAGS=-g -O2 -mp' 'FFLAGS=-mp -recursive' 'CXXFLAGS=-g
<br>
-O2' 'CPPFLAGS=-DpgiFortran' 'MPI_CC=/usr/local/ompi-ifort/bin/mpiCC'
<br>
'MPI_F77=/usr/local/ompi-ifort/bin/mpif77'
<br>
'MPI_LIBS=/usr/local/ompi-ifort/lib/'
<br>
checking for current directory name... /src/mpe2-1.0.6p1
<br>
checking gnumake... yes using --no-print-directory
<br>
checking BSD 4.4 make... no - whew
<br>
checking OSF V3 make... no
<br>
checking for virtual path format... VPATH
<br>
User supplied MPI implmentation (Good Luck!)
<br>
checking for gcc... icc
<br>
checking for C compiler default output file name... a.out
<br>
checking whether the C compiler works... yes
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of executables...
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether icc accepts -g... yes
<br>
checking for icc option to accept ANSI C... none needed
<br>
checking whether MPI_CC has been set ... /usr/local/ompi-ifort/bin/mpiCC
<br>
checking whether we are using the GNU Fortran 77 compiler... no
<br>
checking whether ifort accepts -g... yes
<br>
checking whether MPI_F77 has been set ... /usr/local/ompi-ifort/bin/mpif77
<br>
checking for the linkage of the supplied MPI C definitions ... no
<br>
configure: error:  Cannot link with basic MPI C program!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check your MPI include paths, MPI libraries and MPI CC compiler
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10823.php">ankur pachauri: "[OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Previous message:</strong> <a href="10821.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>In reply to:</strong> <a href="10819.php">Anthony Chan: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10824.php">Anthony Chan: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="10824.php">Anthony Chan: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
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
