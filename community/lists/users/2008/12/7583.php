<?
$subject_val = "Re: [OMPI users] sending message to the source(0) from other processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 14:07:48 2008" -->
<!-- isoreceived="20081223190748" -->
<!-- sent="Tue, 23 Dec 2008 14:07:43 -0500" -->
<!-- isosent="20081223190743" -->
<!-- name="Win Than Aung" -->
<!-- email="keshunli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending message to the source(0) from other processors" -->
<!-- id="9247a3360812231107h10574d8cqd5f9f0434dbe48f3_at_mail.gmail.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="49512CAB.8000102_at_sun.com" -->
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
<strong>Date:</strong> 2008-12-23 14:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7584.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7581.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PS： extra question qsub -I -q standby -l select=1:ncpus=8
<br>
mpirun -np 4 ./hello
<br>
running mpdallexit on steele-a137.rcac.purdue.edu
<br>
LAUNCHED mpd on steele-a137.rcac.purdue.edu  via
<br>
RUNNING: mpd on steele-a137.rcac.purdue.edu
<br>
steele-a137.rcac.purdue.edu_36959 (172.18.24.147)
<br>
time for 100 loops = 2.98023223877e-05 seconds
<br>
too few entries in machinefile
<br>
<p>the mpi program supposed to print 4 hello msg since there r four processors.
<br>
but for some reasons, it doesn't print
<br>
thanks
<br>
winthan
<br>
<p><p>On Tue, Dec 23, 2008 at 1:23 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Win Than Aung wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Recv(....) &lt;&lt; is it possible to receive the message sent from other
</span><br>
<span class="quotelev2">&gt;&gt; sources? I tried MPI_ANY_SOURCE in place of source but it doesn't work out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes of course.  Can you send a short example of what doesn't work?  The
</span><br>
<span class="quotelev1">&gt; example should presumably be less than about 20 lines.  Here is an example
</span><br>
<span class="quotelev1">&gt; that works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat a.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;  int np, me, sbuf = -1, rbuf = -2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev1">&gt;  if ( np &lt; 2 ) MPI_Abort(MPI_COMM_WORLD,-1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if ( me == 1 ) MPI_Send(&amp;sbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  if ( me == 0 ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;rbuf,1,MPI_INT,MPI_ANY_SOURCE,344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;   if ( rbuf == sbuf ) printf(&quot;Send/Recv self passed\n&quot;);
</span><br>
<span class="quotelev1">&gt;   else                printf(&quot;Send/Recv self FAILED\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; % mpicc a.c
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 a.out
</span><br>
<span class="quotelev1">&gt; Send/Recv self passed
</span><br>
<span class="quotelev1">&gt; %
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7583/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7584.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7581.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
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
