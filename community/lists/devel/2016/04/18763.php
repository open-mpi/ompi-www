<?
$subject_val = "Re: [OMPI devel] psm2 and psm2_ep_open problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 18:05:10 2016" -->
<!-- isoreceived="20160414220510" -->
<!-- sent="Thu, 14 Apr 2016 22:05:07 +0000" -->
<!-- isosent="20160414220507" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] psm2 and psm2_ep_open problems" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D853FDB1C_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj601DEV82N-RoCvsJ2Rc7_=L8DkovOof37Lr9+-x+-YZg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] psm2 and psm2_ep_open problems<br>
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-14 18:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18764.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Previous message:</strong> <a href="18762.php">Howard Pritchard: "[OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>In reply to:</strong> <a href="18762.php">Howard Pritchard: "[OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18764.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Reply:</strong> <a href="18764.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>

<br>
I suspect this is the known issue that when using SLURM with OMPI and PSM that is discussed here:
<br>
<a href="https://www.open-mpi.org/community/lists/users/2010/12/15220.php">https://www.open-mpi.org/community/lists/users/2010/12/15220.php</a>
<br>

<br>
As per today, orte generates the psm_key, so when using SLURM this does not happen and is necessary to set it in the environment.  Here Ralph explains the workaround:
<br>
<a href="https://www.open-mpi.org/community/lists/users/2010/12/15242.php">https://www.open-mpi.org/community/lists/users/2010/12/15242.php</a>
<br>

<br>
As you found, epid of 0 is not a valid value. So, basing comments on:
<br>
<a href="https://github.com/01org/opa-psm2/blob/master/psm_ep.c">https://github.com/01org/opa-psm2/blob/master/psm_ep.c</a>
<br>

<br>
the assert of line 832. psmi_ep_open_device()  will do :
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* We use a LID of 0 for non-HFI communication.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Since a jobkey is not available from IPS, pull the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* first 16 bits from the UUID.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*epid = PSMI_EPID_PACK(((uint16_t *) unique_job_key)[0],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(rank &gt;&gt; 3), rank, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PSMI_HFI_TYPE_DEFAULT, rank);
<br>
&nbsp;In the particular case you mention below, when there is no HFI (shared memory), rank 0 and the passed key is 0, epid will be 0.
<br>

<br>
SOLUTION: set
<br>
Set in the environment OMPI_MCA_orte_precondition_transports with a value different than 0.
<br>

<br>
Thanks,
<br>

<br>
_MAC
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Thursday, April 14, 2016 1:10 PM
<br>
To: Open MPI Developers List &lt;devel_at_[hidden]&gt;
<br>
Subject: [OMPI devel] psm2 and psm2_ep_open problems
<br>

<br>
Hi Folks,
<br>

<br>
So we have this brand-new omnipath cluster here at work,
<br>
but people are having problem using it on a single node using
<br>
srun as the job launcher.
<br>

<br>
The customer wants to use srun to launch jobs not the open mpi
<br>
mpirun.
<br>

<br>
The customer installed 1.10.1, but I can reproduce the
<br>
problem with v2.x and I'm sure with master, unless I build the
<br>
ofi mtl.  ofi mtl works, psm2 mtl doesn't.
<br>

<br>
I downloaded the psm2 code from github and started hacking.
<br>

<br>
What appears to be the problem is that when running on a single
<br>
node one can go through a path in psmi_ep_open_device where
<br>
for a single process job, the value stored into epid is zero.
<br>

<br>
This results in an assert failing in the __psm2_ep_open_internal
<br>
function.
<br>

<br>
Is there a quick and dirty workaround that doesn't involve fixing
<br>
psm2 MTL?  I could suggest to the sysadmins to install libfabric 1.3
<br>
and build the openmpi to only have ofi mtl, but perhaps there's
<br>
another way to get psm2 mtl to work for single node jobs?  I'd prefer
<br>
to not ask users to disable psm2 mtl explicitly for their single node jobs.
<br>

<br>
Thanks for suggestions.
<br>

<br>
Howard
<br>

<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18763/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18764.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Previous message:</strong> <a href="18762.php">Howard Pritchard: "[OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>In reply to:</strong> <a href="18762.php">Howard Pritchard: "[OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18764.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Reply:</strong> <a href="18764.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
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
