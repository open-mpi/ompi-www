<?
$subject_val = "Re: [OMPI users] Valgrind Functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 12:31:32 2008" -->
<!-- isoreceived="20080713163132" -->
<!-- sent="Sun, 13 Jul 2008 09:31:24 -0700 (PDT)" -->
<!-- isosent="20080713163124" -->
<!-- name="Tom Riddle" -->
<!-- email="rarebitusa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Functionality" -->
<!-- id="243906.59543.qm_at_web55402.mail.re4.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9A391D58-6CB2-4942-9534-CA02E98DC4F1_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-13 12:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6068.php">Brock Palen: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>Previous message:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6065.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I've gotten to the point of building and running branch/1.3. However when I attempt to run my simple osu_latency test I get the following runtime error now, which I hadn't before on a repo pull of trunk/openmpi-1.3a1r18303  
<br>
<p>opal_memchecker_base_select failed
<br>
--&gt; Returned value -13 instead od OPAL_SUCCESS
<br>
<p>I checked the ompi_info and see the following memchecker 
<br>
MCA memchecker: parameter &quot;memchecker&quot; (current value: &lt;none&gt;
<br>
Default selection set of components for the memchecker framework 
<br>
<p>so that looks ok, here is my configure
<br>
<p>$ ../configure --prefix=/opt/wkspace/openmpi-1.3 CC=gcc 
<br>
CXX=g++ --disable-mpi-f77 --enable-debug --enable-memchecker 
<br>
--with-psm=/usr/include --with-valgrind=/opt/wkspace/valgrind-3.3.0/
<br>
<p><p>I think I'm close, TIA Tom
<br>
<p>--- On Sun, 7/13/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Valgrind Functionality
<br>
To: rarebitusa_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Cc: &quot;Ashley Pittman&quot; &lt;apittman_at_[hidden]&gt;
<br>
Date: Sunday, July 13, 2008, 6:16 AM
<br>
<p>On Jul 13, 2008, at 9:11 AM, Tom Riddle wrote:
<br>
<p><span class="quotelev1">&gt; Does anyone know if this feature has been incorporated yet? I did a
</span><br>
<span class="quotelev1">&gt; ./configure --help but do not see the enable-ptmalloc2-internal  
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The ptmalloc2 memory manager component is now by default built as
</span><br>
<span class="quotelev1">&gt;   a standalone library named libopenmpi-malloc.  Users wanting to
</span><br>
<span class="quotelev1">&gt;   use leave_pinned with ptmalloc2 will now need to link the library
</span><br>
<span class="quotelev1">&gt;   into their application explicitly.  All other users will use the
</span><br>
<span class="quotelev1">&gt;   libc-provided allocator instead of Open MPI's ptmalloc2.  This  
</span><br>
<span class="quotelev1">&gt; change
</span><br>
<span class="quotelev1">&gt;   may be overriden with the configure option enable-ptmalloc2-internal
</span><br>
<span class="quotelev1">&gt;   --&gt; Expected: 1.3
</span><br>
<p>This is on the trunk/v1.3 branch, yes.
<br>
<p>The default in v1.3 is that ptmalloc2 is *not* built into libopen- 
<br>
pal.  This is different than v1.2, where ptmalloc2 *was* included in  
<br>
libopen-pal unless you specified --disable-memory-manager.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
      
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6068.php">Brock Palen: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>Previous message:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6065.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
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
