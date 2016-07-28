<?
$subject_val = "[OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 11:31:53 2011" -->
<!-- isoreceived="20110629153153" -->
<!-- sent="Wed, 29 Jun 2011 08:31:48 -0700 (PDT)" -->
<!-- isosent="20110629153148" -->
<!-- name="rohan nigam" -->
<!-- email="locaterohan_at_[hidden]" -->
<!-- subject="[OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)" -->
<!-- id="1309361508.89687.YahooMailClassic_at_web125904.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)<br>
<strong>From:</strong> rohan nigam (<em>locaterohan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 11:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16782.php">jody: "[OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16780.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16786.php">Jeff Squyres: "Re: [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<li><strong>Reply:</strong> <a href="16786.php">Jeff Squyres: "Re: [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Everyone,
<br>
I am trying to statically build open mpi libraries from a server which has intel and pgi compilers installed and copy the resulting binaries to be used on another test server since I do not have intel and pgi compilers on these test servers (only gcc). First of all, please tell me if this is possible.
<br>
So far these are the three different options I have tried and ended up getting the respective errors while running the mpicc or mpirun on the test server:
<br>
Option 1: &#160;Using&#160;LDFLAGS=-Bstatic
<br>
./configure CC=icc CXX=icpc F77=ifort FC=ifort LDFLAGS=-Bstatic --without-memory-manager --without-libnuma --enable-static --disable-shared&#160;&#160;--prefix=/opt/openmpi/openmpi-intel --enable-mpi-f77 --enable-mpi-f90 2&gt;&amp;1 | tee configure-intel.log
<br>
Error on the test server:&#160; &#160; &#160; &#160; &#160;ld: attempted static link of dynamic object `/cm/shared/apps/torque/2.4.11/lib/libtorque.so'

make[2]: *** [orte-clean]
Error 1 

make[2]: Leaving directory
`/opt/openmpi/openmpi-1.4.3-intel/openmpi-1.4.3/orte/tools/orte-clean' 

make[1]: *** [all-recursive]
Error 1 

make[1]: Leaving directory
`/opt/openmpi/openmpi-1.4.3-intel/openmpi-1.4.3/orte' 

make: *** [all-recursive] Error 1
<br>
Option 2: Using&#160;LDFLAGS=&#160;-staticError on the test server:&#160;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;root_at_ubuntu-server2:/opt/openmpi-intel/bin#
./mpicc

Cannot
open configuration file
/opt/openmpi/openmpi-intel/share/openmpi/mpicc-wrapper-data.txt 

Error parsing data file mpicc:
Not found 

root_at_ubuntu-server2:/opt/openmpi-intel/bin#
mpirun 

&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; mpirun:
error while loading shared libraries: libtorque.so.2: cannot open shared object
file: No such file or directory
<br>
Option 3:&#160;LDFLAGS=-static-intel
(same as deprecated i-static option)Error on the test server&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;mpirun:
error while loading shared libraries: libtorque.so.2: &#160; cannot open shared object
file: No such file or directory

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;root_at_ubuntu-server2:/opt/openmpi-intel/bin#
./mpicc 

Cannot
open configuration file
/opt/openmpi/openmpi-intel/share/openmpi/mpicc-wrapper-data.txt 

Error parsing data file mpicc:
Not found
<br>
How do I exclude torque shared libraries. Will that solve the problem?
<br>
FYI, both servers (test and the original server) are 64-bit AMD opterons and the openmpi works perfectly fine on the&#160;original&#160;server on which they were built on.
<br>
Any comments or suggestions will help.
<br>
Thanks,Rohan
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16782.php">jody: "[OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16780.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16786.php">Jeff Squyres: "Re: [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<li><strong>Reply:</strong> <a href="16786.php">Jeff Squyres: "Re: [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
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
