<?
$subject_val = "Re: [OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 11:13:48 2008" -->
<!-- isoreceived="20080424151348" -->
<!-- sent="Thu, 24 Apr 2008 08:07:50 -0700" -->
<!-- isosent="20080424150750" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install intel mac with Laopard" -->
<!-- id="0284BA99-F971-4F6B-B093-7D7B90FB83B0_at_rain.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E7FD839BAFD8CA499213A6EE26F2368004C9EB_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2008-04-24 11:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5496.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make sure that your compilers are all creaqting code for the same  
<br>
architecture (i386 or x86-64). ifort usually installs such that the  
<br>
64 bit version of the compiler is the dfault while the apple gcc  
<br>
compiler creates i386 output by default. Check the architecture of  
<br>
the .o files with file *.o and if the gcc output needs to be x86_64  
<br>
add the -m64 flag to the c and c++ flags. That has worked for me. You  
<br>
shouldn't need the intel c/c++ compilers. I find the configure error  
<br>
message to be a little bit cryptic and not very insightful.
<br>
<p>Doug Reeder
<br>
On Apr 24, 2008, at 7:48 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; You probably want to use all the intel compilers, not just ifort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC=icc
</span><br>
<span class="quotelev1">&gt; CXX=icpc
</span><br>
<span class="quotelev1">&gt; FC=ifort
</span><br>
<span class="quotelev1">&gt; F77=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:   Koun SHIRAI [mailto:koun_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent:   Thursday, April 24, 2008 08:09 AM Eastern Standard Time
</span><br>
<span class="quotelev1">&gt; To:     Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject:        [OMPI users] install intel mac with Laopard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Dear Sir:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that this problem must be solved, and maybe some information
</span><br>
<span class="quotelev1">&gt; should be given in the archives.  But, I miss the right answer in my
</span><br>
<span class="quotelev1">&gt; searching area, so please allow me to repeat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to install openmpi-1.2.5 to a new xserve (Xeon) with Leopard.
</span><br>
<span class="quotelev1">&gt; Intel compiler is used for Fortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My options for configure was
</span><br>
<span class="quotelev1">&gt; CC=/usr/bin/gcc-4.0
</span><br>
<span class="quotelev1">&gt; CXX=/usr/bin/g++-4.0
</span><br>
<span class="quotelev1">&gt; F77=ifort
</span><br>
<span class="quotelev1">&gt; along with
</span><br>
<span class="quotelev1">&gt; --with-rsh=&quot;ssh -x&quot; --enable-shared --without-cs-fs --without-memory-
</span><br>
<span class="quotelev1">&gt; manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, I saw an error message.  This says
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking if C and Fortran 77 are link compatible... no
</span><br>
<span class="quotelev1">&gt; **********************************************************************
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
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; configure: error: C and Fortran 77 compilers are not link compatible.
</span><br>
<span class="quotelev1">&gt; Can not continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose that the problem is the default selection for the
</span><br>
<span class="quotelev1">&gt; architecture (32 or 64 bit).  I don't know the correct options.  Of
</span><br>
<span class="quotelev1">&gt; course, I like to use 64-bit architecture as far as it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------
</span><br>
<span class="quotelev1">&gt; Koun SHIRAI
</span><br>
<span class="quotelev1">&gt; Nanoscience and Nanotechnology Center
</span><br>
<span class="quotelev1">&gt; ISIR, Osaka University
</span><br>
<span class="quotelev1">&gt; 8-1, Mihogaoka, Ibaraki
</span><br>
<span class="quotelev1">&gt; Osaka 567-0047, JAPAN
</span><br>
<span class="quotelev1">&gt; PH: +81-6-6879-4302
</span><br>
<span class="quotelev1">&gt; FAX: +81-6-6879-8539
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5497/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5496.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
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
