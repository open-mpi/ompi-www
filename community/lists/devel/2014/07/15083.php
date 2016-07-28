<?
$subject_val = "Re: [OMPI devel] Shared library version numbers for 1.8.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 16:25:29 2014" -->
<!-- isoreceived="20140709202529" -->
<!-- sent="Wed, 09 Jul 2014 20:25:21 +0000" -->
<!-- isosent="20140709202521" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared library version numbers for 1.8.2" -->
<!-- id="20140709202521.Horde.O6kTFHffE7Rle9d_dD6GZw1_at_mail.zih.tu-dresden.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BDF829A6-F2B8-4F90-A855-9D79A93D4035_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Shared library version numbers for 1.8.2<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 16:25:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15084.php">Ralph Castain: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Previous message:</strong> <a href="15082.php">Gilles Gouaillardet: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="15078.php">Jeff Squyres (jsquyres): "[OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15084.php">Ralph Castain: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Reply:</strong> <a href="15084.php">Ralph Castain: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quoting &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Here's what I think VERSION should be for 1.8.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/changeset/32165">https://svn.open-mpi.org/trac/ompi/changeset/32165</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I left comments in the VERSION file as to why I think each version  
</span><br>
<span class="quotelev1">&gt; number should change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone please verify that this work is correct?  If so, we can  
</span><br>
<span class="quotelev1">&gt; remove the comments (before the final 1.8.2 release).
</span><br>
<p><span class="quotelev1">&gt; -liboshmem_so_version=2:0:1
</span><br>
<span class="quotelev1">&gt; +liboshmem_so_version=3:0:2
</span><br>
<span class="quotelev1">&gt; +# lib changed
</span><br>
<span class="quotelev1">&gt; +# added interfaces: shmem_int32_finc, shmem_int64_finc, profiling
</span><br>
<p>I think liboshmem_so_version should get 4:0:0 as the return type of  
<br>
shmem_finalize changed from int to void.
<br>
<p>Here is the trunk commit:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/31413">https://svn.open-mpi.org/trac/ompi/changeset/31413</a>
<br>
<p>And here the CMR commit:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/31758">https://svn.open-mpi.org/trac/ompi/changeset/31758</a>
<br>
<p>Regards,
<br>
Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#195;&#164;t Dresden
Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15084.php">Ralph Castain: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Previous message:</strong> <a href="15082.php">Gilles Gouaillardet: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="15078.php">Jeff Squyres (jsquyres): "[OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15084.php">Ralph Castain: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Reply:</strong> <a href="15084.php">Ralph Castain: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
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
