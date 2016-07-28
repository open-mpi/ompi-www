<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 28 10:10:02 2006" -->
<!-- isoreceived="20060128151002" -->
<!-- sent="Sat, 28 Jan 2006 10:09:55 -0500" -->
<!-- isosent="20060128150955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] a familiar problem?" -->
<!-- id="BCE125C4-5E39-41CE-B713-41A1DAE47784_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1138408039.8800.16.camel_at_fir.reachone.com" -->
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
<strong>Date:</strong> 2006-01-28 10:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
<li><strong>Previous message:</strong> <a href="0534.php">Jeff Squyres: "Re: [O-MPI users] libtool error"</a>
<li><strong>In reply to:</strong> <a href="0533.php">Tom Rosmond: "[O-MPI users] a familiar problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0536.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
<li><strong>Reply:</strong> <a href="0536.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 27, 2006, at 7:27 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; system, so I am unfamiliar with its details.  Rather than go  
</span><br>
<span class="quotelev1">&gt; through the
</span><br>
<span class="quotelev1">&gt; laborious process of rebuilding the system with Fedora, I would  
</span><br>
<span class="quotelev1">&gt; like to
</span><br>
<span class="quotelev1">&gt; get a definative answer on how to prevent this problem (i.e. avoid
</span><br>
<span class="quotelev1">&gt; having ssh ask for a password, and why is orted not found, when it is
</span><br>
<span class="quotelev1">&gt; clearly in my path)
</span><br>
<p>This looks like it might be an ssh issue.  You probably need to setup  
<br>
your ssh keys so that you are not prompted for a password upon  
<br>
logins.  Check out this FAQ entry:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
<br>
<p>As for the PATH issue, check out these FAQ entries:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>
<p>Let me know if this helps.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
<li><strong>Previous message:</strong> <a href="0534.php">Jeff Squyres: "Re: [O-MPI users] libtool error"</a>
<li><strong>In reply to:</strong> <a href="0533.php">Tom Rosmond: "[O-MPI users] a familiar problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0536.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
<li><strong>Reply:</strong> <a href="0536.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
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
