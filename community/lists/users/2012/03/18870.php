<?
$subject_val = "Re: [OMPI users] mpicc command not found - Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 09:55:35 2012" -->
<!-- isoreceived="20120329135535" -->
<!-- sent="Thu, 29 Mar 2012 09:55:24 -0400" -->
<!-- isosent="20120329135524" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc command not found - Fedora" -->
<!-- id="8899B286-6450-4163-B7E3-F9F51D9E9B23_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAE9jjJ4ZrYJj_p4tv1ZqrbRHqzAKvtesxEG9+JfhxAAv66Bg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc command not found - Fedora<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 09:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18871.php">Tom Bryan: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18869.php">Hameed Alzahrani: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18874.php">Amit Ghadge: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Reply:</strong> <a href="18874.php">Amit Ghadge: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know exactly how Fedora packages Open MPI, but I've seen some distributions separate Open MPI into a base package and a &quot;devel&quot; package.  And mpicc (and some friends) are split off into that &quot;devel&quot; package.
<br>
<p>The rationale is that you don't need mpicc (and friends) to *run* Open MPI applications -- you only need mpicc (etc.) to *develop* Open MPI applications.
<br>
<p>Poke around and see if you can find a devel-like Open MPI package in Fedora.
<br>
<p><p>On Mar 29, 2012, at 7:45 AM, Rohan Deshpande wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed mpi successfully on fedora using yum install openmpi openmpi-devel openmpi-libs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have also added /usr/lib/openmpi/bin to PATH and LD_LIBRARY_PATH variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I try to complie my program using mpicc hello.c or /usr/lib/openmpi/bin/mpicc hello.c I get error saying mpicc: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked the contents of /user/lib/openmpi/bin and there is no mpicc... here is the screenshot 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     &lt;image.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; The add/remove  programs show the installation details 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  &lt;image.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried re installing but same thing happened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone help me to solve this issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ROHAN 
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
<li><strong>Next message:</strong> <a href="18871.php">Tom Bryan: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18869.php">Hameed Alzahrani: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18874.php">Amit Ghadge: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Reply:</strong> <a href="18874.php">Amit Ghadge: "Re: [OMPI users] mpicc command not found - Fedora"</a>
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
