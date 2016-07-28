<?
$subject_val = "Re: [OMPI users] MPI_TYPE_MAX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 18:12:54 2010" -->
<!-- isoreceived="20100408221254" -->
<!-- sent="Thu, 8 Apr 2010 18:12:49 -0400" -->
<!-- isosent="20100408221249" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_TYPE_MAX" -->
<!-- id="46A607CE-F17B-4989-8FB0-30A415C0A67F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF87112A03_at_HVXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_TYPE_MAX<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-08 18:12:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12594.php">Cristobal Navarro: "[OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12592.php">Cole, Derek E: "[OMPI users] MPI_TYPE_MAX"</a>
<li><strong>In reply to:</strong> <a href="12592.php">Cole, Derek E: "[OMPI users] MPI_TYPE_MAX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think we have such an environment variable -- are you sure you're using Open MPI?
<br>
<p>The only reference to MPI_TYPE_MAX I see in the OMPI source tree is in the ROMIO README file:
<br>
<p>-----
<br>
* When using ROMIO with SGI MPI, you may sometimes get an error
<br>
message from SGI MPI: ``MPI has run out of internal datatype
<br>
entries. Please set the environment variable MPI_TYPE_MAX for
<br>
additional space.'' If you get this error message, add this line to
<br>
your .cshrc file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;setenv MPI_TYPE_MAX 65536 
<br>
Use a larger number if you still get the error message.
<br>
-----
<br>
<p><p>On Apr 8, 2010, at 4:27 PM, Cole, Derek E wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I keep getting an error about running out of MPI_TYPE_MAX and needing to set the environment variable higher. What is this, and why is it happening? All of the types and groups, etc that I create during my programs run are freed at the appropriate times. Making this number 10x bigger gets me about 10x more iterations..and I heard someone say to just set it to a huge number, but I hate doing stuff like that blindly.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Derek
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12594.php">Cristobal Navarro: "[OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12592.php">Cole, Derek E: "[OMPI users] MPI_TYPE_MAX"</a>
<li><strong>In reply to:</strong> <a href="12592.php">Cole, Derek E: "[OMPI users] MPI_TYPE_MAX"</a>
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
