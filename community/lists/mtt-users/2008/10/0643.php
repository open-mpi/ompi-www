<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 13:42:34 2008" -->
<!-- isoreceived="20081031174234" -->
<!-- sent="Fri, 31 Oct 2008 12:42:28 -0500" -->
<!-- isosent="20081031174228" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="20081031174228.GH12131_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="63B74277-B142-4610-80CA-E12F86D8D3BF_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 13:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct/30/2008 06:04:06PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Tim and I discussed this on the phone the other day and then I talked about 
</span><br>
<span class="quotelev1">&gt; it more with Ethan.  After all this discussion, I committed a variant of 
</span><br>
<span class="quotelev1">&gt; Tim's patch into an HG for review before putting it back on the SVN trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mtt-fast-scratch/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mtt-fast-scratch/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have a milliways account, you can get to it via ssh and therefore be 
</span><br>
<span class="quotelev1">&gt; able to push back into it.  http clones won't be able to push back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the changes I made:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I changed Tim's original concept a little bit: instead of having a 
</span><br>
<span class="quotelev1">&gt; &quot;local&quot; scratch, I called it &quot;fast scratch&quot;.  The idea is that there is a 
</span><br>
<span class="quotelev1">&gt; &quot;fast&quot; scratch space *that neither persistent nor global*.  It gets whacked 
</span><br>
<span class="quotelev1">&gt; (by default) at the end of the MTT invocation.  It has no protection for 
</span><br>
<span class="quotelev1">&gt; multiple MTT invocations using it simultaneously.  Any part of the MTT code 
</span><br>
<span class="quotelev1">&gt; base can use this fast scratch if they want to.  If somewhere wants to use 
</span><br>
<span class="quotelev1">&gt; it, they are responsible for making a &quot;safe&quot; section in the fast scratch 
</span><br>
<span class="quotelev1">&gt; tree.  The only place currently using it is the MPI::Install phase (it 
</span><br>
<span class="quotelev1">&gt; makes $fast_scratch/mpi-install/ and does stuff under there); if there's a 
</span><br>
<span class="quotelev1">&gt; build portion of that install, the fast scratch can be used.  As Tim set 
</span><br>
<span class="quotelev1">&gt; it, the builddir is set to point into the fast scratch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. New [MTT] section fields:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - delete_fast_scratch: defaults to 1, but can be overridden.  If 1, the 
</span><br>
<span class="quotelev1">&gt; entire fast scratch tree will be rm -rf'ed when the current INI file run is 
</span><br>
<span class="quotelev1">&gt; complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - save_fast_scratch_files: a comma-delimited list of files to be saved from 
</span><br>
<span class="quotelev1">&gt; the fast scratch tree before it is whacked.  It defaults to &quot;config.log&quot;.  
</span><br>
<span class="quotelev1">&gt; A Files:: subroutine (currently only invoked by MPI::Install.pm) scans a 
</span><br>
<span class="quotelev1">&gt; designated sub-tree in the fast scratch and sees if it finds any files 
</span><br>
<span class="quotelev1">&gt; matching those names (e.g., config.log).  If it does, it preserves the 
</span><br>
<span class="quotelev1">&gt; directory hierarchy it found in the fast scratch when copying the file to 
</span><br>
<span class="quotelev1">&gt; the persistent scratch tree.  For example, saving config.log in an OMPI 
</span><br>
<span class="quotelev1">&gt; build, you'll end up with the following in $scratch/installs/&lt;4CHAR&gt;/fssf 
</span><br>
<span class="quotelev1">&gt; (= fast scratch save files):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./src/openmpi-1.4a1r19857/ompi/contrib/vt/vt/config.log
</span><br>
<span class="quotelev1">&gt;     ./src/openmpi-1.4a1r19857/ompi/contrib/vt/vt/extlib/otf/config.log
</span><br>
<span class="quotelev1">&gt;     ./src/openmpi-1.4a1r19857/ompi/mca/io/romio/romio/config.log
</span><br>
<span class="quotelev1">&gt;     ./src/openmpi-1.4a1r19857/config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. I toyed with the idea of adding an option for saving the *entire* fast 
</span><br>
<span class="quotelev1">&gt; scratch MPI install tree to the permanent scratch (on the argument that 
</span><br>
<span class="quotelev1">&gt; [effectively] tar'ing up the entire fast scratch and writing it to the 
</span><br>
<span class="quotelev1">&gt; regular scratch would still be faster than doing all the interactive IO to 
</span><br>
<span class="quotelev1">&gt; build OMPI on the regular scratch), but I have run out of time today and 
</span><br>
<span class="quotelev1">&gt; therefore probably won't get to it.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could probably be featurized a bit more, but I figured that this would 
</span><br>
<span class="quotelev1">&gt; be helpful to several of us and would be worth reviewing and getting into 
</span><br>
<span class="quotelev1">&gt; the SVN trunk, even if we lack a few features.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you guys think?
</span><br>
<p>I just ran this, and it seemed to work fine:
<br>
<p>&nbsp;&nbsp;$ client/mtt --fast-scratch /tmp/mtt-jeff-fast-scratch  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--scratch /workspace/mtt-jeff-slow-scratch
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2008, at 3:44 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Excellent points.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What about a slightly different approach that would allow us to be exactly 
</span><br>
<span class="quotelev2">&gt;&gt; specific?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --scratch=dir1[,dir2[,dir3[,...]]]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And then in the INI file, have fields that indicate which scratch dir you 
</span><br>
<span class="quotelev2">&gt;&gt; want them to use.  For example, the fact that the OMPI MPI Install plugin 
</span><br>
<span class="quotelev2">&gt;&gt; does a build is really a side-effect (not all MPI Install plugins do 
</span><br>
<span class="quotelev2">&gt;&gt; builds).  So we could have a field:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_build_scratch = &amp;scratch(1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or, heck, it doesn't even need to be a function of --scratch at all.  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ompi_build_scratch = &lt;foo&gt;&quot; alone could be good enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 19, 2008, at 12:43 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've also been thinking about this a bit more, and although
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having the name match the INI section name has some appeal,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ultimately think the best name is: --mpi-build-scratch, since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is what it does.  As Ethan mentioned, the actual MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install goes into --scratch.  And on the other side of it,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI Get also goes into --scratch.  The --mpi-build scratch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is only used for untaring/copying the MPI source tree, running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config, make, and make check.  The actual &quot;make install&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simply copies the binaries from --mpi-build-scratch into --scratch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for names like local-scratch or fast-scratch, they don't convey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what it's used for, so should it be fast-for-big-files, of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fast-for-small-files?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or similarly, &quot;local&quot; to my cluster, my node, or what?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think mpi-build-scratch conveys the most useful meaning, since you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should pick a filesystem that is tuned (or at least not horrible) for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing configure/make.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, I won't have time today to get the patch adjusted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and into svn.  Maybe on Monday.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Sep 19, 2008 at 11:23 AM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Sep/18/2008 05:35:13PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 18, 2008, at 10:45 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ah, yeah, ok, now I see why you wouldl call it --mpi-install-scratch, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that it matches the MTT ini section name.  Sure, that works for me.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Since this does seem like a feature that should eventually
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; propogate to all the other phases (except for Test run),
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; what will we call the option to group all the fast phase
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; scratches?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --scratch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Seriously, *if* we ever implement the other per-phase scratches, I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; think
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; having one overall --scratch and fine-grained per-phase specifications
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fine.  I don't think we need to go overboard to have a way to say I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; want
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; phases X, Y, and Z to use scratch A.  Meaning that you could just use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --X-scratch=A --Y-scratch=A and --Z-scratch=A.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mpi-install-scratch actually has MTT install (using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DESTDIR) into --scratch. Is that confusing? Though
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --fast-scratch could also be misleading, as I could see a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user thinking that --fast-scratch will do some magical
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; optimization to make their NFS directory go faster. I guess
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm done splitting hairs over --mpi-install-scratch :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
