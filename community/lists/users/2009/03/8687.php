<?
$subject_val = "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 16:22:01 2009" -->
<!-- isoreceived="20090331202201" -->
<!-- sent="Tue, 31 Mar 2009 16:21:51 -0400" -->
<!-- isosent="20090331202151" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++." -->
<!-- id="49D27B5F.1050301_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C8ED4297-E15E-44AA-9BFD-CC4DE25FAEF8_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 16:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8688.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8686.php">Bogdan Costescu: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8668.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8724.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8724.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, list
<br>
<p>Jeff: Thank you for your help and suggestions.
<br>
<p>Please, correct my argument below if I am wrong.
<br>
I am not sure yet if the problem is caused by libtool,
<br>
because somehow it was not present in OpenMPI 1.2.8.
<br>
<p>Just as a comparison, the libtool commands on 1.2.8 and 1.3 are very
<br>
similar, although 1.2.8 builds right, and 1.3 breaks.
<br>
The libtool commands differ in that 1.3 inserts ../../../ompi/libmpi.la
<br>
on the list of libraries to be linked to, whereas in 1.2.8
<br>
../../../ompi/libmpi.la is not there.
<br>
<p>Is ../../../ompi/libmpi.la really needed there?
<br>
Was it put there by the configure script or by libtool?
<br>
The problem is that in 1.3 somehow the &quot;-pthread&quot; flag appears,
<br>
apparently triggered by the explicit listing of
<br>
../../../ompi/libmpi.la.
<br>
Or not?
<br>
<p>Here is the make log of 1.3
<br>
(../../../ompi/libmpi.la is present on the libtool command,
<br>
&quot;-pthread&quot; present in the pgf90 command, which fails)
<br>
<p>[build_gnu-4.1.2_pgi-8.0-4]$ grep libmpi_f90 make_gnu-4.1.2-pgi-8.0-4.log
<br>
/bin/sh ../../../libtool   --mode=link pgf90 -I../../../ompi/include
<br>
-I../../../../ompi/include -I. -I../../../../ompi/mpi/f90
<br>
-I../../../ompi/mpi/f90  -tp shanghai-64 -fast -Mfprelaxed
<br>
-export-dynamic   -o libmpi_f90.la -rpath
<br>
/home/sw/openmpi/openmpi-1.3-gnu-4.1.2-pgi-8.0-4/lib mpi.lo
<br>
mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo
<br>
mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo
<br>
mpi_wtick_f90.lo mpi_wtime_f90.lo   ../../../ompi/libmpi.la -lnsl -lutil
<br>
&nbsp;&nbsp;-lm
<br>
<p>libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o
<br>
-Wl,-rpath
<br>
-Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/ompi/.libs 
<br>
<p>-Wl,-rpath
<br>
-Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs 
<br>
<p>-Wl,-rpath -Wl,/usr/lib64 -Wl,-rpath
<br>
-Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs 
<br>
<p>-Wl,-rpath -Wl,/home/sw/openmpi/openmpi-1.3-gnu-4.1.2-pgi-8.0-4/lib
<br>
-Wl,-rpath -Wl,/usr/lib64
<br>
-L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs
<br>
-L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs
<br>
../../../ompi/.libs/libmpi.so -L/usr/lib64/lib -L/usr/lib64 -lrdmacm
<br>
-libverbs
<br>
/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs/libopen-rte.so 
<br>
<p>/usr/lib64/libtorque.so
<br>
/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs/libopen-pal.so 
<br>
<p>-lnuma -ldl -lnsl -lutil -lm    -pthread -Wl,-soname -Wl,libmpi_f90.so.0
<br>
-o .libs/libmpi_f90.so.0.0.0
<br>
<p>make[4]: *** [libmpi_f90.la] Error 1
<br>
<p><p>Here is the make log of 1.2.8:
<br>
(../../../ompi/libmpi.la is absent from the libtool command,
<br>
&quot;-pthread&quot; absent from the pgf90 command, which succeeds)
<br>
<p>[build_gnu-4.1.2_pgi-8.0-4]% grep libmpi_f90
<br>
/home/swinst/openmpi/1.2.8/openmpi-1.2.8/build_gnu-4.1.2_pgi-8.0-4/make_gnu-4.1.2-pgi-8.0-4.log 
<br>
<p><p>/bin/sh ../../../libtool   --mode=link pgf90 -I../../../ompi/include
<br>
-I../../../../ompi/include -I. -I../../../../ompi/mpi/f90
<br>
-I../../../ompi/mpi/f90  -tp shanghai-64 -fast -Mfprelaxed
<br>
-export-dynamic   -o libmpi_f90.la -rpath
<br>
/home/sw/openmpi/openmpi-1.2.8-gnu-4.1.2-pgi-8.0-4/lib mpi.lo
<br>
mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo
<br>
mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo
<br>
mpi_wtick_f90.lo mpi_wtime_f90.lo    -lnsl  -lutil -lm
<br>
<p>libtool: link: pgf90 -shared  -fPIC -Mnomain  .libs/mpi.o
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o
<br>
-lnsl -lutil -lm    -Wl,-soname -Wl,libmpi_f90.so.0 -o
<br>
.libs/libmpi_f90.so.0.0.0
<br>
<p>libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_f90.so.0&quot; &amp;&amp; ln -s
<br>
&quot;libmpi_f90.so.0.0.0&quot; &quot;libmpi_f90.so.0&quot;)
<br>
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_f90.so&quot; &amp;&amp; ln -s
<br>
&quot;libmpi_f90.so.0.0.0&quot; &quot;libmpi_f90.so&quot;)
<br>
libtool: link: ar cru .libs/libmpi_f90.a  mpi.o mpi_sizeof.o
<br>
mpi_comm_spawn_multiple_f90.o mpi_testall_f90.o mpi_testsome_f90.o
<br>
mpi_waitall_f90.o mpi_waitsome_f90.o mpi_wtick_f90.o mpi_wtime_f90.o
<br>
libtool: link: ranlib .libs/libmpi_f90.a
<br>
libtool: link: creating libmpi_f90.la
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_f90.la&quot; &amp;&amp; ln -s
<br>
&quot;../libmpi_f90.la&quot; &quot;libmpi_f90.la&quot; )
<br>
<p><p>Now, in 1.3, if I remove by hand ../../../ompi/libmpi.la from the
<br>
libtool command line,
<br>
then the libtool command and the pgf90 command that
<br>
it translates to succeed.
<br>
Besides, the translation doesn't have the &quot;-pthread&quot; flag.
<br>
The .libs directory is created and the f90 libraries are built there.
<br>
<p>Of course, I can't go any step further with this hand-edited trick,
<br>
and I don't know if the libmpi_f90.0.0.0 library was built correctly.
<br>
<p><p>[build_gnu-4.1.2_pgi-8.0-4]% cd ompi/mpi/f90; /bin/sh ../../../libtool
<br>
&nbsp;&nbsp;--mode=link pgf90 -I../../../ompi/include -I../../../../ompi/include
<br>
-I. -I../../../../ompi/mpi/f90 -I../../../ompi/mpi/f90  -tp shanghai-64
<br>
-fast -Mfprelaxed  -export-dynamic   -o libmpi_f90.la -rpath
<br>
/home/sw/openmpi/openmpi-1.3-gnu-4.1.2-pgi-8.0-4/lib mpi.lo
<br>
mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo
<br>
mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo
<br>
mpi_wtick_f90.lo mpi_wtime_f90.lo   -lnsl -lutil  -lm
<br>
<p>libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o
<br>
-lnsl -lutil -lm    -Wl,-soname -Wl,libmpi_f90.so.0 -o
<br>
.libs/libmpi_f90.so.0.0.0
<br>
<p>libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_f90.so.0&quot; &amp;&amp; ln -s
<br>
&quot;libmpi_f90.so.0.0.0&quot; &quot;libmpi_f90.so.0&quot;)
<br>
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_f90.so&quot; &amp;&amp; ln -s
<br>
&quot;libmpi_f90.so.0.0.0&quot; &quot;libmpi_f90.so&quot;)
<br>
libtool: link: ar cru .libs/libmpi_f90.a  mpi.o mpi_sizeof.o
<br>
mpi_comm_spawn_multiple_f90.o mpi_testall_f90.o mpi_testsome_f90.o
<br>
mpi_waitall_f90.o mpi_waitsome_f90.o mpi_wtick_f90.o mpi_wtime_f90.o
<br>
libtool: link: ranlib .libs/libmpi_f90.a
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_f90.la&quot; &amp;&amp; ln -s
<br>
&quot;../libmpi_f90.la&quot; &quot;libmpi_f90.la&quot; )
<br>
<p><p>[f90]% ls .libs
<br>
libmpi_f90.a   libmpi_f90.lai  libmpi_f90.so.0
<br>
mpi_comm_spawn_multiple_f90.o  mpi_sizeof.o       mpi_testsome_f90.o
<br>
mpi_waitsome_f90.o  mpi_wtime_f90.o
<br>
libmpi_f90.la  libmpi_f90.so   libmpi_f90.so.0.0.0  mpi.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_testall_f90.o  mpi_waitall_f90.o   mpi_wtick_f90.o
<br>
<p><p>Anyway, this just a thought.
<br>
<p>**
<br>
<p>Please, see answers to your suggestions below.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I can replicate your error; this looks like a Libtool bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI does specifically test each of the C, C++, F77, and F90 
</span><br>
<span class="quotelev1">&gt; compilers for the -pthread flag (and others).  When mixing gcc/g++ and 
</span><br>
<span class="quotelev1">&gt; pgf77/pgf90, OMPI's configure script correctly determines that gcc/g++ 
</span><br>
<span class="quotelev1">&gt; support -pthread, but pgf77/pgf90 do not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When building the F90 library, OMPI issues the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool   --mode=link pgf90 -I../../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90    
</span><br>
<span class="quotelev1">&gt; -export-dynamic   -o libmpi_f90.la -rpath /home/jsquyres/bogus/lib 
</span><br>
<span class="quotelev1">&gt; mpi.lo mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo 
</span><br>
<span class="quotelev1">&gt; mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo 
</span><br>
<span class="quotelev1">&gt; mpi_wtick_f90.lo mpi_wtime_f90.lo   ../../../ompi/libmpi.la -lnsl  
</span><br>
<span class="quotelev1">&gt; -lutil -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Notice the lack of -pthread in there.  Libtool translates this into:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pgf90 -shared  -fpic -Mnomain  .libs/mpi.o .libs/mpi_sizeof.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/users/jsquyres/svn/ompi/ompi/.libs -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/users/jsquyres/svn/ompi/orte/.libs -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/users/jsquyres/svn/ompi/opal/.libs -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/home/jsquyres/bogus/lib -L/users/jsquyres/svn/ompi/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -L/users/jsquyres/svn/ompi/opal/.libs ../../../ompi/.libs/libmpi.so 
</span><br>
<span class="quotelev1">&gt; /users/jsquyres/svn/ompi/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev1">&gt; /users/jsquyres/svn/ompi/opal/.libs/libopen-pal.so -ldl -lnsl -lutil 
</span><br>
<span class="quotelev1">&gt; -lm    -pthread -Wl,-soname -Wl,libmpi_f90.so.0 -o 
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the addition of -pthread, which then causes the problem.  I 
</span><br>
<span class="quotelev1">&gt; *suspect* that this is because the f90 library is linking against 
</span><br>
<span class="quotelev1">&gt; libmpi, libopen-rte, and libopen-pal (OMPI internal libraries) that were 
</span><br>
<span class="quotelev1">&gt; built with -pthread (i.e., Libtool picks up these flags automatically).  
</span><br>
<span class="quotelev1">&gt; This should probably be reported to the Libtool developers, but I'm not 
</span><br>
<span class="quotelev1">&gt; 100% sure they can fix it -- I believe that they assume that the linker 
</span><br>
<span class="quotelev1">&gt; flags used for one language can be used in any language (compiler/linker).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can think of two workarounds for you (one significantly less icky than 
</span><br>
<span class="quotelev1">&gt; the other):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Use pgcc, pgCC, pgf77, and pgf90 to build Open MPI.  If you have no 
</span><br>
<span class="quotelev1">&gt; C++ MPI code, the resulting Open MPI build *should* be compatible with 
</span><br>
<span class="quotelev1">&gt; your C + Fortran code.
</span><br>
<p>Yes, this one, using only PGI compilers, was built already.
<br>
<p>Our concern is that some codes seem to rely on gcc as the underlying
<br>
C compiler.
<br>
Hence the need for the hybrid libraries.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Instead of using the &quot;real&quot; pgf77/pgf90, put pgf77/pgf90 scripts 
</span><br>
<span class="quotelev1">&gt; early in your PATH that simply strip out -pthread from the argv and then 
</span><br>
<span class="quotelev1">&gt; invoke the real/underlying pgf77/pgf90 compilers.  This is pretty icky, 
</span><br>
<span class="quotelev1">&gt; but it should work...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Here is the &quot;fake pgf90&quot; script:
<br>
<p>#! /bin/bash
<br>
newargs=`echo $@ | sed s/-pthread//g -`
<br>
echo &quot;/real/path/to/bin/pgf90  $newargs&quot;
<br>
/real/path/to/bin/pgf90  $newargs
<br>
exit
<br>
<p>Then I changed the path to get this script ahead of the real pgf90,
<br>
did make distclean, removed old subdirectories,
<br>
configured again, did make again ... and ...
<br>
<p>It works!
<br>
Ugly, but functional!  :)
<br>
While a final fix for the configure/libtool issue is in the works,
<br>
this is fine.
<br>
Many thanks.
<br>
<p>Question:
<br>
<p>The output of ompi_info --config shows that the absolute path to the
<br>
&quot;fake pgf90&quot; script was recorded by OpenMPI.
<br>
<p>Will OpenMPI mpif90 hardwire this absolute path, or will it
<br>
search the user $PATH variable for the real mpif90 first?
<br>
<p>Thank you again.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2009, at 11:21 AM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff, list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff: Thank you for getting back to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) MPI-F90 features
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I most likely need the F90 bindings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The majority of the climate/ocean/atmosphere programs
</span><br>
<span class="quotelev2">&gt;&gt; are written in F90.
</span><br>
<span class="quotelev2">&gt;&gt; I've been using mpif90 to build these codes for a while
</span><br>
<span class="quotelev2">&gt;&gt; (with OpenMPI and MPICH2).
</span><br>
<span class="quotelev2">&gt;&gt; These are mostly &quot;community&quot; codes from NCAR, national labs, etc,
</span><br>
<span class="quotelev2">&gt;&gt; and some code written in house.
</span><br>
<span class="quotelev2">&gt;&gt; I would have to check these (big) codes in detail to see
</span><br>
<span class="quotelev2">&gt;&gt; if any MPI-F90 features
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. mpi type checking) are really used,
</span><br>
<span class="quotelev2">&gt;&gt; or if they are just doing MPI-F77 old-style calls
</span><br>
<span class="quotelev2">&gt;&gt; (in which case I might be able
</span><br>
<span class="quotelev2">&gt;&gt; to get away with the mpif77 wrapper built on top of pgf90, right?).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if not yet used, sooner or later somebody will
</span><br>
<span class="quotelev2">&gt;&gt; write a module relying on MPI-F90 features,
</span><br>
<span class="quotelev2">&gt;&gt; hence, it would be better to build mpif90.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Configure scripts
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to build two ways.
</span><br>
<span class="quotelev2">&gt;&gt; With machine-specific optimization flags, as on the script below,
</span><br>
<span class="quotelev2">&gt;&gt; and without any optimization (other than what OpenMPI sets internally).
</span><br>
<span class="quotelev2">&gt;&gt; Both builds fail the same way, at the same point,
</span><br>
<span class="quotelev2">&gt;&gt; as I described before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the &quot;optimized&quot; script:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (The &quot;on-optimized&quot; just comments out
</span><br>
<span class="quotelev2">&gt;&gt; the commands to export of CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #! /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; export MYINSTALLDIR=/somehwere/in/the/file/system
</span><br>
<span class="quotelev2">&gt;&gt; ####################################################
</span><br>
<span class="quotelev2">&gt;&gt; export CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt; export CXX=g++
</span><br>
<span class="quotelev2">&gt;&gt; export F77=pgf90
</span><br>
<span class="quotelev2">&gt;&gt; export FC=${F77}
</span><br>
<span class="quotelev2">&gt;&gt; # Note: Optimization flags for AMD Opteron &quot;Shanghai&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export CFLAGS='-march=amdfam10 -O3 -finline-functions -funroll-loops
</span><br>
<span class="quotelev2">&gt;&gt; -mfpmath=sse'
</span><br>
<span class="quotelev2">&gt;&gt; export CXXFLAGS=${CFLAGS}
</span><br>
<span class="quotelev2">&gt;&gt; export FFLAGS='-tp shanghai-64 -fast -Mfprelaxed'
</span><br>
<span class="quotelev2">&gt;&gt; export FCFLAGS=${FFLAGS}
</span><br>
<span class="quotelev2">&gt;&gt; ####################################################
</span><br>
<span class="quotelev2">&gt;&gt; ../configure \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=${MYINSTALLDIR} \
</span><br>
<span class="quotelev2">&gt;&gt; --with-libnuma=/usr/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/usr/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib=/usr/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt; 2&gt;&amp;1 | tee configure.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) &quot;-pthread&quot; flag when building libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am confused by why the &quot;-phtread&quot; flag, which was absent
</span><br>
<span class="quotelev2">&gt;&gt; when building libmpi_f90.so.0.0.0 on 1.2.8 (successful build),
</span><br>
<span class="quotelev2">&gt;&gt; appears on the same spot on 1.3, causing the build to fail.
</span><br>
<span class="quotelev2">&gt;&gt; The build scripts are the same, the computer is the same,
</span><br>
<span class="quotelev2">&gt;&gt; etc, only the OpenMPI release varies.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way around?
</span><br>
<span class="quotelev2">&gt;&gt; E.g., not using pthreads there,
</span><br>
<span class="quotelev2">&gt;&gt; if not essential, or perhaps helping PGI to find the library
</span><br>
<span class="quotelev2">&gt;&gt; and link to it, if it is indeed required there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you again,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can you send your exact configure command line?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Also, do you need the F90 MPI bindings?  If not, you can disable them
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with the following:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    --disable-mpi-f90
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mar 27, 2009, at 9:50 AM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Dear OpenMPI pros.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I've got no answer, so let me try again.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I can't build OpenMPI 1.3 with a hybrid pgf90+gcc/g++ compiler set.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; However, OpenMPI 1.2.8 builds correctly with the same compilers,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; on the same computer (Linux x86_64 cluster), and same environment.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; See details in my original message below.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The OpenMPI 1.3 build fails due to the (gcc) &quot;-pthread&quot; flag being
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; rejected by pgf90 during the libtool
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; link phase of libmpi_f90.so.0.0.0.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Since this flag was not present on the same spot on OMPI 1.2.8,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I wonder if the &quot;-pthread&quot; flag is really needed at that point,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; or if inadvertently sneaked in the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; OMPI 1.3 Makefiles and configure script.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; These hybrid compiler builds of MPI often mean the difference
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; between being able to compile and run the very large
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; climate/ocean/atmosphere codes
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; which are at the core of our research mission here.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; To my knowledge, this is not a unique situation,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; and other people in our research field also need and use these
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; libraries built on &quot;Gnu+commercial Fortran&quot; compilers.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; For this reason I keep a variety of OpenMPI, MPICH2, MVAPICH2
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; builds, and I try to stay current with the newest releases.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Any help is much appreciated.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Dear OpenMPI experts
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Against all odds and the OpenMPI developer's and FAQ recommendation,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I've been building hybrid OpenMPI libraries using Gnu
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; gcc/g++ and Fortran compilers from PGI and from Intel.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; One reason for this is that some climate/oceans/atmosphere
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; code we use compiles and runs with less hassle this way.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; (I also build &quot;thoroughbred&quot; Gnu/gfortran, PGI, and
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Intel libraries.)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Anyway, all was fine up to OpenMPI 1.2.8, of which I have functional
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Gnu(C/C++)+PGI(F77/F90) and Gnu(C/C++)+Intel(F77/F90) libraries.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; However, when I tried to compile the Gnu(C/C++)+PGI(F77/F90).
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; version of OpenMPI 1.3 (I haven't got to 1.3.1 yet),
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I've got an error during the make phase (see snippet below).
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; The error seems to be caused by the insertion of the &quot;-pthread&quot;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; compiler flag on the build of libmpi_f90.so.0.0.0.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Some change in the configure script may perhaps
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; have allowed this extra flag to sneak in?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; The flag was not present on the same spot in the OpenMPI 1.2.8 
</span><br>
<span class="quotelev2">&gt;&gt; build,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; as I checked in the make log of 1.2.8.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; It is a Gnu/gcc flag, not recognized by PGI/pgf90.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; For now I can live with 1.2.8, but I wonder if this problem can
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; be fixed somehow, so that I can stay up to date with the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; OpenMPI releases.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; More info:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; (The same configuration was used for both OpenMPI 1.3 and 1.2.8.)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; 1. AMD Opteron Shanghai (dual socket, quad core)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; 2. Linux kernel 2.6.18-92.1.22.el5 #1 SMP (CentOS 5.2)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; 3. PGI 8.0.4
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; 4. Gnu/GCC 4.1.2
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Error message from &quot;make&quot;:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; .libs/mpi_waitall_f90.o
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; -Wl,-rpath
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/ompi/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; -Wl,-rpath
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; -Wl,-rpath -Wl,/usr/lib64 -Wl,-rpath
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; -Wl,-rpath -Wl,/home/sw/openmpi/openmpi-1.3-gnu-4.1.2-pgi-8.0-4/lib
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; -Wl,-rpath -Wl,/usr/lib64
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; ../../../ompi/.libs/libmpi.so -L/usr/lib64/lib -L/usr/lib64 -lrdmacm
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; -libverbs
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; /usr/lib64/libtorque.so
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; -lnuma -ldl -lnsl -lutil -lm    -pthread -Wl,-soname
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -Wl,libmpi_f90.so.0
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8688.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8686.php">Bogdan Costescu: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8668.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8724.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8724.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
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
