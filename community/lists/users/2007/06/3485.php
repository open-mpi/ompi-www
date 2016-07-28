<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 11:59:27 2007" -->
<!-- isoreceived="20070613155927" -->
<!-- sent="Wed, 13 Jun 2007 11:59:09 -0400" -->
<!-- isosent="20070613155909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ error: static object marked for destruction more than once" -->
<!-- id="6BC81678-0CD3-4208-BF95-09EB98D90EDB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="005a01c7ad74$bb8d26f0$6401a8c0_at_JULES" -->
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
<strong>Date:</strong> 2007-06-13 11:59:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Previous message:</strong> <a href="3484.php">Brock Palen: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3481.php">Julian Cummings: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Reply:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bummer -- I thought I had replied to that one (perhaps I'm thinking  
<br>
that multiple people have posted this and I've replied to some but  
<br>
not all of them).
<br>
<p>Brock is correct that using &quot;-fpic&quot; to compile your MPI C++ app  
<br>
should solve the problem.  This information *used* to be posted on  
<br>
the PGI web site in their support section, but I can't seem to find  
<br>
it any more.
<br>
<p>As far as I understand the issue, it's a PGI compiler issue, not an  
<br>
OMPI issue.
<br>
<p><p><p>On Jun 13, 2007, at 12:38 AM, Julian Cummings wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a follow up to a message originally posted by Andrew J  
</span><br>
<span class="quotelev1">&gt; Caird on
</span><br>
<span class="quotelev1">&gt; 2006-08-16.  No one ever replied to Andrew's message, and I am  
</span><br>
<span class="quotelev1">&gt; experiencing
</span><br>
<span class="quotelev1">&gt; exactly the same problem with a more recent version of OpenMPI  
</span><br>
<span class="quotelev1">&gt; (1.2.1) and
</span><br>
<span class="quotelev1">&gt; the PGI compiler (7.0).  Essentially, the problem is that if you  
</span><br>
<span class="quotelev1">&gt; link an MPI
</span><br>
<span class="quotelev1">&gt; application against the mpi_cxx library, at run time you will get a  
</span><br>
<span class="quotelev1">&gt; failure
</span><br>
<span class="quotelev1">&gt; with each process giving the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C++ runtime abort: internal error: static object marked for  
</span><br>
<span class="quotelev1">&gt; destruction more
</span><br>
<span class="quotelev1">&gt; than once
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your MPI application does not utilize the MPI C++ bindings, you  
</span><br>
<span class="quotelev1">&gt; can link
</span><br>
<span class="quotelev1">&gt; without this library and the runtime errors will go away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since this problem was reported long ago and no one ever replied to  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; report, I would assume that this is a bug either in the mpi_cxx  
</span><br>
<span class="quotelev1">&gt; library or
</span><br>
<span class="quotelev1">&gt; in the way it is built under the PGI compiler.  I could not figure  
</span><br>
<span class="quotelev1">&gt; out how
</span><br>
<span class="quotelev1">&gt; to submit a bug report to the open-mpi bug tracking system, so I  
</span><br>
<span class="quotelev1">&gt; hope that
</span><br>
<span class="quotelev1">&gt; this message to the users list will suffice.  I am attaching my  
</span><br>
<span class="quotelev1">&gt; ompi_info
</span><br>
<span class="quotelev1">&gt; --all output to this message.  I am running on a Myrinet-based Linux
</span><br>
<span class="quotelev1">&gt; cluster, but the particulars are not relevant for this problem.   
</span><br>
<span class="quotelev1">&gt; You can
</span><br>
<span class="quotelev1">&gt; replicate the problem with any trivial MPI application code, such  
</span><br>
<span class="quotelev1">&gt; as the
</span><br>
<span class="quotelev1">&gt; standard &quot;hello&quot; program using the standard C interface.  I am  
</span><br>
<span class="quotelev1">&gt; attaching my
</span><br>
<span class="quotelev1">&gt; hello.c source code.  Compile with &quot;mpicxx -o hello hello.c&quot; and  
</span><br>
<span class="quotelev1">&gt; run with
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np 1 ./hello&quot;.  The runtime error disappears if you  
</span><br>
<span class="quotelev1">&gt; compile with
</span><br>
<span class="quotelev1">&gt; &quot;mpicc -o hello hello.c&quot; to avoid linking against the mpi_cxx library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if there is any fix available for this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, Julian C.
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;hello.c&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Previous message:</strong> <a href="3484.php">Brock Palen: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3481.php">Julian Cummings: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>Reply:</strong> <a href="3486.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
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
