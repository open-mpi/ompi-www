<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 15 17:07:53 2005" -->
<!-- isoreceived="20050615220753" -->
<!-- sent="Wed, 15 Jun 2005 18:07:51 -0400" -->
<!-- isosent="20050615220751" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="ac3d4faec1982a9dbd79eec65da55010_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050615125147.A26867_at_ca.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-15 17:07:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 15, 2005, at 3:51 PM, Benjamin Allan wrote:
<br>
<p><span class="quotelev1">&gt; bin/ompi_info presents an opportunity to help all us shlubs that
</span><br>
<span class="quotelev1">&gt; have to do gnu build systems.
</span><br>
<p>Heh.  So you got a bootleg Open MPI tarball after all!  :-)  (I'm 
<br>
actually in the middle of replying to your other post -- sometimes it 
<br>
takes me a while to get all my thoughts together and write them 
<br>
coherently)
<br>
<p>Just please don't sell these tarballs on EBay.  Or if you do, cut us in 
<br>
on some of the profits; more caffeine for the developers!  ;-)
<br>
<p><span class="quotelev1">&gt; It appears it could be extended to include useful bits of info
</span><br>
<span class="quotelev1">&gt; that are normally classed as build magic.
</span><br>
<span class="quotelev1">&gt; e.g. gnome-config, xml2-config, etc, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see lam-config was debated at least briefly back in 2003.
</span><br>
<span class="quotelev1">&gt; An openmpi-config would be a marvelous thing to have.
</span><br>
<p>Yes, we did discuss it.  I summed up why I thought the wrapper 
<br>
compilers (mpicc and friends) were sufficient here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.lam-mpi.org/MailArchives/lam/2003/05/5897.php">http://www.lam-mpi.org/MailArchives/lam/2003/05/5897.php</a>
<br>
<p>Is there a reason you can't just use mpicc and friends?  (more on this 
<br>
below)
<br>
<p>I remember the Bad Old Days (before I was an MPI implementor), trying 
<br>
to get software to compile with multiple different MPI implementations. 
<br>
&nbsp;&nbsp;It was definitely painful.
<br>
<p>When I became an MPI implementor, I decided to make that better.  With 
<br>
LAM (and with Open MPI), we took the attitude that &quot;mpicc (and friends) 
<br>
is all you need&quot;.  The thought was that this made integration with 
<br>
MPI-based tools trivial.  For example, to compile BLACS or HPL or 
<br>
SCALAPACK or ...&lt;insert your favorite tool here&gt;... with LAM/MPI or 
<br>
Open MPI, all you do is zero out all the MPI-specific macros in the 
<br>
Makefile and set CC to mpicc (and F77 to mpif77, etc.).  Other MPI 
<br>
implementations have taken a similar approach.
<br>
<p>In short: we tried to take the entire problem away from MPI integrators 
<br>
-- just use a wrapper compiler and then all the Right Things should 
<br>
happen magically.
<br>
<p><span class="quotelev1">&gt; To expose some of the evil-user assumptions I have to support:
</span><br>
<span class="quotelev1">&gt; a) there will be multiple mpis on the system.
</span><br>
<span class="quotelev1">&gt; b) only some crufty old version noone wants to use will be
</span><br>
<span class="quotelev1">&gt; in the default path or default shared library path.
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; c) magically,
</span><br>
<span class="quotelev1">&gt; 	./configure --with-mpi=$users_favorite_hacked_local_mpi_build
</span><br>
<span class="quotelev1">&gt; is supposed to work.
</span><br>
<span class="quotelev1">&gt; or more realistically
</span><br>
<span class="quotelev1">&gt; d)
</span><br>
<span class="quotelev1">&gt; 	./configure --with-mpich=$someplace_particular0
</span><br>
<span class="quotelev1">&gt; 	./configure --with-lam=$someplace_particular1
</span><br>
<span class="quotelev1">&gt; 	./configure --with-lampi=$someplace_particular2
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 	./configure --with-openmpi-config=$someplace_close_to_heaven
</span><br>
<span class="quotelev1">&gt; is supposed to work.
</span><br>
<p>I guess I don't understand why the following is not sufficient:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=/opt/lam/bin/mpicc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=/opt/openmpi/bin/mpicc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...etc.
<br>
<p>Or, if only parts of the tree are built with MPI, then perhaps 
<br>
something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure MPICC=/opt/lam/bin/mpicc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...etc.
<br>
<p>and have the appropriate Makefiles have &quot;CC=$(MPICC)&quot; (or somesuch).
<br>
<p>I don't mean to be inflammatory -- this is an honest question: is there 
<br>
a reason why --with-foo is preferred to using the wrapper compilers?
<br>
<p><span class="quotelev1">&gt; I realize all this has *nothing* to do with writing an mpi and
</span><br>
<span class="quotelev1">&gt; everything to do with *packaging*.
</span><br>
<p>No problem-o.  Usability and layering features like this are important, 
<br>
and are certainly within the prevue of this list.  Making parallel 
<br>
software a slightly less painful experience is in all of our best 
<br>
interests.
<br>
<p><span class="quotelev1">&gt; Please consider throwing something like this into the initial release.
</span><br>
<p>This is too late for the beta (we actually branched for the beta a 
<br>
while ago), but if you can convince me, I don't see any reason why this 
<br>
can't happen for later releases.  :-)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
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
