<?
$subject_val = "Re: [OMPI devel] trunk borked -- my fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 17:41:14 2009" -->
<!-- isoreceived="20090804214114" -->
<!-- sent="Tue, 4 Aug 2009 17:41:04 -0400" -->
<!-- isosent="20090804214104" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk borked -- my fault" -->
<!-- id="5E67B43B-A97E-4B13-8C69-F96ECB1BBAA1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1644EEFD-DB71-4A6E-8AAD-2FA8201DA589_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk borked -- my fault<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 17:41:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6584.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 4, 2009, at 5:37 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I used 2.64 for about a week on a bunch of machines. I never had
</span><br>
<span class="quotelev1">&gt; problems with it before...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After checking it turned out that autoconf 2.64 was freshly installed
</span><br>
<span class="quotelev1">&gt; on my Mac, so this might be a problem with autoconf 2.64 and MAC OS
</span><br>
<span class="quotelev1">&gt; X ... I'll go back to 2.63 until we figure out a way to solve these
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>FWIW, I saw the warnings on Linux as well, and then configure failed  
<br>
later in spectacular and interesting ways (I didn't let it get to the  
<br>
build because configure was so borked up -- all the individual  
<br>
POSIX .h file tests said that the file was present but could not be  
<br>
compiled because somehow it was stuck trying to compile them with  
<br>
gfortran (!) instead of gcc).  Something changed in AC2.64 with  
<br>
regards to how they do language REQUIRE'ing, etc. that I don't fully  
<br>
understand.
<br>
<p>Let me know if the workaround in r21759 works for you.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6584.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
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
