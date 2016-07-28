<?
$subject_val = "[OMPI devel] Refresh the libevent to 1.4.13.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 07:11:48 2010" -->
<!-- isoreceived="20100607111148" -->
<!-- sent="Mon, 07 Jun 2010 13:11:34 +0200" -->
<!-- isosent="20100607111134" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="[OMPI devel] Refresh the libevent to 1.4.13." -->
<!-- id="4C0CD3E6.3030403_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Refresh the libevent to 1.4.13.<br>
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 07:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8059.php">Ralph Castain: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Previous message:</strong> <a href="8057.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>A recent update of the libevent seems to cause a regression on our side.
<br>
<p>On my 32 cpus node cluster , process launch by srun, hang on 
<br>
opal_event_loop().
<br>
We see a deadlock in MPI_Init (endlessly looping in opal_event_loop()) 
<br>
when we launch processes with pure srun on 32 cores nodes.
<br>
<p>Here is the changeset which seems to be the cause of this regression :
<br>
changeset:    17590:58d39172e7b3
<br>
branch:       v1.5
<br>
parent:       17552:6fdc0376d114
<br>
user:         bosilca
<br>
date:         Tue Feb 23 22:38:06 2010 +0000
<br>
summary:      Refresh the libevent to 1.4.13.
<br>
<p>It seems that the libevent 1.4.13 was modified while being merged with 
<br>
Open MPI. The regression disappears if I apply the attached patch, which 
<br>
restores the original libevent code.
<br>
<p>Is there a reason for this difference between Open MPI and the official 
<br>
libevent ?
<br>
Do you think my fix is correct ?
<br>
<p>Thanks
<br>
Damien
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8058/001_libevent.patch">001_libevent.patch</a>
</ul>
<!-- attachment="001_libevent.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8059.php">Ralph Castain: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Previous message:</strong> <a href="8057.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
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
