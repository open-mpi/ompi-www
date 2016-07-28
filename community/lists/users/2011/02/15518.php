<?
$subject_val = "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  6 16:44:35 2011" -->
<!-- isoreceived="20110206214435" -->
<!-- sent="Sun, 6 Feb 2011 22:44:29 +0100" -->
<!-- isosent="20110206214429" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype" -->
<!-- id="AANLkTikCgV-c7YscL_ehTjEeD0WQdz0xPWP9JdJgH2Kp_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0D4399AD-42C4-4768-9327-782770CDB6E2_at_unisalento.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-06 16:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Previous message:</strong> <a href="15517.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>In reply to:</strong> <a href="15511.php">Massimo Cafaro: "[OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Reply:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Massimo
<br>
<p>Just to make sure: usually the MPI_ERR_TUNCATE error is caused by
<br>
buffer sizes that are too small.
<br>
Can  you verify that the buffers you are using are large enough to
<br>
hold the data they should receive?
<br>
<p>Jody
<br>
<p><p>On Sat, Feb 5, 2011 at 6:37 PM, Massimo Cafaro
<br>
&lt;massimo.cafaro_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in one of my C codes developed using Open MPI v1.4.3 I need to call MPI_Allreduce() passing as sendbuf and recvbuf arguments two MPI_PACKED arrays. The reduction requires my own MPI_User_function that needs to &#160;MPI_Unpack() its first and second argument, process them and finally MPI_Pack() the result in the second argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to use MPI_Pack/MPI_Unpack because I am not able to create a derived datatype, since many data I need to send are dynamically allocated.
</span><br>
<span class="quotelev1">&gt; However, the code fails at runtime with the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An error occurred in MPI_Unpack
</span><br>
<span class="quotelev1">&gt; on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have verified that, after unpacking the data in my own reduction function, all of the data are wrong.
</span><br>
<span class="quotelev1">&gt; Is this possible in MPI? I did not find anything on the &quot;MPI reference Volume 1&quot; and &quot;Using MPI&quot; &#160;that prevents this. This should just require using as datatype MPI_PACKED in MPI_Allreduce() . However, searching on the web I did not find any examples.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for any clue/suggestions/source code examples.
</span><br>
<span class="quotelev1">&gt; This is driving me crazy now ;-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Massimo Cafaro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *******************************************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Massimo Cafaro, Ph.D. &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Additional affiliations:
</span><br>
<span class="quotelev1">&gt; &#160;Assistant Professor &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Euro-Mediterranean Centre for Climate Change
</span><br>
<span class="quotelev1">&gt; &#160;Dept. of Engineering for Innovation &#160; &#160; &#160; &#160; &#160;SPACI Consortium
</span><br>
<span class="quotelev1">&gt; &#160;University of Salento, Lecce, Italy &#160; &#160; &#160; &#160; &#160; &#160; E-mail massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &#160;Via per Monteroni &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &#160;73100 Lecce, Italy &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &#160;Voice/Fax &#160;+39 0832 297371 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &#160;Web &#160; &#160; <a href="http://sara.unisalento.it/~cafaro">http://sara.unisalento.it/~cafaro</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *******************************************************************************************************
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Previous message:</strong> <a href="15517.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>In reply to:</strong> <a href="15511.php">Massimo Cafaro: "[OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Reply:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
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
