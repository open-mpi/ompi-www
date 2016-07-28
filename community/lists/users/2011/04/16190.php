<?
$subject_val = "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 11:05:02 2011" -->
<!-- isoreceived="20110408150502" -->
<!-- sent="Fri, 8 Apr 2011 11:04:56 -0400" -->
<!-- isosent="20110408150456" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.3 and &amp;quot;make distclean&amp;quot; error" -->
<!-- id="ABD83006-BF86-441F-BFA3-662B8C3B8D9E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B14FD425-29AF-4A67-8DD8-1DBFDED357A5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-08 11:04:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16191.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="16189.php">Jeff Squyres: "Re: [OMPI users] g95 + open-mpi"</a>
<li><strong>In reply to:</strong> <a href="16188.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed on the trunk in r24603; I filed CMRs to bring it to v1.4 and v1.5.  Thanks for reporting the issue.
<br>
<p>Gus did mention a good workaround for current releases: you can use VPATH builds to get the same effect (i.e., just rm -rf the build directory when done).
<br>
<p><p>On Apr 7, 2011, at 3:13 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Oops!  Probably a missed corner case that shouldn't be hard to fix.  I've filed a bug about this, so that it doesn't fall off the to-do list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2768">https://svn.open-mpi.org/trac/ompi/ticket/2768</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2011, at 3:21 PM, David Gunter wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We tend to build OMPI for several different architectures. Rather than untar the archive file each time I'd rather do a &quot;make distclean&quot; in between builds.  However, this always produces the following error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Making distclean in libltdl
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/user/openmpi-1.4.3/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `distclean'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/user/openmpi-1.4.3/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [distclean-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/user/openmpi-1.4.3/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [distclean-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and then fails to finish the rest of the cleanup.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The reason is due to to our specific systems and the use of the configure argument --disable-dlopen, so nothing (including the Makefile) gets created in /user/openmpi-1.4.3/opal/libltd.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a workaround for this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; david
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Gunter
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3: Infrastructure Team
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="16191.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="16189.php">Jeff Squyres: "Re: [OMPI users] g95 + open-mpi"</a>
<li><strong>In reply to:</strong> <a href="16188.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
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
