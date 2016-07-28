<?
$subject_val = "Re: [OMPI users] compilation problem with ifort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 12:46:14 2014" -->
<!-- isoreceived="20140904164614" -->
<!-- sent="Thu, 04 Sep 2014 12:48:44 -0400" -->
<!-- isosent="20140904164844" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation problem with ifort" -->
<!-- id="540897EC.8090208_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BLU179-W35861B9C07358E44D5CD08EAC50_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation problem with ifort<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-04 12:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25272.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25262.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25274.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25274.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25289.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Elie
<br>
<p>The executable generated in my computer will be useless to you,
<br>
because these days most if not all libraries linked to an executable are
<br>
dynamic/shared libraries.
<br>
You won't have the same in your computer, or the equivalent will be
<br>
located in different places, may be from different versions, etc.
<br>
(E.g. your Intel compiler libraries will be from a different version,
<br>
in a different location, and likewise for OpenMPI libraries etc.)
<br>
Take any executable that you may have in your computer and do &quot;ldd 
<br>
exectuable_name&quot; to see the list of shared libraries.
<br>
<p>The error you reported suggests a misconfiguration of Makefiles,
<br>
or better, a mispositioning of directories.
<br>
<p>**
<br>
<p>First thing I would try is to start fresh.
<br>
Delete or move the old directory trees,
<br>
download everything again on blank directories,
<br>
and do the recipe all over again.
<br>
Leftovers of previous compilations are often a hurdle,
<br>
so you do yourself a favor by starting over from scratch.
<br>
<p>**
<br>
Second *really important* item to check:
<br>
<p>The top directories of QE and EPW *must* follow this hierarchy:
<br>
<p>espresso-4.0.3
<br>
|-- EPW-3.0.0
<br>
<p>Is this what you have?
<br>
The EPW web site just hints this in their recipe step 3.
<br>
The Makefiles will NOT work if this directory hierarchy is incorrect.
<br>
<p>The error you reported in your first email *suggests* that the Makefiles
<br>
in the EPW tarball are not finding the Makefiles in the QE tarball,
<br>
which indicates that the the directories may not have a correct relative 
<br>
location.
<br>
<p>I.e. the EPW top directory must be right under the QE top directory.
<br>
<p>**
<br>
<p>Third thing, is that you have to follow the recipe strictly (and on
<br>
the EPW web site there seems to be typos and omissions):
<br>
<p>1) untar the QE tarball:
<br>
<p>tar -zxf espresso-4.0.3.tar.gz
<br>
<p>2) move the EPW tarball to the QE top directory produced by step 1 
<br>
above, something like this:
<br>
<p>mv EPW-3.0.0.tar.gz espresso-4.0.3
<br>
<p>3) untar the EPW tarball you copied/moved in step 2 above,
<br>
something like this:
<br>
<p>cd espresso-4.0.3
<br>
tar -zxf  EPW-3.0.0.tar.gz
<br>
<p>4) Set up your OpenMPI environment (assuming you are using OpenMPI
<br>
and that it is not installed in a standard location such as /usr/local):
<br>
<p><p>[bash/sh]
<br>
export PATH=/your/openmpi/bin:$PATH
<br>
export LD_LIBRARY_PATH=/your/openmpi/lib:$LD_LIBRARY_PATH
<br>
<p>[tcsh/csh]
<br>
setenv PATH /your/openmpi/bin:$PATH
<br>
setenv LD_LIBRARY_PATH /your/openmpi/lib:$LD_LIBRARY_PATH
<br>
<p>5) configure espresso-4.0.3, i.e, assuming you already are in the
<br>
espresso-4.0.3, do:
<br>
<p>./configure CC=icc F77=ifort
<br>
<p>(assuming you are using Intel compilers, and that you compiled OpenMPI 
<br>
with them, if you did
<br>
not, say, if you used gcc and gfortran, use CC=gcc FC=gfortran instead)
<br>
<p>6) Run &quot;make&quot; on the top EPW directory:
<br>
<p>cd EPW-3.0.0
<br>
make
<br>
<p>When you configure QE it doesn't compile anything.
<br>
It just generates/sets up a bunch of Makefiles in the QE directory tree.
<br>
<p>When you do &quot;make&quot; on the EPW-3.0.0 directory the top Makefile just
<br>
says (cd src; make).
<br>
If you look into the &quot;src&quot; subdirectory you will see that the Makefile
<br>
therein points to library and include directories two levels above,
<br>
which means that they are in the *QE* directory tree:
<br>
<p>*********
<br>
IFLAGS   = -I../../include
<br>
MODFLAGS = -I./ -I../../Modules -I../../iotk/src \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I../../PW -I../../PH -I../../PP
<br>
LIBOBJS  = ../../flib/ptools.a ../../flib/flib.a \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../../clib/clib.a ../../iotk/src/libiotk.a
<br>
W90LIB   = ../../W90/libwannier.a
<br>
**********
<br>
<p>Hence, if your QE directory is not immediately above your EPW directory
<br>
everything will fail, because the EPW Makefile won't be able to find
<br>
the bits and parts of QE that it needs.
<br>
And this is *exactly what the error message in your first email showed*,
<br>
a bunch of object files that were not found.
<br>
<p>***
<br>
<p>Sorry, but I cannot do any better than this.
<br>
I hope this helps,
<br>
Gus Correa
<br>
<p>On 09/03/2014 08:59 PM, Elio Physics wrote:
<br>
<span class="quotelev1">&gt; Ray and Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your help. I followed Gus' steps. I still have the same
</span><br>
<span class="quotelev1">&gt; problem for the compilation (I didnt check the libraries part though!).
</span><br>
<span class="quotelev1">&gt; The executables for quantum espresso work pretty fine. I have got them
</span><br>
<span class="quotelev1">&gt; in espresso-4.0.3/bin:
</span><br>
<span class="quotelev1">&gt; dynmat.x  iotk  iotk_print_kinds.x  iotk.x  matdyn.x  ph.x  pw.x  q2r.x.
</span><br>
<span class="quotelev1">&gt; The problem are the EPW executables and I dont understand why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus do me a favor: can u send me all the EPW executables that you have
</span><br>
<span class="quotelev1">&gt; produced, in the epw.x? I guess this resolves the problem for the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ELIO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Date: Wed, 3 Sep 2014 19:45:32 -0400
</span><br>
<span class="quotelev2">&gt;  &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; Subject: Re: [OMPI users] compilation problem with ifort
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Hi Elio
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; For what it is worth, I followed the instructions on
</span><br>
<span class="quotelev2">&gt;  &gt; the EPW web site, and the program compiled flawlessly.
</span><br>
<span class="quotelev2">&gt;  &gt; Sorry, I don't know how to use/run it,
</span><br>
<span class="quotelev2">&gt;  &gt; don't have the time to learn it, and won't even try.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; **
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; 1) Environment:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; If your MPI/OpenMPI is not installed in a standard location,
</span><br>
<span class="quotelev2">&gt;  &gt; you need to setup these environment variables:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; [bash/sh]
</span><br>
<span class="quotelev2">&gt;  &gt; export PATH=/your/openmpi/bin:$PATH
</span><br>
<span class="quotelev2">&gt;  &gt; export LD_LIBRARY_PATH=/your/openmpi/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; [tcsh/csh]
</span><br>
<span class="quotelev2">&gt;  &gt; setenv PATH /your/openmpi/bin:$PATH
</span><br>
<span class="quotelev2">&gt;  &gt; setenv LD_LIBRARY_PATH /your/openmpi/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; **
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; 2) Configuring QE:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; In step 2, I separated the final configure step, to set the compilers to
</span><br>
<span class="quotelev2">&gt;  &gt; Intel.
</span><br>
<span class="quotelev2">&gt;  &gt; I used OpenMPI compiled with intel, hence I
</span><br>
<span class="quotelev2">&gt;  &gt; configured QuantumEspresso with Intel compilers:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; ./configure CC=icc FC=ifort
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; NOTE: You may need to use tar zxf ... instead of tar xfz ...
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; **
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; 3) Untar EPW in the correct location
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Step 3 should be as below.
</span><br>
<span class="quotelev2">&gt;  &gt; (You need to untar EPW inside the espresso-4.0.3 directory.
</span><br>
<span class="quotelev2">&gt;  &gt; Could this have been the problem for you?):
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; cp EPW-3.0.0.tar.gz espresso-4.0.3/
</span><br>
<span class="quotelev2">&gt;  &gt; cd espresso-4.0.3/
</span><br>
<span class="quotelev2">&gt;  &gt; tar zxf EPW-3.0.0.tar.gz
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; **
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; 4) Run make to compile EPW
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; The compilation in step 4 takes a while, is long, but works fine,
</span><br>
<span class="quotelev2">&gt;  &gt; and produces the epw.x executable as expected.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; **
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; 5) Old version issue, perhaps?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Also, you said you &quot;installed the older version of quantum espresso&quot;.
</span><br>
<span class="quotelev2">&gt;  &gt; Could this have been the problem (older version)?
</span><br>
<span class="quotelev2">&gt;  &gt; Did you try the latest QE (4.0.3), and the latest EPW (3.0.0),
</span><br>
<span class="quotelev2">&gt;  &gt; as per the recipe on the EPW web site?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://epw.org.uk/Main/DownloadAndInstall">http://epw.org.uk/Main/DownloadAndInstall</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; **
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;  &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; On 09/03/2014 06:48 PM, Elio Physics wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; I have already done all of the steps you mentioned. I have
</span><br>
<span class="quotelev1">&gt; installed the
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; older version of quantum espresso, configured it and followed all the
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; steps on the EPW website when I got that error in the last steo; In
</span><br>
<span class="quotelev1">&gt; fact
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; I do have the latest version of quantum espresso but since I work with
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; electron phonon and EPW seemed really promising and less time
</span><br>
<span class="quotelev1">&gt; consuming,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; I decided to give it a try.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; The reason I have asked my question in this forum because once I had a
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; similar &quot;compiler&quot; issue (not the same as this one) and when i asked on
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; the Quantum Espresso (QE) website, one of the answers was, this is not
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; the right since this is a compiler problem not a QE issue so I was
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; really trying to avoid such answers.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Anyhow, I guess you are absolutely right. I will try to e-mail the EPW
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; people and explain the situation; after all they should be able to
</span><br>
<span class="quotelev1">&gt; help.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Thanks for your advice and time.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ELIO MOUJAESS
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; University of Rondonia
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Brasil
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Date: Wed, 3 Sep 2014 18:19:25 -0400
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Subject: Re: [OMPI users] compilation problem with ifort
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; It is hard to tell why, but the object files (yes a2f.o, etc)
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; seem not to have been compiled from the corresponding source files
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; (a2f.f90 or similar).
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; In general the executable (your epw.x) is compiled only after all
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; the pre-requisite object files (the .o) and modules (the .mod)
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; have been compiled already.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; In many cases there is not only one Makefile, but a chain/tree of
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; them, to compile the code in the source directory tree (under src).
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Also, it is a bit awkward that you don't seem to
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; have configured anything,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; i.e., telling where MPI was installed, etc,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; but that may just not be in your email.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Phonons is not my league, just trying to help, but afraid I may
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; not take you in the right direction.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Did you do the installation as per the EPW web site? (I just
</span><br>
<span class="quotelev1">&gt; found it):
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; <a href="http://epw.org.uk/Main/DownloadAndInstall">http://epw.org.uk/Main/DownloadAndInstall</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; It seems to require QuantumExpresso.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Did you get it, configure it, etc?
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Do they have a mailing list or bulletin board where you could get
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; specific help for their software?
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; (Either on EPW or on QuantumExpresso (which seems to be required):
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; <a href="http://www.quantum-espresso.org/">http://www.quantum-espresso.org/</a>)
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; That would probably be the right forum to ask your questions.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; My two cents,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; On 09/03/2014 05:51 PM, Elio Physics wrote:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; This was the first error yes. What do you mean other files are
</span><br>
<span class="quotelev1">&gt; missing?
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Do you mean the atom.o, basic_algebra_routines.o.......? Well
</span><br>
<span class="quotelev1">&gt; the f90
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; files present in the src subdirectory start from a2f.90
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; , allocate_epwq.o,...and so on... I am not also sure why there
</span><br>
<span class="quotelev1">&gt; is that
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; slash &quot;\&quot; just before the &quot;a2f.o&quot;.... Is there a way to know
</span><br>
<span class="quotelev1">&gt; what is
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; going on? I mean what are the first steps?
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Thank you
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; ELIO MOUJAES
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Univeristy of Rondonia
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Brazil
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Date: Wed, 3 Sep 2014 17:43:44 -0400
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Subject: Re: [OMPI users] compilation problem with ifort
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Was the error that you listed the *first* error?
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Apparently various object files are missing from the
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; ../../Modules/ directory, and were not compiled,
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; suggesting something is amiss even before the
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; compilation of the executable (epw.x).
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; On 09/03/2014 05:20 PM, Elio Physics wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Dear all,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; I am really a beginner in Fortran and Linux. I was trying to
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; compile a
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; software (EPW). Everything was going fine (or maybe this is
</span><br>
<span class="quotelev1">&gt; what I
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; think):
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; mpif90 -o epw.x ../../Modules/atom.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/basic_algebra_routines.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/cell_base.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/check_stop.o ../../Modules/clocks.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/constraints_module.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/control_flags.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/descriptors.o ../../Modules/dspev_drv.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/electrons_base.o ../../Modules/error_handler.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/exc_t.o ../../Modules/fft_base.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/fft_parallel.o ../../Modules/fft_scalar.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/fft_types.o ../../Modules/functionals.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/input_parameters.o ../../Modules/io_files.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/io_global.o ../../Modules/ions_base.o
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; ../../Modules/kind.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ../../Modules/metagga.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ..................................................\ a2f.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; allocate_epwq.o bcast_epw_input.o broyden.o close_epw.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; constants_epw.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; create_mesh.o create_mesh_mp.o createkmap.o dasmio.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; deallocate_epw.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; deallocate_eliashberg.o distribution.o dmebloch2wan.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; dmewan2bloch.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; dvanqq2.o dvqpsi_us3.o dvqpsi_us_only3.o dynbloch2wan.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; dynwan2bloch.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; eliashberg.o
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Then I get the following error:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'a2f.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'allocate_epwq.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'bcast_epw_input.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'broyden.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'close_epw.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'constants_epw.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'create_mesh.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'create_mesh_mp.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'createkmap.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dasmio.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'deallocate_epw.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'deallocate_eliashberg.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'distribution.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dmebloch2wan.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dmewan2bloch.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dvanqq2.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dvqpsi_us3.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dvqpsi_us_only3.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dynbloch2wan.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dynwan2bloch.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'eliashberg.o'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'eliashbergcom.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; make[1]: *** [epw] Error 1
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; `/home_cluster/fis718/eliemouj/espresso-4.0.3/EPW-3.0.0/src'
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; make: *** [epw] Error 2
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; I reckon that there is an error in the Makefile. However the
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Makefile
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; content is just:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &quot;default: epw
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; all: epw
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; epw:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; (cd src ; make )
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; (cd bin ; ln -fs ../src/epw.x . )
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; clean:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; cd src ; rm -f *.o *.mod *.F90 *~
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; release:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; cd ../ ; cp -r EPW EPW-release; cd EPW-release ; \
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; rm -f src/*.o src/*.mod src/*.F90 src/*~ ; \
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; rm bin/*.x ; \
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; rm -rf examples/*/epw/out/* examples/*/epw/tmp/* \
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; examples/*/phonons/out/* examples/*/phonons/tmp/* \
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; examples/*/phonons/save/* ; \
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; rm -rf .svn */.svn */*/*.svn */*/*/*.svn */*/*/*/*.svn
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; cd .. ; tar cfz EPW/EPW-release.tgz EPW-release ; \
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; rm -rf EPW-release ; cd EPW &quot;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Please can anyone help me and guide me how to fix this error
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; step by
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; step as I am no FOrtran or Linux professional
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Regards
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ELIO MOUJAES
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; University of Rondonia
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Brazil
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25253.php">http://www.open-mpi.org/community/lists/users/2014/09/25253.php</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25254.php">http://www.open-mpi.org/community/lists/users/2014/09/25254.php</a>
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25255.php">http://www.open-mpi.org/community/lists/users/2014/09/25255.php</a>
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25256.php">http://www.open-mpi.org/community/lists/users/2014/09/25256.php</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25257.php">http://www.open-mpi.org/community/lists/users/2014/09/25257.php</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25260.php">http://www.open-mpi.org/community/lists/users/2014/09/25260.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25262.php">http://www.open-mpi.org/community/lists/users/2014/09/25262.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25272.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25262.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25274.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25274.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25289.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
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
