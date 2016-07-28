<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 06:13:16 2015" -->
<!-- isoreceived="20151027101316" -->
<!-- sent="Tue, 27 Oct 2015 12:17:30 +0100" -->
<!-- isosent="20151027111730" -->
<!-- name="Ond&#197;&#153;ej Vl&#196;&#141;ek" -->
<!-- email="vlcek_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="4383824.Wk3qf1FasN_at_linux-4dxf" -->
<!-- charset="utf-8" -->
<!-- inreplyto="562F3A2A.102_at_inria.fr" -->
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
<strong>From:</strong> Ond&#197;&#153;ej Vl&#196;&#141;ek (<em>vlcek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 07:17:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1207.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1205.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1201.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
&nbsp;&nbsp;I just tested the patch, which AMD did on our system. After that hwloc red 
<br>
the information about HW configuration correctly. I asked AMD developers to 
<br>
inform me as soon as they push the fix. So far I did nor receive info... I may 
<br>
urge them after week or so.
<br>
<p>Ondrej
<br>
<p><span class="quotelev1">&gt; On Tuesday, October 27, 2015 09:47:38 Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; Good to know. Did you see/test the kernel patch yet? If possible, could
</span><br>
<span class="quotelev1">&gt; you send a link to the kernel commit when it appears upstream?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 27/10/2015 09:21, Ond&#197;&#153;ej Vl&#196;&#141;ek a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Dear Brice,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   thank you for your answer. Neither upgrade of BIOS nor using the latest
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc helped. Finaly we contacted AMD and they fixed a bug in kernel which
</span><br>
<span class="quotelev2">&gt; &gt; coused problems with 12-core AMD processors. They should upstream the
</span><br>
<span class="quotelev2">&gt; &gt; changes to kernel.org soon, so that all the distros (Centos,RHEL,SUSE
</span><br>
<span class="quotelev2">&gt; &gt; etc.) can pick them up automatically as they create their respective next
</span><br>
<span class="quotelev2">&gt; &gt; releases.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ondrej
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Monday, August 24, 2015 15:32:12 Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc 1.7 is very old, I am surprised CentOS 7 doesn't have anything
</span><br>
<span class="quotelev3">&gt; &gt;&gt; more recent, maybe not in &quot;standard&quot; packages?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Anyway, this is a very common error on AMD 6200 and 6300 machines.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; See
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_erro">http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_erro</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; r
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Assuming you kernel isn't too old (CentOS7 should be fine), you should
</span><br>
<span class="quotelev3">&gt; &gt;&gt; try to upgrade the BIOS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 24/08/2015 15:06, Ond&#197;&#153;ej Vl&#196;&#141;ek a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   I have encountered hwloc error for the AMD Opteron 6300 processor
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   family
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (see below). I am using hwloc.x86_64 v1.7-3.el7, which is its latest
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; version available in standard packages for CentOS 7. Is this something,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; what has been already encountered and fixed in newer versions of hwloc?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Output from the hwloc-gather-topology.sh script is attached.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ondrej Vlcek
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ hwloc-info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ************************************************************************
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; **
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ** * Hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; system. *
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; * object (L3 cpuset 0x000003f0) intersection without inclusion!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; * Error occurred in topology.c line 753
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ************************************************************************
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; **
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ** depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  depth 1:       4 Socket (type #3)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   depth 2:      8 NUMANode (type #2)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    depth 3:     8 L3Cache (type #4)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     depth 4:    24 L2Cache (type #4)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      depth 5:   24 L1iCache (type #4)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       depth 6:  48 L1dCache (type #4)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        depth 7: 48 Core (type #5)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         depth 8:        48 PU (type #6)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Special depth -3:       4 Bridge (type #9)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Special depth -4:       6 PCI Device (type #10)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Special depth -5:       9 OS Device (type #11)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1207.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1205.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1201.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
