<?
$subject_val = "Re: [OMPI devel] 3rd party code contributions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 11:24:29 2008" -->
<!-- isoreceived="20080208162429" -->
<!-- sent="Fri, 8 Feb 2008 10:24:18 -0600 (CST)" -->
<!-- isosent="20080208162418" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 3rd party code contributions" -->
<!-- id="Pine.LNX.4.64.0802081004540.14863_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3D1C592.452C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 3rd party code contributions<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 11:24:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3166.php">Christoph Niethammer: "[OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Previous message:</strong> <a href="3164.php">Jeff Squyres: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>In reply to:</strong> <a href="3162.php">Ralph Castain: "[OMPI devel] 3rd party code contributions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 8 Feb 2008, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 1. event library
</span><br>
<span class="quotelev1">&gt; 2. ROMIO
</span><br>
<span class="quotelev1">&gt; 3. VT
</span><br>
<span class="quotelev1">&gt; 4. backtrace
</span><br>
<span class="quotelev1">&gt; 5. PLPA - this one is a little less obvious, but still being released as a
</span><br>
<span class="quotelev1">&gt; separate package
</span><br>
<span class="quotelev1">&gt; 6. libNBC
</span><br>
<p>Sorry to Ralph, but I clipped everything from his e-mail, then am going to 
<br>
make references to it.  oh well :).
<br>
<p>One minor correction -- the entire backtrace framework is not a third 
<br>
party deal.  The *DARWIN/Mac OS X* component relies heavily on third party 
<br>
code, but the others (Linux and Solaris) are just wrappers around code in 
<br>
their respective C libraries.
<br>
<p>I believe I was responsible for the event library, ROMIO, and backtrace 
<br>
before leaving LANL.  I'll go through the motivations and issues with all 
<br>
three in terms of integration.
<br>
<p>Event Library: The event library is the core &quot;rendezvous&quot; point for all of 
<br>
Open MPI, so any issues with it cause lots of issues with Open MPI in 
<br>
general.  We've also hacked it considerably since taking the original 
<br>
libevent source -- we've renamed all the functions, we've made it thread 
<br>
safe in a way the author was unwilling to do, we've fixed some performance 
<br>
issues unique to our usage model.  In short, this is no longer really the 
<br>
same libevent that might already be installed on the system.  Using such 
<br>
an unmodified libevent would be disasterous.
<br>
<p>ROMIO is actually one that there was significant discussion about prior to 
<br>
me leaveing Los Alamos.  There are a number of problems / issues with 
<br>
ROMIO.  First and foremost, without ROMIO, we are not a fully compliant 
<br>
MPI implementation.  So we have to ship ROMIO -- it's the only way to have 
<br>
that important check mark.  But its current integration has some issues -- 
<br>
it's hard to test patches independently.  There is actually a mode in the 
<br>
current Open MPI tree where the MPI interface to MPI-I/O is not provided 
<br>
by OPen MPI and no io components are built.  This is to allow users to 
<br>
build ROMIO independently of Open MPI, for testing updates or whatever. 
<br>
There are some disadvantages to this.  First, the independent ROMIO will 
<br>
use generalized requests instead of being hooked into our progress engine, 
<br>
so there may be some progress issues (I never verified either way). 
<br>
Second, it does mean dealing with another package to build on the user's 
<br>
site.  Jeff is correct --there was discussion about how to make the 
<br>
integration &quot;better&quot; -- many of the changes were on our side, and we were 
<br>
going to have to ask for a couple of changes from Argonne.  If someone is 
<br>
going to put in the considerable amount of time to make this happen, I'm 
<br>
happy to write up whatever notes I can remember / find on the issue.
<br>
<p>The Darwin backtrace component is mostly maintanance free.  It doesn't 
<br>
support 64-bit Intel chips, but that's fine.  Once every 18 months or so, 
<br>
I need to get a new copy for the latest operation system, although the 
<br>
truth is I don't think anything bad happens if we just stop doing the 
<br>
updates at OS release (by the way, I did the one for Leopard, so we're 
<br>
probably all going to be sick of MPI and on to other things before the 
<br>
next time it has to be done).  While it's useful, if the community is 
<br>
really worried, it could probably be deleted.  But having a stack trace 
<br>
when you segfault sure is nice :).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3166.php">Christoph Niethammer: "[OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Previous message:</strong> <a href="3164.php">Jeff Squyres: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>In reply to:</strong> <a href="3162.php">Ralph Castain: "[OMPI devel] 3rd party code contributions"</a>
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
