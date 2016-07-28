<?
$subject_val = "Re: [OMPI users] running openmpi in debug/verbose mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 11:18:11 2012" -->
<!-- isoreceived="20121026151811" -->
<!-- sent="Fri, 26 Oct 2012 11:18:06 -0400" -->
<!-- isosent="20121026151806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi in debug/verbose mode" -->
<!-- id="91F7945D-927C-4DA0-B657-272378C7E2F2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1351191112.79588.YahooMailNeo_at_web111717.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running openmpi in debug/verbose mode<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-26 11:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20550.php">Mathieu Gontier: "[OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20548.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20537.php">Mahmood Naderan: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20551.php">Mahmood Naderan: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI doesn't really do much file IO at all.  We do a little during startup / shutdown, but during the majority of the MPI application run, there's little/no file IO from the MPI layer.
<br>
<p>Note that the above statements assume that you are not using the MPI IO function calls.  If your application is using MPI IO, then of course, Open MPI will do lots of file IO.
<br>
<p>My point: if your application isn't doing MPI IO, then your file IO is likely coming from somewhere other than Open MPI.
<br>
<p><p>On Oct 25, 2012, at 2:51 PM, Mahmood Naderan wrote:
<br>
<p><span class="quotelev1">&gt; I sent a problem to the list but didn't receive any reply. In short, we found 
</span><br>
<span class="quotelev1">&gt; that when we run openmpi+openfoam program on a node (in a diskless cluster), 
</span><br>
<span class="quotelev1">&gt; there is a huge IO operations caused by openmpi. When we run openmpi+openfoam
</span><br>
<span class="quotelev1">&gt; on the server, there is no problem. When we run openfoam directly on the node,
</span><br>
<span class="quotelev1">&gt; there is also no problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I am looking for some verbose/debug outputs from openmpi which 
</span><br>
<span class="quotelev1">&gt; shows the activity of it (in particular IO messages for example opening file1
</span><br>
<span class="quotelev1">&gt; or closing file2...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I extract such messages?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mahmood
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Mahmood Naderan &lt;nt_mahmood_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, October 25, 2012 8:44 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] running openmpi in debug/verbose mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a *ton* of debug output available - would help to know what you are attempting to debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2012, at 11:38 AM, Mahmood Naderan &lt;nt_mahmood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to run openmpi in debug or verbose mode? Is there any log for openmpi run?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mahmood
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20550.php">Mathieu Gontier: "[OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20548.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20537.php">Mahmood Naderan: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20551.php">Mahmood Naderan: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
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
