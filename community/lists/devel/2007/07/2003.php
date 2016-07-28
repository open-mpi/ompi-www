<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 20:52:54 2007" -->
<!-- isoreceived="20070726005254" -->
<!-- sent="Wed, 25 Jul 2007 20:52:39 -0400" -->
<!-- isosent="20070726005239" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib btl / --enable-progress-threads" -->
<!-- id="FC8CDC81-8F39-413C-91F0-600717504E93_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 20:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2002.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that --enable-progress-threads with the openib btl is  
<br>
currently broken (i.e., it won't even compile).  I know that it  
<br>
doesn't run (because of other threading issues currently being worked  
<br>
on), but a broken compilation does prevent other kinds of testing.
<br>
<p>The problem is that the openib progress thread code was not updated  
<br>
with all the recent changes to the openib BTL (it makes reference to  
<br>
BTL_OPENIB_LP_QP and BTL_OPENIB_HP_QP).
<br>
<p>I'm going to just #if 0 this out for the moment so that it will  
<br>
compile, and put a big comment and opal_output warning if you try to  
<br>
run with the openib progress thread saying that we don't [yet] expect  
<br>
it to work.  :-)  We can fix the openib progress thread code as we go  
<br>
along and fix up other threading stuff.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2002.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
