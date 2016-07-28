<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 15:19:07 2010" -->
<!-- isoreceived="20101123201907" -->
<!-- sent="Tue, 23 Nov 2010 15:17:44 -0500" -->
<!-- isosent="20101123201744" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="28E24881-399F-4A42-98A3-F60BD00CCAEA_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 15:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8696.php">George Bosilca: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Maybe in reply to:</strong> <a href="8685.php">S&#233;bastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8701.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8701.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying - many of us were at SC last week. 
<br>
<p>Admittedly, I'm looking at your code on a PDA, so I might be missing some things. But I have 2 q's:
<br>
<p>1 your send routine doesn't seem to protect from sending to yourself. Correct?
<br>
<p>2 you're not using nonblocking sends, which, if I understand your code right, can lead to deadlock. Right?  Eg proc A sends to proc b and blocks until b receives. But b is blocking waiting for it's send completion, etc. 
<br>
<p>I think with your random destinations (which may even be yourself, in which case the blocking send will never complete because you didn't prepost a nomblocking receive) and blocking sends, you can end up with deadlock. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Nov 16, 2010, at 5:21 PM, S&#195;&#169;bastien Boisvert &lt;Sebastien.Boisvert.3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear awesome community,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Over the last months, I closely followed the evolution of bug 2043,
</span><br>
<span class="quotelev1">&gt; entitled 'sm BTL hang with GCC 4.4.x'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason is that I am developping an MPI-based software, and I use
</span><br>
<span class="quotelev1">&gt; Open-MPI as it is the only implementation I am aware of that send
</span><br>
<span class="quotelev1">&gt; messages eagerly (powerful feature, that is).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://denovoassembler.sourceforge.net/">http://denovoassembler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that this very pesky bug remains in Open-MPI 1.4.3, and
</span><br>
<span class="quotelev1">&gt; enclosed to this communication are scientific proofs of my claim, or at
</span><br>
<span class="quotelev1">&gt; least I think they are ;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each byte transfer layer has its default limit to send eagerly a
</span><br>
<span class="quotelev1">&gt; message. With shared memory (sm), the value is 4096 bytes. At least it
</span><br>
<span class="quotelev1">&gt; is according to ompi_info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To verify this limit, I implemented a very simple test. The source code
</span><br>
<span class="quotelev1">&gt; is test4096.cpp, which basically just send a single message of 4096
</span><br>
<span class="quotelev1">&gt; bytes from a rank to another (rank 1 to 0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The test was conclusive: the limit is 4096 bytes (see
</span><br>
<span class="quotelev1">&gt; mpirun-np-2-Simple.txt).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, I implemented a simple program (103 lines) that makes Open-MPI
</span><br>
<span class="quotelev1">&gt; 1.4.3 hang. The code is in make-it-hang.cpp. At each iteration, each
</span><br>
<span class="quotelev1">&gt; rank send a message to a randomly-selected destination. A rank polls for
</span><br>
<span class="quotelev1">&gt; new messages with MPI_Iprobe. Each rank prints the current time at each
</span><br>
<span class="quotelev1">&gt; second during 30 seconds. Using this simple code, I ran 4 test cases,
</span><br>
<span class="quotelev1">&gt; each with a different outcome (use the Makefile if you want to reproduce
</span><br>
<span class="quotelev1">&gt; the bug).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before I describe these cases, I will describe the testing hardware. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use a computer with 32 x86_64 cores (see cat-proc-cpuinfo.txt.gz). 
</span><br>
<span class="quotelev1">&gt; The computer has 128 GB of physical memory (see
</span><br>
<span class="quotelev1">&gt; cat-proc-meminfo.txt.gz).
</span><br>
<span class="quotelev1">&gt; It runs Fedora Core 11 with Linux 2.6.30.10-105.2.23.fc11.x86_64 (see
</span><br>
<span class="quotelev1">&gt; dmesg.txt.gz &amp; uname.txt).
</span><br>
<span class="quotelev1">&gt; Default kernel parameters are utilized at runtime (see
</span><br>
<span class="quotelev1">&gt; sudo-sysctl-a.txt.gz).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The C++ compiler is g++ (GCC) 4.4.1 20090725 (Red Hat 4.4.1-2) (see g
</span><br>
<span class="quotelev1">&gt; ++--version.txt).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled Open-MPI 1.4.3 myself (see config.out.gz, make.out.gz,
</span><br>
<span class="quotelev1">&gt; make-install.out.gz).
</span><br>
<span class="quotelev1">&gt; Finally, I use Open-MPI 1.4.3 with defaults (see ompi_info.txt.gz).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I can describe the cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case 1: 30 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; File: mpirun-np-30-Program-4096.txt
</span><br>
<span class="quotelev1">&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case 2: 30 MPI ranks, message size is 1 byte
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; File: mpirun-np-30-Program-1.txt.gz
</span><br>
<span class="quotelev1">&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case 3: 2 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; File: mpirun-np-2-Program-4096.txt
</span><br>
<span class="quotelev1">&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
</span><br>
<span class="quotelev1">&gt; disabled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
</span><br>
<span class="quotelev1">&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A backtrace of the processes in Case 1 is in gdb-bt.txt.gz.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;test4096.cpp&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpirun-np-2-Simple.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;make-it-hang.cpp&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Makefile&gt;
</span><br>
<span class="quotelev1">&gt; &lt;cat-proc-cpuinfo.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;cat-proc-meminfo.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;dmesg.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;uname.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;sudo-sysctl-a.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;g++--version.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.out.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;make.out.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;make-install.out.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpirun-np-30-Program-4096.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpirun-np-30-Program-1.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpirun-np-2-Program-4096.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;gdb-bt.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8696.php">George Bosilca: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Maybe in reply to:</strong> <a href="8685.php">S&#233;bastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8701.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8701.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
