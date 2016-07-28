<?
$subject_val = "Re: [OMPI devel] problem when binding to socket on a single socket	node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 10:57:58 2010" -->
<!-- isoreceived="20100409145758" -->
<!-- sent="Fri, 09 Apr 2010 16:47:18 +0200" -->
<!-- isosent="20100409144718" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem when binding to socket on a single socket	node" -->
<!-- id="1270824438.2561.305.camel_at_frecb014522.frec.bull.fr" -->
<!-- inreplyto="76900103-3D80-4E40-9465-AD73481C9C5A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem when binding to socket on a single socket	node<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-09 10:47:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Previous message:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Reply:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-04-09 at 08:41 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Just to check: is this with the latest trunk? Brad and Terry have been making changes to this section of code, including modifying the PROCESS_IS_BOUND test...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Well, it was on the v1.5. But I just checked: looks like
<br>
&nbsp;&nbsp;1. the call to OPAL_PAFFINITY_PROCESS_IS_BOUND is still there in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;odls_default_fork_local_proc()
<br>
&nbsp;&nbsp;2. OPAL_PAFFINITY_PROCESS_IS_BOUND() is defined the same way
<br>
<p>But, I'll give it a try with the latest trunk.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; On Apr 9, 2010, at 3:39 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am facing a problem with a test that runs fine on some nodes, and
</span><br>
<span class="quotelev2">&gt; &gt; fails on others.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a heterogenous cluster, with 3 types of nodes:
</span><br>
<span class="quotelev2">&gt; &gt; 1) Single socket , 4 cores
</span><br>
<span class="quotelev2">&gt; &gt; 2) 2 sockets, 4cores per socket
</span><br>
<span class="quotelev2">&gt; &gt; 3) 2 sockets, 6 cores/socket
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am using:
</span><br>
<span class="quotelev2">&gt; &gt; . salloc to allocate the nodes,
</span><br>
<span class="quotelev2">&gt; &gt; . mpirun binding/mapping options &quot;-bind-to-socket -bysocket&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; # salloc -N 1 mpirun -n 4 -bind-to-socket -bysocket sleep 900
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This command fails if the allocated node is of type #1 (single socket/4
</span><br>
<span class="quotelev2">&gt; &gt; cpus).
</span><br>
<span class="quotelev2">&gt; &gt; BTW, in that case orte_show_help is referencing a tag
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;could-not-bind-to-socket&quot;) that does not exist in
</span><br>
<span class="quotelev2">&gt; &gt; help-odls-default.txt.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; While it succeeds when run on nodes of type #2 or 3.
</span><br>
<span class="quotelev2">&gt; &gt; I think a &quot;bind to socket&quot; should not return an error on a single socket
</span><br>
<span class="quotelev2">&gt; &gt; machine, but rather be a noop.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem comes from the test
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
</span><br>
<span class="quotelev2">&gt; &gt; called in odls_default_fork_local_proc() after the binding to the
</span><br>
<span class="quotelev2">&gt; &gt; processors socket has been done:
</span><br>
<span class="quotelev2">&gt; &gt; ========
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    OPAL_PAFFINITY_CPU_ZERO(mask);
</span><br>
<span class="quotelev2">&gt; &gt;    for (n=0; n &lt; orte_default_num_cores_per_socket; n++) {
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL_PAFFINITY_CPU_SET(phys_cpu, mask);
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    /* if we did not bind it anywhere, then that is an error */
</span><br>
<span class="quotelev2">&gt; &gt;    OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
</span><br>
<span class="quotelev2">&gt; &gt;    if (!bound) {
</span><br>
<span class="quotelev2">&gt; &gt;        orte_show_help(&quot;help-odls-default.txt&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                       &quot;odls-default:could-not-bind-to-socket&quot;, true);
</span><br>
<span class="quotelev2">&gt; &gt;        ORTE_ODLS_ERROR_OUT(ORTE_ERR_FATAL);
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt; ========
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_PAFFINITY_PROCESS_IS_BOUND() will return true if there bits set in
</span><br>
<span class="quotelev2">&gt; &gt; the mask *AND* the number of bits set is lesser than the number of cpus
</span><br>
<span class="quotelev2">&gt; &gt; on the machine. Thus on a single socket, 4 cores machine the test will
</span><br>
<span class="quotelev2">&gt; &gt; fail. While on other the kinds of machines it will succeed.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Again, I think the problem could be solved by changing the alogrithm,
</span><br>
<span class="quotelev2">&gt; &gt; and assuming that ORTE_BIND_TO_SOCKET, on a single socket machine =
</span><br>
<span class="quotelev2">&gt; &gt; noop.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Another solution could be to call the test
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_PAFFINITY_PROCESS_IS_BOUND() at the end of the loop only if we are
</span><br>
<span class="quotelev2">&gt; &gt; bound (orte_odls_globals.bound). Actually that is the only case where I
</span><br>
<span class="quotelev2">&gt; &gt; see a justification to this test (see attached patch).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; And may be both solutions could be mixed.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nadia
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;001_fix_process_binding_test.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Previous message:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7716.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Reply:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
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
