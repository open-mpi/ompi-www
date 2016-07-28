<?
$subject_val = "Re: [OMPI users] Process size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 08:07:18 2008" -->
<!-- isoreceived="20080530120718" -->
<!-- sent="Fri, 30 May 2008 14:09:33 +0200" -->
<!-- isosent="20080530120933" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process size" -->
<!-- id="483FEE7D.1010103_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9C60C30E-DD83-46E3-8D5C-14DF7FBAB93E_at_open-mpi.org" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-30 08:09:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5765.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Previous message:</strong> <a href="5763.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5767.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>Reply:</strong> <a href="5767.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>Some time ago I was studying CRCP component, I&#180;m not sure, but I 
<br>
remember that this component is used for bookmark exchange. You store 
<br>
these informations exactly for this (bookmark exchange)? After a 
<br>
successfully checkpoint operation you can free this memory?
<br>
<p>Thanks,
<br>
Leonardo
<br>
<p>Josh Hursey escribi&#243;:
<br>
<span class="quotelev1">&gt; Leonardo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are exactly correct. The CRCP module/component will grow the  
</span><br>
<span class="quotelev1">&gt; application size probably for every message that you send or receive.  
</span><br>
<span class="quotelev1">&gt; This is because the CRCP component tracks the signature {data_size,  
</span><br>
<span class="quotelev1">&gt; tag, communicator, peer} (*not* the contents of the message) of every  
</span><br>
<span class="quotelev1">&gt; message sent/received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have in development some fixes for the CRCP component to make it  
</span><br>
<span class="quotelev1">&gt; behave a bit better for large numbers of messages, and as a result  
</span><br>
<span class="quotelev1">&gt; will also help control the number of memory allocations needed by this  
</span><br>
<span class="quotelev1">&gt; component. Unfortunately it is not 100% ready for public use at the  
</span><br>
<span class="quotelev1">&gt; moment, but hopefully soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an aside: to clearly see the effect of turning the CRCP component  
</span><br>
<span class="quotelev1">&gt; on/off at runtime try the two commands below:
</span><br>
<span class="quotelev1">&gt; Without CRCP:
</span><br>
<span class="quotelev1">&gt;   shell$ mpirun -np 2 -am ft-enable-cr -mca crcp none simple-ping 20 1
</span><br>
<span class="quotelev1">&gt; With CRCP:
</span><br>
<span class="quotelev1">&gt;   shell$ mpirun -np 2 -am ft-enable-cr simple-ping 20 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 29, 2008, at 7:54 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I made some tests with a dummy &quot;ping&quot; application. Some memory  
</span><br>
<span class="quotelev2">&gt;&gt; problems occurred. On these tests I obtained the following results:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) OpenMPI (without FT):
</span><br>
<span class="quotelev2">&gt;&gt;   - delaying 1 second to send token to other node: orted and  
</span><br>
<span class="quotelev2">&gt;&gt; application size stable;
</span><br>
<span class="quotelev2">&gt;&gt;   - delaying 0 seconds to send token to other node: orted and  
</span><br>
<span class="quotelev2">&gt;&gt; application size stable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) OpenMPI (with CRCP FT):
</span><br>
<span class="quotelev2">&gt;&gt;   - delaying 1 second to send token to other node: orted stable and  
</span><br>
<span class="quotelev2">&gt;&gt; application size grow in the first seconds and establish;
</span><br>
<span class="quotelev2">&gt;&gt;   - delaying 0 seconds to send token to other node: orted stable and  
</span><br>
<span class="quotelev2">&gt;&gt; application size growing all the time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that it is something in the CRCP module/component...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;/softs/openmpi/include/mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;    double time_end, time_start;
</span><br>
<span class="quotelev2">&gt;&gt;    int count, rank, fim, x;
</span><br>
<span class="quotelev2">&gt;&gt;    char buffer[5] = &quot;test!&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if (3 &gt; argc) {
</span><br>
<span class="quotelev2">&gt;&gt;      printf(&quot;\n    Insuficient arguments (%d)\n\n    ping &lt;times&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;delay&gt;\n\n&quot;, argc);
</span><br>
<span class="quotelev2">&gt;&gt;      exit(1);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if (MPI_Init(&amp;argc, &amp;argv) == MPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt;        time_start = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Comm_size (MPI_COMM_WORLD, &amp;count);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev2">&gt;&gt;        for (fim = 1; fim &lt;= atoi(argv[1]); fim++) {
</span><br>
<span class="quotelev2">&gt;&gt;            if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;                printf(&quot;(%d) sent token to (%d)\n&quot;, rank, rank+1);
</span><br>
<span class="quotelev2">&gt;&gt;                fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;                sleep(atoi(argv[2]));
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_Send(buffer, 5, MPI_CHAR, 1, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_Recv(buffer, 5, MPI_CHAR, count-1, 1,  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;            } else {
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_Recv(buffer, 5, MPI_CHAR, rank-1, 1,  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;                printf(&quot;(%d) sent token to (%d)\n&quot;, rank,  
</span><br>
<span class="quotelev2">&gt;&gt; (rank==(count-1) ? 0 : rank+1));
</span><br>
<span class="quotelev2">&gt;&gt;                fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;                sleep(atoi(argv[2]));
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_Send(buffer, 5, MPI_CHAR, (rank==(count-1) ? 0 :  
</span><br>
<span class="quotelev2">&gt;&gt; rank+1), 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    time_end = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;%f\n&quot;, time_end - time_start);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5765.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Previous message:</strong> <a href="5763.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5767.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>Reply:</strong> <a href="5767.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
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
