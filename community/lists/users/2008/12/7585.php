<?
$subject_val = "Re: [OMPI users] sending message to the source(0) from other processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 14:16:04 2008" -->
<!-- isoreceived="20081223191604" -->
<!-- sent="Tue, 23 Dec 2008 14:15:59 -0500" -->
<!-- isosent="20081223191559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending message to the source(0) from other processors" -->
<!-- id="1CB0156F-314A-4772-B35A-E14E8BBB3C6B_at_cisco.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="9247a3360812231107h10574d8cqd5f9f0434dbe48f3_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 14:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7584.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7583.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like a question for the MPICH2 developers.
<br>
<p>Specifically, it looks like you are using MPICH2, not Open MPI.  They  
<br>
are entirely different software packages maintained by different  
<br>
people -- we're not really qualified to answer questions about  
<br>
MPICH2.  The top-level API is the same between the two (meaning that  
<br>
you can compile and run your app in either Open MPI or MPICH2), but  
<br>
that's where the similarities end.
<br>
<p><p>On Dec 23, 2008, at 2:07 PM, Win Than Aung wrote:
<br>
<p><span class="quotelev1">&gt; PS： extra question
</span><br>
<span class="quotelev1">&gt; qsub -I -q standby -l select=1:ncpus=8
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 ./hello
</span><br>
<span class="quotelev1">&gt; running mpdallexit on steele-a137.rcac.purdue.edu
</span><br>
<span class="quotelev1">&gt; LAUNCHED mpd on steele-a137.rcac.purdue.edu  via
</span><br>
<span class="quotelev1">&gt; RUNNING: mpd on steele-a137.rcac.purdue.edu
</span><br>
<span class="quotelev1">&gt; steele-a137.rcac.purdue.edu_36959 (172.18.24.147)
</span><br>
<span class="quotelev1">&gt; time for 100 loops = 2.98023223877e-05 seconds
</span><br>
<span class="quotelev1">&gt; too few entries in machinefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the mpi program supposed to print 4 hello msg since there r four  
</span><br>
<span class="quotelev1">&gt; processors.
</span><br>
<span class="quotelev1">&gt; but for some reasons, it doesn't print
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; winthan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 23, 2008 at 1:23 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Win Than Aung wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Recv(....) &lt;&lt; is it possible to receive the message sent from  
</span><br>
<span class="quotelev1">&gt; other sources? I tried MPI_ANY_SOURCE in place of source but it  
</span><br>
<span class="quotelev1">&gt; doesn't work out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes of course.  Can you send a short example of what doesn't work?   
</span><br>
<span class="quotelev1">&gt; The example should presumably be less than about 20 lines.  Here is  
</span><br>
<span class="quotelev1">&gt; an example that works:
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
<span class="quotelev1">&gt;   MPI_Recv(&amp;rbuf,1,MPI_INT,MPI_ANY_SOURCE, 
</span><br>
<span class="quotelev1">&gt; 344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7584.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7583.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
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
