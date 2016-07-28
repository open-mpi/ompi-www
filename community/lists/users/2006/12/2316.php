<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 18:44:06 2006" -->
<!-- isoreceived="20061206234406" -->
<!-- sent="Wed, 6 Dec 2006 17:44:02 -0600 (CST)" -->
<!-- isosent="20061206234402" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPE build failure" -->
<!-- id="Pine.LNX.4.58.0612061725380.18757_at_schwinn.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4FE68B03-A7ED-4321-98C8-D51224C15545_at_zymeworks.com" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-06 18:44:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2317.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>In reply to:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2321.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Reply:</strong> <a href="2321.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 6 Dec 2006, Ryan Thompson wrote:
<br>
<p><span class="quotelev1">&gt; Hi Anthony,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made some progress, however, I still get the same trace_API.h
</span><br>
<span class="quotelev1">&gt; error, although I'm not certain if it is important.
</span><br>
<p>trace_sample is a sample TRACE-API implementation for SLOG2, e.g. for
<br>
people who write their own trace and to generate their own SLOG2 files.
<br>
trace_rlog is MPICH2's internal logging format (standalone MPE does not
<br>
distinguish which MPI implementation you are using).  If you don't need
<br>
them, add --disable-rlog and --disable-sample to your configure command.
<br>
<p><span class="quotelev1">&gt; It appears that the binaries are built regardless and the
</span><br>
<span class="quotelev1">&gt; installcheck-all appears to pass on all tests.
</span><br>
<p>I don't see any errors in any of the output files that you sent me.
<br>
Everything appears to finish successfully.  Did you pipe both standard
<br>
output and standard error to the files ?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As requested, I've attached a gzip'd tarball of my configure, make,
</span><br>
<span class="quotelev1">&gt; make install, &amp; make installcheck-all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, here are my configure arguments, as they appear in my 'do-
</span><br>
<span class="quotelev1">&gt; configure' shell script...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # MPE do.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; JAVA=&quot;/opt/sun-jdk-1.5.0.08&quot;
</span><br>
<span class="quotelev1">&gt; MPERUN=&quot;/opt/openmpi/bin/mpiexec -n 4&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi \
</span><br>
<span class="quotelev1">&gt;          --enable-logging=yes \
</span><br>
<span class="quotelev1">&gt;          --disable-f77 \
</span><br>
<span class="quotelev1">&gt;          --enable-slog2=build \
</span><br>
<span class="quotelev1">&gt;          --enable-collchk=no \
</span><br>
<span class="quotelev1">&gt;          --enable-graphics=no \
</span><br>
<span class="quotelev1">&gt;          --with-mpicc=&quot;/opt/openmpi/bin/mpicc&quot; \
</span><br>
<span class="quotelev1">&gt;          --with-mpiinc=&quot;-I/opt/openmpi/include&quot; \
</span><br>
<span class="quotelev1">&gt;          --with-mpilibs=&quot;-L/opt/openmpi/lib&quot; \
</span><br>
<span class="quotelev1">&gt;          --with-java=$JAVA
</span><br>
<p>A.Chan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2317.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>In reply to:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2321.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Reply:</strong> <a href="2321.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
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
