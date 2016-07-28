<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 08:59:55 2007" -->
<!-- isoreceived="20070514125955" -->
<!-- sent="Mon, 14 May 2007 05:59:41 -0700" -->
<!-- isosent="20070514125941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray" -->
<!-- id="A452BF98-5486-4310-A12F-E4045CF35985_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1626092b0705130514w5fc91e56n9b9e62b23422dbee_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-05-14 08:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3264.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Previous message:</strong> <a href="3262.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>In reply to:</strong> <a href="3260.php">Code Master: "[OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3265.php">Rainer Keller: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Reply:</strong> <a href="3265.php">Rainer Keller: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have a look at MPIP: <a href="http://mpip.sf.net/">http://mpip.sf.net/</a>
<br>
<p>It will give you simple stats on what MPI functions were invoked.   
<br>
Quite handy.
<br>
<p>It doesn't give you stats about the underlying transport, though  
<br>
(E.g., TCP-level stats).  For that, you would need to use PERUSE.   
<br>
Rainer -- can you comment on how much info the tcp BTL reports via  
<br>
PERUSE?
<br>
<p><p>On May 13, 2007, at 5:14 AM, Code Master wrote:
<br>
<p><span class="quotelev1">&gt; How can I profile the communication of MPI library such as number  
</span><br>
<span class="quotelev1">&gt; of messages sent / received, UDP packet requested to receive and  
</span><br>
<span class="quotelev1">&gt; sent and volume of data sent?
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
<li><strong>Next message:</strong> <a href="3264.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Previous message:</strong> <a href="3262.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>In reply to:</strong> <a href="3260.php">Code Master: "[OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3265.php">Rainer Keller: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Reply:</strong> <a href="3265.php">Rainer Keller: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
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
