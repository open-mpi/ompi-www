<?
$subject_val = "[OMPI devel] configure check for Fortran and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 10:36:20 2012" -->
<!-- isoreceived="20120421143620" -->
<!-- sent="Sat, 21 Apr 2012 10:36:10 -0400" -->
<!-- isosent="20120421143610" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] configure check for Fortran and threads" -->
<!-- id="4F92C5DA.7060006_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] configure check for Fortran and threads<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 10:36:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10900.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<li><strong>Previous message:</strong> <a href="10898.php">Jeffrey Squyres: "[OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10904.php">Jeffrey Squyres: "Re: [OMPI devel] configure check for Fortran and threads"</a>
<li><strong>Reply:</strong> <a href="10904.php">Jeffrey Squyres: "Re: [OMPI devel] configure check for Fortran and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another probably-Fortran-merge problem.  Three issues in this e-mail.
<br>
<p>Introduction:  The last two nights, Oracle MTT tests have been unable to 
<br>
build the trunk (r26307) with Oracle Studio compilers.  This has been 
<br>
uncovered since the fix of r26302, allowing us to get further in the 
<br>
build process.  We configure with
<br>
&nbsp;&nbsp;&nbsp;--with-openib
<br>
&nbsp;&nbsp;&nbsp;--enable-openib-connectx-xrc
<br>
&nbsp;&nbsp;&nbsp;--without-udapl
<br>
&nbsp;&nbsp;&nbsp;--disable-openib-ibcm
<br>
&nbsp;&nbsp;&nbsp;--enable-btl-openib-failover
<br>
&nbsp;&nbsp;&nbsp;[...]
<br>
and fail in compilation with
<br>
&nbsp;&nbsp;&nbsp;&quot;btl_openib_failover.c&quot;, line 237: undefined struct/union member: 
<br>
port_error_failover
<br>
The member is defined in btl_openib.h, but it's inside an &quot;#if 
<br>
OPAL_HAVE_THREADS&quot; and we're not getting threads.
<br>
<p>#1)  Isn't there supposed to be some diplomatic message about trying to 
<br>
use openib without threads?
<br>
<p>Anyhow, why aren't we getting threads?  Well, configure complains:
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work as is... no
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work with -Kthread... no
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work with -kthread... no
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work with -pthread... no
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work with -pthreads... no
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work with -mt... no
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work with -mthreads... no
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work with -lpthreads... no
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work with -llthread... no
<br>
&nbsp;&nbsp;&nbsp;checking if Fortran compiler and POSIX threads work with -lpthread... no
<br>
<p>Woke up on the wrong side of bed, did we?  Checking config.log:
<br>
<p>configure:58332: checking if Fortran compiler and POSIX threads work as is
<br>
configure:58417: cc -DNDEBUG -m32 -xO5  -I. -c conftest.c
<br>
&quot;conftest.c&quot;, line 21: void function cannot return value
<br>
&quot;conftest.c&quot;, line 24: void function cannot return value
<br>
&quot;conftest.c&quot;, line 27: void function cannot return value
<br>
&quot;conftest.c&quot;, line 30: void function cannot return value
<br>
[...]
<br>
void pthreadtest(void)
<br>
{ return pthreadtest_f(); }
<br>
[...]
<br>
void pthreadtest_(void)
<br>
{ return pthreadtest_f(); }
<br>
[...etc...]
<br>
<p>#2)  Okay, yes, we shouldn't be trying to return values from void functions.
<br>
<p>Same for the other checks (-pthread, -pthreads, -mt, etc.).  But, 
<br>
something else strikes me as funny about those other checks.  Here is 
<br>
more from config.log:
<br>
<p>configure:58698: checking if Fortran compiler and POSIX threads work 
<br>
with -Kthread
<br>
configure:58768: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
<br>
[...]
<br>
configure:58698: checking if Fortran compiler and POSIX threads work 
<br>
with -kthread
<br>
configure:58768: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
<br>
[...]
<br>
configure:58698: checking if Fortran compiler and POSIX threads work 
<br>
with -pthread
<br>
configure:58768: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
<br>
[...]
<br>
configure:58698: checking if Fortran compiler and POSIX threads work 
<br>
with -pthreads
<br>
configure:58768: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
<br>
[...]
<br>
configure:58698: checking if Fortran compiler and POSIX threads work 
<br>
with -mt
<br>
configure:58768: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
<br>
[...]
<br>
configure:58698: checking if Fortran compiler and POSIX threads work 
<br>
with -mthreads
<br>
configure:58768: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
<br>
[...]
<br>
configure:59320: checking if Fortran compiler and POSIX threads work 
<br>
with -lpthreads
<br>
configure:59390: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
<br>
[...]
<br>
configure:59320: checking if Fortran compiler and POSIX threads work 
<br>
with -llthread
<br>
configure:59390: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
<br>
[...]
<br>
configure:59320: checking if Fortran compiler and POSIX threads work 
<br>
with -lpthread
<br>
configure:59390: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
<br>
[...]
<br>
<p>The purged text complains about void functions returning values, but we 
<br>
already talked about that.  What interests me now is this:
<br>
<p>#3)  While configure claims to be trying so many flags (-pthread, -mt, 
<br>
etc.) it appears always to be checking only -mt.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10900.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<li><strong>Previous message:</strong> <a href="10898.php">Jeffrey Squyres: "[OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10904.php">Jeffrey Squyres: "Re: [OMPI devel] configure check for Fortran and threads"</a>
<li><strong>Reply:</strong> <a href="10904.php">Jeffrey Squyres: "Re: [OMPI devel] configure check for Fortran and threads"</a>
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
