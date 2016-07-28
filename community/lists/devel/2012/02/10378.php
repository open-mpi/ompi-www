<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 16:27:47 2012" -->
<!-- isoreceived="20120209212747" -->
<!-- sent="Thu, 09 Feb 2012 13:27:38 -0800" -->
<!-- isosent="20120209212738" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="4F343A4A.1080908_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F34386E.3080700_at_inria.fr" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 16:27:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10379.php">Ralph Castain: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10377.php">Brice Goglin: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10376.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10365.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/9/2012 1:19 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; So you can find out that you are &quot;bound&quot; by a Linux cgroup (I am not
</span><br>
<span class="quotelev1">&gt; saying Linux &quot;cpuset&quot; to avoid confusion) by comparing root-&gt;cpuset and
</span><br>
<span class="quotelev1">&gt; root-&gt;online_cpuset.
</span><br>
<p>If I understood the problem as stated earlier in this thread the current 
<br>
code was looping over a (singleton) cpuset and not finding finding the 
<br>
current process to be bound to any of the cpus in the set.  For that 
<br>
case the fact that the cpuset is a singleton should already have been 
<br>
enough information to know that one is effectively bound.  Is there 
<br>
really more to this than a need for special-casing the singleton?
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10379.php">Ralph Castain: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10377.php">Brice Goglin: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10376.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10365.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
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
