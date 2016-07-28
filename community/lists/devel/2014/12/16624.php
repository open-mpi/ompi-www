<?
$subject_val = "Re: [OMPI devel] OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 16 23:10:35 2014" -->
<!-- isoreceived="20141217041035" -->
<!-- sent="Tue, 16 Dec 2014 20:10:18 -0800" -->
<!-- isosent="20141217041018" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] 1.8.4rc Status" -->
<!-- id="CAAvDA16u-TXW9Vm7UUd2CWw=c2CjeC5QNAXs2mxvdk+sDAnmgA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5490F4A0.9000504_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-16 23:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16623.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16623.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My 1.8.3 build has not completed.
<br>
HOWEVER, I can already see a key difference in the configure step.
<br>
<p>In 1.8.3 &quot;-mt&quot; was added AUTOMATICALLY to CFLAGS by configure:
<br>
<p>checking if C compiler and POSIX threads work as is... no - Solaris, not
<br>
checked
<br>
checking if C++ compiler and POSIX threads work as is... no - Solaris, not
<br>
checked
<br>
checking if Fortran compiler and POSIX threads work as is... no - Solaris,
<br>
not checked
<br>
checking if C compiler and POSIX threads work with -pthread... no
<br>
checking if C compiler and POSIX threads work with -pthreads... no
<br>
checking if C compiler and POSIX threads work with -mt... yes
<br>
checking if C++ compiler and POSIX threads work with -pthread... yes
<br>
checking if Fortran compiler and POSIX threads work with -pthread... yes
<br>
<p>This is not the case in 1.8.4rc4:
<br>
<p>checking if C compiler and POSIX threads work as is... yes
<br>
checking if C++ compiler and POSIX threads work as is... yes
<br>
checking if Fortran compiler and POSIX threads work as is... yes
<br>
<p><p>So, it looks like a chunk of Solaris-specific configure logic was LOST.
<br>
<p>-Paul
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16624/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16623.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16623.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
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
