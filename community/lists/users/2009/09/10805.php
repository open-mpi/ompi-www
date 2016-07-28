<?
$subject_val = "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 19:06:51 2009" -->
<!-- isoreceived="20090928230651" -->
<!-- sent="Mon, 28 Sep 2009 19:06:46 -0400" -->
<!-- isosent="20090928230646" -->
<!-- name="Pierre-Olivier Dallaire" -->
<!-- email="pierre-olivier.dallaire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error" -->
<!-- id="A4995EF7-5585-4F63-BEF7-DBFF13D8E4E4_at_videotron.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5F014255-907F-4138-8D60-31BF4C292A4F_at_open-mpi.org" -->
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
<strong>From:</strong> Pierre-Olivier Dallaire (<em>pierre-olivier.dallaire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 19:06:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10806.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Previous message:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>In reply to:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10806.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Reply:</strong> <a href="10806.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This error only comes out when I try to build the fortran wrappers /  
<br>
will not fail if only building with gcc/g++
<br>
<p>I had to included -all_load in several individual Makefile / using the  
<br>
env variable LIBS with ./configure  does not work.
<br>
<p>Thanks !
<br>
<p>PO
<br>
<p>On 2009-09-28, at 6:57 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Nope - I've been running on Snow Leopard almost since the day it  
</span><br>
<span class="quotelev1">&gt; came out without problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Key was that I had to re-install all my 3rd party software (e.g.,  
</span><br>
<span class="quotelev1">&gt; compilers) from Macports or wherever as none of the stuff I had  
</span><br>
<span class="quotelev1">&gt; installed on Leopard would work properly after the upgrade.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Didn't realize that until I found a thread on the Macports list  
</span><br>
<span class="quotelev1">&gt; where it was pointed out that you have to completely reinstall all  
</span><br>
<span class="quotelev1">&gt; such software after every major Mac OSX upgrade (i.e., from Tiger to  
</span><br>
<span class="quotelev1">&gt; Leopard to Snow Leopard).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2009, at 4:42 PM, Pierre-Olivier Dallaire wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when compiling openmpi-1.3.3 with GNU or PGI compilers, the  
</span><br>
<span class="quotelev2">&gt;&gt; following occurs :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ibtool: link: gcc-4.2 -O3 -DNDEBUG -m64 -finline-functions -fno- 
</span><br>
<span class="quotelev2">&gt;&gt; strict-aliasing -fvisibility=hidden -o orte-iof orte-iof.o ../../../ 
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/libopen-rte.a /Users/podallaire/Downloads/openmpi-1.3.3/ 
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev2">&gt;&gt; Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;_orte_iof&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt; _main in orte-iof.o
</span><br>
<span class="quotelev2">&gt;&gt; _abort_exit_callback in orte-iof.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;_orte_routed&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt; _orte_read_hnp_contact_file in libopen-rte.a(hnp_contact.o)
</span><br>
<span class="quotelev2">&gt;&gt; _orte_rml_base_update_contact_info in libopen-rte.a 
</span><br>
<span class="quotelev2">&gt;&gt; (rml_base_contact.o)
</span><br>
<span class="quotelev2">&gt;&gt; _orte_rml_base_update_contact_info in libopen-rte.a 
</span><br>
<span class="quotelev2">&gt;&gt; (rml_base_contact.o)
</span><br>
<span class="quotelev2">&gt;&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [orte-iof] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From the following thread, it seems that an extra linking flag  
</span><br>
<span class="quotelev2">&gt;&gt; shoud be added : -all_load
</span><br>
<span class="quotelev2">&gt;&gt; See : <a href="http://www.pgroup.com/userforum/viewtopic.php?t=1594&amp;sid=a9139f8d260d438afc74b5243e06679a">http://www.pgroup.com/userforum/viewtopic.php?t=1594&amp;sid=a9139f8d260d438afc74b5243e06679a</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anybody else had this problem ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PO
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10805/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10806.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Previous message:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>In reply to:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10806.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Reply:</strong> <a href="10806.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
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
