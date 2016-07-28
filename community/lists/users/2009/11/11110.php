<?
$subject_val = "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 04:48:29 2009" -->
<!-- isoreceived="20091110094829" -->
<!-- sent="Tue, 10 Nov 2009 10:48:25 +0100" -->
<!-- isosent="20091110094825" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec" -->
<!-- id="4AF936E9.2040000_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3173BAB9-726B-4EE0-9BA6-5E2840C68EE5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 04:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11111.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11109.php">Martin Siegert: "[OMPI users] MPI_IN_PLACE variant of MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="11099.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11112.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Reply:</strong> <a href="11112.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><p><p><span class="quotelev1">&gt; Not at the moment - though I imagine we could create one. It is a tad 
</span><br>
<span class="quotelev1">&gt; tricky in that we allow multiple -x options on the cmd line, but we 
</span><br>
<span class="quotelev1">&gt; obviously can't do that with an envar.
</span><br>
<p>why not?
<br>
<p>export OMPI_Magic_Variavle=&quot;-x LD_LIBRARY_PATH -x PATH&quot;
<br>
cold be possible, or not?
<br>
<p><p><p><span class="quotelev1">&gt; I can add it to the &quot;to-do&quot; list for a rainy day :-)
</span><br>
That would be great :-)
<br>
<p>Thanks for your help!
<br>
<p>Paul Kapinos
<br>
<p><p><p><p><span class="quotelev2">&gt;&gt; with the -x option of mpiexec there is a way to distribute environmnet 
</span><br>
<span class="quotelev2">&gt;&gt; variables:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -x &lt;env&gt;  Export  the  specified  environment  variables  to the remote
</span><br>
<span class="quotelev2">&gt;&gt;                 nodes before executing the  program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there an environment variable ( OMPI_....) with the same meaning? 
</span><br>
<span class="quotelev2">&gt;&gt; The writing of environmnet variables on the command line is ugly and 
</span><br>
<span class="quotelev2">&gt;&gt; tedious...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've searched for this info on OpenMPI web pages for about an hour and 
</span><br>
<span class="quotelev2">&gt;&gt; didn't find the ansver :-/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanking you in anticipation,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +49 241/80-24915
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11110/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11111.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11109.php">Martin Siegert: "[OMPI users] MPI_IN_PLACE variant of MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="11099.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11112.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Reply:</strong> <a href="11112.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
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
