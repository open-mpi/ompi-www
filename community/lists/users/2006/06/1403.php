<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 10:26:46 2006" -->
<!-- isoreceived="20060613142646" -->
<!-- sent="Tue, 13 Jun 2006 10:26:37 -0400" -->
<!-- isosent="20060613142637" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gm bandwidth results disappointing" -->
<!-- id="D3978EC9-4A22-458E-B87A-5218D438979A_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="758BB66B-F276-4BF2-85E3-4B3A92C0D054_at_umich.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-13 10:26:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Previous message:</strong> <a href="1402.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>In reply to:</strong> <a href="1398.php">Brock Palen: "[OMPI users] gm bandwidth results disappointing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Reply:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unlike mpich-gm, Open MPI does not keep the memory pinned by default.  
<br>
You can force this by ading the &quot;--mca mpi_leave_pinned 1&quot; to your  
<br>
mpirun command or by adding it into the Open MPI configuration file  
<br>
as specified on the FAQ (section performance). I think that should be  
<br>
the main reason what you're seeing a such degradation of performances.
<br>
<p>If this does not solve your problem, can you please provide the new  
<br>
performance as well as the output of the command &quot;ompi_info --param  
<br>
all all&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 13, 2006, at 10:01 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I ran a test using openmpi-1.0.2 on OSX  vs mpich-1.2.6 from  
</span><br>
<span class="quotelev1">&gt; mryicom and i get lacking results from OMPI,
</span><br>
<span class="quotelev1">&gt; at point point there is a small drop in bandwidth for both MPI  
</span><br>
<span class="quotelev1">&gt; libs, but open mpi does not recover like mpich, and further on you  
</span><br>
<span class="quotelev1">&gt; see a decreese in bandwidth for OMPI on gm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached in png  and the outputs from the test (there are  
</span><br>
<span class="quotelev1">&gt; two for OMPI )
</span><br>
<span class="quotelev1">&gt; &lt;bwMyrinet.png&gt;
</span><br>
<span class="quotelev1">&gt; &lt;bwOMPI.o1969&gt;
</span><br>
<span class="quotelev1">&gt; &lt;bwOMPI.o1979&gt;
</span><br>
<span class="quotelev1">&gt; &lt;bwMPICH.o1978&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Previous message:</strong> <a href="1402.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>In reply to:</strong> <a href="1398.php">Brock Palen: "[OMPI users] gm bandwidth results disappointing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Reply:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
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
