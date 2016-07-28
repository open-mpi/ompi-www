<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 20:30:50 2005" -->
<!-- isoreceived="20051025013050" -->
<!-- sent="Mon, 24 Oct 2005 20:30:46 -0500" -->
<!-- isosent="20051025013046" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  ppc64 linux bustage?" -->
<!-- id="20051025013045.GS30127_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1069C41F-6E59-4543-9305-BC9D85AF1661_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 20:30:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0489.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0489.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 24, 2005 at 07:30:54PM -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Oct 24, 2005, at 6:56 PM, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | *** GNU libltdl setup
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | configure: running /bin/sh './configure'  --enable-ltdl- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; convenience --disable-ltdl-install --enable-shared --disable- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; static --cache-file=/dev/null --srcdir=.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | configure: /bin/sh './configure' *failed* for opal/libltdl
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Troy, could you show opal/libltdl/config.log, or, if that does not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reveal anything suspicious, the corresponding part of toplevel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; config.log (above message should be recorded there)?  Thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ARGGGG.. libltdl3-dev seemed to not be installed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any way to make a check for this more explicit in autogen.sh?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't use the system-installed libltdl, and always build our own.   
</span><br>
<span class="quotelev1">&gt; It looks like you should only need the libtool package, which we  
</span><br>
<span class="quotelev1">&gt; should check for already in autogen.sh.  Was there any useful error  
</span><br>
<span class="quotelev1">&gt; message along the way?
</span><br>
<p>I recall some error about libtool/libltdl, but it looked like it
<br>
succeeded.
<br>
<p>Do you have a debian system you can remove the libltdl3 and libltdl3-dev
<br>
packages? It seems like there's some strange depenency on this.
<br>
<p>But, on the bright side, I have a working mpirun, but not quite a
<br>
working mpi ;)
<br>
<p>p5l0:/usr/src/netpipe3-dev# strace -f -F -o run.out mpirun -np 2 -mca
<br>
btl_base_exclude openib NPmpi
<br>
1: p5l0
<br>
0: p5l0
<br>
mpirun noticed that job rank 1 with PID 11658 on node &quot;localhost&quot; exited
<br>
on signal 11.
<br>
upeek: ptrace(PTRACE_PEEKUSER,11659,24,0): No such process
<br>
1 process killed (possibly by Open MPI)
<br>
<p>the output of strace is at:
<br>
<a href="http://scl.ameslab.gov/~troy/ompi_debug/mpi-segfault.out">http://scl.ameslab.gov/~troy/ompi_debug/mpi-segfault.out</a>
<br>
<p>Any other debuging hints?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0489.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0489.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
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
