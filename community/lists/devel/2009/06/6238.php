<?
$subject_val = "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 13:35:05 2009" -->
<!-- isoreceived="20090615173505" -->
<!-- sent="Mon, 15 Jun 2009 10:34:59 -0700" -->
<!-- isosent="20090615173459" -->
<!-- name="Nikolay Molchanov" -->
<!-- email="Nikolay.Molchanov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option" -->
<!-- id="4A368643.4010703_at_sun.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="497553.47892.qm_at_web8705.mail.in.yahoo.com" -->
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
<strong>From:</strong> Nikolay Molchanov (<em>Nikolay.Molchanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-15 13:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6239.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6241.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6241.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Leo,
<br>
<p>I think there is something wrong in the way the application is built,
<br>
or in the way you run collect. We run MPI tests every night, so at
<br>
least simple tests should work just fine. Could you, please, send me
<br>
more details about your MPI and your application?
<br>
<p>1. MPI version strings
<br>
<p>which mpicc
<br>
<p>mpicc -version
<br>
<p>which mpirun
<br>
<p>mpirun -version
<br>
<p>2. Analyzer version strings
<br>
<p>collect -V
<br>
<p>analyzer -V
<br>
<p>3. Experiment listing
<br>
<p>ls -lR test.1.er
<br>
<p>4. Log file (starting from the collect command):
<br>
<p>collect  -M OPENMPI  mpirun  -np  2  --  hello
<br>
<p>...
<br>
<p>analyzer  test.1.er
<br>
<p>...
<br>
<p>5. The application itself (source code or binary).
<br>
<p>I'll run this application on our system, and let you know
<br>
the result.
<br>
<p>Thanks,
<br>
Nik 
<br>
<p>Leo P. wrote:
<br>
<span class="quotelev1">&gt; HI Nik,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried the Sun Studio Performance Analyzer and it was able to profile 
</span><br>
<span class="quotelev1">&gt; to application but not the openMPI source code. The source code was 
</span><br>
<span class="quotelev1">&gt; empty in Sun Studio Performance Analyzer. I tried but i was not able 
</span><br>
<span class="quotelev1">&gt; to get the profiling information of openMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So i installed Vampir trace and i was able to get otf while suggested 
</span><br>
<span class="quotelev1">&gt; i got the profiling information. But i fail to understand what i 
</span><br>
<span class="quotelev1">&gt; should do now.
</span><br>
<span class="quotelev1">&gt; 1. Am i suppose to download additional information for trace 
</span><br>
<span class="quotelev1">&gt; information visualization? Is the additional software this 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.ssl-id.net/www.vampir.eu/index.html">https://www.ssl-id.net/www.vampir.eu/index.html</a>
</span><br>
<span class="quotelev1">&gt; 2. If not how can i visualize the trace information i got vampir-trace.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for bugging everyone so much about this. But i spend a lot of 
</span><br>
<span class="quotelev1">&gt; time and this alone and i am not getting output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leo P.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Nikolay Molchanov &lt;Nikolay.Molchanov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *To:* leo_7892003_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Cc:* Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, 15 June, 2009 12:18:50 PM
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] complete newbie question regarding 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-profile option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Leo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to get the profiling information, you can try Sun Studio
</span><br>
<span class="quotelev1">&gt; Performance Analyzer. You can download SS12.1 EA release -
</span><br>
<span class="quotelev1">&gt; here is a pointer to the web page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://developers.sun.com/sunstudio/downloads/express/index.jsp">http://developers.sun.com/sunstudio/downloads/express/index.jsp</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Final version will be available soon, but EA should be good enough
</span><br>
<span class="quotelev1">&gt; to try :-) I suggest you to download EA as a tar file, extract it,
</span><br>
<span class="quotelev1">&gt; set PATH, and run the following commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ collect  -M  OPENMPI  mpirun  -np  2  --  hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: it is necessary to add &quot;--&quot; after mpirun arguments.
</span><br>
<span class="quotelev1">&gt; This command will create a &quot;test.1.er&quot; directory (experiment).
</span><br>
<span class="quotelev1">&gt; To view the experiment, run &quot;analyzer&quot; (Java GUI tool):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ analyzer  test.1.er
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If everything works properly you will see MPI Timeline and other tabs,
</span><br>
<span class="quotelev1">&gt; that show profiling information. Please, make sure you have java 1.5 or
</span><br>
<span class="quotelev1">&gt; newer in your PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Nik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leo P. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Also i was wondering whether gdb could be used with openMPI. I know 
</span><br>
<span class="quotelev2">&gt;&gt; about -d option in mpirun but i need to use gdb if its possible. I 
</span><br>
<span class="quotelev2">&gt;&gt; think i have done all the necessary things to enable profiling and 
</span><br>
<span class="quotelev2">&gt;&gt; debuging but i am missing something here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry guys i forgot i could debug shared library function in gdb. :) 
</span><br>
<span class="quotelev2">&gt;&gt; So currently using
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 1 xterm -e gdb hello
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; to debug the openMPI source. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If only i could get the profiling information, it could help me a lot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leo :)
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* Leo P. &lt;leo_7892003_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Monday, 15 June, 2009 12:36:34 AM
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* [OMPI devel] complete newbie question regarding 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-profile option
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been trying to enabling profiling of openMPI code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Earlier i also saw a thread 
</span><br>
<span class="quotelev2">&gt;&gt; [<a href="http://www.open-mpi.org/community/lists/users/2008/04/5369.php">http://www.open-mpi.org/community/lists/users/2008/04/5369.php</a>] 
</span><br>
<span class="quotelev2">&gt;&gt; which talks about using --enable-mpi-profile option in configure 
</span><br>
<span class="quotelev2">&gt;&gt; which i have done. But i have not been able to get hold of profiling 
</span><br>
<span class="quotelev2">&gt;&gt; data. I tried installing vampir from 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://computing.llnl.gov/code/vgv.html#installations">https://computing.llnl.gov/code/vgv.html#installations</a> but i am not 
</span><br>
<span class="quotelev2">&gt;&gt; been able to install.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So i wanted to know how people are profiling the core openMPI code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a complete newbie and would appreciate any information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also i was wondering whether gdb could be used with openMPI. I know 
</span><br>
<span class="quotelev2">&gt;&gt; about -d option in mpirun but i need to use gdb if its possible. I 
</span><br>
<span class="quotelev2">&gt;&gt; think i have done all the necessary things to enable profiling and 
</span><br>
<span class="quotelev2">&gt;&gt; debuging but i am missing something here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currentl y i am configuring openMPI using following param
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure -enable-debug --with-devel-headers --enable-trace 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-profile --enable-mem-debug
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leo P.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Explore and discover exciting holidays and getaways with Yahoo! India 
</span><br>
<span class="quotelev2">&gt;&gt; Travel Click here! 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://in.rd.yahoo.com/tagline_Travel_1/*http://in.travel.yahoo.com/">http://in.rd.yahoo.com/tagline_Travel_1/*http://in.travel.yahoo.com/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Bollywood news, movie reviews, film trailers and more! Click here. 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://in.rd.yahoo.com/tagline_movies_1/*http://in.movies.yahoo.com/?wm=n/">http://in.rd.yahoo.com/tagline_movies_1/*http://in.movies.yahoo.com/?wm=n/</a>&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Own a website.Get an unlimited package.Pay next to nothing.* Click 
</span><br>
<span class="quotelev1">&gt; here!. 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://in.rd.yahoo.com/tagline_ysb_website/*http://in.business.yahoo.com/">http://in.rd.yahoo.com/tagline_ysb_website/*http://in.business.yahoo.com/</a>&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6238/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6239.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6241.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6241.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
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
