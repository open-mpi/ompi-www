<?
$subject_val = "Re: [OMPI users] help regarding SELF checkpointing, c or c++";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  1 11:48:58 2011" -->
<!-- isoreceived="20110801154858" -->
<!-- sent="Mon, 1 Aug 2011 15:48:52 +0000" -->
<!-- isosent="20110801154852" -->
<!-- name="Faisal Shahzad" -->
<!-- email="itsfaisi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help regarding SELF checkpointing, c or c++" -->
<!-- id="SNT118-W43263D7E2D00F409038756D5380_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAANzjEmrvvMD8hQ4x6WgkEOh1YoW_aF0_5Fj7k52QtBMf5iRzQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] help regarding SELF checkpointing, c or c++<br>
<strong>From:</strong> Faisal Shahzad (<em>itsfaisi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-01 11:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17008.php">Shamis, Pavel: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="17006.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="17005.php">Josh Hursey: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,I found my mistake. I was using same callback functions in C++ as in C but without using extern &quot;C&quot;. Now it works.Thanks for your reply.Kind regards,Faisal
<br>
<span class="quotelev1">&gt; Date: Mon, 1 Aug 2011 09:58:13 -0400
</span><br>
<span class="quotelev1">&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] help regarding SELF checkpointing, c or c++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There should not be any issue is checkpointing a C++ vs C program
</span><br>
<span class="quotelev1">&gt; using the 'self' checkpointer. The self checkpointer just looks for a
</span><br>
<span class="quotelev1">&gt; particular function name to be present in the compiled program binary.
</span><br>
<span class="quotelev1">&gt; Something to try is to run 'nm' on the compiled C++ program and make
</span><br>
<span class="quotelev1">&gt; sure that the 'self' checkpointing functions are present in the
</span><br>
<span class="quotelev1">&gt; output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can post a small repeater program if the above does not help,
</span><br>
<span class="quotelev1">&gt; then I can file a ticket and see if someone can take a look.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 1, 2011 at 5:16 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Group,
</span><br>
<span class="quotelev2">&gt; &gt; My question is that, does SELF checkpointing work only with 'c' or also with
</span><br>
<span class="quotelev2">&gt; &gt; 'c++' program?
</span><br>
<span class="quotelev2">&gt; &gt; I have a simple program written in 'c'. It makes self-checkpoint (run
</span><br>
<span class="quotelev2">&gt; &gt; callback functions) when i compile it with mpicc and do checkpointing during
</span><br>
<span class="quotelev2">&gt; &gt; run.
</span><br>
<span class="quotelev2">&gt; &gt; But when i convert same program to .cpp, compile with mpiCC and do
</span><br>
<span class="quotelev2">&gt; &gt; checkpointing again, it makes BLCR checkpoint and not self-checkpoint.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Faisal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17008.php">Shamis, Pavel: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="17006.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="17005.php">Josh Hursey: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
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
