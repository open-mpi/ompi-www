<?
$subject_val = "[OMPI devel] problem when binding to socket on a single socket node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 05:50:04 2010" -->
<!-- isoreceived="20100409095004" -->
<!-- sent="Fri, 09 Apr 2010 11:39:23 +0200" -->
<!-- isosent="20100409093923" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] problem when binding to socket on a single socket node" -->
<!-- id="1270805963.2561.282.camel_at_frecb014522.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] problem when binding to socket on a single socket node<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-09 05:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Previous message:</strong> <a href="7714.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Reply:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am facing a problem with a test that runs fine on some nodes, and
<br>
fails on others.
<br>
<p>I have a heterogenous cluster, with 3 types of nodes:
<br>
1) Single socket , 4 cores
<br>
2) 2 sockets, 4cores per socket
<br>
3) 2 sockets, 6 cores/socket
<br>
<p>I am using:
<br>
&nbsp;. salloc to allocate the nodes,
<br>
&nbsp;. mpirun binding/mapping options &quot;-bind-to-socket -bysocket&quot;
<br>
<p># salloc -N 1 mpirun -n 4 -bind-to-socket -bysocket sleep 900
<br>
<p>This command fails if the allocated node is of type #1 (single socket/4
<br>
cpus).
<br>
BTW, in that case orte_show_help is referencing a tag
<br>
(&quot;could-not-bind-to-socket&quot;) that does not exist in
<br>
help-odls-default.txt.
<br>
<p>While it succeeds when run on nodes of type #2 or 3.
<br>
I think a &quot;bind to socket&quot; should not return an error on a single socket
<br>
machine, but rather be a noop.
<br>
<p>The problem comes from the test
<br>
OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
<br>
called in odls_default_fork_local_proc() after the binding to the
<br>
processors socket has been done:
<br>
========
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;snip&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_PAFFINITY_CPU_ZERO(mask);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (n=0; n &lt; orte_default_num_cores_per_socket; n++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;snip&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_PAFFINITY_CPU_SET(phys_cpu, mask);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* if we did not bind it anywhere, then that is an error */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!bound) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help(&quot;help-odls-default.txt&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;odls-default:could-not-bind-to-socket&quot;, true);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ODLS_ERROR_OUT(ORTE_ERR_FATAL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
========
<br>
OPAL_PAFFINITY_PROCESS_IS_BOUND() will return true if there bits set in
<br>
the mask *AND* the number of bits set is lesser than the number of cpus
<br>
on the machine. Thus on a single socket, 4 cores machine the test will
<br>
fail. While on other the kinds of machines it will succeed.
<br>
<p>Again, I think the problem could be solved by changing the alogrithm,
<br>
and assuming that ORTE_BIND_TO_SOCKET, on a single socket machine =
<br>
noop.
<br>
<p>Another solution could be to call the test
<br>
OPAL_PAFFINITY_PROCESS_IS_BOUND() at the end of the loop only if we are
<br>
bound (orte_odls_globals.bound). Actually that is the only case where I
<br>
see a justification to this test (see attached patch).
<br>
<p>And may be both solutions could be mixed.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><p><pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;

</pre>
<p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7715/001_fix_process_binding_test.patch__charset_UTF-8">001_fix_process_binding_test.patch__charset_UTF-8</a>
</ul>
<!-- attachment="001_fix_process_binding_test.patch__charset_UTF-8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Previous message:</strong> <a href="7714.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Reply:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
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
