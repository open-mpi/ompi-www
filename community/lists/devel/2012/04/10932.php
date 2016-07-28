<?
$subject_val = "Re: [OMPI devel] How to debug segv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 14:00:32 2012" -->
<!-- isoreceived="20120425180032" -->
<!-- sent="Wed, 25 Apr 2012 14:00:14 -0400" -->
<!-- isosent="20120425180014" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to debug segv" -->
<!-- id="C1FC82BB-0278-4AA7-ADA7-6FD752B3016A_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5FFF8094-FA75-4022-98C5-D2594F897AE1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to debug segv<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 14:00:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10933.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10924.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
+1 vote for core. It is good starting point.
<br>
<p>* If you can't (from some reason) generate the core file, you may drop while (1) somewhere in the init code and attach the gdb later.
<br>
* If you are looking for more user-friendly experience, you may try Allinea DDT (they have 30day trial version).
<br>
<p>Regards,
<br>
Pasha.
<br>
<p><span class="quotelev1">&gt; Another thing to try is to load up the core file in gdb and see if that gives you a valid stack trace of where exactly the segv occurred.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2012, at 9:30 AM, Alex Margolin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/25/2012 02:57 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Strange that your code didn't generate any symbols - is that a mosix thing? Have you tried just adding opal_output (so it goes to a special diagnostic output channel) statements in your code to see where the segfault is occurring?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like you are getting thru orte_init. You could add -mca grpcomm_base_verbose 5 to see if you are getting in/thru the modex - if so, then you are probably failing in add_procs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess the symbols are a mosix thing, but it should still show some sort of segmentation fault trace, no? maybe only the assembly opcode... It seems that the SEGV is detected, rather then caught. This may also be related to mosix - I'll check it with the mosix developer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I added the parameter you suggested and appended the output. Modex seems to be working because I use it to exchange the IP and PID, and as you can see at the bottom these are received OK. I'll try debug printouts specifically in add_procs. Thanks for the advice!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/benchmarks/mpi/npb$ mpirun -mca grpcomm_base_verbose 5 -mca btl self,mosix -mca btl_base_verbose 100 -n 4 ft.S.4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job [37778,0] tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:base:xcast updating nidmap
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:set_proc_attr: setting attribute MPI_THREAD_LEVEL data size 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:set_proc_attr: setting attribute OMPI_ARCH data size 11
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:set_proc_attr: setting attribute MPI_THREAD_LEVEL data size 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:set_proc_attr: setting attribute OMPI_ARCH data size 11
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:set_proc_attr: setting attribute MPI_THREAD_LEVEL data size 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:set_proc_attr: setting attribute OMPI_ARCH data size 11
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:set_proc_attr: setting attribute MPI_THREAD_LEVEL data size 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:set_proc_attr: setting attribute OMPI_ARCH data size 11
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca: base: components_open: found loaded component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca: base: components_open: component mosix register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca: base: components_open: component mosix open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca: base: components_open: found loaded component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca: base: components_open: component mosix register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca: base: components_open: component mosix open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca: base: components_open: found loaded component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca: base: components_open: component mosix register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca: base: components_open: component mosix open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca: base: components_open: found loaded component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca: base: components_open: component mosix register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca: base: components_open: component mosix open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] select: initializing btl component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:set_proc_attr: setting attribute btl.mosix.1.7 data size 20
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] select: initializing btl component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] select: init of component mosix returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:modex: performing modex
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:pack_modex: reporting 3 entries
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:full:modex: executing allgather
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:bad entering allgather
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] WORKING COLLECTIVE 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ADDING [[37778,1],WILDCARD] TO PARTICIPANTS
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLL id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:bad allgather underway
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:modex: modex posted
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:set_proc_attr: setting attribute btl.mosix.1.7 data size 20
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] select: initializing btl component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:set_proc_attr: setting attribute btl.mosix.1.7 data size 20
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] select: initializing btl component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:set_proc_attr: setting attribute btl.mosix.1.7 data size 20
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] select: init of component mosix returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:modex: performing modex
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:pack_modex: reporting 3 entries
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:full:modex: executing allgather
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:bad entering allgather
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] WORKING COLLECTIVE 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLL id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:bad allgather underway
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:modex: modex posted
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] select: init of component mosix returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:modex: performing modex
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:pack_modex: reporting 3 entries
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:full:modex: executing allgather
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:bad entering allgather
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] WORKING COLLECTIVE 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLL id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:bad allgather underway
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:modex: modex posted
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] select: init of component mosix returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:modex: performing modex
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:pack_modex: reporting 3 entries
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:full:modex: executing allgather
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:bad entering allgather
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] WORKING COLLECTIVE 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLL id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE 0 LOCALLY COMPLETE - SENDING TO GLOBAL COLLECTIVE
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: daemon collective recvd from [[37778,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: WORKING COLLECTIVE 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job [37778,1] tag 30
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:bad allgather underway
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:modex: modex posted
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:receive processing collective return for id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] CHECKING COLL id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] STORING MODEX DATA
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:store_modex adding modex entry for proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:store_modex adding modex entry for proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:receive processing collective return for id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:receive processing collective return for id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] CHECKING COLL id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] CHECKING COLL id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] STORING MODEX DATA
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] STORING MODEX DATA
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:store_modex adding modex entry for proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:store_modex adding modex entry for proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:store_modex adding modex entry for proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:store_modex adding modex entry for proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:store_modex adding modex entry for proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:store_modex adding modex entry for proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:store_modex adding modex entry for proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:store_modex adding modex entry for proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:store_modex adding modex entry for proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:store_modex adding modex entry for proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] WORKING COLLECTIVE 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ADDING [[37778,1],WILDCARD] TO PARTICIPANTS
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLL id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:bad entering barrier
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:bad barrier underway
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:bad entering barrier
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:bad entering barrier
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] WORKING COLLECTIVE 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLL id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] WORKING COLLECTIVE 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLL id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:bad barrier underway
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:bad barrier underway
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:receive processing collective return for id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] CHECKING COLL id 0
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] STORING MODEX DATA
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:store_modex adding modex entry for proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:store_modex adding modex entry for proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:store_modex adding modex entry for proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:store_modex adding modex entry for proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:update_modex_entries: adding 3 entries for proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr OMPI_ARCH on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 11 bytes for attr OMPI_ARCH on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr btl.mosix.1.7 on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 20 bytes for attr btl.mosix.1.7 on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:bad entering barrier
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] WORKING COLLECTIVE 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] PROGRESSING COLL id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] COLLECTIVE 1 LOCALLY COMPLETE - SENDING TO GLOBAL COLLECTIVE
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: daemon collective recvd from [[37778,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: WORKING COLLECTIVE 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 4
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job [37778,1] tag 30
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:bad barrier underway
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:base:receive processing collective return for id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] CHECKING COLL id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:base:receive processing collective return for id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:base:receive processing collective return for id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] CHECKING COLL id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] CHECKING COLL id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:base:receive processing collective return for id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] CHECKING COLL id 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 1 bytes for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NAS Parallel Benchmarks 3.3 -- FT Benchmark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No input file inputft.data. Using compiled defaults
</span><br>
<span class="quotelev2">&gt;&gt; Size                :   64x  64x  64
</span><br>
<span class="quotelev2">&gt;&gt; Iterations          :              6
</span><br>
<span class="quotelev2">&gt;&gt; Number of processes :              4
</span><br>
<span class="quotelev2">&gt;&gt; Processor array     :         1x   4
</span><br>
<span class="quotelev2">&gt;&gt; Layout type         :             1D
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] btl: mosix: Establishind TCP link to address 127.0.0.1 and PID #8917
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] btl: mosix: Establishind TCP link to address 127.0.0.1 and PID #8921
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08916] btl: mosix: Establishind TCP link to address 127.0.0.1 and PID #8919
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08919] btl: mosix: Establishind TCP link to address 127.0.0.1 and PID #8921
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] btl: mosix: Establishind TCP link to address 127.0.0.1 and PID #8919
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08917] btl: mosix: Establishind TCP link to address 127.0.0.1 and PID #8916
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08921] btl: mosix: Establishind TCP link to address 127.0.0.1 and PID #8917
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job [37778,0] tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 2 with PID 8919 on node singularity exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job [37778,0] tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/benchmarks/mpi/npb$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10933.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10924.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
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
