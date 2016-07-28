<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 15:53:37 2007" -->
<!-- isoreceived="20070118205337" -->
<!-- sent="Thu, 18 Jan 2007 20:53:54 +0000" -->
<!-- isosent="20070118205354" -->
<!-- name="Arif Ali" -->
<!-- email="aali_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]" -->
<!-- id="45AFDE62.8020107_at_ocf.co.uk" -->
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
<strong>From:</strong> Arif Ali (<em>aali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-18 15:53:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2500.php">Barry Evans: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2498.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2511.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Maybe reply:</strong> <a href="2511.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi List,
<br>
<p>1. We have
<br>
HW
<br>
* 2xBladecenter H
<br>
* 2xCisco Infiniband Switch Modules
<br>
* 1xCisco Infiniband Switch
<br>
* 16x PPC64 JS21 blades each are 4 cores, with Cisco HCA
<br>
<p>SW
<br>
* SLES 10
<br>
* OFED 1.1 w. OpenMPI 1.1.1
<br>
<p>I am running the Intel MPI Benchmark (IMB) on the cluster as a part of 
<br>
validation process for the customer.
<br>
<p>I have tried the OpenMPI that comes with OFED 1.1, which gave spurious 
<br>
&quot;Not Enough Memory&quot; error messages, after looking through FAQs (with the 
<br>
help of Cisco) I was able to find the problems and fixes. I used the 
<br>
FAQs to add unlimited soft and hard limits for memlock, turned RDMA off 
<br>
by using &quot;--mca btl_openib_flags 1&quot;. This still did not work, and still 
<br>
got the Memory problems.
<br>
<p>I tried the nightly snapshot of OpenMPI-1.2b4r13137, which failed miserably.
<br>
<p>I then tried the released version of the OpenMPI-1.2b3, which got me 
<br>
further than before. Now the benchmark goes through all the tests until 
<br>
Allgatherv finishes, and it seems that it is waiting to start AlltoAll, 
<br>
I have waited about 12 hours to see if this continues. I have since then 
<br>
managed to run AlltoAll, and the rest of the benchmark separately.
<br>
<p>I have tried a few tunable paramaters, that was suggested by Cisco, 
<br>
which improved the results, but still hung. The parameters that I have 
<br>
used to try and diagnose are below. I used the debug/verbose variables 
<br>
to see if I could see if I could get error messages on the running of 
<br>
the benchmark.
<br>
<p>#orte_debug=1
<br>
#btl_openib_verbose=1
<br>
#mca_verbose=1
<br>
#btl_base_debug=1
<br>
btl_openib_flags=1
<br>
mpi_leave_pinned=1
<br>
mpool_base_use_mem_hooks=1
<br>
<p>2. On another side note, I am having similar problems on another 
<br>
customer's cluster, where the benchmark hangs but at a different place 
<br>
each time.
<br>
<p>HW specs
<br>
* 12x IBM 3455 2xdual Core machines, with Infinipath/pathscale HCAs
<br>
* 1x Voltaire Switch
<br>
SW
<br>
* master: RHEL 4 AS U3
<br>
* compute: RHEL 4 WS U3
<br>
* OFED 1.1.1 w. OpenMPI-1.1.2
<br>
<p>A) In this case, I have also had errors, which I was able to turn off by 
<br>
adding btl_openib_warn_no_hca_params_found to 0, but wasn't sure if this 
<br>
was the right thing to do.
<br>
--------------------------------------------------------------------------
<br>
WARNING: No HCA parameters were found for the HCA that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Hostname:           node004
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HCA vendor ID:      0x1fc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HCA vendor part ID: 13
<br>
<p>Default HCA parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_hca_param_files MCA parameter to set values for your HCA.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_hca_params_found to 0.
<br>
--------------------------------------------------------------------------
<br>
b) The runs on this machine would also hang, so I tried to remove all 
<br>
the unnecessary daemons, to see if that would improve it. In this case, 
<br>
in 75% of the tim, it would runn longer until AlltoAll put would hang 
<br>
there, or otherwise it would hang at various other places. At times I 
<br>
also errors regarding retry count and timeout, for both which I 
<br>
increased to 14 and 20 respectively, I tried similar steps to the PPC 
<br>
cluster to fix the problem of freezing but had no luck. Below are all 
<br>
the parameters that I have used in this case
<br>
<p><p>#orte_debug=1
<br>
#btl_openib_verbose=1
<br>
#mca_verbose=1
<br>
#btl_base_debug=1
<br>
btl_openib_warn_no_hca_params_found=0
<br>
btl_openib_flags=1
<br>
#mpi_preconnect_all=1
<br>
mpi_leave_pinned=1
<br>
btl_openib_ib_retry_count=14
<br>
btl_openib_ib_timeout=20
<br>
mpool_base_use_mem_hooks=1
<br>
<p>I hope I have included all the info, if there is anything else required, 
<br>
then I should be able to provide that to you, without a problem
<br>
<p>thanks a lot for your help in advance
<br>
<p><pre>
-- 
regards,
Arif Ali
Software Engineer
OCF plc
Mobile: +44 (0)7970 148 122
Office: +44 (0)114 257 2200
Fax:    +44 (0)114 257 0022
Email:  aali_at_[hidden]
Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
Skype:  arif_ali80
MSN:    aali_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2500.php">Barry Evans: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2498.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2511.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Maybe reply:</strong> <a href="2511.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
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
