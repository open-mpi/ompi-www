<?
$subject_val = "Re: [OMPI users] Newbie question continues, a step toward real app";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 17:40:27 2011" -->
<!-- isoreceived="20110113224027" -->
<!-- sent="Thu, 13 Jan 2011 17:40:13 -0500" -->
<!-- isosent="20110113224013" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question continues, a step toward real app" -->
<!-- id="4D2F7F4D.9010802_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C954A73A.DD09%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie question continues, a step toward real app<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-13 17:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15363.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15362.php">Tena Sakai: "[OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a script I call fib.r.  It looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    #!/usr/bin/env r
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    fib &lt;- function( n ) {
</span><br>
<span class="quotelev1">&gt;                 a &lt;- 0
</span><br>
<span class="quotelev1">&gt;                 b &lt;- 1
</span><br>
<span class="quotelev1">&gt;                 for ( i in 1:n ) {
</span><br>
<span class="quotelev1">&gt;                     t &lt;- b
</span><br>
<span class="quotelev1">&gt;                     b &lt;- a
</span><br>
<span class="quotelev1">&gt;                     a &lt;- a + t
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 a
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    print( fib(argv[1]) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run this script with a parameter, it generates a fibonocci number:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ fib.r 5
</span><br>
<span class="quotelev1">&gt;    5
</span><br>
<span class="quotelev1">&gt;    $ fib.r 6
</span><br>
<span class="quotelev1">&gt;    8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and if I stick this into &lt;program&gt; part of MIMD example I have used 
</span><br>
<span class="quotelev1">&gt; previously:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 8 fib.r 7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [1] 13
</span><br>
<span class="quotelev1">&gt;    [1] 13
</span><br>
<span class="quotelev1">&gt;    [1] 13
</span><br>
<span class="quotelev1">&gt;    [1] 13
</span><br>
<span class="quotelev1">&gt;    [1] 13
</span><br>
<span class="quotelev1">&gt;    [1] 13
</span><br>
<span class="quotelev1">&gt;    [1] 13
</span><br>
<span class="quotelev1">&gt;    [1] 13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is good as proof of concept, but what I really want to do is to 
</span><br>
<span class="quotelev1">&gt; have that 7
</span><br>
<span class="quotelev1">&gt; different for each (slave) process.  Ie., I want to run &#147;rfib 5&#148; on node 
</span><br>
<span class="quotelev1">&gt; 0, &#147;rfib 6&#148;
</span><br>
<span class="quotelev1">&gt; on node 1, &#147;rfib 7&#148; on node 2, and so on.  Is there any way to give a 
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; parameter(s) to different process/slot?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought maybe I can use &#150;rf option to do this, but I am leaning toward 
</span><br>
<span class="quotelev1">&gt; &#150;app
</span><br>
<span class="quotelev1">&gt; option.  Unfortunately, I see no example for the application context 
</span><br>
<span class="quotelev1">&gt; file.  Would
</span><br>
<span class="quotelev1">&gt; someone kindly explain how I can do what I describe?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Tena
<br>
<p>We ran MPMD/MIMD programs  here using in the past.
<br>
Coupled climate modes: atmosphere, ocean, sea ice, etc, each one one 
<br>
executable, communicating via MPI.
<br>
Actually this was with MPICH1, somewhat different syntax than OpenMPI, 
<br>
the flag/file was called '-pgfile' not '-app',
<br>
but I see no reason why it shouldn't work in your case with OpenMPI.
<br>
<p>I think if you create a 'appfile' with this content:
<br>
<p>-H node0 -np 1 rfib 5
<br>
-H node0 -np 1 rfib 6
<br>
...
<br>
<p>and launch mpirun with
<br>
<p>mpirun -app appfile
<br>
<p>it is likely to work.
<br>
<p>Under Torque I cannot test this very easily,
<br>
because I need to parse the Torque file that gives me the nodes,
<br>
then write down the 'appfile' on the fly (which is what I used to
<br>
do for the coupled climate models).
<br>
<p>However, I tried on a standalone machine (where the -H nodename didn't
<br>
make sense, and was not used) and it worked.
<br>
My appfile test was like this:
<br>
-np 1 ls appfile
<br>
-np 1 hostname
<br>
-np 2 date
<br>
-np 4 who
<br>
<p>You can add your -H nodename to each line.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15363.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15362.php">Tena Sakai: "[OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
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
