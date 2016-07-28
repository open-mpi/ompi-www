<?
$subject_val = "Re: [OMPI users] RMA operations with java buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 13:46:17 2016" -->
<!-- isoreceived="20160113184617" -->
<!-- sent="Wed, 13 Jan 2016 11:46:16 -0700" -->
<!-- isosent="20160113184616" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RMA operations with java buffers" -->
<!-- id="CAF1Cqj74rnom+u3tvBrwtg-U_CX4Fhfn+EfjQeGO8ecV+d_w3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="trinity-f600688e-443c-4f22-b9f0-0adfb2b7b075-1452701080180_at_3capp-webde-bs52" -->
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
<strong>Subject:</strong> Re: [OMPI users] RMA operations with java buffers<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-13 13:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28268.php">Marko Blatzheim: "[OMPI users] RMA operations with java buffers"</a>
<li><strong>In reply to:</strong> <a href="28268.php">Marko Blatzheim: "[OMPI users] RMA operations with java buffers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marko,
<br>
<p>You can probably find examples of what you'd like to do on github:
<br>
<p><a href="https://github.com/open-mpi/ompi-java-test">https://github.com/open-mpi/ompi-java-test</a>
<br>
<p>There are numerous MPI-2 RMA examples in the one-sided subdirectory.
<br>
<p>If you've never used github before, jus click on the download as zip
<br>
button in the upper right hand corner and you will not need to think
<br>
about github again.
<br>
<p>Hope this helps,
<br>
<p>Howard
<br>
<p><p>2016-01-13 9:04 GMT-07:00 Marko Blatzheim &lt;Marko-Blatzheim_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I work with the java open mpi version and I want to send byte arrays with
</span><br>
<span class="quotelev1">&gt; the mpi get function. The window provides a large buffer containing the
</span><br>
<span class="quotelev1">&gt; array values and a single call of get should provide the process with a
</span><br>
<span class="quotelev1">&gt; small part of that buffer but not necessarily starting at position 0 but at
</span><br>
<span class="quotelev1">&gt; an arbitrary starting point. Is this possible with java or do I need to use
</span><br>
<span class="quotelev1">&gt; put or even switch to the send/recv functions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marko
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28268.php">http://www.open-mpi.org/community/lists/users/2016/01/28268.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28268.php">Marko Blatzheim: "[OMPI users] RMA operations with java buffers"</a>
<li><strong>In reply to:</strong> <a href="28268.php">Marko Blatzheim: "[OMPI users] RMA operations with java buffers"</a>
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
