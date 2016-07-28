<?
$subject_val = "Re: [OMPI devel] need help when make";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 21:34:47 2010" -->
<!-- isoreceived="20100324013447" -->
<!-- sent="Wed, 24 Mar 2010 09:34:42 +0800" -->
<!-- isosent="20100324013442" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] need help when make" -->
<!-- id="632a27d11003231834t730cca8cgfb40c389ed613732_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5FEFC8DD-BB93-420F-9055-3A729649A797_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] need help when make<br>
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 21:34:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>Previous message:</strong> <a href="7654.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>Reply:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Did you mean to add it in the makefile? All i have done now is only
<br>
to sustitude the word &quot;sm&quot; with &quot;ht&quot; both in the code and configure file.
<br>
i think i have this -avoid-version in mca_btl_ht_LDFLAGS.
<br>
why sm didn't report any error?but ht report the error.they are all the
<br>
same,except the name.
<br>
if i don't use the .so versioning scheme ,how can i make this file
<br>
successfully.can you give me some suggestions?
<br>
<p>Thanks &amp; Regards
<br>
Yaohui Hu
<br>
On Wed, Mar 24, 2010 at 4:03 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You probably want to add &quot;-avoid-version&quot; to the mca_btl_ht_LDFLAGS (and
</span><br>
<span class="quotelev1">&gt; the others).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the Libtool docs for more info here; but in general, we don't use the
</span><br>
<span class="quotelev1">&gt; .so versioning scheme for OMPI plugins.  Only for actual shared libraries
</span><br>
<span class="quotelev1">&gt; that apps link against.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2010, at 9:32 AM, hu yaohui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi George,Jeff and All
</span><br>
<span class="quotelev2">&gt; &gt; Recently i add a component into the btl,named HT,it is very similar to
</span><br>
<span class="quotelev1">&gt; sm.i meet a problem when make.
</span><br>
<span class="quotelev2">&gt; &gt; steps to reproduce
</span><br>
<span class="quotelev2">&gt; &gt; 1:make three ht directories under
</span><br>
<span class="quotelev2">&gt; &gt; ~/ompi/mca/btl/ht ~/ompi/mca/mpool/ht ~/ompi/mca/common/ht,
</span><br>
<span class="quotelev2">&gt; &gt; 2:i copy most code and file from sm component
</span><br>
<span class="quotelev2">&gt; &gt; 3:i run ./autogen.sh no problem
</span><br>
<span class="quotelev2">&gt; &gt; 4:run make i get the follow error
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/loki/openmpi-1.4-ht/ompi/mca/common/ht'
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../../libtool --tag=CC   --mode=link gcc  -g
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; -version-info  -export-dynamic   -o libmca_common_ht.la -rpath
</span><br>
<span class="quotelev1">&gt; /usr/local/ompiht/lib  common_ht_mmap.lo  -lnsl -lutil  -lm
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: CURRENT `-export-dynamic' must be a nonnegative integer
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: `-export-dynamic' is not valid version information
</span><br>
<span class="quotelev2">&gt; &gt; &lt;/snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; can you tell me why?my libtool is the latest version 2.2.6b.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>Previous message:</strong> <a href="7654.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>Reply:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
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
