<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 09:50:47 2005" -->
<!-- isoreceived="20050808145047" -->
<!-- sent="Mon, 8 Aug 2005 10:50:45 -0400" -->
<!-- isosent="20050808145045" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="98c91efec2488a86c2fb7f7ba55f84f3_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="4A388685F814D54CAE412B2DAB7CE91C5AD49B_at_initexch.topspincom.com" -->
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
<strong>Date:</strong> 2005-08-08 09:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0095.php">Jeff Squyres: "New command line option: -gmca"</a>
<li><strong>Previous message:</strong> <a href="0093.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0084.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0098.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like you are having timestamp issues, e.g.:
<br>
<p><span class="quotelev1">&gt; make: Warning: File `Makefile.am' has modification time 3.6e+04 s in 
</span><br>
<span class="quotelev1">&gt; the future
</span><br>
<p>We typically see this in environments where NFS clients are not time 
<br>
synchronized properly with the NFS server (e.g., using ntp either to 
<br>
the NFS server directly, or to a common parent ntp server, or something 
<br>
similar).
<br>
<p>Automake-derived build systems are *extremely* sensitive to filesystem 
<br>
timestamps because they are driven off Makefile dependencies.  So if 
<br>
you are working on a networked filesystem and do not have your time 
<br>
tightly synchronized between the client and server, these kinds of 
<br>
errors will occur.
<br>
<p>Two fixes for this are:
<br>
<p>1. Fix the time issues between network filesystem client and server
<br>
2. Build on a non-networked filesystem
<br>
<p><p>On Aug 8, 2005, at 6:19 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to build the latest code but as I mentioned in one of my 
</span><br>
<span class="quotelev1">&gt; previous mails, build is getting into a loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_micrompi-1 ompi]# make all | tee mymake.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: Warning: File `Makefile.am' has modification time 3.6e+04 s in 
</span><br>
<span class="quotelev1">&gt; the future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; AM_PATH_LIBGCRYPT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; run info '(automake)Extending aclocal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; or see 
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/ao.m4:9: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; XIPH_PATH_AO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run autoconf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ./config.status --recheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;/bin/sh ./config.status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: make[1]: Entering directory `/ompi/config'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warning: File `Makefile.am' has modification time 3.6e+04 s in the 
</span><br>
<span class="quotelev1">&gt; future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd .. &amp;&amp; make&#160; am--refresh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Warning: File `Makefile.am' has modification time 3.6e+04 s 
</span><br>
<span class="quotelev1">&gt; in the future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; AM_PATH_LIBGCRYPT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; run info '(automake)Extending aclocal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; or see 
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/ao.m4:9: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; XIPH_PATH_AO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run autoconf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ./config.status --recheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;/bin/sh ./config.status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: warning:&#160; Clock skew detected.&#160; Your build may be incomplete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Warning: File `Makefile.am' has modification time 3.6e+04 s 
</span><br>
<span class="quotelev1">&gt; in the future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; AM_PATH_LIBGCRYPT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; run info '(automake)Extending aclocal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; or see 
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/ao.m4:9: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; XIPH_PATH_AO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run autoconf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ./config.status --recheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;/bin/sh ./config.status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: warning:&#160; Clock skew detected.&#160; Your build may be incomplete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd .. &amp;&amp; make&#160; am--refresh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: make[2]: Entering directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warning: File `Makefile.am' has modification time 3.6e+04 s in the 
</span><br>
<span class="quotelev1">&gt; future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; AM_PATH_LIBGCRYPT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; run info '(automake)Extending aclocal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; or see 
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/ao.m4:9: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; XIPH_PATH_AO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [Makefile.in] Interrupt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [../configure] Interrupt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Interrupt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.status &#150;recheck is being issued from Makefile. I have moved 
</span><br>
<span class="quotelev1">&gt; config.status to config.status.old and did touch config.status but 
</span><br>
<span class="quotelev1">&gt; still &#147;make all&#148; is going in loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is anyone tried building the latest code drop of OpenMPI? Or Is anyone 
</span><br>
<span class="quotelev1">&gt; has seen this type of behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Sridhar
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
<li><strong>Next message:</strong> <a href="0095.php">Jeff Squyres: "New command line option: -gmca"</a>
<li><strong>Previous message:</strong> <a href="0093.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0084.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0098.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
