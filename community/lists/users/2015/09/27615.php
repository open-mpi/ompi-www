<?
$subject_val = "Re: [OMPI users] Problem with using MPI in a Python extension";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 15:49:54 2015" -->
<!-- isoreceived="20150917194954" -->
<!-- sent="Thu, 17 Sep 2015 19:49:34 +0000" -->
<!-- isosent="20150917194934" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with using MPI in a Python extension" -->
<!-- id="CAAbhqc4YtYFYX1PgdGQc9VVXFxPHjjet3g-sgK5hN6Or6wLHOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="75862B73-AE6D-4C58-8AE8-4AA95E097C15_at_gmail.com" -->
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
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 15:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27616.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27614.php">Lisandro Dalcin: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27613.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27642.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27642.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depending on your exact usage and the data contained in the CDF-5 files I
<br>
guess netcdf4-python would work for reading the files (if the underlying
<br>
netcdf library is compiled against pnetcdf).
<br>
However, this will not immediately yield mpi features. Yet, reading
<br>
different segments of files could be made embarrassingly parallel which
<br>
might be OK, but defeat the purpose of your code.
<br>
<p>Yet, why do you use python on-top of C++ for data comparison? If you need
<br>
the speed (you mentioned speed) why not do it in simple C++, C or fortran?
<br>
Data comparison can be made extremely easy in fortran. Sorry for the blurp
<br>
;)
<br>
<p><p>2015-09-17 18:20 GMT+00:00 Joel Hermanns &lt;joel.hermanns_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; FYI, you can also see what they have done in mpi4py to by-pass this
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you elaborate on this or give me some pointer to other resources?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would actually highly recommend you to use mpi4py rather than
</span><br>
<span class="quotelev1">&gt; implementing this from scratch your-self ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I fully agree that it is a bad idea to implement something like mpi4py
</span><br>
<span class="quotelev1">&gt; from scratch. However, I don&#226;&#128;&#153;t plan to do this and
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m not sure if mpi4py will work for us. This problem initially came up
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; working on a thin layer around some parallel netcdf functionality to
</span><br>
<span class="quotelev1">&gt; request and compare data from NetCDF (especially CDF-5) files.
</span><br>
<span class="quotelev1">&gt; It is written in C++ due to performance reasons. Additionally, I&#226;&#128;&#153;m not
</span><br>
<span class="quotelev1">&gt; sure if there is any up-to-date python library for parallel netcdf that
</span><br>
<span class="quotelev1">&gt; could help here.
</span><br>
<span class="quotelev1">&gt; As you can see, we don&#226;&#128;&#153;t need full blown MPI features in python, and so
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m not really sure if mpi4py can help us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please correct me if I&#226;&#128;&#153;m wrong!
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27613.php">http://www.open-mpi.org/community/lists/users/2015/09/27613.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27615/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27616.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27614.php">Lisandro Dalcin: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27613.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27642.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27642.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
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
