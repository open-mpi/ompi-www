<?
$subject_val = "[OMPI devel] 1.4.4 .so version numbers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 15:56:37 2011" -->
<!-- isoreceived="20110429195637" -->
<!-- sent="Fri, 29 Apr 2011 15:56:25 -0400" -->
<!-- isosent="20110429195625" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.4 .so version numbers" -->
<!-- id="DF613128-D390-4CF5-978C-432269CBCAEA_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.4 .so version numbers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-29 15:56:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>Previous message:</strong> <a href="9226.php">Jeff Squyres: "[OMPI devel] 1.4.4rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>Reply:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Houston, we have a problem.
<br>
<p>lib_mpif90.so had changes for the upcoming 1.4.4 release that requires a .so version bump.  Specifically, some MPI F90 bindings used to have some parameters of type INTEGER.  In 1.4.4, those parameter types were corrected to be INTEGER(KIND=MPI_ADDRESS_KIND).
<br>
<p>&nbsp;* 1.4.3 value: 0:1:0
<br>
&nbsp;* 1.4.4 value: 1:0:0
<br>
&nbsp;&nbsp;&nbsp;--&gt; bumped current &amp; reset rev because param types on some i/f's changed 
<br>
<p>Unfortunately, libmpi_f90.so has already been released in v1.5 with the value 1:0:0.  So... what do we do?  
<br>
<p>Before discussing options, let's review a few things:
<br>
<p>1. Remember that two different versions of OMPI cannot be installed into the same tree.  .so version numbers *help*, but there's still other support files that OMPI does not version.  Hence, if you have 2 versions of OMPI, you *must* install them to different installation trees.
<br>
<p>2. If you compile your MPI application with OMPI version A, you can run it with OMPI version B (provided that both A and B are ABI-compatible with each other), usually by updating your LD_LIBRARY_PATH.
<br>
<p>3. To be clear, you can do something like this:
<br>
<p>$ /ompi-vA-install/bin/mpicc ring.c -o ring
<br>
$ export LD_LIBRARY_PATH=/ompi-b-install/lib
<br>
$ /ompi-vB-install/bin/mpirun -np 4 ring
<br>
<p>4. However, if A and B are *not* ABI compatible, the .so version numbers are supposed to protect you such that the above example would not work.  When you try to mpirun, you would get an error message from the run-time linker that ring is not compatible with B's libmpi.so (for example).
<br>
<p>5. The particular F90 changes that were made were only to the &quot;large&quot; F90 module size, which is not the default (you have to specify --with-f90-module=large to OMPI's configure).
<br>
<p>6. Versions of OMPI 1.3.2 are supposed to be ABI compatible with all remaining versions of 1.3.x and all versions of 1.4.x.
<br>
<p>-----
<br>
<p>So -- with all that in mind -- let's talk about what to do for 1.4.4.  I see a few options:
<br>
<p>1. Go with 1:0:0 anyway.  
<br>
<p>&nbsp;&nbsp;&nbsp;CONSEQUENCE: We have two different versions of libmpi.so out there with 1.0.0 which are not compatible with each other.
<br>
<p>&nbsp;&nbsp;&nbsp;IMPACT: Probably pretty minimal -- not too many people use the &quot;large&quot; F90 bindings.  And no one has noticed the wrong bindings that we included &lt;=1.4.3, so it's unlikely that anyone is using these particular interfaces.
<br>
<p>2. Go with 0:2:0.
<br>
<p>&nbsp;&nbsp;&nbsp;CONSEQUENCE: This is somewhat of a lie; we're saying we haven't modified the interface.  But we did.
<br>
<p>&nbsp;&nbsp;&nbsp;IMPACT: Same as above.  A binary using the old/wrong interfaces (e.g., compiled against 1.4.3) could still run-time link against OMPI 1.4.4 and possibly segv because the parameters are different sizes.
<br>
<p>3. Not fix the Fortran bindings in 1.4.x -- fix them in 1.5.4.
<br>
<p>&nbsp;&nbsp;&nbsp;CONSEQUENCE: Leave them broken.  There's at least one user who would be annoyed by this (i.e., the one who reported the problem to us).
<br>
<p>&nbsp;&nbsp;&nbsp;IMPACT: We can fix this in 1.5.4.  We already have many old versions of OMPI that have these broken bindings.  What's one more?  It might be an easier thing to say &quot;The bindings are fixed in 1.5.4 and higher&quot; rather than &quot;The bindings are fixed in 1.4.x, where x&gt;=4 and 1.5.y, where y&gt;=4&quot;.
<br>
<p>None of the options are good.
<br>
<p>I'm somewhat leaning towards #3.  
<br>
<p>Opinions?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>Previous message:</strong> <a href="9226.php">Jeff Squyres: "[OMPI devel] 1.4.4rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>Reply:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
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
