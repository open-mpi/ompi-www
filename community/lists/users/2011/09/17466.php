<?
$subject_val = "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 15:24:36 2011" -->
<!-- isoreceived="20110928192436" -->
<!-- sent="Wed, 28 Sep 2011 21:24:22 +0200" -->
<!-- isosent="20110928192422" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="543A6905-2C42-4301-B394-4A10D8800413_at_staff.uni-marburg.de" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="4E8346BC.4090906_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 15:24:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17467.php">Xin Tong: "[OMPI users] Proper way to stop MPI process"</a>
<li><strong>Previous message:</strong> <a href="17465.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17464.php">Brice Goglin: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 28.09.2011 um 18:09 schrieb Brice Goglin:
<br>
<p><span class="quotelev1">&gt; Le 28/09/2011 17:55, Blosch, Edwin L a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;!-- /* Font Definitions */ @font-face {font-family:Calibri;  
</span><br>
<span class="quotelev2">&gt;&gt; panose-1:2 15 5 2 2 2 4 3 2 4;} /* Style Definitions */  
</span><br>
<span class="quotelev2">&gt;&gt; p.MsoNormal, li.MsoNormal, div.MsoNormal {margin:0in; margin- 
</span><br>
<span class="quotelev2">&gt;&gt; bottom:.0001pt; font-size:11.0pt; font-family:&quot;Calibri&quot;,&quot;sans- 
</span><br>
<span class="quotelev2">&gt;&gt; serif&quot;;} a:link, span.MsoHyperlink {mso-style-priority:99;  
</span><br>
<span class="quotelev2">&gt;&gt; color:blue; text-decoration:underline;} a:visited,  
</span><br>
<span class="quotelev2">&gt;&gt; span.MsoHyperlinkFollowed {mso-style-priority:99; color:purple;  
</span><br>
<span class="quotelev2">&gt;&gt; text-decoration:underline;} span.EmailStyle17 {mso-style- 
</span><br>
<span class="quotelev2">&gt;&gt; type:personal-compose; font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;  
</span><br>
<span class="quotelev2">&gt;&gt; color:windowtext;} .MsoChpDefault {mso-style-type:export-only;}  
</span><br>
<span class="quotelev2">&gt;&gt; @page WordSection1 {size:8.5in 11.0in; margin:1.0in 1.0in 1.0in  
</span><br>
<span class="quotelev2">&gt;&gt; 1.0in;} div.WordSection1 {page:WordSection1;} --&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting some undefined references in building OpenMPI 1.5.4  
</span><br>
<span class="quotelev2">&gt;&gt; and I would like to know how to work around it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The errors look like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.a(topology-linux.o): In function `hwloc_linux_alloc_membind':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x1da): undefined reference to `mbind'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x213): undefined reference to `mbind'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.a(topology-linux.o): In function  
</span><br>
<span class="quotelev2">&gt;&gt; `hwloc_linux_set_area_membind':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x414): undefined reference to `mbind'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c :(.text+0x46c): undefined reference to `mbind'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.a(topology-linux.o): In function  
</span><br>
<span class="quotelev2">&gt;&gt; `hwloc_linux_get_thisthread_membind':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x4ff): undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `get_mempolicy'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x5ff): undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `get_mempolicy'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.a(topology-linux.o): In function  
</span><br>
<span class="quotelev2">&gt;&gt; `hwloc_linux_set_thisthread_membind':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x7b5): undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `migrate_pages'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x7e9): undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `set_mempolicy'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x831): undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `set_mempolicy'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [main] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; S ome  configure output that is probably relevant:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking numaif.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking numaif.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking for numaif.h... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking for set_mempolicy in -lnuma... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking for mbind in -lnuma... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking for migrate_pages in -lnuma... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The FAQ says that I should have to give &#150;with-libnuma explicitly,  
</span><br>
<span class="quotelev2">&gt;&gt; but I did not do that.   Is there a problem with configure? Or the  
</span><br>
<span class="quotelev2">&gt;&gt; FAQ?  Or perhaps the system has a configuration peculiarity?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last time somebody complained about this, he was trying to build  
</span><br>
<span class="quotelev1">&gt; fully-static binaries but libnuma was only available as dynamic  
</span><br>
<span class="quotelev1">&gt; libs. Configure only checks for dynamic libs. So it thinks libnuma  
</span><br>
<span class="quotelev1">&gt; is available while the required static libnuma was actually missing,  
</span><br>
<span class="quotelev1">&gt; causing make to fail later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How did you configure and build, what's your distro, and do you have  
</span><br>
<span class="quotelev1">&gt; libnume static/dynamic installed ?
</span><br>
<p>There is also a FAQ if you need fully static binaries:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps</a>
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="17467.php">Xin Tong: "[OMPI users] Proper way to stop MPI process"</a>
<li><strong>Previous message:</strong> <a href="17465.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17464.php">Brice Goglin: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
