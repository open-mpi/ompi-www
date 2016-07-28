<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 05:05:01 2005" -->
<!-- isoreceived="20051128100501" -->
<!-- sent="Mon, 28 Nov 2005 11:05:05 +0100" -->
<!-- isosent="20051128100505" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="[O-MPI users] pathscale 2.1/2.3 build problem" -->
<!-- id="438AD651.7000502_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2005-11-28 05:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0393.php">Arnold Meijster: "[O-MPI users] Problems running simple hello world program"</a>
<li><strong>Previous message:</strong> <a href="0391.php">Audet, Martin: "[O-MPI users] MPI_Offset and C++ interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0394.php">Troy Telford: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Reply:</strong> <a href="0394.php">Troy Telford: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Reply:</strong> <a href="0395.php">Rainer Keller: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Reply:</strong> <a href="0398.php">Dries Kimpe: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi,
<br>
<p>is somebody here building OpenMPI (svn trunk) with PathScale compilers?
<br>
<p>I'm getting the following errors
<br>
(note that it builds fine with gcc 3.4.4)
<br>
<p>make[2]: Entering directory
<br>
`/data/home/dries/svn/openmpi-trunk/build/pathscale/orte/tools/openmpi'
<br>
depbase=`echo openmpi.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`; \
<br>
if pathcc -DHAVE_CONFIG_H -I. -I../../../../../orte/tools/openmpi
<br>
-I../../../include -I../../../include
<br>
-DOMPI_PREFIX=&quot;\&quot;/apps/prod/openmpi-pathscale/svn\&quot;&quot;
<br>
-DOMPI_BINDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/bin\&quot;&quot;
<br>
-DOMPI_LIBDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/lib\&quot;&quot;
<br>
-DOMPI_INCDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/include\&quot;&quot;
<br>
-DOMPI_PKGLIBDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/lib/openmpi\&quot;&quot;
<br>
-DOMPI_SYSCONFDIR=&quot;\&quot;/apps/prod/openmpi-pathscale/svn/etc\&quot;&quot;
<br>
-DOMPI_CONFIGURE_USER=&quot;\&quot;dries\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;lo-03-01\&quot;&quot;
<br>
-DOMPI_CONFIGURE_DATE=&quot;\&quot;Sun Nov 27 16:19:15 CET 2005\&quot;&quot;
<br>
-I../../../../../include -I../../../../.. -I../../.. -I../../../include
<br>
-I../../../../../opal -I../../../../../orte -I../../../../../ompi
<br>
-DNDEBUG -O3 -march=opteron -fPIC -DPIC -fno-strict-aliasing  -MT
<br>
openmpi.o -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o openmpi.o
<br>
../../../../../orte/tools/openmpi/openmpi.c; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Po&quot;; else rm -f &quot;$depbase.Tpo&quot;; exit
<br>
1; fi
<br>
gcc-3.3: Nov: No such file or directory
<br>
gcc-3.3: 27: No such file or directory
<br>
gcc-3.3: 16:19:15: No such file or directory
<br>
gcc-3.3: CET: No such file or directory
<br>
gcc-3.3: 2005&quot;: No such file or directory
<br>
&lt;command line&gt;:17:21: missing terminating &quot; character
<br>
gcc-3.3: Nov: No such file or directory
<br>
gcc-3.3: 27: No such file or directory
<br>
gcc-3.3: 16:19:15: No such file or directory
<br>
gcc-3.3: CET: No such file or directory
<br>
gcc-3.3: 2005&quot;: No such file or directory
<br>
&lt;command line&gt;:17:21: missing terminating &quot; character
<br>
make[2]: *** [openmpi.o] Error 1
<br>
make[2]: Leaving directory
<br>
`/data/home/dries/svn/openmpi-trunk/build/pathscale/orte/tools/openmpi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/data/home/dries/svn/openmpi-trunk/build/pathscale/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>It seems that pathscale doesn't like the way the defines are passed
<br>
(although it looks correct to me).
<br>
<p>I've tested with version 2.1 and 2.3, and got exactly the same errors.
<br>
If I manually fix the command line (by setting the defines to something
<br>
without spaces) everything works.
<br>
<p>compiler info (2.3):
<br>
1 [lo-03-01]~/svn/openmpi-trunk/build/pathscale/orte/tools/openmpi|&gt;
<br>
pathcc -v
<br>
PathScale EKOPath(TM) Compiler Suite: Version 2.3
<br>
Built on: 2005-11-10 18:24:25 -0800
<br>
Thread model: posix
<br>
GNU gcc version 3.3.1 (PathScale 2.3 driver)
<br>
<p>2.1:
<br>
0 [lo-03-01]~/svn/openmpi-trunk/build/pathscale/orte/tools/openmpi|&gt;
<br>
pathcc -v
<br>
PathScale EKOPath(TM) Compiler Suite: Version 2.1
<br>
Built on: 2005-04-13 23:43:05 -0700
<br>
Thread model: posix
<br>
GNU gcc version 3.3.1 (PathScale 2.1 driver)
<br>
<p>&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;Dries
<br>
<p><p><p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0393.php">Arnold Meijster: "[O-MPI users] Problems running simple hello world program"</a>
<li><strong>Previous message:</strong> <a href="0391.php">Audet, Martin: "[O-MPI users] MPI_Offset and C++ interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0394.php">Troy Telford: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Reply:</strong> <a href="0394.php">Troy Telford: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Reply:</strong> <a href="0395.php">Rainer Keller: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Reply:</strong> <a href="0398.php">Dries Kimpe: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
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
