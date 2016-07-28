<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 20:54:58 2007" -->
<!-- isoreceived="20070614005458" -->
<!-- sent="Wed, 13 Jun 2007 20:54:34 -0400" -->
<!-- isosent="20070614005434" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ error: static object marked for destruction more than once" -->
<!-- id="9EE2968C-A27C-4B03-9628-CB403F786D88_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1181782052.5894.174.camel_at_valhalla.cacr.caltech.edu" -->
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
<strong>Date:</strong> 2007-06-13 20:54:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3491.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Previous message:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>In reply to:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3491.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Reply:</strong> <a href="3491.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Reply:</strong> <a href="3492.php">Luis Kornblueh: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 8:47 PM, Julian Cummings wrote:
<br>
<p><span class="quotelev1">&gt; I did some quick tests with my little hello example that indicate that
</span><br>
<span class="quotelev1">&gt; the application code only needs to be *linked* with -fpic, not  
</span><br>
<span class="quotelev1">&gt; compiled
</span><br>
<span class="quotelev1">&gt; with it.  The -fpic flag on the mpicxx link line points the linker  
</span><br>
<span class="quotelev1">&gt; to a
</span><br>
<span class="quotelev1">&gt; PGI &quot;libso&quot; subdirectory that contains dynamic versions of the  
</span><br>
<span class="quotelev1">&gt; compiler
</span><br>
<span class="quotelev1">&gt; libraries.  In this case, probably libC.so is most important.  Anyway,
</span><br>
<span class="quotelev1">&gt; at least you do not have to potentially degrade the performance of the
</span><br>
<span class="quotelev1">&gt; application code by compiling all of it with -fpic.  I would recommend
</span><br>
<span class="quotelev1">&gt; that the OpenMPI configuration be modified to insert this flag (or  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; equivalent) as an LCXXFLAGS or even an LDFLAGS component in the  
</span><br>
<span class="quotelev1">&gt; compiler
</span><br>
<span class="quotelev1">&gt; driver scripts whenever PGI is used.
</span><br>
<p>We've had debates about this internally.  There was pushabck from  
<br>
some of the developers that we don't want to handle every single  
<br>
compiler bug that's out there (there are many).  It can be a never- 
<br>
ending battle.  This is a big enough compiler bug, however (it spans  
<br>
the 6.2 and 7.0 PGI series) that if someone contributes a patch, we  
<br>
might be able to make a big enough case to fix it.  The functionality  
<br>
I'd like to see in such a patch is:
<br>
<p>- in the C++ section of configure, try to compile and run a simple C+ 
<br>
+ (non-MPI) program
<br>
- if it works, fine
<br>
- if it doesn't work, try again but link it with -fpic
<br>
- if that works, then add -fpic to the C++ compiler wrapper flags
<br>
<p>All with appropriate comments describing why this check is there (so  
<br>
that someone doesn't look at it in 6 months and wonder why the heck  
<br>
we're checking for that).
<br>
<p>FWIW, you can easily modify the wrapper scripts to automatically put  
<br>
this flag in after Open MPI is installed (see <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
<br>
faq/?category=mpi-apps#override-wrappers-after-v1.0).
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
<li><strong>Next message:</strong> <a href="3491.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Previous message:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>In reply to:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3491.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Reply:</strong> <a href="3491.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Reply:</strong> <a href="3492.php">Luis Kornblueh: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
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
