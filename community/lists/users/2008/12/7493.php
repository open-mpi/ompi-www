<?
$subject_val = "Re: [OMPI users] collective algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 10:12:10 2008" -->
<!-- isoreceived="20081210151210" -->
<!-- sent="Wed, 10 Dec 2008 10:11:55 -0500" -->
<!-- isosent="20081210151155" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective algorithms" -->
<!-- id="DB8C2167-A969-49B8-A3A8-CFD9841DC909_at_cisco.com" -->
<!-- charset="KOI8-R" -->
<!-- inreplyto="6750442a0812092105x31e9a248o4ea7b38b143c3cec_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective algorithms<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 10:11:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7494.php">Jeff Squyres: "Re: [OMPI users] Multicast?"</a>
<li><strong>Previous message:</strong> <a href="7492.php">Jeff Squyres: "Re: [OMPI users] Export enviroment variable"</a>
<li><strong>In reply to:</strong> <a href="7487.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2008, at 12:05 AM, &#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215; wrote:
<br>
<p><span class="quotelev1">&gt; Hello! I appreciate your help. I received a library of my  
</span><br>
<span class="quotelev1">&gt; algorithm's. But I don't know  how to use it.
</span><br>
<p>Can you explain what you mean / what you did?
<br>
<p>E.g., did you build your algorithm code inside an OMPI tree and now  
<br>
have an mca_coll_&lt;whatever&gt;.so file?  If so, a &quot;make install&quot; should  
<br>
put that dynamic shared object (DSO) in the Right location in the OMPI  
<br>
installation tree such that an &quot;ompi_info | grep coll&quot; should show  
<br>
your component along with the others that OMPI installs.
<br>
<p>If all that happens properly, and you set your communicator query  
<br>
priority high enough (from inside the module query function), your  
<br>
component should get called for the back-ends of the various MPI  
<br>
collectives.
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
<li><strong>Next message:</strong> <a href="7494.php">Jeff Squyres: "Re: [OMPI users] Multicast?"</a>
<li><strong>Previous message:</strong> <a href="7492.php">Jeff Squyres: "Re: [OMPI users] Export enviroment variable"</a>
<li><strong>In reply to:</strong> <a href="7487.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "Re: [OMPI users] collective algorithms"</a>
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
