<?
$subject_val = "[OMPI devel] Building Error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 15 16:01:27 2011" -->
<!-- isoreceived="20110815200127" -->
<!-- sent="Mon, 15 Aug 2011 16:01:23 -0400" -->
<!-- isosent="20110815200123" -->
<!-- name="Matthew Russell" -->
<!-- email="mrussel2_at_[hidden]" -->
<!-- subject="[OMPI devel] Building Error" -->
<!-- id="CAFmqpWpWqkDawWFQA57-dCJ4CagRrL7w2b9d5E=10UWamePhKQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFmqpWrpcx_J9xzU+nCmnKXfZCc5cg62YnR9Yn+8rwTobfLt8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Building Error<br>
<strong>From:</strong> Matthew Russell (<em>mrussel2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-15 16:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Previous message:</strong> <a href="9646.php">Eugene Loh: "[OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Maybe reply:</strong> <a href="9658.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Maybe reply:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I hope this problem merits being posted here.
<br>
<p>On OS X (Snow Leopard, and Lion), I cannot seem to build Open MPI.
<br>
<p>After a lot of building, I get the error:
<br>
<p>/bin/sh ../../../libtool --tag=CC   --mode=link
<br>
/opt/pgi/osx86-64/10.9/bin/pgcc  -DNDEBUG -O2 -Msignextend -V
<br>
-export-dynamic   -o orte-clean orte-clean.o
<br>
../../../orte/libopen-rte.la-lutil
<br>
libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 -Msignextend -V
<br>
-o orte-clean orte-clean.o  ../../../orte/.libs/libopen-rte.a
<br>
/Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
<br>
Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;_orte_odls&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_orte_errmgr_base_error_abort in libopen-rte.a(errmgr_base_fns.o)
<br>
ld: symbol(s) not found for architecture x86_64
<br>
<p>This is with the PGI 10.9 compiler, OpenMPI 1.4.3, platform is 86x64
<br>
<p>The README does not list PGI as a compiler that OpenMPI was tested with, and
<br>
there are notes about it's support for XGrid being broken (I'm not sure if
<br>
this is related.)
<br>
<p>I seem to get the error regardless of which configure flags I'm using, just
<br>
for completeness though, here are the flags I am using:
<br>
./configure --prefix=/usr/local/openmpi_pg --enable-mpi-f77 --enable-mpi-f90
<br>
--with-memory-manager=none
<br>
<p>Has anyone else got or fixed this error?
<br>
<p>I looked at other postings in this list, such as
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2007/05/1590.php">http://www.open-mpi.org/community/lists/devel/2007/05/1590.php</a> , but they
<br>
didn't help much.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Previous message:</strong> <a href="9646.php">Eugene Loh: "[OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Maybe reply:</strong> <a href="9658.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Maybe reply:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
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
