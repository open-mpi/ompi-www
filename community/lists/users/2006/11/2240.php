<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 20:09:09 2006" -->
<!-- isoreceived="20061129010909" -->
<!-- sent="Tue, 28 Nov 2006 20:09:00 -0500" -->
<!-- isosent="20061129010900" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="f869b68c0611281709v1dbdc587pd69a219f580eacb3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="40CDAEB3-8AB7-41F9-88E2-E8B146298214_at_cisco.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 20:09:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2241.php">shaposh_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff (and everybody else)
<br>
<p>First of all, pardon me if this is a stupid comment; I am learning the
<br>
nuts-and-bolts of parallel programming; but my comment is as follows:
<br>
<p>Why can't this be done *outside* openMPI, by calling Linux's processor
<br>
affinity APIs directly? I work with a blade server kind of archirecture,
<br>
where each blade has 12 CPUs. I use pthread within each blade and MPI to
<br>
talk across blades. I use the Linux system calls to attach a thread to a
<br>
specific CPU and it seems to work fine. The only drawback is: it makes the
<br>
code unportable to a different OS. But even if you implemented paffinity
<br>
within openMPI, the code will still be unportable to a different
<br>
implementation of MPI, which, as is, it is not.
<br>
<p>Hope this helps to the original poster.
<br>
<p>Durga
<br>
<p><p>On 11/28/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is not, right now.  However, this is mainly because back when I
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
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
<p><p><p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2241.php">shaposh_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
