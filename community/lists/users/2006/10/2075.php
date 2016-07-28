<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 27 15:40:08 2006" -->
<!-- isoreceived="20061027194008" -->
<!-- sent="Fri, 27 Oct 2006 15:39:52 -0400" -->
<!-- isosent="20061027193952" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI Collectives" -->
<!-- id="8B8DD90D-C528-427B-B2AC-935BB93DD11C_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="038001c6f9f9$986c11b0$ca79e30a_at_ladd02" -->
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
<strong>Date:</strong> 2006-10-27 15:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2076.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Previous message:</strong> <a href="2074.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="2074.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No documentation yet. If you want to understand how it works and what  
<br>
exactly &quot;highly optimized&quot; means please look for the collectives  
<br>
papers on this page (<a href="http://www.netlib.org/utk/people/JackDongarra/">http://www.netlib.org/utk/people/JackDongarra/</a> 
<br>
papers.htm). In few words, we have multiples algorithms and we tune  
<br>
them based on the network characteristics.
<br>
<p>We have a home made tools that help us with that. It's far from  
<br>
complete, but it's enough for what we're doing right now. If you  
<br>
want, I can give you the source code and the documentation and you  
<br>
can play around with it.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 27, 2006, at 2:56 PM, Tony Ladd wrote:
<br>
<p><span class="quotelev1">&gt; George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the info. When you say &quot;highly optimized&quot; do you  
</span><br>
<span class="quotelev1">&gt; algorithmically,
</span><br>
<span class="quotelev1">&gt; tuning, or both? In particular I wonder if OMPI optimized  
</span><br>
<span class="quotelev1">&gt; collectives use
</span><br>
<span class="quotelev1">&gt; the divide and conquer strategy to maximize network bandwidth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to be dense but I could not find documanetation on how to  
</span><br>
<span class="quotelev1">&gt; access the
</span><br>
<span class="quotelev1">&gt; optimized collectives. I would be willing to fiddle with the  
</span><br>
<span class="quotelev1">&gt; parameters a
</span><br>
<span class="quotelev1">&gt; bit by hand if I had some guidance as to how to set things and what  
</span><br>
<span class="quotelev1">&gt; I might
</span><br>
<span class="quotelev1">&gt; vary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The optimization I was talking about (divide and conquer) would  
</span><br>
<span class="quotelev1">&gt; work better
</span><br>
<span class="quotelev1">&gt; than the basic strategy regardless of network; only message size  
</span><br>
<span class="quotelev1">&gt; might have
</span><br>
<span class="quotelev1">&gt; some effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; Tony Ladd
</span><br>
<span class="quotelev1">&gt; Chemical Engineering
</span><br>
<span class="quotelev1">&gt; University of Florida
</span><br>
<span class="quotelev1">&gt; PO Box 116005
</span><br>
<span class="quotelev1">&gt; Gainesville, FL 32611-6005
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel: 352-392-6509
</span><br>
<span class="quotelev1">&gt; FAX: 352-392-9513
</span><br>
<span class="quotelev1">&gt; Email: tladd_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2076.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Previous message:</strong> <a href="2074.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="2074.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
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
