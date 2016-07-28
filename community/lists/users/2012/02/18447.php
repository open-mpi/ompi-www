<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 14:26:41 2012" -->
<!-- isoreceived="20120213192641" -->
<!-- sent="Mon, 13 Feb 2012 14:26:41 -0500" -->
<!-- isosent="20120213192641" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="4F391DA1.2297.5DC1FE48_at_localhost" -->
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
<strong>Date:</strong> 2012-02-13 14:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18448.php">Jeff Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Previous message:</strong> <a href="18446.php">Gustavo Correa: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18452.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18452.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thank you very much for your help!
<br>
<p>I tried to run the same test of ring_c from standard examples in 
<br>
Open MPI 1.4.3 distribution. If I ran as you described from the 
<br>
command line, it worked without any problem with sm btl 
<br>
included(with --mca btl self,sm,openib). However, if I use sm 
<br>
btl(with --mca btl self,sm,openib), and ran ring_c from an in-house 
<br>
script, it showed the same issue as I described in my previous 
<br>
email, it will hang at MPI_Init(...) call. I think this issue is related to 
<br>
some environmental setting in the script. Do you have any hints, 
<br>
any prerequisite of system environmental configuration to work with 
<br>
sm btl layer in Open MPI?
<br>
<p>Thanks again,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18448.php">Jeff Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Previous message:</strong> <a href="18446.php">Gustavo Correa: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18452.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18452.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
