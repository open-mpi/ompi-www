<?
$subject_val = "[OMPI devel] confusing output when no c++ compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 16:36:31 2015" -->
<!-- isoreceived="20150202213631" -->
<!-- sent="Mon, 2 Feb 2015 13:36:28 -0800" -->
<!-- isosent="20150202213628" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] confusing output when no c++ compiler" -->
<!-- id="CAAvDA15xCub0YXc=q=EZHFSCMBM90dChUxdemhpCOZFKjxWCRg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] confusing output when no c++ compiler<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 16:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16881.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The output below occurred testing Jeff's no-embedded-libltdl tarball, but I
<br>
am assuming in quite likely the same is true on the trunk.
<br>
<p>The &quot;issue&quot; is that I am told by configure that &quot;C and C++ compilers are
<br>
not link compatible&quot;.
<br>
However, it appears I just don't have a C++ compiler at all!!
<br>
<p>I am not sure (and too lazy/busy to re-read README) if Open MPI currently
<br>
requires a C++ compiler, but that certainly appears to be the case.  If
<br>
that is *not* the intent, then this issue is bigger than a misleading error
<br>
message.
<br>
<p>I have configured this Linux/x86-64 system with only --prefix=... and
<br>
--enable-debug.
<br>
<p>-Paul
<br>
<p><p>*** C++ compiler and preprocessor
<br>
checking for g++... no
<br>
checking for c++... no
<br>
checking for gpp... no
<br>
checking for aCC... no
<br>
checking for CC... no
<br>
checking for cxx... no
<br>
checking for cc++... no
<br>
checking for cl.exe... no
<br>
checking for FCC... no
<br>
checking for KCC... no
<br>
checking for RCC... no
<br>
checking for xlC_r... no
<br>
checking for xlC... no
<br>
checking whether we are using the GNU C++ compiler... no
<br>
checking whether g++ accepts -g... no
<br>
checking dependency style of g++... none
<br>
checking how to run the C++ preprocessor... /lib/cpp
<br>
checking for the C++ compiler vendor... unknown
<br>
configure: WARNING: -g has been added to CXXFLAGS (--enable-debug)
<br>
checking if C and C++ are link compatible... no
<br>
**********************************************************************
<br>
* It appears that your C++ compiler is unable to link against object
<br>
* files created by your C compiler.  This generally indicates either
<br>
* a conflict between the options specified in CFLAGS and CXXFLAGS
<br>
* or a problem with the local compiler installation.  More
<br>
* information (including exactly what command was given to the
<br>
* compilers and what error resulted when the commands were executed) is
<br>
* available in the config.log file in this directory.
<br>
**********************************************************************
<br>
configure: error: C and C++ compilers are not link compatible.  Can not
<br>
continue.
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16881.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
