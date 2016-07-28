<?
$subject_val = "Re: [OMPI users] mpi_type_create_struct not working for large counts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 13:41:23 2015" -->
<!-- isoreceived="20150413174123" -->
<!-- sent="Mon, 13 Apr 2015 11:41:13 -0600" -->
<!-- isosent="20150413174113" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_type_create_struct not working for large counts" -->
<!-- id="CAF1Cqj7DqVup_nS4__tF8zz8DCSNRL5xkPbzYfGffpj71a=dOg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FC64FEF6471E804DA9CA2F6DBDCFD62B014C652D_at_EXDAG0-B2.intra.cea.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_type_create_struct not working for large counts<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 13:41:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26697.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26695.php">MOHR STEPHAN 239883: "[OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26695.php">MOHR STEPHAN 239883: "[OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26713.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26713.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Stephan,
<br>
<p>For starters, would you mind sending the output you get when you run the
<br>
ompi_info command?
<br>
If you could, it would be great if you could try running the test against
<br>
the latest 1.8.5rc1
<br>
&lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.5rc1.tar.gz">http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.5rc1.tar.gz</a>&gt;
<br>
?
<br>
The test appears to work without problem using mpich, at least with 4
<br>
ranks.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p>2015-04-13 10:40 GMT-06:00 MOHR STEPHAN 239883 &lt;STEPHAN.MOHR_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;  Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've got an issue when using a derived data type created by
</span><br>
<span class="quotelev1">&gt; mpi_type_create_struct in a one-sided communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem can be reproduced using the small standalone program which I
</span><br>
<span class="quotelev1">&gt; attached. It just creates a type which should be equivalent to n
</span><br>
<span class="quotelev1">&gt; contiguous elements. This type is then used in a mpi_get. With a value
</span><br>
<span class="quotelev1">&gt; n=100 it works fine, but with n=1000 it either hangs (version 1.8.1) or
</span><br>
<span class="quotelev1">&gt; crashes (version 1.6.5).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Stephan
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26695.php">http://www.open-mpi.org/community/lists/users/2015/04/26695.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26696/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26697.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26695.php">MOHR STEPHAN 239883: "[OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26695.php">MOHR STEPHAN 239883: "[OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26713.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26713.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
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
