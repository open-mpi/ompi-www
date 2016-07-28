<?
$subject_val = "Re: [OMPI devel] problem when binding to socket on a single socket node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 10:41:23 2010" -->
<!-- isoreceived="20100409144123" -->
<!-- sent="Fri, 9 Apr 2010 08:41:11 -0600" -->
<!-- isosent="20100409144111" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem when binding to socket on a single socket node" -->
<!-- id="76900103-3D80-4E40-9465-AD73481C9C5A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1270805963.2561.282.camel_at_frecb014522.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem when binding to socket on a single socket node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-09 10:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7717.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<li><strong>Previous message:</strong> <a href="7715.php">Nadia Derbey: "[OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7715.php">Nadia Derbey: "[OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7717.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<li><strong>Reply:</strong> <a href="7717.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to check: is this with the latest trunk? Brad and Terry have been making changes to this section of code, including modifying the PROCESS_IS_BOUND test...
<br>
<p><p>On Apr 9, 2010, at 3:39 AM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am facing a problem with a test that runs fine on some nodes, and
</span><br>
<span class="quotelev1">&gt; fails on others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a heterogenous cluster, with 3 types of nodes:
</span><br>
<span class="quotelev1">&gt; 1) Single socket , 4 cores
</span><br>
<span class="quotelev1">&gt; 2) 2 sockets, 4cores per socket
</span><br>
<span class="quotelev1">&gt; 3) 2 sockets, 6 cores/socket
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using:
</span><br>
<span class="quotelev1">&gt; . salloc to allocate the nodes,
</span><br>
<span class="quotelev1">&gt; . mpirun binding/mapping options &quot;-bind-to-socket -bysocket&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # salloc -N 1 mpirun -n 4 -bind-to-socket -bysocket sleep 900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This command fails if the allocated node is of type #1 (single socket/4
</span><br>
<span class="quotelev1">&gt; cpus).
</span><br>
<span class="quotelev1">&gt; BTW, in that case orte_show_help is referencing a tag
</span><br>
<span class="quotelev1">&gt; (&quot;could-not-bind-to-socket&quot;) that does not exist in
</span><br>
<span class="quotelev1">&gt; help-odls-default.txt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While it succeeds when run on nodes of type #2 or 3.
</span><br>
<span class="quotelev1">&gt; I think a &quot;bind to socket&quot; should not return an error on a single socket
</span><br>
<span class="quotelev1">&gt; machine, but rather be a noop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem comes from the test
</span><br>
<span class="quotelev1">&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
</span><br>
<span class="quotelev1">&gt; called in odls_default_fork_local_proc() after the binding to the
</span><br>
<span class="quotelev1">&gt; processors socket has been done:
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt;    &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;    OPAL_PAFFINITY_CPU_ZERO(mask);
</span><br>
<span class="quotelev1">&gt;    for (n=0; n &lt; orte_default_num_cores_per_socket; n++) {
</span><br>
<span class="quotelev1">&gt;        &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;        OPAL_PAFFINITY_CPU_SET(phys_cpu, mask);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    /* if we did not bind it anywhere, then that is an error */
</span><br>
<span class="quotelev1">&gt;    OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
</span><br>
<span class="quotelev1">&gt;    if (!bound) {
</span><br>
<span class="quotelev1">&gt;        orte_show_help(&quot;help-odls-default.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                       &quot;odls-default:could-not-bind-to-socket&quot;, true);
</span><br>
<span class="quotelev1">&gt;        ORTE_ODLS_ERROR_OUT(ORTE_ERR_FATAL);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND() will return true if there bits set in
</span><br>
<span class="quotelev1">&gt; the mask *AND* the number of bits set is lesser than the number of cpus
</span><br>
<span class="quotelev1">&gt; on the machine. Thus on a single socket, 4 cores machine the test will
</span><br>
<span class="quotelev1">&gt; fail. While on other the kinds of machines it will succeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, I think the problem could be solved by changing the alogrithm,
</span><br>
<span class="quotelev1">&gt; and assuming that ORTE_BIND_TO_SOCKET, on a single socket machine =
</span><br>
<span class="quotelev1">&gt; noop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another solution could be to call the test
</span><br>
<span class="quotelev1">&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND() at the end of the loop only if we are
</span><br>
<span class="quotelev1">&gt; bound (orte_odls_globals.bound). Actually that is the only case where I
</span><br>
<span class="quotelev1">&gt; see a justification to this test (see attached patch).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And may be both solutions could be mixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;001_fix_process_binding_test.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7717.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<li><strong>Previous message:</strong> <a href="7715.php">Nadia Derbey: "[OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7715.php">Nadia Derbey: "[OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7717.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<li><strong>Reply:</strong> <a href="7717.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
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
