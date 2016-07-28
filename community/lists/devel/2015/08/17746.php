<?
$subject_val = "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 14:36:08 2015" -->
<!-- isoreceived="20150814183608" -->
<!-- sent="Fri, 14 Aug 2015 14:36:07 -0400" -->
<!-- isosent="20150814183607" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T" -->
<!-- id="CAMJJpkXMCcp__PMH=4SWiRZPzqdQmxr9fg8VW6Yy6iXBi+D80g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5599A85C-1686-4520-A54D-34CC3A9A9050_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 14:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17747.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17747.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17747.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17753.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For this particular test I used the current master (022a9d8).
<br>
<p>I reread the MPI_T chapter and [as usual] there might be something that
<br>
cautions the current behavior (aka. returning MPI_T_ERR_INVALID_INDEX for
<br>
an index smaller than the number of cvars returned by MPI_T_cvar_get_num).
<br>
This is indicated by the example 14.4, page 576. If I exclude this return
<br>
code from the list of errors, then things are working as expected.
<br>
<p>What is the community feeling? Should we reutrn the exact number of
<br>
available cvars or an upper bound is a valid value?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Aug 14, 2015 at 2:21 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; George: what OMPI version did you test?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 14, 2015, at 2:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This user email requires special attention, as it highlighted some
</span><br>
<span class="quotelev1">&gt; issues with our MPI_T variables.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wrote a short application to list all pvar and cvar available.
</span><br>
<span class="quotelev1">&gt; Unexpectedly, listing the cvars leads to a lot of failures, 138 over 1035
</span><br>
<span class="quotelev1">&gt; cvars. If a cvar is broken I would have expected (based on the reading of
</span><br>
<span class="quotelev1">&gt; the MPI_T chapter) not to be able to iterate over them instead of getting
</span><br>
<span class="quotelev1">&gt; an error. The tester is attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt; &gt; From: Khalid Hasanov &lt;xalid.h_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, Aug 14, 2015 at 11:14 AM
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] open mpi 1.8.6. MPI_T
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; &lt;pvar_list.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17744.php">http://www.open-mpi.org/community/lists/devel/2015/08/17744.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17745.php">http://www.open-mpi.org/community/lists/devel/2015/08/17745.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17746/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17747.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="17745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17747.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17747.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17753.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
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
