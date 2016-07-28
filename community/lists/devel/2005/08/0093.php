<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 09:24:02 2005" -->
<!-- isoreceived="20050808142402" -->
<!-- sent="Mon, 8 Aug 2005 10:23:59 -0400" -->
<!-- isosent="20050808142359" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="c57ac8308544f223374606bde218806d_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A388685F814D54CAE412B2DAB7CE91C016A10_at_initexch.topspincom.com" -->
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
<strong>Date:</strong> 2005-08-08 09:23:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0094.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0092.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0099.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0099.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The README there was just copied over from the beta branch, and there 
<br>
is no mVAPI or Open IB support on the beta branch (the docs usually lag 
<br>
the code base -- they'll get a thorough scrubbing before the formal 
<br>
release).  As we talked about on the teleconference (I confess to not 
<br>
remembering if you were on it or not), Open MPI supports both mVAPI and 
<br>
Open IB.
<br>
<p>I'll go update some of the obvious errors (like this one).
<br>
<p>As for lmpga and lmtl_common, ok, I'll modify the configure scripts as 
<br>
appropriate.  I'm assuming that you're telling me that these two 
<br>
libraries are optional...?  I.e., if we find them, we should use them?  
<br>
But if not, it's not an error...?  Is that correct?  (I don't know what 
<br>
the purpose of these libraries are)
<br>
<p><p>On Aug 8, 2005, at 4:58 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have got the latest code drop and this time I didn't give -r option 
</span><br>
<span class="quotelev1">&gt; to svn co. The last line that it showed me is given below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Checked out revision 6760.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install/configure/build OpenMPI on RHEL3 update 4 
</span><br>
<span class="quotelev1">&gt; machine. For this release, we don't have lmpga and lmtl_common 
</span><br>
<span class="quotelev1">&gt; libraries. We are not using separate VAPI libraries. We only use lvapi 
</span><br>
<span class="quotelev1">&gt; and lmosal. We do have lmpga and lmtl_common libs but with the older 
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the file README of latest check out, I could see the following lin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Support for Quadrics and Infiniband (both mVAPI and OpenIB) is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; missing (see the current code base).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does it mean? Does OpenMPI has support for Infiniband (mVAPI)? I 
</span><br>
<span class="quotelev1">&gt; am not getting why btl mVAPI component is not being built (in my 
</span><br>
<span class="quotelev1">&gt; previous mail with ompi_info output). Could you please let me know 
</span><br>
<span class="quotelev1">&gt; whether OpenMPI has got support for Infiniband (mVAPI)? If yes, what 
</span><br>
<span class="quotelev1">&gt; sort of configuration options that I need to give? Or Do I have to 
</span><br>
<span class="quotelev1">&gt; modify anything in the respective directories? Please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Sridhar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;  From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt;  Sent: Friday, August 05, 2005 6:15 PM
</span><br>
<span class="quotelev1">&gt;  To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;  Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 5, 2005, at 8:02 AM, Sridhar Chirravuri ((schirrav)) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is the output of ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_micrompi-1 ompi]# ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Open MPI: 1.0a1r6612M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#160;&#160; Open MPI SVN revision: r6612M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [snipped]&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The OpenMPI version that I am using r6612 (I could see from the 
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info command). There is NO btl frame where as mpool was built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the configure options,&#160;giving &#160;--with-btl-mvapi=/opt/topspin would
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; sufficient as it has got include and lib64 directories. Therefore it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; will pick up the necessary things. Also, I have set the following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; flags
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; export CFLAGS=&quot;-I/optl/topspin/include -I/opt/topspin/include/vapi&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; export LDFLAGS=&quot;-lmosal -lvapi -L/opt/topspin/lib64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; export btl_mvapi_LDFLAGS=$LDFLAGS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; export btl_mvapi_LIBS=$LDFLAGS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You shouldn't need these -- our configure script should figure all that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; out with just the --with-btl-mvapi switch.&#160; Let us know if it doesn't
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (an explicit goal of our configure script is to handle all this kind of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; complexity and do all the Right Things with a single --with switch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will configure and build the latest code. To get the latest code,&#160;I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; have run the following command. Please let me know if I am not
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; svn co -r6613 <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No -- do not specify the -r switch.&#160; That asks for a specific
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; repository r number, and 6613 only 1 commit beyond your last version.&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current r number at the HEAD is 6746, for example -- 6613 was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; committed around 9am on July 27th.&#160; Specifically, the r number
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; represents a unique state of the *entire* repository.&#160; So every commit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; increments the r number (more Subversion documentation is available
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here: <a href="http://svnbook.red-bean.com/">http://svnbook.red-bean.com/</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that in 6612 and 6613, we still had many of the 3rd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; generation BTL stuff .ompi_ignore'd out, so they would not have built
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (many were removed at 6616, but even more were removed as late as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6658).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the &quot;M&quot; in your version number means that you have locally
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; modified the tree -- so you started with r6612, but then made local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; modifications (the configure script queries Subversion to see what
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; version your tree it; Subversion detects these kinds of things).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you &quot;svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi&quot; (i.e., do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; not specify -r), it'll just get the latest number.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, if you have a checkout already, you can just run &quot;svn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; up&quot; within that tree and it will update to the latest (quite analogous
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to &quot;cvs up&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Configured as..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/openmpi --with-btl-mvapi=/opt/topspin/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you get a subversion checkout, you need to first run autogen.sh.&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the HACKING document for details on this (you don't need to run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; autogen.sh in tarballs) and the README document for common building /
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; running.&#160; Both of these are in the top-level directory of the SVN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checkout (update to the latest to get the most up-to-date README
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; information).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I gave make all, it is configuring again and again, I mean it is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; going in a loop. In my machine, I do not need libmpga and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; libmtl_common, hence I removed -lmpga and -lmtl_common entries from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; config/ompi_check_mvapi.m4 file and then ran autogen.sh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you modify a .m4 file, you need to run autogen.sh again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; autogen.sh is simply a wrapper around all the right GNU Auto tool
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commands (autoconf, autoheader, libtool, automake, etc.) to setup all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the build scripts properly.&#160; However, automake also inserts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dependencies in makefiles such that if any of the dependent m4 files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; change (for example), it should re-run the necessary commands.&#160; In
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; theory, that is supposed to work, but we've never really exercised that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- we just re-run autogen.sh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But could you clarify -- why do you not need libmpga or libmtl_common?&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are these libraries from a different mVAPI implementation?&#160; I would
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; like to have our configure script do the Right Things regardless of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which mVAPI implementation is being used -- if we need to add a little
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; more logic to make this correct, then so be it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't have any clue why the configuration is going in loop even
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; while building. I could see that config.status --recheck is being
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; issued from Makefile and I feel this might the reason for configure 
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; run in loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running autogen.sh should do the Right Things for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="0094.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0092.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0099.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0099.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
