<?
$subject_val = "Re: [OMPI users] jobs with more that 2, 500 processes will not even start";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 16:11:08 2010" -->
<!-- isoreceived="20101214211108" -->
<!-- sent="Tue, 14 Dec 2010 14:10:59 -0700" -->
<!-- isosent="20101214211059" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] jobs with more that 2, 500 processes will not even start" -->
<!-- id="1DEDC91D-EA9D-4CB6-86DD-DBCFAA6224F7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D07D955.5080103_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] jobs with more that 2, 500 processes will not even start<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 16:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15135.php">Jeff Squyres: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15130.php">Lydia Heck: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It applies to both. In the rsh/ssh launcher, there is a limit on how many concurrent ssh/rsh sessions we have open at any one time. This is required due to OS limitations. As each daemon completes its launch, it &quot;daemonizes&quot; and closes the ssh/rsh session, thus enabling another daemon to be launched.
<br>
<p>We have launched very large clusters with ssh/rsh without problem.
<br>
<p>My best guess here is that Lydia has the -do-not-daemonize flag (or mca param) set somewhere, perhaps for debug purposes so that stdout/stderr will be forwarded by ssh/rsh. Unfortunately, that means the session doesn't get closed, and blocks the launch from completing. We are supposed to detect that situation and output an error message before aborting.
<br>
<p>However, without more info from her, there is nothing more I can do.
<br>
<p><p>On Dec 14, 2010, at 1:53 PM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; Bonjour Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder : is this plm_rsh_num_concurrent parameter standing ONLY for rsh use,
</span><br>
<span class="quotelev1">&gt; or for ssh OR rsh, depending on plm_rsh_agent, please ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,  Best,   G.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 14/12/2010 18:30, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; That's a big cluster to be starting with rsh! :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When you say it won't start, do you mean that it hangs? Or does it fail with some error message? How many nodes are involved (this is the important number, not the number of cores)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, what version are you using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 14, 2010, at 9:10 AM, Lydia Heck wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; About 9 months ago we had a new installation with a system of 1800 cores and at the time we found that jobs with more than 1028 cores would not start. At the time a colleague found that setting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_plm_rsh_num_concurrent=256
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help with the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have now increased our processor count to more than 2700 cores and a job with 2,500 jobs does not start.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any advice?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best wishes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lydia Heck
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr E L Heck
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Senior Computer Manager
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Durham Institute for Computational Cosmology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ogden Centre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Physics South Road
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DURHAM, DH1 3LE United Kingdom
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ___________________________________________
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cordialement,   Gilbert.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;  Gilbert Grosdidier             Gilbert.Grosdidier_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
</span><br>
<span class="quotelev1">&gt;  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
</span><br>
<span class="quotelev1">&gt;  B.P. 34, F-91898 Orsay Cedex (FRANCE)
</span><br>
<span class="quotelev1">&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15135.php">Jeff Squyres: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15130.php">Lydia Heck: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
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
