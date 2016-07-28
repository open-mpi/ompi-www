<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 05:20:08 2005" -->
<!-- isoreceived="20050808102008" -->
<!-- sent="Mon, 8 Aug 2005 15:49:56 +0530" -->
<!-- isosent="20050808101956" -->
<!-- name="Sridhar Chirravuri" -->
<!-- email="sridhar_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="4A388685F814D54CAE412B2DAB7CE91C5AD49B_at_initexch.topspincom.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto=" Fwd: Regarding MVAPI Component in Open MPI" -->
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
<strong>From:</strong> Sridhar Chirravuri (<em>sridhar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-08 05:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0085.php">Gleb Natapov: "compile error"</a>
<li><strong>Previous message:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0094.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0094.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was trying to build the latest code but as I mentioned in one of my
<br>
previous mails, build is getting into a loop.
<br>
<p>[root_at_micrompi-1 ompi]# make all | tee mymake.log
<br>
make: Warning: File `Makefile.am' has modification time 3.6e+04 s in the
<br>
future
<br>
cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
<br>
/usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of
<br>
AM_PATH_LIBGCRYPT
<br>
&nbsp;&nbsp;run info '(automake)Extending aclocal'
<br>
&nbsp;&nbsp;or see
<br>
<a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
<br>
/usr/share/aclocal/ao.m4:9: warning: underquoted definition of
<br>
XIPH_PATH_AO
<br>
&nbsp;cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
<br>
cd . &amp;&amp; /bin/sh /ompi/config/missing --run autoconf
<br>
/bin/sh ./config.status --recheck
<br>
&nbsp;/bin/sh ./config.status
<br>
Making all in config
<br>
make[1]: make[1]: Entering directory `/ompi/config'
<br>
Warning: File `Makefile.am' has modification time 3.6e+04 s in the
<br>
future
<br>
cd .. &amp;&amp; make  am--refresh
<br>
make[2]: Entering directory `/ompi'
<br>
make[2]: Warning: File `Makefile.am' has modification time 3.6e+04 s in
<br>
the future
<br>
cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
<br>
/usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of
<br>
AM_PATH_LIBGCRYPT
<br>
&nbsp;&nbsp;run info '(automake)Extending aclocal'
<br>
&nbsp;&nbsp;or see
<br>
<a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
<br>
/usr/share/aclocal/ao.m4:9: warning: underquoted definition of
<br>
XIPH_PATH_AO
<br>
&nbsp;cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
<br>
cd . &amp;&amp; /bin/sh /ompi/config/missing --run autoconf
<br>
/bin/sh ./config.status --recheck
<br>
&nbsp;/bin/sh ./config.status
<br>
make[2]: warning:  Clock skew detected.  Your build may be incomplete.
<br>
make[2]: Leaving directory `/ompi'
<br>
make[2]: Entering directory `/ompi'
<br>
make[2]: Warning: File `Makefile.am' has modification time 3.6e+04 s in
<br>
the future
<br>
cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
<br>
/usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of
<br>
AM_PATH_LIBGCRYPT
<br>
&nbsp;&nbsp;run info '(automake)Extending aclocal'
<br>
&nbsp;&nbsp;or see
<br>
<a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
<br>
/usr/share/aclocal/ao.m4:9: warning: underquoted definition of
<br>
XIPH_PATH_AO
<br>
&nbsp;cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
<br>
cd . &amp;&amp; /bin/sh /ompi/config/missing --run autoconf
<br>
/bin/sh ./config.status --recheck
<br>
&nbsp;/bin/sh ./config.status
<br>
make[2]: warning:  Clock skew detected.  Your build may be incomplete.
<br>
make[2]: Leaving directory `/ompi'
<br>
cd .. &amp;&amp; make  am--refresh
<br>
make[2]: make[2]: Entering directory `/ompi'
<br>
Warning: File `Makefile.am' has modification time 3.6e+04 s in the
<br>
future
<br>
cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
<br>
/usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of
<br>
AM_PATH_LIBGCRYPT
<br>
&nbsp;&nbsp;run info '(automake)Extending aclocal'
<br>
&nbsp;&nbsp;or see
<br>
<a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
<br>
/usr/share/aclocal/ao.m4:9: warning: underquoted definition of
<br>
XIPH_PATH_AO
<br>
&nbsp;cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
<br>
<p>make[2]: *** [Makefile.in] Interrupt
<br>
make[1]: *** [../configure] Interrupt
<br>
make: *** [all-recursive] Interrupt
<br>
<p><p>The config.status -recheck is being issued from Makefile. I have moved
<br>
config.status to config.status.old and did touch config.status but still
<br>
&quot;make all&quot; is going in loop.
<br>
<p>Is anyone tried building the latest code drop of OpenMPI? Or Is anyone
<br>
has seen this type of behavior?
<br>
<p>Please let me know.
<br>
<p>Thanks
<br>
-Sridhar
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----Original Message-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: Sridhar Chirravuri 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Monday, August 08, 2005 2:28 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: 'Open MPI Developers'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cc: Sridhar Chirravuri
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: RE: [O-MPI devel] Fwd: Regarding MVAPI
<br>
Component in Open MPI
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have got the latest code drop and this time I didn't
<br>
give -r option to svn co. The last line that it showed me is given
<br>
below.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked out revision 6760.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am trying to install/configure/build OpenMPI on RHEL3
<br>
update 4 machine. For this release, we don't have lmpga and lmtl_common
<br>
libraries. We are not using separate VAPI libraries. We only use lvapi
<br>
and lmosal. We do have lmpga and lmtl_common libs but with the older
<br>
release.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the file README of latest check out, I could see the
<br>
following lin
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Support for Quadrics and Infiniband (both mVAPI and
<br>
OpenIB) is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;missing (see the current code base).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What does it mean? Does OpenMPI has support for
<br>
Infiniband (mVAPI)? I am not getting why btl mVAPI component is not
<br>
being built (in my previous mail with ompi_info output). Could you
<br>
please let me know whether OpenMPI has got support for Infiniband
<br>
(mVAPI)? If yes, what sort of configuration options that I need to give?
<br>
Or Do I have to modify anything in the respective directories? Please
<br>
let me know.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Sridhar
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----Original Message-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: devel-bounces_at_[hidden]
<br>
[mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Friday, August 05, 2005 6:15 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Developers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI
<br>
Component in Open MPI
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Aug 5, 2005, at 8:02 AM, Sridhar Chirravuri
<br>
((schirrav)) wrote:
<br>
<p><span class="quotelev1">		&gt; Here is the output of ompi_info
</span><br>
<span class="quotelev1">		&gt;  
</span><br>
<span class="quotelev1">		&gt; [root_at_micrompi-1 ompi]# ompi_info
</span><br>
<span class="quotelev1">		&gt;                 Open MPI: 1.0a1r6612M
</span><br>
<span class="quotelev1">		&gt;    Open MPI SVN revision: r6612M
</span><br>
<span class="quotelev1">		&gt; [snipped] 
</span><br>
<span class="quotelev1">		&gt; The OpenMPI version that I am using r6612 (I could see
</span><br>
from the output 
<br>
<span class="quotelev1">		&gt; ompi_info command). There is NO btl frame where as
</span><br>
mpool was built.
<br>
<span class="quotelev1">		&gt;  
</span><br>
<span class="quotelev1">		&gt; In the configure options, giving
</span><br>
--with-btl-mvapi=/opt/topspin would 
<br>
<span class="quotelev1">		&gt; sufficient as it has got include and lib64
</span><br>
directories. Therefore it 
<br>
<span class="quotelev1">		&gt; will pick up the necessary things. Also, I have set
</span><br>
the following 
<br>
<span class="quotelev1">		&gt; flags
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Good.
<br>
<p><span class="quotelev1">		&gt; export CFLAGS=&quot;-I/optl/topspin/include
</span><br>
-I/opt/topspin/include/vapi&quot;
<br>
<span class="quotelev1">		&gt; export LDFLAGS=&quot;-lmosal -lvapi -L/opt/topspin/lib64&quot;
</span><br>
<span class="quotelev1">		&gt; export btl_mvapi_LDFLAGS=$LDFLAGS
</span><br>
<span class="quotelev1">		&gt; export btl_mvapi_LIBS=$LDFLAGS
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You shouldn't need these -- our configure script should
<br>
figure all that 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;out with just the --with-btl-mvapi switch.  Let us know
<br>
if it doesn't 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(an explicit goal of our configure script is to handle
<br>
all this kind of 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;complexity and do all the Right Things with a single
<br>
--with switch).
<br>
<p><span class="quotelev1">		&gt; I will configure and build the latest code. To get the
</span><br>
latest code, I 
<br>
<span class="quotelev1">		&gt; have run the following command. Please let me know if
</span><br>
I am not 
<br>
<span class="quotelev1">		&gt; correct.
</span><br>
<span class="quotelev1">		&gt;  
</span><br>
<span class="quotelev1">		&gt; svn co -r6613 <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
ompi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No -- do not specify the -r switch.  That asks for a
<br>
specific 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;repository r number, and 6613 only 1 commit beyond your
<br>
last version.  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The current r number at the HEAD is 6746, for example --
<br>
6613 was 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;committed around 9am on July 27th.  Specifically, the r
<br>
number 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;represents a unique state of the *entire* repository.
<br>
So every commit 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;increments the r number (more Subversion documentation
<br>
is available 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;here: <a href="http://svnbook.red-bean.com/">http://svnbook.red-bean.com/</a>).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I believe that in 6612 and 6613, we still had many of
<br>
the 3rd 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;generation BTL stuff .ompi_ignore'd out, so they would
<br>
not have built 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(many were removed at 6616, but even more were removed
<br>
as late as 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6658).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note that the &quot;M&quot; in your version number means that you
<br>
have locally 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modified the tree -- so you started with r6612, but then
<br>
made local 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modifications (the configure script queries Subversion
<br>
to see what 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;version your tree it; Subversion detects these kinds of
<br>
things).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you &quot;svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
<br>
ompi&quot; (i.e., do 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not specify -r), it'll just get the latest number.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alternatively, if you have a checkout already, you can
<br>
just run &quot;svn 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;up&quot; within that tree and it will update to the latest
<br>
(quite analogous 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to &quot;cvs up&quot;).
<br>
<p><span class="quotelev1">		&gt; Configured as..
</span><br>
<span class="quotelev1">		&gt;  
</span><br>
<span class="quotelev1">		&gt; ./configure --prefix=/openmpi
</span><br>
--with-btl-mvapi=/opt/topspin/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When you get a subversion checkout, you need to first
<br>
run autogen.sh.  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the HACKING document for details on this (you don't
<br>
need to run 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;autogen.sh in tarballs) and the README document for
<br>
common building / 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;running.  Both of these are in the top-level directory
<br>
of the SVN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkout (update to the latest to get the most
<br>
up-to-date README 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;information).
<br>
<p><span class="quotelev1">		&gt; When I gave make all, it is configuring again and
</span><br>
again, I mean it is 
<br>
<span class="quotelev1">		&gt; going in a loop. In my machine, I do not need libmpga
</span><br>
and 
<br>
<span class="quotelev1">		&gt; libmtl_common, hence I removed -lmpga and -lmtl_common
</span><br>
entries from 
<br>
<span class="quotelev1">		&gt; config/ompi_check_mvapi.m4 file and then ran
</span><br>
autogen.sh.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you modify a .m4 file, you need to run autogen.sh
<br>
again.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;autogen.sh is simply a wrapper around all the right GNU
<br>
Auto tool 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;commands (autoconf, autoheader, libtool, automake, etc.)
<br>
to setup all 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the build scripts properly.  However, automake also
<br>
inserts 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dependencies in makefiles such that if any of the
<br>
dependent m4 files 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;change (for example), it should re-run the necessary
<br>
commands.  In 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;theory, that is supposed to work, but we've never really
<br>
exercised that 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- we just re-run autogen.sh.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But could you clarify -- why do you not need libmpga or
<br>
libmtl_common?  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Are these libraries from a different mVAPI
<br>
implementation?  I would 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;like to have our configure script do the Right Things
<br>
regardless of 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which mVAPI implementation is being used -- if we need
<br>
to add a little 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;more logic to make this correct, then so be it.
<br>
<p><span class="quotelev1">		&gt; I don't have any clue why the configuration is going
</span><br>
in loop even 
<br>
<span class="quotelev1">		&gt; while building. I could see that config.status
</span><br>
--recheck is being 
<br>
<span class="quotelev1">		&gt; issued from Makefile and I feel this might the reason
</span><br>
for configure to 
<br>
<span class="quotelev1">		&gt; run in loop.
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Running autogen.sh should do the Right Things for you.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{+} Jeff Squyres
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{+} The Open MPI Project
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devel mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devel_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0085.php">Gleb Natapov: "compile error"</a>
<li><strong>Previous message:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0094.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0094.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
