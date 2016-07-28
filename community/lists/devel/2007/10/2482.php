<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 17:43:59 2007" -->
<!-- isoreceived="20071022214359" -->
<!-- sent="Mon, 22 Oct 2007 17:43:50 -0400" -->
<!-- isosent="20071022214350" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] updating libevent" -->
<!-- id="DCB3AB32-6608-4F5B-8385-E04B5D6BC4A2_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-22 17:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2483.php">Jeff Squyres: "Re: [OMPI devel] using opal_event's versus btl_progress?"</a>
<li><strong>Previous message:</strong> <a href="2481.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: at the Paris meeting, George and I started looking into updating  
<br>
our version of libevent for a variety of reasons:
<br>
<p>- better performance, especially with respect to signal re-computations
<br>
- less calls to gettimeofday
<br>
- various other minor improvements
<br>
<p>However, we found out that recent versions of libevent now include  
<br>
non-blocking DNS and HTTP clients, which we certainly don't need in  
<br>
OMPI.
<br>
But per a recent mail on the libevent mailing list (http:// 
<br>
monkeymail.org/archives/libevent-users/2007-October/000846.html), the  
<br>
DNS and HTTP functionality is due to be split out into separate  
<br>
libraries, allowing us to import/update only the stuff we care about  
<br>
(fd and signal handling).
<br>
<p>The estimate is that this new release will be in about 2 weeks.  So  
<br>
George and I will likely throw out what we did so far to get the  
<br>
newest / greatest stuff from libevent and be able to easily ignore  
<br>
all the stuff we don't want (DNS and HTTP gorp) once this split is  
<br>
done and the new libevent is released.
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
<li><strong>Next message:</strong> <a href="2483.php">Jeff Squyres: "Re: [OMPI devel] using opal_event's versus btl_progress?"</a>
<li><strong>Previous message:</strong> <a href="2481.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
