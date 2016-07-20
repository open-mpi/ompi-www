<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 18:29:47 2015" -->
<!-- isoreceived="20151027222947" -->
<!-- sent="Tue, 27 Oct 2015 23:29:47 +0100" -->
<!-- isosent="20151027222947" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="1D997965-F19E-4112-B5BC-FEBB86EBC527_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="562F92AA.90805_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family<br>
<strong>From:</strong> Fabian Wein (<em>fabian.wein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 18:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I want to try that tomorrow. Currently I use open-mpi, ist it worth buying intel-mpi? We have the C++ and Fortran compilers but not mpi up to now.
<br>
<p>Might it be an issue with the hwloc xml file? My idea is, if it would help to temporarily install an older kernel - 3.2 was reported to work - and get the xml file for exactly my machine by a working hwloc. Might this work?
<br>
<p>Anyway, I&#146;ll learn from experimenting with this stuff and will understand our machine better which might end up in more efficient coding in the end :)
<br>
<p>Thanks for your help Brice and to the community,
<br>
<p>Fabian
<br>
<p><p><span class="quotelev1">&gt; Am 27.10.2015 um 16:05 schrieb Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess the next step would be to look at how these tasks are placed on
</span><br>
<span class="quotelev1">&gt; the machine. There are 8 NUMA nodes on the machine. Maybe 9 is where it
</span><br>
<span class="quotelev1">&gt; starts placing a second task per NUMA node?
</span><br>
<span class="quotelev1">&gt; For OMPI, --report-bindings may help. I am not sure about MPICH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 27/10/2015 15:52, Fabian Wein a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 10/27/2015 03:42 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess the problem is that your OMPI uses an old hwloc internally. That
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one may be too old to understand recent XML exports.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try replacing &quot;Package&quot; with &quot;Socket&quot; everywhere in the XML file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks! That was it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I now get almost perfectly reproducible results.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; np  speedup
</span><br>
<span class="quotelev2">&gt;&gt; 1 1.0
</span><br>
<span class="quotelev2">&gt;&gt; 2 1.99
</span><br>
<span class="quotelev2">&gt;&gt; 3 2.98
</span><br>
<span class="quotelev2">&gt;&gt; 4 3.98
</span><br>
<span class="quotelev2">&gt;&gt; 5 4.89
</span><br>
<span class="quotelev2">&gt;&gt; 6 5.9
</span><br>
<span class="quotelev2">&gt;&gt; 7 6.89
</span><br>
<span class="quotelev2">&gt;&gt; 8 7.87
</span><br>
<span class="quotelev2">&gt;&gt; 9 5.44
</span><br>
<span class="quotelev2">&gt;&gt; 10 6.04
</span><br>
<span class="quotelev2">&gt;&gt; 11 6.55
</span><br>
<span class="quotelev2">&gt;&gt; 12 7.0
</span><br>
<span class="quotelev2">&gt;&gt; 13 7.75
</span><br>
<span class="quotelev2">&gt;&gt; 14 8.24
</span><br>
<span class="quotelev2">&gt;&gt; 15 8.41
</span><br>
<span class="quotelev2">&gt;&gt; 16 9.4
</span><br>
<span class="quotelev2">&gt;&gt; 17 7.33
</span><br>
<span class="quotelev2">&gt;&gt; 18 7.16
</span><br>
<span class="quotelev2">&gt;&gt; 19 8.05
</span><br>
<span class="quotelev2">&gt;&gt; 20 8.39
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What still puzzles me is the almost perfect speedup up to eight and
</span><br>
<span class="quotelev2">&gt;&gt; than the
</span><br>
<span class="quotelev2">&gt;&gt; drop down. But for the beginning 8 is already good!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fabian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
