<?
$subject_val = "Re: [OMPI users] OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 05:07:49 2016" -->
<!-- isoreceived="20160614090749" -->
<!-- sent="Tue, 14 Jun 2016 18:07:42 +0900" -->
<!-- isosent="20160614090742" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
<!-- id="warj39aupi2i4oubcot55x8f.1465895262599_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 05:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29432.php">MM: "[OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29430.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI,
<br>
<p>Unless you provide Open MPI static libraries, you might not be required to rebuild your apps.
<br>
You will likely have to / should rebuild OpenMPI though
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Peter Kjellstr&#195;&#182;m &lt;cap_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;On Mon, 13 Jun 2016 19:04:59 -0400
</span><br>
<span class="quotelev1">&gt;Mehmet Belgin &lt;mehmet.belgin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have not upgraded our OFED stack for a very long time, and still 
</span><br>
<span class="quotelev2">&gt;&gt; running on an ancient version (1.5.4.1, yeah we know). We are now 
</span><br>
<span class="quotelev2">&gt;&gt; considering a big jump from this version to a tested and stable
</span><br>
<span class="quotelev2">&gt;&gt; recent version and would really appreciate any suggestions from the
</span><br>
<span class="quotelev2">&gt;&gt; community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Some thoughts on the subject.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Not installing an external ibstack is quite attractive imo.
</span><br>
<span class="quotelev1">&gt;  RHEL/CentOS stack (not based on any direct OFED version) works fine
</span><br>
<span class="quotelev1">&gt;  for us. It simplifies cluster maintenance (kernel updates etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* If you use an external IB-stack consider the constraints it may put
</span><br>
<span class="quotelev1">&gt;  on your update plans (for example, you want to update to CentOS-7.3
</span><br>
<span class="quotelev1">&gt;  but your OFED only supports 7.2...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Also consider updates for the stack itself wrt. security. Upstream
</span><br>
<span class="quotelev1">&gt;  OFED has been quite good at patching security bus but they DO NOT
</span><br>
<span class="quotelev1">&gt;  maintain older releases (-&gt; you may have to run a nightly build of
</span><br>
<span class="quotelev1">&gt;  latest). Mellanox has patched when poked at but also only for latest
</span><br>
<span class="quotelev1">&gt;  version. Intel does not seem to do security afaict and with a dist
</span><br>
<span class="quotelev1">&gt;  stack it's covered by the normal dist updates.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/Peter K
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29430.php">http://www.open-mpi.org/community/lists/users/2016/06/29430.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29432.php">MM: "[OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29430.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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
