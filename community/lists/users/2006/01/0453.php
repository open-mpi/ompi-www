<?
$subject_val = "[O-MPI users] OpenMPI 1.0.1 with Torque 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  2 03:49:11 2006" -->
<!-- isoreceived="20060102084911" -->
<!-- sent="Mon, 02 Jan 2006 16:52:20 +0800" -->
<!-- isosent="20060102085220" -->
<!-- name="Jyh-Shyong Ho" -->
<!-- email="c00jsh00_at_[hidden]" -->
<!-- subject="[O-MPI users] OpenMPI 1.0.1 with Torque 2.0" -->
<!-- id="43B8E9C4.7000008_at_nchc.org.tw" -->
<!-- charset="Big5" -->
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
<strong>From:</strong> Jyh-Shyong Ho (<em>c00jsh00_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-02 03:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0454.php">Enzo: "[O-MPI users] Rendezvous Question"</a>
<li><strong>Previous message:</strong> <a href="../../2005/12/0452.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0459.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>Reply:</strong> <a href="0459.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to install OpenMPI 1.0.1 on my Athlon X2 computer running
<br>
SuSE10.0,
<br>
the installation failed when I included --with-tm=/opt/torque option
<br>
with the
<br>
error message:
<br>
...
<br>
gcc -shared .libs/pls_tm_component.o .libs/pls_tm_module.o -Wl,--rpath
<br>
-Wl,/home/c00jsh00/openmpi-1.0.1/orte/.libs -Wl,--rpath
<br>
-Wl,/home/c00jsh00/openmpi-1.0.1/opal/.libs -Wl,--rpath
<br>
-Wl,/opt/openmpi/lib -L/opt/torque/lib -lpbs
<br>
/home/c00jsh00/openmpi-1.0.1/orte/.libs/liborte.so
<br>
-L/home/c00jsh00/openmpi-1.0.1/opal/.libs
<br>
/home/c00jsh00/openmpi-1.0.1/opal/.libs/libopal.so -lm -lutil -lnsl
<br>
-pthread -Wl,-soname -Wl,mca_pls_tm.so -o .libs/mca_pls_tm.so
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.0.2/../../../../x86_64-suse-linux/bin/ld:
<br>
/opt/torque/lib/libpbs.a(tm.o): relocation R_X86_64_32S against `a local
<br>
symbol' can not be used when making a shared object; recompile with -fPIC
<br>
/opt/torque/lib/libpbs.a: could not read symbols: Bad value
<br>
collect2: ld returned 1 exit status
<br>
make[4]: *** [mca_pls_tm.la] Error 1
<br>
make[4]: Leaving directory `/home/c00jsh00/openmpi-1.0.1/orte/mca/pls/tm'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory
<br>
`/home/c00jsh00/openmpi-1.0.1/orte/dynamic-mca/pls'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/home/c00jsh00/openmpi-1.0.1/orte/dynamic-mca'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/c00jsh00/openmpi-1.0.1/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>My TORQUE is 2.0.0p4, the latest version. Any hint?
<br>
<p>Jyh-Shyong Ho, Ph.D.
<br>
Research Scientist
<br>
National Center for High Performance Computing
<br>
Hsinchu, Taiwan, ROC
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0453/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0454.php">Enzo: "[O-MPI users] Rendezvous Question"</a>
<li><strong>Previous message:</strong> <a href="../../2005/12/0452.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0459.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>Reply:</strong> <a href="0459.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
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
