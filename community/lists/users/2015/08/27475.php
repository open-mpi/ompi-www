<?
$subject_val = "Re: [OMPI users] open mpi 1.8.6. MPI_T";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 14:07:02 2015" -->
<!-- isoreceived="20150814180702" -->
<!-- sent="Fri, 14 Aug 2015 14:07:00 -0400" -->
<!-- isosent="20150814180700" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi 1.8.6. MPI_T" -->
<!-- id="CAMJJpkWgz08LrL6u37Vnn=TuuZaGVpA0pw3ZkTcyA_H6rv+Qtg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4C3DFCFD-8867-4330-97E7-C6CC7EF1E552_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 14:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27476.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="27474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27478.php">Khalid Hasanov: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="27478.php">Khalid Hasanov: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 14, 2015 at 1:56 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Note, too, that these variables are likely only changeable before MPI_INIT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't check these specific variables, but at least the
</span><br>
<span class="quotelev1">&gt; btl_self_eager_limit variable is likely only read/used for setup during
</span><br>
<span class="quotelev1">&gt; MPI_INIT.  coll_tuned_bcast_algorithm may only be used before a
</span><br>
<span class="quotelev1">&gt; communicator is setup (although I don't know that for sure offhand).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It is read before every communicator creation. So technically one can
<br>
change the algorithm dynamically for each communicator.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 14, 2015, at 1:50 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; They are considered as control variables, so use the cvar version and
</span><br>
<span class="quotelev1">&gt; you should get them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Aug 14, 2015 at 11:14 AM, Khalid Hasanov &lt;xalid.h_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to use MPI_T interface to set coll_tuned_bcast_algorithm mca
</span><br>
<span class="quotelev1">&gt; parameter during run time, however I was not successful to do that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if is it currently supported in Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I had the same problem with setting btl_self_eager_limit parameter.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code I am using attached below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Khalid
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27470.php">http://www.open-mpi.org/community/lists/users/2015/08/27470.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27473.php">http://www.open-mpi.org/community/lists/users/2015/08/27473.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27474.php">http://www.open-mpi.org/community/lists/users/2015/08/27474.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27475/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27476.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="27474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27478.php">Khalid Hasanov: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="27478.php">Khalid Hasanov: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
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
