<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 15:47:53 2007" -->
<!-- isoreceived="20070605194753" -->
<!-- sent="Tue, 5 Jun 2007 15:47:27 -0400" -->
<!-- isosent="20070605194727" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib_exclusivity" -->
<!-- id="A39B2238-512F-4FAD-ADBB-68E0DF6D1B18_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="14119.128.107.248.220.1181072459.squirrel_at_mail.cs.uh.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 15:47:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1620.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
<li><strong>Previous message:</strong> <a href="1618.php">Mohamad Chaarawi: "[OMPI devel] btl_openib_exclusivity"</a>
<li><strong>In reply to:</strong> <a href="1618.php">Mohamad Chaarawi: "[OMPI devel] btl_openib_exclusivity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All BTLs have the exclusivity MCA parameter. This indicate how  
<br>
friendly a BTL is about sharing the communications with others BTLs.  
<br>
A very high exclusivity means there will be only one BTL. A low  
<br>
exclusivity means multiple BTLs can co-exist and work together to  
<br>
send the same message. All high performance networks by default have  
<br>
a high exclusivity, in order to make sure they don't get used  
<br>
together with something a lot slower (such as TCP).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 5, 2007, at 3:40 PM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; I was going through the MCA btl parameters for openib and came  
</span><br>
<span class="quotelev1">&gt; across this
</span><br>
<span class="quotelev1">&gt; parameter in which i didn't get what it actually does:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; anybody has any idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev1">&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev1">&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1619/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1620.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
<li><strong>Previous message:</strong> <a href="1618.php">Mohamad Chaarawi: "[OMPI devel] btl_openib_exclusivity"</a>
<li><strong>In reply to:</strong> <a href="1618.php">Mohamad Chaarawi: "[OMPI devel] btl_openib_exclusivity"</a>
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
