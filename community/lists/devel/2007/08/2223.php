<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 25 16:33:02 2007" -->
<!-- isoreceived="20070825203302" -->
<!-- sent="Sat, 25 Aug 2007 16:32:39 -0400" -->
<!-- isosent="20070825203239" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_mpi_abort" -->
<!-- id="35D88998-B6B1-43C8-B260-9FC16DF54690_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200708251920.39840.keller_at_hlrs.de" -->
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
<strong>Date:</strong> 2007-08-25 16:32:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2224.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>In reply to:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2224.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Reply:</strong> <a href="2224.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 25, 2007, at 1:20 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;      /* Protection for recursive invocation */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (have_been_invoked) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      have_been_invoked = true;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This, IMHO, is a wrong thing to do.  The intent of ompi_mpi_abort()
</span><br>
<span class="quotelev2">&gt;&gt; was that it never returned.  But now it is?  That seems wrong to me.
</span><br>
<p>If you read the rest of my e-mail, I was saying that I think it's  
<br>
wrong, too.  :-)  You did not answer my other question...
<br>
<p><span class="quotelev1">&gt; Recursive or not, if we add __opal_attribute_noreturn__, the  
</span><br>
<span class="quotelev1">&gt; compiler (and
</span><br>
<span class="quotelev1">&gt; Coverity, as David said in a private mail) then knows, that the  
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; won't exit.
</span><br>
<p>The real question is whether the function can be (or is) called  
<br>
recursively.  If it can't / isn't, then we can replace the first  
<br>
&quot;return OMPI_SUCCESS&quot; with an endless sleep and we should be ok.  It  
<br>
is *not* ok to replace it with &quot;exit(errcode)&quot; for the  
<br>
THREAD_MULTIPLE scenarios where a different thread is busy processing  
<br>
the actual abort.  And do we need better protection for  
<br>
have_been_invoked, such as a lock or an atomic operation?
<br>
<p>If this function can't be / is never invoked recursively, then we  
<br>
should make it noisy (in a developer / debug build) if it ever *is*  
<br>
invoked recursively and probably put it into either an endless sleep  
<br>
or invoke abort() because that will clearly be a bug.
<br>
<p>I unfortunately do not remember whether I put that recursive  
<br>
protection in to fix a real problem or whether I was trying to be  
<br>
(incorrectly) proactive...
<br>
<p>Comments?
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
<li><strong>Next message:</strong> <a href="2224.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>In reply to:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2224.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Reply:</strong> <a href="2224.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
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
