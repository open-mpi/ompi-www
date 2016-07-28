<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 15 14:51:49 2005" -->
<!-- isoreceived="20050615195149" -->
<!-- sent="Wed, 15 Jun 2005 12:51:47 -0700" -->
<!-- isosent="20050615195147" -->
<!-- name="Benjamin Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="[O-MPI users] re build time" -->
<!-- id="20050615125147.A26867_at_ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="y8hr7f3tod3.fsf_at_harley.mcs.anl.gov" -->
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
<strong>From:</strong> Benjamin Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-15 14:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0071.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0069.php">Brian Barrett: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
<li><strong>In reply to:</strong> <a href="0068.php">Matthew Knepley: "Re: [O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0071.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0071.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bin/ompi_info presents an opportunity to help all us shlubs that
<br>
have to do gnu build systems.
<br>
<p>It appears it could be extended to include useful bits of info
<br>
that are normally classed as build magic.
<br>
e.g. gnome-config, xml2-config, etc, etc.
<br>
<p>I see lam-config was debated at least briefly back in 2003.
<br>
An openmpi-config would be a marvelous thing to have.
<br>
<p>To expose some of the evil-user assumptions I have to support:
<br>
a) there will be multiple mpis on the system.
<br>
b) only some crufty old version noone wants to use will be
<br>
in the default path or default shared library path.
<br>
and
<br>
c) magically, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --with-mpi=$users_favorite_hacked_local_mpi_build
<br>
is supposed to work.
<br>
or more realistically
<br>
d)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --with-mpich=$someplace_particular0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --with-lam=$someplace_particular1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --with-lampi=$someplace_particular2
<br>
or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --with-openmpi-config=$someplace_close_to_heaven
<br>
is supposed to work.
<br>
<p>I realize all this has *nothing* to do with writing an mpi and
<br>
everything to do with *packaging*.
<br>
<p>Please consider throwing something like this into the initial release.
<br>
<p>Ben
<br>
<p>On Wed, Jun 15, 2005 at 02:24:24PM -0500, Matthew Knepley wrote:
<br>
<span class="quotelev1">&gt;          I would like to emphasize Ben's point about integration.
</span><br>
<span class="quotelev1">&gt; I really could care less whether the implementation works right now
</span><br>
<span class="quotelev1">&gt; or not. However, I care very much how the build system functions,
</span><br>
<span class="quotelev1">&gt; since that it where the hard work of integration will be. You are
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0071.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0069.php">Brian Barrett: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
<li><strong>In reply to:</strong> <a href="0068.php">Matthew Knepley: "Re: [O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0071.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0071.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
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
