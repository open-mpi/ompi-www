<?
$subject_val = "Re: [OMPI users] Valgrind Functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 19:58:41 2008" -->
<!-- isoreceived="20080714235841" -->
<!-- sent="Mon, 14 Jul 2008 16:58:17 -0700 (PDT)" -->
<!-- isosent="20080714235817" -->
<!-- name="Tom Riddle" -->
<!-- email="rarebitusa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Functionality" -->
<!-- id="4709.40422.qm_at_web55404.mail.re4.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="487A4419.6090708_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind Functionality<br>
<strong>From:</strong> Tom Riddle (<em>rarebitusa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 19:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6081.php">Tom Riddle: "[OMPI users] vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="6079.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to all who gave their input. After upgrading to the latest svn version all is well now. Tom
<br>
<p>--- On Sun, 7/13/08, Shiqing Fan &lt;fan_at_[hidden]&gt; wrote:
<br>
From: Shiqing Fan &lt;fan_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Valgrind Functionality
<br>
To: rarebitusa_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Cc: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;, &quot;Rainer Keller&quot; &lt;keller_at_[hidden]&gt;
<br>
Date: Sunday, July 13, 2008, 11:06 AM
<br>
<p>Hello Tom,
<br>
<p>There was a bug in the configure.m4 of memchecker/valgrind, but it 
<br>
shouldn't happen for revision 18303. Now it fixed with r18899.  Could 
<br>
you please svn update your source, and try again?
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p>Tom Riddle wrote:
<br>
<span class="quotelev1">&gt; Thanks, I've gotten to the point of building and running branch/1.3. 
</span><br>
<span class="quotelev1">&gt; However when I attempt to run my simple osu_latency test I get the 
</span><br>
<span class="quotelev1">&gt; following runtime error now, which I hadn't before on a repo pull of 
</span><br>
<span class="quotelev1">&gt; trunk/openmpi-1.3a1r18303
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_memchecker_base_select failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value -13 instead od OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the ompi_info and see the following memchecker
</span><br>
<span class="quotelev1">&gt; MCA memchecker: parameter &quot;memchecker&quot; (current value:
</span><br>
&lt;none&gt;
<br>
<span class="quotelev1">&gt; Default selection set of components for the memchecker framework
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so that looks ok, here is my configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ../configure --prefix=/opt/wkspace/openmpi-1.3 CC=gcc CXX=g++ 
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77 --enable-debug --enable-memchecker 
</span><br>
<span class="quotelev1">&gt; --with-psm=/usr/include --with-valgrind=/opt/wkspace/valgrind-3.3.0/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I'm close, TIA Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On *Sun, 7/13/08, Jeff Squyres /&lt;jsquyres_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] Valgrind Functionality
</span><br>
<span class="quotelev1">&gt;     To: rarebitusa_at_[hidden], &quot;Open MPI Users&quot;
</span><br>
&lt;users_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt;     Cc: &quot;Ashley Pittman&quot;
</span><br>
&lt;apittman_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt;     Date: Sunday, July 13, 2008, 6:16 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Jul 13, 2008, at 9:11 AM, Tom Riddle wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Does anyone know if this feature has been incorporated yet? I did
</span><br>
a
<br>
<span class="quotelev2">&gt;     &gt; ./configure --help but do not see the enable-ptmalloc2-internal  
</span><br>
<span class="quotelev2">&gt;     &gt; option.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; - The ptmalloc2 memory manager component is now by default built
</span><br>
as
<br>
<span class="quotelev2">&gt;     &gt;   a standalone library named libopenmpi-malloc.  Users wanting to
</span><br>
<span class="quotelev2">&gt;     &gt;   use leave_pinned with ptmalloc2 will now need to link the
</span><br>
<span class="quotelev1">&gt;      library
</span><br>
<span class="quotelev2">&gt;     &gt;   into their application explicitly.  All other users will use
</span><br>
the
<br>
<span class="quotelev2">&gt;     &gt;   libc-provided allocator instead of Open MPI's ptmalloc2. 
</span><br>
This  
<br>
<span class="quotelev2">&gt;     &gt; change
</span><br>
<span class="quotelev2">&gt;     &gt;   may be overriden with the configure option
</span><br>
enable-ptmalloc2-internal
<br>
<span class="quotelev2">&gt;     &gt;   --&gt; Expected: 1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This is on the trunk/v1.3 branch, yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The default in v1.3 is that ptmalloc2 is *not* built into libopen- 
</span><br>
<span class="quotelev1">&gt;     pal.  This is different than v1.2, where ptmalloc2 *was* included in  
</span><br>
<span class="quotelev1">&gt;     libopen-pal unless you specified --disable-memory-manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
--------------------------------------------------------------
Shiqing Fan                     
<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing            Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
POSTAL:Nobelstrasse 19                email: fan_at_[hidden]     
ACTUAL:Allmandring 30
70569 Stuttgart
      
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6081.php">Tom Riddle: "[OMPI users] vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="6079.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
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
