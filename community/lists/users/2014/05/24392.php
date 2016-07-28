<?
$subject_val = "Re: [OMPI users] Using PMI as RTE component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 16:09:44 2014" -->
<!-- isoreceived="20140515200944" -->
<!-- sent="Thu, 15 May 2014 15:09:23 -0500" -->
<!-- isosent="20140515200923" -->
<!-- name="Hadi Montakhabi" -->
<!-- email="hadi.montakhabi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using PMI as RTE component" -->
<!-- id="CACuWxGzRx67CX4x2f35TaLaRUBfrxv9yQTm6sb4u+idLMp+Tag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55AF9673-C5A0-46C9-883B-83FC768F0054_at_open-mpi.org" -->
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
<strong>From:</strong> Hadi Montakhabi (<em>hadi.montakhabi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 16:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24393.php">Tim Prince: "Re: [OMPI users] openMPI in 64 bit"</a>
<li><strong>Previous message:</strong> <a href="24391.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24391.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Reply:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By &quot;goes through orte component&quot;, I meant it does go into rte_orte_open
<br>
function in rte_orte_component.c.
<br>
Let me try to formulate my question in a different way:
<br>
There are two components in the rte framework, namely orte and pmi.
<br>
The question is whether pmi could be used independent from orte? Or it
<br>
needs orte to function?
<br>
<p>Peace,
<br>
Hadi
<br>
<p><p>On Thu, May 15, 2014 at 2:59 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What do you mean &quot;goes through orte component&quot;? It will still call into
</span><br>
<span class="quotelev1">&gt; the orte code base, but will use PMI to do the modex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2014, at 12:54 PM, Hadi Montakhabi &lt;hadi.montakhabi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to utilize pmi instead of orte, but I come across the
</span><br>
<span class="quotelev1">&gt; following problem.
</span><br>
<span class="quotelev1">&gt; I do configure using --with-slurm=[slurm installation path] and
</span><br>
<span class="quotelev1">&gt; --with-pmi=[slurm installation path].
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24392/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24393.php">Tim Prince: "Re: [OMPI users] openMPI in 64 bit"</a>
<li><strong>Previous message:</strong> <a href="24391.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24391.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Reply:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
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
