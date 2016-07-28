<?
$subject_val = "Re: [OMPI users] sending message to the source(0) from other processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 14:56:21 2008" -->
<!-- isoreceived="20081223195621" -->
<!-- sent="Tue, 23 Dec 2008 13:56:16 -0600" -->
<!-- isosent="20081223195616" -->
<!-- name="Win Than Aung" -->
<!-- email="keshunli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending message to the source(0) from other processors" -->
<!-- id="9247a3360812231156m795ae044u49749b69f9ca2926_at_mail.gmail.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="1CB0156F-314A-4772-B35A-E14E8BBB3C6B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] sending message to the source(0) from other processors<br>
<strong>From:</strong> Win Than Aung (<em>keshunli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 14:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
<li><strong>Previous message:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
<li><strong>Reply:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks for your reply jeff
<br>
so i tried following
<br>
<p><p><p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;int np, me, sbuf = -1, rbuf = -2,mbuf=1000;
<br>
int data[2];
<br>
&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
<br>
&nbsp;if ( np &lt; 2 ) MPI_Abort(MPI_COMM_WORLD,-1);
<br>
<p>&nbsp;if ( me == 1 ) MPI_Send(&amp;sbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);
<br>
if(me==2) MPI_Send( &amp;mbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);
<br>
if ( me == 0 ) {
<br>
<p>MPI_Recv(data,2,MPI_INT,MPI_ANY_SOURCE,344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
<br>
&nbsp;}
<br>
<p>&nbsp;MPI_Finalize();
<br>
<p>&nbsp;return 0;
<br>
}
<br>
<p>it can successfuly receive the one sent from processor 1(me==1) but it
<br>
failed to receive the one sent from processor 2(me==2)
<br>
mpirun -np 3 hello
<br>
<p><p>thanks
<br>
winthan
<br>
On Tue, Dec 23, 2008 at 1:15 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This looks like a question for the MPICH2 developers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, it looks like you are using MPICH2, not Open MPI.  They are
</span><br>
<span class="quotelev1">&gt; entirely different software packages maintained by different people -- we're
</span><br>
<span class="quotelev1">&gt; not really qualified to answer questions about MPICH2.  The top-level API is
</span><br>
<span class="quotelev1">&gt; the same between the two (meaning that you can compile and run your app in
</span><br>
<span class="quotelev1">&gt; either Open MPI or MPICH2), but that's where the similarities end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 23, 2008, at 2:07 PM, Win Than Aung wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PS： extra question
</span><br>
<span class="quotelev2">&gt;&gt; qsub -I -q standby -l select=1:ncpus=8
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 ./hello
</span><br>
<span class="quotelev2">&gt;&gt; running mpdallexit on steele-a137.rcac.purdue.edu
</span><br>
<span class="quotelev2">&gt;&gt; LAUNCHED mpd on steele-a137.rcac.purdue.edu  via
</span><br>
<span class="quotelev2">&gt;&gt; RUNNING: mpd on steele-a137.rcac.purdue.edu
</span><br>
<span class="quotelev2">&gt;&gt; steele-a137.rcac.purdue.edu_36959 (172.18.24.147)
</span><br>
<span class="quotelev2">&gt;&gt; time for 100 loops = 2.98023223877e-05 seconds
</span><br>
<span class="quotelev2">&gt;&gt; too few entries in machinefile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the mpi program supposed to print 4 hello msg since there r four
</span><br>
<span class="quotelev2">&gt;&gt; processors.
</span><br>
<span class="quotelev2">&gt;&gt; but for some reasons, it doesn't print
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; winthan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 23, 2008 at 1:23 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Win Than Aung wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv(....) &lt;&lt; is it possible to receive the message sent from other
</span><br>
<span class="quotelev2">&gt;&gt; sources? I tried MPI_ANY_SOURCE in place of source but it doesn't work out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes of course.  Can you send a short example of what doesn't work?  The
</span><br>
<span class="quotelev2">&gt;&gt; example should presumably be less than about 20 lines.  Here is an example
</span><br>
<span class="quotelev2">&gt;&gt; that works:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % cat a.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;  int np, me, sbuf = -1, rbuf = -2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev2">&gt;&gt;  if ( np &lt; 2 ) MPI_Abort(MPI_COMM_WORLD,-1);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  if ( me == 1 ) MPI_Send(&amp;sbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;  if ( me == 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Recv(&amp;rbuf,1,MPI_INT,MPI_ANY_SOURCE,344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;  if ( rbuf == sbuf ) printf(&quot;Send/Recv self passed\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;  else                printf(&quot;Send/Recv self FAILED\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; % mpicc a.c
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; Send/Recv self passed
</span><br>
<span class="quotelev2">&gt;&gt; %
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
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7587/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
<li><strong>Previous message:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
<li><strong>Reply:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
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
