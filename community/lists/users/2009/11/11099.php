<?
$subject_val = "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 22:00:01 2009" -->
<!-- isoreceived="20091107030001" -->
<!-- sent="Fri, 6 Nov 2009 19:59:53 -0700" -->
<!-- isosent="20091107025953" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec" -->
<!-- id="3173BAB9-726B-4EE0-9BA6-5E2840C68EE5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AF439BE.3010203_at_rz.rwth-aachen.de" -->
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
<strong>Date:</strong> 2009-11-06 21:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11100.php">Ralph Castain: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>Previous message:</strong> <a href="11098.php">amjad ali: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>In reply to:</strong> <a href="11091.php">Paul Kapinos: "[OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11103.php">Jeff Squyres: "Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec"</a>
<li><strong>Reply:</strong> <a href="11103.php">Jeff Squyres: "Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec"</a>
<li><strong>Reply:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not at the moment - though I imagine we could create one. It is a tad  
<br>
tricky in that we allow multiple -x options on the cmd line, but we  
<br>
obviously can't do that with an envar.
<br>
<p>The most likely solution would be to specify multiple &quot;-x&quot; equivalents  
<br>
by separating them with a comma in the envar. It would take some  
<br>
parsing to make it all work, but not impossible.
<br>
<p>I can add it to the &quot;to-do&quot; list for a rainy day :-)
<br>
<p><p>On Nov 6, 2009, at 7:59 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with the -x option of mpiexec there is a way to distribute  
</span><br>
<span class="quotelev1">&gt; environmnet variables:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -x &lt;env&gt;  Export  the  specified  environment  variables  to the  
</span><br>
<span class="quotelev1">&gt; remote
</span><br>
<span class="quotelev1">&gt;                 nodes before executing the  program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there an environment variable ( OMPI_....) with the same meaning?  
</span><br>
<span class="quotelev1">&gt; The writing of environmnet variables on the command line is ugly and  
</span><br>
<span class="quotelev1">&gt; tedious...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've searched for this info on OpenMPI web pages for about an hour  
</span><br>
<span class="quotelev1">&gt; and didn't find the ansver :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you in anticipation,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11100.php">Ralph Castain: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>Previous message:</strong> <a href="11098.php">amjad ali: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>In reply to:</strong> <a href="11091.php">Paul Kapinos: "[OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11103.php">Jeff Squyres: "Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec"</a>
<li><strong>Reply:</strong> <a href="11103.php">Jeff Squyres: "Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec"</a>
<li><strong>Reply:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
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
