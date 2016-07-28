<?
$subject_val = "[OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  5 12:38:03 2011" -->
<!-- isoreceived="20110205173803" -->
<!-- sent="Sat, 5 Feb 2011 18:37:56 +0100" -->
<!-- isosent="20110205173756" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="[OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype" -->
<!-- id="0D4399AD-42C4-4768-9327-782770CDB6E2_at_unisalento.it" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype<br>
<strong>From:</strong> Massimo Cafaro (<em>massimo.cafaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-05 12:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15512.php">Barnet Wagman: "[OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Previous message:</strong> <a href="15510.php">Kristian Medri: "[OMPI users] Centos Open MPI with nfs problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15518.php">jody: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Reply:</strong> <a href="15518.php">jody: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>in one of my C codes developed using Open MPI v1.4.3 I need to call MPI_Allreduce() passing as sendbuf and recvbuf arguments two MPI_PACKED arrays. The reduction requires my own MPI_User_function that needs to  MPI_Unpack() its first and second argument, process them and finally MPI_Pack() the result in the second argument.
<br>
<p>I need to use MPI_Pack/MPI_Unpack because I am not able to create a derived datatype, since many data I need to send are dynamically allocated.
<br>
However, the code fails at runtime with the following message:
<br>
<p>An error occurred in MPI_Unpack
<br>
on communicator MPI_COMM_WORLD
<br>
MPI_ERR_TRUNCATE: message truncated
<br>
MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>I have verified that, after unpacking the data in my own reduction function, all of the data are wrong.
<br>
Is this possible in MPI? I did not find anything on the &quot;MPI reference Volume 1&quot; and &quot;Using MPI&quot;  that prevents this. This should just require using as datatype MPI_PACKED in MPI_Allreduce() . However, searching on the web I did not find any examples. 
<br>
<p>Thank you in advance for any clue/suggestions/source code examples. 
<br>
This is driving me crazy now ;-(
<br>
<p>Massimo Cafaro
<br>
<p><p>- 
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15511/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15512.php">Barnet Wagman: "[OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Previous message:</strong> <a href="15510.php">Kristian Medri: "[OMPI users] Centos Open MPI with nfs problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15518.php">jody: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Reply:</strong> <a href="15518.php">jody: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
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
