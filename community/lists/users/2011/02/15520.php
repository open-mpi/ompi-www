<?
$subject_val = "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  6 19:15:32 2011" -->
<!-- isoreceived="20110207001532" -->
<!-- sent="Mon, 7 Feb 2011 01:15:23 +0100" -->
<!-- isosent="20110207001523" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype" -->
<!-- id="CDA2940E-84B1-4713-A7FB-7C19BE40BE43_at_unisalento.it" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="02FF4439-6A87-4504-ADAB-17B1946EF203_at_unisalento.it" -->
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
<strong>From:</strong> Massimo Cafaro (<em>massimo.cafaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-06 19:15:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15521.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>In reply to:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jody,
<br>
<p>I have finally solved the problem.
<br>
I was incorrectly passing 1 as the count argument for MPI_Allreduce, reasoning that I was passing to the reduction one buffer of type MPI_PACKED. 
<br>
Instead, I need to pass the actual size of the buffer for the reduction to work correctly.
<br>
<p>Thank you anyway for your suggestion that, ultimately, led me to discover the bug.
<br>
With kind regards,
<br>
<p>Massimo
<br>
On Feb 7, 2011, at 12:28 AM, Massimo Cafaro wrote:
<br>
<p><span class="quotelev1">&gt; hi Jody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, the buffer sizes are actually quite huge with regard to the actual data to be packed.unpacked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Massimo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2011, at 10:44 PM, jody wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Massimo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just to make sure: usually the MPI_ERR_TUNCATE error is caused by
</span><br>
<span class="quotelev2">&gt;&gt; buffer sizes that are too small.
</span><br>
<span class="quotelev2">&gt;&gt; Can  you verify that the buffers you are using are large enough to
</span><br>
<span class="quotelev2">&gt;&gt; hold the data they should receive?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Feb 5, 2011 at 6:37 PM, Massimo Cafaro
</span><br>
<span class="quotelev2">&gt;&gt; &lt;massimo.cafaro_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in one of my C codes developed using Open MPI v1.4.3 I need to call MPI_Allreduce() passing as sendbuf and recvbuf arguments two MPI_PACKED arrays. The reduction requires my own MPI_User_function that needs to  MPI_Unpack() its first and second argument, process them and finally MPI_Pack() the result in the second argument.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to use MPI_Pack/MPI_Unpack because I am not able to create a derived datatype, since many data I need to send are dynamically allocated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the code fails at runtime with the following message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An error occurred in MPI_Unpack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have verified that, after unpacking the data in my own reduction function, all of the data are wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this possible in MPI? I did not find anything on the &quot;MPI reference Volume 1&quot; and &quot;Using MPI&quot;  that prevents this. This should just require using as datatype MPI_PACKED in MPI_Allreduce() . However, searching on the web I did not find any examples.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you in advance for any clue/suggestions/source code examples.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is driving me crazy now ;-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Massimo Cafaro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Massimo Cafaro, Ph.D.                               Additional affiliations:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor                                      Euro-Mediterranean Centre for Climate Change
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dept. of Engineering for Innovation          SPACI Consortium
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Salento, Lecce, Italy             E-mail massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via per Monteroni                                                     massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 73100 Lecce, Italy                                                                     cafaro_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Voice/Fax  +39 0832 297371                                                     cafaro_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Web     <a href="http://sara.unisalento.it/~cafaro">http://sara.unisalento.it/~cafaro</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; Massimo Cafaro, Ph.D.                               Additional affiliations:
</span><br>
<span class="quotelev1">&gt; Assistant Professor                                      Euro-Mediterranean Centre for Climate Change
</span><br>
<span class="quotelev1">&gt; Dept. of Engineering for Innovation          SPACI Consortium  
</span><br>
<span class="quotelev1">&gt; University of Salento, Lecce, Italy             E-mail massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Via per Monteroni                                                     massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 73100 Lecce, Italy					                                cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Voice/Fax  +39 0832 297371 				                        cafaro_at_[hidden]   
</span><br>
<span class="quotelev1">&gt; Web     <a href="http://sara.unisalento.it/~cafaro">http://sara.unisalento.it/~cafaro</a>                                                                 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>- 
<br>
<p>*******************************************************************************************************
<br>
<p>&nbsp;Massimo Cafaro, Ph.D.                               Additional affiliations:
<br>
&nbsp;Assistant Professor                                      Euro-Mediterranean Centre for Climate Change
<br>
&nbsp;Dept. of Engineering for Innovation          SPACI Consortium  
<br>
&nbsp;University of Salento, Lecce, Italy             E-mail massimo.cafaro_at_[hidden]
<br>
&nbsp;Via per Monteroni                                                     massimo.cafaro_at_[hidden]
<br>
&nbsp;73100 Lecce, Italy					                                cafaro_at_[hidden]
<br>
&nbsp;Voice/Fax  +39 0832 297371 				                        cafaro_at_[hidden]   
<br>
&nbsp;Web     <a href="http://sara.unisalento.it/~cafaro">http://sara.unisalento.it/~cafaro</a>                                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>*******************************************************************************************************
<br>
<p><p><p><p><p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15520/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15521.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>In reply to:</strong> <a href="15519.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
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
