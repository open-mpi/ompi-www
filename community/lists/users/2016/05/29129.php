<?
$subject_val = "[OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 05:06:00 2016" -->
<!-- isoreceived="20160507090600" -->
<!-- sent="Sat, 7 May 2016 11:05:50 +0200" -->
<!-- isosent="20160507090550" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c" -->
<!-- id="9da0669d-9511-fd1e-c3fe-dff02375c4b9_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 05:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29130.php">Siegmar Gross: "[OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Previous message:</strong> <a href="29128.php">Siegmar Gross: "[OMPI users] slot-list breaks for openmpi-v1.10.2-176-g9d45e07 on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29131.php">Gilles Gouaillardet: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Reply:</strong> <a href="29131.php">Gilles Gouaillardet: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-dev-4010-g6c9d65c on my &quot;SUSE Linux
<br>
Enterprise Server 12 (x86_64)&quot; with Sun C 5.13  and gcc-5.3.0.
<br>
Unfortunately I get the following warning message.
<br>
<p>loki hello_1 128 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: dev-4010-g6c9d65c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
loki hello_1 129 mpiexec -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_1_mpi
<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;&nbsp;Node:  loki
<br>
<p>Open MPI uses the &quot;hwloc&quot; library to perform process and memory
<br>
binding. This error message means that hwloc has indicated that
<br>
processor binding support is not available on this machine.
<br>
<p>On OS X, processor and memory binding is not available at all (i.e.,
<br>
the OS does not expose this functionality).
<br>
<p>On Linux, lack of the functionality can mean that you are on a
<br>
platform where processor and memory affinity is not supported in Linux
<br>
itself, or that hwloc was built without NUMA and/or processor affinity
<br>
support. When building hwloc (which, depending on your Open MPI
<br>
installation, may be embedded in Open MPI itself), it is important to
<br>
have the libnuma header and library files available. Different linux
<br>
distributions package these files under different names; look for
<br>
packages with the word &quot;numa&quot; in them. You may also need a developer
<br>
version of the package (e.g., with &quot;dev&quot; or &quot;devel&quot; in the name) to
<br>
obtain the relevant header files.
<br>
<p>If you are getting this message on a non-OS X, non-Linux platform,
<br>
then hwloc does not support processor / memory affinity on this
<br>
platform. If the OS/platform does actually support processor / memory
<br>
affinity, then you should contact the hwloc maintainers:
<br>
<a href="https://github.com/open-mpi/hwloc">https://github.com/open-mpi/hwloc</a>.
<br>
<p>This is a warning only; your job will continue, though performance may
<br>
be degraded.
<br>
--------------------------------------------------------------------------
<br>
Process 0 of 3 running on loki
<br>
Process 2 of 3 running on loki
<br>
Process 1 of 3 running on loki
<br>
<p><p>Now 2 slave tasks are sending greetings.
<br>
<p>Greetings from task 1:
<br>
&nbsp;&nbsp;&nbsp;message type:        3
<br>
...
<br>
<p><p><p>loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 122 ls -l /usr/lib64/*numa*
<br>
-rwxr-xr-x 1 root root 48256 Nov 24 16:29 /usr/lib64/libnuma.so.1
<br>
loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 123 grep numa 
<br>
log.configure.Linux.x86_64.64_cc
<br>
checking numaif.h usability... no
<br>
checking numaif.h presence... yes
<br>
configure: WARNING: numaif.h: present but cannot be compiled
<br>
configure: WARNING: numaif.h:     check for missing prerequisite headers?
<br>
configure: WARNING: numaif.h: see the Autoconf documentation
<br>
configure: WARNING: numaif.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
configure: WARNING: numaif.h: proceeding with the compiler's result
<br>
checking for numaif.h... no
<br>
loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 124
<br>
<p><p><p>I didn't get the warning for openmpi-v1.10.2-176-g9d45e07 and
<br>
openmpi-v2.x-dev-1404-g74d8ea0 as you can see in my previous emails,
<br>
although I have the same messages in log.configure.*. I would be
<br>
grateful, if somebody can fix the problem if it is a problem
<br>
and not an intended message. Thank you very much for any help in
<br>
advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29129/hello_1_mpi.c">hello_1_mpi.c</a>
</ul>
<!-- attachment="hello_1_mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29130.php">Siegmar Gross: "[OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Previous message:</strong> <a href="29128.php">Siegmar Gross: "[OMPI users] slot-list breaks for openmpi-v1.10.2-176-g9d45e07 on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29131.php">Gilles Gouaillardet: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Reply:</strong> <a href="29131.php">Gilles Gouaillardet: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
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
