<?
$subject_val = "Re: [OMPI devel] How is a MPI process launched ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 08:26:47 2010" -->
<!-- isoreceived="20100426122647" -->
<!-- sent="Mon, 26 Apr 2010 06:26:38 -0600" -->
<!-- isosent="20100426122638" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is a MPI process launched ?" -->
<!-- id="ED69DAEC-17BA-4658-AEFF-6432D25B8D6F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="818727.54592.qm_at_web8707.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How is a MPI process launched ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 08:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7806.php">Ralph Castain: "Re: [OMPI devel] 1.5 branch broken"</a>
<li><strong>Previous message:</strong> <a href="7804.php">Jeff Squyres: "[OMPI devel] 1.5 branch broken"</a>
<li><strong>In reply to:</strong> <a href="7803.php">Leo P.: "[OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends - if you have an environment like slurm, sge, or torque, then we use that to launch our daemons on each node. Otherwise, we default to using ssh.
<br>
<p>Once the daemons are launched, we then tell the daemons what processes each is to run. So it is a two-stage launch procedure.
<br>
<p><p>On Apr 26, 2010, at 2:22 AM, Leo P. wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wanted to know how OpenMPI launches a MPI  process in a cluster environment. I am assuming if the process lifecycle management it will be using rsh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyhelp would be greatly appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7805/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7806.php">Ralph Castain: "Re: [OMPI devel] 1.5 branch broken"</a>
<li><strong>Previous message:</strong> <a href="7804.php">Jeff Squyres: "[OMPI devel] 1.5 branch broken"</a>
<li><strong>In reply to:</strong> <a href="7803.php">Leo P.: "[OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
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
