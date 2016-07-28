<?
$subject_val = "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 03:02:56 2014" -->
<!-- isoreceived="20140821070256" -->
<!-- sent="Thu, 21 Aug 2014 11:02:52 +0400" -->
<!-- isosent="20140821070252" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE daemon has unexpectedly failed after launch" -->
<!-- id="1408604572.300304277_at_f70.i.mail.ru" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FD0A96D3-61ED-451A-81BB-834610966ABB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE daemon has unexpectedly failed after launch<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 03:02:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25104.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>In reply to:</strong> <a href="25095.php">Ralph Castain: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25109.php">Ralph Castain: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Reply:</strong> <a href="25109.php">Ralph Castain: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Have i&#194;&#160;I any opportunity to run mpi jobs?
<br>
<p><p>Wed, 20 Aug 2014 10:48:38 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;yes, i know - it is cmr'd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 20, 2014, at 10:26 AM, Mike Dubman &lt; miked_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;btw, we get same error in v1.8 branch as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Wed, Aug 20, 2014 at 8:06 PM, Ralph Castain  &lt; rhc_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;It was not yet fixed - but should be now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Aug 20, 2014, at 6:39 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;As i can see, the bug is fixed, but in&#194;&#160;Open MPI v1.9a1r32516&#194;&#160; i still have the problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;a)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$ mpirun &#194;&#160;-np 1 ./hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;of factors, including an inability to create a connection back
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;route found between them. Please check network connectivity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;(including firewalls and network routing requirements).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;b)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$ mpirun --mca oob_tcp_if_include ib0 -np 1 ./hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;of factors, including an inability to create a connection back
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;route found between them. Please check network connectivity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;(including firewalls and network routing requirements).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;c)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$ mpirun --mca oob_tcp_if_include ib0 -debug-daemons --mca plm_base_verbose 5 -mca oob_base_verbose 10 -mca rml_base_verbose 10 -np 1 ./hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] oob:tcp: component_available called
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] TCP STARTUP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] assigned IPv4 port 59460
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Daemon was launched on node1-128-01 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;WARNING: An invalid value was given for oob_tcp_if_include. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;value will be ignored.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Local host: node1-128-01
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Value: &quot;ib0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Message: Invalid specification (missing &quot;/&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;None of the TCP networks specified to be included for out-of-band communications
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;could be found:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Value given:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Please revise the specification and try again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;No network interfaces were found for out-of-band communications. We require
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;at least one available network for out-of-band messaging.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;orte_oob_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;srun: error: node1-128-01: task 0: Exited with exit code 213
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;srun: Terminating job step 661215.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;of factors, including an inability to create a connection back
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;route found between them. Please check network connectivity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;(including firewalls and network routing requirements).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: close: component oob closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: close: unloading component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: close: component tcp closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Tue, 12 Aug 2014 18:33:24 +0000 &#208;&#190;&#209;&#130; &quot;Jeff Squyres (jsquyres)&quot; &lt; jsquyres_at_[hidden] &gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;I filed the following ticket:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4857">https://svn.open-mpi.org/trac/ompi/ticket/4857</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;On Aug 12, 2014, at 12:39 PM, Jeff Squyres (jsquyres) &lt; jsquyres_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (please keep the users list CC'ed)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We talked about this on the weekly engineering call today. Ralph has an idea what is happening -- I need to do a little investigation today and file a bug. I'll make sure you're CC'ed on the bug ticket.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 12, 2014, at 12:27 PM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't have this error in OMPI 1.9a1r32252 and OMPI 1.8.1 (with --mca oob_tcp_if_include ib0), but in all latest night snapshots i got this error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tue, 12 Aug 2014 13:08:12 +0000 &#208;&#190;&#209;&#130; &quot;Jeff Squyres (jsquyres)&quot; &lt; jsquyres_at_[hidden] &gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are you running any kind of firewall on the node where mpirun is invoked? Open MPI needs to be able to use arbitrary TCP ports between the servers on which it runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This second mail seems to imply a bug in OMPI's oob_tcp_if_include param handling, however -- it's supposed to be able to handle an interface name (not just a network specification).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph -- can you have a look?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 12, 2014, at 8:41 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When i add --mca oob_tcp_if_include ib0 (infiniband interface) to mpirun (as it was here: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24857.php">http://www.open-mpi.org/community/lists/users/2014/07/24857.php</a> &#194;&#160; ) i got this output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] oob:tcp: component_available called
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] TCP STARTUP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] assigned IPv4 port 53883
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-128-01 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-128-02 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WARNING: An invalid value was given for oob_tcp_if_include. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local host: node1-128-01
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Value: &quot;ib0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Message: Invalid specification (missing &quot;/&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WARNING: An invalid value was given for oob_tcp_if_include. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local host: node1-128-02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Value: &quot;ib0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Message: Invalid specification (missing &quot;/&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; None of the TCP networks specified to be included for out-of-band communications
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; could be found:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Value given:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please revise the specification and try again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; None of the TCP networks specified to be included for out-of-band communications
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; could be found:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Value given:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please revise the specification and try again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No network interfaces were found for out-of-band communications. We require
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at least one available network for out-of-band messaging.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No network interfaces were found for out-of-band communications. We require
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at least one available network for out-of-band messaging.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_oob_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_oob_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-128-02: task 1: Exited with exit code 213
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: Terminating job step 657300.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-128-01: task 0: Exited with exit code 213
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: close: component oob closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: close: unloading component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: close: component tcp closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tue, 12 Aug 2014 16:14:58 +0400 &#208;&#190;&#209;&#130; Timur Ismagilov &lt; tismagilov_at_[hidden] &gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have Open MPI v1.8.2rc4r32485
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When i run hello_c, I got this error message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $mpirun -np 2 hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When i run with --debug-daemons --mca plm_base_verbose 5 -mca oob_base_verbose 10 -mca rml_base_verbose 10 i got this output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $mpirun --debug-daemons --mca plm_base_verbose 5 -mca oob_base_verbose 10 -mca rml_base_verbose 10 -np 2 hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] oob:tcp: component_available called
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.0.251.53 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.0.0.4 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.2.251.14 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 93.180.7.38 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] TCP STARTUP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] assigned IPv4 port 38420
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-08 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-03 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-05 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-02 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-01 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-04 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-07 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-06 - beginning to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],3] checking in as pid 7178 on host node1-130-03
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-03:07178] [[42202,0],3] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],2] checking in as pid 13581 on host node1-130-02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-02:13581] [[42202,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],1] checking in as pid 17220 on host node1-130-01
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-01:17220] [[42202,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],5] checking in as pid 6663 on host node1-130-05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-05:06663] [[42202,0],5] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],8] checking in as pid 6683 on host node1-130-08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-08:06683] [[42202,0],8] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],7] checking in as pid 7877 on host node1-130-07
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-07:07877] [[42202,0],7] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],4] checking in as pid 7735 on host node1-130-04
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-04:07735] [[42202,0],4] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],6] checking in as pid 8451 on host node1-130-06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-06:08451] [[42202,0],6] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-03: task 2: Exited with exit code 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: Terminating job step 657040.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-02: task 1: Exited with exit code 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[node1-130-04]: *** STEP 657040.1 KILLED AT 2014-08-12T12:59:07 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[node1-130-07]: *** STEP 657040.1 KILLED AT 2014-08-12T12:59:07 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[node1-130-06]: *** STEP 657040.1 KILLED AT 2014-08-12T12:59:07 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-01: task 0: Exited with exit code 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-05: task 4: Exited with exit code 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-08: task 7: Exited with exit code 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-07: task 6: Exited with exit code 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-04: task 3: Killed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-06: task 5: Killed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: close: component oob closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: close: unloading component oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: close: component tcp closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24987.php">http://www.open-mpi.org/community/lists/users/2014/08/24987.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24988.php">http://www.open-mpi.org/community/lists/users/2014/08/24988.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: &#194;&#160; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: &#194;&#160; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25001.php">http://www.open-mpi.org/community/lists/users/2014/08/25001.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;-- &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;For corporate legal information go to: &#194;&#160; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25086.php">http://www.open-mpi.org/community/lists/users/2014/08/25086.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Link to this post:  <a href="http://www.open-mpi.org/community/lists/users/2014/08/25093.php">http://www.open-mpi.org/community/lists/users/2014/08/25093.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;Link to this post:  <a href="http://www.open-mpi.org/community/lists/users/2014/08/25094.php">http://www.open-mpi.org/community/lists/users/2014/08/25094.php</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:  <a href="http://www.open-mpi.org/community/lists/users/2014/08/25095.php">http://www.open-mpi.org/community/lists/users/2014/08/25095.php</a>
</span><br>
<p><p>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25105/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25104.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>In reply to:</strong> <a href="25095.php">Ralph Castain: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25109.php">Ralph Castain: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Reply:</strong> <a href="25109.php">Ralph Castain: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
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
