<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 11:06:08 2006" -->
<!-- isoreceived="20060613150608" -->
<!-- sent="Tue, 13 Jun 2006 11:02:34 -0400" -->
<!-- isosent="20060613150234" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gm bandwidth results disappointing" -->
<!-- id="7F04DC63-0BC5-4AC0-9121-BA1CFE0AD181_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4CF4ECED-D3FC-40E4-99F2-BC3A3D12CDEF_at_umich.edu" -->
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
<strong>Date:</strong> 2006-06-13 11:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1406.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Previous message:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>In reply to:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1406.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, if there is no reuse in the application buffers, then the 2  
<br>
approaches will give the same results. Because of our pipelined  
<br>
protocol it might happens that we will reach even better performance  
<br>
for large messages. If there is buffer reuse, the mpich-gm approach  
<br>
will lead to better performances, but to more pinned memory. In fact,  
<br>
the main problem is not the memory, but the memory hooks (like the  
<br>
ones in the lib c) that need to be take care by the MPI library in  
<br>
order to notice when one of the already registered memory location is  
<br>
released (freed) by the user.
<br>
<p>At least with our approach the user have the choice. By default we  
<br>
turn them off, but it is really easy for any user to turn on the  
<br>
pinned memory registration, if he/she think that his MPI application  
<br>
require it. There is a paper to be published this year at Euro PVM/ 
<br>
MPI which shows that for some *real* applications (like the NAS  
<br>
benchmarks) there is no real difference. But it is definitively for  
<br>
the ping-pong benchmark ...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 13, 2006, at 10:38 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Ill provide new numbers soon with the --mac mpi_leave_pinned 1
</span><br>
<span class="quotelev1">&gt; I'm currious how does this affect real application performace?  This
</span><br>
<span class="quotelev1">&gt; ofcourse is a synthetic test using NetPipe.   For regular apps that
</span><br>
<span class="quotelev1">&gt; move decent amounts of data but want low latency more.
</span><br>
<span class="quotelev1">&gt; Will that be affected?
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
<span class="quotelev1">&gt; On Jun 13, 2006, at 10:26 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unlike mpich-gm, Open MPI does not keep the memory pinned by default.
</span><br>
<span class="quotelev2">&gt;&gt; You can force this by ading the &quot;--mca mpi_leave_pinned 1&quot; to your
</span><br>
<span class="quotelev2">&gt;&gt; mpirun command or by adding it into the Open MPI configuration file
</span><br>
<span class="quotelev2">&gt;&gt; as specified on the FAQ (section performance). I think that should be
</span><br>
<span class="quotelev2">&gt;&gt; the main reason what you're seeing a such degradation of  
</span><br>
<span class="quotelev2">&gt;&gt; performances.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If this does not solve your problem, can you please provide the new
</span><br>
<span class="quotelev2">&gt;&gt; performance as well as the output of the command &quot;ompi_info --param
</span><br>
<span class="quotelev2">&gt;&gt; all all&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 13, 2006, at 10:01 AM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran a test using openmpi-1.0.2 on OSX  vs mpich-1.2.6 from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mryicom and i get lacking results from OMPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at point point there is a small drop in bandwidth for both MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libs, but open mpi does not recover like mpich, and further on you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see a decreese in bandwidth for OMPI on gm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have attached in png  and the outputs from the test (there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two for OMPI )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bwMyrinet.png&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bwOMPI.o1969&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bwOMPI.o1979&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bwMPICH.o1978&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1406.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Previous message:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>In reply to:</strong> <a href="1404.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1406.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
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
