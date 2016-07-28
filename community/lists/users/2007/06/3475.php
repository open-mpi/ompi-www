<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 11:48:51 2007" -->
<!-- isoreceived="20070612154851" -->
<!-- sent="Tue, 12 Jun 2007 10:48:47 -0500" -->
<!-- isosent="20070612154847" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] f90 support not built with gfortran?" -->
<!-- id="466EC05F.8080509_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45734222-D312-469A-8B47-81A5C6A6C439_at_cisco.com" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 11:48:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3476.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3474.php">Brock Palen: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>In reply to:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks guys!
<br>
<p>Setting F77=gfortran did the trick.
<br>
<p><p>Jeff F. Pummill
<br>
Senior Linux Cluster Administrator
<br>
University of Arkansas
<br>
Fayetteville, Arkansas 72701
<br>
(479) 575 - 4590
<br>
<a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
<br>
<p>&quot;A supercomputer is a device for turning compute-bound
<br>
problems into I/O-bound problems.&quot; -Seymour Cray
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 12, 2007, at 5:56 AM, Terry Frankcombe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I downloaded and configured v1.2.2 this morning on an Opteron cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the following configure directives...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/share/apps CC=gcc CXX=g++ F77=g77 FC=gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; What does config.log say?  (Look for 'Fortran 90'.)  config.log should
</span><br>
<span class="quotelev2">&gt;&gt; be your first port of call when trying to debug build problems in any
</span><br>
<span class="quotelev2">&gt;&gt; &quot;configure&quot;-d project.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exactly.  OMPI's configure probably determined that it should not  
</span><br>
<span class="quotelev1">&gt; build the F90 bindings, so it didn't (hence, mpif90 is non- 
</span><br>
<span class="quotelev1">&gt; functional).  If I had to guess, it's because you specified both g77  
</span><br>
<span class="quotelev1">&gt; and gfortran.  When using gfortran, you should probably use it for  
</span><br>
<span class="quotelev1">&gt; both F77 and FC.  That will likely fix your problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it doesn't, please see this web page for more details on getting  
</span><br>
<span class="quotelev1">&gt; help:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Consider this a compile-time problem (because OMPI decided not to  
</span><br>
<span class="quotelev1">&gt; build the F90 bindings) and send all the information listed.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3475/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3476.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3474.php">Brock Palen: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>In reply to:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
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
