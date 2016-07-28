<?
$subject_val = "Re: [OMPI devel] need help when make";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 16:03:48 2010" -->
<!-- isoreceived="20100323200348" -->
<!-- sent="Tue, 23 Mar 2010 16:03:40 -0400" -->
<!-- isosent="20100323200340" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] need help when make" -->
<!-- id="5FEFC8DD-BB93-420F-9055-3A729649A797_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="632a27d11003230632x286c2847ga1b93770d746f42f_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 16:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7654.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7652.php">hu yaohui: "[OMPI devel] need help when make"</a>
<li><strong>In reply to:</strong> <a href="7652.php">hu yaohui: "[OMPI devel] need help when make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7655.php">hu yaohui: "Re: [OMPI devel] need help when make"</a>
<li><strong>Reply:</strong> <a href="7655.php">hu yaohui: "Re: [OMPI devel] need help when make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably want to add &quot;-avoid-version&quot; to the mca_btl_ht_LDFLAGS (and the others).
<br>
<p>See the Libtool docs for more info here; but in general, we don't use the .so versioning scheme for OMPI plugins.  Only for actual shared libraries that apps link against.
<br>
<p><p>On Mar 23, 2010, at 9:32 AM, hu yaohui wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,Jeff and All
</span><br>
<span class="quotelev1">&gt; Recently i add a component into the btl,named HT,it is very similar to sm.i meet a problem when make.
</span><br>
<span class="quotelev1">&gt; steps to reproduce
</span><br>
<span class="quotelev1">&gt; 1:make three ht directories under
</span><br>
<span class="quotelev1">&gt; ~/ompi/mca/btl/ht ~/ompi/mca/mpool/ht ~/ompi/mca/common/ht,
</span><br>
<span class="quotelev1">&gt; 2:i copy most code and file from sm component
</span><br>
<span class="quotelev1">&gt; 3:i run ./autogen.sh no problem
</span><br>
<span class="quotelev1">&gt; 4:run make i get the follow error
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/loki/openmpi-1.4-ht/ompi/mca/common/ht'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool --tag=CC   --mode=link gcc  -g -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -version-info  -export-dynamic   -o libmca_common_ht.la -rpath /usr/local/ompiht/lib  common_ht_mmap.lo  -lnsl -lutil  -lm 
</span><br>
<span class="quotelev1">&gt; libtool: link: CURRENT `-export-dynamic' must be a nonnegative integer
</span><br>
<span class="quotelev1">&gt; libtool: link: `-export-dynamic' is not valid version information
</span><br>
<span class="quotelev1">&gt; &lt;/snip&gt;
</span><br>
<span class="quotelev1">&gt; can you tell me why?my libtool is the latest version 2.2.6b.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7654.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7652.php">hu yaohui: "[OMPI devel] need help when make"</a>
<li><strong>In reply to:</strong> <a href="7652.php">hu yaohui: "[OMPI devel] need help when make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7655.php">hu yaohui: "Re: [OMPI devel] need help when make"</a>
<li><strong>Reply:</strong> <a href="7655.php">hu yaohui: "Re: [OMPI devel] need help when make"</a>
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
