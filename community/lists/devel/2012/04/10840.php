<?
$subject_val = "Re: [OMPI devel] OpenMPI and R";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  6 08:45:42 2012" -->
<!-- isoreceived="20120406124542" -->
<!-- sent="Fri, 6 Apr 2012 08:45:38 -0400" -->
<!-- isosent="20120406124538" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI and R" -->
<!-- id="320D8823-59CF-42D1-96F0-080969BDB649_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAD+mzows7kJw_z3aB8QKbfkFKJ+ZjkmaVVPU_Kj2ZVvwXP73Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI and R<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-06 08:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10841.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10839.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>In reply to:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10841.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10841.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 5, 2012, at 9:07 PM, Benedict Holland wrote:
<br>
<p><span class="quotelev1">&gt; Oh how interesting and I hope this helps someone. Following another link, I had to use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix /usr --enable-shared --enable-static
</span><br>
<p>This makes sense.  You were falling victim to the fact that R dlopens libmpi as a dynamic library in a private namespace.  Hence, when Open MPI then dlopens its own plugins, it can't find libmpi's symbols.  This is a generic problem with any system that opens plugins that, themselves, open plugns.  I wish there was a better solution to this -- the OS guys need to give us a better mechanism here.  :-(
<br>
<p>OMPI's --enable-static option does two things:
<br>
<p>- it builds libmpi.a (vs. libmpi.so)
<br>
- it slurps all of OMPI's plugins into libmpi.a (so it doesn't need to dlopen anything at run-time)
<br>
<p>It's the latter point that is saving you.
<br>
<p>Note that you could also just --disable-dlopen (vs. --disable-shared --enable-static), which just does the latter of the above things (meaning: OMPI still builds libmpi.so), and it should also work for you.
<br>
<p><span class="quotelev1">&gt; when compiling this for Rmpi. Just curious, why isn't --enable-static a default option? 
</span><br>
<p>Among other reasons, shared libraries generally help save memory at run time.  This is somewhat important as core counts go up.  If you &quot;mpirun -np 32&quot; on a single, 32-core machine, would you rather have 32 independent copies of libmpi.a loaded into RAM, or just one copy that all processes share?
<br>
<p>Using libmpi.so enables the latter option.
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10841.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10839.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>In reply to:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10841.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10841.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
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
