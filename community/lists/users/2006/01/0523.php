<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 26 08:39:00 2006" -->
<!-- isoreceived="20060126133900" -->
<!-- sent="Thu, 26 Jan 2006 08:38:53 -0500" -->
<!-- isosent="20060126133853" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] ompi spec file" -->
<!-- id="61F00FD1-D182-40C4-8F9D-455833D4A14E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060125233213.GC2839_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-01-26 08:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>In reply to:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">Jonathan Day: "Re: [O-MPI users] ompi spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2006, at 6:32 PM, Daryl W. Grunau wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Is there a more scalable way to do this, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to make the option-generator into a function which  
</span><br>
<span class="quotelev1">&gt; could be
</span><br>
<span class="quotelev1">&gt; called in the %description section or in the %configure line so you'd
</span><br>
<span class="quotelev1">&gt; only need to maintain one area.  I haven't figured that out yet (or
</span><br>
<span class="quotelev1">&gt; determined if it were possible) ... if not possible, I'd be willing  
</span><br>
<span class="quotelev1">&gt; to hack
</span><br>
<span class="quotelev1">&gt; out the %description flags if you'd accept the other area.
</span><br>
<p>How about this -- what if we use the same syntax, but only use the  
<br>
5-10 most popular configure options?  (e.g., location of gm/mx/mvapi/ 
<br>
openib and a few others)
<br>
<p>Then have a generic &quot;pass this entire string through to configure&quot;  
<br>
option such that you can do something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rpmbuild --with gm=/opt/gm --with-whole-string &quot;--enable-debug -- 
<br>
with-some-other-option=foo&quot;
<br>
<p>So the common cases will be covered via the --with interface, but if  
<br>
you need to do something special (like pass in --enable-debug and/or  
<br>
--with-some-other-option), you can.
<br>
<p>Could that be done?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>In reply to:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">Jonathan Day: "Re: [O-MPI users] ompi spec file"</a>
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
