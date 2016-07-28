<?
$subject_val = "Re: [hwloc-users] wrong os_index on AIX -&gt; please test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 09:48:48 2014" -->
<!-- isoreceived="20141217144848" -->
<!-- sent="Wed, 17 Dec 2014 15:48:44 +0100" -->
<!-- isosent="20141217144844" -->
<!-- name="Hendryk Bockelmann" -->
<!-- email="bockelmann_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] wrong os_index on AIX -&amp;gt; please test" -->
<!-- id="549197CC.3000900_at_dkrz.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54919479.1010307_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] wrong os_index on AIX -&gt; please test<br>
<strong>From:</strong> Hendryk Bockelmann (<em>bockelmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 09:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1138.php">Sergio Manzetti: "[hwloc-users] HWLoc error mesg"</a>
<li><strong>Previous message:</strong> <a href="1136.php">Erik Schnetter: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>In reply to:</strong> <a href="1135.php">Brice Goglin: "[hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Brice,
<br>
<p>k202082_at_blizzard2% uname -a
<br>
AIX blizzard2 1 6 00CBAAC24C00 powerpc AIX
<br>
<p>k202082_at_blizzard2% ./lstopo --version
<br>
lstopo 1.10.0
<br>
<p>k202082_at_blizzard2% ./lstopo - | grep &quot;PU L#0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0
<br>
<p>regards,
<br>
Hendryk
<br>
<p>On 17/12/14 15:34, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am seeing assert failures on AIX 6.1 because our PU os_index is off by
</span><br>
<span class="quotelev1">&gt; one. They go from -1 to 62 instead of 0 to 63.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a comment saying
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* It seems logical processors are numbered from 1 here, while the
</span><br>
<span class="quotelev1">&gt;       * bindprocessor functions numbers them from 0... */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This contradicts the doc of rs_getrad() which says index starts from 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         index
</span><br>
<span class="quotelev1">&gt;              Specifies the index of the system RAD that should be returned from among those at the specified sdl. This parameter
</span><br>
<span class="quotelev1">&gt;              must belong to the [0, rs_numrads(rset, sdl, flags)- 1] interval.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have AIX, could you please run
</span><br>
<span class="quotelev1">&gt;      lstopo - | grep &quot;PU L#0&quot;
</span><br>
<span class="quotelev1">&gt; and report the output as well as you AIX version?
</span><br>
<span class="quotelev1">&gt; If the line is only &quot;PU L#0&quot;, the index is -1 (not displayed), we're
</span><br>
<span class="quotelev1">&gt; buggy (what I see on AIX 6.1).
</span><br>
<span class="quotelev1">&gt; If the line is &quot;PU L#0 P#0&quot;, the index is OK.
</span><br>
<span class="quotelev1">&gt; I hope we won't have different behaviors...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Brice
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1135.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1135.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dr. Hendryk Bockelmann
Wissenschaftliches Rechnen
Abteilung Anwendungen
Deutsches Klimarechenzentrum GmbH (DKRZ)
Bundesstra&#223;e 45 a, D-20146 Hamburg, Germany
Phone: +49 40 460094-144
FAX:   +49 40 460094-270
Email: bockelmann_at_[hidden]
URL:   www.dkrz.de
Gesch&#228;ftsf&#252;hrer: Prof. Dr. Thomas Ludwig
Sitz der Gesellschaft: Hamburg
Amtsgericht Hamburg HRB 39784

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1137/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1138.php">Sergio Manzetti: "[hwloc-users] HWLoc error mesg"</a>
<li><strong>Previous message:</strong> <a href="1136.php">Erik Schnetter: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>In reply to:</strong> <a href="1135.php">Brice Goglin: "[hwloc-users] wrong os_index on AIX -&gt; please test"</a>
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
