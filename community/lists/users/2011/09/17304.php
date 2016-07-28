<?
$subject_val = "Re: [OMPI users] openmpi configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 15 08:11:29 2011" -->
<!-- isoreceived="20110915121129" -->
<!-- sent="Thu, 15 Sep 2011 08:11:22 -0400" -->
<!-- isosent="20110915121122" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configure error" -->
<!-- id="B8004524-7C67-4EB6-96BA-6034D36AB87D_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="45ece425.33e7.1326b1a55d3.Coremail.hwp22651304_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi configure error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-15 08:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17305.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_Wtime()"</a>
<li><strong>Previous message:</strong> <a href="17303.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17302.php">&#186;&#194;&#206;&#196;&#198;&#189;: "[OMPI users] openmpi configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17314.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Reply:</strong> <a href="17314.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI 1.2.6 is fairly ancient; you might want to upgrade. 
<br>

<br>
The problem is your systems clock. Set it properly and configure should be ok. 
<br>

<br>
Sent from my phone. No type good. 
<br>

<br>
On Sep 14, 2011, at 11:21 PM, &#233;&#131;&#157;&#230;&#150;&#135;&#229;&#185;&#179; &lt;hwp22651304_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;   When i try to compile openmpi-1.2.6.tar.bz2 on my computer with ifort Compilier.My system is Red Hat4.6 86x64.But some mistakes happen when the process of configuring.Mistakes as follows:
</span><br>
<span class="quotelev1">&gt; $./configure --prefix=~/haowp/opt/openmpi FC=ifort F90=ifort
</span><br>
<span class="quotelev1">&gt; .........
</span><br>
<span class="quotelev1">&gt; ......
</span><br>
<span class="quotelev1">&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev1">&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev1">&gt; configure: running /bin/sh './configure'  '--prefix=/stg/s1p1/users/yuanjm/haowp/opt/openmpi' 'FC=ifort' 'F90=ifort' --enable-ltdl-convenience --disable-ltdl-install --enable-shared --disable-static --cache-file=/dev/null --srcdir=.
</span><br>
<span class="quotelev1">&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; checking whether build environment is sane... configure: error: newly created file is older than distributed files!
</span><br>
<span class="quotelev1">&gt; Check your system clock
</span><br>
<span class="quotelev1">&gt; configure: /bin/sh './configure' *failed* for opal/libltdl
</span><br>
<span class="quotelev1">&gt; configure: error: Failed to build GNU libltdl.  This usually means that something
</span><br>
<span class="quotelev1">&gt; is incorrectly setup with your environment.  There may be useful information in
</span><br>
<span class="quotelev1">&gt; opal/libltdl/config.log.  You can also disable GNU libltdl (which will disable
</span><br>
<span class="quotelev1">&gt; dynamic shared object loading) by configuring with --disable-dlopen.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $vi /opml/libltdl/config.log
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; ## confdefs.h. ##
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_NAME &quot;libltdl&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_TARNAME &quot;libltdl&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_VERSION &quot;2.1a&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_STRING &quot;libltdl 2.1a&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_BUGREPORT &quot;bug-libtool_at_[hidden]&quot;
</span><br>
<span class="quotelev1">&gt; configure: exit 1
</span><br>
<span class="quotelev1">&gt; Thank you for your attention.Hope your reply.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                                                          haowp
</span><br>
<span class="quotelev1">&gt;                                                           Sep.15.2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 2011-09-15 00:32:32,&quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Sep 14, 2011, at 9:39 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks, Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I get the failure messages, unfortunately:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setgid FAILED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setgid FAILED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setgid FAILED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I actually had attempted to call setgid from within the application previously, which looks similar to what you've done, but it failed. That was when I initiated the post to the mailing list. My conclusion, a guess really, was that Linux would not let me setgid from within my program because I was not root.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I was afraid of that - the documentation seemed to indicate that would be the case, but I figured it was worth a quick try. Sorry I can't be of help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, September 14, 2011 8:15 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The attached should set the gid of the remote daemons (and their children) to the gid of mpirun. No cmd line option or anything is required - it will just always do it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Would you mind giving it a try?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please let me know if/how it works.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17304/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17305.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_Wtime()"</a>
<li><strong>Previous message:</strong> <a href="17303.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17302.php">&#186;&#194;&#206;&#196;&#198;&#189;: "[OMPI users] openmpi configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17314.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Reply:</strong> <a href="17314.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
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
