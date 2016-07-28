<?
$subject_val = "Re: [OMPI devel] Shared library version numbers for 1.8.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 16:59:22 2014" -->
<!-- isoreceived="20140709205922" -->
<!-- sent="Wed, 9 Jul 2014 13:58:55 -0700" -->
<!-- isosent="20140709205855" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared library version numbers for 1.8.2" -->
<!-- id="D1D91ECF-D53A-4110-880C-DC159B9716AF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140709202521.Horde.O6kTFHffE7Rle9d_dD6GZw1_at_mail.zih.tu-dresden.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 16:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15085.php">Paul Hargrove: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15083.php">Bert Wesarg: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>In reply to:</strong> <a href="15083.php">Bert Wesarg: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15093.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Reply:</strong> <a href="15093.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ouch - yes, we definitely should roll it to 4:0:0. I gather the ABI change was required to comply with the spec. I normally would refuse to allow an ABI change during a stable release series, but have given more latitude to OSHMEM due to its relatively new inclusion and the need to get it into compliance.
<br>
<p><p><p>On Jul 9, 2014, at 1:25 PM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Quoting &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Here's what I think VERSION should be for 1.8.2:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/32165">https://svn.open-mpi.org/trac/ompi/changeset/32165</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I left comments in the VERSION file as to why I think each version number should change.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can someone please verify that this work is correct?  If so, we can remove the comments (before the final 1.8.2 release).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -liboshmem_so_version=2:0:1
</span><br>
<span class="quotelev2">&gt;&gt; +liboshmem_so_version=3:0:2
</span><br>
<span class="quotelev2">&gt;&gt; +# lib changed
</span><br>
<span class="quotelev2">&gt;&gt; +# added interfaces: shmem_int32_finc, shmem_int64_finc, profiling
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think liboshmem_so_version should get 4:0:0 as the return type of shmem_finalize changed from int to void.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the trunk commit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/31413">https://svn.open-mpi.org/trac/ompi/changeset/31413</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here the CMR commit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/31758">https://svn.open-mpi.org/trac/ompi/changeset/31758</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: bert.wesarg_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15083.php">http://www.open-mpi.org/community/lists/devel/2014/07/15083.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15085.php">Paul Hargrove: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15083.php">Bert Wesarg: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>In reply to:</strong> <a href="15083.php">Bert Wesarg: "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15093.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Reply:</strong> <a href="15093.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
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
