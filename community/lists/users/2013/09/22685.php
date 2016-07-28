<?
$subject_val = "[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 07:07:28 2013" -->
<!-- isoreceived="20130920110728" -->
<!-- sent="Fri, 20 Sep 2013 13:00:41 +0200 (CEST)" -->
<!-- isosent="20130920110041" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris" -->
<!-- id="201309201100.r8KB0fTr022555_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 07:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22686.php">Noam Bernstein: "[OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Previous message:</strong> <a href="22684.php">Syed Ahsan Ali: "Re: [OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22699.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Reply:</strong> <a href="22699.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="22706.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to install openmpi-1.7.3a1r29213 on &quot;openSuSE Linux 12.1&quot;,
<br>
&quot;Solaris 10 x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; and
<br>
gcc-4.8.0 in 64-bit mode. Unfortunately &quot;make&quot; breaks with the same
<br>
error for both compilers on both Solaris platforms.
<br>
<p><p>tyr openmpi-1.7.3a1r29213-SunOS.sparc.64_cc 126 tail -10 \
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.64_cc
<br>
Making all in mca/if/posix_ipv4
<br>
make[2]: Entering directory `.../opal/mca/if/posix_ipv4'
<br>
&nbsp;&nbsp;CC       if_posix.lo
<br>
&quot;../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c&quot;,
<br>
&nbsp;&nbsp;line 277: undefined struct/union member: ifr_mtu
<br>
cc: acomp failed for
<br>
&nbsp;&nbsp;../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c
<br>
make[2]: *** [if_posix.lo] Error 1
<br>
make[2]: Leaving directory `.../opal/mca/if/posix_ipv4'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>tyr openmpi-1.7.3a1r29213-SunOS.sparc.64_gcc 131 tail -12 \
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.64_gcc
<br>
Making all in mca/if/posix_ipv4
<br>
make[2]: Entering directory `.../opal/mca/if/posix_ipv4'
<br>
&nbsp;&nbsp;CC       if_posix.lo
<br>
../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c:
<br>
&nbsp;&nbsp;In function 'if_posix_open':
<br>
../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c:
<br>
&nbsp;&nbsp;277:31: error: 'struct ifreq' has no member named 'ifr_mtu'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intf-&gt;if_mtu = ifr-&gt;ifr_mtu;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [if_posix.lo] Error 1
<br>
make[2]: Leaving directory `.../opal/mca/if/posix_ipv4'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>I have had this problem before and Jeff solved it. Here is my
<br>
old e-mail.
<br>
<p>Date: Tue, 7 May 2013 19:38:11 +0200 (CEST)
<br>
From: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
<br>
Subject: Re: commit/ompi-java: jsquyres: Up to SVN r28392
<br>
To: jsquyres_at_[hidden]
<br>
Cc: Siegmar.Gross_at_[hidden]
<br>
MIME-Version: 1.0
<br>
Content-MD5: O1pjPK/1JiMXXZ/EHyMU0Q==
<br>
X-HRZ-JLUG-MailScanner-Information: Passed JLUG virus check
<br>
X-HRZ-JLUG-MailScanner: No virus found
<br>
X-Envelope-From: fd1026_at_[hidden]
<br>
X-Spam-Status: No
<br>
<p>Hello Jeff
<br>
<p><span class="quotelev1">&gt; Ok, I made a change in the OMPI trunk that should fix this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/changeset/28460">https://svn.open-mpi.org/trac/ompi/changeset/28460</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I pulled it into the ompi-java hg repo.  Could you give
</span><br>
<span class="quotelev1">&gt; it a whirl and let me know if this works for you?
</span><br>
<p>Perfect :-)))).  Now I can build Open MPI on Solaris without
<br>
&quot;#if 0&quot; :-). Thank you very much for your help.
<br>
<p><p>&quot;make check&quot;  still produces the old bus error on Solaris Sparc.
<br>
All checks are fine on Linux and Solaris x86_64.
<br>
<p>...
<br>
PASS: ddt_test
<br>
/bin/bash: line 5: 12453 Bus Error               ${dir}$tst
<br>
FAIL: ddt_raw
<br>
========================================================
<br>
1 of 5 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
...
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; On May 6, 2013, at 7:20 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello Jeff
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;../../../../../ompi-java/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; line 279: undefined struct/union member: ifr_mtu
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sigh.  Solaris kills me.  :-\
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Just so I understand -- Solaris has SIOCGIFMTU, but doesn't
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; have struct ifreq.ifr_mtu?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I found SIOCGIFMTU in sys/sockio.h with the following comment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there a Solaris-defined constant we can use here to know
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that we're on Solaris?  If so, I can effectively make that code
</span><br>
<span class="quotelev3">&gt; &gt;&gt; only be there if SIOCFIGMTU exists and we're not on Solaris.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I searched our header files for &quot;sunos&quot; and &quot;solaris&quot; with
</span><br>
<span class="quotelev2">&gt; &gt; &quot;-ignore-case&quot;, but didn't find anything useful. You have a very
</span><br>
<span class="quotelev2">&gt; &gt; minimal environment, if you use &quot;sh&quot; and you would have a useful
</span><br>
<span class="quotelev2">&gt; &gt; environment variable, if you use &quot;tcsh&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 321 su -
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; # env
</span><br>
<span class="quotelev2">&gt; &gt; HOME=/root
</span><br>
<span class="quotelev2">&gt; &gt; HZ=
</span><br>
<span class="quotelev2">&gt; &gt; LANG=C
</span><br>
<span class="quotelev2">&gt; &gt; LC_ALL=C
</span><br>
<span class="quotelev2">&gt; &gt; LOGNAME=root
</span><br>
<span class="quotelev2">&gt; &gt; MAIL=/var/mail/root
</span><br>
<span class="quotelev2">&gt; &gt; PATH=/usr/sbin:/usr/bin
</span><br>
<span class="quotelev2">&gt; &gt; SHELL=/sbin/sh
</span><br>
<span class="quotelev2">&gt; &gt; TERM=dtterm
</span><br>
<span class="quotelev2">&gt; &gt; TZ=Europe/Berlin
</span><br>
<span class="quotelev2">&gt; &gt; # tcsh
</span><br>
<span class="quotelev2">&gt; &gt; # env | grep TYPE
</span><br>
<span class="quotelev2">&gt; &gt; HOSTTYPE=sun4
</span><br>
<span class="quotelev2">&gt; &gt; OSTYPE=solaris
</span><br>
<span class="quotelev2">&gt; &gt; MACHTYPE=sparc
</span><br>
<span class="quotelev2">&gt; &gt; # 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The best solution would be &quot;uname -s&quot;, if that is possible.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; # /usr/bin/uname -s
</span><br>
<span class="quotelev2">&gt; &gt; SunOS
</span><br>
<p><p>I would be grateful, if somebody can solve the problem once more.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22686.php">Noam Bernstein: "[OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Previous message:</strong> <a href="22684.php">Syed Ahsan Ali: "Re: [OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22699.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Reply:</strong> <a href="22699.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="22706.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
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
