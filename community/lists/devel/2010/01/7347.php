<?
$subject_val = "[OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 12:07:41 2010" -->
<!-- isoreceived="20100122170741" -->
<!-- sent="Fri, 22 Jan 2010 18:04:07 +0100" -->
<!-- isosent="20100122170407" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="[OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4" -->
<!-- id="4B59DA87.4020706_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 12:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Previous message:</strong> <a href="7346.php">Nadia Derbey: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Maybe reply:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When I try to select different alltoall algorithms using command line:
<br>
<p>&nbsp;$&gt; mpirun -mca coll_tuned_use_dynamic_rules 1 -mca coll_tuned_alltoall_algorithm 2 IMB-MPI alltoall
<br>
<p>it just crashes.
<br>
<p>I suppose that &quot;coll_tuned_use_dynamic_rules&quot; and &quot;coll_tuned_alltoall_algorithm&quot; should be used together when no extra rule file is specified, is that correct? But whatever algorithm I try to use, the application just crashes. Could this be a bug?
<br>
<p>The problem seems only exists in Open MPI v1.4, with 1.3 and 1.3.3, there isn't such problem.
<br>
<p><p>Thanks,
<br>
Shiqing 
<br>
<p><p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Previous message:</strong> <a href="7346.php">Nadia Derbey: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Maybe reply:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
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
