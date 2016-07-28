<?
$subject_val = "[OMPI devel] debugger attach broken in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 18:20:40 2010" -->
<!-- isoreceived="20101014222040" -->
<!-- sent="Thu, 14 Oct 2010 23:20:33 +0100" -->
<!-- isosent="20101014222033" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[OMPI devel] debugger attach broken in trunk" -->
<!-- id="A613A967-FE21-4E56-84E9-B2A5B76D342D_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] debugger attach broken in trunk<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 18:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8609.php">Ralph Castain: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Previous message:</strong> <a href="8607.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8609.php">Ralph Castain: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Reply:</strong> <a href="8609.php">Ralph Castain: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's been reported to me that using current SVN head debugger attach support is broken, both the MPIR interface and the orte-ps command are returning no data for the hostnames and process identifiers of launched jobs.
<br>
<p>The v1.5 download is fine, I've checked that on both counts but a checkout of the trunk exhibits the problem.
<br>
<p>ashley_at_cloud1:~/code/padb-read-only/src$ orte-ps 
<br>
<p>Information from mpirun [59875,0]
<br>
---------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;JobID |   State |  Slots | Num Procs | 
<br>
------------------------------------------
<br>
[59875,1] | Running |      1 |         0 | 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process Name | ORTE Name | Local Rank |    PID | Node | State | 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------------------------------------------------------
<br>
<p>$ gdb -p &lt;pidof mpirun&gt;
<br>
(gdb) p MPIR_proctable
<br>
$1 = (struct MPIR_PROCDESC *) 0x0
<br>
(gdb) p MPIR_proctable_size
<br>
$2 = 0
<br>
(gdb) p MPIR_PROCDESC 
<br>
<p>ashley_at_cloud1:~/code/padb-read-only/src$ ./padb -Ormgr=mpirun -a --proc-summary -Odebug
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8609.php">Ralph Castain: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Previous message:</strong> <a href="8607.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8609.php">Ralph Castain: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Reply:</strong> <a href="8609.php">Ralph Castain: "Re: [OMPI devel] debugger attach broken in trunk"</a>
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
