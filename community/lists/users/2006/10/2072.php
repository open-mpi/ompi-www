<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 27 11:10:20 2006" -->
<!-- isoreceived="20061027151020" -->
<!-- sent="Fri, 27 Oct 2006 11:10:04 -0400" -->
<!-- isosent="20061027151004" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how do i link to .la library files?" -->
<!-- id="8d39cca0610270810w548184edqdf01d8037489b036_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20061027150424.89945.qmail_at_web30314.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-27 11:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2073.php">Jeff Squyres: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Previous message:</strong> <a href="2071.php">shane kennedy: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>In reply to:</strong> <a href="2071.php">shane kennedy: "Re: [OMPI users] how do i link to .la library files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2073.php">Jeff Squyres: "Re: [OMPI users] how do i link to .la library files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To take care of the runtime errors you just need to do the following in a
<br>
bash shell.
<br>
$ export LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/usr/local/lib
<br>
If you used &quot;./configure --prefix=/some/other/prefix&quot;, then replace
<br>
&quot;/usr/local/lib&quot;
<br>
with &quot;/some/other/prefix/lib&quot;.
<br>
<p>If you just add this to your .bashrc you should be fine.  The other options,
<br>
assuming
<br>
root access is to just add the lib directory to /etc/ld.so.conf and rerun
<br>
ldconfig on
<br>
all machines.  This will have the same effect, albeit for all users.
<br>
<p>-Justin.
<br>
<p>On 10/27/06, shane kennedy &lt;kennedy_shane_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you for your reply.  i am using mpicc/mpif90.  i
</span><br>
<span class="quotelev1">&gt; am able to successfully compile, but during execution
</span><br>
<span class="quotelev1">&gt; i receive an &quot;error while loading shared libraries.&quot;
</span><br>
<span class="quotelev1">&gt; i tried compiling/linking w/ -static flag to overcome
</span><br>
<span class="quotelev1">&gt; the shared library error.  however, linking w/ -static
</span><br>
<span class="quotelev1">&gt; gives me an error of &quot;ld: cannot find -lmpi.&quot;  i do
</span><br>
<span class="quotelev1">&gt; not have a libmpi.a file.  i do have a libmpi.la file
</span><br>
<span class="quotelev1">&gt; but don't know how to link to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you,
</span><br>
<span class="quotelev1">&gt; shane
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Easiest method is just to use the &quot;mpicc&quot; command to
</span><br>
<span class="quotelev2">&gt; &gt; compile your code. It
</span><br>
<span class="quotelev2">&gt; &gt; will automatically link you to the right libraries,
</span><br>
<span class="quotelev2">&gt; &gt; include directories,
</span><br>
<span class="quotelev2">&gt; &gt; etc. You can check the $prefix/bin directory to see
</span><br>
<span class="quotelev2">&gt; &gt; all the compiler
</span><br>
<span class="quotelev2">&gt; &gt; wrappers we provide.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 10/26/06 7:12 AM, &quot;shane kennedy&quot;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;kennedy_shane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i'm not a developer &amp; am used to linking to
</span><br>
<span class="quotelev2">&gt; &gt; libraries
</span><br>
<span class="quotelev3">&gt; &gt; &gt; using the -l flag.  this only appears to work for
</span><br>
<span class="quotelev2">&gt; &gt; .a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; files.  openmpi generates .la files.  how do i
</span><br>
<span class="quotelev2">&gt; &gt; link
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the these?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; __________________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do You Yahoo!?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tired of spam?  Yahoo! Mail has the best spam
</span><br>
<span class="quotelev2">&gt; &gt; protection around
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2072/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2073.php">Jeff Squyres: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Previous message:</strong> <a href="2071.php">shane kennedy: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>In reply to:</strong> <a href="2071.php">shane kennedy: "Re: [OMPI users] how do i link to .la library files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2073.php">Jeff Squyres: "Re: [OMPI users] how do i link to .la library files?"</a>
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
