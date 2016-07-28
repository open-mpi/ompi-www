<?
$subject_val = "Re: [OMPI users] Using PMI as RTE component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 20:15:36 2014" -->
<!-- isoreceived="20140516001536" -->
<!-- sent="Thu, 15 May 2014 20:15:36 -0400" -->
<!-- isosent="20140516001536" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using PMI as RTE component" -->
<!-- id="CAG4F6z8Y5UVPYscwsYXo6PhKNrVFBZNZ+n-0sTw853WGqxmyhw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="76D49F92-F67C-4576-9E48-0A3AB5AD89CD_at_open-mpi.org" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 20:15:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24410.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24408.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24410.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Reply:</strong> <a href="24410.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hadi,
<br>
<p>Is your job launching and executing normally? During the launch, frameworks
<br>
are initialized by opening all components, selecting the desired one, and
<br>
closing the others. I think you're just seeing components being opened,
<br>
queried, and ultimately closed. The important thing is knowing if PMI was
<br>
selected.  Set: -mca ess_base_verbose 5 -mca plm_base_verbose 5 -mca
<br>
grpcomm_base_verbose 5.
<br>
<p>Josh
<br>
<p><p>On Thu, May 15, 2014 at 4:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I wouldn't trust that PMI component in the RTE framework - it was only
</span><br>
<span class="quotelev1">&gt; created as a test example for that framework. It is routinely broken and
</span><br>
<span class="quotelev1">&gt; not maintained, and can only be used if forced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this on the trunk? Or are you using the 1.8 series? If the latter, that
</span><br>
<span class="quotelev1">&gt; component shouldn't even be there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2014, at 1:09 PM, Hadi Montakhabi &lt;hadi.montakhabi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By &quot;goes through orte component&quot;, I meant it does go into rte_orte_open
</span><br>
<span class="quotelev1">&gt; function in rte_orte_component.c.
</span><br>
<span class="quotelev1">&gt; Let me try to formulate my question in a different way:
</span><br>
<span class="quotelev1">&gt; There are two components in the rte framework, namely orte and pmi.
</span><br>
<span class="quotelev1">&gt; The question is whether pmi could be used independent from orte? Or it
</span><br>
<span class="quotelev1">&gt; needs orte to function?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peace,
</span><br>
<span class="quotelev1">&gt; Hadi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 15, 2014 at 2:59 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean &quot;goes through orte component&quot;? It will still call into
</span><br>
<span class="quotelev2">&gt;&gt; the orte code base, but will use PMI to do the modex.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2014, at 12:54 PM, Hadi Montakhabi &lt;hadi.montakhabi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to utilize pmi instead of orte, but I come across the
</span><br>
<span class="quotelev2">&gt;&gt; following problem.
</span><br>
<span class="quotelev2">&gt;&gt; I do configure using --with-slurm=[slurm installation path] and
</span><br>
<span class="quotelev2">&gt;&gt; --with-pmi=[slurm installation path].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After compiling, I run the executable using:
</span><br>
<span class="quotelev2">&gt;&gt; $srun -n 2 --mpi=pmi2 ./executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, this still goes through orte component, not the pmi.
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing something when I configure?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Peace,
</span><br>
<span class="quotelev2">&gt;&gt; Hadi
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
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24410.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24408.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24410.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Reply:</strong> <a href="24410.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
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
