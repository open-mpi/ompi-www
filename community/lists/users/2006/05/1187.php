<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 00:19:24 2006" -->
<!-- isoreceived="20060502041924" -->
<!-- sent="Tue, 2 May 2006 00:19:17 -0400" -->
<!-- isosent="20060502041917" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran mpi io malloc error" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7A796B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] fortran mpi io malloc error" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-02 00:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1188.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<li><strong>Previous message:</strong> <a href="1186.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1164.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1193.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you run this program through a debugger and see if you can produce a
<br>
backtrace where the error is occurring?  (the OSX error message suggests
<br>
putting a breakpoint in &quot;szone_debug&quot; to track it down)
<br>
<p>It looks like it's trying to malloc a massive amount of memory, which
<br>
shouldn't be happening.  Hopefully, this should be something easy to
<br>
track down -- but first we need to know where it is happening.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Bernard Knaepen
</span><br>
<span class="quotelev1">&gt; Sent: Monday, May 01, 2006 3:20 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] fortran mpi io malloc error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am in fact trying to use Open Mpi. In order to prepare my previous
</span><br>
<span class="quotelev1">&gt; email, I saved the different outputs but from the wrong
</span><br>
<span class="quotelev1">&gt; directory...sorry!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I attached here the correct files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also made sure today I am not mixing LAM/MPI and Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Bernard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/1/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 28, 2006, at 1:39 PM, Bernard Knaepen wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am trying to install/run open-mpi on a Macbook Pro 
</span><br>
<span class="quotelev1">&gt; running MacOSX
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 10.4.6, *with* fortran support.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using Intel Fortran Compiler 9.1 (professional edition).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Compilation/installation went fine, except that the ifort 
</span><br>
<span class="quotelev1">&gt; compiler was
</span><br>
<span class="quotelev3">&gt; &gt; &gt; not recognized as the f90 compiler by the romio configure script.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Therefore, I explicitely set the F90 compiler to ifort in 
</span><br>
<span class="quotelev1">&gt; the romio
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure script.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you trying to use Open MPI or LAM/MPI?  You said Open 
</span><br>
<span class="quotelev1">&gt; MPI in your
</span><br>
<span class="quotelev2">&gt; &gt; mail, but all the attached files were for LAM/MPI.  You 
</span><br>
<span class="quotelev1">&gt; might want to
</span><br>
<span class="quotelev2">&gt; &gt; make sure you aren't mixing the two when trying to build your
</span><br>
<span class="quotelev2">&gt; &gt; application -- using mpi.h from LAM/MPI and the libraries from Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI (or building against one and running against the other) would
</span><br>
<span class="quotelev2">&gt; &gt; result in bad things happening.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1188.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<li><strong>Previous message:</strong> <a href="1186.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1164.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1193.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
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
