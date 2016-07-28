<?
$subject_val = "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 14:45:26 2011" -->
<!-- isoreceived="20110324184526" -->
<!-- sent="Thu, 24 Mar 2011 14:45:11 -0400" -->
<!-- isosent="20110324184511" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt" -->
<!-- id="4D8B9137.2020101_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D8A7D5D.2010609_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 14:45:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15979.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading file	mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15984.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="15984.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, list
<br>
<p>Just for the record:
<br>
I configured and built OpenMPI 1.4.3 with gcc/g++/ifort again today.
<br>
The mpicc/opal_wrapper parser error disappeared.
<br>
<p>The whole problem must have been some computer daemon spell.
<br>
Other than my growing feeling that flipping bits and logic gates
<br>
have fun conspiring against my sanity, all is well now.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p><p><p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 23, 2011, at 3:19 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI Pros
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why am I getting the parser error below?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems not to recognize comment lines (#).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is OpenMPI 1.4.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same error happens with the other compiler wrappers too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the wrappers compile and produce an executable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No idea - I just tested it and didn't get that error. Did you 
</span><br>
<span class="quotelev2">&gt;&gt; configure this for script wrapper compilers instead of binaries?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parser error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc hello_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [myhost.mydomain:06489] keyval parser: error 1 reading file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /my/path/to/openmpi/share/openmpi/mpicc-wrapper-data.txt at line 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # There can be multiple blocks of configuration data, chosen by
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two OpenMPI 1.4.3 builds on this cluster.
</span><br>
<span class="quotelev1">&gt; One with gcc/g++/gfortran,
</span><br>
<span class="quotelev1">&gt; the other with gcc/g++ and Intel ifort (12.0.0).
</span><br>
<span class="quotelev1">&gt; The Gnu-only works right, no parser error.
</span><br>
<span class="quotelev1">&gt; The error is restricted to the Gnu-Intel combination.
</span><br>
<span class="quotelev1">&gt; Awkward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both were configured with these parameters:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --prefix=${MYINSTALLDIR} \
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque/2.4.11 \
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr \
</span><br>
<span class="quotelev1">&gt; --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The opal_wrapper is a binary in both cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To make things more confusing, on another cluster with (older)
</span><br>
<span class="quotelev1">&gt; Intel compiler 10.1.017 the Gnu+Intel build of OpenMPI 1.4.3
</span><br>
<span class="quotelev1">&gt; doesn't have this parser error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15979.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading file	mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15984.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="15984.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
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
