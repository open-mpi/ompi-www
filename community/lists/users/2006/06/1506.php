<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 17:18:48 2006" -->
<!-- isoreceived="20060629211848" -->
<!-- sent="Thu, 29 Jun 2006 17:18:41 -0400" -->
<!-- isosent="20060629211841" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMpi 1.1 and Torque 2.1.1" -->
<!-- id="8d39cca0606291418x2fcbe38do25d073b3f3b8c3cb_at_mail.gmail.com" -->
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
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 17:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1505.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Maybe reply:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having trouble getting OpenMPI to execute jobs when submitting through
<br>
Torque.
<br>
Everything works fine if I am to use the included mpirun scripts, but this
<br>
is obviously
<br>
not a good solution for the general users on the cluster.
<br>
<p>I'm running under OS X 10.4, Darwin 8.6.0.  I configured OpenMpi with:
<br>
export CC=/opt/ibmcmp/vac/6.0/bin/xlc
<br>
export CXX=/opt/ibmcmp/vacpp/6.0/bin/xlc++
<br>
export FC=/opt/ibmcmp/xlf/8.1/bin/xlf90_r
<br>
export F77=/opt/ibmcmp/xlf/8.1/bin/xlf_r
<br>
export LDFLAGS=-lSystemStubs
<br>
export LIBTOOL=glibtool
<br>
<p>PREFIX=/usr/local/ompi-xl
<br>
<p>./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=$PREFIX \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/usr/local/pbs/ \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-gm=/opt/gm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-cxx
<br>
<p>I also had to employ the fix listed in:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2006/04/1007.php">http://www.open-mpi.org/community/lists/users/2006/04/1007.php</a>
<br>
<p><p>I've attached the output of ompi_info while in an interactive job.  Looking
<br>
through the list,
<br>
I can at least save a bit of trouble by listing what does work.  Anything
<br>
outside of Torque
<br>
seems fine.  From within an interactive job, pbsdsh works fine, hence the
<br>
earlier problems
<br>
with poll are fixed.
<br>
<p>Here is the error that is reported when I attemt to run hostname on one
<br>
processor:
<br>
node96:/usr/src/openmpi-1.1 jbronder$ /usr/local/ompi-xl/bin/mpirun -np 1
<br>
-mca pls_tm_debug 1 /bin/hostname
<br>
[node96.meldrew.clusters.umaine.edu:00850] pls:tm: final top-level argv:
<br>
[node96.meldrew.clusters.umaine.edu:00850] pls:tm:     orted --no-daemonize
<br>
--bootproxy 1 --name  --num_procs 2 --vpid_start 0 --nodename  --universe
<br>
jbronder_at_[hidden]:default-universe --nsreplica &quot;
<br>
0.0.0;tcp://10.0.1.96:49395&quot; --gprreplica &quot;0.0.0;tcp://10.0.1.96:49395&quot;
<br>
[node96.meldrew.clusters.umaine.edu:00850] pls:tm: Set
<br>
prefix:/usr/local/ompi-xl
<br>
[node96.meldrew.clusters.umaine.edu:00850] pls:tm: launching on node
<br>
localhost
<br>
[node96.meldrew.clusters.umaine.edu:00850] pls:tm: resetting PATH:
<br>
/usr/local/ompi-xl/bin:/bin:/sbin:/usr/bin:/usr/sbin:/usr/local/pbs/bin:/usr/local/mpiexec/bin:/opt/ibmcmp/xlf/8.1/bin:/opt/ibmcmp/vac/6.0/bin:/opt/ibmcmp/vacpp/6.0/bin:/opt/gm/bin:/opt/fms/bin
<br>
[node96.meldrew.clusters.umaine.edu:00850] pls:tm: found
<br>
/usr/local/ompi-xl/bin/orted
<br>
[node96.meldrew.clusters.umaine.edu:00850] pls:tm: not oversubscribed --
<br>
setting mpi_yield_when_idle to 0
<br>
[node96.meldrew.clusters.umaine.edu:00850] pls:tm: executing: orted
<br>
--no-daemonize --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0
<br>
--nodename localhost --universe
<br>
jbronder_at_[hidden]:default-universe
<br>
--nsreplica &quot;0.0.0;tcp://10.0.1.96:49395&quot; --gprreplica &quot;0.0.0
<br>
;tcp://10.0.1.96:49395&quot;
<br>
[node96.meldrew.clusters.umaine.edu:00850] pls:tm: start_procs returned
<br>
error -13
<br>
[node96.meldrew.clusters.umaine.edu:00850] [0,0,0] ORTE_ERROR_LOG: Not found
<br>
in file rmgr_urm.c at line 184
<br>
[node96.meldrew.clusters.umaine.edu:00850] [0,0,0] ORTE_ERROR_LOG: Not found
<br>
in file rmgr_urm.c at line 432
<br>
[node96.meldrew.clusters.umaine.edu:00850] mpirun: spawn failed with
<br>
errno=-13
<br>
node96:/usr/src/openmpi-1.1 jbronder$
<br>
<p><p>My thanks for any help in advance,
<br>
<p>Justin Bronder.
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1506/ompi_info.log.gz">ompi_info.log.gz</a>
</ul>
<!-- attachment="ompi_info.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1505.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Maybe reply:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
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
