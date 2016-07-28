<?
$subject_val = "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 06:10:35 2016" -->
<!-- isoreceived="20160507101035" -->
<!-- sent="Sat, 7 May 2016 19:10:34 +0900" -->
<!-- isosent="20160507101034" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c" -->
<!-- id="CAAkFZ5tGxo4kaw=q4LvOb_K45m01La-BhouuhaQiT8RwN8p2HQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9da0669d-9511-fd1e-c3fe-dff02375c4b9_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 06:10:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29132.php">Gilles Gouaillardet: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Previous message:</strong> <a href="29130.php">Siegmar Gross: "[OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>In reply to:</strong> <a href="29129.php">Siegmar Gross: "[OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29133.php">Siegmar Gross: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Reply:</strong> <a href="29133.php">Siegmar Gross: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>did you upgrade your os recently ? or change hyper threading settings ?
<br>
this error message typically appears when the numactl-devel rpm is not
<br>
installed
<br>
(numactl-devel on redhat, the package name might differ on sles)
<br>
<p>if not, would you mind retesting frI'm scratch a previous tarball that used
<br>
to work without any warning ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Saturday, May 7, 2016, Siegmar Gross &lt;
<br>
siegmar.gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-dev-4010-g6c9d65c on my &quot;SUSE Linux
</span><br>
<span class="quotelev1">&gt; Enterprise Server 12 (x86_64)&quot; with Sun C 5.13  and gcc-5.3.0.
</span><br>
<span class="quotelev1">&gt; Unfortunately I get the following warning message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki hello_1 128 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler
</span><br>
<span class="quotelev1">&gt; absolute&quot;
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: dev-4010-g6c9d65c
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev1">&gt; loki hello_1 129 mpiexec -np 3 --host loki --slot-list 0:0-5,1:0-5
</span><br>
<span class="quotelev1">&gt; hello_1_mpi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Node:  loki
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI uses the &quot;hwloc&quot; library to perform process and memory
</span><br>
<span class="quotelev1">&gt; binding. This error message means that hwloc has indicated that
</span><br>
<span class="quotelev1">&gt; processor binding support is not available on this machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On OS X, processor and memory binding is not available at all (i.e.,
</span><br>
<span class="quotelev1">&gt; the OS does not expose this functionality).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Linux, lack of the functionality can mean that you are on a
</span><br>
<span class="quotelev1">&gt; platform where processor and memory affinity is not supported in Linux
</span><br>
<span class="quotelev1">&gt; itself, or that hwloc was built without NUMA and/or processor affinity
</span><br>
<span class="quotelev1">&gt; support. When building hwloc (which, depending on your Open MPI
</span><br>
<span class="quotelev1">&gt; installation, may be embedded in Open MPI itself), it is important to
</span><br>
<span class="quotelev1">&gt; have the libnuma header and library files available. Different linux
</span><br>
<span class="quotelev1">&gt; distributions package these files under different names; look for
</span><br>
<span class="quotelev1">&gt; packages with the word &quot;numa&quot; in them. You may also need a developer
</span><br>
<span class="quotelev1">&gt; version of the package (e.g., with &quot;dev&quot; or &quot;devel&quot; in the name) to
</span><br>
<span class="quotelev1">&gt; obtain the relevant header files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are getting this message on a non-OS X, non-Linux platform,
</span><br>
<span class="quotelev1">&gt; then hwloc does not support processor / memory affinity on this
</span><br>
<span class="quotelev1">&gt; platform. If the OS/platform does actually support processor / memory
</span><br>
<span class="quotelev1">&gt; affinity, then you should contact the hwloc maintainers:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc">https://github.com/open-mpi/hwloc</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0 of 3 running on loki
</span><br>
<span class="quotelev1">&gt; Process 2 of 3 running on loki
</span><br>
<span class="quotelev1">&gt; Process 1 of 3 running on loki
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 2 slave tasks are sending greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from task 1:
</span><br>
<span class="quotelev1">&gt;   message type:        3
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 122 ls -l
</span><br>
<span class="quotelev1">&gt; /usr/lib64/*numa*
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root 48256 Nov 24 16:29 /usr/lib64/libnuma.so.1
</span><br>
<span class="quotelev1">&gt; loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 123 grep numa
</span><br>
<span class="quotelev1">&gt; log.configure.Linux.x86_64.64_cc
</span><br>
<span class="quotelev1">&gt; checking numaif.h usability... no
</span><br>
<span class="quotelev1">&gt; checking numaif.h presence... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING: numaif.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt; configure: WARNING: numaif.h:     check for missing prerequisite headers?
</span><br>
<span class="quotelev1">&gt; configure: WARNING: numaif.h: see the Autoconf documentation
</span><br>
<span class="quotelev1">&gt; configure: WARNING: numaif.h:     section &quot;Present But Cannot Be Compiled&quot;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: numaif.h: proceeding with the compiler's result
</span><br>
<span class="quotelev1">&gt; checking for numaif.h... no
</span><br>
<span class="quotelev1">&gt; loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 124
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't get the warning for openmpi-v1.10.2-176-g9d45e07 and
</span><br>
<span class="quotelev1">&gt; openmpi-v2.x-dev-1404-g74d8ea0 as you can see in my previous emails,
</span><br>
<span class="quotelev1">&gt; although I have the same messages in log.configure.*. I would be
</span><br>
<span class="quotelev1">&gt; grateful, if somebody can fix the problem if it is a problem
</span><br>
<span class="quotelev1">&gt; and not an intended message. Thank you very much for any help in
</span><br>
<span class="quotelev1">&gt; advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29132.php">Gilles Gouaillardet: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Previous message:</strong> <a href="29130.php">Siegmar Gross: "[OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>In reply to:</strong> <a href="29129.php">Siegmar Gross: "[OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29133.php">Siegmar Gross: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Reply:</strong> <a href="29133.php">Siegmar Gross: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
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
