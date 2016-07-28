<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 08:04:52 2006" -->
<!-- isoreceived="20060630120452" -->
<!-- sent="Fri, 30 Jun 2006 08:04:44 -0400" -->
<!-- isosent="20060630120444" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9E8B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OpenMpi 1.1 and Torque 2.1.1" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-30 08:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Previous message:</strong> <a href="1513.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Maybe in reply to:</strong> <a href="1506.php">Justin Bronder: "[OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1516.php">Justin Bronder: "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Reply:</strong> <a href="1516.php">Justin Bronder: "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a bug in early Torque 2.1.x versions (I'm afraid I don't
<br>
remember which one) that -- I think -- had something to do with a faulty
<br>
poll() implementation.  Whatever the problem was, it caused all TM
<br>
launchers to fail on OSX.  
<br>
&nbsp;
<br>
Can you see if the Torque-included tool pbsdsh works properly?  It uses
<br>
the same API that Open MPI does (the &quot;tm&quot; api).  
<br>
&nbsp;
<br>
If pbsdsh fails, I suspect you're looking at a Torque bug.  I know that
<br>
Garrick S. has since fixed the problem in the Torque code base; I don't
<br>
know if they've had a release since then that included the fix.
<br>
&nbsp;
<br>
If pbsdsh works, let us know and we'll track this down further.
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Justin Bronder
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Thursday, June 29, 2006 5:19 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] OpenMpi 1.1 and Torque 2.1.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm having trouble getting OpenMPI to execute jobs when
<br>
submitting through Torque.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Everything works fine if I am to use the included mpirun
<br>
scripts, but this is obviously
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a good solution for the general users on the cluster.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm running under OS X 10.4, Darwin 8.6.0.  I configured OpenMpi
<br>
with:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export CC=/opt/ibmcmp/vac/6.0/bin/xlc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export CXX=/opt/ibmcmp/vacpp/6.0/bin/xlc++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export FC=/opt/ibmcmp/xlf/8.1/bin/xlf90_r
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export F77=/opt/ibmcmp/xlf/8.1/bin/xlf_r
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export LDFLAGS=-lSystemStubs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export LIBTOOL=glibtool
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PREFIX=/usr/local/ompi-xl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=$PREFIX \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/usr/local/pbs/ \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-gm=/opt/gm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-cxx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I also had to employ the fix listed in:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2006/04/1007.php">http://www.open-mpi.org/community/lists/users/2006/04/1007.php</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've attached the output of ompi_info while in an interactive
<br>
job.  Looking through the list,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I can at least save a bit of trouble by listing what does work.
<br>
Anything outside of Torque
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seems fine.  From within an interactive job, pbsdsh works fine,
<br>
hence the earlier problems
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with poll are fixed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here is the error that is reported when I attemt to run hostname
<br>
on one processor:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node96:/usr/src/openmpi-1.1 jbronder$
<br>
/usr/local/ompi-xl/bin/mpirun -np 1 -mca pls_tm_debug 1 /bin/hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] pls:tm: final
<br>
top-level argv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] pls:tm:     orted
<br>
--no-daemonize --bootproxy 1 --name  --num_procs 2 --vpid_start 0
<br>
--nodename  --universe
<br>
jbronder_at_[hidden]:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://10.0.1.96:49395&quot; --gprreplica &quot;0.0.0;tcp://10.0.1.96:49395&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] pls:tm: Set
<br>
prefix:/usr/local/ompi-xl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] pls:tm: launching on
<br>
node localhost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] pls:tm: resetting
<br>
PATH:
<br>
/usr/local/ompi-xl/bin:/bin:/sbin:/usr/bin:/usr/sbin:/usr/local/pbs/bin:
<br>
/usr/local/mpiexec/bin:/opt/ibmcmp/xlf/8.1/bin:/opt/ibmcmp/vac/6.0/bin:/
<br>
opt/ibmcmp/vacpp/6.0/bin:/opt/gm/bin:/opt/fms/bin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] pls:tm: found
<br>
/usr/local/ompi-xl/bin/orted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] pls:tm: not
<br>
oversubscribed -- setting mpi_yield_when_idle to 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] pls:tm: executing:
<br>
orted --no-daemonize --bootproxy 1 --name 0.0.1 --num_procs 2
<br>
--vpid_start 0 --nodename localhost --universe
<br>
jbronder_at_[hidden]:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://10.0.1.96:49395&quot; --gprreplica &quot;0.0.0;tcp://10.0.1.96:49395&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] pls:tm: start_procs
<br>
returned error -13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] [0,0,0]
<br>
ORTE_ERROR_LOG: Not found in file rmgr_urm.c at line 184
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] [0,0,0]
<br>
ORTE_ERROR_LOG: Not found in file rmgr_urm.c at line 432
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node96.meldrew.clusters.umaine.edu:00850] mpirun: spawn failed
<br>
with errno=-13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node96:/usr/src/openmpi-1.1 jbronder$ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My thanks for any help in advance,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Justin Bronder.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1514/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Previous message:</strong> <a href="1513.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Maybe in reply to:</strong> <a href="1506.php">Justin Bronder: "[OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1516.php">Justin Bronder: "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Reply:</strong> <a href="1516.php">Justin Bronder: "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
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
