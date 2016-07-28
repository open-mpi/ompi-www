<?
$subject_val = "[OMPI devel] VPATH builds broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 09:09:09 2014" -->
<!-- isoreceived="20140508130909" -->
<!-- sent="Thu, 8 May 2014 14:09:07 +0100" -->
<!-- isosent="20140508130907" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[OMPI devel] VPATH builds broken?" -->
<!-- id="FF9E99E1-5C1E-45E8-B9E4-BEB2AFC92620_at_pittman.co.uk" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] VPATH builds broken?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 09:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14754.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VPATH builds broken?"</a>
<li><strong>Reply:</strong> <a href="14759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VPATH builds broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I started getting build failures against trunk on the 29th, most likely as a result of this commit:
<br>
<p><a href="https://github.com/open-mpi/ompi-svn-mirror/commit/3f42cbf50670c5b311cc4414dbb3f4ccf762e455">https://github.com/open-mpi/ompi-svn-mirror/commit/3f42cbf50670c5b311cc4414dbb3f4ccf762e455</a>
<br>
<p>It looks like there was another commit almost immediately afterwards which fixed the first problem (include file errors) however I&#146;m still seeing build failures with the following error, I don&#146;t know if this is still aside effect of the previous VPATH problem or something else.
<br>
<p>Making all in mpi
<br>
make[10]: Entering directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
<br>
ln -s ../../../../../../../../../../source/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/handler.c handler.c
<br>
&nbsp;&nbsp;CC       otfmerge_mpi-handler.o
<br>
ln -s ../../../../../../../../../../source/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/otfmerge.c otfmerge.c
<br>
&nbsp;&nbsp;CC       otfmerge_mpi-otfmerge.o
<br>
&nbsp;&nbsp;CCLD     otfmerge-mpi
<br>
/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_dstore_peer'
<br>
/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_value_load'
<br>
/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_value_unload'
<br>
/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_dstore_nonpeer'
<br>
/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_dstore_internal'
<br>
/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_dstore'
<br>
collect2: error: ld returned 1 exit status
<br>
make[10]: *** [otfmerge-mpi] Error 1
<br>
make[10]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
<br>
make[9]: *** [all-recursive] Error 1
<br>
make[9]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge'
<br>
make[8]: *** [all-recursive] Error 1
<br>
make[8]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf/tools'
<br>
make[7]: *** [all-recursive] Error 1
<br>
make[7]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf'
<br>
make[6]: *** [all] Error 2
<br>
make[6]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf'
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[5]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>The build script I&#146;m using is fairly simple, it&#146;s working from a clean checkout each time but is doing a &#147;VPATH&#148; or out-of-tree build
<br>
<p>cd source
<br>
./autogen.sh
<br>
cd ..
<br>
[ -d build ] &amp;&amp; rm -rf build
<br>
[ -d build ] &amp;&amp; rm -rf install
<br>
mkdir build
<br>
cd build
<br>
../source/configure --enable-mpirun-prefix-by-default --prefix $WORKSPACE/install
<br>
make
<br>
make install
<br>
<p>Ashley,<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14754.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VPATH builds broken?"</a>
<li><strong>Reply:</strong> <a href="14759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VPATH builds broken?"</a>
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
