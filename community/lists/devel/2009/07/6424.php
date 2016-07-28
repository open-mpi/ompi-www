<?
$subject_val = "[OMPI devel] DDT and spawn issue?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 11:50:19 2009" -->
<!-- isoreceived="20090715155019" -->
<!-- sent="Wed, 15 Jul 2009 11:50:13 -0400" -->
<!-- isosent="20090715155013" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] DDT and spawn issue?" -->
<!-- id="D2063199-4268-4E01-ADF8-F4CA6034D0E2_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] DDT and spawn issue?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 11:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6423.php">Holger Mickler: "Re: [OMPI devel] Fwd: [all-osl-users] Upgrading of the OSL SVN server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6427.php">Rainer Keller: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I [very briefly] read about the DDT spawn issues, so I went to look at  
<br>
ompi/op/op.c.  I notice that there's a new comment above the op  
<br>
datatype&lt;--&gt;op map construction area that says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* XXX TODO */
<br>
<p>svn blame says:
<br>
<p>&nbsp;&nbsp;21641   rusraink     /* XXX TODO */
<br>
<p>r21641 is the big merge from the past weekend where the DDT split came  
<br>
in.
<br>
<p>Has this area been looked at and the comment is out of date?  Or does  
<br>
it need to be updated with new mappings?  (I honestly have not looked  
<br>
any farther than this -- the new comment caught my eye)
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
<li><strong>Next message:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6423.php">Holger Mickler: "Re: [OMPI devel] Fwd: [all-osl-users] Upgrading of the OSL SVN server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6427.php">Rainer Keller: "Re: [OMPI devel] DDT and spawn issue?"</a>
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
