<?
$subject_val = "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 19 14:03:00 2010" -->
<!-- isoreceived="20100819180300" -->
<!-- sent="Thu, 19 Aug 2010 12:02:55 -0600" -->
<!-- isosent="20100819180255" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand" -->
<!-- id="AANLkTinVf_TMVCrNcVYb5A5z8VdQE6XqTgGDEtiSfpFv_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=N2ztP-c-wiMzTGAiWydCG8i92OVx2kc=6xC8v_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-19 14:02:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14080.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14078.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="14078.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14080.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="14080.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something doesn't look right - here is what the algo attempts to do:
<br>
<p>given a port range of 10000-12000, the lowest rank'd process on the node
<br>
should open port 10000. The next lowest rank on the node will open 10001,
<br>
etc.
<br>
<p>So it looks to me like there is some confusion in the local rank algo. I'll
<br>
have to look at the generic module - must be a bug in it somewhere.
<br>
<p>This might take a couple of days as I have surgery tomorrow morning, so
<br>
please forgive the delay.
<br>
<p><p>On Thu, Aug 19, 2010 at 11:13 AM, Philippe &lt;philmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm able to use the generic module when the processes are on different
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what would be the values of the EV when two processes are on the same
</span><br>
<span class="quotelev1">&gt; machine (hopefully talking over SHM).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i've played with combination of nodelist and ppn but no luck. I get errors
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [c0301b10e1:03172] [[0,9999],1] -&gt; [[0,0],0] (node: c0301b10e1)
</span><br>
<span class="quotelev1">&gt; oob-tcp: Number of attempts to create TCP connection has been
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [c0301b10e1:03172] [[0,9999],1] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev1">&gt; grpcomm_hier_module.c at line 303
</span><br>
<span class="quotelev1">&gt; [c0301b10e1:03172] [[0,9999],1] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev1">&gt; base/grpcomm_base_modex.c at line 470
</span><br>
<span class="quotelev1">&gt; [c0301b10e1:03172] [[0,9999],1] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev1">&gt; grpcomm_hier_module.c at line 484
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_grpcomm_modex failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [c0301b10e1:3172] Abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; maybe a related question is how to assign the TCP port range and how
</span><br>
<span class="quotelev1">&gt; is it used? when the processes are on different machines, I use the
</span><br>
<span class="quotelev1">&gt; same range and that's ok as long as the range is free. but when the
</span><br>
<span class="quotelev1">&gt; processes are on the same node, what value should the range be for
</span><br>
<span class="quotelev1">&gt; each process? My range is 10000-12000 (for both processes) and I see
</span><br>
<span class="quotelev1">&gt; that process with rank #0 listen on port 10001 while process with rank
</span><br>
<span class="quotelev1">&gt; #1 try to establish a connect to port 10000.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks so much!
</span><br>
<span class="quotelev1">&gt; p. still here... still trying... ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 27, 2010 at 12:58 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Use what hostname returns - don't worry about IP addresses as we'll
</span><br>
<span class="quotelev1">&gt; discover them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 26, 2010, at 10:45 PM, Philippe wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; now, for the ev &quot;OMPI_MCA_orte_nodes&quot;, what do I put exactly? our
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes have a short/long name (it's rhel 5.x, so the command hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; returns the long name) and at least 2 IP addresses.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; p.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Jul 27, 2010 at 12:06 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Okay, fixed in r23499. Thanks again...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jul 26, 2010, at 9:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Doh - yes it should! I'll fix it right now.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jul 26, 2010, at 9:28 PM, Philippe wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; i was able to test the generic module and it seems to be working.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; one question tho, the function orte_ess_generic_component_query in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;orte/mca/ess/generic/ess_generic_component.c&quot; calls getenv with the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; argument &quot;OMPI_MCA_enc&quot;, which seems to cause the module to fail to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; load. shouldnt it be &quot;OMPI_MCA_ess&quot; ?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   /* only pick us if directed to do so */
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   if (NULL != (pick = getenv(&quot;OMPI_MCA_env&quot;)) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                0 == strcmp(pick, &quot;generic&quot;)) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       *priority = 1000;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       *module = (mca_base_module_t *)&amp;orte_ess_generic_module;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; p.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Thu, Jul 22, 2010 at 5:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Dev trunk looks okay right now - I think you'll be fine using it. My
</span><br>
<span class="quotelev1">&gt; new component -might- work with 1.5, but probably not with 1.4. I haven't
</span><br>
<span class="quotelev1">&gt; checked either of them.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Anything at r23478 or above will have the new module. Let me know
</span><br>
<span class="quotelev1">&gt; how it works for you. I haven't tested it myself, but am pretty sure it
</span><br>
<span class="quotelev1">&gt; should work.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Jul 22, 2010, at 3:22 PM, Philippe wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you so much!!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll give it a try and let you know.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I know it's a tough question, but how stable is the dev trunk? Can
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; just grab the latest and run, or am I better off taking your
</span><br>
<span class="quotelev1">&gt; changes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; and copy them back in a stable release? (if so, which one? 1.4?
</span><br>
<span class="quotelev1">&gt; 1.5?)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; p.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Jul 22, 2010 at 3:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It was easier for me to just construct this module than to explain
</span><br>
<span class="quotelev1">&gt; how to do so :-)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I will commit it this evening (couple of hours from now) as that
</span><br>
<span class="quotelev1">&gt; is our standard practice. You'll need to use the developer's trunk, though,
</span><br>
<span class="quotelev1">&gt; to use it.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here are the envars you'll need to provide:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Each process needs to get the same following values:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * OMPI_MCA_ess=generic
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * OMPI_MCA_orte_num_procs=&lt;number of MPI procs&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * OMPI_MCA_orte_nodes=&lt;a comma-separated list of nodenames where
</span><br>
<span class="quotelev1">&gt; MPI procs reside&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * OMPI_MCA_orte_ppn=&lt;number of procs/node&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Note that I have assumed this last value is a constant for
</span><br>
<span class="quotelev1">&gt; simplicity. If that isn't the case, let me know - you could instead provide
</span><br>
<span class="quotelev1">&gt; it as a comma-separated list of values with an entry for each node.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In addition, you need to provide the following value that will be
</span><br>
<span class="quotelev1">&gt; unique to each process:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * OMPI_MCA_orte_rank=&lt;MPI rank&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Finally, you have to provide a range of static TCP ports for use
</span><br>
<span class="quotelev1">&gt; by the processes. Pick any range that you know will be available across all
</span><br>
<span class="quotelev1">&gt; the nodes. You then need to ensure that each process sees the following
</span><br>
<span class="quotelev1">&gt; envar:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * OMPI_MCA_oob_tcp_static_ports=6000-6010  &lt;== obviously, replace
</span><br>
<span class="quotelev1">&gt; this with your range
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You will need a port range that is at least equal to the ppn for
</span><br>
<span class="quotelev1">&gt; the job (each proc on a node will take one of the provided ports).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That should do it. I compute everything else I need from those
</span><br>
<span class="quotelev1">&gt; values.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does that work for you?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14080.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14078.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="14078.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14080.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="14080.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
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
