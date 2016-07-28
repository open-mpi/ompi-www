<?
$subject_val = "Re: [OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 12:03:02 2008" -->
<!-- isoreceived="20080424160302" -->
<!-- sent="Thu, 24 Apr 2008 08:57:01 -0700" -->
<!-- isosent="20080424155701" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install intel mac with Laopard" -->
<!-- id="65E7C199-A5D2-4EB0-AD21-5FA4B12E6298_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9AAF3F3F-C68B-432F-A20C-F15B7084923F_at_cisco.com" -->
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
<strong>Date:</strong> 2008-04-24 11:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5504.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5502.php">Ralph H Castain: "Re: [OMPI users] Proper use of sigaction in Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>For the specific problem of the gcc compiler creating i386 objects  
<br>
and ifort creating x86_64 objects, in the config.log file it says
<br>
<p>configure:26935: ifort -o conftest conftest.f conftest_c.o &gt;&amp;% ld:  
<br>
warning in conftest_c.o, file is not of required architecture
<br>
<p>If configure could pick up on this and write an error message  
<br>
something like &quot;Your C and fortran compilers are creating objects for  
<br>
different architectures. You probably need to change your CFLAG or  
<br>
FFLAG arguments to ensure that they are consistent&quot; it would point  
<br>
the user more directly to the real problem. Right now the information  
<br>
is in the config.log file but it doesn't jump out at you.
<br>
<p>Doug Reeder
<br>
On Apr 24, 2008, at 8:40 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 24, 2008, at 11:07 AM, Doug Reeder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Make sure that your compilers are all creaqting code for the same
</span><br>
<span class="quotelev2">&gt;&gt; architecture (i386 or x86-64). ifort usually installs such that the
</span><br>
<span class="quotelev2">&gt;&gt; 64 bit version of the compiler is the dfault while the apple gcc
</span><br>
<span class="quotelev2">&gt;&gt; compiler creates i386 output by default. Check the architecture of
</span><br>
<span class="quotelev2">&gt;&gt; the .o files with file *.o and if the gcc output needs to be x86_64
</span><br>
<span class="quotelev2">&gt;&gt; add the -m64 flag to the c and c++ flags. That has worked for me.
</span><br>
<span class="quotelev2">&gt;&gt; You shouldn't need the intel c/c++ compilers. I find the configure
</span><br>
<span class="quotelev2">&gt;&gt; error message to be a little bit cryptic and not very insightful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a suggestion for a new configure error message?  I thought
</span><br>
<span class="quotelev1">&gt; it was very clear, but then again, I'm one of the implementors...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C and Fortran 77 are link compatible... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******************************************************************** 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * It appears that your Fortran 77 compiler is unable to link against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * object files created by your C compiler.  This generally indicates
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * either a conflict between the options specified in CFLAGS and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * or a problem with the local compiler installation.  More
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * compilers and what error resulted when the commands were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executed) is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * available in the config.log file in this directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******************************************************************** 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: C and Fortran 77 compilers are not link  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compatible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can not continue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5504.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5502.php">Ralph H Castain: "Re: [OMPI users] Proper use of sigaction in Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
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
