<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 10:16:48 2005" -->
<!-- isoreceived="20050818151648" -->
<!-- sent="Thu, 18 Aug 2005 11:14:02 -0400" -->
<!-- isosent="20050818151402" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  ptl sm problem" -->
<!-- id="7285EB3A-90A4-4C7E-BCF7-82BE2A730A41_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5B93922E-5F98-447E-89F9-053D1DCF597B_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-18 10:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0198.php">Jeff Squyres: "Re:  ob1 -&gt; default?"</a>
<li><strong>Previous message:</strong> <a href="0196.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0195.php">Jeff Squyres: "ptl sm problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know why but make -k didn't work for me. It complain that  
<br>
some file are missing, it show me the list of files but that's all  
<br>
(it does not create them). So the quickest way I found around this  
<br>
problem is to use the output of &quot;make -k&quot; to know which files it look  
<br>
for and then create them by hand.
<br>
<p>For those still having the problem I have a quick solution:
<br>
<p>cd ompi/mca/ptl/sm
<br>
touch .deps/librecompile_la-ptl_sm_send_alternate.Plo .deps/ 
<br>
ptl_sm.Plo .deps/ptl_sm_component.Plo .deps/ptl_sm_frag.Plo .deps/ 
<br>
ptl_sm_recvfrag.Plo .deps/ptl_sm_send.Plo .deps/ 
<br>
ptl_sm_sendfrag.Plo .deps/ptl_sm_sendreq.Plo
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 18, 2005, at 10:40 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Did everyone catch Brian's e-mail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because of a change I made last night to how the sm ptl builds
</span><br>
<span class="quotelev1">&gt; (sorry, it was necessary -- there was a corner case that we didn't
</span><br>
<span class="quotelev1">&gt; handle) and Automake not being &quot;smart enough,&quot; you'll need to do the
</span><br>
<span class="quotelev1">&gt; following after you update to the latest trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      cd ompi/mca/ptl/sm
</span><br>
<span class="quotelev1">&gt;      rm .deps/*
</span><br>
<span class="quotelev1">&gt;      make -k
</span><br>
<span class="quotelev1">&gt;      cd ../../../
</span><br>
<span class="quotelev1">&gt;      &lt;do whatever you normally do to build OMPI&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re-running autogen.sh/configure will *not* fix this problem (although
</span><br>
<span class="quotelev1">&gt; I think there were other commits last night that will require you to
</span><br>
<span class="quotelev1">&gt; re-run autogen.sh/configure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, if you get a brand new checkout, this problem will not  
</span><br>
<span class="quotelev1">&gt; occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the inconvenience.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0198.php">Jeff Squyres: "Re:  ob1 -&gt; default?"</a>
<li><strong>Previous message:</strong> <a href="0196.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0195.php">Jeff Squyres: "ptl sm problem"</a>
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
