<?
$subject_val = "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 17:07:07 2009" -->
<!-- isoreceived="20090401210707" -->
<!-- sent="Wed, 1 Apr 2009 17:06:49 -0400" -->
<!-- isosent="20090401210649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++." -->
<!-- id="8AA29867-EEB8-4062-97CF-3DB188BF7C63_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D27B5F.1050301_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 17:06:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8725.php">George Bosilca: "[OMPI users] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="8723.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8687.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2009, at 4:21 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Please, correct my argument below if I am wrong.
</span><br>
<span class="quotelev1">&gt; I am not sure yet if the problem is caused by libtool,
</span><br>
<span class="quotelev1">&gt; because somehow it was not present in OpenMPI 1.2.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just as a comparison, the libtool commands on 1.2.8 and 1.3 are very
</span><br>
<span class="quotelev1">&gt; similar, although 1.2.8 builds right, and 1.3 breaks.
</span><br>
<span class="quotelev1">&gt; The libtool commands differ in that 1.3 inserts ../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; libmpi.la
</span><br>
<span class="quotelev1">&gt; on the list of libraries to be linked to, whereas in 1.2.8
</span><br>
<span class="quotelev1">&gt; ../../../ompi/libmpi.la is not there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We did specifically add the following in the build process in v1.3:
<br>
<p>libmpi_f90_la_LIBADD = $(top_builddir)/ompi/libmpi.la
<br>
<p>which means that libmpi_f90 will link against libmpi.  That is the  
<br>
source of this ickyness.  Here's the commit where I put this change in  
<br>
to Open MPI:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/19040">https://svn.open-mpi.org/trac/ompi/changeset/19040</a>
<br>
<p>IIRC, the reason is that libmpi_f90 depends on libmpi (i.e., it calls  
<br>
functions in libmpi).  If nothing else, it's the Right Thing To Do to  
<br>
link in a dependent library.  But also to setup automatic rpath's  
<br>
properly, it is best to actually create libmpi_f90 with an explicit  
<br>
dependency (which turns into an implicit dependency later).  Rpath  
<br>
isn't a huge deal here because both libmpi and libmpi_f90 should be  
<br>
installed in the same directory, but it's the principle of the  
<br>
thing...  Additionally, it allows people to be lazy and do something  
<br>
like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gfortran my_mpi_application.f90 -lmpi_f90
<br>
<p>and that pulls in the rest of the libraries because of the implicit  
<br>
dependencies.  I think there were other reasons to do the explicit/ 
<br>
implicit dependencies (e.g., look at ldd output and you can tell what  
<br>
libs will be pulled in, etc.), but I don't remember them all off the  
<br>
top of my head.  :-(
<br>
<p><span class="quotelev2">&gt; &gt; I can think of two workarounds for you (one significantly less  
</span><br>
<span class="quotelev1">&gt; icky than
</span><br>
<span class="quotelev2">&gt; &gt; the other):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Use pgcc, pgCC, pgf77, and pgf90 to build Open MPI.  If you  
</span><br>
<span class="quotelev1">&gt; have no
</span><br>
<span class="quotelev2">&gt; &gt; C++ MPI code, the resulting Open MPI build *should* be compatible  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev2">&gt; &gt; your C + Fortran code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this one, using only PGI compilers, was built already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our concern is that some codes seem to rely on gcc as the underlying
</span><br>
<span class="quotelev1">&gt; C compiler.
</span><br>
<span class="quotelev1">&gt; Hence the need for the hybrid libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok, bummer.
<br>
<p><span class="quotelev2">&gt; &gt; 2. Instead of using the &quot;real&quot; pgf77/pgf90, put pgf77/pgf90 scripts
</span><br>
<span class="quotelev2">&gt; &gt; early in your PATH that simply strip out -pthread from the argv  
</span><br>
<span class="quotelev1">&gt; and then
</span><br>
<span class="quotelev2">&gt; &gt; invoke the real/underlying pgf77/pgf90 compilers.  This is pretty  
</span><br>
<span class="quotelev1">&gt; icky,
</span><br>
<span class="quotelev2">&gt; &gt; but it should work...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the &quot;fake pgf90&quot; script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #! /bin/bash
</span><br>
<span class="quotelev1">&gt; newargs=`echo $@ | sed s/-pthread//g -`
</span><br>
<span class="quotelev1">&gt; echo &quot;/real/path/to/bin/pgf90  $newargs&quot;
</span><br>
<span class="quotelev1">&gt; /real/path/to/bin/pgf90  $newargs
</span><br>
<span class="quotelev1">&gt; exit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I changed the path to get this script ahead of the real pgf90,
</span><br>
<span class="quotelev1">&gt; did make distclean, removed old subdirectories,
</span><br>
<span class="quotelev1">&gt; configured again, did make again ... and ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works!
</span><br>
<span class="quotelev1">&gt; Ugly, but functional!  :)
</span><br>
<span class="quotelev1">&gt; While a final fix for the configure/libtool issue is in the works,
</span><br>
<span class="quotelev1">&gt; this is fine.
</span><br>
<span class="quotelev1">&gt; Many thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Glad we got it working, but I agree that it is significantly ugly.  :-)
<br>
<p><span class="quotelev1">&gt; Question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of ompi_info --config shows that the absolute path to the
</span><br>
<span class="quotelev1">&gt; &quot;fake pgf90&quot; script was recorded by OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will OpenMPI mpif90 hardwire this absolute path, or will it
</span><br>
<span class="quotelev1">&gt; search the user $PATH variable for the real mpif90 first?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Eww -- good point.  I believe that those absolute pathnames are *only*  
<br>
recorded for ompi_info output so that you can know which compiler was  
<br>
used to build Open MPI after the fact.  The relative names are stored  
<br>
for use in the wrapper compilers.  However, the wrapper compiler  
<br>
arguments are fully customizable -- you might want to remove the  
<br>
&quot;fake&quot; compilers after the fact.  See this FAQ entry for details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8725.php">George Bosilca: "[OMPI users] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="8723.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8687.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
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
