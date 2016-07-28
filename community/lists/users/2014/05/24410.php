<?
$subject_val = "Re: [OMPI users] Using PMI as RTE component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 20:28:06 2014" -->
<!-- isoreceived="20140516002806" -->
<!-- sent="Thu, 15 May 2014 17:26:17 -0700" -->
<!-- isosent="20140516002617" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using PMI as RTE component" -->
<!-- id="50CEF5A0-1413-41B3-8566-99B483100E0D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z8Y5UVPYscwsYXo6PhKNrVFBZNZ+n-0sTw853WGqxmyhw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-15 20:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24411.php">Ralph Castain: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="24409.php">Joshua Ladd: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24409.php">Joshua Ladd: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24412.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Reply:</strong> <a href="24412.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh - he's talking about the PMI component in ompi/mca/rte. It generally doesn't work.
<br>
<p><p>On May 15, 2014, at 5:15 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hadi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is your job launching and executing normally? During the launch, frameworks are initialized by opening all components, selecting the desired one, and closing the others. I think you're just seeing components being opened, queried, and ultimately closed. The important thing is knowing if PMI was selected.  Set: -mca ess_base_verbose 5 -mca plm_base_verbose 5 -mca grpcomm_base_verbose 5.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 15, 2014 at 4:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I wouldn't trust that PMI component in the RTE framework - it was only created as a test example for that framework. It is routinely broken and not maintained, and can only be used if forced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this on the trunk? Or are you using the 1.8 series? If the latter, that component shouldn't even be there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 15, 2014, at 1:09 PM, Hadi Montakhabi &lt;hadi.montakhabi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By &quot;goes through orte component&quot;, I meant it does go into rte_orte_open function in rte_orte_component.c.
</span><br>
<span class="quotelev2">&gt;&gt; Let me try to formulate my question in a different way:
</span><br>
<span class="quotelev2">&gt;&gt; There are two components in the rte framework, namely orte and pmi.
</span><br>
<span class="quotelev2">&gt;&gt; The question is whether pmi could be used independent from orte? Or it needs orte to function?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Peace,
</span><br>
<span class="quotelev2">&gt;&gt; Hadi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, May 15, 2014 at 2:59 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean &quot;goes through orte component&quot;? It will still call into the orte code base, but will use PMI to do the modex.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2014, at 12:54 PM, Hadi Montakhabi &lt;hadi.montakhabi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to utilize pmi instead of orte, but I come across the following problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do configure using --with-slurm=[slurm installation path] and --with-pmi=[slurm installation path].
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After compiling, I run the executable using:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $srun -n 2 --mpi=pmi2 ./executable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, this still goes through orte component, not the pmi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I missing something when I configure?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Peace,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hadi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24411.php">Ralph Castain: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="24409.php">Joshua Ladd: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24409.php">Joshua Ladd: "Re: [OMPI users] Using PMI as RTE component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24412.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Reply:</strong> <a href="24412.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
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
