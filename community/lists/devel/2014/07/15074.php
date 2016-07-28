<?
$subject_val = "Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  6 23:53:50 2014" -->
<!-- isoreceived="20140707035350" -->
<!-- sent="Mon, 07 Jul 2014 12:54:13 +0900" -->
<!-- isosent="20140707035413" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)" -->
<!-- id="53BA19E5.1090808_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="331640562.87464461.1404478809114.JavaMail.root_at_spooler6-g27.priv.proxad.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-06 23:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15075.php">Mike Dubman: "[OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15073.php">olivier.lahaye1_at_[hidden]: "[OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<li><strong>In reply to:</strong> <a href="15073.php">olivier.lahaye1_at_[hidden]: "[OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Olivier,
<br>
<p>i was unable to reproduce the issue on a centos7 beta with :
<br>
<p>- trunk (latest nightly snapshot)
<br>
- 1.8.1
<br>
- 1.6.5
<br>
<p>the libtool-ltdl-devel package is not installed on this server
<br>
<p>that being said, i did not use
<br>
--with-verbs
<br>
nor
<br>
--with-tm
<br>
<p>since these packages are not installed on my server.
<br>
<p>are you installing from a tarball or from svn/git/hg ?
<br>
could you also compress and include the config.log ?
<br>
<p>Gilles
<br>
<p>On 2014/07/04 22:00, olivier.lahaye1_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; On centos-7 beta, the configure script fails to recognize the g++ compiler. 
</span><br>
<span class="quotelev1">&gt; checking for the C++ compiler vendor... unknown 
</span><br>
<span class="quotelev1">&gt; checking if C and C++ are link compatible... no 
</span><br>
<span class="quotelev1">&gt; ********************************************************************** 
</span><br>
<span class="quotelev1">&gt; * It appears that your C++ compiler is unable to link against object 
</span><br>
<span class="quotelev1">&gt; * files created by your C compiler. This generally indicates either 
</span><br>
<span class="quotelev1">&gt; * a conflict between the options specified in CFLAGS and CXXFLAGS 
</span><br>
<span class="quotelev1">&gt; * or a problem with the local compiler installation. More 
</span><br>
<span class="quotelev1">&gt; * information (including exactly what command was given to the 
</span><br>
<span class="quotelev1">&gt; * compilers and what error resulted when the commands were executed) is 
</span><br>
<span class="quotelev1">&gt; * available in the config.log file in this directory. 
</span><br>
<span class="quotelev1">&gt; ********************************************************************** 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15075.php">Mike Dubman: "[OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15073.php">olivier.lahaye1_at_[hidden]: "[OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<li><strong>In reply to:</strong> <a href="15073.php">olivier.lahaye1_at_[hidden]: "[OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
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
