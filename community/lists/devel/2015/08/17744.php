<?
$subject_val = "[OMPI devel] Fwd: [OMPI users] open mpi 1.8.6. MPI_T";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 14:15:38 2015" -->
<!-- isoreceived="20150814181538" -->
<!-- sent="Fri, 14 Aug 2015 14:14:05 -0400" -->
<!-- isosent="20150814181405" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI users] open mpi 1.8.6. MPI_T" -->
<!-- id="CAMJJpkUCE11DwU1D1Sq7sKKX7aaqAW0HZ6avGu4xHnws+q7K2g_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CABb4ZDfSHtzoKjqdxheDtpqCwe2QsmjL2R=Y++m-WP0Wse8t0A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI users] open mpi 1.8.6. MPI_T<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 14:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17743.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This user email requires special attention, as it highlighted some issues
<br>
with our MPI_T variables.
<br>
<p>I wrote a short application to list all pvar and cvar available.
<br>
Unexpectedly, listing the cvars leads to a lot of failures, 138 over 1035
<br>
cvars. If a cvar is broken I would have expected (based on the reading of
<br>
the MPI_T chapter) not to be able to iterate over them instead of getting
<br>
an error. The tester is attached.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>---------- Forwarded message ----------
<br>
From: Khalid Hasanov &lt;xalid.h_at_[hidden]&gt;
<br>
Date: Fri, Aug 14, 2015 at 11:14 AM
<br>
Subject: [OMPI users] open mpi 1.8.6. MPI_T
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>Hello,
<br>
<p>I am trying to use MPI_T interface to set *coll_tuned_bcast_algorithm* mca
<br>
parameter during run time, however I was not successful to do that.
<br>
<p>I wonder if is it currently supported in Open MPI.
<br>
<p>I had the same problem with setting *btl_self_eager_limit *parameter.
<br>
<p>The code I am using attached below.
<br>
<p><p>Thanks.
<br>
<p><p><pre>
-- 
Best Regards,
Khalid
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post:
<a href="http://www.open-mpi.org/community/lists/users/2015/08/27470.php">http://www.open-mpi.org/community/lists/users/2015/08/27470.php</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17744/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17744/pvar_list.c">pvar_list.c</a>
</ul>
<!-- attachment="pvar_list.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17743.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
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
