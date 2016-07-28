<?
$subject_val = "Re: [OMPI users] Using PMI as RTE component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 16:00:59 2014" -->
<!-- isoreceived="20140515200059" -->
<!-- sent="Thu, 15 May 2014 12:59:13 -0700" -->
<!-- isosent="20140515195913" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using PMI as RTE component" -->
<!-- id="55AF9673-C5A0-46C9-883B-83FC768F0054_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACuWxGzt9X--9_cWKxxnkcLoZ4U10T3Y3855rw77tyL7TFqehA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using PMI as RTE component<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 15:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24392.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24390.php">Hadi Montakhabi: "[OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24390.php">Hadi Montakhabi: "[OMPI users] Using PMI as RTE component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24392.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Reply:</strong> <a href="24392.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What do you mean &quot;goes through orte component&quot;? It will still call into the orte code base, but will use PMI to do the modex.
<br>
<p>On May 15, 2014, at 12:54 PM, Hadi Montakhabi &lt;hadi.montakhabi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to utilize pmi instead of orte, but I come across the following problem.
</span><br>
<span class="quotelev1">&gt; I do configure using --with-slurm=[slurm installation path] and --with-pmi=[slurm installation path].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After compiling, I run the executable using:
</span><br>
<span class="quotelev1">&gt; $srun -n 2 --mpi=pmi2 ./executable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, this still goes through orte component, not the pmi.
</span><br>
<span class="quotelev1">&gt; Am I missing something when I configure?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Peace,
</span><br>
<span class="quotelev1">&gt; Hadi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24392.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24390.php">Hadi Montakhabi: "[OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24390.php">Hadi Montakhabi: "[OMPI users] Using PMI as RTE component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24392.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Reply:</strong> <a href="24392.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
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
