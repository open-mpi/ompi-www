<?
$subject_val = "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 01:18:48 2009" -->
<!-- isoreceived="20090615051848" -->
<!-- sent="Sun, 14 Jun 2009 22:18:50 -0700" -->
<!-- isosent="20090615051850" -->
<!-- name="Nikolay Molchanov" -->
<!-- email="Nikolay.Molchanov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option" -->
<!-- id="4A35D9BA.50600_at_sun.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="782545.53329.qm_at_web8706.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option<br>
<strong>From:</strong> Nikolay Molchanov (<em>Nikolay.Molchanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-15 01:18:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6235.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6235.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6235.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Leo,
<br>
<p>If you want to get the profiling information, you can try Sun Studio
<br>
Performance Analyzer. You can download SS12.1 EA release -
<br>
here is a pointer to the web page:
<br>
<p><a href="http://developers.sun.com/sunstudio/downloads/express/index.jsp">http://developers.sun.com/sunstudio/downloads/express/index.jsp</a>
<br>
<p>Final version will be available soon, but EA should be good enough
<br>
to try :-) I suggest you to download EA as a tar file, extract it,
<br>
set PATH, and run the following commands:
<br>
<p>$ collect  -M  OPENMPI  mpirun  -np  2  --  hello
<br>
<p>Note: it is necessary to add &quot;--&quot; after mpirun arguments.
<br>
This command will create a &quot;test.1.er&quot; directory (experiment).
<br>
To view the experiment, run &quot;analyzer&quot; (Java GUI tool):
<br>
<p>$ analyzer  test.1.er
<br>
<p>If everything works properly you will see MPI Timeline and other tabs,
<br>
that show profiling information. Please, make sure you have java 1.5 or
<br>
newer in your PATH.
<br>
<p>Thanks,
<br>
Nik
<br>
<p>Leo P. wrote:
<br>
<span class="quotelev1">&gt; Also i was wondering whether gdb could be used with openMPI. I know 
</span><br>
<span class="quotelev1">&gt; about -d option in mpirun but i need to use gdb if its possible. I 
</span><br>
<span class="quotelev1">&gt; think i have done all the necessary things to enable profiling and 
</span><br>
<span class="quotelev1">&gt; debuging but i am missing something here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry guys i forgot i could debug shared library function in gdb. :) 
</span><br>
<span class="quotelev1">&gt; So currently using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 xterm -e gdb hello
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; to debug the openMPI source. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If only i could get the profiling information, it could help me a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leo :)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Leo P. &lt;leo_7892003_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, 15 June, 2009 12:36:34 AM
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI devel] complete newbie question regarding 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-profile option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying to enabling profiling of openMPI code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Earlier i also saw a thread 
</span><br>
<span class="quotelev1">&gt; [<a href="http://www.open-mpi.org/community/lists/users/2008/04/5369.php">http://www.open-mpi.org/community/lists/users/2008/04/5369.php</a>] which 
</span><br>
<span class="quotelev1">&gt; talks about using --enable-mpi-profile option in configure which i 
</span><br>
<span class="quotelev1">&gt; have done. But i have not been able to get hold of profiling data. I 
</span><br>
<span class="quotelev1">&gt; tried installing vampir from 
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/code/vgv.html#installations">https://computing.llnl.gov/code/vgv.html#installations</a> but i am not 
</span><br>
<span class="quotelev1">&gt; been able to install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So i wanted to know how people are profiling the core openMPI code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a complete newbie and would appreciate any information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also i was wondering whether gdb could be used with openMPI. I know 
</span><br>
<span class="quotelev1">&gt; about -d option in mpirun but i need to use gdb if its possible. I 
</span><br>
<span class="quotelev1">&gt; think i have done all the necessary things to enable profiling and 
</span><br>
<span class="quotelev1">&gt; debuging but i am missing something here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currentl y i am configuring openMPI using following param
</span><br>
<span class="quotelev1">&gt;  ./configure -enable-debug --with-devel-headers --enable-trace 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-profile --enable-mem-debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leo P.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Explore and discover exciting holidays and getaways with Yahoo! India 
</span><br>
<span class="quotelev1">&gt; Travel Click here! 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://in.rd.yahoo.com/tagline_Travel_1/*http://in.travel.yahoo.com/">http://in.rd.yahoo.com/tagline_Travel_1/*http://in.travel.yahoo.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Bollywood news, movie reviews, film trailers and more! Click here. 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://in.rd.yahoo.com/tagline_movies_1/*http://in.movies.yahoo.com/?wm=n/">http://in.rd.yahoo.com/tagline_movies_1/*http://in.movies.yahoo.com/?wm=n/</a>&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6235.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6235.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6235.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
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
