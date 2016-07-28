<?
$subject_val = "Re: [OMPI users] Open-mpi running issue and bug";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 29 19:47:24 2012" -->
<!-- isoreceived="20121230004724" -->
<!-- sent="Sat, 29 Dec 2012 16:47:16 -0800 (PST)" -->
<!-- isosent="20121230004716" -->
<!-- name="Edge Edge" -->
<!-- email="edge_diners_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-mpi running issue and bug" -->
<!-- id="1356828436.61138.YahooMailNeo_at_web162705.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0C499E3F-567D-45F3-9037-DF08A3A96C25_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-mpi running issue and bug<br>
<strong>From:</strong> Edge Edge (<em>edge_diners_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-29 19:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21052.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>Previous message:</strong> <a href="21050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>In reply to:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

Many thanks.
I was downloading the latest version of OMPI, version.1.6.3.

I just INSTALL following the &quot;INSTALL&quot; guide.
I will sent the log file while installing later on.

Hope that it will be useful to solve my bug :(

Thanks first.

best regards
Edge


________________________________
 From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Edge Edge &lt;edge_diners_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Saturday, December 29, 2012 12:42 AM
Subject: Re: [OMPI users] Open-mpi running issue and bug
 

What version of OMPI are you using? How was it configured?



On Dec 28, 2012, at 2:16 AM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:

Hi,
&gt;
&gt;
&gt;Currently I was trying to run mpirun to improve the performance of my running.
&gt;However it keeps on showing the following bug:
&gt;
&gt;
&gt;--------------------------------------------------------------------------
&gt;It looks like opal_init failed for some reason; your parallel process is
&gt;likely to abort. &#160;There are many reasons that a parallel process can
&gt;fail during opal_init; some of which are due to configuration or
&gt;environment problems. &#160;This failure appears to be an internal failure;
&gt;here's some additional information (which may only be relevant to an
&gt;Open MPI developer):
&gt;
&gt;
&gt;&#160; opal_shmem_base_select failed
&gt;&#160; --&gt; Returned value -1 instead of OPAL_SUCCESS
&gt;--------------------------------------------------------------------------
&gt;[home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
&gt;[home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
&gt;make: *** [sample-1.fa] Error 255
&gt;
&gt;
&gt;Can I know how to solve this bug?
&gt;I got try to google around but I still fail to find related answer.
&gt;
&gt;
&gt;Below is the spec of my server:
&gt;Linux home 2.6.32-71.el6.x86_64 #1 SMP Wed Sep 1 01:33:01 EDT 2010 x86_64 x86_64 x86_64 GNU/Linux
&gt;
&gt;
&gt;
&gt;Hope it is useful for you in order to solve the bug.
&gt;
&gt;
&gt;Thanks.
&gt;
&gt;
&gt;
&gt;
&gt;best regards
&gt;Edge
&gt;
&gt;
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21051/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21052.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>Previous message:</strong> <a href="21050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>In reply to:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
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
