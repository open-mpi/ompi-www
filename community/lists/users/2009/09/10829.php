<?
$subject_val = "[OMPI users] Openmpi setup with intel compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 06:00:26 2009" -->
<!-- isoreceived="20090930100026" -->
<!-- sent="Wed, 30 Sep 2009 15:24:24 +0530 (IST)" -->
<!-- isosent="20090930095424" -->
<!-- name="vighnesh_at_[hidden]" -->
<!-- email="vighnesh_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi setup with intel compiler." -->
<!-- id="47996.10.101.11.77.1254304464.squirrel_at_www.aero.iitb.ac.in" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi setup with intel compiler.<br>
<strong>From:</strong> <a href="mailto:vighnesh_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Openmpi%20setup%20with%20intel%20compiler."><em>vighnesh_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-09-30 05:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10830.php">jody: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Previous message:</strong> <a href="10828.php">ankur pachauri: "[OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10837.php">Peter Kjellstrom: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Reply:</strong> <a href="10837.php">Peter Kjellstrom: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10838.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10839.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I have a two nodes cluster with rocks 4.3 installed on it, with an
<br>
intel roll. Due to some problem in MPICH and Torque tight integration,
<br>
i planned to switch to Openmpi.1.3.3. The cluster is also installed
<br>
with PGI cdk. I successfully setup openmpi with PGI, but during
<br>
configuring with Intel 9.0 compiler the installation gives following
<br>
error.
<br>
<p>[root_at_test_node openmpi-1.3.3]# make all install
<br>
&lt;&lt;lots of output&gt;&gt;
<br>
Making install in mca/snapc
<br>
make[2]: Entering directory `/tmp/openmpi-1.3.3/orte/mca/snapc'
<br>
make[3]: Entering directory `/tmp/openmpi-1.3.3/orte/mca/snapc'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/share/apps/mpi/openmpi/intel/share/openmpi&quot; || /bin/mkdir -p
<br>
&quot;/share/apps/mpi/openmpi/intel/share/openmpi&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'base/help-orte-snapc-base.txt'
<br>
'/share/apps/mpi/openmpi/intel/share/openmpi/help-orte-snapc-base.txt'
<br>
test -z &quot;/share/apps/mpi/openmpi/intel/share/man/man7&quot; || /bin/mkdir -p
<br>
&quot;/share/apps/mpi/openmpi/intel/share/man/man7&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 './orte_snapc.7'
<br>
'/share/apps/mpi/openmpi/intel/share/man/man7/orte_snapc.7'
<br>
test -z &quot;/share/apps/mpi/openmpi/intel/include&quot; || /bin/mkdir -p
<br>
&quot;/share/apps/mpi/openmpi/intel/include&quot;
<br>
make[3]: Leaving directory `/tmp/openmpi-1.3.3/orte/mca/snapc'
<br>
make[2]: Leaving directory `/tmp/openmpi-1.3.3/orte/mca/snapc'
<br>
Making install in etc
<br>
make[2]: Entering directory `/tmp/openmpi-1.3.3/orte/etc'
<br>
make[3]: Entering directory `/tmp/openmpi-1.3.3/orte/etc'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
/bin/mkdir -p /share/apps/mpi/openmpi/intel/etc
<br>
&nbsp;/usr/bin/install -c -m 644 openmpi-default-hostfile
<br>
/share/apps/mpi/openmpi/intel/etc/openmpi-default-hostfile
<br>
make[3]: Leaving directory `/tmp/openmpi-1.3.3/orte/etc'
<br>
make[2]: Leaving directory `/tmp/openmpi-1.3.3/orte/etc'
<br>
Making install in .
<br>
make[2]: Entering directory `/tmp/openmpi-1.3.3/orte'
<br>
make[3]: Entering directory `/tmp/openmpi-1.3.3/orte'
<br>
test -z &quot;/share/apps/mpi/openmpi/intel/lib&quot; || /bin/mkdir -p
<br>
&quot;/share/apps/mpi/openmpi/intel/lib&quot;
<br>
&nbsp;/bin/sh ../libtool   --mode=install /usr/bin/install -c  'libopen-rte.la'
<br>
'/share/apps/mpi/openmpi/intel/lib/libopen-rte.la'
<br>
libtool: install: error: cannot install `libopen-rte.la' to a directory
<br>
not ending in /share/apps/mpi/openmpi/pgi/lib
<br>
make[3]: *** [install-libLTLIBRARIES] Error 1
<br>
make[3]: Leaving directory `/tmp/openmpi-1.3.3/orte'
<br>
make[2]: *** [install-am] Error 2
<br>
make[2]: Leaving directory `/tmp/openmpi-1.3.3/orte'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/openmpi-1.3.3/orte'
<br>
make: *** [install-recursive] Error 1
<br>
<p><p>&nbsp;My configure script line is as follow
<br>
./configure --prefix=/share/apps/mpi/openmpi/intel FC=ifort F77=ifort
<br>
--with-tm=/opt/torques
<br>
<p>I did set the PATH and LD_LIBRARY_PATH environment variables correctly for
<br>
intel compiler in .bash_rc file.
<br>
<p>Please help me to solve this problem
<br>
<p>Thanks And Regards,
<br>
Vighnesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10830.php">jody: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Previous message:</strong> <a href="10828.php">ankur pachauri: "[OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10837.php">Peter Kjellstrom: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Reply:</strong> <a href="10837.php">Peter Kjellstrom: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10838.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10839.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
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
