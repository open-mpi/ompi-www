<?
$subject_val = "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 08:08:35 2008" -->
<!-- isoreceived="20080729120835" -->
<!-- sent="Tue, 29 Jul 2008 08:07:39 -0400" -->
<!-- isosent="20080729120739" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio" -->
<!-- id="4C9ED63A-DC44-41F3-8491-E4A7CBD13824_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.GSO.1.10.0807290949540.17996_at_sunserv2" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 08:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6184.php">Kozin, I \(Igor\): "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6179.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6185.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="6185.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6246.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 29, 2008, at 6:52 AM, Mark Dixon wrote:
<br>
<p><span class="quotelev2">&gt;&gt; FWIW: I compile with PGI 7.1.4 regularly on RHEL4U4 and don't see  
</span><br>
<span class="quotelev2">&gt;&gt; this problem.  It would be interesting to see the config.log's from  
</span><br>
<span class="quotelev2">&gt;&gt; these builds to see the actual details of what went wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Jeff: it's good to know it's just me ;)
</span><br>
<p>:-)
<br>
<p><span class="quotelev1">&gt; Following your message, I've tried building with PGI on a few systems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler      OS                   Result
</span><br>
<span class="quotelev1">&gt; ============  ===================  ============
</span><br>
<span class="quotelev1">&gt; 32-bit 7.1.6  CentOS 5.2 (32-bit)  no threading
</span><br>
<span class="quotelev1">&gt; 32-bit 7.1.4  CentOS 5.2 (32-bit)  no threading  **config.log  
</span><br>
<span class="quotelev1">&gt; attached**
</span><br>
<span class="quotelev1">&gt; 32-bit 7.1.4  RHEL4u6 (64-bit)     works!
</span><br>
<span class="quotelev1">&gt; 32-bit 7.1.4  CentOS 5.1 (64-bit)  no threading
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each time it fails, it's because of &quot;__builtin_expect&quot; being  
</span><br>
<span class="quotelev1">&gt; undefined for pgcc and pgf77 (works for pgcpp) - or any of the Sun  
</span><br>
<span class="quotelev1">&gt; Studio compilers. Could this be a glibc 2.3 (RHEL4) vs. 2.5  
</span><br>
<span class="quotelev1">&gt; (CentOS5) issue?
</span><br>
<p>I'm afraid this one is out of my bailiwick -- I don't know.  Looking  
<br>
through your config.log file, it does look like this lack of  
<br>
__builtin_expect is the killer.  FWIW, here's my configure output when  
<br>
I run with pgcc v7.1.4:
<br>
<p>checking if C compiler and POSIX threads work as is... no
<br>
checking if C++ compiler and POSIX threads work as is... no
<br>
checking if C compiler and POSIX threads work with -Kthread... no
<br>
checking if C compiler and POSIX threads work with -kthread... no
<br>
checking if C compiler and POSIX threads work with -pthread... no
<br>
checking if C compiler and POSIX threads work with -pthreads... no
<br>
checking if C compiler and POSIX threads work with -mt... no
<br>
checking if C compiler and POSIX threads work with -mthreads... no
<br>
checking if C++ compiler and POSIX threads work with -Kthread... no
<br>
checking if C++ compiler and POSIX threads work with -kthread... no
<br>
checking if C++ compiler and POSIX threads work with -pthread... no
<br>
checking if C++ compiler and POSIX threads work with -pthreads... no
<br>
checking if C++ compiler and POSIX threads work with -mt... no
<br>
checking if C++ compiler and POSIX threads work with -mthreads... no
<br>
checking if C compiler and POSIX threads work with -lpthreads... no
<br>
checking if C compiler and POSIX threads work with -llthread... no
<br>
checking if C compiler and POSIX threads work with -lpthread... yes
<br>
checking if C++ compiler and POSIX threads work with -lpthread... yes
<br>
<p>I suggest that you bring this issue up with PGI support; they're  
<br>
fairly responsive on their web forums.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6184.php">Kozin, I \(Igor\): "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6179.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6185.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="6185.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6246.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
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
