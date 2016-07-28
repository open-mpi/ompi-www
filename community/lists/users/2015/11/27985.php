<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 00:34:45 2015" -->
<!-- isoreceived="20151104053445" -->
<!-- sent="Wed, 4 Nov 2015 14:34:37 +0900" -->
<!-- isosent="20151104053437" -->
<!-- name="ABE Hiroshi" -->
<!-- email="habe36_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="ED444F3F-C8E9-4745-9C3B-FDD204F0697F_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6CEA97B2-A162-42D5-ADBC-05DB7C5E3776_at_cisco.com" -->
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
<strong>From:</strong> ABE Hiroshi (<em>habe36_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-04 00:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27990.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27990.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>Installed openmpi 1.10.0 and gcc-5.2 using Fink (<a href="http://www.finkproject.org">http://www.finkproject.org</a>) but nothing is changed with my code.
<br>
<p>Regarding the MPI_Finalize error in my previous mail, it should be my fault. I had removed all mpi stuff in /usr/local/ manually and the openmpi-1.10.0 had been installed then the error message didn&#226;&#128;&#153;t appear now. Maybe some old version of openmpi stuff still remained there.
<br>
<p>Anyway, I found the reason of my problem. The code is :
<br>
<p>void
<br>
Block::MPISendEqualInterChangeData( DIRECTION dir, int rank, int id ) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;GetEqualInterChangeData( dir, cf[0] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int N = GetNumGrid();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int nb = 6*N*N*1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nb = 1010;
<br>
//    float *buf = new float[ nb ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float *buf = (float *)malloc( sizeof(float)*nb);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for( int i = 0; i &lt; nb; i++ ) buf[i] = 0.0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status  status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int tag = 100 * id + (int)dir;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend( buf, nb, MPI_REAL4, rank, tag, MPI_COMM_WORLD, &amp;req );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait( &amp;req, &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
//    delete [] buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free( buf );
<br>
}
<br>
<p>This works. If the &#226;&#128;&#156;nb&#226;&#128;&#157; value changes to more than &#226;&#128;&#156;1010&#226;&#128;&#157;, MPI_Wait will stall.
<br>
This means the upper limit of MPI_Isend would be 4 x 1010 = 4040 bytes.
<br>
<p>If this is true, is there any way to increase this?. I guess this should be wrong and there should be something wrong with my system. 
<br>
<p>Any idea and suggestions are really appreciated.
<br>
<p>Thank you.
<br>
<p>2015/11/03 8:05&#227;&#128;&#129;Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
<br>
<p><span class="quotelev1">&gt; On Oct 29, 2015, at 10:24 PM, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regarding my code I mentioned in my original mail, the behaviour is very weird. MPI_Isend is called from the different named function, it works.
</span><br>
<span class="quotelev2">&gt;&gt; And I wrote a sample program to try to reproduce my problem but it works fine,  except the problem of MPI_Finalize.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I decided to make gcc-5.2 and make openmpi on it, which seems to be a recommendation of the FINK project.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.  Per the prior mail, if you can make a small reproducer, that would be most helpful in tracking down the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<p>ABE Hiroshi
<br>
&nbsp;from Tokorozawa, JAPAN
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27990.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27990.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
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
