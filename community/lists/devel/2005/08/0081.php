<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug  5 07:44:47 2005" -->
<!-- isoreceived="20050805124447" -->
<!-- sent="Fri, 5 Aug 2005 08:44:40 -0400" -->
<!-- isosent="20050805124440" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="aa17f5ba51f3a191de003275e23d8f5a_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AAC329F11B438F43BBA91F50013A69B62453F0_at_xmb-blr-413.apac.cisco.com" -->
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
<strong>Date:</strong> 2005-08-05 07:44:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0082.php">Gleb Natapov: "[PATCH] wrong variable type in OpenIB."</a>
<li><strong>Previous message:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 5, 2005, at 8:02 AM, Sridhar Chirravuri ((schirrav)) wrote:
<br>
<p><span class="quotelev1">&gt; Here is the output of ompi_info
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; [root_at_micrompi-1 ompi]# ompi_info
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Open MPI: 1.0a1r6612M
</span><br>
<span class="quotelev1">&gt; &#160;&#160; Open MPI SVN revision: r6612M
</span><br>
<span class="quotelev1">&gt; [snipped]&#160;
</span><br>
<span class="quotelev1">&gt; The OpenMPI version that I am using r6612 (I could see from the output 
</span><br>
<span class="quotelev1">&gt; ompi_info command). There is NO btl frame where as mpool was built.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; In the configure options,&#160;giving &#160;--with-btl-mvapi=/opt/topspin would 
</span><br>
<span class="quotelev1">&gt; sufficient as it has got include and lib64 directories. Therefore it 
</span><br>
<span class="quotelev1">&gt; will pick up the necessary things. Also, I have set the following 
</span><br>
<span class="quotelev1">&gt; flags
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; export CFLAGS=&quot;-I/optl/topspin/include -I/opt/topspin/include/vapi&quot;
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=&quot;-lmosal -lvapi -L/opt/topspin/lib64&quot;
</span><br>
<span class="quotelev1">&gt; export btl_mvapi_LDFLAGS=$LDFLAGS
</span><br>
<span class="quotelev1">&gt; export btl_mvapi_LIBS=$LDFLAGS
</span><br>
<p>You shouldn't need these -- our configure script should figure all that 
<br>
out with just the --with-btl-mvapi switch.  Let us know if it doesn't 
<br>
(an explicit goal of our configure script is to handle all this kind of 
<br>
complexity and do all the Right Things with a single --with switch).
<br>
<p><span class="quotelev1">&gt; I will configure and build the latest code. To get the latest code,&#160;I 
</span><br>
<span class="quotelev1">&gt; have run the following command. Please let me know if I am not 
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; svn co -r6613 <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi
</span><br>
<p>No -- do not specify the -r switch.  That asks for a specific 
<br>
repository r number, and 6613 only 1 commit beyond your last version.  
<br>
The current r number at the HEAD is 6746, for example -- 6613 was 
<br>
committed around 9am on July 27th.  Specifically, the r number 
<br>
represents a unique state of the *entire* repository.  So every commit 
<br>
increments the r number (more Subversion documentation is available 
<br>
here: <a href="http://svnbook.red-bean.com/">http://svnbook.red-bean.com/</a>).
<br>
<p>I believe that in 6612 and 6613, we still had many of the 3rd 
<br>
generation BTL stuff .ompi_ignore'd out, so they would not have built 
<br>
(many were removed at 6616, but even more were removed as late as 
<br>
6658).
<br>
<p>Note that the &quot;M&quot; in your version number means that you have locally 
<br>
modified the tree -- so you started with r6612, but then made local 
<br>
modifications (the configure script queries Subversion to see what 
<br>
version your tree it; Subversion detects these kinds of things).
<br>
<p>If you &quot;svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi&quot; (i.e., do 
<br>
not specify -r), it'll just get the latest number.
<br>
<p>Alternatively, if you have a checkout already, you can just run &quot;svn 
<br>
up&quot; within that tree and it will update to the latest (quite analogous 
<br>
to &quot;cvs up&quot;).
<br>
<p><span class="quotelev1">&gt; Configured as..
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/openmpi --with-btl-mvapi=/opt/topspin/
</span><br>
<p>When you get a subversion checkout, you need to first run autogen.sh.  
<br>
See the HACKING document for details on this (you don't need to run 
<br>
autogen.sh in tarballs) and the README document for common building / 
<br>
running.  Both of these are in the top-level directory of the SVN 
<br>
checkout (update to the latest to get the most up-to-date README 
<br>
information).
<br>
<p><span class="quotelev1">&gt; When I gave make all, it is configuring again and again, I mean it is 
</span><br>
<span class="quotelev1">&gt; going in a loop. In my machine, I do not need libmpga and 
</span><br>
<span class="quotelev1">&gt; libmtl_common, hence I removed -lmpga and -lmtl_common entries from 
</span><br>
<span class="quotelev1">&gt; config/ompi_check_mvapi.m4 file and then ran autogen.sh.
</span><br>
<p>If you modify a .m4 file, you need to run autogen.sh again.
<br>
<p>autogen.sh is simply a wrapper around all the right GNU Auto tool 
<br>
commands (autoconf, autoheader, libtool, automake, etc.) to setup all 
<br>
the build scripts properly.  However, automake also inserts 
<br>
dependencies in makefiles such that if any of the dependent m4 files 
<br>
change (for example), it should re-run the necessary commands.  In 
<br>
theory, that is supposed to work, but we've never really exercised that 
<br>
-- we just re-run autogen.sh.
<br>
<p>But could you clarify -- why do you not need libmpga or libmtl_common?  
<br>
Are these libraries from a different mVAPI implementation?  I would 
<br>
like to have our configure script do the Right Things regardless of 
<br>
which mVAPI implementation is being used -- if we need to add a little 
<br>
more logic to make this correct, then so be it.
<br>
<p><span class="quotelev1">&gt; I don't have any clue why the configuration is going in loop even 
</span><br>
<span class="quotelev1">&gt; while building. I could see that config.status --recheck is being 
</span><br>
<span class="quotelev1">&gt; issued from Makefile and I feel this might the reason for configure to 
</span><br>
<span class="quotelev1">&gt; run in loop.
</span><br>
<p>Running autogen.sh should do the Right Things for you.
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
<li><strong>Next message:</strong> <a href="0082.php">Gleb Natapov: "[PATCH] wrong variable type in OpenIB."</a>
<li><strong>Previous message:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
