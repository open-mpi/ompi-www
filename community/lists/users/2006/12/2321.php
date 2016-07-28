<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 14:19:03 2006" -->
<!-- isoreceived="20061207191903" -->
<!-- sent="Thu, 7 Dec 2006 11:18:39 -0800" -->
<!-- isosent="20061207191839" -->
<!-- name="Ryan Thompson" -->
<!-- email="ryan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPE build failure" -->
<!-- id="1AF50599-9657-4CCA-8F49-8321A1CE22BD_at_zymeworks.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0612061725380.18757_at_schwinn.mcs.anl.gov" -->
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
<strong>From:</strong> Ryan Thompson (<em>ryan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-07 14:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2320.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anthony,
<br>
<p>MPE is built and working.  The errors I saw were only related to rlog  
<br>
and sample.  Once
<br>
I disabled them there were no more errors.
<br>
<p>Thanks for your help :-)
<br>
<p>Ryan
<br>
<p>On Dec 6, 2006, at 3:44 PM, Anthony Chan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 6 Dec 2006, Ryan Thompson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Anthony,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I made some progress, however, I still get the same trace_API.h
</span><br>
<span class="quotelev2">&gt;&gt; error, although I'm not certain if it is important.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; trace_sample is a sample TRACE-API implementation for SLOG2, e.g. for
</span><br>
<span class="quotelev1">&gt; people who write their own trace and to generate their own SLOG2  
</span><br>
<span class="quotelev1">&gt; files.
</span><br>
<span class="quotelev1">&gt; trace_rlog is MPICH2's internal logging format (standalone MPE does  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; distinguish which MPI implementation you are using).  If you don't  
</span><br>
<span class="quotelev1">&gt; need
</span><br>
<span class="quotelev1">&gt; them, add --disable-rlog and --disable-sample to your configure  
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It appears that the binaries are built regardless and the
</span><br>
<span class="quotelev2">&gt;&gt; installcheck-all appears to pass on all tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see any errors in any of the output files that you sent me.
</span><br>
<span class="quotelev1">&gt; Everything appears to finish successfully.  Did you pipe both standard
</span><br>
<span class="quotelev1">&gt; output and standard error to the files ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As requested, I've attached a gzip'd tarball of my configure, make,
</span><br>
<span class="quotelev2">&gt;&gt; make install, &amp; make installcheck-all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, here are my configure arguments, as they appear in my 'do-
</span><br>
<span class="quotelev2">&gt;&gt; configure' shell script...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # MPE do.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; JAVA=&quot;/opt/sun-jdk-1.5.0.08&quot;
</span><br>
<span class="quotelev2">&gt;&gt; MPERUN=&quot;/opt/openmpi/bin/mpiexec -n 4&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi \
</span><br>
<span class="quotelev2">&gt;&gt;          --enable-logging=yes \
</span><br>
<span class="quotelev2">&gt;&gt;          --disable-f77 \
</span><br>
<span class="quotelev2">&gt;&gt;          --enable-slog2=build \
</span><br>
<span class="quotelev2">&gt;&gt;          --enable-collchk=no \
</span><br>
<span class="quotelev2">&gt;&gt;          --enable-graphics=no \
</span><br>
<span class="quotelev2">&gt;&gt;          --with-mpicc=&quot;/opt/openmpi/bin/mpicc&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;          --with-mpiinc=&quot;-I/opt/openmpi/include&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;          --with-mpilibs=&quot;-L/opt/openmpi/lib&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;          --with-java=$JAVA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A.Chan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
--
Ryan Thompson,
HPC Systems Administrator
ryan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2320.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
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
