<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 18:04:14 2008" -->
<!-- isoreceived="20081030220414" -->
<!-- sent="Thu, 30 Oct 2008 18:04:06 -0400" -->
<!-- isosent="20081030220406" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="63B74277-B142-4610-80CA-E12F86D8D3BF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="22156806-7824-4320-8B2C-C24EEC00A1FD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch to add --local-scratch option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 18:04:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Ethan Mallove: "[MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/09/0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0643.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0643.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim and I discussed this on the phone the other day and then I talked  
<br>
about it more with Ethan.  After all this discussion, I committed a  
<br>
variant of Tim's patch into an HG for review before putting it back on  
<br>
the SVN trunk:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mtt-fast-scratch/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mtt-fast-scratch/</a>
<br>
<p>If you have a milliways account, you can get to it via ssh and  
<br>
therefore be able to push back into it.  http clones won't be able to  
<br>
push back.
<br>
<p>Here's the changes I made:
<br>
<p>1. I changed Tim's original concept a little bit: instead of having a  
<br>
&quot;local&quot; scratch, I called it &quot;fast scratch&quot;.  The idea is that there  
<br>
is a &quot;fast&quot; scratch space *that neither persistent nor global*.  It  
<br>
gets whacked (by default) at the end of the MTT invocation.  It has no  
<br>
protection for multiple MTT invocations using it simultaneously.  Any  
<br>
part of the MTT code base can use this fast scratch if they want to.   
<br>
If somewhere wants to use it, they are responsible for making a &quot;safe&quot;  
<br>
section in the fast scratch tree.  The only place currently using it  
<br>
is the MPI::Install phase (it makes $fast_scratch/mpi-install/ and  
<br>
does stuff under there); if there's a build portion of that install,  
<br>
the fast scratch can be used.  As Tim set it, the builddir is set to  
<br>
point into the fast scratch.
<br>
<p>2. New [MTT] section fields:
<br>
<p>- delete_fast_scratch: defaults to 1, but can be overridden.  If 1,  
<br>
the entire fast scratch tree will be rm -rf'ed when the current INI  
<br>
file run is complete.
<br>
<p>- save_fast_scratch_files: a comma-delimited list of files to be saved  
<br>
from the fast scratch tree before it is whacked.  It defaults to  
<br>
&quot;config.log&quot;.  A Files:: subroutine (currently only invoked by  
<br>
MPI::Install.pm) scans a designated sub-tree in the fast scratch and  
<br>
sees if it finds any files matching those names (e.g., config.log).   
<br>
If it does, it preserves the directory hierarchy it found in the fast  
<br>
scratch when copying the file to the persistent scratch tree.  For  
<br>
example, saving config.log in an OMPI build, you'll end up with the  
<br>
following in $scratch/installs/&lt;4CHAR&gt;/fssf (= fast scratch save files):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./src/openmpi-1.4a1r19857/ompi/contrib/vt/vt/config.log
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./src/openmpi-1.4a1r19857/ompi/contrib/vt/vt/extlib/otf/config.log
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./src/openmpi-1.4a1r19857/ompi/mca/io/romio/romio/config.log
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./src/openmpi-1.4a1r19857/config.log
<br>
<p>3. I toyed with the idea of adding an option for saving the *entire*  
<br>
fast scratch MPI install tree to the permanent scratch (on the  
<br>
argument that [effectively] tar'ing up the entire fast scratch and  
<br>
writing it to the regular scratch would still be faster than doing all  
<br>
the interactive IO to build OMPI on the regular scratch), but I have  
<br>
run out of time today and therefore probably won't get to it.  :-)
<br>
<p>This could probably be featurized a bit more, but I figured that this  
<br>
would be helpful to several of us and would be worth reviewing and  
<br>
getting into the SVN trunk, even if we lack a few features.
<br>
<p>What do you guys think?
<br>
<p><p>On Sep 19, 2008, at 3:44 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Excellent points.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about a slightly different approach that would allow us to be  
</span><br>
<span class="quotelev1">&gt; exactly specific?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --scratch=dir1[,dir2[,dir3[,...]]]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then in the INI file, have fields that indicate which scratch  
</span><br>
<span class="quotelev1">&gt; dir you want them to use.  For example, the fact that the OMPI MPI  
</span><br>
<span class="quotelev1">&gt; Install plugin does a build is really a side-effect (not all MPI  
</span><br>
<span class="quotelev1">&gt; Install plugins do builds).  So we could have a field:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_build_scratch = &amp;scratch(1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, heck, it doesn't even need to be a function of --scratch at  
</span><br>
<span class="quotelev1">&gt; all.  &quot;ompi_build_scratch = &lt;foo&gt;&quot; alone could be good enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2008, at 12:43 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've also been thinking about this a bit more, and although
</span><br>
<span class="quotelev2">&gt;&gt; having the name match the INI section name has some appeal,
</span><br>
<span class="quotelev2">&gt;&gt; I ultimately think the best name is: --mpi-build-scratch, since
</span><br>
<span class="quotelev2">&gt;&gt; that is what it does.  As Ethan mentioned, the actual MPI
</span><br>
<span class="quotelev2">&gt;&gt; install goes into --scratch.  And on the other side of it,
</span><br>
<span class="quotelev2">&gt;&gt; the MPI Get also goes into --scratch.  The --mpi-build scratch
</span><br>
<span class="quotelev2">&gt;&gt; is only used for untaring/copying the MPI source tree, running
</span><br>
<span class="quotelev2">&gt;&gt; config, make, and make check.  The actual &quot;make install&quot;
</span><br>
<span class="quotelev2">&gt;&gt; simply copies the binaries from --mpi-build-scratch into --scratch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for names like local-scratch or fast-scratch, they don't convey
</span><br>
<span class="quotelev2">&gt;&gt; what it's used for, so should it be fast-for-big-files, of fast-for- 
</span><br>
<span class="quotelev2">&gt;&gt; small-files?
</span><br>
<span class="quotelev2">&gt;&gt; Or similarly, &quot;local&quot; to my cluster, my node, or what?
</span><br>
<span class="quotelev2">&gt;&gt; I think mpi-build-scratch conveys the most useful meaning, since you
</span><br>
<span class="quotelev2">&gt;&gt; should pick a filesystem that is tuned (or at least not horrible) for
</span><br>
<span class="quotelev2">&gt;&gt; doing configure/make.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, I won't have time today to get the patch adjusted
</span><br>
<span class="quotelev2">&gt;&gt; and into svn.  Maybe on Monday.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Sep 19, 2008 at 11:23 AM, Ethan Mallove &lt;ethan.mallove_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Sep/18/2008 05:35:13PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 18, 2008, at 10:45 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ah, yeah, ok, now I see why you wouldl call it --mpi-install- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; scratch, so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that it matches the MTT ini section name.  Sure, that works for  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since this does seem like a feature that should eventually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; propogate to all the other phases (except for Test run),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what will we call the option to group all the fast phase
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; scratches?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --scratch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Seriously, *if* we ever implement the other per-phase scratches,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; having one overall --scratch and fine-grained per-phase  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specifications
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fine.  I don't think we need to go overboard to have a way to say  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I want
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phases X, Y, and Z to use scratch A.  Meaning that you could just  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --X-scratch=A --Y-scratch=A and --Z-scratch=A.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mpi-install-scratch actually has MTT install (using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DESTDIR) into --scratch. Is that confusing? Though
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --fast-scratch could also be misleading, as I could see a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user thinking that --fast-scratch will do some magical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimization to make their NFS directory go faster. I guess
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm done splitting hairs over --mpi-install-scratch :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Ethan Mallove: "[MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/09/0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0643.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0643.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
