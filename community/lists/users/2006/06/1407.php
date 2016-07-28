<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 11:46:56 2006" -->
<!-- isoreceived="20060613154656" -->
<!-- sent="Tue, 13 Jun 2006 11:46:48 -0400" -->
<!-- isosent="20060613154648" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gm bandwidth results disappointing" -->
<!-- id="5C9E138A-307B-42E8-B27E-FF241F0A1098_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8F5C4160-56BF-4584-8C57-52F437F915D6_at_umich.edu" -->
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
<strong>Date:</strong> 2006-06-13 11:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1408.php">Ken Mighell: "[OMPI users] pnetcdf and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1406.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>In reply to:</strong> <a href="1406.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2006, at 11:07 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Here are the results with -mca mpi_leave_pinned
</span><br>
<span class="quotelev1">&gt; The results are as expected,  they are exactly similar to the mpich  
</span><br>
<span class="quotelev1">&gt; results.  Thank you for the help.  I have attached a plot with all  
</span><br>
<span class="quotelev1">&gt; three and the raw data for anyones viewing pleasure.
</span><br>
<p>We never doubt about that :)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Im still curious about does mpi_leave_pinned affect real jobs if  
</span><br>
<span class="quotelev1">&gt; its not included?  for the most part for large messages of the size  
</span><br>
<span class="quotelev1">&gt; used in this test will never be seen.  So the effect should be  
</span><br>
<span class="quotelev1">&gt; negligible?  Clarification?
</span><br>
<span class="quotelev1">&gt; Note I am a admin not a MPI programmer have very lax experience  
</span><br>
<span class="quotelev1">&gt; with real code.
</span><br>
<p>If you want/can run some real applications with and without this flag  
<br>
and compare them it will be more than useful. We never went deeper  
<br>
than some benchmarks on this topic. Additional information is  
<br>
welcome ...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; &lt;bwmyirnet.png&gt;
</span><br>
<span class="quotelev1">&gt; &lt;bwMCA.o1985&gt;
</span><br>
<span class="quotelev1">&gt; &lt;bwMPICH.o1978&gt;
</span><br>
<span class="quotelev1">&gt; &lt;bwOMPI.o1979&gt;
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
<span class="quotelev1">&gt; On Jun 13, 2006, at 10:38 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ill provide new numbers soon with the --mac mpi_leave_pinned 1
</span><br>
<span class="quotelev2">&gt;&gt; I'm currious how does this affect real application performace?  This
</span><br>
<span class="quotelev2">&gt;&gt; ofcourse is a synthetic test using NetPipe.   For regular apps that
</span><br>
<span class="quotelev2">&gt;&gt; move decent amounts of data but want low latency more.
</span><br>
<span class="quotelev2">&gt;&gt; Will that be affected?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 13, 2006, at 10:26 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unlike mpich-gm, Open MPI does not keep the memory pinned by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can force this by ading the &quot;--mca mpi_leave_pinned 1&quot; to your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun command or by adding it into the Open MPI configuration file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as specified on the FAQ (section performance). I think that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the main reason what you're seeing a such degradation of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performances.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If this does not solve your problem, can you please provide the new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance as well as the output of the command &quot;ompi_info --param
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all all&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 13, 2006, at 10:01 AM, Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I ran a test using openmpi-1.0.2 on OSX  vs mpich-1.2.6 from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mryicom and i get lacking results from OMPI,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at point point there is a small drop in bandwidth for both MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libs, but open mpi does not recover like mpich, and further on you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see a decreese in bandwidth for OMPI on gm.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have attached in png  and the outputs from the test (there are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two for OMPI )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;bwMyrinet.png&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;bwOMPI.o1969&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;bwOMPI.o1979&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;bwMPICH.o1978&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1408.php">Ken Mighell: "[OMPI users] pnetcdf and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1406.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>In reply to:</strong> <a href="1406.php">Brock Palen: "Re: [OMPI users] gm bandwidth results disappointing"</a>
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
