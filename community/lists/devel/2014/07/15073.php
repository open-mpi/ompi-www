<?
$subject_val = "[OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  4 09:00:12 2014" -->
<!-- isoreceived="20140704130012" -->
<!-- sent="Fri, 4 Jul 2014 15:00:09 +0200 (CEST)" -->
<!-- isosent="20140704130009" -->
<!-- name="olivier.lahaye1_at_[hidden]" -->
<!-- email="olivier.lahaye1_at_[hidden]" -->
<!-- subject="[OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)" -->
<!-- id="331640562.87464461.1404478809114.JavaMail.root_at_spooler6-g27.priv.proxad.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="529366384.87387491.1404477738196.JavaMail.root_at_spooler6-g27.priv.proxad.net" -->
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
<strong>Subject:</strong> [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)<br>
<strong>From:</strong> <a href="mailto:olivier.lahaye1_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20centos-7%20/%20rhel-7%20build%20fail%20(configure%20fails%20to%20recognize%20g%2B%2B)"><em>olivier.lahaye1_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-07-04 09:00:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15074.php">Gilles Gouaillardet: "Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<li><strong>Previous message:</strong> <a href="15072.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15074.php">Gilles Gouaillardet: "Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<li><strong>Reply:</strong> <a href="15074.php">Gilles Gouaillardet: "Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>On centos-7 beta, the configure script fails to recognize the g++ compiler. 
<br>
checking for the C++ compiler vendor... unknown 
<br>
checking if C and C++ are link compatible... no 
<br>
********************************************************************** 
<br>
* It appears that your C++ compiler is unable to link against object 
<br>
* files created by your C compiler. This generally indicates either 
<br>
* a conflict between the options specified in CFLAGS and CXXFLAGS 
<br>
* or a problem with the local compiler installation. More 
<br>
* information (including exactly what command was given to the 
<br>
* compilers and what error resulted when the commands were executed) is 
<br>
* available in the config.log file in this directory. 
<br>
********************************************************************** 
<br>
<p>Solution: doing: 
<br>
yum -y install libtool-ltdl-devel 
<br>
autoreconf -if 
<br>
<p>=&gt; And it works. 
<br>
./configure FC=gfortran CC=gcc CXX=g++ --with-verbs=/usr --with-tm=/opt/pbs --with-slurm --enable-oshmem --with-libltdl 
<br>
<p>NOTE: that during reconfigure I get a lot of: &quot;config/opal_get_version.sh: No such file or directory.&quot; 
<br>
Build doesn't seem to be affected though. 
<br>
<p>./config/ contains both opal_get_version.m4 and opal_get_version.m4sh, but no .sh file. 
<br>
Doing make opal_get_version.sh restarts a full reconfigure with some warnings about FF and other obsolete variables buf don't know how to build opal_get_version.sh 
<br>
<p>Hope this helps. 
<br>
<p>Best regards, 
<br>
<p><p><pre>
-- 
Olivier LAHAYE 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15074.php">Gilles Gouaillardet: "Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<li><strong>Previous message:</strong> <a href="15072.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15074.php">Gilles Gouaillardet: "Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<li><strong>Reply:</strong> <a href="15074.php">Gilles Gouaillardet: "Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
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
