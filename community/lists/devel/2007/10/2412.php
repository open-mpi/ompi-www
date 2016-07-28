<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 10:56:03 2007" -->
<!-- isoreceived="20071009145603" -->
<!-- sent="Tue, 9 Oct 2007 16:55:44 +0200" -->
<!-- isosent="20071009145544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI" -->
<!-- id="DD1E3DEE-6D43-40C2-AD8A-C2C625E2200B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="470B8B14.4090205_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2007-10-09 10:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2413.php">George Bosilca: "Re: [OMPI devel] RFC: Remove opal message buffer"</a>
<li><strong>Previous message:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>In reply to:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 9, 2007, at 4:07 PM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev2">&gt;&gt; One of my big problems with this idea is that we lose the concept of
</span><br>
<span class="quotelev2">&gt;&gt; shipping a single unit of Open MPI.  If someone sends us a bug report
</span><br>
<span class="quotelev2">&gt;&gt; concerning VT, we no longer have a solid idea of what version they
</span><br>
<span class="quotelev2">&gt;&gt; are running because they may have replaced the one inside their Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI software.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; well, this issue could be however resolved, if ompi_info and friends
</span><br>
<span class="quotelev1">&gt; would have a way to report the precise version number for VT, isn't  
</span><br>
<span class="quotelev1">&gt; it?
</span><br>
<p>I don't quite know how to do it yet, but I agree that ompi_info  
<br>
should show the following for each 3rd party package:
<br>
<p>- whether we are using the internally bundled package or not
<br>
- the version of the internally bundled package
<br>
<p>I'll muck around with the libnbc integration to figure this stuff out.
<br>
<p><span class="quotelev1">&gt; Without having any strong feelings one way or the other, I think that
</span><br>
<span class="quotelev1">&gt; the functionality is great from the end-users perspective. Just my  
</span><br>
<span class="quotelev1">&gt; 0.02$...
</span><br>
<p>It makes me very, very nervous.  When we ship Open MPI, we test it  
<br>
and have a good feel for what works and what does not.  If a user  
<br>
changes something inside their installed Open MPI, all bets are off  
<br>
on whether it will work or not.  Some users will get it right, some  
<br>
will not (so you have to assume that they will not).
<br>
<p>I think it is far safer to have the user download VT outside of OMPI  
<br>
and --disable-vt, or --enable-vt=/path/to/somewhere/else.  If we  
<br>
*replace* what is in the user's expanded tarball, they they cannot  
<br>
revert to what came out of the tarball without re-expanding the  
<br>
tarball (i.e., &quot;make clean&quot; and &quot;make distclean&quot; and whatnot do not  
<br>
revert back to the real original state -- this is contrary to the  
<br>
philosophy of those Automake targets).
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
<li><strong>Next message:</strong> <a href="2413.php">George Bosilca: "Re: [OMPI devel] RFC: Remove opal message buffer"</a>
<li><strong>Previous message:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>In reply to:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
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
