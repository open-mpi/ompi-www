<?
$subject_val = "[OMPI devel] mpirun oddity w/ PBS on an SGI UV";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 17:33:33 2014" -->
<!-- isoreceived="20140131223333" -->
<!-- sent="Fri, 31 Jan 2014 14:33:31 -0800" -->
<!-- isosent="20140131223331" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun oddity w/ PBS on an SGI UV" -->
<!-- id="CAAvDA14oR76R5m4-RCKzjBKzHKM+wmaxtZxS8oqRu_27fkcZpQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun oddity w/ PBS on an SGI UV<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 17:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13968.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Previous message:</strong> <a href="13966.php">Paul Hargrove: "[OMPI devel] oshmem link failure on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13968.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Reply:</strong> <a href="13968.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to test the trunk on an SGI UV (to validate Nathan's port of
<br>
btl:vader to SGI's variant of xpmem).
<br>
<p>At configure time, PBS's TM support was correctly located.
<br>
<p>My PBS batch script includes
<br>
&nbsp;&nbsp;#PBS -l ncpus=16
<br>
because that is what this installation requires (not nodes, mppnodes, or
<br>
anything like that).
<br>
One is allocating cpus on a large shared-memory machine, not a set of nodes
<br>
in a cluster.
<br>
<p>However, this appears to be causing mpirun to think I have just 1 slot:
<br>
<p>+ mpirun -np 2 ./ring_c
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;./ring_c
<br>
<p>Either request fewer slots for your application, or make more slots
<br>
available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
<p>In case they contain useful info, here are the PBS env vars in the job:
<br>
<p>PBS_HT_NCPUS=32
<br>
PBS_VERSION=TORQUE-2.3.13
<br>
PBS_JOBNAME=qs
<br>
PBS_ENVIRONMENT=PBS_BATCH
<br>
PBS_HOME=/var/spool/torque
<br>
PBS_O_WORKDIR=/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples
<br>
PBS_PPN=16
<br>
PBS_TASKNUM=1
<br>
PBS_O_HOME=/usr/users/6/hargrove
<br>
PBS_MOMPORT=15003
<br>
PBS_O_QUEUE=debug
<br>
PBS_O_LOGNAME=hargrove
<br>
PBS_O_LANG=en_US.UTF-8
<br>
PBS_JOBCOOKIE=9EEF5DF75FA705A241FEF66EDFE01C5B
<br>
PBS_NODENUM=0
<br>
PBS_O_SHELL=/usr/psc/shells/bash
<br>
PBS_SERVER=tg-login1.blacklight.psc.teragrid.org
<br>
PBS_JOBID=314827.tg-login1.blacklight.psc.teragrid.org
<br>
PBS_NCPUS=16
<br>
PBS_O_HOST=tg-login1.blacklight.psc.teragrid.org
<br>
PBS_VNODENUM=0
<br>
PBS_QUEUE=debug_r1
<br>
PBS_O_MAIL=/var/mail/hargrove
<br>
PBS_NODEFILE=/var/spool/torque/aux//
<br>
314827.tg-login1.blacklight.psc.teragrid.org
<br>
PBS_O_PATH=[...removed...]
<br>
<p>If any additional info is needed to help make mpirun &quot;just work&quot;, please
<br>
let me know.
<br>
<p>However, at this point I am mostly interested in any work-arounds that will
<br>
let me run something other than a singleton on this system.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13967/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13968.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Previous message:</strong> <a href="13966.php">Paul Hargrove: "[OMPI devel] oshmem link failure on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13968.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Reply:</strong> <a href="13968.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
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
