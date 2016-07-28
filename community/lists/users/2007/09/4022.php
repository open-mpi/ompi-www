<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 14 15:03:28 2007" -->
<!-- isoreceived="20070914190328" -->
<!-- sent="Fri, 14 Sep 2007 15:03:18 -0400" -->
<!-- isosent="20070914190318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiio romio etc" -->
<!-- id="B7E6BA2D-781F-48D3-B4DC-E77FA068A6BC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070914185102.GV25905_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2007-09-14 15:03:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4023.php">cutecalin: "[OMPI users] Do we like the same books?"</a>
<li><strong>Previous message:</strong> <a href="4021.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>In reply to:</strong> <a href="4021.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 14, 2007, at 2:51 PM, Robert Latham wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Ok.  Maybe we'll just make a hard-coded string somewhere &quot;ROMIO from
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2 vABC, on AA/BB/CCCC&quot; or somesuch.  That'll at least give some
</span><br>
<span class="quotelev2">&gt;&gt; indication of what version you've got.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That sort-of reminds me:  ROMIO (well, all of MPICH2) is going to move
</span><br>
<span class="quotelev1">&gt; to SVN &quot;one of these days&quot;.  Once we've done that, you'll be able to
</span><br>
<span class="quotelev1">&gt; sync up with both MPICH2 releases and our development branch.  I think
</span><br>
<span class="quotelev1">&gt; it wouldn't be a problem for us to tag ROMIO whenever you sync up with
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<p>Coolio.  Would you be ameniable to a few patches?  I think we can  
<br>
remove all the file renaming stuff, but there are some other things  
<br>
that we did to make ROMIO integrate nicely into Open MPI (the biggest  
<br>
issue was configure and the build system, but I know that Brian has  
<br>
&quot;some ideas&quot; about that - I don't know what they are, though).
<br>
<p>Moving ROMIO to public SVN wont' solve many of the integration and  
<br>
logistics issues, but it would allow us to snarf patches directly  
<br>
from your SVN, which might make our continual-over-time integration a  
<br>
little easier.  In a perfect world, it would be great to svn:external  
<br>
our romio directory to a particular tag/release in your SVN, but I  
<br>
think that's probably too much to hope for.
<br>
<p>I can't remember all the particulars offhand; we'd probably want to  
<br>
have a sit-down discussion with you, Brian, and me to figure this  
<br>
stuff out if you're interested.
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
<li><strong>Next message:</strong> <a href="4023.php">cutecalin: "[OMPI users] Do we like the same books?"</a>
<li><strong>Previous message:</strong> <a href="4021.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>In reply to:</strong> <a href="4021.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
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
