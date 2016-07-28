<?
$subject_val = "[OMPI users] Removing Portals BTLs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 13:40:09 2011" -->
<!-- isoreceived="20110421174009" -->
<!-- sent="Thu, 21 Apr 2011 17:34:30 +0000 (UTC)" -->
<!-- isosent="20110421173430" -->
<!-- name="Paul Monday" -->
<!-- email="paul.monday_at_[hidden]" -->
<!-- subject="[OMPI users] Removing Portals BTLs" -->
<!-- id="loom.20110421T192358-117_at_post.gmane.org" -->
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
<strong>Subject:</strong> [OMPI users] Removing Portals BTLs<br>
<strong>From:</strong> Paul Monday (<em>paul.monday_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 13:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16303.php">Ralph Castain: "Re: [OMPI users] Removing Portals BTLs"</a>
<li><strong>Previous message:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16303.php">Ralph Castain: "Re: [OMPI users] Removing Portals BTLs"</a>
<li><strong>Reply:</strong> <a href="16303.php">Ralph Castain: "Re: [OMPI users] Removing Portals BTLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to get rid of the following error message when I use mpirun.
<br>
<p>mca: base: component_find: &quot;mca_ess_portals_utcp&quot; does not appear to be a valid
<br>
ess MCA dynamic component (ignored):
<br>
/usr/local/lib/openmpi/mca_ess_portals_utcp.so: undefined symbol:
<br>
mca_ess_portals_utcp_component
<br>
<p>I am trying to remove the portals components altogether...here's why:
<br>
<p>When I originally built openmpi, I used a simple configuration string:
<br>
./configure --with-threads=posix --enable-mpi-threads --with-openib=/usr
<br>
--with-openib-libdir=/usr/lib64 --disable-mpi-cxx
<br>
<p>This gives me an error while the make is running, most likely a problem with my
<br>
Portals installation.  So, I just want to skip Portals BTLs.
<br>
/usr/bin/ld: /usr/local/lib/libp3api.a(libp3api_a-acl.o): relocation
<br>
R_X86_64_32S against `p3_api_process' can not be used when making a shared
<br>
object; recompile with -fPIC
<br>
/usr/local/lib/libp3api.a: could not read symbols: Bad value
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [libmpi.la] Error 1
<br>
make[2]: Leaving directory `/mnt/shared/apps/openmpi-1.4.3/ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/mnt/shared/apps/openmpi-1.4.3/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>So I changed the configuration to:
<br>
./configure --with-threads=posix --enable-mpi-threads --with-openib=/usr
<br>
--with-openib-libdir=/usr/lib64 --disable-mpi-cxx
<br>
--enable-mca-no-build=btl-portals,ess-portals_utcp,common-portals,mtl-portals
<br>
<p>This allowed OpenMPI to build, but then I receive the runtime error above.  Is
<br>
there a way to stop the Portals pieces from even trying to build and run?
<br>
<p>Paul Monday
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16303.php">Ralph Castain: "Re: [OMPI users] Removing Portals BTLs"</a>
<li><strong>Previous message:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16303.php">Ralph Castain: "Re: [OMPI users] Removing Portals BTLs"</a>
<li><strong>Reply:</strong> <a href="16303.php">Ralph Castain: "Re: [OMPI users] Removing Portals BTLs"</a>
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
