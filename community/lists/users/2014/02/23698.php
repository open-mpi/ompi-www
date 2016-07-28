<?
$subject_val = "[OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 18:04:43 2014" -->
<!-- isoreceived="20140227230443" -->
<!-- sent="Thu, 27 Feb 2014 18:04:42 -0500" -->
<!-- isosent="20140227230442" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="530FC48A.2060305_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] hwloc error in topology.c in OMPI 1.6.5<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 18:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23699.php">tmishima_at_[hidden]: "[OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23697.php">George Bosilca: "Re: [OMPI users] checkpoint/restart facility - blcr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23702.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23702.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI pros
<br>
<p>This seems to be a question in the nowhere land between OMPI and hwloc.
<br>
However, it appeared as an OMPI error, hence it may be OK to ask the 
<br>
question in this list.
<br>
<p>***
<br>
<p>A user here got this error (or warning?) message today:
<br>
<p>+ mpiexec -np 64 $HOME/echam-aiv_ldeo_6.1.00p1/bin/echam6
<br>
****************************************************************************
<br>
* Hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* object intersection without inclusion!
<br>
* Error occurred in topology.c line 594
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology.sh script.
<br>
****************************************************************************
<br>
<p>Additional info:
<br>
<p>1) We have OMPI 1.6.5. This user is using the one built
<br>
with Intel compilers 2011.13.367.
<br>
<p>2) I set these MCA parameters in $OMPI/etc/openmpi-mca-params.conf 
<br>
(includes binding to core):
<br>
<p>btl = ^tcp
<br>
orte_tag_output = 1
<br>
rmaps_base_schedule_policy = core
<br>
orte_process_binding = core
<br>
orte_report_bindings = 1
<br>
opal_paffinity_alone = 1
<br>
<p><p>3) The machines have dual-socket 16-core AMD Opteron 6376 (Abu-Dhabi),
<br>
which have one FPU for each pair of cores, a hierarchy of caches serving
<br>
sub-groups of cores, etc.
<br>
The OS is  Linux CentOS 6.4 with stock CentOS OFED.
<br>
Interconnect is Infiniband QDR (Mellanox HW).
<br>
<p>4) We have Torque 4.2.5, built with cpuset support.
<br>
OMPI is built with Torque (tm) support.
<br>
<p>5) In case it helps, I attach the output of
<br>
hwloc-gather-topology, which I ran on the node that threw the error,
<br>
although not immediately after the job failure.
<br>
I used the hwloc-gather-topology script that comes with
<br>
the hwloc (version 1.5) provided by CentOS.
<br>
As far as I can tell the hwloc nuts and bits built into OMPI
<br>
do not include the hwloc-gather-topology script (although it may be a 
<br>
newer hwloc version. 1.8 perhaps?).
<br>
Hopefully the mail servers won't chop off the attachments.
<br>
<p>6) I am a bit surprised by this error message, because I haven't
<br>
seen it before, although we have used OMPI 1.6.5 in
<br>
this machine with several other programs without problems.
<br>
Alas, it happened now.
<br>
<p>**
<br>
<p>- Is this a known hwloc problem in this processor architecture?
<br>
<p>- Is this a known issue in this combination of HW and SW?
<br>
<p>- Would not binding the MPI processes (to core or socket), perhaps help?
<br>
<p>- Any workarounds or suggestions?
<br>
<p>**
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23698/node15.output">node15.output</a>
</ul>
<!-- attachment="node15.output" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23698/node15.tar.bz2">node15.tar.bz2</a>
</ul>
<!-- attachment="node15.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23699.php">tmishima_at_[hidden]: "[OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23697.php">George Bosilca: "Re: [OMPI users] checkpoint/restart facility - blcr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23702.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23702.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
