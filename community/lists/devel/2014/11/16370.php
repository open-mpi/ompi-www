<?
$subject_val = "Re: [OMPI devel] Setting up debug environment on Eclipse PTP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 27 22:38:19 2014" -->
<!-- isoreceived="20141128033819" -->
<!-- sent="Fri, 28 Nov 2014 11:38:18 +0800" -->
<!-- isosent="20141128033818" -->
<!-- name="Alvyn Liang" -->
<!-- email="alvyn.liang_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting up debug environment on Eclipse PTP" -->
<!-- id="CALGdtq36zjEo3h8uGPXxF7s7Wvs7r4dKDyd27kp1kCG7VuAsJg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALGdtq0Kw1mVF7ViA9ow0Ue=bh1wR_=phfxMALZEivunszr5sA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting up debug environment on Eclipse PTP<br>
<strong>From:</strong> Alvyn Liang (<em>alvyn.liang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-27 22:38:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16371.php">Nick Papior Andersen: "[OMPI devel] Communicator based on locality of PU"</a>
<li><strong>Previous message:</strong> <a href="16369.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<li><strong>Reply:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16392.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am trying to learn how Open MPI works. Followed many instructions on Web,
<br>
I tried to setup MPI Hello projects on Eclipse PTP. I am wondering if there
<br>
is any protocol to setup such an environment.
<br>
<p>I did try a few combination, but still stuck at the point where sometimes
<br>
there are:
<br>
1. little bugs symbol showing on the left panel (next to the line numbers)
<br>
while debugging. Things like &quot;Symbol 'ompi_mpi_finalized' could not be
<br>
resolved&quot;. I think this is due to environmental variables or paths not
<br>
being set correctly, but I don't know what I have missed.
<br>
2. Cannot toggle breakpoints or toggled breakpoints being set on a relative
<br>
file path. This makes the threads not stopping at the breakpoints.
<br>
<p>My environment is CentOS 6.6 running on a machine with 32GB memory, and
<br>
Intel i7-3770. Since I am still experimenting on local debugging, I am
<br>
debugging on Generic Open MPI Interactive with connection type local or
<br>
remotely to 127.0.0.1, and with only a few processes. Detailed Eclipse
<br>
installation configuration attached.
<br>
<p>My Open MPI is configured as
<br>
../configure --enable-debug --enable-event-debug --enable-mem-debug
<br>
--enable-mem-profile
<br>
The compiler is GNU C compiler.
<br>
<p>This gives a lot of information in the console while debugging but not very
<br>
useful. I am not sure if I should run 'make install' for Open MPI to /usr,
<br>
or simply set Open MPI source tree as part of the project, or both. Open
<br>
MPI has examples folder but I don't know how to use the code directly as my
<br>
source code. For now I can step into source code of Open MPI, but sometimes
<br>
I cannot toggle breakpoints. Attached is my current debug configuration.
<br>
<p>Good day,
<br>
<p>Alvyn
<br>
<p>A screen shot:
<br>
<a href="https://www.dropbox.com/s/s105m2qgi14oj2y/Screenshot-Parallel%20Debug%20-%20ompitest-build-ompi-mpi-c-profile-pinit.c%20-%20Eclipse%20.png?dl=0">https://www.dropbox.com/s/s105m2qgi14oj2y/Screenshot-Parallel%20Debug%20-%20ompitest-build-ompi-mpi-c-profile-pinit.c%20-%20Eclipse%20.png?dl=0</a>
<br>
<p>Eclipse configuration:
<br>
<a href="https://www.dropbox.com/s/5fnrqyga842w0e0/eclipse.conf?dl=0">https://www.dropbox.com/s/5fnrqyga842w0e0/eclipse.conf?dl=0</a>
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16370/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16370/debug.conf">debug.conf</a>
</ul>
<!-- attachment="debug.conf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16371.php">Nick Papior Andersen: "[OMPI devel] Communicator based on locality of PU"</a>
<li><strong>Previous message:</strong> <a href="16369.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<li><strong>Reply:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16392.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
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
