<?
$subject_val = "Re: [OMPI devel] problem when binding to socket on a single socket node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 12:08:42 2010" -->
<!-- isoreceived="20100409160842" -->
<!-- sent="Fri, 9 Apr 2010 10:08:33 -0600" -->
<!-- isosent="20100409160833" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem when binding to socket on a single socket node" -->
<!-- id="99E11B27-C0E2-4DF7-BDE3-FF0A19FEB662_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BBF48C7.207_at_oracle.com" -->
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
<strong>Date:</strong> 2010-04-09 12:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7720.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Upgrading trac"</a>
<li><strong>Previous message:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7721.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Reply:</strong> <a href="7721.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, just wanted to ensure everyone was working from the same base code.
<br>
<p>Terry, Brad: you might want to look this proposed change over. Something doesn't quite look right to me, but I haven't really walked through the code to check it.
<br>
<p><p>On Apr 9, 2010, at 9:33 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Nadia Derbey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 2010-04-09 at 08:41 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just to check: is this with the latest trunk? Brad and Terry have been making changes to this section of code, including modifying the PROCESS_IS_BOUND test...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, it was on the v1.5. But I just checked: looks like
</span><br>
<span class="quotelev2">&gt;&gt;   1. the call to OPAL_PAFFINITY_PROCESS_IS_BOUND is still there in
</span><br>
<span class="quotelev2">&gt;&gt;      odls_default_fork_local_proc()
</span><br>
<span class="quotelev2">&gt;&gt;   2. OPAL_PAFFINITY_PROCESS_IS_BOUND() is defined the same way
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But, I'll give it a try with the latest trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; The changes, I've done do not touch OPAL_PAFFINITY_PROCESS_IS_BOUND at all.  Also, I am only touching code related to the &quot;bind-to-core&quot; option so I really doubt if my changes are causing issues here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 9, 2010, at 3:39 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am facing a problem with a test that runs fine on some nodes, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fails on others.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a heterogenous cluster, with 3 types of nodes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) Single socket , 4 cores
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) 2 sockets, 4cores per socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) 2 sockets, 6 cores/socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; . salloc to allocate the nodes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; . mpirun binding/mapping options &quot;-bind-to-socket -bysocket&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # salloc -N 1 mpirun -n 4 -bind-to-socket -bysocket sleep 900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This command fails if the allocated node is of type #1 (single socket/4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpus).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTW, in that case orte_show_help is referencing a tag
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (&quot;could-not-bind-to-socket&quot;) that does not exist in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help-odls-default.txt.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While it succeeds when run on nodes of type #2 or 3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think a &quot;bind to socket&quot; should not return an error on a single socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine, but rather be a noop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem comes from the test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; called in odls_default_fork_local_proc() after the binding to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors socket has been done:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    OPAL_PAFFINITY_CPU_ZERO(mask);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    for (n=0; n &lt; orte_default_num_cores_per_socket; n++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        OPAL_PAFFINITY_CPU_SET(phys_cpu, mask);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /* if we did not bind it anywhere, then that is an error */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if (!bound) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        orte_show_help(&quot;help-odls-default.txt&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                       &quot;odls-default:could-not-bind-to-socket&quot;, true);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        ORTE_ODLS_ERROR_OUT(ORTE_ERR_FATAL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND() will return true if there bits set in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the mask *AND* the number of bits set is lesser than the number of cpus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the machine. Thus on a single socket, 4 cores machine the test will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail. While on other the kinds of machines it will succeed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Again, I think the problem could be solved by changing the alogrithm,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and assuming that ORTE_BIND_TO_SOCKET, on a single socket machine =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; noop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another solution could be to call the test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND() at the end of the loop only if we are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bound (orte_odls_globals.bound). Actually that is the only case where I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see a justification to this test (see attached patch).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And may be both solutions could be mixed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nadia
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;001_fix_process_binding_test.patch&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7719/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7720.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Upgrading trac"</a>
<li><strong>Previous message:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7718.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7721.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Reply:</strong> <a href="7721.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
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
