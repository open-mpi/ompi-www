<?
$subject_val = "Re: [OMPI users] keyval parser: error 1 reading file	mpicc-wrapper-data.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 19:08:23 2011" -->
<!-- isoreceived="20110323230823" -->
<!-- sent="Wed, 23 Mar 2011 19:08:13 -0400" -->
<!-- isosent="20110323230813" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser: error 1 reading file	mpicc-wrapper-data.txt" -->
<!-- id="4D8A7D5D.2010609_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F16E2971-6B2F-4FCC-88DA-4053F17147AA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] keyval parser: error 1 reading file	mpicc-wrapper-data.txt<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-23 19:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15978.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="15978.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15981.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="15981.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Mar 23, 2011, at 3:19 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI Pros
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why am I getting the parser error below?
</span><br>
<span class="quotelev2">&gt;&gt; It seems not to recognize comment lines (#).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is OpenMPI 1.4.3.
</span><br>
<span class="quotelev2">&gt;&gt; The same error happens with the other compiler wrappers too.
</span><br>
<span class="quotelev2">&gt;&gt; However, the wrappers compile and produce an executable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No idea - I just tested it and didn't get that error. Did you configure this for script wrapper compilers instead of binaries?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parser error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; [myhost.mydomain:06489] keyval parser: error 1 reading file /my/path/to/openmpi/share/openmpi/mpicc-wrapper-data.txt at line 1:
</span><br>
<span class="quotelev2">&gt;&gt;  # There can be multiple blocks of configuration data, chosen by
</span><br>
<p>Thank you, Ralph.
<br>
<p>I have two OpenMPI 1.4.3 builds on this cluster.
<br>
One with gcc/g++/gfortran,
<br>
the other with gcc/g++ and Intel ifort (12.0.0).
<br>
The Gnu-only works right, no parser error.
<br>
The error is restricted to the Gnu-Intel combination.
<br>
Awkward.
<br>
<p>Both were configured with these parameters:
<br>
<p>--prefix=${MYINSTALLDIR} \
<br>
--with-libnuma=/usr \
<br>
--with-tm=/opt/torque/2.4.11 \
<br>
--with-openib=/usr \
<br>
--enable-static
<br>
<p>The opal_wrapper is a binary in both cases.
<br>
<p>To make things more confusing, on another cluster with (older)
<br>
Intel compiler 10.1.017 the Gnu+Intel build of OpenMPI 1.4.3
<br>
doesn't have this parser error.
<br>
<p><p>Thank you,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15978.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="15978.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15981.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="15981.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
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
