<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 08:36:57 2006" -->
<!-- isoreceived="20060526123657" -->
<!-- sent="Fri, 26 May 2006 08:36:16 -0400" -->
<!-- isosent="20060526123616" -->
<!-- name="Terry Reeves" -->
<!-- email="reeves.2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support (g95) not installing" -->
<!-- id="1C385748-D5CD-40E6-B665-713016976EC3_at_osu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3949.1148641316.3459.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Reeves (<em>reeves.2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 08:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1314.php">John Robinson: "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Previous message:</strong> <a href="1312.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1327.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support (g95) not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1327.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support (g95) not installing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually there was further output. I've done this too many times and  
<br>
I didn't verify that make.out ended where my screen output ended. I  
<br>
have included make.out with the extra error messages appended.  
<br>
Meanwhile I'm going to try using fink as someone suggested g9 from  
<br>
that route might work.
<br>
<p>&#239;&#191;&#188;
<br>
<p>On 26 May, 2006, at 7:01 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Thu, 25 May 2006 22:27:11 -0600
</span><br>
<span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Fortran support not installing
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;B65A2D49-8E41-4011-874A-BEBBC0442719_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last line of your make.out file was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 90 &gt; mpi-f90-interfaces.h
</span><br>
<span class="quotelev1">&gt; ***************************************************************
</span><br>
<span class="quotelev1">&gt; * Compiling the mpi.f90 file may take a few minutes.
</span><br>
<span class="quotelev1">&gt; * This is quite normal -- do not be alarmed if the compile
</span><br>
<span class="quotelev1">&gt; * process seems to 'hang' at this point for several minutes.
</span><br>
<span class="quotelev1">&gt; ***************************************************************
</span><br>
<span class="quotelev1">&gt; g95 -I../../../ompi/include -I. -I.  -c -I. -o mpi.o  mpi.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was there some other output not included in the file?  If nothing
</span><br>
<span class="quotelev1">&gt; happened for a while, don't assume it failed.  That file takes a
</span><br>
<span class="quotelev1">&gt; very, very long time to compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>--------------------------------------------------------
<br>
Terry Reeves 2-1013 - reeves.2_at_[hidden]
<br>
Computing Services
<br>
Office of Information Technology
<br>
The Ohio State University
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1313/ompi1.1a7-output.tar.gz">ompi1.1a7-output.tar.gz</a>
</ul>
<!-- attachment="ompi1.1a7-output.tar.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1313/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1314.php">John Robinson: "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Previous message:</strong> <a href="1312.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1327.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support (g95) not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1327.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support (g95) not installing"</a>
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
