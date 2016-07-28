<?
$subject_val = "Re: [OMPI devel] Build open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 21:27:18 2013" -->
<!-- isoreceived="20130110022718" -->
<!-- sent="Wed, 9 Jan 2013 18:27:11 -0800" -->
<!-- isosent="20130110022711" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build open MPI" -->
<!-- id="A8B28260-157C-4952-A4FF-BE425323CBCC_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CD135B6E.7CD4%Boxiong.Ding_at_emc.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 21:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11913.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="11911.php">Ding, Boxiong: "[OMPI devel] Build open MPI"</a>
<li><strong>In reply to:</strong> <a href="11911.php">Ding, Boxiong: "[OMPI devel] Build open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11919.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build open MPI"</a>
<li><strong>Reply:</strong> <a href="11919.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm pretty sure we are at autoconf 2.69 now. You might want to upgrade it, and ensure your m4 is correspondingly updated. Also, automake should probably be at 1.12.x (avoid 1.13,x as it has bugs). I think libtool looks pretty old too.
<br>
<p>Sent from my iPad
<br>
<p>On Jan 9, 2013, at 5:37 PM, &quot;Ding, Boxiong&quot; &lt;Boxiong.Ding_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to build the code that Ralph has put here: <a href="https://boxding&#64;bitbucket.org/rhc/hdmon">https://boxding&#64;bitbucket.org/rhc/hdmon</a>, but failed. It is a modified open MPI code. Can someone help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_aesaroyp1d1c hdmon]# cat /etc/redhat-release 
</span><br>
<span class="quotelev1">&gt; Red Hat Enterprise Linux Server release 6.1 (Santiago)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have manually installed m4/autoconf/automake/libtool on my local directory and the versions match those specified in HACKING.
</span><br>
<span class="quotelev1">&gt; [root_at_aesaroyp1d1c lib]# pwd
</span><br>
<span class="quotelev1">&gt; /root/local/lib
</span><br>
<span class="quotelev1">&gt; [root_at_aesaroyp1d1c lib]# ls
</span><br>
<span class="quotelev1">&gt; autoconf-2.68  automake-1.11.1  libtool-2.2.8  m4-1.4.13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_aesaroyp1d1c lib]# which m4
</span><br>
<span class="quotelev1">&gt; /root/local/lib/m4-1.4.13/bin/m4
</span><br>
<span class="quotelev1">&gt; [root_at_aesaroyp1d1c lib]# which autoconf
</span><br>
<span class="quotelev1">&gt; /root/local/lib/autoconf-2.68/bin/autoconf
</span><br>
<span class="quotelev1">&gt; [root_at_aesaroyp1d1c lib]# which automake
</span><br>
<span class="quotelev1">&gt; /root/local/lib/automake-1.11.1/bin/automake
</span><br>
<span class="quotelev1">&gt; [root_at_aesaroyp1d1c lib]# which libtool
</span><br>
<span class="quotelev1">&gt; /root/local/lib/libtool-2.2.8/bin/libtool
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run autogen.pl I got the following error:
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 6. Processing autogen.subdirs directories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; === Processing subdir: /root/workspace/hdmon/opal/mca/event/libevent2019/libevent
</span><br>
<span class="quotelev1">&gt; --- Found autogen.sh; running...
</span><br>
<span class="quotelev1">&gt; Running: ./autogen.sh
</span><br>
<span class="quotelev1">&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev1">&gt; autoreconf: running: aclocal -I .. --force -I m4
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.in: tracing
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.in: not using Libtool
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /root/local/lib/autoconf-2.68/bin/autoconf --include=.. --force
</span><br>
<span class="quotelev1">&gt; configure.in:146: error: possibly undefined macro: AC_PROG_LIBTOOL
</span><br>
<span class="quotelev1">&gt;       If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev1">&gt;       See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt; autoreconf: /root/local/lib/autoconf-2.68/bin/autoconf failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; Command failed: ./autogen.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Boxiong
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11913.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="11911.php">Ding, Boxiong: "[OMPI devel] Build open MPI"</a>
<li><strong>In reply to:</strong> <a href="11911.php">Ding, Boxiong: "[OMPI devel] Build open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11919.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build open MPI"</a>
<li><strong>Reply:</strong> <a href="11919.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build open MPI"</a>
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
