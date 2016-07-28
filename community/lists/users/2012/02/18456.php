<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 09:44:36 2012" -->
<!-- isoreceived="20120214144436" -->
<!-- sent="Tue, 14 Feb 2012 09:44:36 -0500" -->
<!-- isosent="20120214144436" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="4F3A2D04.24156.61E616AD_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
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
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20help:%20sm%20btl%20does%20not%20work%20when%20I%20specify%20the%20same%20host%20twice%20or%20more%20in%20the%20node%20list"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-14 09:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18457.php">Ralph Castain: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18455.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18457.php">Ralph Castain: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18457.php">Ralph Castain: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>The command &quot;env | grep OMPI&quot; output nothing but a blank line 
<br>
from my script. Anything I should set for mpirun?
<br>
<p>On the other hand, you may get reminded that I found you 
<br>
discussed some similar issue with Jonathan Dursi. The difference 
<br>
is that when I tried with --mca btl_sm_num_fifos #(np-1), it does 
<br>
not work with me, and I did find those files in the tmp directory that 
<br>
sm mmaped in(shared_mem_pool.ibnode001, etc), but for some 
<br>
mysterious reason, it hang at MPI_Init, so these files are created 
<br>
when we call MPI_Init?
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18457.php">Ralph Castain: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18455.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18457.php">Ralph Castain: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18457.php">Ralph Castain: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
