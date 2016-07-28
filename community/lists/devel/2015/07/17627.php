<?
$subject_val = "Re: [OMPI devel] mpiexec without -hosts option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 22:15:39 2015" -->
<!-- isoreceived="20150711021539" -->
<!-- sent="Sat, 11 Jul 2015 02:15:36 +0000" -->
<!-- isosent="20150711021536" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpiexec without -hosts option" -->
<!-- id="0340E071-6BEF-40CF-BF0B-3A9474AAB2D2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAK5mtez17A7hKVMQasac+gfTpL27syFh+0QSRwQ=E8xgvh4=vw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpiexec without -hosts option<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-10 22:15:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17628.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17626.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17572.php">Victor Rodriguez: "[OMPI devel] mpiexec without -hosts option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Victor --
<br>
<p>I'm sorry that this message slipped by.
<br>
<p>Did you figure out that you were running MPICH, and not Open MPI?  (I say that because I see the executable &quot;mpichversion&quot; in your output.
<br>
<p><p><span class="quotelev1">&gt; On Jun 30, 2015, at 10:09 PM, Victor Rodriguez &lt;vm.rod25_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HI team
</span><br>
<span class="quotelev1">&gt; ( if this is not the proper channel please point me )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to implement MPI on yocto ( first try ) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://cgit.openembedded.org/meta-openembedded/commit/meta-oe/recipes-devtools/mpich/mpich_3.1.1.bb?id=824b6de96ddfe791a0013d96a84ad49de8e04d38">http://cgit.openembedded.org/meta-openembedded/commit/meta-oe/recipes-devtools/mpich/mpich_3.1.1.bb?id=824b6de96ddfe791a0013d96a84ad49de8e04d38</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested running the mpibench
</span><br>
<span class="quotelev1">&gt; <a href="http://icl.cs.utk.edu/projects/llcbench/mpbench.html">http://icl.cs.utk.edu/projects/llcbench/mpbench.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a minnow board MAX and work just amazing :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that I did the test with just one board, when I tried
</span><br>
<span class="quotelev1">&gt; to implement it for more than one platform I decided to use the -hosts
</span><br>
<span class="quotelev1">&gt; option ( or the -H hostfile ) but the only option that I have :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_qemux86:~# mpiexec --version
</span><br>
<span class="quotelev1">&gt; invalid mpiexec argument --version
</span><br>
<span class="quotelev1">&gt; Usage: mpiexec -usize &lt;universesize&gt; -maxtime &lt;seconds&gt; -exitinfo -l\
</span><br>
<span class="quotelev1">&gt;               -n &lt;numprocs&gt; -soft &lt;softness&gt; -host &lt;hostname&gt; \
</span><br>
<span class="quotelev1">&gt;               -wdir &lt;working directory&gt; -path &lt;search path&gt; \
</span><br>
<span class="quotelev1">&gt;               -file &lt;filename&gt; -configfile &lt;filename&gt; \
</span><br>
<span class="quotelev1">&gt;               -genvnone -genvlist &lt;name1,name2,...&gt; -genv name value\
</span><br>
<span class="quotelev1">&gt;               -envnone -envlist &lt;name1,name2,...&gt; -env name value\
</span><br>
<span class="quotelev1">&gt;               execname &lt;args&gt;\
</span><br>
<span class="quotelev1">&gt;               [ : -n &lt;numprocs&gt; ... execname &lt;args&gt;]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should have realize something was wrong because there was no mpirun
</span><br>
<span class="quotelev1">&gt; I just have :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_qemux86:~# mpi
</span><br>
<span class="quotelev1">&gt; mpic++        mpichversion  mpiexec
</span><br>
<span class="quotelev1">&gt; mpicc         mpicxx        mpivars
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My configuration is something like :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;--disable-fortran \
</span><br>
<span class="quotelev1">&gt; --disable-rpath \
</span><br>
<span class="quotelev1">&gt; --with-pm=gforker&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first one is just because I dont want fortran and the last 2
</span><br>
<span class="quotelev1">&gt; because of QA problems with Yocto
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if any part of my configurations is wrong or what part I am
</span><br>
<span class="quotelev1">&gt; doing wrong :( . Cause I really need to run on multiple systems :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Victor Rodriguez
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17572.php">http://www.open-mpi.org/community/lists/devel/2015/06/17572.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17628.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17626.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17572.php">Victor Rodriguez: "[OMPI devel] mpiexec without -hosts option"</a>
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
