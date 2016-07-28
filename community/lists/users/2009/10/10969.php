<?
$subject_val = "Re: [OMPI users] memchecker overhead?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 15:35:48 2009" -->
<!-- isoreceived="20091026193548" -->
<!-- sent="Mon, 26 Oct 2009 15:35:41 -0400" -->
<!-- isosent="20091026193541" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memchecker overhead?" -->
<!-- id="E0A4990E-8D8A-427D-AB67-28D1032DDFCD_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B4106EE1-E021-42A2-8675-0E2D316C12B7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memchecker overhead?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 15:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10968.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10968.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 26, 2009, at 3:29 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 26, 2009, at 3:23 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a large overhead for
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --enable-memchecker?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-debug, yes, there is a pretty large penalty.  --enable- 
</span><br>
<span class="quotelev1">&gt; debug is really only intended for Open MPI developers.  If you just  
</span><br>
<span class="quotelev1">&gt; want an OMPI that was compiled with debugging symbols, then just add  
</span><br>
<span class="quotelev1">&gt; -g to the CFLAGS/CXXFLAGS in OMPI's configure, perhaps like this:
</span><br>
<p>Interesting, we were just looking at the memchecker functionality and  
<br>
don't want to double the number of MPI builds we offer. In the Debugg  
<br>
FAQ section 10
<br>
<a href="http://www.open-mpi.org/faq/?category=debugging#memchecker_how">http://www.open-mpi.org/faq/?category=debugging#memchecker_how</a>
<br>
<p>It says you need --enable-debug to use --enable-memchecker, is this  
<br>
really the case then?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  shell$ ./configure CFLAGS=-g CXXFLAGS=-g ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using --enable-debug adds in a whole pile of developer-level run- 
</span><br>
<span class="quotelev1">&gt; time checking and whatnot.  You probably don't want that on  
</span><br>
<span class="quotelev1">&gt; production runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll let the HLRS guys comment on the cost of --enable-memchecker; I  
</span><br>
<span class="quotelev1">&gt; suspect the answer will be &quot;it depends&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10968.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10968.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
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
