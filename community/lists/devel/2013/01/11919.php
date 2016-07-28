<?
$subject_val = "Re: [OMPI devel] Build open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 13:57:27 2013" -->
<!-- isoreceived="20130110185727" -->
<!-- sent="Thu, 10 Jan 2013 18:57:21 +0000" -->
<!-- isosent="20130110185721" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build open MPI" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B11F1_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A8B28260-157C-4952-A4FF-BE425323CBCC_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build open MPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-10 13:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11920.php">Kawashima, Takahiro: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="11918.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<li><strong>In reply to:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check the HACKING file in the top-level directory if you need some assistance on how to upgrade your Autoconf/Automake/Libtool.
<br>
<p><p>On Jan 9, 2013, at 9:27 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; I'm pretty sure we are at autoconf 2.69 now. You might want to upgrade it, and ensure your m4 is correspondingly updated. Also, automake should probably be at 1.12.x (avoid 1.13,x as it has bugs). I think libtool looks pretty old too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2013, at 5:37 PM, &quot;Ding, Boxiong&quot; &lt;Boxiong.Ding_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build the code that Ralph has put here: <a href="https://boxding&#64;bitbucket.org/rhc/hdmon">https://boxding&#64;bitbucket.org/rhc/hdmon</a>, but failed. It is a modified open MPI code. Can someone help?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_aesaroyp1d1c hdmon]# cat /etc/redhat-release 
</span><br>
<span class="quotelev2">&gt;&gt; Red Hat Enterprise Linux Server release 6.1 (Santiago)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have manually installed m4/autoconf/automake/libtool on my local directory and the versions match those specified in HACKING.
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_aesaroyp1d1c lib]# pwd
</span><br>
<span class="quotelev2">&gt;&gt; /root/local/lib
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_aesaroyp1d1c lib]# ls
</span><br>
<span class="quotelev2">&gt;&gt; autoconf-2.68  automake-1.11.1  libtool-2.2.8  m4-1.4.13
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_aesaroyp1d1c lib]# which m4
</span><br>
<span class="quotelev2">&gt;&gt; /root/local/lib/m4-1.4.13/bin/m4
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_aesaroyp1d1c lib]# which autoconf
</span><br>
<span class="quotelev2">&gt;&gt; /root/local/lib/autoconf-2.68/bin/autoconf
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_aesaroyp1d1c lib]# which automake
</span><br>
<span class="quotelev2">&gt;&gt; /root/local/lib/automake-1.11.1/bin/automake
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_aesaroyp1d1c lib]# which libtool
</span><br>
<span class="quotelev2">&gt;&gt; /root/local/lib/libtool-2.2.8/bin/libtool
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I run autogen.pl I got the following error:
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; 6. Processing autogen.subdirs directories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; === Processing subdir: /root/workspace/hdmon/opal/mca/event/libevent2019/libevent
</span><br>
<span class="quotelev2">&gt;&gt; --- Found autogen.sh; running...
</span><br>
<span class="quotelev2">&gt;&gt; Running: ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: aclocal -I .. --force -I m4
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.in: tracing
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.in: not using Libtool
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: /root/local/lib/autoconf-2.68/bin/autoconf --include=.. --force
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:146: error: possibly undefined macro: AC_PROG_LIBTOOL
</span><br>
<span class="quotelev2">&gt;&gt;       If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt;&gt;       See the Autoconf documentation.
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: /root/local/lib/autoconf-2.68/bin/autoconf failed with exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt; Command failed: ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Boxiong
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11920.php">Kawashima, Takahiro: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="11918.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<li><strong>In reply to:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
<!-- nextthread="start" -->
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
