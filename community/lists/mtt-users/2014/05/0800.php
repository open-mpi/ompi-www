<?
$subject_val = "Re: [MTT users] Run MTT with pre-built ompi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 23:46:51 2014" -->
<!-- isoreceived="20140523034651" -->
<!-- sent="Fri, 23 May 2014 12:47:17 +0900" -->
<!-- isosent="20140523034717" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [MTT users] Run MTT with pre-built ompi" -->
<!-- id="537EC4C5.5070506_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3B48FD81-1F18-4BD4-BA66-5B944013D0AC_at_auckland.ac.nz" -->
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
<strong>Subject:</strong> Re: [MTT users] Run MTT with pre-built ompi<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-22 23:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0801.php">Ralph Castain: "Re: [MTT users] Run MTT with pre-built ompi"</a>
<li><strong>Previous message:</strong> <a href="0799.php">Jaison Mulerikkal: "[MTT users] Run MTT with pre-built ompi"</a>
<li><strong>In reply to:</strong> <a href="0799.php">Jaison Mulerikkal: "[MTT users] Run MTT with pre-built ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0801.php">Ralph Castain: "Re: [MTT users] Run MTT with pre-built ompi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>i think you can use
<br>
<p>Module = Noop
<br>
<p>in the get and install phases.
<br>
<p><p>in my understanding, these phases cannot be skipped (otherwise you
<br>
cannot go to the next phase),
<br>
but they can do nothing if there is nothing to do.
<br>
<p>Gilles
<br>
<p>On 2014/05/23 12:14, Jaison Mulerikkal wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am just referring to the following previous query at MTT forums, because I too has a similar requirement. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------
</span><br>
<span class="quotelev1">&gt; I want to skip the MPI Get and Install phases, and simply point MTT to 
</span><br>
<span class="quotelev1">&gt; my pre-built/installed Open MPI. Can this be done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php">http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php</a>
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reply mentioned that this functionality was in your TODO list. Have you implemented it in anyway at all?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are running a HPC cluster and we use easy-build to make our modules (including MPI) available to our users. So we may not want to Get, Install, Build steps at MTT, but the Run section to test the stability of the systems. Is it possible to do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jaison Mulerikkal
</span><br>
<span class="quotelev1">&gt; New Zealand eScience Infrastructure
</span><br>
<span class="quotelev1">&gt; The University of Auckland
</span><br>
<span class="quotelev1">&gt; e: j.mulerikkal_at_[hidden]
</span><br>
<span class="quotelev1">&gt; p: +64 9 923 2194 (internal ext: 82194)
</span><br>
<span class="quotelev1">&gt; w: www.jaison.me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0801.php">Ralph Castain: "Re: [MTT users] Run MTT with pre-built ompi"</a>
<li><strong>Previous message:</strong> <a href="0799.php">Jaison Mulerikkal: "[MTT users] Run MTT with pre-built ompi"</a>
<li><strong>In reply to:</strong> <a href="0799.php">Jaison Mulerikkal: "[MTT users] Run MTT with pre-built ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0801.php">Ralph Castain: "Re: [MTT users] Run MTT with pre-built ompi"</a>
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
