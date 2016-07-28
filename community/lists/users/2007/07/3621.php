<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 13:14:36 2007" -->
<!-- isoreceived="20070710171436" -->
<!-- sent="Tue, 10 Jul 2007 11:14:21 -0600 (MDT)" -->
<!-- isosent="20070710171421" -->
<!-- name="Christopher D. Maestas" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="[OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="Pine.LNX.4.64.0707101111250.7006_at_ferret.srn.sandia.gov" -->
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
<strong>From:</strong> Christopher D. Maestas (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 13:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Previous message:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone seen the following message with Open MPI:
<br>
<pre>
---
warning:regcache incompatible with malloc
---
We see this with 1.2.3 on a 32 bit mx build:
---
$ cat BUILD_ENV
# Build Environment:
USE=&quot;doc icc modules mx torque&quot;
COMPILER=&quot;intel-9.1-f040-c046&quot;
CC=&quot;icc&quot;
CXX=&quot;icpc&quot;
CLINKER=&quot;icc&quot;
FC=&quot;ifort&quot;
F77=&quot;ifort&quot;
CFLAGS=&quot; -O3 -pipe&quot;
CXXFLAGS=&quot; -O3 -pipe&quot;
FFLAGS=&quot; -O3&quot;
MODULE_DEST=&quot;/apps/modules/modulefiles/mpi&quot;
MODULE_FILE=&quot;openmpi-1.2.3_mx_intel-9.1-f040-c046&quot;
INSTALL_DEST=&quot;/apps/x86/mpi/openmpi/intel-9.1-f040-c046/openmpi-1.2.3_mx&quot;
CONF_FLAGS=&quot; --with-mx=/opt/mx --with-tm=/apps/torque&quot;
---
We don't see this message with mpich-mx-1.2.7..4
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Previous message:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
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
