<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 17:17:21 2010" -->
<!-- isoreceived="20101123221721" -->
<!-- sent="Tue, 23 Nov 2010 17:17:24 -0500" -->
<!-- isosent="20101123221724" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="1290550644.24821.19.camel_at_godzilla" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="28E24881-399F-4A42-98A3-F60BD00CCAEA_at_cisco.com" -->
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
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 17:17:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8702.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le mardi 23 novembre 2010 &#195;&#160; 15:17 -0500, Jeff Squyres (jsquyres) a
<br>
&#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Sorry for the delay in replying - many of us were at SC last week. 
</span><br>
<p>Nothing to be sorry for !
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Admittedly, I'm looking at your code on a PDA, so I might be missing some things. But I have 2 q's:
</span><br>
<p>You got it all right, I assure you !
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 your send routine doesn't seem to protect from sending to yourself. Correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Correct. (my error !)
<br>
<p><p><p>The code is not compliant with MPI 2.2 -- I realized that afterward.
<br>
<p>see <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8689.php">http://www.open-mpi.org/community/lists/devel/2010/11/8689.php</a>
<br>
<p><p><p>Also, Mr. George Bosilca pointed that out too.
<br>
<p>see <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8696.php">http://www.open-mpi.org/community/lists/devel/2010/11/8696.php</a>
<br>
<p><p><span class="quotelev1">&gt; 2 you're not using nonblocking sends, which, if I understand your code right, can lead to deadlock. Right?  Eg proc A sends to proc b and blocks until b receives. But b is blocking waiting for it's send completion, etc. 
</span><br>
<p>Right.
<br>
<p>As Mr. George Bosilca underlined, since the same test case works for
<br>
small messages, the problem is about congestion of the FIFOs which leads
<br>
to resource locking, and as you wrote, deadlock.
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2010/11/8696.php">http://www.open-mpi.org/community/lists/devel/2010/11/8696.php</a>
<br>
<p><p>I now use MPI_Isend, so the problem is no more.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think with your random destinations (which may even be yourself, in which case the blocking send will never complete because you didn't prepost a nomblocking receive) and blocking sends, you can end up with deadlock. 
</span><br>
<p><p>Yes, you are right !
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good. 
</span><br>
<p><p>Sent from my Ubuntu. Typing is good. ;)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 16, 2010, at 5:21 PM, S&#195;&#169;bastien Boisvert &lt;Sebastien.Boisvert.3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dear awesome community,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Over the last months, I closely followed the evolution of bug 2043,
</span><br>
<span class="quotelev2">&gt; &gt; entitled 'sm BTL hang with GCC 4.4.x'.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The reason is that I am developping an MPI-based software, and I use
</span><br>
<span class="quotelev2">&gt; &gt; Open-MPI as it is the only implementation I am aware of that send
</span><br>
<span class="quotelev2">&gt; &gt; messages eagerly (powerful feature, that is).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://denovoassembler.sourceforge.net/">http://denovoassembler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I believe that this very pesky bug remains in Open-MPI 1.4.3, and
</span><br>
<span class="quotelev2">&gt; &gt; enclosed to this communication are scientific proofs of my claim, or at
</span><br>
<span class="quotelev2">&gt; &gt; least I think they are ;).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Each byte transfer layer has its default limit to send eagerly a
</span><br>
<span class="quotelev2">&gt; &gt; message. With shared memory (sm), the value is 4096 bytes. At least it
</span><br>
<span class="quotelev2">&gt; &gt; is according to ompi_info.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To verify this limit, I implemented a very simple test. The source code
</span><br>
<span class="quotelev2">&gt; &gt; is test4096.cpp, which basically just send a single message of 4096
</span><br>
<span class="quotelev2">&gt; &gt; bytes from a rank to another (rank 1 to 0).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The test was conclusive: the limit is 4096 bytes (see
</span><br>
<span class="quotelev2">&gt; &gt; mpirun-np-2-Simple.txt).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Then, I implemented a simple program (103 lines) that makes Open-MPI
</span><br>
<span class="quotelev2">&gt; &gt; 1.4.3 hang. The code is in make-it-hang.cpp. At each iteration, each
</span><br>
<span class="quotelev2">&gt; &gt; rank send a message to a randomly-selected destination. A rank polls for
</span><br>
<span class="quotelev2">&gt; &gt; new messages with MPI_Iprobe. Each rank prints the current time at each
</span><br>
<span class="quotelev2">&gt; &gt; second during 30 seconds. Using this simple code, I ran 4 test cases,
</span><br>
<span class="quotelev2">&gt; &gt; each with a different outcome (use the Makefile if you want to reproduce
</span><br>
<span class="quotelev2">&gt; &gt; the bug).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Before I describe these cases, I will describe the testing hardware. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I use a computer with 32 x86_64 cores (see cat-proc-cpuinfo.txt.gz). 
</span><br>
<span class="quotelev2">&gt; &gt; The computer has 128 GB of physical memory (see
</span><br>
<span class="quotelev2">&gt; &gt; cat-proc-meminfo.txt.gz).
</span><br>
<span class="quotelev2">&gt; &gt; It runs Fedora Core 11 with Linux 2.6.30.10-105.2.23.fc11.x86_64 (see
</span><br>
<span class="quotelev2">&gt; &gt; dmesg.txt.gz &amp; uname.txt).
</span><br>
<span class="quotelev2">&gt; &gt; Default kernel parameters are utilized at runtime (see
</span><br>
<span class="quotelev2">&gt; &gt; sudo-sysctl-a.txt.gz).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The C++ compiler is g++ (GCC) 4.4.1 20090725 (Red Hat 4.4.1-2) (see g
</span><br>
<span class="quotelev2">&gt; &gt; ++--version.txt).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I compiled Open-MPI 1.4.3 myself (see config.out.gz, make.out.gz,
</span><br>
<span class="quotelev2">&gt; &gt; make-install.out.gz).
</span><br>
<span class="quotelev2">&gt; &gt; Finally, I use Open-MPI 1.4.3 with defaults (see ompi_info.txt.gz).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now I can describe the cases.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Case 1: 30 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; File: mpirun-np-30-Program-4096.txt
</span><br>
<span class="quotelev2">&gt; &gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Case 2: 30 MPI ranks, message size is 1 byte
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; File: mpirun-np-30-Program-1.txt.gz
</span><br>
<span class="quotelev2">&gt; &gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Case 3: 2 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; File: mpirun-np-2-Program-4096.txt
</span><br>
<span class="quotelev2">&gt; &gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
</span><br>
<span class="quotelev2">&gt; &gt; disabled
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
</span><br>
<span class="quotelev2">&gt; &gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A backtrace of the processes in Case 1 is in gdb-bt.txt.gz.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you !
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;test4096.cpp&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mpirun-np-2-Simple.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;make-it-hang.cpp&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;Makefile&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;cat-proc-cpuinfo.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;cat-proc-meminfo.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;dmesg.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;uname.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;sudo-sysctl-a.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;g++--version.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;config.out.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;make.out.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;make-install.out.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ompi_info.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mpirun-np-30-Program-4096.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mpirun-np-30-Program-1.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mpirun-np-2-Program-4096.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;gdb-bt.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
M. S&#195;&#169;bastien Boisvert
&#195;&#137;tudiant au doctorat en physiologie-endocrinologie &#195;&#160; l'Universit&#195;&#169; Laval
Boursier des Instituts de recherche en sant&#195;&#169; du Canada
&#195;&#137;quipe du Professeur Jacques Corbeil
Centre de recherche en infectiologie de l'Universit&#195;&#169; Laval
Local R-61B
2705, boulevard Laurier
Qu&#195;&#169;bec, Qu&#195;&#169;bec
Canada G1V 4G2
T&#195;&#169;l&#195;&#169;phone: 418 525 4444 46342
Courriel: SEB_at_[hidden]
Web: <a href="http://boisvert.info">http://boisvert.info</a>
&quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8702.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
