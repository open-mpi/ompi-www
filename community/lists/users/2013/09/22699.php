<?
$subject_val = "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 11:52:44 2013" -->
<!-- isoreceived="20130920155244" -->
<!-- sent="Fri, 20 Sep 2013 15:52:43 +0000" -->
<!-- isosent="20130920155243" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8BCB02_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201309201100.r8KB0fTr022555_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 11:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22700.php">Lloyd Brown: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22698.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>In reply to:</strong> <a href="22685.php">Siegmar Gross: "[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22706.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like Ralph noticed that we fixed this on the trunk and forgot to bring it over to v1.7.  I just committed it on v1.7 in r29215.  Give it a whirl in tonight's v1.7 nightly tarball.
<br>
<p><p>On Sep 20, 2013, at 7:00 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to install openmpi-1.7.3a1r29213 on &quot;openSuSE Linux 12.1&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;Solaris 10 x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; and
</span><br>
<span class="quotelev1">&gt; gcc-4.8.0 in 64-bit mode. Unfortunately &quot;make&quot; breaks with the same
</span><br>
<span class="quotelev1">&gt; error for both compilers on both Solaris platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.7.3a1r29213-SunOS.sparc.64_cc 126 tail -10 \
</span><br>
<span class="quotelev1">&gt;  log.make.SunOS.sparc.64_cc
</span><br>
<span class="quotelev1">&gt; Making all in mca/if/posix_ipv4
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `.../opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt;  CC       if_posix.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev1">&gt;  line 277: undefined struct/union member: ifr_mtu
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for
</span><br>
<span class="quotelev1">&gt;  ../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [if_posix.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.7.3a1r29213-SunOS.sparc.64_gcc 131 tail -12 \
</span><br>
<span class="quotelev1">&gt;  log.make.SunOS.sparc.64_gcc
</span><br>
<span class="quotelev1">&gt; Making all in mca/if/posix_ipv4
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `.../opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt;  CC       if_posix.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c:
</span><br>
<span class="quotelev1">&gt;  In function 'if_posix_open':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c:
</span><br>
<span class="quotelev1">&gt;  277:31: error: 'struct ifreq' has no member named 'ifr_mtu'
</span><br>
<span class="quotelev1">&gt;             intf-&gt;if_mtu = ifr-&gt;ifr_mtu;
</span><br>
<span class="quotelev1">&gt;                               ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [if_posix.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have had this problem before and Jeff solved it. Here is my
</span><br>
<span class="quotelev1">&gt; old e-mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Date: Tue, 7 May 2013 19:38:11 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; From: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: commit/ompi-java: jsquyres: Up to SVN r28392
</span><br>
<span class="quotelev1">&gt; To: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev1">&gt; MIME-Version: 1.0
</span><br>
<span class="quotelev1">&gt; Content-MD5: O1pjPK/1JiMXXZ/EHyMU0Q==
</span><br>
<span class="quotelev1">&gt; X-HRZ-JLUG-MailScanner-Information: Passed JLUG virus check
</span><br>
<span class="quotelev1">&gt; X-HRZ-JLUG-MailScanner: No virus found
</span><br>
<span class="quotelev1">&gt; X-Envelope-From: fd1026_at_[hidden]
</span><br>
<span class="quotelev1">&gt; X-Spam-Status: No
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I made a change in the OMPI trunk that should fix this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/28460">https://svn.open-mpi.org/trac/ompi/changeset/28460</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And I pulled it into the ompi-java hg repo.  Could you give
</span><br>
<span class="quotelev2">&gt;&gt; it a whirl and let me know if this works for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perfect :-)))).  Now I can build Open MPI on Solaris without
</span><br>
<span class="quotelev1">&gt; &quot;#if 0&quot; :-). Thank you very much for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;make check&quot;  still produces the old bus error on Solaris Sparc.
</span><br>
<span class="quotelev1">&gt; All checks are fine on Linux and Solaris x86_64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; PASS: ddt_test
</span><br>
<span class="quotelev1">&gt; /bin/bash: line 5: 12453 Bus Error               ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: ddt_raw
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 5 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2013, at 7:20 AM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;../../../../../ompi-java/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line 279: undefined struct/union member: ifr_mtu
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sigh.  Solaris kills me.  :-\
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Just so I understand -- Solaris has SIOCGIFMTU, but doesn't
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have struct ifreq.ifr_mtu?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I found SIOCGIFMTU in sys/sockio.h with the following comment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a Solaris-defined constant we can use here to know
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that we're on Solaris?  If so, I can effectively make that code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only be there if SIOCFIGMTU exists and we're not on Solaris.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I searched our header files for &quot;sunos&quot; and &quot;solaris&quot; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-ignore-case&quot;, but didn't find anything useful. You have a very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; minimal environment, if you use &quot;sh&quot; and you would have a useful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment variable, if you use &quot;tcsh&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 321 su -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # env
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOME=/root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HZ=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LANG=C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LC_ALL=C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOGNAME=root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MAIL=/var/mail/root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=/usr/sbin:/usr/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SHELL=/sbin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TERM=dtterm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TZ=Europe/Berlin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # tcsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # env | grep TYPE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTTYPE=sun4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OSTYPE=solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MACHTYPE=sparc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The best solution would be &quot;uname -s&quot;, if that is possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # /usr/bin/uname -s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SunOS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can solve the problem once more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22700.php">Lloyd Brown: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22698.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>In reply to:</strong> <a href="22685.php">Siegmar Gross: "[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22706.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
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
