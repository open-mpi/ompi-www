<?
$subject_val = "[OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 03:17:53 2009" -->
<!-- isoreceived="20090722071753" -->
<!-- sent="Wed, 22 Jul 2009 11:17:54 +0400" -->
<!-- isosent="20090722071754" -->
<!-- name="Alexey Sokolov" -->
<!-- email="gabbear_at_[hidden]" -->
<!-- subject="[OMPI users] Warning: declaration &amp;#226;&amp;#128;&amp;#152;struct MPI::Grequest_intercept_t&amp;#226;&amp;#128;&amp;#153; does not declare anything" -->
<!-- id="1248247074.3707.28.camel_at_localhost.localdomain" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything<br>
<strong>From:</strong> Alexey Sokolov (<em>gabbear_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 03:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>Previous message:</strong> <a href="10031.php">Lee Amy: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>Reply:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>Reply:</strong> <a href="10057.php">Jeff Squyres: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I faced a warning &quot;declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does
<br>
not declare anything&quot; using openmpi 1.2.4 (compiling under Fedora 10
<br>
with mpic++ wrapper over gcc 4.3.2) and don't know how to solve it.
<br>
Browsing the Internet i've found an advise just to ignore it, but i
<br>
don't think it is impossible to solve it in another way.
<br>
<p>I have a correct working single thread program. Then i just include
<br>
mpi.h, compile and get this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In file included
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/include/openmpi/1.2.4-gcc/openmpi/ompi/mpi/cxx/mpicxx.h:246,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/include/openmpi/1.2.4-gcc/mpi.h:1783,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /home/user/NetBeansProjects/Correlation_orig/Correlation/Correlation.cpp:2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/include/openmpi/1.2.4-gcc/openmpi/ompi/mpi/cxx/request_inln.h:347: warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
The program is still works correctly but this warning makes me nervous.
<br>
<p>Sincerely yours, Alexey.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>Previous message:</strong> <a href="10031.php">Lee Amy: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>Reply:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>Reply:</strong> <a href="10057.php">Jeff Squyres: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
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
