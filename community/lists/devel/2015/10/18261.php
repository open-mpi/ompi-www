<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 17:45:15 2015" -->
<!-- isoreceived="20151023214515" -->
<!-- sent="Fri, 23 Oct 2015 23:45:08 +0200" -->
<!-- isosent="20151023214508" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="4EEF688F-42D9-41A0-96FB-0E6F19C75D61_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7C3A6641-5036-48BE-A9CE-B3347DCB42FB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte-dvm / orte-submit race condition<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 17:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18262.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18260.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>In reply to:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18262.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18262.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On 21 Oct 2015, at 2:50 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Can you do me a favor?
</span><br>
<p><p>Hi Ralph,
<br>
<p>It required some parsing-fu, but here you go! :-)
<br>
<p>Three text files attached. One is the raw log, the second is output from my parser script and the third is the output of pstree after it hangs.
<br>
<p>Hopefully this provides you some more insight. Feel free to push back to me if you have suggestions of what to do!
<br>
<p>Thanks
<br>
<p>Mark
<br>
<p><p>
<br><p>
[netbook:07231] mca: base: components_register: registering framework state components
<br>
[netbook:07231] mca: base: components_register: found loaded component app
<br>
[netbook:07231] mca: base: components_register: component app has no register or open function
<br>
[netbook:07231] mca: base: components_register: found loaded component dvm
<br>
[netbook:07231] mca: base: components_register: component dvm has no register or open function
<br>
[netbook:07231] mca: base: components_register: found loaded component hnp
<br>
[netbook:07231] mca: base: components_register: component hnp has no register or open function
<br>
[netbook:07231] mca: base: components_register: found loaded component novm
<br>
[netbook:07231] mca: base: components_register: component novm register function successful
<br>
[netbook:07231] mca: base: components_register: found loaded component orted
<br>
[netbook:07231] mca: base: components_register: component orted has no register or open function
<br>
[netbook:07231] mca: base: components_register: found loaded component staged_hnp
<br>
[netbook:07231] mca: base: components_register: component staged_hnp has no register or open function
<br>
[netbook:07231] mca: base: components_register: found loaded component staged_orted
<br>
[netbook:07231] mca: base: components_register: component staged_orted has no register or open function
<br>
[netbook:07231] mca: base: components_register: found loaded component tool
<br>
[netbook:07231] mca: base: components_register: component tool has no register or open function
<br>
[netbook:07231] mca: base: components_open: opening state components
<br>
[netbook:07231] mca: base: components_open: found loaded component app
<br>
[netbook:07231] mca: base: components_open: component app open function successful
<br>
[netbook:07231] mca: base: components_open: found loaded component dvm
<br>
[netbook:07231] mca: base: components_open: component dvm open function successful
<br>
[netbook:07231] mca: base: components_open: found loaded component hnp
<br>
[netbook:07231] mca: base: components_open: component hnp open function successful
<br>
[netbook:07231] mca: base: components_open: found loaded component novm
<br>
[netbook:07231] mca: base: components_open: component novm open function successful
<br>
[netbook:07231] mca: base: components_open: found loaded component orted
<br>
[netbook:07231] mca: base: components_open: component orted open function successful
<br>
[netbook:07231] mca: base: components_open: found loaded component staged_hnp
<br>
[netbook:07231] mca: base: components_open: component staged_hnp open function successful
<br>
[netbook:07231] mca: base: components_open: found loaded component staged_orted
<br>
[netbook:07231] mca: base: components_open: component staged_orted open function successful
<br>
[netbook:07231] mca: base: components_open: found loaded component tool
<br>
[netbook:07231] mca: base: components_open: component tool open function successful
<br>
[netbook:07231] mca:base:select: Auto-selecting state components
<br>
[netbook:07231] mca:base:select:(state) Querying component [app]
<br>
[netbook:07231] mca:base:select:(state) Querying component [dvm]
<br>
[netbook:07231] mca:base:select:(state) Query of component [dvm] set priority to 100
<br>
[netbook:07231] mca:base:select:(state) Querying component [hnp]
<br>
[netbook:07231] mca:base:select:(state) Querying component [novm]
<br>
[netbook:07231] mca:base:select:(state) Querying component [orted]
<br>
[netbook:07231] mca:base:select:(state) Querying component [staged_hnp]
<br>
[netbook:07231] mca:base:select:(state) Querying component [staged_orted]
<br>
[netbook:07231] mca:base:select:(state) Querying component [tool]
<br>
[netbook:07231] mca:base:select:(state) Selected component [dvm]
<br>
[netbook:07231] mca: base: close: component app closed
<br>
[netbook:07231] mca: base: close: unloading component app
<br>
[netbook:07231] mca: base: close: component hnp closed
<br>
[netbook:07231] mca: base: close: unloading component hnp
<br>
[netbook:07231] mca: base: close: component novm closed
<br>
[netbook:07231] mca: base: close: unloading component novm
<br>
[netbook:07231] mca: base: close: component orted closed
<br>
[netbook:07231] mca: base: close: unloading component orted
<br>
[netbook:07231] mca: base: close: component staged_hnp closed
<br>
[netbook:07231] mca: base: close: unloading component staged_hnp
<br>
[netbook:07231] mca: base: close: component staged_orted closed
<br>
[netbook:07231] mca: base: close: unloading component staged_orted
<br>
[netbook:07231] mca: base: close: component tool closed
<br>
[netbook:07231] mca: base: close: unloading component tool
<br>
[netbook:07231] ORTE_JOB_STATE_MACHINE:
<br>
[netbook:07231] 	State: PENDING INIT cbfunc: DEFINED
<br>
[netbook:07231] 	State: INIT_COMPLETE cbfunc: DEFINED
<br>
[netbook:07231] 	State: PENDING ALLOCATION cbfunc: DEFINED
<br>
[netbook:07231] 	State: ALLOCATION COMPLETE cbfunc: DEFINED
<br>
[netbook:07231] 	State: DAEMONS LAUNCHED cbfunc: DEFINED
<br>
[netbook:07231] 	State: ALL DAEMONS REPORTED cbfunc: DEFINED
<br>
[netbook:07231] 	State: VM READY cbfunc: DEFINED
<br>
[netbook:07231] 	State: PENDING MAPPING cbfunc: DEFINED
<br>
[netbook:07231] 	State: MAP COMPLETE cbfunc: DEFINED
<br>
[netbook:07231] 	State: PENDING FINAL SYSTEM PREP cbfunc: DEFINED
<br>
[netbook:07231] 	State: PENDING APP LAUNCH cbfunc: DEFINED
<br>
[netbook:07231] 	State: LOCAL LAUNCH COMPLETE cbfunc: DEFINED
<br>
[netbook:07231] 	State: RUNNING cbfunc: DEFINED
<br>
[netbook:07231] 	State: SYNC REGISTERED cbfunc: DEFINED
<br>
[netbook:07231] 	State: NORMALLY TERMINATED cbfunc: DEFINED
<br>
[netbook:07231] 	State: NOTIFY COMPLETED cbfunc: DEFINED
<br>
[netbook:07231] 	State: ALL JOBS COMPLETE cbfunc: DEFINED
<br>
[netbook:07231] 	State: DAEMONS TERMINATED cbfunc: DEFINED
<br>
[netbook:07231] 	State: FORCED EXIT cbfunc: DEFINED
<br>
[netbook:07231] 	State: REPORT PROGRESS cbfunc: DEFINED
<br>
[netbook:07231] ORTE_PROC_STATE_MACHINE:
<br>
[netbook:07231] 	State: RUNNING cbfunc: DEFINED
<br>
[netbook:07231] 	State: SYNC REGISTERED cbfunc: DEFINED
<br>
[netbook:07231] 	State: IOF COMPLETE cbfunc: DEFINED
<br>
[netbook:07231] 	State: WAITPID FIRED cbfunc: DEFINED
<br>
[netbook:07231] 	State: NORMALLY TERMINATED cbfunc: DEFINED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,0] STATE PENDING ALLOCATION AT ../../../../orte/tools/orte-dvm/orte-dvm.c:429
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,0] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,0] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,0] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,0] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,0] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,0] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,0] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,0] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,0] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE INIT_COMPLETE PRI 4
<br>
DVM ready
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,1],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,1],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,2],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,2],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,1],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,1],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,3],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,3],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,2],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,2],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,4],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,4],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,3],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,3],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE PENDING INIT PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,5],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,5],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,6],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,6],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,7],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,7],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,1],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,2],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,2],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,2],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,1],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,1],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,1],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,3],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,3] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,2],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,4],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,3],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE INIT_COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,5],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,6],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,7],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,2],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,2],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,2],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,1],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,1],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,1],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,3] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE PENDING ALLOCATION PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,2],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,2],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,1],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,1],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE ALLOCATION COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,2]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,2] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,2] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,1] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,2] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,2] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,4] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,5] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,6] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,7] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,8] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,1]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,1] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,1] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,1] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,1] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,2] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,4] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,5] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,6] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,7] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,8] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is terminated (0 vs 0 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9024,0],0] OF JOB [9019,2] COMPLETION
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,5],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,5],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,4],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,4],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,6],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,6],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,7],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,7],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9024,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9024,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9030,0],0] OF JOB [9019,1] COMPLETION
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE ALL DAEMONS REPORTED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,7],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,7],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,6],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,6],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,5],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,5],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,4],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,4],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,5],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,4],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,6],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,7],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE VM READY PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,7],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,7],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,7],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,6],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,6],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,6],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,5],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,5],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,5],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,4],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,4],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,4],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE PENDING MAPPING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,7],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,7],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,6],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,6],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,5],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,5],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,4],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,4],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE MAP COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,7]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,7] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,7] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,4] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,5] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,6] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,7] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,7] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,8] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,6]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,6] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,6] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,4] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,5] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,6] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,6] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,7] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,8] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,5]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,5] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,5] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,4] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,5] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,5] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,6] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,7] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,8] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,4]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,4] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,4] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,4] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,4] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,5] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,6] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,7] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,8] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE PENDING FINAL SYSTEM PREP PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9030,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9030,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9026,0],0] OF JOB [9019,7] COMPLETION
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9036,0],0] OF JOB [9019,6] COMPLETION
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9025,0],0] OF JOB [9019,5] COMPLETION
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9031,0],0] OF JOB [9019,4] COMPLETION
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE PENDING APP LAUNCH PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,8],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,8],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9031,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9031,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9025,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9025,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9036,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9036,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9026,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9026,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,8],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,8],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,8],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,9],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,9],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,8],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,8],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,8],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,10],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,10],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,11],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,11],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,12],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,12],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,13],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,13],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,14],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,14],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,15],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,15],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,16],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,16],0] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE LOCAL LAUNCH COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,9],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,8],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,8],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,8],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,10],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,11],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,12],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,13],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,14],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,15],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,16],0] state RUNNING
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE RUNNING PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,8],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,8],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691
<br>
[netbook:07231] ACTIVATE: ANY STATE NOT FOUND
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,8]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,8] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,8] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,8] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,8] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9037,0],0] OF JOB [9019,8] COMPLETION
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,9],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,9],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,10],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,10],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,11],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,11],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,12],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,12],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,13],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,13],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,14],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,14],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,15],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,15],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,16],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,16],0] STATE IOF COMPLETE PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9037,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9037,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,16],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,16],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,15],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,15],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,14],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,14],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,13],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,13],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,12],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,12],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,11],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,11],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,10],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,10],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,9],0] STATE WAITPID FIRED AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1409
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,9],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,9],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,10],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,11],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,12],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,13],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,14],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,15],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,16],0] state IOF COMPLETE
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,16],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,16],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,16],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,15],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,15],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,15],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,14],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,14],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,14],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,13],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,13],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,13],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,12],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,12],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,12],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,11],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,11],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,11],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,10],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,10],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,10],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,9],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,9],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,9],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,16],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,16],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,15],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,15],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,14],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,14],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,13],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,13],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,12],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,12],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,11],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,11],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,10],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,10],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,9],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:cleanup_node on proc [[9019,9],0]
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:556
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,16]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,16] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,16] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,16] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,16] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,15]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,15] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,15] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,15] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,15] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,14]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,14] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,14] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,14] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,14] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,13]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,13] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,13] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,13] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,13] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,12]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,12] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,12] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,12] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,12] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,11]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,11] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,11] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,11] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,11] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,10]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,10] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,10] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,9] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,10] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,10] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_complete on job [9019,9]
<br>
[netbook:07231] [[9019,0],0] JOB [9019,9] HAS TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed declared job [9019,9] terminated with state NORMALLY TERMINATED - checking all jobs
<br>
[netbook:07231] [[9019,0],0] releasing procs from node netbook
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,3] is not terminated (0:1)
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed state is terminated - activating notify
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB [9019,9] STATE NOTIFY COMPLETED AT ../../../../../orte/mca/state/dvm/state_dvm.c:416
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB [9019,9] STATE NOTIFY COMPLETED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,10] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,11] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,12] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,13] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,14] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,15] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed job [9019,16] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
[netbook:07231] [[9019,0],0] state:base:check_job_completed at least one job is not terminated
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9045,0],0] OF JOB [9019,16] COMPLETION
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9044,0],0] OF JOB [9019,15] COMPLETION
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9035,0],0] OF JOB [9019,14] COMPLETION
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9034,0],0] OF JOB [9019,13] COMPLETION
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9033,0],0] OF JOB [9019,12] COMPLETION
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9032,0],0] OF JOB [9019,11] COMPLETION
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9039,0],0] OF JOB [9019,10] COMPLETION
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9045,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9045,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9044,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9044,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9035,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9035,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] NOTIFYING [[9038,0],0] OF JOB [9019,9] COMPLETION
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9034,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9034,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9033,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9033,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9039,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9039,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9032,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9032,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9038,0],0] STATE COMMUNICATION FAILURE AT ../../../../../orte/mca/oob/tcp/oob_tcp_component.c:995
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9038,0],0] STATE COMMUNICATION FAILURE PRI 3
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,3],0] STATE KILLED BY INTERNAL COMMAND AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1611
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,3],0] STATE KILLED BY INTERNAL COMMAND PRI 0
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,3],0] STATE WAITPID FIRED AT ../../../../../orte/mca/errmgr/default_hnp/errmgr_default_hnp.c:641
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,3],0] STATE WAITPID FIRED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,3],0] state WAITPID FIRED
<br>
[netbook:07231] [[9019,0],0] ACTIVATE PROC [[9019,3],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518
<br>
[netbook:07231] [[9019,0],0] ACTIVATING PROC [[9019,3],0] STATE NORMALLY TERMINATED PRI 4
<br>
[netbook:07231] [[9019,0],0] state:base:track_procs called for proc [[9019,3],0] state NORMALLY TERMINATED
<br>
[netbook:07231] [[9019,0],0] state:base all routes and children gone - exiting
<br>
[netbook:07231] [[9019,0],0] ACTIVATE JOB NULL STATE DAEMONS TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:548
<br>
[netbook:07231] [[9019,0],0] ACTIVATING JOB NULL STATE DAEMONS TERMINATED PRI 4
<br>
[netbook:07231] mca: base: close: component dvm closed
<br>
[netbook:07231] mca: base: close: unloading component dvm
<br>
<p>
<p>
Jobs started 16
<br>
Jobs completed: 15
<br>
Procs completed: 16
<br>
Communication &quot;Errors&quot;: 15
<br>
<p>JOB [9019,9] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,11] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,10] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,16] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,8] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,12] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,4] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,6] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,7] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,2] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,3] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING (7)
<br>
JOB [9019,3] not complete!! (final state: RUNNING)
<br>
JOB [9019,5] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,13] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,1] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,15] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
JOB [9019,14] INIT_COMPLETE, ALLOCATION, ALL DAEMONS REPORTED, VM READY, MAP COMPLETE, LOCAL LAUNCH, RUNNING, NORMALLY TERMINATED, NOTIFY COMPLETED (9)
<br>
<p>PROC [[9019,7],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,13],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,11],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,5],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,16],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,10],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,3],0] RUNNING, IOF COMPLETE, KILLED BY INTERNAL COMMAND, WAITPID FIRED, NORMALLY TERMINATED (5)
<br>
PROC [[9019,3],0] KILLED!! (final state: NORMALLY TERMINATED)
<br>
PROC [[9019,14],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,9],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,12],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,15],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,1],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,8],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,2],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,4],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
PROC [[9019,6],0] RUNNING, IOF COMPLETE, WAITPID FIRED, NORMALLY TERMINATED (4)
<br>
<p>Log for failed job: [9019,3]
<br>
['ACTIVATE JOB [9019,3] STATE PENDING INIT AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:888',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE PENDING INIT PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE INIT_COMPLETE AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:311',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE INIT_COMPLETE PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE PENDING ALLOCATION AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:322',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE PENDING ALLOCATION PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE ALLOCATION COMPLETE AT ../../../../orte/mca/ras/base/ras_base_allocate.c:443',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE ALLOCATION COMPLETE PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE PENDING DAEMON LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:200',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE PENDING DAEMON LAUNCH PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE ALL DAEMONS REPORTED AT ../../../../../orte/mca/plm/rsh/plm_rsh_module.c:1001',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE ALL DAEMONS REPORTED PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE VM READY AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:188',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE VM READY PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE PENDING MAPPING AT ../../../../../orte/mca/state/dvm/state_dvm.c:208',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE PENDING MAPPING PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE MAP COMPLETE AT ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c:522',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE MAP COMPLETE PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE PENDING FINAL SYSTEM PREP AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:251',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE PENDING FINAL SYSTEM PREP PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE PENDING APP LAUNCH AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:463',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE PENDING APP LAUNCH PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE LOCAL LAUNCH COMPLETE AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1095',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE LOCAL LAUNCH COMPLETE PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE RUNNING AT ../../../../orte/mca/state/base/state_base_fns.c:488',
<br>
&nbsp;'ACTIVATING JOB [9019,3] STATE RUNNING PRI 4',
<br>
&nbsp;'ACTIVATE JOB [9019,3] STATE READY FOR DEBUGGERS AT ../../../../orte/mca/plm/base/plm_base_launch_support.c:691',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)',
<br>
&nbsp;'state:base:check_job_completed job [9019,3] is not terminated (0:1)']
<br>
<p>Log for failed proc [[9019,3],0]
<br>
['ACTIVATE PROC [[9019,3],0] STATE RUNNING AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1064',
<br>
&nbsp;'ACTIVATING PROC [[9019,3],0] STATE RUNNING PRI 4',
<br>
&nbsp;'ACTIVATE PROC [[9019,3],0] STATE IOF COMPLETE AT ../../../../../orte/mca/iof/hnp/iof_hnp_read.c:280',
<br>
&nbsp;'ACTIVATING PROC [[9019,3],0] STATE IOF COMPLETE PRI 4',
<br>
&nbsp;'state:base:track_procs called for proc [[9019,3],0] state RUNNING',
<br>
&nbsp;'state:base:track_procs called for proc [[9019,3],0] state IOF COMPLETE',
<br>
&nbsp;'ACTIVATE PROC [[9019,3],0] STATE KILLED BY INTERNAL COMMAND AT ../../../../orte/mca/odls/base/odls_base_default_fns.c:1611',
<br>
&nbsp;'ACTIVATING PROC [[9019,3],0] STATE KILLED BY INTERNAL COMMAND PRI 0',
<br>
&nbsp;'ACTIVATE PROC [[9019,3],0] STATE WAITPID FIRED AT ../../../../../orte/mca/errmgr/default_hnp/errmgr_default_hnp.c:641',
<br>
&nbsp;'ACTIVATING PROC [[9019,3],0] STATE WAITPID FIRED PRI 4',
<br>
&nbsp;'state:base:track_procs called for proc [[9019,3],0] state WAITPID FIRED',
<br>
&nbsp;'ACTIVATE PROC [[9019,3],0] STATE NORMALLY TERMINATED AT ../../../../orte/mca/state/base/state_base_fns.c:518',
<br>
&nbsp;'ACTIVATING PROC [[9019,3],0] STATE NORMALLY TERMINATED PRI 4',
<br>
&nbsp;'state:base:track_procs called for proc [[9019,3],0] state NORMALLY TERMINATED']
<br>
<p><p>
<br><p>
$ pstree|grep echo
<br>
&nbsp;| |   \--- 07267 mark grep echo
<br>
&nbsp;| |     \--- 07239 mark orte-submit --hnp file:dvm_uri -np 1 /bin/echo 6
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18262.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18260.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>In reply to:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18262.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18262.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
