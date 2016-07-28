<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 29 18:56:12 2006" -->
<!-- isoreceived="20060929225612" -->
<!-- sent="Fri, 29 Sep 2006 23:56:06 +0100" -->
<!-- isosent="20060929225606" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using both 64 and 32 bit mpi" -->
<!-- id="f058a9c30609291556t5faf1642vca36142d40ecd5ac_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1159470238.28535.15.camel_at_modeler.srrc.ars.usda.gov" -->
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
<strong>From:</strong> Miguel Figueiredo Mascarenhas Sousa Filipe (<em>miguel.filipe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-29 18:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1911.php">Lisandro Dalcin: "[OMPI users] problem with MPI_[Pack|Unpack]_external"</a>
<li><strong>Previous message:</strong> <a href="1909.php">Josh Durham: "[OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>In reply to:</strong> <a href="1902.php">Glenn Johnson: "[OMPI users] using both 64 and 32 bit mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p><p>On 9/28/06, Glenn Johnson &lt;gjohnson_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have an 8-way AMD64 system. I built a 64 bit open-mpi-1.1
</span><br>
<span class="quotelev1">&gt; implementation and then compiled software to use it. That all works
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition, I have a 32 bit binary program (Schrodinger Jaguar) that I
</span><br>
<span class="quotelev1">&gt; would like to run on this machine with mpi. Schrodinger provides source
</span><br>
<span class="quotelev1">&gt; code to build an mpi compatibility layer. This compatibility layer
</span><br>
<span class="quotelev1">&gt; allows jaguar to use a different mpi implementation than that which the
</span><br>
<span class="quotelev1">&gt; software was compiled with. I do not want to give up the 64 bit open-mpi
</span><br>
<span class="quotelev1">&gt; that I already have and am using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my questions are:
</span><br>
<span class="quotelev1">&gt;      1. Can I build/install a 32 bit version of open-mpi even though I
</span><br>
<span class="quotelev1">&gt;         already have a 64 bit version installed?
</span><br>
<span class="quotelev1">&gt;      2. What &quot;tricks&quot; might I need to do to make sure a program calls
</span><br>
<span class="quotelev1">&gt;         the correct version of mpi (32 or 64 bit)?
</span><br>
<span class="quotelev1">&gt;      3. Would I do better considering running jaguar in a 32 bit chroot
</span><br>
<span class="quotelev1">&gt;         environment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm a simple user who is using openmpi in 32bit and 64bits on a amd64
<br>
linux, on a 64bit sistem. But I also have openmpi and mpich2 in a
<br>
32bit chroot.
<br>
<p>I've installed openmpi 32bit in /opt/openmpi-1.1.1-32bits (amd64 is
<br>
installed in /opt/openmpi-1.1.1-amd64) .. and its easy to change
<br>
between the two.. either with symlinks, PATHs or scripts.. to use one
<br>
.. or the other.
<br>
<p>the chroot was a lot more trouble, and I did it because I wasn't being
<br>
able to compile openmpi (1.0 at the time) in 32bit mode on my 64bit
<br>
system.
<br>
<p><span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Glenn Johnson &lt;gjohnson_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; USDA, ARS, SRRC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Miguel Sousa Filipe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1911.php">Lisandro Dalcin: "[OMPI users] problem with MPI_[Pack|Unpack]_external"</a>
<li><strong>Previous message:</strong> <a href="1909.php">Josh Durham: "[OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>In reply to:</strong> <a href="1902.php">Glenn Johnson: "[OMPI users] using both 64 and 32 bit mpi"</a>
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
