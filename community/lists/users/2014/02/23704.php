<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 19:39:30 2014" -->
<!-- isoreceived="20140228003930" -->
<!-- sent="Thu, 27 Feb 2014 19:39:29 -0500" -->
<!-- isosent="20140228003929" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="530FDAC1.8080500_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="148E7ED3-333E-43D4-8BEA-4C3A98D42636_at_open-mpi.org" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 19:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23705.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23703.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23702.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23706.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23706.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23713.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Ralph!
<br>
<p>I did a bit more of homework, and found out that all jobs that had
<br>
the hwloc error involved one specific node (node14).
<br>
<p>The &quot;report bindings&quot; output in those jobs' stderr show
<br>
that node14 systematically failed to bind the processes to the cores,
<br>
while other nodes on the same jobs didn't fail.
<br>
Interestingly, the jobs continued to run, although they
<br>
eventually failed, but much later.
<br>
So, the hwloc error doesn't seem to stop the job on its tracks.
<br>
As a matter of policy, should it perhaps shutdown the job instead?
<br>
<p>In addition, when I try the hwloc-gather-topology diagnostic on node14 I 
<br>
get the same error, a bit more verbose (see below).
<br>
So, now my guess is that this may be a hardware problem on that node.
<br>
<p>I replaced two nodes' motherboards last week, including node14's,
<br>
and something may have gone wrong on that one.
<br>
The other node that had the motherboard replaced
<br>
doesn't show the hwloc-gather-topology error, though.
<br>
<p>Does the error message below (Socket P#0 ...)
<br>
suggest anything that I should be looking for on the hardware side?
<br>
(Thermal compound on the heatsink, memory modules, etc)
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p><p><p>[root_at_node14 ~]# /usr/bin/hwloc-gather-topology /tmp/$(uname -n)
<br>
Hierarchy gathered in /tmp/node14.tar.bz2 and kept in 
<br>
/tmp/tmp.D46Sdhcnru/node14/
<br>
****************************************************************************
<br>
* Hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* object (Socket P#0 cpuset 0x0000ffff) intersection without inclusion!
<br>
* Error occurred in topology.c line 718
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology.sh script.
<br>
****************************************************************************
<br>
Expected topology output stored in /tmp/node14.output
<br>
<p><p>On 02/27/2014 06:39 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The hwloc in 1.6.5 is very old (v1.3.2), so it's possible it is having
</span><br>
trouble with those data/instruction cache breakdowns.
<br>
I don't know why it wouldn't have shown up before,
<br>
however, as this looks to be happening when we first try to
<br>
assemble the topology. To check that, what happens if you just run
<br>
&quot;mpiexec hostname&quot; on the local node?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2014, at 3:04 PM, Gus Correa&lt;gus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OMPI pros
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to be a question in the nowhere land between OMPI and hwloc.
</span><br>
<span class="quotelev2">&gt;&gt; However, it appeared as an OMPI error, hence it may be OK to ask the question in this list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A user here got this error (or warning?) message today:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + mpiexec -np 64 $HOME/echam-aiv_ldeo_6.1.00p1/bin/echam6
</span><br>
<span class="quotelev2">&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; * Hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev2">&gt;&gt; * Error occurred in topology.c line 594
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev2">&gt;&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev2">&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additional info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) We have OMPI 1.6.5. This user is using the one built
</span><br>
<span class="quotelev2">&gt;&gt; with Intel compilers 2011.13.367.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) I set these MCA parameters in $OMPI/etc/openmpi-mca-params.conf (includes binding to core):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl = ^tcp
</span><br>
<span class="quotelev2">&gt;&gt; orte_tag_output = 1
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_base_schedule_policy = core
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_binding = core
</span><br>
<span class="quotelev2">&gt;&gt; orte_report_bindings = 1
</span><br>
<span class="quotelev2">&gt;&gt; opal_paffinity_alone = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) The machines have dual-socket 16-core AMD Opteron 6376 (Abu-Dhabi),
</span><br>
<span class="quotelev2">&gt;&gt; which have one FPU for each pair of cores, a hierarchy of caches serving
</span><br>
<span class="quotelev2">&gt;&gt; sub-groups of cores, etc.
</span><br>
<span class="quotelev2">&gt;&gt; The OS is  Linux CentOS 6.4 with stock CentOS OFED.
</span><br>
<span class="quotelev2">&gt;&gt; Interconnect is Infiniband QDR (Mellanox HW).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) We have Torque 4.2.5, built with cpuset support.
</span><br>
<span class="quotelev2">&gt;&gt; OMPI is built with Torque (tm) support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5) In case it helps, I attach the output of
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-gather-topology, which I ran on the node that threw the error,
</span><br>
<span class="quotelev2">&gt;&gt; although not immediately after the job failure.
</span><br>
<span class="quotelev2">&gt;&gt; I used the hwloc-gather-topology script that comes with
</span><br>
<span class="quotelev2">&gt;&gt; the hwloc (version 1.5) provided by CentOS.
</span><br>
<span class="quotelev2">&gt;&gt; As far as I can tell the hwloc nuts and bits built into OMPI
</span><br>
<span class="quotelev2">&gt;&gt; do not include the hwloc-gather-topology script (although it may be a newer hwloc version. 1.8 perhaps?).
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully the mail servers won't chop off the attachments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6) I am a bit surprised by this error message, because I haven't
</span><br>
<span class="quotelev2">&gt;&gt; seen it before, although we have used OMPI 1.6.5 in
</span><br>
<span class="quotelev2">&gt;&gt; this machine with several other programs without problems.
</span><br>
<span class="quotelev2">&gt;&gt; Alas, it happened now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Is this a known hwloc problem in this processor architecture?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Is this a known issue in this combination of HW and SW?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Would not binding the MPI processes (to core or socket), perhaps help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Any workarounds or suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; &lt;node15.output&gt;&lt;node15.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23705.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23703.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23702.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23706.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23706.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23713.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
