<?
$subject_val = "Re: [hwloc-devel] hwloc patch suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  5 16:15:17 2013" -->
<!-- isoreceived="20130505201517" -->
<!-- sent="Sun, 05 May 2013 22:15:10 +0200" -->
<!-- isosent="20130505201510" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patch suggestions" -->
<!-- id="5186BDCE.9050406_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5186962D.2070900_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patch suggestions<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-05 16:15:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3684.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3683.php">Pavan Balaji: "[hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I'll apply these.
<br>
<p>But one question: do you still use autogen.sh in MPICH? I assumed
<br>
embedding hwloc.m4 would mean you don't need hwloc's autogen anymore.
<br>
<p>Brice
<br>
<p><p>Le 05/05/2013 19:26, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you be willing to accept the attached two patches into hwloc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first is a code-contribution from IBM and allows no versioning for
</span><br>
<span class="quotelev1">&gt; the hwloc libraries.  This is useful when only the process manager is
</span><br>
<span class="quotelev1">&gt; built with hwloc and not the actual user applications (such as in
</span><br>
<span class="quotelev1">&gt; mpich), so we don't really care about the hwloc library ABI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second is a minor enhancement to autogen.sh, so we can make
</span><br>
<span class="quotelev1">&gt; autogen.sh less verbose based on user settings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither patch changes the default behavior of hwloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3684.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3683.php">Pavan Balaji: "[hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
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
