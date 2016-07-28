<?
$subject_val = "Re: [OMPI users] Process size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 10:42:18 2008" -->
<!-- isoreceived="20080529144218" -->
<!-- sent="Thu, 29 May 2008 10:42:11 -0400" -->
<!-- isosent="20080529144211" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process size" -->
<!-- id="9C60C30E-DD83-46E3-8D5C-14DF7FBAB93E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="483E9971.7080901_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process size<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 10:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5750.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Previous message:</strong> <a href="5748.php">Leonardo Fialho: "[OMPI users] Process size"</a>
<li><strong>In reply to:</strong> <a href="5748.php">Leonardo Fialho: "[OMPI users] Process size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5764.php">Leonardo Fialho: "Re: [OMPI users] Process size"</a>
<li><strong>Reply:</strong> <a href="5764.php">Leonardo Fialho: "Re: [OMPI users] Process size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Leonardo,
<br>
<p>You are exactly correct. The CRCP module/component will grow the  
<br>
application size probably for every message that you send or receive.  
<br>
This is because the CRCP component tracks the signature {data_size,  
<br>
tag, communicator, peer} (*not* the contents of the message) of every  
<br>
message sent/received.
<br>
<p>I have in development some fixes for the CRCP component to make it  
<br>
behave a bit better for large numbers of messages, and as a result  
<br>
will also help control the number of memory allocations needed by this  
<br>
component. Unfortunately it is not 100% ready for public use at the  
<br>
moment, but hopefully soon.
<br>
<p>As an aside: to clearly see the effect of turning the CRCP component  
<br>
on/off at runtime try the two commands below:
<br>
Without CRCP:
<br>
&nbsp;&nbsp;shell$ mpirun -np 2 -am ft-enable-cr -mca crcp none simple-ping 20 1
<br>
With CRCP:
<br>
&nbsp;&nbsp;shell$ mpirun -np 2 -am ft-enable-cr simple-ping 20 1
<br>
<p>-- Josh
<br>
<p>On May 29, 2008, at 7:54 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made some tests with a dummy &quot;ping&quot; application. Some memory  
</span><br>
<span class="quotelev1">&gt; problems occurred. On these tests I obtained the following results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) OpenMPI (without FT):
</span><br>
<span class="quotelev1">&gt;   - delaying 1 second to send token to other node: orted and  
</span><br>
<span class="quotelev1">&gt; application size stable;
</span><br>
<span class="quotelev1">&gt;   - delaying 0 seconds to send token to other node: orted and  
</span><br>
<span class="quotelev1">&gt; application size stable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) OpenMPI (with CRCP FT):
</span><br>
<span class="quotelev1">&gt;   - delaying 1 second to send token to other node: orted stable and  
</span><br>
<span class="quotelev1">&gt; application size grow in the first seconds and establish;
</span><br>
<span class="quotelev1">&gt;   - delaying 0 seconds to send token to other node: orted stable and  
</span><br>
<span class="quotelev1">&gt; application size growing all the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that it is something in the CRCP module/component...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;/softs/openmpi/include/mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;    double time_end, time_start;
</span><br>
<span class="quotelev1">&gt;    int count, rank, fim, x;
</span><br>
<span class="quotelev1">&gt;    char buffer[5] = &quot;test!&quot;;
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (3 &gt; argc) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;\n    Insuficient arguments (%d)\n\n    ping &lt;times&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;delay&gt;\n\n&quot;, argc);
</span><br>
<span class="quotelev1">&gt;      exit(1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (MPI_Init(&amp;argc, &amp;argv) == MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;        time_start = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_size (MPI_COMM_WORLD, &amp;count);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev1">&gt;        for (fim = 1; fim &lt;= atoi(argv[1]); fim++) {
</span><br>
<span class="quotelev1">&gt;            if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;                printf(&quot;(%d) sent token to (%d)\n&quot;, rank, rank+1);
</span><br>
<span class="quotelev1">&gt;                fflush(stdout);
</span><br>
<span class="quotelev1">&gt;                sleep(atoi(argv[2]));
</span><br>
<span class="quotelev1">&gt;                MPI_Send(buffer, 5, MPI_CHAR, 1, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                MPI_Recv(buffer, 5, MPI_CHAR, count-1, 1,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;            } else {
</span><br>
<span class="quotelev1">&gt;                MPI_Recv(buffer, 5, MPI_CHAR, rank-1, 1,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;                printf(&quot;(%d) sent token to (%d)\n&quot;, rank,  
</span><br>
<span class="quotelev1">&gt; (rank==(count-1) ? 0 : rank+1));
</span><br>
<span class="quotelev1">&gt;                fflush(stdout);
</span><br>
<span class="quotelev1">&gt;                sleep(atoi(argv[2]));
</span><br>
<span class="quotelev1">&gt;                MPI_Send(buffer, 5, MPI_CHAR, (rank==(count-1) ? 0 :  
</span><br>
<span class="quotelev1">&gt; rank+1), 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    time_end = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;        printf(&quot;%f\n&quot;, time_end - time_start);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="5750.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Previous message:</strong> <a href="5748.php">Leonardo Fialho: "[OMPI users] Process size"</a>
<li><strong>In reply to:</strong> <a href="5748.php">Leonardo Fialho: "[OMPI users] Process size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5764.php">Leonardo Fialho: "Re: [OMPI users] Process size"</a>
<li><strong>Reply:</strong> <a href="5764.php">Leonardo Fialho: "Re: [OMPI users] Process size"</a>
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
