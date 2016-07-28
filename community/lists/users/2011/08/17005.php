<?
$subject_val = "Re: [OMPI users] help regarding SELF checkpointing, c or c++";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  1 09:58:19 2011" -->
<!-- isoreceived="20110801135819" -->
<!-- sent="Mon, 1 Aug 2011 09:58:13 -0400" -->
<!-- isosent="20110801135813" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help regarding SELF checkpointing, c or c++" -->
<!-- id="CAANzjEmrvvMD8hQ4x6WgkEOh1YoW_aF0_5Fj7k52QtBMf5iRzQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT118-W23C4347F24B88EE397B26BD5380_at_phx.gbl" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-01 09:58:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17006.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="17004.php">Faisal Shahzad: "[OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>In reply to:</strong> <a href="17004.php">Faisal Shahzad: "[OMPI users] help regarding SELF checkpointing, c or c++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17007.php">Faisal Shahzad: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>Reply:</strong> <a href="17007.php">Faisal Shahzad: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There should not be any issue is checkpointing a C++ vs C program
<br>
using the 'self' checkpointer. The self checkpointer just looks for a
<br>
particular function name to be present in the compiled program binary.
<br>
Something to try is to run 'nm' on the compiled C++ program and make
<br>
sure that the 'self' checkpointing functions are present in the
<br>
output.
<br>
<p>If you can post a small repeater program if the above does not help,
<br>
then I can file a ticket and see if someone can take a look.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Mon, Aug 1, 2011 at 5:16 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear Group,
</span><br>
<span class="quotelev1">&gt; My question is that, does SELF checkpointing work only with 'c' or also with
</span><br>
<span class="quotelev1">&gt; 'c++' program?
</span><br>
<span class="quotelev1">&gt; I have a simple program written in 'c'. It makes self-checkpoint (run
</span><br>
<span class="quotelev1">&gt; callback functions) when i compile it with mpicc and do checkpointing during
</span><br>
<span class="quotelev1">&gt; run.
</span><br>
<span class="quotelev1">&gt; But when i convert same program to .cpp, compile with mpiCC and do
</span><br>
<span class="quotelev1">&gt; checkpointing again, it makes BLCR checkpoint and not self-checkpoint.
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Faisal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17006.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="17004.php">Faisal Shahzad: "[OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>In reply to:</strong> <a href="17004.php">Faisal Shahzad: "[OMPI users] help regarding SELF checkpointing, c or c++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17007.php">Faisal Shahzad: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>Reply:</strong> <a href="17007.php">Faisal Shahzad: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
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
