<?
$subject_val = "[OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to swamyk@us.ibm.com";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 14:11:37 2014" -->
<!-- isoreceived="20140902181137" -->
<!-- sent="Tue, 2 Sep 2014 14:10:53 -0400" -->
<!-- isosent="20140902181053" -->
<!-- name="Swamy Kandadai" -->
<!-- email="swamyk_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to swamyk@us.ibm.com" -->
<!-- id="OF838296A0.2BF6D207-ON85257D47.0063AA60-85257D47.0063E16C_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to swamyk@us.ibm.com<br>
<strong>From:</strong> Swamy Kandadai (<em>swamyk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 14:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25228.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Previous message:</strong> <a href="25226.php">Ralph Castain: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to	swamyk@us.ibm.com"</a>
<li><strong>Reply:</strong> <a href="25230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to	swamyk@us.ibm.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
While building OpenMPI (1.6.5 or 1.8.1) using openib on our power8 cluster
<br>
with Mellanox IB (FDR) I get the following error:
<br>
<p>configure: WARNING: infiniband/verbs.h: present but cannot be compiled
<br>
configure: WARNING: infiniband/verbs.h:     check for missing prerequisite
<br>
headers?
<br>
configure: WARNING: infiniband/verbs.h: see the Autoconf documentation
<br>
configure: WARNING: infiniband/verbs.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
configure: WARNING: infiniband/verbs.h: proceeding with the compiler's
<br>
result
<br>
<p>Did you see this issue while building OpenMPI? Here is my configure
<br>
command:
<br>
<p>export CC=xlc_r
<br>
export CXX=xlC_r
<br>
export FC=xlf90_r
<br>
export F77=xlf_r
<br>
export FFLAGS=&quot;-O3 -q64 -qarch=pwr8 -qtune=pwr8 -qthreaded&quot;
<br>
export FCFLAGS=&quot;-O3 -q64 -qarch=pwr8 -qtune=pwr8  -qthreaded&quot;
<br>
export CFLAGS=&quot;-O3 -q64 -qarch=pwr8 -qtune=pwr8 -qthreaded&quot;
<br>
export CXXFLAGS=&quot;-O2 -q64 -qarch=pwr8 -qtune=pwr8 -qthreaded&quot;
<br>
./configure --prefix=/bench2/swamy/ompi_165 \
<br>
--with-openib --includedir=/opt/ibm/xlC/13.1.0/include  \
<br>
--disable-vt --disable-libompitrace
<br>
<p>Here are the SW level:
<br>
<p>rpm -qa |grep ofed
<br>
mlnxofed-docs-2.3-0.0.9.noarch
<br>
ofed-scripts-2.3-OFED.2.3.0.0.9.ppc64
<br>
<p>and the OS is RedHat 7.0
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25227/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25228.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Previous message:</strong> <a href="25226.php">Ralph Castain: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to	swamyk@us.ibm.com"</a>
<li><strong>Reply:</strong> <a href="25230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to	swamyk@us.ibm.com"</a>
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
