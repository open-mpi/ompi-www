<?
$subject_val = "Re: [OMPI users] Does sendrecv guarantee order?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 06:00:24 2013" -->
<!-- isoreceived="20131127110024" -->
<!-- sent="Wed, 27 Nov 2013 12:00:23 +0100" -->
<!-- isosent="20131127110023" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does sendrecv guarantee order?" -->
<!-- id="69265800-0622-46B0-8EDE-AB682B927888_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKVrXU2nurQNSpZFQOXj+gjg6aBDcGYmi1fJ4ZCxOOLcqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does sendrecv guarantee order?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 06:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23087.php">George Bosilca: "Re: [OMPI users] Bug Iscatterv/Igatherv"</a>
<li><strong>Previous message:</strong> <a href="23085.php">Iliev, Hristo: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23084.php">Saliya Ekanayake: "[OMPI users] Does sendrecv guarantee order?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why do you need an order? If you plan to send and receive on the same buffer, you should use the MPI constructs for that, namely MPI_IN_PLACE.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Nov 27, 2013, at 07:20 , Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just want to verify if sendrecv provides any guarantees as to which operation (send or receive) happens first. I think it is not, is it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23086/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23087.php">George Bosilca: "Re: [OMPI users] Bug Iscatterv/Igatherv"</a>
<li><strong>Previous message:</strong> <a href="23085.php">Iliev, Hristo: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23084.php">Saliya Ekanayake: "[OMPI users] Does sendrecv guarantee order?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
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
