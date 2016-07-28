<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 07:40:48 2011" -->
<!-- isoreceived="20110923114048" -->
<!-- sent="Fri, 23 Sep 2011 07:40:40 -0400" -->
<!-- isosent="20110923114040" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="0BCA5070-CCCA-4E25-80C7-5815861006E5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALA1MBLMcQ-zeX_khj3x7xiTZtSmycEhKYbT_GuB9pkn1hpD-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 07:40:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17408.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17406.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2011, at 6:52 AM, Uday Kumar Reddy B wrote:
<br>
<p><span class="quotelev1">&gt; But that's not really the point - to re-install MPI from sources! One
</span><br>
<span class="quotelev1">&gt; would like to choose between compilers depending on what's on the
</span><br>
<span class="quotelev1">&gt; system, and also switch between them to experiment. And if I'm
</span><br>
<span class="quotelev1">&gt; packacging a software that makes use of mpicc for building, I wouldn't
</span><br>
<span class="quotelev1">&gt; want to check what kind of mpi a user has and customize cmdline flags;
</span><br>
<span class="quotelev1">&gt; so environment variables don't really help - they just add to the
</span><br>
<span class="quotelev1">&gt; complexity.  The only portable solution is for all MPIs to support the
</span><br>
<span class="quotelev1">&gt; same set of options (in particular, the frequently-used ones).  Is
</span><br>
<span class="quotelev1">&gt; there any fundamental difficulty in adding -cc to openmpi's mpicc to
</span><br>
<span class="quotelev1">&gt; start with? mpich, mvapich already support it; in addition, it is
</span><br>
<span class="quotelev1">&gt; standard to have a (-h/-help flag) to list usage options; again, mpich
</span><br>
<span class="quotelev1">&gt; and mvapich list these with -help/-h.
</span><br>
<p>MVAPICH is a fork of MPICH, so they're the same.
<br>
<p>Unless there is an effort undertaken to standardize wrapper compiler flags, this is not going to happen.  Indeed, as I mentioned in a prior email, some MPI implementations do not have wrapper compilers at all.  This makes standardization difficult, if not impossible.
<br>
<p>Open MPI's attitude towards wrapper compilers has always been to assume as absolutely minimum as possible -- we add a single command line flag (--showme, although it has a few different forms).  We pass *everything* else to the underlying compiler because there is a *huge* array of compilers out there that take a multitude of different compiler flags.  We wouldn't want to possibly, unknowingly intercept one of them (even worse, use a flag that *today* has no conflict with compilers, but some future compiler release uses that same flag). Hence, we went with the minimalistic approach.
<br>
<p>The MPICH folks went in a different way that worked for them.  Which is perfectly fine -- we have different attitudes on a bunch of different things in our implementations.
<br>
<p>-----
<br>
<p>A key point that you're missing here is that compiling an MPI implementation for one compiler suite is not necessarily the same as compiling it for another.  It's not always as simple to change compilers as just replacing argv[0] in the wrapper compiler arguments -- sometimes replacing icc with gcc (or vice versa) can actually lead to compiler, linker, or run-time problems.
<br>
<p>Such cross-compatibility is usually *supposed* to work for C codes, but definitely not for Fortran and C++ codes (although sometimes additional command line flags can make the symbol mangling between the compilers be the same).  And even when it's supposed to work (for C codes), compilers have bugs just like any other software suite -- some prior frustrating incompatibilities have been well-publicized.  Note that run-time incompatibilities like this are *exceedingly* difficult to debug because they're problems in the compiler-generated code, not the application code.  
<br>
<p>Such problems are beyond the scope of an MPI implementation to fix -- we have no control over compiler incompatibilities.  
<br>
<p>If you want to support multiple different compilers, the Open MPI team's attitude is that is *much* better to have multiple different Open MPI installations.  Yes, this takes a little bit of disk space and is a bit annoying, but it avoids all kinds of wonky, real world compiler/linker/run-time cross-optimization problems that can (and do) occur.  Software solutions like &quot;modules&quot; are good solutions to this issue; &quot;modules&quot; are used at many HPC sites for exactly this reason.
<br>
<p>Plus, you need to multiple installations for different Fortran and C++ compilers, anyway.  That's an unfortunate fact of life.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17408.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17406.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
