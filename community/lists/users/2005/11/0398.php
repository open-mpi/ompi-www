<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 13:16:12 2005" -->
<!-- isoreceived="20051128181612" -->
<!-- sent="Mon, 28 Nov 2005 19:16:20 +0100" -->
<!-- isosent="20051128181620" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] pathscale 2.1/2.3 build problem" -->
<!-- id="438B4974.7040708_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="438AD651.7000502_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-28 13:16:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0399.php">Enzo: "[O-MPI users] Problems with accessing list archives"</a>
<li><strong>Previous message:</strong> <a href="0397.php">John Ouellette: "[O-MPI users] problems with bproc cluster"</a>
<li><strong>In reply to:</strong> <a href="0392.php">Dries Kimpe: "[O-MPI users] pathscale 2.1/2.3 build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0404.php">Greg Lindahl: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Reply:</strong> <a href="0404.php">Greg Lindahl: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This time with config.log attached (bz2)
<br>
<p>&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;Dries
<br>
<p><p>Dries Kimpe wrote:
<br>
<span class="quotelev1">&gt;   Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is somebody here building OpenMPI (svn trunk) with PathScale compilers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting the following errors
</span><br>
<span class="quotelev1">&gt; (note that it builds fine with gcc 3.4.4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/data/home/dries/svn/openmpi-trunk/build/pathscale/orte/tools/openmpi'
</span><br>
<span class="quotelev1">&gt; depbase=`echo openmpi.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`; \
</span><br>
<span class="quotelev1">&gt; if pathcc -DHAVE_CONFIG_H -I. -I../../../../../orte/tools/openmpi
</span><br>
<span class="quotelev1">&gt; -I../../../include -I../../../include
</span><br>
<span class="quotelev1">&gt; -DOMPI_PREFIX=&quot;\&quot;/apps/prod/openmpi-pathscale/svn\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; -DOMPI_BINDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/bin\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; -DOMPI_LIBDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/lib\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; -DOMPI_INCDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/include\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; -DOMPI_PKGLIBDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/lib/openmpi\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; -DOMPI_SYSCONFDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/etc\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; -DOMPI_CONFIGURE_USER=&quot;\&quot;dries\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;lo-03-01\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Sun Nov 27 16:19:15 CET 2005\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; -I../../../../../include -I../../../../.. -I../../.. -I../../../include
</span><br>
<span class="quotelev1">&gt; -I../../../../../opal -I../../../../../orte -I../../../../../ompi
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -O3 -march=opteron -fPIC -DPIC -fno-strict-aliasing  -MT
</span><br>
<span class="quotelev1">&gt; openmpi.o -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o openmpi.o
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/tools/openmpi/openmpi.c; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Po&quot;; else rm -f &quot;$depbase.Tpo&quot;; exit
</span><br>
<span class="quotelev1">&gt; 1; fi
</span><br>
<span class="quotelev1">&gt; gcc-3.3: Nov: No such file or directory
</span><br>
<span class="quotelev1">&gt; gcc-3.3: 27: No such file or directory
</span><br>
<span class="quotelev1">&gt; gcc-3.3: 16:19:15: No such file or directory
</span><br>
<span class="quotelev1">&gt; gcc-3.3: CET: No such file or directory
</span><br>
<span class="quotelev1">&gt; gcc-3.3: 2005&quot;: No such file or directory
</span><br>
<span class="quotelev1">&gt; &lt;command line&gt;:17:21: missing terminating &quot; character
</span><br>
<span class="quotelev1">&gt; gcc-3.3: Nov: No such file or directory
</span><br>
<span class="quotelev1">&gt; gcc-3.3: 27: No such file or directory
</span><br>
<span class="quotelev1">&gt; gcc-3.3: 16:19:15: No such file or directory
</span><br>
<span class="quotelev1">&gt; gcc-3.3: CET: No such file or directory
</span><br>
<span class="quotelev1">&gt; gcc-3.3: 2005&quot;: No such file or directory
</span><br>
<span class="quotelev1">&gt; &lt;command line&gt;:17:21: missing terminating &quot; character
</span><br>
<span class="quotelev1">&gt; make[2]: *** [openmpi.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/data/home/dries/svn/openmpi-trunk/build/pathscale/orte/tools/openmpi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/data/home/dries/svn/openmpi-trunk/build/pathscale/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that pathscale doesn't like the way the defines are passed
</span><br>
<span class="quotelev1">&gt; (although it looks correct to me).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tested with version 2.1 and 2.3, and got exactly the same errors.
</span><br>
<span class="quotelev1">&gt; If I manually fix the command line (by setting the defines to something
</span><br>
<span class="quotelev1">&gt; without spaces) everything works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compiler info (2.3):
</span><br>
<span class="quotelev1">&gt; 1 [lo-03-01]~/svn/openmpi-trunk/build/pathscale/orte/tools/openmpi|&gt;
</span><br>
<span class="quotelev1">&gt; pathcc -v
</span><br>
<span class="quotelev1">&gt; PathScale EKOPath(TM) Compiler Suite: Version 2.3
</span><br>
<span class="quotelev1">&gt; Built on: 2005-11-10 18:24:25 -0800
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; GNU gcc version 3.3.1 (PathScale 2.3 driver)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.1:
</span><br>
<span class="quotelev1">&gt; 0 [lo-03-01]~/svn/openmpi-trunk/build/pathscale/orte/tools/openmpi|&gt;
</span><br>
<span class="quotelev1">&gt; pathcc -v
</span><br>
<span class="quotelev1">&gt; PathScale EKOPath(TM) Compiler Suite: Version 2.1
</span><br>
<span class="quotelev1">&gt; Built on: 2005-04-13 23:43:05 -0700
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; GNU gcc version 3.3.1 (PathScale 2.1 driver)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Greetings,
</span><br>
<span class="quotelev1">&gt;   Dries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
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
<p><p><p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0398/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0399.php">Enzo: "[O-MPI users] Problems with accessing list archives"</a>
<li><strong>Previous message:</strong> <a href="0397.php">John Ouellette: "[O-MPI users] problems with bproc cluster"</a>
<li><strong>In reply to:</strong> <a href="0392.php">Dries Kimpe: "[O-MPI users] pathscale 2.1/2.3 build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0404.php">Greg Lindahl: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Reply:</strong> <a href="0404.php">Greg Lindahl: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
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
