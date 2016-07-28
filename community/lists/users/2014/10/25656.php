<?
$subject_val = "[OMPI users] IB Retry Limit Errors when fabric changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 09:58:54 2014" -->
<!-- isoreceived="20141031135854" -->
<!-- sent="Fri, 31 Oct 2014 09:58:51 -0400" -->
<!-- isosent="20141031135851" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] IB Retry Limit Errors when fabric changes" -->
<!-- id="039F2919-4235-4D99-9C82-C9265B6E894C_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] IB Retry Limit Errors when fabric changes<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-31 09:58:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25657.php">Ralph Castain: "Re: [OMPI users] orte-ps and orte-top behavior"</a>
<li><strong>Previous message:</strong> <a href="25655.php">Roland Fehrenbacher: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does anyone have issues with jobs dying with errors:
<br>
<p><span class="quotelev1">&gt; The InfiniBand retry count between two MPI processes has been
</span><br>
<span class="quotelev1">&gt; exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
</span><br>
<span class="quotelev1">&gt; (section 12.7.38):
</span><br>
<p>We started seeing this about a year ago.  If we have changes to the IB fabric, this can happen.  Multiple times now when just plugging in line cards to switches on a live system causes large swaths of jobs to die with this error.
<br>
<p>Does anyone else have this problem?  We are a Mellonox based fabric.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25657.php">Ralph Castain: "Re: [OMPI users] orte-ps and orte-top behavior"</a>
<li><strong>Previous message:</strong> <a href="25655.php">Roland Fehrenbacher: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
