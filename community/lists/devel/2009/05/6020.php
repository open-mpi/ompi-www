<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 09:58:00 2009" -->
<!-- isoreceived="20090514135800" -->
<!-- sent="Thu, 14 May 2009 09:57:32 -0400" -->
<!-- isosent="20090514135732" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234" -->
<!-- id="200905140957.32863.keller_at_ornl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="F0D71C83-37FC-412D-8CD0-BBFEFC86367A_at_open-mpi.org" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 09:57:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Previous message:</strong> <a href="6019.php">Jeff Squyres: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>In reply to:</strong> <a href="6013.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Reply:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Ralph,
<br>
On Wednesday 13 May 2009 10:54:43 pm Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; This generated a bunch of warnings - the &quot;z&quot; length modifier is not a
</span><br>
<span class="quotelev1">&gt; generally supported option, which is why we do not use it.
</span><br>
I see You compile with -pedantic?
<br>
<p><span class="quotelev1">&gt; btl_tcp_frag.c: In function &#145;mca_btl_tcp_frag_send&#146;:
</span><br>
<span class="quotelev1">&gt; btl_tcp_frag.c:115: warning: ISO C90 does not support the &#145;z&#146; printf
</span><br>
<span class="quotelev1">&gt; length modifier
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
see below.
<br>
<p><span class="quotelev1">&gt; btl_tcp_component.c: In function &#145;mca_btl_tcp_component_create_listen&#146;:
</span><br>
<span class="quotelev1">&gt; btl_tcp_component.c:682: warning: too many arguments for format
</span><br>
This is the nice part of the attribute-fix: showing mistakes like this...
<br>
Fixed...
<br>
<p><p><span class="quotelev1">&gt; Could you please fix this? If you want to deal with the size_t 32/64
</span><br>
<span class="quotelev1">&gt; bit issues, there is another little macro thingy that we created for
</span><br>
<span class="quotelev1">&gt; just that purpose (someone else here undoubtedly remembers it).
</span><br>
Well, does anyone now the &quot;little macro thingy&quot; ;-)
<br>
I failed to find it...
<br>
<p>However, in other parts of the code base, we just use &quot;%lu&quot; and cast to 
<br>
unsigned long...
<br>
Thoughts?
<br>
<p>Thanks,
<br>
Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Previous message:</strong> <a href="6019.php">Jeff Squyres: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>In reply to:</strong> <a href="6013.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Reply:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
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
