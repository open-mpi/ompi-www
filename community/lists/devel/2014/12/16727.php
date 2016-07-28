<?
$subject_val = "[OMPI devel] problem running jobs on ompi-master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 26 09:45:12 2014" -->
<!-- isoreceived="20141226144512" -->
<!-- sent="Fri, 26 Dec 2014 08:45:02 -0600" -->
<!-- isosent="20141226144502" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] problem running jobs on ompi-master" -->
<!-- id="549D746E.6020202_at_cs.uh.edu" -->
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
<strong>Subject:</strong> [OMPI devel] problem running jobs on ompi-master<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-26 09:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Previous message:</strong> <a href="16726.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Maybe reply:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have some problems running jobs with ompi-master on one of our 
<br>
clusters (after doing a major software update). Here are scenarios that 
<br>
work and don't work.
<br>
<p>1. Everything still seems to work with 1.8.x series without any issues
<br>
2. With master, I can run without any issues single node, multi-process jobs
<br>
3. With master, I can run without any issues multi node jobs, as long as 
<br>
there is only a single MPI process per node
<br>
<p>4. I can not run multi-node jobs with multiple processes per node, ompi 
<br>
hangs for that scenario. This is independent of whether I enforce using 
<br>
openib or tcp, and just for the sake of simplicity I attach the output 
<br>
for tcp (there is another openib parameter issue that still linguers, 
<br>
but I will report that later).
<br>
<p>Here is the output that I receive if setting btl_base_verbose
<br>
<p>---------------snip------------------
<br>
gabriel_at_crill:~&gt; salloc -N 2 -n 4
<br>
gabriel_at_crill:~&gt; mpirun --mca btl tcp,self --mca btl_base_verbose 30 -np 
<br>
&nbsp;&nbsp;4 ./hello_world
<br>
[crill-004:18161] mca: base: components_register: registering btl components
<br>
[crill-004:18161] mca: base: components_register: found loaded component 
<br>
self
<br>
[crill-004:18161] mca: base: components_register: component self 
<br>
register function successful
<br>
[crill-004:18161] mca: base: components_register: found loaded component tcp
<br>
[crill-004:18161] mca: base: components_register: component tcp register 
<br>
function successful
<br>
[crill-004:18161] mca: base: components_open: opening btl components
<br>
[crill-004:18161] mca: base: components_open: found loaded component self
<br>
[crill-004:18161] mca: base: components_open: component self open 
<br>
function successful
<br>
[crill-004:18161] mca: base: components_open: found loaded component tcp
<br>
[crill-004:18161] mca: base: components_open: component tcp open 
<br>
function successful
<br>
[crill-004:18161] select: initializing btl component self
<br>
[crill-004:18161] select: init of component self returned success
<br>
[crill-004:18161] select: initializing btl component tcp
<br>
[crill-004:18161] btl: tcp: Searching for exclude address+prefix: 
<br>
127.0.0.1 / 8
<br>
[crill-004:18161] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[crill-004:18161] select: init of component tcp returned success
<br>
[crill-003:18962] mca: base: components_register: registering btl components
<br>
[crill-003:18962] mca: base: components_register: found loaded component 
<br>
self
<br>
[crill-003:18962] mca: base: components_register: component self 
<br>
register function successful
<br>
[crill-003:18962] mca: base: components_register: found loaded component tcp
<br>
[crill-003:18962] mca: base: components_register: component tcp register 
<br>
function successful
<br>
[crill-003:18962] mca: base: components_open: opening btl components
<br>
[crill-003:18962] mca: base: components_open: found loaded component self
<br>
[crill-003:18962] mca: base: components_open: component self open 
<br>
function successful
<br>
[crill-003:18962] mca: base: components_open: found loaded component tcp
<br>
[crill-003:18962] mca: base: components_open: component tcp open 
<br>
function successful
<br>
[crill-003:18963] mca: base: components_register: registering btl components
<br>
[crill-003:18963] mca: base: components_register: found loaded component 
<br>
self
<br>
[crill-003:18963] mca: base: components_register: component self 
<br>
register function successful
<br>
[crill-003:18963] mca: base: components_register: found loaded component tcp
<br>
[crill-003:18963] mca: base: components_register: component tcp register 
<br>
function successful
<br>
[crill-003:18963] mca: base: components_open: opening btl components
<br>
[crill-003:18963] mca: base: components_open: found loaded component self
<br>
[crill-003:18963] mca: base: components_open: component self open 
<br>
function successful
<br>
[crill-003:18963] mca: base: components_open: found loaded component tcp
<br>
[crill-003:18963] mca: base: components_open: component tcp open 
<br>
function successful
<br>
[crill-003:18964] mca: base: components_register: registering btl components
<br>
[crill-003:18964] mca: base: components_register: found loaded component 
<br>
self
<br>
[crill-003:18964] mca: base: components_register: component self 
<br>
register function successful
<br>
[crill-003:18964] mca: base: components_register: found loaded component tcp
<br>
[crill-003:18964] mca: base: components_register: component tcp register 
<br>
function successful
<br>
[crill-003:18964] mca: base: components_open: opening btl components
<br>
[crill-003:18964] mca: base: components_open: found loaded component self
<br>
[crill-003:18964] mca: base: components_open: component self open 
<br>
function successful
<br>
[crill-003:18964] mca: base: components_open: found loaded component tcp
<br>
[crill-003:18964] mca: base: components_open: component tcp open 
<br>
function successful
<br>
[crill-003:18962] select: initializing btl component self
<br>
[crill-003:18962] select: init of component self returned success
<br>
[crill-003:18962] select: initializing btl component tcp
<br>
[crill-003:18962] btl: tcp: Searching for exclude address+prefix: 
<br>
127.0.0.1 / 8
<br>
[crill-003:18962] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[crill-003:18962] select: init of component tcp returned success
<br>
[crill-003:18963] select: initializing btl component self
<br>
[crill-003:18963] select: init of component self returned success
<br>
[crill-003:18963] select: initializing btl component tcp
<br>
[crill-003:18963] btl: tcp: Searching for exclude address+prefix: 
<br>
127.0.0.1 / 8
<br>
[crill-003:18963] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[crill-003:18963] select: init of component tcp returned success
<br>
[crill-003:18964] select: initializing btl component self
<br>
[crill-003:18964] select: init of component self returned success
<br>
[crill-003:18964] select: initializing btl component tcp
<br>
[crill-003:18964] btl: tcp: Searching for exclude address+prefix: 
<br>
127.0.0.1 / 8
<br>
[crill-003:18964] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[crill-003:18964] select: init of component tcp returned success
<br>
[crill-003:18964] mca: bml: Using self btl to [[3417,1],2] on node crill-003
<br>
[crill-003:18964] mca: bml: Using tcp btl to [[3417,1],0] on node crill-003
<br>
[crill-003:18964] mca: bml: Using tcp btl to [[3417,1],1] on node crill-003
<br>
[crill-003:18964] mca: bml: Using tcp btl to [[3417,1],3] on node crill-004
<br>
[crill-004:18161] mca: bml: Using self btl to [[3417,1],3] on node crill-004
<br>
[crill-004:18161] mca: bml: Using tcp btl to [[3417,1],0] on node crill-003
<br>
[crill-004:18161] mca: bml: Using tcp btl to [[3417,1],1] on node crill-003
<br>
[crill-004:18161] mca: bml: Using tcp btl to [[3417,1],2] on node crill-003
<br>
^C
<br>
<p>------------
<br>
and than it just hangs.
<br>
<p>Does anybody have an idea/suggestion what to try or look for?
<br>
<p>Thanks
<br>
Edgar
<br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Previous message:</strong> <a href="16726.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Maybe reply:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
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
