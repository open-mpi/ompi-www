<?
$subject_val = "Re: [OMPI users] trying to use personal copy of 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 14:07:22 2014" -->
<!-- isoreceived="20140424180722" -->
<!-- sent="Thu, 24 Apr 2014 18:07:12 +0000" -->
<!-- isosent="20140424180712" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trying to use personal copy of 1.7.4" -->
<!-- id="18A906F3-085E-43B1-8223-6DF8B2EE6B61_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1394738150.15874.82.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] trying to use personal copy of 1.7.4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 14:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24253.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Previous message:</strong> <a href="24251.php">Nathan Hjelm: "Re: [OMPI users] MPI one-sided communication questions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23826.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2014, at 3:15 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The motivation was
</span><br>
<span class="quotelev1">&gt; <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm">http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm</a> notes
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; 2007-10-24, version 0.5-5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dlopen has been used to load libmpi.so explicitly. This is mainly useful
</span><br>
<span class="quotelev1">&gt; for Rmpi under OpenMPI where one might see many error messages:
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open osc pt2pt: file not found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; if libmpi.so is not loaded with RTLD_GLOBAL flag.
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I'll try changing to to try libmpi.so first so that it picks up
</span><br>
<span class="quotelev1">&gt; libmpi.so.1 if available.  I've already rebuilt R, though it looks as if
</span><br>
<span class="quotelev1">&gt; Rmpi may have been the source of the problems.
</span><br>
<p><p>If you care for the reason why, it's because many (most? all?) of OMPI's plugins depend on symbols in the main MPI library.
<br>
<p>Hence, if those symbols can't be found in the process' namespace when OMPI tries to dlopen one of its plugins, that dlopen will fail due to the symbols it needs not being able to be resolved.
<br>
<p>It seems weird because libmpi.so *is* in the process (obviously), but it just can't be found by the plugin because libmpi.so may well be in a private namespace -- and therefore its symbols are hidden from the plugin that is being dlopened.  Weird, but true.
<br>
<p>I honestly don't know what happens if you have a library opened in a private namespace in a process and then you dlopen it again in a public namespace in the same process.  Do you actually get a second copy of libmpi (with a second copy of all of its global symbols), or is the linker smart enough to realize you already have it loaded and effectively move it into the public namespace?
<br>
<p>I'm not sure.
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
<li><strong>Next message:</strong> <a href="24253.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Previous message:</strong> <a href="24251.php">Nathan Hjelm: "Re: [OMPI users] MPI one-sided communication questions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23826.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
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
