<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 15:30:11 2014" -->
<!-- isoreceived="20140228203011" -->
<!-- sent="Fri, 28 Feb 2014 15:30:10 -0500" -->
<!-- isosent="20140228203010" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="5310F1D2.9050908_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="531049A6.7090405_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 15:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23724.php">Reuti: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23722.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23714.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23725.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23725.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/28/2014 03:32 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 28/02/2014 02:48, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Remember, hwloc doesn't actually &quot;sense&quot; hardware - it just parses files in the /proc area. So if something is garbled in those files, hwloc will report errors. Doesn't mean anything is wrong with the hardware at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the record, that's not really true:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc looks at /sys (and a bit /proc files), but it also uses cpuid
</span><br>
<span class="quotelev1">&gt; instructions. 90% of the times, the former is better because the kernel
</span><br>
<span class="quotelev1">&gt; already took care of cleaning up the hardware mess and reporting
</span><br>
<span class="quotelev1">&gt; useful/correct info in /proc and /sys. Sometimes the kernel is too old
</span><br>
<span class="quotelev1">&gt; and it misses some hardware quirks (like L1i sharing on Gus' machine)
</span><br>
<span class="quotelev1">&gt; causing /sys files to be incompatible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Brice
<br>
<p>The (pdf) output of lstopo shows one L1d (16k) for each core,
<br>
and one L1i (64k) for each *pair* of cores.
<br>
Is this wrong?
<br>
Anything else wrong that reported by by
<br>
<p>Sorry for my ignorance of the specifics of the AMD cache structure.
<br>
BTW, if there are any helpful web links, or references, or graphs
<br>
about the AMD cache structure, I would love to know.
<br>
<p><span class="quotelev1">&gt; In the end, the vast majority of problems come from buggy BIOS, and
</span><br>
<span class="quotelev1">&gt; these cause both cpuid and kernel to report invalid info. Aside of
</span><br>
<span class="quotelev1">&gt; upgrading the BIOS, the only solution there is to replace the topology
</span><br>
<span class="quotelev1">&gt; with a correct XML one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am a bit skeptical that the BIOS is the culprit because I replaced
<br>
two motherboards (node14 and node16), and only node14 doesn't pass
<br>
the hwloc-gather-topology test.
<br>
Just in case, I attach the diagnostic for node16 also,
<br>
if you want to take a look.  :)
<br>
<p>FYI, the two new motherboards (nodes 14 and 16)
<br>
have a *newer* BIOS version (AMI, version 3.5, 11/25/2013)
<br>
then the one in the
<br>
original nodes (node15 below) (AMI, version 3.0, 08/31/2012).
<br>
I even thought of upgrading the old nodes' BIOSes ...
<br>
... but now I am not so sure about this ...  :(
<br>
<p>New motherboards:
<br>
<p>[root_at_node14 ~]# dmidecode -s bios-vendor
<br>
American Megatrends Inc.
<br>
[root_at_node14 ~]# dmidecode -s bios-version
<br>
3.5
<br>
[root_at_node14 ~]# dmidecode -s bios-release-date
<br>
11/25/2013
<br>
<p>**
<br>
<p>[root_at_node16 ~]# dmidecode -s bios-vendor
<br>
American Megatrends Inc.
<br>
[root_at_node16 ~]# dmidecode -s bios-version
<br>
3.5
<br>
[root_at_node16 ~]# dmidecode -s bios-release-date
<br>
11/25/2013
<br>
<p>**
<br>
<p>Original motherboard:
<br>
<p>[root_at_node15 ~]# dmidecode -s bios-vendor
<br>
American Megatrends Inc.
<br>
[root_at_node15 ~]# dmidecode -s bios-version
<br>
3.0
<br>
[root_at_node15 ~]# dmidecode -s bios-release-date
<br>
08/31/2012
<br>
<p>**
<br>
<p>Thanks again for your help and advice.
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23723/node16.output">node16.output</a>
</ul>
<!-- attachment="node16.output" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23723/node16.tar.bz2">node16.tar.bz2</a>
</ul>
<!-- attachment="node16.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23724.php">Reuti: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23722.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23714.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23725.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23725.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
