<?
$subject_val = "Re: [OMPI users] Problems Broadcasting/Scattering Data";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 12:04:24 2008" -->
<!-- isoreceived="20080108170424" -->
<!-- sent="Tue, 08 Jan 2008 18:05:04 +0100" -->
<!-- isosent="20080108170504" -->
<!-- name="Dino Rossegger" -->
<!-- email="dino.rossegger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Broadcasting/Scattering Data" -->
<!-- id="4783AD40.30801_at_gmx.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7A08A360-5978-4531-9D2D-3275EAE69F26_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Broadcasting/Scattering Data<br>
<strong>From:</strong> Dino Rossegger (<em>dino.rossegger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 12:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4791.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4789.php">George Bosilca: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4789.php">George Bosilca: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4791.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4791.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca schrieb:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2008, at 11:14 AM, Dino Rossegger wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, then the problem is that Scatter actually gets an array of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pointers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and sends these pointers trying to interpret them as doubles.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You either have to use several scatter commands or &quot;fold&quot; your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2D-Array into a one-dimensional array.
</span><br>
<span class="quotelev2">&gt;&gt; So neither MPI_Broadcast nor scatter can handle 2 dimensional arrays?
</span><br>
<span class="quotelev2">&gt;&gt; But also if it is like that, is it normal that there are only 0 in the
</span><br>
<span class="quotelev2">&gt;&gt; array? For me that sounds more as if the data isn't transmitted at all
</span><br>
<span class="quotelev2">&gt;&gt; and not that it isn't splitted correctly. But I'll try the folding,
</span><br>
<span class="quotelev2">&gt;&gt; maybe this will help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The array that get scattered is not initialized, so it is normal that 
</span><br>
<span class="quotelev1">&gt; everyone get a lot of zeros ... Moreover, the only operation you do on 
</span><br>
<span class="quotelev1">&gt; the data (multiplication) will only generate zeros out of zeros. Try 
</span><br>
<span class="quotelev1">&gt; setting some meaningful data in the stat array before the MPI_Scatter 
</span><br>
<span class="quotelev1">&gt; operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<p>In fact it is initialized, as I stated in my first mail I only left out 
<br>
the code where it gets initialized, since it reads the data from a file 
<br>
and that works (I have tested it).
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope this helps
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 8, 2008 3:54 PM, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a problem distributing a 2 dimensional array over 3 processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried  different methods to distribute the data (Broadcast, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Send/Recv,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scatter) but all of them didn't work for me. The output of the root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor (0 in my case) is always okay, the output of the others are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simple 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The Array stat is filled with entrys from a file (I left out the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generation of the Array Data since this is much code and it works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (tested the whole thing in &quot;single&quot; mode.))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here are the important parts of the Source Code:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; const int ARRAYSIZE = 150;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        int rank, anzprocs,recvcount,sendcnt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        MPI_Comm_size(MPI_COMM_WORLD,&amp;anzprocs);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        const int WORKING = ARRAYSIZE/anzprocs;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        double stat[ARRAYSIZE][2];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        double stathlp[WORKING][2];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        double stat2[WORKING][5];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        double stat3[anzprocs][ARRAYSIZE][5];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        if(rank==0)sendcnt=WORKING*2;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI::COMM_WORLD.Scatter(stat,sendcnt,MPI::DOUBLE,stathlp,WORKING*2,MPI::DOUBLE,0); 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        for(int i=0;i&lt;WORKING;i++){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                stat2[i][0]=stathlp[i][0];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                stat2[i][1]=stathlp[i][1];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                stat2[i][2]=(stat2[i][0]*stat2[i][1]);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                stat2[i][3]=(stat2[i][0]*stat2[i][0]);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                stat2[i][4]=(stat2[i][1]*stat2[i][1]);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                if (rank==0) recvcount=WORKING*5;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        MPI_Gather(&amp;stat2, WORKING*5, MPI_DOUBLE,&amp;stat3, recvcount, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_DOUBLE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        if (rank==0){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                cout &lt;&lt; stat3[0][0][0] &lt;&lt; endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                cout &lt;&lt; stat3[1][0][0] &lt;&lt; endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                cout &lt;&lt; stat3[2][0][0] &lt;&lt; endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know any further since my experience with OMPI is also not too
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; big. Is there anything specific I have to know about distributing 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dimensional Arrays? I don't think that the error is in the MPI_Gather,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; since I did a cout of the data on all nodes and the output was the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance and sorry for my bad english
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dino
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4791.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4789.php">George Bosilca: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4789.php">George Bosilca: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4791.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4791.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
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
