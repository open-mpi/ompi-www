<?
$subject_val = "Re: [OMPI users] Salloc and mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 14:27:29 2014" -->
<!-- isoreceived="20140722182729" -->
<!-- sent="Tue, 22 Jul 2014 11:26:16 -0700" -->
<!-- isosent="20140722182616" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Salloc and mpirun problem" -->
<!-- id="2FA617AF-3166-421C-87B5-AB1CA5D35B2C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1405920294.861966511_at_f48.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] Salloc and mpirun problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-22 14:26:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24852.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Previous message:</strong> <a href="24850.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>In reply to:</strong> <a href="24831.php">Timur Ismagilov: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24856.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Reply:</strong> <a href="24856.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, the problem is that the connection back to mpirun isn't getting thru. We are trying on the 10.0.251.53 address - is that blocked, or should we be using something else? If so, you might want to direct us by adding &quot;-mca oob_tcp_if_include foo&quot;, where foo is the interface you want us to use
<br>
<p><p>On Jul 20, 2014, at 10:24 PM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; NIC = network interface controller? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is QDR Infiniband 4x/10G Ethernet/Gigabit Ethernet. 
</span><br>
<span class="quotelev1">&gt; I want to use QDR Infiniband.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a new output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca mca_base_env_list 'LD_PRELOAD' --debug-daemons --mca plm_base_verbose 5 -mca oob_base_verbose 10 -mca rml_base_verbose 10 -np 2 hello_c |tee hello.out
</span><br>
<span class="quotelev1">&gt; Warning: Conflicting CPU frequencies detected, using: 2927.000000.
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] oob:tcp:init adding 10.0.251.53 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] oob:tcp:init adding 10.0.0.4 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] oob:tcp:init adding 10.2.251.14 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] oob:tcp:init adding 93.180.7.38 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] TCP STARTUP
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] assigned IPv4 port 49759
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting recv
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; Daemon was launched on node1-128-17 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon was launched on node1-128-18 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] oob:tcp:init adding 10.0.128.17 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] oob:tcp:init adding 10.128.128.17 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] TCP STARTUP
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] assigned IPv4 port 46441
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] oob:tcp:init adding 10.0.128.18 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] oob:tcp:init adding 10.128.128.18 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] TCP STARTUP
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] assigned IPv4 port 60695
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev1">&gt; Daemon [[65177,0],1] checking in as pid 14779 on host node1-128-17
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 11 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]: set_addr to uri 4271439872.0;tcp://10.0.251.53,10.0.0.4,10.2.251.14,10.128.0.4,93.180.7.38:49759
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:set_addr checking if peer [[65177,0],0] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] oob:tcp: working peer [[65177,0],0] address tcp://10.0.251.53,10.0.0.4,10.2.251.14,10.128.0.4,93.180.7.38:49759
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] PASSING ADDR 10.0.251.53 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] PASSING ADDR 10.0.0.4 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] PASSING ADDR 10.2.251.14 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] PASSING ADDR 10.128.0.4 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] PASSING ADDR 93.180.7.38 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]: peer [[65177,0],0] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 3 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] oob:base:send to target [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] oob:tcp:send_nb to peer [[65177,0],0]:10
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] tcp:send_nb to peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:[oob_tcp.c:484] post send to [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:[oob_tcp.c:421] processing send to peer [[65177,0],0]:10
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:[oob_tcp.c:455] queue pending to [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] tcp:send_nb: initiating connection to [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:[oob_tcp.c:469] connect to [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[65177,0],0] on socket 10
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[65177,0],0] on 10.0.251.53:49759 - 0 retries
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] waiting for connect completion to [[65177,0],0] - activating send event
</span><br>
<span class="quotelev1">&gt; Daemon [[65177,0],2] checking in as pid 17849 on host node1-128-18
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 11 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]: set_addr to uri 4271439872.0;tcp://10.0.251.53,10.0.0.4,10.2.251.14,10.128.0.4,93.180.7.38:49759
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:set_addr checking if peer [[65177,0],0] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] oob:tcp: working peer [[65177,0],0] address tcp://10.0.251.53,10.0.0.4,10.2.251.14,10.128.0.4,93.180.7.38:49759
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] PASSING ADDR 10.0.251.53 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] PASSING ADDR 10.0.0.4 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] PASSING ADDR 10.2.251.14 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] PASSING ADDR 10.128.0.4 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] PASSING ADDR 93.180.7.38 TO MODULE
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp set addr for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]: peer [[65177,0],0] is reachable via component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 3 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting recv
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp:processing set_peer cmd
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] oob:base:send to target [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] oob:tcp:send_nb to peer [[65177,0],0]:10
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] tcp:send_nb to peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:[oob_tcp.c:484] post send to [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:[oob_tcp.c:421] processing send to peer [[65177,0],0]:10
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:[oob_tcp.c:455] queue pending to [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] tcp:send_nb: initiating connection to [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:[oob_tcp.c:469] connect to [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[65177,0],0] on socket 10
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[65177,0],0] on 10.0.251.53:49759 - 0 retries
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] waiting for connect completion to [[65177,0],0] - activating send event
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] [[61806,0],2] tcp:send_handler called to send to peer [[61806,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] [[61806,0],2] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] [[61806,0],2]:tcp:complete_connect called for peer [[61806,0],0] on socket 10
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] [[61806,0],2]-[[61806,0],0] tcp_peer_complete_connect: connection failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] [[61806,0],2] tcp_peer_close for [[61806,0],0] sd 10 state CONNECTING
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] [[61806,0],2] tcp:lost connection called for peer [[61806,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] mca: base: close: component oob closed
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] mca: base: close: unloading component oob
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] [[61806,0],2] TCP SHUTDOWN
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] [[61806,0],2] RELEASING PEER OBJ [[61806,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] [[61806,0],2] CLOSING SOCKET 10
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17837] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt; srun: error: node1-128-18: task 1: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; srun: Terminating job step 647191.1
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] [[61806,0],1] tcp:send_handler called to send to peer [[61806,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] [[61806,0],1] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] [[61806,0],1]:tcp:complete_connect called for peer [[61806,0],0] on socket 10
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] [[61806,0],1]-[[61806,0],0] tcp_peer_complete_connect: connection failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] [[61806,0],1] tcp_peer_close for [[61806,0],0] sd 10 state CONNECTING
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] [[61806,0],1] tcp:lost connection called for peer [[61806,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] mca: base: close: component oob closed
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] mca: base: close: unloading component oob
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] [[61806,0],1] TCP SHUTDOWN
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] [[61806,0],1] RELEASING PEER OBJ [[61806,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] [[61806,0],1] CLOSING SOCKET 10
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14767] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt; srun: error: node1-128-17: task 0: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] tcp:send_handler called to send to peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]:tcp:complete_connect called for peer [[65177,0],0] on socket 10
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1]-[[65177,0],0] tcp_peer_complete_connect: connection failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] tcp_peer_close for [[65177,0],0] sd 10 state CONNECTING
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] tcp:lost connection called for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: close: component oob closed
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: close: unloading component oob
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] TCP SHUTDOWN
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] RELEASING PEER OBJ [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] [[65177,0],1] CLOSING SOCKET 10
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [node1-128-17:14779] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] tcp:send_handler called to send to peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]:tcp:complete_connect called for peer [[65177,0],0] on socket 10
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2]-[[65177,0],0] tcp_peer_complete_connect: connection failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] tcp_peer_close for [[65177,0],0] sd 10 state CONNECTING
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] tcp:lost connection called for peer [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: close: component oob closed
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: close: unloading component oob
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] TCP SHUTDOWN
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] RELEASING PEER OBJ [[65177,0],0]
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] [[65177,0],2] CLOSING SOCKET 10
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [node1-128-18:17849] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt; srun: error: node1-128-17: task 0: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; srun: Terminating job step 647191.2
</span><br>
<span class="quotelev1">&gt; srun: error: node1-128-18: task 1: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev1">&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev1">&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev1">&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev1">&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev1">&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: close: component oob closed
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: close: unloading component oob
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] [[65177,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [compiler-2:30735] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun, 20 Jul 2014 13:11:19 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Yeah, we aren't connecting back - is there a firewall running?  You need to leave the &quot;--debug-daemons --mca plm_base_verbose 5&quot; on there as well to see the entire problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you can see here is that mpirun is listening on several interfaces:
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 10.0.251.51 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 10.2.251.11 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 10.0.0.111 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 10.128.0.1 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 93.180.7.36 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like you have multiple interfaces connected to the same subnet - this is generally a bad idea. I also saw that the last one in the list shows up twice in the kernel array - not sure why, but is there something special about that NIC?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do the NICs look like on the remote hosts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 20, 2014, at 10:59 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -------- &#208;&#159;&#208;&#181;&#209;&#128;&#208;&#181;&#209;&#129;&#209;&#139;&#208;&#187;&#208;&#176;&#208;&#181;&#208;&#188;&#208;&#190;&#208;&#181; &#209;&#129;&#208;&#190;&#208;&#190;&#208;&#177;&#209;&#137;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181; --------
</span><br>
<span class="quotelev2">&gt;&gt; &#208;&#158;&#209;&#130; &#208;&#186;&#208;&#190;&#208;&#179;&#208;&#190;: Timur Ismagilov &lt;tismagilov_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#208;&#154;&#208;&#190;&#208;&#188;&#209;&#131;: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#208;&#148;&#208;&#176;&#209;&#130;&#208;&#176;: Sun, 20 Jul 2014 21:58:41 +0400
</span><br>
<span class="quotelev2">&gt;&gt; &#208;&#162;&#208;&#181;&#208;&#188;&#208;&#176;: Re[2]: [OMPI users] Fwd: Re[4]: Salloc and mpirun problem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here it is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ salloc -N2 --exclusive -p test -J ompi
</span><br>
<span class="quotelev2">&gt;&gt; salloc: Granted job allocation 647049
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca mca_base_env_list 'LD_PRELOAD' -mca oob_base_verbose 10 -mca rml_base_verbose 10 -np 2 hello_c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 10.0.251.51 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 10.0.0.111 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 10.2.251.11 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 10.128.0.1 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 93.180.7.36 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] WORKING INTERFACE 7 KERNEL INDEX 7 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] oob:tcp:init adding 93.180.7.36 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] TCP STARTUP
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] assigned IPv4 port 47756
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting recv
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev2">&gt;&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev2">&gt;&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev2">&gt;&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev2">&gt;&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev2">&gt;&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: close: component oob closed
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: close: unloading component oob
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] [[55095,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: close: component tcp closed
</span><br>
<span class="quotelev2">&gt;&gt; [access1:24264] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When i use srun i got:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ salloc -N2 --exclusive -p test -J ompi
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; $srun -N 2 ./hello_c
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32252, repo rev: r32252, Jul 16, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32252, repo rev: r32252, Jul 16, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sun, 20 Jul 2014 09:28:13 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try adding -mca oob_base_verbose 10 -mca rml_base_verbose 10 to your cmd line. It looks to me like we are unable to connect back to the node where you are running mpirun for some reason.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 20, 2014, at 9:16 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the same problem in openmpi 1.8.1(Apr 23, 2014).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does the srun command have  a --map-by&lt;foo&gt; mpirun parameter, or can i chage it from bash enviroment?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------- &#208;&#159;&#208;&#181;&#209;&#128;&#208;&#181;&#209;&#129;&#209;&#139;&#208;&#187;&#208;&#176;&#208;&#181;&#208;&#188;&#208;&#190;&#208;&#181; &#209;&#129;&#208;&#190;&#208;&#190;&#208;&#177;&#209;&#137;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181; --------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#208;&#158;&#209;&#130; &#208;&#186;&#208;&#190;&#208;&#179;&#208;&#190;: Timur Ismagilov &lt;tismagilov_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#208;&#154;&#208;&#190;&#208;&#188;&#209;&#131;: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#208;&#154;&#208;&#190;&#208;&#191;&#208;&#184;&#209;&#143;: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#208;&#148;&#208;&#176;&#209;&#130;&#208;&#176;: Thu, 17 Jul 2014 16:42:24 +0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#208;&#162;&#208;&#181;&#208;&#188;&#208;&#176;: Re[4]: [OMPI users] Salloc and mpirun problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With Open MPI 1.9a1r32252 (Jul 16, 2014 (nightly snapshot tarball)) i got this output (same?):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ salloc -N2 --exclusive -p test -J ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc: Granted job allocation 645686
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so  mpirun  -mca mca_base_env_list 'LD_PRELOAD'  --mca plm_base_verbose 10 --debug-daemons -np 1 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_register: found loaded component isolated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_register: component isolated has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_register: found loaded component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_register: component slurm register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_open: found loaded component isolated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_open: component isolated open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: close: component isolated closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: close: component rsh closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon was launched on node1-128-09 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon was launched on node1-128-15 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [[39207,0],1] checking in as pid 26240 on host node1-128-09
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1-128-09:26240] [[39207,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [[39207,0],2] checking in as pid 30129 on host node1-128-15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1-128-15:30129] [[39207,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun: error: node1-128-09: task 0: Exited with exit code 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun: Terminating job step 645686.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun: error: node1-128-15: task 1: Exited with exit code 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] [[39207,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: close: component slurm closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [access1:04312] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24828.php">http://www.open-mpi.org/community/lists/users/2014/07/24828.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24852.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Previous message:</strong> <a href="24850.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>In reply to:</strong> <a href="24831.php">Timur Ismagilov: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24856.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Reply:</strong> <a href="24856.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
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
