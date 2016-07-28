<?
$subject_val = "Re: [OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 12:48:15 2010" -->
<!-- isoreceived="20100316164815" -->
<!-- sent="Wed, 17 Mar 2010 00:45:31 +0800" -->
<!-- isosent="20100316164531" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to add a component in the ompi?" -->
<!-- id="632a27d11003160945u28ef4b72pc5c3193cd540b09_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B2379333-123A-4747-8D77-045A26353028_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] how to add a component in the ompi?<br>
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-16 12:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7596.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7594.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7596.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7596.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff &amp; All
<br>
i add a new component into the openmpi,after configure ;make ;make install.
<br>
all sounds good.but when i run the following commands accroding the TCP
<br>
FAQ,i met a problem
<br>
&lt;snip&gt;
<br>
<p># This says to exclude the TCP BTL component
<br>
# (implicitly including all others)
<br>
shell$ mpirun *--mca btl ^tcp* ...
<br>
<p># This says to include only the listed BTL components
<br>
# (tcp is not listed, and therefore will not be used)
<br>
shell$ mpirun *--mca btl self,openib* ...
<br>
&lt;/snip&gt;
<br>
<p>it just said,i had a wrong command format,when i use mpirun --help,i really
<br>
<p>didn't find the --mca parameter.why the tcp FAQ part list these command lines,
<br>
<p>but it cann't execute successfully on my machine.Is there any another
<br>
way to control the specific
<br>
<p>btl components to be used?
<br>
<p>Thanks &amp; Regards
<br>
<p>Yaohui Hu
<br>
<p><p><p><p><p>On Mon, Mar 15, 2010 at 11:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 15, 2010, at 8:18 AM, hu yaohui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  i did what you told me before to add a new component,now i could see my
</span><br>
<span class="quotelev1">&gt; added component through ./configure --help.but when i run make ,i met some
</span><br>
<span class="quotelev1">&gt; problems i couldn't understand.
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; libtool: Version mismatch error.  This is libtool 2.2.4, but the
</span><br>
<span class="quotelev2">&gt; &gt; libtool: definition of this LT_INIT comes from libtool 2.2.6b.
</span><br>
<span class="quotelev2">&gt; &gt; libtool: You should recreate aclocal.m4 with macros from libtool 2.2.4
</span><br>
<span class="quotelev2">&gt; &gt; libtool: and run autoconf again.
</span><br>
<span class="quotelev2">&gt; &gt; &lt;/snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; i just dont know how to recreate aclocal.m4.Could you give a explanation
</span><br>
<span class="quotelev1">&gt; or some other materials about it on line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This *usually* means that autogen.sh didn't run completely properly.  Did
</span><br>
<span class="quotelev1">&gt; you install all the GNU Autotools in the way described in the top-level
</span><br>
<span class="quotelev1">&gt; HACKING file?  (e.g., install them all to the same $prefix)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can't find the error, send all the data listed on the
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> (please compress!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Jeff Squyres
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7595/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7596.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7594.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7596.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7596.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
