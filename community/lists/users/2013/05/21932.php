<?
$subject_val = "Re: [OMPI users] opening a file with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 17 09:08:27 2013" -->
<!-- isoreceived="20130517130827" -->
<!-- sent="Fri, 17 May 2013 15:08:22 +0200" -->
<!-- isosent="20130517130822" -->
<!-- name="Peter van Hoof" -->
<!-- email="p.vanhoof_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opening a file with MPI-IO" -->
<!-- id="51962BC6.4000901_at_oma.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5196297E.10508_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] opening a file with MPI-IO<br>
<strong>From:</strong> Peter van Hoof (<em>p.vanhoof_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-17 09:08:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21933.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Previous message:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22341.php">Rob Latham: "Re: [OMPI users] opening a file with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgar,
<br>
<p><span class="quotelev1">&gt; wow, lets try again in english :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you maybe detail more precisely what scenario you are particularly
</span><br>
<span class="quotelev1">&gt; worried about? I would think that the return code of the operation
</span><br>
<span class="quotelev1">&gt; is reliable on whether opening the file was successful or not (i.e.
</span><br>
<span class="quotelev1">&gt; MPI_SUCCESS vs. anything else).
</span><br>
<p>If I open the file for reading, I need to know if the file existed or 
<br>
not, and therefore if the call to MPI::File::Open() was successful or 
<br>
not. There may also be more obscure reasons for a call to fail I 
<br>
guess.... The C++ versions of the library do not return any success or 
<br>
failure codes. The return value is the file handle. But as far as I can 
<br>
see there is no method in MPI::File to determine if the handle is valid 
<br>
or not.
<br>
<p><p>Cheers,
<br>
<p>Peter.
<br>
<p><span class="quotelev1">&gt; On 5/17/2013 7:55 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; can you maybe detail more precisely what scenario you are particularly
</span><br>
<span class="quotelev2">&gt;&gt; worried about? I would think that the return code of the operation
</span><br>
<span class="quotelev2">&gt;&gt; should be reliable on whether opening the file successful or (i.e.
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SUCCESS vs. anything else).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/17/2013 4:00 AM, Peter van Hoof wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been banging my head against the wall for some time to find a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reliable and portable way to determine if a call to MPI::File::Open()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was successful or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me give some background information first. We develop an open-source
</span><br>
<span class="quotelev3">&gt;&gt;&gt; astrophysical modeling code called Cloudy. This is used by many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scientists on a variety of platforms. We obviously have no control over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI version that is installed on that platform, it may not even be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-MPI. So what we need is a method that is supported by all MPI distros.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our code is written in C++, so we use the C++ version of the MPI and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI-IO libraries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Peter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Peter van Hoof
Royal Observatory of Belgium
Ringlaan 3
1180 Brussel
Belgium
<a href="http://homepage.oma.be/pvh">http://homepage.oma.be/pvh</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21933.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Previous message:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22341.php">Rob Latham: "Re: [OMPI users] opening a file with MPI-IO"</a>
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
