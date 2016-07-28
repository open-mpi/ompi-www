<?
$subject_val = "Re: [OMPI users] Progress of the asynchronous messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 13:52:23 2008" -->
<!-- isoreceived="20081106185223" -->
<!-- sent="Thu, 6 Nov 2008 13:52:12 -0500" -->
<!-- isosent="20081106185212" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress of the asynchronous messages" -->
<!-- id="FC28CE09-B565-4F21-A7CD-0348F2FC3154_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49132EDC.9030303_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 13:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7227.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7225.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7225.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7228.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7228.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In order to get good performance out of your test application, the  
<br>
whole message has to be send in just one fragment. The reason is that  
<br>
as long as there is no progress thread for the MPI library (internal  
<br>
to the library), there is no way to make progress.
<br>
<p>Now, I can explain how to do this, but trust me this is an ugly hack,  
<br>
that make your application MPI implementation specific, i.e. not  
<br>
portable in terms of performance. But, I guess this decision is up to  
<br>
you. The really bad thing that might happens, is that in the case the  
<br>
receiver is slower that the sender, you will buffer all this eager  
<br>
message or messages in the receiver memory (what a waste), you will  
<br>
use a lot more memory copies and you give up the possibility to use  
<br>
the RMA features available on your network. So yes, your specific code  
<br>
will maybe/eventually runs faster, but the price to pay is way to  
<br>
expensive [from my perspective].
<br>
<p>Here is how you can do this: Based on the network you use (open ib in  
<br>
this case), the parameter selecting the first fragment size is called  
<br>
*_eager_limit. Do a &quot;ompi_info --param btl openib&quot;, grep for  
<br>
eager_limit to figure out the name of the argument, and set it using  
<br>
&quot;--mca &lt;name&gt; value&quot; to the value that you want. As an example, I  
<br>
think this will work for openib: &quot;--mca btl_openib_eager_limit  
<br>
8388648&quot; (8388608 + 40 for internal headers).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 6, 2008, at 12:52 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; vladimir marjanovic wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to overlap communication and computation I don't want to  
</span><br>
<span class="quotelev2">&gt;&gt; use MPI_Wait.
</span><br>
<span class="quotelev1">&gt; Right.  One thing to keep in mind is that there are two ways of  
</span><br>
<span class="quotelev1">&gt; overlapping communication and computation.  One is you start a send  
</span><br>
<span class="quotelev1">&gt; (MPI_Isend), you do a bunch of computation while the message is  
</span><br>
<span class="quotelev1">&gt; being sent, and then after the message has been sent you call  
</span><br>
<span class="quotelev1">&gt; MPI_Wait just to clean up.  This assumes that the MPI implementation  
</span><br>
<span class="quotelev1">&gt; can send a message while control of the program has been returned to  
</span><br>
<span class="quotelev1">&gt; you.  The experts can give you the fine print, but my simple  
</span><br>
<span class="quotelev1">&gt; assertion is, &quot;This doesn't usually happen.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rather, the MPI implementation typically will send data only when  
</span><br>
<span class="quotelev1">&gt; your code is in some MPI call.  That's why you have to call MPI_Test  
</span><br>
<span class="quotelev1">&gt; periodically... or some other MPI function.
</span><br>
<span class="quotelev2">&gt;&gt; For sure the message is being decomposed into chucks and the size  
</span><br>
<span class="quotelev2">&gt;&gt; of chuck is probably defined by environment variable.
</span><br>
<span class="quotelev2">&gt;&gt; Maybe do you know how can I control size of chuck?
</span><br>
<span class="quotelev1">&gt; I don't.  Try running &quot;ompi_info -a&quot; and looking through the  
</span><br>
<span class="quotelev1">&gt; parameters.  For the shared-memory BTL, it's  
</span><br>
<span class="quotelev1">&gt; mca_btl_sm_max_frag_size.  I also see something like  
</span><br>
<span class="quotelev1">&gt; coll_sm_fragment_size.  Maybe look at the parameters that have  
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_max&quot; in their names.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7226/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7227.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7225.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7225.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7228.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7228.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
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
