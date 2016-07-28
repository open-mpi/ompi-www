<?
$subject_val = "Re: [OMPI users] MPI_File_Read_all and large file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 12:21:57 2011" -->
<!-- isoreceived="20110302172157" -->
<!-- sent="Wed, 2 Mar 2011 18:21:51 +0100" -->
<!-- isosent="20110302172151" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_Read_all and large file" -->
<!-- id="97F4FBDC-A8D4-4489-895D-5CEB319554A4_at_unisalento.it" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTima-YSyo6TMCPn_C1mWSQfwpPakF+MHmieo4P_=_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_Read_all and large file<br>
<strong>From:</strong> Massimo Cafaro (<em>massimo.cafaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-02 12:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15784.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>In reply to:</strong> <a href="15781.php">Gabriele Fatigati: "[OMPI users] MPI_File_Read_all and large file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gabriele,
<br>
<p>MPI_File_read_all() fails because you are probably trying to read more bytes than allowed by an int. See the function's signature:
<br>
<p><p>int MPI_File_read_all(MPI_File fh, void *buf, int count, MPI_Datatype datatype, MPI_Status *status)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>the count parameter is an int, so its maximum value may be 2147483647.
<br>
Trying to read more you will certainly get an error. So, this allows you to read about 2 GB.
<br>
<p>With kind regards,
<br>
Massimo Cafaro
<br>
<p>On Mar 2, 2011, at 6:02 PM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i'm using OpenMPI 1.4.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is about MPI_FIle_Real_all routine and files larger than 4 GB. Is this routine able to manage this case?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the routine with 6 GB file the routine fails, retrieving an allocation error. Investigating more in depth with Totalview, the problem appears in a line 188 of ompi/mca/io/romio/romio/adio/ad_nfs/ad_nfs_read.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Type_size(fd-&gt;filetype, &amp;filetype_size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here there is an explicit cast to int that can causes the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone can help me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in forward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it           
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15784.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>In reply to:</strong> <a href="15781.php">Gabriele Fatigati: "[OMPI users] MPI_File_Read_all and large file"</a>
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
