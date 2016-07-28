<?
$subject_val = "Re: [OMPI users] Building Open MPI with LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 11:55:45 2013" -->
<!-- isoreceived="20130507155545" -->
<!-- sent="Tue, 7 May 2013 08:55:37 -0700" -->
<!-- isosent="20130507155537" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building Open MPI with LSF" -->
<!-- id="99D1E6D4-F87B-4BD4-93D1-514EE1362BDD_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL2K=Q9CD2JsDjo2xypmLCtz_zKsS1c+rrT9DWbxiaarQTdQHw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building Open MPI with LSF<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 11:55:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21876.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21874.php">Ralph Castain: "Re: [OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>In reply to:</strong> <a href="21863.php">Andrey Rubshtein: "[OMPI users] Building Open MPI with LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21879.php">Paul Kapinos: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>Reply:</strong> <a href="21879.php">Paul Kapinos: "Re: [OMPI users] Building Open MPI with LSF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2013, at 7:09 AM, Andrey Rubshtein &lt;andrey.rubshtein_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to install OpenMPI on LSF cluster in our organization. I am not proficient with Linux/LSF, and some of my questions might be from lack of understanding of the system, and not related to OpenMPI directly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So far I found these bits of information on the site of OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. OpenMPI support for 1.6 seems to be broken, and was fixed maybe in 1.7?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2013/03/21640.php">http://www.open-mpi.org/community/lists/users/2013/03/21640.php</a>
</span><br>
<p>It is indeed fixed in 1.7 - we will look at backporting a fix to 1.6
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. The installation on LSF is supposed to be easy:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-rte-lsf">http://www.open-mpi.org/faq/?category=building#build-rte-lsf</a>
</span><br>
<p>So I'm told - I've never tried it myself.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My questions are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. What is the latest stable version that is known to integrate in a native way with LSF?
</span><br>
<p>I presume the 1.4 series
<br>
<p><span class="quotelev1">&gt; 2. When building with LSF support, in what directory should I run the ./configure and makes scripts from? Should I be logined into one of the hosts of LSF cluster? 
</span><br>
<p>You need to be on a node where LSF libraries have been installed so we can link against them
<br>
<p><span class="quotelev1">&gt; 3. Will these scripts copy openmpi shared libraries into each host on the cluster? 
</span><br>
<p>No - you either have to install to an NFS mount, or copy them yourself
<br>
<p><span class="quotelev1">&gt; 4. Where will the mpi compiler be after the installation? What include pathes and libraries should I add to my C++ project to compile a simple MPI program?
</span><br>
<p>It will be in whatever prefix you give to configure, under the &quot;bin&quot; subdirectory. There will be a wrapper compiler that you can use to build your program
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrey
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21876.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21874.php">Ralph Castain: "Re: [OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>In reply to:</strong> <a href="21863.php">Andrey Rubshtein: "[OMPI users] Building Open MPI with LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21879.php">Paul Kapinos: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>Reply:</strong> <a href="21879.php">Paul Kapinos: "Re: [OMPI users] Building Open MPI with LSF"</a>
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
