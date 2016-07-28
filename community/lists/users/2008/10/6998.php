<?
$subject_val = "Re: [OMPI users] on SEEK_*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 08:21:51 2008" -->
<!-- isoreceived="20081016122151" -->
<!-- sent="Thu, 16 Oct 2008 08:21:03 -0400" -->
<!-- isosent="20081016122103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] on SEEK_*" -->
<!-- id="9D5884F3-0D34-4144-B5B6-EE50A1E83756_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081016115737.GB30398_at_brakk.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] on SEEK_*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 08:21:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6999.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>In reply to:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6999.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Reply:</strong> <a href="6999.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/20">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/20</a> is a  
<br>
placemarker for discussion for the upcoming MPI Forum meeting (next  
<br>
week).
<br>
<p>Also, be aware that OMPI's 1.2.7 solution isn't perfect, either.  You  
<br>
can see from ticket 20 that it actually causes a problem if you try to  
<br>
use SEEK_SET in a switch/case statement.  But we did this a little  
<br>
better in the trunk/v1.3 (see <a href="https://svn.open-mpi.org/trac/ompi/changeset/19494">https://svn.open-mpi.org/trac/ompi/changeset/19494</a>) 
<br>
; this solution *does* allow for SEEK_SET to be used in a case  
<br>
statement, but it does always bring in &lt;stdio.h&gt; (probably not a huge  
<br>
deal).
<br>
<p>The real solution is that we're likely going to change these names to  
<br>
something else in the MPI spec itself.  And/or drop the C++ bindings  
<br>
altogether (see <a href="http://lists.mpi-forum.org/mpi-22/2008/10/0177.php">http://lists.mpi-forum.org/mpi-22/2008/10/0177.php</a>).
<br>
<p>Additionally -- I should have pointed this out in my first mail -- you  
<br>
can also just use MPI_SEEK_SET (and friends).  The spec defines that  
<br>
these constants must have the same values as their MPI::SEEK_*  
<br>
counterparts.
<br>
<p><p>On Oct 16, 2008, at 7:57 AM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Thu 2008-10-16 07:43, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 16, 2008, at 6:29 AM, Jed Brown wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI doesn't require undef'ing of anything.  It should also not
</span><br>
<span class="quotelev2">&gt;&gt; require any special ordering of include files.  Specifically, the
</span><br>
<span class="quotelev2">&gt;&gt; following codes both compile fine for me with 1.2.8 and the OMPI SVN
</span><br>
<span class="quotelev2">&gt;&gt; trunk (which is what I assume you mean by &quot;-dev&quot;?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's what I meant.  This, works with 1.2.7 but not with -dev:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #undef SEEK_SET
</span><br>
<span class="quotelev1">&gt; #undef SEEK_CUR
</span><br>
<span class="quotelev1">&gt; #undef SEEK_END
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If iostream is replaced by stdio, then both fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is actually a problem in the MPI-2 spec; the names  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MPI::SEEK_SET&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (and friends) were unfortunately chosen poorly.  Hopefully that'll be
</span><br>
<span class="quotelev2">&gt;&gt; fixed relatively soon, in MPI-2.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It wasn't addressed in the MPI-2.1 spec I was reading, hence my
</span><br>
<span class="quotelev1">&gt; confusion.  When namespaces and macros don't play well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPICH chose to handle this situation a different way than we did, and
</span><br>
<span class="quotelev2">&gt;&gt; apparently requires that you either #undef something or you #define  
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt; MPICH-specific macro.  I guess the portable way might be to just  
</span><br>
<span class="quotelev2">&gt;&gt; always
</span><br>
<span class="quotelev2">&gt;&gt; define that MPICH-specific macro.  It should be harmless for OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll go with this, thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I was chatting with the MPICH developers at the recent MPI  
</span><br>
<span class="quotelev2">&gt;&gt; Forum
</span><br>
<span class="quotelev2">&gt;&gt; meeting and showed them how we did our SEEK_* solution in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Certainly the OMPI solution is better for users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jed
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
<li><strong>Next message:</strong> <a href="6999.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>In reply to:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6999.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Reply:</strong> <a href="6999.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
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
