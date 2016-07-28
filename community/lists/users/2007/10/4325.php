<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 10:58:24 2007" -->
<!-- isoreceived="20071025145824" -->
<!-- sent="Thu, 25 Oct 2007 10:58:23 -0400 (EDT)" -->
<!-- isosent="20071025145823" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] xcode and ompi" -->
<!-- id="Pine.LNX.4.64.0710251055460.9690_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4F9EA32D-80A1-40DD-AD62-6E609C3FFE16_at_umich.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 10:58:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4324.php">Dirk Eddelbuettel: "[OMPI users] Solved! (Was:  Cannot suppress openib error message)"</a>
<li><strong>In reply to:</strong> <a href="4259.php">Tony Sheh: "[OMPI users] xcode and ompi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 21 Oct 2007, Tony Sheh wrote:
<br>
<p><span class="quotelev1">&gt; I'm working in xcode and i'm trying to build an application that
</span><br>
<span class="quotelev1">&gt; links against the OMPI libraries. So far i've included the following
</span><br>
<span class="quotelev1">&gt; files in the build:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi.dylib
</span><br>
<span class="quotelev1">&gt; libopen-pal.dylib
</span><br>
<span class="quotelev1">&gt; libopen-rte.dylib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the errors i get are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt; .... all the MPI functions you can think of......
</span><br>
<p><p>Can you copy the link line that XCode invoked as well as the actual error 
<br>
message?  It's likely that the link line is just incorrect for some 
<br>
reason.  Another option is to have XCode just invoke the MPI wrapper 
<br>
compilers instead of trying to figure out all the right magic.  There's an 
<br>
unsupported FAQ on doing this on our web page:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=osx#xcode">http://www.open-mpi.org/faq/?category=osx#xcode</a>
<br>
<p>Good luck,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4324.php">Dirk Eddelbuettel: "[OMPI users] Solved! (Was:  Cannot suppress openib error message)"</a>
<li><strong>In reply to:</strong> <a href="4259.php">Tony Sheh: "[OMPI users] xcode and ompi"</a>
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
