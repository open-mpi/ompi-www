<?
$subject_val = "[OMPI devel] complete newbie question regarding --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 14 13:36:41 2009" -->
<!-- isoreceived="20090614173641" -->
<!-- sent="Sun, 14 Jun 2009 23:06:34 +0530 (IST)" -->
<!-- isosent="20090614173634" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="[OMPI devel] complete newbie question regarding --enable-mpi-profile option" -->
<!-- id="649565.8445.qm_at_web8701.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6B0DF8B2-F7DE-48E7-9792-427BF9D9D8FF_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] complete newbie question regarding --enable-mpi-profile option<br>
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-14 13:36:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6232.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6230.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone, 

I have been trying to enabling profiling of openMPI code. 

Earlier i also saw a thread [<a href="http://www.open-mpi.org/community/lists/users/2008/04/5369.php">http://www.open-mpi.org/community/lists/users/2008/04/5369.php</a>] which talks about using --enable-mpi-profile option in configure which i have done. But i have not been able to get hold of profiling data. I tried installing vampir from <a href="https://computing.llnl.gov/code/vgv.html#installations">https://computing.llnl.gov/code/vgv.html#installations</a> but i am not been able to install. 

So i wanted to know how people are profiling the core openMPI code. 

I am a complete newbie and would appreciate any information. 

Also i was wondering whether gdb could be used with openMPI. I know about -d option in mpirun but i need to use gdb if its possible. I think i have done all the necessary things to enable profiling and debuging but i am missing something here. 

Currentl y i am configuring openMPI using following param
 ./configure -enable-debug --with-devel-headers --enable-trace --enable-mpi-profile --enable-mem-debug 


Leo P.



      Own a website.Get an unlimited package.Pay next to nothing.*Go to <a href="http://in.business.yahoo.com/">http://in.business.yahoo.com/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6232.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6230.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
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
