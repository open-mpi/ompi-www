<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 10:28:24 2012" -->
<!-- isoreceived="20120206152824" -->
<!-- sent="Mon, 6 Feb 2012 16:28:17 +0100" -->
<!-- isosent="20120206152817" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="OFBE96A983.5B8418AC-ONC125799C.005299BE-C125799C.00557C9B_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1327682314.23830.45.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun<br>
<strong>From:</strong> <a href="mailto:nadia.derbey_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20btl/openib:%20get_ib_dev_distance%20doesn't%20see%20processes%20as%20bound%20if%20the%20job%20has%20been%20launched%20by%20srun"><em>nadia.derbey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-06 10:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10316.php">Maurice Feskanich: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Previous message:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10266.php">nadia.derbey: "[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10354.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Resending, as i didn't get any answer...
<br>
<p>Regards,
<br>
Nadia
<br>
&nbsp;
<br>
<pre>
-- 
Nadia Derbey
 
devel-bounces_at_[hidden] wrote on 01/27/2012 05:38:34 PM:
&gt; De : &quot;nadia.derbey&quot; &lt;Nadia.Derbey_at_[hidden]&gt;
&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt; Date : 01/27/2012 05:35 PM
&gt; Objet : [OMPI devel] btl/openib: get_ib_dev_distance doesn't see 
&gt; processes as bound if the job has been launched by srun
&gt; Envoy&#233; par : devel-bounces_at_[hidden]
&gt; 
&gt; Hi,
&gt; 
&gt; If a job is launched using &quot;srun --resv-ports --cpu_bind:...&quot; and slurm
&gt; is configured with:
&gt;    TaskPlugin=task/affinity
&gt;    TaskPluginParam=Cpusets
&gt; 
&gt; each rank of that job is in a cpuset that contains a single CPU.
&gt; 
&gt; Now, if we use carto on top of this, the following happens in
&gt; get_ib_dev_distance() (in btl/openib/btl_openib_component.c):
&gt;    . opal_paffinity_base_get_processor_info() is called to get the
&gt;      number of logical processors (we get 1 due to the singleton cpuset)
&gt;    . we loop over that # of processors to check whether our process is
&gt;      bound to one of them. In our case the loop will be executed only
&gt;      once and we will never get the correct binding information.
&gt;    . if the process is bound actually get the distance to the device.
&gt;      in our case we won't execute that part of the code.
&gt; 
&gt; The attached patch is a proposal to fix the issue.
&gt; 
&gt; Regards,
&gt; Nadia
&gt; [attachment &quot;get_ib_dev_distance.patch&quot; deleted by Nadia Derbey/FR/
&gt; BULL] _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10315/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10315/get_ib_dev_distance.patch">get_ib_dev_distance.patch</a>
</ul>
<!-- attachment="get_ib_dev_distance.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10316.php">Maurice Feskanich: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Previous message:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10266.php">nadia.derbey: "[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10354.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
