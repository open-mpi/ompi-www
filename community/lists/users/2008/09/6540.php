<?
$subject_val = "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 11:22:08 2008" -->
<!-- isoreceived="20080915152208" -->
<!-- sent="Mon, 15 Sep 2008 17:22:03 +0200" -->
<!-- isosent="20080915152203" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?" -->
<!-- id="48CE7D9B.8070207_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8DDA324C-1AC9-409B-8425-7A090E5823AA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 11:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6541.php">Eugene Loh: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6539.php">Thomas Ropars: "Re: [OMPI users] Problem using VampirTrace"</a>
<li><strong>In reply to:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, hi all!
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Short answer: yes, we do compile in the prefix path into OMPI.  Check 
</span><br>
<span class="quotelev1">&gt; out this FAQ entry; I think it'll solve your problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
</span><br>
<p><p>Yes, reading man pages helps!
<br>
Thank you to provide useful help.
<br>
<p>But the setting of the environtemt variable OPAL_PREFIX to an 
<br>
appropriate value (assuming PATH and LD_LIBRARY_PATH are setted too) is 
<br>
not enough to let the OpenMPI rock&amp;roll from the new lokation.
<br>
<p>Because of the fact, that all the files containing settings for 
<br>
opal_wrapper, which are located in share/openmpi/ and called e.g. 
<br>
mpif77-wrapper-data.txt, contain (defined by installation with --prefix) 
<br>
hard-coded paths, too.
<br>
<p>I have fixed the problem by parsing all the files  share/openmpi/*.txt 
<br>
and replacing the old path through new path. This nasty solution seems 
<br>
to work.
<br>
<p>But, is there an elegant way to do this correctness, maybe to 
<br>
re-generate the config-files in share/openmpi/
<br>
<p>And last but not least, the FAQ on the web site you provided (see link 
<br>
above) does not containn any info on the need to modufy the wrapper 
<br>
configuretion files. Maybe this section schould be upgraded?
<br>
<p>Best regards Paul Kapinos
<br>
<p><p><p><p><p><p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 8, 2008, at 5:33 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are using OpenMPI on an variety of machines (running Linux, 
</span><br>
<span class="quotelev2">&gt;&gt; Solaris/Sparc and /Opteron) using couple of compilers (GCC, Sun 
</span><br>
<span class="quotelev2">&gt;&gt; Studio, Intel, PGI, 32 and 64 bit...) so we have at least 15 versions 
</span><br>
<span class="quotelev2">&gt;&gt; of each release of OpenMPI (SUN Cluster Tools not included).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This shows, that we have to support an complete petting zoo of 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI's. Sometimes we may need to move things around.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If OpenMPI is being configured, the install path may be provided using 
</span><br>
<span class="quotelev2">&gt;&gt; --prefix keyword, say so:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/my/love/path/for/openmpi/tmp1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After &quot;gmake all install&quot; in ...tmp1 an installation of OpenMPI may be 
</span><br>
<span class="quotelev2">&gt;&gt; found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, say, we need to *move* this Version to an another path, say 
</span><br>
<span class="quotelev2">&gt;&gt; /my/love/path/for/openmpi/blupp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course we have to set $PATH and $LD_LIBRARY_PATH accordingly (we 
</span><br>
<span class="quotelev2">&gt;&gt; can that ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And if we tried to use OpenMPI from new location, we got error message 
</span><br>
<span class="quotelev2">&gt;&gt; like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ./mpicc
</span><br>
<span class="quotelev2">&gt;&gt; Cannot open configuration file 
</span><br>
<span class="quotelev2">&gt;&gt; /my/love/path/for/openmpi/tmp1/share/openmpi/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (note the old installation path used)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That looks for me, that the install path provided with --prefix in 
</span><br>
<span class="quotelev2">&gt;&gt; configuration step, is compiled into opal_wrapper executable file and 
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper works iff the set of configuration files is in this path. 
</span><br>
<span class="quotelev2">&gt;&gt; But after move of the OpenMP installation directory the configuration 
</span><br>
<span class="quotelev2">&gt;&gt; files aren't there...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An side effect of this behaviour is the certainty that binary 
</span><br>
<span class="quotelev2">&gt;&gt; distributions of OpenMPI (RPM's) are not relocatable. That's 
</span><br>
<span class="quotelev2">&gt;&gt; uncomfortably. (Actually, this mail is initiated by the fact that Sun 
</span><br>
<span class="quotelev2">&gt;&gt; ClusterTools RPM's are not relocatable)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, does this behavior have an deeper sence I cannot recognise, or 
</span><br>
<span class="quotelev2">&gt;&gt; maybe  the configuring of global paths is not needed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I mean, is that the paths for the configuration files, which 
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper need, may be setted locally like ../share/openmpi/*** 
</span><br>
<span class="quotelev2">&gt;&gt; without affectiong the integrity of OpenMPI. Maybe there were were 
</span><br>
<span class="quotelev2">&gt;&gt; more places where the usage of local paths may be needed to allowe 
</span><br>
<span class="quotelev2">&gt;&gt; movable (relocable) OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean about?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;kapinos.vcf&gt;_______________________________________________
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
<p><p>

<br><p>
<p>
<br><hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6540/verwurschel_pfade_openmpi.sh">verwurschel_pfade_openmpi.sh</a>
</ul>
<!-- attachment="verwurschel_pfade_openmpi.sh" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6540/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6541.php">Eugene Loh: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6539.php">Thomas Ropars: "Re: [OMPI users] Problem using VampirTrace"</a>
<li><strong>In reply to:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
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
