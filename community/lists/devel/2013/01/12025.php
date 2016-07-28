<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 13:55:02 2013" -->
<!-- isoreceived="20130128185502" -->
<!-- sent="Mon, 28 Jan 2013 11:54:58 -0700" -->
<!-- isosent="20130128185458" -->
<!-- name="David Beer" -->
<!-- email="dbeer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script" -->
<!-- id="CAFUQeZ0RGV_OdZaSd64F2=+PpD2ijdAhNOonD=EPAzKXrcb0Rw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD317D7D67_at_EXMB01.srn.sandia.gov" -->
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
<strong>From:</strong> David Beer (<em>dbeer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 13:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12026.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Previous message:</strong> <a href="12024.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12022.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12026.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Reply:</strong> <a href="12026.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Reply:</strong> <a href="12027.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 28, 2013 at 10:54 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We assume that we can link lib torque into a C application (if this is a
</span><br>
<span class="quotelev1">&gt; problem for you, it's a huge deal breaker for us, since OMPI is a C
</span><br>
<span class="quotelev1">&gt; library).  What does config.log say when checking for tm_init?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Brian,
<br>
<p>libtorque can still be linked in to C applications. In testing with a
<br>
simple C program, we did have to add
<br>
<p>void *__gxx_personality_v0;
<br>
<p>to the C program. Here is the error reported by the configure script:
<br>
<p>checking for pbs-config... /usr/local/bin/pbs-config
<br>
checking tm.h usability... yes
<br>
checking tm.h presence... yes
<br>
checking for tm.h... yes
<br>
checking for tm_finalize... no
<br>
looking for header without includes
<br>
checking tm.h usability... yes
<br>
checking tm.h presence... yes
<br>
checking for tm.h... yes
<br>
looking for library without search path
<br>
checking for tm_init in -lpbs... no
<br>
looking for library in lib
<br>
checking for tm_init in -lpbs... no
<br>
looking for library in lib64
<br>
checking for tm_init in -lpbs... no
<br>
looking for library without search path
<br>
checking for tm_init in -ltorque... no
<br>
looking for library in lib
<br>
checking for tm_init in -ltorque... no
<br>
looking for library in lib64
<br>
checking for tm_init in -ltorque... no
<br>
configure: error: TM support requested but not found.  Aborting
<br>
<p>Oddly enough, if you have already configured with an older version of
<br>
TORQUE, you can build open-mpi with TORQUE 4.2 installed, so it can find
<br>
the function definitions when compiling, its just for some reason it
<br>
doesn't find them in the configure script. This is why I think that
<br>
something in the configure script is assuming that libtorque was compiled
<br>
with gcc.
<br>
<p>David
<br>
<p><p><span class="quotelev1">&gt; --
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
<p><p><p><pre>
-- 
David Beer | Senior Software Engineer
Adaptive Computing
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12025/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12026.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Previous message:</strong> <a href="12024.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12022.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12026.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Reply:</strong> <a href="12026.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Reply:</strong> <a href="12027.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
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
