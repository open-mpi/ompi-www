<?
$subject_val = "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 06:52:59 2008" -->
<!-- isoreceived="20080729105259" -->
<!-- sent="Tue, 29 Jul 2008 11:52:48 +0100 (BST)" -->
<!-- isosent="20080729105248" -->
<!-- name="Mark Dixon" -->
<!-- email="m.c.dixon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio" -->
<!-- id="alpine.GSO.1.10.0807290949540.17996_at_sunserv2" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="99D8656B-101C-467A-A336-8CB9B54F7A43_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio<br>
<strong>From:</strong> Mark Dixon (<em>m.c.dixon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 06:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6180.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6183.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="6183.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 28 Jul 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: I compile with PGI 7.1.4 regularly on RHEL4U4 and don't see this 
</span><br>
<span class="quotelev1">&gt; problem.  It would be interesting to see the config.log's from these builds 
</span><br>
<span class="quotelev1">&gt; to see the actual details of what went wrong.
</span><br>
<p>Thanks Jeff: it's good to know it's just me ;)
<br>
<p>Following your message, I've tried building with PGI on a few systems:
<br>
<p>Compiler      OS                   Result
<br>
============  ===================  ============
<br>
32-bit 7.1.6  CentOS 5.2 (32-bit)  no threading
<br>
32-bit 7.1.4  CentOS 5.2 (32-bit)  no threading  **config.log attached**
<br>
32-bit 7.1.4  RHEL4u6 (64-bit)     works!
<br>
32-bit 7.1.4  CentOS 5.1 (64-bit)  no threading
<br>
<p>Each time it fails, it's because of &quot;__builtin_expect&quot; being undefined for 
<br>
pgcc and pgf77 (works for pgcpp) - or any of the Sun Studio compilers. 
<br>
Could this be a glibc 2.3 (RHEL4) vs. 2.5 (CentOS5) issue?
<br>
<p>I've attached just the PGI config.log for now (I don't want to blow the 
<br>
100Kb posting limit), but the relevant sections from each appear to be:
<br>
<p>PGI:
<br>
<p>&nbsp;&nbsp;&nbsp;configure:49065: checking if C compiler and POSIX threads work with -lpthread
<br>
&nbsp;&nbsp;&nbsp;configure:49121: pgcc -o conftest -O -DNDEBUG   -D_REENTRANT  conftest.c -lnsl -lutil  -lpthread &gt;&amp;5
<br>
&nbsp;&nbsp;&nbsp;conftest.c:
<br>
&nbsp;&nbsp;&nbsp;conftest.o: In function `main':
<br>
&nbsp;&nbsp;&nbsp;conftest.c:(.text+0x98): undefined reference to `__builtin_expect'
<br>
<p>&nbsp;&nbsp;&nbsp;configure:49272: checking if C++ compiler and POSIX threads work with -lpthread
<br>
&nbsp;&nbsp;&nbsp;configure:49328: pgcpp -o conftest -O -DNDEBUG    conftest.cpp -lnsl -lutil  -lpthread &gt;&amp;5
<br>
&nbsp;&nbsp;&nbsp;conftest.cpp:
<br>
&nbsp;&nbsp;&nbsp;(skipped some non-fatal warning messages here)
<br>
<p>&nbsp;&nbsp;&nbsp;configure:49572: checking if F77 compiler and POSIX threads work with -lpthread
<br>
&nbsp;&nbsp;&nbsp;configure:49654: pgcc -O -DNDEBUG  -I. -c conftest.c
<br>
&nbsp;&nbsp;&nbsp;configure:49661: $? = 0
<br>
&nbsp;&nbsp;&nbsp;configure:49671: pgf77  conftestf.f conftest.o -o conftest  -lnsl -lutil  -lpthread
<br>
&nbsp;&nbsp;&nbsp;conftestf.f:
<br>
&nbsp;&nbsp;&nbsp;conftest.o: In function `pthreadtest_':
<br>
&nbsp;&nbsp;&nbsp;conftest.c:(.text+0x92): undefined reference to `__builtin_expect'
<br>
<p>Sun:
<br>
<p>&nbsp;&nbsp;&nbsp;configure:49065: checking if C compiler and POSIX threads work with -lpthread
<br>
&nbsp;&nbsp;&nbsp;configure:49121: cc -o conftest -O -DNDEBUG   -D_REENTRANT  conftest.c -lnsl -lutil  -lm -lpthread &gt;&amp;5
<br>
&nbsp;&nbsp;&nbsp;&quot;conftest.c&quot;, line 305: warning: can not set non-default alignment for automatic variable
<br>
&nbsp;&nbsp;&nbsp;&quot;conftest.c&quot;, line 305: warning: implicit function declaration: __builtin_expect
<br>
&nbsp;&nbsp;&nbsp;conftest.o: In function `main':
<br>
&nbsp;&nbsp;&nbsp;conftest.c:(.text+0x35): undefined reference to `__builtin_expect'
<br>
<p>&nbsp;&nbsp;&nbsp;configure:49272: checking if C++ compiler and POSIX threads work with -lpthread
<br>
&nbsp;&nbsp;&nbsp;configure:49328: CC -o conftest -O -DNDEBUG    conftest.cpp -lnsl -lutil  -lm -lpthread &gt;&amp;5
<br>
&nbsp;&nbsp;&nbsp;&quot;conftest.cpp&quot;, line 305: Error: The function &quot;__builtin_expect&quot; must have a prototype.
<br>
&nbsp;&nbsp;&nbsp;1 Error(s) detected.
<br>
<p>&nbsp;&nbsp;&nbsp;configure:49572: checking if F77 compiler and POSIX threads work with -lpthread
<br>
&nbsp;&nbsp;&nbsp;configure:49654: cc -O -DNDEBUG  -I. -c conftest.c
<br>
&nbsp;&nbsp;&nbsp;&quot;conftest.c&quot;, line 15: warning: can not set non-default alignment for automatic variable
<br>
&nbsp;&nbsp;&nbsp;&quot;conftest.c&quot;, line 15: warning: implicit function declaration: __builtin_expect
<br>
&nbsp;&nbsp;&nbsp;configure:49661: $? = 0
<br>
&nbsp;&nbsp;&nbsp;configure:49671: f77  conftestf.f conftest.o -o conftest  -lnsl -lutil  -lm -lpthread
<br>
&nbsp;&nbsp;&nbsp;NOTICE: Invoking /apps/compilers/sunstudio/12_200709/1/sunstudio12/bin/f90 -f77 -ftrap=%none conftestf.f conftest.o -o conftest -lnsl -lutil -lm -lpthread
<br>
&nbsp;&nbsp;&nbsp;conftestf.f:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MAIN fpthread:
<br>
&nbsp;&nbsp;&nbsp;conftest.o: In function `pthreadtest_':
<br>
&nbsp;&nbsp;&nbsp;conftest.c:(.text+0x41): undefined reference to `__builtin_expect'
<br>
<p>Any ideas?
<br>
<p>Cheers,
<br>
<p>Mark
<br>
<pre>
-- 
-----------------------------------------------------------------
Mark Dixon                       Email    : m.c.dixon_at_[hidden]
HPC/Grid Systems Support         Tel (int): 35429
Information Systems Services     Tel (ext): +44(0)113 343 5429
University of Leeds, LS2 9JT, UK
-----------------------------------------------------------------

</pre>
<hr>
<ul>
<li>APPLICATION/OCTET-STREAM attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6179/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6180.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6183.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="6183.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
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
