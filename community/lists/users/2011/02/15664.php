<?
$subject_val = "Re: [OMPI users] Selecting different processors during function";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 19 12:00:46 2011" -->
<!-- isoreceived="20110219170046" -->
<!-- sent="Sat, 19 Feb 2011 10:00:35 -0700" -->
<!-- isosent="20110219170035" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Selecting different processors during function" -->
<!-- id="23058B27-7084-4513-9C64-6DE36A3ADCF3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinR=PvF3tp8gR9rFhb7LjiRE05Rx4nJfBFooOVq_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Selecting different processors during function<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-19 12:00:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15665.php">DOHERTY, Greg: "[OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="15663.php">Alexandre Barrozo: "[OMPI users] Selecting different processors during function"</a>
<li><strong>In reply to:</strong> <a href="15663.php">Alexandre Barrozo: "[OMPI users] Selecting different processors during function"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your question actually doesn't make sense in an MPI application. In MPI, you would have two independent processes running. One does the send, and the other does the receive. Both processes are running all the time, each on its own processor.
<br>
<p>So you don't &quot;switch&quot; to another processor - the receiving process simply sits waiting for the message to arrive from the sender, and then proceeds to do the desired actions.
<br>
<p><p>On Feb 19, 2011, at 9:37 AM, Alexandre Barrozo wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to write a routine that, if a certain condition is met, it transfers a specific string from processor A to processor B. However, during this transfer, I have to access the  processor B within the same function (the function was accessed on A, but I need to go to B to put the transferred string on it's right place). The problem is that I have no idea how to change between processors while using one of them. Here's a sample of the code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for ( int j = 0; j &lt; atom-&gt;nlocal; j++ )
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         if ( rank != atom-&gt;tag[j] ) //condition for transfer
</span><br>
<span class="quotelev1">&gt;         { 
</span><br>
<span class="quotelev1">&gt;             dest = atom-&gt;tag[j];       //the one who needs to deliver to receive
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             atom-&gt;tag[j] = rank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             MPI_Isend( noisez[j], noisesize, MPI_DOUBLE, rank, 0, world, &amp;request);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*  I know this doesn't work, but it's just to get the idea of what I'm trying to do  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if( rank == dest ) //trying to access the destination processor
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;              for ( int n = 0; n &lt; atom-&gt;nlocal; n++ )
</span><br>
<span class="quotelev1">&gt;             {
</span><br>
<span class="quotelev1">&gt;               if( n =! atomtag[n] )    
</span><br>
<span class="quotelev1">&gt;               {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 MPI_Irecv( noisez[n], noisesize, MPI_DOUBLE, flag2, 0, world, &amp;request);
</span><br>
<span class="quotelev1">&gt;                 MPI_Wait(&amp;request,&amp;stat);
</span><br>
<span class="quotelev1">&gt;                 for ( int m = n; m &lt; atom-&gt;nlocal; m++ )
</span><br>
<span class="quotelev1">&gt;                     atomtag[m] = m;
</span><br>
<span class="quotelev1">&gt;                 break;
</span><br>
<span class="quotelev1">&gt;               }
</span><br>
<span class="quotelev1">&gt;               else if ( n == atom-&gt;nlocal -1)
</span><br>
<span class="quotelev1">&gt;               {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 MPI_Irecv( noisez[atom-&gt;nlocal], noisesize, MPI_DOUBLE, flag2, 0, world, &amp;request);
</span><br>
<span class="quotelev1">&gt;                 MPI_Wait(&amp;request,&amp;stat);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any function to call another processor while using one of them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alexandre
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
<li><strong>Next message:</strong> <a href="15665.php">DOHERTY, Greg: "[OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="15663.php">Alexandre Barrozo: "[OMPI users] Selecting different processors during function"</a>
<li><strong>In reply to:</strong> <a href="15663.php">Alexandre Barrozo: "[OMPI users] Selecting different processors during function"</a>
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
