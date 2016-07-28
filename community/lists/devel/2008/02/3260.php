<?
$subject_val = "[OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 21:32:01 2008" -->
<!-- isoreceived="20080219023201" -->
<!-- sent="Mon, 18 Feb 2008 21:31:48 -0500" -->
<!-- isosent="20080219023148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] PLPA ready?" -->
<!-- id="124DBC92-A6B7-48C7-8B29-4DCEC52DC4D6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] PLPA ready?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-18 21:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3259.php">Tim Prins: "[OMPI devel] t_win failures if openib btl is not loaded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sharon/Lenny --
<br>
<p>Could you try out the newest PLPA RC for me?  I think it's ready.  I  
<br>
just posted rc4 to the web site (I posted that rc3 was available, and  
<br>
then found a small bug that necessitated rc4): <a href="http://www.open-mpi.org/software/plpa/v1.1/">http://www.open-mpi.org/software/plpa/v1.1/</a>
<br>
<p>You should be able to do this to test it within an OMPI SVN checkout:
<br>
<p>cd opal/mca/paffinity/linux
<br>
mv plpa bogus
<br>
tar zxf plpa-1.1rc4.tar.gz
<br>
ln -s plpa-1.1rc4 plpa
<br>
cd ../../../..
<br>
./autogen &amp;&amp; ./configure ...... &amp;&amp; make -j 4 ......
<br>
<p>Let me know if it works for you properly (configure, build, and  
<br>
function).  If so, I think it's ready for release.  I'll then do the  
<br>
SVN magic to bring it to the OMPI trunk.
<br>
<p>Thanks.
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
<li><strong>Next message:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3259.php">Tim Prins: "[OMPI devel] t_win failures if openib btl is not loaded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
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
