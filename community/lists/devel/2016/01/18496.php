<?
$subject_val = "Re: [OMPI devel] [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 18:06:44 2016" -->
<!-- isoreceived="20160122230644" -->
<!-- sent="Fri, 22 Jan 2016 23:06:39 +0000" -->
<!-- isosent="20160122230639" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1" -->
<!-- id="767C2B6C-39E9-4660-8DB7-5A371944E77F_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="56A2B17B.4070302_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 18:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18497.php">Gilles Gouaillardet: "[OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18495.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="18495.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2016, at 5:47 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc doesn't have any cuda specific configure variables. We just use standard variables like LIBS and CPPFLAGS. I guess OMPI could propagate --with-cuda directories to hwloc by setting LIBS and CPPFLAGS before running hwloc m4 functions, but I don't think OMPI actually cares about hwloc reporting CUDA device locality
</span><br>
<p>I guess that's a question for NVIDIA -- do you guys use (or want to use) CUDA device locality in the Open MPI hwloc information?
<br>
<p>If so, it might be appropriate to do what Brice suggests -- in opal/mca/hwloc*/configure.m4, (temporarily) explode --with-cuda into CPPFLAGS and LDFLAGS.
<br>
<p><span class="quotelev1">&gt; anyway, and OMPI might stop embedding hwloc in the near future anyway.
</span><br>
<p>Mmm... I'm not convinced of that.  :-)
<br>
<p>Regardless of what we decide w.r.t. embedding hwloc, I think it would be worth exploding --with-cuda in the hwloc configure.m4, if NVIDIA wants CUDA devices in the Open MPI hwloc info (my $0.02: NVIDIA: I think you should want this information :-) ).
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
<li><strong>Next message:</strong> <a href="18497.php">Gilles Gouaillardet: "[OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18495.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="18495.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
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
