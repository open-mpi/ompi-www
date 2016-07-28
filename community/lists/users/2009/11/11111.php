<?
$subject_val = "Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 04:53:19 2009" -->
<!-- isoreceived="20091110095319" -->
<!-- sent="Tue, 10 Nov 2009 10:53:14 +0100" -->
<!-- isosent="20091110095314" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec" -->
<!-- id="4AF9380A.4070301_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1D222138-E0FB-4D36-ACD1-1CFD5E43BE1D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 04:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11112.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>In reply to:</strong> <a href="11103.php">Jeff Squyres: "Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; FWIW, environment variables prefixed with &quot;OMPI_&quot; will automatically be 
</span><br>
<span class="quotelev1">&gt; distributed out to processes.  
</span><br>
<p>Of course, but saddingly the variable(s) we want to ditribute aren't 
<br>
&quot;OMPI_&quot; variable.
<br>
<p><p><p><p><p><span class="quotelev1">&gt; Depending on your environment and launcher, your entire environment may 
</span><br>
<span class="quotelev1">&gt; be copied out to all the processes, anyway (rsh does not, but 
</span><br>
<span class="quotelev1">&gt; environments like SLURM do), making the OMPI_* and -x mechanisms 
</span><br>
<span class="quotelev1">&gt; somewhat redundant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this help?
</span><br>
<p>By now I specified the $MPIEXEC variable to &quot;mpiexec -x BLABLABLA&quot; and 
<br>
advice the users to use this. This is a bit ugly, but working 
<br>
workaround. What i wanted to achieve with my mail, was a less ugly 
<br>
solution :o)
<br>
<p>Thanks for your help,
<br>
<p>Paul Kapinos
<br>
<p><p><p><p><p><p><p><p><span class="quotelev2">&gt;&gt; Not at the moment - though I imagine we could create one. It is a tad
</span><br>
<span class="quotelev2">&gt;&gt; tricky in that we allow multiple -x options on the cmd line, but we
</span><br>
<span class="quotelev2">&gt;&gt; obviously can't do that with an envar.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The most likely solution would be to specify multiple &quot;-x&quot; equivalents
</span><br>
<span class="quotelev2">&gt;&gt; by separating them with a comma in the envar. It would take some
</span><br>
<span class="quotelev2">&gt;&gt; parsing to make it all work, but not impossible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can add it to the &quot;to-do&quot; list for a rainy day :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 6, 2009, at 7:59 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with the -x option of mpiexec there is a way to distribute
</span><br>
<span class="quotelev3">&gt;&gt; &gt; environmnet variables:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -x &lt;env&gt;  Export  the  specified  environment  variables  to the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; remote
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 nodes before executing the  program.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is there an environment variable ( OMPI_....) with the same meaning?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The writing of environmnet variables on the command line is ugly and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tedious...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've searched for this info on OpenMPI web pages for about an hour
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and didn't find the ansver :-/
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanking you in anticipation,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11111/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11112.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>In reply to:</strong> <a href="11103.php">Jeff Squyres: "Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
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
