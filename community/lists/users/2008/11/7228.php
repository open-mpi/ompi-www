<?
$subject_val = "Re: [OMPI users] Progress of the asynchronous messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 14:00:13 2008" -->
<!-- isoreceived="20081106190013" -->
<!-- sent="Thu, 6 Nov 2008 14:00:07 -0500" -->
<!-- isosent="20081106190007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress of the asynchronous messages" -->
<!-- id="3517AD9B-A338-421F-86D6-F13428C73915_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FC28CE09-B565-4F21-A7CD-0348F2FC3154_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Progress of the asynchronous messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 14:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7229.php">Andrea Pellegrini: "[OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Previous message:</strong> <a href="7227.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7227.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George is right -- you *can* do this, but it is *not advised* (you'll  
<br>
likely run out of memory or other resources pretty quickly -- if you  
<br>
can run at all!).  :-)
<br>
<p>Try mpi_leave_pinned, and check out those FAQ sections that I sent,  
<br>
particularly the OpenFabrics section, for how to specifically tune  
<br>
various behaviors of the openib BTL.
<br>
<p><p>On Nov 6, 2008, at 1:52 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; In order to get good performance out of your test application, the  
</span><br>
<span class="quotelev1">&gt; whole message has to be send in just one fragment. The reason is  
</span><br>
<span class="quotelev1">&gt; that as long as there is no progress thread for the MPI library  
</span><br>
<span class="quotelev1">&gt; (internal to the library), there is no way to make progress.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I can explain how to do this, but trust me this is an ugly  
</span><br>
<span class="quotelev1">&gt; hack, that make your application MPI implementation specific, i.e.  
</span><br>
<span class="quotelev1">&gt; not portable in terms of performance. But, I guess this decision is  
</span><br>
<span class="quotelev1">&gt; up to you. The really bad thing that might happens, is that in the  
</span><br>
<span class="quotelev1">&gt; case the receiver is slower that the sender, you will buffer all  
</span><br>
<span class="quotelev1">&gt; this eager message or messages in the receiver memory (what a  
</span><br>
<span class="quotelev1">&gt; waste), you will use a lot more memory copies and you give up the  
</span><br>
<span class="quotelev1">&gt; possibility to use the RMA features available on your network. So  
</span><br>
<span class="quotelev1">&gt; yes, your specific code will maybe/eventually runs faster, but the  
</span><br>
<span class="quotelev1">&gt; price to pay is way to expensive [from my perspective].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is how you can do this: Based on the network you use (open ib  
</span><br>
<span class="quotelev1">&gt; in this case), the parameter selecting the first fragment size is  
</span><br>
<span class="quotelev1">&gt; called *_eager_limit. Do a &quot;ompi_info --param btl openib&quot;, grep for  
</span><br>
<span class="quotelev1">&gt; eager_limit to figure out the name of the argument, and set it using  
</span><br>
<span class="quotelev1">&gt; &quot;--mca &lt;name&gt; value&quot; to the value that you want. As an example, I  
</span><br>
<span class="quotelev1">&gt; think this will work for openib: &quot;--mca btl_openib_eager_limit  
</span><br>
<span class="quotelev1">&gt; 8388648&quot; (8388608 + 40 for internal headers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2008, at 12:52 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vladimir marjanovic wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to overlap communication and computation I don't want to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use MPI_Wait.
</span><br>
<span class="quotelev2">&gt;&gt; Right.  One thing to keep in mind is that there are two ways of  
</span><br>
<span class="quotelev2">&gt;&gt; overlapping communication and computation.  One is you start a send  
</span><br>
<span class="quotelev2">&gt;&gt; (MPI_Isend), you do a bunch of computation while the message is  
</span><br>
<span class="quotelev2">&gt;&gt; being sent, and then after the message has been sent you call  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Wait just to clean up.  This assumes that the MPI  
</span><br>
<span class="quotelev2">&gt;&gt; implementation can send a message while control of the program has  
</span><br>
<span class="quotelev2">&gt;&gt; been returned to you.  The experts can give you the fine print, but  
</span><br>
<span class="quotelev2">&gt;&gt; my simple assertion is, &quot;This doesn't usually happen.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rather, the MPI implementation typically will send data only when  
</span><br>
<span class="quotelev2">&gt;&gt; your code is in some MPI call.  That's why you have to call  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test periodically... or some other MPI function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For sure the message is being decomposed into chucks and the size  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of chuck is probably defined by environment variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe do you know how can I control size of chuck?
</span><br>
<span class="quotelev2">&gt;&gt; I don't.  Try running &quot;ompi_info -a&quot; and looking through the  
</span><br>
<span class="quotelev2">&gt;&gt; parameters.  For the shared-memory BTL, it's  
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_sm_max_frag_size.  I also see something like  
</span><br>
<span class="quotelev2">&gt;&gt; coll_sm_fragment_size.  Maybe look at the parameters that have  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_max&quot; in their names.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7229.php">Andrea Pellegrini: "[OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Previous message:</strong> <a href="7227.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7227.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
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
