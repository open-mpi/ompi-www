<?
$subject_val = "[OMPI devel] psm2 and psm2_ep_open problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 16:09:47 2016" -->
<!-- isoreceived="20160414200947" -->
<!-- sent="Thu, 14 Apr 2016 14:09:46 -0600" -->
<!-- isosent="20160414200946" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] psm2 and psm2_ep_open problems" -->
<!-- id="CAF1Cqj601DEV82N-RoCvsJ2Rc7_=L8DkovOof37Lr9+-x+-YZg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] psm2 and psm2_ep_open problems<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-14 16:09:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18763.php">Cabral, Matias A: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Previous message:</strong> <a href="18761.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18763.php">Cabral, Matias A: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Reply:</strong> <a href="18763.php">Cabral, Matias A: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>So we have this brand-new omnipath cluster here at work,
<br>
but people are having problem using it on a single node using
<br>
srun as the job launcher.
<br>
<p>The customer wants to use srun to launch jobs not the open mpi
<br>
mpirun.
<br>
<p>The customer installed 1.10.1, but I can reproduce the
<br>
problem with v2.x and I'm sure with master, unless I build the
<br>
ofi mtl.  ofi mtl works, psm2 mtl doesn't.
<br>
<p>I downloaded the psm2 code from github and started hacking.
<br>
<p>What appears to be the problem is that when running on a single
<br>
node one can go through a path in psmi_ep_open_device where
<br>
for a single process job, the value stored into epid is zero.
<br>
<p>This results in an assert failing in the __psm2_ep_open_internal
<br>
function.
<br>
<p>Is there a quick and dirty workaround that doesn't involve fixing
<br>
psm2 MTL?  I could suggest to the sysadmins to install libfabric 1.3
<br>
and build the openmpi to only have ofi mtl, but perhaps there's
<br>
another way to get psm2 mtl to work for single node jobs?  I'd prefer
<br>
to not ask users to disable psm2 mtl explicitly for their single node jobs.
<br>
<p>Thanks for suggestions.
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18763.php">Cabral, Matias A: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Previous message:</strong> <a href="18761.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18763.php">Cabral, Matias A: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Reply:</strong> <a href="18763.php">Cabral, Matias A: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
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
