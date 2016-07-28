<?
$subject_val = "Re: [OMPI users] open mpi 1.8.6. MPI_T";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 13:56:34 2015" -->
<!-- isoreceived="20150814175634" -->
<!-- sent="Fri, 14 Aug 2015 17:56:31 +0000" -->
<!-- isosent="20150814175631" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi 1.8.6. MPI_T" -->
<!-- id="4C3DFCFD-8867-4330-97E7-C6CC7EF1E552_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkXSh4vFQUwJ4O6-NKPZkAQooPmFU4ZUdcfkeaSKQQQD6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi 1.8.6. MPI_T<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 13:56:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27475.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="27473.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="27473.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27475.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="27475.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note, too, that these variables are likely only changeable before MPI_INIT.
<br>
<p>I didn't check these specific variables, but at least the btl_self_eager_limit variable is likely only read/used for setup during MPI_INIT.  coll_tuned_bcast_algorithm may only be used before a communicator is setup (although I don't know that for sure offhand).
<br>
<p><p><p><span class="quotelev1">&gt; On Aug 14, 2015, at 1:50 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They are considered as control variables, so use the cvar version and you should get them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 14, 2015 at 11:14 AM, Khalid Hasanov &lt;xalid.h_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to use MPI_T interface to set coll_tuned_bcast_algorithm mca parameter during run time, however I was not successful to do that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if is it currently supported in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had the same problem with setting btl_self_eager_limit parameter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code I am using attached below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Khalid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27470.php">http://www.open-mpi.org/community/lists/users/2015/08/27470.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27473.php">http://www.open-mpi.org/community/lists/users/2015/08/27473.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27475.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="27473.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="27473.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27475.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="27475.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
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
