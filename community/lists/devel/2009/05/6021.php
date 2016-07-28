<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 10:04:01 2009" -->
<!-- isoreceived="20090514140401" -->
<!-- sent="Thu, 14 May 2009 10:03:56 -0400" -->
<!-- isosent="20090514140356" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234" -->
<!-- id="879D8CA7-9136-40F8-AA96-45AC29776F91_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="200905140957.32863.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 10:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6022.php">Ashley Pittman: "[OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>In reply to:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2009, at 9:57 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev2">&gt; &gt; This generated a bunch of warnings - the &quot;z&quot; length modifier is  
</span><br>
<span class="quotelev1">&gt; not a
</span><br>
<span class="quotelev2">&gt; &gt; generally supported option, which is why we do not use it.
</span><br>
<span class="quotelev1">&gt; I see You compile with -pedantic?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ya, configure adds that automatically if you --enable-picky.
<br>
<p><span class="quotelev2">&gt; &gt; btl_tcp_component.c: In function  
</span><br>
<span class="quotelev1">&gt; &#145;mca_btl_tcp_component_create_listen&#146;:
</span><br>
<span class="quotelev2">&gt; &gt; btl_tcp_component.c:682: warning: too many arguments for format
</span><br>
<span class="quotelev1">&gt; This is the nice part of the attribute-fix: showing mistakes like  
</span><br>
<span class="quotelev1">&gt; this...
</span><br>
<span class="quotelev1">&gt; Fixed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yep; it is good to expose all of these.  Annoying to fix, but they  
<br>
should be fixed.  :-)
<br>
<p><span class="quotelev2">&gt; &gt; Could you please fix this? If you want to deal with the size_t 32/64
</span><br>
<span class="quotelev2">&gt; &gt; bit issues, there is another little macro thingy that we created for
</span><br>
<span class="quotelev2">&gt; &gt; just that purpose (someone else here undoubtedly remembers it).
</span><br>
<span class="quotelev1">&gt; Well, does anyone now the &quot;little macro thingy&quot; ;-)
</span><br>
<span class="quotelev1">&gt; I failed to find it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, in other parts of the code base, we just use &quot;%lu&quot; and cast  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; unsigned long...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Unfortunately, I think that's the best we ever came up with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/PrintfCodes">https://svn.open-mpi.org/trac/ompi/wiki/PrintfCodes</a>
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
<li><strong>Next message:</strong> <a href="6022.php">Ashley Pittman: "[OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>In reply to:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
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
