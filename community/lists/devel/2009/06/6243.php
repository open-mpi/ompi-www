<?
$subject_val = "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 15:20:01 2009" -->
<!-- isoreceived="20090615192001" -->
<!-- sent="Tue, 16 Jun 2009 00:49:52 +0530 (IST)" -->
<!-- isosent="20090615191952" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option" -->
<!-- id="633137.81642.qm_at_web8707.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A368EC3.9090701_at_sun.com" -->
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
<strong>Date:</strong> 2009-06-15 15:19:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6244.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6242.php">Nifty Tom Mitchell: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>In reply to:</strong> <a href="6239.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6244.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6244.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6245.php">Nifty Tom Mitchell: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene,

Thanks for the information.  And i had already clicked on the &quot;Show All&quot; button in the profiler before i send an email to the group.  But it did not work :( 


Also Eugene, can you please help me understand what does turning on -g option mean. Currently i am building the system with the following option 

./configure --with-devel-headers --enable-trace --enable-mpi-profile --enable-mem-debug --enable-debug

Do i need to add something additional here ?

Also i don't understand what you mean by tool ecosystem.  [I am a complete newbie ]

BTW if you are sending Nik's phone number, i like to get yours also. Just in case Nik is not picking up his phone. :) 

Anyways if there is anything i can do to contribute please do let me know? I would love to a part of this great community.

Regards,
Leo.P 



________________________________
From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Cc: Nikolay.Molchanov_at_[hidden]
Sent: Tuesday, 16 June, 2009 1:11:15 AM
Subject: Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option

 Leo P. wrote: 
HI Nik,

I tried the Sun Studio Performance Analyzer and it was able to profile
to application but not the openMPI source code. The source code was
empty in Sun Studio Performance Analyzer. I tried but i was not able to
get the profiling information of openMPI.

So i installed Vampir trace and i was able to get otf while suggested i
got the profiling information. But i fail to understand what i should
do now. 
1. Am i suppose to download additional information for trace
information visualization? Is the additional software this <a href="https://www.ssl-id.net/www.vampir.eu/index.html">https://www.ssl-id.net/www.vampir.eu/index.html</a>
2. If not how can i visualize the trace information i got vampir-trace.

Sorry for bugging everyone so much about this. But i spend a lot of
time and this alone and i am not getting output. 

It's probably fine to bug people about some of this.  OMPI would
benefit from having a tool ecosystem around it.  There's VampirTrace
and PERUSE instrumentation and stuff, but some more activity/attention
in this area would be better.

I don't know that VampirTrace will give what you're looking for.  You
seem to want to profile the internals of OMPI.  VT basically just
instruments entry into and exit out of MPI.  In contrast, PERUSE
instruments MPI internals.

Sun Studio Performance Analyzer should also work.  I know I've used it
to profile both MPI apps and the internals of OMPI.

One of the problems...  I mean, one of the *features* of Sun
Performance Analyzer is that it *HIDES* the internals of the MPI
library.  There is a concept of user and expert models and stuff.  Most
users just want to see their program the way they wrote it (whether for
Java, OpenMP, MPI, etc.).  So, Performance Analyzer hides the &quot;black
box&quot; stuff (internals of Java, OpenMP, MPI, etc.).  But, *you* want
&quot;expert&quot; capabilities.  You want to see what's under the hood.  So,
after you have collected data and have started the Analyzer GUI, choose
&quot;View&quot; -&gt; &quot;Show/Hide Functions...&quot; -&gt; &quot;Show All&quot;.  Maybe there
are other things you're encountering, but for me that changes MPI calls
from being black boxes to exposing where OMPI is spending its time: 
PML functions, BTL functions, etc.

To get source code information, you also need to build OMPI with -g
turned on.  That will include debugging information.  With some
compilers, turning -g on might turn off optimizations... I just don't
know.  With Sun Studio compilers, -g will not change your optimizations
-- it will only add debugging/symbolic information, compiler commentary
on optimizations, etc.

If you want to ask Nik or me other questions, feel free.  I'll send you
Nik's home phone number!  :^)



      Cricket on your mind? Visit the ultimate cricket website. Enter <a href="http://beta.cricket.yahoo.com">http://beta.cricket.yahoo.com</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6244.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6242.php">Nifty Tom Mitchell: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>In reply to:</strong> <a href="6239.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6244.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6244.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6245.php">Nifty Tom Mitchell: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
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
