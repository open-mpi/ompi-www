<?
$subject_val = "[OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 19:17:10 2016" -->
<!-- isoreceived="20160125001710" -->
<!-- sent="Mon, 25 Jan 2016 09:17:07 +0900" -->
<!-- isosent="20160125001707" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] tm-less tm module" -->
<!-- id="56A56983.5010302_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] tm-less tm module<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-24 19:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18498.php">Federico Reghenzani: "[OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18496.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18505.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18505.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>there was a question about mtt on the mtt mailing list 
<br>
<a href="http://www.open-mpi.org/community/lists/mtt-users/2016/01/0840.php">http://www.open-mpi.org/community/lists/mtt-users/2016/01/0840.php</a>
<br>
<p>after a few emails (some offline) it seems that was a configuration issue.
<br>
the user is running PBSPro and it seems OpenMPI was not configured with 
<br>
the tm module
<br>
(e.g. tm is not included in the default location, and he did not 
<br>
configure with --with-tm=/.../pbspro)
<br>
<p>in this case, the tm module is not built, and when a job runs under 
<br>
PBSPro without any hostfile,
<br>
the job runs on one node only.
<br>
in order to make this easier to diagnose, what about always building the 
<br>
tm module :
<br>
- if tm is found by configury, build the OpenMPI tm modules as usual
<br>
- if tm is not found by configury, build a dumb module that will issue a 
<br>
warning or abort
<br>
&nbsp;&nbsp;&nbsp;if a job is ran under PBS/torque
<br>
&nbsp;&nbsp;&nbsp;(e.g. some PBS specific environment variable are defined)
<br>
<p>of course, the spec of this &quot;dumb&quot; module can be improved, for example
<br>
- add a MCA parameter to disable the warning
<br>
- issue the warning only if there is more that one node in the job *and* 
<br>
no machinefile nor host list was passed to the mpirun command line
<br>
<p>Any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18498.php">Federico Reghenzani: "[OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18496.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18505.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18505.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
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
