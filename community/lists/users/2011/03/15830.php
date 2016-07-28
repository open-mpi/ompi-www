<?
$subject_val = "Re: [OMPI users] Open MPI access the same file in parallel ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 00:08:50 2011" -->
<!-- isoreceived="20110310050850" -->
<!-- sent="Wed, 9 Mar 2011 22:08:44 -0700" -->
<!-- isosent="20110310050844" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI access the same file in parallel ?" -->
<!-- id="SNT134-w65E6799FE6F4130E31EE49CBC80_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTim_r6E_xqL9MVfpFB7y=2Y1xReKHmfLRk5ofZij_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI access the same file in parallel ?<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 00:08:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15831.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15829.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15829.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15831.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Reply:</strong> <a href="15831.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, 
<br>
I only need to read the file. And, all processes only to read the file only once. 
<br>
But, the file is about 200MB. 
<br>
But, my code is C++. 
<br>
Does Open MPI support this ?
<br>
thanks
<br>
<p>From: solarbikedz_at_[hidden]
<br>
Date: Wed, 9 Mar 2011 20:57:03 -0800
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Open MPI access the same file in parallel ?
<br>
<p>Under my programming environment, FORTRAN, it is possible to parallel read (using native read function instead of MPI's parallel read function).  Although you'll run into problem when you try to parallel write to the same file.
<br>
<p><p><p>On Wed, Mar 9, 2011 at 8:45 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p><p><p>Hi, 
<br>
I have a file, which is located in a system folder, which can be accessed by all parallel processes. 
<br>
Does Open MPI allow multi processes to access the same file at the same time ? 
<br>
<p><p>For example, all processes open the file and load data from it at the same time. 
<br>
Any help is really appreciated. 
<br>
thanks
<br>
Jack
<br>
<p><p>Mar 9 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><pre>
-- 
David Zhang
University of California, San Diego
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15831.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15829.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15829.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15831.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Reply:</strong> <a href="15831.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
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
