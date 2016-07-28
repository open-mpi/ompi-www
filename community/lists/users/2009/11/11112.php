<?
$subject_val = "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 06:21:09 2009" -->
<!-- isoreceived="20091110112109" -->
<!-- sent="Tue, 10 Nov 2009 04:21:01 -0700" -->
<!-- isosent="20091110112101" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec" -->
<!-- id="E64802EE-4728-4DBD-88FB-CC89B66A01DD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AF936E9.2040000_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 06:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="11111.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec"</a>
<li><strong>In reply to:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2009, at 2:48 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not at the moment - though I imagine we could create one. It is a  
</span><br>
<span class="quotelev2">&gt;&gt; tad tricky in that we allow multiple -x options on the cmd line,  
</span><br>
<span class="quotelev2">&gt;&gt; but we obviously can't do that with an envar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; why not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPI_Magic_Variavle=&quot;-x LD_LIBRARY_PATH -x PATH&quot;
</span><br>
<span class="quotelev1">&gt; cold be possible, or not?
</span><br>
<p>That is basically what I had in mind, but it now requires that we  
<br>
parse it. My point was that you can't do
<br>
<p>export OMPI_dash_x=&quot;foo&quot;
<br>
export OMPI_dash_x=&quot;bar&quot;
<br>
<p>like you would do on the cmd line itself, so now there has to be a  
<br>
special parser for handling the envar separate from the cmd line entry.
<br>
<p>Not a big deal - just takes some code...which is why it isn't an  
<br>
immediate response.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can add it to the &quot;to-do&quot; list for a rainy day :-)
</span><br>
<span class="quotelev1">&gt; That would be great :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the -x option of mpiexec there is a way to distribute  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environmnet variables:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -x &lt;env&gt;  Export  the  specified  environment  variables  to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                nodes before executing the  program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there an environment variable ( OMPI_....) with the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; meaning? The writing of environmnet variables on the command line  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is ugly and tedious...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've searched for this info on OpenMPI web pages for about an hour  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and didn't find the ansver :-/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanking you in anticipation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
<li><strong>Next message:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="11111.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec"</a>
<li><strong>In reply to:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
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
