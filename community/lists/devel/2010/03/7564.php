<?
$subject_val = "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 18:39:32 2010" -->
<!-- isoreceived="20100307233932" -->
<!-- sent="Sun, 7 Mar 2010 15:39:26 -0800" -->
<!-- isosent="20100307233926" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding error/verbose messages to the TCP BTL" -->
<!-- id="FF1E8959-D8EE-435A-9C10-42473A7CDB54_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B5F8F3C0-00C2-456D-A024-B91604F19D31_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Adding error/verbose messages to the TCP BTL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 18:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7565.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>In reply to:</strong> <a href="7561.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure about that -- OPAL_SOS will take some time to propagate  
<br>
throughout the code base, even after the infrastructure is added to  
<br>
the trunk.
<br>
<p>My point was that it might not be worth it to revamp BTL_ERROR if  
<br>
OPAL_SOS is coming.  But I'd still like to get the new TCP BTL  
<br>
messages in.  :-)
<br>
<p><p><p>On Mar 7, 2010, at 11:13 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Then let's just be patient until OPAL_SOS make it in the trunk, and  
</span><br>
<span class="quotelev1">&gt; save us the burden of a large effort made twice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2010, at 22:35 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 5, 2010, at 7:22 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 5, 2010, at 6:10 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I agree with Jeff's comments about the BTL_ERROR. How about a  
</span><br>
<span class="quotelev1">&gt; middle ground here? We let the BTLs use BTL_ERROR, eventually with  
</span><br>
<span class="quotelev1">&gt; some modifications, and we redirect the BTL_ERROR to a more advanced  
</span><br>
<span class="quotelev1">&gt; macro including support for orte_show_help? This will require going  
</span><br>
<span class="quotelev1">&gt; over all the BTLs, but on the bright side it will give us a 100%  
</span><br>
<span class="quotelev1">&gt; consistency on retorting errors.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sounds reasonable to me - I'm happy to help do it, assuming Jeff  
</span><br>
<span class="quotelev1">&gt; also concurs. I assume we would then replace all the show_help calls  
</span><br>
<span class="quotelev1">&gt; as well? Otherwise, I'm not sure what we gain as the direct  
</span><br>
<span class="quotelev1">&gt; orte_show_help dependency will remain. Or are those calls too  
</span><br>
<span class="quotelev1">&gt; specialized to be replaced with BTL_ERROR?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Should this kind of thing wait for OPAL_SOS?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (I mention this because the OPAL_SOS RFC will be sent to devel  
</span><br>
<span class="quotelev1">&gt; Real Soon Now...)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sure - OPAL_SOS will supersede all this anyway.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7565.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>In reply to:</strong> <a href="7561.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
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
