<?
$subject_val = "[OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 14:05:13 2016" -->
<!-- isoreceived="20160712180513" -->
<!-- sent="Tue, 12 Jul 2016 20:05:04 +0200" -->
<!-- isosent="20160712180504" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] SHMEM, &amp;quot;mpp/shmem.fh&amp;quot;, CMake and infinite loops" -->
<!-- id="28b80f1269984e45aaa898a9599aa017_at_rwthex-w1-a.rwth-ad.de" -->
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
<strong>Subject:</strong> [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 14:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19185.php">Jeff Squyres (jsquyres): "[OMPI devel] Added &quot;known issues&quot; section to NEWS"</a>
<li><strong>Previous message:</strong> <a href="19183.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19195.php">Gilles Gouaillardet: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Reply:</strong> <a href="19195.php">Gilles Gouaillardet: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developer,
<br>
<p>we have some troubles when using OpenMPI and CMake on codes using 'SHMEM'.
<br>
<p>Cf. 'man shmem_swap',
<br>
<span class="quotelev1"> &gt;       Fortran:
</span><br>
<span class="quotelev1"> &gt;       INCLUDE &quot;mpp/shmem.fh&quot;
</span><br>
<p>Yes here is one such header file:
<br>
<span class="quotelev1"> &gt; openmpi-1.X.Y/oshmem/include/mpp/shmem.fh
</span><br>
... since version 1.7. at least.
<br>
<p><p>The significnat content is this line:
<br>
<span class="quotelev1"> &gt;      include 'shmem.fh'
</span><br>
whereby OpenMPI mean to include not the same file by itself (= infinite loop!) 
<br>
but I believe these one file:
<br>
<span class="quotelev1"> &gt; openmpi-1.X.Y/oshmem/include/shmem.fh
</span><br>
<p>(The above paths are in the source code distributions; in the installation the 
<br>
files are located here:  include/shmem.fh      include/mpp/shmem.fh)
<br>
<p><p>This works. Unless you start using CMake. Because CMake is 'intelligent' and try 
<br>
to add the search paths recursively, (I believe,) gloriously enabling the 
<br>
infinite loop by including the 'shmem.fh' file from the 'shmem.fh' file.
<br>
<p>Steps to repriduce:
<br>
$ mkdir build; cd build; cmake ..
<br>
$ make
<br>
<p>The second one command need some minute(s), sticking by the 'Scanning 
<br>
dependencies of target mpihelloworld' step.
<br>
<p>If connecting by 'strace -p &lt;PID&gt;' to the 'cmake' process you will see lines 
<br>
like below, again and again. So I think CMake just include the 'shmem.fh' file 
<br>
from itself unless the stack is full / a limit is reached / the moon shines, and 
<br>
thus hangs for a while (seconds/minutes) in the 'Scanning dependencies...' state.
<br>
<p>*Well, maybe having a file including the same file is not that good?*
<br>
If the file 'include/mpp/shmem.fh' would include not 'shmem.fh' but 
<br>
'somethingelse.fh' located in 'include/...' these infinite loop would be 
<br>
impossible at all...
<br>
<p>And by the way: is here a way to limit the maximum include depths in CMake for 
<br>
header files? This would workaround this one 'infinite include loop' issue...
<br>
<p>Have a nice day,
<br>
<p>Paul Kapinos
<br>
<p>..............
<br>
access(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;, 
<br>
R_OK) = 0
<br>
stat(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;, 
<br>
{st_mode=S_IFREG|0644, st_size=205, ...}) = 0
<br>
open(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;, 
<br>
O_RDONLY) = 5271
<br>
fstat(5271, {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
<br>
mmap(NULL, 32768, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 
<br>
0x7f08457d2000
<br>
read(5271, &quot;!\n!   Copyright (c) 2013      Me&quot;..., 32768) = 205
<br>
read(5271, &quot;&quot;, 32768)                   = 0
<br>
<p>access(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;, 
<br>
R_OK) = 0
<br>
stat(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;, 
<br>
{st_mode=S_IFREG|0644, st_size=205, ...}) = 0
<br>
open(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;, 
<br>
O_RDONLY) = 5272
<br>
fstat(5272, {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
<br>
mmap(NULL, 32768, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 
<br>
0x7f08457ca000
<br>
read(5272, &quot;!\n!   Copyright (c) 2013      Me&quot;..., 32768) = 205
<br>
read(5272, &quot;&quot;, 32768)                   = 0
<br>
..............
<br>
<p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915


</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19184/CMakeLists.txt">CMakeLists.txt</a>
</ul>
<!-- attachment="CMakeLists.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19184/mpihelloworld.F90">mpihelloworld.F90</a>
</ul>
<!-- attachment="mpihelloworld.F90" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19184/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19185.php">Jeff Squyres (jsquyres): "[OMPI devel] Added &quot;known issues&quot; section to NEWS"</a>
<li><strong>Previous message:</strong> <a href="19183.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19195.php">Gilles Gouaillardet: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Reply:</strong> <a href="19195.php">Gilles Gouaillardet: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
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
