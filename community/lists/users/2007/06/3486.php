<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 14:30:42 2007" -->
<!-- isoreceived="20070613183042" -->
<!-- sent="Wed, 13 Jun 2007 11:29:25 -0700" -->
<!-- isosent="20070613182925" -->
<!-- name="Julian Cummings" -->
<!-- email="cummings_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ error: static object marked for destruction	more than once" -->
<!-- id="1181759365.5894.32.camel_at_valhalla.cacr.caltech.edu" -->
<!-- inreplyto="6BC81678-0CD3-4208-BF95-09EB98D90EDB_at_cisco.com" -->
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
<strong>From:</strong> Julian Cummings (<em>cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 14:29:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Reply:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks, I will give that a try and repost to the list if problems
<br>
remain.  I am kind of surprised that compiling with -fpic is not done by
<br>
default on a Linux system, since OpenMPI builds as a set of shared
<br>
library .so files.  Normally you want position-independent code in such
<br>
libraries so that, among other reasons, static objects are handled
<br>
properly.
<br>
<p>Regards, Julian C.
<br>
<p><p>On Wed, 2007-06-13 at 11:59 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Bummer -- I thought I had replied to that one (perhaps I'm thinking  
</span><br>
<span class="quotelev1">&gt; that multiple people have posted this and I've replied to some but  
</span><br>
<span class="quotelev1">&gt; not all of them).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock is correct that using &quot;-fpic&quot; to compile your MPI C++ app  
</span><br>
<span class="quotelev1">&gt; should solve the problem.  This information *used* to be posted on  
</span><br>
<span class="quotelev1">&gt; the PGI web site in their support section, but I can't seem to find  
</span><br>
<span class="quotelev1">&gt; it any more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I understand the issue, it's a PGI compiler issue, not an  
</span><br>
<span class="quotelev1">&gt; OMPI issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 12:38 AM, Julian Cummings wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is a follow up to a message originally posted by Andrew J  
</span><br>
<span class="quotelev2">&gt; &gt; Caird on
</span><br>
<span class="quotelev2">&gt; &gt; 2006-08-16.  No one ever replied to Andrew's message, and I am  
</span><br>
<span class="quotelev2">&gt; &gt; experiencing
</span><br>
<span class="quotelev2">&gt; &gt; exactly the same problem with a more recent version of OpenMPI  
</span><br>
<span class="quotelev2">&gt; &gt; (1.2.1) and
</span><br>
<span class="quotelev2">&gt; &gt; the PGI compiler (7.0).  Essentially, the problem is that if you  
</span><br>
<span class="quotelev2">&gt; &gt; link an MPI
</span><br>
<span class="quotelev2">&gt; &gt; application against the mpi_cxx library, at run time you will get a  
</span><br>
<span class="quotelev2">&gt; &gt; failure
</span><br>
<span class="quotelev2">&gt; &gt; with each process giving the following message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; C++ runtime abort: internal error: static object marked for  
</span><br>
<span class="quotelev2">&gt; &gt; destruction more
</span><br>
<span class="quotelev2">&gt; &gt; than once
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If your MPI application does not utilize the MPI C++ bindings, you  
</span><br>
<span class="quotelev2">&gt; &gt; can link
</span><br>
<span class="quotelev2">&gt; &gt; without this library and the runtime errors will go away.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since this problem was reported long ago and no one ever replied to  
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; report, I would assume that this is a bug either in the mpi_cxx  
</span><br>
<span class="quotelev2">&gt; &gt; library or
</span><br>
<span class="quotelev2">&gt; &gt; in the way it is built under the PGI compiler.  I could not figure  
</span><br>
<span class="quotelev2">&gt; &gt; out how
</span><br>
<span class="quotelev2">&gt; &gt; to submit a bug report to the open-mpi bug tracking system, so I  
</span><br>
<span class="quotelev2">&gt; &gt; hope that
</span><br>
<span class="quotelev2">&gt; &gt; this message to the users list will suffice.  I am attaching my  
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info
</span><br>
<span class="quotelev2">&gt; &gt; --all output to this message.  I am running on a Myrinet-based Linux
</span><br>
<span class="quotelev2">&gt; &gt; cluster, but the particulars are not relevant for this problem.   
</span><br>
<span class="quotelev2">&gt; &gt; You can
</span><br>
<span class="quotelev2">&gt; &gt; replicate the problem with any trivial MPI application code, such  
</span><br>
<span class="quotelev2">&gt; &gt; as the
</span><br>
<span class="quotelev2">&gt; &gt; standard &quot;hello&quot; program using the standard C interface.  I am  
</span><br>
<span class="quotelev2">&gt; &gt; attaching my
</span><br>
<span class="quotelev2">&gt; &gt; hello.c source code.  Compile with &quot;mpicxx -o hello hello.c&quot; and  
</span><br>
<span class="quotelev2">&gt; &gt; run with
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpirun -np 1 ./hello&quot;.  The runtime error disappears if you  
</span><br>
<span class="quotelev2">&gt; &gt; compile with
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpicc -o hello hello.c&quot; to avoid linking against the mpi_cxx library.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please let me know if there is any fix available for this problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards, Julian C.
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ompi_info.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;hello.c&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Dr. Julian C. Cummings                       E-mail: cummings_at_[hidden]
California Institute of Technology           Phone:  626-395-2543
1200 E. California Blvd., Mail Code 158-79   Fax:    626-584-5917
Pasadena, CA 91125                           Office: 125 Powell-Booth
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Reply:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
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
