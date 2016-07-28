<?
$subject_val = "[OMPI devel] oshmem link failure on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 14:13:05 2014" -->
<!-- isoreceived="20140131191305" -->
<!-- sent="Fri, 31 Jan 2014 11:13:03 -0800" -->
<!-- isosent="20140131191303" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem link failure on trunk" -->
<!-- id="CAAvDA16WW=BJ6qx-ECqabbHGwqHkVviOb7KxArBcWSgE1Ex_cA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem link failure on trunk<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 14:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13967.php">Paul Hargrove: "[OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Previous message:</strong> <a href="13965.php">George Bosilca: "Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am testing Wednesday (Jan 29) night's trunk tarball (1.9a1r30495) on an
<br>
SGI UV system.
<br>
Apologies if this has been fixed since then.
<br>
<p>When I run &quot;make&quot; in the examples directory I find that the C and Fortran
<br>
MPI examples link fine, but the Open SHMEM examples do not:
<br>
<p>$ make
<br>
mpicc -g    hello_c.c   -o hello_c
<br>
mpicc -g    ring_c.c   -o ring_c
<br>
mpicc -g    connectivity_c.c   -o connectivity_c
<br>
make[1]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
mpifort -g hello_mpifh.f -o hello_mpifh
<br>
mpifort -g ring_mpifh.f -o ring_mpifh
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
mpifort -g hello_usempi.f90 -o hello_usempi
<br>
mpifort -g ring_usempi.f90 -o ring_usempi
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
make[1]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
make[1]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
shmemcc -g hello_oshmem_c.c -o hello_oshmem
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.3/../../../../x86_64-suse-linux/bin/ld:
<br>
cannot find -ltorque
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [hello_oshmem] Error 1
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
shmemcc -g ring_oshmem_c.c -o ring_oshmem
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.3/../../../../x86_64-suse-linux/bin/ld:
<br>
cannot find -ltorque
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [ring_oshmem] Error 1
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
make[1]: *** [oshmem] Error 2
<br>
make[1]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples'
<br>
make: *** [all] Error 2
<br>
<p>Comparing the --show outputs (below) there are MANY more explicit -l
<br>
options for oshcc than mpicc.
<br>
The torque lib directory appears in both commands as:
<br>
&nbsp;&nbsp;&nbsp;-Wl,-rpath -Wl,/usr/local/packages/torque/2.3.13_psc/lib
<br>
<p>$ mpicc --show -g hello_c.c
<br>
gcc -g hello_c.c
<br>
-I/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/INST/include
<br>
-pthread -Wl,-rpath -Wl,/usr/local/packages/torque/2.3.13_psc/lib
<br>
-Wl,-rpath -Wl,/usr/lib64 -Wl,-rpath
<br>
-Wl,/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/INST/lib
<br>
-Wl,--enable-new-dtags
<br>
-L/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/INST/lib
<br>
-lmpi
<br>
<p>$ shmemcc --show -g hello_oshmem.c
<br>
gcc -std=gnu99 -g hello_oshmem.c
<br>
-I/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/INST/include
<br>
-pthread -Wl,-rpath -Wl,/usr/local/packages/torque/2.3.13_psc/lib
<br>
-Wl,-rpath -Wl,/usr/lib64 -Wl,-rpath
<br>
-Wl,/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/INST/lib
<br>
-Wl,--enable-new-dtags
<br>
-L/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/INST/lib
<br>
-loshmem -lmpi -lopen-rte -lopen-pal -lm -lnuma -lpciaccess -ldl -ltorque
<br>
-lxpmem -llustreapi -lrt -lnsl -lutil
<br>
<p><p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13967.php">Paul Hargrove: "[OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Previous message:</strong> <a href="13965.php">George Bosilca: "Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<!-- nextthread="start" -->
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
