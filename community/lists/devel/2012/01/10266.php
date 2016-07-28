<?
$subject_val = "[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 11:34:54 2012" -->
<!-- isoreceived="20120127163454" -->
<!-- sent="Fri, 27 Jan 2012 17:38:34 +0100" -->
<!-- isosent="20120127163834" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="1327682314.23830.45.camel_at_B014522" -->
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
<strong>Subject:</strong> [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 11:38:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10267.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>Previous message:</strong> <a href="10265.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10315.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10315.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10354.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>If a job is launched using &quot;srun --resv-ports --cpu_bind:...&quot; and slurm
<br>
is configured with:
<br>
&nbsp;&nbsp;&nbsp;TaskPlugin=task/affinity
<br>
&nbsp;&nbsp;&nbsp;TaskPluginParam=Cpusets
<br>
<p>each rank of that job is in a cpuset that contains a single CPU.
<br>
<p>Now, if we use carto on top of this, the following happens in
<br>
get_ib_dev_distance() (in btl/openib/btl_openib_component.c):
<br>
&nbsp;&nbsp;&nbsp;. opal_paffinity_base_get_processor_info() is called to get the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number of logical processors (we get 1 due to the singleton cpuset)
<br>
&nbsp;&nbsp;&nbsp;. we loop over that # of processors to check whether our process is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound to one of them. In our case the loop will be executed only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;once and we will never get the correct binding information.
<br>
&nbsp;&nbsp;&nbsp;. if the process is bound actually get the distance to the device.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in our case we won't execute that part of the code.
<br>
<p>The attached patch is a proposal to fix the issue.
<br>
<p>Regards,
<br>
Nadia
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10266/get_ib_dev_distance.patch">get_ib_dev_distance.patch</a>
</ul>
<!-- attachment="get_ib_dev_distance.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10267.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>Previous message:</strong> <a href="10265.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10315.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10315.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10354.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
