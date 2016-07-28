<?
$subject_val = "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 20:33:42 2010" -->
<!-- isoreceived="20100512003342" -->
<!-- sent="Wed, 12 May 2010 12:33:36 +1200" -->
<!-- isosent="20100512003336" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The&amp;quot; Missing Symbol&amp;quot; issue and OpenMPI on NetBSD" -->
<!-- id="0bca2d23702ba28361c107b5fd1e5f74.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100511053612.GA5791_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20The&amp;amp;quot;%20Missing%20Symbol&amp;amp;quot;%20issue%20and%20OpenMPI%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-05-11 20:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7914.php">Nils Carlson: "[OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="7912.php">Roland Dreier: "Re: [OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
<li><strong>In reply to:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Which libltdl version is that NetBSD ltdl.h from?  Which version is
</span><br>
<span class="quotelev1">&gt; in opal/libltdl?  Have you tried not doing the above change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libltdl 2.2.x has incompatible changes over 1.5.x, both in the library
</span><br>
<span class="quotelev1">&gt; as well as in the header, as well as (I think) in preloaded modules.
</span><br>
<p>Hey Ralf,
<br>
<p>The libtool distinfo file implies NetBSD currently uses libtool-2.2.6b.
<br>
<p>An ldd of mpirun shows  -lltdl.7 =&gt; /usr/pkg/lib/libltdl.so.7
<br>
<p><p>I do need to attempt a build of 1.4.2 here in ECS, so I'll try
<br>
building without the patches but I seem to recall that if those
<br>
libtool-related patches
<br>
<p>opal/Makefile.in
<br>
configure
<br>
opal/mca/base/mca_base_component_find.c
<br>
opal/mca/base/mca_base_component_repository.c
<br>
test/support/components.h
<br>
test/support/components.c
<br>
<p>were not applied, it did not even build. But we'll see.
<br>
<p><p>And if you are reading this, Alexsej, have you,as the real
<br>
&quot;OpenMPI on NetBSD&quot; man, built a 1.4.2 as yet ?
<br>
<p>Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7914.php">Nils Carlson: "[OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="7912.php">Roland Dreier: "Re: [OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
<li><strong>In reply to:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
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
