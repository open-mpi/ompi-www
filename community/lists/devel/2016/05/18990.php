<?
$subject_val = "[OMPI devel] default mapping on master vs v2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 22:01:11 2016" -->
<!-- isoreceived="20160517020111" -->
<!-- sent="Tue, 17 May 2016 11:01:07 +0900" -->
<!-- isosent="20160517020107" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] default mapping on master vs v2.x" -->
<!-- id="56c9cca9-b2a8-af6c-53c2-039e06b16131_at_rist.or.jp" -->
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
<strong>Subject:</strong> [OMPI devel] default mapping on master vs v2.x<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 22:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18991.php">Christopher Samuel: "Re: [OMPI devel] Github pricing plan changes announced today"</a>
<li><strong>Previous message:</strong> <a href="18989.php">Ralph Castain: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18994.php">Gilles Gouaillardet: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
<li><strong>Reply:</strong> <a href="18994.php">Gilles Gouaillardet: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>currently, default mapping policy on master is different than v2.x.
<br>
<p>my preliminary question is : when will the master mapping policy land 
<br>
into the release branch ?
<br>
<p>v2.0.0 ? v2.x ? v3.0.0 ?
<br>
<p><p>here are some commands and their output (both n0 and n1 have 16 cores 
<br>
each, mpirun runs on n0)
<br>
<p>first, let's force 2 slots per node via the --host parameter, and play 
<br>
with mapping
<br>
<p>[gilles_at_n0 ~]$ mpirun --tag-output --host n0:2,n1:2 -np 4 hostname  | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n0
<br>
[1,2]&lt;stdout&gt;:n1
<br>
[1,3]&lt;stdout&gt;:n1
<br>
[gilles_at_n0 ~]$ mpirun --tag-output --host n0:2,n1:2 -np 4 --map-by 
<br>
socket hostname  | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n0
<br>
[1,2]&lt;stdout&gt;:n1
<br>
[1,3]&lt;stdout&gt;:n1
<br>
<p>/* so far so good, default mapping is --map-by socket, and mapping looks 
<br>
correct to me */
<br>
<p>[gilles_at_n0 ~]$ mpirun --tag-output --host n0:2,n1:2 -np 4 --map-by node 
<br>
hostname  | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n1
<br>
[1,2]&lt;stdout&gt;:n0
<br>
[1,3]&lt;stdout&gt;:n1
<br>
<p>/* mapping looks correct to me too */
<br>
<p>now let's force 4 slots per node
<br>
<p>[gilles_at_n0 ~]$ mpirun --tag-output --host n0:4,n1:4 -np 4 --map-by node 
<br>
hostname  | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n1
<br>
[1,2]&lt;stdout&gt;:n0
<br>
[1,3]&lt;stdout&gt;:n1
<br>
<p>/* same output than previously, looks correct to me */
<br>
<p>[gilles_at_n0 ~]$ mpirun --tag-output --host n0:4,n1:4 -np 4 --map-by 
<br>
socket hostname  | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n0
<br>
[1,2]&lt;stdout&gt;:n0
<br>
[1,3]&lt;stdout&gt;:n0
<br>
<p>/* all tasks run on n0, even if i explicitly requested --map-by socket, 
<br>
that looks wrong to me */
<br>
<p>[gilles_at_n0 ~]$ mpirun --tag-output --host n0:4,n1:4 -np 4 hostname  | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n0
<br>
[1,2]&lt;stdout&gt;:n0
<br>
[1,3]&lt;stdout&gt;:n0
<br>
<p>/* same output than previously, which makes sense to me since the 
<br>
default mapping policy is --map-by socket,
<br>
<p>but all tasks run on n0, which still looks wrong to me */
<br>
<p><p>if i do not force the number of slots, i get the same output (16 cores 
<br>
are detected on each node) regardless the --map-by socket option.
<br>
<p>it seems --map-by core is used, regardless what we pass on the command line.
<br>
<p>in the last cases, is running all tasks on one node the intended behavior ?
<br>
<p>if yes, which mapping option can be used to run the first 2 tasks on the 
<br>
first node, and the last 2 tasks on the second nodes ?
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18991.php">Christopher Samuel: "Re: [OMPI devel] Github pricing plan changes announced today"</a>
<li><strong>Previous message:</strong> <a href="18989.php">Ralph Castain: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18994.php">Gilles Gouaillardet: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
<li><strong>Reply:</strong> <a href="18994.php">Gilles Gouaillardet: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
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
