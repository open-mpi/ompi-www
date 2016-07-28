<?
$subject_val = "Re: [hwloc-users] Re :  lstopo on multiple machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 15:53:59 2011" -->
<!-- isoreceived="20110816195359" -->
<!-- sent="Tue, 16 Aug 2011 16:53:49 -0300" -->
<!-- isosent="20110816195349" -->
<!-- name="Marcelo Alaniz" -->
<!-- email="malaniz_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Re :  lstopo on multiple machines" -->
<!-- id="20110816195349.GA5696_at_mhost" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4E4AB012.10103_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Re :  lstopo on multiple machines<br>
<strong>From:</strong> Marcelo Alaniz (<em>malaniz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 15:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0416.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc3 released"</a>
<li><strong>In reply to:</strong> <a href="0415.php">Brice Goglin: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On Tue, Aug 16, 2011 at 07:59:46PM +0200, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Marcelo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Brice, first, thanks for this amazing library.
<br>
The responses are below.
<br>
<p><span class="quotelev1">&gt; Could you describe a bit more what you would like to see? What we're
</span><br>
<span class="quotelev1">&gt; thinking of doing is having something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System #0
</span><br>
<span class="quotelev1">&gt;   Machine #0
</span><br>
<span class="quotelev1">&gt;     Socket #0
</span><br>
<span class="quotelev1">&gt;        ...
</span><br>
<span class="quotelev1">&gt;   Machine #1
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If people discover the network topology too (for instance the hierarchy
</span><br>
<span class="quotelev1">&gt; of switches), we could even have
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System #0
</span><br>
<span class="quotelev1">&gt;   Group0 #0
</span><br>
<span class="quotelev1">&gt;     Group1 #0
</span><br>
<span class="quotelev1">&gt;       Machine #0
</span><br>
<span class="quotelev1">&gt;         ...
</span><br>
<span class="quotelev1">&gt;       Machine #4
</span><br>
<span class="quotelev1">&gt;     Group1 #1
</span><br>
<span class="quotelev1">&gt;       Machine #1
</span><br>
<span class="quotelev1">&gt;       Machine #3
</span><br>
<span class="quotelev1">&gt;   Group0 #1
</span><br>
<span class="quotelev1">&gt;     Group1 #2
</span><br>
<span class="quotelev1">&gt;       Machine #2
</span><br>
<span class="quotelev1">&gt;         ...
</span><br>
<span class="quotelev1">&gt;       Machine #7
</span><br>
<span class="quotelev1">&gt;     Group1 #3
</span><br>
<span class="quotelev1">&gt;       Machine #5
</span><br>
<span class="quotelev1">&gt;       Machine #6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
The problem that i'm trying to resolve it's mapping of cellular
<br>
automata in a cluster multicores.
<br>
The second representation is great if i have the speed of the
<br>
channels, like group1 (1 hop), group0 (2 hops) in a piramid of access.
<br>
Like as type of cache between cores.
<br>
<p>That's because the mainly problem is grouping more communicated tasks
<br>
in the faster communication channels.
<br>
For example, if i have a task0 more communicated with task2 and
<br>
task3, but less communicated with task1, then i'll try to put the
<br>
task0, task2 and task3 on some places (core, thread or machine) with
<br>
faster channel than task1.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second question. How would like this topology to be built? We could have
</span><br>
<span class="quotelev1">&gt; something like this in the API:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* create a topology with only a System object root */
</span><br>
<span class="quotelev1">&gt; hwloc_topology_create_empty()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* load a XML topology and insert it below a given object */
</span><br>
<span class="quotelev1">&gt; hwloc_topology_insert_xml_by_parent()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A new utility would use these to agregate multiple XML topologies. You
</span><br>
<span class="quotelev1">&gt; would have to run lstopo foo.xml on each node and run this new utility
</span><br>
<span class="quotelev1">&gt; to create the global XML topology. Finally, you can run hwloc with the
</span><br>
<span class="quotelev1">&gt; new global topology and do whatever you want.
</span><br>
For my that's fine. Mainly because i will run this on one
<br>
cluster and in a static form. I.e., before the work horse to resolve
<br>
the CA problem, i will autodiscover the architecture of the cluster
<br>
and then will map the tasks in threads, cores and nodes.
<br>
<p>But, for other problems, like tunning on GRIDs maybe you need severals
<br>
Systems ... 
<br>
<p><p>Best!
<br>
Marcelo.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 16/08/2011 16:27, Marcelo Alaniz a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt; &gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice, 
</span><br>
<span class="quotelev2">&gt; &gt; I'm a PhD Student in Argentina (SouthAmerica). Now, i'm focus on
</span><br>
<span class="quotelev2">&gt; &gt; hybrid computing and mapping technics for clusters multicore.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i'm using hwloc to discover the nodes architecture ... the multinode
</span><br>
<span class="quotelev2">&gt; &gt; topology detection will be great for me! because i will try to make
</span><br>
<span class="quotelev2">&gt; &gt; that in the nearless future.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers!
</span><br>
<span class="quotelev2">&gt; &gt; Marcelo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p>- -- 
<br>
Degree Alaniz Marcelo
<br>
Frontend Development 
<br>
HPC PhD Student
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
<p>iEYEARECAAYFAk5Kys0ACgkQ0bw3ME61/hIlhACeOmybpdZ9F85rUAy3YuDIC5Ss
<br>
mecAn2I0BIfWJhDGJv84BunN38K67V92
<br>
=heGT
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0416.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc3 released"</a>
<li><strong>In reply to:</strong> <a href="0415.php">Brice Goglin: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
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
