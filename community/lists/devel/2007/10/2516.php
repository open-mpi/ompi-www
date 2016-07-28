<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 17:56:29 2007" -->
<!-- isoreceived="20071026215629" -->
<!-- sent="Fri, 26 Oct 2007 17:56:17 -0400" -->
<!-- isosent="20071026215617" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] more vt-integration questions" -->
<!-- id="2FDFDFE8-8310-4B20-AD5B-83B3E43BCE31_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 17:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2517.php">Gleb Natapov: "[OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<li><strong>Previous message:</strong> <a href="2515.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like Dresden took my config/ompi_contrib.m4 file from the  
<br>
htor-nbc tree and made some updates.
<br>
<p>I like the idea of having ompi_info show the contributed packages and  
<br>
their versions, but just like the rest of the tree, it has to be done  
<br>
in a modular fashion.  As it stands, in the vt-integration branch,  
<br>
there is still a bunch of VT-specific code outside of the ompi/ 
<br>
contrib/vt tree (e.g., in ompi/tools/ompi_info), and stuff like this:
<br>
<p>OMPI_SAVE_VERSION([VT], [VampirTrace],[$srcdir/ompi/contrib/vt/vt/ 
<br>
VERSION],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ompi/include/contrib/vt_version.h])
<br>
<p>should not be in ompi_contrib.m4 -- it should be in ompi/contrib/vt/ 
<br>
configure.m4.  *OR* (probably more preferably, so that ompi_info can  
<br>
reap the benefit), it should be done in a generic way so that  
<br>
ompi_info can see the version info for *all* contributed packages  
<br>
rather than being hard-coded for just VT.
<br>
<p>Also, why is there a VT header file now in ompi/include/contrib?  If  
<br>
you want a header file with VT's version in it, I think it belongs  
<br>
under the ompi/contrib/vt tree somewhere.  If you want to install it  
<br>
to $includedir, that's a different issue -- it does not need to be  
<br>
outside of the VT contrib tree to make that happen.
<br>
<p>I was really, really hoping that the *only* place that a contrib file  
<br>
would need to write into the main ompi tree would be the 2 places in  
<br>
config/ompi_contrib.m4 (and that that would someday be replaced when  
<br>
I/someone has time to do it in m4 properly, similar to how we do  
<br>
component discovery -- hence, contributed software would not need to  
<br>
touch *anywhere* in the main OMPI tree).
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
<li><strong>Next message:</strong> <a href="2517.php">Gleb Natapov: "[OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<li><strong>Previous message:</strong> <a href="2515.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
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
