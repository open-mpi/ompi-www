<?
$subject_val = "Re: [OMPI users] Distribute app over open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 22:26:48 2009" -->
<!-- isoreceived="20091107032648" -->
<!-- sent="Fri, 6 Nov 2009 20:26:39 -0700" -->
<!-- isosent="20091107032639" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Distribute app over open mpi" -->
<!-- id="DF7B67DC-C996-4D65-85A9-F65062F13CA2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="331795.32121.qm_at_web43142.mail.sp1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Distribute app over open mpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 22:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11101.php">Terry Frankcombe: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>Previous message:</strong> <a href="11099.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Arnaud Westenberg: "[OMPI users] Distribute app over open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11101.php">Terry Frankcombe: "Re: [OMPI users] Distribute app over open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid we don't position binaries for you, though we have talked  
<br>
about providing that capability. I have some code in the system that - 
<br>
will- do it for certain special circumstances, but not in the general  
<br>
case, and much of the required infrastructure exists in the code  
<br>
today. I'm not sure how well that will do what you want.
<br>
<p>There are a number of reasons why we don't do it (locating required  
<br>
libraries, etc) - I think they have been reported on the user list  
<br>
several times over the years.
<br>
<p><p>On Nov 6, 2009, at 9:10 AM, Arnaud Westenberg wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the newbie question, but I'm having a hard time finding  
</span><br>
<span class="quotelev1">&gt; the answer, as I'm not even familiar with the terminology...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've setup a small cluster on Ubuntu (hardy) and everything is  
</span><br>
<span class="quotelev1">&gt; working great, including slurm etc. If I run the well known 'Pi'  
</span><br>
<span class="quotelev1">&gt; program I get the proper results returned from all the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I'm looking for a way such that I wouldn't need to install  
</span><br>
<span class="quotelev1">&gt; the application on each node, nor on the shared nfs. Currently I get  
</span><br>
<span class="quotelev1">&gt; the obvious error that the app is not found on the nodes on which it  
</span><br>
<span class="quotelev1">&gt; isn't installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The idea is that the master node would thus distribute the required  
</span><br>
<span class="quotelev1">&gt; (parts of the) program to the slave nodes so they can perform the  
</span><br>
<span class="quotelev1">&gt; assigned work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reason is that I want to run an FEA package on a much larger  
</span><br>
<span class="quotelev1">&gt; (redhat) cluster we currently use for CDF calculations. I really  
</span><br>
<span class="quotelev1">&gt; don't want to mess up the cluster as we bought it already configured  
</span><br>
<span class="quotelev1">&gt; and compiling new versions of the FEA package on it turns out to be  
</span><br>
<span class="quotelev1">&gt; a missing library nightmare.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Arnaud
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11101.php">Terry Frankcombe: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>Previous message:</strong> <a href="11099.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Arnaud Westenberg: "[OMPI users] Distribute app over open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11101.php">Terry Frankcombe: "Re: [OMPI users] Distribute app over open mpi"</a>
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
