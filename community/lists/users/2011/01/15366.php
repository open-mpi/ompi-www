<?
$subject_val = "Re: [OMPI users] Newbie question continues, a step toward real app";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 19:19:03 2011" -->
<!-- isoreceived="20110114001903" -->
<!-- sent="Thu, 13 Jan 2011 19:18:54 -0500" -->
<!-- isosent="20110114001854" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question continues, a step toward real app" -->
<!-- id="4D2F966E.902_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C954CF73.DD24%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Date:</strong> 2011-01-13 19:18:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>In reply to:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Fantastic, Gus!  Now I think I got framework pretty much done.
</span><br>
<span class="quotelev1">&gt; The rest is to work on 'problem solving' end with R.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for your insight and kindness.  I really appreciate it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Hi Tena
<br>
<p>I'm glad that it helped somebody at the other side of the country,
<br>
but solving a problem (MIMD) so close to ours here at home.
<br>
<p>Still thinking of what could one do to fix the Rmpi guts,
<br>
to work nicely with OpenMPI, MPICH2, etc.
<br>
The hint I took from your postings was that the whole
<br>
issue revolves around the mechanism to launch MPI jobs
<br>
(the whole mambo jumbo of start LAM boot, and stuff like that,
<br>
that is no longer there).
<br>
I think typically this is where the MPIs differ,
<br>
and the difficulties in portability appear.
<br>
Did you speak to the Rmpi author about this?
<br>
If I only had the time to learn some R and take a look at Rmpi
<br>
I might give it a try.
<br>
The MIMD trick will do for the embarrassingly parallel problem you 
<br>
mentioned, but it would be nice to have Rmpi working for when 
<br>
parallelism is essential.
<br>
Nobody uses R here (but do in the Statistics Department),
<br>
probably because they're used to other tools (Matlab, etc).
<br>
However, there is plenty of statistics of climate and other
<br>
Earth Science data that goes on here,
<br>
hence R might be used also.
<br>
<p>Good luck with your research and with &quot;R on the cloud&quot;!
<br>
<p>Regards,
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
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/13/11 2:40 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a script I call fib.r.  It looks like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #!/usr/bin/env r
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    fib &lt;- function( n ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 a &lt;- 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 b &lt;- 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 for ( i in 1:n ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     t &lt;- b
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     b &lt;- a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     a &lt;- a + t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    print( fib(argv[1]) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I run this script with a parameter, it generates a fibonocci number:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ fib.r 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ fib.r 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and if I stick this into &lt;program&gt; part of MIMD example I have used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; previously:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 8 fib.r 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is good as proof of concept, but what I really want to do is to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have that 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different for each (slave) process.  Ie., I want to run &#179;rfib 5&#178; on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0, &#179;rfib 6&#178;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on node 1, &#179;rfib 7&#178; on node 2, and so on.  Is there any way to give a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter(s) to different process/slot?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought maybe I can use &#173;rf option to do this, but I am leaning toward
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#173;app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option.  Unfortunately, I see no example for the application context
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file.  Would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; someone kindly explain how I can do what I describe?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Tena
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We ran MPMD/MIMD programs  here using in the past.
</span><br>
<span class="quotelev2">&gt;&gt; Coupled climate modes: atmosphere, ocean, sea ice, etc, each one one
</span><br>
<span class="quotelev2">&gt;&gt; executable, communicating via MPI.
</span><br>
<span class="quotelev2">&gt;&gt; Actually this was with MPICH1, somewhat different syntax than OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt; the flag/file was called '-pgfile' not '-app',
</span><br>
<span class="quotelev2">&gt;&gt; but I see no reason why it shouldn't work in your case with OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think if you create a 'appfile' with this content:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -H node0 -np 1 rfib 5
</span><br>
<span class="quotelev2">&gt;&gt; -H node0 -np 1 rfib 6
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and launch mpirun with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -app appfile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it is likely to work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Under Torque I cannot test this very easily,
</span><br>
<span class="quotelev2">&gt;&gt; because I need to parse the Torque file that gives me the nodes,
</span><br>
<span class="quotelev2">&gt;&gt; then write down the 'appfile' on the fly (which is what I used to
</span><br>
<span class="quotelev2">&gt;&gt; do for the coupled climate models).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I tried on a standalone machine (where the -H nodename didn't
</span><br>
<span class="quotelev2">&gt;&gt; make sense, and was not used) and it worked.
</span><br>
<span class="quotelev2">&gt;&gt; My appfile test was like this:
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 ls appfile
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt; -np 2 date
</span><br>
<span class="quotelev2">&gt;&gt; -np 4 who
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can add your -H nodename to each line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>In reply to:</strong> <a href="15365.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
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
