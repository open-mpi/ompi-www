<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 10:36:53 2015" -->
<!-- isoreceived="20151104153653" -->
<!-- sent="Wed, 4 Nov 2015 10:36:49 -0500" -->
<!-- isosent="20151104153649" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="CAMJJpkUuiSJ3g2JDgjsCEXOwPjGJBdnsU6iofpfSgouu6OMP1A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="ED444F3F-C8E9-4745-9C3B-FDD204F0697F_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Wait stalls<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-04 10:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27991.php">Ibrahim Ikhlawi: "[OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Previous message:</strong> <a href="27989.php">Ibrahim Ikhlawi: "[OMPI users] Simple example to multiply two matrix"</a>
<li><strong>In reply to:</strong> <a href="27985.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A reproducer without the receiver part limited usability.
<br>
<p>1) Have you checked that your code doesn't suffer from the eager problem?
<br>
It might happen that if your message size is under the eager limit, your
<br>
perception is that the code works when in fact your message is just on the
<br>
unexpected queue on the receiver, and will potentially never be matched. On
<br>
the opposite, when the length of the message is larger than the eager size
<br>
(which is network dependent), the code will stall obviously in MPI_Wait as
<br>
the send is never matched. The latter is the expected and defined behavior
<br>
based on the MPI standard.
<br>
<p>2) In order to rule this out add a lock around your sends to make sure that
<br>
1) a sequential version of the code is valid; and 2) that we are not facing
<br>
some consistent thread interleaving issues. If this step successfully
<br>
complete, then we can start looking deeper in the OMPI internals for a bug.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Nov 4, 2015 at 12:34 AM, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Installed openmpi 1.10.0 and gcc-5.2 using Fink (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.finkproject.org">http://www.finkproject.org</a>) but nothing is changed with my code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the MPI_Finalize error in my previous mail, it should be my
</span><br>
<span class="quotelev1">&gt; fault. I had removed all mpi stuff in /usr/local/ manually and the
</span><br>
<span class="quotelev1">&gt; openmpi-1.10.0 had been installed then the error message didn&#226;&#128;&#153;t appear now.
</span><br>
<span class="quotelev1">&gt; Maybe some old version of openmpi stuff still remained there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I found the reason of my problem. The code is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; Block::MPISendEqualInterChangeData( DIRECTION dir, int rank, int id ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     GetEqualInterChangeData( dir, cf[0] );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int N = GetNumGrid();
</span><br>
<span class="quotelev1">&gt;     int nb = 6*N*N*1;
</span><br>
<span class="quotelev1">&gt;     nb = 1010;
</span><br>
<span class="quotelev1">&gt; //    float *buf = new float[ nb ];
</span><br>
<span class="quotelev1">&gt;     float *buf = (float *)malloc( sizeof(float)*nb);
</span><br>
<span class="quotelev1">&gt;     for( int i = 0; i &lt; nb; i++ ) buf[i] = 0.0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Request req;
</span><br>
<span class="quotelev1">&gt;     MPI_Status  status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int tag = 100 * id + (int)dir;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Isend( buf, nb, MPI_REAL4, rank, tag, MPI_COMM_WORLD, &amp;req );
</span><br>
<span class="quotelev1">&gt;     MPI_Wait( &amp;req, &amp;status );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //    delete [] buf;
</span><br>
<span class="quotelev1">&gt;     free( buf );
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works. If the &#226;&#128;&#156;nb&#226;&#128;&#157; value changes to more than &#226;&#128;&#156;1010&#226;&#128;&#157;, MPI_Wait will
</span><br>
<span class="quotelev1">&gt; stall.
</span><br>
<span class="quotelev1">&gt; This means the upper limit of MPI_Isend would be 4 x 1010 = 4040 bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this is true, is there any way to increase this?. I guess this should
</span><br>
<span class="quotelev1">&gt; be wrong and there should be something wrong with my system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea and suggestions are really appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015/11/03 8:05&#227;&#128;&#129;Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 29, 2015, at 10:24 PM, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regarding my code I mentioned in my original mail, the behaviour is
</span><br>
<span class="quotelev1">&gt; very weird. MPI_Isend is called from the different named function, it works.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And I wrote a sample program to try to reproduce my problem but it
</span><br>
<span class="quotelev1">&gt; works fine,  except the problem of MPI_Finalize.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I decided to make gcc-5.2 and make openmpi on it, which seems to be
</span><br>
<span class="quotelev1">&gt; a recommendation of the FINK project.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok.  Per the prior mail, if you can make a small reproducer, that would
</span><br>
<span class="quotelev1">&gt; be most helpful in tracking down the issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/27985.php">http://www.open-mpi.org/community/lists/users/2015/11/27985.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27990/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27991.php">Ibrahim Ikhlawi: "[OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Previous message:</strong> <a href="27989.php">Ibrahim Ikhlawi: "[OMPI users] Simple example to multiply two matrix"</a>
<li><strong>In reply to:</strong> <a href="27985.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
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
