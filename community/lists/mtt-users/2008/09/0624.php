<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 15:44:16 2008" -->
<!-- isoreceived="20080919194416" -->
<!-- sent="Fri, 19 Sep 2008 15:44:08 -0400" -->
<!-- isosent="20080919194408" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="22156806-7824-4320-8B2C-C24EEC00A1FD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220809190943t27225052u4327ee6ecdb0975a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-09-19 15:44:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0625.php">Ethan Mallove: "[MTT users] [BOLO] MTT can abort on &quot;min_disk_free&quot; check"</a>
<li><strong>Previous message:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0635.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0635.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent points.
<br>
<p>What about a slightly different approach that would allow us to be  
<br>
exactly specific?
<br>
<p>--scratch=dir1[,dir2[,dir3[,...]]]
<br>
<p>And then in the INI file, have fields that indicate which scratch dir  
<br>
you want them to use.  For example, the fact that the OMPI MPI Install  
<br>
plugin does a build is really a side-effect (not all MPI Install  
<br>
plugins do builds).  So we could have a field:
<br>
<p>ompi_build_scratch = &amp;scratch(1)
<br>
<p>Or, heck, it doesn't even need to be a function of --scratch at all.   
<br>
&quot;ompi_build_scratch = &lt;foo&gt;&quot; alone could be good enough.
<br>
<p><p><p>On Sep 19, 2008, at 12:43 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; I've also been thinking about this a bit more, and although
</span><br>
<span class="quotelev1">&gt; having the name match the INI section name has some appeal,
</span><br>
<span class="quotelev1">&gt; I ultimately think the best name is: --mpi-build-scratch, since
</span><br>
<span class="quotelev1">&gt; that is what it does.  As Ethan mentioned, the actual MPI
</span><br>
<span class="quotelev1">&gt; install goes into --scratch.  And on the other side of it,
</span><br>
<span class="quotelev1">&gt; the MPI Get also goes into --scratch.  The --mpi-build scratch
</span><br>
<span class="quotelev1">&gt; is only used for untaring/copying the MPI source tree, running
</span><br>
<span class="quotelev1">&gt; config, make, and make check.  The actual &quot;make install&quot;
</span><br>
<span class="quotelev1">&gt; simply copies the binaries from --mpi-build-scratch into --scratch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for names like local-scratch or fast-scratch, they don't convey
</span><br>
<span class="quotelev1">&gt; what it's used for, so should it be fast-for-big-files, of fast-for- 
</span><br>
<span class="quotelev1">&gt; small-files?
</span><br>
<span class="quotelev1">&gt; Or similarly, &quot;local&quot; to my cluster, my node, or what?
</span><br>
<span class="quotelev1">&gt; I think mpi-build-scratch conveys the most useful meaning, since you
</span><br>
<span class="quotelev1">&gt; should pick a filesystem that is tuned (or at least not horrible) for
</span><br>
<span class="quotelev1">&gt; doing configure/make.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I won't have time today to get the patch adjusted
</span><br>
<span class="quotelev1">&gt; and into svn.  Maybe on Monday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 19, 2008 at 11:23 AM, Ethan Mallove  
</span><br>
<span class="quotelev1">&gt; &lt;ethan.mallove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep/18/2008 05:35:13PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 18, 2008, at 10:45 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ah, yeah, ok, now I see why you wouldl call it --mpi-install- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; scratch, so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that it matches the MTT ini section name.  Sure, that works for  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since this does seem like a feature that should eventually
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; propogate to all the other phases (except for Test run),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what will we call the option to group all the fast phase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scratches?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --scratch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seriously, *if* we ever implement the other per-phase scratches, I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having one overall --scratch and fine-grained per-phase  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine.  I don't think we need to go overboard to have a way to say  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phases X, Y, and Z to use scratch A.  Meaning that you could just  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --X-scratch=A --Y-scratch=A and --Z-scratch=A.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --mpi-install-scratch actually has MTT install (using
</span><br>
<span class="quotelev2">&gt;&gt; DESTDIR) into --scratch. Is that confusing? Though
</span><br>
<span class="quotelev2">&gt;&gt; --fast-scratch could also be misleading, as I could see a
</span><br>
<span class="quotelev2">&gt;&gt; user thinking that --fast-scratch will do some magical
</span><br>
<span class="quotelev2">&gt;&gt; optimization to make their NFS directory go faster. I guess
</span><br>
<span class="quotelev2">&gt;&gt; I'm done splitting hairs over --mpi-install-scratch :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0625.php">Ethan Mallove: "[MTT users] [BOLO] MTT can abort on &quot;min_disk_free&quot; check"</a>
<li><strong>Previous message:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0635.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0635.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
