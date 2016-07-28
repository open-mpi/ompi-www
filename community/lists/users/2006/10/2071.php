<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 27 11:04:35 2006" -->
<!-- isoreceived="20061027150435" -->
<!-- sent="Fri, 27 Oct 2006 08:04:24 -0700 (PDT)" -->
<!-- isosent="20061027150424" -->
<!-- name="shane kennedy" -->
<!-- email="kennedy_shane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how do i link to .la library files?" -->
<!-- id="20061027150424.89945.qmail_at_web30314.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C16613B7.5630%rhc_at_lanl.gov" -->
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
<strong>From:</strong> shane kennedy (<em>kennedy_shane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-27 11:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2072.php">Justin Bronder: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Previous message:</strong> <a href="2070.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>In reply to:</strong> <a href="2053.php">Ralph H Castain: "Re: [OMPI users] how do i link to .la library files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2072.php">Justin Bronder: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Reply:</strong> <a href="2072.php">Justin Bronder: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Reply:</strong> <a href="2073.php">Jeff Squyres: "Re: [OMPI users] how do i link to .la library files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thank you for your reply.  i am using mpicc/mpif90.  i
<br>
am able to successfully compile, but during execution
<br>
i receive an &quot;error while loading shared libraries.&quot; 
<br>
i tried compiling/linking w/ -static flag to overcome
<br>
the shared library error.  however, linking w/ -static
<br>
gives me an error of &quot;ld: cannot find -lmpi.&quot;  i do
<br>
not have a libmpi.a file.  i do have a libmpi.la file
<br>
but don't know how to link to it.
<br>
<p><p>thank you,
<br>
shane
<br>
<p><p><p><p>--- Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Easiest method is just to use the &quot;mpicc&quot; command to
</span><br>
<span class="quotelev1">&gt; compile your code. It
</span><br>
<span class="quotelev1">&gt; will automatically link you to the right libraries,
</span><br>
<span class="quotelev1">&gt; include directories,
</span><br>
<span class="quotelev1">&gt; etc. You can check the $prefix/bin directory to see
</span><br>
<span class="quotelev1">&gt; all the compiler
</span><br>
<span class="quotelev1">&gt; wrappers we provide.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/26/06 7:12 AM, &quot;shane kennedy&quot;
</span><br>
<span class="quotelev1">&gt; &lt;kennedy_shane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; i'm not a developer &amp; am used to linking to
</span><br>
<span class="quotelev1">&gt; libraries
</span><br>
<span class="quotelev2">&gt; &gt; using the -l flag.  this only appears to work for
</span><br>
<span class="quotelev1">&gt; .a
</span><br>
<span class="quotelev2">&gt; &gt; files.  openmpi generates .la files.  how do i
</span><br>
<span class="quotelev1">&gt; link
</span><br>
<span class="quotelev2">&gt; &gt; the these?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; __________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Do You Yahoo!?
</span><br>
<span class="quotelev2">&gt; &gt; Tired of spam?  Yahoo! Mail has the best spam
</span><br>
<span class="quotelev1">&gt; protection around
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2072.php">Justin Bronder: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Previous message:</strong> <a href="2070.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>In reply to:</strong> <a href="2053.php">Ralph H Castain: "Re: [OMPI users] how do i link to .la library files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2072.php">Justin Bronder: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Reply:</strong> <a href="2072.php">Justin Bronder: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Reply:</strong> <a href="2073.php">Jeff Squyres: "Re: [OMPI users] how do i link to .la library files?"</a>
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
