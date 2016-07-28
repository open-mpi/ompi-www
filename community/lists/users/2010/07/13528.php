<?
$subject_val = "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 23:39:49 2010" -->
<!-- isoreceived="20100708033949" -->
<!-- sent="Wed, 7 Jul 2010 21:39:44 -0600" -->
<!-- isosent="20100708033944" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated" -->
<!-- id="SNT134-w173E7BE8AAF285EE7F3708CBB40_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTinmJ-Gu-qEuu_rL9QcZR2Npf4bWiNSup0n_k8VL_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 23:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13529.php">jody: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13529.php">jody: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Reply:</strong> <a href="13529.php">jody: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks
<br>
Wat if the master has to send and receive large data package ? 
<br>
It has to be splited into multiple parts ? 
<br>
This may increase communication overhead. 
<br>
I can use MPI_datatype to wrap it up as a specific datatype, which can carry the data. What if the data is very large? 1k bytes or 10 kbytes , 100 kbytes ?
<br>
the master need to collect the same datatype from all workers. 
<br>
So, in this way, the master has to set up a data pool to get all data. 
<br>
The master's buffer provided by the MPI may not be large enough to do this. 
<br>
Are there some other ways to do it ? 
<br>
Any help is appreciated. 
<br>
thanks
<br>
Jack
<br>
july 7  2010 
<br>
From: solarbikedz_at_[hidden]
<br>
Date: Wed, 7 Jul 2010 17:32:27 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated
<br>
<p>This error typically occurs when the received message is bigger than the specified buffer size.  You need to narrow your code down to offending receive command to see if this is indeed the case.
<br>
<p><p><p>On Wed, Jul 7, 2010 at 8:42 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p><p><p>Dear All:
<br>
I need to transfer some messages from workers master node on MPI cluster with Open MPI.
<br>
The number of messages is fixed. 
<br>
When I increase the number of worker nodes, i got error: 
<br>
<p><p>------------------------------------------
<br>
terminate called after throwing an instance of 'boost::exception_detail::clone_impl&lt;boost::exception_detail::error_info_injector&lt;boost::mpi::exception&gt; &gt;'
<br>
<p>&nbsp;&nbsp;what():  MPI_Unpack: MPI_ERR_TRUNCATE: message truncated[n231:45873] *** Process received signal ***[n231:45873] Signal: Aborted (6)[n231:45873] Signal code:  (-6)[n231:45873] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
<br>
<p>[n231:45873] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3c50230215][n231:45873] [ 2] /lib64/libc.so.6(abort+0x110) [0x3c50231cc0]
<br>
<p>--------------------------------------------------------------
<br>
<p><p>For 40 workers , it works well. 
<br>
But for 50 workers, it got this error. 
<br>
The largest message size is not more then 72 bytes. 
<br>
<p><p>Any help is appreciated. 
<br>
thanks
<br>
Jack
<br>
July 7 2010 		 	   		  
<br>
The New Busy is not the too busy. Combine all your e-mail accounts with Hotmail. Get busy.
<br>
<p><p><p>_______________________________________________
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
 		 	   		  
_________________________________________________________________
The New Busy is not the too busy. Combine all your e-mail accounts with Hotmail.
<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4">http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13529.php">jody: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13529.php">jody: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Reply:</strong> <a href="13529.php">jody: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
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
