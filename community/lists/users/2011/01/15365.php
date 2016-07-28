<?
$subject_val = "Re: [OMPI users] Newbie question continues, a step toward real app";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 18:53:44 2011" -->
<!-- isoreceived="20110113235344" -->
<!-- sent="Thu, 13 Jan 2011 15:49:07 -0800" -->
<!-- isosent="20110113234907" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question continues, a step toward real app" -->
<!-- id="C954CF73.DD24%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D2F7F4D.9010802_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-13 18:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15364.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>In reply to:</strong> <a href="15364.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fantastic, Gus!  Now I think I got framework pretty much done.
<br>
The rest is to work on 'problem solving' end with R.
<br>
<p>Many thanks for your insight and kindness.  I really appreciate it.
<br>
<p>Regards,
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><p>On 1/13/11 2:40 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a script I call fib.r.  It looks like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    #!/usr/bin/env r
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    fib &lt;- function( n ) {
</span><br>
<span class="quotelev2">&gt;&gt;                 a &lt;- 0
</span><br>
<span class="quotelev2">&gt;&gt;                 b &lt;- 1
</span><br>
<span class="quotelev2">&gt;&gt;                 for ( i in 1:n ) {
</span><br>
<span class="quotelev2">&gt;&gt;                     t &lt;- b
</span><br>
<span class="quotelev2">&gt;&gt;                     b &lt;- a
</span><br>
<span class="quotelev2">&gt;&gt;                     a &lt;- a + t
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;                 a
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    print( fib(argv[1]) )
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I run this script with a parameter, it generates a fibonocci number:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    $ fib.r 5
</span><br>
<span class="quotelev2">&gt;&gt;    5
</span><br>
<span class="quotelev2">&gt;&gt;    $ fib.r 6
</span><br>
<span class="quotelev2">&gt;&gt;    8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and if I stick this into &lt;program&gt; part of MIMD example I have used
</span><br>
<span class="quotelev2">&gt;&gt; previously:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    $ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 8 fib.r 7
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [1] 13
</span><br>
<span class="quotelev2">&gt;&gt;    [1] 13
</span><br>
<span class="quotelev2">&gt;&gt;    [1] 13
</span><br>
<span class="quotelev2">&gt;&gt;    [1] 13
</span><br>
<span class="quotelev2">&gt;&gt;    [1] 13
</span><br>
<span class="quotelev2">&gt;&gt;    [1] 13
</span><br>
<span class="quotelev2">&gt;&gt;    [1] 13
</span><br>
<span class="quotelev2">&gt;&gt;    [1] 13
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is good as proof of concept, but what I really want to do is to
</span><br>
<span class="quotelev2">&gt;&gt; have that 7
</span><br>
<span class="quotelev2">&gt;&gt; different for each (slave) process.  Ie., I want to run &#179;rfib 5&#178; on node
</span><br>
<span class="quotelev2">&gt;&gt; 0, &#179;rfib 6&#178;
</span><br>
<span class="quotelev2">&gt;&gt; on node 1, &#179;rfib 7&#178; on node 2, and so on.  Is there any way to give a
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; parameter(s) to different process/slot?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I thought maybe I can use &#173;rf option to do this, but I am leaning toward
</span><br>
<span class="quotelev2">&gt;&gt; &#173;app
</span><br>
<span class="quotelev2">&gt;&gt; option.  Unfortunately, I see no example for the application context
</span><br>
<span class="quotelev2">&gt;&gt; file.  Would
</span><br>
<span class="quotelev2">&gt;&gt; someone kindly explain how I can do what I describe?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We ran MPMD/MIMD programs  here using in the past.
</span><br>
<span class="quotelev1">&gt; Coupled climate modes: atmosphere, ocean, sea ice, etc, each one one
</span><br>
<span class="quotelev1">&gt; executable, communicating via MPI.
</span><br>
<span class="quotelev1">&gt; Actually this was with MPICH1, somewhat different syntax than OpenMPI,
</span><br>
<span class="quotelev1">&gt; the flag/file was called '-pgfile' not '-app',
</span><br>
<span class="quotelev1">&gt; but I see no reason why it shouldn't work in your case with OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think if you create a 'appfile' with this content:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -H node0 -np 1 rfib 5
</span><br>
<span class="quotelev1">&gt; -H node0 -np 1 rfib 6
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and launch mpirun with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -app appfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it is likely to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Under Torque I cannot test this very easily,
</span><br>
<span class="quotelev1">&gt; because I need to parse the Torque file that gives me the nodes,
</span><br>
<span class="quotelev1">&gt; then write down the 'appfile' on the fly (which is what I used to
</span><br>
<span class="quotelev1">&gt; do for the coupled climate models).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I tried on a standalone machine (where the -H nodename didn't
</span><br>
<span class="quotelev1">&gt; make sense, and was not used) and it worked.
</span><br>
<span class="quotelev1">&gt; My appfile test was like this:
</span><br>
<span class="quotelev1">&gt; -np 1 ls appfile
</span><br>
<span class="quotelev1">&gt; -np 1 hostname
</span><br>
<span class="quotelev1">&gt; -np 2 date
</span><br>
<span class="quotelev1">&gt; -np 4 who
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can add your -H nodename to each line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15364.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>In reply to:</strong> <a href="15364.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
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
