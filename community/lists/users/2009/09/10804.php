<?
$subject_val = "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 18:57:28 2009" -->
<!-- isoreceived="20090928225728" -->
<!-- sent="Mon, 28 Sep 2009 16:57:20 -0600" -->
<!-- isosent="20090928225720" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error" -->
<!-- id="5F014255-907F-4138-8D60-31BF4C292A4F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="91EB6253-B64A-4885-813D-7C4168D3ACCB_at_videotron.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 18:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10805.php">Pierre-Olivier Dallaire: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Previous message:</strong> <a href="10803.php">Pierre-Olivier Dallaire: "[OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>In reply to:</strong> <a href="10803.php">Pierre-Olivier Dallaire: "[OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10805.php">Pierre-Olivier Dallaire: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Reply:</strong> <a href="10805.php">Pierre-Olivier Dallaire: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope - I've been running on Snow Leopard almost since the day it came  
<br>
out without problem.
<br>
<p>Key was that I had to re-install all my 3rd party software (e.g.,  
<br>
compilers) from Macports or wherever as none of the stuff I had  
<br>
installed on Leopard would work properly after the upgrade.
<br>
<p>Didn't realize that until I found a thread on the Macports list where  
<br>
it was pointed out that you have to completely reinstall all such  
<br>
software after every major Mac OSX upgrade (i.e., from Tiger to  
<br>
Leopard to Snow Leopard).
<br>
<p>On Sep 28, 2009, at 4:42 PM, Pierre-Olivier Dallaire wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when compiling openmpi-1.3.3 with GNU or PGI compilers, the  
</span><br>
<span class="quotelev1">&gt; following occurs :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ibtool: link: gcc-4.2 -O3 -DNDEBUG -m64 -finline-functions -fno- 
</span><br>
<span class="quotelev1">&gt; strict-aliasing -fvisibility=hidden -o orte-iof orte-iof.o ../../../ 
</span><br>
<span class="quotelev1">&gt; orte/.libs/libopen-rte.a /Users/podallaire/Downloads/openmpi-1.3.3/ 
</span><br>
<span class="quotelev1">&gt; opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt; &quot;_orte_iof&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt; _main in orte-iof.o
</span><br>
<span class="quotelev1">&gt; _abort_exit_callback in orte-iof.o
</span><br>
<span class="quotelev1">&gt; &quot;_orte_routed&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt; _orte_read_hnp_contact_file in libopen-rte.a(hnp_contact.o)
</span><br>
<span class="quotelev1">&gt; _orte_rml_base_update_contact_info in libopen-rte.a 
</span><br>
<span class="quotelev1">&gt; (rml_base_contact.o)
</span><br>
<span class="quotelev1">&gt; _orte_rml_base_update_contact_info in libopen-rte.a 
</span><br>
<span class="quotelev1">&gt; (rml_base_contact.o)
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [orte-iof] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the following thread, it seems that an extra linking flag shoud  
</span><br>
<span class="quotelev1">&gt; be added : -all_load
</span><br>
<span class="quotelev1">&gt; See : <a href="http://www.pgroup.com/userforum/viewtopic.php?t=1594&amp;sid=a9139f8d260d438afc74b5243e06679a">http://www.pgroup.com/userforum/viewtopic.php?t=1594&amp;sid=a9139f8d260d438afc74b5243e06679a</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody else had this problem ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PO
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10805.php">Pierre-Olivier Dallaire: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Previous message:</strong> <a href="10803.php">Pierre-Olivier Dallaire: "[OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>In reply to:</strong> <a href="10803.php">Pierre-Olivier Dallaire: "[OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10805.php">Pierre-Olivier Dallaire: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Reply:</strong> <a href="10805.php">Pierre-Olivier Dallaire: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
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
