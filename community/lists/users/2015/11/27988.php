<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 08:34:43 2015" -->
<!-- isoreceived="20151104133443" -->
<!-- sent="Wed, 4 Nov 2015 22:34:40 +0900" -->
<!-- isosent="20151104133440" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_Wait stalls" -->
<!-- id="CAAkFZ5tOBdFtX38uC7CH8hj9JMyamuKdB2disREuV1XsD8PrjA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="21E2ED6B-5E85-429B-94E1-C922971EF1E9_at_gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-04 08:34:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27989.php">Ibrahim Ikhlawi: "[OMPI users] Simple example to multiply two matrix"</a>
<li><strong>Previous message:</strong> <a href="27987.php">ABE Hiroshi: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27987.php">ABE Hiroshi: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abe-san,
<br>
<p>you can be blocking on one side, and non blocking on the other side.
<br>
for example, one task can do MPI_Send, and the other MPI_Irecv and MPI_Wait.
<br>
<p>in order to avoid deadlock, your program should do
<br>
1. master MPI_Isend and start the workers
<br>
2. worker receive and process messages (in there is one recv per thread,
<br>
you can do MPI_Recv e.g. blocking recv)
<br>
3. master MPI_Wait the request used in MPI_Isend
<br>
4. do simulation
<br>
I do not know if some kind of synchronization is required between master
<br>
and workers.
<br>
the key point is you MPI_Wait after the workers have been started.
<br>
<p>I do not know all the details of your program, but you might avoid using
<br>
threads :
<br>
1. MPI_Isend
<br>
2. several MPI_Irecv
<br>
3. MPI_Waitall (or a loop with MPI_Waitany/MPI_Waitsome)
<br>
4. do simulation
<br>
<p>if you really want threads, an other option is to start the worker after
<br>
MPI_Waitany/MPI_Waitsome
<br>
<p>once again, I do not know your full program, so I can just guess.
<br>
you might also want to try an other MPI flavor (such as mpich), since your
<br>
program could be correct and the deadlock might be open MPI specific.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, November 4, 2015, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Gilles-san and all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought MPI_Isend kept the sent data and stacked up in somewhere waiting
</span><br>
<span class="quotelev1">&gt; corresponding MPI_Irecv.
</span><br>
<span class="quotelev1">&gt; The image of my code regarding MPI,
</span><br>
<span class="quotelev1">&gt; 1. send ALL tag-ed message to the other node (MPI_Isend) in master thread,
</span><br>
<span class="quotelev1">&gt; then launch worker threads and
</span><br>
<span class="quotelev1">&gt; 2. receive the corresponding tag-ed messages from the other node
</span><br>
<span class="quotelev1">&gt; (MPI_Irecv ) in the worker threads.
</span><br>
<span class="quotelev1">&gt; 3. do simulation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doesn&#226;&#128;&#153;t it work? How silly I was. I coded several sample programs but I
</span><br>
<span class="quotelev1">&gt; couldn&#226;&#128;&#153;t find the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, may I understand that both MPI_Send/Recv and MPI_Isend/Irecv must be
</span><br>
<span class="quotelev1">&gt; called sequencially just like POP/PUSH with stack?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With my simulation algorithms the order of send and receive messages
</span><br>
<span class="quotelev1">&gt; cannot be in sequencial in the default way. In that case how do you build
</span><br>
<span class="quotelev1">&gt; the MPI messaging. Should the order of the MPI messages send to the
</span><br>
<span class="quotelev1">&gt; destination node at first?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely
</span><br>
<span class="quotelev1">&gt; Hiroshi ABE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015/11/04 18:10&#227;&#128;&#129;Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Abe-san,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Isend followed by MPI_Wait is equivalent to MPI_Send
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Depending on message size and inflight messages, that can deadlock if
</span><br>
<span class="quotelev1">&gt; two tasks send to each other and no recv has been posted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ABE Hiroshi &lt;habe36_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear All,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Installed openmpi 1.10.0 and gcc-5.2 using Fink (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.finkproject.org">http://www.finkproject.org</a>) but nothing is changed with my code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regarding the MPI_Finalize error in my previous mail, it should be my
</span><br>
<span class="quotelev1">&gt; fault. I had removed all mpi stuff in /usr/local/ manually and the
</span><br>
<span class="quotelev1">&gt; openmpi-1.10.0 had been installed then the error message didn&#226;&#128;&#153;t appear now.
</span><br>
<span class="quotelev1">&gt; Maybe some old version of openmpi stuff still remained there.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Anyway, I found the reason of my problem. The code is :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; void
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Block::MPISendEqualInterChangeData( DIRECTION dir, int rank, int id ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   GetEqualInterChangeData( dir, cf[0] );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   int N = GetNumGrid();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   int nb = 6*N*N*1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   nb = 1010;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; //    float *buf = new float[ nb ];
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   float *buf = (float *)malloc( sizeof(float)*nb);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   for( int i = 0; i &lt; nb; i++ ) buf[i] = 0.0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Request req;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Status  status;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   int tag = 100 * id + (int)dir;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Isend( buf, nb, MPI_REAL4, rank, tag, MPI_COMM_WORLD, &amp;req );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Wait( &amp;req, &amp;status );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; //    delete [] buf;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   free( buf );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This works. If the &#226;&#128;&#156;nb&#226;&#128;&#157; value changes to more than &#226;&#128;&#156;1010&#226;&#128;&#157;, MPI_Wait
</span><br>
<span class="quotelev1">&gt; will stall.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This means the upper limit of MPI_Isend would be 4 x 1010 = 4040 bytes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If this is true, is there any way to increase this?. I guess this
</span><br>
<span class="quotelev1">&gt; should be wrong and there should be something wrong with my system.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any idea and suggestions are really appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2015/11/03 8:05&#227;&#128;&#129;Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Oct 29, 2015, at 10:24 PM, ABE Hiroshi &lt;habe36_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regarding my code I mentioned in my original mail, the behaviour is
</span><br>
<span class="quotelev1">&gt; very weird. MPI_Isend is called from the different named function, it works.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; And I wrote a sample program to try to reproduce my problem but it
</span><br>
<span class="quotelev1">&gt; works fine,  except the problem of MPI_Finalize.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; So I decided to make gcc-5.2 and make openmpi on it, which seems to
</span><br>
<span class="quotelev1">&gt; be a recommendation of the FINK project.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ok.  Per the prior mail, if you can make a small reproducer, that
</span><br>
<span class="quotelev1">&gt; would be most helpful in tracking down the issue.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ABE Hiroshi
</span><br>
<span class="quotelev1">&gt;  from Tokorozawa, JAPAN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/27987.php">http://www.open-mpi.org/community/lists/users/2015/11/27987.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27988/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27989.php">Ibrahim Ikhlawi: "[OMPI users] Simple example to multiply two matrix"</a>
<li><strong>Previous message:</strong> <a href="27987.php">ABE Hiroshi: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27987.php">ABE Hiroshi: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
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
