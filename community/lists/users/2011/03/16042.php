<?
$subject_val = "Re: [OMPI users] keyval parser: error	1	reading	file	mpicc-wrapper-data.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 19:26:11 2011" -->
<!-- isoreceived="20110328232611" -->
<!-- sent="Mon, 28 Mar 2011 19:25:55 -0400" -->
<!-- isosent="20110328232555" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser: error	1	reading	file	mpicc-wrapper-data.txt" -->
<!-- id="4D911903.2040001_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0C8D38F0-EE9F-48C3-8470-C1B73FB2C53C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] keyval parser: error	1	reading	file	mpicc-wrapper-data.txt<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-28 19:25:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16043.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>Thank you for your attention to this again.
<br>
More inline.
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I've never seen that problem before, 
</span><br>
<span class="quotelev1">&gt; and I wasn't able to track down what &quot;keyval parser&quot; is being referenced. :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>There was a posting in 2006, but somehow it was hijacked and
<br>
there is no clear solution, only several suggestions
<br>
to do a clean reinstall:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2006/06/1465.php">http://www.open-mpi.org/community/lists/users/2006/06/1465.php</a>
<br>
<p>Just in case I did once again a fully clean build.
<br>
Downloaded the tarball again, untarred, wiped off the old
<br>
build and install directories, everything from ground up.
<br>
<p>As before, the error disappeared ... :)
<br>
but who knows for how long ... :(
<br>
<p>Here is mpicc from both new builds (gnu only, and gnu+intel)
<br>
behaving well now:
<br>
<p>$ /home/soft/openmpi/1.4.3/gnu/bin/mpicc -o hello_c hello_c.c ; ll 
<br>
hello_c;date
<br>
-rwxrwxr-x 1 gus gus 9621 Mar 28 18:24 hello_c
<br>
Mon Mar 28 18:24:54 EDT 2011
<br>
<p>$ /home/soft/openmpi/1.4.3/gnu-intel/bin/mpicc -o hello_c hello_c.c ; ll 
<br>
hello_c ; date
<br>
-rwxrwxr-x 1 gus gus 9621 Mar 28 18:26 hello_c
<br>
Mon Mar 28 18:26:25 EDT 2011
<br>
<p><p><span class="quotelev1">&gt; I have a very simple suggestion, however. 
</span><br>
<span class="quotelev1">&gt; Just edit the .txt files and remove the comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>If the error comes back, I will remove the comments,
<br>
and see how it goes.
<br>
Note that in the 2006 posting above the person seems to have a file
<br>
with no comments.
<br>
<p>However, it worked with the comments before, it works with the comments
<br>
in another cluster.
<br>
Why would the parser get confused by the comments then?
<br>
<p>Or could it hit something else, and perhaps issue a misleading error
<br>
message suggesting that the problem is in the comment line?
<br>
I tried to look at the parser code, but it may be beyond my competence.
<br>
<p>I wonder if there may be an issue in the file,
<br>
perhaps with line terminators or some funny hidden characters,
<br>
but I did not edit the file at all.
<br>
This is all Linux, nothing was edited or came from a Mac or Windows either.
<br>
<p>Once a user here edited his source files on Windows,
<br>
copied over to our old cluster,
<br>
and the compilers on Linux would go south on those line terminators,
<br>
no error message, no nothing.
<br>
<p><span class="quotelev1">&gt; If you are getting a workable executable, 
</span><br>
<span class="quotelev1">&gt; then I would think it must be reading past the error. 
</span><br>
<span class="quotelev1">&gt; Otherwise, it wouldn't know what linker and CPP flags to 
</span><br>
<span class="quotelev1">&gt; apply to generate the executable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, that is reassuring.
<br>
<p><span class="quotelev1">&gt; But to be safe, like I said, just remove the comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Will do, if the problem comes back.
<br>
<p>Gus
<br>
<p><span class="quotelev1">&gt; On Mar 28, 2011, at 3:18 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I spoke too soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem still seems to be there, in all compiler wrappers
</span><br>
<span class="quotelev2">&gt;&gt; (I.e. it probably tracks down to the opal_wrapper):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -o hello_c hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; [mycomputer.mydomain:09148] keyval parser: error 1 reading file /my/path/to/openmpi/1.4.3/gnu-intel/openmpi/mpicc-wrapper-data.txt at line 1:
</span><br>
<span class="quotelev2">&gt;&gt;  # There can be multiple blocks of configuration data, chosen by
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Somehow the keyval parser fails to read the first (comment)
</span><br>
<span class="quotelev2">&gt;&gt; line of mpicc-wrapper-data.txt.
</span><br>
<span class="quotelev2">&gt;&gt; The same thing happens to the other mpi compiler wrappers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, the compilation proceeds and a working executable is produced.
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if the options in mpicc-wrapper-data.txt are being read by mpicc, and likewise for the other compiler wrappers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any clues on how I can get to the bottom of this issue?
</span><br>
<span class="quotelev2">&gt;&gt; Anything in the environment, or in the actual mpicc-wrapper-data.txt file that could cause this?
</span><br>
<span class="quotelev2">&gt;&gt; Anything in the parser code?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have Linux CentOS 5.5 x86_62 with gcc 4.1.2.
</span><br>
<span class="quotelev2">&gt;&gt; I built OpenMPI both with gfortran and Intel Ifort 12.0.0.
</span><br>
<span class="quotelev2">&gt;&gt; Same problem on both builds.
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
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good to hear (well, all except that bit about the conspiracy...)!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 24, 2011, at 12:45 PM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph, list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just for the record:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I configured and built OpenMPI 1.4.3 with gcc/g++/ifort again today.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The mpicc/opal_wrapper parser error disappeared.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The whole problem must have been some computer daemon spell.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Other than my growing feeling that flipping bits and logic gates
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have fun conspiring against my sanity, all is well now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 23, 2011, at 3:19 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear OpenMPI Pros
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Why am I getting the parser error below?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It seems not to recognize comment lines (#).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is OpenMPI 1.4.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The same error happens with the other compiler wrappers too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, the wrappers compile and produce an executable.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; No idea - I just tested it and didn't get that error. Did you configure this for script wrapper compilers instead of binaries?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parser error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpicc hello_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [myhost.mydomain:06489] keyval parser: error 1 reading file /my/path/to/openmpi/share/openmpi/mpicc-wrapper-data.txt at line 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; # There can be multiple blocks of configuration data, chosen by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you, Ralph.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have two OpenMPI 1.4.3 builds on this cluster.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One with gcc/g++/gfortran,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the other with gcc/g++ and Intel ifort (12.0.0).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The Gnu-only works right, no parser error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The error is restricted to the Gnu-Intel combination.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Awkward.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Both were configured with these parameters:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --prefix=${MYINSTALLDIR} \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-tm=/opt/torque/2.4.11 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-openib=/usr \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --enable-static
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The opal_wrapper is a binary in both cases.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To make things more confusing, on another cluster with (older)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Intel compiler 10.1.017 the Gnu+Intel build of OpenMPI 1.4.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; doesn't have this parser error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="16043.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="16041.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
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
