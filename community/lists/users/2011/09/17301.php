<?
$subject_val = "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 23:19:31 2011" -->
<!-- isoreceived="20110915031931" -->
<!-- sent="Thu, 15 Sep 2011 11:19:20 +0800 (CST)" -->
<!-- isosent="20110915031920" -->
<!-- name="&#186;&#194;&#206;&#196;&#198;&#189;" -->
<!-- email="hwp22651304_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?" -->
<!-- id="4f5d073a.3371.1326b1881c4.Coremail.hwp22651304_at_163.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="48f190d385863d7cfe6d4888e48b0aa9.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?<br>
<strong>From:</strong> &#186;&#194;&#206;&#196;&#198;&#189; (<em>hwp22651304_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 23:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17302.php">郝文平: "[OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17300.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17300.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17332.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;When i try to compile openmpi-1.2.6.tar.bz2 on my computer with ifort Compilier.My system is Red Hat4.6 86x64.But some mistakes happen when the process of configuring.Mistakes as follows:
<br>
$./configure --prefix=~/haowp/opt/openmpi FC=ifort F90=ifort
<br>
.........
<br>
......
<br>
*** GNU libltdl setup
<br>
configure: OMPI configuring in opal/libltdl
<br>
configure: running /bin/sh './configure'  '--prefix=/stg/s1p1/users/yuanjm/haowp/opt/openmpi' 'FC=ifort' 'F90=ifort' --enable-ltdl-convenience --disable-ltdl-install --enable-shared --disable-static --cache-file=/dev/null --srcdir=.
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... configure: error: newly created file is older than distributed files!
<br>
Check your system clock
<br>
configure: /bin/sh './configure' *failed* for opal/libltdl
<br>
configure: error: Failed to build GNU libltdl.  This usually means that something
<br>
is incorrectly setup with your environment.  There may be useful information in
<br>
opal/libltdl/config.log.  You can also disable GNU libltdl (which will disable
<br>
dynamic shared object loading) by configuring with --disable-dlopen.
<br>
<p>&nbsp;
<br>
$vi /opml/libltdl/config.log
<br>
## ----------- ##
<br>
## confdefs.h. ##
<br>
## ----------- ##
<br>
#define PACKAGE_NAME &quot;libltdl&quot;
<br>
#define PACKAGE_TARNAME &quot;libltdl&quot;
<br>
#define PACKAGE_VERSION &quot;2.1a&quot;
<br>
#define PACKAGE_STRING &quot;libltdl 2.1a&quot;
<br>
#define PACKAGE_BUGREPORT &quot;bug-libtool_at_[hidden]&quot;
<br>
configure: exit 1
<br>
<p>Thank you for your attention.Hope your reply.
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;haowp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sep.15.2011
<br>
<p><p><p><p><p>At 2011-09-15 07:40:55,Kevin.Buckley_at_[hidden] wrote:
<br>
<span class="quotelev2">&gt;&gt; That text message is hard-coded (and apparently out of date); it
</span><br>
<span class="quotelev2">&gt;&gt; does not show the current value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree that that is misleading. This error message needs to be
</span><br>
<span class="quotelev2">&gt;&gt; improved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;OK, good to have that clarified Jeff, cheers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This might suggest a hardware issue; let us know what you find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Very likley to be hardware on the node end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Have a hardware support call open and have just been and swapped
</span><br>
<span class="quotelev1">&gt;everything over - ports, cable, even my socks - but a visible
</span><br>
<span class="quotelev1">&gt;problem (one link operating at 1x width and not 4x persists).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Probably not a problem with the OpenMPI stack though it has
</span><br>
<span class="quotelev1">&gt;highlighted the error message issue (My external MSc supervisor
</span><br>
<span class="quotelev1">&gt;said the project raised more questions than it answered, so I
</span><br>
<span class="quotelev1">&gt;guess I am continuing the trend, many years on, in a new field!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks to all who commented,
</span><br>
<span class="quotelev1">&gt;Kevin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Kevin M. Buckley                                  Room:  CO327
</span><br>
<span class="quotelev1">&gt;School of Engineering and                         Phone: +64 4 463 5971
</span><br>
<span class="quotelev1">&gt; Computer Science
</span><br>
<span class="quotelev1">&gt;Victoria University of Wellington
</span><br>
<span class="quotelev1">&gt;New Zealand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17302.php">郝文平: "[OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17300.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17300.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17332.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
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
