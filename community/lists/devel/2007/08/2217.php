<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 16:18:15 2007" -->
<!-- isoreceived="20070824201815" -->
<!-- sent="Fri, 24 Aug 2007 16:18:09 -0400" -->
<!-- isosent="20070824201809" -->
<!-- name="Josh Aune" -->
<!-- email="luken_at_[hidden]" -->
<!-- subject="[OMPI devel] More memory troubles with vapi" -->
<!-- id="98a233180708241318y3f3063d7gb3a25afc2c0dc4f4_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Aune (<em>luken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 16:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Previous message:</strong> <a href="2216.php">Doug Tody: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Reply:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are using open-mpi on several 1000+ node clusters.  We received
<br>
several new clusters using the Infiniserve 3.X software stack recently
<br>
and are having several problems with the vapi btl (yes, I know, it is
<br>
very very old and shouldn't be used.  I couldn't agree with you more
<br>
but those are my marching orders).
<br>
<p>I have a new application that is running into swap for an unknown
<br>
reason.  If I run and force it to use the tcp btl I don't seem to run
<br>
into swap (the job just takes a very very long time).  I have tried
<br>
restricting the size of the free lists, forcing to use send mode, and
<br>
use an open-mpi compiled w/ no memory manager but nothing seems to
<br>
help.  I've profiled with valgrind --tool=massif and the memtrace
<br>
capabilities of ptmalloc but I don't have any smoking guns yet.  It is
<br>
a fortran app an I don't know anything about debugging fortran memory
<br>
problems, can someone point me in the proper direction?
<br>
<p>Thanks,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Previous message:</strong> <a href="2216.php">Doug Tody: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Reply:</strong> <a href="2218.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
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
