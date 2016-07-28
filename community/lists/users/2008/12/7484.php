<?
$subject_val = "Re: [OMPI users] Basic Scatter Operation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 19:23:46 2008" -->
<!-- isoreceived="20081210002346" -->
<!-- sent="Tue, 9 Dec 2008 19:22:49 -0500" -->
<!-- isosent="20081210002249" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic Scatter Operation" -->
<!-- id="0A874EA0-B20D-4CF5-B51A-9C145B86DF34_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY141-W1AEC27C57EC09CA4EAF7FD7FB0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Basic Scatter Operation<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-09 19:22:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7485.php">Matt Hughes: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Previous message:</strong> <a href="7483.php">Kevin Anthony Joy: "[OMPI users] Basic Scatter Operation"</a>
<li><strong>In reply to:</strong> <a href="7483.php">Kevin Anthony Joy: "[OMPI users] Basic Scatter Operation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7485.php">Matt Hughes: "Re: [OMPI users] Basic Scatter Operation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scatter is a collective operation.
<br>
You need to have all ranks in COMM_WORLD call it. Even though rank 0  
<br>
is the one with the original data.
<br>
<p>Remove the if(rank==0)  block around it,
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Dec 9, 2008, at 7:11 PM, Kevin Anthony Joy wrote:
<br>
<p><span class="quotelev1">&gt; Good Evening All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm very new to using MPI; I seem to be struggling to get a basic  
</span><br>
<span class="quotelev1">&gt; understanding of the MPI::Comm_World.Scatter Operation, It seem's  
</span><br>
<span class="quotelev1">&gt; as though a may be misunderstanding how the scatter operation  
</span><br>
<span class="quotelev1">&gt; works. Suppose i have an Array of x amount of doubles, let's say 3  
</span><br>
<span class="quotelev1">&gt; doubles that i want to spread across three processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     int rank, procs;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;procs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     double stat[3] ;
</span><br>
<span class="quotelev1">&gt;     stat[0] = 1.2;
</span><br>
<span class="quotelev1">&gt;     stat[1] = 65.3;
</span><br>
<span class="quotelev1">&gt;     stat[2] = 45.3;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     double test3[3];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (rank==0) {
</span><br>
<span class="quotelev1">&gt;     MPI::COMM_WORLD.Scatter(
</span><br>
<span class="quotelev1">&gt;         stat,
</span><br>
<span class="quotelev1">&gt;         1,
</span><br>
<span class="quotelev1">&gt;         MPI::DOUBLE,
</span><br>
<span class="quotelev1">&gt;         &amp;test3,
</span><br>
<span class="quotelev1">&gt;         1,
</span><br>
<span class="quotelev1">&gt;         MPI::DOUBLE,
</span><br>
<span class="quotelev1">&gt;         0);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;    std::cout &lt;&lt; rank &lt;&lt;&quot; rec'd &quot; &lt;&lt; test3[0] &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, this doesn't output what i'd like. I'd like: Process  
</span><br>
<span class="quotelev1">&gt; 0 to output 1.2, process 1 to output 65.3 and process 2 to output  
</span><br>
<span class="quotelev1">&gt; 45.3 etc etc. I apologise if this question is very trivial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Win John Lewis vouchers with BigSnapSearch.com Search now
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
<li><strong>Next message:</strong> <a href="7485.php">Matt Hughes: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Previous message:</strong> <a href="7483.php">Kevin Anthony Joy: "[OMPI users] Basic Scatter Operation"</a>
<li><strong>In reply to:</strong> <a href="7483.php">Kevin Anthony Joy: "[OMPI users] Basic Scatter Operation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7485.php">Matt Hughes: "Re: [OMPI users] Basic Scatter Operation"</a>
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
