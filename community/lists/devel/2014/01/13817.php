<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 20 15:11:54 2014" -->
<!-- isoreceived="20140120201154" -->
<!-- sent="Mon, 20 Jan 2014 20:11:44 +0000" -->
<!-- isosent="20140120201144" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32" -->
<!-- id="CF02D0D3.17117%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14c=dsstvd70ZNQjRqeazHjr7Vph6ohzvPznKf98F7cVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-20 15:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13818.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Previous message:</strong> <a href="13816.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather - thermal monitoring"</a>
<li><strong>In reply to:</strong> <a href="13804.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: build failure on mips32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/17/14 8:00 PM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
<p>Trying to build 1.7.4rc2r30303 with gcc on linux/mips32 yields the following failure:
<br>
<p>&nbsp;&nbsp;CXX      mpicxx.lo
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/mpi/cxx/mpicxx.cc:31:2: warning: #ident is a deprecated GCC extension
<br>
In file included from /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/class/opal_pointer_array.h:37,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/errhandler/errhandler.h:32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/mpi/cxx/mpicxx.cc:37:
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/threads/mutex.h: In function 'int64_t OPAL_THREAD_ADD64(volatile int64_t*, int)':
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/threads/mutex.h:292: error: 'opal_atomic_add_64' was not declared in this scope
<br>
<p>This looks VERY similar to the problem I reported recently w/ xlc on ppc32 ( <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13801.php">http://www.open-mpi.org/community/lists/devel/2014/01/13801.php</a> )
<br>
I am checking gcc on ppc32 now...
<br>
<p>This is the same problem.  It will fail on all 32 bit RISC platforms (which tend not to have double-word atomics, like many of the more CISCy platforms).  So SPARC32, ppc32, and mips32 are all going to fail.  Working on a fix, but it's going to take a bit.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13817/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13818.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Previous message:</strong> <a href="13816.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather - thermal monitoring"</a>
<li><strong>In reply to:</strong> <a href="13804.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: build failure on mips32"</a>
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
