<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 07:54:59 2015" -->
<!-- isoreceived="20151104125459" -->
<!-- sent="Wed, 4 Nov 2015 21:54:50 +0900" -->
<!-- isosent="20151104125450" -->
<!-- name="ABE Hiroshi" -->
<!-- email="habe36_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_Wait stalls" -->
<!-- id="21E2ED6B-5E85-429B-94E1-C922971EF1E9_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="qygjr0x8obnmpkqgl90ipuut.1446628202980_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_Wait stalls<br>
<strong>From:</strong> ABE Hiroshi (<em>habe36_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-04 07:54:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27988.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27988.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27988.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles-san and all,
<br>
<p>I thought MPI_Isend kept the sent data and stacked up in somewhere waiting corresponding MPI_Irecv.
<br>
The image of my code regarding MPI,
<br>
1. send ALL tag-ed message to the other node (MPI_Isend) in master thread, then launch worker threads and
<br>
2. receive the corresponding tag-ed messages from the other node (MPI_Irecv ) in the worker threads.
<br>
3. do simulation
<br>
<p>Doesn&#226;&#128;&#153;t it work? How silly I was. I coded several sample programs but I couldn&#226;&#128;&#153;t find the problem.
<br>
<p>Okay, may I understand that both MPI_Send/Recv and MPI_Isend/Irecv must be called sequencially just like POP/PUSH with stack?
<br>
<p>With my simulation algorithms the order of send and receive messages cannot be in sequencial in the default way. In that case how do you build the MPI messaging. Should the order of the MPI messages send to the destination node at first?
<br>
<p>Thank you in advance for your suggestions.
<br>
<p>Sincerely
<br>
Hiroshi ABE
<br>
<p>2015/11/04 18:10&#227;&#128;&#129;Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
<br>
<p><span class="quotelev1">&gt; Abe-san,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Isend followed by MPI_Wait is equivalent to MPI_Send
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Depending on message size and inflight messages, that can deadlock if two tasks send to each other and no recv has been posted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Installed openmpi 1.10.0 and gcc-5.2 using Fink (<a href="http://www.finkproject.org">http://www.finkproject.org</a>) but nothing is changed with my code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regarding the MPI_Finalize error in my previous mail, it should be my fault. I had removed all mpi stuff in /usr/local/ manually and the openmpi-1.10.0 had been installed then the error message didn&#226;&#128;&#153;t appear now. Maybe some old version of openmpi stuff still remained there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, I found the reason of my problem. The code is :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; void
</span><br>
<span class="quotelev2">&gt;&gt; Block::MPISendEqualInterChangeData( DIRECTION dir, int rank, int id ) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   GetEqualInterChangeData( dir, cf[0] );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   int N = GetNumGrid();
</span><br>
<span class="quotelev2">&gt;&gt;   int nb = 6*N*N*1;
</span><br>
<span class="quotelev2">&gt;&gt;   nb = 1010;
</span><br>
<span class="quotelev2">&gt;&gt; //    float *buf = new float[ nb ];
</span><br>
<span class="quotelev2">&gt;&gt;   float *buf = (float *)malloc( sizeof(float)*nb);
</span><br>
<span class="quotelev2">&gt;&gt;   for( int i = 0; i &lt; nb; i++ ) buf[i] = 0.0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Request req;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Status  status;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   int tag = 100 * id + (int)dir;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Isend( buf, nb, MPI_REAL4, rank, tag, MPI_COMM_WORLD, &amp;req );
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Wait( &amp;req, &amp;status );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; //    delete [] buf;
</span><br>
<span class="quotelev2">&gt;&gt;   free( buf );
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This works. If the &#226;&#128;&#156;nb&#226;&#128;&#157; value changes to more than &#226;&#128;&#156;1010&#226;&#128;&#157;, MPI_Wait will stall.
</span><br>
<span class="quotelev2">&gt;&gt; This means the upper limit of MPI_Isend would be 4 x 1010 = 4040 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If this is true, is there any way to increase this?. I guess this should be wrong and there should be something wrong with my system. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea and suggestions are really appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2015/11/03 8:05&#227;&#128;&#129;Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 29, 2015, at 10:24 PM, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regarding my code I mentioned in my original mail, the behaviour is very weird. MPI_Isend is called from the different named function, it works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And I wrote a sample program to try to reproduce my problem but it works fine,  except the problem of MPI_Finalize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I decided to make gcc-5.2 and make openmpi on it, which seems to be a recommendation of the FINK project.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok.  Per the prior mail, if you can make a small reproducer, that would be most helpful in tracking down the issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<p>ABE Hiroshi
<br>
&nbsp;from Tokorozawa, JAPAN
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27988.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27988.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27988.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
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
