<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 26 23:14:38 2006" -->
<!-- isoreceived="20060727031438" -->
<!-- sent="Wed, 26 Jul 2006 21:14:13 -0600" -->
<!-- isosent="20060727031413" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] SVN breakage / new event library committed" -->
<!-- id="51DE2FD9-10FB-46A4-B69D-4E378BAE0EF7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-26 23:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0978.php">Graham E Fagg: "[OMPI devel] progress thread check"</a>
<li><strong>Previous message:</strong> <a href="0976.php">Adrian Knoth: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I just finished committing the event library into the trunk.   
<br>
Unfortunately, because the event library was not imported using a  
<br>
vendor import 2 years ago, I had to do some things that made SVN a  
<br>
little unhappy.  The good news is that the next libevent update will  
<br>
not require these changes.  The bad news is that you have to follow  
<br>
some special instructions to properly update your SVN checkout.  In  
<br>
particular, you need to completely delete the opal/event directory,  
<br>
then run svn up.  If you svn up'ed before reading this e-mail, just  
<br>
rm -rf opal/event and svn up again.  All should be good.
<br>
<p>After updating, you *MUST* re-run autogen.sh and configure (sorry!).
<br>
<p>Because I was already making everyone re-run autogen.sh, I also  
<br>
committed some code to opal that made the code to print a backtrace  
<br>
from some #ifs in opal/util/stacktrace.c to a full-blown framework.   
<br>
Terry added support for Solaris the other day, and I figured out how  
<br>
to support OS X.  This made three possible setups, and OS X required  
<br>
a bunch of files, so it seemed that a framework was needed.
<br>
<p>Two notes about the OS X stacktrace support.  First, it doesn't print  
<br>
a useful stack for 64 bit binaries yet, but I'm working on it.   
<br>
Second, there are some warnings about C++ comments in the code.   
<br>
PLEASE DO NOT FIX THESE.  I will be fixing them shortly, but need to  
<br>
find a way that doesn't make future updates impossibly difficult.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0978.php">Graham E Fagg: "[OMPI devel] progress thread check"</a>
<li><strong>Previous message:</strong> <a href="0976.php">Adrian Knoth: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
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
