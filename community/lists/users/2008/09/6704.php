<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 13:34:39 2008" -->
<!-- isoreceived="20080923173439" -->
<!-- sent="Tue, 23 Sep 2008 13:34:27 -0400" -->
<!-- isosent="20080923173427" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48D928A3.60102_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48535380809222003u78896d0ana852b3bf74c58e71_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-23 13:34:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Previous message:</strong> <a href="6703.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6691.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6707.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>Reply:</strong> <a href="6707.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian and list
<br>
<p>Terry Frankcombe is right on the spot on that recommendation to you.
<br>
<p>Just to support Terry's suggestion, here is what  &quot;Fortran 95/2003 
<br>
Explained&quot;, by Michael Metcalf,
<br>
John Reid, and Malcolm Cohen, Oxford Univ. Press, 2004, pp. 144, Section 
<br>
7.10, says about it:
<br>
<p>&quot;Any 'use' statements must precede other specification statements in a 
<br>
scoping unit.&quot;
<br>
<p>Fortran 90/95/2003 scoping rules are a pain,
<br>
written on a legalistic-forensic style, but this one at least is easy to 
<br>
remember! :)
<br>
<p>BTW, &quot;scope&quot; corresponds to the location and accessibility of a variable 
<br>
or another Fortran entity
<br>
on a programming unit.
<br>
I.e., to be accessed by a programming unit, the entity must be &quot;visible&quot; 
<br>
there,
<br>
even if it is declared somewhere else.
<br>
&quot;Scope&quot; is not related to the program unit source form (i.e. not to free 
<br>
vs. fixed form),
<br>
which may have been part of the confusion on our conversation.
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Brian Harker wrote:
&gt;Ahhhhhhh, now that makes sense.  Never included, always used.  Thanks!
&gt;
&gt;On Mon, Sep 22, 2008 at 8:55 PM, Terry Frankcombe &lt;terry_at_[hidden]&gt; wrote:
&gt;  
&gt;
&gt;&gt;Remember what include does:  it essentially dumps mpif.h into the
&gt;&gt;source.  So to be proper F90 you need:
&gt;&gt;
&gt;&gt;PROGRAM main
&gt;&gt;USE local_module
&gt;&gt;IMPLICT NONE
&gt;&gt;INCLUDE 'mpif.h'
&gt;&gt;...
&gt;&gt;
&gt;&gt;
&gt;&gt;On Mon, 2008-09-22 at 20:17 -0600, Brian Harker wrote:
&gt;&gt;    
&gt;&gt;
&gt;&gt;&gt;Well, I'm stumped then...my top-level program is the only one that
&gt;&gt;&gt;uses MPI interfaces.  I USE other f90 module files, but none of them
&gt;&gt;&gt;are dependent on MPI functions.  For example here's the first few
&gt;&gt;&gt;lines of code where things act up:
&gt;&gt;&gt;
&gt;&gt;&gt;PROGRAM main
&gt;&gt;&gt;INCLUDE 'mpif.h'      (this line used to be &quot;USE mpi&quot;...this is
&gt;&gt;&gt;correct replacement, right?)
&gt;&gt;&gt;USE local_module
&gt;&gt;&gt;IMPLICIT NONE
&gt;&gt;&gt;...
&gt;&gt;&gt;STOP
&gt;&gt;&gt;END PROGRAM main
&gt;&gt;&gt;
&gt;&gt;&gt;with local_module.f90:
&gt;&gt;&gt;
&gt;&gt;&gt;MODULE local_module
&gt;&gt;&gt;CONTAINS
&gt;&gt;&gt;
&gt;&gt;&gt;SUBROUTINE local_subroutine
&gt;&gt;&gt;IMPLICIT NONE
&gt;&gt;&gt;...
&gt;&gt;&gt;RETURN
&gt;&gt;&gt;END SUBROUTINE local_subroutine
&gt;&gt;&gt;
&gt;&gt;&gt;END MODULE local_module
&gt;&gt;&gt;
&gt;&gt;&gt;and mpif90 gives me grief about local_module being out of scope within
&gt;&gt;&gt;main.  To the best of my knowledge, I have never used fixed-form or
&gt;&gt;&gt;had free-vs-fixed form compiler issues with ifort.  Thanks!
&gt;&gt;&gt;
&gt;&gt;&gt;On Mon, Sep 22, 2008 at 7:56 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Hi Brian and list
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;On my code I have
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     include 'mpif.h'
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;with single quotes around the file name.
&gt;&gt;&gt;&gt;I use single quotes, but double quotes are also possible according to the
&gt;&gt;&gt;&gt;F90 standard.
&gt;&gt;&gt;&gt;If you start at column 7 and end at column 72,
&gt;&gt;&gt;&gt;you avoid any problems with free vs. fixed Fortran form (which may happen if
&gt;&gt;&gt;&gt;one decides
&gt;&gt;&gt;&gt;to mess the compiler options on Makefiles, for instance).
&gt;&gt;&gt;&gt;This is PDP, paranoid defensive programming.
&gt;&gt;&gt;&gt;I type the Fortran commands in lowercase (include) but this may not really
&gt;&gt;&gt;&gt;make any difference
&gt;&gt;&gt;&gt;(although there are compiler options to transliterate upper to lower, be/not
&gt;&gt;&gt;&gt;be case sensitive, etc)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;However, since you asked, I changed the &quot;include 'mpif.h'&quot; location to
&gt;&gt;&gt;&gt;column 1, column 6,
&gt;&gt;&gt;&gt;etc, and I could compile the code with OpenMPI mpif90 without any problems.
&gt;&gt;&gt;&gt;Hence, I presume mpif90 uses the free form as default.
&gt;&gt;&gt;&gt;So, I wonder if you still have some residual mix of gfortran and ifort
&gt;&gt;&gt;&gt;there,
&gt;&gt;&gt;&gt;or if there is some funny configuration on your ifort.cfg file choosing the
&gt;&gt;&gt;&gt;fixed form as a default.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;In any case, going out of scope probably has nothing to do with fixed vs
&gt;&gt;&gt;&gt;free form.
&gt;&gt;&gt;&gt;I only have one &quot;use mpi&quot; statement, no other modules &quot;used&quot; in the little
&gt;&gt;&gt;&gt;hello_f90.
&gt;&gt;&gt;&gt;It may well be that if you try other &quot;use&quot;  statements, particularly if the
&gt;&gt;&gt;&gt;respective modules
&gt;&gt;&gt;&gt;involve other MPI modules or MPI function interfaces, things may break and
&gt;&gt;&gt;&gt;be out of scope.
&gt;&gt;&gt;&gt;I presume you are not talking of hello_f90 anymore, but of a larger code.
&gt;&gt;&gt;&gt;The large code examples I have here use other F90 modules (not mpi.mod),
&gt;&gt;&gt;&gt;but they don't rely on MPI interfaces.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Glad to know that the main problem is gone (I read the more recent
&gt;&gt;&gt;&gt;messages).
&gt;&gt;&gt;&gt;I was reluctant to tell you to do a &quot;make distclean&quot;, and start fresh,
&gt;&gt;&gt;&gt;configure again, make again,
&gt;&gt;&gt;&gt;because you said you had built the OpenMPI library more than once.
&gt;&gt;&gt;&gt;Now I think that was exactly what I should have told you to do.
&gt;&gt;&gt;&gt;Everybody builds these things many times to get them right.
&gt;&gt;&gt;&gt;Then a few more times to make it efficient, to optimize, etc.
&gt;&gt;&gt;&gt;Can you imagine how many times Rutherford set up that gold foil experiment
&gt;&gt;&gt;&gt;until he got it right?  :)
&gt;&gt;&gt;&gt;After it is done, the past errors become trivial, and all the rest is
&gt;&gt;&gt;&gt;reduced just to stamp collecting.  :)
&gt;&gt;&gt;&gt;Configure is always complex, and dumping its output to a log file is
&gt;&gt;&gt;&gt;worth the effort, to check out for sticky problems like this, which often
&gt;&gt;&gt;&gt;happen.
&gt;&gt;&gt;&gt;(Likewise for make and make install.)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;I hope this helps,
&gt;&gt;&gt;&gt;Gus Correa
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
&gt;&gt;&gt;&gt;Lamont-Doherty Earth Observatory - Columbia University
&gt;&gt;&gt;&gt;P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Brian Harker wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;        
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Hi Gus-
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Thanks for the idea.  One question: how do you position INCLUDE
&gt;&gt;&gt;&gt;&gt;statements in a fortran program, because if I just straight substitute
&gt;&gt;&gt;&gt;&gt;' INCLUDE &quot;mpif.h&quot; ' for ' USE mpi ', I get a lot of crap telling me
&gt;&gt;&gt;&gt;&gt;my other USE statements are not positioned correctly within the scope
&gt;&gt;&gt;&gt;&gt;and nothing compiles.  I have tried various positions, but I seem to
&gt;&gt;&gt;&gt;&gt;be suffering from a lot of BS.  Am I overlooking something very
&gt;&gt;&gt;&gt;&gt;obvious?
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;On Mon, Sep 22, 2008 at 5:42 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;          
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Hi Brian and list
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;I seldom used the &quot;use mpi&quot; syntax before.
&gt;&gt;&gt;&gt;&gt;&gt;I have a lot of code here written in Fortran 90,
&gt;&gt;&gt;&gt;&gt;&gt;but and mpif.h is included instead &quot;use mpi&quot;.
&gt;&gt;&gt;&gt;&gt;&gt;The MPI function calls are the same in Fortran 77 and Fortran 90 syntax,
&gt;&gt;&gt;&gt;&gt;&gt;hence there is just one line of code to change, if one wants to go fully
&gt;&gt;&gt;&gt;&gt;&gt;F90.
&gt;&gt;&gt;&gt;&gt;&gt;All works well, though.
&gt;&gt;&gt;&gt;&gt;&gt;This style is a legacy from the times when the Fortran90 interface of MPI
&gt;&gt;&gt;&gt;&gt;&gt;was not fully developed,
&gt;&gt;&gt;&gt;&gt;&gt;and the mpi.mod was broken most of the time.
&gt;&gt;&gt;&gt;&gt;&gt;That is no longer the case, though.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;This mixed mode may be one way around your problem, although not ideal.
&gt;&gt;&gt;&gt;&gt;&gt;The main drawback of using the &quot;include mpif.h&quot; syntax
&gt;&gt;&gt;&gt;&gt;&gt;is that there is no parameter checking of the MPI function calls,
&gt;&gt;&gt;&gt;&gt;&gt;whereas the &quot;use mpi&quot; syntax provide some level of parameter checking
&gt;&gt;&gt;&gt;&gt;&gt;through the mpi.mod module.
&gt;&gt;&gt;&gt;&gt;&gt;If you are careful when you write your MPI calls,
&gt;&gt;&gt;&gt;&gt;&gt;and check if all parameters match the syntax requirements strictly,
&gt;&gt;&gt;&gt;&gt;&gt;this shouldn't be a problem, though.
&gt;&gt;&gt;&gt;&gt;&gt;(Nevertheless, a few days ago somebody was suffering here on the list
&gt;&gt;&gt;&gt;&gt;&gt;with a
&gt;&gt;&gt;&gt;&gt;&gt;problem that was just
&gt;&gt;&gt;&gt;&gt;&gt;a missing &quot;ierr&quot; parameter in an MPI_Send call.   Jeff found it out,
&gt;&gt;&gt;&gt;&gt;&gt;after
&gt;&gt;&gt;&gt;&gt;&gt;several emails back and forth.)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;If not for anything else, just for the fun of it, to see how far the
&gt;&gt;&gt;&gt;&gt;&gt;compilation goes,
&gt;&gt;&gt;&gt;&gt;&gt;I would comment out &quot;use mpi&quot; and replace it by &quot;include mpif.h&quot;.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;As for architecture and compiler, I have used with no problem OpenMPI
&gt;&gt;&gt;&gt;&gt;&gt; (and
&gt;&gt;&gt;&gt;&gt;&gt;MPICH2 and MPICH-1) on various
&gt;&gt;&gt;&gt;&gt;&gt;x86 and x86_64 machines, both AMD and Intel, under different Linux
&gt;&gt;&gt;&gt;&gt;&gt;flavors
&gt;&gt;&gt;&gt;&gt;&gt;(Fedora, CentOS, Red Hat),
&gt;&gt;&gt;&gt;&gt;&gt;in standalone machines (using SMP and shared memory),
&gt;&gt;&gt;&gt;&gt;&gt;and on a small cluster using Ethernet 100T , then using  Gigabit
&gt;&gt;&gt;&gt;&gt;&gt;Ethernet,
&gt;&gt;&gt;&gt;&gt;&gt;compiling it with gcc and ifort and with gcc and pgf90.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Note that I don't have icc, I use gcc and g++.
&gt;&gt;&gt;&gt;&gt;&gt;Are the icc and ifort versions that you have the same?
&gt;&gt;&gt;&gt;&gt;&gt;I don't know if different versions may not mix well, but it is a
&gt;&gt;&gt;&gt;&gt;&gt;possibility.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;I tried to reproduce your problem by writing a simple hello_f90.f90
&gt;&gt;&gt;&gt;&gt;&gt;program,
&gt;&gt;&gt;&gt;&gt;&gt;with the &quot;use mpi&quot; syntax,
&gt;&gt;&gt;&gt;&gt;&gt;and compiling it with the OpenMPI mpif90.
&gt;&gt;&gt;&gt;&gt;&gt;However, the program compiled without any problem,
&gt;&gt;&gt;&gt;&gt;&gt;and I didn't need to point to the mpi.mod directory using the &quot;-module&quot;
&gt;&gt;&gt;&gt;&gt;&gt;flag
&gt;&gt;&gt;&gt;&gt;&gt;either,
&gt;&gt;&gt;&gt;&gt;&gt;despite my having a &quot;gfortran-openmpi&quot; version of mpi.mod in
&gt;&gt;&gt;&gt;&gt;&gt;/usr/lib/openmpi/.
&gt;&gt;&gt;&gt;&gt;&gt;The program runs fine too, with  2 processes, 4 processes, etc.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;On your first message on this thread, your configure command declares
&gt;&gt;&gt;&gt;&gt;&gt;environment
&gt;&gt;&gt;&gt;&gt;&gt;variables for CC, CXX, F77, and FC without full paths.
&gt;&gt;&gt;&gt;&gt;&gt;I wonder if there is any chance that there are multiple versions of Intel
&gt;&gt;&gt;&gt;&gt;&gt;compilers on your
&gt;&gt;&gt;&gt;&gt;&gt;system, that somehow may be the cause for the confusion (perhaps as early
&gt;&gt;&gt;&gt;&gt;&gt;as
&gt;&gt;&gt;&gt;&gt;&gt;the build time).
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Also, note that mpi.mod is not an include file.
&gt;&gt;&gt;&gt;&gt;&gt;It is located in the lib directory of openmpi.
&gt;&gt;&gt;&gt;&gt;&gt;There was some confusion about this before, with a discussion about &quot;-I&quot;
&gt;&gt;&gt;&gt;&gt;&gt;directories, etc,
&gt;&gt;&gt;&gt;&gt;&gt;but hopefully this was clarified already.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Another thing to check is if there is any funny compiler configuration
&gt;&gt;&gt;&gt;&gt;&gt;(say
&gt;&gt;&gt;&gt;&gt;&gt;in /opt/intel/fc/bla/bla/ifort.cfg).
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Yet another thing I would look at are the logs for OpenMPI configure,
&gt;&gt;&gt;&gt;&gt;&gt;make,
&gt;&gt;&gt;&gt;&gt;&gt;and make install,
&gt;&gt;&gt;&gt;&gt;&gt;if you saved them, to see if the Fortran90 interface was built to
&gt;&gt;&gt;&gt;&gt;&gt;completion.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Also, a suggestion is to compile with the verbose &quot;-v&quot; option, to see if
&gt;&gt;&gt;&gt;&gt;&gt;it
&gt;&gt;&gt;&gt;&gt;&gt;spits out some
&gt;&gt;&gt;&gt;&gt;&gt;clue to what is going on.
&gt;&gt;&gt;&gt;&gt;&gt;I hope this helps.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Gus Correa
&gt;&gt;&gt;&gt;&gt;&gt;(from the stamp-collecting side of science :) )
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;Lamont-Doherty Earth Observatory - Columbia University
&gt;&gt;&gt;&gt;&gt;&gt;P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Brian Harker wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hi guys-
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;Still no dice.  The only mpi.mod files I have are the ones generated
&gt;&gt;&gt;&gt;&gt;&gt;&gt;from my compile and build from source (and they are where they should
&gt;&gt;&gt;&gt;&gt;&gt;&gt;be), so there's definitely no confusion amongst the modules.  And
&gt;&gt;&gt;&gt;&gt;&gt;&gt;specifying the fulls path to the correct mpi.mod module (like Gus
&gt;&gt;&gt;&gt;&gt;&gt;&gt;suggested with the -module option) gives no change.  I am running out
&gt;&gt;&gt;&gt;&gt;&gt;&gt;of ideas and patience, as I'm sure you all are too!  Perhaps openMPI
&gt;&gt;&gt;&gt;&gt;&gt;&gt;just doesn't play nice with my compiler suite and hardware
&gt;&gt;&gt;&gt;&gt;&gt;&gt;architecture...?  Thanks for all the input!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Mon, Sep 22, 2008 at 11:27 AM, Gus Correa &lt;gus_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hi Brian and list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I read your original posting and Jeff's answers.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Here on CentOS from Rocks Cluster I have a &quot;native&quot; OpenMPI, with a
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;mpi.mod,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;compiled with gfortran.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Note that I don't even have gfortran installed!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;This is besides the MPI versions (MPICH2 and OpenMPI)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I installed from scratch using combinations of ifort and pgi with gcc.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;It may be that mpif90 is not picking the right mpi.mod, as Jeff
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;suggested.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Something like this may be part of your problem.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;A &quot;locate mpi.mod&quot; should show what your system has.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Have you tried to force the directory where mpi.mod is searched for?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Something like this:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;/full/path/to/openmpi/bin/mpif90  -module
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;/full/path/to/openmpi_mpi.mod_directory/   hello_f90.f90
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;The ifort man pages has the &quot;-module&quot; syntax details.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I hope this helps.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Gus Correa
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Lamont-Doherty Earth Observatory - Columbia University
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Brian Harker wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hi Gus-
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Thanks for the input.  I have been using full path names to both the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;wrapper compilers and mpiexec from the first day I had two MPI
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;implementations on my machine, depending on if I want to use MPICH or
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;openMPI, but still the problem remains.  ARGGGGGG!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Mon, Sep 22, 2008 at 9:40 AM, Gus Correa &lt;gus_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hello Brian and list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;My confusing experiences with multiple MPI implementations
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;were fixed the day I decided to use full path names to the MPI
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;compiler
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;wrappers (mpicc, mpif77, etc) at compile time,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;and to the MPI job launcher (mpirun, mpiexec, and so on) at run time,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;and to do this in a consistent fashion (using the tools from the same
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;install to compile and to run the programs).
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Most Linux distributions come with built in MPI implementations
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;(often
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;times
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;more than one),
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;and so do commercial compilers and other tools.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;You end up with a mess of different MPI versions on your &quot;native&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;PATH,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;as well as variety of bin, lib, and include directories containing
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;different
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;MPI stuff.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;The easy way around is to use full path names, particularly if you
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;install
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;yet another MPI implementation
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;from scratch.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Another way is to fix your PATH on your initialization files (.cshrc,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;etc)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;to point to your preferred implementation (put the appropriate bin
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;directory
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;ahead of everything else).
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Yet another is to install the &quot;environment modules&quot; package on your
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;system
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;and use it consistently.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;My two cents.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Gus Correa
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Lamont-Doherty Earth Observatory - Columbia University
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Brian Harker wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                    
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I built and installed both MPICH2 and openMPI from source, so no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;distribution packages or anything.  MPICH2 has the modules located
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;in
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;/usr/local/include, which I assume would be found (since its in my
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;path), were it not for specifying -I$OPENMPI_HOME/lib at compile
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;time,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;right?  I can't imagine that if you tell it where to look for the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;correct modules, it would search through your path first before
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;going
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;to where you tell it to go.  Or am I too optimistic?  Thanks again
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;for
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;the input!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                      
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                        
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Thanks for the reply...crap, $HOME/openmpi/lib does contains all
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;various lilbmpi* files as well as mpi.mod,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;That should be correct.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                        
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;but still get the same
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;error at compile-time.  Yes, I made sure to specifically build
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;openMPI
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;with ifort 10.1.012, and did run the --showme command right after
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;installation to make sure the wrapper compiler was using ifort as
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;well.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Ok, good.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                        
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Before posting to this mailing list, I did uninstall and
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;re-install
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;openMPI several times to make sure I had a clean install.  Still
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;luck.  :(
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Ok.  Have you checked around your machine to ensure that there is
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;other
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;mpi.mod that the compiler is finding first?  E.g., in your MPICH2
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;installation?  Or is Open MPI installed by your distro, perchance?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;You
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;distro's
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;equivalent is to check already-installed packages).
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Jeff Squyres
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Cisco Systems
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                        
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                      
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                    
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;          
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;        
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;_______________________________________________
&gt;&gt;users mailing list
&gt;&gt;users_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;    
&gt;&gt;
&gt;
&gt;
&gt;
&gt;  
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Previous message:</strong> <a href="6703.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6691.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6707.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>Reply:</strong> <a href="6707.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
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
