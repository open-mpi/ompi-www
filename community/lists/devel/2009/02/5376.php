<?
$subject_val = "[OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 12:26:34 2009" -->
<!-- isoreceived="20090205172634" -->
<!-- sent="Thu, 05 Feb 2009 09:30:51 -0800" -->
<!-- isosent="20090205173051" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;unknown&amp;quot; in-coming fragment in sm BTL" -->
<!-- id="498B224B.1020402_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 12:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5377.php">Terry Dontje: "[OMPI devel] OMPI Developer meeting on 02/12/09"</a>
<li><strong>Previous message:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5378.php">Richard Graham: "Re: [OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL"</a>
<li><strong>Reply:</strong> <a href="5378.php">Richard Graham: "Re: [OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In btl_sm_component.c, mca_btl_sm_component_progress() polls on FIFOs.  
<br>
If it gets something, it has a &quot;switch&quot; statement with cases for send 
<br>
fragments, returned fragments (ACKs) to be returned to the freelist, and 
<br>
default/unknown.  What's that default/unknown case about?  What behavior 
<br>
should it produce?  What assumptions does/can it make?  Is this a panic 
<br>
code path that should never be exercised?  Is it all right to let this 
<br>
code path break since it should never be encountered anyhow and the 
<br>
behavior doesn't even make sense?  (Someone sent me something.  They 
<br>
weren't supposed to and I don't know what to do with it.  So, I'm going 
<br>
to send it back to them.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5377.php">Terry Dontje: "[OMPI devel] OMPI Developer meeting on 02/12/09"</a>
<li><strong>Previous message:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5378.php">Richard Graham: "Re: [OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL"</a>
<li><strong>Reply:</strong> <a href="5378.php">Richard Graham: "Re: [OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL"</a>
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
