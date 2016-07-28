<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 03:22:06 2007" -->
<!-- isoreceived="20071008072206" -->
<!-- sent="Mon, 8 Oct 2007 09:21:19 +0200" -->
<!-- isosent="20071008072119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Sergey serg333" -->
<!-- id="D4128D2C-6773-46A5-8A37-103692325002_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="000b01c8090f$b2d51e90$0a00a8c0_at_slave" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 03:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0062.php">Richard Friedman: "[OMPI docs] Where to start?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2007/09/0060.php">jody: "Re: [OMPI docs] Logo for user-docs project"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see that you also posted to the admin list as well; I will reply here.
<br>
<p>On Oct 7, 2007, at 8:27 PM, constant wrote:
<br>
<p><span class="quotelev1">&gt;    can anybody help me ws. user guide?
</span><br>
<span class="quotelev1">&gt;    not for programmers just for dummer! - user
</span><br>
<span class="quotelev1">&gt;    LAM/MPI is more easy then OpenMPI
</span><br>
<span class="quotelev1">&gt;    I subscribed to the mailing lists couple of times,
</span><br>
<span class="quotelev1">&gt;    but can't find some first steps for using OpenMPI
</span><br>
<p>You must subscribe to OMPI lists before posting to them (this post  
<br>
was sent to ompi-docs-owner_at_[hidden]).  Hence, if you reply to  
<br>
this post before subscribing, it will be automatically discarded.   
<br>
Sorry; this is a necessary anti-spam control for the modern internet...
<br>
<p>This docs subgroup was just formed to create a comprehensive user- 
<br>
level guide to Open MPI.  So the effort is just starting.  Most of  
<br>
our current documentation consists of man pages and the web page  
<br>
FAQ.  This is not really enough, as you note -- we're working on it,  
<br>
but it'll take a little while.
<br>
<p>However, the principles of Open MPI are quite similar to LAM/MPI.   
<br>
One notable difference is that there is no lamboot/lamhalt.  You just  
<br>
use the wrapper compilers (mpicc, mpif77, etc.) to compile your MPI  
<br>
program and then use mpirun or mpiexec (both are exactly equivalent  
<br>
in Open MPI) to run them.  There is a man page for mpirun/mpiexec;  
<br>
that should get you going.
<br>
<p>You might want to send future questions to the general user's mailing  
<br>
list; see this page for a description of OMPI's mailing lists:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/ompi.php">http://www.open-mpi.org/community/lists/ompi.php</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0062.php">Richard Friedman: "[OMPI docs] Where to start?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2007/09/0060.php">jody: "Re: [OMPI docs] Logo for user-docs project"</a>
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
