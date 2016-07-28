<?
$subject_val = "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 12:34:07 2009" -->
<!-- isoreceived="20090325163407" -->
<!-- sent="Wed, 25 Mar 2009 09:34:03 -0700" -->
<!-- isosent="20090325163403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)" -->
<!-- id="B2F529AF-F43D-47A8-88B7-BBCDB5509EB0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0903251153070.30076_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 12:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8584.php">Simon Köstlin: "[OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Previous message:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>In reply to:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to strengthen what Brian said...
<br>
<p>We agree that what you cite is a problem.  The only issue is that we  
<br>
don't know of any way to do it better -- Brian laid out the 3 possible  
<br>
options below pretty well.  --enable-mca-static might be a decent  
<br>
solution for you; you still build libmpi.so (not libmpi.a), but all  
<br>
the plugins are slurped up into libmpi instead of being dlopened at  
<br>
run-time.
<br>
<p>It's really a larger issue than just Open MPI -- private namespaces  
<br>
are, in general, a Good Thing, but they are problematic for *any*  
<br>
plugin-based system that gets opened in a private namespace.  What  
<br>
would be a Real solution would be somehow having a way that Open MPI  
<br>
could dlopen its plugins *within* its private namespace.  That's  
<br>
unfortunately beyond our control to influence.
<br>
<p><p>On Mar 25, 2009, at 9:10 AM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 23 Mar 2009, Olaf Lenz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and the solution that is described there still looks as though it  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev2">&gt; &gt; still work now, or shouldn't it? Just link all the OpenMPI plugins  
</span><br>
<span class="quotelev1">&gt; against
</span><br>
<span class="quotelev2">&gt; &gt; the base OpenMPI libraries, and it should work. Or am I wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe your suggestion will not work, certainly not portably.  In  
</span><br>
<span class="quotelev1">&gt; fact,
</span><br>
<span class="quotelev1">&gt; it will die in horrible ways.  We used to link in the way you  
</span><br>
<span class="quotelev1">&gt; suggested,
</span><br>
<span class="quotelev1">&gt; and what you end up with is a bunch of copies of libmpi, all in  
</span><br>
<span class="quotelev1">&gt; their own
</span><br>
<span class="quotelev1">&gt; namespace.  Hardly helpful :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, there are only three rational solutions I've thought  
</span><br>
<span class="quotelev1">&gt; of to
</span><br>
<span class="quotelev1">&gt; the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Do nothing, my prefered solution
</span><br>
<span class="quotelev1">&gt; * Stop building components by default
</span><br>
<span class="quotelev1">&gt; * Have libmpi be a thin wrapper, which dlopens Open MPI's guts into  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; public namespace, and the guts then dlopen all the components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, the first serves the greatest community and involves the  
</span><br>
<span class="quotelev1">&gt; least
</span><br>
<span class="quotelev1">&gt; amount of work.  However, packagers such as the Linux distributions  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; make a decision about how to best package Open MPI -- perhaps shipping
</span><br>
<span class="quotelev1">&gt; it built with components is not the ideal solution for their
</span><br>
<span class="quotelev1">&gt; infrastructure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did want to point out one incorrect statement in your e-mail.  While
</span><br>
<span class="quotelev1">&gt; specifying &quot;--enable-shared --enable-static&quot; to configure will cause
</span><br>
<span class="quotelev1">&gt; components to be linked into libmpi rather than built as stand-alone
</span><br>
<span class="quotelev1">&gt; entities, a better way to accomplish that is &quot;--enable-mca-static&quot;,  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; will build all the components into libmpi.so, but not also cause  
</span><br>
<span class="quotelev1">&gt; libmpi.a
</span><br>
<span class="quotelev1">&gt; to be built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8584.php">Simon Köstlin: "[OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Previous message:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>In reply to:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
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
