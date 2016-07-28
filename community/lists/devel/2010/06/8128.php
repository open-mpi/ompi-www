<?
$subject_val = "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 08:15:42 2010" -->
<!-- isoreceived="20100630121542" -->
<!-- sent="Wed, 30 Jun 2010 08:15:39 -0400" -->
<!-- isosent="20100630121539" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create" -->
<!-- id="0F5F2D98-F00A-4F44-BF10-28108D8B65A8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimkYDrSB-tCa8FJ6Od8tHKl0cIV9qE9uZBG5C5V_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 08:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8129.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8125.php">Paul Hilscher: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8130.php">Paul Hilscher: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 30, 2010, at 12:36 AM, Paul Hilscher wrote:
<br>
<p><span class="quotelev2">&gt; &gt;Open MPI currently has very limited cartesian support -- it actually doesn't remap anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see, OpenMPI doesn't remap anything; this explains probably why my runtime of my simulation varies sometimes between 30% for the same setup.
</span><br>
<p>If you're relying on remapping and your environment would benefit from remapping, then yes, that could be a factor here.
<br>
<p><span class="quotelev2">&gt; &gt;Would you have any interest in writing a partitioning algorithm for your needs within the context of a plugin?  I'd be happy to walk &gt;you through the process; it's not too complicated (although we should probably move the discussion off to the Open MPI devel &gt;mailing list).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess after using for more than a decade Open Source Software, it's time to give something back :). ... so yes, I am willing to do that !!
</span><br>
<p>Exxxcellent.  :-)
<br>
<p><span class="quotelev1">&gt; Because I am not yet experienced with OpenMPI internals, I would really appreciate your advice, if you could tell me where exactly I have to dig into.. I guess it should be around ompi_topo_create function, but how to write MPI_Cart_Create as a plugin, I will rely on you information. And do you know if MPICH, LAM etc. have an efficient implementation of MPI_Cart_Create ? so I can borrow some ideas from them....
</span><br>
<p>Heh.  I used to be the LAM/MPI guy; we stole some of LAM's topology stuff (including the unity mapping) for Open MPI.  :-)
<br>
<p>What you really want to do is create a new &quot;topo&quot; plugin.  Topo plugins are automatically called behind the scenes for MPI_Cart_create and friends -- you don't need to muck about in ompi_topo_create() at all.
<br>
<p>If you look in ompi/mca/topo, that's the top-level directory for the topo framework (meaning: all of our topo &quot;glue&quot; code is in there in the &quot;base/&quot; subdirectory, and all topo plugins are subdirs in there as well).  There's only 1 plugin at the moment: it's called &quot;unity&quot; -- because it doesn't do any transforms.  
<br>
<p>Everything that the unity component does is contained in ompi/mca/topo/unity.
<br>
<p>Before going any further, let's talk about some logistics.  
<br>
<p>1. Where to do this work?  Possibilities are:
<br>
&nbsp;&nbsp;&nbsp;a. The v1.4 branch
<br>
&nbsp;&nbsp;&nbsp;b. The v1.5 branch
<br>
&nbsp;&nbsp;&nbsp;c. Our Subversion trunk
<br>
&nbsp;&nbsp;&nbsp;d. Elsewhere
<br>
<p>a. is not a good choice; it's in it's &quot;stable&quot; phase, meaning that new features are not supposed to be added, and the v1.5.0 release it potentially within the next week or two.  b. is also not a good choice; we tend to develop on the SVN trunk and then migrate to the v1.5 branch as needed.  c. is probably a reasonable choice, but I'd actually prefer d; here's why... 
<br>
<p>In MPI-2.2, some new topology functions were added.  I set about adding these functions to Open MPI, which meant expanding the topo framework a bit (and the unity plugin).  I got about halfway through this work before being called off to tend other fires.  As with a lot of Open MPI development, I did this work in a Mercurial branch off our subversion trunk.
<br>
<p>Your offer inspires me to finally get off my butt and finish the MPI-2.2 topology functions in that Mercurial branch.  Collaborating in the Mercurial branch is probably a good place to do this work -- several of us OMPI developers use bitbucket.org for Mercurial hosting, which offers free accounts for collaborators:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/ompi-topo-fixes">http://bitbucket.org/jsquyres/ompi-topo-fixes</a>
<br>
<p>The above URL is where my Mercurial branch is for this work.  If you sign up for an account on bitbucket (it's free), I'll give you write access.
<br>
<p>This work will eventually be committed back to the SVN trunk and then move in to the v1.5 branch, meaning that it would be included in future v1.5.x releases.
<br>
<p>2. For any contribution of &quot;non-trivial&quot; size, we need a signed copy of the Open MPI 3rd party contribution agreement.  I apologize about this, but it's what we need to do to maintain cleanliness of the intellectual property in Open MPI and guarantee that we can continue to distribute it under the BSD license.  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a>
<br>
<p>Note that the form is pretty much the Apache contribution agreement; we essentially s/Apache/Open MPI/g.
<br>
<p>If it'll take a little time to get this done, that's no problem -- we can collaborate in the bitbucket and just hold off bringing any of your work into SVN until the agreement is signed.
<br>
<p>3. In the bitbucket repo, I created an &quot;example&quot; topo plugin in addition to the unity plugin.  It'll never be used at run-time; it's sole purpose in life is to be an example on how to write new topo plugins.
<br>
<p>I'll need to re-evaluate the state of that repo and see where it is, what is left to be done, etc.  But I think it's at least in a compilable state and should at least nominally work (the new MPI-2.2 stuff may not work yet).  
<br>
<p>4. Some references for you:
<br>
<p>- Read <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/HACKING">https://svn.open-mpi.org/trac/ompi/browser/trunk/HACKING</a> for how to build OMPI from an SVN or Mercurial checkout.
<br>
- Read <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a> for a description of how to add a new plugin (&quot;component&quot;) to Open MPI
<br>
- Read <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a> to understand what autogen.sh does in the build process.
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
<li><strong>Next message:</strong> <a href="8129.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8125.php">Paul Hilscher: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8130.php">Paul Hilscher: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
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
