<?
$subject_val = "[OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 10:27:30 2009" -->
<!-- isoreceived="20090514142730" -->
<!-- sent="Thu, 14 May 2009 15:28:27 +0100" -->
<!-- isosent="20090514142827" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[OMPI devel] Build failures on trunk? r21235" -->
<!-- id="1242311307.17002.7.camel_at_alpha" -->
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
<strong>Subject:</strong> [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 10:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6023.php">Ralph Castain: "[OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>After a svn update earlier I'm getting build failures on the trunk, I've
<br>
tried the usual including a full clean checkout and am still getting the
<br>
errors.
<br>
<p>I'm not doing anything special other than a VPATH build and this same
<br>
tree build last week, it's just the update that appears to have broken
<br>
things.
<br>
<p>The configure line used was
<br>
~/code/OpenMPI/ompi-trunk-tes/trunk/configure
<br>
--enable-mpirun-prefix-by-default
<br>
--prefix /mnt/home/debian/ashley/code/OpenMPI/install/ and I'm using the
<br>
tree at <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>, I hope this is the
<br>
correct one.
<br>
<p>This is the error the build fails with:
<br>
<p>/bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG
<br>
-finline-functions -pthread  -export-dynamic   -o ompi_info components.o
<br>
ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la -lnsl
<br>
-lutil -lm 
<br>
libtool: link: g++ -O3 -DNDEBUG -finline-functions -pthread
<br>
-o .libs/ompi_info components.o ompi_info.o output.o param.o version.o
<br>
-Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so -lnsl -lutil -lm
<br>
-pthread -Wl,-rpath -Wl,/mnt/home/debian/ashley/code/OpenMPI/install/lib
<br>
../../../ompi/.libs/libmpi.so: undefined reference to
<br>
`opal_maffinity_setup'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to
<br>
`opal_paffinity_alone'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to
<br>
`opal_paffinity_base_slot_list'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [ompi_info] Error 1
<br>
make[2]: Leaving directory `/mnt/memfs/openmpi/ompi/tools/ompi_info'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/mnt/memfs/openmpi/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
ashley_at_alpha:/mnt/memfs/openmpi$ 
<br>
<p>I can provide more information if requested although as I say I don't
<br>
think I'm doing anything out of the ordinary.
<br>
<p>Ashley Pittman,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6023.php">Ralph Castain: "[OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
