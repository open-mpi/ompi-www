<?
$subject_val = "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 09:26:50 2014" -->
<!-- isoreceived="20141110142650" -->
<!-- sent="Mon, 10 Nov 2014 17:26:43 +0300" -->
<!-- isosent="20141110142643" -->
<!-- name="Alex A. Granovsky" -->
<!-- email="gran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wtime not working with -mno-sse flag" -->
<!-- id="EC8A845637F84B36A74E9B5C77230D33_at_chem.msu.ru" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Alex A. Granovsky (<em>gran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 09:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25730.php">Emmanuel Thomé: "[OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25728.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<li><strong>In reply to:</strong> <a href="25727.php">maxinator333: "[OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>use RDTSC (or RDTSCP) to read TSC directly
<br>
<p>Kind regards,
<br>
Alex Granovsky
<br>
<p><p><p>-----Original Message----- 
<br>
From: maxinator333
<br>
Sent: Monday, November 10, 2014 4:35 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] MPI_Wtime not working with -mno-sse flag
<br>
<p>Hello again,
<br>
<p>I have a piece of code, which worked fine on my PC, but on my notebook
<br>
MPI_Wtime and MPI_Wtick won't work with the -mno-sse flag specified.
<br>
MPI_Wtick will return 0 instead of 1e-6 and MPI_Wtime will also return
<br>
always 0. clock() works in all cases.
<br>
<p>The Code is:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;ctime&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;unistd.h&gt; // sleep
<br>
<p>using namespace std;
<br>
int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL,NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Wtick: &quot; &lt;&lt; MPI_Wtick();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i=0; i&lt;10; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clock_t   t0  = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(0.1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//sleep(1);     // SLEEP WON'T BE COUNTED FOR CLOCK!!! FUCK,
<br>
SAME SEEMS TO BE TRUE FOR MPI_WTIME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// ALSO MPI_WTIME might not be working with -mno-sse!!!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clock_t   t1    = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;clock=&quot; &lt;&lt; clock() &lt;&lt; &quot;, CLOCKS_PER_SEC=&quot; &lt;&lt;
<br>
CLOCKS_PER_SEC;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;, t0=&quot; &lt;&lt; t0 &lt;&lt; &quot;, t1=&quot; &lt;&lt; t1 &lt;&lt; &quot;, dt=&quot; &lt;&lt;
<br>
double(t1-t0)/CLOCKS_PER_SEC &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I compile and run it in cygwin 64bit, Open MPI: 1.8.3 r32794 and g++
<br>
(GCC) 4.8.3 with the following command lines and outputs:
<br>
<p>$ rm matrix-diverror.exe; mpic++ -g matrix-diverror.cpp -o
<br>
matrix-diverror.exe -Wall -std=c++0x -mno-sse; ./matrix-diverror.exe
<br>
Wtick: 0clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
clock=451, CLOCKS_PER_SEC=1000, t0=0, t1=0, dt=8.37245e-314
<br>
<p>Versus the Version without SSE deactivated:
<br>
<p>$ rm matrix-diverror.exe; mpic++ -g matrix-diverror.cpp -o
<br>
matrix-diverror.exe -Wall -std=c++0x; ./matrix-diverror.exe
<br>
Wtick: 1e-06clock=483, CLOCKS_PER_SEC=1000, t0=1415626322,
<br>
t1=1415626322, dt=0
<br>
clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
<br>
clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
<br>
clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
<br>
clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
<br>
clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
<br>
clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
<br>
clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
<br>
clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
<br>
clock=483, CLOCKS_PER_SEC=1000, t0=1415626322, t1=1415626322, dt=0
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/11/25727.php">http://www.open-mpi.org/community/lists/users/2014/11/25727.php</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25730.php">Emmanuel Thomé: "[OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25728.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<li><strong>In reply to:</strong> <a href="25727.php">maxinator333: "[OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
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
