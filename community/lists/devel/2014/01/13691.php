<?
$subject_val = "Re: [OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 09:49:12 2014" -->
<!-- isoreceived="20140110144912" -->
<!-- sent="Fri, 10 Jan 2014 15:49:15 +0100" -->
<!-- isosent="20140110144915" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="F2B6AF8B-AB53-46CE-806B-6573BFC46834_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C929ED3F-98E9-42C6-A0C6-4FE5601D712E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hcoll destruction via MPI attribute<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 09:49:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13692.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shared lib version on trunk"</a>
<li><strong>Previous message:</strong> <a href="13690.php">marco atzeri: "[OMPI devel] shared lib version on trunk"</a>
<li><strong>In reply to:</strong> <a href="13688.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 15:31 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 10, 2014, at 9:19 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, one should keep in mind that MPI_Comm_free does not have to be a collective function, thus making any type of collective assumption/communications inside the attribute destructor might lead to deadlocks in future versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, MPI-3 defines MPI_COMM_FREE as collective (p248:23).
</span><br>
<p>As I said, this is the case today. There are ongoing discussion in the MPI Forum to relax the wording of the MPI_Comm_free as most of the MPI implementations do not rely on the strict &#147;collective&#148; behavior of the MPI_Comm_free (in the sense that it has to be called by all processes but not necessarily in same time).
<br>
<p><span class="quotelev2">&gt;&gt; In other words if the only thing you do in the attribute descriptor is tearing down locally posted requests, then you are safe. If you send data using the communicator then you&#146;re definitively playing dangerously with the safety line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still agree with this point, though &#151; even though COMM_FREE is collective, you could still get into ordering / deadlock issues if you're (effectively) doing communication inside it.
</span><br>
<p>As long as the call is collective and the same attributes exists on all communicators I don&#146;t see how the deadlock is possible. My wording was more a precaution for the future than a restriction for today.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13692.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shared lib version on trunk"</a>
<li><strong>Previous message:</strong> <a href="13690.php">marco atzeri: "[OMPI devel] shared lib version on trunk"</a>
<li><strong>In reply to:</strong> <a href="13688.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
