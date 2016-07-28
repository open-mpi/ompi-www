<?
$subject_val = "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 17:18:13 2011" -->
<!-- isoreceived="20110328211813" -->
<!-- sent="Mon, 28 Mar 2011 17:18:04 -0400" -->
<!-- isosent="20110328211804" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt" -->
<!-- id="4D90FB0C.6040608_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F6DFD5F3-0A84-4C5F-BA10-292621DD3289_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-28 17:18:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="16039.php">Igor: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<li><strong>In reply to:</strong> <a href="15984.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, list
<br>
<p>Sorry, I spoke too soon.
<br>
<p>The problem still seems to be there, in all compiler wrappers
<br>
(I.e. it probably tracks down to the opal_wrapper):
<br>
<p>$ mpicc -o hello_c hello_c.c
<br>
[mycomputer.mydomain:09148] keyval parser: error 1 reading file 
<br>
/my/path/to/openmpi/1.4.3/gnu-intel/openmpi/mpicc-wrapper-data.txt at 
<br>
line 1:
<br>
&nbsp;&nbsp;&nbsp;# There can be multiple blocks of configuration data, chosen by
<br>
<p>***
<br>
<p>Somehow the keyval parser fails to read the first (comment)
<br>
line of mpicc-wrapper-data.txt.
<br>
The same thing happens to the other mpi compiler wrappers.
<br>
<p>However, the compilation proceeds and a working executable is produced.
<br>
I wonder if the options in mpicc-wrapper-data.txt are being read by 
<br>
mpicc, and likewise for the other compiler wrappers.
<br>
<p>Any clues on how I can get to the bottom of this issue?
<br>
Anything in the environment, or in the actual mpicc-wrapper-data.txt 
<br>
file that could cause this?
<br>
Anything in the parser code?
<br>
<p>We have Linux CentOS 5.5 x86_62 with gcc 4.1.2.
<br>
I built OpenMPI both with gfortran and Intel Ifort 12.0.0.
<br>
Same problem on both builds.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Good to hear (well, all except that bit about the conspiracy...)!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 24, 2011, at 12:45 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just for the record:
</span><br>
<span class="quotelev2">&gt;&gt; I configured and built OpenMPI 1.4.3 with gcc/g++/ifort again today.
</span><br>
<span class="quotelev2">&gt;&gt; The mpicc/opal_wrapper parser error disappeared.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The whole problem must have been some computer daemon spell.
</span><br>
<span class="quotelev2">&gt;&gt; Other than my growing feeling that flipping bits and logic gates
</span><br>
<span class="quotelev2">&gt;&gt; have fun conspiring against my sanity, all is well now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 23, 2011, at 3:19 PM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear OpenMPI Pros
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Why am I getting the parser error below?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It seems not to recognize comment lines (#).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is OpenMPI 1.4.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The same error happens with the other compiler wrappers too.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, the wrappers compile and produce an executable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No idea - I just tested it and didn't get that error. Did you configure this for script wrapper compilers instead of binaries?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parser error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpicc hello_c.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [myhost.mydomain:06489] keyval parser: error 1 reading file /my/path/to/openmpi/share/openmpi/mpicc-wrapper-data.txt at line 1:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # There can be multiple blocks of configuration data, chosen by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you, Ralph.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have two OpenMPI 1.4.3 builds on this cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One with gcc/g++/gfortran,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the other with gcc/g++ and Intel ifort (12.0.0).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Gnu-only works right, no parser error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error is restricted to the Gnu-Intel combination.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Awkward.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both were configured with these parameters:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=${MYINSTALLDIR} \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-tm=/opt/torque/2.4.11 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-openib=/usr \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The opal_wrapper is a binary in both cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To make things more confusing, on another cluster with (older)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel compiler 10.1.017 the Gnu+Intel build of OpenMPI 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't have this parser error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="16039.php">Igor: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<li><strong>In reply to:</strong> <a href="15984.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
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
