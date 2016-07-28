<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 18:41:02 2014" -->
<!-- isoreceived="20140227234102" -->
<!-- sent="Thu, 27 Feb 2014 15:39:09 -0800" -->
<!-- isosent="20140227233909" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="148E7ED3-333E-43D4-8BEA-4C3A98D42636_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="530FC48A.2060305_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 18:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23703.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23698.php">Gus Correa: "[OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23704.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23704.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The hwloc in 1.6.5 is very old (v1.3.2), so it's possible it is having trouble with those data/instruction cache breakdowns. I don't know why it wouldn't have shown up before, however, as this looks to be happening when we first try to assemble the topology. To check that, what happens if you just run &quot;mpiexec hostname&quot; on the local node?
<br>
<p><p>On Feb 27, 2014, at 3:04 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OMPI pros
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to be a question in the nowhere land between OMPI and hwloc.
</span><br>
<span class="quotelev1">&gt; However, it appeared as an OMPI error, hence it may be OK to ask the question in this list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A user here got this error (or warning?) message today:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + mpiexec -np 64 $HOME/echam-aiv_ldeo_6.1.00p1/bin/echam6
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 594
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additional info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) We have OMPI 1.6.5. This user is using the one built
</span><br>
<span class="quotelev1">&gt; with Intel compilers 2011.13.367.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) I set these MCA parameters in $OMPI/etc/openmpi-mca-params.conf (includes binding to core):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl = ^tcp
</span><br>
<span class="quotelev1">&gt; orte_tag_output = 1
</span><br>
<span class="quotelev1">&gt; rmaps_base_schedule_policy = core
</span><br>
<span class="quotelev1">&gt; orte_process_binding = core
</span><br>
<span class="quotelev1">&gt; orte_report_bindings = 1
</span><br>
<span class="quotelev1">&gt; opal_paffinity_alone = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) The machines have dual-socket 16-core AMD Opteron 6376 (Abu-Dhabi),
</span><br>
<span class="quotelev1">&gt; which have one FPU for each pair of cores, a hierarchy of caches serving
</span><br>
<span class="quotelev1">&gt; sub-groups of cores, etc.
</span><br>
<span class="quotelev1">&gt; The OS is  Linux CentOS 6.4 with stock CentOS OFED.
</span><br>
<span class="quotelev1">&gt; Interconnect is Infiniband QDR (Mellanox HW).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) We have Torque 4.2.5, built with cpuset support.
</span><br>
<span class="quotelev1">&gt; OMPI is built with Torque (tm) support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5) In case it helps, I attach the output of
</span><br>
<span class="quotelev1">&gt; hwloc-gather-topology, which I ran on the node that threw the error,
</span><br>
<span class="quotelev1">&gt; although not immediately after the job failure.
</span><br>
<span class="quotelev1">&gt; I used the hwloc-gather-topology script that comes with
</span><br>
<span class="quotelev1">&gt; the hwloc (version 1.5) provided by CentOS.
</span><br>
<span class="quotelev1">&gt; As far as I can tell the hwloc nuts and bits built into OMPI
</span><br>
<span class="quotelev1">&gt; do not include the hwloc-gather-topology script (although it may be a newer hwloc version. 1.8 perhaps?).
</span><br>
<span class="quotelev1">&gt; Hopefully the mail servers won't chop off the attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6) I am a bit surprised by this error message, because I haven't
</span><br>
<span class="quotelev1">&gt; seen it before, although we have used OMPI 1.6.5 in
</span><br>
<span class="quotelev1">&gt; this machine with several other programs without problems.
</span><br>
<span class="quotelev1">&gt; Alas, it happened now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Is this a known hwloc problem in this processor architecture?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Is this a known issue in this combination of HW and SW?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Would not binding the MPI processes (to core or socket), perhaps help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Any workarounds or suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; &lt;node15.output&gt;&lt;node15.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23703.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23698.php">Gus Correa: "[OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23704.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23704.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
