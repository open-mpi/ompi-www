<?
$subject_val = "Re: [hwloc-devel] hwloc/windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 14:30:19 2012" -->
<!-- isoreceived="20120501183019" -->
<!-- sent="Tue, 01 May 2012 20:30:13 +0200" -->
<!-- isosent="20120501183013" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc/windows" -->
<!-- id="4FA02BB5.3050908_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="08b601cd2798$42f70690$c8e513b0$_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc/windows<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 14:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3062.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Previous message:</strong> <a href="3060.php">Brice Goglin: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="3055.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Of course, we must implement this :)
<br>
But I guess we didn't have the time and/or knowledge so far. Feel free
<br>
to help :)
<br>
<p>Brice
<br>
<p><p><p>Le 01/05/2012 14:45, Hartmut Kaiser a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now that this is resolved, may I ask you to implement hwloc_get_cpubind()
</span><br>
<span class="quotelev1">&gt; for Windows, please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards Hartmut
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; <a href="http://boost-spirit.com">http://boost-spirit.com</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Brice Goglin [mailto:Brice.Goglin_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, May 01, 2012 7:40 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: hartmut.kaiser_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cc: hwloc development
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: hwloc/windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks _very_ much Hartmut for all the testing.
</span><br>
<span class="quotelev2">&gt;&gt; The 32bits output looks broken as expected. Anything containing a bit &gt;=
</span><br>
<span class="quotelev2">&gt;&gt; 32 is invalid. That's why no core &gt;= 32 appears, and no
</span><br>
<span class="quotelev2">&gt;&gt; socket/numanode/cache containing a core &gt;= 32 appears.
</span><br>
<span class="quotelev2">&gt;&gt; The warning means that windows gave us a bitmask that conflicts with
</span><br>
<span class="quotelev2">&gt;&gt; bitmask of other objects. It confirms that windows report wrong
</span><br>
<span class="quotelev2">&gt;&gt; affinities. And it's a good way for us to detect misbehaving operating
</span><br>
<span class="quotelev2">&gt;&gt; systems.
</span><br>
<span class="quotelev2">&gt;&gt; I don't see any obvious way to workaround this problem. I archives all
</span><br>
<span class="quotelev2">&gt;&gt; this in the bug tracker, just in case we ever find a solution. Hopefully
</span><br>
<span class="quotelev2">&gt;&gt; win32 machines with more than 32 cores are very rare.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 29/04/2012 18:59, Hartmut Kaiser a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please see attached the output for 'lstopo-text.exe --of console' (32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 64 bit builds, stdout and stderr). The 64 bit build seems to work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine now. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32 bit build produces the (almost) correct output for the first 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores, which is probably all we can expect to get, but stderr still
</span><br>
<span class="quotelev2">&gt;&gt; shows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev2">&gt;&gt; system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Error occurred in topology.c line 701
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards Hartmut
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://boost-spirit.com">http://boost-spirit.com</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3062.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Previous message:</strong> <a href="3060.php">Brice Goglin: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="3055.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
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
