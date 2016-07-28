<?
$subject_val = "[OMPI devel] mmap() failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 15:00:13 2008" -->
<!-- isoreceived="20080911190013" -->
<!-- sent="Thu, 11 Sep 2008 15:00:08 -0400" -->
<!-- isosent="20080911190008" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] mmap() failure" -->
<!-- id="896E5E8E-241D-46AD-B2D2-93CB4E73B7F3_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] mmap() failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 15:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4649.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Previous message:</strong> <a href="4647.php">Lenny Verkhovsky: "Re: [OMPI devel] ticket #1469"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
TotalviewTech brought to my attention that their new ReplayEngine  
<br>
debugger does not support shared memory.  To do this, they intercept  
<br>
mmap() and return ENOMEM to indicate that shared memory is not  
<br>
available.
<br>
<p>In OMPI, if mmap() fails, we unconditionally emit some  
<br>
opal_output(0, ...) messages.  I think we should remove these  
<br>
opal_output's; perhaps replacing them with verbose equivalents (i.e.,  
<br>
only conditionally output those messages).  But we do fail over to  
<br>
other transports, as expected.
<br>
<p>However, the failover is a somewhat false sense of security -- the sm  
<br>
BTL's mmap() occurs during BTL add_procs(), not during component or  
<br>
module startup.  So you can run:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl tcp,sm,self ...
<br>
<p>But actually not use sm at all, even if multiple procs are on the same  
<br>
node.  Specifically, the sm component and module init succeed (so  
<br>
there's no error); but every time you go to add a proc to the sm btl,  
<br>
it'll always fail.  This can be problematic for transports that do not  
<br>
support same-host loopback (e.g., iWARP) -- you'll actually end up  
<br>
with &quot;unreachable&quot; errors, even though you're supposedly using the SM  
<br>
BTL.  That would be very confusing to a user and difficult to diagnose.
<br>
<p>Should we add some kind of trivial mmap() test during the sm BTL  
<br>
component/module init to see if shared memory is available at all?
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
<li><strong>Next message:</strong> <a href="4649.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Previous message:</strong> <a href="4647.php">Lenny Verkhovsky: "Re: [OMPI devel] ticket #1469"</a>
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
