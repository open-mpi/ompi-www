<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 19:13:51 2006" -->
<!-- isoreceived="20061011231351" -->
<!-- sent="Thu, 12 Oct 2006 08:13:25 +0900" -->
<!-- isosent="20061011231325" -->
<!-- name="Tobias Graf" -->
<!-- email="tgraf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with C++ Binding" -->
<!-- id="452D7A95.2050800_at_hydra.t.u-tokyo.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C151D334.2A479%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Tobias Graf (<em>tgraf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-11 19:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1966.php">amane001: "[OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1964.php">David Gunter: "[OMPI users] Help building static and shared libs at the same time"</a>
<li><strong>In reply to:</strong> <a href="1961.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1989.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>thank you very much for your help. I'm currently downloading the new
<br>
release and I hope I'll be able to test it next week.
<br>
<p>Best Regards, Tobias
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Tobias / all --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I swear there were further mails about this topic, but perhaps they were
</span><br>
<span class="quotelev1">&gt; off-list.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The end result is that this has finally been confirmed as an Intel 9.1 C++
</span><br>
<span class="quotelev1">&gt; compiler bug.  I don't know exactly what platforms it occurred on, but I was
</span><br>
<span class="quotelev1">&gt; eventually able to replicate Tobias' problem on an EM64T machine running
</span><br>
<span class="quotelev1">&gt; RHEL4U3.  The problem was that the compiler was not initializing some
</span><br>
<span class="quotelev1">&gt; private members of global C++ objects properly (e.g., the underlying
</span><br>
<span class="quotelev1">&gt; MPI_Comm in MPI::COMM_WORLD).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel released a new version of the 9.1 C++ compiler last week (Oct 5, 2006,
</span><br>
<span class="quotelev1">&gt; build 44).  This new version of the compiler now seems to initialize data
</span><br>
<span class="quotelev1">&gt; members properly, and C++ applications (including the trivial &quot;hello world&quot;
</span><br>
<span class="quotelev1">&gt; that Tobias ran into problems with) seem to be working fine now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So: please upgrade your version of the Intel compilers if you can.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1966.php">amane001: "[OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1964.php">David Gunter: "[OMPI users] Help building static and shared libs at the same time"</a>
<li><strong>In reply to:</strong> <a href="1961.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1989.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
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
