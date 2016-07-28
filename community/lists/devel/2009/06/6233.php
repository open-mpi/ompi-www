<?
$subject_val = "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 14 16:52:22 2009" -->
<!-- isoreceived="20090614205222" -->
<!-- sent="Mon, 15 Jun 2009 02:22:14 +0530 (IST)" -->
<!-- isosent="20090614205214" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option" -->
<!-- id="782545.53329.qm_at_web8706.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="649565.8445.qm_at_web8701.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option<br>
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-14 16:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6232.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6231.php">Leo P.: "[OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also i was wondering whether gdb could be used with openMPI. I know
about -d option in mpirun but i need to use gdb if its possible. I
think i have done all the necessary things to enable profiling and
debuging but i am missing something here. 

Sorry guys i forgot i could debug shared library function in gdb. :) So currently using 

$ mpirun -np 1 xterm -e gdb hello 
 
to debug the openMPI source.  

If only i could get the profiling information, it could help me a lot. 

Leo :)


________________________________
From: Leo P. &lt;leo_7892003_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Monday, 15 June, 2009 12:36:34 AM
Subject: [OMPI devel] complete newbie question regarding --enable-mpi-profile option


Hi Everyone, 

I have been trying to enabling profiling of openMPI code. 

Earlier i also saw a thread [<a href="http://www.open-mpi.org/community/lists/users/2008/04/5369.php">http://www.open-mpi.org/community/lists/users/2008/04/5369.php</a>] which talks about using --enable-mpi-profile option in configure which i have done. But i have not been able to get hold of profiling data. I tried installing vampir from <a href="https://computing.llnl.gov/code/vgv.html#installations">https://computing.llnl.gov/code/vgv.html#installations</a> but i am not been able to install. 

So i wanted to know how people are profiling the core openMPI code. 

I am a complete newbie and would appreciate any information. 

Also i was wondering whether gdb could be used with openMPI. I know about -d option in mpirun but i need to use gdb if its possible. I think i have done all the necessary things to enable profiling and debuging but i am missing something here. 

Currentl y i am configuring openMPI using following param
 ./configure -enable-debug --with-devel-headers --enable-trace --enable-mpi-profile --enable-mem-debug 


Leo P.

________________________________
 Explore and discover exciting holidays and getaways with Yahoo! India Travel Click here!


      Bollywood news, movie reviews, film trailers and more! Go to <a href="http://in.movies.yahoo.com/">http://in.movies.yahoo.com/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6232.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6231.php">Leo P.: "[OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
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
