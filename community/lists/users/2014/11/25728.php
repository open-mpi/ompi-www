<?
$subject_val = "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 08:58:39 2014" -->
<!-- isoreceived="20141110135839" -->
<!-- sent="Mon, 10 Nov 2014 13:58:29 +0000" -->
<!-- isosent="20141110135829" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wtime not working with -mno-sse flag" -->
<!-- id="2338ECE2-C3F5-4141-BD4D-E5CF73730F38_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5460BF15.5070801_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Wtime not working with -mno-sse flag<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 08:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25729.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<li><strong>Previous message:</strong> <a href="25727.php">maxinator333: "[OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<li><strong>In reply to:</strong> <a href="25727.php">maxinator333: "[OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25729.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On some platforms, the MPI_Wtime function essentially uses gettimeofday() under the covers.
<br>
<p>See this stackoverflow question about -mno-sse:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://stackoverflow.com/questions/3687845/error-with-mno-sse-flag-and-gettimeofday-in-c">http://stackoverflow.com/questions/3687845/error-with-mno-sse-flag-and-gettimeofday-in-c</a>
<br>
<p><p><p>On Nov 10, 2014, at 8:35 AM, maxinator333 &lt;maxinator333_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a piece of code, which worked fine on my PC, but on my notebook MPI_Wtime and MPI_Wtick won't work with the -mno-sse flag specified. MPI_Wtick will return 0 instead of 1e-6 and MPI_Wtime will also return always 0. clock() works in all cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Code is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;ctime&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt; // sleep
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI_Init(NULL,NULL);
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;Wtick: &quot; &lt;&lt; MPI_Wtick();
</span><br>
<span class="quotelev1">&gt;    for (int i=0; i&lt;10; i++) {
</span><br>
<span class="quotelev1">&gt;        clock_t   t0  = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;        sleep(0.1);
</span><br>
<span class="quotelev1">&gt;        //sleep(1);     // SLEEP WON'T BE COUNTED FOR CLOCK!!! FUCK, SAME SEEMS TO BE TRUE FOR MPI_WTIME
</span><br>
<span class="quotelev1">&gt;        // ALSO MPI_WTIME might not be working with -mno-sse!!!
</span><br>
<span class="quotelev1">&gt;        clock_t   t1    = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;        cout &lt;&lt; &quot;clock=&quot; &lt;&lt; clock() &lt;&lt; &quot;, CLOCKS_PER_SEC=&quot; &lt;&lt; CLOCKS_PER_SEC;
</span><br>
<span class="quotelev1">&gt;        cout &lt;&lt; &quot;, t0=&quot; &lt;&lt; t0 &lt;&lt; &quot;, t1=&quot; &lt;&lt; t1 &lt;&lt; &quot;, dt=&quot; &lt;&lt; double(t1-t0)/CLOCKS_PER_SEC &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compile and run it in cygwin 64bit, Open MPI: 1.8.3 r32794 and g++ (GCC) 4.8.3 with the following command lines and outputs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ rm matrix-diverror.exe; mpic++ -g matrix-diverror.cpp -o matrix-diverror.exe -Wall -std=c++0x -mno-sse; ./matrix-diverror.exe
</span><br>
<span class="quotelev1">&gt; Wtick: 0clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Versus the Version without SSE deactivated:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ rm matrix-diverror.exe; mpic++ -g matrix-diverror.cpp -o matrix-diverror.exe -Wall -std=c++0x; ./matrix-diverror.exe
</span><br>
<span class="quotelev1">&gt; Wtick: 1e-06clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25727.php">http://www.open-mpi.org/community/lists/users/2014/11/25727.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25729.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<li><strong>Previous message:</strong> <a href="25727.php">maxinator333: "[OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<li><strong>In reply to:</strong> <a href="25727.php">maxinator333: "[OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25729.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
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
