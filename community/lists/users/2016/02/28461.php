<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 08:55:47 2016" -->
<!-- isoreceived="20160208135547" -->
<!-- sent="Mon, 8 Feb 2016 05:55:26 -0800" -->
<!-- isosent="20160208135526" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="CAGKz=u+kRJF+TJLJmpxHBXEuZ0ajr4tfZY20m4kmdux5AwyTzg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8C5AF460-5719-45AE-84B5-D612468DDD95_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 08:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28462.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Waiting until runtime to issue this error is a terrible idea, because then
<br>
the PETSc team (among others) will disparage you for allowing a user to
<br>
successfully build against an unusable library.  They are on-record
<br>
numerous times in the past as to the evils of e.g. no-op symbols in MPI or
<br>
other runtime libraries, since this means that compile- and link-based
<br>
tests pass, even though nothing good will happen when the user employs them
<br>
in an application.
<br>
<p>The right thing to do is what Gilles proposed: do not define the types in
<br>
mpi.h so that it is impossible to compile C code with Fortran datatypes, if
<br>
Fortran datatypes are not supported.  There are more and less effective
<br>
ways to do this, in terms of letting the user know what is happening.  For
<br>
example, you can just not define them, which might confuse novices who
<br>
don't know how to read error messages (HPC users are frequent offenders).
<br>
<p>You could use e.g.:
<br>
<p>#define MPI_DOUBLE_PRECISION choke me No Fortran support when library was
<br>
compiled!
<br>
<p>Unfortunately, Clang colorized output emphasizes the wrong problem here,
<br>
and ICC doesn't even echo the message at all in its error message.  GCC
<br>
issues the same error four times, and makes it relatively hard to miss the
<br>
message.
<br>
<p>If the following GCC extension is supported, along with C99/C++11, you
<br>
could do this:
<br>
<p>#define MPI_DOUBLE_PRECISION _Pragma(&quot;GCC error \&quot;MPI was not compiled with
<br>
Fortran support\&quot;&quot;)
<br>
<p>For the _functions_ that require Fortran support, you can use e.g.
<br>
__attribute__((error(&quot;no Fortran&quot;))) on the function declaration, although
<br>
neither ICC nor Clang support this, and it ends up throwing two error
<br>
messages when compiled (only one - the right one - when only preprocessed),
<br>
which might confuse the same folks that it is trying to help.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>On Mon, Feb 8, 2016 at 5:14 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; The issue at hand is trying to help the user figure out that they have an
</span><br>
<span class="quotelev1">&gt; open MPI built without fortran support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps we should improve the error reporting at run time to display
</span><br>
<span class="quotelev1">&gt; something about the fact that you used a fortran data type but have an OMPI
</span><br>
<span class="quotelev1">&gt; that was compiled without fortran support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2016, at 4:00 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, should we remove these fortran types from include files
</span><br>
<span class="quotelev1">&gt; and libs when ompi is configure'd without fortran support ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BTW: is there a reason you don't want to just use the C datatypes?  The
</span><br>
<span class="quotelev2">&gt;&gt; fundamental output of the index is an integer value -- casting it to a
</span><br>
<span class="quotelev2">&gt;&gt; float of some flavor doesn't fundamentally change its value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code in question is not mine.  I have suggested to the developers
</span><br>
<span class="quotelev2">&gt;&gt; that they should use the correct C types.  The reason I became aware of
</span><br>
<span class="quotelev2">&gt;&gt; this issue is that one of my colleagues compiled and ran this code on a
</span><br>
<span class="quotelev2">&gt;&gt; system where OpenMPI was built without Fortran support and the code started
</span><br>
<span class="quotelev2">&gt;&gt; failing with errors from MPI which were not seen on other systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; If you use an MPI library compiled without Fortran support, you should
</span><br>
<span class="quotelev1">&gt; expect precisely nothing related to Fortran to work.  You might get more
</span><br>
<span class="quotelev1">&gt; than this because the universe is being nice to you, but you should treat
</span><br>
<span class="quotelev1">&gt; it as serendipity when something works, not a bug when something doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28459.php">http://www.open-mpi.org/community/lists/users/2016/02/28459.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28460.php">http://www.open-mpi.org/community/lists/users/2016/02/28460.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28461/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28462.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
