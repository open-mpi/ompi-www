<?
$subject_val = "Re: [OMPI users] Problems Broadcasting/Scattering Data";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 10:57:30 2008" -->
<!-- isoreceived="20080108155730" -->
<!-- sent="Tue, 8 Jan 2008 16:57:25 +0100" -->
<!-- isosent="20080108155725" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Broadcasting/Scattering Data" -->
<!-- id="9b0da5ce0801080757j3648ceaci7d66f8800373cd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47838EAC.8060208_at_gmx.at" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 10:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4788.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4786.php">Dino Rossegger: "[OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4786.php">Dino Rossegger: "[OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4788.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4788.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure if i understad your code correctly -
<br>
i imagine you want to use the scatter command to
<br>
broadcast the contents of your 2-dimensional array stat,
<br>
is that right?
<br>
<p>If so, then the problem is that Scatter actually gets an array of pointers
<br>
and sends these pointers trying to interpret them as doubles.
<br>
<p>You either have to use several scatter commands or &quot;fold&quot; your
<br>
2D-Array into a one-dimensional array.
<br>
<p>Hope this helps
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Jan 8, 2008 3:54 PM, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have a problem distributing a 2 dimensional array over 3 processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried  different methods to distribute the data (Broadcast, Send/Recv,
</span><br>
<span class="quotelev1">&gt; Scatter) but all of them didn't work for me. The output of the root
</span><br>
<span class="quotelev1">&gt; processor (0 in my case) is always okay, the output of the others are
</span><br>
<span class="quotelev1">&gt; simple 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Array stat is filled with entrys from a file (I left out the
</span><br>
<span class="quotelev1">&gt; generation of the Array Data since this is much code and it works
</span><br>
<span class="quotelev1">&gt; (tested the whole thing in &quot;single&quot; mode.))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the important parts of the Source Code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; const int ARRAYSIZE = 150;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;         int rank, anzprocs,recvcount,sendcnt;
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size(MPI_COMM_WORLD,&amp;anzprocs);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         const int WORKING = ARRAYSIZE/anzprocs;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         double stat[ARRAYSIZE][2];
</span><br>
<span class="quotelev1">&gt;         double stathlp[WORKING][2];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         double stat2[WORKING][5];
</span><br>
<span class="quotelev1">&gt;         double stat3[anzprocs][ARRAYSIZE][5];
</span><br>
<span class="quotelev1">&gt;         if(rank==0)sendcnt=WORKING*2;
</span><br>
<span class="quotelev1">&gt;         MPI::COMM_WORLD.Scatter(stat,sendcnt,MPI::DOUBLE,stathlp,WORKING*2,MPI::DOUBLE,0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for(int i=0;i&lt;WORKING;i++){
</span><br>
<span class="quotelev1">&gt;                 stat2[i][0]=stathlp[i][0];
</span><br>
<span class="quotelev1">&gt;                 stat2[i][1]=stathlp[i][1];
</span><br>
<span class="quotelev1">&gt;                 stat2[i][2]=(stat2[i][0]*stat2[i][1]);
</span><br>
<span class="quotelev1">&gt;                 stat2[i][3]=(stat2[i][0]*stat2[i][0]);
</span><br>
<span class="quotelev1">&gt;                 stat2[i][4]=(stat2[i][1]*stat2[i][1]);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;                 if (rank==0) recvcount=WORKING*5;
</span><br>
<span class="quotelev1">&gt;         MPI_Gather(&amp;stat2, WORKING*5, MPI_DOUBLE,&amp;stat3, recvcount, MPI_DOUBLE,
</span><br>
<span class="quotelev1">&gt; 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         if (rank==0){
</span><br>
<span class="quotelev1">&gt;                 cout &lt;&lt; stat3[0][0][0] &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;                 cout &lt;&lt; stat3[1][0][0] &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;                 cout &lt;&lt; stat3[2][0][0] &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know any further since my experience with OMPI is also not too
</span><br>
<span class="quotelev1">&gt; big. Is there anything specific I have to know about distributing 2
</span><br>
<span class="quotelev1">&gt; Dimensional Arrays? I don't think that the error is in the MPI_Gather,
</span><br>
<span class="quotelev1">&gt; since I did a cout of the data on all nodes and the output was the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance and sorry for my bad english
</span><br>
<span class="quotelev1">&gt; Dino
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4788.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4786.php">Dino Rossegger: "[OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4786.php">Dino Rossegger: "[OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4788.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4788.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
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
