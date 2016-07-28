<?
$subject_val = "Re: [OMPI devel] PML Start error?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 16:50:03 2009" -->
<!-- isoreceived="20090302215003" -->
<!-- sent="Mon, 2 Mar 2009 16:49:57 -0500" -->
<!-- isosent="20090302214957" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML Start error?" -->
<!-- id="794C98BE-EE7E-4B5E-B716-DBABC2D4160E_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="64FE6C2A-A5ED-419F-A47F-3A6BBF377725_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PML Start error?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-02 16:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5544.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Previous message:</strong> <a href="5542.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right, this should be reinitialized at the beginning of each loop.  
<br>
However, the current code works fine, it only call the  
<br>
ompi_convertor_set_position twice if the condition is true. This  
<br>
function check if the current position match the requested one, and  
<br>
does nothing if its the case.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 28, 2009, at 09:26 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Looks that way to me, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2009, at 5:34 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm looking at pml_ob1_start.c.  It loops over requests and starts  
</span><br>
<span class="quotelev2">&gt;&gt; them.  It makes some decision about whether an old request can be  
</span><br>
<span class="quotelev2">&gt;&gt; reused or if a new one must be allocated/initialized.  So, there is  
</span><br>
<span class="quotelev2">&gt;&gt; a variable named reuse_old_request.  It's initialized to &quot;true&quot;,  
</span><br>
<span class="quotelev2">&gt;&gt; but if a new request must be alloced/inited, then it's set to false.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The thing is, this variable is initialized to true only once, at  
</span><br>
<span class="quotelev2">&gt;&gt; entry to the function and outside the loop over requests.  This  
</span><br>
<span class="quotelev2">&gt;&gt; strikes me as wrong.  It appears that if ever the variable is set  
</span><br>
<span class="quotelev2">&gt;&gt; to false, it will remain so until the end of the function.  I would  
</span><br>
<span class="quotelev2">&gt;&gt; think the intent is for the variable to be reset to true at the  
</span><br>
<span class="quotelev2">&gt;&gt; start of every iteration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes/no?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5544.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Previous message:</strong> <a href="5542.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
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
