<?
$subject_val = "Re: [OMPI users] Process size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 09:33:14 2008" -->
<!-- isoreceived="20080530133314" -->
<!-- sent="Fri, 30 May 2008 09:33:15 -0400" -->
<!-- isosent="20080530133315" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process size" -->
<!-- id="849957B3-60A6-44E7-8EB8-A4CD2AFA65D3_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="483FEE7D.1010103_at_aomail.uab.es" -->
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
<strong>Date:</strong> 2008-05-30 09:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5768.php">Andreas Schäfer: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5766.php">Jeff Squyres: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="5764.php">Leonardo Fialho: "Re: [OMPI users] Process size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Leonardo,
<br>
<p>The CRCP 'coord' component implements the bookmark exchange. I store  
<br>
the message signatures for the bookmark exchange. Since I am  
<br>
implementing this above the point-to-point stack in Open MPI (PML) I  
<br>
need to keep track of this message information to implement post- 
<br>
checkpoint resolution of drained messages.
<br>
<p>After a successful checkpoint operation I should be able to free the  
<br>
memory for most of the messages, excluding those that were drained  
<br>
during the checkpoint operation but not fully matched. Unfortunately  
<br>
when I looked back at the code I noticed that I was *not* freeing any  
<br>
memory, but continuing to append messages per usual. This works  
<br>
correctly, but becomes a resource and performance problem fairly  
<br>
quickly for large numbers of messages.
<br>
<p>The re-work of the 'coord' component that I am currently working on  
<br>
will be more careful with memory. I'll let you know when the new  
<br>
component is made available.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On May 30, 2008, at 8:09 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some time ago I was studying CRCP component, I&#180;m not sure, but I
</span><br>
<span class="quotelev1">&gt; remember that this component is used for bookmark exchange. You store
</span><br>
<span class="quotelev1">&gt; these informations exactly for this (bookmark exchange)? After a
</span><br>
<span class="quotelev1">&gt; successfully checkpoint operation you can free this memory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh Hursey escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You are exactly correct. The CRCP module/component will grow the
</span><br>
<span class="quotelev2">&gt;&gt; application size probably for every message that you send or receive.
</span><br>
<span class="quotelev2">&gt;&gt; This is because the CRCP component tracks the signature {data_size,
</span><br>
<span class="quotelev2">&gt;&gt; tag, communicator, peer} (*not* the contents of the message) of every
</span><br>
<span class="quotelev2">&gt;&gt; message sent/received.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have in development some fixes for the CRCP component to make it
</span><br>
<span class="quotelev2">&gt;&gt; behave a bit better for large numbers of messages, and as a result
</span><br>
<span class="quotelev2">&gt;&gt; will also help control the number of memory allocations needed by  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; component. Unfortunately it is not 100% ready for public use at the
</span><br>
<span class="quotelev2">&gt;&gt; moment, but hopefully soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As an aside: to clearly see the effect of turning the CRCP component
</span><br>
<span class="quotelev2">&gt;&gt; on/off at runtime try the two commands below:
</span><br>
<span class="quotelev2">&gt;&gt; Without CRCP:
</span><br>
<span class="quotelev2">&gt;&gt;   shell$ mpirun -np 2 -am ft-enable-cr -mca crcp none simple-ping  
</span><br>
<span class="quotelev2">&gt;&gt; 20 1
</span><br>
<span class="quotelev2">&gt;&gt; With CRCP:
</span><br>
<span class="quotelev2">&gt;&gt;   shell$ mpirun -np 2 -am ft-enable-cr simple-ping 20 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 29, 2008, at 7:54 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I made some tests with a dummy &quot;ping&quot; application. Some memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems occurred. On these tests I obtained the following results:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) OpenMPI (without FT):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - delaying 1 second to send token to other node: orted and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application size stable;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - delaying 0 seconds to send token to other node: orted and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application size stable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) OpenMPI (with CRCP FT):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - delaying 1 second to send token to other node: orted stable and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application size grow in the first seconds and establish;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - delaying 0 seconds to send token to other node: orted stable and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application size growing all the time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that it is something in the CRCP module/component...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;/softs/openmpi/include/mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    double time_end, time_start;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int count, rank, fim, x;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char buffer[5] = &quot;test!&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (3 &gt; argc) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      printf(&quot;\n    Insuficient arguments (%d)\n\n    ping &lt;times&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;delay&gt;\n\n&quot;, argc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      exit(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (MPI_Init(&amp;argc, &amp;argv) == MPI_SUCCESS) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        time_start = MPI_Wtime();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Comm_size (MPI_COMM_WORLD, &amp;count);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        for (fim = 1; fim &lt;= atoi(argv[1]); fim++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            if (rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                printf(&quot;(%d) sent token to (%d)\n&quot;, rank, rank+1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                fflush(stdout);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                sleep(atoi(argv[2]));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MPI_Send(buffer, 5, MPI_CHAR, 1, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MPI_Recv(buffer, 5, MPI_CHAR, count-1, 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MPI_Recv(buffer, 5, MPI_CHAR, rank-1, 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                printf(&quot;(%d) sent token to (%d)\n&quot;, rank,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (rank==(count-1) ? 0 : rank+1));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                fflush(stdout);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                sleep(atoi(argv[2]));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MPI_Send(buffer, 5, MPI_CHAR, (rank==(count-1) ? 0 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank+1), 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    time_end = MPI_Wtime();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        printf(&quot;%f\n&quot;, time_end - time_start);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5768.php">Andreas Schäfer: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5766.php">Jeff Squyres: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="5764.php">Leonardo Fialho: "Re: [OMPI users] Process size"</a>
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
