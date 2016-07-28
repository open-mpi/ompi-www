<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 14:07:21 2013" -->
<!-- isoreceived="20130128190721" -->
<!-- sent="Mon, 28 Jan 2013 11:07:13 -0800" -->
<!-- isosent="20130128190713" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script" -->
<!-- id="75D61274-9445-4F1C-A9E5-21750F7EE2AD_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFUQeZ0RGV_OdZaSd64F2=+PpD2ijdAhNOonD=EPAzKXrcb0Rw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 14:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12027.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Previous message:</strong> <a href="12025.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>In reply to:</strong> <a href="12025.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12027.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see anything in the config script that checks for gcc - you might take a look at it to check. It's in config/orte_check_tm.m4 on our developer's trunk
<br>
<p>On Jan 28, 2013, at 10:54 AM, David Beer &lt;dbeer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 28, 2013 at 10:54 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We assume that we can link lib torque into a C application (if this is a problem for you, it's a huge deal breaker for us, since OMPI is a C library).  What does config.log say when checking for tm_init?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtorque can still be linked in to C applications. In testing with a simple C program, we did have to add 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void *__gxx_personality_v0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to the C program. Here is the error reported by the configure script:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking for pbs-config... /usr/local/bin/pbs-config
</span><br>
<span class="quotelev1">&gt; checking tm.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking tm.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for tm.h... yes
</span><br>
<span class="quotelev1">&gt; checking for tm_finalize... no
</span><br>
<span class="quotelev1">&gt; looking for header without includes
</span><br>
<span class="quotelev1">&gt; checking tm.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking tm.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for tm.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -lpbs... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -lpbs... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -lpbs... no
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -ltorque... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -ltorque... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -ltorque... no
</span><br>
<span class="quotelev1">&gt; configure: error: TM support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oddly enough, if you have already configured with an older version of TORQUE, you can build open-mpi with TORQUE 4.2 installed, so it can find the function definitions when compiling, its just for some reason it doesn't find them in the configure script. This is why I think that something in the configure script is assuming that libtorque was compiled with gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Beer | Senior Software Engineer
</span><br>
<span class="quotelev1">&gt; Adaptive Computing
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12026/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12027.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Previous message:</strong> <a href="12025.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>In reply to:</strong> <a href="12025.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12027.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
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
