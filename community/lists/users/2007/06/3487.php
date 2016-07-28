<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 14:39:33 2007" -->
<!-- isoreceived="20070613183933" -->
<!-- sent="Wed, 13 Jun 2007 14:39:17 -0400" -->
<!-- isosent="20070613183917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ error: static object marked for destruction more than once" -->
<!-- id="2005EA90-78FB-4B0B-9C0C-2399FA518950_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1181759365.5894.32.camel_at_valhalla.cacr.caltech.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 14:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3488.php">Corwell, Sophia: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>Previous message:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>In reply to:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Reply:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 2:29 PM, Julian Cummings wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, I will give that a try and repost to the list if problems
</span><br>
<span class="quotelev1">&gt; remain.  I am kind of surprised that compiling with -fpic is not  
</span><br>
<span class="quotelev1">&gt; done by
</span><br>
<span class="quotelev1">&gt; default on a Linux system, since OpenMPI builds as a set of shared
</span><br>
<span class="quotelev1">&gt; library .so files.  Normally you want position-independent code in  
</span><br>
<span class="quotelev1">&gt; such
</span><br>
<span class="quotelev1">&gt; libraries so that, among other reasons, static objects are handled
</span><br>
<span class="quotelev1">&gt; properly.
</span><br>
<p>It's actually more subtle than that.  Open MPI itself is compiled  
<br>
with -fpic if necessary, of course.
<br>
<p>It's *your* code that has to be compiled with -fpic, which is odd /  
<br>
unusual / a bug in pgCC.
<br>
<p><span class="quotelev1">&gt; Regards, Julian C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2007-06-13 at 11:59 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Bummer -- I thought I had replied to that one (perhaps I'm thinking
</span><br>
<span class="quotelev2">&gt;&gt; that multiple people have posted this and I've replied to some but
</span><br>
<span class="quotelev2">&gt;&gt; not all of them).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock is correct that using &quot;-fpic&quot; to compile your MPI C++ app
</span><br>
<span class="quotelev2">&gt;&gt; should solve the problem.  This information *used* to be posted on
</span><br>
<span class="quotelev2">&gt;&gt; the PGI web site in their support section, but I can't seem to find
</span><br>
<span class="quotelev2">&gt;&gt; it any more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I understand the issue, it's a PGI compiler issue, not an
</span><br>
<span class="quotelev2">&gt;&gt; OMPI issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 13, 2007, at 12:38 AM, Julian Cummings wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a follow up to a message originally posted by Andrew J
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Caird on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2006-08-16.  No one ever replied to Andrew's message, and I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; experiencing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly the same problem with a more recent version of OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1.2.1) and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the PGI compiler (7.0).  Essentially, the problem is that if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link an MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application against the mpi_cxx library, at run time you will get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with each process giving the following message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C++ runtime abort: internal error: static object marked for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; destruction more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than once
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If your MPI application does not utilize the MPI C++ bindings, you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without this library and the runtime errors will go away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since this problem was reported long ago and no one ever replied to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; report, I would assume that this is a bug either in the mpi_cxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the way it is built under the PGI compiler.  I could not figure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to submit a bug report to the open-mpi bug tracking system, so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hope that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this message to the users list will suffice.  I am attaching my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --all output to this message.  I am running on a Myrinet-based Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster, but the particulars are not relevant for this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replicate the problem with any trivial MPI application code, such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standard &quot;hello&quot; program using the standard C interface.  I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attaching my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello.c source code.  Compile with &quot;mpicxx -o hello hello.c&quot; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpirun -np 1 ./hello&quot;.  The runtime error disappears if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpicc -o hello hello.c&quot; to avoid linking against the mpi_cxx  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know if there is any fix available for this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards, Julian C.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ompi_info.txt.gz&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;hello.c&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Julian C. Cummings                       E-mail:  
</span><br>
<span class="quotelev1">&gt; cummings_at_[hidden]
</span><br>
<span class="quotelev1">&gt; California Institute of Technology           Phone:  626-395-2543
</span><br>
<span class="quotelev1">&gt; 1200 E. California Blvd., Mail Code 158-79   Fax:    626-584-5917
</span><br>
<span class="quotelev1">&gt; Pasadena, CA 91125                           Office: 125 Powell-Booth
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3488.php">Corwell, Sophia: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>Previous message:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>In reply to:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Reply:</strong> <a href="3489.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
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
