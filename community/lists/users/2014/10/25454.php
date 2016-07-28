<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 12:04:52 2014" -->
<!-- isoreceived="20141003160452" -->
<!-- sent="Fri, 3 Oct 2014 16:04:31 +0000" -->
<!-- isosent="20141003160431" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAAbhqc5hwzCQKxYehpuQFNNOQs3p1BxsXhQn3Xvfsc_j9=A7ZQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y5tutVo97kT9BKFOdx_U7jGhRhCHzZ_Tayk0xPc-jLf4w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 12:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25453.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25453.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Diego,
<br>
Instead of instantly going about using cartesian communicators you should
<br>
try and create a small test case, something like this:
<br>
<p>I have successfully runned this small snippet on my machine.
<br>
As I state in the source, the culprit was the integer address size. It is
<br>
inherently of type long, whereas you used integer.
<br>
Running it (with ONLY 2 processors) should print:
<br>
1 1.0000000000000000 1.0000000000000000 11.000000000000000
<br>
11.000000000000000
<br>
<p>Please notice the other things I comment on, they can turn out to be
<br>
important!
<br>
<p>For instance, try this:
<br>
<p>real(dp) :: a
<br>
a = 0.2
<br>
print *,a
<br>
a=0.2_dp
<br>
print *,a
<br>
<p>Try and understand why the output is not as expected!
<br>
<p>Also try and understand why this has no problems:
<br>
<p>real(dp) :: a
<br>
a = 1.
<br>
print *,a
<br>
a=1._dp
<br>
print *,a
<br>
<p><p><p>2014-10-03 15:41 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear Nick,
</span><br>
<span class="quotelev1">&gt; thanks again, I am learning a lot and do not be afraid to be rude.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On 3 October 2014 17:38, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Jeff, Dear Nick,
</span><br>
<span class="quotelev2">&gt;&gt; the question is about, inserting the FLAG for using -r8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I have written a simple code with select_kind to avoid -r8. I get the
</span><br>
<span class="quotelev2">&gt;&gt; same error.
</span><br>
<span class="quotelev2">&gt;&gt; You can find the code in the attachment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; probably there is something wrong with ompi configuration
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, thanks and thanks a lot
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3 October 2014 17:18, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 3, 2014, at 10:55 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Dear Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; how can I do that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Er... can you be more specific?  I mentioned several things in my email.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you're asking about how to re-install OMPI compiled with -r8, please
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first read Nick's email (essentially asking &quot;why are you using -r8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyway?&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25450.php">http://www.open-mpi.org/community/lists/users/2014/10/25450.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25453.php">http://www.open-mpi.org/community/lists/users/2014/10/25453.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25454/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25454/program.f90">program.f90</a>
</ul>
<!-- attachment="program.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25453.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25453.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
