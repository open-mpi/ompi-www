<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 08:17:26 2008" -->
<!-- isoreceived="20080918121726" -->
<!-- sent="Thu, 18 Sep 2008 08:17:20 -0400" -->
<!-- isosent="20080918121720" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="48D246D0.1040600_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1707.1221735469.16379.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Send and MPI_Recv<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 08:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>Previous message:</strong> <a href="6599.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6603.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6603.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It might also be interesting to see the result of &quot;ifconfig -a&quot; on both 
<br>
of your machines.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Date: Thu, 18 Sep 2008 10:19:37 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;E3B88B6CBFCF4F78A9F8310502FB5AD4_at_aparicio1&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; format=flowed; charset=&quot;iso-8859-1&quot;;
</span><br>
<span class="quotelev1">&gt; 	reply-type=response
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, &quot;edu&quot; is the user and 10.4.5.126 is the IP address. Because both 
</span><br>
<span class="quotelev1">&gt; computers have different usernames, I think that I should write the username 
</span><br>
<span class="quotelev1">&gt; otherwise it does not work. In fact, on the computer 10.4.5.123 I write:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --prefix /usr/local 
</span><br>
<span class="quotelev1">&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and on the computer 10.4.5.126 I write:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host sofia_at_10.4.5.123,10.4.5.126 --prefix /usr/local 
</span><br>
<span class="quotelev1">&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try only with the IP and  I write on the computer 10.4.5.123:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host 10.4.5.123,10.4.5.126 --prefix /usr/local 
</span><br>
<span class="quotelev1">&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then the computer ask me the password of sofia_at_10.4.5.126 and then I type 
</span><br>
<span class="quotelev1">&gt; the password and does not work because the user is &quot;edu&quot; not &quot;sofia&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install dbx, if I can attach a debugger I will tell you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sofia
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>Previous message:</strong> <a href="6599.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6603.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6603.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
