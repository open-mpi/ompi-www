<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 09:55:35 2012" -->
<!-- isoreceived="20120214145535" -->
<!-- sent="Tue, 14 Feb 2012 06:55:31 -0800" -->
<!-- isosent="20120214145531" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="0313CA21-D19E-451A-B56C-375C929632C4_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3A2D04.24156.61E616AD_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 09:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18458.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18458.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like your script is stripping away the OMPI envars. That will break the job. Can you look at the script and see why it does that?
<br>
<p>Sent from my iPad
<br>
<p>On Feb 14, 2012, at 6:44 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command &quot;env | grep OMPI&quot; output nothing but a blank line 
</span><br>
<span class="quotelev1">&gt; from my script. Anything I should set for mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand, you may get reminded that I found you 
</span><br>
<span class="quotelev1">&gt; discussed some similar issue with Jonathan Dursi. The difference 
</span><br>
<span class="quotelev1">&gt; is that when I tried with --mca btl_sm_num_fifos #(np-1), it does 
</span><br>
<span class="quotelev1">&gt; not work with me, and I did find those files in the tmp directory that 
</span><br>
<span class="quotelev1">&gt; sm mmaped in(shared_mem_pool.ibnode001, etc), but for some 
</span><br>
<span class="quotelev1">&gt; mysterious reason, it hang at MPI_Init, so these files are created 
</span><br>
<span class="quotelev1">&gt; when we call MPI_Init?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
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
<li><strong>Next message:</strong> <a href="18458.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18458.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
