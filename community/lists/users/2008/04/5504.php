<?
$subject_val = "Re: [OMPI users] Busy waiting [was Re:  (no subject)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 12:14:00 2008" -->
<!-- isoreceived="20080424161400" -->
<!-- sent="Thu, 24 Apr 2008 12:13:44 -0400" -->
<!-- isosent="20080424161344" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Busy waiting [was Re:  (no subject)]" -->
<!-- id="33D22DA8-D7AC-4535-B650-EDA85B468FFF_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080424130912.GQ15077_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI users] Busy waiting [was Re:  (no subject)]<br>
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 12:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5503.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5488.php">Adrian Knoth: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2008, at 9:09 AM, Adrian Knoth wrote:
<br>
<span class="quotelev1">&gt; On Thu, Apr 24, 2008 at 08:25:44AM -0400, Alberto Giannetti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using one of the nodes as a desktop computer. Therefore it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; most important for me that the mpi program is not so greedily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; acquiring cpu time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From a performance/usability stand, you could set interactive
</span><br>
<span class="quotelev2">&gt;&gt; applications on higher priority to guarantee your desktop
</span><br>
<span class="quotelev2">&gt;&gt; applications work as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you really mean is to renice the MPI program to 10 or even 19.
</span><br>
<p>Linux has also a Posix real-time scheduling mode (priocntl).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's usually not a good idea to raise the priority of any program  
</span><br>
<span class="quotelev1">&gt; below
</span><br>
<span class="quotelev1">&gt; 0, as this could lock up your machine (that's why nice-levels below 0
</span><br>
<span class="quotelev1">&gt; are reserved for privileged users (root))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note that lower nice levels actually mean higher priority. Just to
</span><br>
<span class="quotelev1">&gt; avoid confusion. I guess I don't have to mention &quot;man nice&quot; on a
</span><br>
<span class="quotelev1">&gt; technical mailing list.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I suggest you set mpi_yield_when_idle=1 in your mca- 
</span><br>
<span class="quotelev1">&gt; params.conf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5505.php">George Bosilca: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5503.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5488.php">Adrian Knoth: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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
