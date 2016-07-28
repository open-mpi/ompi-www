<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct 22 21:54:12 2006" -->
<!-- isoreceived="20061023015412" -->
<!-- sent="Mon, 23 Oct 2006 10:53:15 +0900" -->
<!-- isosent="20061023015315" -->
<!-- name="Tobias Graf" -->
<!-- email="tgraf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with C++ Binding&amp;quot;" -->
<!-- id="453C208B.6030106_at_hydra.t.u-tokyo.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Problem with C++ Binding&amp;quot;" -->
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
<strong>Date:</strong> 2006-10-22 21:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2027.php">Maestas, Christopher Daniel: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>I finally found the time to test the new release of the intel c++ 9.1
<br>
compiler on my system, and unfortunately I have one of those systems
<br>
were it still doesn't seem to be working (Ubuntu 5.10, Intel C/C++
<br>
9.1.044, OpenMPI 1.1.2) :-(
<br>
<p>Anyway I can still use it, by creating a communicator by myself, e.g.:
<br>
MPI::Intracomm com(MPI_COMM_WORLD);
<br>
<p>Best Regards,
<br>
Tobias
<br>
<p><p><span class="quotelev1">&gt; On Oct 16, 2006, at 10:58 AM, Jeff Squyres wrote:
</span><br>
<p><span class="quotelev1">&gt; Correction. :-(
</span><br>
<p><span class="quotelev1">&gt; Upgrading the version of the Intel compiler worked on one platform
</span><br>
<span class="quotelev1">&gt; that I tested on, but not others. So it looks like this is still an
</span><br>
<span class="quotelev1">&gt; open issue.
</span><br>
<p><span class="quotelev1">&gt; On Oct 11, 2006, at 1:46 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tobias / all --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I swear there were further mails about this topic, but perhaps they 
</span><br>
<span class="quotelev2">&gt;&gt; were off-list.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The end result is that this has finally been confirmed as an Intel 
</span><br>
<span class="quotelev2">&gt;&gt; 9.1 C++ compiler bug. I don't know exactly what platforms it occurred
</span><br>
<span class="quotelev2">&gt;&gt; on, but I was eventually able to replicate Tobias' problem on an
</span><br>
<span class="quotelev2">&gt;&gt; EM64T machine running RHEL4U3. The problem was that the compiler was
</span><br>
<span class="quotelev2">&gt;&gt; not initializing some private members of global C++ objects properly
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., the underlying MPI_Comm in MPI::COMM_WORLD).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Intel released a new version of the 9.1 C++ compiler last week (Oct 
</span><br>
<span class="quotelev2">&gt;&gt; 5, 2006, build 44). This new version of the compiler now seems to 
</span><br>
<span class="quotelev2">&gt;&gt; initialize data members properly, and C++ applications (including the
</span><br>
<span class="quotelev2">&gt;&gt; trivial &quot;hello world&quot; that Tobias ran into problems with) seem to be
</span><br>
<span class="quotelev2">&gt;&gt; working fine now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So: please upgrade your version of the Intel compilers if you can.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2027.php">Maestas, Christopher Daniel: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
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
