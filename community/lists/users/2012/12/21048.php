<?
$subject_val = "[OMPI users] Open-mpi running issue and bug";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 28 05:16:31 2012" -->
<!-- isoreceived="20121228101631" -->
<!-- sent="Fri, 28 Dec 2012 02:16:26 -0800 (PST)" -->
<!-- isosent="20121228101626" -->
<!-- name="Edge Edge" -->
<!-- email="edge_diners_at_[hidden]" -->
<!-- subject="[OMPI users] Open-mpi running issue and bug" -->
<!-- id="1356689786.90823.YahooMailNeo_at_web162703.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Open-mpi running issue and bug<br>
<strong>From:</strong> Edge Edge (<em>edge_diners_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-28 05:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21047.php">Jeff Squyres: "[OMPI users] Planned outage: delayed 1 day"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

Currently I was trying to run mpirun to improve the performance of my running.
However it keeps on showing the following bug:

--------------------------------------------------------------------------
It looks like opal_init failed for some reason; your parallel process is
likely to abort. &#160;There are many reasons that a parallel process can
fail during opal_init; some of which are due to configuration or
environment problems. &#160;This failure appears to be an internal failure;
here's some additional information (which may only be relevant to an
Open MPI developer):

&#160; opal_shmem_base_select failed
&#160; --&gt; Returned value -1 instead of OPAL_SUCCESS
--------------------------------------------------------------------------
[home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
[home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
make: *** [sample-1.fa] Error 255

Can I know how to solve this bug?
I got try to google around but I still fail to find related answer.

Below is the spec of my server:
Linux home 2.6.32-71.el6.x86_64 #1 SMP Wed Sep 1 01:33:01 EDT 2010 x86_64 x86_64 x86_64 GNU/Linux


Hope it is useful for you in order to solve the bug.

Thanks.


best regards
Edge
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21048/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21047.php">Jeff Squyres: "[OMPI users] Planned outage: delayed 1 day"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
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
