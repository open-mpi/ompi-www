<?
$subject_val = "[OMPI devel] mtt IBM SPAWN error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 30 02:38:18 2008" -->
<!-- isoreceived="20080630063818" -->
<!-- sent="Mon, 30 Jun 2008 09:38:14 +0300" -->
<!-- isosent="20080630063814" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] mtt IBM SPAWN error" -->
<!-- id="453d39990806292338x33a66ac0n60ae87b5d568dc6a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] mtt IBM SPAWN error<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-30 02:38:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4249.php">Muhammad Atif: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Reply:</strong> <a href="4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Reply:</strong> <a href="4252.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
trying to run mtt I failed to run IBM spawn test. It fails only when using
<br>
hostfile, and not when using host list.
<br>
( OMPI from TRUNK )
<br>
<p>This is working :
<br>
#mpirun -np 3 -H witch2 dynamic/spawn
<br>
<p>This Fails:
<br>
# cat hostfile
<br>
witch2 slots=4 max_slots=4
<br>
<p>#mpirun -np 3 -hostfile hostfile dynamic/spawn
<br>
[witch1:12392]
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 3 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;dynamic/spawn
<br>
<p>Either request fewer slots for your application, or make more slots
<br>
available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
[witch1:12392]
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p><p>Using hostfile1 also works
<br>
#cat hostfile1
<br>
witch2
<br>
witch2
<br>
witch2
<br>
<p><p>Best Regards
<br>
Lenny.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4249.php">Muhammad Atif: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Reply:</strong> <a href="4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Reply:</strong> <a href="4252.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
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
