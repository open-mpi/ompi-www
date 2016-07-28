<?
$subject_val = "[OMPI users] Configuring with torque: error and patch";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 30 12:13:40 2010" -->
<!-- isoreceived="20100530161340" -->
<!-- sent="Sun, 30 May 2010 10:13:34 -0600" -->
<!-- isosent="20100530161334" -->
<!-- name="John Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] Configuring with torque: error and patch" -->
<!-- id="4C028EAE.9060000_at_txcorp.com" -->
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
<strong>Subject:</strong> [OMPI users] Configuring with torque: error and patch<br>
<strong>From:</strong> John Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-30 12:13:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13185.php">Doug Reeder: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>Previous message:</strong> <a href="13183.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13185.php">Doug Reeder: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>Reply:</strong> <a href="13185.php">Doug Reeder: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>Reply:</strong> <a href="13186.php">Ralph Castain: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Upon configuring and building openmpi on a system with
<br>
torque, I repeatedly got build errors of the sort,
<br>
<p>/bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG 
<br>
-finline-functions -pthread   -o ompi_info components.o ompi_info.o 
<br>
output.o param.o version.o ../../../ompi/libmpi.la -lnsl -lutil  -lm
<br>
libtool: link: g++ -O3 -DNDEBUG -finline-functions -pthread -o 
<br>
.libs/ompi_info components.o ompi_info.o output.o param.o version.o  
<br>
../../../ompi/.libs/libmpi.so -L/usr/local/torque-2.4.0b1/lib 
<br>
/scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so 
<br>
/scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/opal/.libs/libopen-pal.so 
<br>
-ldl -lnsl -lutil -lm -pthread -Wl,-rpath 
<br>
-Wl,/usr/local/contrib/openmpi-1.4.2-nodl/lib
<br>
/scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so: 
<br>
undefined reference to `tm_spawn'
<br>
/scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so: 
<br>
undefined reference to `tm_poll'
<br>
/scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so: 
<br>
undefined reference to `tm_finalize'
<br>
/scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so: 
<br>
undefined reference to `tm_init'
<br>
collect2: ld returned 1 exit status
<br>
<p>which I fixed by adding one or the other of
<br>
<p>$(ORTE_WRAPPER_EXTRA_LDFLAGS) $(ORTE_WRAPPER_EXTRA_LIBS)
<br>
<p>$(OMPI_WRAPPER_EXTRA_LDFLAGS) $(OMPI_WRAPPER_EXTRA_LIBS)
<br>
<p>to various LDADD variables.  I doubt that this is consistent
<br>
with how your build system is designed, but it works for me.
<br>
I am sending you the diff in case it helps you in any way.
<br>
BTW, I also fixed some blanks after backslashes in
<br>
contrib/Makefile.am.  This is also in the attached patch.
<br>
<p>Best....John Cary
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13184/openmpi-1.4.2.patch">openmpi-1.4.2.patch</a>
</ul>
<!-- attachment="openmpi-1.4.2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13185.php">Doug Reeder: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>Previous message:</strong> <a href="13183.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13185.php">Doug Reeder: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>Reply:</strong> <a href="13185.php">Doug Reeder: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>Reply:</strong> <a href="13186.php">Ralph Castain: "Re: [OMPI users] Configuring with torque: error and patch"</a>
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
