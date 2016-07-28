<?
$subject_val = "Re: [OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 11:41:03 2008" -->
<!-- isoreceived="20080424154103" -->
<!-- sent="Thu, 24 Apr 2008 11:40:13 -0400" -->
<!-- isosent="20080424154013" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install intel mac with Laopard" -->
<!-- id="9AAF3F3F-C68B-432F-A20C-F15B7084923F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0284BA99-F971-4F6B-B093-7D7B90FB83B0_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] install intel mac with Laopard<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 11:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5503.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5503.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2008, at 11:07 AM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Make sure that your compilers are all creaqting code for the same  
</span><br>
<span class="quotelev1">&gt; architecture (i386 or x86-64). ifort usually installs such that the  
</span><br>
<span class="quotelev1">&gt; 64 bit version of the compiler is the dfault while the apple gcc  
</span><br>
<span class="quotelev1">&gt; compiler creates i386 output by default. Check the architecture of  
</span><br>
<span class="quotelev1">&gt; the .o files with file *.o and if the gcc output needs to be x86_64  
</span><br>
<span class="quotelev1">&gt; add the -m64 flag to the c and c++ flags. That has worked for me.  
</span><br>
<span class="quotelev1">&gt; You shouldn't need the intel c/c++ compilers. I find the configure  
</span><br>
<span class="quotelev1">&gt; error message to be a little bit cryptic and not very insightful.
</span><br>
<p>Do you have a suggestion for a new configure error message?  I thought  
<br>
it was very clear, but then again, I'm one of the implementors...
<br>
<span class="quotelev2">&gt;&gt; checking if C and Fortran 77 are link compatible... no
</span><br>
<span class="quotelev2">&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; * It appears that your Fortran 77 compiler is unable to link against
</span><br>
<span class="quotelev2">&gt;&gt; * object files created by your C compiler.  This generally indicates
</span><br>
<span class="quotelev2">&gt;&gt; * either a conflict between the options specified in CFLAGS and  
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; * or a problem with the local compiler installation.  More
</span><br>
<span class="quotelev2">&gt;&gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev2">&gt;&gt; * compilers and what error resulted when the commands were  
</span><br>
<span class="quotelev2">&gt;&gt; executed) is
</span><br>
<span class="quotelev2">&gt;&gt; * available in the config.log file in this directory.
</span><br>
<span class="quotelev2">&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: C and Fortran 77 compilers are not link compatible.
</span><br>
<span class="quotelev2">&gt;&gt; Can not continue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5503.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5503.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
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
