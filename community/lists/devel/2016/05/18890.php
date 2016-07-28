<?
$subject_val = "[OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 23:54:20 2016" -->
<!-- isoreceived="20160503035420" -->
<!-- sent="Mon, 2 May 2016 20:54:04 -0700" -->
<!-- isosent="20160503035404" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)" -->
<!-- id="CAAvDA152aPtnEyE4hoGYEnBi5_EoR7V7Q_KFH=Mu4j1te2i6xw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 23:54:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18891.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>Previous message:</strong> <a href="18889.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18900.php">Edgar Gabriel: "Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<li><strong>Reply:</strong> <a href="18900.php">Edgar Gabriel: "Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On NetNSD-7 I am testing PR1128 to get past an issue Nathan fixed since my
<br>
report earlier today (Monday).
<br>
It appears that OMPIO is not prepared for NetBSD's uses of statvfs()
<br>
instead of statfs().
<br>
The error message appear at the bottom of this email.
<br>
<p>FWIW the ROMIO code does have the necessary configure login and #ifdefs
<br>
<p>Of course, passing --enable-mca-no-build=io-ompio to configure is
<br>
sufficient to work around this issue.
<br>
<p>-Paul
<br>
<p><p>libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/mca/io/ompio
<br>
-I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../../../../ompi/mpiext/cuda/c
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone
<br>
-I../../../..
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/opal/include
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/orte/include
<br>
-I../../../../orte/include
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/include
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/oshmem/include
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/opal/mca/event/libevent2022/libevent
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/opal/mca/event/libevent2022/libevent/include
<br>
-I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -finline-functions -fno-strict-aliasing -pthread -MT
<br>
io_ompio_component.lo -MD -MP -MF .deps/io_ompio_component.Tpo -c
<br>
/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/mca/io/ompio/io_ompio_component.c
<br>
&nbsp;-fPIC -DPIC -o .libs/io_ompio_component.o
<br>
/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/mca/io/ompio/io_ompio_component.c:
<br>
In function 'file_query':
<br>
/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/mca/io/ompio/io_ompio_component.c:275:19:
<br>
error: storage size of 'fsbuf' isn't known
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct statfs fsbuf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
*** Error code 1
<br>
<p>Stop.
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18890/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18891.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>Previous message:</strong> <a href="18889.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18900.php">Edgar Gabriel: "Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<li><strong>Reply:</strong> <a href="18900.php">Edgar Gabriel: "Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
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
