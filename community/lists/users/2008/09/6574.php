<?
$subject_val = "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 09:49:57 2008" -->
<!-- isoreceived="20080917134957" -->
<!-- sent="Wed, 17 Sep 2008 15:49:52 +0200" -->
<!-- isosent="20080917134952" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?" -->
<!-- id="48D10B00.1060500_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2C92962C-A6C3-40B0-9EE9-818A5E8A4C60_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 09:49:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6575.php">Rolf vandeVaart: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6573.php">Christophe Spaggiari: "Re: [OMPI users] mpirun hang"</a>
<li><strong>In reply to:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6575.php">Rolf vandeVaart: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6575.php">Rolf vandeVaart: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff again!
<br>
<p><p><span class="quotelev2">&gt;&gt; (update) it works with &quot;truly&quot; OpenMPI, but it works *not* with SUN 
</span><br>
<span class="quotelev2">&gt;&gt; Cluster Tools 8.0 (which is also an OpenMPI). So, it seems be an SUN 
</span><br>
<span class="quotelev2">&gt;&gt; problem and not general problem of openMPI. Sorry for false relating 
</span><br>
<span class="quotelev2">&gt;&gt; the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, gotcha.  I guess my Sun colleagues on this list will need to address 
</span><br>
<span class="quotelev1">&gt; that.  ;-)
</span><br>
<p>I hope!
<br>
<p><p><p><p><p><span class="quotelev2">&gt;&gt; The only trouble we have now are the error messages like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;    no hca params found
</span><br>
<span class="quotelev2">&gt;&gt; from the file:
</span><br>
<span class="quotelev2">&gt;&gt;    help-mpi-btl-openib.txt
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (the job still runs without problems! :o)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if running openmpi from new location, and the old location being 
</span><br>
<span class="quotelev2">&gt;&gt; removed. (if the old location being also persistense there is no 
</span><br>
<span class="quotelev2">&gt;&gt; error, so it seems to be an attempt to access to an file on old path).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doh; that's weird.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe we have to explicitly pass the OPAL_PREFIX environment variable 
</span><br>
<span class="quotelev2">&gt;&gt; to all processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  I don't need to do this in my 1.2.7 installation.  I do something 
</span><br>
<span class="quotelev1">&gt; like this (I assume you're using rsh/ssh as a launcher?):
</span><br>
<p>We use zsh as login shell, ssh as communication protocol and an wrapper 
<br>
to mpiexec which produces an command somewhat like
<br>
<p><p>/opt/MPI/openmpi-1.2.7/linux64/intel/bin/mpiexec -x LD_LIBRARY_PATH -x 
<br>
PATH -x MPI_NAME --hostfile /tmp/pk224850/26654_at_linuxhtc01/hostfile3564 
<br>
-n 2 MPI_FastTest.exe
<br>
<p><p>(hostfiles are generated temporarely by our wrapper due of load 
<br>
balancing, and /opt/MPI/openmpi-1.2.7/linux64/intel/ is the path to our 
<br>
local installation of OpenMPI... )
<br>
<p><p>You see that we also explicitly order OpenMPI to export environment 
<br>
variables PATH and LD_LIBRARY_PATH.
<br>
<p>If we add an &quot; -x OPAL_PREFIX &quot; flag, and through forces explicitly 
<br>
forwarding of this environment variable, the error was not occured. So 
<br>
we mean that this variable is needed to be exported across *all* 
<br>
systhems in cluster.
<br>
<p>It seems, the variable OPAL_PREFIX  will *NOT* be automatically exported 
<br>
to new processes on the local and remote nodes.
<br>
<p>Maybe the FAQ in 
<br>
<a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a> should be 
<br>
extended in this mean?
<br>
<p><p><p><p><span class="quotelev2">&gt;&gt; Did you (or anyone reading this message) have any contact to SUN 
</span><br>
<span class="quotelev2">&gt;&gt; developers to point to this circumstance? *Why* do them use hard-coded 
</span><br>
<span class="quotelev2">&gt;&gt; paths? :o)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know -- this sounds like an issue with the Sun CT 8 build 
</span><br>
<span class="quotelev1">&gt; process.  It could also be a by-product of using the combined 32/64 
</span><br>
<span class="quotelev1">&gt; feature...?  I haven't used that in forever and I don't remember the 
</span><br>
<span class="quotelev1">&gt; restrictions.  Terry/Rolf -- can you comment?
</span><br>
<p><p>I will write an separate eMail to ct-feedback_at_[hidden]
<br>
<p><p>Best regards,
<br>
Paul Kapinos
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6574/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6575.php">Rolf vandeVaart: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6573.php">Christophe Spaggiari: "Re: [OMPI users] mpirun hang"</a>
<li><strong>In reply to:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6575.php">Rolf vandeVaart: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6575.php">Rolf vandeVaart: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
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
