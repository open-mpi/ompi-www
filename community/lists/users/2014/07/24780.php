<?
$subject_val = "Re: [OMPI users] Can't run with more than two nodes in the hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 08:14:48 2014" -->
<!-- isoreceived="20140716121448" -->
<!-- sent="Wed, 16 Jul 2014 14:14:47 +0200" -->
<!-- isosent="20140716121447" -->
<!-- name="Ricardo Fern&#195;&#161;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't run with more than two nodes in the hostfile" -->
<!-- id="CAKW9TZqKNNjOx8xv_EKe6UQcnpkSYVf=d2BP7=XPFAUb_GsaFg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="96AEF814-5043-4F6A-AE0E-54485C6413C3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't run with more than two nodes in the hostfile<br>
<strong>From:</strong> Ricardo Fern&#195;&#161;ndez-Perea (<em>rfernandezperea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 08:14:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24781.php">Ziv Aginsky: "[OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24779.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="24776.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They are just as you say but while one run until the end (case 3
<br>
using --deamons-debug)   the other hangs (Case 1)
<br>
<p>in the case 1  even if is only in one node with plm_rsh_no_tree_spawn 1
<br>
flag (that as you say shouldn't do anything), the process hangs,
<br>
<p>while in the case 2 without this flags in the same node it runs,
<br>
<p>for the case 3  I add to the case 1 the --deamons-debug flag in which case
<br>
it runs again.
<br>
<p>the point where it hangs in the case 1 is in the point in where
<br>
<p>&nbsp;Daemon was launched on nexus17.nlroc - beginning to initialize
<br>
<p>appear in the case 3
<br>
<p><p>On Wed, Jul 16, 2014 at 2:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Forgive me, but I am now fully confused - case 1 and case 3 appear
</span><br>
<span class="quotelev1">&gt; identical to me, except for the debug-daemons flag on case 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2014, at 7:56 AM, Ricardo Fern&#195;&#161;ndez-Perea &lt;
</span><br>
<span class="quotelev1">&gt; rfernandezperea_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I mean with  &quot;another mpi process&quot;.
</span><br>
<span class="quotelev1">&gt; I have 4 nodes where there is  process that use mpi and where initiated
</span><br>
<span class="quotelev1">&gt; using mpirun from the control node already running when I  run the command
</span><br>
<span class="quotelev1">&gt; against any of those  nodes it execute but when I do it against any other
</span><br>
<span class="quotelev1">&gt; node it fails if  no_tree_spawn flag is used it works OK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; case 1 it Fails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun  --mca plm_rsh_no_tree_spawn 1  -mca
</span><br>
<span class="quotelev1">&gt; oob_base_verbose 10 -mca plm_base_verbose 10   -host nexus17 ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: registering plm
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component isolated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: component isolated
</span><br>
<span class="quotelev1">&gt; has no register or open function
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: component rsh
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component slurm
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: component slurm
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; isolated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: component isolated open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; rsh
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: component rsh open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; slurm
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev1">&gt; [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: close: component isolated closed
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: registering oob
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_register: component tcp
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] [[56634,0],0] oob:tcp:init creating module for V4
</span><br>
<span class="quotelev1">&gt; address on interface en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] [[56634,0],0] oob:tcp:init adding 172.16.1.10 to our
</span><br>
<span class="quotelev1">&gt; list of V4 connections
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] [[56634,0],0] TCP STARTUP
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] [[56634,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] [[56634,0],0] assigned IPv4 port 50898
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I Crtl-C here when it hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ^C[nexus10.nlroc:31321] [[56634,0],0] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] [[56634,0],0] oob:base:send to target [[56634,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] [[56634,0],0] oob:base:send unknown peer
</span><br>
<span class="quotelev1">&gt; [[56634,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] [[56634,0],0] is NOT reachable by TCP
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] [[56634,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31321] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Case 2 to the same node but without the rsh_no_tree flag
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun    -mca oob_base_verbose 10 -mca plm_base_verbose
</span><br>
<span class="quotelev1">&gt; 10   -host nexus17 ompi_info
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: registering plm
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component isolated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: component isolated
</span><br>
<span class="quotelev1">&gt; has no register or open function
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: component rsh
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component slurm
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: component slurm
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; isolated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: component isolated open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; rsh
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: component rsh open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; slurm
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev1">&gt; [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: close: component isolated closed
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: registering oob
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_register: component tcp
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:tcp:init creating module for V4
</span><br>
<span class="quotelev1">&gt; address on interface en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:tcp:init adding 172.16.1.10 to our
</span><br>
<span class="quotelev1">&gt; list of V4 connections
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] TCP STARTUP
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] assigned IPv4 port 50908
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_register: registering plm
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_register: component rsh
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; rsh
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_open: component rsh open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_register: registering oob
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_register: component tcp
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:init creating module for V4
</span><br>
<span class="quotelev1">&gt; address on interface en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:init adding 172.16.1.17 to our
</span><br>
<span class="quotelev1">&gt; list of V4 connections
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:init creating module for V4
</span><br>
<span class="quotelev1">&gt; address on interface en2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:init adding 169.254.210.43 to
</span><br>
<span class="quotelev1">&gt; our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] TCP STARTUP
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] assigned IPv4 port 54613
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]: set_addr to uri 3723100160.0;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.10:50908
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:set_addr checking if peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp: working peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; address tcp://172.16.1.10:50908
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] PEER [[56810,0],0] MAY BE REACHABLE
</span><br>
<span class="quotelev1">&gt; USING MODULE AT KINDEX 2 INTERFACE en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] PASSING ADDR 172.16.1.10 TO INTERFACE
</span><br>
<span class="quotelev1">&gt; en0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp set addr for peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]: peer [[56810,0],0] is reachable via
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:processing set_peer cmd for
</span><br>
<span class="quotelev1">&gt; interface en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]:10
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:10
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:476] queue pending to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: initiating connection to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:490] connect to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] orte_tcp_peer_try_connect: attempting
</span><br>
<span class="quotelev1">&gt; to connect to proc [[56810,0],0] via interface en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] orte_tcp_peer_try_connect: attempting
</span><br>
<span class="quotelev1">&gt; to connect to proc [[56810,0],0] via interface en0 on socket 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] orte_tcp_peer_try_connect: attempting
</span><br>
<span class="quotelev1">&gt; to connect to proc [[56810,0],0] on 172.16.1.10:50908 - 0 retries
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] waiting for connect completion to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - activating send event
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:complete_connect called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] on socket 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp_peer_complete_connect: sending ack
</span><br>
<span class="quotelev1">&gt; to [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] SEND CONNECT ACK
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] send blocking of 40 bytes to socket 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] connect-ack sent to socket 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp_peer_complete_connect: setting
</span><br>
<span class="quotelev1">&gt; read event on connection to [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] mca_oob_tcp_listen_thread: new
</span><br>
<span class="quotelev1">&gt; connection: (12, 0) 172.16.1.17:54614
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] connection_handler: working connection
</span><br>
<span class="quotelev1">&gt; (12, 35) 172.16.1.17:54614
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] accept_connection: 172.16.1.17:54614
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECV CONNECT ACK FROM UNKNOWN ON
</span><br>
<span class="quotelev1">&gt; SOCKET 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] waiting for connect ack from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] connect ack received from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] connect-ack recvd from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] mca_oob_tcp_recv_connect: connection
</span><br>
<span class="quotelev1">&gt; from new peer
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] connect-ack header from [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; is okay
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] waiting for connect ack from
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] connect ack received from [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] connect-ack version from [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; matches ours
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] connect-ack [[56810,0],1] authenticated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:peer_accept called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] in state UNKNOWN on socket 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] SEND CONNECT ACK
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] send blocking of 40 bytes to socket 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] connect-ack sent to socket 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]-[[56810,0],1] tcp_peer_connected on
</span><br>
<span class="quotelev1">&gt; socket 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]-[[56810,0],1] accepted: 172.16.1.10 -
</span><br>
<span class="quotelev1">&gt; 172.16.1.17 nodelay 0 sndbuf 131072 rcvbuf 131072 flags 00000006
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:set_module called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] RECV CONNECT ACK FROM [[56810,0],0] ON
</span><br>
<span class="quotelev1">&gt; SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] waiting for connect ack from
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] connect ack received from [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] connect-ack recvd from [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] connect-ack header from [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; is okay
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] waiting for connect ack from
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] connect ack received from [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] connect-ack version from [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; matches ours
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] connect-ack [[56810,0],0] authenticated
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]-[[56810,0],0] tcp_peer_connected on
</span><br>
<span class="quotelev1">&gt; socket 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]-[[56810,0],0] connected: 172.16.1.17 -
</span><br>
<span class="quotelev1">&gt; 172.16.1.10 nodelay 0 sndbuf 131768 rcvbuf 131768 flags 00000006
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler starting send/recv
</span><br>
<span class="quotelev1">&gt; events
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60[nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read
</span><br>
<span class="quotelev1">&gt; hdr
</span><br>
<span class="quotelev1">&gt; 584] [[56810,0],1] tcp:set_module called for peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 9699
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 9699 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 10
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 9699 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]: set_addr to uri 3723100160.1;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.17,169.254.210.43:54613
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:set_addr checking if peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:tcp: working peer [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; address tcp://172.16.1.17,169.254.210.43:54613
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] PEER [[56810,0],1] MAY BE REACHABLE
</span><br>
<span class="quotelev1">&gt; USING MODULE AT KINDEX 2 INTERFACE en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] PASSING ADDR 172.16.1.17 TO INTERFACE
</span><br>
<span class="quotelev1">&gt; en0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp set addr for peer [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] UNFOUND KERNEL INDEX -13 FOR ADDRESS
</span><br>
<span class="quotelev1">&gt; 169.254.210.43
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]: peer [[56810,0],1] is reachable via
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:processing set_peer cmd for
</span><br>
<span class="quotelev1">&gt; interface en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:base:send to target [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:tcp:send_nb to peer [[56810,0],1]:1
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:send_nb to peer [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],1]:1
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] MESSAGE SEND COMPLETE TO [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; OF 105 BYTES ON SOCKET 12
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 105
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]: set_addr to uri 3723100160.0;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.10:50908
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:set_addr peer [[56810,0],0] is me
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]: set_addr to uri 3723100160.1;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.17,169.254.210.43:54613
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:set_addr checking if peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:tcp: working peer [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; address tcp://172.16.1.17,169.254.210.43:54613
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] PEER [[56810,0],1] MAY BE REACHABLE
</span><br>
<span class="quotelev1">&gt; USING MODULE AT KINDEX 2 INTERFACE en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] PASSING ADDR 172.16.1.17 TO INTERFACE
</span><br>
<span class="quotelev1">&gt; en0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp set addr for peer [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] UNFOUND KERNEL INDEX -13 FOR ADDRESS
</span><br>
<span class="quotelev1">&gt; 169.254.210.43
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]: peer [[56810,0],1] is reachable via
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:processing set_peer cmd for
</span><br>
<span class="quotelev1">&gt; interface en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:base:send to target [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] oob:tcp:send_nb to peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]:15
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:send_nb to peer [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] (ORIGIN [[56810,0],0]) OF 105 BYTES FOR DEST [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; TAG 1
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],1]:15
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] MESSAGE SEND COMPLETE TO [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; OF 885 BYTES ON SOCKET 12
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 885
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] (ORIGIN [[56810,0],0]) OF 885 BYTES FOR DEST [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; TAG 15
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]: set_addr to uri 3723100160.0;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.10:50908
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:set_addr checking if peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp: working peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; address tcp://172.16.1.10:50908
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] PEER [[56810,0],0] MAY BE REACHABLE
</span><br>
<span class="quotelev1">&gt; USING MODULE AT KINDEX 2 INTERFACE en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] PASSING ADDR 172.16.1.10 TO INTERFACE
</span><br>
<span class="quotelev1">&gt; en0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp set addr for peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]: peer [[56810,0],0] is reachable via
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]: set_addr to uri 3723100160.1;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.17,169.254.210.43:54613
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:set_addr peer [[56810,0],1] is me
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:tcp:processing set_peer cmd for
</span><br>
<span class="quotelev1">&gt; interface en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:5
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:5
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 54
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 54 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 54 BYTES FOR DEST [[56810,0],0] TAG
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] plm:base:receive update proc state
</span><br>
<span class="quotelev1">&gt; command from [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] plm:base:receive got update_proc_state
</span><br>
<span class="quotelev1">&gt; for job [56810,1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 183
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 183 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 118 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 183 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 118
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 118 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: registering oob
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: component tcp
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 294 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 199 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 203 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 294
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 294 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 199
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 199 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: registering plm
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component isolated
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: component isolated
</span><br>
<span class="quotelev1">&gt; has no register or open function
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 203
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 203 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: component rsh
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component slurm
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60585] mca: base: components_register: component slurm
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 92
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 92 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 395 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 92 BYTES FOR DEST [[56810,0],0] TAG
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 395
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 395 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 572 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 1009 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] [nexus10.nlroc:31369] [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; oob:base:send known transport for peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI XXX_at_nexus10.nlroc Distribution
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 572
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 773 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 572 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 1009
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 558 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: a[nexus10.nlroc:31369]
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] RECVD COMPLETE MESSAGE FROM [[56810,0],1] (ORIGIN
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]) OF 1009 BYTES FOR DEST [[56810,0],0] TAG 2
</span><br>
<span class="quotelev1">&gt; lready connected to [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 484 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 747 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 773
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 773 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 591 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:[nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler called
</span><br>
<span class="quotelev1">&gt; for peer [[56810,0],1]
</span><br>
<span class="quotelev1">&gt; 60584] [[56810,0],1] oob:base:send known transport for peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] MESSAGE SEND COMPLETE TO [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; OF 635 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send to target [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] oob:tcp:send_nb to peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1] tcp:send_nb to peer [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60584] [[56810,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56810,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 558
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56810,0],1] (ORIGIN [[56810,0],1]) OF 558 BYTES FOR DEST [[56810,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31369] [[56810,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.8.1
</span><br>
<span class="quotelev1">&gt;   Open MPI repo revision: r31483
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Apr 22, 2014
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt; it continue and fully finish
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Case 3 is runs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun  --mca plm_rsh_no_tree_spawn 1  -mca
</span><br>
<span class="quotelev1">&gt; oob_base_verbose 10 -mca plm_base_verbose 10   --debug-daemons -host
</span><br>
<span class="quotelev1">&gt; nexus17 ompi_info
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: registering plm
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component isolated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: component isolated
</span><br>
<span class="quotelev1">&gt; has no register or open function
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: component rsh
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component slurm
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: component slurm
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; isolated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: component isolated open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; rsh
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: component rsh open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; slurm
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev1">&gt; [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: close: component isolated closed
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: registering oob
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_register: component tcp
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] oob:tcp:init creating module for V4
</span><br>
<span class="quotelev1">&gt; address on interface en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] oob:tcp:init adding 172.16.1.10 to our
</span><br>
<span class="quotelev1">&gt; list of V4 connections
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] TCP STARTUP
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] assigned IPv4 port 50923
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt; Daemon was launched on nexus17.nlroc - beginning to initialize
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_register: registering plm
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_register: component rsh
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; rsh
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_open: component rsh open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_register: registering oob
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_register: component tcp
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:init creating module for V4
</span><br>
<span class="quotelev1">&gt; address on interface en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:init adding 172.16.1.17 to our
</span><br>
<span class="quotelev1">&gt; list of V4 connections
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:init creating module for V4
</span><br>
<span class="quotelev1">&gt; address on interface en2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:init adding 169.254.210.43 to
</span><br>
<span class="quotelev1">&gt; our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] TCP STARTUP
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] assigned IPv4 port 54631
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt; Daemon [[56724,0],1] checking in as pid 60663 on host nexus17
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] orted: up and running - waiting for
</span><br>
<span class="quotelev1">&gt; commands!
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]: set_addr to uri 3717464064.0;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.10:50923
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:set_addr checking if peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp: working peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; address tcp://172.16.1.10:50923
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] PEER [[56724,0],0] MAY BE REACHABLE
</span><br>
<span class="quotelev1">&gt; USING MODULE AT KINDEX 2 INTERFACE en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] PASSING ADDR 172.16.1.10 TO INTERFACE
</span><br>
<span class="quotelev1">&gt; en0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp set addr for peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]: peer [[56724,0],0] is reachable via
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:processing set_peer cmd for
</span><br>
<span class="quotelev1">&gt; interface en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send to target [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:send_nb to peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]:10
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb to peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]:10
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:476] queue pending to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb: initiating connection to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:490] connect to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] orte_tcp_peer_try_connect: attempting
</span><br>
<span class="quotelev1">&gt; to connect to proc [[56724,0],0] via interface en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] orte_tcp_peer_try_connect: attempting
</span><br>
<span class="quotelev1">&gt; to connect to proc [[56724,0],0] via interface en0 on socket 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] orte_tcp_peer_try_connect: attempting
</span><br>
<span class="quotelev1">&gt; to connect to proc [[56724,0],0] on 172.16.1.10:50923 - 0 retries
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] waiting for connect completion to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] - activating send event
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:complete_connect called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] on socket 9
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] mca_oob_tcp_listen_thread: new
</span><br>
<span class="quotelev1">&gt; connection: (12, 0) 172.16.1.17:54632
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp_peer_complete_connect: sending ack
</span><br>
<span class="quotelev1">&gt; to [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] SEND CONNECT ACK
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] send blocking of 40 bytes to socket 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] connect-ack sent to socket 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp_peer_complete_connect: setting
</span><br>
<span class="quotelev1">&gt; read event on connection to [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] connection_handler: working connection
</span><br>
<span class="quotelev1">&gt; (12, 35) 172.16.1.17:54632
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] accept_connection: 172.16.1.17:54632
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECV CONNECT ACK FROM UNKNOWN ON
</span><br>
<span class="quotelev1">&gt; SOCKET 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] waiting for connect ack from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] connect ack received from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] connect-ack recvd from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] mca_oob_tcp_recv_connect: connection
</span><br>
<span class="quotelev1">&gt; from new peer
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] connect-ack header from [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; is okay
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] waiting for connect ack from
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] connect ack received from [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] connect-ack version from [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; matches ours
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] connect-ack [[56724,0],1] authenticated
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] tcp:peer_accept called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] in state UNKNOWN on socket 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] SEND CONNECT ACK
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] send blocking of 40 bytes to socket 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] connect-ack sent to socket 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]-[[56724,0],1] tcp_peer_connected on
</span><br>
<span class="quotelev1">&gt; socket 12
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]-[[56724,0],1] accepted: 172.16.1.10 -
</span><br>
<span class="quotelev1">&gt; 172.16.1.17 nodelay 0 sndbuf 131072 rcvbuf 131072 flags 00000006
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] tcp:set_module called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] RECV CONNECT ACK FROM [[56724,0],0] ON
</span><br>
<span class="quotelev1">&gt; SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] waiting for connect ack from
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] connect ack received from [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] connect-ack recvd from [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] connect-ack header from [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; is okay
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] waiting for connect ack from
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] connect ack received from [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 9699
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] connect-ack version from [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; matches ours
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] connect-ack [[56724,0],0] authenticated
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]-[[56724,0],0] tcp_peer_connected on
</span><br>
<span class="quotelev1">&gt; socket 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]-[[56724,0],0] connected: 172.16.1.17 -
</span><br>
<span class="quotelev1">&gt; 172.16.1.10 nodelay 0 sndbuf 131768 rcvbuf 131768 flags 00000006
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:recv:handler starting send/recv
</span><br>
<span class="quotelev1">&gt; events
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:set_module called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] MESSAGE SEND COMPLETE TO [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; OF 9699 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] (ORIGIN [[56724,0],1]) OF 9699 BYTES FOR DEST [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 10
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]: set_addr to uri 3717464064.1;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.17,169.254.210.43:54631
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:set_addr checking if peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] oob:tcp: working peer [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; address tcp://172.16.1.17,169.254.210.43:54631
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] PEER [[56724,0],1] MAY BE REACHABLE
</span><br>
<span class="quotelev1">&gt; USING MODULE AT KINDEX 2 INTERFACE en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] PASSING ADDR 172.16.1.17 TO INTERFACE
</span><br>
<span class="quotelev1">&gt; en0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp set addr for peer [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] UNFOUND KERNEL INDEX -13 FOR ADDRESS
</span><br>
<span class="quotelev1">&gt; 169.254.210.43
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]: peer [[56724,0],1] is reachable via
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:processing set_peer cmd for
</span><br>
<span class="quotelev1">&gt; interface en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]: set_addr to uri 3717464064.0;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.10:50923
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:set_addr peer [[56724,0],0] is me
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]: set_addr to uri 3717464064.1;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.17,169.254.210.43:54631
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:set_addr checking if peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] oob:tcp: working peer [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; address tcp://172.16.1.17,169.254.210.43:54631
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] PEER [[56724,0],1] MAY BE REACHABLE
</span><br>
<span class="quotelev1">&gt; USING MODULE AT KINDEX 2 INTERFACE en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] PASSING ADDR 172.16.1.17 TO INTERFACE
</span><br>
<span class="quotelev1">&gt; en0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp set addr for peer [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] UNFOUND KERNEL INDEX -13 FOR ADDRESS
</span><br>
<span class="quotelev1">&gt; 169.254.210.43
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]: peer [[56724,0],1] is reachable via
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:processing set_peer cmd for
</span><br>
<span class="quotelev1">&gt; interface en0
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] oob:base:send to target [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] oob:tcp:send_nb to peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]:15
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] tcp:send_nb to peer [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],1]:15
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] MESSAGE SEND COMPLETE TO [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; OF 956 BYTES ON SOCKET 12
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 956
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] (ORIGIN [[56724,0],0]) OF 956 BYTES FOR DEST [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; TAG 15
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]: set_addr to uri 3717464064.0;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.10:50923
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:set_addr checking if peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp: working peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; address tcp://172.16.1.10:50923
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] PEER [[56724,0],0] MAY BE REACHABLE
</span><br>
<span class="quotelev1">&gt; USING MODULE AT KINDEX 2 INTERFACE en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] PASSING ADDR 172.16.1.10 TO INTERFACE
</span><br>
<span class="quotelev1">&gt; en0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp set addr for peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]: peer [[56724,0],0] is reachable via
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]: set_addr to uri 3717464064.1;tcp://
</span><br>
<span class="quotelev1">&gt; 172.16.1.17,169.254.210.43:54631
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:set_addr peer [[56724,0],1] is me
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:tcp:processing set_peer cmd for
</span><br>
<span class="quotelev1">&gt; interface en0
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send to target [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:send_nb to peer [[56724,0],0]:5
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb to peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 54
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] (ORIGIN [[56724,0],1]) OF 54 BYTES FOR DEST [[56724,0],0] TAG
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]:5
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] MESSAGE SEND COMPLETE TO [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; OF 54 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] plm:base:receive update proc state
</span><br>
<span class="quotelev1">&gt; command from [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] plm:base:receive got update_proc_state
</span><br>
<span class="quotelev1">&gt; for job [56724,1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send to target [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:send_nb to peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 183
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] (ORIGIN [[56724,0],1]) OF 183 BYTES FOR DEST [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb to peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] MESSAGE SEND COMPLETE TO [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; OF 183 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send to target [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:send_nb to peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:[nexus17.nlroc:60664] mca: base: components_register:
</span><br>
<span class="quotelev1">&gt; registering oob components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60664] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component tcp
</span><br>
<span class="quotelev1">&gt; 60663] [[56724,0],1] tcp:send_nb to peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] MESSAGE SEND COMPLETE TO [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; OF 118 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 118
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] (ORIGIN [[56724,0],1]) OF 118 BYTES FOR DEST [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60664] mca: base: components_register: component tcp
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send to target [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:send_nb to peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb to peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 294
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] MESSAGE SEND COMPLETE TO [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; OF 294 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send to target [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:send_nb to peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb to peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:442] processing send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] MESSAGE SEND COMPLETE TO [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; OF 282 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send to target [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:base:send known transport for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] oob:tcp:send_nb to peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb to peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:508] post send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,[nexus10.nlroc:31479]
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]:tcp:recv:handler called for peer [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; 0],1]:[oob_tcp.c:442] processing send to peer [[56724,0],0]:2
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_nb: already connected to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0] - queueing for send
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1]:[oob_tcp.c:469] queue send to
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] (ORIGIN [[56724,0],1]) OF 294 BYTES FOR DEST [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler called to send to
</span><br>
<span class="quotelev1">&gt; peer [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] tcp:send_handler SENDING TO
</span><br>
<span class="quotelev1">&gt; [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60663] [[56724,0],1] MESSAGE SEND COMPLETE TO [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; OF 120 BYTES ON SOCKET 9
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 282
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] (ORIGIN [[56724,0],1]) OF 282 BYTES FOR DEST [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 120
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] (ORIGIN [[56724,0],1]) OF 120 BYTES FOR DEST [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60664] mca: base: components_register: registering plm
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60664] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component isolated
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60664] mca: base: components_register: component isolated
</span><br>
<span class="quotelev1">&gt; has no register or open function
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60664] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60664] mca: base: components_register: component rsh
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60664] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component slurm
</span><br>
<span class="quotelev1">&gt; [nexus17.nlroc:60664] mca: base: components_register: component slurm
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 92
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] (ORIGIN [[56724,0],1]) OF 92 BYTES FOR DEST [[56724,0],0] TAG
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler called for peer
</span><br>
<span class="quotelev1">&gt; [[56724,0],1]
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0]:tcp:recv:handler allocate data region
</span><br>
<span class="quotelev1">&gt; of size 560
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] RECVD COMPLETE MESSAGE FROM
</span><br>
<span class="quotelev1">&gt; [[56724,0],1] (ORIGIN [[56724,0],1]) OF 560 BYTES FOR DEST [[56724,0],0]
</span><br>
<span class="quotelev1">&gt; TAG 2
</span><br>
<span class="quotelev1">&gt; [nexus10.nlroc:31479] [[56724,0],0] DELIVERING TO RML
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI XXXX_at_nexus10.nlroc Distribution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and continue until the end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 15, 2014 at 2:58 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I don't understand your comment about &quot;another mpi process&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Looking at your output, it would appear that there is something going on
</span><br>
<span class="quotelev2">&gt;&gt; with host nexus17. In both cases, mpirun is launching a single daemon onto
</span><br>
<span class="quotelev2">&gt;&gt; only one other node - the only difference was in the node being used. The
</span><br>
<span class="quotelev2">&gt;&gt; &quot;no_tree_spawn&quot; flag did nothing as that only applies when there are
</span><br>
<span class="quotelev2">&gt;&gt; multiple nodes being used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would check to see if there is a firewall between nexus10 and nexus17.
</span><br>
<span class="quotelev2">&gt;&gt; You can also add -mca oob_base_verbose 10 to your cmd line and see if the
</span><br>
<span class="quotelev2">&gt;&gt; daemon on nexus17 is able to connect back to mpirun., and add
</span><br>
<span class="quotelev2">&gt;&gt; --debug-daemons to see any error messages that daemon may be trying to
</span><br>
<span class="quotelev2">&gt;&gt; report.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 15, 2014, at 3:08 AM, Ricardo Fern&#195;&#161;ndez-Perea &lt;
</span><br>
<span class="quotelev2">&gt;&gt; rfernandezperea_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have try if another mpi process is running in the node already the
</span><br>
<span class="quotelev2">&gt;&gt; process run
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ricardo$ /opt/openmpi/bin/mpirun  --mca plm_rsh_no_tree_spawn 1 -mca
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_verbose 10 -host nexus16 ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_register: registering plm
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component isolated
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_register: component isolated
</span><br>
<span class="quotelev2">&gt;&gt; has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component rsh
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_register: component rsh
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_register: component slurm
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; isolated
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_open: component isolated open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; rsh
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_open: component rsh open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; slurm
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev2">&gt;&gt; [isolated]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev2">&gt;&gt; [isolated] set priority to 0
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca:base:select:(  plm) Query of component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev2">&gt;&gt; Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: close: component isolated closed
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: close: component slurm closed
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] [[52326,0],0] plm:base:receive update proc state
</span><br>
<span class="quotelev2">&gt;&gt; command from [[52326,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27397] [[52326,0],0] plm:base:receive got
</span><br>
<span class="quotelev2">&gt;&gt; update_proc_state for job [52326,1]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus16.nlroc:59687] mca: base: components_register: registering plm
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [nexus16.nlroc:59687] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component isolated
</span><br>
<span class="quotelev2">&gt;&gt; [nexus16.nlroc:59687] mca: base: components_register: component isolated
</span><br>
<span class="quotelev2">&gt;&gt; has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [nexus16.nlroc:59687] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component rsh
</span><br>
<span class="quotelev2">&gt;&gt; [nexus16.nlroc:59687] mca: base: components_register: component rsh
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus16.nlroc:59687] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [nexus16.nlroc:59687] mca: base: components_register: component slurm
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt;                  Package: Open MPI XXXX_at_nexus10.nlroc Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.8.1
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI repo revision: r31483
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI release date: Apr 22, 2014
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.8.1
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#166;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but if the compute node has not a mpi process running in it it already
</span><br>
<span class="quotelev2">&gt;&gt; hangs as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/bin/mpirun  --mca plm_rsh_no_tree_spawn 1 -mca
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_verbose 10 -host nexus17 ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_register: registering plm
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component isolated
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_register: component isolated
</span><br>
<span class="quotelev2">&gt;&gt; has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component rsh
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_register: component rsh
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_register: component slurm
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; isolated
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_open: component isolated open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; rsh
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_open: component rsh open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; slurm
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev2">&gt;&gt; [isolated]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev2">&gt;&gt; [isolated] set priority to 0
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca:base:select:(  plm) Query of component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev2">&gt;&gt; Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: close: component isolated closed
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: close: component slurm closed
</span><br>
<span class="quotelev2">&gt;&gt; [nexus10.nlroc:27438] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and  it stop there
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 14, 2014 at 8:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...no, it worked just fine for me. It sounds like something else is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; going on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try configuring OMPI with --enable-debug, and then add -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_base_verbose 10 to get a better sense of what is going on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 14, 2014, at 10:27 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I confess I haven't tested no_tree_spawn in ages, so it is quite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possible it has suffered bit rot. I can try to take a look at it in a bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 14, 2014, at 10:13 AM, Ricardo Fern&#195;&#161;ndez-Perea &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rfernandezperea_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for the fast answer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While that resolve my problem with cross ssh authentication   a command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/bin/mpirun  --mca mtl mx --mca pml cm --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_rsh_no_tree_spawn 1 -hostfile hostfile ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just hung with no output and although there is a ssh connexion no orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program is initiated in the destination nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and while
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/bin/mpirun  -host host18 ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/bin/mpirun  --mca plm_rsh_no_tree_spawn 1 -host host18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hangs, is there some condition in the use of this parameter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yours truly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ricardo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jul 14, 2014 at 6:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; During the 1.7 series and for all follow-on series, OMPI changed to a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mode where it launches a daemon on all allocated nodes at the startup of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun. This allows us to determine the hardware topology of the nodes and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; take that into account when mapping. You can override that behavior by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; either adding --novm to your cmd line (which will impact your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mapping/binding options), or by specifying the hosts to use by editing your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile, or adding --host host1,host2 to your cmd line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The rsh launcher defaults to a tree-based pattern, thus requiring that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we be able to ssh from one compute node to another. You can change that to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a less scalable direct mode by adding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mca plm_rsh_no_tree_spawn 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the cmd line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 14, 2014, at 9:21 AM, Ricardo Fern&#195;&#161;ndez-Perea &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rfernandezperea_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I'm trying to update to openMPI 1.8.1 thru ssh  and Myrinet
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; running a command as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; /opt/openmpi/bin/mpirun --verbose --mca mtl mx --mca pml cm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  -hostfile hostfile -np 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; when the hostfile contain only two nodes as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; host1 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; host2 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; it runs perfectly but when the hostfile has a third node as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; host1 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; host2 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; host3 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; it try to establish an ssh connection between  the running hosts1 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host3 that should not run any process  that fails hanging the process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without signaling.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; my ompi_info is as follow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                 Package: Open MPI XXX Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                 Open MPI: 1.8.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   Open MPI repo revision: r31483
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    Open MPI release date: Apr 22, 2014
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                 Open RTE: 1.8.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   Open RTE repo revision: r31483
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    Open RTE release date: Apr 22, 2014
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                     OPAL: 1.8.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;       OPAL repo revision: r31483
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;        OPAL release date: Apr 22, 2014
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                  MPI API: 3.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;             Ident string: 1.8.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                   Prefix: /opt/openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  Configured architecture: x86_64-apple-darwin9.8.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;           Configure host: XXXX
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;            Configured by: XXXX
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;            Configured on: Thu Jun 12 10:37:33 CEST 2014
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;           Configure host: XXXX
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                 Built by: XXXX
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                 Built on: Thu Jun 12 11:13:16 CEST 2014
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;               Built host: XXXX
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;              Fort mpif.h: yes (single underscore)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;             Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         Fort use mpi_f08: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                           limitations in the ifort compiler, does not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                           the following: array subsections, direct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passthru
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                           (where possible) to underlying Open MPI's C
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                           functionality
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;            Java bindings: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   Wrapper compiler rpath: unnecessary
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;               C compiler: icc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;      C compiler absolute: /opt/intel/Compiler/11.1/080/bin/intel64/icc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   C compiler family name: INTEL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;       C compiler version: 1110.20091130
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;             C++ compiler: icpc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    C++ compiler absolute:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/intel/Compiler/11.1/080/bin/intel64/icpc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;            Fort compiler: ifort
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;        Fort compiler abs:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/intel/Compiler/11.1/080/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;          Fort ignore TKR: yes (!DEC$ ATTRIBUTES NO_ARG_CHECK ::)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;       Fort optional args: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;       Fort BIND(C) (all): yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;       Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  Fort SUBROUTINE BIND(C): yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;        Fort TYPE,BIND(C): yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  Fort T,BIND(C,name=&quot;a&quot;): yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;             Fort PRIVATE: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;           Fort PROTECTED: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;            Fort ABSTRACT: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;        Fort ASYNCHRONOUS: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;           Fort PROCEDURE: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  Fort f08 using wrappers: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    Fort use mpi_f08 prof: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support: yes,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                           OMPI progress: no, ORTE progress: yes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Event lib:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                           yes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    Host topology support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;           MPI extensions:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;    C/R Enabled Debugging: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;      VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24764.php">http://www.open-mpi.org/community/lists/users/2014/07/24764.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24765.php">http://www.open-mpi.org/community/lists/users/2014/07/24765.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24766.php">http://www.open-mpi.org/community/lists/users/2014/07/24766.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24768.php">http://www.open-mpi.org/community/lists/users/2014/07/24768.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24769.php">http://www.open-mpi.org/community/lists/users/2014/07/24769.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24770.php">http://www.open-mpi.org/community/lists/users/2014/07/24770.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24771.php">http://www.open-mpi.org/community/lists/users/2014/07/24771.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24776.php">http://www.open-mpi.org/community/lists/users/2014/07/24776.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24781.php">Ziv Aginsky: "[OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24779.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="24776.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
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
