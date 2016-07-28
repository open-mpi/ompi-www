<?
$subject_val = "[OMPI devel] mpiexec without -hosts option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 22:09:20 2015" -->
<!-- isoreceived="20150701020920" -->
<!-- sent="Tue, 30 Jun 2015 21:09:19 -0500" -->
<!-- isosent="20150701020919" -->
<!-- name="Victor Rodriguez" -->
<!-- email="vm.rod25_at_[hidden]" -->
<!-- subject="[OMPI devel] mpiexec without -hosts option" -->
<!-- id="CAK5mtez17A7hKVMQasac+gfTpL27syFh+0QSRwQ=E8xgvh4=vw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] mpiexec without -hosts option<br>
<strong>From:</strong> Victor Rodriguez (<em>vm.rod25_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-30 22:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17571.php">Geoffrey Paulsen: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17627.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpiexec without -hosts option"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17627.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpiexec without -hosts option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI team
<br>
( if this is not the proper channel please point me )
<br>
<p>I am trying to implement MPI on yocto ( first try ) :
<br>
<p><a href="http://cgit.openembedded.org/meta-openembedded/commit/meta-oe/recipes-devtools/mpich/mpich_3.1.1.bb?id=824b6de96ddfe791a0013d96a84ad49de8e04d38">http://cgit.openembedded.org/meta-openembedded/commit/meta-oe/recipes-devtools/mpich/mpich_3.1.1.bb?id=824b6de96ddfe791a0013d96a84ad49de8e04d38</a>
<br>
<p>I tested running the mpibench
<br>
<a href="http://icl.cs.utk.edu/projects/llcbench/mpbench.html">http://icl.cs.utk.edu/projects/llcbench/mpbench.html</a>
<br>
<p>On a minnow board MAX and work just amazing :)
<br>
<p>The problem is that I did the test with just one board, when I tried
<br>
to implement it for more than one platform I decided to use the -hosts
<br>
option ( or the -H hostfile ) but the only option that I have :
<br>
<p>root_at_qemux86:~# mpiexec --version
<br>
invalid mpiexec argument --version
<br>
Usage: mpiexec -usize &lt;universesize&gt; -maxtime &lt;seconds&gt; -exitinfo -l\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-n &lt;numprocs&gt; -soft &lt;softness&gt; -host &lt;hostname&gt; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-wdir &lt;working directory&gt; -path &lt;search path&gt; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-file &lt;filename&gt; -configfile &lt;filename&gt; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-genvnone -genvlist &lt;name1,name2,...&gt; -genv name value\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-envnone -envlist &lt;name1,name2,...&gt; -env name value\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;execname &lt;args&gt;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ : -n &lt;numprocs&gt; ... execname &lt;args&gt;]
<br>
<p>I should have realize something was wrong because there was no mpirun
<br>
I just have :
<br>
<p>root_at_qemux86:~# mpi
<br>
mpic++        mpichversion  mpiexec
<br>
mpicc         mpicxx        mpivars
<br>
<p>My configuration is something like :
<br>
<p>&quot;--disable-fortran \
<br>
&nbsp;--disable-rpath \
<br>
&nbsp;--with-pm=gforker&quot;
<br>
<p>The first one is just because I dont want fortran and the last 2
<br>
because of QA problems with Yocto
<br>
<p>I wonder if any part of my configurations is wrong or what part I am
<br>
doing wrong :( . Cause I really need to run on multiple systems :(
<br>
<p>Best regards
<br>
<p>Victor Rodriguez
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17571.php">Geoffrey Paulsen: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17627.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpiexec without -hosts option"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17627.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpiexec without -hosts option"</a>
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
