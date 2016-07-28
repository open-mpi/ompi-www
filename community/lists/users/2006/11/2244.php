<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 00:18:31 2006" -->
<!-- isoreceived="20061129051831" -->
<!-- sent="Tue, 28 Nov 2006 22:17:59 -0700" -->
<!-- isosent="20061129051759" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="3D1254A7-7FAB-451A-8C47-5DB2431DB4AF_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0611281709v1dbdc587pd69a219f580eacb3_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 00:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2243.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would be difficult to do well without some MPI help, in my  
<br>
opinion.  You certainly could use the Linux processor affinity API  
<br>
directly in the MPI application.  But how would the process know  
<br>
which core to bind to?  It could wait until after MPI_INIT and call  
<br>
MPI_COMM_RANK, but MPI implementations allocate many of their  
<br>
resources during MPI_INIT, so there's high potential of the resources  
<br>
(ie, memory) ending up associated with a different processor than the  
<br>
one the process gets pinned to.  That isn't a big deal on Intel  
<br>
machines, but is a major issue for AMD processors.
<br>
<p>Just my $0.02, anyway.
<br>
<p>Brian
<br>
<p>On Nov 28, 2006, at 6:09 PM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; Jeff (and everybody else)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, pardon me if this is a stupid comment; I am learning  
</span><br>
<span class="quotelev1">&gt; the nuts-and-bolts of parallel programming; but my comment is as  
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why can't this be done *outside* openMPI, by calling Linux's  
</span><br>
<span class="quotelev1">&gt; processor affinity APIs directly? I work with a blade server kind  
</span><br>
<span class="quotelev1">&gt; of archirecture, where each blade has 12 CPUs. I use pthread within  
</span><br>
<span class="quotelev1">&gt; each blade and MPI to talk across blades. I use the Linux system  
</span><br>
<span class="quotelev1">&gt; calls to attach a thread to a specific CPU and it seems to work  
</span><br>
<span class="quotelev1">&gt; fine. The only drawback is: it makes the code unportable to a  
</span><br>
<span class="quotelev1">&gt; different OS. But even if you implemented paffinity within openMPI,  
</span><br>
<span class="quotelev1">&gt; the code will still be unportable to a different implementation of  
</span><br>
<span class="quotelev1">&gt; MPI, which, as is, it is not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps to the original poster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/28/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: There is not,  
</span><br>
<span class="quotelev1">&gt; right now.  However, this is mainly because back when I
</span><br>
<span class="quotelev1">&gt; implemented the processor affinity stuff in OMPI (well over a year
</span><br>
<span class="quotelev1">&gt; ago), no one had any opinions on exactly what interface to expose to
</span><br>
<span class="quotelev1">&gt; the use.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So right now there's only this lame control:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not opposed to implementing more flexible processor affinity
</span><br>
<span class="quotelev1">&gt; controls, but the Big Discussion over the past few months is exactly
</span><br>
<span class="quotelev1">&gt; how to expose it to the end user.  There have been several formats
</span><br>
<span class="quotelev1">&gt; proposed (e.g., mpirun command line parameters, magic MPI attributes,
</span><br>
<span class="quotelev1">&gt; MCA parameters, etc.), but nothing that has been &quot;good&quot; and &quot;right&quot;.
</span><br>
<span class="quotelev1">&gt; So here's the time to chime in -- anyone have any opinions on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2006, at 9:31 AM, shaposh_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev2">&gt; &gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev2">&gt; &gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev2">&gt; &gt; only a single core on each CPU.
</span><br>
<span class="quotelev2">&gt; &gt; Thank You.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Alexander Shaposhnikov
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev1">&gt; He therefore created communists.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2243.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
