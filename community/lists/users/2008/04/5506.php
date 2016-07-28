<?
$subject_val = "Re: [OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 12:34:21 2008" -->
<!-- isoreceived="20080424163421" -->
<!-- sent="Thu, 24 Apr 2008 12:34:09 -0400" -->
<!-- isosent="20080424163409" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install intel mac with Laopard" -->
<!-- id="6B1EBEF0-AE47-4D2B-A7EA-A4ED37DDC03D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1E374CDA-6F15-4B78-86E0-3690C32E11E2_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-04-24 12:34:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5507.php">Steven Truong: "[OMPI users] Openmpi (VASP): Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5508.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5508.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5514.php">Koun SHIRAI: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2008, at 12:24 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; There are so many special errors that are compiler and operating  
</span><br>
<span class="quotelev1">&gt; system dependent that there is no way to handle each of them  
</span><br>
<span class="quotelev1">&gt; specifically. And even if it was possible, I will not use autoconf  
</span><br>
<span class="quotelev1">&gt; if the resulting configure file was 100MB ...
</span><br>
<p>More specifically, the error messages in config.log are mostly written  
<br>
by the compiler/linker (i.e., redirect stdout/stderr from the command  
<br>
line to config.log). We don't usually modify that -- the Autoconf Way  
<br>
is that Autoconf is 100% responsible for config.log.
<br>
<p><span class="quotelev1">&gt; Additionally, I think the error message is more than clear. It  
</span><br>
<span class="quotelev1">&gt; clearly state that the problem is coming from a mismatch between the  
</span><br>
<span class="quotelev1">&gt; CFLAGS and FFLAGS. There is even a hint that one has to look in  
</span><br>
<span class="quotelev1">&gt; config.log to find the real cause...
</span><br>
<p>As George specifies, the stdout from configure is what we can most  
<br>
directly affect, and that's why we chose to output this message:
<br>
<p>********************************************************************
<br>
* It appears that your Fortran 77 compiler is unable to link against
<br>
* object files created by your C compiler.  This generally indicates
<br>
* either a conflict between the options specified in CFLAGS and FFLAGS
<br>
* or a problem with the local compiler installation.  More
<br>
* information (including exactly what command was given to the
<br>
* compilers and what error resulted when the commands were executed) is
<br>
* available in the config.log file in this directory.
<br>
********************************************************************
<br>
<p>OMPI doesn't know *why* the test link failed; we just know that it  
<br>
failed.  I agree with George that trying to put in compiler-specific  
<br>
stdout/stderr analysis is a black hole that would be extraordinarily  
<br>
difficult.
<br>
<p>Do you have any suggestions for re-wording this message?  That's  
<br>
probably the best that we can do.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2008, at 11:57 AM, Doug Reeder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the specific problem of the gcc compiler creating i386 objects
</span><br>
<span class="quotelev2">&gt;&gt; and ifort creating x86_64 objects, in the config.log file it says
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:26935: ifort -o conftest conftest.f conftest_c.o &gt;&amp;% ld:
</span><br>
<span class="quotelev2">&gt;&gt; warning in conftest_c.o, file is not of required architecture
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If configure could pick up on this and write an error message
</span><br>
<span class="quotelev2">&gt;&gt; something like &quot;Your C and fortran compilers are creating objects for
</span><br>
<span class="quotelev2">&gt;&gt; different architectures. You probably need to change your CFLAG or
</span><br>
<span class="quotelev2">&gt;&gt; FFLAG arguments to ensure that they are consistent&quot; it would point
</span><br>
<span class="quotelev2">&gt;&gt; the user more directly to the real problem. Right now the information
</span><br>
<span class="quotelev2">&gt;&gt; is in the config.log file but it doesn't jump out at you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2008, at 8:40 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 24, 2008, at 11:07 AM, Doug Reeder wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Make sure that your compilers are all creaqting code for the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; architecture (i386 or x86-64). ifort usually installs such that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 64 bit version of the compiler is the dfault while the apple gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler creates i386 output by default. Check the architecture of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the .o files with file *.o and if the gcc output needs to be x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; add the -m64 flag to the c and c++ flags. That has worked for me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You shouldn't need the intel c/c++ compilers. I find the configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error message to be a little bit cryptic and not very insightful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have a suggestion for a new configure error message?  I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thought
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it was very clear, but then again, I'm one of the implementors...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking if C and Fortran 77 are link compatible... no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * It appears that your Fortran 77 compiler is unable to link  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; against
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * object files created by your C compiler.  This generally  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; indicates
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * either a conflict between the options specified in CFLAGS and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FFLAGS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * or a problem with the local compiler installation.  More
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * compilers and what error resulted when the commands were
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; executed) is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * available in the config.log file in this directory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configure: error: C and Fortran 77 compilers are not link
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compatible.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can not continue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5507.php">Steven Truong: "[OMPI users] Openmpi (VASP): Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5508.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5508.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5514.php">Koun SHIRAI: "Re: [OMPI users] install intel mac with Laopard"</a>
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
