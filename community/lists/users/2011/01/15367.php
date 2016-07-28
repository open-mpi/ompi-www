<?
$subject_val = "Re: [OMPI users] Newbie question continues, a step toward real app";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 20:39:25 2011" -->
<!-- isoreceived="20110114013925" -->
<!-- sent="Thu, 13 Jan 2011 17:34:48 -0800" -->
<!-- isosent="20110114013448" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question continues, a step toward real app" -->
<!-- id="C954E838.DD32%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D2F966E.902_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-01-13 20:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15368.php">lagoun brahim: "[OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Previous message:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>In reply to:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15372.php">Martin Siegert: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15372.php">Martin Siegert: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p><span class="quotelev1">&gt; Did you speak to the Rmpi author about this?
</span><br>
<p>No, I haven't, but here's what the author wrote:
<br>
<a href="https://stat.ethz.ch/pipermail/r-sig-hpc/2009-February/000104.html">https://stat.ethz.ch/pipermail/r-sig-hpc/2009-February/000104.html</a>
<br>
in which he states:
<br>
&nbsp;&nbsp;&nbsp;...The way of spawning R slaves under LAM is not working
<br>
&nbsp;&nbsp;&nbsp;any more under OpenMPI. Under LAM, one just uses
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R -&gt; library(Rmpi) -&gt;  mpi.spawn.Rslaves()
<br>
&nbsp;&nbsp;&nbsp;as long as host file is set. Under OpenMPI this leads only one R slave on
<br>
&nbsp;&nbsp;&nbsp;the master host no matter how many remote hosts are specified in OpenMPI
<br>
&nbsp;&nbsp;&nbsp;hostfile. ...
<br>
His README file doesn't tell what I need to know.  In the light of
<br>
LAM MPI being &quot;absorbed&quot; into openMPI, I find this unfortunate.
<br>
<p>There are other ways to achieve parallelism from R.  The most recent
<br>
Offering is from Revolution Analytics:
<br>
&nbsp;&nbsp;<a href="http://www.revolutionanalytics.com/products/revolution-r.php">http://www.revolutionanalytics.com/products/revolution-r.php</a>
<br>
They have package called foreach which can use different parallel underling,
<br>
doSNOW, doRedis, etc, but not openMPI (or any other mpi variants).  In fact,
<br>
I saw someone posting:
<br>
<p>&nbsp;&nbsp;Just wanted to share a working example of doSNOW and foreach for an
<br>
&nbsp;&nbsp;openMPI cluster.  The function eddcmp() is just an example and returns
<br>
&nbsp;&nbsp;some inocuous warnings.  The example first has each node return its
<br>
&nbsp;&nbsp;nodename, then runs an example comparing dopar, do and a for loop.  In the
<br>
&nbsp;&nbsp;directory containing rtest.R it is run from the command line with:
<br>
&nbsp;&nbsp;&quot;mpirun -n --hostfile /home/hostfile --no-save -f rtest.R&quot;
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&lt;I will forward the full posting from him in a separate mail.&gt;
<br>
<p>What I discovered was that on my version of openMPI (v 1.4.3), this command
<br>
line doesn't work.  I need to add 1 after -n and get rid of --no-save and
<br>
-f then it runs, but generates something a bit traumatic:
<br>
&nbsp;&nbsp;[compute-0-0.local:16448] [[42316,0],1]-&gt;[[42316,0],0]
<br>
mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9) [sd =
<br>
9]
<br>
&nbsp;&nbsp;[compute-0-0.local:16448] [[42316,0],1] routed:binomial: Connection to
<br>
lifeline [[42316,0],0] lost
<br>
<p>The long and short of it is that the mechanism you showed me works for
<br>
me and (while I want to keep my eyes open for other mechanism/methods)
<br>
I want to get on to solve my science.  (And I haven't forgotten to look
<br>
into Torque.)
<br>
<p>Regards,
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><p>On 1/13/11 4:18 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Fantastic, Gus!  Now I think I got framework pretty much done.
</span><br>
<span class="quotelev2">&gt;&gt; The rest is to work on 'problem solving' end with R.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks for your insight and kindness.  I really appreciate it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm glad that it helped somebody at the other side of the country,
</span><br>
<span class="quotelev1">&gt; but solving a problem (MIMD) so close to ours here at home.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still thinking of what could one do to fix the Rmpi guts,
</span><br>
<span class="quotelev1">&gt; to work nicely with OpenMPI, MPICH2, etc.
</span><br>
<span class="quotelev1">&gt; The hint I took from your postings was that the whole
</span><br>
<span class="quotelev1">&gt; issue revolves around the mechanism to launch MPI jobs
</span><br>
<span class="quotelev1">&gt; (the whole mambo jumbo of start LAM boot, and stuff like that,
</span><br>
<span class="quotelev1">&gt; that is no longer there).
</span><br>
<span class="quotelev1">&gt; I think typically this is where the MPIs differ,
</span><br>
<span class="quotelev1">&gt; and the difficulties in portability appear.
</span><br>
<span class="quotelev1">&gt; Did you speak to the Rmpi author about this?
</span><br>
<span class="quotelev1">&gt; If I only had the time to learn some R and take a look at Rmpi
</span><br>
<span class="quotelev1">&gt; I might give it a try.
</span><br>
<span class="quotelev1">&gt; The MIMD trick will do for the embarrassingly parallel problem you
</span><br>
<span class="quotelev1">&gt; mentioned, but it would be nice to have Rmpi working for when
</span><br>
<span class="quotelev1">&gt; parallelism is essential.
</span><br>
<span class="quotelev1">&gt; Nobody uses R here (but do in the Statistics Department),
</span><br>
<span class="quotelev1">&gt; probably because they're used to other tools (Matlab, etc).
</span><br>
<span class="quotelev1">&gt; However, there is plenty of statistics of climate and other
</span><br>
<span class="quotelev1">&gt; Earth Science data that goes on here,
</span><br>
<span class="quotelev1">&gt; hence R might be used also.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good luck with your research and with &quot;R on the cloud&quot;!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/13/11 2:40 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a script I call fib.r.  It looks like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    #!/usr/bin/env r
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    fib &lt;- function( n ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 a &lt;- 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 b &lt;- 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 for ( i in 1:n ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     t &lt;- b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     b &lt;- a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     a &lt;- a + t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    print( fib(argv[1]) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I run this script with a parameter, it generates a fibonocci number:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    $ fib.r 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    $ fib.r 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and if I stick this into &lt;program&gt; part of MIMD example I have used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; previously:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    $ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 8 fib.r 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [1] 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is good as proof of concept, but what I really want to do is to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have that 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different for each (slave) process.  Ie., I want to run &#179;rfib 5&#178; on node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0, &#179;rfib 6&#178;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on node 1, &#179;rfib 7&#178; on node 2, and so on.  Is there any way to give a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameter(s) to different process/slot?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I thought maybe I can use &#173;rf option to do this, but I am leaning toward
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#173;app
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option.  Unfortunately, I see no example for the application context
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file.  Would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; someone kindly explain how I can do what I describe?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Tena
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We ran MPMD/MIMD programs  here using in the past.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Coupled climate modes: atmosphere, ocean, sea ice, etc, each one one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executable, communicating via MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually this was with MPICH1, somewhat different syntax than OpenMPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the flag/file was called '-pgfile' not '-app',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I see no reason why it shouldn't work in your case with OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think if you create a 'appfile' with this content:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -H node0 -np 1 rfib 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -H node0 -np 1 rfib 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and launch mpirun with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -app appfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is likely to work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Under Torque I cannot test this very easily,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because I need to parse the Torque file that gives me the nodes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then write down the 'appfile' on the fly (which is what I used to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do for the coupled climate models).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I tried on a standalone machine (where the -H nodename didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make sense, and was not used) and it worked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My appfile test was like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 ls appfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 2 date
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 4 who
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can add your -H nodename to each line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="15368.php">lagoun brahim: "[OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Previous message:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>In reply to:</strong> <a href="15366.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15372.php">Martin Siegert: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15372.php">Martin Siegert: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
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
