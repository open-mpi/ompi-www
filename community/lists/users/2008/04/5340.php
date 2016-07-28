<?
$subject_val = "Re: [OMPI users] An error occurred in MPI_comm_size";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 06:50:55 2008" -->
<!-- isoreceived="20080408105055" -->
<!-- sent="Tue, 8 Apr 2008 12:38:00 +0200" -->
<!-- isosent="20080408103800" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An error occurred in MPI_comm_size" -->
<!-- id="E4323DDB-A857-4185-8BA6-0C5DD5D4BA46_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9165.43429.qm_at_web53412.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] An error occurred in MPI_comm_size<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-08 06:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5341.php">Danesh Daroui: "[OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5339.php">yacob sen: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>In reply to:</strong> <a href="5339.php">yacob sen: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 08.04.2008 um 12:04 schrieb yacob sen:
<br>
<span class="quotelev1">&gt; Thank you Brock and Terry for your comments. I did now install  
</span><br>
<span class="quotelev1">&gt; manually openmpi. Now openmpi works
</span><br>
<span class="quotelev1">&gt; properly. I can compile and run my programs.It is so wonderful now.  
</span><br>
<span class="quotelev1">&gt; The result is now the same as when
</span><br>
<span class="quotelev1">&gt; I run it in Linux cluster and on my dual processor Laptop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run : mpirun -np 4 ./test  (test being the exe file coming  
</span><br>
<span class="quotelev1">&gt; form my the compiled fortran program).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program still give a result based on 4 processor. How can this  
</span><br>
<span class="quotelev1">&gt; be true while I have only two processor
</span><br>
<span class="quotelev1">&gt; in my laptop.
</span><br>
<p>the Linux scheduler will just run these 4 processes as it would run  
<br>
every other set of 4 processes, i.e. each one will get 50% of a core,  
<br>
and you should see it in &quot;top&quot;. It will of course not run faster, but  
<br>
you can test whether your programm runs correct when using 4 or more  
<br>
tasks.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Can any one comment on this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; yacob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----
</span><br>
<span class="quotelev1">&gt; From: yacob sen &lt;yacob_123_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 7, 2008 5:08:39 PM
</span><br>
<span class="quotelev1">&gt; Subject: An error occurred in MPI_comm_size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just installed openmpi/mpich in ubuntu 7.10 in my linux  
</span><br>
<span class="quotelev1">&gt; machine which has  a dual processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled my fortran program as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90  add.f90 -o add_n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I, however, forced to copy &quot;mpif.h&quot; library in my working directory  
</span><br>
<span class="quotelev1">&gt; where i run my program and also I  inserted an additional line  
</span><br>
<span class="quotelev1">&gt; inside the file &quot;/etc/openmpi/openmpi-mca-params.conf&quot;, the  
</span><br>
<span class="quotelev1">&gt; following : btl=^openib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have then run the program as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./add_n  (here I use 2 processor as my dual laptop has  
</span><br>
<span class="quotelev1">&gt; two processor)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I got is the following error message :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [geosl063:13781] *** An error occurred in MPI_comm_size
</span><br>
<span class="quotelev1">&gt; [geosl063:13780] *** An error occurred in MPI_comm_size
</span><br>
<span class="quotelev1">&gt; [geosl063:13780] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [geosl063:13780] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [geosl063:13780] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [geosl063:13781] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [geosl063:13781] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used  MPI commands to program my fortran code. The program has  
</span><br>
<span class="quotelev1">&gt; been running in a linux cluster. The point here is to develop my  
</span><br>
<span class="quotelev1">&gt; parallel program in my linux laptop before I go and run it in a  
</span><br>
<span class="quotelev1">&gt; Linux cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any comments. I appreciate any comments
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you so much
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yacob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You rock. That's why Blockbuster's offering you one month of  
</span><br>
<span class="quotelev1">&gt; Blockbuster Total Access, No Cost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You rock. That's why Blockbuster's offering you one month of  
</span><br>
<span class="quotelev1">&gt; Blockbuster Total Access, No Cost.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5341.php">Danesh Daroui: "[OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5339.php">yacob sen: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>In reply to:</strong> <a href="5339.php">yacob sen: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
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
