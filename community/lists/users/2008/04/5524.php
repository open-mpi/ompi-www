<?
$subject_val = "Re: [OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 13:10:56 2008" -->
<!-- isoreceived="20080425171056" -->
<!-- sent="Fri, 25 Apr 2008 10:10:46 -0700" -->
<!-- isosent="20080425171046" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install intel mac with Laopard" -->
<!-- id="AD6C0D01-D4DA-4EAE-BDAB-73F42966EDC0_at_apple.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.17.1209139207.3791.users_at_open-mpi.org" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 13:10:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5525.php">Michael: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5523.php">Doug Reeder: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Maybe in reply to:</strong> <a href="5483.php">Koun SHIRAI: "[OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Slightly off topic but hopefully useful...
<br>
<p>Just a little bit of trivia with the Intel Compilers on Mac OS X. One  
<br>
of the nuances about the Intel compilers, unlike GCC, are that they  
<br>
are two different compilers, a 64-bit compiler and a 32-bit compiler.  
<br>
The 64-bit compilers are installed under the CCE/FCE directory and the  
<br>
32-bit compilers are CC/FC. Prior to v10.1 the only way to switch  
<br>
between the 32-bit and 64-bit compilers was to run the supplied shell  
<br>
script to set the environment variables. However with v10.1, one can  
<br>
now execute the -m32 or -m64 flag for the Intel compilers as well,  
<br>
this makes it much easier to work with 32-bit or 64-bit builds!
<br>
<p><p>Warner Yuen
<br>
Scientific Computing
<br>
Consulting Engineer
<br>
Apple, Inc.
<br>
email: wyuen_at_[hidden]
<br>
<p>On Apr 25, 2008, at 9:00 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Fri, 25 Apr 2008 07:08:37 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] install intel mac with Laopard
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4559DCD6-4C21-44C2-BAE8-A711404EAFE9_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I should have been more specific: how about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; It appears that your Fortran 77 compiler is unable to link against
</span><br>
<span class="quotelev1">&gt; object files created by your C compiler.  This typically indicates
</span><br>
<span class="quotelev1">&gt; one of a few possibilities:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - A conflict between CFLAGS and FFLAGS
</span><br>
<span class="quotelev1">&gt;   - A problem with your compiler installation(s)
</span><br>
<span class="quotelev1">&gt;   - Different default build options between compilers (e.g., C
</span><br>
<span class="quotelev1">&gt;     building for 32 bit and Fortran building for 64 bit)
</span><br>
<span class="quotelev1">&gt;   - Incompatible compilers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Such problems can usually be solved by picking compatible compilers
</span><br>
<span class="quotelev1">&gt; and/or CFLAGS and FFLAGS.  More information (including exactly what
</span><br>
<span class="quotelev1">&gt; command was given to the compilers and what error resulted when the
</span><br>
<span class="quotelev1">&gt; commands were executed) is available in the config.log file in this
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2008, at 7:00 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about a compromise -- I'll extend the message to also include the
</span><br>
<span class="quotelev2">&gt;&gt; possibility of architecture mismatches.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5525.php">Michael: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5523.php">Doug Reeder: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Maybe in reply to:</strong> <a href="5483.php">Koun SHIRAI: "[OMPI users] install intel mac with Laopard"</a>
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
