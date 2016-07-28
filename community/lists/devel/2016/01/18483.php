<?
$subject_val = "Re: [OMPI devel] Compilation error on master";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  9 01:51:54 2016" -->
<!-- isoreceived="20160109065154" -->
<!-- sent="Sat, 9 Jan 2016 15:51:53 +0900" -->
<!-- isosent="20160109065153" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compilation error on master" -->
<!-- id="CAAkFZ5sCyUj-wA2JLriwoS_rnejBeKJ2rh2uiiCMBLqX8aEgOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="16A66140-6469-4629-9A34-359F9DAD1FA8_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compilation error on master<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-09 01:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18484.php">Shamis, Pavel: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>Previous message:</strong> <a href="18482.php">Shamis, Pavel: "[OMPI devel] Compilation error on master"</a>
<li><strong>In reply to:</strong> <a href="18482.php">Shamis, Pavel: "[OMPI devel] Compilation error on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18484.php">Shamis, Pavel: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>Reply:</strong> <a href="18484.php">Shamis, Pavel: "Re: [OMPI devel] Compilation error on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is now fixed in master
<br>
<p>Thanks for the report !
<br>
<p>Gilles
<br>
<p>On Saturday, January 9, 2016, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey Folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI master appears to be broken for a non-debug build:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `ompi/build/opal'
</span><br>
<span class="quotelev1">&gt;   CC       runtime/opal_progress.lo
</span><br>
<span class="quotelev1">&gt; ../../opal/runtime/opal_progress.c: In function
</span><br>
<span class="quotelev1">&gt; 'opal_progress_event_users_decrement':
</span><br>
<span class="quotelev1">&gt; ../../opal/runtime/opal_progress.c:249:8: error: 'val' undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt;     if (val &gt;= 0) {
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; ../../opal/runtime/opal_progress.c:249:8: note: each undeclared identifier
</span><br>
<span class="quotelev1">&gt; is reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error was introduced by this commit: commit
</span><br>
<span class="quotelev1">&gt; 64b695669af03ed4544b2a4dbc62cb9e94eb51c9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the code it seems that the non-debug part of the function relies on a
</span><br>
<span class="quotelev1">&gt; variable that is updated only in a debug mode.
</span><br>
<span class="quotelev1">&gt; Since this does not make sense, I would ask somebody that is familiar with
</span><br>
<span class="quotelev1">&gt; this logic to take a look :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18482.php">http://www.open-mpi.org/community/lists/devel/2016/01/18482.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18483/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18484.php">Shamis, Pavel: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>Previous message:</strong> <a href="18482.php">Shamis, Pavel: "[OMPI devel] Compilation error on master"</a>
<li><strong>In reply to:</strong> <a href="18482.php">Shamis, Pavel: "[OMPI devel] Compilation error on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18484.php">Shamis, Pavel: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>Reply:</strong> <a href="18484.php">Shamis, Pavel: "Re: [OMPI devel] Compilation error on master"</a>
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
