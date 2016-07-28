<?
$subject_val = "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 01:47:10 2009" -->
<!-- isoreceived="20090615054710" -->
<!-- sent="Mon, 15 Jun 2009 11:17:03 +0530 (IST)" -->
<!-- isosent="20090615054703" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option" -->
<!-- id="286917.55823.qm_at_web8708.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A35D9BA.50600_at_sun.com" -->
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
<strong>Date:</strong> 2009-06-15 01:47:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6236.php">Shiqing Fan: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21436"</a>
<li><strong>Previous message:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nick, 

Thanks for the information, you have provided. It helps me immensely. 


Anjin




________________________________
From: Nikolay Molchanov &lt;Nikolay.Molchanov_at_[hidden]&gt;
To: leo_7892003_at_[hidden]
Cc: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Monday, 15 June, 2009 12:18:50 PM
Subject: Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option

Hi Leo,

If you want to get the profiling information, you can try Sun Studio
Performance Analyzer. You can download SS12.1 EA release -
here is a pointer to the web page:

<a href="http://developers.sun.com/sunstudio/downloads/express/index.jsp">http://developers.sun.com/sunstudio/downloads/express/index.jsp</a>

Final version will be available soon, but EA should be good enough 
to try :-) I suggest you to download EA as a tar file, extract it, 
set PATH, and run the following commands:

$ collect  -M  OPENMPI  mpirun  -np  2  --  hello 

Note: it is necessary to add &quot;--&quot; after mpirun arguments.
This command will create a &quot;test.1.er&quot; directory (experiment).
To view the experiment, run &quot;analyzer&quot; (Java GUI tool):

$ analyzer  test.1.er

If everything works properly you will see MPI Timeline and other tabs,
that show profiling information. Please, make sure you have java 1.5 or
newer in your PATH.

Thanks,
Nik

Leo P. wrote: 
Also i was wondering
whether gdb could be used with openMPI. I know
about -d option in mpirun but i need to use gdb if its possible. I
think i have done all the necessary things to enable profiling and
debuging but i am missing something here. 

Sorry guys i forgot i could debug shared library function in gdb. :) So
currently using 

$ mpirun -np 1 xterm -e gdb hello 
 
to debug the openMPI source.  

If only i could get the profiling information, it could help me a lot. 

Leo :)


________________________________
From: Leo
P. &lt;leo_7892003_at_[hidden]&gt;
To: Open MPI
Developers &lt;devel_at_[hidden]&gt;
Sent: Monday, 15 June,
2009 12:36:34 AM
Subject: [OMPI devel]
complete newbie question regarding --enable-mpi-profile option


Hi
Everyone, 

I have been trying to enabling profiling of openMPI code. 

Earlier i also saw a thread [<a href="http://www.open-mpi.org/community/lists/users/2008/04/5369.php">http://www.open-mpi.org/community/lists/users/2008/04/5369.php</a>]
which talks about using --enable-mpi-profile option in configure which
i have done. But i have not been able to get hold of profiling data. I
tried installing vampir from <a href="https://computing.llnl.gov/code/vgv.html#installations">https://computing.llnl.gov/code/vgv.html#installations</a> but i am not been able to install. 

So i wanted to know how people are profiling the core openMPI code. 

I am a complete newbie and would appreciate any information. 

Also i was wondering whether gdb could be used with openMPI. I know
about -d option in mpirun but i need to use gdb if its possible. I
think i have done all the necessary things to enable profiling and
debuging but i am missing something here. 

Currentl y i am configuring openMPI using following param
 ./configure -enable-debug --with-devel-headers --enable-trace
--enable-mpi-profile --enable-mem-debug 


Leo P.

________________________________
 Explore and discover exciting holidays and getaways
with Yahoo! India Travel Click here!
________________________________
 Bollywood news, movie reviews, film trailers and more! Click here. 

________________________________

_______________________________________________
devel mailing list
devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 



      Cricket on your mind? Visit the ultimate cricket website. Enter <a href="http://beta.cricket.yahoo.com">http://beta.cricket.yahoo.com</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6236.php">Shiqing Fan: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21436"</a>
<li><strong>Previous message:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6234.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
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
