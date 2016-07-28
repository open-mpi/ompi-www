<?
$subject_val = "Re: [OMPI devel] Shared library version numbers for 1.8.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 08:34:53 2014" -->
<!-- isoreceived="20140710123453" -->
<!-- sent="Thu, 10 Jul 2014 15:34:50 +0300" -->
<!-- isosent="20140710123450" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared library version numbers for 1.8.2" -->
<!-- id="CAAO1KybHYBY_xFn9hnTtb3z8zBYKZuX221BPNh5RLMWyR41G3w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E1D2CA1B-4603-45BF-B3DC-E552522D0865_at_cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 08:34:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15095.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Previous message:</strong> <a href="15093.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>In reply to:</strong> <a href="15093.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15095.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Reply:</strong> <a href="15095.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
confirmed.
<br>
Thanks
<br>
<p><p>On Thu, Jul 10, 2014 at 3:31 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Bert: good catch, thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mellanox: can you confirm that this change was required?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 9, 2014, at 4:59 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ouch - yes, we definitely should roll it to 4:0:0. I gather the ABI
</span><br>
<span class="quotelev1">&gt; change was required to comply with the spec. I normally would refuse to
</span><br>
<span class="quotelev1">&gt; allow an ABI change during a stable release series, but have given more
</span><br>
<span class="quotelev1">&gt; latitude to OSHMEM due to its relatively new inclusion and the need to get
</span><br>
<span class="quotelev1">&gt; it into compliance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jul 9, 2014, at 1:25 PM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Quoting &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here's what I think VERSION should be for 1.8.2:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/changeset/32165">https://svn.open-mpi.org/trac/ompi/changeset/32165</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I left comments in the VERSION file as to why I think each version
</span><br>
<span class="quotelev1">&gt; number should change.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can someone please verify that this work is correct?  If so, we can
</span><br>
<span class="quotelev1">&gt; remove the comments (before the final 1.8.2 release).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -liboshmem_so_version=2:0:1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +liboshmem_so_version=3:0:2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +# lib changed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +# added interfaces: shmem_int32_finc, shmem_int64_finc, profiling
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think liboshmem_so_version should get 4:0:0 as the return type of
</span><br>
<span class="quotelev1">&gt; shmem_finalize changed from int to void.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is the trunk commit:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/31413">https://svn.open-mpi.org/trac/ompi/changeset/31413</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And here the CMR commit:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/31758">https://svn.open-mpi.org/trac/ompi/changeset/31758</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bert
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Technische Universit&#195;&#164;t Dresden
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 01062 Dresden
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev3">&gt; &gt;&gt; E-Mail: bert.wesarg_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15083.php">http://www.open-mpi.org/community/lists/devel/2014/07/15083.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15084.php">http://www.open-mpi.org/community/lists/devel/2014/07/15084.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15093.php">http://www.open-mpi.org/community/lists/devel/2014/07/15093.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15094/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15095.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Previous message:</strong> <a href="15093.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>In reply to:</strong> <a href="15093.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15095.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>Reply:</strong> <a href="15095.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
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
