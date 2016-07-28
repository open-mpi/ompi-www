<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 12 08:25:49 2007" -->
<!-- isoreceived="20070512122549" -->
<!-- sent="Sat, 12 May 2007 05:25:45 -0700 (PDT)" -->
<!-- isosent="20070512122545" -->
<!-- name="Rob" -->
<!-- email="spamrefuse_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlphaServers &amp;amp; OpenMPI" -->
<!-- id="18754.90980.qm_at_web33315.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] AlphaServers &amp;amp; OpenMPI" -->
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
<strong>From:</strong> Rob (<em>spamrefuse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-12 08:25:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3251.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3249.php">Sefa Arslan: "[OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>Maybe in reply to:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3251.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3251.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This specific problem may be due to a bug that Brian just found/fixed
</span><br>
<span class="quotelev1">&gt; in the configure script last night (due to a bug report from Paul Van  
</span><br>
<span class="quotelev1">&gt; Allsburg).  Could you try any nightly trunk tarball after r14600 (the  
</span><br>
<span class="quotelev1">&gt; fix hasn't made its way over to the 1.2 release branch yet; I assume  
</span><br>
<span class="quotelev1">&gt; it will soon)?
</span><br>
<p>I got the nightly built tarball from version 1.3a1r14639, but now the make
<br>
ends with:
<br>
<p><p>libtool: compile:  /opt/gcc/bin/gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -DPKGDATADIR=\&quot;/opt/openmpi/share/openmpi\&quot; -I../../../.. -O3 -DNDEBUG -mfp-trap-mode=su -finline-functions -fno-strict-aliasing -pthread -MT btl_openib_component.lo -MD -MP -MF .deps/btl_openib_component.Tpo -c btl_openib_component.c  -fPIC -DPIC -o .libs/btl_openib_component.o
<br>
btl_openib_component.c: In function 'btl_openib_async_thread':
<br>
btl_openib_component.c:1203: error: 'IBV_EVENT_CLIENT_REREGISTER' undeclared (first use in this function)
<br>
btl_openib_component.c:1203: error: (Each undeclared identifier is reported only once
<br>
btl_openib_component.c:1203: error: for each function it appears in.)
<br>
make[2]: *** [btl_openib_component.lo] Error 1
<br>
make[2]: Leaving directory `/home/Software/openmpi-1.3a1r14639/ompi/mca/btl/openib'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/Software/openmpi-1.3a1r14639/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Here something is really broken in the code !?!?
<br>
<p>Rob.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Get the free Yahoo! toolbar and rest assured with the added security of spyware protection. 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3251.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3249.php">Sefa Arslan: "[OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>Maybe in reply to:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3251.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3251.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
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
