<?
$subject_val = "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 15:14:03 2011" -->
<!-- isoreceived="20110407191403" -->
<!-- sent="Thu, 7 Apr 2011 15:13:56 -0400" -->
<!-- isosent="20110407191356" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.3 and &amp;quot;make distclean&amp;quot; error" -->
<!-- id="B14FD425-29AF-4A67-8DD8-1DBFDED357A5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FFF918C0-D1BA-4A75-B2D7-F58039A7561C_at_lanl.gov" -->
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
<strong>Date:</strong> 2011-04-07 15:13:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16189.php">Jeff Squyres: "Re: [OMPI users] g95 + open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16187.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16165.php">David Gunter: "[OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16190.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<li><strong>Reply:</strong> <a href="16190.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops!  Probably a missed corner case that shouldn't be hard to fix.  I've filed a bug about this, so that it doesn't fall off the to-do list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2768">https://svn.open-mpi.org/trac/ompi/ticket/2768</a>
<br>
<p><p>On Apr 6, 2011, at 3:21 PM, David Gunter wrote:
<br>
<p><span class="quotelev1">&gt; We tend to build OMPI for several different architectures. Rather than untar the archive file each time I'd rather do a &quot;make distclean&quot; in between builds.  However, this always produces the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Making distclean in libltdl
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/user/openmpi-1.4.3/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `distclean'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/user/openmpi-1.4.3/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distclean-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/user/openmpi-1.4.3/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [distclean-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then fails to finish the rest of the cleanup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason is due to to our specific systems and the use of the configure argument --disable-dlopen, so nothing (including the Makefile) gets created in /user/openmpi-1.4.3/opal/libltd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a workaround for this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3: Infrastructure Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="16189.php">Jeff Squyres: "Re: [OMPI users] g95 + open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16187.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16165.php">David Gunter: "[OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16190.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<li><strong>Reply:</strong> <a href="16190.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
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
