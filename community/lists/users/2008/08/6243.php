<?
$subject_val = "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 06:24:15 2008" -->
<!-- isoreceived="20080801102415" -->
<!-- sent="Fri, 1 Aug 2008 11:24:06 +0100 (BST)" -->
<!-- isosent="20080801102406" -->
<!-- name="Mark Dixon" -->
<!-- email="m.c.dixon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio" -->
<!-- id="alpine.GSO.1.10.0808011116360.12449_at_sunserv2" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C9ED63A-DC44-41F3-8491-E4A7CBD13824_at_cisco.com" -->
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
<strong>From:</strong> Mark Dixon (<em>m.c.dixon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-01 06:24:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6244.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="../../2008/07/6242.php">Adam C Powell IV: "[OMPI users] orterun, orted, and chroot"</a>
<li><strong>In reply to:</strong> <a href="../../2008/07/6180.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 29 Jul 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 29, 2008, at 6:52 AM, Mark Dixon wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I compile with PGI 7.1.4 regularly on RHEL4U4 and don't see this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem.  It would be interesting to see the config.log's from these 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; builds to see the actual details of what went wrong.
</span><br>
...
<br>
<span class="quotelev2">&gt;&gt; Compiler      OS                   Result
</span><br>
<span class="quotelev2">&gt;&gt; ============  ===================  ============
</span><br>
<span class="quotelev2">&gt;&gt; 32-bit 7.1.6  CentOS 5.2 (32-bit)  no threading
</span><br>
<span class="quotelev2">&gt;&gt; 32-bit 7.1.4  CentOS 5.2 (32-bit)  no threading  **config.log attached**
</span><br>
<span class="quotelev2">&gt;&gt; 32-bit 7.1.4  RHEL4u6 (64-bit)     works!
</span><br>
<span class="quotelev2">&gt;&gt; 32-bit 7.1.4  CentOS 5.1 (64-bit)  no threading
</span><br>
...
<br>
<span class="quotelev1">&gt; I'm afraid this one is out of my bailiwick -- I don't know.  Looking through 
</span><br>
<span class="quotelev1">&gt; your config.log file, it does look like this lack of __builtin_expect is the 
</span><br>
<span class="quotelev1">&gt; killer.  FWIW, here's my configure output when I run with pgcc v7.1.4:
</span><br>
...
<br>
<span class="quotelev1">&gt; I suggest that you bring this issue up with PGI support; they're fairly 
</span><br>
<span class="quotelev1">&gt; responsive on their web forums.
</span><br>
...
<br>
<p>In case anyone's interested, the fix is to upgrade to at least PGI 7.2-2.
<br>
<p>It seems that there was a change to glibc between RHEL4 and RHEL5 (2.3 vs. 
<br>
2.5) which requires __builtin_expect to be defined when using certain 
<br>
pthread library functions.
<br>
<p>This also appears to be a problem for the Sun Studio 12 compiler (bug id 
<br>
6603861), but it would seem that Sun's not in a hurry to fix it.
<br>
<p>Thanks for your time,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6244.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="../../2008/07/6242.php">Adam C Powell IV: "[OMPI users] orterun, orted, and chroot"</a>
<li><strong>In reply to:</strong> <a href="../../2008/07/6180.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
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
