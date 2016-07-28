<?
$subject_val = "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 03:51:19 2015" -->
<!-- isoreceived="20150108085119" -->
<!-- sent="Thu, 8 Jan 2015 09:51:18 +0100" -->
<!-- isosent="20150108085118" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="CAG8o1y65yHETxMkSx+LCkJLghmCXTpg1iAVbbPAeKT4i_CfNeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54ADE53F.90801_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 03:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26125.php">Bernard Secher: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26123.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26118.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26126.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26126.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles,
<br>
thanks again, however it does not work.
<br>
<p>the program says:  &quot;SIGSEGV, segmentation fault occurred&quot;
<br>
<p>Does the program run in your case?
<br>
<p>Thanks again
<br>
<p><p><p>Diego
<br>
<p><p>On 8 January 2015 at 03:02, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my bad, i should have passed displacements(1) to MPI_Type_create_struct
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is an updated version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note you have to use a REQUEST integer for MPI_Isend and MPI_Irecv,
</span><br>
<span class="quotelev1">&gt; and you also have to call MPI_Wait to ensure the requests complete)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2015/01/08 8:23, Diego Avesani wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Gilles, Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry to bother you again, but I have some problem with send and
</span><br>
<span class="quotelev1">&gt; receive the struct_data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to send a MPI_Type_Create_Struct but I get a segmentation fault
</span><br>
<span class="quotelev1">&gt; occurred and I do not know why. The program is very simple, it is the old
</span><br>
<span class="quotelev1">&gt; one with the isend and irecv subroutines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (you can find it in the attachment)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5 January 2015 at 15:54, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Thanks a lot.
</span><br>
<span class="quotelev1">&gt; Now is more clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26116.php">http://www.open-mpi.org/community/lists/users/2015/01/26116.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26118.php">http://www.open-mpi.org/community/lists/users/2015/01/26118.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26124/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26125.php">Bernard Secher: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26123.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26118.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26126.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26126.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
