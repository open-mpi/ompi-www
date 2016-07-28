<?
$subject_val = "[OMPI devel] Build open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 20:38:12 2013" -->
<!-- isoreceived="20130110013812" -->
<!-- sent="Wed, 9 Jan 2013 20:37:50 -0500" -->
<!-- isosent="20130110013750" -->
<!-- name="Ding, Boxiong" -->
<!-- email="Boxiong.Ding_at_[hidden]" -->
<!-- subject="[OMPI devel] Build open MPI" -->
<!-- id="CD135B6E.7CD4%Boxiong.Ding_at_emc.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Build open MPI<br>
<strong>From:</strong> Ding, Boxiong (<em>Boxiong.Ding_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 20:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
<li><strong>Previous message:</strong> <a href="11910.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
<li><strong>Reply:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to build the code that Ralph has put here: <a href="https://boxding&#64;bitbucket.org/rhc/hdmon">https://boxding&#64;bitbucket.org/rhc/hdmon</a>, but failed. It is a modified open MPI code. Can someone help?
<br>
<p>[root_at_aesaroyp1d1c hdmon]# cat /etc/redhat-release
<br>
Red Hat Enterprise Linux Server release 6.1 (Santiago)
<br>
<p>I have manually installed m4/autoconf/automake/libtool on my local directory and the versions match those specified in HACKING.
<br>
[root_at_aesaroyp1d1c lib]# pwd
<br>
/root/local/lib
<br>
[root_at_aesaroyp1d1c lib]# ls
<br>
autoconf-2.68  automake-1.11.1  libtool-2.2.8  m4-1.4.13
<br>
<p>[root_at_aesaroyp1d1c lib]# which m4
<br>
/root/local/lib/m4-1.4.13/bin/m4
<br>
[root_at_aesaroyp1d1c lib]# which autoconf
<br>
/root/local/lib/autoconf-2.68/bin/autoconf
<br>
[root_at_aesaroyp1d1c lib]# which automake
<br>
/root/local/lib/automake-1.11.1/bin/automake
<br>
[root_at_aesaroyp1d1c lib]# which libtool
<br>
/root/local/lib/libtool-2.2.8/bin/libtool
<br>
<p>When I run autogen.pl I got the following error:
<br>
....
<br>
6. Processing autogen.subdirs directories
<br>
<p>=== Processing subdir: /root/workspace/hdmon/opal/mca/event/libevent2019/libevent
<br>
--- Found autogen.sh; running...
<br>
Running: ./autogen.sh
<br>
autoreconf: Entering directory `.'
<br>
autoreconf: configure.in: not using Gettext
<br>
autoreconf: running: aclocal -I .. --force -I m4
<br>
autoreconf: configure.in: tracing
<br>
autoreconf: configure.in: not using Libtool
<br>
autoreconf: running: /root/local/lib/autoconf-2.68/bin/autoconf --include=.. --force
<br>
configure.in:146: error: possibly undefined macro: AC_PROG_LIBTOOL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
autoreconf: /root/local/lib/autoconf-2.68/bin/autoconf failed with exit status: 1
<br>
Command failed: ./autogen.sh
<br>
<p><p>Thanks,
<br>
Boxiong
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
<li><strong>Previous message:</strong> <a href="11910.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
<li><strong>Reply:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
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
