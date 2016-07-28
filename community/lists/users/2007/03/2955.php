<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 14:08:05 2007" -->
<!-- isoreceived="20070330180805" -->
<!-- sent="Fri, 30 Mar 2007 14:03:25 -0400" -->
<!-- isosent="20070330180325" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Getting a core-dump with OpenMPI" -->
<!-- id="85E367A0-3710-4826-91E5-9FDFBCCF18E9_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="696fd4820703300911gf28824fl2fbd5f16d1c3a951_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-30 14:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2956.php">Prakash Velayutham: "[OMPI users] Spawning to processors outside of the process manager assigned	nodes"</a>
<li><strong>Previous message:</strong> <a href="2954.php">Jeff Squyres: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Jeff Stuart: "[OMPI users] Getting a core-dump with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Generating core files is not a feature of Open MPI but of the  
<br>
operating system. Based on the shell script you're using there is a  
<br>
different way to reach this goal. Usually via limit (or ulimit). This  
<br>
webpage can give you more information about this (<a href="http://www.faqs.org/">http://www.faqs.org/</a> 
<br>
faqs/hp/hpux-faq/section-257.html).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 30, 2007, at 12:11 PM, Jeff Stuart wrote:
<br>
<p><span class="quotelev1">&gt; I'm using OpenMPI, and the documentation says that only a totalview
</span><br>
<span class="quotelev1">&gt; style of debugger can be used. With that in mind, all I want to do is
</span><br>
<span class="quotelev1">&gt; get a core-dump when a process crashes. I can then just load the core
</span><br>
<span class="quotelev1">&gt; into GDB. Is there any easy way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried calling signal(SIGSEGV, SIG_DFL); signal(SIGABRT, SIG_DFL); to
</span><br>
<span class="quotelev1">&gt; no avail. All that happens is that I don't get a call stack dump
</span><br>
<span class="quotelev1">&gt; anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Jeff
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2956.php">Prakash Velayutham: "[OMPI users] Spawning to processors outside of the process manager assigned	nodes"</a>
<li><strong>Previous message:</strong> <a href="2954.php">Jeff Squyres: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Jeff Stuart: "[OMPI users] Getting a core-dump with OpenMPI"</a>
<!-- nextthread="start" -->
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
