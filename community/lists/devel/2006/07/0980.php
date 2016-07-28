<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 31 12:55:36 2006" -->
<!-- isoreceived="20060731165536" -->
<!-- sent="Mon, 31 Jul 2006 10:55:34 -0600" -->
<!-- isosent="20060731165534" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] universal / &amp;quot;fat&amp;quot; binary support?" -->
<!-- id="1154364934.28998.18.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="6D7530CF-72EA-4329-8DA0-01DF01E357FC_at_apple.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-31 12:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0981.php">Brian Barrett: "Re: [OMPI devel] progress thread check"</a>
<li><strong>Previous message:</strong> <a href="0979.php">Ben Byer: "[OMPI devel] universal / &quot;fat&quot; binary support?"</a>
<li><strong>In reply to:</strong> <a href="0979.php">Ben Byer: "[OMPI devel] universal / &quot;fat&quot; binary support?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-07-27 at 15:21 -0700, Ben Byer wrote:
<br>
<span class="quotelev1">&gt; I'd like to be able to build OpenMPI &quot;fat&quot; -- for multiple  
</span><br>
<span class="quotelev1">&gt; architectures in one pass, so I can create a universal binary for  
</span><br>
<span class="quotelev1">&gt; OSX.  I see that it was mentioned last year, at <a href="http://www.open">http://www.open</a>- 
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/users/2005/06/0087.php as something that was  
</span><br>
<span class="quotelev1">&gt; &quot;a ways off&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has any progress been made on that front, or do you still plan to  
</span><br>
<span class="quotelev1">&gt; support this?
</span><br>
<p>We currently can't build a universal binary in &quot;one pass&quot;.  We actually
<br>
had a long discussion with some Apple engineers about the issue and what
<br>
it came down to was that supporting a &quot;one pass&quot; build of Open MPI as a
<br>
universal binary would take lots of development effort in making
<br>
Autoconf, Automake, and Libtool smarter.  We don't have the resources to
<br>
do that work on the autotools and it doesn't sound like there is enough
<br>
demand on the autotools authors for them to do the work, so it's
<br>
unlikely we'll progress on that front for some time.
<br>
<p>We do provide a script in contrib/dist/macosx/ that will take a tarball
<br>
and build a universal binary .pkg file.  It ends up running the
<br>
configure / compile sequence three times (PPC, PPC64, and x86), but it
<br>
works quite well.  Mostly because it works so well, it is very difficult
<br>
to make further work on our build system to support a &quot;one pass&quot; build
<br>
of a Universal Binary a high priority.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0981.php">Brian Barrett: "Re: [OMPI devel] progress thread check"</a>
<li><strong>Previous message:</strong> <a href="0979.php">Ben Byer: "[OMPI devel] universal / &quot;fat&quot; binary support?"</a>
<li><strong>In reply to:</strong> <a href="0979.php">Ben Byer: "[OMPI devel] universal / &quot;fat&quot; binary support?"</a>
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
