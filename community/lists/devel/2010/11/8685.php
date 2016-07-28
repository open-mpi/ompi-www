<?
$subject_val = "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 17:20:44 2010" -->
<!-- isoreceived="20101116222044" -->
<!-- sent="Tue, 16 Nov 2010 17:26:53 -0500" -->
<!-- isosent="20101116222653" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="1289946413.23022.10.camel_at_lw132" -->
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
<strong>Subject:</strong> [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 17:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8686.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<li><strong>Previous message:</strong> <a href="8684.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Maybe reply:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8699.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear awesome community,
<br>
<p><p>Over the last months, I closely followed the evolution of bug 2043,
<br>
entitled 'sm BTL hang with GCC 4.4.x'.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>
<br>
<p>The reason is that I am developping an MPI-based software, and I use
<br>
Open-MPI as it is the only implementation I am aware of that send
<br>
messages eagerly (powerful feature, that is).
<br>
<p><a href="http://denovoassembler.sourceforge.net/">http://denovoassembler.sourceforge.net/</a>
<br>
<p>I believe that this very pesky bug remains in Open-MPI 1.4.3, and
<br>
enclosed to this communication are scientific proofs of my claim, or at
<br>
least I think they are ;).
<br>
<p><p>Each byte transfer layer has its default limit to send eagerly a
<br>
message. With shared memory (sm), the value is 4096 bytes. At least it
<br>
is according to ompi_info.
<br>
<p><p>To verify this limit, I implemented a very simple test. The source code
<br>
is test4096.cpp, which basically just send a single message of 4096
<br>
bytes from a rank to another (rank 1 to 0).
<br>
<p>The test was conclusive: the limit is 4096 bytes (see
<br>
mpirun-np-2-Simple.txt).
<br>
<p><p><p>Then, I implemented a simple program (103 lines) that makes Open-MPI
<br>
1.4.3 hang. The code is in make-it-hang.cpp. At each iteration, each
<br>
rank send a message to a randomly-selected destination. A rank polls for
<br>
new messages with MPI_Iprobe. Each rank prints the current time at each
<br>
second during 30 seconds. Using this simple code, I ran 4 test cases,
<br>
each with a different outcome (use the Makefile if you want to reproduce
<br>
the bug).
<br>
<p>Before I describe these cases, I will describe the testing hardware. 
<br>
<p>I use a computer with 32 x86_64 cores (see cat-proc-cpuinfo.txt.gz). 
<br>
The computer has 128 GB of physical memory (see
<br>
cat-proc-meminfo.txt.gz).
<br>
It runs Fedora Core 11 with Linux 2.6.30.10-105.2.23.fc11.x86_64 (see
<br>
dmesg.txt.gz &amp; uname.txt).
<br>
Default kernel parameters are utilized at runtime (see
<br>
sudo-sysctl-a.txt.gz).
<br>
<p>The C++ compiler is g++ (GCC) 4.4.1 20090725 (Red Hat 4.4.1-2) (see g
<br>
++--version.txt).
<br>
<p><p>I compiled Open-MPI 1.4.3 myself (see config.out.gz, make.out.gz,
<br>
make-install.out.gz).
<br>
Finally, I use Open-MPI 1.4.3 with defaults (see ompi_info.txt.gz).
<br>
<p><p><p><p>Now I can describe the cases.
<br>
<p><p>Case 1: 30 MPI ranks, message size is 4096 bytes
<br>
<p>File: mpirun-np-30-Program-4096.txt
<br>
Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
<br>
<p><p><p><p>Case 2: 30 MPI ranks, message size is 1 byte
<br>
<p>File: mpirun-np-30-Program-1.txt.gz
<br>
Outcome: It runs just fine.
<br>
<p><p><p><p>Case 3: 2 MPI ranks, message size is 4096 bytes
<br>
<p>File: mpirun-np-2-Program-4096.txt
<br>
Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
<br>
<p><p><p><p>Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
<br>
disabled
<br>
<p>File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
<br>
Outcome: It runs just fine.
<br>
<p><p><p><p><p>A backtrace of the processes in Case 1 is in gdb-bt.txt.gz.
<br>
<p><p><p><p>Thank you !
<br>
<p><p>

<p>
Rank 1 welcomes you.
<br>
Rank 0 welcomes you.
<br>
Rank 1 thanks you.
<br>
Rank 0 thanks you.
<br>
<p>





<p>
Linux ls30.genome.ulaval.ca 2.6.30.10-105.2.23.fc11.x86_64 #1 SMP Thu Feb 11 07:06:34 UTC 2010 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>

<p>
g++ (GCC) 4.4.1 20090725 (Red Hat 4.4.1-2)
<br>
Copyright &#194;&#169; 2009 Free Software Foundation, Inc.
<br>
Ce logiciel est libre; voir les sources pour les conditions de copie.  Il n'y a PAS
<br>
GARANTIE; ni implicite pour le MARCHANDAGE ou pour un BUT PARTICULIER.
<br>
<p><p>




<p>
Rank 0 is running, message size is 4096
<br>
Rank 4 is running, message size is 4096
<br>
Rank 8 is running, message size is 4096
<br>
Rank 16 is running, message size is 4096
<br>
Rank 24 is running, message size is 4096
<br>
Rank 3 is running, message size is 4096
<br>
Rank 5 is running, message size is 4096
<br>
Rank 6 is running, message size is 4096
<br>
Rank 7 is running, message size is 4096
<br>
Rank 11 is running, message size is 4096
<br>
Rank 12 is running, message size is 4096
<br>
Rank 13 is running, message size is 4096
<br>
Rank 14 is running, message size is 4096
<br>
Rank 15 is running, message size is 4096
<br>
Rank 19 is running, message size is 4096
<br>
Rank 20 is running, message size is 4096
<br>
Rank 21 is running, message size is 4096
<br>
Rank 22 is running, message size is 4096
<br>
Rank 25 is running, message size is 4096
<br>
Rank 27 is running, message size is 4096
<br>
Rank 28 is running, message size is 4096
<br>
Rank 29 is running, message size is 4096
<br>
Rank 2 is running, message size is 4096
<br>
Rank 18 is running, message size is 4096
<br>
Rank 1 is running, message size is 4096
<br>
Rank 9 is running, message size is 4096
<br>
Rank 17 is running, message size is 4096
<br>
Rank 23 is running, message size is 4096
<br>
Rank 26 is running, message size is 4096
<br>
Rank 10 is running, message size is 4096
<br>
<p>

<p>
Rank 0 is running, message size is 4096
<br>
Rank 1 is running, message size is 4096
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 16624 on node ls30.genome.ulaval.ca exited on signal 15 (Terminated).
<br>
--------------------------------------------------------------------------
<br>
<p>

<br><p>
<p><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/test4096.cpp">test4096.cpp</a>
</ul>
<!-- attachment="test4096.cpp" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/make-it-hang.cpp">make-it-hang.cpp</a>
</ul>
<!-- attachment="make-it-hang.cpp" -->
<hr>
<ul>
<li>text/x-makefile attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/Makefile">Makefile</a>
</ul>
<!-- attachment="Makefile" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/cat-proc-cpuinfo.txt.gz">cat-proc-cpuinfo.txt.gz</a>
</ul>
<!-- attachment="cat-proc-cpuinfo.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/cat-proc-meminfo.txt.gz">cat-proc-meminfo.txt.gz</a>
</ul>
<!-- attachment="cat-proc-meminfo.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/dmesg.txt.gz">dmesg.txt.gz</a>
</ul>
<!-- attachment="dmesg.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/sudo-sysctl-a.txt.gz">sudo-sysctl-a.txt.gz</a>
</ul>
<!-- attachment="sudo-sysctl-a.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/config.out.gz">config.out.gz</a>
</ul>
<!-- attachment="config.out.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/make.out.gz">make.out.gz</a>
</ul>
<!-- attachment="make.out.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/make-install.out.gz">make-install.out.gz</a>
</ul>
<!-- attachment="make-install.out.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/mpirun-np-30-Program-1.txt.gz">mpirun-np-30-Program-1.txt.gz</a>
</ul>
<!-- attachment="mpirun-np-30-Program-1.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/mpirun-mca-btl-_sm-np-30-Program-4096.txt.gz">mpirun-mca-btl-_sm-np-30-Program-4096.txt.gz</a>
</ul>
<!-- attachment="mpirun-mca-btl-_sm-np-30-Program-4096.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8685/gdb-bt.txt.gz">gdb-bt.txt.gz</a>
</ul>
<!-- attachment="gdb-bt.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8686.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<li><strong>Previous message:</strong> <a href="8684.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Maybe reply:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8699.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
