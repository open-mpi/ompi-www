<?
$subject_val = "[OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  5 04:53:14 2008" -->
<!-- isoreceived="20080405085314" -->
<!-- sent="Sat, 05 Apr 2008 01:53:13 -0700" -->
<!-- isosent="20080405085313" -->
<!-- name="Karol Mroz" -->
<!-- email="mroz.karol_at_[hidden]" -->
<!-- subject="[OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="47F73DF9.20500_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Build failure on FreeBSD 7<br>
<strong>From:</strong> Karol Mroz (<em>mroz.karol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-05 04:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3668.php">Manuel Prinz: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3666.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3703.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3703.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After digging a little deeper, it turns out that the kevent() call in
<br>
opal/event/kquene.c:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (kevent(kq,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kqueueop-&gt;changes, 1, kqueueop-&gt;events, NEVENT, NULL) != 1 ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int)kqueueop-&gt;events[0].ident != master ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kqueueop-&gt;events[0].flags != EV_ERROR) {
<br>
<p>seems to hang in freebsd 7. Changing the NULL parameter to, lets say
<br>
1000, causes the function to return and print out the error message:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event_warn(&quot;%s: detected broken kqueue (failed delete); not 		 	using 
<br>
error %d (%s)&quot;, __func__, errno, strerror(errno));
<br>
<p>The simple non-blocking send/recv app used to test this then runs to
<br>
completion. Compiling OpenMPI on linux and running this same app
<br>
produces no errors.
<br>
<p>Any ideas?
<br>
<p>Thanks.
<br>
<pre>
-- 
Karol
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3668.php">Manuel Prinz: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3666.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3703.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3703.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
