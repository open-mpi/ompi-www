<?
$subject_val = "Re: [OMPI devel] How to debug segv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 09:30:36 2012" -->
<!-- isoreceived="20120425133036" -->
<!-- sent="Wed, 25 Apr 2012 16:30:21 +0300" -->
<!-- isosent="20120425133021" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to debug segv" -->
<!-- id="4F97FC6D.2030409_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7C8041A2-B58D-4156-8972-E607138974A0_at_open-mpi.org" -->
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
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 09:30:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10924.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/25/2012 02:57 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Strange that your code didn't generate any symbols - is that a mosix thing? Have you tried just adding opal_output (so it goes to a special diagnostic output channel) statements in your code to see where the segfault is occurring?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like you are getting thru orte_init. You could add -mca grpcomm_base_verbose 5 to see if you are getting in/thru the modex - if so, then you are probably failing in add_procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I guess the symbols are a mosix thing, but it should still show some 
<br>
sort of segmentation fault trace, no? maybe only the assembly opcode... 
<br>
It seems that the SEGV is detected, rather then caught. This may also be 
<br>
related to mosix - I'll check it with the mosix developer.
<br>
<p>I added the parameter you suggested and appended the output. Modex seems 
<br>
to be working because I use it to exchange the IP and PID, and as you 
<br>
can see at the bottom these are received OK. I'll try debug printouts 
<br>
specifically in add_procs. Thanks for the advice!
<br>
<p>alex_at_singularity:~/huji/benchmarks/mpi/npb$ mpirun -mca 
<br>
grpcomm_base_verbose 5 -mca btl self,mosix -mca btl_base_verbose 100 -n 
<br>
4 ft.S.4
<br>
[singularity:08915] mca:base:select:(grpcomm) Querying component [bad]
<br>
[singularity:08915] mca:base:select:(grpcomm) Query of component [bad] 
<br>
set priority to 10
<br>
[singularity:08915] mca:base:select:(grpcomm) Selected component [bad]
<br>
[singularity:08915] [[37778,0],0] grpcomm:base:receive start comm
<br>
[singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job 
<br>
[37778,0] tag 1
<br>
[singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
<br>
[singularity:08915] [[37778,0],0] grpcomm:base:xcast updating nidmap
<br>
[singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient 
<br>
list is empty!
<br>
[singularity:08916] mca:base:select:(grpcomm) Querying component [bad]
<br>
[singularity:08916] mca:base:select:(grpcomm) Query of component [bad] 
<br>
set priority to 10
<br>
[singularity:08916] mca:base:select:(grpcomm) Selected component [bad]
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:receive start comm
<br>
[singularity:08919] mca:base:select:(grpcomm) Querying component [bad]
<br>
[singularity:08919] mca:base:select:(grpcomm) Query of component [bad] 
<br>
set priority to 10
<br>
[singularity:08919] mca:base:select:(grpcomm) Selected component [bad]
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:receive start comm
<br>
[singularity:08917] mca:base:select:(grpcomm) Querying component [bad]
<br>
[singularity:08917] mca:base:select:(grpcomm) Query of component [bad] 
<br>
set priority to 10
<br>
[singularity:08917] mca:base:select:(grpcomm) Selected component [bad]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:receive start comm
<br>
[singularity:08921] mca:base:select:(grpcomm) Querying component [bad]
<br>
[singularity:08921] mca:base:select:(grpcomm) Query of component [bad] 
<br>
set priority to 10
<br>
[singularity:08921] mca:base:select:(grpcomm) Selected component [bad]
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:receive start comm
<br>
[singularity:08916] [[37778,1],0] grpcomm:set_proc_attr: setting 
<br>
attribute MPI_THREAD_LEVEL data size 1
<br>
[singularity:08916] [[37778,1],0] grpcomm:set_proc_attr: setting 
<br>
attribute OMPI_ARCH data size 11
<br>
[singularity:08919] [[37778,1],2] grpcomm:set_proc_attr: setting 
<br>
attribute MPI_THREAD_LEVEL data size 1
<br>
[singularity:08919] [[37778,1],2] grpcomm:set_proc_attr: setting 
<br>
attribute OMPI_ARCH data size 11
<br>
[singularity:08917] [[37778,1],1] grpcomm:set_proc_attr: setting 
<br>
attribute MPI_THREAD_LEVEL data size 1
<br>
[singularity:08917] [[37778,1],1] grpcomm:set_proc_attr: setting 
<br>
attribute OMPI_ARCH data size 11
<br>
[singularity:08921] [[37778,1],3] grpcomm:set_proc_attr: setting 
<br>
attribute MPI_THREAD_LEVEL data size 1
<br>
[singularity:08921] [[37778,1],3] grpcomm:set_proc_attr: setting 
<br>
attribute OMPI_ARCH data size 11
<br>
[singularity:08916] mca: base: components_open: Looking for btl components
<br>
[singularity:08916] mca: base: components_open: opening btl components
<br>
[singularity:08916] mca: base: components_open: found loaded component mosix
<br>
[singularity:08916] mca: base: components_open: component mosix register 
<br>
function successful
<br>
[singularity:08916] mca: base: components_open: component mosix open 
<br>
function successful
<br>
[singularity:08916] mca: base: components_open: found loaded component self
<br>
[singularity:08916] mca: base: components_open: component self has no 
<br>
register function
<br>
[singularity:08916] mca: base: components_open: component self open 
<br>
function successful
<br>
[singularity:08919] mca: base: components_open: Looking for btl components
<br>
[singularity:08917] mca: base: components_open: Looking for btl components
<br>
[singularity:08919] mca: base: components_open: opening btl components
<br>
[singularity:08919] mca: base: components_open: found loaded component mosix
<br>
[singularity:08919] mca: base: components_open: component mosix register 
<br>
function successful
<br>
[singularity:08919] mca: base: components_open: component mosix open 
<br>
function successful
<br>
[singularity:08919] mca: base: components_open: found loaded component self
<br>
[singularity:08919] mca: base: components_open: component self has no 
<br>
register function
<br>
[singularity:08919] mca: base: components_open: component self open 
<br>
function successful
<br>
[singularity:08921] mca: base: components_open: Looking for btl components
<br>
[singularity:08917] mca: base: components_open: opening btl components
<br>
[singularity:08917] mca: base: components_open: found loaded component mosix
<br>
[singularity:08917] mca: base: components_open: component mosix register 
<br>
function successful
<br>
[singularity:08917] mca: base: components_open: component mosix open 
<br>
function successful
<br>
[singularity:08917] mca: base: components_open: found loaded component self
<br>
[singularity:08917] mca: base: components_open: component self has no 
<br>
register function
<br>
[singularity:08917] mca: base: components_open: component self open 
<br>
function successful
<br>
[singularity:08921] mca: base: components_open: opening btl components
<br>
[singularity:08921] mca: base: components_open: found loaded component mosix
<br>
[singularity:08921] mca: base: components_open: component mosix register 
<br>
function successful
<br>
[singularity:08921] mca: base: components_open: component mosix open 
<br>
function successful
<br>
[singularity:08921] mca: base: components_open: found loaded component self
<br>
[singularity:08921] mca: base: components_open: component self has no 
<br>
register function
<br>
[singularity:08921] mca: base: components_open: component self open 
<br>
function successful
<br>
[singularity:08916] select: initializing btl component mosix
<br>
[singularity:08916] [[37778,1],0] grpcomm:set_proc_attr: setting 
<br>
attribute btl.mosix.1.7 data size 20
<br>
[singularity:08919] select: initializing btl component mosix
<br>
[singularity:08916] select: init of component mosix returned success
<br>
[singularity:08916] select: initializing btl component self
<br>
[singularity:08916] select: init of component self returned success
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:modex: performing modex
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:pack_modex: reporting 3 
<br>
entries
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:full:modex: executing 
<br>
allgather
<br>
[singularity:08916] [[37778,1],0] grpcomm:bad entering allgather
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],0]
<br>
[singularity:08915] [[37778,0],0] WORKING COLLECTIVE 0
<br>
[singularity:08915] [[37778,0],0] ADDING [[37778,1],WILDCARD] TO 
<br>
PARTICIPANTS
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 0
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLL id 0
<br>
[singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
<br>
[singularity:08916] [[37778,1],0] grpcomm:bad allgather underway
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:modex: modex posted
<br>
[singularity:08919] [[37778,1],2] grpcomm:set_proc_attr: setting 
<br>
attribute btl.mosix.1.7 data size 20
<br>
[singularity:08917] select: initializing btl component mosix
<br>
[singularity:08917] [[37778,1],1] grpcomm:set_proc_attr: setting 
<br>
attribute btl.mosix.1.7 data size 20
<br>
[singularity:08921] select: initializing btl component mosix
<br>
[singularity:08921] [[37778,1],3] grpcomm:set_proc_attr: setting 
<br>
attribute btl.mosix.1.7 data size 20
<br>
[singularity:08919] select: init of component mosix returned success
<br>
[singularity:08919] select: initializing btl component self
<br>
[singularity:08919] select: init of component self returned success
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:modex: performing modex
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:pack_modex: reporting 3 
<br>
entries
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:full:modex: executing 
<br>
allgather
<br>
[singularity:08919] [[37778,1],2] grpcomm:bad entering allgather
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],2]
<br>
[singularity:08915] [[37778,0],0] WORKING COLLECTIVE 0
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 0
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLL id 0
<br>
[singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
<br>
[singularity:08919] [[37778,1],2] grpcomm:bad allgather underway
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:modex: modex posted
<br>
[singularity:08917] select: init of component mosix returned success
<br>
[singularity:08917] select: initializing btl component self
<br>
[singularity:08917] select: init of component self returned success
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:modex: performing modex
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:pack_modex: reporting 3 
<br>
entries
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:full:modex: executing 
<br>
allgather
<br>
[singularity:08917] [[37778,1],1] grpcomm:bad entering allgather
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],1]
<br>
[singularity:08915] [[37778,0],0] WORKING COLLECTIVE 0
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 0
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLL id 0
<br>
[singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
<br>
[singularity:08917] [[37778,1],1] grpcomm:bad allgather underway
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:modex: modex posted
<br>
[singularity:08921] select: init of component mosix returned success
<br>
[singularity:08921] select: initializing btl component self
<br>
[singularity:08921] select: init of component self returned success
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:modex: performing modex
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:pack_modex: reporting 3 
<br>
entries
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:full:modex: executing 
<br>
allgather
<br>
[singularity:08921] [[37778,1],3] grpcomm:bad entering allgather
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],3]
<br>
[singularity:08915] [[37778,0],0] WORKING COLLECTIVE 0
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 0
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLL id 0
<br>
[singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE 0 LOCALLY COMPLETE - 
<br>
SENDING TO GLOBAL COLLECTIVE
<br>
[singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: daemon 
<br>
collective recvd from [[37778,0],0]
<br>
[singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: WORKING 
<br>
COLLECTIVE 0
<br>
[singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 4
<br>
[singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job 
<br>
[37778,1] tag 30
<br>
[singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
<br>
[singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient 
<br>
list is empty!
<br>
[singularity:08921] [[37778,1],3] grpcomm:bad allgather underway
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:modex: modex posted
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:receive processing 
<br>
collective return for id 0
<br>
[singularity:08921] [[37778,1],3] CHECKING COLL id 0
<br>
[singularity:08921] [[37778,1],3] STORING MODEX DATA
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:receive processing 
<br>
collective return for id 0
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:receive processing 
<br>
collective return for id 0
<br>
[singularity:08916] [[37778,1],0] CHECKING COLL id 0
<br>
[singularity:08917] [[37778,1],1] CHECKING COLL id 0
<br>
[singularity:08916] [[37778,1],0] STORING MODEX DATA
<br>
[singularity:08917] [[37778,1],1] STORING MODEX DATA
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],2]
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],0]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],0]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],2]
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],1]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],1]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],3]
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],3]
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],3]
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],3]
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],3]
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],3]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],0]
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],3]
<br>
[singularity:08915] [[37778,0],0] WORKING COLLECTIVE 1
<br>
[singularity:08915] [[37778,0],0] ADDING [[37778,1],WILDCARD] TO 
<br>
PARTICIPANTS
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 1
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLL id 1
<br>
[singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],1]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],1]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],2]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],2]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],1]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],1]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],2]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],2]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],3]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],3]
<br>
[singularity:08921] [[37778,1],3] grpcomm:bad entering barrier
<br>
[singularity:08921] [[37778,1],3] grpcomm:bad barrier underway
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],2]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],2]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],3]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],3]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],0]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],0]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],0]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],3]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],3]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],0]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],0]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],1]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],1]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],3]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],3]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],2]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],3]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],3]
<br>
[singularity:08916] [[37778,1],0] grpcomm:bad entering barrier
<br>
[singularity:08917] [[37778,1],1] grpcomm:bad entering barrier
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],0]
<br>
[singularity:08915] [[37778,0],0] WORKING COLLECTIVE 1
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 1
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLL id 1
<br>
[singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],1]
<br>
[singularity:08915] [[37778,0],0] WORKING COLLECTIVE 1
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 1
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLL id 1
<br>
[singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
<br>
[singularity:08917] [[37778,1],1] grpcomm:bad barrier underway
<br>
[singularity:08916] [[37778,1],0] grpcomm:bad barrier underway
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:receive processing 
<br>
collective return for id 0
<br>
[singularity:08919] [[37778,1],2] CHECKING COLL id 0
<br>
[singularity:08919] [[37778,1],2] STORING MODEX DATA
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],0]
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],0]
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],2]
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],2]
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],1]
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],1]
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:store_modex adding modex 
<br>
entry for proc [[37778,1],3]
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:update_modex_entries: 
<br>
adding 3 entries for proc [[37778,1],3]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],0]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],0]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],1]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],1]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr OMPI_ARCH on proc [[37778,1],3]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 11 bytes 
<br>
for attr OMPI_ARCH on proc [[37778,1],3]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],0]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],0]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],1]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],1]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],2]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],2]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr btl.mosix.1.7 on proc [[37778,1],3]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 20 bytes 
<br>
for attr btl.mosix.1.7 on proc [[37778,1],3]
<br>
[singularity:08919] [[37778,1],2] grpcomm:bad entering barrier
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE RECVD FROM [[37778,1],2]
<br>
[singularity:08915] [[37778,0],0] WORKING COLLECTIVE 1
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLLECTIVE 1
<br>
[singularity:08915] [[37778,0],0] PROGRESSING COLL id 1
<br>
[singularity:08915] [[37778,0],0] ALL LOCAL PROCS CONTRIBUTE 4
<br>
[singularity:08915] [[37778,0],0] COLLECTIVE 1 LOCALLY COMPLETE - 
<br>
SENDING TO GLOBAL COLLECTIVE
<br>
[singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: daemon 
<br>
collective recvd from [[37778,0],0]
<br>
[singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: WORKING 
<br>
COLLECTIVE 1
<br>
[singularity:08915] [[37778,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 4
<br>
[singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job 
<br>
[37778,1] tag 30
<br>
[singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
<br>
[singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient 
<br>
list is empty!
<br>
[singularity:08919] [[37778,1],2] grpcomm:bad barrier underway
<br>
[singularity:08916] [[37778,1],0] grpcomm:base:receive processing 
<br>
collective return for id 1
<br>
[singularity:08916] [[37778,1],0] CHECKING COLL id 1
<br>
[singularity:08917] [[37778,1],1] grpcomm:base:receive processing 
<br>
collective return for id 1
<br>
[singularity:08921] [[37778,1],3] grpcomm:base:receive processing 
<br>
collective return for id 1
<br>
[singularity:08921] [[37778,1],3] CHECKING COLL id 1
<br>
[singularity:08917] [[37778,1],1] CHECKING COLL id 1
<br>
[singularity:08919] [[37778,1],2] grpcomm:base:receive processing 
<br>
collective return for id 1
<br>
[singularity:08919] [[37778,1],2] CHECKING COLL id 1
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],0]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],1]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],2]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],3]
<br>
[singularity:08919] [[37778,1],2] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],1]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],2]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],3]
<br>
[singularity:08921] [[37778,1],3] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],0]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],0]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],1]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],3]
<br>
[singularity:08917] [[37778,1],1] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],0]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],1]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],2]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],2]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: searching for 
<br>
attr MPI_THREAD_LEVEL on proc [[37778,1],3]
<br>
[singularity:08916] [[37778,1],0] grpcomm:get_proc_attr: found 1 bytes 
<br>
for attr MPI_THREAD_LEVEL on proc [[37778,1],3]
<br>
<p><p>&nbsp;&nbsp;NAS Parallel Benchmarks 3.3 -- FT Benchmark
<br>
<p>&nbsp;&nbsp;No input file inputft.data. Using compiled defaults
<br>
&nbsp;&nbsp;Size                :   64x  64x  64
<br>
&nbsp;&nbsp;Iterations          :              6
<br>
&nbsp;&nbsp;Number of processes :              4
<br>
&nbsp;&nbsp;Processor array     :         1x   4
<br>
&nbsp;&nbsp;Layout type         :             1D
<br>
[singularity:08916] btl: mosix: Establishind TCP link to address 
<br>
127.0.0.1 and PID #8917
<br>
[singularity:08917] btl: mosix: Establishind TCP link to address 
<br>
127.0.0.1 and PID #8921
<br>
[singularity:08916] btl: mosix: Establishind TCP link to address 
<br>
127.0.0.1 and PID #8919
<br>
[singularity:08919] btl: mosix: Establishind TCP link to address 
<br>
127.0.0.1 and PID #8921
<br>
[singularity:08921] btl: mosix: Establishind TCP link to address 
<br>
127.0.0.1 and PID #8919
<br>
[singularity:08917] btl: mosix: Establishind TCP link to address 
<br>
127.0.0.1 and PID #8916
<br>
[singularity:08921] btl: mosix: Establishind TCP link to address 
<br>
127.0.0.1 and PID #8917
<br>
[singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job 
<br>
[37778,0] tag 1
<br>
[singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
<br>
[singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient 
<br>
list is empty!
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 2 with PID 8919 on node singularity 
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
[singularity:08915] [[37778,0],0] grpcomm:bad:xcast sent to job 
<br>
[37778,0] tag 1
<br>
[singularity:08915] [[37778,0],0] grpcomm:xcast:recv:send_relay
<br>
[singularity:08915] [[37778,0],0] orte:daemon:send_relay - recipient 
<br>
list is empty!
<br>
alex_at_singularity:~/huji/benchmarks/mpi/npb$
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10924.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
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
