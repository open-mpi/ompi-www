<?
$subject_val = "Re: [OMPI users] Mac Ifort and gfortran together";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 14:28:23 2011" -->
<!-- isoreceived="20110314182823" -->
<!-- sent="Mon, 14 Mar 2011 14:28:14 -0400" -->
<!-- isosent="20110314182814" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac Ifort and gfortran together" -->
<!-- id="4D7E5E3E.1020401_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Mac Ifort and gfortran together" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac Ifort and gfortran together<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-14 14:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15856.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15854.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14912.php">David Robertson: "[OMPI users] Mac Ifort and gfortran together"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Sorry for the long Layoff on this but I have been dealing with other 
<br>
issues. I'll report what I've learned then answer Jeff's questions. 
<br>
First of all Doug Reeder is correct in saying the Apple supplied Open 
<br>
MPI is conflicting. Furthermore, it conflicts with both shared and 
<br>
static libraries.
<br>
<p>&nbsp;From ld man page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By default the -lx and -weak-lx options first search for a file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the form `libx.dylib' in each directory in the library search
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;path, then a file of the form `libx.a' is searched for in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;library search paths.
<br>
<p>This fact is the reason for my compile and/or runtime time errors with 
<br>
static libraries and the need to add my Open MPI lib directory to the 
<br>
DYLD_LIBRARY_PATH to avoid freezes with dynamic libraries. The shared 
<br>
case is obvious because clearly you want you executable to load the MPI 
<br>
libraries you compiled and not the ones that ship with Mac.
<br>
<p>The static failures are more telling. Near the end of the Open MPI 
<br>
configure script, the *-wrapper-data.txt files are created. Even if you 
<br>
tell Open MPI you only want static libraries (--disable-shared 
<br>
--enable-static), the libs variable in these files still use the -lx form.
<br>
<p>For shared libraries this isn't an issue at compile time because the 
<br>
wrapper makes sure your shared libraries are found first via the -L 
<br>
option. At runtime, however,  you still need your compiled Open MPI lib 
<br>
path set in DYLD_LIBRARY_PATH.
<br>
<p>However, if you have compiled static only libraries it doesn't matter 
<br>
where in the search path you put your compiled lib directory it will 
<br>
pick up the system's libmpi.dylib before it finds your libmpi.a at 
<br>
compile time. This can result in undefined references with some 
<br>
compilers. Even without undefined reference errors you have still linked 
<br>
in the wrong symbols leading to runtime freezes. Note that libmpi_f90.a 
<br>
and libmpi_f77.a are unaffected because Mac OS X 10.6 does not ship its 
<br>
Open MPI with Fortran libs.
<br>
<p>I have found 2 solutions to this. one is to replace the -lx occurrences 
<br>
in share/openmpi/*-wrapper-data.txt with the full paths to the static 
<br>
libraries. i.e. changing:
<br>
<p><p>libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -lutil
<br>
<p>to:
<br>
<p>libs=/path/to/openmpi/lib/libmpi_f90.a /path/to/openmpi/lib/libmpi_f77.a 
<br>
/path/to/openmpi/lib/libmpi.a /path/to/openmpi/lib/libopen-rte.a 
<br>
/path/to/openmpi/lib/libopen-pal.a -lutil
<br>
<p><p>The second solution is to set linker flags for my application builds to 
<br>
'-search_paths_first'. This will force ld to search each path for .dylib 
<br>
and .a files before moving on to the next path in the search order. I 
<br>
don't know how many linkers will listen to this flag though.
<br>
<p>I would think having configure use full paths when static only libraries 
<br>
are built would be the best solution, but perhaps their is some other 
<br>
intricacy that will not allow this.
<br>
<p>Now to answer Jeff's Questions:
<br>
<p>---- Quote ----
<br>
Hello,
<br>
<p>You may me bumping into conflicts between the apple supplied ompi and 
<br>
your mpi. I use modules to force my mpi to the front of the PATH and 
<br>
DYLD_LIBRARY_PATH variables.
<br>
<p>Doug Reeder
<br>
On Dec 15, 2010, at 5:22 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the ginormous delay in replying here; I blame SC'10,
</span><br>
Thanksgiving, and the MPI Forum meeting last week...
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 29, 2010, at 2:12 PM, David Robertson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm noticing a strange problem with Open MPI 1.4.2 on Mac OS X 10.6.
</span><br>
We use both Intel Ifort 11.1 and gfortran 4.3 on the same machine and 
<br>
switch between them to test and debug code.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had runtime problems when I compiled openmpi in my usual way of no
</span><br>
shared libraries so I switched to shared and it runs now.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What problems did you have? OMPI should work fine when compiled
</span><br>
statically.
<br>
<p>As described above the problem turned out to be that the system supplied 
<br>
shared libraries were getting mixed with the Fortran libraries I 
<br>
compiled and caused the MPI to hang close to initialization.
<br>
<p><span class="quotelev2">&gt;&gt; However, in order for it to work with ifort I ended up needing to
</span><br>
add the location of my intel compiled Open MPI libraries 
<br>
(/opt/intelsoft/openmpi/lib) to my DYLD_LIBRARY_PATH environment 
<br>
variable to to get codes to compile and/or run with ifort.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this what Intel recommends for anything compiled with ifort on OS
</span><br>
X, or is this unique to OMPI-compiled MPI applications?
<br>
<p>Exclusive to OMPI-compiled apps as far as I know.
<br>
<p><span class="quotelev2">&gt;&gt; The problem is that adding /opt/intelsoft/openmpi/lib to
</span><br>
DYLD_LIBRARY_PATH broke my Open MPI for gfortran. Now when I try to 
<br>
compile with mpif90 for gfortran it thinks it's actually trying to 
<br>
compile with ifort still. As soon as I take the above path out of 
<br>
DYLD_LIBRARY_PATH everything works fine.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, when I run ompi_info everything looks right except prefix. It
</span><br>
says /opt/intelsoft/openmpi rather than /opt/gfortransoft/openmpi like 
<br>
it should. It should be noted that having /opt/intelsoft/openmpi in 
<br>
LD_LIBRARY_PATH does not produce the same effect.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not quite clear on your setup, but it *sounds* like you're
</span><br>
somehow mixing up 2 different installations of OMPI -- one in 
<br>
/opt/intelsoft and the other in /opt/gfortransoft.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you verify that you're using the &quot;right&quot; mpif77 (and friends)
</span><br>
when you intend to, and so on?
<br>
<p>Yes, I am positive that my path and everything was right and I was using 
<br>
the right mpif90. I don't know how ompi_info works but it appears that 
<br>
it reads the wrapper executable and/or executes a which mpif90 etc. to 
<br>
get the names of compilers and full paths. However, it seems to use the 
<br>
shared library search path to determine what to report for the &quot;prefix&quot;.
<br>
<p>When I execute the actual wrappers 
<br>
(/opt/gfortransoft/openmpi/bin/mpif90) it uses ifort as the compiler. 
<br>
But, if I take /opt/intelsoft/openmpi/lib out of DYLD_LIBRARY_PATH, 
<br>
/opt/gfortransoft/openmpi/bin/mpif90 uses gfortran as the compiler. 
<br>
Also, with /opt/intelsoft/openmpi/lib removed from DYLD_LIBRARY_PATH 
<br>
ompi_info reports the correct prefix.
<br>
<p>Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15856.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15854.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14912.php">David Robertson: "[OMPI users] Mac Ifort and gfortran together"</a>
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
