<?
$subject_val = "Re: [OMPI users] Problem with using MPI in a Python extension";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 03:19:14 2015" -->
<!-- isoreceived="20150921071914" -->
<!-- sent="Mon, 21 Sep 2015 09:19:09 +0200" -->
<!-- isosent="20150921071909" -->
<!-- name="Joel Hermanns" -->
<!-- email="joel.hermanns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with using MPI in a Python extension" -->
<!-- id="6BB5183F-CBD3-40C2-900E-75A2330EB360_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAbhqc4YtYFYX1PgdGQc9VVXFxPHjjet3g-sgK5hN6Or6wLHOQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with using MPI in a Python extension<br>
<strong>From:</strong> Joel Hermanns (<em>joel.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-21 03:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27643.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0	version	but not with 1.8.7 one."</a>
<li><strong>Previous message:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>In reply to:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27610.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The project I&#146;m working on is a larger toolchain (written in Python) to run regression tests. The part that does the data comparison is fairly small. Speed is not crucial but doing the data comparison in python was incredibly slow. So we went with a C++ extension. For everything else python works just fine, though.
<br>
<p>The software that is tested recently switched from netcdf to parallel netcdf. So the extension also needs to switch. 
<br>
I got it working now using the same trick the mpi4py project is using and it works (for now).
<br>
<p>Thanks for your help :)
<br>
<p>Best,
<br>
Joel
<br>
On 17 Sep 2015, at 21:49, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Depending on your exact usage and the data contained in the CDF-5 files I guess netcdf4-python would work for reading the files (if the underlying netcdf library is compiled against pnetcdf).
</span><br>
<span class="quotelev1">&gt; However, this will not immediately yield mpi features. Yet, reading different segments of files could be made embarrassingly parallel which might be OK, but defeat the purpose of your code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yet, why do you use python on-top of C++ for data comparison? If you need the speed (you mentioned speed) why not do it in simple C++, C or fortran?
</span><br>
<span class="quotelev1">&gt; Data comparison can be made extremely easy in fortran. Sorry for the blurp ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-09-17 18:20 GMT+00:00 Joel Hermanns &lt;joel.hermanns_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FYI, you can also see what they have done in mpi4py to by-pass this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you elaborate on this or give me some pointer to other resources?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would actually highly recommend you to use mpi4py rather than implementing this from scratch your-self ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I fully agree that it is a bad idea to implement something like mpi4py from scratch. However, I don&#146;t plan to do this and
</span><br>
<span class="quotelev1">&gt; I&#146;m not sure if mpi4py will work for us. This problem initially came up when
</span><br>
<span class="quotelev1">&gt; working on a thin layer around some parallel netcdf functionality to request and compare data from NetCDF (especially CDF-5) files.
</span><br>
<span class="quotelev1">&gt; It is written in C++ due to performance reasons. Additionally, I&#146;m not sure if there is any up-to-date python library for parallel netcdf that could help here.
</span><br>
<span class="quotelev1">&gt; As you can see, we don&#146;t need full blown MPI features in python, and so I&#146;m not really sure if mpi4py can help us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please correct me if I&#146;m wrong!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Joel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27613.php">http://www.open-mpi.org/community/lists/users/2015/09/27613.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27615.php">http://www.open-mpi.org/community/lists/users/2015/09/27615.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27643.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0	version	but not with 1.8.7 one."</a>
<li><strong>Previous message:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>In reply to:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27610.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
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
