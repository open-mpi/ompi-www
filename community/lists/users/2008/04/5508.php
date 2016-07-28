<?
$subject_val = "Re: [OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 13:18:02 2008" -->
<!-- isoreceived="20080424171802" -->
<!-- sent="Thu, 24 Apr 2008 10:12:06 -0700" -->
<!-- isosent="20080424171206" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install intel mac with Laopard" -->
<!-- id="36AFED7E-DCD9-4433-9D1C-E5A5EB03EF1F_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6B1EBEF0-AE47-4D2B-A7EA-A4ED37DDC03D_at_cisco.com" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 13:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5509.php">Danesh Daroui: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5507.php">Steven Truong: "[OMPI users] Openmpi (VASP): Signal code: Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5515.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5515.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I don't know if it there is a way to capture the &quot;not of required  
<br>
architecture&quot; response and add it to the error message. I agree that  
<br>
the current error message captures the problem in broad terms and  
<br>
points to the config.log file. It is just not very specific. If the  
<br>
architecture problem can't be added to the error message then I   
<br>
think we are stuck with what we have. If that is the case is it  
<br>
worthwhile to add this to the FAQ for building openmpi.
<br>
<p>Doug
<br>
On Apr 24, 2008, at 9:34 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 24, 2008, at 12:24 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are so many special errors that are compiler and operating
</span><br>
<span class="quotelev2">&gt;&gt; system dependent that there is no way to handle each of them
</span><br>
<span class="quotelev2">&gt;&gt; specifically. And even if it was possible, I will not use autoconf
</span><br>
<span class="quotelev2">&gt;&gt; if the resulting configure file was 100MB ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically, the error messages in config.log are mostly written
</span><br>
<span class="quotelev1">&gt; by the compiler/linker (i.e., redirect stdout/stderr from the command
</span><br>
<span class="quotelev1">&gt; line to config.log). We don't usually modify that -- the Autoconf Way
</span><br>
<span class="quotelev1">&gt; is that Autoconf is 100% responsible for config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, I think the error message is more than clear. It
</span><br>
<span class="quotelev2">&gt;&gt; clearly state that the problem is coming from a mismatch between the
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS and FFLAGS. There is even a hint that one has to look in
</span><br>
<span class="quotelev2">&gt;&gt; config.log to find the real cause...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As George specifies, the stdout from configure is what we can most
</span><br>
<span class="quotelev1">&gt; directly affect, and that's why we chose to output this message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; * It appears that your Fortran 77 compiler is unable to link against
</span><br>
<span class="quotelev1">&gt; * object files created by your C compiler.  This generally indicates
</span><br>
<span class="quotelev1">&gt; * either a conflict between the options specified in CFLAGS and FFLAGS
</span><br>
<span class="quotelev1">&gt; * or a problem with the local compiler installation.  More
</span><br>
<span class="quotelev1">&gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev1">&gt; * compilers and what error resulted when the commands were  
</span><br>
<span class="quotelev1">&gt; executed) is
</span><br>
<span class="quotelev1">&gt; * available in the config.log file in this directory.
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI doesn't know *why* the test link failed; we just know that it
</span><br>
<span class="quotelev1">&gt; failed.  I agree with George that trying to put in compiler-specific
</span><br>
<span class="quotelev1">&gt; stdout/stderr analysis is a black hole that would be extraordinarily
</span><br>
<span class="quotelev1">&gt; difficult.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any suggestions for re-wording this message?  That's
</span><br>
<span class="quotelev1">&gt; probably the best that we can do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2008, at 11:57 AM, Doug Reeder wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the specific problem of the gcc compiler creating i386 objects
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and ifort creating x86_64 objects, in the config.log file it says
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:26935: ifort -o conftest conftest.f conftest_c.o &gt;&amp;% ld:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning in conftest_c.o, file is not of required architecture
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If configure could pick up on this and write an error message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something like &quot;Your C and fortran compilers are creating objects  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different architectures. You probably need to change your CFLAG or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAG arguments to ensure that they are consistent&quot; it would point
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the user more directly to the real problem. Right now the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is in the config.log file but it doesn't jump out at you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 24, 2008, at 8:40 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 24, 2008, at 11:07 AM, Doug Reeder wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Make sure that your compilers are all creaqting code for the same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; architecture (i386 or x86-64). ifort usually installs such that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 64 bit version of the compiler is the dfault while the apple gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compiler creates i386 output by default. Check the architecture of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the .o files with file *.o and if the gcc output needs to be  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; add the -m64 flag to the c and c++ flags. That has worked for me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You shouldn't need the intel c/c++ compilers. I find the configure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error message to be a little bit cryptic and not very insightful.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you have a suggestion for a new configure error message?  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thought
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it was very clear, but then again, I'm one of the implementors...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; checking if C and Fortran 77 are link compatible... no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ***************************************************************** 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * It appears that your Fortran 77 compiler is unable to link
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; against
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * object files created by your C compiler.  This generally
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; indicates
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * either a conflict between the options specified in CFLAGS and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FFLAGS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * or a problem with the local compiler installation.  More
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * compilers and what error resulted when the commands were
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; executed) is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * available in the config.log file in this directory.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ***************************************************************** 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; configure: error: C and Fortran 77 compilers are not link
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compatible.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can not continue.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5509.php">Danesh Daroui: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5507.php">Steven Truong: "[OMPI users] Openmpi (VASP): Signal code: Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5515.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5515.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
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
