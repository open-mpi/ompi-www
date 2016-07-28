<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 00:27:46 2006" -->
<!-- isoreceived="20060526042746" -->
<!-- sent="Thu, 25 May 2006 22:27:11 -0600" -->
<!-- isosent="20060526042711" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support not installing" -->
<!-- id="B65A2D49-8E41-4011-874A-BEBBC0442719_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="450C0302-B143-43BF-B4E1-3193EFBDCDF3_at_osu.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 00:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1306.php">imran shaik: "[OMPI users] Thread Safety"</a>
<li><strong>Previous message:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>In reply to:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The last line of your make.out file was:
<br>
<p>90 &gt; mpi-f90-interfaces.h
<br>
***************************************************************
<br>
* Compiling the mpi.f90 file may take a few minutes.
<br>
* This is quite normal -- do not be alarmed if the compile
<br>
* process seems to 'hang' at this point for several minutes.
<br>
***************************************************************
<br>
g95 -I../../../ompi/include -I. -I.  -c -I. -o mpi.o  mpi.f90
<br>
<p>Was there some other output not included in the file?  If nothing  
<br>
happened for a while, don't assume it failed.  That file takes a  
<br>
very, very long time to compile.
<br>
<p>Brian
<br>
<p>On May 25, 2006, at 1:46 PM, Terry Reeves wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 	I tried configure with FCFLAGS=-lSystemStubs and with both  
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-lSystemStubs and LDFLAGS=-lSystemStubs. Again it died  
</span><br>
<span class="quotelev1">&gt; during configure both times. I can provide configure output if  
</span><br>
<span class="quotelev1">&gt; desired.
</span><br>
<span class="quotelev1">&gt; 	I also decided to try version 1.1a7. With LDFLAGS=-lSystemStubs,  
</span><br>
<span class="quotelev1">&gt; with our without FCFLAGS=-lSystemStubs, ir gets through configure  
</span><br>
<span class="quotelev1">&gt; but fails in &quot;make all&quot;. Since that seems to be progress I have  
</span><br>
<span class="quotelev1">&gt; included that output.
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 25 May 2006 10:02:08 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Jeff Squyres \(jsquyres\)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Fortran support not installing
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; 	&lt;C835B9C9CB0F1C4E9DA48913C9E8F8AF8C42A1_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I actually had to set FCFLAGS, not LDFLAGS, to get arbitrary flags
</span><br>
<span class="quotelev2">&gt;&gt; passed down to the Fortran tests in configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try that?  (I'm not 100% sure -- you may need to specify  
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; *and* FCFLAGS...?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have made substantial improvements to the configure tests with
</span><br>
<span class="quotelev2">&gt;&gt; regards to the MPI F90 bindings in the upcoming 1.1 release.  Most of
</span><br>
<span class="quotelev2">&gt;&gt; the work is currently off in a temporary branch in our code  
</span><br>
<span class="quotelev2">&gt;&gt; repository
</span><br>
<span class="quotelev2">&gt;&gt; (meaning that it doesn't show up yet in the nightly trunk  
</span><br>
<span class="quotelev2">&gt;&gt; tarballs), but
</span><br>
<span class="quotelev2">&gt;&gt; it will hopefully be brought back to the trunk soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Terry Reeves 2-1013 - reeves.2_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computing Services
</span><br>
<span class="quotelev1">&gt; Office of Information Technology
</span><br>
<span class="quotelev1">&gt; The Ohio State University
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1306.php">imran shaik: "[OMPI users] Thread Safety"</a>
<li><strong>Previous message:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>In reply to:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
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
