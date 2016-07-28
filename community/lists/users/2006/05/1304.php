<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 19:48:24 2006" -->
<!-- isoreceived="20060525234824" -->
<!-- sent="Thu, 25 May 2006 15:46:37 -0400" -->
<!-- isosent="20060525194637" -->
<!-- name="Terry Reeves" -->
<!-- email="reeves.2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support not installing" -->
<!-- id="450C0302-B143-43BF-B4E1-3193EFBDCDF3_at_osu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3664.1148565741.3459.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-05-25 15:46:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1305.php">Brian Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1303.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1305.php">Brian Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Reply:</strong> <a href="1305.php">Brian Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I tried configure with FCFLAGS=-lSystemStubs and with both FCFLAGS=- 
<br>
lSystemStubs and LDFLAGS=-lSystemStubs. Again it died during  
<br>
configure both times. I can provide configure output if desired.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I also decided to try version 1.1a7. With LDFLAGS=-lSystemStubs,  
<br>
with our without FCFLAGS=-lSystemStubs, ir gets through configure but  
<br>
fails in &quot;make all&quot;. Since that seems to be progress I have included  
<br>
that output.
<br>
&#239;&#191;&#188;
<br>
<span class="quotelev1">&gt; Date: Thu, 25 May 2006 10:02:08 -0400
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres \(jsquyres\)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Fortran support not installing
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;C835B9C9CB0F1C4E9DA48913C9E8F8AF8C42A1_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I actually had to set FCFLAGS, not LDFLAGS, to get arbitrary flags
</span><br>
<span class="quotelev1">&gt; passed down to the Fortran tests in configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try that?  (I'm not 100% sure -- you may need to specify  
</span><br>
<span class="quotelev1">&gt; LDFLAGS
</span><br>
<span class="quotelev1">&gt; *and* FCFLAGS...?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have made substantial improvements to the configure tests with
</span><br>
<span class="quotelev1">&gt; regards to the MPI F90 bindings in the upcoming 1.1 release.  Most of
</span><br>
<span class="quotelev1">&gt; the work is currently off in a temporary branch in our code repository
</span><br>
<span class="quotelev1">&gt; (meaning that it doesn't show up yet in the nightly trunk  
</span><br>
<span class="quotelev1">&gt; tarballs), but
</span><br>
<span class="quotelev1">&gt; it will hopefully be brought back to the trunk soon.
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1304/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1304/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1304/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1305.php">Brian Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1303.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1305.php">Brian Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Reply:</strong> <a href="1305.php">Brian Barrett: "Re: [OMPI users] Fortran support not installing"</a>
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
